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

/* SonataAdminBundle:CRUD:base_array_macro.html.twig */
class __TwigTemplate_aa451e50fc771ae4718bfcfa5ddd233a704cdaa34bee7bcb619773b8257c008a extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_array_macro.html.twig"));

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function macro_render_array($__value__ = null, $__inline__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "inline" => $__inline__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_array"));

            // line 13
            echo "    ";
            $context["options"] = twig_array_merge(["key_translation_domain" => false, "value_translation_domain" => false, "display" => "both"],             // line 17
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 17, $this->source); })()));
            // line 18
            ob_start();
            // line 19
            $macros["__internal_602a3dfa421fbb4f7fa5d786923dccc846285f2821fc33b0fc85907129eb517b"] = $this;
            // line 21
            if ( !(isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 21, $this->source); })())) {
                // line 22
                echo "<ul>";
            } else {
                // line 24
                echo "[";
            }
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 27, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 28
                if ( !(isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 28, $this->source); })())) {
                    // line 29
                    echo "<li>";
                }
                // line 32
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 32, $this->source); })()), "display", [], "any", false, false, false, 32), [0 => "both", 1 => "keys"])) {
                    // line 33
                    if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 33, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 33) === false)) {
                        // line 34
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    } else {
                        // line 36
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 36, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 36) === true)) {
                            // line 37
                            $context["key_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 37, $this->source); })()), "default_translation_domain", [], "any", false, false, false, 37);
                        } elseif ((twig_get_attribute($this->env, $this->source,                         // line 38
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 38, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 38) === null)) {
                            // line 39
                            $context["key_translation_domain"] = null;
                        } else {
                            // line 41
                            $context["key_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 41, $this->source); })()), "key_translation_domain", [], "any", false, false, false, 41);
                        }
                        // line 44
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["key"], [], (isset($context["key_translation_domain"]) || array_key_exists("key_translation_domain", $context) ? $context["key_translation_domain"] : (function () { throw new RuntimeError('Variable "key_translation_domain" does not exist.', 44, $this->source); })())), "html", null, true);
                    }
                }
                // line 48
                if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 48, $this->source); })()), "display", [], "any", false, false, false, 48) == "both")) {
                    // line 49
                    echo "&nbsp;=>&nbsp;";
                }
                // line 52
                if (twig_test_iterable($context["val"])) {
                    // line 53
                    echo twig_call_macro($macros["__internal_602a3dfa421fbb4f7fa5d786923dccc846285f2821fc33b0fc85907129eb517b"], "macro_render_array", [$context["val"], (isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 53, $this->source); })()), (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 53, $this->source); })())], 53, $context, $this->getSourceContext());
                } else {
                    // line 55
                    if (twig_in_filter(twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 55, $this->source); })()), "display", [], "any", false, false, false, 55), [0 => "both", 1 => "values"])) {
                        // line 56
                        if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 56, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 56) === false)) {
                            // line 57
                            echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        } else {
                            // line 59
                            if ((twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 59, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 59) === true)) {
                                // line 60
                                $context["value_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 60, $this->source); })()), "default_translation_domain", [], "any", false, false, false, 60);
                            } elseif ((twig_get_attribute($this->env, $this->source,                             // line 61
(isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 61, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 61) === null)) {
                                // line 62
                                $context["value_translation_domain"] = null;
                            } else {
                                // line 64
                                $context["value_translation_domain"] = twig_get_attribute($this->env, $this->source, (isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new RuntimeError('Variable "options" does not exist.', 64, $this->source); })()), "value_translation_domain", [], "any", false, false, false, 64);
                            }
                            // line 67
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["val"], [], (isset($context["value_translation_domain"]) || array_key_exists("value_translation_domain", $context) ? $context["value_translation_domain"] : (function () { throw new RuntimeError('Variable "value_translation_domain" does not exist.', 67, $this->source); })())), "html", null, true);
                        }
                    }
                }
                // line 72
                if ( !(isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 72, $this->source); })())) {
                    // line 73
                    echo "</li>";
                }
                // line 76
                if ((((isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 76, $this->source); })()) == true) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 76))) {
                    // line 77
                    echo ",
            ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            if ( !(isset($context["inline"]) || array_key_exists("inline", $context) ? $context["inline"] : (function () { throw new RuntimeError('Variable "inline" does not exist.', 81, $this->source); })())) {
                // line 82
                echo "</ul>";
            } else {
                // line 84
                echo "]";
            }
            $___internal_c582875beef9c3b3fab4acf0727df9adbfebd937ea34a1d60e070dadfb2c2385_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 18
            echo twig_spaceless($___internal_c582875beef9c3b3fab4acf0727df9adbfebd937ea34a1d60e070dadfb2c2385_);
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_array_macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 18,  195 => 84,  192 => 82,  190 => 81,  174 => 77,  172 => 76,  169 => 73,  167 => 72,  162 => 67,  159 => 64,  156 => 62,  154 => 61,  152 => 60,  150 => 59,  147 => 57,  145 => 56,  143 => 55,  140 => 53,  138 => 52,  135 => 49,  133 => 48,  129 => 44,  126 => 41,  123 => 39,  121 => 38,  119 => 37,  117 => 36,  114 => 34,  112 => 33,  110 => 32,  107 => 29,  105 => 28,  88 => 27,  85 => 24,  82 => 22,  80 => 21,  78 => 19,  76 => 18,  74 => 17,  72 => 13,  51 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{# NEXT_MAJOR: move inline parameter under options #}
{% macro render_array(value, inline, options = []) %}
    {% set options = {
        'key_translation_domain': false,
        'value_translation_domain': false,
        'display': 'both'
    }|merge(options) %}
    {%- apply spaceless -%}
        {%- from _self import render_array -%}

        {%- if not inline -%}
            <ul>
        {%- else -%}
            [
        {%- endif -%}

        {%- for key, val in value -%}
            {%- if not inline -%}
                <li>
            {%- endif -%}

            {%- if options.display in ['both', 'keys'] -%}
                {%- if options.key_translation_domain is same as(false) -%}
                    {{- key -}}
                {%- else -%}
                    {%- if options.key_translation_domain is same as(true) -%}
                        {%- set key_translation_domain = options.default_translation_domain -%}
                    {%- elseif options.key_translation_domain is same as(null) -%}
                        {%- set key_translation_domain = null -%}
                    {%- else -%}
                        {%- set key_translation_domain = options.key_translation_domain -%}
                    {%- endif -%}

                    {{- key|trans({}, key_translation_domain) -}}
                {%- endif -%}
            {%- endif -%}

            {%- if options.display == 'both' -%}
                &nbsp;=>&nbsp;
            {%- endif -%}

            {%- if val is iterable -%}
                {{ render_array(val, inline, options) }}
            {%- else -%}
                {%- if options.display in ['both', 'values'] -%}
                    {%- if options.value_translation_domain is same as(false) -%}
                        {{ val }}
                    {%- else -%}
                        {%- if options.value_translation_domain is same as(true) -%}
                            {%- set value_translation_domain = options.default_translation_domain -%}
                        {%- elseif options.value_translation_domain is same as(null) -%}
                            {%- set value_translation_domain = null -%}
                        {%- else -%}
                            {%- set value_translation_domain = options.value_translation_domain -%}
                        {%- endif -%}

                        {{- val|trans({}, value_translation_domain) -}}
                    {%- endif -%}
                {%- endif -%}
            {%- endif -%}

            {%- if not inline -%}
                </li>
            {%- endif -%}

            {%- if inline == true and not loop.last -%}
                ,
            {% endif -%}
        {%- endfor -%}

        {%- if not inline -%}
            </ul>
        {%- else -%}
            ]
        {%- endif -%}
    {%- endapply -%}
{% endmacro %}
", "SonataAdminBundle:CRUD:base_array_macro.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_array_macro.html.twig");
    }
}
