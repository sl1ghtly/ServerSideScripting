<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Menu</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <h1><b>Card Clicking Game</b></h1>
    <p><b>Menu</b></p>
    <?php
        //start session
        session_start();
        //take variables from post method into session variables
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['nickname'] = $_POST['nickname'];
        //print out a welcome message
        echo "<p>Welcome <b>" . $_SESSION['name'] . "</b></p>";
        echo "<p>Current Nickname: <b>" . $_SESSION['nickname'] . "</b></p>";
    ?>
    <div class="wrapper">
        <button type="submit" class="btn btn-outline-danger" name="level1">
            <a href="level1.php">Level 1</a>
        </button>
        &nbsp;
        <button type="submit" class="btn btn-outline-danger" name="level2">
            <a href="level2.php">Level 2</a>
        </button>
        &nbsp;
        <button type="submit" class="btn btn-outline-danger" name="best">
            <a href="best.php">Best Scores</a>
        </button>
        &nbsp;
        <button type="submit" class="btn btn-outline-danger" name="help">
            <a href="instructions.php">Instructions</a>
        </button>
    </div>
</body>
</html>