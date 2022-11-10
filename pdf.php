<?php include 'config.php' ?>
<?php include 'header.php' ?>
<!-- The sidebar -->
<div class="sidebar">
    <a href="index.php">Clubs</a>
    <a href="candidates.php">Cadidates Applied</a>
    <a href="Events.php">Events</a>
    <a href="eventcandidates.php">Event Registration</a>
    <a href="clubactivity.php">Club Activity</a>
    <a class="active" href="pdf.php">Event Report Generator</a>
</div>
<div class="content">
    <div class="container">
        <form class="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Cname">Club Name</label>
                <input type="text" name="Cname" value="">
            </div>
            <div class="mb-3">
                <label for="Ename">Event Name</label>
                <input type="text" name="Ename" value="">
            </div>
            <div class="mb-3">
                <label for="Date">Date</label>
                <input type="date" name="Date" value="">
            </div>
            <div class="mb-3">
                <label for="venue">Venue</label>
                <input type="text" name="Venue" value="">
            </div>
            <div class="mb-3">
                <label for="parti">No of Participants</label>
                <input type="text" name="participants" value="">
            </div>
            <div class="mb-3">
                <label for="Desc">Description</label>
                <textarea name="Desc" rows="8" cols="80"></textarea>
            </div>
            <div class="mb-3">
                <label for="Images">Upload Event Images</label>
                <input type="file" name="file" multiple />
            </div>
            <div class="mb-3">
                <label for="collab">Collaborating Agency/Club/Chapter/Others:</label>
                <input type="text" name="collab" value="">
            </div>
            <div class="mb-3">
                <label for="Gspeak">Guest Speaker</label>
                <input type="text" name="Guest" value="">
            </div>
            <div class="mb-3">
                <label for="Ecoordinate">Event Coordinator</label>
                <input type="text" name="Coordinator" value="">
            </div>
            <div class="mb-3">
                <label for="Host">Host</label>
                <input type="text" name="Host" value="">
            </div>
            <input type="submit" name="submitpdf" value="Submit">
        </form>
    </div>
</div>
</body>

</html>