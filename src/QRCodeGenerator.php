<?php

namespace OnPHPoint\Composer;

use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel;
use Endroid\QrCode\Label\LabelAlignment;
use Endroid\QrCode\Label\Font\NotoSans;
use Endroid\QrCode\RoundBlockSizeMode;
use Endroid\QrCode\Writer\PngWriter;

class QRCodeGenerator
{
    static function getQRCode(string $phonenumber): \Endroid\QrCode\Writer\Result\ResultInterface
    {
        return Builder::create()
            ->writer(new PngWriter())
            ->writerOptions([])
            ->data($phonenumber)
            ->encoding(new Encoding('UTF-8'))
            ->errorCorrectionLevel(ErrorCorrectionLevel::High)
            ->size(300)
            ->margin(10)
            ->roundBlockSizeMode(RoundBlockSizeMode::Margin)
//            ->logoPath(__DIR__.'/assets/symfony.png')
//            ->logoResizeToWidth(50)
//            ->logoPunchoutBackground(true)
            ->labelText('📞 ' .$phonenumber)
            ->labelFont(new NotoSans(20))
            ->labelAlignment(LabelAlignment::Center)
            ->validateResult(false)
            ->build();



    }
}