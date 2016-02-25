<?php
namespace moocApp\MoocBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Entity
 */
class Chapitre {
     /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
 private $id;
   /** 
     * @ORM\Column(type="string", length=255)
     */ 
  private $nom;
  /** 
     * @ORM\Column(type="text")
     */ 
  private $description;
    /**
     * @ORM\JoinColumn( nullable=false, onDelete="SET NULL")
     * @ORM\ManytoOne(targetEntity="Cours", cascade={"persist", "remove"})
     */
  private $cours;
  function getId() {
      return $this->id;
  }

  function getNom() {
      return $this->nom;
  }

  function getDescription() {
      return $this->description;
  }

  function getCours() {
      return $this->cours;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setNom($nom) {
      $this->nom = $nom;
  }

  function setDescription($description) {
      $this->description = $description;
  }

  function setCours($cours) {
      $this->cours = $cours;
  }


}
