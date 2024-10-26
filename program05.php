<?php
    $num = array();
    $sum = 0;
    echo "Input 5 Numbers:\n";
    for ($i = 0; $i < 5; $i++) {
        $num[$i] = trim(fgets(STDIN));
    }
    foreach ($num as $value) {
        $sum += $value;
    }
    echo "Sum of all Numbers: $sum\n";
?>
