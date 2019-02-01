<?php
include "../bootstrap.php";


$query = $entityManager->createQuery('select l,c from model\Labo l join l.cobayes c ');
$result = $query->getResult();

echo $twig->render("display_labos.twig",["labos"=>$result]);