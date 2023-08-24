<?php 
 session_start();

  $_SESSION['count'] = 0;
 // print_r ($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Currency Convertor</title>
	<link type="text/css" rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
        $err1 = "";
        $err2 = "";
        $err3 = "";
       // print_r ($_POST);

        
        // if the user has entered an name with less than three characters
        // or a numeric value display a warning message to the user.
        // If the CAO does not start with the Letter L followed by 
        // eight digits flag an error.
        if(isset($_POST['name'])) 
        {
            session_start();
            $_SESSION['name'] = $_POST['name'];
            $_SESSION['cao'] = $_POST['cao'];
            $_SESSION['password'] = $_POST['password1'];
            $_SESSION['dice'] = $_POST['dice'];

            if (1 === preg_match('~[0-9]~', ($_POST['name'])))
            {
                $err1 = "Error name with numbers";
            }
            if (!str_starts_with($_POST['cao'], "L"))
            {
                $err2 = "Error CAO must start with L";
            }
            if (strlen($_POST['cao']) != 9)
            {
                $err2 = "Error CAO must have 8 numbers after the L";
            }
            if ($_POST['password1'] != $_POST['password2'])
            {
                $err3 = "Error passwords are not the same";
            }
            if ($err1 == "" AND $err2 == "" AND $err3 == "")
            {
                header("Location: Page2.php");
            }
        }
        else 
        {
            // not set 
        }

    ?>

	<h1>CA3 class test Page 1</h1>

    <form action="Page1.php" method="post">

        <table>
            <tr><td>Name: </td>
            <td><input type="text" name="name" value="<?php  ?>"> </td>
            <td id="error1"> <?php echo $err1;?></td></tr>

            <tr><td>CAO:</td><td><input type="text" name="cao" value="<?php  ?>">
            </td><td id="error2">
            <?php echo $err2;?>
            </td></tr>   
            </td></tr>
            <tr><td>Password 1:</td><td><input type="password" name="password1"/></td><td id="error3">
              <?php echo $err3; ?>  
            </td></tr>
            <tr><td>Password 2:</td><td><input type="password" name="password2"/></td></tr>
            <tr><td><label >Number of dice to roll:</label></td><td>
                <input type="radio" id="two" value="two" name="dice" checked> 
                <label for="two">Two</label>
		        <input type="radio" id="three" value="three" name="dice">
                <label for="three">Three</label>
            </td></tr>
            <tr><td align="center"><input type="submit" name="play" value="Roll the dice">
            </td></tr>
        </table>

    </form>
            
    <hr>


</body>

</html>