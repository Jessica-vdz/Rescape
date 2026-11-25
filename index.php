<?php 
$name = "jessica";
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(
    __DIR__ . '/templates'    
);

$twig = new \Twig\Environment($loader, ['cache' => false, 'debug' => true]);

echo $twig->render('index.html.twig', ['name' => $name]);

?>