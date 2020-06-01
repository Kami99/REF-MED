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

/* appointment/manage_appointment.html.twig */
class __TwigTemplate_bb7e6683fd9ddd63aa444c422dd79594ae6132cd0dbc753fb32bb3913e7fe9b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/manage_appointment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/manage_appointment.html.twig"));

        $this->parent = $this->loadTemplate("appointment/main_appointment.html.twig", "appointment/manage_appointment.html.twig", 1);
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
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["appointment"]) {
            // line 7
            echo "        <li class=\"events__item col-12\">
            <div class=\"events__item--left\">
                <span class=\"events__name\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["appointment"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</span>
            </div>
            <div class=\"section-right\">
            <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".modal\" class=\"primary\">
                Editer
            </button>
            <div id=\"my-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"my-modal-title\" aria-hidden=\"true\" style=\"height: 100%;\">
              <div class=\"modal-dialog modal-dialog-scrollable modal-lg\" role=\"document\">
                <div class=\"modal-content appoint-background\">
                  <div class=\"modal-body\">
                    <div class=\"container-fluid p-5\">
                    ";
            // line 21
            $this->loadTemplate("appointment/_form_manage.html.twig", "appointment/manage_appointment.html.twig", 21)->display($context);
            // line 22
            echo "                    </div>
                </div>
              </div>
            </div>
            </div>
            </div>
         </li>
            
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['appointment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </div>

</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "appointment/manage_appointment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 31,  130 => 22,  128 => 21,  113 => 9,  109 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
            </div>
            <div class=\"section-right\">
            <span class=\"events__tag events__tag--highlighted\">Pas confirmé</span>
            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".modal\" class=\"primary\">
                Editer
            </button>
            <div id=\"my-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"my-modal-title\" aria-hidden=\"true\" style=\"height: 100%;\">
              <div class=\"modal-dialog modal-dialog-scrollable modal-lg\" role=\"document\">
                <div class=\"modal-content appoint-background\">
                  <div class=\"modal-body\">
                    <div class=\"container-fluid p-5\">
                    {% include \"appointment/_form_manage.html.twig\" %}
                    </div>
                </div>
              </div>
            </div>
            </div>
            </div>
         </li>
            
        {% endfor %}
    </div>

</div>

{% endblock appointment_content %}
", "appointment/manage_appointment.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\manage_appointment.html.twig");
    }
}
