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

/* main_refmed/main_result.html.twig */
class __TwigTemplate_61e22e302e16752c73a2d8b3df9bf72825eeca11e055e10e0a309b8cabf7bf7f extends \Twig\Template
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
            'contain_result' => [$this, 'block_contain_result'],
            'header_map' => [$this, 'block_header_map'],
            'result_content' => [$this, 'block_result_content'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/main_result.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/main_result.html.twig"));

        $this->parent = $this->loadTemplate("appMain.html.twig", "main_refmed/main_result.html.twig", 1);
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
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/main_result.html.twig", 6)->display($context);
        // line 7
        $this->displayBlock('contain_result', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/main_result.html.twig", 16)->display($context);
        // line 17
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_contain_result($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contain_result"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contain_result"));

        // line 8
        $this->displayBlock('header_map', $context, $blocks);
        // line 12
        $this->displayBlock('result_content', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_header_map($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_map"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_map"));

        // line 9
        echo "<section class=\"single-hero-slide bg-img bg-overlay-white\" id=\"map\" data-latUser=\"";
        echo twig_escape_filter($this->env, (isset($context["latUser"]) || array_key_exists("latUser", $context) ? $context["latUser"] : (function () { throw new RuntimeError('Variable "latUser" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" data-lonUser=\"";
        echo twig_escape_filter($this->env, (isset($context["lonUser"]) || array_key_exists("lonUser", $context) ? $context["lonUser"] : (function () { throw new RuntimeError('Variable "lonUser" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" style=\"height: 400px;\" data-userDistance=\"";
        echo twig_escape_filter($this->env, (isset($context["userDistance"]) || array_key_exists("userDistance", $context) ? $context["userDistance"] : (function () { throw new RuntimeError('Variable "userDistance" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" >
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_result_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "result_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "result_content"));

        echo "       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 21
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"";
        // line 22
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
        // line 48
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
        return "main_refmed/main_result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 48,  200 => 22,  196 => 21,  186 => 20,  166 => 12,  148 => 9,  138 => 8,  128 => 12,  126 => 8,  116 => 7,  105 => 17,  103 => 16,  100 => 15,  98 => 7,  96 => 6,  86 => 5,  73 => 3,  63 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %}
{%block addStyleSheets%}
\t<link href=\"{{asset('bower_components/js/leaflet/leaflet.css')}}\" rel=\"stylesheet\">
{%endblock %}
{% block body %}
{% include \"includeApp/_navigation.html.twig\" %}
{% block contain_result %}
{% block header_map %}
<section class=\"single-hero-slide bg-img bg-overlay-white\" id=\"map\" data-latUser=\"{{latUser}}\" data-lonUser=\"{{lonUser}}\" style=\"height: 400px;\" data-userDistance=\"{{userDistance}}\" >
</section>
{% endblock header_map %}
{% block result_content %}       
{% endblock result_content %}
{% endblock %}

{% include \"includeApp/_footer.html.twig\" %}

{% endblock body %}

{% block javascripts %}
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
{% endblock %}", "main_refmed/main_result.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\main_result.html.twig");
    }
}
