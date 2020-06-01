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

/* main_refmed/about.html.twig */
class __TwigTemplate_f336320b77c3a8d5325ec6311f43fdba3488f5c5bee469010d09fdaf4d959873 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/about.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main_refmed/about.html.twig"));

        $this->parent = $this->loadTemplate("appMain.html.twig", "main_refmed/about.html.twig", 1);
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
        $this->loadTemplate("includeApp/_navigation.html.twig", "main_refmed/about.html.twig", 3)->display($context);
        // line 4
        echo "    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <section class=\"breadcumb-area bg-img gradient-background-overlay\" style=\"background-image: url(img/bg-img/breadcumb1.jpg);\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <div class=\"breadcumb-content\">
                        <h3 class=\"breadcumb-title\">A propos de nous</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <div class=\"medilife-features-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-lg-6\">
                    <div class=\"features-content\">
                        <h2>Qui nous sommes?</h2>
                        <p>La plateforme développée par la startup REF-MED met à votre disposition une diversité de services qui sont :
                           </p>
                            <ul style=\"list-style: circle;\">
                                <li>Le référencement des structures médicales et des médecins</li>
                                <li>Prise de rendez-vous en ligne</li>
                                <li>Un système de gestion de stock pour les pharmacies via un système de géolocalisation</li>
                                <li>Un forum mis à la disposition des étudiants</li>                            
                            </ul>

                            <p>Le concept développé par REF-MED est assez basique. Dans un premier volet, cette plate-forme joue un rôle de guide, en ce sens qu’elle permet une orientation rapide et fiable pour les usagers en cas d’urgence ou de besoins de tout genre à usage médical.
                            </p>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6\">
                    <div class=\"features-thumbnail\">
                        <img src=\"img/bg-img/about1.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Features Area End ***** -->

    <!-- ***** Video Area Start ***** -->
    <section class=\"medilife-video-area section-padding-100 bg-overlay bg-img\" style=\"background-image: url(img/bg-img/video.jpg);\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-lg-8\">
                    <div class=\"video-box bg-overlay-black\">
                        <img src=\"img/bg-img/video2.jpg\" alt=\"\">
                        <div class=\"play-btn\">
                            <a class=\"popup-video\" href=\"http://www.youtube.com/watch?v=0O2aH4XLbto\"><img src=\"img/core-img/play.png\" alt=\"\"></a>
                            <h6>Une Video de presentation de REF-MED</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-4\">
                    <div class=\"video-content\">
                        <h2>PRESENTATION</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Skilss Area Start ***** -->
    <br><br>
    <br>
    
    <h1 style=\"text-align: center; text-transform:uppercase;\"> REF-MED en quelques mots</h1>
    <br>
    <section class=\"our-skills-area text-center section-padding-100-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"95\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Ergonomie</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"90\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Design</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"100\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Sécurité</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"75\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Diversification</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"87\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Accessibilité</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"97\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Creativité de la Plateforme</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills Area End ***** -->

    <!-- ***** Tabs Area Start ***** -->
    <section class=\"medilife-tabs-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"medilife-tabs-content\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id=\"institution-tab\" data-toggle=\"tab\" href=\"#institution\" role=\"tab\" aria-controls=\"institution\" aria-selected=\"false\">Spirituel Nsoley</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id=\"faq-tab\" data-toggle=\"tab\" href=\"#faq\" role=\"tab\" aria-controls=\"faq\" aria-selected=\"false\">FAQ</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" id=\"specialities-tab\" data-toggle=\"tab\" href=\"#specialities\" role=\"tab\" aria-controls=\"specialities\" aria-selected=\"true\">Specialities</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id=\"laboratory-tab\" data-toggle=\"tab\" href=\"#laboratory\" role=\"tab\" aria-controls=\"laboratory\" aria-selected=\"false\">Laboratory</a>
                            </li>

                        </ul>

                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"tab-pane fade\" id=\"institution\" role=\"tabpanel\" aria-labelledby=\"institution-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/about1.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"faq\" role=\"tabpanel\" aria-labelledby=\"faq-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/medical1.png\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade show active\" id=\"specialities\" role=\"tabpanel\" aria-labelledby=\"specialities-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/tab.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"laboratory\" role=\"tabpanel\" aria-labelledby=\"laboratory-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/medical1.png\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"emergencies\" role=\"tabpanel\" aria-labelledby=\"emergencies-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/about1.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"scolarship\" role=\"tabpanel\" aria-labelledby=\"scolarship-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/medical1.png\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Tabs Area End ***** -->


