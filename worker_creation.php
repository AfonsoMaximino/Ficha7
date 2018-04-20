<?php
//Insert user in class
$worker = new Worker("1","Afonso","123");
$director = new Worker("2","Mario","123");
$administrator = new Worker("3","Alvaro","123");

//Get worker from class and put in array
$worker_name = $worker->getName();
$worker_level = $worker->getLevel();
$worker_password = $worker->getPassword();
$array_worker = array($worker_level, $worker_name, $worker_password);

//Get director from class and put in array
$director_name = $director->getName();
$director_level = $director->getLevel();
$director_password = $director->getPassword();
$array_director = array($director_level, $director_name, $director_password);

//Get administrator from class and put in array
$administrator_name = $administrator->getName();
$administrator_level = $administrator->getLevel();
$administrator_password = $administrator->getPassword();
$array_administrator = array($administrator_level, $administrator_name, $administrator_password);
?>