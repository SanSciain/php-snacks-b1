<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];
$at_pos = strpos($email, "@");
$point_pos = strpos($email, ".");
var_dump($name);
var_dump($email);
var_dump($age);
var_dump($at_pos);
var_dump($point_pos);
if (strlen($name) > 3 && ($at_pos !== false && $point_pos !== false) && is_numeric($age)) {
    echo "Accesso Riuscito";
} else {
    echo "Accesso Negato";
}
