<?php
    require("basket.php");

    $id=$_GET['id_p'];
    $basket->delete_product($id);
    header("Location: basket_table.php");
?>