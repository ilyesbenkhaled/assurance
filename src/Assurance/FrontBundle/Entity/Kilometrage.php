<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * Kilometrage
 *
 * @ORM\Table(name="kilometrage")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\KilometrageRepository")
 */
class Kilometrage
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
     * @ORM\Column(name="kilometrage", type="string", length=255)
     */
    private $kilometrage;

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
     * Set kilometrage
     *
     * @param string $kilometrage
     * @return Kilometrage
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;
        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return string 
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }
}
