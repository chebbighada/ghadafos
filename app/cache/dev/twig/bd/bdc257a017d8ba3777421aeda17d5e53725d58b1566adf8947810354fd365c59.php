<?php

/* MoocBundle:Chapitre:list.html.twig */
class __TwigTemplate_e4081fc563b0b9e85d93da6afa23b784831f0357bd28ab7b4b9fe154bf9690d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig ", "MoocBundle:Chapitre:list.html.twig", 1);
        $this->blocks = array(
            'hn' => array($this, 'block_hn'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_hn($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Liste des Chapitres</h1>
<table border='2' >
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Description</th>
        <th>Cours</th>
        <th>Supprimer</th>
        <th>Modifier</th>

    </tr>
";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["chapitre"]) ? $context["chapitre"] : $this->getContext($context, "chapitre")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 15
            echo "    <tr>
        <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "nom", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</td>
       <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "cours", array()), "id", array()), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pi_chapitre_sup", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">supprimer</a></td>
        <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pi_chapitre_mod", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">modifier</a></td>
    </tr> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</table>
<a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("pi_chapitre_ajout");
        echo "\">Ajouter Chapitre</a>
";
    }

    public function getTemplateName()
    {
        return "MoocBundle:Chapitre:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  80 => 24,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  48 => 15,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig " %}*/
/* {% block hn %}*/
/* <h1>Liste des Chapitres</h1>*/
/* <table border='2' >*/
/*     <tr>*/
/*         <th>Id</th>*/
/*         <th>Nom</th>*/
/*         <th>Description</th>*/
/*         <th>Cours</th>*/
/*         <th>Supprimer</th>*/
/*         <th>Modifier</th>*/
/* */
/*     </tr>*/
/* {% for c in chapitre %}*/
/*     <tr>*/
/*         <td>{{c.id}}</td>*/
/*         <td>{{c.nom}}</td>*/
/*         <td>{{c.description}}</td>*/
/*        <td>{{c.cours.id}}</td>*/
/*         <td><a href="{{path("pi_chapitre_sup",{'id':c.id})}}">supprimer</a></td>*/
/*         <td><a href="{{path("pi_chapitre_mod",{'id':c.id})}}">modifier</a></td>*/
/*     </tr> */
/* {% endfor %}*/
/* </table>*/
/* <a href="{{ path('pi_chapitre_ajout')}}">Ajouter Chapitre</a>*/
/* {%endblock%}*/
/* */
/* */
/* */
