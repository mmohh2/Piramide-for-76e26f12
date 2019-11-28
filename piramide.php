<?php

echo "Hoeveel stapels wil je hebben?";
$a = readline(">");
for ($i = 1; $i < 5; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        echo "\n"; 
    }
    for ($j = 1; $j <= $i; $j++) {
        echo " * ";
    }
    echo '';
}



