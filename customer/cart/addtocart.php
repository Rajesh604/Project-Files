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
        include 'E:\XAMPP\htdocs\P1\customer\customer_nav.php';
    ?>

    <div class="container-fluid">
        <div class="row p-4 justify-content-around">
      
    <?php
        $con = mysqli_connect('localhost', 'root', '', 'project');
        $cartdata = mysqli_query($con, "SELECT * FROM `add_cart`");
        $id = $_GET['id'];
        
        if($cartdata){
        while ($q = mysqli_fetch_array($cartdata)) {
            
    ?>          
            <div class="card text-start shade my-2 col-5 col-lg-2">
                    <img class="card-img-top p-1" src="\P1\admin\images\<?php echo $q[1]?>" alt="Error"/>
                    <div class="card-body" id="mytable">
                        <h4 class="fs-5 fw-bold" id="pname"><?php echo $q[2]?></h4>
                        <p class=""><?php echo $q[3]?>.00</p>
                        <div class="d-flex justify-content-around">
                        <?php
                        echo '<a href="remove.php?id1='. $q[0].'&id='. $id .'" class="btn btn-outline-danger" name="remove">Remove</a>';
                        echo '<a href="upload_buy.php?id1='. $q[0].'&id='. $id .'" class="col-5 btn btn-outline-success" name="Buy">Buy</a>';
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