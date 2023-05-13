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

/* themes/martis/templates/misc/status-messages.html.twig */
class __TwigTemplate_488f491850196d0f494fbfcc539b1ba730b370e22fe898d29ae0bbbd606c7f3a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'messages' => [$this, 'block_messages'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "
<div class=\"task-bar alert alert-dismissable clearfix\" role=\"alert\">
<div data-drupal-messages>
";
        // line 29
        $this->displayBlock('messages', $context, $blocks);
        // line 62
        echo "</div>
</div>";
    }

    // line 29
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 31
            echo "  ";
            // line 32
            $context["classes"] = [0 => "messages", 1 => ("messages--" . $this->sandbox->ensureToStringAllowed(            // line 34
$context["type"], 34, $this->source))];
            // line 37
            echo "  <div role=\"contentinfo\" aria-label=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[$context["type"]] ?? null) : null), 37, $this->source), "html", null, true);
            echo "\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 37), 37, $this->source), "role", "aria-label"), "html", null, true);
            echo ">
  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            // line 39
            if (($context["type"] == "error")) {
                // line 40
                echo "      <div role=\"alert\">
    ";
            }
            // line 42
            echo "      ";
            if ((($__internal_compile_1 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[$context["type"]] ?? null) : null)) {
                // line 43
                echo "        <h2 class=\"visually-hidden\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = ($context["status_headings"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2[$context["type"]] ?? null) : null), 43, $this->source), "html", null, true);
                echo "</h2>
      ";
            }
            // line 45
            echo "      ";
            if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                // line 46
                echo "        <ul class=\"messages__list\">
          ";
                // line 47
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 48
                    echo "            <li class=\"messages__item\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($context["message"], 48, $this->source), "html", null, true);
                    echo "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "        </ul>
      ";
            } else {
                // line 52
                echo "        ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, twig_first($this->env, $this->sandbox->ensureToStringAllowed($context["messages"], 52, $this->source)), "html", null, true);
                echo "
      ";
            }
            // line 54
            echo "    ";
            if (($context["type"] == "error")) {
                // line 55
                echo "      </div>
    ";
            }
            // line 57
            echo "  </div>
  ";
            // line 59
            echo "  ";
            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 59);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/misc/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  127 => 59,  124 => 57,  120 => 55,  117 => 54,  111 => 52,  107 => 50,  98 => 48,  94 => 47,  91 => 46,  88 => 45,  82 => 43,  79 => 42,  75 => 40,  73 => 39,  65 => 37,  63 => 34,  62 => 32,  60 => 31,  56 => 30,  52 => 29,  47 => 62,  45 => 29,  40 => 26,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/misc/status-messages.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/misc/status-messages.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("block" => 29, "for" => 30, "set" => 32, "if" => 39);
        static $filters = array("escape" => 37, "without" => 37, "length" => 45, "first" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['block', 'for', 'set', 'if'],
                ['escape', 'without', 'length', 'first'],
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
