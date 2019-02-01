<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 27/01/19
 * Time: 23:29
 */

namespace model;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;


/**
 * Class Cobaye
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 */
class Cobaye
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
private $id;
    /**
     * @Column()
     */
private $gender;
    /**
     * @Column()
     */
private $title;
    /**
     * @Column()
     */
private $city;
    /**
     * @Column()
     */
private $street;
    /**
     * @Column()
     */
private $state;
    /**
     * @Column()
     */
private $first;
    /**
     * @Column()
     */
private $last;
    /**
     * @Column()
     */
private $large;
    /**
     * @Column()
     */
private $medium;
    /**
     * @Column()
     */
private $thumbnail;
    /**
     * @Column()
     */
private $nat;
    /**
     * @Column()
     */
private $dob;
    /**
     * @Column(type="integer")
     */
private $age;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Cobaye
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $gender
     * @return Cobaye
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Cobaye
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return Cobaye
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     * @return Cobaye
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return Cobaye
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param mixed $first
     * @return Cobaye
     */
    public function setFirst($first)
    {
        $this->first = $first;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param mixed $last
     * @return Cobaye
     */
    public function setLast($last)
    {
        $this->last = $last;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLarge()
    {
        return $this->large;
    }

    /**
     * @param mixed $large
     * @return Cobaye
     */
    public function setLarge($large)
    {
        $this->large = $large;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMedium()
    {
        return $this->medium;
    }

    /**
     * @param mixed $medium
     * @return Cobaye
     */
    public function setMedium($medium)
    {
        $this->medium = $medium;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * @param mixed $thumbnail
     * @return Cobaye
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNat()
    {
        return $this->nat;
    }

    /**
     * @param mixed $nat
     * @return Cobaye
     */
    public function setNat($nat)
    {
        $this->nat = $nat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * @param mixed $dob
     * @return Cobaye
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     * @return Cobaye
     */
    public function setAge($age)
    {
        $this->age = $age;
        return $this;
    }






}