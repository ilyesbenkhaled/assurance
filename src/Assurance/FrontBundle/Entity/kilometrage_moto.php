<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * kilometrage_moto
 *
 * @ORM\Table(name="kilometrage_moto")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\kilometrage_motoRepository")
 */
class kilometrage_moto
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
     * @return kilometrage_moto
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
