<!-- Write a PHP program to check if a number is a palindrome.  -->
<?php
    echo "Enter a number: ";
    $num = trim(fgets(STDIN));
    if ($num == strrev($num)) {
        echo "$num is a palindrome\n";
    } else {
        echo "$num is not a palindrome\n";
    }
?>
