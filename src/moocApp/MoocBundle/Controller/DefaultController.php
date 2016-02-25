<?php

namespace moocApp\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('MoocBundle:Default:index.html.twig');
    }
       public function courseAction() {
        return $this->render('MoocBundle:Default:allCourses.html.twig');
    }

    public function dashAction() {
        return $this->render('MoocBundle:user:dashboard.html.twig');
    }
    /* public function profilAction() {
        $id_user = $this->container->get('security.context')->getToken()->getUser()->getNom();
        return $this->render('MoocBundle:Default:layoutAcceuilProfil.html.twig',array('dd'=>$id_user,
                'error' => $security.context->getLastAuthenticationError(),
                ));
    }
 */
    
    
    
    public function loginAction(Request $request) {

        $authenticationUtils = $this->get('security.authentication_utils');
     
        return $this->render('MoocBundle:Default:index.html.twig', array(
                    'last_username' => $authenticationUtils->getLastUsername(),
                    'error' => $authenticationUtils->getLastAuthenticationError(),
        ));
    }

    public function indexAAction() {
        return $this->render('MoocBundle:user:inedexApprenant.html.twig', []);
    }

       public function indexOAction() {
        return $this->render('MoocBundle:user:inedexOrganisme.html.twig', []);
    }

    
    public function afficherAction() {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository('MoocBundle:User')->findT();
        return $this->render('MoocBundle:user:liste_trad.html.twig', array('modeles' => $modeles));
    }

    public function detailClientAction(){
        $em = $this->getDoctrine()->getManager();
        $security = $this->get('security.context');
        $token = $security->getToken();
        $user = $token->getUser();
       $modeles = $em->getRepository('MoocBundle:User')
                     ->find($user->getId());
    return $this->render('MoocBundle:user:detail_client.html.twig', array('modeles'=>$modeles));}
    
    public function modifieraApprenantAction($id){
          $em=$this->getDoctrine()->getManager();
          $model=$em->getRepository('magasinBundle:Lot')->find($id);
          $form = $this->createForm(new modifierForm() , $model);
          $request=$this->get('request');
          $form->handleRequest($request);
          if($form->isValid()){
              $em=$this->getDoctrine()->getManager();
              $em->persist($model);
              $em->flush();
              return($this->redirectToRoute("afficher"));
          }
         return $this->render('magasinBundle:magasin:modifier.html.twig',
                array('f'=>$form->createView()));
    }
    
    
 
    
    
    public function erreurAction() {
        return $this->render('MoocBundle::erreur.html.twig', array());
    }
    
    
    
    
    
    
    
    public function aboutusAction() {
        return $this->render('MoocBundle:Default:aboutus.html.twig');
    }

    public function contactusAction() {
        return $this->render('MoocBundle:Default:contactus.html.twig');
    }

    public function inscriptionAction() {
        return $this->render('MoocBundle:Default:inscription.html.twig');
    }



}
