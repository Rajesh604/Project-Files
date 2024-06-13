<?php

    $con = mysqli_connect('localhost', 'root', '', 'project') or die('Something Went Wrong');
    $id = $_GET['id'];
    $pass = $_POST['pass'];
    // echo $pass;
    $q = mysqli_query($con, "UPDATE `register` SET `Passwords`='$pass' WHERE `id` = '$id'");
    if($q){
            header('location: p1.php?id='. $id .'');
    }else{
        echo "Your Id Password Doesn't Change Please Try Again";
        echo "<script>setTimeout(location.assign('csetting.php?id=". $id ."'), 5000);</script>";
    }

?>