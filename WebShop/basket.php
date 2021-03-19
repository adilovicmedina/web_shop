<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MID's secret</title>
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon"> 
    <link rel="stylesheet" href="style2.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;500&family=Zilla+Slab:wght@300;400;600&display=swap');


        </style>
</head>
<body>
   
    <?php
        class Basket{
            function __construct()
            {
                if(!isset($_SESSION['stavke_korpe']))
                    $_SESSION['stavke_korpe'] = [
                    ];
            }
    
            function add_product_in_basket($id, $kol, $cena, $naziv){
                array_push($_SESSION['stavke_korpe'], 
                    ['id'=>$id, 'naziv'=>$naziv, 'cena'=>$cena, 'kolicina'=>$kol]);
            }
            function change_amount($id, $kol){
                for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
                    if($_SESSION['stavke_korpe'][$i]['id'] === $id)
                       $_SESSION['stavke_korpe'][$i]['kolicina'] = $kol; 
            }
            function add_amount($id, $kol){
                for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
                    if($_SESSION['stavke_korpe'][$i]['id'] === $id)
                       $_SESSION['stavke_korpe'][$i]['kolicina'] += $kol; 
            }
            function delete_product($id){
                for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
                    if($_SESSION['stavke_korpe'][$i]['id'] === $id){
                        array_splice($_SESSION['stavke_korpe'], $i, 1);
                        return;
                    }
            }
            function delete_basket(){
                $_SESSION['stavke_korpe'] = [];
            }
            function __toString()
            {
            return json_encode($_SESSION['stavke_korpe']); 
            }
            function is_t_a_product($id){
                for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
                    if($_SESSION['stavke_korpe'][$i]['id'] === $id)
                        return true;
                }
                return false;
            }
    
            function write(){
                    echo "<table>";
                    echo "<thead>";
                    echo "<tr>";
                    echo "<th>Naziv</th>";
                    echo "<th>Cena</th>";
                    echo "<th>Količina</th>";
                    echo "<th>Ukupno</th>";
                    echo "<th colspan=2>DODATAK</th>";
                    echo "<tr>";
                    echo "</thead>";
                    echo "<tbody>";
                    for($i=0; $i<count($_SESSION['stavke_korpe']); $i++){
                        $u=$_SESSION['stavke_korpe'][$i]['cena']*$_SESSION['stavke_korpe'][$i]['kolicina'];
                        echo "<tr>";
                        echo "<td>".$_SESSION['stavke_korpe'][$i]['naziv']."</td>";
                        echo "<td>".$_SESSION['stavke_korpe'][$i]['cena']."</td>";
                        echo "<td>".$_SESSION['stavke_korpe'][$i]['kolicina']."</td>";
                        echo "<td>$u</td>";
                        echo "<td>";
                        ?>
                        <form action="add_amount.php" method="GET">
                        <input type='hidden' value="<?= $_SESSION['stavke_korpe'][$i]['id'] ?>" name="id_k">
                        <input type="submit" value="DODAJ"/></td>
                        </form>
                        <?php
                        echo "</td>";
                        echo "<td>";
                        ?>
                        <form action="delete_product.php" method="GET">
                        <input type='hidden' value="<?= $_SESSION['stavke_korpe'][$i]['id'] ?>" name="id_p">
                        <input type="submit" value="IZBRIŠI"/></td>
                        </form>
                        <?php
                        echo "</td>";
                        echo "</tr>";
                    }
                        echo "</tbody>";
                        echo "</table>";
                        echo "<br>";
                    ?>
                      <?php
                      
            }
    
            function total(){
                $s=0;
                for($i=0; $i<count($_SESSION['stavke_korpe']); $i++)
                    $s+=($_SESSION['stavke_korpe'][$i]['cena']*$_SESSION['stavke_korpe'][$i]['kolicina']);
               
                return $s;
            }
    
    }
    
        
        $basket = new Basket();
   
    ?>
    
</body>
</html>