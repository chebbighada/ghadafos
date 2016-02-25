<?php

namespace moocApp\MoocBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ob\HighchartsBundle\Highcharts\Highchart;
use moocApp\MoocBundle\Entity\Cours;

class GrapheController extends Controller {

    public function chartLineAction() {
        $em = $this->getDoctrine()->getEntityManager();
        // Chart
        $query1 = $em->createQuery("SELECT count(u) as adm1 FROM piBundle:Cours u  where u.difficulte='facile' ");
        $facile = $query1->getResult();
        $query2 = $em->createQuery("SELECT count(u) as adm2 FROM piBundle:Cours u  where u.difficulte='moyen' ");
        $moyen = $query2->getResult();
        $query3 = $em->createQuery("SELECT count(u) as adm3 FROM piBundle:Cours u  where u.difficulte='difficile' ");
        $difficile = $query3->getResult();
        $query4 = $em->createQuery("SELECT count(u) as adm4 FROM piBundle:Cours u " );
         $nb =$query4->getResult();

        $data = array();
        foreach ($nb as $nb) {
            foreach ($facile as $values) {
                $a = array('facile', intval($values['adm1']) * 100 / intval($nb['adm4']));
                array_push($data, $a);
            }
            foreach ($moyen as $values) {
                $b = array('moyen', intval($values['adm2']) * 100 / intval($nb['adm4']));
                array_push($data, $b);
            }

            foreach ($difficile as $values) {
                $c = array('difficile', intval($values['adm3']) * 100 / intval($nb['adm4']));
                array_push($data, $c);
            }
        }
        $series = array(
            array('name' => "le niveau de difficulté", 'data' => $data));
        $ob = new Highchart();
        $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe
        $ob->title->text('graphe de cours ');
        $ob->xAxis->title(array('text' => "les cours "));
        $ob->yAxis->title(array('text' => "niveau de difficulté par pourcentage "));
        $ob->series($series);
        return $this->render('MoocBundle:Graphe:LineChart.html.twig', array(
                    'chart' => $ob
        ));
    }

}
