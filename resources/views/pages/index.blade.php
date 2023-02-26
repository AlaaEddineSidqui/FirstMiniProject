<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Home</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light position-relative top-0 start-0 w-100">
        <div class="container">
            <a class="navbar-brand d-lg-none" href="/home">
                MERCEDES-BENZ
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse p-2 flex-column" id="navbarContent">
                <div class="d-flex justify-content-center">
                    <a class="navbar-brand d-none d-lg-block" href="#">
                        <img src="{{asset('images/logo.png')}}" height="40" width="auto">
                    </a>
                </div>
                <div class="d-block w-100">
                    <ul class="navbar-nav d-flex justify-content-center align-items-center pt-3">
                        <li class="nav-item mx-2">
                            <a class="nav-link active" href="/home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="/product">
                                Product
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="#">
                                About
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="/contact">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div class="container position-relative text-center">
        <header class="position-relative text-center text-white mb-5">
            <img src="{{ asset('images/mb-a35.jpg') }}" class="w-100" alt="Banner">
            <div class="position-absolute top-50 start-50 translate-middle-x w-100 px-3">
                <h1 class="display-4">The New Mercedes A45S AMG</h1>
                <a href="/product" class="btn btn-light">
                    Buy Now!
                </a>
            </div>
        </header>

        
        <footer class="d-flex justify-content-between my-5 text-start flex-wrap">
            <ul class="nav flex-column">
                <li class="fw-bold nav-item">
                    <a href="#" class="nav-link text-muted">
                        <img src="{{asset('images/logo.png')}}" height="100">
                     </a>
                </li>
                <li class="fw-bold nav-item">
                    <p class="text-dark mt-3">
                        Copyright Mercedes-Benz
                    </p>
                </li>
            </ul>
            <ul class="nav flex-column">
                <li class="fw-bold nav-item">
                    <a href="#" class="nav-link text-dark">
                        Pages
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/home" class="nav-link text-dark">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/product" class="nav-link text-dark">
                        Product
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-dark">
                        About
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/contact" class="nav-link text-dark">
                        Contact
                    </a>
                </li>
            </ul>
        </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>