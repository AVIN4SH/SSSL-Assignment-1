<!-- Write a PHP program to reverse the digits of a number.  -->
<?php
    echo "Enter a number: ";
    $num = trim(fgets(STDIN));
    echo "Reversed number: " . strrev($num) . "\n";
?>
