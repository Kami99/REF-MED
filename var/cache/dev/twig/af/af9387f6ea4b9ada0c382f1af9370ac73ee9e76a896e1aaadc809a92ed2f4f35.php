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

/* registration/register_doctor.html.twig */
class __TwigTemplate_bfbe5201a3e4a9fe26324a102331b299234d0e23285ca51d089c4ababe178ec6 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'addStyleSheets' => [$this, 'block_addStyleSheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_doctor.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register_doctor.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register_doctor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_addStyleSheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        // line 3
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/css/formRegisterBlog.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "

<div class=\"main\">

    <section class=\"signup\">
        <div class=\"container\">
            <div class=\"signup-content\">
                <div id=\"signup-form\" class=\"signup-form\">
                    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 14, $this->source); })()), 'form_start');
        echo "
                    <h2 class=\"form-title\">Creer un Compte REF-MED</h2>
                    <div class=\"form-group col-md-12\">
                        <div class=\"form-header\" id=\"map\">
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <span class=\"form-label\">Adresse</span>
                                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "location", [], "any", false, false, false, 23), "nameLocation", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "form-control", "id" => "adress"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <span class=\"form-label\">Latitude</span>
                                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "location", [], "any", false, false, false, 29), "latitude", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control", "id" => "lat"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <span class=\"form-label\">Longitude</span>
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "location", [], "any", false, false, false, 35), "longitude", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "form-control", "id" => "lon"]]);
        echo "
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"form-group\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "email", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-input"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 45, $this->source); })()), "firstName", [], "any", false, false, false, 45), 'row', ["attr" => ["class" => "form-input"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "LastName", [], "any", false, false, false, 48), 'row', ["attr" => ["class" => "form-input"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "imageFile", [], "any", false, false, false, 51), 'row', ["attr" => ["class" => "upload-box"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "password", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "form-input"]]);
        echo "
                        <span toggle=\"#password\" class=\"zmdi zmdi-eye field-icon toggle-password\"></span>
                    </div>

                    <div class=\"form-group\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "numberPhone", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-input"]]);
        echo "
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "profession", [], "any", false, false, false, 62), 'row', ["attr" => ["class" => "form-input"]]);
        echo "
                    <span class=\"select-arrow\"></span>
                    </div>
                    <div class=\"form-group\">
                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "expertise", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-input"]]);
        echo "
                    <span class=\"select-arrow\"></span>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"form-submit\" value=\"S'inscrire\"/>
                    </div>
                </div>
                <p class=\"loginhere\">
                    Avez un compte <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login_blog");
        echo "\" class=\"loginhere-link\">connectez vous ici</a>
                </p>

            </div>
        </div>
    </section>

</div>

    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 83, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/popper.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/js/select-full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/select.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "registration/register_doctor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 91,  253 => 90,  249 => 89,  245 => 88,  241 => 87,  237 => 86,  223 => 85,  211 => 83,  199 => 74,  188 => 66,  181 => 62,  175 => 59,  167 => 54,  161 => 51,  155 => 48,  149 => 45,  143 => 42,  133 => 35,  124 => 29,  115 => 23,  103 => 14,  93 => 6,  83 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{%block addStyleSheets%}
<link rel=\"stylesheet\" href=\"{{asset('bower_components/css/formRegisterBlog.css')}}\">
{%endblock%}
{% block body %}


<div class=\"main\">

    <section class=\"signup\">
        <div class=\"container\">
            <div class=\"signup-content\">
                <div id=\"signup-form\" class=\"signup-form\">
                    {{ form_start(registrationForm) }}
                    <h2 class=\"form-title\">Creer un Compte REF-MED</h2>
                    <div class=\"form-group col-md-12\">
                        <div class=\"form-header\" id=\"map\">
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <span class=\"form-label\">Adresse</span>
                                    {{ form_widget(registrationForm.location.nameLocation, { 'attr': {'class': 'form-control', 'id': 'adress'}}) }}
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <span class=\"form-label\">Latitude</span>
                                    {{ form_widget(registrationForm.location.latitude, { 'attr': {'class': 'form-control', 'id': 'lat'}}) }}
                                </div>
                            </div>
                            <div class=\"col-md-4\">
                                <div class=\"form-group\">
                                    <span class=\"form-label\">Longitude</span>
                                    {{ form_widget(registrationForm.location.longitude, { 'attr': {'class': 'form-control', 'id': 'lon'}}) }}
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class=\"form-group\">
                        {{ form_row(registrationForm.email,{ 'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(registrationForm.firstName,{ 'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(registrationForm.LastName,{ 'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(registrationForm.imageFile,{ 'attr': {'class': 'upload-box'}}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(registrationForm.password,{ 'attr': {'class': 'form-input'}}) }}
                        <span toggle=\"#password\" class=\"zmdi zmdi-eye field-icon toggle-password\"></span>
                    </div>

                    <div class=\"form-group\">
                        {{ form_row(registrationForm.numberPhone,{ 'attr': {'class': 'form-input'}}) }}
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(registrationForm.profession,{ 'attr': {'class': 'form-input'}}) }}
                    <span class=\"select-arrow\"></span>
                    </div>
                    <div class=\"form-group\">
                        {{ form_row(registrationForm.expertise,{ 'attr': {'class': 'form-input'}}) }}
                    <span class=\"select-arrow\"></span>
                    </div>
                    <div class=\"form-group\">
                        <input type=\"submit\" name=\"submit\" id=\"submit\" class=\"form-submit\" value=\"S'inscrire\"/>
                    </div>
                </div>
                <p class=\"loginhere\">
                    Avez un compte <a href=\"{{path('app_login_blog')}}\" class=\"loginhere-link\">connectez vous ici</a>
                </p>

            </div>
        </div>
    </section>

</div>

    {{ form_end(registrationForm) }}
{% endblock %}
{% block javascripts %}<script src=\"{{asset('bower_components/js/leaflet.js')}}\"></script>
<script src=\"{{asset('bower_components/js/jquery-3.2.1.min.js')}}\"></script>
<script src=\"{{asset('bower_components/js/popper.js')}}\"></script>
<script src=\"{{asset('bower_components/js/bootstrap.min.js')}}\"></script>
<script src=\"{{asset('bower_components/tail/js/select-full.min.js')}}\"></script>
<script src=\"{{asset('bower_components/js/map.js')}}\"></script>
<script src=\"{{asset('bower_components/js/select.js')}}\"></script>

{% endblock %}
", "registration/register_doctor.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\registration\\register_doctor.html.twig");
    }
}
