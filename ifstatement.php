<?php
$title = "If satements";
include 'includes/header.php'?>
   <h1>IF statements</h1>
    <?php
        // An if statement that will carry out an action based on the value o the variable

        echo '<h2>If Statement</h2>';

        $grade = 51;
        // **, >, <, <=, >=

        if($grade>=50){
            
            echo '<h3 style="color: green">YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED</h3>';
        }

        $grade = 'B';
        //IF-Else IF-Else
        if($grade == "A"){
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR!</h2>';

        }
        else if($grade == 'B'){
            echo '<h2 style="color: blue">You Did Well</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU HAVE FAILED</h2>';
        }





    ?>


<?php require 'includes/footer.php'?>