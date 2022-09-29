<?php
include 'includes/common.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/login-navbar.php' ?>
    <div class="container">
        <?php
        if (!isset($_GET['category'])) {
        ?>
            <h2 class="text-center fw-bolder text-decoration-underline mt-5 mb-3">All Products</h2>
        <?php
        } else {
        ?>
            <h2 class="text-center fw-bolder text-decoration-underline mt-5 mb-3"><?php echo $_GET['category']; ?></h2>
        <?php
        }
        ?>
        <div class="row">
            <?php
            $query = "SELECT id, name, img_path FROM products";
            $result = mysqli_query($con, $query) or die($mysqli_error($con));
            $num = mysqli_num_rows($result);
            if ($num == 0) {
                $error = '<script>alert("No products found")</script>';
                header('location: products.php?error=' . $error);
            }
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="col-md-4 col-6 col-xl-3 col-sm-6 mb-4 mt-4 col-xxl-2">
                    <a href="product_desc.php?id=<?php echo $row['id']; ?>" class="text-decoration-none text-dark fw-bold">
                        <div class="card" style="width: 100%; ">
                            <img src="<?php echo $row['img_path'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-title"><?php echo $row['name']; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            }
            ?>
        </div>
        <?php
        if (isset($_GET["error"])) {
            echo $_GET['error'];
        }
        ?>
    </div>

    <?php include 'includes/login-footer.php' ?>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>