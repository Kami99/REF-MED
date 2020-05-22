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

/* main_refmed/index.html.twig */
class __TwigTemplate_f234d60f0dcee4573f41f8741083aa39e812e3dadb3e32667103ae734abc642f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/index.html.twig"));

        $this->parent = $this->loadTemplate("appMain.html.twig", "main_refmed/index.html.twig", 1);
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
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/index.html.twig", 3)->display($context);
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
    <section class=\"hero-area\">
        <div class=\"hero-slides owl-carousel\">
            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide bg-img bg-overlay-white\" style=\"background-image: url(img/bg-img/hero1.jpg);\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Découvrez notre application</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\">En la téléchargeant sur Playstore ou directement sur notre site </h6>
                                <a href=\"\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">Telechargez REF-MED App<span><i class=\"fa fa-download\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide bg-img bg-overlay-white\"
                style=\"background-image: url(img/bg-img/breadcumb3.jpg);\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "user", [], "any", false, false, false, 34)) {
            // line 35
            echo "                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Venant jettez un coup d'oeil aux forum</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\">Suivez le lien ci-dessous pour y accéder</h6>
                                <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">Accueil du fortum<span><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>    
                        ";
        } else {
            // line 44
            echo "                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Inscrivez vous à notre Forum et communiquez sur des sujets divers</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\">Suivez le lien ci-dessous pour vous inscrire</h6>
                                <a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_blog");
            echo "\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">S'inscrire<span><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>       
                        ";
        }
        // line 53
        echo "
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide bg-img bg-overlay-white\"
                style=\"background-image: url(img/bg-img/breadcumb1.jpg);\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Pour toutes préoccupations</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\"></h6>
                                <a href=\"#\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">Contactez nous<span><i class=\"fa fa-envelope-open-o\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Book An Appoinment Area Start ***** -->
    <div class=\"medilife-book-an-appoinment-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"appointment-form-content\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col-12 col-lg-9\">
                                <div class=\"medilife-appointment-form\">
                                    <h4>Recherchez un médecin</h4>
                                    <br>                                     
                            ";
        // line 88
        $this->loadTemplate("includeApp/_form_search_doctor.html.twig", "main_refmed/index.html.twig", 88)->display($context);
        // line 89
        echo "                                    <br>
                                    <br>
                                    <h4> Recherchez un Laboratoire</h4>
                                    <br>
                            ";
        // line 93
        $this->loadTemplate("includeApp/_form_search_laboratory.html.twig", "main_refmed/index.html.twig", 93)->display($context);
        echo "                                       
                                    <br>
                                    <br>
                                    <h4>Recherchez un Medicament</h4>
                                    <br>
                            ";
        // line 98
        $this->loadTemplate("includeApp/_form_search_drugs.html.twig", "main_refmed/index.html.twig", 98)->display($context);
        echo "                                       
                    </div>
                            </div>
                            ";
        // line 101
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "user", [], "any", false, false, false, 101) == null)) {
            // line 102
            echo "                            <div class=\"col-12 col-lg-3\">
                                <div class=\"medilife-contact-info\">
                                    <!-- Single Contact Info -->
                                    <div class=\"single-contact-info mb-30\">
                                        <p>Pour Profitez pleinement de nos services veuillez vous inscrire  <a href=\"\" style=\"color:#54e6bf;\">En cliquant ici ou </a></p>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class=\"single-contact-info mb-30\">
                                       
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class=\"single-contact-info\">
                                        <p>Si vous avez déja créer un compte veuillez vous connectez en<a href=\"\" style=\"color:#54e6bf;\"> cliquant ici </a></p>
                                        

                                    </div>
                                </div>
                            </div>
                            ";
        }
        // line 121
        echo "                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Book An Appoinment Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class=\"medica-about-us-area section-padding-100-20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-4\">
                    <div class=\"medica-about-content\">
                        <h3>REF-MED une plateforme avec des services nombreux et diversifiés</h3>
                        <p>Conscient des difficultés que les populations peuvent avoir lors des différents accès aux
                            services sanitaires nous vous offrons un intermédiaire entre vous et ses services.</p>
                        <a href=\"#\" class=\"btn medilife-btn mt-50\">Voir tous nos services<span></span></a>
                    </div>
                </div>
                <div class=\"col-12 col-lg-8\">
                    <div class=\"row\">
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-doctor\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>The Best Doctors</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-blood-donation-1\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>Baby Nursery</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut
                                        ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-flask-2\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>Laboratory</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-emergency-call-1\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>Emergency Room</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut
                                        ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->
    <h1 style=\"text-align: center;\">REF-MED en quatres points?</h1>
    <!-- ***** Cool Facts Area Start ***** -->
    <section class=\"medilife-cool-facts-area section-padding-100-0\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-blood-transfusion-2\"></i>
                        <h2><span class=\"counter\">2 </span> H</h2>
                        <h6>Gagnez du temps en prenant rendez-vous avec des praticiens</h6>
                        <p>C'est le nombre d'heure minimale que vous économiserez en utilisant notre plateforme à
                            travers notre service de prise de rendez vous en ligne </p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-atoms\"></i>
                        <h2><span class=\"counter\">4 </span> min</h2>
                        <h6>Recherchez des medicaments facilement</h6>
                        <p>Plus besoin de marchez des kilomètres pour vérifier la disponibilité d'un médicament
                            faites-le en clic</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-microscope\"></i>
                        <h2><span class=\"counter\">25 </span> Labo</h2>
                        <h6>Soyez informés</h6>
                        <p>Ayez connaissances de tout les laboratoires disponibles dans tout Dakar grâce à notre
                            annuaire de Laboratoire</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-doctor-1\"></i>
                        <h2><span class=\"counter\">6000 </span> Actifs</h2>
                        <h6>La communauté</h6>
                        <p>Le nombre de membres actifs chaque jour grâce à notre communauté remplis d'étudiants, de
                            médecins, de professeur, discutant sur divers sujet liées à la santé.</p>
                    </div>
                </div>
            </div>
        </div>

    ";
        // line 251
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "user", [], "any", false, false, false, 251) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 251, $this->source); })()), "user", [], "any", false, false, false, 251), "roles", [], "any", false, false, false, 251), 0, [], "array", false, false, false, 251) == "ROLE_USER_DOCTOR"))) {
            // line 252
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" id=\"\" class=\"js-link-profile\" style=\"display:none;\"></a>
    ";
        }
        // line 254
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "user", [], "any", false, false, false, 254) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 254, $this->source); })()), "user", [], "any", false, false, false, 254), "roles", [], "any", false, false, false, 254), 0, [], "array", false, false, false, 254) == "ROLE_USER_PHARMACY"))) {
            // line 255
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" id=\"\" class=\"js-link-profile\" style=\"display:none;\"></a>
    ";
        }
        // line 257
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "user", [], "any", false, false, false, 257) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "user", [], "any", false, false, false, 257), "roles", [], "any", false, false, false, 257), 0, [], "array", false, false, false, 257) == "ROLE_USER_lABORATORY"))) {
            // line 258
            echo "    <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
            echo "\" id=\"\" class=\"js-link-profile\" style=\"display:none;\"></a>
    ";
        }
        // line 260
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/index.html.twig", 260)->display($context);
        // line 261
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 263
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 264
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/mainRefMed/js/alert.js"), "html", null, true);
        echo "\"></script>
