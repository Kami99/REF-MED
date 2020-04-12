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

/* main_refmed/services.html.twig */
class __TwigTemplate_e2d84f458d9c8cfc9e24342abc30f3ae133d123c1d5a7b897a238e7866ca3476 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/services.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/services.html.twig"));

        $this->parent = $this->loadTemplate("appMain.html.twig", "main_refmed/services.html.twig", 1);
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
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/services.html.twig", 3)->display($context);
        // line 4
        echo "  <!-- ***** Breadcumb Area Start ***** -->
  <section class=\"breadcumb-area bg-img gradient-background-overlay\" style=\"background-image: url(img/bg-img/breadcumb2.jpg);\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcumb-content\">
                    <h3 class=\"breadcumb-title\">Services</h3>
                    <p>Une gamme diversifié de service pour contenter tout le monde</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Services Area Start ***** -->
<div class=\"medilife-services-area section-padding-100-20\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-doctor\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>The Best Doctors</h5>
                        <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-blood-donation-1\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Baby Nursery</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-helicopter\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Helicopters</h5>
                        <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-flask\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Laboratory</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-emergency-call-1\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Emergency Room</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-blood-donation-2\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Cardiology</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class=\"medilife-benefits-area section-padding-100-50\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\">
                    <h2>Des Services de qualités et adaptez à tous</h2>
                </div>
            </div>
        </div>

        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-4\">
                <div class=\"single-benefits-area mb-50 text-right\">
                    <div class=\"single-benefits-title d-flex align-items-end row-reverse\">
                        <i class=\"icon-teeth\"></i>
                        <h5>Rapide et simple</h5>
                    </div>
                    <p>Prendre un rendez-vous ou vérifier la disponibiliité d'un médicamenament n'a jamais été ausssi simple. On vous guide,à travers une orientation rapide et fiable pour les usagers en cas d’urgence ou de besoins à usage médical</p>
                </div>
                <div class=\"single-benefits-area mb-50 text-right\">
                    <div class=\"single-benefits-title d-flex align-items-end row-reverse\">
                        <i class=\"icon-hospital-bed-1\"></i>
                        <h5>Diversifié</h5>
                    </div>
                    <p>Ayez accès à notre plateforme via notre application mobile ou via votre navigateur</p>
                </div>
                
                <div class=\"single-benefits-area mb-50 text-right\">
                    <div class=\"single-benefits-title d-flex align-items-end row-reverse\">
                        <i class=\"icon-hospital-2\"></i>
                        <h5>Satisfaire le client</h5>
                    </div>
                    <p>Votre avis compte. Nous vous mettons au centre de notre plateforme pour que votre expérience soit unique.</p>
                </div>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"single-benefits-thumb\">
                    <img src=\"img/bg-img/benefits.png\" alt=\"\">
                </div>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"single-benefits-area mb-50\">
                    <div class=\"single-benefits-title d-flex align-items-end\">
                        <i class=\"icon-chat\" aria-hidden=\"true\"></i>
                        <h5>REF-FORUM</h5>
                    </div>
                    <p>Une communauté dynamique, respectueuse et courtoise ou on discute sur des sujets d'actualités médicales ou vous pouvez aussi en créer.</p>
                </div>
                <div class=\"single-benefits-area mb-50\">
                    <div class=\"single-benefits-title d-flex align-items-end\">
                        <i class=\"icon-smartphone-1\"></i>
                        <h5>Des services révolutionnaire</h5>
                    </div>
                    <p>Plus besoins de vous déplacer grâce à nos services vos prise de rendez-vous pénible et vos recherches compliqués pour un médicament sera boulversés.</p>
                </div>
                <div class=\"single-benefits-area mb-50\">
                    <div class=\"single-benefits-title d-flex align-items-end\">
                        <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
                        <h5>Fini les pertes de inutile</h5>
                    </div>
                    <p>Le gain de temps qu'offre notre plateforme à ses utilisateurs est devenu indéniable commenca à l'utiliser et soyez conquis.</p>
                </div>
            </div>
        </div>
    </div>
