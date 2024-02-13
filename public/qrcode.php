<?php
namespace OnPHPoint\Composer;
require_once '../vendor/autoload.php';

use OnPHPoint\Composer\QRCodeGenerator;

$telnr = $_GET['tel'];

$res = QRCodeGenerator::getQRCode($telnr);

header('Content-Type: ' . $res->getMimeType());
echo $res->getString();