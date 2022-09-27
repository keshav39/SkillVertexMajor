<?php
include 'includes/common.php';
?>

<nav class="navbar navbar-expand-lg sticky-top" style="background: radial-gradient(circle, rgba(63,251,208,0.8519782913165266) 0%, rgba(67,252,91,0.8715861344537815) 49%, rgba(94,70,252,0.8211659663865546) 100%);">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php">Super Market</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="./products.php">Products</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="./products.php?category=Staples">Staples</a></li>
                        <li><a class="dropdown-item" href="./products.php?category=Beverages">Beverages</a></li>
                        <li><a class="dropdown-item" href="./products.php?category=Snacks">Snacks</a></li>
                        <li><a class="dropdown-item" href="./products.php?category=Essentials">Kitchen Essentials</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="./products.php?category=Popular">Popular</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./contact.php">Contact</a>
                </li>
            </ul>
            <?php
            if (isset($_SESSION["email"])) {
                if ($_SESSION["email"] == 'supermarketadmin@admin.com') {
            ?>
                    <div class="justify-content-end">
                        <p style="display: inline; margin-right: 10px;"><span class="fw-bold">Welcome, </span> <?php echo $_SESSION['name']; ?></p>
                        <a href="./add_product.php" class="btn btn-danger me-3">Add Product</a>
                        <a href="#" class="btn btn-primary me-3">Cart</a>
                        <a href="./logout.php" class="btn btn-success me-3">Logout</a>
                    </div>
                <?php
                } else {
                ?>
                    <div class="justify-content-end">
                        <p style="display: inline; margin-right: 10px;"><span class="fw-bold">Welcome, </span> <?php echo $_SESSION["name"]; ?></p>
                        <a href="#" class="btn btn-primary me-3">Cart</a>
                        <a href="./logout.php" class="btn btn-success me-3">Logout</a>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="justify-content-end">
                    <a href="./login.php" class="btn btn-primary me-3">Login</a>
                    <a href="./register.php" class="btn btn-success me-3">Signup</a>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</nav>