<?php
require_once 'C:\Server\data\htdocs\laba3\vendor\autoload.php';
require_once 'PDO_database.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true
));
session_start();
$_SESSION['name'] = "";
$_SESSION['mess'] = "";
if (isset($_POST['login']) && isset($_POST['password'])) {
    $users = identify($db);
    $i = 0;
    foreach ($users as &$value) {
        $login = $users[$i]['login'];
        $password = $users[$i]['password'];
        if (($login == $_POST['login']) && ($password == hash('sha256',$_POST['password']))) {
            $_SESSION['Name'] = $login;
            header("Location: login.php");
        }
        $i++;
    }
}



$twig->addGlobal('link_index', "index.php");
$twig->addGlobal('link_menu', "menu.php");
$twig->addGlobal('link_about', "about.php");
$twig->addGlobal('link_f1', "f1.php");
$twig->addGlobal('link_contscts', "contscts.php");

echo $twig->render('index.twig');
