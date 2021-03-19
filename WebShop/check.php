
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrujte se</title>
    <link rel="stylesheet" href="style2.css">
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon"> 
</head>

<body>
<?php
    require("adminBase.php");
    $ime=$_POST['user'];
    $p1=$_POST['pass1'];
    $p2=$_POST['pass2'];

    function check($ime,$p1,$p2){
        $p=substr($ime, 0,1);
        if ($p1===$p2 && strlen($p1)>=6 && $p==strtoUpper($p) && strlen($ime)>=6)
            return true;
        return false;
    
        }

   $p=check($ime,$p1,$p2);
    if ($p){
        $base->registration($ime,$p1);
        echo "<p class='c'>Uspešno ste se registrovali.</p>";
        require("include/footer.php");
           linkovi(1);
           linkovi(4);
           linkovi(5);

    }else{
        // echo "Greska!";
        echo "<p class='c'>GREŠKA!<a href='signUp.php' id='a'>Pokušajte ponovo</a></p>";
    }

?>
    
    </body>
</html>