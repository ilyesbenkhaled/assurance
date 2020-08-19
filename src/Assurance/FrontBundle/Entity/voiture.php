<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * voiture
 *
 * @ORM\Table(name="voiture")
 * @ORM\Entity
 */
class Voiture
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
     * @ORM\Column(name="marque", type="string", length=20)
     */
    private $marque;

    /**
     * @var string
     *
     * @ORM\Column(name="modele", type="string", length=20)
     */
    private $modele;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_place", type="integer")
     */
    private $nombreDePlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="puissance_cv", type="integer")
     */
    private $puissanceCv;

    /**
     * @var string
     *
     * @ORM\Column(name="energie", type="string", length=20)
     */
    private $energie;

    /**
     * @var float
     *
     * @ORM\Column(name="kilometre_parcours_par_an", type="float")
     */
    private $kilometreParcoursParAn;

    /**
     * @var boolean
     *
     * @ORM\Column(name="conducteur_secondaire", type="boolean")
     */
    private $conducteur_Secondaire;
	
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
     * Set marque
     *
     * @param string $marque
     * @return voiture
     */
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return string 
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set modele
     *
     * @param string $modele
     * @return voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string 
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set nombreDePlace
     *
     * @param integer $nombreDePlace
     * @return voiture
     */
    public function setNombreDePlace($nombreDePlace)
    {
        $this->nombreDePlace = $nombreDePlace;

        return $this;
    }

    /**
     * Get nombreDePlace
     *
     * @return integer 
     */
    public function getNombreDePlace()
    {
        return $this->nombreDePlace;
    }

    /**
     * Set puissanceCv
     *
     * @param integer $puissanceCv
     * @return voiture
     */
    public function setPuissanceCv($puissanceCv)
    {
        $this->puissanceCv = $puissanceCv;

        return $this;
    }

    /**
     * Get puissanceCv
     *
     * @return integer 
     */
    public function getPuissanceCv()
    {
        return $this->puissanceCv;
    }

    /**
     * Set energie
     *
     * @param string $energie
     * @return voiture
     */
    public function setEnergie($energie)
    {
        $this->energie = $energie;

        return $this;
    }

    /**
     * Get energie
     *
     * @return string 
     */
    public function getEnergie()
    {
        return $this->energie;
    }

    /**
     * Set kilometreParcoursParAn
     *
     * @param float $kilometreParcoursParAn
     * @return voiture
     */
    public function setKilometreParcoursParAn($kilometreParcoursParAn)
    {
        $this->kilometreParcoursParAn = $kilometreParcoursParAn;

        return $this;
    }

    /**
     * Get kilometreParcoursParAn
     *
     * @return float 
     */
    public function getKilometreParcoursParAn()
    {
        return $this->kilometreParcoursParAn;
    }

    

    /**
     * Set conducteur_Secondaire
     *
     * @param boolean $conducteurSecondaire
     * @return Voiture
     */
    public function setConducteurSecondaire($conducteurSecondaire)
    {
        $this->conducteur_Secondaire = $conducteurSecondaire;

        return $this;
    }

    /**
     * Get conducteur_Secondaire
     *
     * @return boolean 
     */
    public function getConducteurSecondaire()
    {
        return $this->conducteur_Secondaire;
    }
}
