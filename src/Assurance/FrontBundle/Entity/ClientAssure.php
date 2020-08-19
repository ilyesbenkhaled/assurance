<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client_assure
 *
 * @ORM\Table(name="client_assure")
 * @ORM\Entity(repositoryClass="Assurance\FrontBundle\Repository\client_assureRepository")
 */
class ClientAssure 
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
