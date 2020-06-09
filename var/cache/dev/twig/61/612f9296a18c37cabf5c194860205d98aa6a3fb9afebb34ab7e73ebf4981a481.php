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

/* main_refmed/result_pharmacy_search.html.twig */
class __TwigTemplate_f387b2e9223761ff506038943108868d0ac3719f26779c04dad5353711ea273b extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/result_pharmacy_search.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/result_pharmacy_search.html.twig"));

        $this->parent = $this->loadTemplate("main_refmed/main_result.html.twig", "main_refmed/result_pharmacy_search.html.twig", 1);
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
        if (((isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 3, $this->source); })()) != null)) {
            // line 4
            echo "<div class=\"container\">
    <br>
    <p>Les médicaments trouvées sont : <strong>";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["drugs"]) || array_key_exists("drugs", $context) ? $context["drugs"] : (function () { throw new RuntimeError('Variable "drugs" does not exist.', 6, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["drug"]) {
                echo twig_escape_filter($this->env, $context["drug"], "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drug'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</strong> </p>
    <br>
    <div class=\"row\">
    ";
            // line 9
            $context["i"] = 0;
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pharmacies"]) || array_key_exists("pharmacies", $context) ? $context["pharmacies"] : (function () { throw new RuntimeError('Variable "pharmacies" does not exist.', 10, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pharmacy"]) {
                // line 11
                echo "        <div class=\"card\" data-lat=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pharmacy"], "location", [], "any", false, false, false, 11), "latitude", [], "any", false, false, false, 11), "html", null, true);
                echo "\"  data-location=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pharmacy"], "pharmacyName", [], "any", false, false, false, 11), "html", null, true);
                echo " à <br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pharmacy"], "location", [], "any", false, false, false, 11), "nameLocation", [], "any", false, false, false, 11)), "truncate", [0 => 25, 1 => "..."], "method", false, false, false, 11), "html", null, true);
                echo "\" data-lon=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pharmacy"], "location", [], "any", false, false, false, 11), "longitude", [], "any", false, false, false, 11), "html", null, true);
                echo "\">
            <input type=\"checkbox\" id=\"card";
                // line 12
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 12, $this->source); })()), "html", null, true);
                echo "\" class=\"more\" aria-hidden=\"true\">
            <div class=\"content\">
                <div class=\"front\" style=\"background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')\">
                    <div class=\"inner\">
                        <h2>";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pharmacy"], "pharmacyName", [], "any", false, false, false, 16), "html", null, true);
                echo "</h2>
                        <label for=\"card";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "\" class=\"button\" aria-hidden=\"true\">
                            Obtenez plus de détails
                        </label>
                    </div>
                </div>
                <div class=\"back\">
                    <div class=\"inner\">
                        <div class=\"description\">
                            <p>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["drugs"]) || array_key_exists("drugs", $context) ? $context["drugs"] : (function () { throw new RuntimeError('Variable "drugs" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25), "description", [], "any", false, false, false, 25), "html", null, true);
                echo "
                                <br>
                                Situé à : 
                                <strong>
                                ";
                // line 29
                $context["distance_m"] = (twig_get_attribute($this->env, $this->source, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new RuntimeError('Variable "distance" does not exist.', 29, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29) * 1000);
                // line 30
                echo "                                ";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env,                 // line 31
(isset($context["distance_m"]) || array_key_exists("distance_m", $context) ? $context["distance_m"] : (function () { throw new RuntimeError('Variable "distance_m" does not exist.', 31, $this->source); })()), 0, " ", " "), "html", null, true);
                echo " m
                                </strong> de vous
                            </p>
                               
                     
                                  
                        </div>
                        <div class=\"location\">";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["pharmacy"], "location", [], "any", false, false, false, 38), "nameLocation", [], "any", false, false, false, 38)), "truncate", [0 => 55, 1 => "..."], "method", false, false, false, 38), "html", null, true);
                echo "</div>
                        <div class=\"price\">
                            ";
                // line 40
                if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["drugs"]) || array_key_exists("drugs", $context) ? $context["drugs"] : (function () { throw new RuntimeError('Variable "drugs" does not exist.', 40, $this->source); })()), 0, [], "array", false, false, false, 40), "pharmacyAvailabeDrugs", [], "any", false, false, false, 40))) {
                    // line 41
                    echo "                            ";
                } else {
                    // line 42
                    echo "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["drugs"]) || array_key_exists("drugs", $context) ? $context["drugs"] : (function () { throw new RuntimeError('Variable "drugs" does not exist.', 42, $this->source); })()), 0, [], "array", false, false, false, 42), "pharmacyAvailabeDrugs", [], "any", false, false, false, 42));
                    foreach ($context['_seq'] as $context["_key"] => $context["available"]) {
                        // line 43
                        echo "                            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["available"], "pharmacy", [], "any", false, false, false, 43) === $context["pharmacy"])) {
                            // line 44
                            echo "                            ";
                            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["available"], "price", [], "any", false, false, false, 44), 0, " ", " "), "html", null, true);
                            echo " FCFA
                            ";
                        }
                        // line 45
                        echo "   
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['available'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                            ";
                }
                // line 48
                echo "    
                        </div>
                            <label for=\"card1\" class=\"button return\" aria-hidden=\"true\">
                                <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
                             </label>
                             <button type=\"button\" class=\"btn btn-success mt-3 mb-3\">Disponible</button>
    
                    </div>
                </div>
            </div>
        </div>
        ";
                // line 59
                $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 59, $this->source); })()) + 1);
                // line 60
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pharmacy'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "</div>

    

