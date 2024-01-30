<?php
namespace OnPHPoint\Composer;
header('Content-Type: image/png');
require_once '../vendor/autoload.php';

use OnPHPoint\Composer\QRCodeGenerator;


$telnr = $_GET['tel'];
//if (strlen($telnr)) {
//    return
//}

$res = QRCodeGenerator::getQRCode($telnr);

echo $res->getString();


