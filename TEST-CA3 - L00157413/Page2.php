<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Dice Values</title>
	<meta name="viewport" content="width=device-width, intial-scale=1">
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>
<body>
    <h2>Page two</h2>
<?php
session_start();
//print_r ($_SESSION);
$dice = $_SESSION['dice'];
$_SESSION['match'] = 0;

    if ($_SESSION['count']== 0 )  {
        $_SESSION['count'] =  $_SESSION['count']  + 1 ;

    } else {

        $_SESSION['count'] =  $_SESSION['count']  + 1 ;
        // add page 2 code here
        if ($dice == 'two')
        {
            // display 2 dice
            $img1 = rand(1,6);
            $img2 = rand(1,6);
            echo '<img src="images/' . $img1 . '.png" name="' . $img1 . '.png" width="100px" height="100px">';
            echo '<img src="images/' . $img2 . '.png" name="' . $img2 . '.png" width="100px" height="100px">';
            if ($img1 == $img2)
            {
                $_SESSION['match'] = $img1;
                header("Location: Page3.php");
            }
        }

        else
        {
            // display 3 dice
            $img1 = rand(1,6);
            $img2 = rand(1,6);
            $img3 = rand(1,6);
            echo '<img src="images/' . $img1 . '.png" name="' . $img1 . '.png" width="100px" height="100px">';
            echo '<img src="images/' . $img2 . '.png" name="' . $img2 . '.png" width="100px" height="100px">';
            echo '<img src="images/' . $img3 . '.png" name="' . $img3 . '.png" width="100px" height="100px">';
            if ($img1 == $img2 AND $img1 == $img3)
            {
                $_SESSION['match'] = $img1;
                header("Location: Page3.php");
            }
        }
    }


?>

<form action="Page2.php" method="post">
    <div><h3>Click to repeat dice scores until match match</h3></div>
    <input type="submit" name="roll" value="press to roll dice">
</form>
