<?php
include "../bootstrap.php";
$options = ["options"=>
    [
        "regexp" => "/^[A-Z a-z]+$/"


    ]];

$firstname = filter_input(INPUT_POST,'firstname',FILTER_VALIDATE_REGEXP,$options);
if(!isset($firstname) || $firstname === false){
    $errorFirst = "PRENOM INVALIDE";
}

$lastname = filter_input(INPUT_POST,'lastname',FILTER_VALIDATE_REGEXP,$options);
if(!isset($lastname) || $lastname === false){
    $errorLast = "NOM INVALIDE";
}
$password = filter_input(INPUT_POST,'password',FILTER_VALIDATE_REGEXP,$options);
if(!isset($password) || $password === false){
    $errorPass = "MOT DE PASSE INVALIDE";




echo $twig->render('login.twig',['errorLast'=>$errorLast,'errorFirst'=>$errorFirst,'errorPass'=>$errorPass]);}