<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MID's secret</title>
    <link rel = "icon" href =  "photos/parf1.png" 
        type = "image/x-icon"> 
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;500&family=Zilla+Slab:wght@300;400;600&display=swap');
    </style>
   
</head>
<body>
 
<?php
 
        require("include/header.html");
        require("base.php");
        $product->write_one($_GET['id']);
        require("include/footer.php");
        linkovi(4);
        linkovi(5);

       
    ?>
       
</body>
</html>