<?php
    echo "Enter a string: ";
    $str = trim(fgets(STDIN));
    $vowels = preg_match_all('/[aeiouAEIOU]/', $str);
    echo "Number of vowels: $vowels\n";
?>
