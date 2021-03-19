<?php
    require("basket.php");
    require("adminBase.php");
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon">
    <title>MID's secret</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;500&family=Zilla+Slab:wght@300;400;600&display=swap');
    </style>
</head>
<body>
    

<?php

    if (isset($_SESSION['user_id']) && $_SESSION['user_id']>0){
        require("include/header.html");
        $basket->write();
        echo "<p class='c'>UKUPNO: ".$basket->total()."rsd</p>";
    ?>

        <form action="save_data.php"><input type="submit" class='left' value="SAČUVAJ" /></form>
        <?php
    }else{
    echo "<p class='c'>Neuspešno logovanje.<a href='logIn.php' id='a'>Ulogujte se!</a></p>";
    }
?>
</body>
</html>