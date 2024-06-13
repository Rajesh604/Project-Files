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
        include 'nav_csss.php';
    ?>
        .shade{
            cursor: pointer;
            box-shadow: 1px 1px 5px gray;
            transition: all .20s linear;
            
        }
        .p-1{
            transition: all .20s linear;
        }
        .p-1:hover, .shade:hover{
            filter: drop-shadow(0px 0px 5px gray);
            box-shadow: 3px 3px 5px gray;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <?php
        include 'customer_nav.php';
    ?>

    <div class="container-fluid">
        <div class="row p-4 justify-content-around">
      
    <?php
        error_reporting(0); // this line hide all type error
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $sq = mysqli_query($con, "SELECT * FROM `buy_product`");
        while ($q = mysqli_fetch_array($sq)) {

        $apid = $q[1];
        $adddata = mysqli_query($con, "SELECT * FROM `addproduct` where `add_id` = '$apid'");
        
        while ($q1 = mysqli_fetch_array($adddata)) {
        $id = $_GET['id'];
        $uq = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `register` where `id` = '$id'"));
            
    ?>          
            <div class="card text-start shade my-2 col-5 col-lg-2">
                    <img class="card-img-top p-1" src="\P1\admin\images\<?php echo $q1[1]?>" alt="Error"/>
                    <div class="card-body" id="mytable">
                        <h4 class="fs-5 fw-bold" id="pname"><?php echo $q1[5]?></h4>
                        <p class="">Order Status: <?php echo $q[6]?></p>
                        <p class="">&#8377;&nbsp;<?php echo $q1[6]?>.00</p>
                        <div class="d-flex justify-content-around">
                        <?php
                        if ($q[6] == 'Accept') {
                        echo "<button class='btn btn-outline-danger hov' disabled>Cancel Order</button>";
                        }elseif($q[6] == 'Reject'){
                        echo "<button class='btn btn-outline-danger hov' disabled>Cancel Order</button>";
                        }else{
                            echo '<a href="cancel_order.php?id1='. $q[0].'&id='. $uq[0] .'" class="btn btn-outline-danger" name="remove">Cancel Order</a>';
                        }
                            ?>
                        </div>
                    </div>
            </div>

            <?php
        }
    }
            ?>
        </div>
    </div>







    
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