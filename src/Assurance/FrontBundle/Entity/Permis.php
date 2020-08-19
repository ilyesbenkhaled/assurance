<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * permis
 *
 * @ORM\Table(name="permis")
 * @ORM\Entity
 */
class Permis
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
     * @var string
     *
     * @ORM\Column(name="type_permis", type="string", length=5)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="date")
     */
    protected $dateDeLivraison;

    /**
    * @ORM\OneToOne(targetEntity="UserBundle\Entity\User", cascade={"persist"})
    */
    private $assureur;
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
     * Set type
     *
     * @param string $type
     * @return permis
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
     * Set dateDeLivraison
     *
     * @param \DateTime $dateDeLivraison
     * @return permis
     */
    public function setDateDeLivraison($dateDeLivraison)
    {
        $this->dateDeLivraison = $dateDeLivraison;

        return $this;
    }

    /**
     * Get dateDeLivraison
     *
     * @return \DateTime 
     */
    public function getDateDeLivraison()
    {
        return $this->dateDeLivraison;
    }

    /**
     * Set assureur
     *
     * @param \UserBundle\Entity\User $assureur
     * @return Permis
     */
    public function setAssureur(\UserBundle\Entity\User $assureur)
    {
        $this->assureur = $assureur;

        return $this;
    }

    /**
     * Get assureur
     *
     * @return \UserBundle\Entity\User 
     */
    public function getAssureur()
    {
        return $this->assureur;
    }
}
