<?php
namespace moocApp\MoocBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Entity
 */
class TestFinale {
   /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
 private $id;
 function getId() {
     return $this->id;
 }

 function setId($id) {
     $this->id = $id;
 }


}
