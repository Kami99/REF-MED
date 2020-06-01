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

/* appointment/list_appointment.html.twig */
class __TwigTemplate_4325cf6a4e496f99628e3ddba489c243b1205f1a4dbccc7842e145e344b661da extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'appointment_content' => [$this, 'block_appointment_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "appointment/main_appointment.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/list_appointment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/list_appointment.html.twig"));

        $this->parent = $this->loadTemplate("appointment/main_appointment.html.twig", "appointment/list_appointment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Gestion des rendez vous";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_appointment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appointment_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appointment_content"));

        // line 4
        echo "<div class=\"container-fluid p-5\">
    <div class=\"row\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 7
            echo "        <li class=\"events__item col-12\">
            <div class=\"events__item--left\">
                <span class=\"events__name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
                <span>";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "beginAt", [], "any", false, false, false, 10), "full", "full", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
            echo " <br> Fin : ";
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "endAt", [], "any", false, false, false, 10), "none", "short", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
            echo " </span>
            </div>
            <div class=\"section-right\">
                ";
            // line 13
            if ((twig_get_attribute($this->env, $this->source, $context["appointment"], "isConfirmed", [], "any", false, false, false, 13) == true)) {
                // line 14
                echo "                 <span class=\"events__tag events__tag p-2\">Confirmé</span>
                ";
            } else {
                // line 16
                echo "                 <span class=\"events__tag events__tag--highlighted p-2\">Pas confirmé</span>                   
                ";
            }
            // line 18
            echo "          </a>
            </div>
         </li>
         <a name=\"\" id=\"\" class=\"btn btn-primary col-2 mb-3\" href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" role=\"button\">
          Editer
         </a> 
            
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div> 

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appointment/list_appointment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 26,  127 => 21,  122 => 18,  118 => 16,  114 => 14,  112 => 13,  104 => 10,  100 => 9,  96 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appointment/main_appointment.html.twig' %}
{% block title %}Gestion des rendez vous{% endblock %}
{% block appointment_content %}
<div class=\"container-fluid p-5\">
    <div class=\"row\">
        {% for appointment in appointments %}
        <li class=\"events__item col-12\">
            <div class=\"events__item--left\">
                <span class=\"events__name\">{{appointment.title}}</span>
                <span>{{appointment.beginAt|format_datetime('full', 'full', locale='Africa/Dakar') }} <br> Fin : {{appointment.endAt|format_datetime('none', 'short', locale='Africa/Dakar') }} </span>
            </div>
            <div class=\"section-right\">
                {% if appointment.isConfirmed == true %}
                 <span class=\"events__tag events__tag p-2\">Confirmé</span>
                {% else %}
                 <span class=\"events__tag events__tag--highlighted p-2\">Pas confirmé</span>                   
                {% endif %}
          </a>
            </div>
         </li>
         <a name=\"\" id=\"\" class=\"btn btn-primary col-2 mb-3\" href=\"{{path('appointment.edit', {id: appointment.id})}}\" role=\"button\">
          Editer
         </a> 
            
        {% endfor %}
    </div> 

</div>

{% endblock appointment_content %}", "appointment/list_appointment.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\list_appointment.html.twig");
    }
}
