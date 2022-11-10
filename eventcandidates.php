<?php include 'config.php' ?>
<?php include 'header.php' ?>
<!-- The sidebar -->
<div class="sidebar">
  <a href="index.php">Clubs</a>
  <a href="candidates.php">Cadidates Applied</a>
  <a href="Events.php">Events</a>
  <a href="eventcandidates.php" class="active">Event Registration</a>
  <a href="clubactivity.php">Club Activity</a>
  <a href="pdf.php">Event Report Generator</a>
</div>
<div class="content">
<form method="post">
    <input type="text" name= "Esearch" placeholder="Enter Event Name">
    <input type="submit" id="btnsearch" value="Search" name="search">
</form>
  <table class="table">
    <thead>
      <tr>
        <th>#Regno</th>
        <th>Candidate Name</th>
        <th>Candidate Email</th>
        <th>Event Name</th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_POST['search'])){
      $searchval=$_POST['Esearch'];
      if($searchval==""){
        $sql = " SELECT Regno,Name,Email,Ename,Phno FROM registration";
      }
      else{
        $sql = " SELECT Regno,Name,Email,Ename,Phno FROM registration WHERE Ename= '$searchval'";
      }

      $result= mysqli_query($conn,$sql);
      if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo "
        <tr>
        <td>".$rows['Regno']."</td>
        <td>".$rows['Name']."</td>
        <td>".$rows['Email']."</td>
        <td>".$rows['Ename']."</td>
        <td>".$rows['Phno']."</td>
        </tr>
        ";
      }
    }
  }
    ?>
    </tbody>
  </table>
</div>
