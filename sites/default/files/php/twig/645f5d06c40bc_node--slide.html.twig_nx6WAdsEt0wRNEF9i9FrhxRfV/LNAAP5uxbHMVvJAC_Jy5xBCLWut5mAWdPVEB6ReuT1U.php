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

/* themes/martis/templates/node/node--slide.html.twig */
class __TwigTemplate_ba168227eacccc2bf1723eed69a98db6f61bd0de33970ecb21f1002a7c035686 extends \Twig\Template
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
        // line 7
        echo "<div ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 7, $this->source), "html", null, true);
        echo " >
  ";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 8, $this->source), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 9, $this->source), "html", null, true);
        echo "
\t<div class=\"slide-image\"><img src=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#item"] ?? null) : null), "entity", [], "any", false, false, true, 10), "uri", [], "any", false, false, true, 10), "value", [], "any", false, false, true, 10), 10, $this->source)), "html", null, true);
        echo "\" alt=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 10), 0, [], "any", false, false, true, 10)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#item"] ?? null) : null), "alt", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\"/></div>
\t";
        // line 11
        if (((twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading_text", [], "any", false, false, true, 11) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 11)) || twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 11))) {
            // line 12
            echo "\t<div class=\"slide-content-wrap\">
\t\t<div class=\"container slide-wrap\">
\t\t<div class=\"slide-content ";
            // line 14
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_text_color", [], "any", false, false, true, 14), "value", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            echo "\">
\t\t<div class=\"slide-content-main ";
            // line 15
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_content_placement", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo " ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_text_align", [], "any", false, false, true, 15), "value", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
            echo "\">
\t\t";
            // line 16
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pre_heading_text", [], "any", false, false, true, 16))) {
                // line 17
                echo "\t\t<div class=\"pre-heading-text\" data-animation-in=\"bounceInDown\" data-animation-out=\"animate-out slideOutUp\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_pre_heading_text", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 19
            echo "\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading_text", [], "any", false, false, true, 19))) {
                // line 20
                echo "\t\t<div class=\"heading-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_heading_text", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 22
            echo "\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 22))) {
                // line 23
                echo "\t\t<div class=\"slide-content-body\" data-animation-in=\"slideInRight\" data-animation-out=\"animate-out fadeOut\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 23), 23, $this->source), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 25
            echo "\t\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_link", [], "any", false, false, true, 25), "title", [], "any", false, false, true, 25))) {
                // line 26
                echo "\t\t<div class=\"nav menu alt-button mt-4 slide-button\" data-animation-in=\"bounceInUp\" data-animation-out=\"animate-out slideOutDown\">
\t\t<a class=\"button slide-button-link\" href=\"";
                // line 27
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 27), 0, [], "any", false, false, true, 27)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), 27, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 27), 0, [], "any", false, false, true, 27)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 27, $this->source), "html", null, true);
                echo " »</a>
\t\t</div>
\t\t";
            }
            // line 30
            echo "\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 35
        echo "\t";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["node"] ?? null), "field_make_content_link", [], "any", false, false, true, 35), "value", [], "any", false, false, true, 35) && $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 35)))) {
            // line 36
            echo "\t<a class=\"slide-content-link\" href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 36), 0, [], "any", false, false, true, 36)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url"] ?? null) : null), 36, $this->source), "html", null, true);
            echo "\">view</a>
\t";
        }
        // line 38
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/node/node--slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 38,  124 => 36,  121 => 35,  114 => 30,  106 => 27,  103 => 26,  100 => 25,  94 => 23,  91 => 22,  85 => 20,  82 => 19,  76 => 17,  74 => 16,  68 => 15,  64 => 14,  60 => 12,  58 => 11,  52 => 10,  48 => 9,  44 => 8,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/node/node--slide.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/node/node--slide.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("escape" => 7, "render" => 16);
        static $functions = array("file_url" => 10);

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
                ['file_url']
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
