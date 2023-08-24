<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>View Afternoon Movies</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <h1><b>Cinema DB</b></h1>
    <p>Made by <b>Eryk Gloginski - L00157413</b></p>
    <div class="wrapper">
        <p><b>View Afternoon movies.</b></p>
        <table id="table1">
        <tr>
            <th>Movie ID</th>
            <th>Movie Name</th>
            <th>Movie Length</th>
            <th>Movie Start</th>
            <th>Date Released</th>
            <th>Director</th>
            <th>Genre</th>
        </tr>
        <?php
        // make the connection
        $con = mysqli_connect("localhost", "root", "", "cadb");

        // check connection
        if (!$con) 
        {
            die("Connection failed: " . $con->connect_error);
        }

        // sql statement to get all details from movie
        $sqlStatm = "SELECT * FROM movie WHERE MovieStart BETWEEN '15:00' AND '18:00'";
        $result = mysqli_query($con, $sqlStatm);
        $numOfRows = mysqli_num_rows($result);
        if ($numOfRows > 0) 
        {
            while($row = mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>" . $row['MovieID'] . "</td>";
                echo "<td>" . $row['MovieName'] . "</td>";
                echo "<td>" . $row['MovieLength'] . "</td>";
                echo "<td>" . $row['MovieStart'] . "</td>";
                echo "<td>" . $row['DateReleased'] . "</td>";
                echo "<td>" . $row['Director'] . "</td>";
                echo "<td>" . $row['Genre'] . "</td>";
                echo "</tr>";
            }
        }
        else
        {
            echo "<p>No info in the database.</p>";
        }
        mysqli_close($con);
        ?>
        </table>
    </div>
    <br><br>
    <div class="wrapper">
        <a href="addMovie.php" name="submit" class="btn btn-outline-danger">Add Movie</a>
        <a href="viewMovie.php" name="submit" class="btn btn-outline-danger">View All Movies</a>
        <a href="viewAfternoon.php" name="submit" class="btn btn-outline-danger">View Afternoon Movies</a>
        <a href="viewEvening.php" name="submit" class="btn btn-outline-danger">View Evening Movies</a>
        <a href="editMovie.php" name="submit" class="btn btn-outline-danger">Edit Movie</a>
        <a href="removeMovie.php" name="submit" class="btn btn-outline-danger">Remove Movie</a>
    </div>
</body>
</html>