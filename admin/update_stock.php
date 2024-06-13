<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\P1\customer\bootstrap\bootstrap.min.css">
    <script src="\P1\customer\bootstrap\bootstrap.min.js"></script>
    <link rel="stylesheet" href="\P1\customer\bootstrap\bootstrap-icons-1.11.3\font\bootstrap-icons.css">
    <title>Document</title>
    <style>
        <?php
            include 'nav_css.php';
        ?>

        .titl:hover {
            transform: translateY(-2px);
            text-shadow: 4px 3px 3px black;
            transition: all linear .3s;
        }

        .inp {
            box-shadow: 2px 2px 5px gray;
            transition: all linear .3s;

        }

        .inp:hover {
            transform: translateY(-2px);
            box-shadow: 2px 2px 5px 2px gray;
            transition: all linear .3s;

        }
    </style>
</head>

<body>
    <?php
    // include 'E:\XAMPP\htdocs\P1\customer\normalnav.php';
    include 'admin_navv.php';

    ?>

    <?php

    $con = mysqli_connect('localhost', 'root', '', 'project');
    $id = $_GET['id'];


    $q = mysqli_query($con, "SELECT * FROM `addproduct` WHERE id = '$id';");

    if ($q1 = mysqli_fetch_array($q)) {


    ?>

        <div class="container-fluid">
            <div class="row justify-content-center align-content-center" style="height: 88vh;">
                <form class="col-10" action="" method="post">
                    <h2 class="text-center titl">Update Your Stocks</h2>
                    <label for="name" class="titl">Product Name:</label>
                    <input type="text" class="form-control inp" id="name" name="p_name" value="<?php echo $q1[5] ?>" required><br>
                    <label for="name" class="titl">Purchase Quantity:</label>
                    <input type="text" class="form-control inp" maxlength="5" id="quantity" name="p_qty" oninput="pres()" value="<?php echo $q1[8] ?>" required><br>

                    <label for="name" class="titl">Stock Status:</label>
                    <input type="text" class="form-control inp" id="Status" name="c_num" value="<?php echo $q1[10] ?>" disabled><br>
                    <button type="submit" name="save" class="btn btn-outline-primary px-5 inp">
                        Submit
                    </button>

                </form>
            </div>
        </div>
    <?php
        if (isset($_POST['save'])) {
            $p_name = $_POST['p_name'];
            $p_qty = $_POST['p_qty'];

            $q2 = mysqli_query($con, "UPDATE `addproduct` SET `product_name`= '$p_name',`product_quantity`= '$p_qty' WHERE `id` = $id");
            if ($q2) {
                if ($q1[8] == 0) {
                    mysqli_query($con, "UPDATE `addproduct` SET `product_status`= 'Out Of Stock' WHERE `id` = $id");
                    echo "<script>alert('Successfuly Update Your Stock')</script>";
                } elseif ($q1[8] <= 19) {
                    mysqli_query($con, "UPDATE `addproduct` SET `product_status`= 'Low Quantity' WHERE `id` = $id");
                    echo "<script>alert('Successfuly Update Your Stock')</script>";
                } elseif ($q1[8] >= 20) {
                    mysqli_query($con, "UPDATE `addproduct` SET `product_status`= 'Exellent Stock' WHERE `id` = $id");
                    echo "<script>alert('Successfuly Update Your Stock')</script>";
                }
            } elseif (!$q2) {
                echo "<script>alert('Your Stock is Not Update')</script>";
            }
        }
    }

    ?>

    <script>
        function pres() {
            let data = document.getElementById('quantity');
            data.value = data.value.replace(/[^0-9]/g, '');
            // console.log(data);
        }
    </script>
</body>

</html>