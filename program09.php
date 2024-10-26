<!-- Write a PHP program to print all prime numbers between 1 and 100 -->
<?php
    function isPrime($num) {
        if ($num <= 1) return false;
        for ($i = 2; $i <= sqrt($num); $i++) {
            if ($num % $i == 0) return false;
        }
        return true;
    }
    echo "Prime numbers between 1 and 100:\n";
    for ($i = 2; $i <= 100; $i++) {
        if (isPrime($i)) echo "$i ";
    }
    echo "\n";
?>
