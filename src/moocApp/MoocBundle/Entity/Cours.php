<?php
namespace moocApp\MoocBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Entity
 */
class Cours {
    /**
     * @ORM\Id
     * @orm\GeneratedValue
     * @ORM\Column (type="integer") 
     */
    
 private $id;
    /** 
     * @ORM\Column(type="string", length=255)
     */ 
  private $titre;
    /** 
     * @ORM\Column(type="text")
     */ 
  private $description;
  /** 
     * @ORM\Column(type="date")
     */ 
  private $dateDebut;
  /** 
     * @ORM\Column(type="date")
     */ 
  private $dateFin;
    /** 
     * @ORM\Column(type="string", length=255)
     */ 
  private $difficulte;
    /**
     * @ORM\JoinColumn( nullable=true, onDelete="SET NULL")
     * @ORM\OneToOne(targetEntity="TestFinale", cascade={"persist", "remove"})
     */
  private $testFinale;
  function getId() {
      return $this->id;
  }

  function getTitre() {
      return $this->titre;
  }

  function getDescription() {
      return $this->description;
  }

  function getDateDebut() {
      return $this->dateDebut;
  }

  function getDateFin() {
      return $this->dateFin;
  }

  function getDifficulte() {
      return $this->difficulte;
  }

  function getEtat() {
      return $this->etat;
  }

  function getTestFinale() {
      return $this->testFinale;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setTitre($titre) {
      $this->titre = $titre;
  }

  function setDescription($description) {
      $this->description = $description;
  }

  function setDateDebut($dateDebut) {
      $this->dateDebut = $dateDebut;
  }

  function setDateFin($dateFin) {
      $this->dateFin = $dateFin;
  }

  function setDifficulte($difficulte) {
      $this->difficulte = $difficulte;
  }

  function setEtat($etat) {
      $this->etat = $etat;
  }

  function setTestFinale($testFinale) {
      $this->testFinale = $testFinale;
  }

  
  
}
