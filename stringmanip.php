<?php
$title = "String Manip";
include 'includes/header.php'?>

    <?php

        //Concatination of strings
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "rac ky7 ";

        echo $phrase1 . ", named Racky, " .$phrase2;
        echo '<br/>';
        echo '<br/>';

        //String transformation

        echo 'Uppercase first letter: ' . ucfirst($name).'</br>';

        echo 'Uppercase first letter of each word: ' . ucwords($name).'</br>';

        echo 'Uppercase case: ' . strtoupper($name).'</br>';

        echo 'Lower case: ' . strtolower($name).'</br>';

        echo '<hr/>';
        echo 'Repeat String: '.strtoupper( str_repeat($name,10)). '<br/>';

        echo 'Get a Substring: '. substr($name,2,4).'<br/>';

        echo 'Get position string: '.strpos($name,'c').'<br/>';

        //Returns NULL

        echo 'Find Character "c": '.strchr($name,'c').'<br/>';

        echo 'Find Length of String : '.strlen($name).'<br/>';

         






    ?>
    
    <?php require 'includes/footer.php'?>