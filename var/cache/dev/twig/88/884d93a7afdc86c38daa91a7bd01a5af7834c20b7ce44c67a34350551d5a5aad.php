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

/* includeApp/_form_search_drugs.html.twig */
class __TwigTemplate_d9914d461d03f2c178bdf6251a85cbff08456441aad21023e355effb98f4f1b3 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includeApp/_form_search_drugs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includeApp/_form_search_drugs.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDrugs"]) || array_key_exists("formDrugs", $context) ? $context["formDrugs"] : (function () { throw new RuntimeError('Variable "formDrugs" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
<div class=\"row align-items-end\">
    <div class=\"col-12 col-md-6\">
        <div class=\"form-group\">
            ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDrugs"]) || array_key_exists("formDrugs", $context) ? $context["formDrugs"] : (function () { throw new RuntimeError('Variable "formDrugs" does not exist.', 5, $this->source); })()), "name", [], "any", false, false, false, 5), 'row');
        echo "
        </div>
    </div>
    <div class=\"col-12 col-md-4\">
        <div class=\"form-group\">
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formDrugs"]) || array_key_exists("formDrugs", $context) ? $context["formDrugs"] : (function () { throw new RuntimeError('Variable "formDrugs" does not exist.', 10, $this->source); })()), "distance", [], "any", false, false, false, 10), 'row');
        echo "
        </div>
    </div>
    <div class=\"col-12 col-md-5 mb-0\">
        <div class=\"form-group mb-0\">
            <button type=\"submit\" class=\"btn medilife-btn\">Recherchez<span><i class=\"fa fa-search\" aria-hidden=\"true\"></i></span></button>
        </div>
    </div>
</div>
";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formDrugs"]) || array_key_exists("formDrugs", $context) ? $context["formDrugs"] : (function () { throw new RuntimeError('Variable "formDrugs" does not exist.', 19, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includeApp/_form_search_drugs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 19,  58 => 10,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{form_start(formDrugs)}}
<div class=\"row align-items-end\">
    <div class=\"col-12 col-md-6\">
        <div class=\"form-group\">
            {{ form_row(formDrugs.name) }}
        </div>
    </div>
    <div class=\"col-12 col-md-4\">
        <div class=\"form-group\">
            {{ form_row(formDrugs.distance) }}
        </div>
    </div>
    <div class=\"col-12 col-md-5 mb-0\">
        <div class=\"form-group mb-0\">
            <button type=\"submit\" class=\"btn medilife-btn\">Recherchez<span><i class=\"fa fa-search\" aria-hidden=\"true\"></i></span></button>
        </div>
    </div>
</div>
{{form_end(formDrugs)}}", "includeApp/_form_search_drugs.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\includeApp\\_form_search_drugs.html.twig");
    }
}
