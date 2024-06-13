<?php

    $con = mysqli_connect('localhost', 'root', '', 'project') or die('Something Went Wrong');
    $id = $_GET['id1'];
    $pass = $_POST['pass'];
    // echo $pass;
    $q = mysqli_query($con, "UPDATE `admin_login` SET `pass`='$pass' WHERE `id` = '$id'");
    if($q){
            header('location: home.php?id='. $id .'');
    }else{
        echo "Your Id Password Doesn't Change Please Try Again";
        echo "<script>setTimeout(location.assign('setting.php?id=". $id ."'), 5000);</script>";
    }

?>