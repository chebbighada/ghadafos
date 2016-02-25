<?php

/* MoocBundle:user:tables.html.twig  */
class __TwigTemplate_b866f089c8f8dca8b0a62bb3bbbb7f1af99bc619aeb66b40e1dacd70b1578f2f extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\"
    \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\"> 
<html dir=\"ltr\" lang=\"en-US\" xmlns=\"http://www.w3.org/1999/xhtml\">

\t
<!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:22:35 GMT -->
<head>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />

\t\t<title>HTML - Admin Pure</title>
\t\t
\t\t<!-- Styles -->
\t\t<link rel='stylesheet' href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_layout/style.css"), "html", null, true);
        echo "\" type='text/css' media='all' />
\t
\t\t<!--[if IE]>
\t\t
\t\t\t<link rel='stylesheet' href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_layout/IE.css"), "html", null, true);
        echo "\" type='text/css' media='all' />\t\t
\t\t\t
\t\t<![endif]-->
\t\t
\t\t<!-- Fonts -->
\t\t<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold|PT+Sans+Narrow:regular,bold|Droid+Serif:i&amp;v1' rel='stylesheet' type='text/css' />
\t\t
\t\t
\t\t<!-- Scripts -->
\t
\t\t
\t\t<script type='text/javascript' src='../../../ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min97e1.js?ver=1.7'></script>
\t\t
\t\t<!-- Table sorter -->
\t\t<script type='text/javascript' src='publicAdmin/_layout/scripts/jquery.tablesorter/jquery.tablesorter.min.js'></script>
\t\t
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
                                                </div>
\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("publicAdmin/_content/user-img.png"), "html", null, true);
        echo "\" alt=\"\" />
\t\t\t\t\t\t\t<span>Welcome <a href=\"#\">Owsian !</a></span>
\t\t\t\t\t\t\t<span class=\"logout\"><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Logout</a></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div id=\"launcher-wrapper\" class=\"fixed\">
\t\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index-2.html\""), "html", null, true);
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
\t\t\t\t\t\t<li class=\"first\">
\t\t\t\t\t\t\t<div><a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("dashboard");
        echo "\">Dashboard</a><span class=\"icon-nav dashboard\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("calendar.html"), "html", null, true);
        echo "\">Calendar</a><span class=\"icon-nav calendar\"></span><span>125</span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("interface-elements.html"), "html", null, true);
        echo "\">Interface Elements</a><span class=\"icon-nav interface-elements\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 90
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
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("typography.html"), "html", null, true);
        echo "\">Typography</a><span class=\"icon-nav typography\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t<div><a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("tables.html"), "html", null, true);
        echo "\">Tables</a><span class=\"icon-nav tables\"></span></div>
\t\t\t\t\t\t\t<div class=\"back\"></div>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<div><a href=\"";
        // line 106
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
\t\t\t\t
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t<li class=\"home\"><a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index-2.html"), "html", null, true);
        echo "\" ></a></li>
\t\t\t\t\t\t<li><a href=\"#\" >Admin Pure</a></li>
\t\t\t\t\t\t<li><a href=\"#\" >Layouts</a></li>
\t\t\t\t\t\t<li class=\"last\"><a href=\"#\" >Tables</a></li>
\t\t\t\t\t</ul>
\t\t\t\t
\t\t\t\t\t
                                                
                                                
                                           ";
        // line 129
        $this->displayBlock('affichage', $context, $blocks);
        // line 131
        echo "     
                                                
                                                
                                                
\t\t\t\t\t
\t\t\t\t\t
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

<!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:22:36 GMT -->
</html>
\t";
    }

    // line 129
    public function block_affichage($context, array $blocks = array())
    {
        // line 130
        echo "
                                           ";
    }

    public function getTemplateName()
    {
        return "MoocBundle:user:tables.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 130,  218 => 129,  193 => 131,  191 => 129,  179 => 120,  162 => 106,  155 => 102,  148 => 98,  137 => 90,  130 => 86,  123 => 82,  116 => 78,  89 => 56,  80 => 50,  75 => 48,  42 => 18,  35 => 14,  20 => 1,);
    }
}
/* <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"*/
/*     "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"> */
/* <html dir="ltr" lang="en-US" xmlns="http://www.w3.org/1999/xhtml">*/
/* */
/* 	*/
/* <!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:22:35 GMT -->*/
/* <head>*/
/* 		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />*/
/* 		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />*/
/* */
/* 		<title>HTML - Admin Pure</title>*/
/* 		*/
/* 		<!-- Styles -->*/
/* 		<link rel='stylesheet' href="{{ asset('publicAdmin/_layout/style.css')}}" type='text/css' media='all' />*/
/* 	*/
/* 		<!--[if IE]>*/
/* 		*/
/* 			<link rel='stylesheet' href="{{ asset('publicAdmin/_layout/IE.css')}}" type='text/css' media='all' />		*/
/* 			*/
/* 		<![endif]-->*/
/* 		*/
/* 		<!-- Fonts -->*/
/* 		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold|PT+Sans+Narrow:regular,bold|Droid+Serif:i&amp;v1' rel='stylesheet' type='text/css' />*/
/* 		*/
/* 		*/
/* 		<!-- Scripts -->*/
/* 	*/
/* 		*/
/* 		<script type='text/javascript' src='../../../ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min97e1.js?ver=1.7'></script>*/
/* 		*/
/* 		<!-- Table sorter -->*/
/* 		<script type='text/javascript' src='publicAdmin/_layout/scripts/jquery.tablesorter/jquery.tablesorter.min.js'></script>*/
/* 		*/
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
/*                                                 </div>*/
/* 						<div class="user">*/
/* 							<img src="{{ asset('publicAdmin/_content/user-img.png')}}" alt="" />*/
/* 							<span>Welcome <a href="#">Owsian !</a></span>*/
/* 							<span class="logout"><a href="{{ path('logout') }}">Logout</a></span>*/
/* 						</div>*/
/* 					</div>*/
/* 					*/
/* 					<div id="launcher-wrapper" class="fixed">*/
/* 						<div class="logo">*/
/* 							<a href="{{ asset('index-2.html"')}}"><img src="{{ asset('publicAdmin/_content/back-logo.png')}}" alt="" /></a>*/
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
/* 						<li class="first">*/
/* 							<div><a href="{{ path('dashboard')}}">Dashboard</a><span class="icon-nav dashboard"></span></div>*/
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
/* 						<li class="active">*/
/* 							<div><a href="{{ asset('tables.html')}}">Tables</a><span class="icon-nav tables"></span></div>*/
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
/* 				*/
/* 					<ul class="breadcrumb">*/
/* 						<li class="home"><a href="{{ asset('index-2.html')}}" ></a></li>*/
/* 						<li><a href="#" >Admin Pure</a></li>*/
/* 						<li><a href="#" >Layouts</a></li>*/
/* 						<li class="last"><a href="#" >Tables</a></li>*/
/* 					</ul>*/
/* 				*/
/* 					*/
/*                                                 */
/*                                                 */
/*                                            {% block affichage %}*/
/* */
/*                                            {% endblock %}     */
/*                                                 */
/*                                                 */
/*                                                 */
/* 					*/
/* 					*/
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
/* <!-- Mirrored from www.nicolaegabriel.info/live/admin-pure/tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 20 Feb 2016 22:22:36 GMT -->*/
/* </html>*/
/* 	*/
