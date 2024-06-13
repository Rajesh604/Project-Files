        <nav class="navbg navbar navbar-expand-md position-sticky top-0 z-3">
            <div class="container-fluid">
                <a href="#" class="text-light navbar-brand">LOGO</a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#btn">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="text-dark fw-bold navbar-nav collapse navbar-collapse position-sticky justify-content-end" id="btn">
                    <li class="nav-item hov"><a href="/P1/customer/p1.php#home" class="nav-link">Home</a></li>
                    <li class="nav-item hov"><a href="/P1/customer/p1.php#About" class="nav-link">About Us</a></li>
                    <li class="nav-item hov"><a href="/P1/customer/p1.php#contact_us" class="nav-link">Contact Us</a></li>
                    <li class="nav-item d-none d-md-inline-block hov" onclick="clic()"><a href="#" class="nav-link bi-gear fs-4"></a></li>
                    <li class="nav-item d-md-none"><a href="#" class="nav-link">User</a></li>
                    <li class="nav-item d-md-none"><a href="#" class="nav-link">Settings</a></li>
                    <li class="nav-item d-md-none"><a href="\P1\login_pages\logout.php" class="nav-link">Log-Out</a></li>
                </ul>

            </div>

        </nav>
        <ul class="navbar-nav position-absolute end-0 px-4 pb-2 ad" id="pro">
            <p class="m-0 hov" style="float: right; cursor: pointer;" onclick="cros()">x</p>
            <li class="nav-item pt-1 hov"><a href="#" class="link-dark text-decoration-none">User</a></li>
            <li class="nav-item hov"><a href="#" class="link-dark text-decoration-none">Settings</a></li>
            <li class="nav-item hov"><a href="\P1\login_pages\logout.php" class="link-dark text-decoration-none">Log-Out</a></li>
        </ul>
