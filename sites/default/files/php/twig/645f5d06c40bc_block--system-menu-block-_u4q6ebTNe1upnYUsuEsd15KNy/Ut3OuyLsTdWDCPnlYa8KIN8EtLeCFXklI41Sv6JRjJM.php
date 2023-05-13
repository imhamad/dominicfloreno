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

/* themes/martis/templates/block/block--system-menu-block--main.html.twig */
class __TwigTemplate_01ca36aff68daaf5c91cbd07c3bfb99de3aa1af9a770607d244485560a00623e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 37
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 37), 37, $this->source))), 2 => "main-menu"];
        // line 41
        $context["heading_id"] = \Drupal\Component\Utility\Html::getId($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "id", [], "any", false, false, true, 41), 41, $this->source));
        // line 42
        echo "<nav aria-labelledby=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null), 42, $this->source), "html", null, true);
        echo "\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 42, $this->source), "role", "aria-labelledby"), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 42), 42, $this->source), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null), 42, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
\t<div class=\"container-wrap clearfix mega-menu main-menu-wrap\">
\t  ";
        // line 45
        echo "\t  ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["configuration"] ?? null), "label_display", [], "any", false, false, true, 45)) {
            // line 46
            echo "\t\t";
            $context["title_attributes"] = twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method", false, false, true, 46);
            // line 47
            echo "\t  ";
        }
        // line 48
        echo "\t  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 48, $this->source), "html", null, true);
        echo "
\t\t";
        // line 49
        if (($context["label"] ?? null)) {
            // line 50
            echo "\t\t<div class=\"block-title-wrap clearfix\">
\t\t<div class=\"block-title-content\">
\t\t";
            // line 52
            if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                // line 53
                echo "\t\t";
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 53, $this->source), "html", null, true);
                    echo "</h5>";
                }
                // line 54
                echo "\t\t<h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
                echo "</h2>
\t\t";
            } else {
                // line 56
                echo "\t\t<h2";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 56), 56, $this->source), "html", null, true);
                echo ">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 56, $this->source), "html", null, true);
                echo "</h2>
\t\t";
                // line 57
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 57, $this->source), "html", null, true);
                    echo "</h5>";
                }
                // line 58
                echo "\t\t";
            }
            // line 59
            echo "\t\t</div>
\t\t</div>
\t\t";
        }
        // line 62
        echo "\t  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 62, $this->source), "html", null, true);
        echo "

\t  ";
        // line 65
        echo "\t  ";
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "\t</div>
</nav>";
    }

    // line 65
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 66
        echo "\t\t";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null), 66, $this->source), "html", null, true);
        echo "
\t  ";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/block/block--system-menu-block--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 66,  131 => 65,  126 => 68,  123 => 65,  117 => 62,  112 => 59,  109 => 58,  103 => 57,  96 => 56,  88 => 54,  81 => 53,  79 => 52,  75 => 50,  73 => 49,  68 => 48,  65 => 47,  62 => 46,  59 => 45,  45 => 42,  43 => 41,  41 => 37,  40 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/block/block--system-menu-block--main.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/block/block--system-menu-block--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 35, "if" => 42, "block" => 65);
        static $filters = array("clean_class" => 37, "clean_id" => 41, "escape" => 42, "without" => 42);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'escape', 'without'],
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
