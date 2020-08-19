<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assurance_habitation
 *
 * @ORM\Table(name="assurance_habitation")
 * @ORM\Entity
 */
class AssuranceHabitation
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
     * @var integer
     *
     * @ORM\Column(name="annee", type="integer")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="type_assurance", type="string", length=20)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="assureur", type="string", length=20)
     */
    private $assureur;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float")
     */
    private $montant;

    /**
    * @ORM\OneToOne(targetEntity="UserBundle\Entity\User", cascade={"persist"})
    */
    private $clientAssuree;

    /**
    * @ORM\ManyToOne(targetEntity="Assurance\FrontBundle\Entity\Assurance")
    * @ORM\JoinColumn(nullable=false)
    */
    private $assurance;

    /**
    * @ORM\ManyToOne(targetEntity="Assurance\FrontBundle\Entity\Habitation")
    * @ORM\JoinColumn(nullable=false)
    */
    private $habitation;

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
     * Set annee
     *
     * @param integer $annee
     * @return Assurance_habitation
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Assurance_habitation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set assureur
     *
     * @param string $assureur
     * @return Assurance_habitation
     */
    public function setAssureur($assureur)
    {
        $this->assureur = $assureur;

        return $this;
    }

    /**
     * Get assureur
     *
     * @return string 
     */
    public function getAssureur()
    {
        return $this->assureur;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Assurance_habitation
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set clientAssuree
     *
     * @param \UserBundle\Entity\User $clientAssuree
     * @return Assurance_habitation
     */
    public function setClientAssuree(\UserBundle\Entity\User $clientAssuree = null)
    {
        $this->clientAssuree = $clientAssuree;

        return $this;
    }

    /**
     * Get clientAssuree
     *
     * @return \UserBundle\Entity\User 
     */
    public function getClientAssuree()
    {
        return $this->clientAssuree;
    }

    /**
     * Set assurance
     *
     * @param Assurance\FrontBundle\Entity\Assurance $assurance
     * @return Assurance_habitation
     */
    public function setAssurance(Assurance\FrontBundle\Entity\Assurance $assurance)
    {
        $this->assurance = $assurance;

        return $this;
    }

    /**
     * Get assurance
     *
     * @return Assurance\FrontBundle\Entity\Assurance 
     */
    public function getAssurance()
    {
        return $this->assurance;
    }

    /**
     * Set habitation
     *
     * @param Assurance\FrontBundle\Entity\Habitation $habitation
     * @return Assurance_habitation
     */
    public function setHabitation(Assurance\FrontBundle\Entity\Habitation $habitation)
    {
        $this->habitation = $habitation;

        return $this;
    }

    /**
     * Get habitation
     *
     * @return Assurance\FrontBundle\Entity\Habitation 
     */
    public function getHabitation()
    {
        return $this->habitation;
    }
}
