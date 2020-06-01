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

/* show_account/show_account_pharmacy.html.twig */
class __TwigTemplate_f3475a70719500619b5a2d1842d15c9942392e826d7f8805d11f9a7317e24487 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'style' => [$this, 'block_style'],
            'header_picture' => [$this, 'block_header_picture'],
            'picture' => [$this, 'block_picture'],
            'entityName' => [$this, 'block_entityName'],
            'numberPhone' => [$this, 'block_numberPhone'],
            'linksSocial' => [$this, 'block_linksSocial'],
            'input' => [$this, 'block_input'],
            'liName' => [$this, 'block_liName'],
            'slider' => [$this, 'block_slider'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_account/show_account_pharmacy.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_account/show_account_pharmacy.html.twig"));

        $this->parent = $this->loadTemplate("show_account/main_account_show.html.twig", "show_account/show_account_pharmacy.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_style($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 3
        echo "<style>
  .tab-profiles .slider {
  position: relative;
  width: 50%;
  -webkit-transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
  transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
}
</style>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header_picture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_picture"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_picture"));

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/pharmacy-header.jpg"), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_picture($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "picture"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "picture"));

        // line 15
        echo "              ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 15, $this->source); })()), "picture", [], "any", false, false, false, 15)) {
            echo "             
              ";
        } else {
            // line 17
            echo "              <img class=\"photo\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/notImageProfile.png"), "html", null, true);
            echo "\" 
               alt=\"Profile image not available\">
              ";
        }
        // line 20
        echo "              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_entityName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entityName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entityName"));

        // line 22
        echo "            <h4 class=\"name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 22, $this->source); })()), "pharmacyName", [], "any", false, false, false, 22), "html", null, true);
        echo "</h4>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_numberPhone($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "numberPhone"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "numberPhone"));

        // line 25
        echo "                <p class=\"number-stat\">";
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 25, $this->source); })()), "phoneNumber", [], "any", false, false, false, 25), ["-" => " "]), "html", null, true);
        echo " </p>  
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_linksSocial($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        // line 28
        echo "
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_input($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 31
        echo "              <input type=\"radio\" id=\"tab-profile1\" name=\"tab-profile-control\" checked>
              <input type=\"radio\" id=\"tab-profile2\" name=\"tab-profile-control\">
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
    public function block_liName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        // line 35
        echo "                  <li title=\"Informations\"><label for=\"tab-profile1\" role=\"button\"><i class=\"fa fa-info-circle\"></i> <br> <span>Informations</span></label></li>
                  <li title=\"Informations\"><label for=\"tab-profile2\" role=\"button\"><i class=\"fa fa-map\"></i> <br> <span>Carte</span></label></li>
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        echo "slider2";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 40
        echo "                        <section>
                          <p> <span class=\"info-titre\">Paiement accèptés </span>: ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 41, $this->source); })()), "meansPayment", [], "any", false, false, false, 41));
        foreach ($context['_seq'] as $context["_key"] => $context["means"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["means"], "html", null, true);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['means'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                          <p>
                            ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["pharmacy"] ?? null), "pharmacySocialNetworks", [], "any", true, true, false, 43)) {
            // line 44
            echo "                            ";
        } else {
            // line 45
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 45, $this->source); })()), "pharmacySocialNetworks", [], "any", false, false, false, 45));
            foreach ($context['_seq'] as $context["_key"] => $context["socialLinks"]) {
                // line 46
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 46), "socialName", [], "any", false, false, false, 46)) == "facebook")) {
                    // line 47
                    echo "                           <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 49
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 49), "socialName", [], "any", false, false, false, 49)) == "twitter")) {
                    // line 50
                    echo "                           <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\"> <i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 52
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 52), "socialName", [], "any", false, false, false, 52)) == "linkedin")) {
                    // line 53
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 55
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 55), "socialName", [], "any", false, false, false, 55)) == "google+")) {
                    // line 56
                    echo "                          <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\">  <i class=\"fa fa-google-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 58
                echo "                              
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialLinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                            ";
        }
        // line 61
        echo "                          </p>
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
        return "show_account/show_account_pharmacy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  361 => 61,  358 => 60,  351 => 58,  345 => 56,  342 => 55,  336 => 53,  333 => 52,  327 => 50,  324 => 49,  318 => 47,  315 => 46,  310 => 45,  307 => 44,  305 => 43,  291 => 41,  288 => 40,  278 => 39,  259 => 38,  247 => 35,  237 => 34,  225 => 31,  215 => 30,  204 => 28,  194 => 27,  181 => 25,  171 => 24,  158 => 22,  148 => 21,  138 => 20,  131 => 17,  125 => 15,  115 => 14,  96 => 13,  77 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"show_account/main_account_show.html.twig\" %}
{% block style %}
<style>
  .tab-profiles .slider {
  position: relative;
  width: 50%;
  -webkit-transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
  transition: all 0.33s cubic-bezier(0.38, 0.8, 0.32, 1.07);
}
</style>

{% endblock style %}
{% block header_picture %}{{asset('bower_components/images/pharmacy-header.jpg') }}{% endblock %}
              {% block picture %}
              {% if pharmacy.picture %}             
              {% else %}
              <img class=\"photo\" src=\"{{asset('bower_components/images/notImageProfile.png') }}\" 
               alt=\"Profile image not available\">
              {% endif %}
              {% endblock %}
            {% block entityName %}
            <h4 class=\"name\">{{pharmacy.pharmacyName}}</h4>
            {% endblock entityName %}
                {% block numberPhone %}
                <p class=\"number-stat\">{{pharmacy.phoneNumber|replace({'-':' ' }) }} </p>  
                {% endblock numberPhone %}
              {% block linksSocial %}

              {% endblock %}
              {% block input %}
              <input type=\"radio\" id=\"tab-profile1\" name=\"tab-profile-control\" checked>
              <input type=\"radio\" id=\"tab-profile2\" name=\"tab-profile-control\">
              {% endblock %}         
                  {% block liName %}
                  <li title=\"Informations\"><label for=\"tab-profile1\" role=\"button\"><i class=\"fa fa-info-circle\"></i> <br> <span>Informations</span></label></li>
                  <li title=\"Informations\"><label for=\"tab-profile2\" role=\"button\"><i class=\"fa fa-map\"></i> <br> <span>Carte</span></label></li>
                  {% endblock %}
                  {% block slider %}slider2{% endblock slider %}
                  {% block content %}
                        <section>
                          <p> <span class=\"info-titre\">Paiement accèptés </span>: {% for means in pharmacy.meansPayment %} {{means}} {% endfor %}</p>
                          <p>
                            {% if pharmacy.pharmacySocialNetworks is defined %}
                            {% else %}
                            {% for socialLinks in pharmacy.pharmacySocialNetworks %}
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
                            {% endif %}
                          </p>
                          </section>
                        <section>
                          <div id=\"map\"></div>
                          </section>
                  {% endblock %}", "show_account/show_account_pharmacy.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\show_account\\show_account_pharmacy.html.twig");
    }
}
