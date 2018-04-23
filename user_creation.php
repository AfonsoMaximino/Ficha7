<?php
//Insert user in class
$worker = new Worker("Afonso Maximino","Afonso","123","afonso@gmail.com","1","ESCO","JAVA Programmer");
$director = new Worker("Alvaro Boss","Alvaro","123","alvaro@gmail.com","2","ESCO","C# Programmer");
$administrator = new Worker("Mario P","123","mario@gmail.com","3","ESCO","Mac hardware solver");

//Get worker from class and put in array
$worker_name = $worker->getName();
$worker_level = $worker->getLevel();
$worker_password = $worker->getPassword();
$array_worker = array($worker_name,$worker_password);

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