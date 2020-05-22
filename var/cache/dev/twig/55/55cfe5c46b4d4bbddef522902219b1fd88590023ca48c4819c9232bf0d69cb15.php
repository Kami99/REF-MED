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
class __TwigTemplate_fe00b2804e75ef334459ba31f6d6b5dd9f7776f5831df1f6892bc98ffa4221aa extends \Twig\Template
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
    public function block_addStyleSheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        // line 3
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet/leaflet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
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
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/result_doctor_search.html.twig", 6)->display($context);
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 8
            echo "<div class=\"container\">
    <div class=\"alert alert-";
            // line 9
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
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
        // line 14
        echo " <!-- ***** Hero Area Start ***** -->
 <section class=\"single-hero-slide bg-img bg-overlay-white\" id=\"map\" data-latUser=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["latUser"]) || array_key_exists("latUser", $context) ? $context["latUser"] : (function () { throw new RuntimeError('Variable "latUser" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" data-lonUser=\"";
        echo twig_escape_filter($this->env, (isset($context["lonUser"]) || array_key_exists("lonUser", $context) ? $context["lonUser"] : (function () { throw new RuntimeError('Variable "lonUser" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" style=\"height: 400px;\" data-userDistance=\"";
        echo twig_escape_filter($this->env, (isset($context["userDistance"]) || array_key_exists("userDistance", $context) ? $context["userDistance"] : (function () { throw new RuntimeError('Variable "userDistance" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\" >

</section>
    <!-- ***** Hero Area End ***** -->
    ";
        // line 19
        if (((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 19, $this->source); })()) != null)) {
            // line 20
            echo "    <div class=\"medilife-services-area p-4\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 23, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
                // line 24
                echo "                ";
                $context["i"] = 0;
                // line 25
                echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card-container\">
                        <span class=\"pro\" data-lat=\"";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 27), "latitude", [], "any", false, false, false, 27), "html", null, true);
                echo "\"  data-location=\"Dr  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "FullName", [], "any", false, false, false, 27), "html", null, true);
                echo " à <br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 27), "nameLocation", [], "any", false, false, false, 27)), "truncate", [0 => 25, 1 => "..."], "method", false, false, false, 27), "html", null, true);
                echo "\" data-lon=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 27), "longitude", [], "any", false, false, false, 27), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new RuntimeError('Variable "distance" does not exist.', 27, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 27, $this->source); })()), [], "array", false, false, false, 27), "html", null, true);
                echo "</span>
                        ";
                // line 28
                if (twig_get_attribute($this->env, $this->source, $context["doctor"], "pictureProfil", [], "any", false, false, false, 28)) {
                    // line 29
                    echo "                        <img class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["doctor"], "imageFile"), "html", null, true);
                    echo "\"alt=\"user\" />
                        ";
                } else {
                    // line 31
                    echo "                        <img  class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/NotImageProfile.png"), "html", null, true);
                    echo "\" 
                        alt=\"Empty Image\">
                       ";
                }
                // line 34
                echo "                        <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "FullName", [], "any", false, false, false, 34), "html", null, true);
                echo ", <h6>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "profession", [], "any", false, false, false, 34), "html", null, true);
                echo "</h6></h5>
                        <h6>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 35), "nameLocation", [], "any", false, false, false, 35)), "truncate", [0 => 50, 1 => "..."], "method", false, false, false, 35), "html", null, true);
                echo "</h6>
                        <p>  Tarif consultation Min : ";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMin", [], "any", false, false, false, 36), "html", null, true);
                echo "
                        <br/>  Tarif consultation Max : ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMax", [], "any", false, false, false, 37), "html", null, true);
                echo "
                        </p>
                        <div class=\"buttons\">
                            <button class=\"primary\">
                                Prendre RDV
                            </button>
                        <a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["doctor"], "slug", [], "any", false, false, false, 43)]), "html", null, true);
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
                // line 53
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["doctor"], "expertise", [], "any", false, false, false, 53));
                foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
                    echo "                      
                                <li>";
                    // line 54
                    echo twig_escape_filter($this->env, $context["expertise"], "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expertise'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 56
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
            // line 62
            echo "
                <div class=\"row\">
                    <div class=\"col-full\">
                        ";
            // line 65
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 65, $this->source); })()));
            echo "
                    </div>
                </div>
    </div>
        </div>
    
                ";
        } else {
            // line 72
            echo "                <h1 class=\"h2 mb-70\">Désolé, nous n'avons trouvé aucun professionnel pour votre recherche… </h1>
            



    <div class=\"medilife-book-an-appoinment-area\">

                <div class=\"appointment-form-content p-4\">
                    <h2 class=\"lead\">Essayez avec d'autres critères de recherche.</h2> 

                ";
            // line 82
            $this->loadTemplate("includeApp/_form_search_doctor.html.twig", "main_refmed/result_doctor_search.html.twig", 82)->display($context);
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
        // line 107
        echo "
                </div>

            </div>
        </div>
    </div>
    
";
        // line 114
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/result_doctor_search.html.twig", 114)->display($context);
        // line 115
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "
";
        // line 121
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet.js"), "html", null, true);
        echo "\"></script>
<script>

    let elementsLatitude=document.querySelectorAll('[data-lat]')
    let elementLongitude =document.querySelectorAll('[data-lon]')
    let latUser =document.querySelector('[data-latUser]')
    let lonUser =document.querySelector('[data-lonUser]')
    let userDistance=document.querySelector('[data-userDistance]')

    window.onload=()=>{
    if (typeof elementsLatitude === undefined && typeof elementLongitude === undefined) {
    
        
    } else{
        viewLat=latUser.dataset.latuser
        viewLon=lonUser.dataset.lonuser
        userDistance=Number(userDistance.dataset.userdistance)
        
        myMap = L.map('map').setView([viewLat, viewLon], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>/ODbl -rendu  <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>',
    minZoom: 10,
    maxZoom: 20,

}).addTo(myMap);    
let doctorIcon = L.icon({
    iconUrl: \"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/mainRefMed/doctor.png"), "html", null, true);
        echo "\",
    iconSize:     [35, 50], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -90] // point from which the popup should open relative to the iconAnchor
});
let latitudes=Array.from(elementsLatitude).map(item => item.dataset.lat)
let longitudes=Array.from(elementLongitude).map(item => item.dataset.lon)
let locations=Array.from(elementLongitude).map(item => item.dataset.location)
let userPosition=[viewLat, viewLon]
myMap.panTo(userPosition)
let circle = L.circle(userPosition, {
                color: '#57b99b',
                fillColor: '#57b99b',
                fillOpacity: 0.3,
                radius: userDistance*1000 ,
            }).addTo(myMap);
    let marker = L.marker([viewLat, viewLon]).addTo(myMap)
    marker.bindPopup(\"Votre position\")
for (let i = 0; i < latitudes.length; i++) {
    let marker = L.marker([latitudes[i], longitudes[i]], {icon: doctorIcon}).addTo(myMap)
    marker.bindPopup(locations[i])

}


}
}
</script>
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
        return array (  367 => 148,  338 => 122,  334 => 121,  331 => 119,  321 => 118,  310 => 115,  308 => 114,  299 => 107,  271 => 82,  259 => 72,  249 => 65,  244 => 62,  233 => 56,  225 => 54,  219 => 53,  206 => 43,  197 => 37,  193 => 36,  189 => 35,  182 => 34,  175 => 31,  169 => 29,  167 => 28,  155 => 27,  151 => 25,  148 => 24,  144 => 23,  139 => 20,  137 => 19,  126 => 15,  123 => 14,  110 => 11,  106 => 10,  102 => 9,  99 => 8,  95 => 7,  93 => 6,  83 => 5,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %}
{%block addStyleSheets%}
\t<link href=\"{{asset('bower_components/js/leaflet/leaflet.css')}}\" rel=\"stylesheet\">
{%endblock %}
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
 <section class=\"single-hero-slide bg-img bg-overlay-white\" id=\"map\" data-latUser=\"{{latUser}}\" data-lonUser=\"{{lonUser}}\" style=\"height: 400px;\" data-userDistance=\"{{userDistance}}\" >

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
                        <span class=\"pro\" data-lat=\"{{doctor.location.latitude}}\"  data-location=\"Dr  {{doctor.FullName}} à <br>{{doctor.location.nameLocation |u.truncate(25, '...')}}\" data-lon=\"{{doctor.location.longitude}}\">{{distance[i]}}</span>
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

