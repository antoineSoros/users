<?php
include '../bootstrap.php';

$query = $entityManager->createQuery('select c from model\Cobaye c');
$result = $query->getResult();
$nom = $_COOKIE['name']  ;
echo $twig->render('display_person.twig',['tab'=>$result,"nom"=>$nom]);