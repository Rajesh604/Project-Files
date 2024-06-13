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

        .box {
            border-radius: 20px;
            box-shadow: 3px 3px 10px 4px gray;
        }

        .btn:hover {
            box-shadow: 3px 3px 5px 4px gray;
            transform: translateY(-4px);
            transition: all linear .15s;
        }

        .eyehide,
        .realpass,
        .inp,
        #hide,
        .demobtn, #orgbtn {
            display: none;
        }

        .eyeshow,
        .eyehide {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <?php
    // include 'admin_nav.html';
    include 'admin_navv.php';
    ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="pt-5 pt-lg-2 text-center">
                <h1 class="display-4">Settings</h1>
            </div>
            <?php
            $con = mysqli_connect('localhost', 'root', '', 'project') or die('Something Went Wrong');
            $id = $_GET['id'];
            $q = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM `admin_login` WHERE `id` = $id"));
            ?>
            <div class="col-10 col-md-8 align-content-center box pt-5">
                <div class="p-2 d-flex">
                    <h3>Name:&nbsp;</h3>
                    <h3 class="fw-bold"> <?php echo $q[1] ?></h3>
                </div>
                <div class="p-2 d-flex">
                    <h3>Email Id:&nbsp;</h3>
                    <h3 class="fw-bold"> <?php echo $q[2] ?></h3>
                </div>
                <div class="p-2 d-flex">
                    <h3>Password:&nbsp;</h3>
                    <h3 class="fw-bold" id="pphide"> **** &nbsp;&nbsp;&nbsp;</h3>
                    <h3 class="fw-bold realpass" id="rpass"> <?php echo $q[4] ?> &nbsp;&nbsp;&nbsp;</h3>
                    <i id="peye" onclick="peye()" class="bi bi-eye fs-3 eyeshow"></i>
                    <i id="peyehide" onclick="ehide()" class="bi bi-eye-slash-fill fs-3 eyehide"></i>
                </div>
                <div class="p-2 d-flex">
                    <h5 class="text-success" id="show" onclick="cpass()" style="cursor: pointer;">Change Password</h5>
                    <h5 class="text-success" id="hide" onclick="cpass1()" style="cursor: pointer;">Change Password</h5>
                </div>
                <div class="inp p-2" id="inpp">
                    <form action="change_pass.php?id1=<?php echo $_GET['id']; ?>" class="d-flex" method="post">
                        <input type="text" name="pass" maxlength="12" oninput="val()" class="form-control me-2" id="pass" value="<?php echo $q[4] ?>">
                        <button id="orgbtn" type="submit" class="btn btn-outline-success">Change</button>
                        <button id="demobtn" class="demobtn btn btn-outline-success" disabled>Change</button>
                    </form>
                </div>
                <div class="p-2 d-flex pb-5">
                    <h3>Security Code:&nbsp;</h3>
                    <h3 class="fw-bold" id="sphide"> **** &nbsp;&nbsp;&nbsp;</h3>
                    <h3 class="fw-bold realpass" id="spass"> <?php echo $q[5] ?> &nbsp;&nbsp;&nbsp;</h3>
                    <i id="seye" onclick="seye()" class="bi bi-eye fs-3 eyeshow"></i>
                    <i id="seyehide" onclick="shide()" class="bi bi-eye-slash-fill fs-3 eyehide"></i>
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

    function peye() {
        document.getElementById('peye').style.display = 'none';
        document.getElementById('peyehide').style.display = 'inline-block';
        document.getElementById('pphide').style.display = 'none';
        document.getElementById('rpass').style.display = 'inline-block';

    }

    function seye() {
        document.getElementById('seye').style.display = 'none';
        document.getElementById('seyehide').style.display = 'inline-block';
        document.getElementById('sphide').style.display = 'none';
        document.getElementById('spass').style.display = 'inline-block';

    }

    function ehide() {
        document.getElementById('peye').style.display = 'inline-block';
        document.getElementById('peyehide').style.display = 'none';
        document.getElementById('pphide').style.display = 'inline-block';
        document.getElementById('rpass').style.display = 'none';

    }

    function shide() {
        document.getElementById('seye').style.display = 'inline-block';
        document.getElementById('seyehide').style.display = 'none';
        document.getElementById('sphide').style.display = 'inline-block';
        document.getElementById('spass').style.display = 'none';

    }

    function cpass() {
        document.getElementById('inpp').style.display = 'flex';
        document.getElementById('show').style.display = 'none';
        document.getElementById('hide').style.display = 'flex';
    }

    function cpass1() {
        document.getElementById('inpp').style.display = 'none';
        document.getElementById('show').style.display = 'flex';
        document.getElementById('hide').style.display = 'none';
    }

    function val() {
        let data = document.getElementById('pass').value;
        let val = data.length;
        // console.log(val);
        if (val < 6) {
            document.getElementById('orgbtn').style.display = 'none';
            document.getElementById('demobtn').style.display = 'inline-block';
        }else if(val > 5){
            document.getElementById('orgbtn').style.display = 'inline-block';
            document.getElementById('demobtn').style.display = 'none';
        }
    }
</script>