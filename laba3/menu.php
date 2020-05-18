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

$myords = array(
    array('order_title' => 'Континентальный завтрак', 'order_image' => '../Images/breakfast.jpg', 'order_price' => '$30'),
    array('order_title' => 'Яйца Бенедикт', 'order_image' => '../Images/eggs.jpg', 'order_price' => '$12'),
    array('order_title' => 'Овсяная каша с фруктами', 'order_image' => '../Images/oatmeal.jpg', 'order_price' => '$10'),
    array('order_title' => 'Гранола', 'order_image' => 'I../mages/granola.jpg', 'order_price' => '$20'),
    array('order_title' => 'Вафли', 'order_image' => '../Images/waffels.jpg', 'order_price' => '$8'),
    array('order_title' => 'Творожная запеканка', 'order_image' => '../Images/cake.jpg', 'order_price' => '$10'),
    array('order_title' => 'Суп из чечивицы', 'order_image' => '../Images/soup.jpg', 'order_price' => '$14'),
    array('order_title' => 'Солянка', 'order_image' => '../Images/soup2.jpg', 'order_price' => '$5'),
    array('order_title' => 'Салат с цыпленком', 'order_image' => '../Images/salad.jpg', 'order_price' => '$18'),
    array('order_title' => 'Паста с курицей', 'order_image' => '../Images/pasta.jpg', 'order_price' => '$10'),
    array('order_title' => 'Птитим с креветками', 'order_image' => 'Images/ptitim.jpg', 'order_price' => '$24')
);

echo $twig->render('menu.twig',array('myords' => $myords));