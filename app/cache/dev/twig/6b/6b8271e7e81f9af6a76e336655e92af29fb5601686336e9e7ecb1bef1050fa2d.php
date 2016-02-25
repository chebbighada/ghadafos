<?php

/* MoocBundle:user:dashboard.html.twig */
class __TwigTemplate_3d568440b26d2a50ec291339de2fa847e2d73fcae2d32219f5be223eb5ceb1d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'affichage' => array($this, 'block_affichage'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\"
    \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\"> 
<html dir=\"ltr\" lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\">

\t
<!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:21:15 GMT -->
<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t\t<title>HTML - Admin Pure</title>
\t\t
\t\t<link rel='stylesheet' href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_layout/scripts/jquery.fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" type='text/css' media='screen' />
\t\t<link rel='stylesheet' href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_layout/scripts/jquery.fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" type='text/css' media='print' />
\t\t
\t\t<!-- Styles -->
\t\t<link rel='stylesheet' href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_layout/style.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
\t\t
\t\t<!--[if IE]>
\t\t
\t\t\t<link rel='stylesheet' href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_layout/IE.css"), "html", null, true);
        echo "\" type='text/css' media='all'')}}\" />\t\t
\t\t\t
\t\t<![endif]-->
\t\t
\t\t<!-- Fonts -->
\t\t<link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold|PT+Sans+Narrow:regular,bold|Droid+Serif:i&amp;v1"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css' />
\t\t
\t\t<script type='text/javascript' src='../../../ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min97e1.js?ver=1.7'></script>
\t\t<script type=\"\" src=\"../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js\"></script>
\t\t
\t\t<!-- Calendar -->
\t\t<script type='text/javascript' src='publicAdmin/_layout/scripts/jquery.fullcalendar/fullcalendar.min.js'></script>
\t\t
\t\t<!-- Scripts -->
\t\t<script type='text/javascript' src='publicAdmin/_layout/custom.js'></script>
\t\t
\t</head>  
  
\t<body>
\t 
\t\t<div id=\"layout\">
\t\t\t<div id=\"header-wrapper\">
\t\t\t\t<div id=\"header\">
\t\t\t\t\t<div id=\"user-wrapper\" class=\"fixed\">
\t\t\t\t\t\t<div class=\"color-scheme\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"button\">Dropdown suggestion</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t<img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/user-img.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t<span>Welcome <a href=\"#\">Owsian !</a></span>
\t\t\t\t\t\t\t<span class=\"logout\"><a href=\"#\">Logout</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div id=\"launcher-wrapper\" class=\"fixed\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index-2.html"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/back-logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"launcher\">
\t\t\t\t\t\t\t<ul class=\"fixed\">
\t\t\t\t\t\t\t\t<li class=\"users\"><a href=\"#\">Users</a></li>
\t\t\t\t\t\t\t\t<li class=\"mailbox\">
\t\t\t\t\t\t\t\t\t<a href=\"#\">Mailbox</a>
\t\t\t\t\t\t\t\t\t<span class=\"red-bullet\"></span>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"dialog\"><a href=\"#\">Dialog</a></li>
\t\t\t\t\t\t\t\t<li class=\"settings last\"><a href=\"#\">Settings</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"page fixed\">
\t\t\t\t<div id=\"sidebar\">
\t\t\t\t\t<ul id=\"navigation\">
\t\t\t\t\t\t<li class=\"first active\">
\t\t\t\t\t\t\t<div><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index-2.html"), "html", null, true);
        echo "\">Dashboard</a><span class=\"icon-nav dashboard\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("calendar.html"), "html", null, true);
        echo "\">Calendar</a><span class=\"icon-nav calendar\"></span><span>125</span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("interface-elements.html"), "html", null, true);
        echo "\">Interface Elements</a><span class=\"icon-nav interface-elements\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("form-elements.html"), "html", null, true);
        echo "\">Form Elements</a><span class=\"icon-nav form-elements\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"#\">Settings</a><span class=\"icon-nav settings\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("typography.html"), "html", null, true);
        echo "\">Typography</a><span class=\"icon-nav typography\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("afficher_compte_admin");
        echo "\">Tables</a><span class=\"icon-nav tables\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("gallery.html"), "html", null, true);
        echo "\">Gallery</a><span class=\"icon-nav gallery\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"last\">
\t\t\t\t\t\t\t<div><a href=\"#\">Users</a><span class=\"icon-nav users\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t
\t\t\t\t<div id=\"content\">
\t\t\t\t\t<div class=\"fixed index-large-icon\">
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon one\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon two\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon three\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon four\"><span></span></a>
\t\t\t\t\t\t<a href=\"";
        // line 126
        echo $this->env->getExtension('routing')->getPath("afficher_compte_admin");
        echo "\" class=\"large-icon five\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon six\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon seven last\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon ten\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon eleven\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon twelve\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon thirteen\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon fourteen\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon fifteen\"><span></span></a>
\t\t\t\t\t\t<a href=\"#\" class=\"large-icon sixteen last\"><span></span></a>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"notice-one\">Hi there! I’m just a warning.
\t\t\t\t\t\t<span></span>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t
\t\t\t\t\t<div class=\"hr\"></div>  
\t\t\t\t\t
\t\t\t\t\t<div class=\"fixed\">
\t\t\t\t\t\t<div class=\"col-310\">
\t\t\t\t\t\t\t<div class=\"panel\">
                                                            
                                                             ";
        // line 151
        $this->displayBlock('affichage', $context, $blocks);
        // line 153
        echo "\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-310 last\">
\t\t\t\t\t        </div>\t
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<h1 class=\"m-top-30\">Gallery</h1>
\t\t\t\t\t<ul class=\"gallery fixed\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img1.png"), "html", null, true);
        echo "\" rel=\"gallery')}}\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img1.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img1-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img2.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img3-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img3.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img4-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img4.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img5-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img5.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img6-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img6.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img7-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img7.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img8-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img8.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img9-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img9.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t\t
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img10-original.png"), "html", null, true);
        echo "\" rel=\"gallery\"></a></div>
