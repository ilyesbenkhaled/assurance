<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * annee_construction
 *
 * @ORM\Table(name="annee_construction")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\annee_constructionRepository")
 */
class annee_construction
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
     * @ORM\Column(name="annee_con", type="string", length=255)
     */
    private $anneeCon;


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
     * Set anneeCon
     *
     * @param string $anneeCon
     * @return annee_construction
     */
    public function setAnneeCon($anneeCon)
    {
        $this->anneeCon = $anneeCon;

        return $this;
    }

    /**
     * Get anneeCon
     *
     * @return string 
     */
    public function getAnneeCon()
    {
        return $this->anneeCon;
    }
}
