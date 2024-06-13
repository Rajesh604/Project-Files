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
        
        #box2{
            /* display: none; */
            backdrop-filter: blur(20px);
            border-radius: 10px;
            box-shadow: 2px 2px 5px gray;
        }
    </style>
</head>

<body>
    <?php
    // include 'admin_nav.html';
    include 'admin_navv.php';

    ?>

    <div class="container-fluid py-2">
        <div class="row text-center justify-content-center align-content-center">
            <h1>Customer Order Approval</h1>
        </div>
    </div>

    <?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $id = $_GET['id1'];
        if (!$id) {
            header('location: dashboard.php');
        }
        $q = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `addproduct` WHERE `id` = '$id'"));
        $apid = $q[9];
        $q1 = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `buy_product` WHERE `apid` = '$apid'"));
        // print_r($q1);

    ?>

    <div class="container-fluid">
        <div class="row justify-content-center h-100">
            <div class="position-absolute col-10 col-md-6 more p-3" id="box2">
                <h4 class="text-center p-2 fw-bold">Customer Order Details</h4>
                <label class="form-label fw-bold hov">Product Name:</label><br>
                <p><?php echo $q[5] ?></p>
                <label class="form-label fw-bold hov">Customer Name:</label><br>
                <p><?php echo $q1[2] ?></p>
                <label class="form-label fw-bold hov">Customer Address:</label><br>
                <p><?php echo $q1[3] ?></p>
                <label class="form-label fw-bold hov">Customer Contact Number:</label><br>
                <p>+91 <?php echo $q1[4] ?></p>

                <div class="row justify-content-around my-2">
                    <?php
                    echo '<a href="order_accept_query.php?id1=' . $q1[0] . '&id='. $_GET['id'].'" class="btn btn-outline-success col-5 hov">Order Accept</a>';
                    if ($q1[6] == 'Pending') {
                        echo '<a href="order_reject_query.php?id1=' . $q1[0] . '&id='. $_GET['id'].'" class="btn btn-outline-danger col-5 hov">Order Reject</a>';
                    }
                    ?>
                </div>

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

    function box2() {
        document.getElementById('box2').style.display = "none";
        document.getElementById('box1').style.display = "inline-block";
    }

    function box1() {
        // document.getElementById('box1').style.display = "none";
        document.getElementById('box2').style.display = "inline";
    }
</script>