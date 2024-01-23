<?php
require_once '../vendor/autoload.php';
//namespace OnPHPoint\Composer;


use OnPHPoint\Composer\QRCodeGenerator;


//use OnPHPoint\QRCodeGenerator;
//use OnPHPoint\QRCodeGenerator\QRCodeGenerator;

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

$result = QRCodeGenerator::getQRCode('1234')->getDataUri();

echo "<img src='$result'></img>";

echo <<<AAA
</body>
</html>
AAA;
