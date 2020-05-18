<?php
require_once 'C:\Server\data\htdocs\laba3\vendor\autoload.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true
));
session_start();
$res_message = $_SESSION['mess'];
$res_name = $_SESSION['name'];
$regexp_email = '/^[a-zA-Z0-9_\-.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9_\-.]+$/u';
$regexp_email_BSUIR = '/^[a-zA-Z0-9_\-.]+@bsuir.by+$/u';
if (isset($_POST['message'])) {
    $fd = fopen("otziv.txt", 'r+w') or die("не удалось открыть файл");
    fseek($fd, 0,SEEK_END);
    $string = $_POST['message'];
    $words = explode(" ", $string);
    for ($iter = 0; $iter < count($words); $iter++) {
        preg_match($regexp_email, $words[$iter], $matches);
        if (count($matches) != 0) {
            preg_match($regexp_email_BSUIR, $words[$iter], $matches);
            if (count($matches) == 0)
                $words[$iter] = '#Cтоп e-mail#';
        }
    }
    $string = implode(" ", $words);
    $res_message = $string . "\r\n";
    $res_name = $_POST['fname'] . "\r\n";

    fwrite($fd, $res_name);
    fwrite($fd, $res_message);
    fclose($fd);
    //fseek($fd, 0);

    $fd = fopen("otziv.txt", 'r+w') or die("не удалось открыть файл");
    while (!feof($fd)) {
        $str = fgets($fd);
        echo $str . "<br />";
    }
    fclose($fd);
}


$twig->addGlobal('res_message', $res_message);
$twig->addGlobal('res_name', $res_name);
$twig->addGlobal('link_index', "index.php");
$twig->addGlobal('link_menu', "menu.php");
$twig->addGlobal('link_about', "about.php");
$twig->addGlobal('link_f1', "f1.php");
$twig->addGlobal('link_contscts', "contscts.php");
echo $twig->render('f1.twig');