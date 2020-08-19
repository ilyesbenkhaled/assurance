<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * annee_habitation
 *
 * @ORM\Table(name="annee_habitation")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\annee_habitationRepository")
 */
class annee_habitation
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
     * @ORM\Column(name="annee_hab", type="string", length=255)
     */
    private $anneeHab;


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
     * Set anneeHab
     *
     * @param string $anneeHab
     * @return annee_habitation
     */
    public function setAnneeHab($anneeHab)
    {
        $this->anneeHab = $anneeHab;

        return $this;
    }

    /**
     * Get anneeHab
     *
     * @return string 
     */
    public function getAnneeHab()
    {
        return $this->anneeHab;
    }
}
