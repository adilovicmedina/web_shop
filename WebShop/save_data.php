<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MID's secret</title>
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon"> 
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    
<?php
    require "basket.php";
    require "adminBase.php";
    require("include/header.html");

    $uku = $basket->total();
    echo "<p class='c'>USPEŠNO SAČUVANO!</p>";
    
    $base->save($uku);
    
?>
</body>
</html>
