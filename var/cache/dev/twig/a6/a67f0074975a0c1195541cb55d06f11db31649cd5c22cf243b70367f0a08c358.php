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

/* appointment/_sidebar.html.twig */
class __TwigTemplate_c36c260585eac4faed89383d389a20bddf116f39d824258ebb440132155c2b53 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "appointment/_sidebar.html.twig"));

        // line 1
        echo "<sidebar>
    <div class=\"logo\">logo</div>
    <div class=\"avatar\">
      <div class=\"avatar__img\">
        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 5, $this->source); })()), "pictureProfil", [], "any", false, false, false, 5)) {
            // line 6
            echo "        <img class=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 6, $this->source); })()), "imageFile"), "html", null, true);
            echo "\"alt=\"user\" />
        ";
        } else {
            // line 8
            echo "        <img  class=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/NotImageProfile.png"), "html", null, true);
            echo "\" 
        alt=\"Empty Image\" style=\"width:70px\">
       ";
        }
        // line 11
        echo "      </div>
      <div class=\"avatar__name\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 12, $this->source); })()), "fullName", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
    </div>
    <nav class=\"menu\">
      ";
        // line 15
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "request", [], "any", false, false, false, 15), "attributes", [], "any", false, false, false, 15), "get", [0 => "_route"], "method", false, false, false, 15), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 16
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "request", [], "any", false, false, false, 16), "attributes", [], "any", false, false, false, 16), "get", [0 => "_route_params"], "method", false, false, false, 16));
        // line 17
        echo "      <a class=\"menu__item menu__item";
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 17, $this->source); })()) == "/votre-espace/agenda")) {
            echo "--active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_calendar");
        echo "\">
          <i class=\"menu__icon fa fa-calendar\"></i>
          <span class=\"menu__text\">Calendrier</span>
        </a>
        <a class=\"menu__item";
        // line 21
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 21, $this->source); })()) == "/votre-espace/rdv-non-confirme")) {
            echo "--active";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_unconfirmed");
        echo "\">
          <i class=\"menu__icon fa fa-calendar-times-o\"></i>
          <span class=\"menu__text\">RDV non confirmés</span>
        </a>
        <a class=\"menu__item";
        // line 25
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 25, $this->source); })()) == "/votre-espace/tous-mes-rdv")) {
            echo "--active";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("appointment_list");
        echo "\">
          <i class=\"menu__icon fa fa-calendar-check-o\"></i>
          <span class=\"menu__text\">RDV Gestion</span>
        </a>
    </nav>
    <div class=\"copyright\" > REF-MED</div>
  </sidebar>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "appointment/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 25,  88 => 21,  76 => 17,  74 => 16,  73 => 15,  67 => 12,  64 => 11,  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<sidebar>
    <div class=\"logo\">logo</div>
    <div class=\"avatar\">
      <div class=\"avatar__img\">
        {% if doctor.pictureProfil %}
        <img class=\"\" src=\"{{vich_uploader_asset(doctor, 'imageFile')}}\"alt=\"user\" />
        {% else %}
        <img  class=\"\" src=\"{{asset('bower_components/images/NotImageProfile.png')}}\" 
        alt=\"Empty Image\" style=\"width:70px\">
       {% endif %}
      </div>
      <div class=\"avatar__name\">{{doctor.fullName}}</div>
    </div>
    <nav class=\"menu\">
      {% set currentPath = path(app.request.attributes.get('_route'),
      app.request.attributes.get('_route_params')) %}
      <a class=\"menu__item menu__item{% if currentPath == '/votre-espace/agenda' %}--active{% endif %}\" href=\"{{path('appointment_calendar')}}\">
          <i class=\"menu__icon fa fa-calendar\"></i>
          <span class=\"menu__text\">Calendrier</span>
        </a>
        <a class=\"menu__item{% if currentPath == '/votre-espace/rdv-non-confirme' %}--active{% endif %}\" href=\"{{path('appointment_unconfirmed')}}\">
          <i class=\"menu__icon fa fa-calendar-times-o\"></i>
          <span class=\"menu__text\">RDV non confirmés</span>
        </a>
        <a class=\"menu__item{% if currentPath == '/votre-espace/tous-mes-rdv' %}--active{% endif %}\"  href=\"{{path('appointment_list')}}\">
          <i class=\"menu__icon fa fa-calendar-check-o\"></i>
          <span class=\"menu__text\">RDV Gestion</span>
        </a>
    </nav>
    <div class=\"copyright\" > REF-MED</div>
  </sidebar>", "appointment/_sidebar.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\_sidebar.html.twig");
    }
}
