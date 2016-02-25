<?php

namespace moocApp\MoocBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ChapitreType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('description')
            ->add('cours')
                ->add('cours', 'entity', array('class' => 'MoocBundle:Cours', 'property' => 'id'))
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
