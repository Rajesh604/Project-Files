<?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $id = $_GET['idd'];
        $cartdata = mysqli_query($con, "SELECT * FROM `addproduct` WHERE `id` = $id");
        $q = mysqli_fetch_array($cartdata);
        $apid = $q[9];
        // print_r($q);
        // $insertq = mysqli_query($con, "INSERT INTO `add_cart`(`Img_name`, `Product_name`, `Product_price`, `Product_description`, `Add_Product_id`) VALUES ('$q[1]','$q[5]','$q[6]','$q[7]', '$apid')");
        // if ($insertq) {
        //     header("location: shoping.php");
        // }elseif(){

        // }
        // else{
        //     echo "Not Insert Successfully";
        // }


        try {
            // Attempt to insert the data
            $insertq = mysqli_query($con, "INSERT INTO `add_cart`(`Img_name`, `Product_name`, `Product_price`, `Product_description`, `Add_Product_id`) VALUES ('$q[1]','$q[5]','$q[6]','$q[7]', '$apid')");
            
            if ($insertq) {
                header("location: shoping.php?id='.$q1[0].'");
            } else {
                echo "Not Insert Successfully";
            }
        } catch (mysqli_sql_exception $e) {
            // Handle duplicate entry error
            if ($e->getCode() == 1062) {
                echo "This item is already in the cart.";
                // echo $e;
            } else {
                echo "Error: " . $e->getMessage();
            }
        }

    ?>