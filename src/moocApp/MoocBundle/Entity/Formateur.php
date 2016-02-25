<?php
namespace moocApp\MoocBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Entity
 */
class Formateur {
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
 function setId($id) {
     $this->id = $id;
 }
 function getId() {
     return $this->id;
 }
 function getNom() {
     return $this->nom;
 }

 function setNom($nom) {
     $this->nom = $nom;
 }





}
