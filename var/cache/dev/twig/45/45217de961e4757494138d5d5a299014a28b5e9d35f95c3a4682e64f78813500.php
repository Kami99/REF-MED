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

/* appointment/index.html.twig */
class __TwigTemplate_9414edf5ae81c0ee93b0968a855a629cfc991e1c8b194c1ad1bf6d51bf7cfdd4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/index.html.twig"));

        $this->parent = $this->loadTemplate("appointment/main_appointment.html.twig", "appointment/index.html.twig", 1);
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

        echo "Rendez vous non confirmés";
        
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
        echo "<main>
    <div class=\"container\">

        <h2>Demande de rendez-vous</h2>           
            <div class=\"alert alert-warning\">
                <p>Les nouveaux rendez-vous demandés par des patients</p>
            </div>
        
            <hr />
        
            <div class=\"agenda\">
                <div class=\"table-responsive\">
                    <table class=\"table table-condensed table-striped table-hover table-success\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type de rendez-vous</th>
                                <th>Evenement Prévu</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["appointments"]) || array_key_exists("appointments", $context) ? $context["appointments"] : (function () { throw new RuntimeError('Variable "appointments" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 26
            echo "                        <!-- Single event in a single day -->
                        <tr >
                            <td class=\"agenda-date\" class=\"active\" rowspan=\"1\">
                                <div class=\"dayofmonth\">Débute le:";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "beginAt", [], "any", false, false, false, 29), "full", "full", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
            echo " et prend fin
                                    ";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "endAt", [], "any", false, false, false, 30), "none", "short", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
            echo "  </div>
                                
                            </td>
                            <td class=\"agenda-time\">
                                ";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "appointmentType", [], "any", false, false, false, 34), "html", null, true);
            echo "
                            </td>
                            <td class=\"agenda-events\">
                                <li class=\"events__item\">
                                    <div class=\"events__item--left\">
                                        <span class=\"events__name\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</span>
                                    </div>
                                    <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
                                    </li>
                            </td>
                        </tr>
                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
</main>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appointment/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 47,  139 => 39,  131 => 34,  124 => 30,  120 => 29,  115 => 26,  111 => 25,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appointment/main_appointment.html.twig' %}
{% block title %}Rendez vous non confirmés{% endblock %}
{% block appointment_content %}
<main>
    <div class=\"container\">

        <h2>Demande de rendez-vous</h2>           
            <div class=\"alert alert-warning\">
                <p>Les nouveaux rendez-vous demandés par des patients</p>
            </div>
        
            <hr />
        
            <div class=\"agenda\">
                <div class=\"table-responsive\">
                    <table class=\"table table-condensed table-striped table-hover table-success\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type de rendez-vous</th>
                                <th>Evenement Prévu</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for appointment in appointments %}
                        <!-- Single event in a single day -->
                        <tr >
                            <td class=\"agenda-date\" class=\"active\" rowspan=\"1\">
                                <div class=\"dayofmonth\">Débute le:{{appointment.beginAt|format_datetime('full', 'full', locale='Africa/Dakar') }} et prend fin
                                    {{appointment.endAt|format_datetime('none', 'short', locale='Africa/Dakar')}}  </div>
                                
                            </td>
                            <td class=\"agenda-time\">
                                {{appointment.appointmentType}}
                            </td>
                            <td class=\"agenda-events\">
                                <li class=\"events__item\">
                                    <div class=\"events__item--left\">
                                        <span class=\"events__name\">{{appointment.title}}</span>
                                    </div>
                                    <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
                                    </li>
                            </td>
                        </tr>
                                
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
</main>
{% endblock appointment_content %}
", "appointment/index.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\index.html.twig");
    }
}
