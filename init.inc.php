<?php
$pdo=new PDO("mysql:host=localhost;dbname=gestionvisite",'root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//SESSION
session_start();

//CHEMIN
define('RACINE_SITE','/ENSITECH_PHP/AP Gestion visites');
?>