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

/* pharmacy_availabe_drugs/_form.html.twig */
class __TwigTemplate_4e3591a8e0b58830193521b948efbdb85c1d36dd84e63593ff63da668b0e68a2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12 \">
                   <p>Disponible</p>
                    <div class=\"form-group\">
                ";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "isAvailable", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-edit"]]);
        echo "
                    </div>
                </div>
        </div> 
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-12\">
                <p>Prix</p>

                <div class=\"form-group\">
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "price", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-edit"]]);
        echo "
                </div>
            </div>
        </div> 
        <div class=\"row\">

            <div class=\"col-md-6 col-lg-12\">
            <p>Medicament</p>
                <div class=\"form-group\">
            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "drugs", [], "any", false, false, false, 24), 'widget');
        echo "
                </div>
            </div>
        </div> 
        <div class=\"form-btn\">
            <button class=\"submit-btn\">Valider</button>
        </div>
";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pharmacy_availabe_drugs/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  75 => 24,  63 => 15,  51 => 6,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form) }}
            <div class=\"row\">
                <div class=\"col-md-12 col-lg-12 \">
                   <p>Disponible</p>
                    <div class=\"form-group\">
                {{form_widget(form.isAvailable, { 'attr': {'class': 'form-edit'}})}}
                    </div>
                </div>
        </div> 
        <div class=\"row\">
            <div class=\"col-md-6 col-lg-12\">
                <p>Prix</p>

                <div class=\"form-group\">
            {{form_widget(form.price, { 'attr': {'class': 'form-edit'}})}}
                </div>
            </div>
        </div> 
        <div class=\"row\">

            <div class=\"col-md-6 col-lg-12\">
            <p>Medicament</p>
                <div class=\"form-group\">
            {{form_widget(form.drugs)}}
                </div>
            </div>
        </div> 
        <div class=\"form-btn\">
            <button class=\"submit-btn\">Valider</button>
        </div>
{{ form_end(form) }}
", "pharmacy_availabe_drugs/_form.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\pharmacy_availabe_drugs\\_form.html.twig");
    }
}
