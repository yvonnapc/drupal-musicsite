<?php

/* themes/bootstrap_business/templates/page.html.twig */
class __TwigTemplate_6290d651eaea65dcbbc346b5a62d14c37c88959f241d2530586f61118f2e280a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 3);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "<div id=\"toTop\"><span class=\"glyphicon glyphicon-chevron-up\"></span></div>

";
        // line 3
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third", array()))) {
            // line 4
            echo "<!-- #pre-header -->
<div id=\"pre-header\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #pre-header-inside -->
        <div id=\"pre-header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-4\">
                    ";
            // line 12
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first", array())) {
                // line 13
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 14
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_first", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 17
            echo "                </div>
                
                <div class=\"col-md-4\">
                    ";
            // line 20
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second", array())) {
                // line 21
                echo "                    <div class=\"pre-header-area\">
                    ";
                // line 22
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_second", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 25
            echo "                </div>

                <div class=\"col-md-4\">
                    ";
            // line 28
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third", array())) {
                // line 29
                echo "
                    <div class=\"pre-header-area\">
                    ";
                // line 31
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "pre_header_third", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #pre-header-inside -->

    </div>
    <div class=\"toggle-control\"><a href=\"javascript:showPreHeader()\"><span class=\"glyphicon glyphicon-plus\"></span></a></div>
</div>
<!-- EOF: #pre-header -->    
";
        }
        // line 44
        echo "
";
        // line 45
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()))) {
            // line 46
            echo "<!-- #header-top -->
<div id=\"header-top\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-top-inside -->
        <div id=\"header-top-inside\" class=\"clearfix\">
            <div class=\"row\">
            
            ";
            // line 54
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array())) {
                // line 55
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_top_left_grid_class"]) ? $context["header_top_left_grid_class"] : null), "html", null, true));
                echo "\">
                <!-- #header-top-left -->
                <div id=\"header-top-left\" class=\"clearfix\">
                    ";
                // line 58
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_left", array()), "html", null, true));
                echo "
                </div>
                <!-- EOF:#header-top-left -->
            </div>
            ";
            }
            // line 63
            echo "            
            ";
            // line 64
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array())) {
                // line 65
                echo "            <div class=\"";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["header_top_right_grid_class"]) ? $context["header_top_right_grid_class"] : null), "html", null, true));
                echo "\">
                <!-- #header-top-right -->
                <div id=\"header-top-right\" class=\"clearfix\">
                    ";
                // line 68
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_top_right", array()), "html", null, true));
                echo "
                </div>
                <!-- EOF:#header-top-right -->
            </div>
            ";
            }
            // line 73
            echo "            
            </div>
        </div>
        <!-- EOF: #header-top-inside -->

    </div>
</div>
<!-- EOF: #header-top -->    
";
        }
        // line 82
        echo "
";
        // line 83
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array())) {
            // line 84
            echo "<!-- header -->
<header id=\"header\" role=\"banner\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #header-inside -->
        <div id=\"header-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
            // line 92
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #header-inside -->

    </div>
</header>
<!-- EOF: #header --> 
";
        }
        // line 102
        echo "
<!-- #main-navigation --> 
<div id=\"main-navigation\" class=\"clearfix\">
    <div class=\"container\">

        <!-- #main-navigation-inside -->
        <div id=\"main-navigation-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <nav role=\"navigation\" class=\"clearfix\">
                        ";
        // line 112
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array())) {
            // line 113
            echo "                        ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()), "html", null, true));
            echo "
                        ";
        } else {
            // line 115
            echo "                            ";
            if ((isset($context["main_menu"]) ? $context["main_menu"] : null)) {
                // line 116
                echo "                            ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_menu"]) ? $context["main_menu"] : null), "html", null, true));
                echo "
                            ";
            }
            // line 118
            echo "                        ";
        }
        // line 119
        echo "                    </nav>
                </div>
            </div>
        </div>
        <!-- EOF: #main-navigation-inside -->

    </div>
</div>
<!-- EOF: #main-navigation -->

";
        // line 129
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array())) {
            // line 130
            echo "<!-- #banner -->
<div id=\"banner\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #banner-inside -->
        <div id=\"banner-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "banner", array()), "html", null, true));
            echo "
                </div>
            </div>
        </div>
        <!-- EOF: #banner-inside -->        

    </div>
</div>
<!-- EOF:#banner -->
";
        }
        // line 148
        echo "
