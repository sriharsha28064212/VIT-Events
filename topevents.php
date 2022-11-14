<?php include 'config.php'?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/clubs.css">
    <script src="https://kit.fontawesome.com/1c9ad4b785.js" crossorigin="anonymous"></script>


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

    .card1 {
        transition: all 0.5s ease-in-out;
        cursor: pointer;
        box-shadow: 0px 0px 6px -4px rgba(0, 0, 0, 0.75);
        border-radius: 10px;
        background-color: #fff;
    }

    .card1:hover {
        box-shadow: 0px 0px 51px -36px rgba(0, 0, 0, 1);
    }
    </style>
</head>

<body style="scroll-behavior: smooth;">
    <div class="vitclub">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" id="club1">
            <header class="mb-auto" style="position:sticky">
                <div class="navtop">
                    <h3 class="float-md-start mb-0" style="margin-left:20px;"><a href="Home.php"
                            style="text-decoration:none; color:white;">Vit Eventz</a></h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end mx-5">
                        <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="Home.php">Home</a>
                        <a class="nav-link fw-bold py-1 px-0" href="Clubs.php">Clubs</a>
                        <a class="nav-link fw-bold py-1 px-0" href="Home.php#Section2">About Us</a>
                        <a class="nav-link fw-bold py-1 px-0 active" href="topevents.php">Events</a>
                        <a class="nav-link fw-bold py-1 px-0" href="imagegallery.php">Gallery</a>
                        <a class="nav-link fw-bold py-1 px-0" href="index.html">Stay in Touch</a>
                    </nav>
                </div>
            </header>
            <main class="px-3">
                <div class="div1 card">
                    <div class="circle"></div>
                    <div class="content">
                        <h2>TopEvents</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#events2">Explore</a>
                    </div>
                    <img src="images/home-img.png" alt="">
                </div>
            </main>
        </div>
        <hr width="50%" style="margin-left:auto;margin-right:auto;height:3px;background-color:black">
        <div id="events2">
            <center>
                <h1>Events</h1>
            </center>
            <br><br><br>

            <div class="row g-0">
                <?php
                  $sql= "SELECT Ename,Cname,Venue FROM Events";
                  $result = mysqli_query($conn,$sql);
                  if($result->num_rows>0){
                  while($rows=$result->fetch_assoc()){
                    echo '
                    <div class="card mb-5 col-lg-6 col-md-12 col-sm-12" style="max-width: 450px; display:flex; margin-left:125px">
                        <div class="row g-0">
                            <div class="col-md-6 g-0" >
                                <img src="images/rivera.png" class="img-fluid rounded-start" alt="..."
                                    style="height:190px">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body" style="text-align:justify">
                                    <h5 class="card-title">'.$rows['Ename'].'</h5>
                                    <p class="card-text">'.$rows['Cname'].'</p>
                                    <p class="card-text">'.$rows['Venue'].'</p>
                                    <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">Register</button>
                                </div>
                            </div>
                        </div>
                    </div>';
                  }
                }
                ?>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Event Registration</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="topevents.php">
                                    <div class="mb-3">
                                        <label for="Registration-no" class="col-form-label">Registration no:</label>
                                        <input type="text" class="form-control" id="Registration-no" name="regno"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-name" class="col-form-label">Name:</label>
                                        <input type="text" class="form-control" id="recipient-name" name="rname"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="recipient-email" class="col-form-label">Email:</label>
                                        <input type="email" class="form-control" id="recipient-email" name="remail"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="event-name" class="col-form-label">Event name:</label>
                                        <select name="ename" id="" style="width: 85%; height:42px;border-radius:7px">
                                                <option value="-">------------------SELECT------------------</option>
                                                    <?php
                                                    $sql = "Select Ename from events";
                                                    $result = mysqli_query($conn, $sql);
                                                    if ($result->num_rows > 0) {
                                                        while ($rows = $result->fetch_assoc()) {
                                                            echo '
                                                                <option value=' . $rows['Ename'] . '>' . $rows['Ename'] . '</option>
                                                            ';
                                                        }
                                                    }
                                                    ?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phno" class="col-form-label">Students Mobile No:</label>
                                        <input type="text" class="form-control" id="phno" name="phno" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="year" class="col-form-label">Current year:</label>
                                        <select name="year" id="year" required>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>
                                        <!-- <input type="text" class="form-control" id="year" name="year"> -->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <input type="submit" name="eventsubmit" class="btn btn-primary" value="Apply">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>