<?php 
$title = "Index";
include 'includes/header.php'?>

    <!-- Basic HTML -->
    
    <h1>Hello World - PHP Primer</h1>

    <?php
    
    //Printing to HTML using echo
    echo 'Hello PHP'; 
    echo '<br>';
    echo 'Second Line';
    echo '<br>';


    ?>
    
    <?php


        //declare variable
        $name = "Racky7";
        $age = 19;
        echo $name;
        // echo variable
        echo '<h1>My Name is: '.$name.'</h1>';
        echo '<h1>My Age is: '.$age.'</h1>';

        //echo using double quotes and interpolation
        echo "<h1>My Name is: ".$name."</h1>"

    ?>
<button>CLICK ME!</button>
<?php require 'includes/footer.php'?>