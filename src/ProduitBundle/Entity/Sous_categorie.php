<?php

namespace ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sous_categorie
 *
 * @ORM\Table(name="sous_categorie")
 * @ORM\Entity(repositoryClass="ProduitBundle\Repository\Sous_categorieRepository")
 */
class Sous_categorie
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
     * @ORM\Column(name="Nom_sous_categorie", type="string", length=255)
     */
    private $nomSousCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="Type_sous_categorie", type="string", length=255)
     */
    private $typeSousCategorie;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomSousCategorie
     *
     * @param string $nomSousCategorie
     *
     * @return Sous_categorie
     */
    public function setNomSousCategorie($nomSousCategorie)
    {
        $this->nomSousCategorie = $nomSousCategorie;

        return $this;
    }

    /**
     * Get nomSousCategorie
     *
     * @return string
     */
    public function getNomSousCategorie()
    {
        return $this->nomSousCategorie;
    }

    /**
     * Set typeSousCategorie
     *
     * @param string $typeSousCategorie
     *
     * @return Sous_categorie
     */
    public function setTypeSousCategorie($typeSousCategorie)
    {
        $this->typeSousCategorie = $typeSousCategorie;

        return $this;
    }

    /**
     * Get typeSousCategorie
     *
     * @return string
     */
    public function getTypeSousCategorie()
    {
        return $this->typeSousCategorie;
    }
    /**
     * @ORM\ManyToOne(targetEntity="Categorie_Produit")
     * @ORM\JoinColumn(referencedColumnName="id")

     *
     */


    private $idCategorie_Produit;

    /**
     * @return mixed
     */
    public function getIdCategorieProduit()
    {
        return $this->idCategorie_Produit;
    }

    /**
     * @param mixed $idCategorie_Produit
     */
    public function setIdCategorieProduit($idCategorie_Produit)
    {
        $this->idCategorie_Produit = $idCategorie_Produit;
    }

}

