<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Instructions</title>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <style>
    </style>
</head>
<body>
    <h1><b>Card Clicking Game</b></h1>
    <p><b>Instructions</b></p>
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
        <p>While playing the game the player clicks 2 checkboxes to the right of the card to turn a card to reveal it's identity and to check if it is a red card.</p>
        <p>If the card is not red, the guess counter goes up by 1. The face value of cards remains on screen after selection.</p>
        <p>If the user clicks on the red card, it gets added to a counter and the game ends if the counter has been reached for it's level.</p>
        <p>There are two levels. Both levels have 12 cards. Level 1 has 1 red card and Level 2 has 2 red cards.</p>
        <p>The end score gets saved to a score file for each level and Top 5 best scores will be shown.</p>
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