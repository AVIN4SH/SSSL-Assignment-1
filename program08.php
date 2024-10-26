<!-- Write a PHP program to count the number of vowels in a given string. -->
<?php
    echo "Enter a string: ";
    $str = trim(fgets(STDIN));
    $vowels = preg_match_all('/[aeiouAEIOU]/', $str);
    echo "Number of vowels: $vowels\n";
?>
