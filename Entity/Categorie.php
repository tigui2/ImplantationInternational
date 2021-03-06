<?php
namespace App\Model\Entity;



class Categorie
{
    private $id_categorie;
    private $actif;
    private $categorie;

    /**
     * Categorie constructor.
     * @param $id_categorie
     * @param $actif
     * @param $categorie
     */
    public function __construct($id_categorie, $actif, $categorie)
    {
        $this->id_categorie = $id_categorie;
        $this->actif = $actif;
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->id_categorie;
    }

    /**
     * @param mixed $id_categorie
     */
    public function setIdCategorie($id_categorie)
    {
        $this->id_categorie = $id_categorie;
    }


    /**
     * @return mixed
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * @param mixed $categorie
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }

    /**
     * @return mixed
     */
    public function getActif()
    {
        return $this->actif;
    }
    /**
     * @param mixed $actif
     */
    public function setActif($actif)
    {
        $this->actif = $actif;
    }

    public function validate()
    {
        if($this->id_categorie == null || !is_int($this->id_categorie))
        {
            return false;
        }

        if($this->categorie == null || strlen($this->categorie) > 50)
        {
            return false;
        }

        if($this->actif == null || !is_int($this->actif))
        {
            return false;
        }

        return true;
    }
}
