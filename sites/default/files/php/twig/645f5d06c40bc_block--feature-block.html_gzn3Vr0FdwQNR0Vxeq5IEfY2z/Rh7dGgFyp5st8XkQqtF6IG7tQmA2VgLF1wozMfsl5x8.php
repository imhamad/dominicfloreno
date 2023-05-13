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

/* themes/martis/templates/block/block--feature-block.html.twig */
class __TwigTemplate_f189a2d6278670a3d755bd7d1727be4887e8c33ba1d7dc379af450c14af55244 extends \Twig\Template
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
        // line 8
        $context["classes"] = [0 => "block", 1 => "feature-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 11
($context["configuration"] ?? null), "provider", [], "any", false, false, true, 11), 11, $this->source))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["plugin_id"] ?? null), 12, $this->source)))];
        // line 15
        if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 15)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 15)), "value", [], "any", false, false, true, 15) == "video-popup")) {
            // line 16
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("martis/colorbox"), "html", null, true);
            echo "
";
        }
        // line 18
        echo "<div";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 18), 18, $this->source), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null), 18, $this->source), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap feature-block-";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 19)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#items"] ?? null) : null), "value", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
        echo " clearfix\">
  ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 20, $this->source), "html", null, true);
        echo "
  ";
        // line 21
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 21, $this->source), "html", null, true);
        echo "
  ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 260
        echo "</div>
</div>";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "  
 <div class=\"row-wrap block-content\">
";
        // line 25
        if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 25)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 25)), "value", [], "any", false, false, true, 25) == "layout1")) {
            // line 26
            echo "\t<div class=\"row feature-block-wrap feature-block-image-left\">
\t<div class=\"col-12 col-md-6 feat-block-image-wrap ";
            // line 27
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 27)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#items"] ?? null) : null), "value", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "\">
\t";
            // line 28
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 28)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 28)), "value", [], "any", false, false, true, 28) == "static-image")) {
                // line 29
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,             // line 30
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 30)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 30)), "value", [], "any", false, false, true, 30) == "slider-image")) {
                // line 31
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,             // line 36
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 36)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 36)), "value", [], "any", false, false, true, 36) == "video-popup")) {
                // line 37
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 37), 0, [], "any", false, false, true, 37)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#item"] ?? null) : null), "entity", [], "any", false, false, true, 37), "uri", [], "any", false, false, true, 37), "value", [], "any", false, false, true, 37), 37, $this->source)), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 38
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 39
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 39), 0, [], "any", false, false, true, 39)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#url"] ?? null) : null), 39, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 42
            echo "\t</div>
\t<div class=\"col-12 col-md-6 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 45
            if (($context["label"] ?? null)) {
                // line 46
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 48
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 49
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 49, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 50
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 50, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 52
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 52), 52, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 52, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 53
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 53, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 54
                    echo "\t";
                }
                // line 55
                echo "\t</div>
\t</div>
\t";
            }
            // line 58
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 58))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 59
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 59))) {
                // line 60
                echo "\t<div class=\"block-right feat-block\">
\t";
                // line 61
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 61), 61, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 64
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 64))) {
                // line 65
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 65), 0, [], "any", false, false, true, 65)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#url"] ?? null) : null), 65, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_10 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 65), 0, [], "any", false, false, true, 65)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["#title"] ?? null) : null), 65, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 67
            echo "\t</div>
\t</div>
\t</div>

";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,         // line 71
($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 71)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 71)), "value", [], "any", false, false, true, 71) == "layout2")) {
            // line 72
            echo "\t<div class=\"row feature-block-wrap feature-block-image-right\">
\t<div class=\"col-12 col-md-6 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 75
            if (($context["label"] ?? null)) {
                // line 76
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 78
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 79
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 79, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 80
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 80), 80, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 80, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 82
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 82), 82, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 82, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 83
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 83, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 84
                    echo "\t";
                }
                // line 85
                echo "\t</div>
\t</div>
\t";
            }
            // line 88
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 88))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 88), 88, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 89
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 89))) {
                // line 90
                echo "\t<div class=\"block-right feat-block\">
\t";
                // line 91
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 91), 91, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 94
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 94))) {
                // line 95
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 95), 0, [], "any", false, false, true, 95)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["#url"] ?? null) : null), 95, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 95), 0, [], "any", false, false, true, 95)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["#title"] ?? null) : null), 95, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 97
            echo "\t</div>