";
        // line 233
        $this->loadTemplate("includeApp/_footer.html.twig", "main_refmed/about.html.twig", 233)->display($context);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main_refmed/about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  301 => 233,  70 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %}
{% block body %}
{% include \"includeApp/_navigation.html.twig\" %}
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <section class=\"breadcumb-area bg-img gradient-background-overlay\" style=\"background-image: url(img/bg-img/breadcumb1.jpg);\">
        <div class=\"container h-100\">
            <div class=\"row h-100 align-items-center\">
                <div class=\"col-12\">
                    <div class=\"breadcumb-content\">
                        <h3 class=\"breadcumb-title\">A propos de nous</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Features Area Start ***** -->
    <div class=\"medilife-features-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-lg-6\">
                    <div class=\"features-content\">
                        <h2>Qui nous sommes?</h2>
                        <p>La plateforme développée par la startup REF-MED met à votre disposition une diversité de services qui sont :
                           </p>
                            <ul style=\"list-style: circle;\">
                                <li>Le référencement des structures médicales et des médecins</li>
                                <li>Prise de rendez-vous en ligne</li>
                                <li>Un système de gestion de stock pour les pharmacies via un système de géolocalisation</li>
                                <li>Un forum mis à la disposition des étudiants</li>                            
                            </ul>

                            <p>Le concept développé par REF-MED est assez basique. Dans un premier volet, cette plate-forme joue un rôle de guide, en ce sens qu’elle permet une orientation rapide et fiable pour les usagers en cas d’urgence ou de besoins de tout genre à usage médical.
                            </p>
                    </div>
                </div>
                <div class=\"col-12 col-lg-6\">
                    <div class=\"features-thumbnail\">
                        <img src=\"img/bg-img/about1.jpg\" alt=\"\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Features Area End ***** -->

    <!-- ***** Video Area Start ***** -->
    <section class=\"medilife-video-area section-padding-100 bg-overlay bg-img\" style=\"background-image: url(img/bg-img/video.jpg);\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-12 col-lg-8\">
                    <div class=\"video-box bg-overlay-black\">
                        <img src=\"img/bg-img/video2.jpg\" alt=\"\">
                        <div class=\"play-btn\">
                            <a class=\"popup-video\" href=\"http://www.youtube.com/watch?v=0O2aH4XLbto\"><img src=\"img/core-img/play.png\" alt=\"\"></a>
                            <h6>Une Video de presentation de REF-MED</h6>
                        </div>
                    </div>
                </div>
                <div class=\"col-12 col-lg-4\">
                    <div class=\"video-content\">
                        <h2>PRESENTATION</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Video Area End ***** -->

    <!-- ***** Skilss Area Start ***** -->
    <br><br>
    <br>
    
    <h1 style=\"text-align: center; text-transform:uppercase;\"> REF-MED en quelques mots</h1>
    <br>
    <section class=\"our-skills-area text-center section-padding-100-0\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"95\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Ergonomie</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"90\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Design</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"100\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Sécurité</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"75\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Diversification</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"87\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Accessibilité</h5>
                    </div>
                </div>
                <div class=\"col-12 col-sm-6 col-md-3 col-lg-2\">
                    <div class=\"single-pie-bar\" data-percent=\"97\">
                        <canvas class=\"bar-circle\" width=\"100\" height=\"100\"></canvas>
                        <h5>Creativité de la Plateforme</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Skills Area End ***** -->

    <!-- ***** Tabs Area Start ***** -->
    <section class=\"medilife-tabs-area section-padding-100\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"medilife-tabs-content\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id=\"institution-tab\" data-toggle=\"tab\" href=\"#institution\" role=\"tab\" aria-controls=\"institution\" aria-selected=\"false\">Spirituel Nsoley</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id=\"faq-tab\" data-toggle=\"tab\" href=\"#faq\" role=\"tab\" aria-controls=\"faq\" aria-selected=\"false\">FAQ</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" id=\"specialities-tab\" data-toggle=\"tab\" href=\"#specialities\" role=\"tab\" aria-controls=\"specialities\" aria-selected=\"true\">Specialities</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id=\"laboratory-tab\" data-toggle=\"tab\" href=\"#laboratory\" role=\"tab\" aria-controls=\"laboratory\" aria-selected=\"false\">Laboratory</a>
                            </li>

                        </ul>

                        <div class=\"tab-content\" id=\"myTabContent\">
                            <div class=\"tab-pane fade\" id=\"institution\" role=\"tabpanel\" aria-labelledby=\"institution-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/about1.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"faq\" role=\"tabpanel\" aria-labelledby=\"faq-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/medical1.png\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade show active\" id=\"specialities\" role=\"tabpanel\" aria-labelledby=\"specialities-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/tab.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"laboratory\" role=\"tabpanel\" aria-labelledby=\"laboratory-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/medical1.png\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"emergencies\" role=\"tabpanel\" aria-labelledby=\"emergencies-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/about1.jpg\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"tab-pane fade\" id=\"scolarship\" role=\"tabpanel\" aria-labelledby=\"scolarship-tab\">
                                <div class=\"medilife-tab-content d-md-flex align-items-center\">
                                    <!-- Medilife Tab Text  -->
                                    <div class=\"medilife-tab-text\">
                                        <h2>Take a look at this</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet, consectetuer adipiscing eli.</p>
                                    </div>
                                    <!-- Medilife Tab Img  -->
                                    <div class=\"medilife-tab-img\">
                                        <img src=\"img/bg-img/medical1.png\" alt=\"\">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Tabs Area End ***** -->


{% include \"includeApp/_footer.html.twig\" %}
{% endblock body %}", "main_refmed/about.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\main_refmed\\about.html.twig");
    }
}
