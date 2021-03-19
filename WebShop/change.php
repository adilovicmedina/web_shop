<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
    <style>
        .butt{
            margin-top:2em;
            margin-bottom:3em;
            height:50px;
        }

    </style>
</head>
<body>
    <?php
        require "admin.php";

        $id = ($_GET['id'])?? '';
        
        if($id !== ''){
            
            $red = $base->getProduct($id);
            $sta = "update";
        }else{
            $red = ["naziv"=>"", "opis"=>"", "cena"=>0,"slika"=>"","kategorija"=>0,"kolicina"=>0,"popust"=>0];
            $sta = "insert";

        }
    ?>
    

    <form action="admin_f.php" method="POST">
        <input value="<?=$id?>" name="id" type="hidden" />
        <input value="<?=$sta?>" name="sta" type="hidden" />
        <label>Naziv:</label><input value="<?=$red['naziv']?>" type="text" name="naziv" />
        <label>Opis:</label><input value="<?=$red['opis']?>" type="text" name="opis" />
        <label>Cena:</label><input value="<?=$red['cena']?>" type="number" name="cena"  />
        <!-- <label>Slika:</label><input value="<?=$red['slika']?>" type="text" name="slika"  /> -->
        <label> Kategorija:</label><input value="<?=$red['kategorija']?>" type="number" name="kategorija"  />
        <label>Količina:</label><input value="<?=$red['kolicina']?>" type="number" name="kolicina"  />
        <label>Popust:</label><input value="<?=$red['popust']?>" type="number" name="popust"  />
        <div>
        <input name="dugme" type="submit" value="SAČUVAJ" class="butt"/>
        </div>
        </form>
</body>
</html>