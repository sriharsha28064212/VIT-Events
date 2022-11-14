<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>VitEvents</title>
    <script src="https://kit.fontawesome.com/1c9ad4b785.js" crossorigin="anonymous"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/cover/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
        </script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
    <link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="css/homestyles.css?version=7" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-bg-dark" style="scroll-behavior: smooth;">
    <div class="vitmain">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column " id="Section1">
            <header class="mb-auto">
                <div class="mainheader">
                    <h3 class="float-md-start mb-0" style="margin-left:20px;"><a href="Home.php"
                            style="text-decoration:none; color:white;">Vit Eventz</a></h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end mx-3">
                        <a class="nav-link fw-bold py-1 px-0 active" aria-current="page" href="Home.php">Home</a>
                        <a class="nav-link fw-bold py-1 px-0" href="Clubs.php">Clubs</a>
                        <a class="nav-link fw-bold py-1 px-0" href="#Section2">About Us</a>
                        <a class="nav-link fw-bold py-1 px-0" href="topevents.php">Events</a>
                        <a class="nav-link fw-bold py-1 px-0" href="imagegallery.php">Gallery</a>
                        <a class="nav-link fw-bold py-1 px-0" href="index.html">Stay in Touch</a>
                        <a class=" fw-bold py-1 px-0" href="login.php" target="_blank"><button
                                class="btn btn-outline-light btn-sm"
                                style="margin-left:10px;margin-top:-5px; font-weight: bold;">Admin Login</button></a>
                    </nav>
                </div>
                <nav class="navbar navbar-expand-lg bg-black">
                    <div class="container-fluid">
                        <a class="navbar-brand" style="color: white;" href="home.php">Vit Eventz</a>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="Home.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold py-1 px-0" href="Clubs.php">Clubs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold py-1 px-0" href="#Section2">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold py-1 px-0" href="topevents.php">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold py-1 px-0" href="imagegallery.php">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-bold py-1 px-0" href="index.html">Stay in Touch</a>
                                </li>
                                <li class="nav-item">
                                    <a class=" fw-bold py-1 px-0" href="login.php" target="_blank"><button class="btn btn-outline-light btn-sm" >Admin Login</button></a>
                                </li>
                            </ul>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#fff; font-size:28px;"></i></span>
                        </button>
                    </div>
                </nav>
            </header>

            <main class="px-3">
                <h1>Explore And Learn</h1>
                <h3 class=" mt-3 mb-3">Explore And Learn</h3>
                <p class="lead mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
                <p class="lead">
                    <a href="#Section2" class="btn btn-outline-light btn-lg">Discover</a>
                    <a href="#Section2" class="btn btn-outline-light btn-sm">Discover</a>
                </p>
            </main>
        </div>
        <div class="seconddiv text-center " style="background-color:black" id="Section2">
            <!-- <img src="images/home-img.png" alt="not found"> -->
            <br><br>
            <h1>ABOUT US</h1>
            <h4>Top Events</h4>
            <br><br>

            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="https://www.youtube.com/watch?v=6fNTdBEX3Vo" target="_blank"><img
                                src="images/rivera.png" class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Riviera</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.youtube.com/watch?v=Lkl2oBq-7uA" target="_blank"><img
                                src="images/gravitas.png" class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Gravitas</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <a href="https://www.youtube.com/watch?v=usv_Zc2HMr0" target="_blank"><img
                                src="images/techno.png" class="d-block w-100" alt="..."></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>TechnoVit</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- </div>
    <div class="modal fade" id="play-vid1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <video width="100%" controls >
              <source src="images/riv.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="play-vid2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <video width="100%" controls >
              <source src="images/grav.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div>
    <div class="modal fade" id="play-vid3">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <video width="100%" controls >
              <source src="images/tech.mp4" type="video/mp4">
            </video>
          </div>
        </div>
      </div>
    </div> -->
            <footer class="mt-auto text-white-50" style="background-color: black;">
                <p>Created By <strong>Sri Harsha.</strong></p>
            </footer>
        </div>
    </div>
</body>

</html>