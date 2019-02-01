<?php
include "../bootstrap.php";

$nom = $_POST['lastname'];
$prenom = $_POST['firstname'];
$password = $_POST['password'];

$query = $entityManager->createQuery("select u from model\User u where u.nom = :nom and u.prenom = :prenom and u.password= :password " );
$query->setParameter(':nom',$nom);
$query->setParameter(':prenom',$prenom);
$query->setParameter(':password',$password);

$result = $query->getResult();
if( count($result)!==0){

    include './controllerUser.php';
}else{
    echo $twig->render('checkLogin.twig');
}
