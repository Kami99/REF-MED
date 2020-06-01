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
class __TwigTemplate_6f131906f09bb418e10bb3b764e2e56457c2efd5cec2601ce72f66246c12fb30 extends \Twig\Template
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
            echo "        <img class=\"round\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 6, $this->source); })()), "imageFile"), "html", null, true);
            echo "\"alt=\"user\" />
        ";
        } else {
            // line 8
            echo "        <img  class=\"round\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/NotImageProfile.png"), "html", null, true);
            echo "\" 
        alt=\"Empty Image\">
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
      <a class=\"menu__item menu__item--active\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar\"></i>
          <span class=\"menu__text\">Calendrier</span>
        </a>
      <a class=\"menu__item\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar-plus-o\"></i>
          <span class=\"menu__text\">Ajouter RDV</span>
        </a>
        <a class=\"menu__item\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar-times-o\"></i>
          <span class=\"menu__text\">RDV non confirmés</span>
        </a>
        <a class=\"menu__item\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar-check-o\"></i>
          <span class=\"menu__text\">RDV EDITION</span>
        </a>
    </nav>
    <div class=\"copyright\">Logo REF-MED</div>
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
        return array (  67 => 12,  64 => 11,  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<sidebar>
    <div class=\"logo\">logo</div>
    <div class=\"avatar\">
      <div class=\"avatar__img\">
        {% if doctor.pictureProfil %}
        <img class=\"round\" src=\"{{vich_uploader_asset(doctor, 'imageFile')}}\"alt=\"user\" />
        {% else %}
        <img  class=\"round\" src=\"{{asset('bower_components/images/NotImageProfile.png')}}\" 
        alt=\"Empty Image\">
       {% endif %}
      </div>
      <div class=\"avatar__name\">{{doctor.fullName}}</div>
    </div>
    <nav class=\"menu\">
      <a class=\"menu__item menu__item--active\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar\"></i>
          <span class=\"menu__text\">Calendrier</span>
        </a>
      <a class=\"menu__item\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar-plus-o\"></i>
          <span class=\"menu__text\">Ajouter RDV</span>
        </a>
        <a class=\"menu__item\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar-times-o\"></i>
          <span class=\"menu__text\">RDV non confirmés</span>
        </a>
        <a class=\"menu__item\" href=\"#\">
          <i class=\"menu__icon fa fa-calendar-check-o\"></i>
          <span class=\"menu__text\">RDV EDITION</span>
        </a>
    </nav>
    <div class=\"copyright\">Logo REF-MED</div>
  </sidebar>", "appointment/_sidebar.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\appointment\\_sidebar.html.twig");
    }
}
