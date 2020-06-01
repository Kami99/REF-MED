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

/* show_account/show_account_laboratory.html.twig */
class __TwigTemplate_4e36ebe9b080b4acf2be21e5bf6775a8310910b87fdefcb9a7870af5ac330f98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_account/show_account_laboratory.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "show_account/show_account_laboratory.html.twig"));

        $this->parent = $this->loadTemplate("show_account/main_account_show.html.twig", "show_account/show_account_laboratory.html.twig", 1);
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

        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/laboratory-header.jpg"), "html", null, true);
        
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["laboratory"]) || array_key_exists("laboratory", $context) ? $context["laboratory"] : (function () { throw new RuntimeError('Variable "laboratory" does not exist.', 15, $this->source); })()), "imageName", [], "any", false, false, false, 15)) {
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["laboratory"]) || array_key_exists("laboratory", $context) ? $context["laboratory"] : (function () { throw new RuntimeError('Variable "laboratory" does not exist.', 22, $this->source); })()), "nameLaboratory", [], "any", false, false, false, 22), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["laboratory"]) || array_key_exists("laboratory", $context) ? $context["laboratory"] : (function () { throw new RuntimeError('Variable "laboratory" does not exist.', 25, $this->source); })()), "numberPhone", [], "any", false, false, false, 25), ["-" => " "]), "html", null, true);
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
              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_liName($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "liName"));

        // line 34
        echo "                  <li title=\"Informations\"><label for=\"tab-profile2\" role=\"button\"><i class=\"fa fa-map\"></i> <br> <span>Carte et Informations</span></label></li>
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_slider($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "slider"));

        echo "slider3";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 37
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 38
        echo "                        <section>
                          <p> <span class=\"info-titre\">les catégories de laboratoires</span>: ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["laboratory"]) || array_key_exists("laboratory", $context) ? $context["laboratory"] : (function () { throw new RuntimeError('Variable "laboratory" does not exist.', 39, $this->source); })()), "categoryLaboratory", [], "any", false, false, false, 39));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo " <span class=\"badge badge-primary\">";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</span>  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</p>
                          <div id=\"map\"></div>                        
                          <p>
                            ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, ($context["laboratory"] ?? null), "laboratorySocialNetworks", [], "any", true, true, false, 42)) {
            // line 43
            echo "                            ";
        } else {
            // line 44
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["laboratory"]) || array_key_exists("laboratory", $context) ? $context["laboratory"] : (function () { throw new RuntimeError('Variable "laboratory" does not exist.', 44, $this->source); })()), "laboratorySocialNetworks", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["socialLinks"]) {
                // line 45
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 45), "socialName", [], "any", false, false, false, 45)) == "facebook")) {
                    // line 46
                    echo "                           <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\"><i class=\"fa fa-facebook-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 48
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 48), "socialName", [], "any", false, false, false, 48)) == "twitter")) {
                    // line 49
                    echo "                           <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\"> <i class=\"fa fa-twitter-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 51
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 51), "socialName", [], "any", false, false, false, 51)) == "linkedin")) {
                    // line 52
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\"><i class=\"fa fa-linkedin-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 54
                echo "                            ";
                if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 54), "socialName", [], "any", false, false, false, 54)) == "google+")) {
                    // line 55
                    echo "                          <a href=\"";
                    echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                    echo "\">  <i class=\"fa fa-google-square\" aria-hidden=\"true\"></i></a> 
                            ";
                }
                // line 57
                echo "                              
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialLinks'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                            ";
        }
        // line 60
        echo "                          </p>
                          </section>
                  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "show_account/show_account_laboratory.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 60,  357 => 59,  350 => 57,  344 => 55,  341 => 54,  335 => 52,  332 => 51,  326 => 49,  323 => 48,  317 => 46,  314 => 45,  309 => 44,  306 => 43,  304 => 42,  289 => 39,  286 => 38,  276 => 37,  257 => 36,  246 => 34,  236 => 33,  225 => 31,  215 => 30,  204 => 28,  194 => 27,  181 => 25,  171 => 24,  158 => 22,  148 => 21,  138 => 20,  131 => 17,  125 => 15,  115 => 14,  96 => 13,  77 => 3,  67 => 2,  44 => 1,);
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
{% block header_picture %}{{asset('bower_components/images/laboratory-header.jpg') }}{% endblock %}
              {% block picture %}
              {% if laboratory.imageName %}             
              {% else %}
              <img class=\"photo\" src=\"{{asset('bower_components/images/notImageProfile.png') }}\" 
               alt=\"Profile image not available\">
              {% endif %}
              {% endblock %}
            {% block entityName %}
            <h4 class=\"name\">{{laboratory.nameLaboratory}}</h4>
            {% endblock entityName %}
                {% block numberPhone %}
                <p class=\"number-stat\">{{laboratory.numberPhone|replace({'-':' ' }) }} </p>  
                {% endblock numberPhone %}
              {% block linksSocial %}

              {% endblock %}
              {% block input %}
              <input type=\"radio\" id=\"tab-profile1\" name=\"tab-profile-control\" checked>
              {% endblock %}         
                  {% block liName %}
                  <li title=\"Informations\"><label for=\"tab-profile2\" role=\"button\"><i class=\"fa fa-map\"></i> <br> <span>Carte et Informations</span></label></li>
                  {% endblock %}
                  {% block slider %}slider3{% endblock slider %}
                  {% block content %}
                        <section>
                          <p> <span class=\"info-titre\">les catégories de laboratoires</span>: {% for category in laboratory.categoryLaboratory %} <span class=\"badge badge-primary\">{{category}}</span>  {% endfor %}</p>
                          <div id=\"map\"></div>                        
                          <p>
                            {% if laboratory.laboratorySocialNetworks is defined %}
                            {% else %}
                            {% for socialLinks in laboratory.laboratorySocialNetworks %}
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
                  {% endblock %}", "show_account/show_account_laboratory.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\show_account\\show_account_laboratory.html.twig");
    }
}
