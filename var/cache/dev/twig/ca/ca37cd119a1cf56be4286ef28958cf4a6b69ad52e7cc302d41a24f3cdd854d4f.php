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
class __TwigTemplate_236109153ac90d4dd57633692397f458863cbdc687fdeb577d729f36534930b4 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header_picture' => [$this, 'block_header_picture'],
            'picture' => [$this, 'block_picture'],
            'entityName' => [$this, 'block_entityName'],
            'numberPhone' => [$this, 'block_numberPhone'],
            'expertiseInfo' => [$this, 'block_expertiseInfo'],
            'linksSocial' => [$this, 'block_linksSocial'],
            'input' => [$this, 'block_input'],
            'liName' => [$this, 'block_liName'],
            'content' => [$this, 'block_content'],
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

        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["doctor"] ?? null), "doctorSocialNetworks", [], "any", true, true, false, 20)) {
        }
        // line 1
        $this->parent = $this->loadTemplate("show_account/main_account_show.html.twig", "show_account/show_account_doctor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
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

    // line 3
    public function block_picture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "picture"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "picture"));

        // line 4
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 4, $this->source); })()), "pictureProfil", [], "any", false, false, false, 4)) {
            echo "             
              ";
        } else {
            // line 6
            echo "              <img class=\"photo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/notImageProfile.png"), "html", null, true);
            echo "\" 
               alt=\"Profile image not available\">
              ";
        }
        // line 9
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_entityName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entityName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entityName"));

        // line 11
        echo "            <h4 class=\"name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 11, $this->source); })()), "fullName", [], "any", false, false, false, 11), "html", null, true);
        echo "</h4>
            <p class=\"info\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 12, $this->source); })()), "profession", [], "any", false, false, false, 12), "html", null, true);
        echo "</p>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_numberPhone($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "numberPhone"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "numberPhone"));

        // line 15
        echo "                <p class=\"number-stat\">";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 15, $this->source); })()), "numberPhone", [], "any", false, false, false, 15), ["-" => " "]), "html", null, true);
        echo " </p>  
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_expertiseInfo($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "expertiseInfo"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "expertiseInfo"));

        echo "<span class=\"info-titre\">Domaines d'Expertise</span>          
                <p class=\"desc\">";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 18, $this->source); })()), "expertise", [], "any", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
            echo "<span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["expertise"], "expertiseName", [], "any", false, false, false, 18), "html", null, true);
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

    // line 21
    public function block_linksSocial($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        // line 22
        echo "              
              ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 23, $this->source); })()), "doctorSocialNetworks", [], "any", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["socialLinks"]) {
            // line 24
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 24), "socialName", [], "any", false, false, false, 24)) == "facebook")) {
                // line 25
                echo "             <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 27
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 27), "socialName", [], "any", false, false, false, 27)) == "twitter")) {
                // line 28
                echo "             <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\"> <i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 30
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 30), "socialName", [], "any", false, false, false, 30)) == "linkedin")) {
                // line 31
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 33
            echo "              ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 33), "socialName", [], "any", false, false, false, 33)) == "google+")) {
                // line 34
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\">  <i class=\"fa fa-google-square\" aria-hidden=\"true\"></i></a> 
              ";
            }
            // line 36
            echo "                
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialLinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 43
        echo "              <input type=\"radio\" id=\"tab-profile1\" name=\"tab-profile-control\" checked>
              <input type=\"radio\" id=\"tab-profile2\" name=\"tab-profile-control\">
              <input type=\"radio\" id=\"tab-profile3\" name=\"tab-profile-control\">    
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_liName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        // line 48
        echo "                  <li title=\"Presentation\"><label for=\"tab-profile1\" role=\"button\"><i class=\"fa fa-book\"></i><br><span>Presentation</span></label></li>
                  <li title=\"Informations\"><label for=\"tab-profile2\" role=\"button\"><i class=\"fa fa-info-circle\"></i> <br><span>Informations</span></label></li>
                  <li title=\"Carte\"><label for=\"tab-profile3\" role=\"button\"> <i class=\"fa fa-map\"></i> <br><span>Carte</span></label></li> 
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 52
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 53
        echo "                  <section>
                      ";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 54, $this->source); })()), "presentation", [], "any", false, false, false, 54), "html", null, true);
        echo "
                    </section>
                        <section>
                           <p> <span class=\"info-titre\">Tarifs</span> : ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 57, $this->source); })()), "fullTarif", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                          <p>  <span class=\"info-titre\">Langue Parlées</span>: ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 58, $this->source); })()), "language", [], "any", false, false, false, 58));
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
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 59, $this->source); })()), "meansPayment", [], "any", false, false, false, 59));
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
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 60, $this->source); })()), "praticalInfos", [], "any", false, false, false, 60));
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
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 61, $this->source); })()), "refund", [], "any", false, false, false, 61));
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
                        <section>
                          <div id=\"map\"></div>
                          </section>
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
        return array (  383 => 61,  370 => 60,  357 => 59,  344 => 58,  340 => 57,  334 => 54,  331 => 53,  321 => 52,  308 => 48,  298 => 47,  285 => 43,  275 => 42,  265 => 38,  258 => 36,  252 => 34,  249 => 33,  243 => 31,  240 => 30,  234 => 28,  231 => 27,  225 => 25,  222 => 24,  218 => 23,  215 => 22,  205 => 21,  184 => 18,  172 => 17,  159 => 15,  149 => 14,  137 => 12,  132 => 11,  122 => 10,  112 => 9,  105 => 6,  99 => 4,  89 => 3,  70 => 2,  59 => 1,  56 => 20,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"show_account/main_account_show.html.twig\" %}
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
                        <section>
                          <div id=\"map\"></div>
                          </section>
                  {% endblock %}
", "show_account/show_account_doctor.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\show_account\\show_account_doctor.html.twig");
    }
}
