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

/* themes/martis/templates/node/node--portfolio.html.twig */
class __TwigTemplate_fa90400981e1351a8d409df732850501d22e660e1a6945a310af5dc4b18885f7 extends \Twig\Template
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
        // line 8
        $context["classes"] = [0 => "node", 1 => ("node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 10
($context["node"] ?? null), "bundle", [], "any", false, false, true, 10), 10, $this->source))), 2 => "node-content", 3 => ((twig_get_attribute($this->env, $this->source,         // line 12
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 12)) ? ("node--promoted") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,         // line 13
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 13)) ? ("node--sticky") : ("")), 5 => (( !twig_get_attribute($this->env, $this->source,         // line 14
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 14)) ? ("node--unpublished") : (""))];
        // line 17
        if (($context["teaser"] ?? null)) {
            // line 18
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true);
            echo ">
  ";
            // line 19
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 19, $this->source), "html", null, true);
            echo "
  ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 20, $this->source), "html", null, true);
            echo "
  
<div class=\"portfolio\">  
\t<div class=\"portfolio-item\">
\t\t<div class=\"portfolio-img\">
\t\t";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 25), 0, [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "
\t\t</div>
\t\t<div class=\"portfolio-overlay\">
\t\t\t<div class=\"portfolio-label\">
\t\t\t<h3 class=\"portfolio-title\"><a href=\"";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 29, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 29, $this->source), "html", null, true);
            echo "</a></h3>
\t\t\t<div class=\"portfolio-term\">";
            // line 30
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_project_category", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>  
  
</div>

";
        } else {
            // line 39
            echo "
<div";
            // line 40
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 40), 40, $this->source), "html", null, true);
            echo ">
  ";
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 41, $this->source), "html", null, true);
            echo "
  ";
            // line 42
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 42, $this->source), "html", null, true);
            echo "
\t<div class=\"row\">
\t\t<div class=\"col-sm-7\">
\t\t";
            // line 45
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 45))) {
                // line 46
                echo "\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_portfolio_format", [], "any", false, false, true, 46)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 46)), "value", [], "any", false, false, true, 46) == "1")) {
                    // line 47
                    echo "\t\t\t\t<div class=\"post-image\"><div class=\"slide-carousel owl-carousel\" data-nav=\"true\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
                    echo "</div></div>\t
\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t<div class=\"post-image\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 49), 0, [], "any", false, false, true, 49), 49, $this->source), "html", null, true);
                    echo "</div>
\t\t\t";
                }
                // line 50
                echo "\t
\t\t";
            }
            // line 52
            echo "\t\t</div>
\t\t<div class=\"col-sm-5\">
\t\t\t";
            // line 54
            if (twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 54)) {
                // line 55
                echo "\t\t\t<h3 class=\"portfolio-title-detail\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Description"));
                echo "</h3>
\t\t\t<div class=\"portfolio-body\">";
                // line 56
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 58
            echo "\t\t\t<div class=\"portfolio-meta\">
\t\t\t<h3 class=\"portfolio-title-detail\">";
            // line 59
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Details"));
            echo "</h3>
\t\t\t";
            // line 60
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_client", [], "any", false, false, true, 60))) {
                // line 61
                echo "\t\t\t<div class=\"portfolio-meta-item\"><span class=\"portfolio-meta-item-title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Client:"));
                echo "</span> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_client", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 63
            echo "\t\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_project_category", [], "any", false, false, true, 63))) {
                // line 64
                echo "\t\t\t<div class=\"portfolio-meta-item\"><span class=\"portfolio-meta-item-title\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Category:"));
                echo "</span> ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_project_category", [], "any", false, false, true, 64), 64, $this->source), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 66
            echo "\t\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 66))) {
                // line 67
                echo "\t\t\t<a target=\"_blank\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("View Project"));
                echo "</a>
\t\t\t";
            }
            // line 69
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/node/node--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 69,  174 => 67,  171 => 66,  163 => 64,  160 => 63,  152 => 61,  150 => 60,  146 => 59,  143 => 58,  138 => 56,  133 => 55,  131 => 54,  127 => 52,  123 => 50,  117 => 49,  111 => 47,  108 => 46,  106 => 45,  100 => 42,  96 => 41,  92 => 40,  89 => 39,  77 => 30,  71 => 29,  64 => 25,  56 => 20,  52 => 19,  47 => 18,  45 => 17,  43 => 14,  42 => 13,  41 => 12,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/node/node--portfolio.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/node/node--portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 17);
        static $filters = array("clean_class" => 10, "escape" => 18, "render" => 45, "first" => 46, "t" => 55);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'render', 'first', 't'],
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
