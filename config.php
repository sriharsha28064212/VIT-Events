<?php
session_start();
$server = 'localhost:3315';
$database = 'clubs';
$errors = array();
$name = "";
$password = "";

$conn = mysqli_connect($server, 'root', '', $database) or die("Couldn't connect the database");

if (isset($_POST['rsubmit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $ph_no = $_POST['ph_no'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];

  //form validation
  if (empty($name)) {array_push($errors, "Username is required");  }
  if (empty($email)) {
    array_push($errors, "Email is required");  }
  if (empty($password)) {
    array_push($errors, "password is required");  }
  if ($password != $cpassword) {
    array_push($errors, "Passwords do not match");  }

  // check db for existing user for same Username
  $user_check_query = "SELECT * FROM users WHERE Name='$name' or Email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  if ($user) {
    if ($user['Name'] === $name) {
      array_push($errors, "Username already exists");
    }
    if ($user['Email'] === $email) {
      array_push($errors, "Email in use");
    }  }
  //Registration
  if (count($errors) == 0) {
    $pass = md5($password); //for encryption use md5
    $query = "INSERT INTO users ( Name, ph_no, Email, Password) VALUES ( '$name', '$ph_no', '$email', '$pass')";
    mysqli_query($conn, $query);
    $_SESSION['Name'] = $name;
    $_SESSION['success'] = "Your are now logged in";
    header('location: index.php');  }
  }
//Login
if (isset($_POST['lsubmit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (empty($email)) {
    array_push($errors, "Email is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }
  if (count($errors) == 0) {
    $pass = md5($password);
    $sql = "SELECT * FROM users WHERE `Email`='$email' AND `Password`='$pass'";
    $results = mysqli_query($conn, $sql);

    if (mysqli_num_rows($results)) {
      $_SESSION['email'] = $email;
      $_SESSION['password']=$pass;
      $_SESSION['success'] = "Logged in successfully";
      header('location: index.php');
    }
    else {
      array_push($errors, "Wrong Email/password combination");
    }
  }
}

if (isset($_POST['submit'])) {
  $cname = $_POST['cname'];
  $dname = $_POST['dname'];
  $cdesc = $_POST['cdesc'];

  $query = "INSERT INTO `clubs`(`Cname`, `Dname`, `Cdesc`) VALUES ('$cname','$dname','$cdesc') ";
  if (mysqli_query($conn, $query)) {
    echo "New Club posted";
  }
  else {
    echo "Unable to post";
  }
}

if(isset($_POST['asubmit'])){
  $regno=$_POST['regno'];
  $rname=$_POST['rname'];
  $remail=$_POST['remail'];
  $cname=$_POST['cname'];
  $dname=$_POST['dname'];
  $year=$_POST['year'];
  $about=$_POST['about'];
  $query= "INSERT INTO `students`(`Regno`, `Name`, `Email`, `Cname`, `Dname`, `Cyear`,`About`) VALUES ('$regno','$rname','$remail','$cname','$dname','$year','$about')";
  mysqli_query($conn, $query);
}

if (isset($_POST['esubmit'])) {
  $ename = $_POST['ename'];
  $cname = $_POST['cname'];
  $venue = $_POST['venue'];

  $query = "INSERT INTO `events`(`Ename`, `Cname`, `Venue`) VALUES ('$ename','$cname','$venue') ";
  if (mysqli_query($conn, $query)) {
    echo "New Club posted";
  }
  else {
    echo "Unable to post";
  }
}

if(isset($_POST['eventsubmit'])){
  $regno=$_POST['regno'];
  $rname=$_POST['rname'];
  $remail=$_POST['remail'];
  $ename=$_POST['ename'];
  $phno=$_POST['phno'];
  $year=$_POST['year'];
  $query= "INSERT INTO `registration`(`Regno`, `Name`, `Email`, `Ename`, `Phno`, `Eyear`) VALUES ('$regno','$rname','$remail','$ename','$phno','$year')";
  mysqli_query($conn, $query);
}
if(isset($_POST['actsubmit'])){
  $cname=$_POST['cname'];
  $month=array();
  $ev=array();
  $rec=array();
  for($i=1;$i<13;$i++){
    $mon=$_POST["month".$i.""];
    array_push($month,$mon);
    $eve=$_POST["nevents".$i.""];
    array_push($ev,$eve);
    $recr=$_POST["nrec".$i.""];
    array_push($rec,$recr);
  }
  for($i=0;$i<12;$i++){
    $query="INSERT INTO `activity`(`Cname`, `Month`, `Events`, `Recruitments`) VALUES ('$cname','$month[$i]','$ev[$i]','$rec[$i]')";
    mysqli_query($conn, $query);
  }
}
?>
