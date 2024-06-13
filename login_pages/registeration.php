<?php

    $con = mysqli_connect('localhost', 'root', '', 'project') or die('Something Went Wrong');
    
    if (isset($_REQUEST['save'])) {
        $username = $_POST['u_name'];
        $phonenumber = $_POST['u_number'];
        $Email = $_POST['u_mail'];
        $password = $_POST['u_password'];
        $cpassword = $_POST['uc_password'];
        $s_code = rand(1000,9999);

        
        if ($password == $cpassword) {
            $q = mysqli_query($con, "INSERT INTO `register`(`Name`, `Phone_No`, `Email`, `Passwords`, `Securty_Code`) VALUES ( '$username', '$phonenumber', '$Email', '$password', '$s_code')");

            if ($q) {
                echo "<Script>alert('Succefully Insert')</Script>";
                header('location: login&registerpage.html');
            }
            else{
                echo "<Script>alert('Somthing Went Wrong Try Again')</Script>";
            }
        }
        else{
            echo "<Script>alert('Password Dosn't Match Please Retry Again')</Script>";
        }

    }else{
        echo "<Script>alert('Somthing Went Wrong')</Script>";
    }

?>