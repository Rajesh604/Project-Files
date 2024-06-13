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

        .more {
            top: 50%;
            transform: translate(0%, -50%);
        }

        #box2 {
            display: none;
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

    <div class="container-fluid">
        <div class="row justify-content-around" style="height: 88vh;">
            <div class="col-12 d-flex justify-content-around">
                <div class="col-5 align-content-center">
                <?php
                    $con = mysqli_connect('localhost', 'root', '', 'project');
                    $totalSales = 0;
                    $q = mysqli_query($con, "SELECT * FROM `buy_product` WHERE order_status = 'Accept'");
                    while ($arry = mysqli_fetch_array($q) ) {
                        // print_r($arry);
                        $q1 = mysqli_query($con, "SELECT * FROM `addproduct` WHERE `add_id` = '$arry[1]'");
                        // print_r($q1);
                        while ( $q2 = mysqli_fetch_array($q1)) {
                        $total = $arry[5]  *  $q2[6];
                        $totalSales += $total;
                    }
                    
                }
                // echo $totalSales;

                ?>
                <h1 class="text-center">Total Sales Amount</h1>
                </div>
                <h1 class="align-content-center bi bi-arrow-right"></h1>

                <div class="col-5 align-content-center">
                <h1 class="text-center"><?php echo $totalSales; ?></h1>
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
</script>