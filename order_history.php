<?php
include 'includes/common.php';
error_reporting(0);
if (!(isset($_SESSION["email"]))) {
    header('location: index.php');
}
if (isset($_POST['cancel'])) {
    $user_id = $_SESSION['user_id'];
    $order_id = $_POST['cancel'];
    $query = "DELETE FROM cart_items WHERE user_id='$user_id' and order_id='$order_id'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
?>
    <script>
        window.alert("Order Cancelled.");
    </script>
<?php
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

    <div id="container" class="container mt-4 mb-4">

        <div class="row">

            <div class="col-sm-12">
                <?php
                $user_id = $_SESSION['user_id'];
                $query = "SELECT DISTINCT order_id FROM cart_items WHERE user_id='$user_id' and order_id IS NOT NULL";
                $result = mysqli_query($con, $query) or die($mysqli_error($con));
                $collapse = 0;
                while ($ans = mysqli_fetch_array($result)) {
                    $collapse++;
                ?>
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header d-flex" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="<?php echo '#flush-collapse' . $collapse; ?>" aria-expanded="false" aria-controls="<?php echo 'flush-collapse' . $collapse; ?>">
                                    Order Id : <?php echo $ans['order_id']; ?>
                                </button>
                                <form action="order_history.php" method="POST" id="cancelorder" style="width: 15%;">
                                    <button form="cancelorder" name="cancel" type="submit" value="<?php echo $ans['order_id']; ?>" class="btn btn-outline-danger form-control" style="margin-left: 3px; height: 90%;">Cancel Order</button>
                                </form>
                            </h2>
                            <div id="<?php echo 'flush-collapse' . $collapse; ?>" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <table class="table text-center">
                                        <thead>
                                            <tr>
                                                <th>Product Id</th>
                                                <th>Product Name</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Quantity</th>
                                                <th>Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $order_id = $ans['order_id'];
                                            $query = "SELECT  products.*, amount FROM products, cart_items WHERE products.id=product_id and user_id='$user_id' and order_id='$order_id'";
                                            $res = mysqli_query($con, $query) or die($mysqli_error($con));
                                            $num = mysqli_num_rows($res);
                                            if ($num != 0) {
                                                $total = 0;
                                                while ($row = mysqli_fetch_array($res)) {
                                            ?>
                                                    <tr>
                                                        <th><?php echo $row['id']; ?></th>
                                                        <td><?php echo $row['name']; ?></td>
                                                        <td><?php echo $row['category']; ?></td>
                                                        <td><?php echo $row['brand']; ?></td>
                                                        <td><?php echo $row['amount']; ?></td>
                                                        <td>₹<?php echo $row['price']; ?></td>
                                                    </tr>
                                                <?php
                                                    $total += $row['price'] * $row['amount'];
                                                }
                                                ?>
                                                <tr>
                                                    <th></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td class="fw-bold">Total Price : ₹<?php echo $total; ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php include 'includes/login-footer.php' ?>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"></script>
</body>

</html>