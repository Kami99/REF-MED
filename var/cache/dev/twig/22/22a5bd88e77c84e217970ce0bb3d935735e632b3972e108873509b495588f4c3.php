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
class __TwigTemplate_103e103a5a62fd74389280a425610e9175294991395665f85d327d36c7ac5bf3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'result_content' => [$this, 'block_result_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "main_refmed/main_result.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/result_doctor_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/result_doctor_search.html.twig"));

        $this->parent = $this->loadTemplate("main_refmed/main_result.html.twig", "main_refmed/result_doctor_search.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_result_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "result_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "result_content"));

        // line 3
        echo "     <!-- ***** Hero Area Start ***** -->

    <!-- ***** Hero Area End ***** -->
    ";
        // line 6
        if (((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 6, $this->source); })()) != null)) {
            // line 7
            echo "    <div class=\"medilife-services-area p-4\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 10
            $context["i"] = 0;
            // line 11
            echo "
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
                // line 13
                echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card-container\">
                        <span class=\"pro\" data-lat=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 15), "latitude", [], "any", false, false, false, 15), "html", null, true);
                echo "\"  data-location=\"Dr  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "FullName", [], "any", false, false, false, 15), "html", null, true);
                echo " à <br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 15), "nameLocation", [], "any", false, false, false, 15)), "truncate", [0 => 25, 1 => "..."], "method", false, false, false, 15), "html", null, true);
                echo "\" data-lon=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 15), "longitude", [], "any", false, false, false, 15), "html", null, true);
                echo "\">
                        ";
                // line 16
                $context["distance_m"] = (twig_get_attribute($this->env, $this->source, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new RuntimeError('Variable "distance" does not exist.', 16, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16) * 1000);
                // line 17
                echo "                            ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env,                 // line 18
(isset($context["distance_m"]) || array_key_exists("distance_m", $context) ? $context["distance_m"] : (function () { throw new RuntimeError('Variable "distance_m" does not exist.', 18, $this->source); })()), 0, " ", " "), "html", null, true);
                echo " m
                        </span>
                        ";
                // line 20
                if (twig_get_attribute($this->env, $this->source, $context["doctor"], "pictureProfil", [], "any", false, false, false, 20)) {
                    // line 21
                    echo "                        <img class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["doctor"], "imageFile"), "html", null, true);
                    echo "\"alt=\"user\" />
                        ";
                } else {
                    // line 23
                    echo "                        <img  class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/NotImageProfile.png"), "html", null, true);
                    echo "\" 
                        alt=\"Empty Image\">
                       ";
                }
                // line 26
                echo "                        <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "FullName", [], "any", false, false, false, 26), "html", null, true);
                echo ", <h6>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "profession", [], "any", false, false, false, 26), "html", null, true);
                echo "</h6></h5>
                        <h6>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 27), "nameLocation", [], "any", false, false, false, 27)), "truncate", [0 => 50, 1 => "..."], "method", false, false, false, 27), "html", null, true);
                echo "</h6>
                        <p>  Tarif consultation Min : ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMin", [], "any", false, false, false, 28), "html", null, true);
                echo "
                        <br/>  Tarif consultation Max : ";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMax", [], "any", false, false, false, 29), "html", null, true);
                echo "
                        </p>
                        <div class=\"buttons\">
                        <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["doctor"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
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
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["doctor"], "expertise", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
                    echo "                      
                                <li>";
                    // line 43
                    echo twig_escape_filter($this->env, $context["expertise"], "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expertise'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "
                            </ul>
                        </div>
                    </div>
                    </div>
                ";
                // line 50
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 50, $this->source); })()) + 1);
                // line 51
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doctor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
                <div class=\"row\">
                    <div class=\"col-full\">
                        ";
            // line 56
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 56, $this->source); })()));
            echo "
                    </div>
                </div>
    </div>
        </div>
    
                ";
        } else {
            // line 63
            echo "                <h1 class=\"h2 mb-70\">Désolé, nous n'avons trouvé aucun professionnel pour votre recherche… </h1>
            



    <div class=\"medilife-book-an-appoinment-area\">

                <div class=\"appointment-form-content p-4\">
                    <h2 class=\"lead\">Essayez avec d'autres critères de recherche.</h2> 

                ";
            // line 73
            $this->loadTemplate("includeApp/_form_search_doctor.html.twig", "main_refmed/result_doctor_search.html.twig", 73)->display($context);
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
        // line 98
        echo "
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
        return "main_refmed/result_doctor_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 98,  218 => 73,  206 => 63,  196 => 56,  191 => 53,  184 => 51,  182 => 50,  175 => 45,  167 => 43,  161 => 42,  148 => 32,  142 => 29,  138 => 28,  134 => 27,  127 => 26,  120 => 23,  114 => 21,  112 => 20,  107 => 18,  105 => 17,  103 => 16,  93 => 15,  89 => 13,  85 => 12,  82 => 11,  80 => 10,  75 => 7,  73 => 6,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main_refmed/main_result.html.twig' %}
{% block result_content %}
     <!-- ***** Hero Area Start ***** -->

    <!-- ***** Hero Area End ***** -->
    {% if doctors != null %}
    <div class=\"medilife-services-area p-4\">
        <div class=\"container\">
            <div class=\"row\">
                {% set i = 0 %}

                {% for doctor in doctors %}
                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card-container\">
                        <span class=\"pro\" data-lat=\"{{doctor.location.latitude}}\"  data-location=\"Dr  {{doctor.FullName}} à <br>{{doctor.location.nameLocation |u.truncate(25, '...')}}\" data-lon=\"{{doctor.location.longitude}}\">
                        {% set distance_m = distance[i] *1000 %}
                            {{
                              distance_m|number_format(0,' ',' ')}} m
                        </span>
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
                {% set i = i+1 %}

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
{% endblock result_content %}", "main_refmed/result_doctor_search.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\result_doctor_search.html.twig");
    }
}
