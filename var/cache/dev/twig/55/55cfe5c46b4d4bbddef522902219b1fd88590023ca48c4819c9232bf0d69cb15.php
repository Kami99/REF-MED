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
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/css/bootstrap4/select-default.css"), "html", null, true);
        echo "\">
\t<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet/leaflet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/result_doctor_search.html.twig", 7)->display($context);
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 9
            echo "<div class=\"container\">
    <div class=\"alert alert-";
            // line 10
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo "\">
        ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
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
        // line 15
        echo " <!-- ***** Hero Area Start ***** -->
 <section class=\"single-hero-slide bg-img bg-overlay-white\" id=\"map\" data-latUser=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["latUser"]) || array_key_exists("latUser", $context) ? $context["latUser"] : (function () { throw new RuntimeError('Variable "latUser" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" data-lonUser=\"";
        echo twig_escape_filter($this->env, (isset($context["lonUser"]) || array_key_exists("lonUser", $context) ? $context["lonUser"] : (function () { throw new RuntimeError('Variable "lonUser" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" style=\"height: 400px;\" data-userDistance=\"";
        echo twig_escape_filter($this->env, (isset($context["userDistance"]) || array_key_exists("userDistance", $context) ? $context["userDistance"] : (function () { throw new RuntimeError('Variable "userDistance" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" >

</section>
    <!-- ***** Hero Area End ***** -->
    ";
        // line 20
        if (((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 20, $this->source); })()) != null)) {
            // line 21
            echo "    <div class=\"medilife-services-area p-4\">
        <div class=\"container\">
            <div class=\"row\">
                ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["doctor"]) {
                // line 25
                echo "                ";
                $context["i"] = 0;
                // line 26
                echo "                <div class=\"col-12 col-md-6 col-lg-4\">
                    <div class=\"card-container\">
                        <span class=\"pro\" data-lat=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 28), "latitude", [], "any", false, false, false, 28), "html", null, true);
                echo "\"  data-location=\"Dr  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "FullName", [], "any", false, false, false, 28), "html", null, true);
                echo " à <br>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 28), "nameLocation", [], "any", false, false, false, 28)), "truncate", [0 => 25, 1 => "..."], "method", false, false, false, 28), "html", null, true);
                echo "\" data-lon=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 28), "longitude", [], "any", false, false, false, 28), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["distance"]) || array_key_exists("distance", $context) ? $context["distance"] : (function () { throw new RuntimeError('Variable "distance" does not exist.', 28, $this->source); })()), (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 28, $this->source); })()), [], "array", false, false, false, 28), "html", null, true);
                echo "</span>
                        ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["doctor"], "pictureProfil", [], "any", false, false, false, 29)) {
                    // line 30
                    echo "                        <img class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["doctor"], "imageFile"), "html", null, true);
                    echo "\"alt=\"user\" />
                        ";
                } else {
                    // line 32
                    echo "                        <img  class=\"round\" src=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/NotImageProfile.png"), "html", null, true);
                    echo "\" 
                        alt=\"Empty Image\">
                       ";
                }
                // line 35
                echo "                        <h5> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "FullName", [], "any", false, false, false, 35), "html", null, true);
                echo ", <h6>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "profession", [], "any", false, false, false, 35), "html", null, true);
                echo "</h6></h5>
                        <h6>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["doctor"], "location", [], "any", false, false, false, 36), "nameLocation", [], "any", false, false, false, 36)), "truncate", [0 => 50, 1 => "..."], "method", false, false, false, 36), "html", null, true);
                echo "</h6>
                        <p>  Tarif consultation Min : ";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMin", [], "any", false, false, false, 37), "html", null, true);
                echo "
                        <br/>  Tarif consultation Max : ";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["doctor"], "tarifMax", [], "any", false, false, false, 38), "html", null, true);
                echo "
                        </p>
                        <div class=\"buttons\">
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".modal\" class=\"primary\">
                                Prendre RDV
                            </button>
                        <a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doctor.show", ["slug" => twig_get_attribute($this->env, $this->source, $context["doctor"], "slug", [], "any", false, false, false, 44)]), "html", null, true);
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
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["doctor"], "expertise", [], "any", false, false, false, 54));
                foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
                    echo "                      
                                <li>";
                    // line 55
                    echo twig_escape_filter($this->env, $context["expertise"], "html", null, true);
                    echo "</li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expertise'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
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
            // line 63
            echo "
                <div class=\"row\">
                    <div class=\"col-full\">
                        ";
            // line 66
            echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["doctors"]) || array_key_exists("doctors", $context) ? $context["doctors"] : (function () { throw new RuntimeError('Variable "doctors" does not exist.', 66, $this->source); })()));
            echo "
                    </div>
                </div>
    </div>
        </div>
<!-- <div class=\"modal fade bd-example-modal-lg\" tabindex=\"-1\" role=\"form\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"form\">
    <div class=\"modal-content\">
";
            // line 74
            $this->loadTemplate("includeApp/_form_appoint.html.twig", "main_refmed/result_doctor_search.html.twig", 74)->display($context);
            // line 75
            echo "
    </div>

  </div>
