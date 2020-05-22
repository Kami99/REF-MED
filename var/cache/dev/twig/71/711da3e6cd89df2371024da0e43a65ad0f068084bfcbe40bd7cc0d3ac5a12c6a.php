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

/* @SonataAdmin/CRUD/base_edit_form.html.twig */
class __TwigTemplate_f2cdd7dfdb727f505444d9c1eb6f9e5f31f1ef17a6bbbd4f9fb16f6e0087f518 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'form' => [$this, 'block_form'],
            'sonata_form_action_url' => [$this, 'block_sonata_form_action_url'],
            'sonata_form_attributes' => [$this, 'block_sonata_form_attributes'],
            'sonata_pre_fieldsets' => [$this, 'block_sonata_pre_fieldsets'],
            'sonata_tab_content' => [$this, 'block_sonata_tab_content'],
            'sonata_post_fieldsets' => [$this, 'block_sonata_post_fieldsets'],
            'formactions' => [$this, 'block_formactions'],
            'sonata_form_actions' => [$this, 'block_sonata_form_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/base_edit_form.html.twig"));

        // line 1
        $this->displayBlock('form', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form"));

        // line 2
        echo "    ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.top", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 2, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 2, $this->source); })())]]);
        echo "

    ";
        // line 5
        echo "    ";
        $context["url"] = (( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 5, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 5, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 5, $this->source); })())], "method", false, false, false, 5))) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 5, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 5, $this->source); })())], "method", false, false, false, 5))))) ? ("edit") : ("create"));
        // line 6
        echo "
    ";
        // line 7
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 7, $this->source); })()), "hasRoute", [0 => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 7, $this->source); })())], "method", false, false, false, 7)) {
            // line 8
            echo "        <div>
            ";
            // line 9
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_not_available", [], "SonataAdminBundle"), "html", null, true);
            echo "
        </div>
    ";
        } else {
            // line 12
            echo "        <form
              ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 13, $this->source); })()), "adminPool", [], "any", false, false, false, 13), "getOption", [0 => "form_type"], "method", false, false, false, 13) == "horizontal")) {
                echo "class=\"form-horizontal\"";
            }
            // line 14
            echo "              role=\"form\"
              ";
            // line 16
            echo "              action=\"";
            $this->displayBlock('sonata_form_action_url', $context, $blocks);
            echo "\"
              ";
            // line 17
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "multipart", [], "any", false, false, false, 17)) {
                echo " enctype=\"multipart/form-data\"";
            }
            // line 18
            echo "              method=\"POST\"
              ";
            // line 19
            if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sonata_admin"]) || array_key_exists("sonata_admin", $context) ? $context["sonata_admin"] : (function () { throw new RuntimeError('Variable "sonata_admin" does not exist.', 19, $this->source); })()), "adminPool", [], "any", false, false, false, 19), "getOption", [0 => "html5_validate"], "method", false, false, false, 19)) {
                echo "novalidate=\"novalidate\"";
            }
            // line 20
            echo "              ";
            $this->displayBlock('sonata_form_attributes', $context, $blocks);
            // line 21
            echo "              >

            ";
            // line 23
            echo twig_include($this->env, $context, "@SonataAdmin/Helper/render_form_dismissable_errors.html.twig");
            echo "

            ";
            // line 25
            $this->displayBlock('sonata_pre_fieldsets', $context, $blocks);
            // line 28
            echo "
            ";
            // line 29
            $this->displayBlock('sonata_tab_content', $context, $blocks);
            // line 78
            echo "
            ";
            // line 79
            $this->displayBlock('sonata_post_fieldsets', $context, $blocks);
            // line 82
            echo "
            ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'rest');
            echo "

            ";
            // line 85
            $this->displayBlock('formactions', $context, $blocks);
            // line 137
            echo "        </form>
    ";
        }
        // line 139
        echo "
    ";
        // line 140
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), ["sonata.admin.edit.form.bottom", ["admin" => (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 140, $this->source); })()), "object" => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 140, $this->source); })())]]);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_sonata_form_action_url($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_action_url"));

        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 16, $this->source); })()), "generateUrl", [0 => (isset($context["url"]) || array_key_exists("url", $context) ? $context["url"] : (function () { throw new RuntimeError('Variable "url" does not exist.', 16, $this->source); })()), 1 => ["id" => (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 16, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 16, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 16, $this->source); })())], "method", false, false, false, 16))) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 16, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 16, $this->source); })())], "method", false, false, false, 16))), "uniqid" => twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 16, $this->source); })()), "uniqid", [], "any", false, false, false, 16), "subclass" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "get", [0 => "subclass"], "method", false, false, false, 16)]], "method", false, false, false, 16), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_sonata_form_attributes($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_attributes"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_sonata_pre_fieldsets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_pre_fieldsets"));

        // line 26
        echo "                <div class=\"row\">
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 29
    public function block_sonata_tab_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_tab_content"));

        // line 30
        echo "                ";
        $macros["form_helper"] = $this->loadTemplate("@SonataAdmin/CRUD/base_edit_form_macro.html.twig", "@SonataAdmin/CRUD/base_edit_form.html.twig", 30)->unwrap();
        // line 31
        echo "                ";
        // line 32
        echo "                ";
        $context["formtabs"] = twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 32, $this->source); })()), "getformtabs", [0 => "sonata_deprecation_mute"], "method", false, false, false, 32);
        // line 33
        echo "                ";
        $context["has_tab"] = (((twig_length_filter($this->env, (isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 33, $this->source); })())) == 1) && (twig_get_attribute($this->env, $this->source, twig_get_array_keys_filter((isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 33, $this->source); })())), 0, [], "array", false, false, false, 33) != "default")) || (twig_length_filter($this->env, (isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 33, $this->source); })())) > 1));
        // line 34
        echo "
                <div class=\"col-md-12\">
                    ";
        // line 36
        if ((isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 36, $this->source); })())) {
            // line 37
            echo "                        ";
            $context["tab_prefix"] = ((("tab_" . twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 37, $this->source); })()), "uniqid", [], "any", false, false, false, 37)) . "_") . twig_random($this->env));
            // line 38
            echo "                        ";
            $context["tab_query_index"] = twig_last($this->env, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "get", [0 => "_tab", 1 => 0], "method", false, false, false, 38), "_"));
            // line 39
            echo "                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 41, $this->source); })()));
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
            foreach ($context['_seq'] as $context["name"] => $context["form_tab"]) {
                // line 42
                echo "                                    ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 42, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 42));
                // line 43
                echo "                                    <li";
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "query", [], "any", false, false, false, 43), "has", [0 => "_tab"], "method", false, false, false, 43) && (twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43) == 1)) || ((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 43, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 43)))) {
                    echo " class=\"active\"";
                }
                echo ">
                                        <a href=\"#";
                // line 44
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 44, $this->source); })()), "html", null, true);
                echo "\" class=\"changer-tab\" aria-controls=\"";
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 44, $this->source); })()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                            <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> ";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "label", [], "any", false, false, false, 45), [], ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 45)) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 45)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 45, $this->source); })()), "translationDomain", [], "any", false, false, false, 45)))), "html", null, true);
                echo "
                                        </a>
                                    </li>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                            </ul>
                            <div class=\"tab-content\">
                                ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 51, $this->source); })()));
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
            foreach ($context['_seq'] as $context["code"] => $context["form_tab"]) {
                // line 52
                echo "                                    ";
                $context["_tab_name"] = (((isset($context["tab_prefix"]) || array_key_exists("tab_prefix", $context) ? $context["tab_prefix"] : (function () { throw new RuntimeError('Variable "tab_prefix" does not exist.', 52, $this->source); })()) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 52));
                // line 53
                echo "                                    <div
                                        class=\"tab-pane fade";
                // line 54
                if ((( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "query", [], "any", false, false, false, 54), "has", [0 => "_tab"], "method", false, false, false, 54) && twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 54)) || ((isset($context["tab_query_index"]) || array_key_exists("tab_query_index", $context) ? $context["tab_query_index"] : (function () { throw new RuntimeError('Variable "tab_query_index" does not exist.', 54, $this->source); })()) == twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 54)))) {
                    echo " in active";
                }
                echo "\"
                                        id=\"";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["_tab_name"]) || array_key_exists("_tab_name", $context) ? $context["_tab_name"] : (function () { throw new RuntimeError('Variable "_tab_name" does not exist.', 55, $this->source); })()), "html", null, true);
                echo "\"
                                    >
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                ";
                // line 59
                if ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", [], "any", false, false, false, 59) != false)) {
                    // line 60
                    echo "                                                    <p>
                                                        ";
                    // line 61
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["form_tab"], "description", [], "any", false, false, false, 61), [], ((twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 61)) ? (twig_get_attribute($this->env, $this->source, $context["form_tab"], "translation_domain", [], "any", false, false, false, 61)) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 61, $this->source); })()), "translationDomain", [], "any", false, false, false, 61))));
                    echo "
                                                    </p>
                                                ";
                }
                // line 64
                echo "
                                                ";
                // line 65
                echo twig_call_macro($macros["form_helper"], "macro_render_groups", [(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 65, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["form_tab"], "groups", [], "array", false, false, false, 65), (isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 65, $this->source); })())], 65, $context, $this->getSourceContext());
                echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['form_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "                            </div>
                            <input type=\"hidden\" name=\"_tab\" value=\"";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "request", [], "any", false, false, false, 71), "query", [], "any", false, false, false, 71), "get", [0 => "_tab"], "method", false, false, false, 71), "html", null, true);
            echo "\">
                        </div>
                    ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 73
