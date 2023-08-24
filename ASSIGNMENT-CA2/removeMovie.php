<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Remove Movies</title>
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
            <form action="remove.php" method="POST">
            <p><b>Enter the ID of the movie to delete.</b></p>
            <p>Movie ID: <input type="number" name="MovieID" maxlength="7"></p>
            <br>
            <button type="submit" name="submit" class="btn btn-outline-danger">Remove the Movie from the Database</button>
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