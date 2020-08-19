<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Marque
 *
 * @ORM\Table(name="modele")
 * @ORM\Entity()
 */
class Modele
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**  
        * @ORM\ManyToOne(targetEntity ="Assurance\FrontBundle\Entity\Marque") 
        * @ORM\JoinColumn(name= "marque_id", referencedColumnName = "id") 
     */
    private $marque;

    /**
    *@return mixed
    */
    public function getMarque()
    {
     return  $this->marque;
    }

    /**
    *@param mixed $marque
    */
    public function setUser($marque)
    {
        $this->marque = $marque;

    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Marque
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }
}
