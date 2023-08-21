<?php
function solve($n, $p, $q, $arr) {
    // Write your code here

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$p = intval($first_multiple_input[1]);

$q = intval($first_multiple_input[2]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = solve($n, $p, $q, $arr);

fwrite($fptr, $result . "\n");

fclose($fptr);
