<?php
include "../bootstrap.php";



$id = $_GET['id'];
$query= $entityManager->createQuery("select c from model\Cobaye c where c.id = :id");
$query->setParameter(':id',$id);
$result= $query->getResult();
echo $twig->render('updateCobaye.twig',['cobaye'=>$result[0]]);