</div> -->
<div id=\"my-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"my-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"my-modal-title\">Title</h5>
                <button class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempora ex at assumenda provident animi odio modi sint quis adipisci hic numquam quae, distinctio officia beatae! Deserunt dicta modi atque.
                Accusantium, tempora officia minima provident voluptates quisquam ullam non vel voluptatum necessitatibus veniam praesentium obcaecati dicta modi quis! Repellendus architecto eligendi placeat consequatur natus dignissimos eaque cumque voluptatem ducimus eveniet!
                Asperiores tempora temporibus quam explicabo corrupti, dolorem odio officiis impedit aut blanditiis expedita. Magni reiciendis minus esse, fugiat quibusdam optio harum, nam officia tempore ratione, corrupti sapiente suscipit doloribus dolor.
                Voluptate nemo officia odio vel reiciendis repellendus recusandae qui inventore quibusdam distinctio vero cum, laboriosam nesciunt nulla ratione nam, modi et nostrum! Consequatur deleniti sint quibusdam adipisci neque, obcaecati iure?
                Molestiae perferendis consequuntur eum maxime! Illo quaerat cumque, facere culpa reiciendis dolorem magni harum ullam numquam. Iure, provident maxime labore reiciendis cumque natus tenetur aspernatur quaerat velit soluta nostrum dolorum.
                Esse vero expedita facere tempora iure porro laborum qui reprehenderit, necessitatibus omnis fugit illum maxime, repudiandae harum sequi modi aperiam accusantium eaque odit praesentium. Enim doloremque minima est maiores odio.</p>
            </div>
            <div class=\"modal-footer\">
                Footer
            </div>
        </div>
    </div>
</div>
    
                ";
        } else {
            // line 105
            echo "                <h1 class=\"h2 mb-70\">Désolé, nous n'avons trouvé aucun professionnel pour votre recherche… </h1>
            



    <div class=\"medilife-book-an-appoinment-area\">

                <div class=\"appointment-form-content p-4\">
                    <h2 class=\"lead\">Essayez avec d'autres critères de recherche.</h2> 

                ";
            // line 115
            $this->loadTemplate("includeApp/_form_search_doctor.html.twig", "main_refmed/result_doctor_search.html.twig", 115)->display($context);
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
        // line 140
        echo "
                </div>

            </div>
        </div>
    </div>
    
";
        // line 147
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/result_doctor_search.html.twig", 147)->display($context);
        // line 148
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 151
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        echo "
";
        // line 154
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t\t<script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/js/select-full.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 156
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
        // line 182
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
        return array (  410 => 182,  381 => 156,  377 => 155,  373 => 154,  370 => 152,  360 => 151,  349 => 148,  347 => 147,  338 => 140,  310 => 115,  298 => 105,  266 => 75,  264 => 74,  253 => 66,  248 => 63,  237 => 57,  229 => 55,  223 => 54,  210 => 44,  201 => 38,  197 => 37,  193 => 36,  186 => 35,  179 => 32,  173 => 30,  171 => 29,  159 => 28,  155 => 26,  152 => 25,  148 => 24,  143 => 21,  141 => 20,  130 => 16,  127 => 15,  114 => 12,  110 => 11,  106 => 10,  103 => 9,  99 => 8,  97 => 7,  87 => 6,  75 => 4,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %}
{%block addStyleSheets%}
\t<link rel=\"stylesheet\" href=\"{{asset('bower_components/tail/css/bootstrap4/select-default.css')}}\">
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
                            <button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".modal\" class=\"primary\">
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
<!-- <div class=\"modal fade bd-example-modal-lg\" tabindex=\"-1\" role=\"form\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg\" role=\"form\">
    <div class=\"modal-content\">
{% include \"includeApp/_form_appoint.html.twig\" %}

    </div>

  </div>
</div> -->
<div id=\"my-modal\" class=\"modal fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"my-modal-title\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"my-modal-title\">Title</h5>
                <button class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur tempora ex at assumenda provident animi odio modi sint quis adipisci hic numquam quae, distinctio officia beatae! Deserunt dicta modi atque.
                Accusantium, tempora officia minima provident voluptates quisquam ullam non vel voluptatum necessitatibus veniam praesentium obcaecati dicta modi quis! Repellendus architecto eligendi placeat consequatur natus dignissimos eaque cumque voluptatem ducimus eveniet!
                Asperiores tempora temporibus quam explicabo corrupti, dolorem odio officiis impedit aut blanditiis expedita. Magni reiciendis minus esse, fugiat quibusdam optio harum, nam officia tempore ratione, corrupti sapiente suscipit doloribus dolor.
                Voluptate nemo officia odio vel reiciendis repellendus recusandae qui inventore quibusdam distinctio vero cum, laboriosam nesciunt nulla ratione nam, modi et nostrum! Consequatur deleniti sint quibusdam adipisci neque, obcaecati iure?
                Molestiae perferendis consequuntur eum maxime! Illo quaerat cumque, facere culpa reiciendis dolorem magni harum ullam numquam. Iure, provident maxime labore reiciendis cumque natus tenetur aspernatur quaerat velit soluta nostrum dolorum.
                Esse vero expedita facere tempora iure porro laborum qui reprehenderit, necessitatibus omnis fugit illum maxime, repudiandae harum sequi modi aperiam accusantium eaque odit praesentium. Enim doloremque minima est maiores odio.</p>
            </div>
            <div class=\"modal-footer\">
                Footer
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
\t\t<script src=\"{{asset('bower_components/tail/js/select-full.min.js')}}\"></script>
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
