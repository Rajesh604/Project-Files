<?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $id1 = $_GET['id1'];
        $id = $_GET['id'];
        $q = mysqli_query($con, "DELETE FROM `add_cart` WHERE `Id` = $id1");
        if ($q) {
            header("location: addtocart.php?id=". $id ."");
        }{
            echo "Not Working";
        }

?>