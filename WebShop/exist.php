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
</head>
<body>
    

<?php

   
    $n=$_POST['user'];
    $p=$_POST['pass'];
    $product= ($_GET['naziv'])?? '';
    $podaci = $base->getProducts($product);

    $user=$base->get_user_id($n,$p);
    if ($user){
        require("include/header.html");
        $_SESSION['user_id']=$user;
            echo "<p class='c'>USPEŠNO LOGOVANJE!</p>";
            if($n=='AdminMedina' && $p=='AdminMedina')
                echo "<p class='c'><a href='admin.php' target='_self' id='a'>ADMIN STRANA</a></p>";
        
    // }else if($n=='AdminMedina' && $p=='AdminMedina') {
    //     echo "<p class='c'>USPEŠNO LOGOVANJE! <a href='admin.php' target='_self' id='a'>ADMIN STRANA</a></p>";
    }else
    echo "<p class='c'>Neuspešno logovanje.<a href='logIn.php' id='a'>Ulogujte se!</a></p>";
?>
</body>
</html>