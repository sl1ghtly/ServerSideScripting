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
<body>
    <h1>Welcome to the <b>Card Clicking Game</b></h1>
    <p>Made by <b>Eryk Gloginski - L00157413</b></p>
    <div class="wrapper">
        <form action="menu.php" method="POST">
            <p>Name</p><input type="text" name="name">
            <p>Game Nickname</p><input type="text" name="nickname">
            <br><br>
        <button type="submit" name="submit" class="btn btn-outline-danger">Enter the Menu</button>
        </form>
    </div>
</body>
</html>