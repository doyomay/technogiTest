<?php
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./templates');
$twig = new \Twig\Environment($loader, [
    'cache' => './cache',
]);

echo $twig->render('index.html.twig', [
'submitButtonHTML' => '<input type="submit" value="Log In" />',
'loginHeaderText' => 'Log In',
'isAdminLogin' => true,
'totalSiteLogins' => 2.00
]);
