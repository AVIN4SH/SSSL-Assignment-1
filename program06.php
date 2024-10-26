<!-- Write a PHP program to check if a string is a palindrome. -->
<?php
    echo "Enter a string: ";
    $str = trim(fgets(STDIN));
    if ($str == strrev($str)) {
        echo "$str is a palindrome\n";
    } else {
        echo "$str is not a palindrome\n";
    }
?>
