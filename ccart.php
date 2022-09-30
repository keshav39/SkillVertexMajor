<?php
require('includes/common.php');
if (!(isset($_SESSION["email"]))) {
    header('location: index.php');
}
if (isset($_POST['add']) && is_numeric($_POST['amount'])) {
    $amount = $_POST['amount'];
    $id = $_POST['add'];
    $user_id = $_SESSION['user_id'];
    $query = "SELECT * FROM cart_items WHERE user_id='$user_id' && product_id='$id'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $num = mysqli_num_rows($result);
    if ($num == 0) {
        $query = "INSERT INTO cart_items (product_id, user_id, status, amount) VALUES('$id', '$user_id', 'Added to cart', '$amount')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        if ($amount <= 0) {
            $query = "DELETE FROM cart_items WHERE user_id='$user_id' && product_id='$id'";
            $result = mysqli_query($con, $query) or die($mysqli_error($con));
        }
    } else {
        $error = '<script>alert("Items already in Cart")</script>';
        header('location: ccart.php?error=' . $error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- <link rel="stylesheet" href="assets/css/home.css"> -->
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <?php include 'includes/login-navbar.php'; ?>

    <div class="container-fluid pt-4 pb-4">
        <div class="row">
            <div class="col-sm-7" style="background: #fff;">
                <h1>Supermarket</h1>
                <hr>
                <div class="d-flex justify-content-between">
                    <p class="m-0 p-0">Delivery Address</p>
                    <p class="m-0 p-0"><?php echo $_SESSION['address']; ?></p>
                </div>
                <hr>
                <?php
                $user_id = $_SESSION['user_id'];
                $query = "SELECT  products.*, product_id, amount FROM cart_items, products WHERE products.id=product_id and user_id='$user_id' and status='Added to Cart'";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                $total = 0;
                // if ($num == 0) {
                //     $error = '<script>alert("Items in Cart")</script>';
                //     header('location: products.php?error=' . $error);
                // }
                while ($row = mysqli_fetch_array($result)) {
                ?>

                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="<?php echo $row['img_path']; ?>" class="rounded-start" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['name']; ?></h5>
                                    <div class="d-flex justify-content-between">
                                        <p><?php echo $row['category']; ?></p>
                                        <p>₹<?php echo $row['price']; ?></p>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-left-minus btn btn-danger btn-number" data-type="minus" data-field="" style="border-radius: 50%;">
                                                <!-- <span class="glyphicon glyphicon-minus"></span> --> -
                                            </button>
                                        </span>
                                        <input type="text" id="quantity" name="quantity" class="me-2 ms-2 input-number" value="<?php echo $row['amount']; ?>" min="1" max="100" style="width: 20%;">
                                        <span class="input-group-btn">
                                            <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="" style="border-radius: 50%;">
                                                <!-- <span class="glyphicon glyphicon-plus"></span> -->+
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php
                    $total += $row['price'];
                }
                ?>
            </div>
            <div class="col-sm-1" style="background: #fff; border-left: 5px solid grey;"></div>
            <div class="col-sm-4" style="background: #fff; position: fixed; right: 0;">
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="mt-3">Price Details</h2>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <p>Price(<?php echo $num; ?> Items)</p>
                            <p><?php echo '₹' . $total; ?></p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Discount</p>
                            <p>₹500</p>
                        </div>
                        <div class="d-flex justify-content-between">
                            <p>Delivery Charges</p>
                            <p>₹99</p>
                        </div>
                        <div class="fw-bolder d-flex justify-content-between pt-3 mb-4" style="border-top: 1px dashed grey; border-bottom: 1px dashed grey">
                            <p>Total Price</p>
                            <p>₹99</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-sm-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/home/home-car-01.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/home/home-car-02.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/home/home-car-03.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/home/home-car-04.webp" class="d-block w-100" alt="Carousel-Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["error"])) {
        echo $_GET['error'];
    }
    ?>
    </div>
    <script>
        $(document).ready(function() {

            var quantitiy = 0;
            $('.quantity-right-plus').click(function(e) {

                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                $('#quantity').val(quantity + 1);


                // Increment

            });

            $('.quantity-left-minus').click(function(e) {
                // Stop acting like a button
                e.preventDefault();
                // Get the field name
                var quantity = parseInt($('#quantity').val());

                // If is not undefined

                // Increment
                if (quantity > 0) {
                    $('#quantity').val(quantity - 1);
                }
            });

        });
    </script>
    <?php include 'includes/login-footer.php' ?>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>