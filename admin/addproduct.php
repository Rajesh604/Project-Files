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
        
        .tex {
            font-weight: bold;
        }

        .box1 {
            border-radius: 10px;
            backdrop-filter: blur(100px);
            box-shadow: 2px 2px 5px 0px gray;
        }

        .form-control {
            box-shadow: 2px 2px 5px 1px gray;
            border: none;

        }
    </style>
</head>

<body>
    <?php
    // include 'admin_nav.html';
    include 'admin_navv.php';
    // ?id=<?php echo $_GET['id']
    ?>


    <div class="container-fluid">
        <div class="row justify-content-center align-content-center" style="height: 88vh; overflow: auto;">
            <div class="col-11 col-md-8 col-lg-6 box1">
                <form class="" action="uploadimg.php?id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
                    <h3 class="text-center">Add Your Product</h3>
                    <label class="my-1 form-lable fs-5 tex">Add Photos</label><br>
                    <input class="form-control" type="file" name="image" accept="image/*" required>
                    <label class="my-1 form-lable fs-5 tex">Product Name</label><br>
                    <input class="form-control" type="text" name="pname" placeholder="Enter Product Name" required>
                    <label class="my-1 form-lable fs-5 tex">Product Quantity</label><br>
                    <input class="form-control" type="text" id="num" name="pquantity" placeholder="00" oninput="pres()" required>
                    <label class="my-1 form-lable fs-5 tex">Product Price</label><br>
                    <input class="form-control" type="text" id="num" name="pprice" placeholder="000.00" oninput="pres()" required>
                    <label class="my-1 form-lable fs-5 tex">Product Description</label><br>
                    <textarea class="form-control" id="message" name="pdescription" rows="2" maxlength="5000" aria-label="Your Message" placeholder="Add Product Description" required></textarea>
                    <input class="btn btn-outline-primary my-4" type="submit" name="Upload" id="">
                </form>
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

    function pres() {
        let data = document.getElementById('num');
        data.value = data.value.replace(/[^0-9]/g, '');
    }
</script>