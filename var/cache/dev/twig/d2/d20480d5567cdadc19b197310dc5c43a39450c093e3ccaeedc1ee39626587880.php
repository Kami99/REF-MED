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

/* main_refmed/result_doctor_search.html.twig */
class __TwigTemplate_fa4a741c755e358845cd25527cd515dc78eb1370212586c566f858cad51819b8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "appMain.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/result_doctor_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/result_doctor_search.html.twig"));

        $this->parent = $this->loadTemplate("appMain.html.twig", "main_refmed/result_doctor_search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/result_doctor_search.html.twig", 3)->display($context);
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 4, $this->source); })()), "flashes", [], "any", false, false, false, 4));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 5
            echo "<div class=\"container\">
    <div class=\"alert alert-";
            // line 6
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 8
                echo "        <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>                    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo " <!-- ***** Hero Area Start ***** -->
 <section class=\"breadcumb-area bg-img gradient-background-overlay\" id=\"map\">

</section>
    <!-- ***** Hero Area End ***** -->
    ";
        // line 16
        if (((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 16, $this->source); })()) != null)) {
            // line 17
            echo "    <div class=\"medilife-services-area p-4\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
                // line 21
                echo "                ";
                $context["i"] = 0;
                // line 22
                echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card-container\">
                        <span class=\"pro\" data-lat=\"";
                // line 24
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 24), "latitude", [], "any", false, false, false, 24), "html", null, true);
                echo "\" data-lon=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 24), "longitude", [], "any", false, false, false, 24), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new RuntimeError('Variable "distance" does not exist.', 24, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 24, $this->source); })()), [], "array", false, false, false, 24), "html", null, true);
                echo "</span>
                        ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["doctor"], "pictureProfil", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                        <img class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["doctor"], "imageFile"), "html", null, true);
                    echo "\"alt=\"user\" />
                        ";
                } else {
                    // line 28
                    echo "                        <img  class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/NotImageProfile.png"), "html", null, true);
                    echo "\" 
                        alt=\"Empty Image\">
                       ";
                }
                // line 31
                echo "                        <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "FullName", [], "any", false, false, false, 31), "html", null, true);
                echo ", <h6>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "profession", [], "any", false, false, false, 31), "html", null, true);
                echo "</h6></h5>
                        <h6>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 32), "nameLocation", [], "any", false, false, false, 32)), "truncate", [0 => 50, 1 => "..."], "method", false, false, false, 32), "html", null, true);
                echo "</h6>
                        <p>  Tarif consultation Min : ";
                // line 33
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMin", [], "any", false, false, false, 33), "html", null, true);
                echo "
                        <br/>  Tarif consultation Max : ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMax", [], "any", false, false, false, 34), "html", null, true);
                echo "
                        </p>
                        <div class=\"buttons\">
                            <button class=\"primary\">
                                Prendre RDV
                            </button>
                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["doctor"], "slug", [], "any", false, false, false, 40)]), "html", null, true);
                echo "\">
                            <button class=\"primary ghost\">
                                Voir plus
                            </button>
                        </a>    
                        </div>
                        <div class=\"skills\">
                                
                            <h6>Expertise</h6>
                            <ul>
                                ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["doctor"], "expertise", [], "any", false, false, false, 50));
                foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
                    echo "                      
                                <li>";
                    // line 51
                    echo twig_escape_filter($this->env, $context["expertise"], "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expertise'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
                            </ul>
                        </div>
                    </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "
                <div class=\"row\">
                    <div class=\"col-full\">
                        ";
            // line 62
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 62, $this->source); })()));
            echo "
                    </div>
                </div>
    </div>
        </div>
    
                ";
        } else {
            // line 69
            echo "                <h1 class=\"h2 mb-70\">Désolé, nous n'avons trouvé aucun professionnel pour votre recherche… </h1>
            



    <div class=\"medilife-book-an-appoinment-area\">

                <div class=\"appointment-form-content p-4\">
                    <h2 class=\"lead\">Essayez avec d'autres critères de recherche.</h2> 

                ";
            // line 79
            $this->loadTemplate("includeApp/_form_search_doctor.html.twig", "main_refmed/result_doctor_search.html.twig", 79)->display($context);
            echo "       
                </div>      
            </div>      
                <div class=\"container mt-50 mb-30\">
                    <div class=\"row row-card p-4\">
                        <div class=\"col-8 col-md-12\">
                            <h3>Vous êtes praticien et vous n'apparaissez pas dans cette recherche ?
                            </h3>
                            <h5>Contactez-nous pour obtenir un référencement de votre cabinet.
                            </h5>
                        </div>
                        <div class=\"col-lg-4 col-md-12 mt-25\">
        <button type=\"button\" class=\"btn btn-primary btn-lg\">AJOUTER VOTRE CABINET</button> 
    
                        </div>

                    </div>



                </div>


                    
                ";
        }
        // line 104
        echo "
                </div>

            </div>
        </div>
    </div>
    
