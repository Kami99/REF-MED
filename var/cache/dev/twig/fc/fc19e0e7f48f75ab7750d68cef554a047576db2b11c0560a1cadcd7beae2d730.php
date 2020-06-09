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

/* appointment/show.html.twig */
class __TwigTemplate_d5aecd2ff0c3b25f7961a44adc69bb5660214c9eaec3ddfd78798b0c8cd82ee6 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/show.html.twig"));

        $this->parent = $this->loadTemplate("appointment/main_appointment.html.twig", "appointment/show.html.twig", 1);
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

        echo "Rendez vous
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_appointment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appointment_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appointment_content"));

        // line 7
        echo "
\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"position_center mt-50\">

\t\t\t\t\t<div class=\"appointment-card green\">
\t\t\t\t\t\t<div class=\"additional\">
\t\t\t\t\t\t\t<div class=\"user-appointment-card\">
\t\t\t\t\t\t\t\t";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 16, $this->source); })()), "isConfirmed", [], "any", false, false, false, 16) == true)) {
            // line 17
            echo "\t\t\t\t\t\t\t\t\t<div class=\"level position_center\">
\t\t\t\t\t\t\t\t\t\tConfirmé
\t\t\t\t\t\t\t\t\t\t<div style=\"
\t\t\t\t\t\t\t\t\t\t\t    background: #0bff12e3;
\t\t\t\t\t\t\t\t\t\t\t    width: 30px;
\t\t\t\t\t\t\t\t\t\t\t    height: 30px;
\t\t\t\t\t\t\t\t\t\t\t    border-radius: 100%;
\t\t\t\t\t\t\t\t\t\t\t    \"></div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t\t\t\t<div class=\"level position_center\">
\t\t\t\t\t\t\t\t\t\tNon Confirmé
\t\t\t\t\t\t\t\t\t\t<div style=\"
\t\t\t\t\t\t\t\t\t\t\t    background: red;
\t\t\t\t\t\t\t\t\t\t\t    width: 30px;
\t\t\t\t\t\t\t\t\t\t\t    height: 30px;
\t\t\t\t\t\t\t\t\t\t\t    border-radius: 100%;
\t\t\t\t\t\t\t\t\t\t\t\"></div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 40
        echo "

\t\t\t\t\t\t\t\t<div class=\"points position_center\">
\t\t\t\t\t\t\t\t\t<a name=\"\" id=\"\" class=\"btn btn-primary\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment.edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        echo "\" role=\"button\">Editer</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" width=\"110\" height=\"110\" role=\"img\" aria-labelledby=\"title desc\" class=\"position_center\">
\t\t\t\t\t\t\t\t\t<title id=\"title\"></title>
\t\t\t\t\t\t\t\t\t<desc id=\"desc\"></desc>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"more-appointmentInfo\">
\t\t\t\t\t\t\t\t<h1>Nom du patient:
\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 53, $this->source); })()), "name", [], "any", false, false, false, 53), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<div class=\"coords\">
\t\t\t\t\t\t\t\t\t<span>Debut :
\t\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 57, $this->source); })()), "beginAt", [], "any", false, false, false, 57), "medium", "medium", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Fin :
\t\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 60, $this->source); })()), "endAt", [], "any", false, false, false, 60), "none", "short", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"coords\">
\t\t\t\t\t\t\t\t\t<span>Type de RDV:<span class=\"appointmentInfo\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 64, $this->source); })()), "appointmentType", [], "any", false, false, false, 64), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Tel:
\t\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 67, $this->source); })()), "tel", [], "any", false, false, false, 67), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"general\">
\t\t\t\t\t\t\t<h1>";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 73, $this->source); })()), "name", [], "any", false, false, false, 73), "html", null, true);
        echo "</h1>
\t\t\t\t\t\t\t<p>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 74, $this->source); })()), "title", [], "any", false, false, false, 74), "html", null, true);
        echo "</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t</div>

\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appointment/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 74,  182 => 73,  173 => 67,  167 => 64,  160 => 60,  154 => 57,  147 => 53,  134 => 43,  129 => 40,  116 => 29,  102 => 17,  100 => 16,  89 => 7,  79 => 6,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appointment/main_appointment.html.twig' %}

{% block title %}Rendez vous
{% endblock %}

{% block appointment_content %}

\t<div class=\"container-fluid\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-12\">
\t\t\t\t<div class=\"position_center mt-50\">

\t\t\t\t\t<div class=\"appointment-card green\">
\t\t\t\t\t\t<div class=\"additional\">
\t\t\t\t\t\t\t<div class=\"user-appointment-card\">
\t\t\t\t\t\t\t\t{% if appointment.isConfirmed == true %}
\t\t\t\t\t\t\t\t\t<div class=\"level position_center\">
\t\t\t\t\t\t\t\t\t\tConfirmé
\t\t\t\t\t\t\t\t\t\t<div style=\"
\t\t\t\t\t\t\t\t\t\t\t    background: #0bff12e3;
\t\t\t\t\t\t\t\t\t\t\t    width: 30px;
\t\t\t\t\t\t\t\t\t\t\t    height: 30px;
\t\t\t\t\t\t\t\t\t\t\t    border-radius: 100%;
\t\t\t\t\t\t\t\t\t\t\t    \"></div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<div class=\"level position_center\">
\t\t\t\t\t\t\t\t\t\tNon Confirmé
\t\t\t\t\t\t\t\t\t\t<div style=\"
\t\t\t\t\t\t\t\t\t\t\t    background: red;
\t\t\t\t\t\t\t\t\t\t\t    width: 30px;
\t\t\t\t\t\t\t\t\t\t\t    height: 30px;
\t\t\t\t\t\t\t\t\t\t\t    border-radius: 100%;
\t\t\t\t\t\t\t\t\t\t\t\"></div>

\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}


\t\t\t\t\t\t\t\t<div class=\"points position_center\">
\t\t\t\t\t\t\t\t\t<a name=\"\" id=\"\" class=\"btn btn-primary\" href=\"{{path('appointment.edit', {id: appointment.id})}}\" role=\"button\">Editer</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<img src=\"\" alt=\"\" width=\"110\" height=\"110\" role=\"img\" aria-labelledby=\"title desc\" class=\"position_center\">
\t\t\t\t\t\t\t\t\t<title id=\"title\"></title>
\t\t\t\t\t\t\t\t\t<desc id=\"desc\"></desc>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"more-appointmentInfo\">
\t\t\t\t\t\t\t\t<h1>Nom du patient:
\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">{{appointment.name}}</span>
\t\t\t\t\t\t\t\t</h1>
\t\t\t\t\t\t\t\t<div class=\"coords\">
\t\t\t\t\t\t\t\t\t<span>Debut :
\t\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">{{appointment.beginAt|format_datetime('medium', 'medium', locale='Africa/Dakar')}}</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Fin :
\t\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">{{appointment.endAt|format_datetime('none', 'short', locale='Africa/Dakar')}}</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"coords\">
\t\t\t\t\t\t\t\t\t<span>Type de RDV:<span class=\"appointmentInfo\">{{appointment.appointmentType}}</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t<span>Tel:
\t\t\t\t\t\t\t\t\t\t<span class=\"appointmentInfo\">{{appointment.tel}}</span>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"general\">
\t\t\t\t\t\t\t<h1>{{appointment.name}}</h1>
\t\t\t\t\t\t\t<p>{{appointment.title}}</p>

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>


\t\t</div>

\t</div>

{% endblock appointment_content %}
", "appointment/show.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\show.html.twig");
    }
}
