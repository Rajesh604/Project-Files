<?php

    $con = mysqli_connect('localhost', 'root', '', 'project') or die('Something Went Wrong');

    $username = $_POST['fuser'];
    $fscode = $_POST['fscode'];
    $fnpass = $_POST['fnpass'];
    $fcpass = $_POST['fcpass'];

    if ($fnpass === $fcpass) {


    $q1 = mysqli_query($con, "SELECT * FROM `admin_login` WHERE email = '$username' and Securty_Code = '$fscode'");
    $q2 = mysqli_query($con, "SELECT * FROM `register` WHERE Email = '$username' and Securty_Code = '$fscode'");

    if ($q1) {
        if ($data = mysqli_fetch_array($q1)) {
            session_start();
            if ($_SESSION['email'] = $data['2'] && $_SESSION['Securty_Code'] = $data['Securty_Code']) {
                $id = $data['id'];
                $q3 = mysqli_query($con, "UPDATE `admin_login` SET `pass`='$fcpass' WHERE `id` = $id");
                if ($q3) {
                    echo "<script>alert('Your Password Has Been Changed')</script>";
                }
            }

        }
        elseif ($data1 = mysqli_fetch_array($q2)) {
            session_start();
            if ($_SESSION['Email'] = $data1['2'] && $_SESSION['Securty_Code'] = $data1['Securty_Code']) {
                $id2 = $data1['Id'];
                $q4 = mysqli_query($con, "UPDATE `register` SET `Passwords`='$fcpass' WHERE `Id` = $id2");
                if ($q4) {
                    echo "<script>alert('Your Password Has Been Changed')</script>";
                    header("location: login&registerpage.html");
                }
                else{
                    echo "<script>alert('Your Password Dosn't Changed Please Try Again')</script>";
                }
            }
            else{
                echo "<script>alert('Wrong Input Please Try Again')</script>";
            }

        }
        else{
            echo "<script>alert('Something Went Wrong Please Try Again')</script>";
        }
    }
    else{
        echo "<script>alert('Something Went Wrong Please Try Again')</script>";
    }
    
}else{
    echo "<script>alert('Password Dosn't Match')</script>";
}

?>