</section>
";
        // line 166
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/services.html.twig", 166)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main_refmed/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 166,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %}
{% block body %}
{% include \"includeApp/_navigation.html.twig\" %}
  <!-- ***** Breadcumb Area Start ***** -->
  <section class=\"breadcumb-area bg-img gradient-background-overlay\" style=\"background-image: url(img/bg-img/breadcumb2.jpg);\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcumb-content\">
                    <h3 class=\"breadcumb-title\">Services</h3>
                    <p>Une gamme diversifié de service pour contenter tout le monde</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Services Area Start ***** -->
<div class=\"medilife-services-area section-padding-100-20\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-doctor\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>The Best Doctors</h5>
                        <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-blood-donation-1\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Baby Nursery</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-helicopter\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Helicopters</h5>
                        <p>Lorem ipsum dolor sit amet, consecte tuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-flask\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Laboratory</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-emergency-call-1\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Emergency Room</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
            <!-- Single Service Area -->
            <div class=\"col-12 col-md-6 col-lg-4\">
                <div class=\"single-service-area d-flex\">
                    <div class=\"service-icon\">
                        <i class=\"icon-blood-donation-2\"></i>
                    </div>
                    <div class=\"service-content\">
                        <h5>Cardiology</h5>
                        <p>Dolor sit amet, consecte tuer elit, sed diam nonummy nibh euismod tincidunt ut ldolore magna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class=\"medilife-benefits-area section-padding-100-50\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"section-heading\">
                    <h2>Des Services de qualités et adaptez à tous</h2>
                </div>
            </div>
        </div>

        <div class=\"row align-items-center\">
            <div class=\"col-12 col-md-4\">
                <div class=\"single-benefits-area mb-50 text-right\">
                    <div class=\"single-benefits-title d-flex align-items-end row-reverse\">
                        <i class=\"icon-teeth\"></i>
                        <h5>Rapide et simple</h5>
                    </div>
                    <p>Prendre un rendez-vous ou vérifier la disponibiliité d'un médicamenament n'a jamais été ausssi simple. On vous guide,à travers une orientation rapide et fiable pour les usagers en cas d’urgence ou de besoins à usage médical</p>
                </div>
                <div class=\"single-benefits-area mb-50 text-right\">
                    <div class=\"single-benefits-title d-flex align-items-end row-reverse\">
                        <i class=\"icon-hospital-bed-1\"></i>
                        <h5>Diversifié</h5>
                    </div>
                    <p>Ayez accès à notre plateforme via notre application mobile ou via votre navigateur</p>
                </div>
                
                <div class=\"single-benefits-area mb-50 text-right\">
                    <div class=\"single-benefits-title d-flex align-items-end row-reverse\">
                        <i class=\"icon-hospital-2\"></i>
                        <h5>Satisfaire le client</h5>
                    </div>
                    <p>Votre avis compte. Nous vous mettons au centre de notre plateforme pour que votre expérience soit unique.</p>
                </div>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"single-benefits-thumb\">
                    <img src=\"img/bg-img/benefits.png\" alt=\"\">
                </div>
            </div>
            <div class=\"col-12 col-md-4\">
                <div class=\"single-benefits-area mb-50\">
                    <div class=\"single-benefits-title d-flex align-items-end\">
                        <i class=\"icon-chat\" aria-hidden=\"true\"></i>
                        <h5>REF-FORUM</h5>
                    </div>
                    <p>Une communauté dynamique, respectueuse et courtoise ou on discute sur des sujets d'actualités médicales ou vous pouvez aussi en créer.</p>
                </div>
                <div class=\"single-benefits-area mb-50\">
                    <div class=\"single-benefits-title d-flex align-items-end\">
                        <i class=\"icon-smartphone-1\"></i>
                        <h5>Des services révolutionnaire</h5>
                    </div>
                    <p>Plus besoins de vous déplacer grâce à nos services vos prise de rendez-vous pénible et vos recherches compliqués pour un médicament sera boulversés.</p>
                </div>
                <div class=\"single-benefits-area mb-50\">
                    <div class=\"single-benefits-title d-flex align-items-end\">
                        <i class=\"fa fa-clock-o\" aria-hidden=\"true\"></i>
                        <h5>Fini les pertes de inutile</h5>
                    </div>
                    <p>Le gain de temps qu'offre notre plateforme à ses utilisateurs est devenu indéniable commenca à l'utiliser et soyez conquis.</p>
                </div>
            </div>
        </div>
    </div>
</section>
{% include \"includeApp/_footer.html.twig\" %}
{% endblock body %}", "main_refmed/services.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\services.html.twig");
    }
}
