<?php

namespace Assurance\FrontBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * habitation
 *
 * @ORM\Table(name="habitation")
 * @ORM\Entity
 */
class Habitation
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
     * @ORM\Column(name="type_assurance", type="string", length=20)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=20)
     */
    private $ville;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_postal", type="integer")
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=20)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombre_chambre", type="integer")
     */
    private $nombreDeChambre;

    /**
     * @var float
     *
     * @ORM\Column(name="surface_habitation", type="float")
     */
    private $surfaceHabitation;

    /**
     * @var float
     *
     * @ORM\Column(name="surface_terrain", type="float")
     */
    private $surfaceDeTerrain;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_construction", type="integer")
     */
    private $anneeDeConstruction;

    /**
     * @var integer
     *
     * @ORM\Column(name="annee_habitation", type="integer")
     */
    private $anneeHabitation;
    
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
     * Set type
     *
     * @param string $type
     * @return habitation
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return habitation
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set codePostal
     *
     * @param integer $codePostal
     * @return habitation
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return integer 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return habitation
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set nombreDeChambre
     *
     * @param integer $nombreDeChambre
     * @return habitation
     */
    public function setNombreDeChambre($nombreDeChambre)
    {
        $this->nombreDeChambre = $nombreDeChambre;

        return $this;
    }

    /**
     * Get nombreDeChambre
     *
     * @return integer 
     */
    public function getNombreDeChambre()
    {
        return $this->nombreDeChambre;
    }

    /**
     * Set surfaceHabitation
     *
     * @param float $surfaceHabitation
     * @return habitation
     */
    public function setSurfaceHabitation($surfaceHabitation)
    {
        $this->surfaceHabitation = $surfaceHabitation;

        return $this;
    }

    /**
     * Get surfaceHabitation
     *
     * @return float 
     */
    public function getSurfaceHabitation()
    {
        return $this->surfaceHabitation;
    }

    /**
     * Set surfaceDeTerrain
     *
     * @param float $surfaceDeTerrain
     * @return habitation
     */
    public function setSurfaceDeTerrain($surfaceDeTerrain)
    {
        $this->surfaceDeTerrain = $surfaceDeTerrain;

        return $this;
    }

    /**
     * Get surfaceDeTerrain
     *
     * @return float 
     */
    public function getSurfaceDeTerrain()
    {
        return $this->surfaceDeTerrain;
    }

    /**
     * Set anneeDeConstruction
     *
     * @param integer $anneeDeConstruction
     * @return habitation
     */
    public function setAnneeDeConstruction($anneeDeConstruction)
    {
        $this->anneeDeConstruction = $anneeDeConstruction;

        return $this;
    }

    /**
     * Get anneeDeConstruction
     *
     * @return integer 
     */
    public function getAnneeDeConstruction()
    {
        return $this->anneeDeConstruction;
    }

    /**
     * Set anneeHabitation
     *
     * @param integer $anneeHabitation
     * @return habitation
     */
    public function setAnneeHabitation($anneeHabitation)
    {
        $this->anneeHabitation = $anneeHabitation;

        return $this;
    }

    /**
     * Get anneeHabitation
     *
     * @return integer 
     */
    public function getAnneeHabitation()
    {
        return $this->anneeHabitation;
    }
}