($context["formtabs"] ?? null), "default", [], "array", true, true, false, 73)) {
            // line 74
            echo "                        ";
            echo twig_call_macro($macros["form_helper"], "macro_render_groups", [(isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 74, $this->source); })()), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["formtabs"]) || array_key_exists("formtabs", $context) ? $context["formtabs"] : (function () { throw new RuntimeError('Variable "formtabs" does not exist.', 74, $this->source); })()), "default", [], "array", false, false, false, 74), "groups", [], "any", false, false, false, 74), (isset($context["has_tab"]) || array_key_exists("has_tab", $context) ? $context["has_tab"] : (function () { throw new RuntimeError('Variable "has_tab" does not exist.', 74, $this->source); })())], 74, $context, $this->getSourceContext());
            echo "
                    ";
        }
        // line 76
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_sonata_post_fieldsets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_post_fieldsets"));

        // line 80
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_formactions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "formactions"));

        // line 86
        echo "                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                ";
        // line 87
        $this->displayBlock('sonata_form_actions', $context, $blocks);
        // line 135
        echo "                </div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_sonata_form_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sonata_form_actions"));

        // line 88
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "request", [], "any", false, false, false, 88), "isxmlhttprequest", [], "any", false, false, false, 88)) {
            // line 89
            echo "                        ";
            // line 90
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 90, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 90, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 90, $this->source); })())], "method", false, false, false, 90))) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 90, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 90, $this->source); })())], "method", false, false, false, 90))))) {
                // line 91
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                            ";
                // line 92
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 92, $this->source); })()), "hasRoute", [0 => "delete"], "method", false, false, false, 92) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 92, $this->source); })()), "hasAccess", [0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 92, $this->source); })())], "method", false, false, false, 92))) {
                    // line 93
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 94
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 94, $this->source); })()), "generateObjectUrl", [0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 94, $this->source); })())], "method", false, false, false, 94), "html", null, true);
                    echo "\">
                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                </a>
                            ";
                }
                // line 98
                echo "                        ";
            } else {
                // line 99
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 101
            echo "                    ";
        } else {
            // line 102
            echo "                        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 102, $this->source); })()), "supportsPreviewMode", [], "any", false, false, false, 102)) {
                // line 103
                echo "                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                ";
                // line 105
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_preview", [], "SonataAdminBundle"), "html", null, true);
                echo "
                            </button>
                        ";
            }
            // line 108
            echo "                        ";
            // line 109
            echo "                        ";
            if ( !(null === (((isset($context["objectId"]) || array_key_exists("objectId", $context))) ? (_twig_default_filter((isset($context["objectId"]) || array_key_exists("objectId", $context) ? $context["objectId"] : (function () { throw new RuntimeError('Variable "objectId" does not exist.', 109, $this->source); })()), twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 109, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 109, $this->source); })())], "method", false, false, false, 109))) : (twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 109, $this->source); })()), "id", [0 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 109, $this->source); })())], "method", false, false, false, 109))))) {
                // line 110
                echo "                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>

                            ";
                // line 112
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 112, $this->source); })()), "hasRoute", [0 => "list"], "method", false, false, false, 112) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 112, $this->source); })()), "hasAccess", [0 => "list"], "method", false, false, false, 112))) {
                    // line 113
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_update_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 115
                echo "
                            ";
                // line 116
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 116, $this->source); })()), "hasRoute", [0 => "delete"], "method", false, false, false, 116) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 116, $this->source); })()), "hasAccess", [0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 116, $this->source); })())], "method", false, false, false, 116))) {
                    // line 117
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("delete_or", [], "SonataAdminBundle"), "html", null, true);
                    echo "
                                <a class=\"btn btn-danger\" href=\"";
                    // line 118
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 118, $this->source); })()), "generateObjectUrl", [0 => "delete", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 118, $this->source); })())], "method", false, false, false, 118), "html", null, true);
                    echo "\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_delete", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 120
                echo "
                            ";
                // line 121
                if (((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 121, $this->source); })()), "isAclEnabled", [], "method", false, false, false, 121) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 121, $this->source); })()), "hasRoute", [0 => "acl"], "method", false, false, false, 121)) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 121, $this->source); })()), "hasAccess", [0 => "acl", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 121, $this->source); })())], "method", false, false, false, 121))) {
                    // line 122
                    echo "                                <a class=\"btn btn-info\" href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 122, $this->source); })()), "generateObjectUrl", [0 => "acl", 1 => (isset($context["object"]) || array_key_exists("object", $context) ? $context["object"] : (function () { throw new RuntimeError('Variable "object" does not exist.', 122, $this->source); })())], "method", false, false, false, 122), "html", null, true);
                    echo "\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("link_edit_acl", [], "SonataAdminBundle"), "html", null, true);
                    echo "</a>
                            ";
                }
                // line 124
                echo "                        ";
            } else {
                // line 125
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 125, $this->source); })()), "hasroute", [0 => "edit"], "method", false, false, false, 125) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 125, $this->source); })()), "hasAccess", [0 => "edit"], "method", false, false, false, 125))) {
                    // line 126
                    echo "                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_edit_again", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 128
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "hasroute", [0 => "list"], "method", false, false, false, 128) && twig_get_attribute($this->env, $this->source, (isset($context["admin"]) || array_key_exists("admin", $context) ? $context["admin"] : (function () { throw new RuntimeError('Variable "admin" does not exist.', 128, $this->source); })()), "hasAccess", [0 => "list"], "method", false, false, false, 128))) {
                    // line 129
                    echo "                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> ";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_return_to_list", [], "SonataAdminBundle"), "html", null, true);
                    echo "</button>
                            ";
                }
                // line 131
                echo "                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("btn_create_and_create_a_new_one", [], "SonataAdminBundle"), "html", null, true);
                echo "</button>
                        ";
            }
            // line 133
            echo "                    ";
        }
        // line 134
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/base_edit_form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  610 => 134,  607 => 133,  601 => 131,  595 => 129,  592 => 128,  586 => 126,  583 => 125,  580 => 124,  572 => 122,  570 => 121,  567 => 120,  560 => 118,  555 => 117,  553 => 116,  550 => 115,  544 => 113,  542 => 112,  536 => 110,  533 => 109,  531 => 108,  525 => 105,  521 => 103,  518 => 102,  515 => 101,  509 => 99,  506 => 98,  500 => 95,  496 => 94,  491 => 93,  489 => 92,  484 => 91,  481 => 90,  479 => 89,  476 => 88,  466 => 87,  455 => 135,  453 => 87,  450 => 86,  440 => 85,  429 => 80,  419 => 79,  408 => 76,  402 => 74,  400 => 73,  395 => 71,  392 => 70,  373 => 65,  370 => 64,  364 => 61,  361 => 60,  359 => 59,  352 => 55,  346 => 54,  343 => 53,  340 => 52,  323 => 51,  319 => 49,  301 => 45,  295 => 44,  288 => 43,  285 => 42,  268 => 41,  264 => 39,  261 => 38,  258 => 37,  256 => 36,  252 => 34,  249 => 33,  246 => 32,  244 => 31,  241 => 30,  231 => 29,  220 => 26,  210 => 25,  192 => 20,  173 => 16,  160 => 140,  157 => 139,  153 => 137,  151 => 85,  146 => 83,  143 => 82,  141 => 79,  138 => 78,  136 => 29,  133 => 28,  131 => 25,  126 => 23,  122 => 21,  119 => 20,  115 => 19,  112 => 18,  108 => 17,  103 => 16,  100 => 14,  96 => 13,  93 => 12,  87 => 9,  84 => 8,  82 => 7,  79 => 6,  76 => 5,  70 => 2,  51 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block form %}
    {{ sonata_block_render_event('sonata.admin.edit.form.top', { 'admin': admin, 'object': object }) }}

    {# NEXT_MAJOR: remove default filter #}
    {% set url = objectId|default(admin.id(object)) is not null ? 'edit' : 'create' %}

    {% if not admin.hasRoute(url) %}
        <div>
            {{ \"form_not_available\"|trans({}, \"SonataAdminBundle\") }}
        </div>
    {% else %}
        <form
              {% if sonata_admin.adminPool.getOption('form_type') == 'horizontal' %}class=\"form-horizontal\"{% endif %}
              role=\"form\"
              {# NEXT_MAJOR: remove default filter #}
              action=\"{% block sonata_form_action_url %}{{ admin.generateUrl(url, {'id': objectId|default(admin.id(object)), 'uniqid': admin.uniqid, 'subclass': app.request.get('subclass')}) }}{% endblock %}\"
              {% if form.vars.multipart %} enctype=\"multipart/form-data\"{% endif %}
              method=\"POST\"
              {% if not sonata_admin.adminPool.getOption('html5_validate') %}novalidate=\"novalidate\"{% endif %}
              {% block sonata_form_attributes %}{% endblock %}
              >

            {{ include('@SonataAdmin/Helper/render_form_dismissable_errors.html.twig') }}

            {% block sonata_pre_fieldsets %}
                <div class=\"row\">
            {% endblock %}

            {% block sonata_tab_content %}
                {% import \"@SonataAdmin/CRUD/base_edit_form_macro.html.twig\" as form_helper %}
                {# NEXT_MAJOR: Remove the sonata_deprecation_mute param. #}
                {% set formtabs = admin.getformtabs('sonata_deprecation_mute') %}
                {% set has_tab = ((formtabs|length == 1 and formtabs|keys[0] != 'default') or formtabs|length > 1 ) %}

                <div class=\"col-md-12\">
                    {% if has_tab %}
                        {% set tab_prefix = 'tab_' ~ admin.uniqid ~ '_' ~ random() %}
                        {% set tab_query_index = app.request.query.get('_tab', 0)|split(\"_\")|last %}
                        <div class=\"nav-tabs-custom\">
                            <ul class=\"nav nav-tabs\" role=\"tablist\">
                                {% for name, form_tab in formtabs %}
                                    {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                                    <li{% if (not app.request.query.has('_tab') and loop.index == 1) or (tab_query_index == loop.index) %} class=\"active\"{% endif %}>
                                        <a href=\"#{{ _tab_name }}\" class=\"changer-tab\" aria-controls=\"{{ _tab_name }}\" data-toggle=\"tab\">
                                            <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i> {{ form_tab.label|trans({}, form_tab.translation_domain ?: admin.translationDomain) }}
                                        </a>
                                    </li>
                                {% endfor %}
                            </ul>
                            <div class=\"tab-content\">
                                {% for code, form_tab in formtabs %}
                                    {% set _tab_name = tab_prefix ~ '_' ~ loop.index %}
                                    <div
                                        class=\"tab-pane fade{% if (not app.request.query.has('_tab') and loop.first) or (tab_query_index == loop.index) %} in active{% endif %}\"
                                        id=\"{{ _tab_name }}\"
                                    >
                                        <div class=\"box-body  container-fluid\">
                                            <div class=\"sonata-ba-collapsed-fields\">
                                                {% if form_tab.description != false %}
                                                    <p>
                                                        {{ form_tab.description|trans({}, form_tab.translation_domain ?: admin.translationDomain)|raw }}
                                                    </p>
                                                {% endif %}

                                                {{ form_helper.render_groups(admin, form, form_tab['groups'], has_tab) }}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}
                            </div>
                            <input type=\"hidden\" name=\"_tab\" value=\"{{ app.request.query.get('_tab') }}\">
                        </div>
                    {% elseif formtabs['default'] is defined %}
                        {{ form_helper.render_groups(admin, form, formtabs['default'].groups, has_tab) }}
                    {% endif %}
                </div>
            {% endblock %}

            {% block sonata_post_fieldsets %}
                </div>
            {% endblock %}

            {{ form_rest(form) }}

            {% block formactions %}
                <div class=\"sonata-ba-form-actions well well-small form-actions\">
                {% block sonata_form_actions %}
                    {% if app.request.isxmlhttprequest %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update'|trans({}, 'SonataAdminBundle') }}</button>
                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\">
                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}
                                </a>
                            {% endif %}
                        {% else %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% else %}
                        {% if admin.supportsPreviewMode %}
                            <button class=\"btn btn-info persist-preview\" name=\"btn_preview\" type=\"submit\">
                                <i class=\"fa fa-eye\" aria-hidden=\"true\"></i>
                                {{ 'btn_preview'|trans({}, 'SonataAdminBundle') }}
                            </button>
                        {% endif %}
                        {# NEXT_MAJOR: remove default filter #}
                        {% if objectId|default(admin.id(object)) is not null %}
                            <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_update_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>

                            {% if admin.hasRoute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_update_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_update_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}

                            {% if admin.hasRoute('delete') and admin.hasAccess('delete', object) %}
                                {{ 'delete_or'|trans({}, 'SonataAdminBundle') }}
                                <a class=\"btn btn-danger\" href=\"{{ admin.generateObjectUrl('delete', object) }}\"><i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i> {{ 'link_delete'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}

                            {% if admin.isAclEnabled() and admin.hasRoute('acl') and admin.hasAccess('acl', object) %}
                                <a class=\"btn btn-info\" href=\"{{ admin.generateObjectUrl('acl', object) }}\"><i class=\"fa fa-users\" aria-hidden=\"true\"></i> {{ 'link_edit_acl'|trans({}, 'SonataAdminBundle') }}</a>
                            {% endif %}
                        {% else %}
                            {% if admin.hasroute('edit') and admin.hasAccess('edit') %}
                                <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_edit\"><i class=\"fa fa-save\" aria-hidden=\"true\"></i> {{ 'btn_create_and_edit_again'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            {% if admin.hasroute('list') and admin.hasAccess('list') %}
                                <button type=\"submit\" class=\"btn btn-success\" name=\"btn_create_and_list\"><i class=\"fa fa-save\"></i> <i class=\"fa fa-list\" aria-hidden=\"true\"></i> {{ 'btn_create_and_return_to_list'|trans({}, 'SonataAdminBundle') }}</button>
                            {% endif %}
                            <button class=\"btn btn-success\" type=\"submit\" name=\"btn_create_and_create\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> {{ 'btn_create_and_create_a_new_one'|trans({}, 'SonataAdminBundle') }}</button>
                        {% endif %}
                    {% endif %}
                {% endblock %}
                </div>
            {% endblock formactions %}
        </form>
    {% endif %}

    {{ sonata_block_render_event('sonata.admin.edit.form.bottom', { 'admin': admin, 'object': object }) }}

{% endblock %}
", "@SonataAdmin/CRUD/base_edit_form.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\vendor\\sonata-project\\admin-bundle\\src\\Resources\\views\\CRUD\\base_edit_form.html.twig");
    }
}
