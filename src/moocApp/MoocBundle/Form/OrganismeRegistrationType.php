<?php

namespace moocApp\MoocBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;




class OrganismeRegistrationType   extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        
       $builder  
       
        ->add('nomDeLaSociete' , null , ["label"=>"Nom de l'entreprise"])       
               
               
             ;  
    }
    
    
       public function getName() {
        return 'organisme_registration';
    }

    
}
