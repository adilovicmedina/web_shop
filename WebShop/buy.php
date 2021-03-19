<?php
    require "basket.php";
    require "adminBase.php";
    require("include/header.html");
    
    $id = $_GET['id'];

    if($basket->is_t_a_product($id)){
     
        $basket-> add_amount($id, 1);
    }else{
      
        $p = $base->product_1($id);
        $basket->add_product_in_basket($id, 1, $p['cena'], $p['naziv']);
    }

    $basket->write();
?>
 