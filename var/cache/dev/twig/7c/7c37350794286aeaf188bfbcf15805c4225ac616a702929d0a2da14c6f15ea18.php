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

/* pharmacy_availabe_drugs/_sidebar.html.twig */
class __TwigTemplate_c6bc4537a74c8cf8ee4dc73f1c93801fa3796453f93fb5f1c7917e6c63260f6a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/_sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/_sidebar.html.twig"));

        // line 1
        echo "<sidebar>
    <div class=\"logo\">logo</div>
    <div class=\"avatar\">
      <div class=\"avatar__img\">
        ";
        // line 5
        if (twig_get_attribute($this->env, $this->source, (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 5, $this->source); })()), "imageFile", [], "any", false, false, false, 5)) {
            // line 6
            echo "        <img class=\"\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 6, $this->source); })()), "imageFile"), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 12, $this->source); })()), "pharmacyName", [], "any", false, false, false, 12), "html", null, true);
        echo "</div>
    </div>
    <nav class=\"menu\">

      <a class=\"menu__item menu__item--active\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pharmacy_availabe_drugs_index");
        echo "\">
          <i class=\"menu__icon fa fa-calendar\"></i>
          <span class=\"menu__text\">Voir la liste des médicaments dans la base de donnée</span>
        </a>
    </nav>
    <div class=\"copyright\"> REF-MED</div>
  </sidebar>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pharmacy_availabe_drugs/_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 16,  67 => 12,  64 => 11,  57 => 8,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<sidebar>
    <div class=\"logo\">logo</div>
    <div class=\"avatar\">
      <div class=\"avatar__img\">
        {% if pharmacy.imageFile %}
        <img class=\"\" src=\"{{vich_uploader_asset(pharmacy, 'imageFile')}}\"alt=\"user\" />
        {% else %}
        <img  class=\"\" src=\"{{asset('bower_components/images/NotImageProfile.png')}}\" 
        alt=\"Empty Image\" style=\"width:70px\">
       {% endif %}
      </div>
      <div class=\"avatar__name\">{{pharmacy.pharmacyName}}</div>
    </div>
    <nav class=\"menu\">

      <a class=\"menu__item menu__item--active\" href=\"{{path('pharmacy_availabe_drugs_index')}}\">
          <i class=\"menu__icon fa fa-calendar\"></i>
          <span class=\"menu__text\">Voir la liste des médicaments dans la base de donnée</span>
        </a>
    </nav>
    <div class=\"copyright\"> REF-MED</div>
  </sidebar>", "pharmacy_availabe_drugs/_sidebar.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\pharmacy_availabe_drugs\\_sidebar.html.twig");
    }
}