\t</div>
\t<div class=\"col-12 col-md-6 feat-block-image-wrap ";
            // line 99
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 99)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["#items"] ?? null) : null), "value", [], "any", false, false, true, 99), 99, $this->source), "html", null, true);
            echo "\">
\t";
            // line 100
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 100)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 100)), "value", [], "any", false, false, true, 100) == "static-image")) {
                // line 101
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 101), 101, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 102
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 102)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 102)), "value", [], "any", false, false, true, 102) == "slider-image")) {
                // line 103
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 105
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 108
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 108)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 108)), "value", [], "any", false, false, true, 108) == "video-popup")) {
                // line 109
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 109), 0, [], "any", false, false, true, 109)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["#item"] ?? null) : null), "entity", [], "any", false, false, true, 109), "uri", [], "any", false, false, true, 109), "value", [], "any", false, false, true, 109), 109, $this->source)), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 110
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 110), 110, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 111
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_19 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 111), 0, [], "any", false, false, true, 111)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["#url"] ?? null) : null), 111, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 114
            echo "\t</div>
\t</div>
\t
";
        } elseif (((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,         // line 117
($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 117)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 117)), "value", [], "any", false, false, true, 117) == "layout3") || (twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 117)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 117)), "value", [], "any", false, false, true, 117) == "layout4"))) {
            // line 118
            echo "\t<div class=\"feature-block-wrap feature-block-image-left feature-block-image-alt\">
\t<div class=\"feat-block-image-wrap ";
            // line 119
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 119)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["#items"] ?? null) : null), "value", [], "any", false, false, true, 119), 119, $this->source), "html", null, true);
            echo "\">
\t";
            // line 120
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 120)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 120)), "value", [], "any", false, false, true, 120) == "static-image")) {
                // line 121
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 122
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 122)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 122)), "value", [], "any", false, false, true, 122) == "slider-image")) {
                // line 123
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 125
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 128
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 128)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 128)), "value", [], "any", false, false, true, 128) == "video-popup")) {
                // line 129
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_26 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 129), 0, [], "any", false, false, true, 129)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["#item"] ?? null) : null), "entity", [], "any", false, false, true, 129), "uri", [], "any", false, false, true, 129), "value", [], "any", false, false, true, 129), 129, $this->source)), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 130
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 130), 130, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 131
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 131), 0, [], "any", false, false, true, 131)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["#url"] ?? null) : null), 131, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 134
            echo "\t</div>
\t<div class=\"feat-block-content feat-block-content-alt\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 137
            if (($context["label"] ?? null)) {
                // line 138
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 140
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 141
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 141, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 142
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 142), 142, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 142, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 144
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 144), 144, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 144, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 145
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 145, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 146
                    echo "\t";
                }
                // line 147
                echo "\t</div>
\t</div>
\t";
            }
            // line 150
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 150))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 150), 150, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 151
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 151))) {
                // line 152
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_28 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 152), 0, [], "any", false, false, true, 152)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["#url"] ?? null) : null), 152, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_29 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 152), 0, [], "any", false, false, true, 152)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["#title"] ?? null) : null), 152, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 154
            echo "\t</div>
\t</div>
\t</div>

";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,         // line 158
($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 158)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 158)), "value", [], "any", false, false, true, 158) == "layout5")) {
            // line 159
            echo "\t<div class=\"row feature-block-wrap feature-block-image-left feature-block-wrap-alt\">
\t<div class=\"col-12 col-md-6 feat-block-image-wrap\">
\t<div class=\"feat-block-media-wrap ";
            // line 161
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 161)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["#items"] ?? null) : null), "value", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "\">
\t";
            // line 162
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 162)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 162)), "value", [], "any", false, false, true, 162) == "static-image")) {
                // line 163
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 163), 163, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 164
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 164)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 164)), "value", [], "any", false, false, true, 164) == "slider-image")) {
                // line 165
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 167
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 170
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 170)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 170)), "value", [], "any", false, false, true, 170) == "video-popup")) {
                // line 171
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_35 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 171), 0, [], "any", false, false, true, 171)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["#item"] ?? null) : null), "entity", [], "any", false, false, true, 171), "uri", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171), 171, $this->source)), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 172
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 172), 172, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 173
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_36 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 173), 0, [], "any", false, false, true, 173)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["#url"] ?? null) : null), 173, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 176
            echo "\t</div>

