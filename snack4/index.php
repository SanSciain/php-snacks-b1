<?php
$array = [];
while (count($array) < 15) {
    $newNumber = rand(1, 100);
    if (!in_array($newNumber, $array)) {
        $array[] = $newNumber;
    }
}
var_dump($array);
