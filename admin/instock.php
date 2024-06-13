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

    <div class="container-fluid py-2">
        <div class="row text-center justify-content-center align-content-center">
            <h1>In-Stock Details</h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center h-100">

            <div class="table-responsive p-1" id="box1">
                <table class="table table-striped table-hover table-borderless table-primary align-middle">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Serial No.</th>
                            <th>Product Image</th>
                            <th>Product Name</th>
                            <th>Purchase Quantity</th>
                            <th>Prduct Price</th>
                            <th>Stock Status</th>
                            <th>Update Stock</th>
                            <!-- <th>Customer Name</th>
                            <th>Customer Address</th>
                            <th>Customer Contact Number</th>
                            <th>Payment Method</th> -->

                        </tr>
                    </thead>
                    <tbody class="table-group-divider">

                        <?php
                        $con = mysqli_connect('localhost', 'root', '', 'project');
                        $q = mysqli_query($con, "SELECT * FROM `addproduct`");
                        $i = 0;
                        while ($arry = mysqli_fetch_array($q)) {
                            // print_r($arry);
                            $i += 1;


                        ?>
                            <tr class="table-primary text-center">
                                <td scope="row"><?php echo $i ?></td>
                                <td><img class="" src="\P1\admin\images\<?php echo $arry[1] ?>" alt="Error" style="height: 50px;"></td>
                                <td class="hov"><?php echo $arry[5] ?></td>
                                <td class="hov" id="stock_qty"><?php echo $arry[8] ?></td>
                                <td class="hov"><?php echo $arry[6] ?></td>
                                <td class="hov" id="stock_status"><?php echo $arry[10] ?></td>
                                <td>
                                    <!-- <button class="btn btn-outline-primary" onclick="box1()">Show More</button> -->
                                    <?php
                                    echo '<a href="update_stock.php?id=' . $arry[0] . '" class="btn btn-outline-primary" onclick="box1()">Show More</a>';

                                    ?>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
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