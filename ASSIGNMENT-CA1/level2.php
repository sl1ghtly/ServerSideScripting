<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Level 2</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <h1><b>Card Clicking Game</b></h1>
    <p><b>Level 2</b></p>
    <?php
    //continue session
    session_start();
    //save session variables into local file variables
    $realname = $_SESSION['name'];
    $nickname = $_SESSION['nickname'];
    //print out person playing
    echo "<p>Person Playing: <b>" . $realname . "</b></p>";
    echo "<p>Current Nickname: <b>" . $nickname . "</b></p>";
    //level variables
    $totalCards = 10;
    $redCards = 2;
    $cards = [];
    //for loop to add required level cards into array
    for ($i = 1; $i <= $totalCards; $i++) 
    {
        //add cards into array
        array_push($cards, $i . ".png");
    }
    //for loop to add a red card/s to the array
    for ($i = 0; $i < $redCards; $i++) 
    {
        //add red card/s
        array_push($cards, "cardRed.png");
        $totalCards++;
    }
    ?>
    <div class="wrapper">
        <form action="level2.php" method="post">
        <?php
        if(!isset($_POST['getCard'])) 
        {
            //post this if loading first time
            echo '<p>Game Started!  PLEASE SELECT 2 CHECKBOXES PER IMAGE!!!</p>';
            $_SESSION['counter'] = 0;
            $_SESSION['redcount'] = 0;
            $_SESSION['level'] = 2;
            //main cards array
            $_SESSION['cards'] = $cards;
            shuffle($_SESSION['cards']);
            //backs of images + it's array
            $pic1 = "back.png";
            $pic2 = "back.png";
            $pic3 = "back.png";
            $pic4 = "back.png";
            $pic5 = "back.png";
            $pic6 = "back.png";
            $pic7 = "back.png";
            $pic8 = "back.png";
            $pic9 = "back.png";
            $pic10 = "back.png";
            $pic11 = "back.png";
            $pic12 = "back.png";
            $_SESSION['backs'] = [$pic1,$pic2,$pic3,$pic4,$pic5,$pic6,$pic7,$pic8,$pic9,$pic10,$pic11,$pic12];
        }
        else
        {
            //get the key value from checkbox and check if it's a red card + counter, if nothing is selected adds a 0.5
            echo '<p>Clicks so far: ' . $_SESSION['counter'] . ' </p>';
            //if card was selected then flip it
            if (array_key_exists("cb0", $_POST) && $_POST['cb0'] == 'on')
            {
                $_SESSION['backs'][0] = $_SESSION['cards'][0];
            }
            if (array_key_exists("cb1", $_POST) && $_POST['cb1'] == 'on')
            {
                $_SESSION['backs'][1] = $_SESSION['cards'][1];
            }
            if (array_key_exists("cb2", $_POST) && $_POST['cb2'] == 'on')
            {
                $_SESSION['backs'][2] = $_SESSION['cards'][2];
            }
            if (array_key_exists("cb3", $_POST) && $_POST['cb3'] == 'on')
            {
                $_SESSION['backs'][3] = $_SESSION['cards'][3];
            }
            if (array_key_exists("cb4", $_POST) && $_POST['cb4'] == 'on')
            {
                $_SESSION['backs'][4] = $_SESSION['cards'][4];
            }
            if (array_key_exists("cb5", $_POST) && $_POST['cb5'] == 'on')
            {
                $_SESSION['backs'][5] = $_SESSION['cards'][5];
            }
            if (array_key_exists("cb6", $_POST) && $_POST['cb6'] == 'on')
            {
                $_SESSION['backs'][6] = $_SESSION['cards'][6];
            }
            if (array_key_exists("cb7", $_POST) && $_POST['cb7'] == 'on')
            {
                $_SESSION['backs'][7] = $_SESSION['cards'][7];
            }
            if (array_key_exists("cb8", $_POST) && $_POST['cb8'] == 'on')
            {
                $_SESSION['backs'][8] = $_SESSION['cards'][8];
            }
            if (array_key_exists("cb9", $_POST) && $_POST['cb9'] == 'on')
            {
                $_SESSION['backs'][9] = $_SESSION['cards'][9];
            }
            if (array_key_exists("cb10", $_POST) && $_POST['cb10'] == 'on')
            {
                $_SESSION['backs'][10] = $_SESSION['cards'][10];
            }
            if (array_key_exists("cb11", $_POST) && $_POST['cb11'] == 'on')
            {
                $_SESSION['backs'][11] = $_SESSION['cards'][11];
            }
            //put $_POST associative array into a $tmp var so it can check for red cards
            $tmp = $_POST;
            foreach ($tmp as $key => $value) 
            {
                //if card is red then add 1 to counter and 1 to redcount
                if ($key == 'cardRed_png')
                {
                    //add to red counter if 1 red card is found
                    $_SESSION['redcount'] = $_SESSION['redcount'] + 1;
                    //if 2 or more red cards were found, go to gameover.php
                    if ($_SESSION['redcount'] >= 2)
                    {
                        header('Location: gameover.php');
                    }
                }
            }
        }
        //function to display cards
        function displayImage($imgs, $imgbacks)
        {
            //for loop to display image objects from the imgs array and 2 checkboxes per image
            for ($i = 0; $i < count($imgs); $i++)
            {
                echo '<img src="img/' . $imgbacks[$i] . '" name="' . $imgs[$i] . '" width="100px" height="100px">';
                echo '<input type="checkbox" name="cb' . $i . '">';
                echo '<input type="checkbox" name="' . $imgs[$i] . '">';
            }
        }
        //custom function to display the images and then add one to counter
        displayImage($_SESSION['cards'], $_SESSION['backs']);
        $_SESSION['counter'] = $_SESSION['counter'] + 1;
        echo '<br>';
        ?>
        <input type="submit" name="getCard" class="btn btn-outline-danger">
        </form>
    </div>
</body>
</html>