<?php
include 'includes/common.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>

    <?php include 'includes/login-navbar.php'; ?>

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/home/home-car-01.webp" class="d-block w-100" alt="Carousel-Image">
            </div>
            <div class="carousel-item">
                <img src="assets/img/home/home-car-02.webp" cløass="d-block w-100" alt="Carousel-Image">
            </div>
            <div class="carousel-item">
                <img src="assets/img/home/home-car-03.webp" class="d-block w-100" alt="Carousel-Image">
            </div>
            <div class="carousel-item">
                <img src="assets/img/home/home-car-04.webp" class="d-block w-100" alt="Carousel-Image">
            </div>
        </div>
    </div>
    <?php
    if (isset($_GET["m"])) {
        echo $_GET['m'];
    }
    ?>
    <div class="container">
        <h3 class="mt-5 text-center text-decoration-underline">My Smart Basket</h3>
        <hr>

        <div class="mt-5 row mb-3 justify-content-evenly align-items-center">
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>

                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 text-center text-decoration-underline">Our Best Sellers</h3>
        <hr>

        <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>
                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%;">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                    </div>

                    <div class="card-body" style="background: #d1d1d1;">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Qty</span>
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 text-center text-decoration-underline">Beverages</h3>
        <hr>

        <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
            <div class="col-md-6"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 text-center text-decoration-underline">Our Best Staples</h3>
        <hr>

        <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
            <div class="col-md-2 mb-4 mt-4">
                <div class="card staples" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4 mt-4">
                <div class="card staples" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4 mt-4">
                <div class="card staples" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4 mt-4">
                <div class="card staples" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4 mt-4">
                <div class="card staples" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2 mb-4 mt-4">
                <div class="card staples" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 text-center text-decoration-underline">Fruits & Vegetables</h3>
        <hr>

        <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
            <div class="col-md-6"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                </div>
                <div class="row">
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                    <div class="col-md-6 p-3"><img src="assets/img/demo.jpg" style="width: 100%;" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 text-center text-decoration-underline">Snacks Store</h3>
        <hr>

        <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4 mt-4">
                <div class="card" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="mt-5 text-center text-decoration-underline">Kitchen Essentials</h3>
        <hr>

        <div class="row mb-3 mt-5 justify-content-evenly align-items-center">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="card kitchen" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card kitchen" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card kitchen" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card kitchen" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>

            <div class="col-md-2 mb-4 mt-4">
                <div class="card kitchen" style="width: 100%; ">
                    <img src="assets/img/demo.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-title">Name</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center mt-5 text-decoration-underline">Our Partners</h3>
        <hr>
        <div class="row mt-5 mb-5">
            <div class="col-md-6">
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
            <div class="col-md-6">
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

    <?php include 'includes/login-footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>