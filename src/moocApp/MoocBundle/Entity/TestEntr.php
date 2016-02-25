<?php
namespace moocApp\MoocBundle\Entity;
use Doctrine\ORM\Mapping as ORM ;
/**
 * @ORM\Entity
 */
class TestEntr {
     /**
     * @var integer
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
 private $id;
 /**
     * @ORM\Column (type="integer")
     */
 private $nombre;
 /**
     * @ORM\OneToOne(targetEntity="Chapitre")
     */
  private $chapitre;
}
