<?php
require_once 'C:\Server\data\htdocs\laba3\vendor\autoload.php';
require_once 'PDO_database.php';
require_once 'SendMail.php';
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'compilation_cache',
    'auto_reload' => true
));

session_start();
date_default_timezone_set ( 'Europe/Minsk');
$orders = get_orders($db);
$_SESSION['email']='vova.kucherenko.00@mail.ru';
$_SESSION['table']=$orders[count($orders)-1]['Столик'];
if (isset($_POST['new_order']))
{
    Request_in_database($db,"INSERT INTO tables SET  Столик =?, заказ = ?, дата = ?, время = ? ",array($_SESSION['table']+1,$_POST['new_order'],date("y-m-d"),date("G:i:s")));
    $_SESSION['table']=$_SESSION['table'] + 1;
}


$j = 0;
$price = 0;
$myords = All_database_data($db);

$sth = $db->prepare("SELECT `cost` FROM `dish`");
$sth->execute();
$array = $sth->fetchAll(PDO::FETCH_COLUMN);

$orders = get_orders($db);

for ($i=0; $i<count($orders);$i++) {
    $pieces = explode(" ", $orders[$i]['заказ']);
    for ($j=0;$j<count($pieces);$j++) {
        $price = intval($array[intval($pieces[$j])-1]) + $price;
    }
    $orders[$i]['цена'] = $price;
    $price=0;
    $j=0;
}
$i = count($orders)-1;

SendMessage($_SESSION['email'],FormMailMessage($orders,$i));

$twig->addGlobal('link_index', "index.php");
$twig->addGlobal('link_menu', "menu.php");
$twig->addGlobal('link_about', "about.php");
$twig->addGlobal('link_f1', "f1.php");
$twig->addGlobal('link_contscts', "contscts.php");
echo $twig->render('login.twig', array('orders' => $orders));