<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Game Over</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <h1><b>Card Clicking Game</b></h1>
    <p><b>Game Over</b></p>
    <?php
    //continue session
    session_start();
    //save session variables into local file variables
    $realname = $_SESSION['name'];
    $nickname = $_SESSION['nickname'];
    //print out person playing
    echo "<p>Congratulations <b>" . $realname . "</b>! Your score will be viewed as <b>" . $nickname . "</b></p><br>";
    ?>
    <div class="wrapper">
        <?php
        //display the counter of amount of clicks
        $counter = $_SESSION['counter'] - 1;
        echo "<p>You scored: " . $counter . "</p>";
        echo "<p>Saving your score...</p>";
        //save score to file
        $fn = '';
        $text = $counter . ',' . $_SESSION['nickname'];
        //check for which level player completed
        if ($_SESSION['level'] == 1)
        {
            $fn = 'scores1.txt';
        }
        else
        {
            $fn = 'scores2.txt';
        }
        //open file and write to the end
        $fn = fopen($fn, "a+");
        //write to the filename the text message and create a new line so it's easier to read from scores files
        fwrite($fn, $text . "\n");
        fclose($fn);
        //move to the splashscreen instantly after submitting score
        header('Location: splash.php');
        ?>
        <button type="button" class="btn btn-outline-danger" action="menu.php">Go Back</button>
    </div>
</body>
</html>