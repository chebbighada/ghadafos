<?php

/* ::base.html.twig  */
class __TwigTemplate_411316d244751840a218939136bf87343aa9aa6936085d6162f7dc9eb8503c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hn' => array($this, 'block_hn'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">


    <!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:17:57 GMT -->
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
        <title>Homepage | Education Center</title>

        <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/fontello/css/fontello.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/settings.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/woocommerce/woocommerce-layout.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/woocommerce/woocommerce-smallscreen.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"only screen and (max-width: 768px)\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/woocommerce/woocommerce.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/shortcodes.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/core.animation.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/tribe-style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skins/skin.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />

        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/core.portfolio.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/mediaelementplayer.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/wp-mediaelement.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto/css/prettyPhoto.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />\t
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.customizer/front.customizer.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.messages/core.messages.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swiper/idangerous.swiper.min.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/skins/skin-responsive.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/slider-style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <link rel=\"stylesheet\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/custom-style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    </head>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

    <body class=\"home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide\">
        <a id=\"toc_top\" class=\"sc_anchor\" title=\"To Top\" data-description=\"&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page\" data-icon=\"icon-angle-double-up\" data-url=\"\" data-separator=\"yes\"></a>
        <!-- Body -->
        <div class=\"body_wrap\">
            <div class=\"page_wrap\">
                <div class=\"top_panel_fixed_wrap\"></div>
                <header class=\"top_panel_wrap bg_tint_dark\">
                    <!-- User menu -->
                    <div class=\"menu_user_wrap\">
                        <div class=\"content_wrap clearfix\">
                            <div class=\"menu_user_area menu_user_right menu_user_nav_area\">
                                <ul id=\"menu_user\" class=\"menu_user_nav\">

                                    <li class=\"menu_user_login\">
                                        <a href=\"#\" class=\"icon icon-logout\">Se connecter</a>
                                    </li>
                                    <li class=\"menu_user_register\">
                                        <a href= class=\"icon icon-logout\">S'enregistrer</a>
                                    </li>

                                </ul>
                            </div>
                            <div class=\"menu_user_area menu_user_left menu_user_contact_area\">Contact us on 0 800 123-4567 or <a href=\"#\"><span class=\"__cf_email__\" data-cfemail=\"394a4c4949564b4d794d515c545c4b5c4117575c4d\">[email&#160;protected]</span><script data-cfhash='f9e31' type=\"text/javascript\">
                            /* <![CDATA[ */!function(){try{var t = \"currentScript\"in document?document.currentScript:function(){for (var t = document.getElementsByTagName(\"script\"), e = t.length; e--; )if (t[e].getAttribute(\"data-cfhash\"))return t[e]}(); if (t && t.previousSibling){var e, r, n, i, c = t.previousSibling, a = c.getAttribute(\"data-cfemail\"); if (a){for (e = \"\", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i); e = document.createTextNode(e), c.parentNode.replaceChild(e, c)}t.parentNode.removeChild(t); }} catch (u){}}()/* ]]> */</script></a></div>
                        </div>
                    </div>
                    <!-- /User menu -->
                    <!-- Main menu -->
                    <div class=\"menu_main_wrap logo_left\">\t\t\t\t\t
                        <div class=\"content_wrap clearfix\">
                            <!-- Logo -->
                            <div class=\"logo\">
                                <a href=\"\">
                                    <img src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_dark.png"), "html", null, true);
        echo "\" class=\"logo_main\" alt=\"\">
                                    <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_dark.png"), "html", null, true);
        echo "\" class=\"logo_fixed\" alt=\"\">
                                </a>
                            </div>
                            <!-- Logo -->
                            <!-- Search -->
                            <div class=\"search_wrap search_style_regular search_ajax\" title=\"Open/close search form\">
                                <a href=\"#\" class=\"search_icon icon-search-2\"></a>
                                <div class=\"search_form_wrap\">
                                    <form method=\"get\" class=\"search_form\" action=\"#\">
                                        <button type=\"submit\" class=\"search_submit icon-zoom-1\" title=\"Start search\"></button>
                                        <input type=\"text\" class=\"search_field\" placeholder=\"\" value=\"\" name=\"s\" title=\"\" />
                                    </form>
                                </div>
                                <div class=\"search_results widget_area bg_tint_light\">
                                    <a class=\"search_results_close icon-delete-2\"></a>
                                    <div class=\"search_results_content\">
                                    </div>
                                </div>
                            </div>
                            <!-- /Search -->
                            <!-- Navigation -->
                            <a href=\"#\" class=\"menu_main_responsive_button icon-menu-1\"></a>
                            <nav class=\"menu_main_nav_area\">
                                <ul id=\"menu_main\" class=\"menu_main_nav\">
                                    <li class=\"menu-item menu-item-has-children  \"><a href=\"\">Accueil</a>


                                    <li class=\"menu-item menu-item-has-children\" ><a href=\"courses-streampage.html\">Formation</a>
                                        <ul>
                                            <li class=\"menu-item menu-item-has-children\"><a href=\"#\">Cours Android</a>
                                                <ul class=\"sub-menu\">
                                                    <li class=\"menu-item\"><a href=\"free-lesson.html\">Free lesson (started)</a></li>
                                                    <li class=\"menu-item\"><a href=\"free-lesson-coming-soon.html\">Free lesson (coming soon)</a></li>
                                                    <li class=\"menu-item\"><a href=\"lesson-from-paid-course.html\">Lesson from paid course</a></li>
                                                </ul>
                                            </li>\t
                                            <li class=\"menu-item menu-item-has-children\"><a href=\"#\">Cours IOS</a>
                                                <ul class=\"sub-menu\">
                                                    <li class=\"menu-item\"><a href=\"free-lesson.html\">Free lesson (started)</a></li>
                                                    <li class=\"menu-item\"><a href=\"free-lesson-coming-soon.html\">Free lesson (coming soon)</a></li>
                                                    <li class=\"menu-item\"><a href=\"lesson-from-paid-course.html\">Lesson from paid course</a></li>
                                                </ul>
                                            </li>
                                            <li class=\"menu-item menu-item-has-children\"><a href=\"#\">Cours Windows Phone</a>
                                                <ul class=\"sub-menu\">
                                                    <li class=\"menu-item\"><a href=\"free-lesson.html\">Free lesson (started)</a></li>
                                                    <li class=\"menu-item\"><a href=\"free-lesson-coming-soon.html\">Free lesson (coming soon)</a></li>
                                                    <li class=\"menu-item\"><a href=\"lesson-from-paid-course.html\">Lesson from paid course</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class=\"menu-item menu-item-has-children\"><a href=\"\">Formateurs</a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item\"><a href=\"\">Organismes</a></li>
                                            <li class=\"menu-item\"><a href=\"\">Formateurs</a></li>
                                        </ul>
                                    </li>
                                    </li>
                                    <li class=\"menu-item menu-item-has-children \"><a href=\"\">Les Cours</a>
                                        <ul class=\"sub-menu\">
                                            <li class=\"menu-item\"><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("pi_cour_list");
        echo "\">Gestions cours</a></li>
                                            <li class=\"menu-item\"><a href=\"";
        // line 170
        echo $this->env->getExtension('routing')->getPath("pi_chapitre_list");
        echo "\">Gestions Chapitres</a></li>
                                            <li class=\"menu-item\"><a href=\"\">Gestions Tests</a></li>
                                        </ul>

                                    </li>
                                    <li class=\"menu-item menu-item-has-children\"><a href=\"\">Contacter nous</a>

                                    </li>
                                    <li class=\"menu-item\"><a href=\"";
        // line 178
        echo $this->env->getExtension('routing')->getPath("pi_graphe");
        echo "\">Niveau de nos Courss</a></li>
                                    

                                    </li>


                                </ul>
                            </nav>
                            <!-- /Navigation -->
                        </div>
                    </div>
                    <!-- /Main menu -->
                </header>
                <!-- Revolution slider -->
                <section class=\"slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider\">
                    <div id=\"rev_slider_1_1_wrapper\" class=\"rev_slider_wrapper fullwidthbanner-container\">                    
                        <div id=\"rev_slider_1_1\" class=\"rev_slider fullwidthabanner disp_none height_630 max-height_630\">
                            <ul>
                                <!-- Slide 1 -->
                                <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                    <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/green.jpg"), "html", null, true);
        echo "\" alt=\"green\" data-bgposition=\"center top\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\">
                                    <div class=\"tp-caption customin stl cust-z-index-5 rs-cust-style8\" data-x=\"20\" data-y=\"230\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"1300\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8250\" data-endspeed=\"300\">
                                        <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide-1-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"tp-caption title sfr stl tp-resizeme cust-z-index-6 rs-cust-style1\" data-x=\"570\" data-y=\"190\" data-speed=\"500\" data-start=\"1350\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8400\" data-endspeed=\"300\">Take great courses from the world's best universities
                                    </div>
                                    <div class=\"tp-caption slide_text sfr stl tp-resizeme cust-z-index-7 rs-cust-style2\" data-x=\"570\" data-y=\"380\" data-speed=\"500\" data-start=\"1750\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8500\" data-endspeed=\"300\">
                                        <span class=\"font-w_400\">Our courses are built in partnership with technology leaders and are relevant to industry needs.</span>
                                    </div>
                                    <div class=\"tp-caption slide_button customin stl tp-resizeme cust-z-index-8 rs-cust-style3\" data-x=\"570\" data-y=\"460\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:-20;transformOrigin:50% 0%;\" data-speed=\"500\" data-start=\"2200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8600\" data-endspeed=\"300\">
                                        <a href=\"#\" class=\"slide_button_white\">Start Learning Now</a>
                                    </div>
                                </li>
                                <!-- Slide 2 -->
                                <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                    <img src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/blue.jpg"), "html", null, true);
        echo "\" alt=\"blue\" data-bgposition=\"center top\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\">
                                    <div class=\"tp-caption customin stl cust-z-index-5 rs-cust-style8\" data-x=\"40\" data-y=\"200\" data-customin=\"x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:360;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;\" data-speed=\"1300\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8250\" data-endspeed=\"300\">
                                        <img src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide-2-1.png"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"tp-caption title sfb stb tp-resizeme cust-z-index-6 rs-cust-style1\" data-x=\"570\" data-y=\"200\" data-speed=\"500\" data-start=\"1350\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8400\" data-endspeed=\"300\">Education Center
                                        <br> and distance education
                                    </div>
                                    <div class=\"tp-caption slide_text sfb stb tp-resizeme cust-z-index-7 rs-cust-style2\" data-x=\"570\" data-y=\"355\" data-speed=\"500\" data-start=\"1750\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8500\" data-endspeed=\"300\">
                                        <span class=\"font-w_400\">Online Education leads the world in distance education with high quality online degrees and online courses.</span>
                                    </div>
                                    <div class=\"tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3\" data-x=\"570\" data-y=\"460\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"2200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8600\" data-endspeed=\"300\">
                                        <a href=\"#\" class=\"slide_button_white\">Start Learning Now</a>
                                    </div>
                                </li>
                                <!-- Slide 3 -->
                                <li data-transition=\"random\" data-slotamount=\"7\" data-masterspeed=\"300\" data-saveperformance=\"off\">
                                    <img src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/yellow.jpg"), "html", null, true);
        echo "\" alt=\"yellow\" data-bgposition=\"center top\" data-bgfit=\"normal\" data-bgrepeat=\"repeat\">
                                    <div class=\"tp-caption roundedimage sfl stl cust-z-index-5 rs-cust-style8\" data-x=\"50\" data-y=\"200\" data-speed=\"1300\" data-start=\"500\" data-easing=\"Power3.easeInOut\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8250\" data-endspeed=\"300\">
                                        <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/slide-3-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    </div>
                                    <div class=\"tp-caption title customin stb tp-resizeme cust-z-index-6 rs-cust-style1\" data-x=\"570\" data-y=\"200\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"1350\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8400\" data-endspeed=\"300\">Receive personalized
                                        <br> coaching
                                    </div>
                                    <div class=\"tp-caption slide_text customin stb tp-resizeme cust-z-index-7 rs-cust-style2\" data-x=\"570\" data-y=\"355\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"1750\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8500\" data-endspeed=\"300\" >
                                        <span class=\"font-w_400\">Learning is a collaborative process, and we're here to provide you with guidance every step of the way.</span>
                                    </div>
                                    <div class=\"tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3\" data-x=\"570\" data-y=\"460\" data-customin=\"x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;\" data-speed=\"500\" data-start=\"2200\" data-easing=\"Power3.easeInOut\" data-splitin=\"none\" data-splitout=\"none\" data-elementdelay=\"0.1\" data-endelementdelay=\"0.1\" data-end=\"8600\" data-endspeed=\"300\">
                                        <a href=\"#\" class=\"slide_button_white\">Start Learning Now</a>
                                    </div>
                                </li>
                            </ul>
                            <div class=\"tp-bannertimer\"></div>
                        </div>
                    </div>
                </section>
                <!-- Revolution slider -->
                <!-- Content -->
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                 <div>
                
                
                
                     
                          
                 <br><br><br><br>
                     
                     
                     
                     
                     ";
        // line 275
        $this->displayBlock('hn', $context, $blocks);
        // line 277
        echo "                
                
                 <br><br><br><br>
                
                
                
                
                
                
                
                
                
                </div> 
                
                <!-- /Content without sidebar -->
                <!-- Widgets Footer --> <!-- /Widgets Footer -->
                <!-- Testimonials footer -->
               
                <!-- /Testimonials footer -->
                <!-- Contacts Footer -->
                <footer class=\"contacts_wrap bg_tint_dark contacts_style_dark\">
                    <div class=\"content_wrap\">
                        <div class=\"logo\">
                            <a href=\"\">
                                <img src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo_footer.png"), "html", null, true);
        echo "\" alt=\"\">
                            </a>
                        </div>
                        <div class=\"contacts_address\">
                            <address class=\"address_right\">
                                Phone: 1.800.123.4567<br>
                                Fax: 1.800.123.4566
                            </address>
                            <address class=\"address_left\">
                                San Francisco, CA 94102, US<br>\t
                                1234 Some St
                            </address>
                        </div>
                        <div class=\"sc_socials sc_socials_size_big\">
                            <div class=\"sc_socials_item\">
                                <a href=\"#\" target=\"_blank\" class=\"social_icons social_facebook\">
                                    <span class=\"sc_socials_hover social_facebook\"></span>
                                </a>
                            </div>
                            <div class=\"sc_socials_item\">
                                <a href=\"#\" target=\"_blank\" class=\"social_icons social_pinterest\">
                                    <span class=\"sc_socials_hover social_pinterest\"></span>
                                </a>
                            </div>
                            <div class=\"sc_socials_item\">
                                <a href=\"#\" target=\"_blank\" class=\"social_icons social_twitter\">
                                    <span class=\"sc_socials_hover social_twitter\"></span>
                                </a>
                            </div>
                            <div class=\"sc_socials_item\">
                                <a href=\"#\" target=\"_blank\" class=\"social_icons social_gplus\">
                                    <span class=\"sc_socials_hover social_gplus\"></span>
                                </a>
                            </div>
                            <div class=\"sc_socials_item\">
                                <a href=\"#\" target=\"_blank\" class=\"social_icons social_rss\">
                                    <span class=\"sc_socials_hover social_rss\"></span>
                                </a>
                            </div>
                            <div class=\"sc_socials_item\">
                                <a href=\"#\" target=\"_blank\" class=\"social_icons social_dribbble\">
                                    <span class=\"sc_socials_hover social_dribbble\"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /Contacts Footer -->
                <!-- Copyright -->
                <div class=\"copyright_wrap\">
                    <div class=\"content_wrap\">
                        <p>© 2015 All Rights Reserved. <a href=\"#\">Terms of use</a> and <a href=\"#\">Privacy Policy</a></p>
                    </div>
                </div>
                <!-- /Copyright -->
            </div>
        </div>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
        <!-- /Body -->
        <a href=\"#\" class=\"scroll_to_top icon-up-2\" title=\"Scroll to top\"></a>
        <div class=\"custom_html_section\"></div>

        <script type=\"text/javascript\" src=\"";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>\t
        <script type=\"text/javascript\" src=\"";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/core.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/widget.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/tabs.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/accordion.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/effect.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/ui/effect-fade.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery.blockUI.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery/jquery.cookie.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/global.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.utils.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.init.min.js"), "html", null, true);
        echo "\"></script>\t
        <script type=\"text/javascript\" src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/shortcodes/shortcodes.min.js"), "html", null, true);
        echo "\"></script>\t

        <script type=\"text/javascript\" src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/jquery.themepunch.tools.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/rs-plugin/jquery.themepunch.revolution.min.js"), "html", null, true);
        echo "\"></script> 
        <script type=\"text/javascript\" src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slider_init.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/superfish.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.slidemenu.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 433
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/mediaelement-and-player.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/mediaelement/wp-mediaelement.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.messages/core.messages.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 438
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.isotope.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 439
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/hover/jquery.hoverdir.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 440
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/prettyPhoto/jquery.prettyPhoto.min.js"), "html", null, true);
        echo "\"></script>\t\t
        <script type=\"text/javascript\" src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swiper/idangerous.swiper-2.7.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 442
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/swiper/idangerous.swiper.scrollbar-2.4.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 443
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/diagram/chart.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\" src=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/core.customizer/front.customizer.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 446
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/skin.customizer.min.js"), "html", null, true);
        echo "\"></script>



    </body>


    <!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:18:52 GMT -->
