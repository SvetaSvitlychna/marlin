<?php
session_start();
$text =$_POST['text'];



$pdo = new PDO ("mysql:host=localhost;dbname=marlin","root","");

$sql="SELECT * from texts WHERE text=:text";
$statement = $pdo->prepare($sql);
$statement->execute(['text'=> $text]);
$result = $statement->fetch(PDO::FETCH_ASSOC);

if (!empty($result)){
    $message = "Введенная запись уже присутсвует в таблице";
    $_SESSION['message'] = $message;
    header ("Location: /task_10.php");
    exit;
}
//var_dump($result);die;


$sql = "INSERT INTO texts (text) VALUES (:text)";
$statement = $pdo->prepare($sql);
$statement -> execute(['text'=>$text]);

header ("Location: /task_10.php");