<?php

require_once('vendor/autoload.php');

echo <<<AAA
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
AAA;

$result = QRCodeGenerator::getQRCode();

echo "<img src='$result'></img>";

echo <<<AAA
</body>
</html>
AAA;
