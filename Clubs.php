<?php include 'config.php' ?>
<?php
$sql = "SELECT DISTINCT Cname FROM `activity`";
$result = mysqli_query($conn, $sql);
$grdata = array();
if ($result->num_rows > 0) {
    $i = 0;
    while ($rows = $result->fetch_assoc()) {
        $club = $rows['Cname'];
        $query = "SELECT `Month`, `Events`, `Recruitments` FROM `activity` WHERE Cname= '$club'";
        $result1 = mysqli_query($conn, $query);
        // $grdata[$i]=array();
        while ($rows1 = mysqli_fetch_assoc($result1)) {
            $grdata[] = "['" . $rows1['Month'] . "'," . $rows1['Events'] . "," . $rows1['Recruitments'] . "],";
        }
        // for($j=0;$j<12;$j++){
        //     echo $grdata[$i][$j];
        // }
        $i++;
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/1c9ad4b785.js" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" ></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>

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
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('45', { 'packages': ['corechart'] });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = [];
            var options = {
                title: 'Club Activity',
                legend: { position: 'right', textStyle: { fontSize: 9 } },
                hAxis: { title: 'Month', titleTextStyle: { color: '#333' } },
                vAxis: { minValue: 0 },
                height: 500,
                width: 440,
            };
            <?php
            for ($i = 0; $i < count($grdata) / 12; $i++) {
                echo "
                    data[$i] = google.visualization.arrayToDataTable([
                        ['Month ', 'Total Events ', 'Recruitments '],";
                for ($j = $i * 12; $j < ($i + 1) * 12; $j++) {
                    echo $grdata[$j];
                }
                // foreach($grdata as $grdata){
                //     echo $grdata;
                // }
                // ['Jan',  1000,      400],
                // ['Feb',  1170,      460],
                // ['March',  660,     1120],
                // ['April',  1030,    540],
                // ['May',  3130,      240],
                // ['June',  830,      1040],
                echo "]);";
            }
            ?>
            var gcharts = document.getElementsByClassName('chart');
            for (var i = 0; i < gcharts.length; i++) {
                var chart = new google.visualization.AreaChart(gcharts[i]);
                chart.draw(data[i], options);
            }
        }
    </script>
    <link rel="stylesheet" href="css/clubs.css?version=55">
</head>

<body style="scroll-behavior: smooth;">
    <div class="vitclub">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" id="club1">
            <header class="mb-auto">
                <div class="navtop">
                    <h3 class="float-md-start mb-0" style="margin-left:20px;"><a href="Home.php"
                            style="text-decoration:none; color:white;">Vit Eventz</a></h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end mx-5">
                        <a class="nav-link fw-bold py-1 px-0" aria-current="page" href="Home.php">Home</a>
                        <a class="nav-link fw-bold py-1 px-0 active" href="Clubs.php">Clubs</a>
                        <a class="nav-link fw-bold py-1 px-0" href="Home.php#Section2">About Us</a>
                        <a class="nav-link fw-bold py-1 px-0" href="topevents.php">Events</a>
                        <a class="nav-link fw-bold py-1 px-0" href="imagegallery.php">Gallery</a>
                        <a class="nav-link fw-bold py-1 px-0" href="index.html">Stay in Touch</a>
                    </nav>
                </div>
                <nav class="navbar navbar-expand-lg bg-#94B3FD">
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
                                    <a class=" fw-bold py-1 px-0" href="login.php" target="_blank"><button
                                            class="btn btn-outline-light btn-sm">Admin Login</button></a>
                                </li>
                            </ul>
                        </div>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fas fa-bars"
                                    style="color:#fff; font-size:28px;"></i></span>
                        </button>
                    </div>
                </nav>
            </header>
            <main class="px-3">
                <div class="div1 card">
                    <div class="circle"></div>
                    <div class="content">
                        <h2>Clubs</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                        <a href="#club2">Explore</a>
                        <a data-bs-toggle="modal" data-bs-target="#Registration">Register Club</a>
                    </div>
                    <img src="images/club2.png" alt="">
                </div>
            </main>
        </div>
        <hr width="50%" style="margin-left:auto;margin-right:auto;height:3px;background-color:black">
        <div class="div2 w-100" id="club2">
            <br>
            <center>
                <h2>Clubs</h2>
            </center>
            <br>
            <center>
                <form class="form-inline" method="post">
                    <input class="form-control mr-sm-2" type="text" placeholder="Enter Club Name" aria-label="Search"
                        id="myinput" name="clubsearch">
                    <input type="submit" id="btnsearch" value="Search" name="csearch">
                    <!-- <button class="btn btn-outline-dark my-2 my-sm-0" type="submit" id="btnsearch" name="csearch">Search</button> -->
                </form>
            </center>
            <div class="container">
                <div class="row" style="padding-left: 25px; padding-top: 15px;">
                    <?php
                    if (isset($_POST['csearch'])) {
                        $searchval = $_POST['clubsearch'];
                        if ($searchval == "") {
                            $sql = "SELECT Cname,Dname,Cdesc FROM clubs";
                        } else {
                            $sql = "SELECT Cname,Dname,Cdesc FROM clubs WHERE Cname= '$searchval'";
                        }
                        // $sql= "SELECT Cname,Dname,Cdesc FROM clubs";
                        $result = mysqli_query($conn, $sql);
                        if ($result->num_rows > 0) {
                            while ($rows = $result->fetch_assoc()) {
                                echo '
                                <div class="card col-lg-3 mx-3 mb-3 col-md-6" style="width:20rem;text-align:center">
                                    <div class="card-body" style="text-align:center;">
                                        <h5 class="card-title">' . $rows['Cname'] . '</h5>
                                        <h6 class="card-subtitle mb-2 text-muted">' . $rows['Dname'] . '</h6>
                                        <p class="card-text">' . $rows['Cdesc'] . '</p>
                                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#Recruitment">Apply Now</button>
                                        <button type="button" class="btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#Activity' . $rows['Cname'] . '">View Activity</button>
                                    </div>
                                </div>
                                <div class="modal fade" id="Activity' . $rows['Cname'] . '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel"> ' . $rows['Cname'] . ' Activity</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="chart chart_div"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ';
                            }
                        } else {
                            echo " <center><p style='color:red'>**No Clubs Found </p></center>";
                        }
                    }

                    ?>
                    <div class="modal fade" id="Recruitment" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Recruitment</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="Clubs.php">
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
                                            <label for="club-name" class="col-form-label">Club name:</label>
                                            <select name="cname" id=""
                                                style="width: 85%; height:42px;border-radius:7px">
                                                <option value="-">------------------SELECT------------------</option>
                                                <?php
                                                $sql = "Select Cname from clubs";
                                                $result = mysqli_query($conn, $sql);
                                                if ($result->num_rows > 0) {
                                                    while ($rows = $result->fetch_assoc()) {
                                                        echo '
                                                                <option value=' . $rows['Cname'] . '>' . $rows['Cname'] . '</option>
                                                            ';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="domain-name" class="col-form-label">Domain:</label>
                                            <input type="text" class="form-control" id="domain-name" name="dname"
                                                required>
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
                                        <div class="mb-3">
                                            About Yourself:
                                            <textarea name="about" id="about" cols="30" rows="6"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <input type="submit" name="asubmit" class="btn btn-primary" value="Apply">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Registration" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Club Registration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="Clubs.php" name="submit-to-google-sheet">
                            <div class="mb-3">
                                <label for="c/ch" class="col-form-label">Club or Chapter:</label>
                                <select name="Type" id="c/ch" required>
                                    <option value="">Select</option>
                                    <option value="Club">Club</option>
                                    <option value="Chapter">Chapter</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="club-name" class="col-form-label">Club/Chapter Name:</label>
                                <input type="text" class="form-control" id="club-name" name="Club/Chapter_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="teammem-name" class="col-form-label">Team member Names:</label>
                                <input type="text" class="form-control" id="teammem-name" name="Team_member_names" required>
                                <p style="color:grey">Enter names separated by coma's</p>
                            </div>
                            <div class="mb-3">
                                Motivation:
                                <textarea name="Motivation" id="about" cols="30" rows="6"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="school" class="col-form-label">School:</label>
                                <select name="School" id="school" required>
                                    <option value="">Select</option>
                                    <option value="Scope">Scope</option>
                                    <option value="SAS">SAS</option>
                                    <option value="SBST">SBST</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                Club/Chapter Description:
                                <textarea name="Description" id="about" cols="30" rows="6"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="domain-name" class="col-form-label">Domain:</label>
                                <input type="text" class="form-control" id="domain-name" name="Domain" required>
                            </div>
                            <div class="mb-3">
                                Date of Starting:
                                <input type="date" name="Date_of_starting">
                            </div>
                            <span id="msg" style="color:red"></span>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <input type="submit" name="gsubmit" class="btn btn-primary" value="Apply">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> -->
    <i class="fas fa-angle-up fa-4x" onclick="topFunction()" id="myBtn"></i>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
    <script src="JScripts/script.js"></script>
</body>

</html>