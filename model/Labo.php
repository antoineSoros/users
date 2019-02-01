<?php
/**
 * Created by PhpStorm.
 * User: antoine
 * Date: 31/01/19
 * Time: 09:30
 */

namespace model;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity
 * @InheritanceType("SINGLE_TABLE")
 */
class Labo
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
private $name;
    /**
     * @Column()
     */
private $experience;
    /**
     * @ManyToMany(targetEntity="Cobaye")
     * @JoinTable(name="labo_cobaye",
     *      joinColumns={@JoinColumn(name="labo_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="cobaye_id", referencedColumnName="id")}
     *      )
     */
private $cobayes;

    /**
     * Labo constructor.
     */
    public function __construct()
    {
        $this->cobayes = new ArrayCollection();
    }

    public function addCobaye($cobaye){
        $this->cobayes->add($cobaye);
    }

    public function addCobayes(...$cobayes){
        foreach ($cobayes as $value){
            $this->addCobaye($value);
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @return ArrayCollection
     */
    public function getCobayes()
    {
        return $this->cobayes;
    }

    /**
     * @param ArrayCollection $cobayes
     */
    public function setCobayes($cobayes)
    {
        $this->cobayes = $cobayes;
    }

}