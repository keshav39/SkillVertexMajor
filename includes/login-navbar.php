<?php
include 'includes/common.php';
include 'modal.php';
?>

<nav class="navbar navbar-expand-lg sticky-top" style="background: radial-gradient(circle, rgba(63,251,208,0.8519782913165266) 0%, rgba(67,252,91,0.8715861344537815) 49%, rgba(94,70,252,0.8211659663865546) 100%);">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="index.php">Super Market</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
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
                        <li><a class="dropdown-item" href="./products.php?category=Fruits and Vegetables">Fruits and Vegetables</a></li>
                        <li><a class="dropdown-item" href="./products.php?category=Snacks">Snacks</a></li>
                        <li><a class="dropdown-item" href="./products.php?category=Kitchen Essentials">Kitchen Essentials</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Brands
                    </a>
                    <ul class="dropdown-menu">
                        <?php
                        $query = "SELECT DISTINCT brand FROM products";
                        $result = mysqli_query($con, $query) or die($mysqli_error($con));
                        while ($row = mysqli_fetch_array($result)) {
                        ?>
                            <li><a class="dropdown-item" href="./products.php?brand=<?php echo $row['brand']; ?>"><?php echo $row['brand']; ?></a></li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./contact.php">Contact</a>
                </li>

            </ul>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <!-- Modal Button -->
                <li class="nav-item me-lg-3 mt-2 mb-2">
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#filter">
                        Filter
                    </button>
                </li>
                <!-- End -->

                <?php
                if (isset($_SESSION["email"])) {
                    if ($_SESSION["email"] == 'supermarketadmin@admin.com') {
                ?>
                        <li class="nav-item mt-2 mb-2">
                            <p class="align-middle pt-2" style="display: inline; margin-right: 10px;"><span class="fw-bold">Welcome, </span> <?php echo $_SESSION['name']; ?></p>
                        </li>
                        <li class="nav-item mt-2 mb-2">
                            <a href="./add_product.php" class="btn btn-danger me-3">Add Product</a>
                        </li>
                        <li class="nav-item mt-2 mb-2">
                            <a href="./ccart.php" class="me-3" title="Cart"><img src="assets/img/icons/trolley.png" alt=""></a>
                        </li>
                        <li class="nav-item mt-2 mb-2">
                            <a href="./logout_script.php" class="btn btn-success me-3">Logout</a>
                        </li>
                    <?php
                    } else {
                    ?>
                        <li class="nav-item mt-2 mb-2">
                            <p style="display: inline; margin-right: 10px;"><span class="fw-bold">Welcome, </span> <?php echo $_SESSION["name"]; ?></p>
                        </li>
                        <li class="nav-item mt-2 mb-2">
                            <a href="./ccart.php" class="me-3" title="Cart"><img src="assets/img/icons/trolley.png" alt=""></a>
                        </li>
                        <li class="nav-item mt-2 mb-2">
                            <a href="./logout_script.php" class="btn btn-success me-3">Logout</a>
                        </li>
                    <?php
                    }
                } else {
                    ?>
                    <li class="nav-item mt-2 mb-2">
                        <a href="./login.php" class="btn btn-primary me-3">Login</a>
                    </li>
                    <li class="nav-item mt-2 mb-2">
                        <a href="./register.php" class="btn btn-success me-3">Signup</a>
                    </li>
                <?php
                }
                ?>
            </ul>
        </div>
    </div>
</nav>