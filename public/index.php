<?php

use OnPHPoint\Composer\Owner;

require_once '../vendor/autoload.php';


$loader = new \Twig\Loader\FilesystemLoader('../templates');
$twig = new \Twig\Environment($loader);
$template = $twig->load('qrcodepage.twig');
echo $template->render(['owners' => new Owner('Erika Musterfrau', '+43 1234 56789'), new Owner('Max Mustermann', '+43 9876 54321')]);
