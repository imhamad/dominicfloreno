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

/* themes/martis/templates/block/block--call-to-action.html.twig */
class __TwigTemplate_8e392d96de597a256cd166d1d0d5defb66c5ec63dffe5acb21a055c7fbea4a32 extends \Twig\Template
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
        // line 7
        echo "
";
        // line 9
        $context["classes"] = [0 => "block", 1 => "action-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 12
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 12), 12, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 13
($context["plugin_id"] ?? null), 13, $this->source)))];
        // line 16
        echo "<div class=\"cta-";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta_format", [], "any", false, false, true, 16)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "value", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "\">
<div";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 17), 17, $this->source), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null), 17, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap clearfix\">
  ";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 19, $this->source), "html", null, true);
        echo "
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 20, $this->source), "html", null, true);
        echo "
  ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "</div>
</div>
</div>";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "
 ";
        // line 23
        if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_cta_format", [], "any", false, false, true, 23)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 23)), "value", [], "any", false, false, true, 23) == "style1")) {
            echo " 
\t<div class=\"cta-wrap action-block-1 text-center\">
\t  ";
            // line 25
            if (($context["label"] ?? null)) {
                // line 26
                echo "\t\t<div class=\"block-title-wrap clearfix\">
\t\t<div class=\"block-title-content\">
\t\t";
                // line 28
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 29
                    echo "\t\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 29, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 30
                    echo "\t\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 30), 30, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 30, $this->source), "html", null, true);
                    echo "</h2>
\t\t";
                } else {
                    // line 32
                    echo "\t\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 32), 32, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 32, $this->source), "html", null, true);
                    echo "</h2>
\t\t";
                    // line 33
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 33, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 34
                    echo "\t\t";
                }
                // line 35
                echo "\t\t</div>
\t\t</div>
\t  ";
            }
            // line 38
            echo "\t\t<div class=\"mb-5 cta-text\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</div>
\t\t";
            // line 39
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 39))) {
                // line 40
                echo "\t\t<div class=\"nav menu cta-link\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 40), 0, [], "any", false, false, true, 40)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#url"] ?? null) : null), 40, $this->source), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 40), 0, [], "any", false, false, true, 40)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 40, $this->source), "html", null, true);
                echo "</a></div>
\t\t";
            }
            // line 42
            echo "\t</div>

 ";
        } else {
            // line 44
            echo " 
\t<div class=\"cta-wrap action-block-2 row\">
\t\t<div class=\"col-sm-9 cta-text\">
\t  ";
            // line 47
            if (($context["label"] ?? null)) {
                // line 48
                echo "\t\t<div class=\"block-title-wrap clearfix\">
\t\t<div class=\"block-title-content\">
\t\t";
                // line 50
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 51
                    echo "\t\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 51, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 52
                    echo "\t\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
                    echo "</h2>
\t\t";
                } else {
                    // line 54
                    echo "\t\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 54), 54, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 54, $this->source), "html", null, true);
                    echo "</h2>
\t\t";
                    // line 55
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 55, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 56
                    echo "\t\t";
                }
                // line 57
                echo "\t\t</div>
\t\t</div>
\t  ";
            }
            // line 60
            echo "\t\t<div class=\"cta-body\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
            echo "</div>
\t\t</div>
\t\t";
            // line 62
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 62))) {
                // line 63
                echo "\t\t<div class=\"nav menu col-sm-3 text-middle cta-link\"><a href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 63), 0, [], "any", false, false, true, 63)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#url"] ?? null) : null), 63, $this->source), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 63), 0, [], "any", false, false, true, 63)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#title"] ?? null) : null), 63, $this->source), "html", null, true);
                echo "</a></div>
\t\t";
            }
            // line 65
            echo "\t</div>

 ";
        }
        // line 68
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/block/block--call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 68,  220 => 65,  212 => 63,  210 => 62,  204 => 60,  199 => 57,  196 => 56,  190 => 55,  183 => 54,  175 => 52,  168 => 51,  166 => 50,  162 => 48,  160 => 47,  155 => 44,  150 => 42,  142 => 40,  140 => 39,  135 => 38,  130 => 35,  127 => 34,  121 => 33,  114 => 32,  106 => 30,  99 => 29,  97 => 28,  93 => 26,  91 => 25,  86 => 23,  83 => 22,  79 => 21,  73 => 70,  71 => 21,  67 => 20,  63 => 19,  52 => 17,  47 => 16,  45 => 13,  44 => 12,  43 => 9,  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/block/block--call-to-action.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/block/block--call-to-action.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 9, "if" => 17, "block" => 21);
        static $filters = array("clean_class" => 12, "escape" => 16, "first" => 23, "render" => 39);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 'first', 'render'],
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
