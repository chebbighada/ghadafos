<?php

namespace moocApp\MoocBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Entity
 */
class SuiviCours {
     /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
 private $id;
    /**
     * @ORM\ManyToOne(targetEntity="Cours")
     */
  private $cours;
    /**
     * @ORM\ManyToOne(targetEntity="Aprenant")
     */
  private $apprenant;
   /** 
     * @ORM\Column(type="string", length=255)
     */ 
  private $evaluation;  
  function getId() {
      return $this->id;
  }

  function getCours() {
      return $this->cours;
  }

  function getApprenant() {
      return $this->apprenant;
  }

  function getEvaluation() {
      return $this->evaluation;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setCours($cours) {
      $this->cours = $cours;
  }

  function setApprenant($apprenant) {
      $this->apprenant = $apprenant;
  }

  function setEvaluation($evaluation) {
      $this->evaluation = $evaluation;
  }


}
