<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Puissance_CV
 *
 * @ORM\Table(name="puissance__c_v")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\Puissance_CVRepository")
 */
class Puissance_CV
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
     * @ORM\Column(name="CV", type="string", length=255)
     */
    private $cV;


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
     * Set cV
     *
     * @param string $cV
     * @return Puissance_CV
     */
    public function setCV($cV)
    {
        $this->cV = $cV;

        return $this;
    }

    /**
     * Get cV
     *
     * @return string 
     */
    public function getCV()
    {
        return $this->cV;
    }
}
