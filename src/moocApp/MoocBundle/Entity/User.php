<?php

namespace moocApp\MoocBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**

 * @ORM\Entity
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="moocApp\MoocBundle\Entity\UserRepository")
 */
class User extends BaseUser {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url = "bundles/pitdoc/images/logoTraducteur.png";

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat = " valide";

    /**
     *
     * @ORM\Column( type="string", length=255)
     */
    private $adresse;

    /**
     *
     * @ORM\Column( type="string", length=255 , nullable=true)
     */
    private $nomDeLaSociete;

    function getEtat() {
        return $this->etat;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function getNom() {
        return $this->nom;
    }

    function getprenom() {
        return $this->prenom;
    }

    function setNOM($nom) {
        $this->nom = $nom;
    }

    function setpreNOM($prenom) {
        $this->prenom = $prenom;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function getNomDeLaSociete() {
        return $this->nomDeLaSociete;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }

    function setNomDeLaSociete($nomDeLaSociete) {
        $this->nomDeLaSociete = $nomDeLaSociete;
    }

    public function __construct() {
        parent::__construct();
// your own logic
    }

}
