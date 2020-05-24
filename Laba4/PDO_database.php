<?php
$mycards = array();
$db = new PDO('mysql:host=localhost;dbname=orders', 'root', '');
function All_database_data($db)
{
    try {
        $i = 0;
        $data = $db->query("SELECT * FROM dish")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $v) {
            $myords[$i] = array('order_id' => $v['id'], 'Название' => $v['name'], 'Цена' => $v['cost'], 'immage' => $v['immage']);
            $i++;
        }
        return $myords;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function identify($db)
{
    try {
        $i = 0;
        $data = $db->query("SELECT * FROM users")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $v) {
            $users[$i] = array('login' => $v['login'], 'password' => $v['password']);
            $i++;
        }
        return $users;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}

function get_orders($db)
{
    try {
        $i = 0;
        $data = $db->query("SELECT * FROM tables")->fetchAll(PDO::FETCH_ASSOC);
        foreach ($data as $v) {
            $orders[$i] = array('Столик' => $v['Столик'], 'время' => $v['время'], 'дата' => $v['дата'], 'заказ' => $v['заказ'], 'main_id' => $v['main_id']);
            $i++;
        }
        return $orders;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}


function add_ord($db, $ord,$table)
{
    date_default_timezone_set( 'UTC');
    date_default_timezone_set ( 'Europe/Minsk');
    try {
        $sth = $db->prepare("INSERT INTO `tables` SET `Столик` = :Столик, `время` = :время, `дата` = :дата, `заказ` = :заказ");
        $today_date = date("y-m-d");
        $today_time = date("G:i:s");
        $sth->execute(array('Столик' => $table, 'время' => $today_time, 'дата' => $today_date, 'заказ' => $ord));
        $insert_id = $db->lastInsertId();
        return $insert_id;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}
function Request_in_database(){
    try{
        $db=func_get_arg(0);
        $request=func_get_arg(1);
        $params=func_get_arg(2);
        $sth = $db->prepare($request);
        $sth->execute($params);
        $insert_id = $db->lastInsertId();
        return $insert_id;
    }
    catch (PDOException $e) {
        print "Error!: " . $e->getMessage();
        die();
    }
}


