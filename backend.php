<?php

$username = $_POST["username"];
$password = $_POST["password"];

$nota1 = 6;
$nota2 = 8;

$media = ($nota1 + $nota2) /2;

echo "A média das notas é: {$media}";