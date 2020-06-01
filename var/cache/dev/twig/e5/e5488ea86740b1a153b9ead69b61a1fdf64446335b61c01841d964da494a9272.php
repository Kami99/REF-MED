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
class __TwigTemplate_bfe8b37adc18f94250fc74a98b6100e781df436563d59ccaadcf3cf802621d96 extends \Twig\Template
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
                    <table class=\"table table-condensed table-bordered\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type de rendez-vous</th>
                                <th>Evenement Prévu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Single event in a single day -->
                            <tr>
                                <td class=\"agenda-date\" class=\"active\" rowspan=\"1\">
                                    <div class=\"dayofmonth\">26</div>
                                    <div class=\"dayofweek\">Saturday</div>
                                    <div class=\"shortdate text-muted\">July, 2014</div>
                                </td>
                                <td class=\"agenda-time\">
                                    5:30 AM
                                </td>
                                <td class=\"agenda-events\">
                                    <div class=\"agenda-event\">
                                        <i class=\"glyphicon glyphicon-repeat text-muted\" title=\"Repeating event\"></i> 
                                        Fishing
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Multiple events in a single day (note the rowspan) -->
                            <tr>
                                <td class=\"agenda-date\" class=\"active\" rowspan=\"3\">
                                    <div class=\"dayofmonth\">24</div>
                                    <div class=\"dayofweek\">Thursday</div>
                                    <div class=\"shortdate text-muted\">July, 2014</div>
                                </td>
                                <td class=\"agenda-time\">
                                    8:00 - 9:00 AM 
                                </td>
                                <td class=\"agenda-events\">
                                    <div class=\"agenda-event\">
                                        Doctor's Appointment
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"agenda-time\">
                                    10:15 AM - 12:00 PM 
                                </td>
                                <td class=\"agenda-events\">
                                    <div class=\"agenda-event\">
                                        Meeting with executives
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"agenda-time\">
                                    7:00 - 9:00 PM
                                </td>
                                <td class=\"agenda-events\">
                                    <li class=\"events__item\">
                                        <div class=\"events__item--left\">
                                          <span class=\"events__name\">Visit Grandma</span>
                                        </div>
                                        <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
                    
                                      </li>
                                </td>
                            </tr>
                        </tbody>
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
        return array (  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
                    <table class=\"table table-condensed table-bordered\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Type de rendez-vous</th>
                                <th>Evenement Prévu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Single event in a single day -->
                            <tr>
                                <td class=\"agenda-date\" class=\"active\" rowspan=\"1\">
                                    <div class=\"dayofmonth\">26</div>
                                    <div class=\"dayofweek\">Saturday</div>
                                    <div class=\"shortdate text-muted\">July, 2014</div>
                                </td>
                                <td class=\"agenda-time\">
                                    5:30 AM
                                </td>
                                <td class=\"agenda-events\">
                                    <div class=\"agenda-event\">
                                        <i class=\"glyphicon glyphicon-repeat text-muted\" title=\"Repeating event\"></i> 
                                        Fishing
                                    </div>
                                </td>
                            </tr>
                            
                            <!-- Multiple events in a single day (note the rowspan) -->
                            <tr>
                                <td class=\"agenda-date\" class=\"active\" rowspan=\"3\">
                                    <div class=\"dayofmonth\">24</div>
                                    <div class=\"dayofweek\">Thursday</div>
                                    <div class=\"shortdate text-muted\">July, 2014</div>
                                </td>
                                <td class=\"agenda-time\">
                                    8:00 - 9:00 AM 
                                </td>
                                <td class=\"agenda-events\">
                                    <div class=\"agenda-event\">
                                        Doctor's Appointment
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"agenda-time\">
                                    10:15 AM - 12:00 PM 
                                </td>
                                <td class=\"agenda-events\">
                                    <div class=\"agenda-event\">
                                        Meeting with executives
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class=\"agenda-time\">
                                    7:00 - 9:00 PM
                                </td>
                                <td class=\"agenda-events\">
                                    <li class=\"events__item\">
                                        <div class=\"events__item--left\">
                                          <span class=\"events__name\">Visit Grandma</span>
                                        </div>
                                        <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
                    
                                      </li>
                                </td>
                            </tr>
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
