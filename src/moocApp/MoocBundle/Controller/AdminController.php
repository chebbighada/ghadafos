<?php

namespace moocApp\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ob\HighchartsBundle\Highcharts\Highchart;
use moocApp\MoocBundle\Entity;

class AdminController extends Controller {

    //
    public function afficherCompteDashAction() {
        $em = $this->getDoctrine()->getManager();
        $comptes = array();
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
            $login = $request->get('username');
            $comptes = $em->getRepository('MoocBundle:User')->findBy(array('username' => $login));
        } else {
            $comptes = $em->getRepository('MoocBundle:User')->findAll();
        }
        return $this->render('MoocBundle:admin:afficherComptes.html.twig', array('comptes' => $comptes));
    }

//


    public function aficherDetailCompteAction($id) {

        $em = $this->getDoctrine()->getManager();

        $compte = $em->getRepository('MoocBundle:User')
                ->find($id);

        /*   $g= new Graphe();
          $tab=$em->getRepository('MoocBundle:Offre')
          ->findAll();
          $ob=$g->chartPietnAction($tab, $compte->getId());
          return $this->render('MoocBundle:admin:afficherDetailCompte.html.twig', array('compte' => $compte,'chart'=>$ob)); */


        return $this->render('MoocBundle:admin:afficherDetailCompte.html.twig', array('compte' => $compte));
    }

//
    /*  public function afficherOffreDashAction() {
      $em = $this->getDoctrine()->getManager();

      $offres = $em->getRepository('MoocBundlee:Offre')
      ->findAll();
      return $this->render('MoocBundle:admin:afficherOffres.html.twig', array('offres' => $offres));
      } */
    
    
    
    ////////////// crud
    public function rechercheAction() {
        $request = $this->getRequest();
        $login = $request->get('login');
        $em = $this->getDoctrine()->getManager();
        if ($login != null) {
            $comptes = $em->getRepository("MoocBundle:User")
                    ->findBy(
                    array('username' => $login)
            );
            return $this->render('MoocBundle:admin:afficherComptes.html.twig', array('comptes' => $comptes));
        } else {
            $response = new RedirectResponse($this->generateUrl('afficher_compte_admin'));
            return $response;
        }
    }

    public function supprimerAction($id) {
        $em = $this->getDoctrine()->getManager();
        $modeles = $em->getRepository
                        ('MoocBundle:User')->find($id);
        $em->remove($modeles);
        $em->flush();
        return( $this->redirectToRoute("afficher_compte_admin"));
    }

}
