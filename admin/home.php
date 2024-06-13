<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\P1\bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <script src="\P1\bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="\P1\bootstrap-icons-1.11.3\font\bootstrap-icons.css">
    <title>Document</title>
    <style>
        <?php
            include 'nav_css.php';
        ?>
        
        .box{
            border-radius: 20px;
            box-shadow: 3px 3px 10px 4px gray;
        }

        .btn:hover{
            box-shadow: 3px 3px 5px 4px gray;
            transform: translateY(-4px);
            transition: all linear .15s;
        }

        #orignal1,
        #stock1,
        #stock2 {
            display: none;
        }
    </style>
</head>

<body>

    <?php
    // include 'admin_nav.html';
    include 'admin_navv.php';
    ?>

    <div class="container-fluid">
        <div class="row align-content-center justify-content-center" style="height: 88vh;">
            <div class="col-10 col-md-5 col-lg-4 border border-dark box">
                <ul class="navbar-nav text-center p-2">
                    <li class="nav-item btn btn-outline-primary m-2 btn"><a href="addproduct.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Add Product</a></li>
                    <li class="nav-item btn btn-outline-secondary m-2 btn"><a href="dashboard.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Ordered Dashboard</a></li>
                    <li class="nav-item btn btn-outline-dark m-2" id="orignal"><a href="#" class="nav-link" onclick="stock()">Stock Details</a></li>
                    <li class="nav-item btn btn-outline-dark m-2" id="orignal1"><a href="#" class="nav-link" onclick="stock1()">Stock Details</a></li>
                    <div class="justify-content-center">
                        <li class="border border-dark nav-item btn btn-btn-outline-light col-6 m-2 btn" id="stock1"><a href="instock.php?id=<?php echo $_GET['id'] ?>" class="nav-link">In Stock Detials</a></li>
                        <li class="border border-dark nav-item btn btn-btn-outline-light col-6 m-2 btn" id="stock2"><a href="outstock.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Out Stock Details</a></li>
                    </div>
                    <li class="nav-item btn btn-outline-success m-2 btn"><a href="payment_status.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Payment Status</a></li>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>

<script>
    function clic() {
        document.getElementById('pro').style.display = "flex";
    }

    function cros() {
        document.getElementById('pro').style.display = "none";
    }

    function stock() {
        document.getElementById('stock1').style.display = 'inline-block';
        document.getElementById('stock2').style.display = 'inline-block';
        document.getElementById('orignal').style.display = 'none';
        document.getElementById('orignal1').style.display = 'inline-block';
    }

    function stock1() {
        document.getElementById('stock1').style.display = 'none';
        document.getElementById('stock2').style.display = 'none';
        document.getElementById('orignal').style.display = 'inline-block';
        document.getElementById('orignal1').style.display = 'none';
    }
</script>