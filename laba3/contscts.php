<?php
require_once 'C:\Server\data\htdocs\laba3\vendor\autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache'       => 'compilation_cache',
    'auto_reload' => true
));

$twig->addGlobal('link_index', "index.php");
$twig->addGlobal('link_menu', "menu.php");
$twig->addGlobal('link_about', "about.php");
$twig->addGlobal('link_f1', "f1.php");
$twig->addGlobal('link_contscts', "contscts.php");

echo $twig->render('contscts.twig');