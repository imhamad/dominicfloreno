<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @martis/layout/header.html.twig */
class __TwigTemplate_991cc76046bcbc71d70fba768a267f14111981d9e1c9260e4ca62cbb6e68106f extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<!-- Header Start -->
<header class=\"header\">
\t";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 5) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 5))) {
            // line 6
            echo "\t<div class=\"header-top ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_theme"] ?? null), 6, $this->source), "html", null, true);
            echo "\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">\t
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
            // line 10
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 10)) {
                // line 11
                echo "\t\t\t\t<div class=\"header-top-first\">
\t\t\t\t";
                // line 12
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_first", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t</div>
\t\t\t<div class=\"col-md-6\">
\t\t\t\t";
            // line 17
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 17)) {
                // line 18
                echo "\t\t\t\t<div class=\"header-top-second\">
\t\t\t\t";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_top_second", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 22
            echo "\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 27
        echo "\t\t
\t<div class=\"container-wrap header-wrap\">
\t\t";
        // line 29
        if ((((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 29) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 29)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 29)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 29)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 29)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_cart", [], "any", false, false, true, 29))) {
            // line 30
            echo "\t\t<div class=\"navbar header-center\">
\t\t\t<div class=\"container\">
\t\t\t\t";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 32)) {
                // line 33
                echo "\t\t\t\t<div class=\"header-side navbar-brand\">
\t\t\t\t\t";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 37) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 37))) {
                // line 38
                echo "\t\t\t\t<div class=\"header-main-wrap\">
\t\t\t\t\t";
                // line 39
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 39)) {
                    // line 40
                    echo "\t\t\t\t\t<div class=\"header-item header-main\">
\t\t\t\t\t";
                    // line 41
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 44
                echo "
\t\t\t\t\t";
                // line 45
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 45)) {
                    // line 46
                    echo "\t\t\t\t\t<div id=\"header-search\" class=\"collapse header-item header-search\">
\t\t\t\t\t";
                    // line 47
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 50
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 52
            echo "\t\t\t\t";
            if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 52) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 52)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_cart", [], "any", false, false, true, 52))) {
                // line 53
                echo "\t\t\t\t<div class=\"header-side header-right-wrap\">
\t\t\t\t\t";
                // line 54
                if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 54)) {
                    // line 55
                    echo "\t\t\t\t\t<div class=\"header-item header-right\">
\t\t\t\t\t\t";
                    // line 56
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_right", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                    echo "\t
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 58
                echo "\t
\t\t\t\t\t
\t\t\t\t\t";
                // line 60
                if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_cart", [], "any", false, false, true, 60) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 60))) {
                    // line 61
                    echo "\t\t\t\t\t<div class=\"header-item header-element\">
\t\t\t\t\t
\t\t\t\t\t";
                    // line 63
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_search", [], "any", false, false, true, 63)) {
                        // line 64
                        echo "\t\t\t\t\t<button class=\"header-element-item search-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#header-search\" aria-expanded=\"false\" aria-controls=\"header-search\">
\t\t\t\t\t\t<i class=\"ti-search\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t";
                    }
                    // line 67
                    echo "\t
\t\t\t\t\t
\t\t\t\t\t";
                    // line 69
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_cart", [], "any", false, false, true, 69)) {
                        // line 70
                        echo "\t\t\t\t\t<div class=\"header-element-item header-cart ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["cart_icon_theme"] ?? null), 70, $this->source), "html", null, true);
                        echo "\">
\t\t\t\t\t\t";
                        // line 71
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_cart", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                        echo "
\t\t\t\t\t</div>
\t\t\t\t\t";
                    }
                    // line 74
                    echo "
\t\t\t\t\t";
                    // line 75
                    if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 75)) {
                        // line 76
                        echo "\t\t\t\t\t<button class=\"navbar-toggler nav-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t\t<i class=\"ti-menu\"></i>
\t\t\t\t\t</button>
\t\t\t\t\t";
                    }
                    // line 80
                    echo "\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 82
                echo "\t\t\t\t</div>
\t\t\t\t";
            }
            // line 84
            echo "\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 87
        echo "\t\t
\t\t";
        // line 88
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 88) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_category_menu", [], "any", false, false, true, 88)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu_right", [], "any", false, false, true, 88))) {
            // line 89
            echo "\t\t<div class=\"header-menu\">
\t\t<div class=\"navbar navbar-expand-md nav-menu\">
\t\t\t<div class=\"container p-0\">
\t\t\t\t";
            // line 92
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_category_menu", [], "any", false, false, true, 92)) {
                // line 93
                echo "\t\t\t\t<div id=\"main-menu-left\" class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenuleftcol"] ?? null), 93, $this->source), "html", null, true);
                echo " main-menu-left\">
\t\t\t\t\t";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header_category_menu", [], "any", false, false, true, 94), 94, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 97)) {
                // line 98
                echo "\t\t\t\t<div id=\"main-menu\" class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenucol"] ?? null), 98, $this->source), "html", null, true);
                echo " collapse navbar-collapse primary-menu ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_align"] ?? null), 98, $this->source), "html", null, true);
                echo "\">
\t\t\t\t\t";
                // line 99
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 102
            echo "
\t\t\t\t";
            // line 103
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu_right", [], "any", false, false, true, 103)) {
                // line 104
                echo "\t\t\t\t<div id=\"main-menu-right\" class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["mainmenurightcol"] ?? null), 104, $this->source), "html", null, true);
                echo " main-menu-right\">
\t\t\t\t\t";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "main_menu_right", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 107
            echo "\t
\t\t\t</div>
\t\t</div>
\t\t</div>
\t\t";
        }
        // line 112
        echo "\t</div>
</header>
<!-- Header End -->";
    }

    public function getTemplateName()
    {
        return "@martis/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  281 => 112,  274 => 107,  268 => 105,  263 => 104,  261 => 103,  258 => 102,  252 => 99,  245 => 98,  242 => 97,  236 => 94,  231 => 93,  229 => 92,  224 => 89,  222 => 88,  219 => 87,  214 => 84,  210 => 82,  206 => 80,  200 => 76,  198 => 75,  195 => 74,  189 => 71,  184 => 70,  182 => 69,  178 => 67,  172 => 64,  170 => 63,  166 => 61,  164 => 60,  160 => 58,  154 => 56,  151 => 55,  149 => 54,  146 => 53,  143 => 52,  139 => 50,  133 => 47,  130 => 46,  128 => 45,  125 => 44,  119 => 41,  116 => 40,  114 => 39,  111 => 38,  108 => 37,  102 => 34,  99 => 33,  97 => 32,  93 => 30,  91 => 29,  87 => 27,  80 => 22,  74 => 19,  71 => 18,  69 => 17,  65 => 15,  59 => 12,  56 => 11,  54 => 10,  46 => 6,  44 => 5,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@martis/layout/header.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/layout/header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 5);
        static $filters = array("escape" => 6);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
