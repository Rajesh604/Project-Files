<?php

    $con = mysqli_connect('localhost', 'root', '', 'project');
    $id1 = $_GET['id1'];
    $id = $_GET['id'];
    $q = mysqli_query($con, "UPDATE `buy_product` SET `order_status`= 'Reject' WHERE `id` = '$id1'");
    if ($q) {
        // header('location: dashboard.php');
        header('location: dashboard.php?id='. $id .'');
    }


?>