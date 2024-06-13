<?php
$con = mysqli_connect('localhost', 'root', '', 'project') or die('Something Went Wrong');

if ($_GET['id']) {
    # code...

    $id = $_GET['id'];
    // echo $id;
    $q = mysqli_query($con, "SELECT * FROM `admin_login` WHERE `id` = $id");
    if ($q1 = mysqli_fetch_array($q)) {
        // print_r($q1);
        session_start();

?>
<nav class="navbg navbar navbar-expand-md position-sticky top-0 z-3">
    <div class="container-fluid">
        <a href="#" class="text-light navbar-brand">LOGO</a>
        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#btn">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="text-dark fw-bold navbar-nav collapse navbar-collapse position-sticky justify-content-end"
            id="btn">
            <li class="nav-item hov"><a href="home.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Home</a></li>
            <li class="nav-item hov"><a href="dashboard.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Dashboard</a></li>
            <li class="nav-item hov"><a href="addproduct.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Add Product</a></li>
            <li class="nav-item hov"><a href="home.php?id=<?php echo $_GET['id'] ?>" onclick="stock()" class="nav-link">Stock</a></li>
            <li class="nav-item d-none d-md-inline-block hov" onclick="clic()"><a href="#" class="nav-link bi-gear fs-4"></a></li>

            <li class="nav-item d-md-none hov"><a href="#?id=<?php echo $_GET['id'] ?>" class="nav-link"><?php echo $q1[1] ?></a></li>
            <li class="nav-item d-md-none hov"><a href="setting.php?id=<?php echo $_GET['id'] ?>" class="nav-link">Settings</a></li>
            <li class="nav-item d-md-none hov"><a href="\P1\login_pages\logout.php" class="nav-link">Log-Out</a></li>
        </ul>

    </div>

</nav>

<ul class="navbar-nav position-absolute end-0 px-4 pb-2 ad" id="pro">
    <p class="m-0 hov" style="float: right; cursor: pointer;" onclick="cros()">x</p>
    <li class="nav-item pt-1 hov"><a href="#" class="link-dark text-decoration-none"><?php echo $q1[1] ?></a></li>
    <li class="nav-item hov"><a href="setting.php?id=<?php echo $_GET['id'] ?>" class="link-dark text-decoration-none">Settings</a></li>
    <li class="nav-item hov"><a href="\P1\login_pages\logout.php" class="link-dark text-decoration-none">Log-Out</a></li>
</ul>


<?php

    }
     else {
        header('/P1/login_pages/logout.php');
    }
}
elseif (!isset($_SESSION['Name'])) {
    header("Location: /P1/login_pages/logout.php");
    exit();
}


?>