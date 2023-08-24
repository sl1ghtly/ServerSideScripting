<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Add Movies</title>
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
            <form action="add.php" method="POST">
            <p><b>Enter the details of the movie. (Do not use "'")</b></p>
            <p>Movie Name: <input type="text" name="MovieName" maxlength="45"></p>
            <p>Movie Length: <input type="text" name="MovieLength"></p>
            <p>Movie Start: <input type="time" name="MovieStart" min="15:00" max="23:00"></p>
            <p>Date Released: <input type="date" name="DateReleased"></p>
            <p>Director: <input type="text" name="Director" maxlength="30"></p>
            <p>Genre: <input type="text" name="Genre" maxlength="20"></p>
            <br>
            <button type="submit" name="submit" class="btn btn-outline-danger">Add the Movie to Database</button>
            </form>
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