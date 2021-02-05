<?php
require_once "./vendor/autoload.php";

use Bhut\Challenge;

$challenge = new Challenge();

for ($n = 1; $n <= 100; $n++) {
    echo $challenge->verifyValue($n) . "<br>";
}
