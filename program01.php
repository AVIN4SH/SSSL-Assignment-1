<?php
    echo "Enter a number: ";
    $num = trim(fgets(STDIN));
    if ($num % 2 == 0) {
        echo "$num is even\n";
    } else {
        echo "$num is odd\n";
    }
?>
