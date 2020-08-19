<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assurance
 *
 * @ORM\Table(name="assurance")
 * @ORM\Entity
 */
class Assurance
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="resultat", type="boolean")
     */
    private $resultat;

	/**  
        * @ORM\ManyToOne(targetEntity ="UserBundle\Entity\User") 
        * @ORM\JoinColumn(name= "admin_id", referencedColumnName = "id") 
     */	
	private $user;

	 /**
    *@return mixed
    */
    public function getUser()
    {
     return  $this->user;
    }

    /**
    *@param mixed $User
    */
    public function setUser($user)
    {
        $this->user = $user;

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
     * Set resultat
     *
     * @param boolean $resultat
     * @return Assurance
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return boolean 
     */
    public function getResultat()
    {
        return $this->resultat;
    }
}
