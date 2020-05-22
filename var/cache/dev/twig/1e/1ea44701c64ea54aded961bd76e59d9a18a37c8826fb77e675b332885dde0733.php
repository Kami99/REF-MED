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

/* main_refmed/contact.html.twig */
class __TwigTemplate_c37dba0606fe8a2355a58a328c607fa5991cc37ffd3d06e8cbe76f5063c8bc19 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/contact.html.twig"));

        $this->parent = $this->loadTemplate("appMain.html.twig", "main_refmed/contact.html.twig", 1);
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
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/contact.html.twig", 3)->display($context);
        // line 4
        echo "<!-- ***** Breadcumb Area Start ***** -->
<section class=\"breadcumb-area bg-img gradient-background-overlay\"
    style=\"background-image: url(img/bg-img/breadcumb3.jpg);\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcumb-content\">
                    <h3 class=\"breadcumb-title\">Une préoccupation</h3>
                    <p>Utilisez le formulaire ci dessous pour nous contactez</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<section class=\"medilife-contact-area section-padding-100\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Contact Form Area -->
            <div class=\"col-12 col-lg-8\">
                <div class=\"contact-form\">
                    <h5 class=\"mb-50\">Contactez nous</h5>

                    <form action=\"#\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"contact-name\" placeholder=\"Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" id=\"contact-email\" placeholder=\"Email\">
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" name=\"message\" id=\"message\" cols=\"30\" rows=\"10\"
                                placeholder=\"Message\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn medilife-btn\">Envoyez un message<span> <i
                                    class=\"fa fa-envelope\" aria-hidden=\"true\"></i></span></button>
                    </form>
                </div>
            </div>

            <div class=\"col-12 col-lg-4\">
                <div class=\"content-sidebar\">


                    <!-- Contact Card -->
                    <div class=\"medilife-contact-card mb-50\">

                        <div class=\"single-contact d-flex align-items-center\">
                            <div class=\"contact-icon mr-30\">
                                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"contact-meta\">
                                <p>Address: Baobab coté Mairie<br>Villa 51</p>
                            </div>
                        </div>

                        <div class=\"single-contact d-flex align-items-center\">
                            <div class=\"contact-icon mr-30\">
                                <i class=\"fa fa-phone    \"></i>
                            </div>
                            <div class=\"contact-meta\">
                                <p>Phone: +221 70 529 29 04</p>
                            </div>
                        </div>

                        <div class=\"single-contact d-flex align-items-center\">
                            <div class=\"contact-icon mr-30\">
                                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> </div>
                            <div class=\"contact-meta\">
                                <p>Email: REF-MED@gmail.com</p>
                            </div>
                        </div>


                        <div class=\"contact-social-area\">
                            <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Google Maps -->
<!-- <div class=\"map-area mb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div id=\"googleMap\" class=\"googleMap\"></div>
            </div>
        </div>
    </div>
</div> -->


";
        // line 104
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/contact.html.twig", 104)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main_refmed/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 104,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %}
{% block body %}
{% include \"includeApp/_navigation.html.twig\" %}
<!-- ***** Breadcumb Area Start ***** -->
<section class=\"breadcumb-area bg-img gradient-background-overlay\"
    style=\"background-image: url(img/bg-img/breadcumb3.jpg);\">
    <div class=\"container h-100\">
        <div class=\"row h-100 align-items-center\">
            <div class=\"col-12\">
                <div class=\"breadcumb-content\">
                    <h3 class=\"breadcumb-title\">Une préoccupation</h3>
                    <p>Utilisez le formulaire ci dessous pour nous contactez</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Breadcumb Area End ***** -->

<section class=\"medilife-contact-area section-padding-100\">
    <div class=\"container\">
        <div class=\"row\">
            <!-- Contact Form Area -->
            <div class=\"col-12 col-lg-8\">
                <div class=\"contact-form\">
                    <h5 class=\"mb-50\">Contactez nous</h5>

                    <form action=\"#\" method=\"post\">
                        <div class=\"form-group\">
                            <input type=\"text\" class=\"form-control\" id=\"contact-name\" placeholder=\"Name\">
                        </div>
                        <div class=\"form-group\">
                            <input type=\"email\" class=\"form-control\" id=\"contact-email\" placeholder=\"Email\">
                        </div>
                        <div class=\"form-group\">
                            <textarea class=\"form-control\" name=\"message\" id=\"message\" cols=\"30\" rows=\"10\"
                                placeholder=\"Message\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn medilife-btn\">Envoyez un message<span> <i
                                    class=\"fa fa-envelope\" aria-hidden=\"true\"></i></span></button>
                    </form>
                </div>
            </div>

            <div class=\"col-12 col-lg-4\">
                <div class=\"content-sidebar\">


                    <!-- Contact Card -->
                    <div class=\"medilife-contact-card mb-50\">

                        <div class=\"single-contact d-flex align-items-center\">
                            <div class=\"contact-icon mr-30\">
                                <i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i>
                            </div>
                            <div class=\"contact-meta\">
                                <p>Address: Baobab coté Mairie<br>Villa 51</p>
                            </div>
                        </div>

                        <div class=\"single-contact d-flex align-items-center\">
                            <div class=\"contact-icon mr-30\">
                                <i class=\"fa fa-phone    \"></i>
                            </div>
                            <div class=\"contact-meta\">
                                <p>Phone: +221 70 529 29 04</p>
                            </div>
                        </div>

                        <div class=\"single-contact d-flex align-items-center\">
                            <div class=\"contact-icon mr-30\">
                                <i class=\"fa fa-envelope\" aria-hidden=\"true\"></i> </div>
                            <div class=\"contact-meta\">
                                <p>Email: REF-MED@gmail.com</p>
                            </div>
                        </div>


                        <div class=\"contact-social-area\">
                            <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</section>

<!-- Google Maps -->
<!-- <div class=\"map-area mb-100\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div id=\"googleMap\" class=\"googleMap\"></div>
            </div>
        </div>
    </div>
</div> -->


{% include \"includeApp/_footer.html.twig\" %}
{% endblock body %}", "main_refmed/contact.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\contact.html.twig");
    }
}
