<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * moto
 *
 * @ORM\Table(name="moto")
 * @ORM\Entity
 */
class Moto
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
     * @var string
     *
     * @ORM\Column(name="age_moto", type="string", length=20)
     */
    private $ageMoto;

    /**
     * @var string
     *
     * @ORM\Column(name="volume_moteur", type="string", length=20)
     */
    private $volumeMoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="cylindre", type="string", length=20)
     */
    private $cylindre;

    /**
     * @var string
     *
     * @ORM\Column(name="boite_vitesse", type="string", length=20)
     */
    private $boiteVitesse;

    /**
     * @var float
     *
     * @ORM\Column(name="kilometrage", type="float")
     */
    private $kilometrage;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_de_mise_en_circulation", type="integer")
     */
    private $annee_de_mise_en_circulation;
	

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
     * @return moto
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
     * @return moto
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
     * Set ageMoto
     *
     * @param string $ageMoto
     * @return moto
     */
    public function setAgeMoto($ageMoto)
    {
        $this->ageMoto = $ageMoto;

        return $this;
    }

    /**
     * Get ageMoto
     *
     * @return string 
     */
    public function getAgeMoto()
    {
        return $this->ageMoto;
    }

    /**
     * Set volumeMoteur
     *
     * @param string $volumeMoteur
     * @return moto
     */
    public function setVolumeMoteur($volumeMoteur)
    {
        $this->volumeMoteur = $volumeMoteur;

        return $this;
    }

    /**
     * Get volumeMoteur
     *
     * @return string 
     */
    public function getVolumeMoteur()
    {
        return $this->volumeMoteur;
    }

    /**
     * Set cylindre
     *
     * @param string $cylindre
     * @return moto
     */
    public function setCylindre($cylindre)
    {
        $this->cylindre = $cylindre;

        return $this;
    }

    /**
     * Get cylindre
     *
     * @return string 
     */
    public function getCylindre()
    {
        return $this->cylindre;
    }

    /**
     * Set boiteVitesse
     *
     * @param string $boiteVitesse
     * @return moto
     */
    public function setBoiteVitesse($boiteVitesse)
    {
        $this->boiteVitesse = $boiteVitesse;

        return $this;
    }

    /**
     * Get boiteVitesse
     *
     * @return string 
     */
    public function getBoiteVitesse()
    {
        return $this->boiteVitesse;
    }

    /**
     * Set kilometrage
     *
     * @param float $kilometrage
     * @return moto
     */
    public function setKilometrage($kilometrage)
    {
        $this->kilometrage = $kilometrage;

        return $this;
    }

    /**
     * Get kilometrage
     *
     * @return float 
     */
    public function getKilometrage()
    {
        return $this->kilometrage;
    }
	

    /**
     * Set annee_de_mise_en_circulation
     *
     * @param integer $anneeDeMiseEnCirculation
     * @return Moto
     */
    public function setAnneeDeMiseEnCirculation($anneeDeMiseEnCirculation)
    {
        $this->annee_de_mise_en_circulation = $anneeDeMiseEnCirculation;

        return $this;
    }

    /**
     * Get annee_de_mise_en_circulation
     *
     * @return integer 
     */
    public function getAnneeDeMiseEnCirculation()
    {
        return $this->annee_de_mise_en_circulation;
    }
}
