<?php

namespace moocApp\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use moocApp\MoocBundle\Form\CoursType;
use moocApp\MoocBundle\Entity\Cours;


class CoursController extends Controller {

    public function listcourAction() {
        $em = $this->container->get('doctrine')->getEntityManager();
        $cours = $em->getRepository('MoocBundle:Cours')->findAll();

        return $this->render('MoocBundle:Cours:list.html.twig', array('cours' => $cours));
    }
    public function  ajoutcourAction(){
        $cours = new Cours();
        $coursForm = new CoursType();
        $form = $this->createForm($coursForm,$cours);
        $request=  $this->get('request');
        if($form->handleRequest($request)->isValid()) //handleRequest valide de formulaire //isValid relation avec les type de form base de donnéé
        {
            $em=  $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
             return $this->redirect($this->generateUrl('pi_cour_list'));
                            
        }
        
        return $this->render('MoocBundle:Cours:ajoutcours.html.twig',array('f'=>$form->createView()));
    }
     public function  supprimercoursAction($id){       
            $em=  $this->getDoctrine()->getManager();
            $cours=$em->getRepository('MoocBundle:Cours')->find($id);
            $em->remove($cours);
            $em->flush();
        return $this->redirect($this->generateUrl('pi_cour_list'));
        // $this->redirectToRoute('my_app_parc_Affichage_Modele');
    }
    public function  modifercoursAction($id){       
           $em=$this->getDoctrine()->getManager();
        $cours= $em->getRepository('MoocBundle:Cours')->find($id);
        
        $form = $this->createForm(new CoursType() , $cours);
        $request=  $this->get('request');
        $form->handleRequest($request);
        
        if($form->isValid()){
           $em=$this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
            return  $this->redirect($this->generateUrl("pi_cour_list"));
        }
         return $this->render('MoocBundle:Cours:Updatecours.html.twig',array('f'=>$form->createView()));
       
    }
     public function RechercheAction()
    {
        $em = $this->getDoctrine()->getManager();
$Cours = $em->getRepository('MoocBundle:Cours')
                ->findAll();
        $request = $this->getRequest();
        if ($request->getMethod()=="POST")
        {
        $search=$request->get('search');
        $Cours=$em->getRepository
                ('MoocBundle:Cours')->
        findBy(array("titre"=>$search));        
        }
        
        return $this->render
('MoocBundle:Cours:recherche.html.twig'
                ,array("Cours"=>$Cours));
    }

}
