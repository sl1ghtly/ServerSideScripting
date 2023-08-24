<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Splash Screen</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<?php
    // variables
    $name = $_POST['MovieName'];
    $length = $_POST['MovieLength'];
    $start = $_POST['MovieStart'];
    $release = $_POST['DateReleased'];
    $director = $_POST['Director'];
    $genre = $_POST['Genre'];
    // make the connection
    $con = mysqli_connect("localhost", "root", "", "cadb");

    // check connection
    if (!$con) 
    {
        die("Connection failed: " . $con->connect_error);
    }

    // sql statement to put movie details into movie table
    $sqlStatm = "INSERT INTO movie (`MovieID`, `MovieName`, `MovieLength`, `MovieStart`, `DateReleased`, `Director`, `Genre`) VALUES (NULL, '" . $name . "', '" . $length . "', '" . $start . "', '" . $release . "', '" . $director . "', '" . $genre . "');";

    // create record
    if ($con->query($sqlStatm) === TRUE) 
    {
        echo "<p><b>New record created successfully</p></b>";
        // close connection and go to view movies
        mysqli_close($con);
        echo '<br><a href="viewMovie.php" name="submit" class="btn btn-outline-danger">Go back to the Movies List</a>';
    } 
    else 
    {
        echo "Error: " . $sqlStatm . "<br>" . $con->error;
        mysqli_close($con);
        echo '<br><a href="viewMovie.php" name="submit" class="btn btn-outline-danger">Go back to the Movies List</a>';
    }
    
?>