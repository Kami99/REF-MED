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

/* includeApp/_navigation.html.twig */
class __TwigTemplate_a42249ecb9999873d14489c0fba098186bced9d66a28746395033a1cc5596f84 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includeApp/_navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includeApp/_navigation.html.twig"));

        // line 1
        echo "

    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area\">
        <!-- Top Header Area -->


        <!-- Main Header Area -->
        <div class=\"main-header-area\" id=\"stickyHeader\">
            <div class=\"container h-100\" style=\"max-width:100% ;\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 h-100\">
                        <div class=\"main-menu h-100\">
                            <nav class=\"navbar h-100 navbar-expand-lg\">
                                <!-- Logo Area  -->
                                <a class=\"navbar-brand\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/mainRefMed/img/core-img/logoRFMD.png"), "html", null, true);
        echo "\"
                                        alt=\"Logo\" width=\"185px\"></a>

                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                                    data-target=\"#medilifeMenu\" aria-controls=\"medilifeMenu\" aria-expanded=\"false\"
                                    aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

                                <div class=\"collapse navbar-collapse\" id=\"medilifeMenu\">
                                    <!-- Menu Area -->
                                    <ul class=\"navbar-nav\" style=\"margin-left: 70px;\">
                                        ";
        // line 26
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", [0 => "_route"], "method", false, false, false, 26), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 27
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", [0 => "_route_params"], "method", false, false, false, 27));
        // line 28
        echo "                                        <li class=\"nav-item ";
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 28, $this->source); })()) == "/")) {
            echo "active";
        }
        echo "\">
                                            <a class=\"nav-link\" href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("Home");
        echo "\">Acceuil ";
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 29, $this->source); })()) == "/")) {
            echo "<span
                                                class=\"sr-only\">(current)</span>";
        }
        // line 30
        echo "</a>
                                        </li>
                                        <li class=\"nav-item ";
        // line 32
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 32, $this->source); })()) == "/services")) {
            echo "active";
        }
        echo "\">
                                            <a class=\"nav-link\" href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("services");
        echo "\">Services ";
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 33, $this->source); })()) == "/services")) {
            echo "<span
                                                class=\"sr-only\">(current)</span>";
        }
        // line 34
        echo "</a>
                                        </li>

                                    </li>
                                    ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38)) {
            // line 39
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">Gestion de votre compte</a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"#\">Accédez à votre espace</a>
                                            <a class=\"dropdown-item\" href=\"#\">Gérer votre compte</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Déconnecter vous</a>
                                        </div>
                                    </li>
                                  ";
        } else {
            // line 50
            echo "                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">Compte Professionnel</a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_pharmacy");
            echo "\">Inscription pharmacie</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_doctor");
            echo "\">Inscription praticien</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_laboratory");
            echo "\">Inscription Laboratoire</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 58
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se Connecter</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">Notre Forum </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"";
            // line 66
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\">accueil</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 67
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_blog");
            echo "\">S'inscire</a>
                                            <a class=\"dropdown-item\" href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">Se Connecter</a>
                                        </div>
                                    </li>
       
                                    ";
        }
        // line 73
        echo "

                                    <li class=\"nav-item ";
        // line 75
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 75, $this->source); })()) == "/contact")) {
            echo "active";
        }
        echo "\">
                                        <a class=\"nav-link\" href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact ";
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 76, $this->source); })()) == "/contact")) {
            echo "<span
                                            class=\"sr-only\">(current)</span>";
        }
        // line 77
        echo "</a>
                                    <li class=\"nav-item ";
        // line 78
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 78, $this->source); })()) == "/about")) {
            echo "active";
        }
        echo "\">
                                        <a class=\"nav-link\" href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\">A propos ";
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 79, $this->source); })()) == "/about")) {
            echo "<span
                                            class=\"sr-only\">(current)</span>";
        }
        // line 80
        echo " </a>
                                    </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href=\"#\" class=\"btn medilife-appoint-btn ml-30\">Appelez les Urgences</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includeApp/_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 80,  205 => 79,  199 => 78,  196 => 77,  189 => 76,  183 => 75,  179 => 73,  171 => 68,  167 => 67,  163 => 66,  152 => 58,  148 => 57,  144 => 56,  140 => 55,  133 => 50,  126 => 46,  117 => 39,  115 => 38,  109 => 34,  102 => 33,  96 => 32,  92 => 30,  85 => 29,  78 => 28,  76 => 27,  75 => 26,  60 => 16,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

    <!-- ***** Header Area Start ***** -->
    <header class=\"header-area\">
        <!-- Top Header Area -->


        <!-- Main Header Area -->
        <div class=\"main-header-area\" id=\"stickyHeader\">
            <div class=\"container h-100\" style=\"max-width:100% ;\">
                <div class=\"row h-100 align-items-center\">
                    <div class=\"col-12 h-100\">
                        <div class=\"main-menu h-100\">
                            <nav class=\"navbar h-100 navbar-expand-lg\">
                                <!-- Logo Area  -->
                                <a class=\"navbar-brand\" href=\"{{path('home')}}\"><img src=\"{{asset('bower_components/mainRefMed/img/core-img/logoRFMD.png')}}\"
                                        alt=\"Logo\" width=\"185px\"></a>

                                <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                                    data-target=\"#medilifeMenu\" aria-controls=\"medilifeMenu\" aria-expanded=\"false\"
                                    aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

                                <div class=\"collapse navbar-collapse\" id=\"medilifeMenu\">
                                    <!-- Menu Area -->
                                    <ul class=\"navbar-nav\" style=\"margin-left: 70px;\">
                                        {% set currentPath = path(app.request.attributes.get('_route'),
                                        app.request.attributes.get('_route_params')) %}
                                        <li class=\"nav-item {% if currentPath == '/' %}active{% endif %}\">
                                            <a class=\"nav-link\" href=\"{{path('Home')}}\">Acceuil {% if currentPath == '/' %}<span
                                                class=\"sr-only\">(current)</span>{% endif %}</a>
                                        </li>
                                        <li class=\"nav-item {% if currentPath == '/services' %}active{% endif %}\">
                                            <a class=\"nav-link\" href=\"{{path('services')}}\">Services {% if currentPath == '/services' %}<span
                                                class=\"sr-only\">(current)</span>{% endif %}</a>
                                        </li>

                                    </li>
                                    {% if app.user %}
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">Gestion de votre compte</a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"#\">Accédez à votre espace</a>
                                            <a class=\"dropdown-item\" href=\"#\">Gérer votre compte</a>
                                            <a class=\"dropdown-item\" href=\"{{path('app_logout')}}\">Déconnecter vous</a>
                                        </div>
                                    </li>
                                  {% else %}
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">Compte Professionnel</a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"{{path('app_register_pharmacy')}}\">Inscription pharmacie</a>
                                            <a class=\"dropdown-item\" href=\"{{path('app_register_doctor')}}\">Inscription praticien</a>
                                            <a class=\"dropdown-item\" href=\"{{path('app_register_laboratory')}}\">Inscription Laboratoire</a>
                                            <a class=\"dropdown-item\" href=\"{{path('app_login')}}\">Se Connecter</a>
                                        </div>
                                    </li>
                                    <li class=\"nav-item dropdown\">
                                        <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbarDropdown\"
                                            role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\"
                                            aria-expanded=\"false\">Notre Forum </a>
                                        <div class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                                            <a class=\"dropdown-item\" href=\"{{path('home')}}\">accueil</a>
                                            <a class=\"dropdown-item\" href=\"{{path('app_register_blog')}}\">S'inscire</a>
                                            <a class=\"dropdown-item\" href=\"{{path('app_login')}}\">Se Connecter</a>
                                        </div>
                                    </li>
       
                                    {% endif %}


                                    <li class=\"nav-item {% if currentPath == '/contact' %}active{% endif %}\">
                                        <a class=\"nav-link\" href=\"{{path('contact')}}\">Contact {% if currentPath == '/contact' %}<span
                                            class=\"sr-only\">(current)</span>{% endif %}</a>
                                    <li class=\"nav-item {% if currentPath == '/about' %}active{% endif %}\">
                                        <a class=\"nav-link\" href=\"{{path('about')}}\">A propos {% if currentPath == '/about' %}<span
                                            class=\"sr-only\">(current)</span>{% endif %} </a>
                                    </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                    <a href=\"#\" class=\"btn medilife-appoint-btn ml-30\">Appelez les Urgences</a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


", "includeApp/_navigation.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\includeApp\\_navigation.html.twig");
    }
}
