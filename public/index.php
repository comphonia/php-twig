<?php
require_once __DIR__ . '/../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
$twig = new Twig_Environment($loader);

echo $twig->render('home.twig', ['name' => 'ever', 'post' => $_POST]);