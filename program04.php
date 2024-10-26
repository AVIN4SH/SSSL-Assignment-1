<?php
    function factorial($n) {
        if ($n <= 1) return 1;
        return $n * factorial($n - 1);
    }

    echo "Enter a number: ";
    $num = trim(fgets(STDIN));
    echo "Factorial of $num is: " . factorial($num) . "\n";
?>