\t\t\t\t\t\t\t<img src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/gallery-img10.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t
\t\t\t\t\t<h1 class=\"m-top-30\">Buttons with icons</h1>
\t\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t\t
\t\t\t\t\t<a href=\"#\" class=\"button-orange arrow\">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<a href=\"#\" class=\"button-blue arrow\">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<a href=\"#\" class=\"button-blue-light arrow\">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<a href=\"#\" class=\"button-green arrow\">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;
\t\t\t\t\t<a href=\"#\" class=\"button-brown arrow\">Le Button<span></span></a>
\t\t\t\t\t<a href=\"#\" class=\"button-grey arrow m-top-15\">Le Button<span></span></a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>

\t
\t
\t
\t 
\t</body>
\t

<!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:22:20 GMT -->
</html>
\t";
    }

    // line 151
    public function block_affichage($context, array $blocks = array())
    {
        // line 152
        echo "
                                                             ";
    }

    public function getTemplateName()
    {
        return "MoocBundle:user:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  373 => 152,  370 => 151,  337 => 210,  333 => 209,  326 => 205,  322 => 204,  315 => 200,  311 => 199,  304 => 195,  300 => 194,  293 => 190,  289 => 189,  282 => 185,  278 => 184,  271 => 180,  267 => 179,  260 => 175,  256 => 174,  249 => 170,  245 => 169,  238 => 165,  234 => 164,  221 => 153,  219 => 151,  191 => 126,  171 => 109,  164 => 105,  157 => 101,  146 => 93,  139 => 89,  132 => 85,  125 => 81,  98 => 59,  87 => 51,  61 => 28,  53 => 23,  46 => 19,  40 => 16,  36 => 15,  20 => 1,);
    }
}
/* */
/* */
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"*/
/*     "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> */
/* <html dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">*/
/* */
/* 	*/
/* <!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:21:15 GMT -->*/
/* <head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/* */
/* 		<title>HTML - Admin Pure</title>*/
/* 		*/
/* 		<link rel='stylesheet' href="{{ asset('publicAdmin/_layout/scripts/jquery.fullcalendar/fullcalendar.css')}}" type='text/css' media='screen' />*/
/* 		<link rel='stylesheet' href="{{ asset('publicAdmin/_layout/scripts/jquery.fullcalendar/fullcalendar.print.css')}}" type='text/css' media='print' />*/
/* 		*/
/* 		<!-- Styles -->*/
/* 		<link rel='stylesheet' href="{{ asset('publicAdmin/_layout/style.css')}}" type='text/css' media='all' />*/
/* 		*/
/* 		<!--[if IE]>*/
/* 		*/
/* 			<link rel='stylesheet' href="{{ asset('publicAdmin/_layout/IE.css')}}" type='text/css' media='all'')}}" />		*/
/* 			*/
/* 		<![endif]-->*/
/* 		*/
/* 		<!-- Fonts -->*/
/* 		<link href="{{ asset('http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold|PT+Sans+Narrow:regular,bold|Droid+Serif:i&amp;v1')}}" rel='stylesheet' type='text/css' />*/
/* 		*/
/* 		<script type='text/javascript' src='../../../ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min97e1.js?ver=1.7'></script>*/
/* 		<script type="" src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>*/
/* 		*/
/* 		<!-- Calendar -->*/
/* 		<script type='text/javascript' src='publicAdmin/_layout/scripts/jquery.fullcalendar/fullcalendar.min.js'></script>*/
/* 		*/
/* 		<!-- Scripts -->*/
/* 		<script type='text/javascript' src='publicAdmin/_layout/custom.js'></script>*/
/* 		*/
/* 	</head>  */
/*   */
/* 	<body>*/
/* 	 */
/* 		<div id="layout">*/
/* 			<div id="header-wrapper">*/
/* 				<div id="header">*/
/* 					<div id="user-wrapper" class="fixed">*/
/* 						<div class="color-scheme">*/
/* 							<a href="#" class="button">Dropdown suggestion</a>*/
/* 						</div>*/
/* 						<div class="user">*/
/* 							<img src="{{ asset('publicAdmin/_content/user-img.png')}}" alt="" />*/
/* 							<span>Welcome <a href="#">Owsian !</a></span>*/
/* 							<span class="logout"><a href="#">Logout</a></span>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div id="launcher-wrapper" class="fixed">*/
/* 						<div class="logo">*/
/* 							<a href="{{ asset('index-2.html')}}"><img src="{{ asset('publicAdmin/_content/back-logo.png')}}" alt="" /></a>*/
/* 						</div>*/
/* 						*/
/* 						<div class="launcher">*/
/* 							<ul class="fixed">*/
/* 								<li class="users"><a href="#">Users</a></li>*/
/* 								<li class="mailbox">*/
/* 									<a href="#">Mailbox</a>*/
/* 									<span class="red-bullet"></span>*/
/* 								</li>*/
/* 								<li class="dialog"><a href="#">Dialog</a></li>*/
/* 								<li class="settings last"><a href="#">Settings</a></li>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 			*/
/* 			<div class="page fixed">*/
/* 				<div id="sidebar">*/
/* 					<ul id="navigation">*/
/* 						<li class="first active">*/
/* 							<div><a href="{{ asset('index-2.html')}}">Dashboard</a><span class="icon-nav dashboard"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li>*/
/* 							<div><a href="{{ asset('calendar.html')}}">Calendar</a><span class="icon-nav calendar"></span><span>125</span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li>*/
/* 							<div><a href="{{ asset('interface-elements.html')}}">Interface Elements</a><span class="icon-nav interface-elements"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li>*/
/* 							<div><a href="{{ asset('form-elements.html')}}">Form Elements</a><span class="icon-nav form-elements"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li>*/
/* 							<div><a href="#">Settings</a><span class="icon-nav settings"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li>*/
/* 							<div><a href="{{ asset('typography.html')}}">Typography</a><span class="icon-nav typography"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li>*/
/* 							<div><a href="{{ path('afficher_compte_admin')}}">Tables</a><span class="icon-nav tables"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li>*/
/* 							<div><a href="{{ asset('gallery.html')}}">Gallery</a><span class="icon-nav gallery"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 						<li class="last">*/
/* 							<div><a href="#">Users</a><span class="icon-nav users"></span></div>*/
/* 							<div class="back"></div>*/
/* 						</li>*/
/* 					</ul>*/
/* 				</div>*/
/* 				*/
/* 				*/
/* 				<div id="content">*/
/* 					<div class="fixed index-large-icon">*/
/* 						<a href="#" class="large-icon one"><span></span></a>*/
/* 						<a href="#" class="large-icon two"><span></span></a>*/
/* 						<a href="#" class="large-icon three"><span></span></a>*/
/* 						<a href="#" class="large-icon four"><span></span></a>*/
/* 						<a href="{{ path('afficher_compte_admin') }}" class="large-icon five"><span></span></a>*/
/* 						<a href="#" class="large-icon six"><span></span></a>*/
/* 						<a href="#" class="large-icon seven last"><span></span></a>*/
/* 						<a href="#" class="large-icon ten"><span></span></a>*/
/* 						<a href="#" class="large-icon eleven"><span></span></a>*/
/* 						<a href="#" class="large-icon twelve"><span></span></a>*/
/* 						<a href="#" class="large-icon thirteen"><span></span></a>*/
/* 						<a href="#" class="large-icon fourteen"><span></span></a>*/
/* 						<a href="#" class="large-icon fifteen"><span></span></a>*/
/* 						<a href="#" class="large-icon sixteen last"><span></span></a>*/
/* 					</div>*/
/* 					*/
/* 					<div class="notice-one">Hi there! I’m just a warning.*/
/* 						<span></span>*/
/* 					</div>*/
/* 					*/
/* 					*/
/* 					*/
/* 				*/
/* 					<div class="hr"></div>  */
/* 					*/
/* 					<div class="fixed">*/
/* 						<div class="col-310">*/
/* 							<div class="panel">*/
/*                                                             */
/*                                                              {% block affichage %}*/
/* */
/*                                                              {% endblock %}	*/
/* 							</div>*/
/* 						</div>*/
/* 						*/
/* 						<div class="col-310 last">*/
/* 					        </div>	*/
/* 					</div>*/
/* 					*/
/* 					<h1 class="m-top-30">Gallery</h1>*/
/* 					<ul class="gallery fixed">*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img1.png')}}" rel="gallery')}}"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img1.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img1-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img2.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img3-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img3.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img4-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img4.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img5-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img5.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img6-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img6.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img7-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img7.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img8-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img8.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img9-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img9.png')}}" alt="" />*/
/* 						</li>*/
/* 						*/
/* 						<li>*/
/* 							<div><a href="{{ asset('publicAdmin/_content/gallery-img10-original.png')}}" rel="gallery"></a></div>*/
/* 							<img src="{{ asset('publicAdmin/_content/gallery-img10.png')}}" alt="" />*/
/* 						</li>*/
/* 					</ul>*/
/* 					*/
/* 					<h1 class="m-top-30">Buttons with icons</h1>*/
/* 					<div class="hr"></div>*/
/* 					*/
/* 					<a href="#" class="button-orange arrow">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;*/
/* 					<a href="#" class="button-blue arrow">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;*/
/* 					<a href="#" class="button-blue-light arrow">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;*/
/* 					<a href="#" class="button-green arrow">Le Button<span></span></a>&nbsp;&nbsp;&nbsp;*/
/* 					<a href="#" class="button-brown arrow">Le Button<span></span></a>*/
/* 					<a href="#" class="button-grey arrow m-top-15">Le Button<span></span></a>*/
/* 					*/
/* 				</div>*/
/* 				*/
/* 			</div>*/
/* 		</div>*/
/* */
/* 	*/
/* 	*/
/* 	*/
/* 	 */
/* 	</body>*/
/* 	*/
/* */
/* <!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:22:20 GMT -->*/
/* </html>*/
/* 	*/
