<?php
    $arr = [];
    echo "Enter 5 elements:\n";
    for ($i = 0; $i < 5; $i++) {
        $arr[$i] = trim(fgets(STDIN));
    }
    $reversed = array_reverse($arr);
    echo "Reversed array: " . implode(" ", $reversed);
// implode: Joins array elements into a single string using parameter passed
?>
