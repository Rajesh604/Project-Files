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
        .navbg {
            background: rgb(2, 0, 36);
            background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(240, 240, 255, 1) 54%, rgba(0, 212, 255, 1) 100%);
        }

        .ad {
            backdrop-filter: blur(1px);
            border-radius: 20px;
            background-color: white;
            display: none;
            box-shadow: inset 0px 0px 3px 1px gray, 2px 2px 3px 1px gray;
            z-index: 10;
        }

        .hov:hover {
            transform: translateY(-2px);
            text-shadow: 4px 3px 3px black;
            transition: all linear .3s;
        }

        body {
            background: #c8e5ff;
            font-family: 'Arial', sans-serif;
        }
        .imag{
            border-radius: 40px;
            transition: all linear .3s;
            cursor: pointer;
        }
        .imag:hover, .btn:hover{
            transform: translateY(-2px);
            filter: drop-shadow(4px 3px 3px gray);
            transition: all linear .3s;
        }
        #box{
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
        }
    </style>
</head>
<body>
    <?php
        include 'E:\XAMPP\htdocs\P1\customer\customer_nav.php';
    ?>


    <?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $id = $_GET['id1'];
        $q = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `add_cart` WHERE `id` = $id "));
        // $q3 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `addproduct` WHERE `id` = '$id';"));
        
        // print_r($q);
        if ($q) {
            $apid = $q[5];
            // echo $apid;
            $q1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `addproduct` WHERE add_id = '$apid';"));
            // print_r($q1);
            if ($q1) {
                
    ?>

        <div class="container-fluid align-content-center" style="height: 88vh;">
            <div class="row justify-content-lg-around flex-column flex-sm-row">
                <img src="/P1/admin/images/<?php echo $q1[1] ?>" class="imag col-10 col-sm-6 p-4" alt="Error">
                <div class="col-10 col-lg-5 p-4">
                    <h3 class="modal-title">Product Name</h3>
                    <h5 class="card-title"><?php echo $q1[5] ?></h5><br>
                    <h4>Product Price </h4>
                    <h5>&#8377;&nbsp;<?php echo $q1[6] ?>.00</h5><br>
                    <h4>Product Descripition</h4>
                    <p class=""><?php echo $q1[7] ?></p>
                    <div class="d-flex justify-content-around mt-lg-5">
                        <?php
                        // echo '<a href="/P1/customer/buyback.php?id='. $q1[0].'" class="col-5 p-3 btn btn-outline-success" name="buy">Buy</a>';

                        echo '<a href="upload_buy.php?id='. $q1[0].'" class="col-5 p-3 btn btn-outline-success" name="buy" onclick="addres()">Buy</a>';

                        echo '<a href="remove.php?id='. $q1[0].'" class="col-5 p-3 btn btn-outline-danger" name="remove">Remove</a>';
                        ?>
                    </div>
                </div>
            </div>

        </div>
<?php
            }
        }

?>
  

    <script>
        
    function clic() {
        document.getElementById('pro').style.display = "flex";
    }
    function cros() {
        document.getElementById('pro').style.display = "none";
    }
    
    </script>
</body>
</html>