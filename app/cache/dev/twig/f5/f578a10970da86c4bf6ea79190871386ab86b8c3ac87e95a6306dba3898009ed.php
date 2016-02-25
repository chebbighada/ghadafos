<?php

/* MoocBundle:Cours:list.html.twig */
class __TwigTemplate_85caf49f87464f4607e50c55a2195198c3337ea89e7abdc807631a823975016d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig ", "MoocBundle:Cours:list.html.twig", 1);
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
        echo "

<h1>Liste des Cours</h1>
<table border='2' >
    <tr>
        <th>Id</th>
        <th>Titre</th>
        <th>Description</th>
        <th>DateDebut</th>
        <th>DateFin</th>
        <th>Difficulte</th>
        <th>TestFinale</th>
        <th>Supprimer</th>
        <th>Modifier</th>

    </tr>
";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cours"]) ? $context["cours"] : $this->getContext($context, "cours")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 20
            echo "    <tr>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "titre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "description", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateDebut", array())), "html", null, true);
            echo "</td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["c"], "dateFin", array())), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "difficulte", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "testFinale", array()), "id", array()), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pi_cours_sup", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">supprimer</a></td>
        <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("pi_cours_mod", array("id" => $this->getAttribute($context["c"], "id", array()))), "html", null, true);
            echo "\">modifier</a></td>
    </tr> 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

</table>

<a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("pi_cours_ajout");
        echo "\">Ajouter Cours</a>

<form method=\"POST\"  action=\"\">
    <input type=\"text\" name=\"search\"/>
    <input type=\"submit\" value=\"chercher\"/>
</form>
<form method=\"POST\"  action=\"pi_cours_ajout\">
    <input type=\"submit\" value=\"ajouter\"/>
</form>

";
    }

    public function getTemplateName()
    {
        return "MoocBundle:Cours:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 36,  97 => 32,  88 => 29,  84 => 28,  80 => 27,  76 => 26,  72 => 25,  68 => 24,  64 => 23,  60 => 22,  56 => 21,  53 => 20,  49 => 19,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig " %}*/
/* {% block hn %}*/
/* */
/* */
/* <h1>Liste des Cours</h1>*/
/* <table border='2' >*/
/*     <tr>*/
/*         <th>Id</th>*/
/*         <th>Titre</th>*/
/*         <th>Description</th>*/
/*         <th>DateDebut</th>*/
/*         <th>DateFin</th>*/
/*         <th>Difficulte</th>*/
/*         <th>TestFinale</th>*/
/*         <th>Supprimer</th>*/
/*         <th>Modifier</th>*/
/* */
/*     </tr>*/
/* {% for c in cours %}*/
/*     <tr>*/
/*         <td>{{c.id}}</td>*/
/*         <td>{{c.titre}}</td>*/
/*         <td>{{c.description}}</td>*/
/*         <td>{{c.dateDebut|date}}</td>*/
/*         <td>{{c.dateFin|date}}</td>*/
/*         <td>{{c.difficulte}}</td>*/
/*         <td>{{c.testFinale.id}}</td>*/
/*         <td><a href="{{path("pi_cours_sup",{'id':c.id})}}">supprimer</a></td>*/
/*         <td><a href="{{path("pi_cours_mod",{'id':c.id})}}">modifier</a></td>*/
/*     </tr> */
/* {% endfor %}*/
/* */
/* */
/* </table>*/
/* */
/* <a href="{{ path('pi_cours_ajout')}}">Ajouter Cours</a>*/
/* */
/* <form method="POST"  action="">*/
/*     <input type="text" name="search"/>*/
/*     <input type="submit" value="chercher"/>*/
/* </form>*/
/* <form method="POST"  action="pi_cours_ajout">*/
/*     <input type="submit" value="ajouter"/>*/
/* </form>*/
/* */
/* {%endblock%}*/
/* */
/* */