\t<div class=\"feat-content\">
\t";
            // line 179
            if (($context["label"] ?? null)) {
                // line 180
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 182
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 183
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 183, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 184
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 184), 184, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 184, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 186
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 186), 186, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 186, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 187
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 187, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 188
                    echo "\t";
                }
                // line 189
                echo "\t</div>
\t</div>
\t";
            }
            // line 192
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 192))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 192), 192, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 193
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 193))) {
                // line 194
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_37 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 194), 0, [], "any", false, false, true, 194)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["#url"] ?? null) : null), 194, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_38 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 194), 0, [], "any", false, false, true, 194)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["#title"] ?? null) : null), 194, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 196
            echo "\t</div>
\t</div>

\t<div class=\"col-12 col-md-6 feat-block-content\">
\t";
            // line 200
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 200))) {
                // line 201
                echo "\t<div class=\"block-right feat-block\">
\t";
                // line 202
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 202), 202, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 205
            echo "\t</div>
\t</div>

";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_39 = twig_get_attribute($this->env, $this->source,         // line 208
($context["content"] ?? null), "field_feature_layout", [], "any", false, false, true, 208)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 208)), "value", [], "any", false, false, true, 208) == "layout6")) {
            // line 209
            echo "\t<div class=\"row feature-block-wrap feature-block-image-right feature-block-wrap-alt\">
\t<div class=\"col-12 col-md-6 feat-block-content\">
\t";
            // line 211
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 211))) {
                // line 212
                echo "\t<div class=\"block-right feat-block\">
\t";
                // line 213
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_block", [], "any", false, false, true, 213), 213, $this->source), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 216
            echo "\t</div>
\t<div class=\"col-12 col-md-6 feat-block-image-wrap\">
\t<div class=\"feat-block-media-wrap ";
            // line 218
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 218)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["#items"] ?? null) : null), "value", [], "any", false, false, true, 218), 218, $this->source), "html", null, true);
            echo "\">
\t";
            // line 219
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 219)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 219)), "value", [], "any", false, false, true, 219) == "static-image")) {
                // line 220
                echo "\t<div class=\"feat-block-image\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 220), 220, $this->source), "html", null, true);
                echo "</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_42 = twig_get_attribute($this->env, $this->source,             // line 221
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 221)) && is_array($__internal_compile_42) || $__internal_compile_42 instanceof ArrayAccess ? ($__internal_compile_42["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 221)), "value", [], "any", false, false, true, 221) == "slider-image")) {
                // line 222
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 224
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 224), 224, $this->source), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_first($this->env, twig_get_attribute($this->env, $this->source, (($__internal_compile_43 = twig_get_attribute($this->env, $this->source,             // line 227
($context["content"] ?? null), "field_media_format", [], "any", false, false, true, 227)) && is_array($__internal_compile_43) || $__internal_compile_43 instanceof ArrayAccess ? ($__internal_compile_43["#items"] ?? null) : null), "getValue", [], "method", false, false, true, 227)), "value", [], "any", false, false, true, 227) == "video-popup")) {
                // line 228
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_44 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 228), 0, [], "any", false, false, true, 228)) && is_array($__internal_compile_44) || $__internal_compile_44 instanceof ArrayAccess ? ($__internal_compile_44["#item"] ?? null) : null), "entity", [], "any", false, false, true, 228), "uri", [], "any", false, false, true, 228), "value", [], "any", false, false, true, 228), 228, $this->source)), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 229
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_image", [], "any", false, false, true, 229), 229, $this->source), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 230
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_45 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_video", [], "any", false, false, true, 230), 0, [], "any", false, false, true, 230)) && is_array($__internal_compile_45) || $__internal_compile_45 instanceof ArrayAccess ? ($__internal_compile_45["#url"] ?? null) : null), 230, $this->source), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 233
            echo "\t</div>

\t<div class=\"feat-content\">
\t";
            // line 236
            if (($context["label"] ?? null)) {
                // line 237
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 239
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 240
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 240, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 241
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 241), 241, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 241, $this->source), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 243
                    echo "\t<h2";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method", false, false, true, 243), 243, $this->source), "html", null, true);
                    echo ">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null), 243, $this->source), "html", null, true);
                    echo "</h2>
