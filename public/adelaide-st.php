<?php
require_once dirname(__DIR__).'/vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../views/');
$twig = new \Twig\Environment($loader, []);

echo $twig->render('adelaide-st_template.php.twig');