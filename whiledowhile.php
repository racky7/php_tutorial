<?php
$title = "While do while loop";
 include 'includes/header.php'?>

    <h1>While Loop</h1>

    <?php
        $grade =0;
        while($grade < 10){
            echo '<p>I am Less Than 10</p>';
            $grade++;
        }

        echo 'EXIT LOOP';
    
    ?>

    <h1>DO WHILE LOOP</h1>

    <?php
        //Post-Conditon Loop
        $grade =0;
        do{
            echo '<p>I AM DO WHILE LOOP</p>';
            $grade++;

        }while($grade < 10);
    ?>

<?php require 'includes/footer.php'?>