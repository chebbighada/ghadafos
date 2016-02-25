<?php

/* MoocBundle:Chapitre:ajoutchapitre.html.twig */
class __TwigTemplate_65fa5c750a92d3e988513d9779ec3934097dbd10cd759409fc656d0c90f8c97f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig ", "MoocBundle:Chapitre:ajoutchapitre.html.twig", 1);
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
        echo "<form method=\"post\" action=''>
<table>
    <tr><td>Nom</td><td>";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "nom", array()), 'widget');
        echo "</td></tr>
    <tr><td>Description</td><td>";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "description", array()), 'widget');
        echo "</td></tr>
    <tr><td>Cours</td><td>";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), "cours", array()), 'widget');
        echo "</td></tr>
    
  


</table>
";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["f"]) ? $context["f"] : $this->getContext($context, "f")), 'rest');
        echo "
</form>
";
    }

    public function getTemplateName()
    {
        return "MoocBundle:Chapitre:ajoutchapitre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 13,  43 => 7,  39 => 6,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "::base.html.twig " %}*/
/* {% block hn %}*/
/* <form method="post" action=''>*/
/* <table>*/
/*     <tr><td>Nom</td><td>{{form_widget(f.nom)}}</td></tr>*/
/*     <tr><td>Description</td><td>{{form_widget(f.description)}}</td></tr>*/
/*     <tr><td>Cours</td><td>{{form_widget(f.cours)}}</td></tr>*/
/*     */
/*   */
/* */
/* */
/* </table>*/
/* {{form_rest(f)}}*/
/* </form>*/
/* {%endblock%}*/
/* */
/* */
