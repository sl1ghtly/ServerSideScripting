<h1>Page Three</h1>
<?php 
session_start();
    // need to display Name, CAO and password here
    // also need to show the image of the matching dice.
    echo $_SESSION['name'] . 'CAO(' . $_SESSION['cao'] . ')<br>';
    echo 'password used = ' . $_SESSION['password'] . '<br>';
    echo '<img src="images/' . $_SESSION['match'] . '.png" name="' . $_SESSION['match'] . '.png" width="100px" height="100px">';

    ?>
    <p>The dice matched on = <?php echo $_SESSION['match'] ?></p>;
    
    <?php
    
    $fn = fopen("newfile.txt", "w") or die("Unable to open file!");
    // write to file here
    $text = $_SESSION['name'] . "\nCAO number = " . $_SESSION['cao'] . "\nyour password today was " . $_SESSION['password'] . "\nYour dice score was " . $_SESSION['match'] ;
    fwrite($fn, $text . "\n");
    fclose($fn);