";
        // line 111
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/result_doctor_search.html.twig", 111)->display($context);
        // line 112
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 116
        echo "<script>
    let elementsLatitude=document.querySelectorAll('[data-lat]');
    let elementLongitude =document.querySelectorAll('[data-lon]');
    let latitudes=Array.from(elementsLatitude).map(item => item.dataset.lat);
    let longitudes=Array.from(elementsLatitudes).map(item => item.dataset.lon);
</script>
";
        // line 123
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main_refmed/result_doctor_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 123,  296 => 116,  286 => 115,  275 => 112,  273 => 111,  264 => 104,  236 => 79,  224 => 69,  214 => 62,  209 => 59,  198 => 53,  190 => 51,  184 => 50,  171 => 40,  162 => 34,  158 => 33,  154 => 32,  147 => 31,  140 => 28,  134 => 26,  132 => 25,  124 => 24,  120 => 22,  117 => 21,  113 => 20,  108 => 17,  106 => 16,  99 => 11,  86 => 8,  82 => 7,  78 => 6,  75 => 5,  71 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %}
{% block body %}
{% include \"includeApp/_navigation.html.twig\" %}
{% for label,messages in app.flashes %}
<div class=\"container\">
    <div class=\"alert alert-{{label}}\">
        {% for message in messages %}
        <p>{{message}}</p>                    
        {% endfor %}
{% endfor %}
 <!-- ***** Hero Area Start ***** -->
 <section class=\"breadcumb-area bg-img gradient-background-overlay\" id=\"map\">

</section>
    <!-- ***** Hero Area End ***** -->
    {% if doctors != null %}
    <div class=\"medilife-services-area p-4\">
        <div class=\"container\">
            <div class=\"row\">
                {% for doctor in doctors %}
                {% set i = 0 %}
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card-container\">
                        <span class=\"pro\" data-lat=\"{{doctor.location.latitude}}\" data-lon=\"{{doctor.location.longitude}}\">{{distance[i]}}</span>
                        {% if doctor.pictureProfil %}
                        <img class=\"round\" src=\"{{vich_uploader_asset(doctor, 'imageFile')}}\"alt=\"user\" />
                        {% else %}
                        <img  class=\"round\" src=\"{{asset('bower_components/images/NotImageProfile.png')}}\" 
                        alt=\"Empty Image\">
                       {% endif %}
                        <h5> {{doctor.FullName}}, <h6>{{doctor.profession }}</h6></h5>
                        <h6>{{doctor.location.nameLocation |u.truncate(50, '...')}}</h6>
                        <p>  Tarif consultation Min : {{doctor.tarifMin}}
                        <br/>  Tarif consultation Max : {{doctor.tarifMax}}
                        </p>
                        <div class=\"buttons\">
                            <button class=\"primary\">
                                Prendre RDV
                            </button>
                        <a href=\"{{path('doctor.show', {slug: doctor.slug})}}\">
                            <button class=\"primary ghost\">
                                Voir plus
                            </button>
                        </a>    
                        </div>
                        <div class=\"skills\">
                                
                            <h6>Expertise</h6>
                            <ul>
                                {% for expertise in doctor.expertise %}                      
                                <li>{{expertise}}</li>
                            {% endfor %}

                            </ul>
                        </div>
                    </div>
                    </div>
                {% endfor %}

                <div class=\"row\">
                    <div class=\"col-full\">
                        {{ knp_pagination_render(doctors)}}
                    </div>
                </div>
    </div>
        </div>
    
                {% else %}
                <h1 class=\"h2 mb-70\">Désolé, nous n'avons trouvé aucun professionnel pour votre recherche… </h1>
            



    <div class=\"medilife-book-an-appoinment-area\">

                <div class=\"appointment-form-content p-4\">
                    <h2 class=\"lead\">Essayez avec d'autres critères de recherche.</h2> 

                {% include \"includeApp/_form_search_doctor.html.twig\" %}       
                </div>      
            </div>      
                <div class=\"container mt-50 mb-30\">
                    <div class=\"row row-card p-4\">
                        <div class=\"col-8 col-md-12\">
                            <h3>Vous êtes praticien et vous n'apparaissez pas dans cette recherche ?
                            </h3>
                            <h5>Contactez-nous pour obtenir un référencement de votre cabinet.
                            </h5>
                        </div>
                        <div class=\"col-lg-4 col-md-12 mt-25\">
        <button type=\"button\" class=\"btn btn-primary btn-lg\">AJOUTER VOTRE CABINET</button> 
    
                        </div>

                    </div>



                </div>


                    
                {% endif %}

                </div>

            </div>
        </div>
    </div>
    
{% include \"includeApp/_footer.html.twig\" %}

{% endblock body %}

{% block javascripts %}
<script>
    let elementsLatitude=document.querySelectorAll('[data-lat]');
    let elementLongitude =document.querySelectorAll('[data-lon]');
    let latitudes=Array.from(elementsLatitude).map(item => item.dataset.lat);
    let longitudes=Array.from(elementsLatitudes).map(item => item.dataset.lon);
</script>
{# <script src=\"{{asset('bower_components/mainRefMed/js/alert.js')}}\"></script> #}
{{ parent() }}

{% endblock %}", "main_refmed/result_doctor_search.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\result_doctor_search.html.twig");
    }
}
