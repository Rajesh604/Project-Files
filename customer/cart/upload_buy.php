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
        include 'E:\XAMPP\htdocs\P1\customer\nav_csss.php';
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
    include 'E:\XAMPP\htdocs\P1\customer\customer_nav.php';
    ?>

    <div class="container-fluid">
        <div class="row justify-content-center align-content-center" style="height: 88vh;">
            <form class="col-10" action="" method="post">
                <h2 class="text-center titl">Fill Your Delivery Details</h2>
                <label for="name" class="titl">Name:</label>
                <input type="text" class="form-control inp" id="name" name="c_name" required><br>
                <label for="name" class="titl">Address:</label>
                <input type="text" class="form-control inp" id="address" name="c_address" required><br>
                <label for="name" class="titl">Phone Number:</label>
                <input type="text" maxlength="10" class="form-control inp" oninput="pres()" id="num" name="c_num" required><br>
                <button type="submit" name="save" class="btn btn-outline-primary px-5 inp">
                    Submit
                </button>

            </form>
        </div>
    </div>

    <?php
    $con = mysqli_connect('localhost', 'root', '', 'project');

    $id1 = $_GET['id1'];
    $id = $_GET['id'];
    if (isset($_REQUEST['save'])) {
        $q = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `addproduct` WHERE id = '$id1'"));
        $q1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `register` WHERE id = '$id'"));
        $c_name = $_POST['c_name'];
        $c_address = $_POST['c_address'];
        $c_num = $_POST['c_num'];
        $qty = 1;
        
        if ($q) {
            $q2 = mysqli_query($con, "INSERT INTO `buy_product`(`apid`, `c_name`, `c_address`, `c_num`, `c_quantity`, `c_user`) VALUES ('$q[9]','$c_name','$c_address','$c_num', '$qty', '$q1[3]')");
            if ($q2) {
                // echo "<script>alert('Successfuly Order Your Product')</script>";
                echo "    <script>
            var confir = confirm('Successfuly Order Your Product');
            if (confir) {
                location.assign('/P1/customer/shoping.php?id=". $q1[0] ."');
            }else{
                location.assign('/P1/customer/shoping.php');
            }
        </script>";
            }
        }
    }

    ?>


    <script>
        function pres() {
            let data = document.getElementById('num');
            data.value = data.value.replace(/[^0-9]/g, '');
            // console.log(data);
        }
        function clic() {
        document.getElementById('pro').style.display = "flex";
        }
        function cros() {
            document.getElementById('pro').style.display = "none";
        }
    </script>
</body>

</html>