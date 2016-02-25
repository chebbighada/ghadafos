<?php

namespace moocApp\MoocBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
        $builder
                ->add('nom', null , ["label"=>"Nom"])
                ->add('prenom' , null , ["label"=>"Prenom"])
                 ->add('nomDeLaSociete' , null , ["label"=>"Nom de l'entreprise"])  
                 ->add('adresse', null , ["label"=>"Adresse"])
                ->add('roles', 'collection', array(
                    'type' => 'choice',
                    'label' => 'Rôles',
                    'options' => array(
                        'label' => false,
                        'choices' => array('ROLE_APPRENANT' => 'Apprenant', 'ROLE_ORGANISME' => 'Organisme' ),
                        'multiple' => false,
                        'data' => 1
                    )))
                        
                 
        ;
    }

    public function getName() {
        return 'user_registration';
    }

}
