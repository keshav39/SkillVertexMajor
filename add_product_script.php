<?php

require("includes/common.php");

$target_dir = "assets/img/products/";
$target_img = $target_dir . basename($_FILES["image"]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_img)) {
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    $m = '<script>alert("Sorry, your image was not uploaded.")</script>';
    header('location: add_product.php?m=' . $m);
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_img)) {
        echo '<script>alert("The image has been uploaded.")</script';
    } else {
        $m = '<script>alert("Sorry, there was an error uploading your file.")</script>';
        header('location: add_product.php?m=' . $m);
    }
}

$name = $_POST['name'];
$name = mysqli_real_escape_string($con, $name);

$description = trim($_POST['description']);

$category = $_POST['category'];
$category = mysqli_real_escape_string($con, $category);


$query = "SELECT * FROM products WHERE name='$name' and category='$category'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);

$query = "SELECT email FROM users WHERE email='supermarketadmin@admin.com'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));

if ($num != 0) {
    $m = '<script>alert("Already Added Within This Category")</script>';
    header('location: add_product.php?m=' . $m);
} else if (mysqli_num_rows($result) == 0) {
    $m = '<script>alert("Not Logged in as Administrator")</script>';
    header('location: add_product.php?m=' . $m);
} else {
    // $query = "INSERT INTO products(name, description, category, img_path)VALUES('" . $name . "','" . $description . "', '" . $category . "', '" . $target_img . "')";
    // mysqli_query($con, $query) or die(mysqli_error($con));
    $m = '<script>alert("Product Added Successfully")</script>';
    header('location: add_product.php?m=' . $m);
}
