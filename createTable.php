<?php
include "./bootstrap.php";

use model\Cobaye;
use model\User;
use model\Labo;

//$labo1 = new Labo();
//$labo1->setName('Gentical');
//$labo1->setExperience("etude sur le virus v-12584 provocant des mutations génétiques ");
//$labo2 = new Labo();
//$labo2->setName('Revolve');
//$labo2->setExperience('etude sur le virus-5566668 ayant pour but la regenerecence de cellules mortes');
//$personStr =file_get_contents('person_db_service_project.json');
//$personTab = json_decode($personStr,true);
//foreach ($personTab as $item) {
//    foreach ($item as $it) {
//        $pers = new Cobaye();
//        $pers->setGender($it['gender'])
//            ->setFirst($it['name']['first'])
//            ->setLast($it['name']['last'])
//            ->setTitle($it['name']['title'])
//            ->setCity($it['location']['city'])
//            ->setStreet($it['location']['street'])
//            ->setState($it['location']['state'])
//            ->setMedium($it['picture']['medium'])
//            ->setThumbnail($it['picture']['thumbnail'])
//            ->setNat($it['nat'])
//            ->setDob($it['dob']['date'])
//            ->setAge($it['dob']['age'])
//            ->setLarge($it['picture']['large']);
//
//
//
// $entityManager->persist($pers);
//        $entityManager->flush();
//
//    }











//}



$user1 = new User();
$user1->setNom("Harris")->setPrenom("William")->setPassword("Harris");
$entityManager->persist($user1);
$entityManager->flush();

//$query = $entityManager->createQuery('select c from model\Cobaye c');
//$result = $query->getResult();
//foreach ($result as $cobaye) {
//
//    $dispatch = $cobaye->getId();
//    if ($dispatch % 2 === 0) {
//        $labo2->addCobaye($cobaye);
//    } else {
//        $labo1->addCobaye($cobaye);
//    }
//
//}
//$entityManager->persist($labo1);
//$entityManager->persist($labo2);
//$entityManager->flush();
