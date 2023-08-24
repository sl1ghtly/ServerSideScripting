<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Best Times</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <h1><b>Card Clicking Game</b></h1>
    <p><b>Best Times</b></p>
    <?php
    //continue session
    session_start();
    //save session variables into local file variables
    $realname = $_SESSION['name'];
    $nickname = $_SESSION['nickname'];
    //print out person playing
    echo "<p>Person Viewing: <b>" . $realname . "</b></p>";
    echo "<p>Current Nickname: <b>" . $nickname . "</b></p>";
    ?>
    <div class="wrapper">
    <p><b>Top 5 Scores for Level 1:</b></p>
        <?php
            //scores belonging to sl1ghtly and slightly are there to show that this works
            //set file name and try top open it
            $fn1 = "scores1.txt";
            $scores1 = fopen($fn1, "r") or die("Unable to open file!");
            //add each line to an array
            $lines1 = file($fn1);
            sort($lines1, SORT_NATURAL);
            //top 5 for level 1
            for ($i=0; $i < 5; $i++)
            {
                //split the lines and display the score
                $score_part = explode(',', $lines1[$i]);
                echo '<p style="padding-top: 0%;">' . $i + 1 . '. Nick: ' .  $score_part[1] . ' | Score: ' . $score_part[0] . '</p>';
            }
        ?>
    </div>
    <div class="wrapper">
    <p><b>Top 5 Scores for Level 2:</b></p>
        <?php
            //scores belonging to sl1ghtly and slightly are there to show that this works
            //set file name and try top open it
            $fn2 = "scores2.txt";
            $scores2 = fopen($fn2, "r") or die("Unable to open file!");
            //add each line to an array
            $lines2 = file($fn2);
            sort($lines2, SORT_NATURAL);
            //top 5 for level 1
            for ($i=0; $i < 5; $i++)
            {
                //split the lines and display the score
                $score_part = explode(',', $lines2[$i]);
                echo '<p style="padding-top: 0%;">' . $i + 1 . '. Nick: ' .  $score_part[1] . ' | Score: ' . $score_part[0] . '</p>';
            }
        ?>
    </div>
    <div class="wrapper">
        <button type="button" class="btn btn-outline-danger" onclick="goBack()">Go Back</button>
    </div>
    <script>
    function goBack()
    {
        window.history.back();
    }
    </script>
</body>
</html>