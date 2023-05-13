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

/* themes/martis/templates/node/node--testimonial.html.twig */
class __TwigTemplate_2db6f088815665848e7a12d78f1b9e5b9b984f04600ce14dbf4e66329ff67c37 extends \Twig\Template
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
        echo "
";
        // line 18
        if (($context["teaser"] ?? null)) {
            // line 19
            echo "<div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "testimonial"], "method", false, false, true, 19), 19, $this->source), "html", null, true);
            echo ">
  ";
            // line 20
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 20, $this->source), "html", null, true);
            echo "
  ";
            // line 21
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 21, $this->source), "html", null, true);
            echo "
<div class=\"testimonial-content\">
<div class=\"testimonial-body\">";
            // line 23
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
            echo "</div>
<div class=\"testimonial-meta\">
\t";
            // line 25
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 25))) {
                // line 26
                echo "\t<div class=\"testimonial-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "</div>
\t";
            }
            // line 28
            echo "\t<div class=\"testimonial-title-wrap\">
\t<h5 class=\"testimonial-title\">";
            // line 29
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 29, $this->source), "html", null, true);
            echo "</h5>
\t";
            // line 30
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_position", [], "any", false, false, true, 30))) {
                // line 31
                echo "\t<div class=\"testimonial-position\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_position", [], "any", false, false, true, 31), "value", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "</div>
\t";
            }
            // line 33
            echo "\t</div>
</div>
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
<div class=\"row\">
<div class=\"col-sm-4\">
";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "
</div>

<div class=\"col-sm-8\">
<h3 class=\"node-name-title\">";
            // line 49
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 49, $this->source), "html", null, true);
            echo "</h3>
";
            // line 50
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_position", [], "any", false, false, true, 50))) {
                // line 51
                echo "<div class=\"testimonial-position\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_position", [], "any", false, false, true, 51), "value", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
                echo "</div>
";
            }
            // line 53
            echo "<div class=\"testimonial-body\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "</div>
</div>
</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/node/node--testimonial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 53,  130 => 51,  128 => 50,  124 => 49,  117 => 45,  111 => 42,  107 => 41,  103 => 40,  100 => 39,  92 => 33,  86 => 31,  84 => 30,  80 => 29,  77 => 28,  71 => 26,  69 => 25,  64 => 23,  59 => 21,  55 => 20,  50 => 19,  48 => 18,  45 => 17,  43 => 14,  42 => 13,  41 => 12,  40 => 10,  39 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/node/node--testimonial.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/node/node--testimonial.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 18);
        static $filters = array("clean_class" => 10, "escape" => 19, "render" => 25);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'render'],
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
