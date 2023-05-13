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

/* themes/martis/templates/layout/page.html.twig */
class __TwigTemplate_07070586536e90da96ef09d5abab517e983ee29aef78b61eb0bde310043aaa86 extends \Twig\Template
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
\t
\t";
        // line 49
        $this->loadTemplate("@martis/layout/header.html.twig", "themes/martis/templates/layout/page.html.twig", 49)->display($context);
        // line 50
        echo "\t
\t";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide_top", [], "any", false, false, true, 51)) {
            // line 52
            echo "\t<!-- Start Content Wide Top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t";
            // line 54
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide_top", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "
\t</section>
\t<!-- End Content Wide Top -->
\t";
        }
        // line 58
        echo "\t
\t";
        // line 59
        if ( !($context["is_front"] ?? null)) {
            // line 60
            echo "\t";
            if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 60) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 60))) {
                // line 61
                echo "\t<!-- Start Page Title -->
\t<section id=\"page-title\" class=\"page-title ";
                // line 62
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_title_theme"] ?? null), 62, $this->source), "html", null, true);
                echo "\">
\t\t<div class=\"container\">
\t\t\t";
                // line 64
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "page_title", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "
\t\t\t";
                // line 65
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 65), 65, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</section>
\t  <!-- End Page Title -->
\t";
            }
            // line 70
            echo "\t";
        }
        // line 71
        echo "
\t";
        // line 72
        if ((( !twig_test_empty(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 72)))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 72))) || $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 72)))) {
            // line 73
            echo "\t<section id=\"page-wrapper\" class=\"page-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row content-layout\">
\t\t\t  ";
            // line 76
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 76))) {
                // line 77
                echo "\t\t\t  <!--- Start Left SideBar -->
\t\t\t\t<div class =\"";
                // line 78
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sideleftcol"] ?? null), 78, $this->source), "html", null, true);
                echo " sidebar\">
\t\t\t\t\t";
                // line 79
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 79), 79, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Left SideBar -->
\t\t\t  ";
            }
            // line 83
            echo "
\t\t\t  ";
            // line 84
            if ( !twig_test_empty(twig_striptags($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 84))))) {
                // line 85
                echo "\t\t\t  <!--- Start Content -->
\t\t\t\t<div class=\"";
                // line 86
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentcol"] ?? null), 86, $this->source), "html", null, true);
                echo " main-content\">
\t\t\t\t\t";
                // line 87
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 87), 87, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Content -->
\t\t\t  ";
            }
            // line 91
            echo "
\t\t\t  ";
            // line 92
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 92))) {
                // line 93
                echo "\t\t\t  <!--- Start Right SideBar -->
\t\t\t\t<div class=\"";
                // line 94
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["siderightcol"] ?? null), 94, $this->source), "html", null, true);
                echo " sidebar\">
\t\t\t\t\t";
                // line 95
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  ";
            }
            // line 99
            echo "\t\t\t</div>
\t\t</div>
\t</section>
\t";
        }
        // line 103
        echo "
\t";
        // line 104
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide", [], "any", false, false, true, 104)) {
            // line 105
            echo "\t<!-- Start Content Wide Middle -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t";
            // line 107
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
\t</section>
\t<!-- End Content Wide Middle -->
\t";
        }
        // line 111
        echo "\t

\t";
        // line 113
        if (((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_first", [], "any", false, false, true, 113) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_second", [], "any", false, false, true, 113)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_third", [], "any", false, false, true, 113))) {
            // line 114
            echo "\t  <!-- start Content Widget -->
\t  <section class=\"content-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t";
            // line 118
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_first", [], "any", false, false, true, 118)) {
                // line 119
                echo "\t\t\t<!-- Start Content Widget First Region -->
\t\t\t<div class=\"";
                // line 120
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetfirstcol"] ?? null), 120, $this->source), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 121
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_first", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget First Region -->
\t\t\t";
            }
            // line 125
            echo "
\t\t\t";
            // line 126
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_second", [], "any", false, false, true, 126)) {
                // line 127
                echo "\t\t\t<!-- Start Content Widget Second Region -->
\t\t\t<div class=\"";
                // line 128
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetsecondcol"] ?? null), 128, $this->source), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 129
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_second", [], "any", false, false, true, 129), 129, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget Second Region -->
\t\t\t";
            }
            // line 133
            echo "
\t\t\t";
            // line 134
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_third", [], "any", false, false, true, 134)) {
                // line 135
                echo "\t\t\t<!-- Start Content Widget Third Region -->
\t\t\t<div class=\"";
                // line 136
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["widgetthirdcol"] ?? null), 136, $this->source), "html", null, true);
                echo " content-widget-section\">
\t\t\t\t";
                // line 137
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_widget_third", [], "any", false, false, true, 137), 137, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Content Widget Third Region -->
\t\t\t";
            }
            // line 140
            echo "\t\t
\t\t\t</div>
\t\t</div>
\t  </section>
\t  <!--End Content Widget -->
\t";
        }
        // line 146
        echo "\t
\t";
        // line 147
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide_bottom", [], "any", false, false, true, 147)) {
            // line 148
            echo "\t<!-- Start Content Wide Bottom -->
\t<section id=\"content-wide-bottom\" class=\"content-wide\">        
\t\t";
            // line 150
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content_wide_bottom", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
            echo "
\t</section>
\t<!-- End Content Wide Bottom -->
\t";
        }
        // line 154
        echo "
\t";
        // line 155
        $this->loadTemplate("@martis/layout/footer.html.twig", "themes/martis/templates/layout/page.html.twig", 155)->display($context);
        // line 156
        echo "</div>
</div>
";
        // line 158
        if (($context["preloader"] ?? null)) {
            // line 159
            echo "<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 159,  291 => 158,  287 => 156,  285 => 155,  282 => 154,  275 => 150,  271 => 148,  269 => 147,  266 => 146,  258 => 140,  251 => 137,  247 => 136,  244 => 135,  242 => 134,  239 => 133,  232 => 129,  228 => 128,  225 => 127,  223 => 126,  220 => 125,  213 => 121,  209 => 120,  206 => 119,  204 => 118,  198 => 114,  196 => 113,  192 => 111,  185 => 107,  181 => 105,  179 => 104,  176 => 103,  170 => 99,  163 => 95,  159 => 94,  156 => 93,  154 => 92,  151 => 91,  144 => 87,  140 => 86,  137 => 85,  135 => 84,  132 => 83,  125 => 79,  121 => 78,  118 => 77,  116 => 76,  111 => 73,  109 => 72,  106 => 71,  103 => 70,  95 => 65,  91 => 64,  86 => 62,  83 => 61,  80 => 60,  78 => 59,  75 => 58,  68 => 54,  64 => 52,  62 => 51,  59 => 50,  57 => 49,  52 => 47,  39 => 46,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/layout/page.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/layout/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 49, "if" => 51);
        static $filters = array("escape" => 46, "striptags" => 72, "render" => 72);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 'striptags', 'render'],
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
