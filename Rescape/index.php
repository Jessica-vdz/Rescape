<?php
require_once "./vendor/autoload.php"; // <-- pad naar api

$loader = new \Twig\Loader\FilesystemLoader(
    __DIR__ . "/templates"
);
$twig = new \Twig\Environment($loader);

echo $twig->render('base.html.twig', ['name' => 'jessica']);

?>