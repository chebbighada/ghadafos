<?php

namespace moocApp\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        $em    = $this->get('doctrine.orm.entity_manager');
    $dql   = "SELECT a FROM piBundle:Chapitre a";
    $query = $em->createQuery($dql);

    $paginator  = $this->get('knp_paginator');
    $pagination = $paginator->paginate(
        $query, /* query NOT result */
        $request->query->getInt('page', 1)/*page number*/,
        2/*limit per page*/
            );
        return $this->render('piBundle:Default:index.html.twig', array('pagination' => $pagination));
    }
    
     public function testAction(Request $request)
    {
        
 
        return $this->render('piBundle:Default:default.html.twig');
    }
    
    
    
    
    
}
