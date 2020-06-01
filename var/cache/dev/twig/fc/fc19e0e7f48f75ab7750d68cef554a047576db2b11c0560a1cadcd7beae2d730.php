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

        echo "Rendez vous ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_appointment_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appointment_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "appointment_content"));

        // line 6
        echo "<style>
    @import url('https://fonts.googleapis.com/css?family=Abel');


.position_center {
  position: absolute;
  width: 90%;
}

.appointment-card {
  width: 100%;
  height: 250px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
 
}

.appointment-card h1 {
  text-align: center;
}

.appointment-card .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#dE685E, #EE786E);
  transition: width 0.4s;
  overflow: hidden;
  z-index: 2;
}

.appointment-card.green .additional {
  background: linear-gradient(#92bCa6, #A2CCB6);
}


.appointment-card:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
}

.appointment-card .additional .user-appointment-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: left;
}

.appointment-card .additional .user-appointment-card::after {
  content: \"\";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0,0,0,0.025);
}

.appointment-card .additional .user-appointment-card .level,
.appointment-card .additional .user-appointment-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}

.appointment-card .additional .user-appointment-card .points {
  top: 80%;
}

.appointment-card .additional .user-appointment-card svg {
  top: 50%;
}

.appointment-card .additional .more-appointmentInfo {
  width: 300px;
  float: left;
  position: absolute;
  left: 150px;
  height: 100%;
}

.appointment-card .additional .more-appointmentInfo h1 {
  color: #fff;
  margin-bottom: 0;
}

.appointment-card.green .additional .more-appointmentInfo h1 {
  color: #224C36;
}

.appointment-card .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}

.appointment-card.green .additional .coords {
  color: #325C46;
}

.appointment-card .additional .coords span + span {
  float: right;
}

.appointment-card .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}
.appointmentInfo{
    font-weight: 700;
}

.appointment-card.green .additional .stats {
  color: #325C46;
}

.appointment-card .additional .stats > div {
  flex: 1;
  text-align: position_center;
}

.appointment-card .additional .stats i {
  display: block;
}

.appointment-card .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.appointment-card .additional .stats div.value {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5rem;
}

.appointment-card .additional .stats div.value.infinity {
  font-size: 2.5rem;
}

.appointment-card .general {
  width: 300px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}

.appointment-card .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}



</style>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"position_center mt-50\">

                <div class=\"appointment-card green\">
                  <div class=\"additional\">
                    <div class=\"user-appointment-card\">
                        ";
        // line 192
        if ((twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 192, $this->source); })()), "isConfirmed", [], "any", false, false, false, 192) == true)) {
            // line 193
            echo "                        <div class=\"level position_center\">
                            Confirmé
                            <div style=\"
    background: #0bff12e3;
    width: 30px;
    height: 30px;
    border-radius: 100%;
    \"></div>
    
                          </div> 

                        ";
        } else {
            // line 205
            echo "                        <div class=\"level position_center\">
                            Non Confirmé
                            <div style=\"
    background: red;
    width: 30px;
    height: 30px;
    border-radius: 100%;
\"></div>
    
                          </div>
                      ";
        }
        // line 216
        echo "

                      <div class=\"points position_center\">
                        <a name=\"\" id=\"\" class=\"btn btn-primary\" href=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment.edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 219, $this->source); })()), "id", [], "any", false, false, false, 219)]), "html", null, true);
        echo "\" role=\"button\">Editer</a>
                      </div>
                      <div class=\"row\">
                          <img src=\"\" alt=\"\" width=\"110\" height=\"110\" role=\"img\" aria-labelledby=\"title desc\" class=\"position_center\">
                          <title id=\"title\"></title>
                          <desc id=\"desc\"></desc>
                      </div>
                    </div>
                    <div class=\"more-appointmentInfo\">
                      <h1>Nom du patient: <span class=\"appointmentInfo\">";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 228, $this->source); })()), "name", [], "any", false, false, false, 228), "html", null, true);
        echo "</span></h1>
                      <div class=\"coords\">
                        <span>Debut : <span class=\"appointmentInfo\">";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 230, $this->source); })()), "beginAt", [], "any", false, false, false, 230), "medium", "medium", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
        echo "</span></span>
                        <span>Fin : <span class=\"appointmentInfo\">";
        // line 231
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDateTime($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 231, $this->source); })()), "endAt", [], "any", false, false, false, 231), "none", "short", "", null, "gregorian", "Africa/Dakar"), "html", null, true);
        echo "</span></span>
                      </div>
                      <div class=\"coords\">
                        <span>Type de RDV:<span class=\"appointmentInfo\">";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 234, $this->source); })()), "appointmentType", [], "any", false, false, false, 234), "html", null, true);
        echo "</span> </span>
                        <span>Tel: <span class=\"appointmentInfo\">";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 235, $this->source); })()), "tel", [], "any", false, false, false, 235), "html", null, true);
        echo "</span></span>
                      </div>
                    </div>
                  </div>
                  <div class=\"general\">
                    <h1>";
        // line 240
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 240, $this->source); })()), "name", [], "any", false, false, false, 240), "html", null, true);
        echo "</h1>
                    <p>";
        // line 241
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["appointment"]) || array_key_exists("appointment", $context) ? $context["appointment"] : (function () { throw new RuntimeError('Variable "appointment" does not exist.', 241, $this->source); })()), "title", [], "any", false, false, false, 241), "html", null, true);
        echo "</p>
                 
                  </div>
                </div>
              
              </div>
        </div>

          

    </div>
    