{# <script src=\"{{asset('bower_components/mainRefMed/js/alert.js')}}\"></script> #}
{{ parent() }}
<script src=\"{{asset('bower_components/js/leaflet.js')}}\"></script>
<script>

    let elementsLatitude=document.querySelectorAll('[data-lat]')
    let elementLongitude =document.querySelectorAll('[data-lon]')
    let latUser =document.querySelector('[data-latUser]')
    let lonUser =document.querySelector('[data-lonUser]')
    let userDistance=document.querySelector('[data-userDistance]')

    window.onload=()=>{
    if (typeof elementsLatitude === undefined && typeof elementLongitude === undefined) {
    
        
    } else{
        viewLat=latUser.dataset.latuser
        viewLon=lonUser.dataset.lonuser
        userDistance=Number(userDistance.dataset.userdistance)
        
        myMap = L.map('map').setView([viewLat, viewLon], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
    attribution: 'Données &copy; <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>/ODbl -rendu  <a href=\"https://www.openstreetmap.org/\">OpenStreetMap</a>',
    minZoom: 10,
    maxZoom: 20,

}).addTo(myMap);    
let doctorIcon = L.icon({
    iconUrl: \"{{asset('bower_components/mainRefMed/doctor.png')}}\",
    iconSize:     [35, 50], // size of the icon
    iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -90] // point from which the popup should open relative to the iconAnchor
});
let latitudes=Array.from(elementsLatitude).map(item => item.dataset.lat)
let longitudes=Array.from(elementLongitude).map(item => item.dataset.lon)
let locations=Array.from(elementLongitude).map(item => item.dataset.location)
let userPosition=[viewLat, viewLon]
myMap.panTo(userPosition)
let circle = L.circle(userPosition, {
                color: '#57b99b',
                fillColor: '#57b99b',
                fillOpacity: 0.3,
                radius: userDistance*1000 ,
            }).addTo(myMap);
    let marker = L.marker([viewLat, viewLon]).addTo(myMap)
    marker.bindPopup(\"Votre position\")
for (let i = 0; i < latitudes.length; i++) {
    let marker = L.marker([latitudes[i], longitudes[i]], {icon: doctorIcon}).addTo(myMap)
    marker.bindPopup(locations[i])

}


}
}
</script>
{% endblock %}", "main_refmed/result_doctor_search.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\result_doctor_search.html.twig");
    }
}
