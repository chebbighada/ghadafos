<?php
namespace moocApp\MoocBundle\Entity;
use Doctrine\ORM\EntityRepository;


/**
 * Description of UserRepository
 *
 * @author ghada
 */
class UserRepository extends \Doctrine\ORM\EntityRepository{
    public function findT(){
        $query=$this->getEntityManager()
                ->createQuery("SELECT u FROM MoocBundle:User u WHERE u.roles LIKE '%ROLE_APPRENANT%'");
        return $query->getResult();
    }
}