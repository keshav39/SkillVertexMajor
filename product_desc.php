<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Market -Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/home.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'includes/login-navbar.php' ?>

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-6">
                <img src="assets/img/products/demo-image-01.jpg" class="img-fluid rounded-4" alt="">
            </div>
            <div class="col-sm-6">
                <h2 class="mb-4 text-decoration-underline">Vegetable</h2>

                <p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem voluptatibus ex deleniti nisi perferendis. Pariatur consectetur reiciendis praesentium ut, expedita rem iure laborum et nostrum in, reprehenderit sequi non aperiam similique explicabo corporis? Accusamus doloremque iure aliquid porro, facilis consequuntur! Soluta ab ullam exercitationem quidem officia ad expedita perspiciatis cumque.</p>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3 m-0 p-0 me-1">
                            <input type="text" class="form-control" placeholder="Amount" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="col-sm-2 m-0 p-0">
                            <a href="#" class="btn btn-warning">Add <img style="margin-left: 2px; margin-bottom: 4px;" src="assets/img/icons/tool.png" alt=""> </a>
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                    <div class="input-group mb-3">
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