<?php
$title = "Arrays";
include 'includes/header.php'?>

    <h1>Array</h1>
    <?php

    //a variable
    $num =3;

    // an array
    // only one datatype
    $numbers = array(1,2,3,4,5,6,7,8,9,10,1,1,1,1,232,321);

    //You can access the value in subscript of the array using the index
    echo $numbers[5];

    $size = count($numbers);
    echo "<p>Array Number is size: $size </p>";

    for($count = 0; $count<$size; $count++){
        echo "<p>$numbers[$count]</p>";
    }




    ?>
<?php require 'includes/footer.php'?>