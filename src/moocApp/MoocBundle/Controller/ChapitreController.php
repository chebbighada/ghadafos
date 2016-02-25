<?php

namespace moocApp\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use moocApp\MoocBundle\Entity\Chapitre;
use moocApp\MoocBundle\Form\ChapitreType;
class ChapitreController extends Controller {

    public function listchapitreAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $chapitre = $em->getRepository('MoocBundle:Chapitre')->findAll();

        return $this->render('MoocBundle:Chapitre:list.html.twig', array('chapitre' => $chapitre));
    }
public function  ajoutchapitreAction(){
        $chapitre = new Chapitre();
        $chapitreForm = new ChapitreType();
        $form = $this->createForm($chapitreForm,$chapitre);
        $request=  $this->get('request');
        if($form->handleRequest($request)->isValid()) //handleRequest valide de formulaire //isValid relation avec les type de form base de donnéé
        {
            $em=  $this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
            return $this->redirect($this->generateUrl('pi_chapitre_list'));
        }
        
        return $this->render('MoocBundle:Chapitre:ajoutchapitre.html.twig',array('f'=>$form->createView()));
    }
     public function  supprimerchapitreAction($id){       
            $em=  $this->getDoctrine()->getManager();
            $chapitre=$em->getRepository('MoocBundle:Chapitre')->find($id);
            $em->remove($chapitre);
            $em->flush();
       
        return $this->redirect($this->generateUrl('pi_chapitre_list'));
     }
     public function  modiferchapitreAction($id){       
           $em=$this->getDoctrine()->getManager();
        $chapitre= $em->getRepository('MoocBundle:Chapitre')->find($id);
        
        $form = $this->createForm(new ChapitreType() , $chapitre);
        $request=  $this->get('request');
        $form->handleRequest($request);
        
        if($form->isValid()){
           $em=$this->getDoctrine()->getManager();
            $em->persist($chapitre);
            $em->flush();
            return  $this->redirect($this->generateUrl("pi_chapitre_list"));
        }
         return $this->render('MoocBundle:Chapitre:Updatechapitre.html.twig',array('f'=>$form->createView()));
       
    }
}
