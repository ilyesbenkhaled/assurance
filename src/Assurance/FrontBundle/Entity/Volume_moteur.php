<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Volume_moteur
 *
 * @ORM\Table(name="volume_moteur")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\Volume_moteurRepository")
 */
class Volume_moteur
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
     * @ORM\Column(name="volume", type="string", length=255)
     */
    private $volume;


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
     * Set volume
     *
     * @param string $volume
     * @return Volume_moteur
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;

        return $this;
    }

    /**
     * Get volume
     *
     * @return string 
     */
    public function getVolume()
    {
        return $this->volume;
    }
}
