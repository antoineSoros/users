<?php
include "../bootstrap.php";



$id = $_GET['id'];
$query= $entityManager->createQuery("select c from model\Cobaye c where c.id = :id");
$query->setParameter(':id',$id);
$result= $query->getResult();
$nom = $_COOKIE['name']  ;
if ($_SERVER['REQUEST_METHOD']==='POST'){

    $first = filter_input(INPUT_POST,'first');
    $last = filter_input(INPUT_POST,'last');
    $street = filter_input(INPUT_POST,'street');
    $city = filter_input(INPUT_POST,'city');
    $state = filter_input(INPUT_POST,'state');
    $nat = filter_input(INPUT_POST,'nat');

    $result[0]->setFirst($first)->setLast($last)->setStreet($street)->setCity($city)->setState($state)->setNat($nat);
    $entityManager->flush();


}

echo $twig->render('updateCobaye.twig',['cobaye'=>$result[0],"nom"=>$nom]);