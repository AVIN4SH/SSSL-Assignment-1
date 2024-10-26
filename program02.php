<!-- Write a PHP program to find the largest of three numbers.  -->
<?php
    echo "Enter three numbers:\n";
    $a = trim(fgets(STDIN));
    $b = trim(fgets(STDIN));
    $c = trim(fgets(STDIN));
    $largest = max($a, $b, $c);
    echo "The largest number is: $largest\n";
?>
