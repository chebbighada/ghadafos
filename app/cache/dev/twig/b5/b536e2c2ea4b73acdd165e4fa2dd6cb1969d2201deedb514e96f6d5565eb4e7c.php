<?php

/* MoocBundle:admin:afficherComptes.html.twig */
class __TwigTemplate_7b4ed13533541c8d5948622d9f6934e52aa32a601af1fdd75df74d53c77fa96d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MoocBundle:user:tables.html.twig ", "MoocBundle:admin:afficherComptes.html.twig", 1);
        $this->blocks = array(
            'affichage' => array($this, 'block_affichage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MoocBundle:user:tables.html.twig ";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_affichage($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"main_container\" id=\"dashboard_page\">

        <div class=\"row-fluid\">
            <div class=\"widget widget-padding span12\">
                <div class=\"widget-header\">
                    <i class=\"icon-group\"></i>
                    <h2>Utilisateur</h2>

                </div>  
                <div class=\"widget-body\">
                    <table class=\"normal-table m-bot-30\" cellspacing='0'>
                        <thead>
                            <tr>
                                <th class=\"first\">Nom d'utlisateur</th>
                                <th>Role</th>
                                <th>adresse</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comptes"]) ? $context["comptes"] : $this->getContext($context, "comptes")));
        foreach ($context['_seq'] as $context["_key"] => $context["compte"]) {
            // line 24
            echo "                                ";
            if (($this->getAttribute($this->getAttribute($context["compte"], "roles", array()), 0, array(), "array") != "ROLE_ADMIN")) {
                // line 25
                echo "                                    <tr>
                                        <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "username", array()), "html", null, true);
                echo "</td> 
                                        ";
                // line 27
                if (($this->getAttribute($this->getAttribute($context["compte"], "roles", array()), 0, array(), "array") == "ROLE_APPRENANT")) {
                    // line 28
                    echo "                                            <td>APPREANT</td>
                                        ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 29
$context["compte"], "roles", array()), 0, array(), "array") == "ROLE_ORGANISME")) {
                    // line 30
                    echo "                                            <td>ORGANISME</td>
                                        ";
                }
                // line 32
                echo "                                     
                                        <td> ";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["compte"], "adresse", array()), "html", null, true);
                echo " </td>
                                        
                                            <td> <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supp_compte", array("id" => $this->getAttribute($context["compte"], "id", array()))), "html", null, true);
                echo "}\" target=\"_blank\">supprimer</a></td>
                                    </tr>
                                 
                                ";
            }
            // line 39
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['compte'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                        </tbody>
                    </table>
                </div> <!-- /widget-body -->
            </div> <!-- /widget -->
        </div> <!-- /row-fluid -->
        <div class=\"row-fluid\">
            <form action=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("cher");
        echo "\" methode=\"Post\">
                <table>
                    <tr>
                        <td> <label>Login</label></td>
                        <td><input type=\"text\" name=\"login\"/></td>
                    </tr>

                    
                    <tr>
                        <td></td>
                        <td><input type=\"submit\" value=\"chercher\"/></td>
                    </tr>
                </table>
            </form>

        </div>

    </div>




";
    }

    public function getTemplateName()
    {
        return "MoocBundle:admin:afficherComptes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  99 => 40,  93 => 39,  86 => 35,  81 => 33,  78 => 32,  74 => 30,  72 => 29,  69 => 28,  67 => 27,  63 => 26,  60 => 25,  57 => 24,  53 => 23,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "MoocBundle:user:tables.html.twig " %}*/
/* {% block affichage %}*/
/*     <div class="main_container" id="dashboard_page">*/
/* */
/*         <div class="row-fluid">*/
/*             <div class="widget widget-padding span12">*/
/*                 <div class="widget-header">*/
/*                     <i class="icon-group"></i>*/
/*                     <h2>Utilisateur</h2>*/
/* */
/*                 </div>  */
/*                 <div class="widget-body">*/
/*                     <table class="normal-table m-bot-30" cellspacing='0'>*/
/*                         <thead>*/
/*                             <tr>*/
/*                                 <th class="first">Nom d'utlisateur</th>*/
/*                                 <th>Role</th>*/
/*                                 <th>adresse</th>*/
/*                                 <th></th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for compte in comptes%}*/
/*                                 {% if compte.roles[0]!='ROLE_ADMIN'%}*/
/*                                     <tr>*/
/*                                         <td>{{compte.username}}</td> */
/*                                         {%if compte.roles[0]=='ROLE_APPRENANT' %}*/
/*                                             <td>APPREANT</td>*/
/*                                         {% elseif compte.roles[0]=='ROLE_ORGANISME'  %}*/
/*                                             <td>ORGANISME</td>*/
/*                                         {%endif%}*/
/*                                      */
/*                                         <td> {{compte.adresse}} </td>*/
/*                                         */
/*                                             <td> <a href="{{path('supp_compte',{'id':compte.id})}}}" target="_blank">supprimer</a></td>*/
/*                                     </tr>*/
/*                                  */
/*                                 {%endif%}*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div> <!-- /widget-body -->*/
/*             </div> <!-- /widget -->*/
/*         </div> <!-- /row-fluid -->*/
/*         <div class="row-fluid">*/
/*             <form action="{{path('cher')}}" methode="Post">*/
/*                 <table>*/
/*                     <tr>*/
/*                         <td> <label>Login</label></td>*/
/*                         <td><input type="text" name="login"/></td>*/
/*                     </tr>*/
/* */
/*                     */
/*                     <tr>*/
/*                         <td></td>*/
/*                         <td><input type="submit" value="chercher"/></td>*/
/*                     </tr>*/
/*                 </table>*/
/*             </form>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* */
/* */
/* {%endblock%}*/
/* */
