
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap\bootstrap-icons-1.11.3\font\bootstrap-icons.css">
    <title>Document</title>
    <style>
    <?php
        include 'nav_csss.php';
    ?>
        
        .btn{
            box-shadow: 1px 1px 5px gray;
            transition: all .30s linear;
        }
        .btn:hover{
            box-shadow: 3px 3px 5px gray;
            transform: translateY(-2px);
            transition: all .30s linear;
        }
        .shade{
            cursor: pointer;
            box-shadow: 1px 1px 5px gray;
            transition: all .20s linear;
            
        }
        
        .shade:hover{
            box-shadow: 3px 3px 5px gray;
            transform: translateY(-2px);
        }

        .img{
            filter: drop-shadow(5px 5px 5px gray);
            transition: all .20s linear;
        }
        .img:hover{
            transform: translateY(-2px);
        }
        .card{
            border-radius: 10px;

        }

        .box{
            margin: 0px;
            display: none;
            height: 88vh; 
            top: 11%;

        }
        .buybox{
            height: 500px;
        }

    </style>
</head>

<body>
    <?php
    include 'customer_nav.php';
    // include 'normalnav.php';

    ?>
    <div class="container-fluid">

    <div class="row">

    </div>

    <div class="row" style="height: 10vh;">
            <form action="" method="post" class="row p-2">
                <div class="col-3">
                <input type="search" id="find" class="form-control" placeholder='Search Your Product' oninput="find1()">
            </div>
            <div class="col-1">
                <!-- <span class="bi-search btn btn-outline-primary"></span> -->
            </div>
            </form>
        </div>

        <div class="row p-4 justify-content-around">

                <?php
                ini_set('display_errors', 'Off');
                error_reporting(E_ALL & ~E_NOTICE);
                

                    $con = mysqli_connect('localhost', 'root', '', 'project');
                    $q = mysqli_query($con, "SELECT * FROM `addproduct`");
                    if ($q) {
                        while($arr = mysqli_fetch_array($q)) {
                    // print_r($arr);

                    echo '<a href="?id1='. $arr[0].'&id='. $q1[0].'" id="" class="product col-5 col-lg-2 text-decoration-none" name="getid">';
                ?>
    
            <div class="card text-start shade my-2" onclick="box1()">
                    <img class="card-img-top p-1" src="\P1\admin\images\<?php echo $arr[1]?>" alt="Error"/>
                    <div class="card-body" id="mytable">
                        <h4 class="fs-5 fw-bold" id="pname"><?php echo $arr[5]?></h4>
                        <p class=""><?php echo $arr[6]?>.00</p>
                    </div>
                </div>
                <?php
                echo '</a>';
                       }
                    }
                ?>
            </div>
        </div>
        
        <?php
                $i = $_GET['id1'];
                if ($i) {
                    $qf1 = mysqli_query($con, "SELECT * FROM `addproduct` WHERE id = '$i'");
                    $fetch = mysqli_fetch_array($qf1);
                    
                    if ($fetch) {
                 
            
        ?>

        <div class="row position-absolute box z-1 justify-content-center align-content-center w-100" id="box">

            <div class="col-7 col-lg-3 card overflow-y-auto position-sticky buybox">
                <span class="position-absolute hov" style="cursor: pointer; right: 10px;" onclick="cros2()">X</span>
                <img class="card-img-top p-1 mt-4 img" src="\P1\admin\images\<?php echo $fetch[1]?>" alt="Error" style="cursor: pointer;"/>
                <div class="card-body">
                    <h4 class="card-title"><?php echo $fetch[5]?></h4>
                    <p class="card-text fw-bold"><?php echo $fetch[6]?>.00</p>
                    <p style="text-align: justify;"><?php echo $fetch[7]?></p>
                    <div class="row justify-content-around">
                        <?php
                    echo '<a href="cart/upload_buy.php?id1='. $fetch[0].'&id='. $q1[0].'" class="col-5 btn btn-outline-success">Buy</a>';
                    echo '<a href="cart/cart_query.php?idd='. $fetch[0].'&id='. $q1[0].'" class="col-5 btn btn-outline-primary">Add Cart</a>';
                        ?>
                        <!-- <button class="btn btn-outline-success fs-6 col-5">Buy</button> -->
                        <!-- <button class="btn btn-outline-primary fs-6 col-5" style="padding: 0px;">Add Cart</button> -->
                    </div>
                </div>

            </div>
        </div>
        <?php
            // }
            if($i>1){
                echo "<script>document.getElementById('box').style.display = 'flex';</script>";
            };
        }
        
    }else{
        echo "";
    }
    
        ?>
    </div>
    
    <!-- <img src="" alt="" srcset=""> -->

</body>

</html>

<script>
    function clic() {
        document.getElementById('pro').style.display = "flex";
    }
    function cros() {
        document.getElementById('pro').style.display = "none";
    }

    
    function cros2() {
        document.getElementById('box').style.display = "none";
        location.assign('shoping.php?id=<?php echo $id = $q1[0] ?>');
    }

    function box1() {
        // location.assign("");
        document.getElementById('box').style.display = "flex";
    }

    // Search Button Code
    function find1() {
        let searchitem = document.getElementById('find').value.toUpperCase();
        // console.log(searchitem);
        let card = document.querySelectorAll('.product');
        let storeitem = document.getElementsByTagName('h4');
        
        for (let i = 0; i < storeitem.length; i++) {
            data = storeitem[i].innerHTML || storeitem[i].textContent;
            if (data.toUpperCase().indexOf(searchitem) > -1) {
                    card[i].style.display = '';
            }else{
                card[i].style.display = 'none';
            }
        }


    }
    </script>
