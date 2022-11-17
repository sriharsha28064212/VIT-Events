<?php
session_start();
$server = 'localhost:3322';
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
if(!empty($_POST['submitpdf']))
{
  $Cname = $_POST['Cname'];
  $Ename = $_POST['Ename'];
  $Date = $_POST['Date'];
  $Venue = $_POST['Venue'];
  $Participants = $_POST['participants'];
  $Desc = $_POST['Desc'];
  $collab = $_POST['collab'];
  // $file_name=$_FILES["files"]["name"];
  $speaker = $_POST['Guest'];
  $coordinate = $_POST['Coordinator'];
  $host = $_POST['Host'];
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileType = $_FILES['file']['type'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $fileTypeAllowed = array('png', 'jpeg', 'jpg');
  if (in_array($fileActualExt, $fileTypeAllowed)) {
      if ($fileError === 0) {
          if ($fileSize < 1000000) {
              $fileNameNew = uniqid('', true) . "." . $fileActualExt;
              $fileDestination = 'uploads/' . $fileNameNew;
              move_uploaded_file($fileTmpName, $fileDestination);
              //echo "File Uploaded Successfully " . $fileNameNew;
              $query3 = "INSERT INTO `pdf`(`pdfimage`) VALUES ('$fileNameNew')";
              $result = mysqli_query($conn, $query3);
              if (!$result) {
                  $error = 'incorrect';
              }
          }
          else {
              echo "Your file size is TOO big ";
          }
      }
      else {
          echo "There is an error in uploading your file!!!";
      }
  }
  else {
      echo "You can't upload the file of this type";
  }
  //$png = "C:/xampp/htdocs/Iwp-lab/Project/vitlogo.png";
  require("C:/xampp/htdocs/VITEVENTS/fpdf184/fpdf.php");

  class myPDF extends FPDF{
    function myCell($w,$h,$x,$t){
      $height = $h/4;
      $first = $height+2;
      $second = $height+$height+$height+3;
      $third = $height+$height+$height+$height+4;
      $fourth = $height+$height+$height+$height+$height+5;
      $fifth = $height+$height+$height+$height+$height+$height+6;
      $sixth = $height+$height+$height+$height+$height+$height+$height+7;
      $seventh = $height+$height+$height+$height+$height+$height+$height+$height+8;
      $len = strlen($t);
      if($len>15){
        $txt = str_split($t, 72);
        $this->SetX($x);
        //$this -> Cell(0,10,"Event Description: ",0,1);
        $this->Cell($w, $first, $txt[0],'','','');
        $this->SetX($x);
        $this->Cell($w, $second, $txt[1],'','','');
        $this->SetX($x);
        $this->Cell($w, $third, $txt[2],'','','');
        $this->SetX($x);
        $this->Cell($w, $fourth, $txt[3],'','','');
        $this->SetX($x);
        $this->Cell($w, $fifth, $txt[4],'','','');
        // $this->SetX($x);
        // $this->Cell($w, $sixth, $txt[5],'','','');
        // $this->SetX($x);
        // $this->Cell($w, $seventh, $txt[6],'','','');
        $this->SetX($x);
        $this->Cell($w, 50, '','LTRB',0,'L',0);
      }else{
        $this->SetX($x);
        $this->Cell($w, $h,$t,'LTRB',0,'L',0);
      }
    }
  }
  $pdf = new FPDF();
  $pdf = new myPDF();
  $pdf ->AddPage();
  $pdf -> SetFont("Arial","",16);

  // $pdf -> Cell(40,15,$png,1,1,'C');

  // $name = 'C:/xampp/htdocs/Iwp-lab/Project/vitlogo.png';
  // $fp = fopen($name, 'rb');
  // $pdf -> Cell(40,15,fpassthru($fp).fclose($fp),1,1,'C');

  $pdf -> Image('images/vitlogo.png',60,0,90,50,'');
  $pdf -> Cell(0,10,"",0,1);
  $pdf -> Cell(0,10,"",0,1);
  $pdf -> Cell(0,10,"",0,1);
  $pdf -> Cell(0,10,"OFFICE OF STUDENT'S WELFARE",0,1,'C');
  $pdf -> Cell(0,8,"Event Report 2022",0,1,'C');
  $pdf -> Cell(0,10,"",0,1);
  //CNAME
  $pdf -> Cell(60,30,"Club Name",1,0,'C');
  $pdf -> Cell(0,30,$Cname,1,1,'C');
  //ENAME
  $pdf -> Cell(60,30,"Event Name",1,0,'C');
  $pdf -> Cell(0,30,$Ename,1,1,'C');
  //Date and time
  $pdf -> Cell(100,20,"Date: ".$Date,1,0,'C');
  $pdf -> Cell(0,20,"Time: ",1,1,'C');

  //venue and participants
  $pdf -> Cell(100,20,"Venue: ".$Venue,1,0,'C');
  $pdf -> Cell(0,20,"No. of Participants: ".$Participants,1,1,'C');

  //desc
  //require("wordwrap.php");
  //$new = $pdf -> WordWrap($desc,120);
  //$pdf = new myPDF();
  //$pdf ->AddPage();
  $pdf -> SetFont("Arial","",16);
  $w = 0;
  $h = 39;
  $x = $pdf->GetX();
  $pdf-> myCell($w,$h,$x,"Event Description: \n".$Desc);
  $pdf -> Ln();
  $sql="SELECT `pdfimage` FROM `pdf`";
  $pdf -> Cell(100,20,"Images",0,0,'L');
  $result=mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
        $pdf -> Image($_SERVER["DOCUMENT_ROOT"].'/VITEVENTS/uploads/'. $row['pdfimage'] .'',60,230,90,50,'');
        $pdf -> Ln();
      }}

  $pdf -> Cell(0,10,"Collaborating Agency/Club/Chapter/Others: ".$collab,1,1,'');

  ////CNAME
  $pdf -> Cell(60,30,"Guest Speaker",1,0,'C');
  $pdf -> Cell(0,30,$speaker,1,1,'C');

  //Coordinator
  $pdf -> Cell(60,30,"Coordinator",1,0,'C');
  $pdf -> Cell(0,30,$coordinate,1,1,'C');

  //Host
  $pdf -> Cell(60,30,"Host",1,0,'C');
  $pdf -> Cell(0,30,$host,1,1,'C');


  $pdf->output();

}
?>
