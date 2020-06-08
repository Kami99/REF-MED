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

/* appointment/unconfirmed_appointment.html.twig */
class __TwigTemplate_19505741c723e494207fd866f27acbe06f4f51a739d21ecd814b7822d308cb44 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/unconfirmed_appointment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/unconfirmed_appointment.html.twig"));

        $this->parent = $this->loadTemplate("appointment/main_appointment.html.twig", "appointment/unconfirmed_appointment.html.twig", 1);
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
                                    <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["appointment"], "id", [], "any", false, false, false, 41)]), "html", null, true);
            echo "\">
                                    <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
                                    </a>
                                    </li>
                            </td>
                        </tr>
                                
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                        </tbody>
                    </table>
                    <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".modal\" class=\"primary\">
                        Prendre RDV
                    </button>
                    <div id=\"my-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"my-modal-title\" aria-hidden=\"true\" style=\"height: 100%;\">
                      <div class=\"modal-dialog modal-dialog-scrollable modal-lg\" role=\"document\">
                        <div class=\"modal-content appoint-background\">
                          <div class=\"modal-body\">
                            <div class=\"container-fluid p-5\">
                            ";
        // line 59
        $this->loadTemplate("includeApp/_form_appoint.html.twig", "appointment/unconfirmed_appointment.html.twig", 59)->display($context);
        // line 60
        echo "                            </div>
                        </div>
                      </div>
                    </div>
                    </div>
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
        return "appointment/unconfirmed_appointment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 60,  170 => 59,  158 => 49,  144 => 41,  139 => 39,  131 => 34,  124 => 30,  120 => 29,  115 => 26,  111 => 25,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
                                    <a href=\"{{path('appointment.edit', {id: appointment.id})}}\">
                                    <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
                                    </a>
                                    </li>
                            </td>
                        </tr>
                                
                            {% endfor %}
                        </tbody>
                    </table>
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
                </div>
            </div>
            
        </div>
</main>
{% endblock appointment_content %}
", "appointment/unconfirmed_appointment.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\unconfirmed_appointment.html.twig");
    }
}
