<?php


$host='localhost';
$usuario='root';
$senha='Italo@1989';
$database='usuarios';

$mysqli = new mysqli($host, $usuario,$senha,$database);

if($mysqli->error){
    die("Fala ao conectar:" .$mysqli->error);
}