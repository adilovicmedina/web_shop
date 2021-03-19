<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon"> 
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;500&family=Zilla+Slab:wght@300;400;600&display=swap');
    </style>
</head>
<body>

<?php
    require "admin.php";

    $sta = $_REQUEST['sta'];

    if($sta === 'insert' || $sta === 'update'){
        $naziv = $_POST['naziv'];
        $opis = $_POST['opis'];
        $cena = $_POST['cena'];
        // $slika=$_POST['slika'];
        $kategorija = $_POST['kategorija'];
        $kolicina= $_POST['kolicina'];
        $popust=$_POST['popust'];

    
    }
    if($sta === 'insert'){
        $b = $base->insert_product($naziv,$opis,$cena,$kategorija,$kolicina,$popust);

    }


    if($sta === 'update'){
        $id = $_POST['id'];
        $b = $base->update_product($id,$naziv,$opis,$cena,$kategorija,$kolicina,$popust);

    }

    if($sta === 'delete'){
        $id = $_GET['id'];
        $b = $base-> delete_product($id);
    }


    if($b === false){
        echo "Greska: ".$base->mistake();
     }
   
  
?>
    
    </body>
</html>