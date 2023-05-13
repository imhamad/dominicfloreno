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

/* modules/custom/portfolio/templates/views-view-portfolio.html.twig */
class __TwigTemplate_1d416deafd98b6a947fadeded984d26db921471cc0c91558af48a3ff0d1725e3 extends \Twig\Template
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
        // line 20
        echo "
<div ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_class"] ?? null), 21, $this->source), "html", null, true);
        echo ">
  ";
        // line 22
        if (($context["title"] ?? null)) {
            // line 23
            echo "    <h3 class=\"views-title\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 23, $this->source), "html", null, true);
            echo "</h3>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($context["filter_options"] ?? null)) {
            // line 27
            echo "  <div class=\"clearfix shuffle-filters-wrap\">
    <div class=\"shuffle-filters-container\">
      ";
            // line 29
            if (($context["filter_label"] ?? null)) {
                // line 30
                echo "        <div class=\"filter-label\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_label"] ?? null), 30, $this->source), "html", null, true);
                echo "</div>
      ";
            }
            // line 32
            echo "      <ul class=\"shuffle-filters filter-options\">
\t  <li class=\"shuffle-filters-all shuffle-filters-item active\" data-group=\"all\">";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("All"));
            echo "</li>
\t  </ul>
      ";
            // line 35
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_options"] ?? null), 35, $this->source), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 39
        echo "
  ";
        // line 41
        echo "  <div class=\"shuffle-container\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 43
            echo "      ";
            // line 44
            $context["row_classes"] = [0 => ((            // line 45
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 48
            echo "
      <div";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 49), "addClass", [0 => ($context["row_classes"] ?? null), 1 => ($context["grid_classes"] ?? null)], "method", false, false, true, 49), 49, $this->source), "html", null, true);
            echo ">
        ";
            // line 50
            if (twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 50)) {
                // line 51
                echo "          <div class=\"shuffle-inner\">
          ";
                // line 52
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 55
            echo "      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/portfolio/templates/views-view-portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 58,  119 => 55,  113 => 52,  110 => 51,  108 => 50,  104 => 49,  101 => 48,  99 => 45,  98 => 44,  96 => 43,  92 => 42,  89 => 41,  86 => 39,  79 => 35,  74 => 33,  71 => 32,  65 => 30,  63 => 29,  59 => 27,  57 => 26,  54 => 25,  48 => 23,  46 => 22,  42 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/portfolio/templates/views-view-portfolio.html.twig", "/Users/hamad/WebServer/dominic/modules/custom/portfolio/templates/views-view-portfolio.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 22, "for" => 42, "set" => 44);
        static $filters = array("escape" => 21, "t" => 33);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape', 't'],
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
