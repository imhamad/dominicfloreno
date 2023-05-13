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

/* themes/martis/templates/layout/page--404.html.twig */
class __TwigTemplate_6040c3239da42311c21760b5eead1e5ea75c57ebf6b59be7cc5ab1ff9591e68e extends \Twig\Template
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
        // line 46
        echo "<div id=\"wrapper\" class=\"wrapper ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["btn_style"] ?? null), 46, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_layout"] ?? null), 46, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_style"] ?? null), 46, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_style"] ?? null), 46, $this->source), "html", null, true);
        echo " ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["color_scheme"] ?? null), 46, $this->source), "html", null, true);
        echo "\">
<div class=\"layout-wrap ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_header"] ?? null), 47, $this->source), "html", null, true);
        echo "\">
\t";
        // line 48
        $this->loadTemplate("@martis/layout/header.html.twig", "themes/martis/templates/layout/page--404.html.twig", 48)->display($context);
        // line 49
        echo "
\t";
        // line 50
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide_top", [], "any", false, false, true, 50)) {
            // line 51
            echo "\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide_top", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "
\t</section>
\t<!-- End content top -->
\t";
        }
        // line 57
        echo "
\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">

\t  <div class=\"container\">
\t\t  <!--- Start content -->
\t\t\t<div class=\"content-layout\">
\t\t\t\t<div class=\"error-404 text-middle text-center\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"error-404-number\">404</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<h2 class=\"text-medium\">";
        // line 71
        echo t("Sorry, This Page Could Not Be Found!", array());
        echo "</h2>
\t\t\t\t\t<p>";
        // line 72
        echo t("The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.", array());
        echo "</p>
\t\t\t\t\t<a class=\"button\" href=\"";
        // line 73
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["front_page"] ?? null), 73, $this->source), "html", null, true);
        echo "\">";
        echo t("Go Back to Homepage", array());
        echo "</a>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t  <!---End content -->
\t  </div>

\t</section>
\t<!-- End layout -->

\t";
        // line 85
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide", [], "any", false, false, true, 85)) {
            // line 86
            echo "\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t";
            // line 88
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
            echo "
\t</section>
\t<!-- End content wide -->
\t";
        }
        // line 92
        echo "\t
\t";
        // line 93
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_first", [], "any", false, false, true, 93) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_second", [], "any", false, false, true, 93)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_third", [], "any", false, false, true, 93))) {
            // line 94
            echo "\t  <!-- start Content Widget -->
\t  <section class=\"content-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t";
            // line 98
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_first", [], "any", false, false, true, 98)) {
                // line 99
                echo "\t\t\t<!-- Start Content Widget First Region -->
\t\t\t<div class=\"";
                // line 100
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetfirstcol"] ?? null), 100, $this->source), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 101
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_first", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget First Region -->
\t\t\t";
            }
            // line 105
            echo "
\t\t\t";
            // line 106
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_second", [], "any", false, false, true, 106)) {
                // line 107
                echo "\t\t\t<!-- Start Content Widget Second Region -->
\t\t\t<div class=\"";
                // line 108
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetsecondcol"] ?? null), 108, $this->source), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 109
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_second", [], "any", false, false, true, 109), 109, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget Second Region -->
\t\t\t";
            }
            // line 113
            echo "
\t\t\t";
            // line 114
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_third", [], "any", false, false, true, 114)) {
                // line 115
                echo "\t\t\t<!-- Start Content Widget Third Region -->
\t\t\t<div class=\"";
                // line 116
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetthirdcol"] ?? null), 116, $this->source), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 117
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_third", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget Third Region -->
\t\t\t";
            }
            // line 120
            echo "\t\t
\t\t\t</div>
\t\t</div>
\t  </section>
\t  <!--End Content Widget -->
\t";
        }
        // line 126
        echo "
";
        // line 127
        $this->loadTemplate("@martis/layout/footer.html.twig", "themes/martis/templates/layout/page--404.html.twig", 127)->display($context);
        // line 128
        echo "
</div>
</div>
";
        // line 131
        if (($context["preloader"] ?? null)) {
            // line 132
            echo "<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/layout/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 132,  211 => 131,  206 => 128,  204 => 127,  201 => 126,  193 => 120,  186 => 117,  182 => 116,  179 => 115,  177 => 114,  174 => 113,  167 => 109,  163 => 108,  160 => 107,  158 => 106,  155 => 105,  148 => 101,  144 => 100,  141 => 99,  139 => 98,  133 => 94,  131 => 93,  128 => 92,  121 => 88,  117 => 86,  115 => 85,  98 => 73,  94 => 72,  90 => 71,  74 => 57,  67 => 53,  63 => 51,  61 => 50,  58 => 49,  56 => 48,  52 => 47,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/layout/page--404.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/layout/page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 48, "if" => 50, "trans" => 71);
        static $filters = array("escape" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if', 'trans'],
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