<!-- #page -->
<div id=\"page\" class=\"clearfix\">
    ";
        // line 151
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 152
            echo "    <!-- #top-content -->
    <div id=\"top-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #top-content-inside -->
            <div id=\"top-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 160
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#top-content-inside -->

        </div>
    </div>
    <!-- EOF: #top-content -->
    ";
        }
        // line 170
        echo "
    <!-- #main-content -->
    <div id=\"main-content\">
        <div class=\"container\">
        
            <div class=\"row\">
                ";
        // line 176
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 177
            echo "                <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_grid_class"]) ? $context["sidebar_grid_class"] : null), "html", null, true));
            echo "\">  
                    <!--#sidebar-first-->
                    <section id=\"sidebar-first\" class=\"sidebar clearfix\">
                    ";
            // line 180
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
            echo "
                    </section>
                    <!--EOF:#sidebar-first-->
                </aside>
                ";
        }
        // line 185
        echo "
                <section class=\"";
        // line 186
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["main_grid_class"]) ? $context["main_grid_class"] : null), "html", null, true));
        echo "\">

                    <!-- #main -->
                    <div id=\"main\" class=\"clearfix\">
                    
                        <!-- #breadcrumb -->
                        <div id=\"breadcrumb\" class=\"clearfix\">
                            <!-- #breadcrumb-inside -->
                            <div id=\"breadcrumb-inside\" class=\"clearfix\">
                            ";
        // line 195
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
                            </div>
                            <!-- EOF: #breadcrumb-inside -->
                        </div>
                        <!-- EOF: #breadcrumb -->

                        ";
        // line 201
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promoted", array())) {
            // line 202
            echo "                        <!-- #promoted -->
                            <div id=\"promoted\" class=\"clearfix\">
                                <div id=\"promoted-inside\" class=\"clearfix\">
                                ";
            // line 205
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "promoted", array()), "html", null, true));
            echo "
                                </div>
                            </div>
                        <!-- EOF: #promoted -->
                        ";
        }
        // line 210
        echo "
                        <!-- EOF:#content-wrapper -->
                        <div id=\"content-wrapper\">

                            ";
        // line 214
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array())) {
            // line 215
            echo "                                ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
            echo "
                            ";
        }
        // line 217
        echo "
                        </div>
                        <!-- EOF:#content-wrapper -->

                    </div>
                    <!-- EOF:#main -->

                </section>
                
                ";
        // line 226
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 227
            echo "                <aside class=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["sidebar_grid_class"]) ? $context["sidebar_grid_class"] : null), "html", null, true));
            echo "\">
                    <!--#sidebar-second-->
                    <section id=\"sidebar-second\" class=\"sidebar clearfix\">
                    ";
            // line 230
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
                    </section>
                    <!--EOF:#sidebar-second-->
                </aside>
                ";
        }
        // line 235
        echo "        
            </div>

        </div>
    </div>
    <!-- EOF:#main-content -->
    
    ";
        // line 242
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_content", array())) {
            // line 243
            echo "    <!-- #bottom-content -->
    <div id=\"bottom-content\" class=\"clearfix\">
        <div class=\"container\">

            <!-- #bottom-content-inside -->
            <div id=\"bottom-content-inside\" class=\"clearfix\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                    ";
            // line 251
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "bottom_content", array()), "html", null, true));
            echo "
                    </div>
                </div>
            </div>
            <!-- EOF:#bottom-content-inside -->

        </div>
    </div>
    <!-- EOF: #bottom-content -->
    ";
        }
        // line 261
        echo "
</div>
<!-- EOF:#page -->

