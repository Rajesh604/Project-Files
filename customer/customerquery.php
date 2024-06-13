<?php

    $con = mysqli_connect('localhost', 'root', '', 'project');

    if (isset($_REQUEST['savebutton'])) {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $q = mysqli_query($con, "INSERT INTO `customer_detail`(`Name`, `Email`, `Message`) VALUES ('$name','$email','$message')");

        if ($q) {
            echo "<script>alert('We Got Your Message. Our team contact to you very soon')</script>";
            header("location: p1.html?id=". $id ."");
        }else{
            echo "<script>alert('Something Went Wrong Please Try Again')</script>";
        }
    }else{
        echo "<script>alert('Something Went Wrong')</script>";
    }

?>