\t";
                    // line 244
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null), 244, $this->source), "html", null, true);
                        echo "</h5>";
                    }
                    // line 245
                    echo "\t";
                }
                // line 246
                echo "\t</div>
\t</div>
\t";
            }
            // line 249
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 249))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "body", [], "any", false, false, true, 249), 249, $this->source), "html", null, true);
                echo "</div>";
            }
            // line 250
            echo "\t";
            if ($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 250))) {
                // line 251
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_46 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 251), 0, [], "any", false, false, true, 251)) && is_array($__internal_compile_46) || $__internal_compile_46 instanceof ArrayAccess ? ($__internal_compile_46["#url"] ?? null) : null), 251, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_47 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_link", [], "any", false, false, true, 251), 0, [], "any", false, false, true, 251)) && is_array($__internal_compile_47) || $__internal_compile_47 instanceof ArrayAccess ? ($__internal_compile_47["#title"] ?? null) : null), 251, $this->source), "html", null, true);
                echo "</a>
\t";
            }
            // line 253
            echo "\t</div>
\t</div>
\t</div>
";
        }
        // line 257
        echo "\t
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/martis/templates/block/block--feature-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  737 => 257,  731 => 253,  723 => 251,  720 => 250,  713 => 249,  708 => 246,  705 => 245,  699 => 244,  692 => 243,  684 => 241,  677 => 240,  675 => 239,  671 => 237,  669 => 236,  664 => 233,  658 => 230,  654 => 229,  649 => 228,  647 => 227,  641 => 224,  637 => 222,  635 => 221,  630 => 220,  628 => 219,  624 => 218,  620 => 216,  614 => 213,  611 => 212,  609 => 211,  605 => 209,  603 => 208,  598 => 205,  592 => 202,  589 => 201,  587 => 200,  581 => 196,  573 => 194,  570 => 193,  563 => 192,  558 => 189,  555 => 188,  549 => 187,  542 => 186,  534 => 184,  527 => 183,  525 => 182,  521 => 180,  519 => 179,  514 => 176,  508 => 173,  504 => 172,  499 => 171,  497 => 170,  491 => 167,  487 => 165,  485 => 164,  480 => 163,  478 => 162,  474 => 161,  470 => 159,  468 => 158,  462 => 154,  454 => 152,  451 => 151,  444 => 150,  439 => 147,  436 => 146,  430 => 145,  423 => 144,  415 => 142,  408 => 141,  406 => 140,  402 => 138,  400 => 137,  395 => 134,  389 => 131,  385 => 130,  380 => 129,  378 => 128,  372 => 125,  368 => 123,  366 => 122,  361 => 121,  359 => 120,  355 => 119,  352 => 118,  350 => 117,  345 => 114,  339 => 111,  335 => 110,  330 => 109,  328 => 108,  322 => 105,  318 => 103,  316 => 102,  311 => 101,  309 => 100,  305 => 99,  301 => 97,  293 => 95,  290 => 94,  284 => 91,  281 => 90,  278 => 89,  271 => 88,  266 => 85,  263 => 84,  257 => 83,  250 => 82,  242 => 80,  235 => 79,  233 => 78,  229 => 76,  227 => 75,  222 => 72,  220 => 71,  214 => 67,  206 => 65,  203 => 64,  197 => 61,  194 => 60,  191 => 59,  184 => 58,  179 => 55,  176 => 54,  170 => 53,  163 => 52,  155 => 50,  148 => 49,  146 => 48,  142 => 46,  140 => 45,  135 => 42,  129 => 39,  125 => 38,  120 => 37,  118 => 36,  112 => 33,  108 => 31,  106 => 30,  101 => 29,  99 => 28,  95 => 27,  92 => 26,  90 => 25,  86 => 23,  82 => 22,  77 => 260,  75 => 22,  71 => 21,  67 => 20,  63 => 19,  52 => 18,  46 => 16,  44 => 15,  42 => 12,  41 => 11,  40 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/martis/templates/block/block--feature-block.html.twig", "/Users/hamad/WebServer/dominic/themes/martis/templates/block/block--feature-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 8, "if" => 15, "block" => 22);
        static $filters = array("clean_class" => 11, "first" => 15, "escape" => 16, "render" => 58);
        static $functions = array("attach_library" => 16, "file_url" => 37);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'first', 'escape', 'render'],
                ['attach_library', 'file_url']
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