";
        // line 265
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()))) {
            // line 266
            echo "<!-- #footer -->
<footer id=\"footer\" class=\"clearfix\">
    <div class=\"container\">
    
        <!-- #footer-inside -->
        <div id=\"footer-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    ";
            // line 274
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array())) {
                // line 275
                echo "                    <div class=\"footer-area\">
                    ";
                // line 276
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_first", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 279
            echo "                </div>
                
                <div class=\"col-md-3\">
                    ";
            // line 282
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array())) {
                // line 283
                echo "                    <div class=\"footer-area\">
                    ";
                // line 284
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_second", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 287
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 290
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array())) {
                // line 291
                echo "                    <div class=\"footer-area\">
                    ";
                // line 292
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_third", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 295
            echo "                </div>

                <div class=\"col-md-3\">
                    ";
            // line 298
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array())) {
                // line 299
                echo "                    <div class=\"footer-area\">
                    ";
                // line 300
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer_fourth", array()), "html", null, true));
                echo "
                    </div>
                    ";
            }
            // line 303
            echo "                </div>
            </div>
        </div>
        <!-- EOF: #footer-inside -->
    
    </div>
</footer> 
<!-- EOF #footer -->
";
        }
        // line 312
        echo "
<footer id=\"subfooter\" class=\"clearfix\">
    <div class=\"container\">
        
        <!-- #subfooter-inside -->
        <div id=\"subfooter-inside\" class=\"clearfix\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <!-- #subfooter-left -->
                    <div class=\"subfooter-area\">
                    ";
        // line 322
        if ((isset($context["secondary_menu"]) ? $context["secondary_menu"] : null)) {
            // line 323
            echo "                    <nav id=\"secondary-menu\" class=\"navigation\" role=\"navigation\">
                    ";
            // line 324
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["secondary_menu"]) ? $context["secondary_menu"] : null), "html", null, true));
            echo "
                    </nav>
                    ";
        }
        // line 326
        echo "                    

                    ";
        // line 328
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 329
            echo "                    ";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
                    ";
        }
        // line 331
        echo "
                    </div>
                    <!-- EOF: #subfooter-left -->
                </div>
            </div>
        </div>
        <!-- EOF: #subfooter-inside -->
    
    </div>