</div>
";
        } else {
            // line 67
            echo "<h1 class=\"h2 mb-70\">Désolé, nous n'avons pas trouvé le médicament recherché… </h1>
  <div class=\"medilife-book-an-appoinment-area\">

                <div class=\"appointment-form-content p-4\">
                    <h2 class=\"lead\">Essayez avec d'autres critères de recherche.</h2> 

                ";
            // line 73
            $this->loadTemplate("includeApp/_form_search_drugs.html.twig", "main_refmed/result_pharmacy_search.html.twig", 73)->display($context);
            echo "       
                </div>      
            </div>      
                <div class=\"container mt-50 mb-30\">
                    <div class=\"row row-card p-4\">
                        <div class=\"col-lg-4 col-md-12 mt-25\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg\">RECHERCHEZ </button>    
                        </div>

                    </div>



</div>


    
";
        }
        // line 91
        echo "

  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main_refmed/result_pharmacy_search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 91,  219 => 73,  211 => 67,  203 => 61,  197 => 60,  195 => 59,  182 => 48,  179 => 47,  172 => 45,  166 => 44,  163 => 43,  158 => 42,  155 => 41,  153 => 40,  148 => 38,  138 => 31,  136 => 30,  134 => 29,  127 => 25,  116 => 17,  112 => 16,  105 => 12,  94 => 11,  89 => 10,  87 => 9,  74 => 6,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'main_refmed/main_result.html.twig' %}
{% block result_content %}
{% if pharmacies != null %}
<div class=\"container\">
    <br>
    <p>Les médicaments trouvées sont : <strong>{% for drug in drugs %}{{drug}}{% endfor %}</strong> </p>
    <br>
    <div class=\"row\">
    {% set i = 0 %}
    {% for pharmacy in pharmacies %}
        <div class=\"card\" data-lat=\"{{pharmacy.location.latitude}}\"  data-location=\"{{pharmacy.pharmacyName}} à <br>{{pharmacy.location.nameLocation |u.truncate(25, '...')}}\" data-lon=\"{{pharmacy.location.longitude}}\">
            <input type=\"checkbox\" id=\"card{{i}}\" class=\"more\" aria-hidden=\"true\">
            <div class=\"content\">
                <div class=\"front\" style=\"background-image: url('https://images.unsplash.com/photo-1529408686214-b48b8532f72c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=986e2dee5c1b488d877ad7ba1afaf2ec&auto=format&fit=crop&w=1350&q=80')\">
                    <div class=\"inner\">
                        <h2>{{pharmacy.pharmacyName}}</h2>
                        <label for=\"card{{i}}\" class=\"button\" aria-hidden=\"true\">
                            Obtenez plus de détails
                        </label>
                    </div>
                </div>
                <div class=\"back\">
                    <div class=\"inner\">
                        <div class=\"description\">
                            <p>{{drugs[0].description}}
                                <br>
                                Situé à : 
                                <strong>
                                {% set distance_m = distance[i] *1000 %}
                                {{
                                  distance_m|number_format(0,' ',' ')}} m
                                </strong> de vous
                            </p>
                               
                     
                                  
                        </div>
                        <div class=\"location\">{{pharmacy.location.nameLocation|u.truncate(55, '...')}}</div>
                        <div class=\"price\">
                            {% if drugs[0].pharmacyAvailabeDrugs is empty %}
                            {% else %}
                            {% for available in drugs[0].pharmacyAvailabeDrugs %}
                            {% if available.pharmacy  is same as(pharmacy) %}
                            {{available.price|number_format(0,' ',' ')}} FCFA
                            {% endif %}   
                            {% endfor %}
                            {% endif %}
    
                        </div>
                            <label for=\"card1\" class=\"button return\" aria-hidden=\"true\">
                                <i class=\"fa fa-arrow-left\" aria-hidden=\"true\"></i>
                             </label>
                             <button type=\"button\" class=\"btn btn-success mt-3 mb-3\">Disponible</button>
    
                    </div>
                </div>
            </div>
        </div>
        {% set i = i+1 %}
    {% endfor %}
</div>

    

</div>
{% else %}
<h1 class=\"h2 mb-70\">Désolé, nous n'avons pas trouvé le médicament recherché… </h1>
  <div class=\"medilife-book-an-appoinment-area\">

                <div class=\"appointment-form-content p-4\">
                    <h2 class=\"lead\">Essayez avec d'autres critères de recherche.</h2> 

                {% include \"includeApp/_form_search_drugs.html.twig\" %}       
                </div>      
            </div>      
                <div class=\"container mt-50 mb-30\">
                    <div class=\"row row-card p-4\">
                        <div class=\"col-lg-4 col-md-12 mt-25\">
                        <button type=\"button\" class=\"btn btn-primary btn-lg\">RECHERCHEZ </button>    
                        </div>

                    </div>



</div>


    
{% endif %}


  
{% endblock result_content %}", "main_refmed/result_pharmacy_search.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\result_pharmacy_search.html.twig");
    }
}
