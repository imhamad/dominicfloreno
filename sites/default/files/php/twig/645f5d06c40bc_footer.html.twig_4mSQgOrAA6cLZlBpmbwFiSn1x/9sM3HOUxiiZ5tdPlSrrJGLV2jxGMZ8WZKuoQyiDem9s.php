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

/* @martis/layout/footer.html.twig */
class __TwigTemplate_24a8924c688cb903cb910679d576060b4640aaf3c962df39199aad6a8e74313e extends \Twig\Template
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
        echo "<footer id=\"footer\" class=\"footer ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_theme"] ?? null), 2, $this->source), "html", null, true);
        echo "\">
\t<!-- start Footer -->
\t";
        // line 4
        if (((((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 4) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth", [], "any", false, false, true, 4)) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 4))) {
            // line 5
            echo "\t  <div class=\"footer-widget\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 8)) {
                // line 9
                echo "\t\t\t<!-- Start Footer First Region -->
\t\t\t<div class=\"";
                // line 10
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_size"] ?? null), 10, $this->source), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 11
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_first", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer First Region -->
\t\t\t";
            }
            // line 15
            echo "
\t\t\t";
            // line 16
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 16)) {
                // line 17
                echo "\t\t\t<!-- Start Footer Second Region -->
\t\t\t<div class=\"";
                // line 18
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_size"] ?? null), 18, $this->source), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 19
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_second", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Second Region -->
\t\t\t";
            }
            // line 23
            echo "
\t\t\t";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 24)) {
                // line 25
                echo "\t\t\t<!-- Start Footer Third Region -->
\t\t\t<div class=\"";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_size"] ?? null), 26, $this->source), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_third", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Third Region -->
\t\t\t";
            }
            // line 31
            echo "\t\t\t
\t\t\t";
            // line 32
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth", [], "any", false, false, true, 32)) {
                // line 33
                echo "\t\t\t<!-- Start Footer Forth Region -->
\t\t\t<div class=\"";
                // line 34
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_forth_size"] ?? null), 34, $this->source), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 35
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_forth", [], "any", false, false, true, 35), 35, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Forth Region -->
\t\t\t";
            }
            // line 39
            echo "\t\t\t
\t\t\t";
            // line 40
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 40)) {
                // line 41
                echo "\t\t\t<!-- Start Footer Fifth Region -->
\t\t\t<div class=\"";
                // line 42
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_size"] ?? null), 42, $this->source), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 43
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_fifth", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer Fifth Region -->
\t\t\t";
            }
            // line 47
            echo "\t\t\t
\t\t\t";
            // line 48
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_sixth", [], "any", false, false, true, 48)) {
                // line 49
                echo "\t\t\t<!-- Start Footer Sixth Region -->
\t\t\t<div class=\"";
                // line 50
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_sixth_size"] ?? null), 50, $this->source), "html", null, true);
                echo " footer-widget-section\">
\t\t\t\t";
                // line 51
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_sixth", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "
\t\t\t</div>
\t\t\t<!-- End Footer SIXth Region -->
\t\t\t";
            }
            // line 54
            echo "\t\t\t
\t\t\t</div>
\t\t</div>
\t  </div>
\t";
        }
        // line 59
        echo "\t<!--End Footer -->

";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 61) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 61))) {
            // line 62
            echo "\t<div class=\"footer-bottom\">
\t  <div class=\"container\">
\t\t<div class=\"row\">
\t\t  ";
            // line 65
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 65)) {
                // line 66
                echo "\t\t  <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerbottomcol"] ?? null), 66, $this->source), "html", null, true);
                echo " footer-bottom-first\">
\t\t\t";
                // line 67
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_first", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "
\t\t  </div>
\t\t  ";
            }
            // line 70
            echo "\t\t  ";
            if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 70)) {
                // line 71
                echo "\t\t  <div class=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footerbottomcol"] ?? null), 71, $this->source), "html", null, true);
                echo " footer-bottom-second\">
\t\t\t";
                // line 72
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_second", [], "any", false, false, true, 72), 72, $this->source), "html", null, true);
                echo "
\t\t  </div>
\t\t  ";
            }
            // line 75
            echo "\t\t</div>
\t  </div>
\t</div>
";
        }
        // line 79
        echo "</footer>
";
        // line 80
        if (($context["scrolltop"] ?? null)) {
            // line 81
            echo "\t<div class=\"back-to-top\"><span class=\"ti-angle-up\"></span></div>
";
        }
    }

    public function getTemplateName()
    {
        return "@martis/layout/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  217 => 80,  214 => 79,  208 => 75,  202 => 72,  197 => 71,  194 => 70,  188 => 67,  183 => 66,  181 => 65,  176 => 62,  174 => 61,  170 => 59,  163 => 54,  156 => 51,  152 => 50,  149 => 49,  147 => 48,  144 => 47,  137 => 43,  133 => 42,  130 => 41,  128 => 40,  125 => 39,  118 => 35,  114 => 34,  111 => 33,  109 => 32,  106 => 31,  99 => 27,  95 => 26,  92 => 25,  90 => 24,  87 => 23,  80 => 19,  76 => 18,  73 => 17,  71 => 16,  68 => 15,  61 => 11,  57 => 10,  54 => 9,  52 => 8,  47 => 5,  45 => 4,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@martis/layout/footer.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/layout/footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 4);
        static $filters = array("escape" => 2);
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
