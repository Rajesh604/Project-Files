<?php

    $con = mysqli_connect('localhost', 'root', '', 'project') or die('Something Went Wrong');
    
    $username = $_POST['lemail'];
    $pass = $_POST['lpass'];
    $lscode = $_POST['lscode'];

    $q = mysqli_query($con, "SELECT * FROM `admin_login` WHERE email = '$username' and pass = '$pass' and Securty_Code = '$lscode'");
    $q2 = mysqli_query($con, "SELECT * FROM `register` WHERE Email = '$username' and Passwords = '$pass' and Securty_Code = '$lscode'");
     

    if ($q) {
        if($data = mysqli_fetch_array($q)){
            session_start();
            $_SESSION['id'] = $data['id'];
            $_SESSION['email'] = $data['email'];
            $_SESSION['pass'] = $data['pass'];
            $_SESSION['Securty_Code'] = $data['Securty_Code'];

            if ($_SESSION['email'] = $data['email'] && $_SESSION['pass'] = $data['pass'] && $_SESSION['Securty_Code'] = $data['Securty_Code']) {
                echo "<script>alert('Working')</script>";
                header("location: /P1/admin/home.php?id=". $data[0]."");
            }
        }
        elseif($q2){
        
            if($data2 = mysqli_fetch_array($q2)){
                session_start();
                $_SESSION['Id'] = $data2['Id'];
                $_SESSION['Email'] = $data2['Email'];
                $_SESSION['Passwords'] = $data2['Passwords'];
                $_SESSION['Securty_Code'] = $data2['Securty_Code'];

                if ($_SESSION['Email'] = $data2['Email'] && $_SESSION['Passwords'] = $data2['Passwords'] && $_SESSION['Securty_Code'] = $data2['Securty_Code']) {

                    echo "<script>alert('Working')</script>";
                    header("location: /P1/customer/p1.php?id=". $data2[0]."");
                }    
            }
            else{
                echo "<script>alert('Not Working')</script>";
            }
        }
        
    }
    else{
        echo "<script>alert('Something Went Wrong Please Try Again')</script>";
    }

?>