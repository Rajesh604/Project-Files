<?php

    $con = mysqli_connect('localhost', 'root', '', 'project');
    $id1 = $_GET['id1'];
    $id = $_GET['id'];
    $q = mysqli_query($con, "DELETE FROM `buy_product` WHERE id = $id1");
    if ($q) {
        header('location: order_status.php?id='. $id .'');
    }
?>            
