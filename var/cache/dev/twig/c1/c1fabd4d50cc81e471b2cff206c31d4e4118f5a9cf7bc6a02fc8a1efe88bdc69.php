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

/* pharmacy_availabe_drugs/show.html.twig */
class __TwigTemplate_63bd26501c6f2cb83a5222966530b24ec59525594bd757892a3602472142bd90 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pharmacy_content' => [$this, 'block_pharmacy_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pharmacy_availabe_drugs/_main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/show.html.twig"));

        $this->parent = $this->loadTemplate("pharmacy_availabe_drugs/_main.html.twig", "pharmacy_availabe_drugs/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Medicament ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 3, $this->source); })()), "nameDrugs", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_pharmacy_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pharmacy_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pharmacy_content"));

        // line 6
        echo "   
<div class=\"jumbotron jumbotron-fluid p-4\">
        <h1 class=\"display-4\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 8, $this->source); })()), "nameDrugs", [], "any", false, false, false, 8), "html", null, true);
        echo "</h1>
        <p class=\"lead\">";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 9, $this->source); })()), "categoryDrugs", [], "any", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "            ";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</p>
        <hr class=\"my-4\">
        <p><h3  class=\"mt-5\">Consigne :</h3>
        ";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 14, $this->source); })()), "consigne", [], "any", false, false, false, 14), "html", null, true);
        echo "
        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Description :</h3>
        ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 17, $this->source); })()), "description", [], "any", false, false, false, 17), "html", null, true);
        echo "
        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Consomateurs :</h3>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 20, $this->source); })()), "drugsConsommers", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["consomers"]) {
            // line 21
            echo "          ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["consomers"], "nameConsomers", [], "any", false, false, false, 21), "html", null, true);
            echo "
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['consomers'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </p>
        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Forme du médicament :</h3>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 27, $this->source); })()), "formDrugs", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 28
            echo "        ";
            echo twig_escape_filter($this->env, $context["form"], "html", null, true);
            echo "
          
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </p>        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Femme enceinte :</h3>
        ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["drug"]) || array_key_exists("drug", $context) ? $context["drug"] : (function () { throw new RuntimeError('Variable "drug" does not exist.', 33, $this->source); })()), "isAuthorised", [], "any", false, false, false, 33) == false)) {
            // line 34
            echo "        Interdit
        ";
        } else {
            // line 36
            echo "            Authorisé
        ";
        }
        // line 38
        echo "        </p>
        

    </div>






";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pharmacy_availabe_drugs/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 38,  170 => 36,  166 => 34,  164 => 33,  160 => 31,  150 => 28,  146 => 27,  141 => 24,  131 => 21,  127 => 20,  121 => 17,  115 => 14,  110 => 11,  101 => 10,  97 => 9,  93 => 8,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pharmacy_availabe_drugs/_main.html.twig' %}

{% block title %}Medicament {{drug.nameDrugs}}{% endblock %}

{% block pharmacy_content %}
   
<div class=\"jumbotron jumbotron-fluid p-4\">
        <h1 class=\"display-4\">{{drug.nameDrugs}}</h1>
        <p class=\"lead\">{% for category in drug.categoryDrugs %}
            {{category}}
        {% endfor %}</p>
        <hr class=\"my-4\">
        <p><h3  class=\"mt-5\">Consigne :</h3>
        {{drug.consigne}}
        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Description :</h3>
        {{drug.description}}
        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Consomateurs :</h3>
        {% for consomers in drug.drugsConsommers %}
          {{consomers.nameConsomers}}
            
        {% endfor %}
        </p>
        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Forme du médicament :</h3>
        {% for form in drug.formDrugs %}
        {{form}}
          
      {% endfor %}
        </p>        <hr class=\"my-4\">
        <h3 class=\"mt-5\"> Femme enceinte :</h3>
        {% if drug.isAuthorised == false %}
        Interdit
        {% else %}
            Authorisé
        {% endif %}
        </p>
        

    </div>






{% endblock pharmacy_content %}

", "pharmacy_availabe_drugs/show.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\pharmacy_availabe_drugs\\show.html.twig");
    }
}
