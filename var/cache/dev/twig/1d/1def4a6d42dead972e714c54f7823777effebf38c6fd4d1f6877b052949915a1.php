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

/* show_account/show_account_doctor.html.twig */
class __TwigTemplate_e91c28dfb37ec7765ab72dee255be656786edfc7756f58f6ad21014fc661a382 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'addStyleSheets' => [$this, 'block_addStyleSheets'],
            'header_picture' => [$this, 'block_header_picture'],
            'picture' => [$this, 'block_picture'],
            'entityName' => [$this, 'block_entityName'],
            'numberPhone' => [$this, 'block_numberPhone'],
            'expertiseInfo' => [$this, 'block_expertiseInfo'],
            'linksSocial' => [$this, 'block_linksSocial'],
            'input' => [$this, 'block_input'],
            'liName' => [$this, 'block_liName'],
            'content' => [$this, 'block_content'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "show_account/main_account_show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_account/show_account_doctor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_account/show_account_doctor.html.twig"));

        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["doctor"] ?? null), "doctorSocialNetworks", [], "any", true, true, false, 24)) {
        }
        // line 1
        $this->parent = $this->loadTemplate("show_account/main_account_show.html.twig", "show_account/show_account_doctor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_addStyleSheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        // line 3
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/css/bootstrap4/select-default.css"), "html", null, true);
        echo "\">
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet/leaflet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_header_picture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_picture"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_picture"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/doctor-header.jpg"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_picture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "picture"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "picture"));

        // line 8
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 8, $this->source); })()), "pictureProfil", [], "any", false, false, false, 8)) {
            echo "             
              ";
        } else {
            // line 10
            echo "              <img class=\"photo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/notImageProfile.png"), "html", null, true);
            echo "\" 
               alt=\"Profile image not available\">
              ";
        }
        // line 13
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_entityName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entityName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entityName"));

        // line 15
        echo "            <h4 class=\"name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 15, $this->source); })()), "fullName", [], "any", false, false, false, 15), "html", null, true);
        echo "</h4>
            <p class=\"info\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 16, $this->source); })()), "profession", [], "any", false, false, false, 16), "html", null, true);
        echo "</p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_numberPhone($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "numberPhone"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "numberPhone"));

        // line 19
        echo "                <p class=\"number-stat\">";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 19, $this->source); })()), "numberPhone", [], "any", false, false, false, 19), ["-" => " "]), "html", null, true);
        echo " </p>  
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_expertiseInfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "expertiseInfo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "expertiseInfo"));

        echo "<span class=\"info-titre\">Domaines d'Expertise</span>          
                <p class=\"desc\">";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 22, $this->source); })()), "expertise", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
            echo "<span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["expertise"], "expertiseName", [], "any", false, false, false, 22), "html", null, true);
            echo " </span> ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expertise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                <div class=\"social\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_linksSocial($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        // line 26
        echo "              
              ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 27, $this->source); })()), "doctorSocialNetworks", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["socialLinks"]) {
            // line 28
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 28), "socialName", [], "any", false, false, false, 28)) == "facebook")) {
                // line 29
                echo "             <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 31
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 31), "socialName", [], "any", false, false, false, 31)) == "twitter")) {
                // line 32
                echo "             <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\"> <i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 34
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 34), "socialName", [], "any", false, false, false, 34)) == "linkedin")) {
                // line 35
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 37
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 37), "socialName", [], "any", false, false, false, 37)) == "google+")) {
                // line 38
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\">  <i class=\"fa fa-google-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 40
            echo "                
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialLinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 47
        echo "              <input type=\"radio\" id=\"tab-profile1\" name=\"tab-profile-control\" checked>
              <input type=\"radio\" id=\"tab-profile2\" name=\"tab-profile-control\">
              <input type=\"radio\" id=\"tab-profile3\" name=\"tab-profile-control\">    
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 51
    public function block_liName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        // line 52
        echo "                  <li title=\"Presentation\"><label for=\"tab-profile1\" role=\"button\"><i class=\"fa fa-book\"></i><br><span>Presentation</span></label></li>
                  <li title=\"Informations\"><label for=\"tab-profile2\" role=\"button\"><i class=\"fa fa-info-circle\"></i> <br><span>Informations</span></label></li>
                  <li title=\"Carte\"><label for=\"tab-profile3\" role=\"button\"> <i class=\"fa fa-map\"></i> <br><span>Carte</span></label></li> 
                  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".modal\" class=\"primary\">
                    Prendre RDV
                </button>
                <div id=\"my-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"my-modal-title\" aria-hidden=\"true\" style=\"height: 100%;\">
                  <div class=\"modal-dialog modal-dialog-scrollable modal-lg\" role=\"document\">
                    <div class=\"modal-content appoint-background\">
                      <div class=\"modal-body\">
                        <div class=\"container-fluid p-5\">
                        ";
        // line 63
        $this->loadTemplate("includeApp/_form_appoint.html.twig", "show_account/show_account_doctor.html.twig", 63)->display($context);
        // line 64
        echo "                        </div>
                    </div>
                  </div>
                </div>
                </div>
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 71
        echo "                  <section>
                      ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 72, $this->source); })()), "presentation", [], "any", false, false, false, 72), "html", null, true);
        echo "
                    </section>
                        <section>
                           <p> <span class=\"info-titre\">Tarifs</span> : ";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 75, $this->source); })()), "fullTarif", [], "any", false, false, false, 75), "html", null, true);
        echo "</p>
                          <p>  <span class=\"info-titre\">Langue Parlées</span>: ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 76, $this->source); })()), "language", [], "any", false, false, false, 76));
        foreach ($context['_seq'] as $context["_key"] => $context["langue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["langue"], "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['langue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                          <p> <span class=\"info-titre\">Paiement accèptés </span>: ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 77, $this->source); })()), "meansPayment", [], "any", false, false, false, 77));
        foreach ($context['_seq'] as $context["_key"] => $context["means"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["means"], "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['means'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                          <p> <span class=\"info-titre\">Moyens d'accès</span> :  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 78, $this->source); })()), "praticalInfos", [], "any", false, false, false, 78));
        foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["info"], "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['info'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                          <p> <span class=\"info-titre\">Remboursement(s) accèpté(s)</span> : ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 79, $this->source); })()), "refund", [], "any", false, false, false, 79));
        foreach ($context['_seq'] as $context["_key"] => $context["refund"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["refund"], "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refund'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                          </section>
                        <section class=\"container\">
                          <div id=\"map\" class=\"show-map\" data-lat=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 82, $this->source); })()), "location", [], "any", false, false, false, 82), "latitude", [], "any", false, false, false, 82), "html", null, true);
        echo "\" data-nameLocation=\" ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 82, $this->source); })()), "fullName", [], "any", false, false, false, 82), "html", null, true);
        echo "  A  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 82, $this->source); })()), "location", [], "any", false, false, false, 82), "nameLocation", [], "any", false, false, false, 82), "html", null, true);
        echo " \" data-lon=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 82, $this->source); })()), "location", [], "any", false, false, false, 82), "longitude", [], "any", false, false, false, 82), "html", null, true);
        echo "\" class=\"col-12\"></div>
                          <div class=\"col-12 mt-15\" id=\"calendar-holder\"></div>
                          </section>
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 86
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 87
        echo "
";
        // line 88
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/js/select-full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet.js"), "html", null, true);
        echo "\"></script>
<script>
    let lat =document.querySelector('[data-lat]')
    let lon =document.querySelector('[data-lon]')
    let nameLocation=document.querySelector('[data-nameLocation]')

    window.onload=()=>{
        lat=lat.dataset.lat
        lon=lon.dataset.lon
        name=nameLocation.dataset.namelocation

        myMap = L.map('map').setView([lat, lon], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>/ODbl -rendu  <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>',
    minZoom: 10,
    maxZoom: 20,

}).addTo(myMap);    
let doctorIcon = L.icon({
    iconUrl: \"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/mainRefMed/doctor.png"), "html", null, true);
        echo "\",
    iconSize:     [35, 50], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -90] // point from which the popup should open relative to the iconAnchor
});
myMap.panTo([lat, lon])
    let marker = L.marker([lat, lon],  {icon: doctorIcon}).addTo(myMap)
    marker.bindPopup(name)
}
    

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "show_account/show_account_doctor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 109,  485 => 90,  481 => 89,  477 => 88,  474 => 87,  464 => 86,  444 => 82,  429 => 79,  416 => 78,  403 => 77,  390 => 76,  386 => 75,  380 => 72,  377 => 71,  367 => 70,  352 => 64,  350 => 63,  337 => 52,  327 => 51,  314 => 47,  304 => 46,  294 => 42,  287 => 40,  281 => 38,  278 => 37,  272 => 35,  269 => 34,  263 => 32,  260 => 31,  254 => 29,  251 => 28,  247 => 27,  244 => 26,  234 => 25,  213 => 22,  201 => 21,  188 => 19,  178 => 18,  166 => 16,  161 => 15,  151 => 14,  141 => 13,  134 => 10,  128 => 8,  118 => 7,  99 => 6,  87 => 4,  82 => 3,  72 => 2,  61 => 1,  58 => 24,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"show_account/main_account_show.html.twig\" %}
{%block addStyleSheets%}
\t<link rel=\"stylesheet\" href=\"{{asset('bower_components/tail/css/bootstrap4/select-default.css')}}\">
\t<link href=\"{{asset('bower_components/js/leaflet/leaflet.css')}}\" rel=\"stylesheet\">
{%endblock %}
{% block header_picture %}{{asset('bower_components/images/doctor-header.jpg') }}{% endblock %}
              {% block picture %}
              {% if doctor.pictureProfil %}             
              {% else %}
              <img class=\"photo\" src=\"{{asset('bower_components/images/notImageProfile.png') }}\" 
               alt=\"Profile image not available\">
              {% endif %}
              {% endblock %}
            {% block entityName %}
            <h4 class=\"name\">{{doctor.fullName}}</h4>
            <p class=\"info\">{{doctor.profession}}</p>
            {% endblock entityName %}
                {% block numberPhone %}
                <p class=\"number-stat\">{{doctor.numberPhone|replace({'-':' ' }) }} </p>  
                {% endblock numberPhone %}
                {% block expertiseInfo %}<span class=\"info-titre\">Domaines d'Expertise</span>          
                <p class=\"desc\">{% for expertise in doctor.expertise %}<span class=\"badge badge-primary\">{{expertise.expertiseName}} </span> {% endfor %}</p>
                <div class=\"social\">{% endblock %}
              {% if doctor.doctorSocialNetworks is defined %}
              {% block linksSocial %}
              
              {% for socialLinks in doctor.doctorSocialNetworks %}
              {% if socialLinks.socialNetworks.socialName|lower == \"facebook\" %}
             <a href=\"{{socialLinks}}\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a> 
              {% endif %}
              {% if socialLinks.socialNetworks.socialName|lower == \"twitter\" %}
             <a href=\"{{socialLinks}}\"> <i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a> 
              {% endif %}
              {% if socialLinks.socialNetworks.socialName|lower == \"linkedin\" %}
              <a href=\"{{socialLinks}}\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a> 
              {% endif %}
              {% if socialLinks.socialNetworks.socialName|lower == \"google+\" %}
            <a href=\"{{socialLinks}}\">  <i class=\"fa fa-google-square\" aria-hidden=\"true\"></i></a> 
              {% endif %}
                
              {% endfor %}
              {% endblock %}
              {% else %}
              {% endif %}
                
              {% block input %}
              <input type=\"radio\" id=\"tab-profile1\" name=\"tab-profile-control\" checked>
              <input type=\"radio\" id=\"tab-profile2\" name=\"tab-profile-control\">
              <input type=\"radio\" id=\"tab-profile3\" name=\"tab-profile-control\">    
              {% endblock %}         
                  {% block liName %}
                  <li title=\"Presentation\"><label for=\"tab-profile1\" role=\"button\"><i class=\"fa fa-book\"></i><br><span>Presentation</span></label></li>
                  <li title=\"Informations\"><label for=\"tab-profile2\" role=\"button\"><i class=\"fa fa-info-circle\"></i> <br><span>Informations</span></label></li>
                  <li title=\"Carte\"><label for=\"tab-profile3\" role=\"button\"> <i class=\"fa fa-map\"></i> <br><span>Carte</span></label></li> 
                  <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".modal\" class=\"primary\">
                    Prendre RDV
                </button>
                <div id=\"my-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"my-modal-title\" aria-hidden=\"true\" style=\"height: 100%;\">
                  <div class=\"modal-dialog modal-dialog-scrollable modal-lg\" role=\"document\">
                    <div class=\"modal-content appoint-background\">
                      <div class=\"modal-body\">
                        <div class=\"container-fluid p-5\">
                        {% include \"includeApp/_form_appoint.html.twig\" %}
                        </div>
                    </div>
                  </div>
                </div>
                </div>
                  {% endblock %}
                  {% block content %}
                  <section>
                      {{doctor.presentation}}
                    </section>
                        <section>
                           <p> <span class=\"info-titre\">Tarifs</span> : {{doctor.fullTarif}}</p>
                          <p>  <span class=\"info-titre\">Langue Parlées</span>: {% for langue in doctor.language %} {{langue}} {% endfor %}</p>
                          <p> <span class=\"info-titre\">Paiement accèptés </span>: {% for means in doctor.meansPayment %} {{means}} {% endfor %}</p>
                          <p> <span class=\"info-titre\">Moyens d'accès</span> :  {% for info in doctor.praticalInfos %} {{info}} {% endfor %}</p>
                          <p> <span class=\"info-titre\">Remboursement(s) accèpté(s)</span> : {% for refund in doctor.refund %} {{refund}} {% endfor %}</p>
                          </section>
                        <section class=\"container\">
                          <div id=\"map\" class=\"show-map\" data-lat=\"{{doctor.location.latitude}}\" data-nameLocation=\" {{doctor.fullName}}  A  {{doctor.location.nameLocation}} \" data-lon=\"{{doctor.location.longitude}}\" class=\"col-12\"></div>
                          <div class=\"col-12 mt-15\" id=\"calendar-holder\"></div>
                          </section>
                  {% endblock %}
 {% block javascripts %}

{{ parent() }}
\t\t<script src=\"{{asset('bower_components/tail/js/select-full.min.js')}}\"></script>
<script src=\"{{asset('bower_components/js/leaflet.js')}}\"></script>
<script>
    let lat =document.querySelector('[data-lat]')
    let lon =document.querySelector('[data-lon]')
    let nameLocation=document.querySelector('[data-nameLocation]')

    window.onload=()=>{
        lat=lat.dataset.lat
        lon=lon.dataset.lon
        name=nameLocation.dataset.namelocation

        myMap = L.map('map').setView([lat, lon], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>/ODbl -rendu  <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>',
    minZoom: 10,
    maxZoom: 20,

}).addTo(myMap);    
let doctorIcon = L.icon({
    iconUrl: \"{{asset('bower_components/mainRefMed/doctor.png')}}\",
    iconSize:     [35, 50], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -90] // point from which the popup should open relative to the iconAnchor
});
myMap.panTo([lat, lon])
    let marker = L.marker([lat, lon],  {icon: doctorIcon}).addTo(myMap)
    marker.bindPopup(name)
}
    

</script>
{% endblock %}
", "show_account/show_account_doctor.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\show_account\\show_account_doctor.html.twig");
    }
}