";
        // line 265
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main_refmed/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 265,  417 => 264,  407 => 263,  396 => 261,  394 => 260,  388 => 258,  385 => 257,  379 => 255,  376 => 254,  370 => 252,  368 => 251,  236 => 121,  215 => 102,  213 => 101,  207 => 98,  199 => 93,  193 => 89,  191 => 88,  154 => 53,  146 => 48,  140 => 44,  132 => 39,  126 => 35,  124 => 34,  99 => 11,  86 => 8,  82 => 7,  78 => 6,  75 => 5,  71 => 4,  69 => 3,  59 => 2,  36 => 1,);
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
    <section class=\"hero-area\">
        <div class=\"hero-slides owl-carousel\">
            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide bg-img bg-overlay-white\" style=\"background-image: url(img/bg-img/hero1.jpg);\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Découvrez notre application</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\">En la téléchargeant sur Playstore ou directement sur notre site </h6>
                                <a href=\"\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">Telechargez REF-MED App<span><i class=\"fa fa-download\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide bg-img bg-overlay-white\"
                style=\"background-image: url(img/bg-img/breadcumb3.jpg);\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        {% if app.user %}
                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Venant jettez un coup d'oeil aux forum</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\">Suivez le lien ci-dessous pour y accéder</h6>
                                <a href=\"{{path('home')}}\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">Accueil du fortum<span><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>    
                        {% else %}
                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Inscrivez vous à notre Forum et communiquez sur des sujets divers</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\">Suivez le lien ci-dessous pour vous inscrire</h6>
                                <a href=\"{{path('app_register_blog')}}\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">S'inscrire<span><i class=\"fa fa-user-circle\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>       
                        {% endif %}

                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class=\"single-hero-slide bg-img bg-overlay-white\"
                style=\"background-image: url(img/bg-img/breadcumb1.jpg);\">
                <div class=\"container h-100\">
                    <div class=\"row h-100 align-items-center\">
                        <div class=\"col-12\">
                            <div class=\"hero-slides-content\">
                                <h2 data-animation=\"fadeInUp\" data-delay=\"100ms\">Pour toutes préoccupations</h2>
                                <h6 data-animation=\"fadeInUp\" data-delay=\"400ms\"></h6>
                                <a href=\"#\" class=\"btn medilife-btn mt-50\" data-animation=\"fadeInUp\"
                                    data-delay=\"700ms\">Contactez nous<span><i class=\"fa fa-envelope-open-o\" aria-hidden=\"true\"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Book An Appoinment Area Start ***** -->
    <div class=\"medilife-book-an-appoinment-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"appointment-form-content\">
                        <div class=\"row no-gutters align-items-center\">
                            <div class=\"col-12 col-lg-9\">
                                <div class=\"medilife-appointment-form\">
                                    <h4>Recherchez un médecin</h4>
                                    <br>                                     
                            {% include \"includeApp/_form_search_doctor.html.twig\" %}
                                    <br>
                                    <br>
                                    <h4> Recherchez un Laboratoire</h4>
                                    <br>
                            {% include \"includeApp/_form_search_laboratory.html.twig\" %}                                       
                                    <br>
                                    <br>
                                    <h4>Recherchez un Medicament</h4>
                                    <br>
                            {% include \"includeApp/_form_search_drugs.html.twig\" %}                                       
                    </div>
                            </div>
                            {% if app.user == null %}
                            <div class=\"col-12 col-lg-3\">
                                <div class=\"medilife-contact-info\">
                                    <!-- Single Contact Info -->
                                    <div class=\"single-contact-info mb-30\">
                                        <p>Pour Profitez pleinement de nos services veuillez vous inscrire  <a href=\"\" style=\"color:#54e6bf;\">En cliquant ici ou </a></p>
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class=\"single-contact-info mb-30\">
                                       
                                    </div>
                                    <!-- Single Contact Info -->
                                    <div class=\"single-contact-info\">
                                        <p>Si vous avez déja créer un compte veuillez vous connectez en<a href=\"\" style=\"color:#54e6bf;\"> cliquant ici </a></p>
                                        

                                    </div>
                                </div>
                            </div>
                            {% endif %}
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Book An Appoinment Area End ***** -->

    <!-- ***** About Us Area Start ***** -->
    <section class=\"medica-about-us-area section-padding-100-20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-lg-4\">
                    <div class=\"medica-about-content\">
                        <h3>REF-MED une plateforme avec des services nombreux et diversifiés</h3>
                        <p>Conscient des difficultés que les populations peuvent avoir lors des différents accès aux
                            services sanitaires nous vous offrons un intermédiaire entre vous et ses services.</p>
                        <a href=\"#\" class=\"btn medilife-btn mt-50\">Voir tous nos services<span></span></a>
                    </div>
                </div>
                <div class=\"col-12 col-lg-8\">
                    <div class=\"row\">
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-doctor\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>The Best Doctors</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-blood-donation-1\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>Baby Nursery</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut
                                        ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-flask-2\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>Laboratory</h5>
                                    <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh
                                        euismod tincidunt ut.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Single Service Area -->
                        <div class=\"col-12 col-sm-6\">
                            <div class=\"single-service-area d-flex\">
                                <div class=\"service-icon\">
                                    <i class=\"icon-emergency-call-1\"></i>
                                </div>
                                <div class=\"service-content\">
                                    <h5>Emergency Room</h5>
                                    <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut
                                        ldolore magna.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Us Area End ***** -->
    <h1 style=\"text-align: center;\">REF-MED en quatres points?</h1>
    <!-- ***** Cool Facts Area Start ***** -->
    <section class=\"medilife-cool-facts-area section-padding-100-0\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-blood-transfusion-2\"></i>
                        <h2><span class=\"counter\">2 </span> H</h2>
                        <h6>Gagnez du temps en prenant rendez-vous avec des praticiens</h6>
                        <p>C'est le nombre d'heure minimale que vous économiserez en utilisant notre plateforme à
                            travers notre service de prise de rendez vous en ligne </p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-atoms\"></i>
                        <h2><span class=\"counter\">4 </span> min</h2>
                        <h6>Recherchez des medicaments facilement</h6>
                        <p>Plus besoin de marchez des kilomètres pour vérifier la disponibilité d'un médicament
                            faites-le en clic</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-microscope\"></i>
                        <h2><span class=\"counter\">25 </span> Labo</h2>
                        <h6>Soyez informés</h6>
                        <p>Ayez connaissances de tout les laboratoires disponibles dans tout Dakar grâce à notre
                            annuaire de Laboratoire</p>
                    </div>
                </div>
                <!-- Single Cool Fact-->
                <div class=\"col-12 col-sm-6 col-lg-3\">
                    <div class=\"single-cool-fact-area text-center mb-100\">
                        <i class=\"icon-doctor-1\"></i>
                        <h2><span class=\"counter\">6000 </span> Actifs</h2>
                        <h6>La communauté</h6>
                        <p>Le nombre de membres actifs chaque jour grâce à notre communauté remplis d'étudiants, de
                            médecins, de professeur, discutant sur divers sujet liées à la santé.</p>
                    </div>
                </div>
            </div>
        </div>

    {% if app.user and app.user.roles[0] == \"ROLE_USER_DOCTOR\" %}
    <a href=\"{{path('home')}}\" id=\"\" class=\"js-link-profile\" style=\"display:none;\"></a>
    {% endif %}
    {% if app.user and app.user.roles[0] == \"ROLE_USER_PHARMACY\" %}
    <a href=\"{{path('home')}}\" id=\"\" class=\"js-link-profile\" style=\"display:none;\"></a>
    {% endif %}
    {% if app.user and app.user.roles[0] == \"ROLE_USER_lABORATORY\" %}
    <a href=\"{{path('home')}}\" id=\"\" class=\"js-link-profile\" style=\"display:none;\"></a>
    {% endif %}
{% include \"includeApp/_footer.html.twig\" %}

{% endblock body %}
{% block javascripts %}
<script src=\"{{asset('bower_components/mainRefMed/js/alert.js')}}\"></script>
{{ parent() }}

{% endblock %}", "main_refmed/index.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\index.html.twig");
    }
}