</div>

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
        return array (  353 => 241,  349 => 240,  341 => 235,  337 => 234,  331 => 231,  327 => 230,  322 => 228,  310 => 219,  305 => 216,  292 => 205,  278 => 193,  276 => 192,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appointment/main_appointment.html.twig' %}

{% block title %}Rendez vous {% endblock %}

{% block appointment_content %}
<style>
    @import url('https://fonts.googleapis.com/css?family=Abel');


.position_center {
  position: absolute;
  width: 90%;
}

.appointment-card {
  width: 100%;
  height: 250px;
  background-color: #fff;
  background: linear-gradient(#f8f8f8, #fff);
  box-shadow: 0 8px 16px -8px rgba(0,0,0,0.4);
  border-radius: 6px;
  overflow: hidden;
  position: relative;
 
}

.appointment-card h1 {
  text-align: center;
}

.appointment-card .additional {
  position: absolute;
  width: 150px;
  height: 100%;
  background: linear-gradient(#dE685E, #EE786E);
  transition: width 0.4s;
  overflow: hidden;
  z-index: 2;
}

.appointment-card.green .additional {
  background: linear-gradient(#92bCa6, #A2CCB6);
}


.appointment-card:hover .additional {
  width: 100%;
  border-radius: 0 5px 5px 0;
}

.appointment-card .additional .user-appointment-card {
  width: 150px;
  height: 100%;
  position: relative;
  float: left;
}

.appointment-card .additional .user-appointment-card::after {
  content: \"\";
  display: block;
  position: absolute;
  top: 10%;
  right: -2px;
  height: 80%;
  border-left: 2px solid rgba(0,0,0,0.025);
}

.appointment-card .additional .user-appointment-card .level,
.appointment-card .additional .user-appointment-card .points {
  top: 15%;
  color: #fff;
  text-transform: uppercase;
  font-size: 0.75em;
  font-weight: bold;
  padding: 0.125rem 0.75rem;
  border-radius: 100px;
  white-space: nowrap;
}

.appointment-card .additional .user-appointment-card .points {
  top: 80%;
}

.appointment-card .additional .user-appointment-card svg {
  top: 50%;
}

.appointment-card .additional .more-appointmentInfo {
  width: 300px;
  float: left;
  position: absolute;
  left: 150px;
  height: 100%;
}

.appointment-card .additional .more-appointmentInfo h1 {
  color: #fff;
  margin-bottom: 0;
}

.appointment-card.green .additional .more-appointmentInfo h1 {
  color: #224C36;
}

.appointment-card .additional .coords {
  margin: 0 1rem;
  color: #fff;
  font-size: 1rem;
}

.appointment-card.green .additional .coords {
  color: #325C46;
}

.appointment-card .additional .coords span + span {
  float: right;
}

.appointment-card .additional .stats {
  font-size: 2rem;
  display: flex;
  position: absolute;
  bottom: 1rem;
  left: 1rem;
  right: 1rem;
  top: auto;
  color: #fff;
}
.appointmentInfo{
    font-weight: 700;
}

.appointment-card.green .additional .stats {
  color: #325C46;
}

.appointment-card .additional .stats > div {
  flex: 1;
  text-align: position_center;
}

.appointment-card .additional .stats i {
  display: block;
}

.appointment-card .additional .stats div.title {
  font-size: 0.75rem;
  font-weight: bold;
  text-transform: uppercase;
}

.appointment-card .additional .stats div.value {
  font-size: 1.5rem;
  font-weight: bold;
  line-height: 1.5rem;
}

.appointment-card .additional .stats div.value.infinity {
  font-size: 2.5rem;
}

.appointment-card .general {
  width: 300px;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  box-sizing: border-box;
  padding: 1rem;
  padding-top: 0;
}

.appointment-card .general .more {
  position: absolute;
  bottom: 1rem;
  right: 1rem;
  font-size: 0.9em;
}



</style>
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-12\">
            <div class=\"position_center mt-50\">

                <div class=\"appointment-card green\">
                  <div class=\"additional\">
                    <div class=\"user-appointment-card\">
                        {% if appointment.isConfirmed == true %}
                        <div class=\"level position_center\">
                            Confirmé
                            <div style=\"
    background: #0bff12e3;
    width: 30px;
    height: 30px;
    border-radius: 100%;
    \"></div>
    
                          </div> 

                        {% else %}
                        <div class=\"level position_center\">
                            Non Confirmé
                            <div style=\"
    background: red;
    width: 30px;
    height: 30px;
    border-radius: 100%;
\"></div>
    
                          </div>
                      {% endif %}


                      <div class=\"points position_center\">
                        <a name=\"\" id=\"\" class=\"btn btn-primary\" href=\"{{path('appointment.edit', {id: appointment.id})}}\" role=\"button\">Editer</a>
                      </div>
                      <div class=\"row\">
                          <img src=\"\" alt=\"\" width=\"110\" height=\"110\" role=\"img\" aria-labelledby=\"title desc\" class=\"position_center\">
                          <title id=\"title\"></title>
                          <desc id=\"desc\"></desc>
                      </div>
                    </div>
                    <div class=\"more-appointmentInfo\">
                      <h1>Nom du patient: <span class=\"appointmentInfo\">{{appointment.name}}</span></h1>
                      <div class=\"coords\">
                        <span>Debut : <span class=\"appointmentInfo\">{{appointment.beginAt|format_datetime('medium', 'medium', locale='Africa/Dakar')}}</span></span>
                        <span>Fin : <span class=\"appointmentInfo\">{{appointment.endAt|format_datetime('none', 'short', locale='Africa/Dakar')}}</span></span>
                      </div>
                      <div class=\"coords\">
                        <span>Type de RDV:<span class=\"appointmentInfo\">{{appointment.appointmentType}}</span> </span>
                        <span>Tel: <span class=\"appointmentInfo\">{{appointment.tel}}</span></span>
                      </div>
                    </div>
                  </div>
                  <div class=\"general\">
                    <h1>{{appointment.name}}</h1>
                    <p>{{appointment.title}}</p>
                 
                  </div>
                </div>
              
              </div>
        </div>

          

    </div>
    
</div>

{% endblock appointment_content %}


", "appointment/show.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\show.html.twig");
    }
}
