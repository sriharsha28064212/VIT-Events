<?php include 'config.php' ?>
<?php include 'header.php' ?>
<!-- The sidebar -->
<div class="sidebar">
    <a href="index.php">Clubs</a>
    <a href="candidates.php">Cadidates Applied</a>
    <a href="Events.php">Events</a>
    <a href="eventcandidates.php">Event Registration</a>
    <a class="active" href="clubactivity.php">Club Activity</a>
    <a href="pdf.php">Event Report Generator</a>
</div>
<div class="content">
    <div class="container">
        <form method="POST" action="clubactivity.php">
            <div class="mb-3">
                <label for="club-name" class="col-form-label">Club name:</label>
                <select name="cname" id="" style="width: 100%; height:42px;border-radius:7px">
                    <option value="-">------------------------------------------------------------------------SELECT------------------------------------------------------------------------</option>
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
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month1" id="month1">
                    <option value="Jan" selected>Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents1" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec1" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month2" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb" selected>Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents2" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec2" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month3" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar" selected>Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents3" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec3" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month4" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr" selected>Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents4" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec4" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month5" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May" selected>May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents5" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec5" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month6" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June" selected>June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents6" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec6" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month7" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July" selected>July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents7" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec7" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month8" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug" selected>Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents8" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec8" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month9" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept" selected>Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents9" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec9" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month10" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct" selected>Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents10" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec10" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month11" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov" selected>Nov</option>
                    <option value="Dec">Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents11" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec11" id="nrec" required>
            </div>
            <div class="mb-3">
                <label for="month1" class="col-form-label">Month:</label>
                <select name="month12" id="month1">
                    <option value="Jan">Jan</option>
                    <option value="Feb">Feb</option>
                    <option value="Mar">Mar</option>
                    <option value="Apr">Apr</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="Aug">Aug</option>
                    <option value="Sept">Sept</option>
                    <option value="Oct">Oct</option>
                    <option value="Nov">Nov</option>
                    <option value="Dec" selected>Dec</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="nevents" class="col-form-label">No:of Events:</label>
                <input type="number" name="nevents12" id="nevents" required>
            </div>
            <div class="mb-3">
                <label for="nrec" class="col-form-label">No:of Recruitments:</label>
                <input type="number" name="nrec12" id="nrec" required>
            </div>
            <input type="submit" name="actsubmit" class="btn btn-primary" value="Apply">
        </form>
    </div>
</div>