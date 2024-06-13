<?php

$con = mysqli_connect('localhost', 'root', '', 'project');

if (isset($_FILES['image'])) {

    $id = $_GET['id'];

    $file_name = $_FILES['image']['name'];
    $file_type = $_FILES['image']['type'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pdescription = $_POST['pdescription'];
    $p_quantity = $_POST['pquantity'];
    $apid = 'apid' . rand(00000, 99999);


    if (move_uploaded_file($file_tmp, "images/" . $file_name)) {
        $q = mysqli_query($con, "INSERT INTO `addproduct`(`imgname`, `imgtype`, `imgtmpname`, `imgsize`, `product_name`, `product_price`, `product_description`,`product_quantity`, `add_id`) VALUES ('$file_name','$file_type','$file_tmp','$file_size','$pname','$pprice','$pdescription', $p_quantity ,'$apid')");


        if ($q) {
                header("location: addproduct.php?id=". $id."");
        }
    }
}
?>