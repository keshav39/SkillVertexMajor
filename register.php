<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super-Market - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Header -->
    <nav class="sticky-top">
        <ul>
            <li><a href="login.php" style="font-size: 20px; font-weight: bolder;">BLOG</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">All Posts</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <!-- <input type="text" class="search-box" placeholder="Search" /> -->
            <li style="float: right;"><a href="register.php">Sign Up</a></li>
            <li style="float: right;"><a href="login.php">Login</a></li>
        </ul>
    </nav>
    <!-- End Header -->
    <section class="vh-75 pb-3 pt-3" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center
                    h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius:
                            25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5
                                        order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5
                                            mx-1 mx-md-4 mt-4">Sign up</p>

                                    <form class="mx-1 mx-md-4">

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3
                                                    fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="text" id="form3Example1c" class="form-control" />
                                                <label class="form-label" for="form3Example1c">Your
                                                    Name</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg
                                                    me-3 fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="email" id="form3Example3c" class="form-control" />
                                                <label class="form-label" for="form3Example3c">Your
                                                    Email</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3
                                                    fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="password" id="form3Example4c" class="form-control" />
                                                <label class="form-label" for="form3Example4c">Password</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row
                                                align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3
                                                    fa-fw"></i>
                                            <div class="form-outline
                                                    flex-fill mb-0">
                                                <input type="password" id="form3Example4cd" class="form-control" />
                                                <label class="form-label" for="form3Example4cd">Repeat
                                                    your password</label>
                                            </div>
                                        </div>

                                        <div class="form-check d-flex
                                                justify-content-center mb-5">
                                            <input class="form-check-input
                                                    me-2" type="checkbox" value="" id="form2Example3c" />
                                            <label class="form-check-label" for="form2Example3">
                                                I agree
                                            </label>
                                        </div>

                                        <div class="d-flex
                                                justify-content-center mx-4 mb-3
                                                mb-lg-4">
                                            <button type="button" class="btn
                                                    btn-primary btn-lg">Register</button>
                                        </div>
                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login.php" class="link-danger">Login</a></p>
                                        </div>
                                    </form>

                                </div>
                                <div class="col-md-10 col-lg-6 col-xl-7
                                        d-flex align-items-center order-1
                                        order-lg-2">

                                    <img src="assets/img/register-bg.png" class="img-fluid mb-10" style="object-fit: cover; width: 500px; border-radius: 10px; opacity: 0.9;" alt="Sample
                                            image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-light text-center text-lg-start">
        <!-- Copyright -->
        <div class="text-center p-2" id="Footer">
            <p class="mt-3"> © 2020 Copyright:
                <a class="text-dark fw-bold" href="#">Super-Market</a>
            </p>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer End -->
</body>

</html>