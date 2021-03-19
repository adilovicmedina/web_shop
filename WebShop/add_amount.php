<?php
    require("basket.php");
    $id=$_GET['id_k'];
    echo $id;
    $basket-> add_amount($id, 1);
    header("Location: basket_table.php");

?>