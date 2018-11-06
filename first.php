<?php

function divideByRank($n)
{
    $num = 0;
    $count = 0;
    do {
        if ($num % strlen($num) == 0) {
            $count++;
            echo $num." ";
        }
        $num++;
    } while ($count != $n);
}