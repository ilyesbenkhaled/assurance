<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Annee_circulation
 *
 * @ORM\Table(name="annee_circulation")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\Annee_circulationRepository")
 */
class Annee_circulation
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
     * @ORM\Column(name="annee_cir", type="string", length=255)
     */
    private $anneeCir;


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
     * Set anneeCir
     *
     * @param string $anneeCir
     * @return Annee_circulation
     */
    public function setAnneeCir($anneeCir)
    {
        $this->anneeCir = $anneeCir;

        return $this;
    }

    /**
     * Get anneeCir
     *
     * @return string 
     */
    public function getAnneeCir()
    {
        return $this->anneeCir;
    }
}
