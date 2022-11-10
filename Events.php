<?php include 'config.php' ?>
<?php include 'header.php' ?>
<!-- The sidebar -->
<div class="sidebar">
  <a href="index.php">Clubs</a>
  <a href="candidates.php">Cadidates Applied</a>
  <a href="Events.php" class="active">Events</a>
  <a href="eventcandidates.php">Event Registration</a>
  <a href="clubactivity.php">Club Activity</a>
  <a href="pdf.php">Event Report Generator</a>
</div>
<!-- Page content -->
<div class="content">
 <p>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Events
  </button>
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
    <form method="post">
  <div class="mb-3">
    <label for="EventName" class="form-label">Event Name</label>
    <input type="text" class="form-control" id="EventName" name="ename">
  </div>
  <div class="mb-3">
    <label for="ClubName" class="form-label">Club Name</label>
    <input type="text" class="form-control" id="ClubName" name="cname">
  </div>
  <div class="mb-3">
    <label for="Venue" class="form-label">Venue</label>
    <input type="text" class="form-control" id="Venue" name="venue">
  </div>
  <button type="submit" class="btn btn-primary" name="esubmit">Submit</button>
</form>
</div>
</div>
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Event Name</th>
      <th>Club/Chapter Name</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = " SELECT Ename,Cname FROM events";
    $result= mysqli_query($conn,$sql);
    if($result->num_rows>0){
      $i=0;
      while($rows=mysqli_fetch_assoc($result)){
        echo "
        <tr>
        <td>".++$i."</td>
        <td>".$rows['Ename']."</td>
        <td>".$rows['Cname']."</td>
        </tr>
        ";
      }
    }
    ?>
  </tbody>
</table>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>