</footer>
<!-- EOF:#subfooter -->";
    }

    public function getTemplateName()
    {
        return "themes/bootstrap_business/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 331,  562 => 329,  560 => 328,  556 => 326,  550 => 324,  547 => 323,  545 => 322,  533 => 312,  522 => 303,  516 => 300,  513 => 299,  511 => 298,  506 => 295,  500 => 292,  497 => 291,  495 => 290,  490 => 287,  484 => 284,  481 => 283,  479 => 282,  474 => 279,  468 => 276,  465 => 275,  463 => 274,  453 => 266,  451 => 265,  445 => 261,  432 => 251,  422 => 243,  420 => 242,  411 => 235,  403 => 230,  396 => 227,  394 => 226,  383 => 217,  377 => 215,  375 => 214,  369 => 210,  361 => 205,  356 => 202,  354 => 201,  345 => 195,  333 => 186,  330 => 185,  322 => 180,  315 => 177,  313 => 176,  305 => 170,  292 => 160,  282 => 152,  280 => 151,  275 => 148,  262 => 138,  252 => 130,  250 => 129,  238 => 119,  235 => 118,  229 => 116,  226 => 115,  220 => 113,  218 => 112,  206 => 102,  193 => 92,  183 => 84,  181 => 83,  178 => 82,  167 => 73,  159 => 68,  152 => 65,  150 => 64,  147 => 63,  139 => 58,  132 => 55,  130 => 54,  120 => 46,  118 => 45,  115 => 44,  103 => 34,  97 => 31,  93 => 29,  91 => 28,  86 => 25,  80 => 22,  77 => 21,  75 => 20,  70 => 17,  64 => 14,  61 => 13,  59 => 12,  49 => 4,  47 => 3,  43 => 1,);
    }
}
/* <div id="toTop"><span class="glyphicon glyphicon-chevron-up"></span></div>*/
/* */
/* {% if page.pre_header_first or page.pre_header_second or page.pre_header_third %}*/
/* <!-- #pre-header -->*/
/* <div id="pre-header" class="clearfix">*/
/*     <div class="container">*/
/* */
/*         <!-- #pre-header-inside -->*/
/*         <div id="pre-header-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-4">*/
/*                     {% if page.pre_header_first %}*/
/*                     <div class="pre-header-area">*/
/*                     {{ page.pre_header_first }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-4">*/
/*                     {% if page.pre_header_second %}*/
/*                     <div class="pre-header-area">*/
/*                     {{ page.pre_header_second }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-4">*/
/*                     {% if page.pre_header_third %}*/
/* */
/*                     <div class="pre-header-area">*/
/*                     {{ page.pre_header_third }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #pre-header-inside -->*/
/* */
/*     </div>*/
/*     <div class="toggle-control"><a href="javascript:showPreHeader()"><span class="glyphicon glyphicon-plus"></span></a></div>*/
/* </div>*/
/* <!-- EOF: #pre-header -->    */
/* {% endif %}*/
/* */
/* {% if page.header_top_left or page.header_top_right %}*/
/* <!-- #header-top -->*/
/* <div id="header-top" class="clearfix">*/
/*     <div class="container">*/
/* */
/*         <!-- #header-top-inside -->*/
/*         <div id="header-top-inside" class="clearfix">*/
/*             <div class="row">*/
/*             */
/*             {% if page.header_top_left %}*/
/*             <div class="{{header_top_left_grid_class}}">*/
/*                 <!-- #header-top-left -->*/
/*                 <div id="header-top-left" class="clearfix">*/
/*                     {{ page.header_top_left }}*/
/*                 </div>*/
/*                 <!-- EOF:#header-top-left -->*/
/*             </div>*/
/*             {% endif %}*/
/*             */
/*             {% if page.header_top_right %}*/
/*             <div class="{{header_top_right_grid_class}}">*/
/*                 <!-- #header-top-right -->*/
/*                 <div id="header-top-right" class="clearfix">*/
/*                     {{ page.header_top_right }}*/
/*                 </div>*/
/*                 <!-- EOF:#header-top-right -->*/
/*             </div>*/
/*             {% endif %}*/
/*             */
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #header-top-inside -->*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- EOF: #header-top -->    */
/* {% endif %}*/
/* */
/* {% if page.header %}*/
/* <!-- header -->*/
/* <header id="header" role="banner" class="clearfix">*/
/*     <div class="container">*/
/* */
/*         <!-- #header-inside -->*/
/*         <div id="header-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     {{ page.header }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #header-inside -->*/
/* */
/*     </div>*/
/* </header>*/
/* <!-- EOF: #header --> */
/* {% endif %}*/
/* */
/* <!-- #main-navigation --> */
/* <div id="main-navigation" class="clearfix">*/
/*     <div class="container">*/
/* */
/*         <!-- #main-navigation-inside -->*/
/*         <div id="main-navigation-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <nav role="navigation" class="clearfix">*/
/*                         {% if page.navigation %}*/
/*                         {{ page.navigation }}*/
/*                         {% else %}*/
/*                             {% if main_menu %}*/
/*                             {{ main_menu }}*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/*                     </nav>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #main-navigation-inside -->*/
/* */
/*     </div>*/
/* </div>*/
/* <!-- EOF: #main-navigation -->*/
/* */
/* {% if page.banner %}*/
/* <!-- #banner -->*/
/* <div id="banner" class="clearfix">*/
/*     <div class="container">*/
/*         */
/*         <!-- #banner-inside -->*/
/*         <div id="banner-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                 {{ page.banner }}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #banner-inside -->        */
/* */
/*     </div>*/
/* </div>*/
/* <!-- EOF:#banner -->*/
/* {% endif %}*/
/* */
/* <!-- #page -->*/
/* <div id="page" class="clearfix">*/
/*     {% if page.highlighted %}*/
/*     <!-- #top-content -->*/
/*     <div id="top-content" class="clearfix">*/
/*         <div class="container">*/
/* */
/*             <!-- #top-content-inside -->*/
/*             <div id="top-content-inside" class="clearfix">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                     {{ page.highlighted }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- EOF:#top-content-inside -->*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- EOF: #top-content -->*/
/*     {% endif %}*/
/* */
/*     <!-- #main-content -->*/
/*     <div id="main-content">*/
/*         <div class="container">*/
/*         */
/*             <div class="row">*/
/*                 {% if page.sidebar_first %}*/
/*                 <aside class="{{sidebar_grid_class}}">  */
/*                     <!--#sidebar-first-->*/
/*                     <section id="sidebar-first" class="sidebar clearfix">*/
/*                     {{ page.sidebar_first }}*/
/*                     </section>*/
/*                     <!--EOF:#sidebar-first-->*/
/*                 </aside>*/
/*                 {% endif %}*/
/* */
/*                 <section class="{{main_grid_class}}">*/
/* */
/*                     <!-- #main -->*/
/*                     <div id="main" class="clearfix">*/
/*                     */
/*                         <!-- #breadcrumb -->*/
/*                         <div id="breadcrumb" class="clearfix">*/
/*                             <!-- #breadcrumb-inside -->*/
/*                             <div id="breadcrumb-inside" class="clearfix">*/
/*                             {{ breadcrumb }}*/
/*                             </div>*/
/*                             <!-- EOF: #breadcrumb-inside -->*/
/*                         </div>*/
/*                         <!-- EOF: #breadcrumb -->*/
/* */
/*                         {% if page.promoted %}*/
/*                         <!-- #promoted -->*/
/*                             <div id="promoted" class="clearfix">*/
/*                                 <div id="promoted-inside" class="clearfix">*/
/*                                 {{ page.promoted }}*/
/*                                 </div>*/
/*                             </div>*/
/*                         <!-- EOF: #promoted -->*/
/*                         {% endif %}*/
/* */
/*                         <!-- EOF:#content-wrapper -->*/
/*                         <div id="content-wrapper">*/
/* */
/*                             {% if page.content %}*/
/*                                 {{ page.content }}*/
/*                             {% endif %}*/
/* */
/*                         </div>*/
/*                         <!-- EOF:#content-wrapper -->*/
/* */
/*                     </div>*/
/*                     <!-- EOF:#main -->*/
/* */
/*                 </section>*/
/*                 */
/*                 {% if page.sidebar_second %}*/
/*                 <aside class="{{sidebar_grid_class}}">*/
/*                     <!--#sidebar-second-->*/
/*                     <section id="sidebar-second" class="sidebar clearfix">*/
/*                     {{ page.sidebar_second }}*/
/*                     </section>*/
/*                     <!--EOF:#sidebar-second-->*/
/*                 </aside>*/
/*                 {% endif %}*/
/*         */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- EOF:#main-content -->*/
/*     */
/*     {% if page.bottom_content %}*/
/*     <!-- #bottom-content -->*/
/*     <div id="bottom-content" class="clearfix">*/
/*         <div class="container">*/
/* */
/*             <!-- #bottom-content-inside -->*/
/*             <div id="bottom-content-inside" class="clearfix">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                     {{ page.bottom_content }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <!-- EOF:#bottom-content-inside -->*/
/* */
/*         </div>*/
/*     </div>*/
/*     <!-- EOF: #bottom-content -->*/
/*     {% endif %}*/
/* */
/* </div>*/
/* <!-- EOF:#page -->*/
/* */
/* {% if page.footer_first or page.footer_second or page.footer_third or page.footer_fourth %}*/
/* <!-- #footer -->*/
/* <footer id="footer" class="clearfix">*/
/*     <div class="container">*/
/*     */
/*         <!-- #footer-inside -->*/
/*         <div id="footer-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_first %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_first }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_second %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_second }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_third %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_third }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/* */
/*                 <div class="col-md-3">*/
/*                     {% if page.footer_fourth %}*/
/*                     <div class="footer-area">*/
/*                     {{ page.footer_fourth }}*/
/*                     </div>*/
/*                     {% endif %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #footer-inside -->*/
/*     */
/*     </div>*/
/* </footer> */
/* <!-- EOF #footer -->*/
/* {% endif %}*/
/* */
/* <footer id="subfooter" class="clearfix">*/
/*     <div class="container">*/
/*         */
/*         <!-- #subfooter-inside -->*/
/*         <div id="subfooter-inside" class="clearfix">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <!-- #subfooter-left -->*/
/*                     <div class="subfooter-area">*/
/*                     {% if secondary_menu %}*/
/*                     <nav id="secondary-menu" class="navigation" role="navigation">*/
/*                     {{ secondary_menu }}*/
/*                     </nav>*/
/*                     {% endif %}                    */
/* */
/*                     {% if page.footer %}*/
/*                     {{ page.footer }}*/
/*                     {% endif %}*/
/* */
/*                     </div>*/
/*                     <!-- EOF: #subfooter-left -->*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <!-- EOF: #subfooter-inside -->*/
/*     */
/*     </div>*/
/* </footer>*/
/* <!-- EOF:#subfooter -->*/
