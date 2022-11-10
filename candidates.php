<?php include 'config.php' ?>
<?php include 'header.php' ?>
<!-- The sidebar -->
<div class="sidebar">
  <a href="index.php">Clubs</a>
  <a class="active" href="candidates.php">Cadidates Applied</a>
  <a href="Events.php">Events</a>
  <a href="eventcandidates.php">Event Registration</a>
  <a href="clubactivity.php">Club Activity</a>
  <a href="pdf.php">Event Report Generator</a>

</div>
<div class="content">
<form method="post">
    <input type="text" name= "Csearch" placeholder="Enter Club/Chapter Name">
    <input type="submit" id="btnsearch" value="Search" name="search">
</form>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#Regno</th>
        <th scope="col">Candidate Name</th>
        <th scope="col">Candidate Email</th>
        <th scope="col">Club/chapter Name</th>
        <th scope="col">Domain</th>
      </tr>
    </thead>
    <tbody>
    <?php
    if(isset($_POST['search'])){
      $searchval=$_POST['Csearch'];
      if($searchval==""){
        $sql = " SELECT Regno,Name,Email,Cname,Dname FROM students";
      }
      else{
        $sql = " SELECT Regno,Name,Email,Cname,Dname FROM students WHERE Cname= '$searchval'";
      }

      $result= mysqli_query($conn,$sql);
      if($result->num_rows>0){
      while($rows=$result->fetch_assoc()){
        echo "
        <tr>
        <td>".$rows['Regno']."</td>
        <td>".$rows['Name']."</td>
        <td>".$rows['Email']."</td>
        <td>".$rows['Cname']."</td>
        <td>".$rows['Dname']."</td>
        </tr>
        ";
      }
    }
  }
    ?>
    </tbody>
  </table>
</div>
