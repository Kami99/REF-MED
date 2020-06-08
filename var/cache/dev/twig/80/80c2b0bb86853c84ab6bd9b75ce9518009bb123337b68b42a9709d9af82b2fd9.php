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

/* pharmacy_availabe_drugs/index.html.twig */
class __TwigTemplate_8f5d6bb0d98ab5f1198cb76fa9eb0564e907abe1553d86f98db72aacfce1c207 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'pharmacy_content' => [$this, 'block_pharmacy_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "pharmacy_availabe_drugs/_main.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pharmacy_availabe_drugs/index.html.twig"));

        $this->parent = $this->loadTemplate("pharmacy_availabe_drugs/_main.html.twig", "pharmacy_availabe_drugs/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Liste des médicaments";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_pharmacy_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pharmacy_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pharmacy_content"));

        // line 6
        echo "<div class=\"container-fluid p-5\">
    <h1>Liste des médicaments</h1>
    <blockquote style=\"font-style:italic; font-size:12px;\">Certains médicaments peuvent ne pas être répertoriés dans votre pharmacie, et apparraissent non répertoriés veuillez les répertoriés et les rendre disponibles s'il le sont.Si le boutton répertoriés s'affiche cela signifie qu'il n'est pas répertoriés dans votre pharmacie</blockquote>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nom du médicament</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["drugs"]) || array_key_exists("drugs", $context) ? $context["drugs"] : (function () { throw new RuntimeError('Variable "drugs" does not exist.', 18, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["drug"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["drug"], "nameDrugs", [], "any", false, false, false, 20), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 22
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["drug"], "pharmacyAvailabeDrugs", [], "any", false, false, false, 22))) {
                // line 23
                echo "                    <span class=\"badge badge-danger p-2\">Non répertoriés</span>
                    ";
            } else {
                // line 25
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["drug"], "pharmacyAvailabeDrugs", [], "any", false, false, false, 25));
                foreach ($context['_seq'] as $context["_key"] => $context["available"]) {
                    // line 26
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["available"], "pharmacy", [], "any", false, false, false, 26) === (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 26, $this->source); })()))) {
                        // line 27
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["available"], "isAvailable", [], "any", false, false, false, 27) != true)) {
                            // line 28
                            echo "                    <span class=\"badge badge-warning p-2\">Indisponible</span>
                    ";
                        } else {
                            // line 29
                            echo "  
                    <span class=\"badge badge-primary p-2\">Disponible</span>
                    ";
                        }
                        // line 32
                        echo "                    ";
                    }
                    echo "   
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['available'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 34
                echo "                    ";
            }
            // line 35
            echo "
                </td>
                <td>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pharmacy_availabe_drugs_show", ["id" => twig_get_attribute($this->env, $this->source, $context["drug"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">
                        <button type=\"button\" class=\"btn btn-primary\">Montrer</button> 
                    </a>
                    ";
            // line 41
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, $context["drug"], "pharmacyAvailabeDrugs", [], "any", false, false, false, 41))) {
                // line 42
                echo "                    <a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pharmacy_availabe_drugs_new");
                echo "\"><button type=\"button\" class=\"btn btn-success\">Répertorié dans la pharmacie</button></a>                                                                
                    ";
            } else {
                // line 44
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["drug"], "pharmacyAvailabeDrugs", [], "any", false, false, false, 44));
                foreach ($context['_seq'] as $context["_key"] => $context["available"]) {
                    // line 45
                    echo "                    ";
                    if ((twig_get_attribute($this->env, $this->source, $context["available"], "pharmacy", [], "any", false, false, false, 45) === (isset($context["pharmacy"]) || array_key_exists("pharmacy", $context) ? $context["pharmacy"] : (function () { throw new RuntimeError('Variable "pharmacy" does not exist.', 45, $this->source); })()))) {
                        // line 46
                        echo "                    ";
                        if ((twig_get_attribute($this->env, $this->source, $context["available"], "isAvailable", [], "any", false, false, false, 46) != true)) {
                            // line 47
                            echo "                    <a href=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pharmacy_availabe_drugs_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["drug"], "id", [], "any", false, false, false, 47)]), "html", null, true);
                            echo "\"> <button type=\"button\" class=\"btn btn-success\">Rendre Disponible</button> </a>
                    ";
                        } else {
                            // line 48
                            echo "  
                    <a href=\"";
                            // line 49
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pharmacy_availabe_drugs_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["drug"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                            echo "\"> <button type=\"button\" class=\"btn btn-warning\">Rendre Indisponible</button> </a>                      
                    ";
                        }
                        // line 51
                        echo "                    ";
                    }
                    echo "   
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['available'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "                    ";
            }
            // line 54
            echo "                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 57
            echo "            <tr>
                <td colspan=\"3\">Pas de médicaments</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['drug'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </tbody>
    </table>
    
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "pharmacy_availabe_drugs/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 61,  216 => 57,  209 => 54,  206 => 53,  197 => 51,  192 => 49,  189 => 48,  183 => 47,  180 => 46,  177 => 45,  172 => 44,  166 => 42,  164 => 41,  158 => 38,  153 => 35,  150 => 34,  141 => 32,  136 => 29,  132 => 28,  129 => 27,  126 => 26,  121 => 25,  117 => 23,  115 => 22,  110 => 20,  107 => 19,  102 => 18,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'pharmacy_availabe_drugs/_main.html.twig' %}

{% block title %}Liste des médicaments{% endblock %}

{% block pharmacy_content %}
<div class=\"container-fluid p-5\">
    <h1>Liste des médicaments</h1>
    <blockquote style=\"font-style:italic; font-size:12px;\">Certains médicaments peuvent ne pas être répertoriés dans votre pharmacie, et apparraissent non répertoriés veuillez les répertoriés et les rendre disponibles s'il le sont.Si le boutton répertoriés s'affiche cela signifie qu'il n'est pas répertoriés dans votre pharmacie</blockquote>
    <table class=\"table table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nom du médicament</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for drug in drugs %}
            <tr>
                <td>{{ drug.nameDrugs}}</td>
                <td>
                    {% if drug.pharmacyAvailabeDrugs is empty %}
                    <span class=\"badge badge-danger p-2\">Non répertoriés</span>
                    {% else %}
                    {% for available in drug.pharmacyAvailabeDrugs %}
                    {% if available.pharmacy  is same as(pharmacy) %}
                    {% if available.isAvailable != true %}
                    <span class=\"badge badge-warning p-2\">Indisponible</span>
                    {% else %}  
                    <span class=\"badge badge-primary p-2\">Disponible</span>
                    {% endif %}
                    {% endif %}   
                    {% endfor %}
                    {% endif %}

                </td>
                <td>
                    <a href=\"{{ path('pharmacy_availabe_drugs_show', {'id': drug.id}) }}\">
                        <button type=\"button\" class=\"btn btn-primary\">Montrer</button> 
                    </a>
                    {% if drug.pharmacyAvailabeDrugs is empty %}
                    <a href=\"{{ path('pharmacy_availabe_drugs_new') }}\"><button type=\"button\" class=\"btn btn-success\">Répertorié dans la pharmacie</button></a>                                                                
                    {% else %}
                    {% for available in drug.pharmacyAvailabeDrugs %}
                    {% if available.pharmacy  is same as(pharmacy) %}
                    {% if available.isAvailable != true %}
                    <a href=\"{{ path('pharmacy_availabe_drugs_edit', {'id': drug.id}) }}\"> <button type=\"button\" class=\"btn btn-success\">Rendre Disponible</button> </a>
                    {% else %}  
                    <a href=\"{{ path('pharmacy_availabe_drugs_edit', {'id': drug.id}) }}\"> <button type=\"button\" class=\"btn btn-warning\">Rendre Indisponible</button> </a>                      
                    {% endif %}
                    {% endif %}   
                    {% endfor %}
                    {% endif %}
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"3\">Pas de médicaments</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
</div>

{% endblock %}
", "pharmacy_availabe_drugs/index.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\pharmacy_availabe_drugs\\index.html.twig");
    }
}
