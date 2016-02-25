<?php

/* MoocBundle:Default:index.html.twig */
class __TwigTemplate_312615859bee200f2f949e037ab96bdf33f8b638f45cc17450a6de01e2e25ed2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocBundle::layoutAcceuil.html.twig", "MoocBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoocBundle::layoutAcceuil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "MoocBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends 'MoocBundle::layoutAcceuil.html.twig' %}*/
/* */
/* */
