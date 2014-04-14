<?php

namespace test\BlogBundle\Document;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;


/**
* @MongoDB\Document
*/
class Article
{
  /**
  * @MongoDB\Id
  */
  protected $id;
  
  /**
  * @MongoDB\Date
  */
  protected $date;
  
  /**
  * @MongoDB\String
  */
  protected $titre;
  
  /**
  * @MongoDB\String
  */
  protected $auteur;
  
  /**
  * @MongoDB\String
  */
  protected $contenu;	
  
  

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param date $date
     * @return self
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     * @return date $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return self
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
        return $this;
    }

    /**
     * Get titre
     *
     * @return string $titre
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return self
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string $auteur
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return self
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;
        return $this;
    }

    /**
     * Get contenu
     *
     * @return string $contenu
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
