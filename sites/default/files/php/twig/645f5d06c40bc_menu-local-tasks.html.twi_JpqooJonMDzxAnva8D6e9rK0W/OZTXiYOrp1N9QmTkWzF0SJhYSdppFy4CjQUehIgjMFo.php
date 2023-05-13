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

/* themes/martis/templates/navigation/menu-local-tasks.html.twig */
class __TwigTemplate_fa935b8b2423a3faac58d3d414051bf61c6f3b812cef5e2a77d5d6ba72c6f8e5 extends \Twig\Template
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
        echo "
<div class=\"task-bar alert alert-dismissable fade show clearfix\" role=\"alert\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\" aria-hidden=\"true\">&times;</button>
\t";
        // line 10
        if (($context["primary"] ?? null)) {
            // line 11
            echo "\t  <h2 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Primary tabs"));
            echo "</h2>
\t  <ul class=\"tabs primary\">";
            // line 12
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["primary"] ?? null), 12, $this->source), "html", null, true);
            echo "</ul>
\t";
        }
        // line 14
        echo "\t";
        if (($context["secondary"] ?? null)) {
            // line 15
            echo "\t  <h2 class=\"visually-hidden\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Secondary tabs"));
            echo "</h2>
\t  <ul class=\"tabs secondary\">";
            // line 16
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["secondary"] ?? null), 16, $this->source), "html", null, true);
            echo "</ul>
\t";
        }
        // line 18
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/navigation/menu-local-tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 18,  64 => 16,  59 => 15,  56 => 14,  51 => 12,  46 => 11,  44 => 10,  39 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/navigation/menu-local-tasks.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/navigation/menu-local-tasks.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 10);
        static $filters = array("t" => 11, "escape" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
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
