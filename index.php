<?php include 'config.php' ?>
<?php
if (!isset($_SESSION['email'])) {
  header("Location:login.php");
}
?>
<?php include 'header.php' ?>
<!-- The sidebar -->
<div class="sidebar">
  <a class="active" href="index.php">Clubs</a>
  <a href="candidates.php">Cadidates Applied</a>
  <a href="Events.php">Events</a>
  <a href="eventcandidates.php">Event Registration</a>
  <a href="clubactivity.php">Club Activity</a>
  <a href="pdf.php">Event Report Generator</a>
</div>
<!-- Page content -->
<div class="content">
  <p>
    <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample"
      aria-expanded="false" aria-controls="collapseExample">
      Post Clubs
    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <form method="post">
        <div class="mb-3">
          <label for="ClubName" class="form-label">Club/Chapter Name</label>
          <input type="text" class="form-control" id="ClubName" name="cname">
        </div>
        <div class="mb-3">
          <label for="Domain" class="form-label">Domains</label>
          <input type="text" class="form-control" id="Domain" name="dname">
        </div>
        <div class="mb-3">
          <label for="ClubDesc" class="form-label">Description</label>
          <input type="text" class="form-control" id="ClubDesc" name="cdesc">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>
    </div>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Club/Chapter Name</th>
        <th scope="col">Domains</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $sql = " SELECT Cname,Dname FROM clubs";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      $i = 0;
      while ($rows = $result->fetch_assoc()) {
        echo "
        <tr>
        <td>" . ++$i . "</td>
        <td>" . $rows['Cname'] . "</td>
        <td>" . $rows['Dname'] . "</td>
        </tr>
        ";
      }
    }
    ?>
    </tbody>
  </table>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>