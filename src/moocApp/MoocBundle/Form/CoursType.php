<?php

namespace moocApp\MoocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CoursType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('description')
                ->add('dateDebut')
                ->add('dateFin')
                ->add('difficulte','choice',array('choices' => array('Facile' =>'Facile','Moyen' =>'Moyen','Difficile' =>'Difficile')))
                ->add('testFinale', 'entity', array('class' => 'MoocBundle:TestFinale', 'property' => 'id'))
                ->add('valider', 'submit')
        ;
    }


    /**
     * @return string
     */
    public function getName() {
        return 'pibundle_cours';
    }

}
