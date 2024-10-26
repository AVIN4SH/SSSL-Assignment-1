<?php
    $arr = [];
    echo "Enter 5 elements:\n";
    for ($i = 0; $i < 5; $i++) {
        $arr[$i] = trim(fgets(STDIN));
    }
    $largest = max($arr);
    echo "The largest element in the array is: $largest\n";
?>