</html>
";
    }

    // line 275
    public function block_hn($context, array $blocks = array())
    {
        // line 276
        echo "                         ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig ";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  675 => 276,  672 => 275,  658 => 446,  654 => 445,  649 => 443,  645 => 442,  641 => 441,  637 => 440,  633 => 439,  629 => 438,  624 => 436,  619 => 434,  615 => 433,  610 => 431,  606 => 430,  601 => 428,  597 => 427,  593 => 426,  588 => 424,  584 => 423,  580 => 422,  576 => 421,  571 => 419,  567 => 418,  563 => 417,  559 => 416,  555 => 415,  551 => 414,  547 => 413,  543 => 412,  539 => 411,  535 => 410,  423 => 301,  397 => 277,  395 => 275,  348 => 231,  343 => 229,  326 => 215,  321 => 213,  305 => 200,  300 => 198,  277 => 178,  266 => 170,  262 => 169,  196 => 106,  192 => 105,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  78 => 27,  74 => 26,  70 => 25,  66 => 24,  62 => 23,  57 => 21,  53 => 20,  49 => 19,  44 => 17,  39 => 15,  30 => 9,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en-US">*/
/* */
/* */
/*     <!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:17:57 GMT -->*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />*/
/*         <title>Homepage | Education Center</title>*/
/* */
/*         <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&amp;subset=latin%2Clatin-ext&amp;ver=4.3.1" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,700,700italic&amp;subset=latin,latin-ext,cyrillic,cyrillic-ext" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister:400&amp;subset=latin" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset('css/fontello/css/fontello.css') }}" type="text/css" media="all" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset('js/rs-plugin/settings.css') }}" type="text/css" media="all" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset('css/woocommerce/woocommerce-layout.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset('css/woocommerce/woocommerce-smallscreen.css') }}" type="text/css" media="only screen and (max-width: 768px)" />*/
/*         <link rel="stylesheet" href="{{ asset('css/woocommerce/woocommerce.css') }}" type="text/css" media="all" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset ('css/style.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/shortcodes.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/core.animation.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/tribe-style.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/skins/skin.css') }}" type="text/css" media="all" />*/
/* */
/*         <link rel="stylesheet" href="{{ asset ('css/core.portfolio.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('js/mediaelement/mediaelementplayer.min.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('js/mediaelement/wp-mediaelement.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('js/prettyPhoto/css/prettyPhoto.css') }}" type="text/css" media="all" />	*/
/*         <link rel="stylesheet" href="{{ asset ('js/core.customizer/front.customizer.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('js/core.messages/core.messages.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('js/swiper/idangerous.swiper.min.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/responsive.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/skins/skin-responsive.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/slider-style.css') }}" type="text/css" media="all" />*/
/*         <link rel="stylesheet" href="{{ asset ('css/custom-style.css') }}" type="text/css" media="all" />*/
/*     </head>*/
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/*     */
/* */
/*     <body class="home page body_style_fullscreen body_filled article_style_stretch layout_single-standard top_panel_style_dark top_panel_opacity_transparent top_panel_show top_panel_over menu_right user_menu_show sidebar_hide">*/
/*         <a id="toc_top" class="sc_anchor" title="To Top" data-description="&lt;i&gt;Back to top&lt;/i&gt; - &lt;br&gt;scroll to top of the page" data-icon="icon-angle-double-up" data-url="" data-separator="yes"></a>*/
/*         <!-- Body -->*/
/*         <div class="body_wrap">*/
/*             <div class="page_wrap">*/
/*                 <div class="top_panel_fixed_wrap"></div>*/
/*                 <header class="top_panel_wrap bg_tint_dark">*/
/*                     <!-- User menu -->*/
/*                     <div class="menu_user_wrap">*/
/*                         <div class="content_wrap clearfix">*/
/*                             <div class="menu_user_area menu_user_right menu_user_nav_area">*/
/*                                 <ul id="menu_user" class="menu_user_nav">*/
/* */
/*                                     <li class="menu_user_login">*/
/*                                         <a href="#" class="icon icon-logout">Se connecter</a>*/
/*                                     </li>*/
/*                                     <li class="menu_user_register">*/
/*                                         <a href= class="icon icon-logout">S'enregistrer</a>*/
/*                                     </li>*/
/* */
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="menu_user_area menu_user_left menu_user_contact_area">Contact us on 0 800 123-4567 or <a href="#"><span class="__cf_email__" data-cfemail="394a4c4949564b4d794d515c545c4b5c4117575c4d">[email&#160;protected]</span><script data-cfhash='f9e31' type="text/javascript">*/
/*                             /* <![CDATA[ *//* !function(){try{var t = "currentScript"in document?document.currentScript:function(){for (var t = document.getElementsByTagName("script"), e = t.length; e--; )if (t[e].getAttribute("data-cfhash"))return t[e]}(); if (t && t.previousSibling){var e, r, n, i, c = t.previousSibling, a = c.getAttribute("data-cfemail"); if (a){for (e = "", r = parseInt(a.substr(0, 2), 16), n = 2; a.length - n; n += 2)i = parseInt(a.substr(n, 2), 16) ^ r, e += String.fromCharCode(i); e = document.createTextNode(e), c.parentNode.replaceChild(e, c)}t.parentNode.removeChild(t); }} catch (u){}}()/* ]]> *//* </script></a></div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /User menu -->*/
/*                     <!-- Main menu -->*/
/*                     <div class="menu_main_wrap logo_left">					*/
/*                         <div class="content_wrap clearfix">*/
/*                             <!-- Logo -->*/
/*                             <div class="logo">*/
/*                                 <a href="">*/
/*                                     <img src="{{ asset('images/logo_dark.png') }}" class="logo_main" alt="">*/
/*                                     <img src="{{ asset('images/logo_dark.png') }}" class="logo_fixed" alt="">*/
/*                                 </a>*/
/*                             </div>*/
/*                             <!-- Logo -->*/
/*                             <!-- Search -->*/
/*                             <div class="search_wrap search_style_regular search_ajax" title="Open/close search form">*/
/*                                 <a href="#" class="search_icon icon-search-2"></a>*/
/*                                 <div class="search_form_wrap">*/
/*                                     <form method="get" class="search_form" action="#">*/
/*                                         <button type="submit" class="search_submit icon-zoom-1" title="Start search"></button>*/
/*                                         <input type="text" class="search_field" placeholder="" value="" name="s" title="" />*/
/*                                     </form>*/
/*                                 </div>*/
/*                                 <div class="search_results widget_area bg_tint_light">*/
/*                                     <a class="search_results_close icon-delete-2"></a>*/
/*                                     <div class="search_results_content">*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <!-- /Search -->*/
/*                             <!-- Navigation -->*/
/*                             <a href="#" class="menu_main_responsive_button icon-menu-1"></a>*/
/*                             <nav class="menu_main_nav_area">*/
/*                                 <ul id="menu_main" class="menu_main_nav">*/
/*                                     <li class="menu-item menu-item-has-children  "><a href="">Accueil</a>*/
/* */
/* */
/*                                     <li class="menu-item menu-item-has-children" ><a href="courses-streampage.html">Formation</a>*/
/*                                         <ul>*/
/*                                             <li class="menu-item menu-item-has-children"><a href="#">Cours Android</a>*/
/*                                                 <ul class="sub-menu">*/
/*                                                     <li class="menu-item"><a href="free-lesson.html">Free lesson (started)</a></li>*/
/*                                                     <li class="menu-item"><a href="free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>*/
/*                                                     <li class="menu-item"><a href="lesson-from-paid-course.html">Lesson from paid course</a></li>*/
/*                                                 </ul>*/
/*                                             </li>	*/
/*                                             <li class="menu-item menu-item-has-children"><a href="#">Cours IOS</a>*/
/*                                                 <ul class="sub-menu">*/
/*                                                     <li class="menu-item"><a href="free-lesson.html">Free lesson (started)</a></li>*/
/*                                                     <li class="menu-item"><a href="free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>*/
/*                                                     <li class="menu-item"><a href="lesson-from-paid-course.html">Lesson from paid course</a></li>*/
/*                                                 </ul>*/
/*                                             </li>*/
/*                                             <li class="menu-item menu-item-has-children"><a href="#">Cours Windows Phone</a>*/
/*                                                 <ul class="sub-menu">*/
/*                                                     <li class="menu-item"><a href="free-lesson.html">Free lesson (started)</a></li>*/
/*                                                     <li class="menu-item"><a href="free-lesson-coming-soon.html">Free lesson (coming soon)</a></li>*/
/*                                                     <li class="menu-item"><a href="lesson-from-paid-course.html">Lesson from paid course</a></li>*/
/*                                                 </ul>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </li>*/
/* */
/* */
/*                                     <li class="menu-item menu-item-has-children"><a href="">Formateurs</a>*/
/*                                         <ul class="sub-menu">*/
/*                                             <li class="menu-item"><a href="">Organismes</a></li>*/
/*                                             <li class="menu-item"><a href="">Formateurs</a></li>*/
/*                                         </ul>*/
/*                                     </li>*/
/*                                     </li>*/
/*                                     <li class="menu-item menu-item-has-children "><a href="">Les Cours</a>*/
/*                                         <ul class="sub-menu">*/
/*                                             <li class="menu-item"><a href="{{path('pi_cour_list')}}">Gestions cours</a></li>*/
/*                                             <li class="menu-item"><a href="{{path('pi_chapitre_list')}}">Gestions Chapitres</a></li>*/
/*                                             <li class="menu-item"><a href="">Gestions Tests</a></li>*/
/*                                         </ul>*/
/* */
/*                                     </li>*/
/*                                     <li class="menu-item menu-item-has-children"><a href="">Contacter nous</a>*/
/* */
/*                                     </li>*/
/*                                     <li class="menu-item"><a href="{{path('pi_graphe')}}">Niveau de nos Courss</a></li>*/
/*                                     */
/* */
/*                                     </li>*/
/* */
/* */
/*                                 </ul>*/
/*                             </nav>*/
/*                             <!-- /Navigation -->*/
/*                         </div>*/
/*                     </div>*/
/*                     <!-- /Main menu -->*/
/*                 </header>*/
/*                 <!-- Revolution slider -->*/
/*                 <section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_education_home_slider">*/
/*                     <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">                    */
/*                         <div id="rev_slider_1_1" class="rev_slider fullwidthabanner disp_none height_630 max-height_630">*/
/*                             <ul>*/
/*                                 <!-- Slide 1 -->*/
/*                                 <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">*/
/*                                     <img src="{{ asset('images/green.jpg') }}" alt="green" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">*/
/*                                     <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="20" data-y="230" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">*/
/*                                         <img src="{{ asset('images/slide-1-1.png') }}" alt="">*/
/*                                     </div>*/
/*                                     <div class="tp-caption title sfr stl tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="190" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Take great courses from the world's best universities*/
/*                                     </div>*/
/*                                     <div class="tp-caption slide_text sfr stl tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="380" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">*/
/*                                         <span class="font-w_400">Our courses are built in partnership with technology leaders and are relevant to industry needs.</span>*/
/*                                     </div>*/
/*                                     <div class="tp-caption slide_button customin stl tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:-20;transformOrigin:50% 0%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">*/
/*                                         <a href="#" class="slide_button_white">Start Learning Now</a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <!-- Slide 2 -->*/
/*                                 <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">*/
/*                                     <img src="{{ asset('images/blue.jpg') }}" alt="blue" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">*/
/*                                     <div class="tp-caption customin stl cust-z-index-5 rs-cust-style8" data-x="40" data-y="200" data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:360;scaleX:0.1;scaleY:0.1;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">*/
/*                                         <img src="{{ asset('images/slide-2-1.png') }}" alt="">*/
/*                                     </div>*/
/*                                     <div class="tp-caption title sfb stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Education Center*/
/*                                         <br> and distance education*/
/*                                     </div>*/
/*                                     <div class="tp-caption slide_text sfb stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300">*/
/*                                         <span class="font-w_400">Online Education leads the world in distance education with high quality online degrees and online courses.</span>*/
/*                                     </div>*/
/*                                     <div class="tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">*/
/*                                         <a href="#" class="slide_button_white">Start Learning Now</a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                                 <!-- Slide 3 -->*/
/*                                 <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-saveperformance="off">*/
/*                                     <img src="{{ asset('images/yellow.jpg') }}" alt="yellow" data-bgposition="center top" data-bgfit="normal" data-bgrepeat="repeat">*/
/*                                     <div class="tp-caption roundedimage sfl stl cust-z-index-5 rs-cust-style8" data-x="50" data-y="200" data-speed="1300" data-start="500" data-easing="Power3.easeInOut" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8250" data-endspeed="300">*/
/*                                         <img src="{{ asset('images/slide-3-1.jpg') }}" alt="">*/
/*                                     </div>*/
/*                                     <div class="tp-caption title customin stb tp-resizeme cust-z-index-6 rs-cust-style1" data-x="570" data-y="200" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1350" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8400" data-endspeed="300">Receive personalized*/
/*                                         <br> coaching*/
/*                                     </div>*/
/*                                     <div class="tp-caption slide_text customin stb tp-resizeme cust-z-index-7 rs-cust-style2" data-x="570" data-y="355" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="1750" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8500" data-endspeed="300" >*/
/*                                         <span class="font-w_400">Learning is a collaborative process, and we're here to provide you with guidance every step of the way.</span>*/
/*                                     </div>*/
/*                                     <div class="tp-caption slide_button customin stb tp-resizeme cust-z-index-8 rs-cust-style3" data-x="570" data-y="460" data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:20;transformOrigin:50% 100%;" data-speed="500" data-start="2200" data-easing="Power3.easeInOut" data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-end="8600" data-endspeed="300">*/
/*                                         <a href="#" class="slide_button_white">Start Learning Now</a>*/
/*                                     </div>*/
/*                                 </li>*/
/*                             </ul>*/
/*                             <div class="tp-bannertimer"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/*                 <!-- Revolution slider -->*/
/*                 <!-- Content -->*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                  <div>*/
/*                 */
/*                 */
/*                 */
/*                      */
/*                           */
/*                  <br><br><br><br>*/
/*                      */
/*                      */
/*                      */
/*                      */
/*                      {% block hn %}*/
/*                          {%endblock%}*/
/*                 */
/*                 */
/*                  <br><br><br><br>*/
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 */
/*                 </div> */
/*                 */
/*                 <!-- /Content without sidebar -->*/
/*                 <!-- Widgets Footer --> <!-- /Widgets Footer -->*/
/*                 <!-- Testimonials footer -->*/
/*                */
/*                 <!-- /Testimonials footer -->*/
/*                 <!-- Contacts Footer -->*/
/*                 <footer class="contacts_wrap bg_tint_dark contacts_style_dark">*/
/*                     <div class="content_wrap">*/
/*                         <div class="logo">*/
/*                             <a href="">*/
/*                                 <img src="{{ asset('images/logo_footer.png') }}" alt="">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="contacts_address">*/
/*                             <address class="address_right">*/
/*                                 Phone: 1.800.123.4567<br>*/
/*                                 Fax: 1.800.123.4566*/
/*                             </address>*/
/*                             <address class="address_left">*/
/*                                 San Francisco, CA 94102, US<br>	*/
/*                                 1234 Some St*/
/*                             </address>*/
/*                         </div>*/
/*                         <div class="sc_socials sc_socials_size_big">*/
/*                             <div class="sc_socials_item">*/
/*                                 <a href="#" target="_blank" class="social_icons social_facebook">*/
/*                                     <span class="sc_socials_hover social_facebook"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sc_socials_item">*/
/*                                 <a href="#" target="_blank" class="social_icons social_pinterest">*/
/*                                     <span class="sc_socials_hover social_pinterest"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sc_socials_item">*/
/*                                 <a href="#" target="_blank" class="social_icons social_twitter">*/
/*                                     <span class="sc_socials_hover social_twitter"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sc_socials_item">*/
/*                                 <a href="#" target="_blank" class="social_icons social_gplus">*/
/*                                     <span class="sc_socials_hover social_gplus"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sc_socials_item">*/
/*                                 <a href="#" target="_blank" class="social_icons social_rss">*/
/*                                     <span class="sc_socials_hover social_rss"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="sc_socials_item">*/
/*                                 <a href="#" target="_blank" class="social_icons social_dribbble">*/
/*                                     <span class="sc_socials_hover social_dribbble"></span>*/
/*                                 </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </footer>*/
/*                 <!-- /Contacts Footer -->*/
/*                 <!-- Copyright -->*/
/*                 <div class="copyright_wrap">*/
/*                     <div class="content_wrap">*/
/*                         <p>© 2015 All Rights Reserved. <a href="#">Terms of use</a> and <a href="#">Privacy Policy</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*                 <!-- /Copyright -->*/
/*             </div>*/
/*         </div>*/
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*                             */
/*         <!-- /Body -->*/
/*         <a href="#" class="scroll_to_top icon-up-2" title="Scroll to top"></a>*/
/*         <div class="custom_html_section"></div>*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/jquery/jquery.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/jquery-migrate.min.js') }}"></script>	*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/ui/core.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/ui/widget.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/ui/tabs.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/ui/accordion.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/ui/effect.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/ui/effect-fade.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/jquery.blockUI.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery/jquery.cookie.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/global.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/core.utils.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/core.init.min.js') }}"></script>	*/
/*         <script type="text/javascript" src="{{ asset('js/shortcodes/shortcodes.min.js') }}"></script>	*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/rs-plugin/jquery.themepunch.tools.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/rs-plugin/jquery.themepunch.revolution.min.js') }}"></script> */
/*         <script type="text/javascript" src="{{ asset('js/slider_init.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/superfish.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/jquery.slidemenu.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/mediaelement/mediaelement-and-player.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/mediaelement/wp-mediaelement.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/core.messages/core.messages.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/jquery.isotope.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/hover/jquery.hoverdir.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/prettyPhoto/jquery.prettyPhoto.min.js') }}"></script>		*/
/*         <script type="text/javascript" src="{{ asset('js/swiper/idangerous.swiper-2.7.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/swiper/idangerous.swiper.scrollbar-2.4.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/diagram/chart.min.js') }}"></script>*/
/* */
/*         <script type="text/javascript" src="{{ asset('js/core.customizer/front.customizer.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('js/skin.customizer.min.js') }}"></script>*/
/* */
/* */
/* */
/*     </body>*/
/* */
/* */
/*     <!-- Mirrored from education-html.themerex.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Feb 2016 14:18:52 GMT -->*/
/* </html>*/
/* */
