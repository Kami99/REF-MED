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

/* includeApp/_footer.html.twig */
class __TwigTemplate_d73b0148d007e9449f20502bc0a0df856de59900d4dcc8bcfef05b053a721e30 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includeApp/_footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includeApp/_footer.html.twig"));

        // line 1
        echo "<!-- ***** CTA Area Start ***** -->
<div class=\"medilife-cta-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"cta-content\">
                    <i class=\"icon-smartphone\"></i>
                    <h2>Appelez en Urgence ce numéro</h2>
                    <h3>+12-823-611-8721</h3>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ***** Emergency Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class=\"footer-area section-padding-100\">
        <!-- Main Footer Area -->
        <div class=\"main-footer-area\">
            <div class=\"container-fluid\">
                <div class=\"row\">

                    <div class=\"col-12 col-sm-6 col-xl-6\">
                        <div class=\"footer-widget-area\">
                            <div class=\"footer-logo\">
                                <img src=\"img/core-img/logo.png\" alt=\"\">
                            </div>
                            <p>Suivez notre actualités et tenez vous et soyez les premiers au courants des nouvelles fonctionnalités du site ou de l'appli à traver nos différents réseaux sociaux.</p>
                            <div class=\"footer-social-info\">
                                <a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class=\"col-12 col-sm-6 col-xl-6\">
                        <div class=\"footer-widget-area\">
                            <div class=\"widget-title\">
                                <h6>Vous souhaitez nous contactez faites le via notre formulaire</h6>
                            </div>
                            <div class=\"footer-contact-form\">
                                <form action=\"#\" method=\"post\">
                                    <input type=\"text\"
                                        class=\"form-control border-top-0 border-right-0 border-left-0\"
                                        name=\"footer-name\" id=\"footer-name\" placeholder=\"Name\">
                                    <input type=\"email\"
                                        class=\"form-control border-top-0 border-right-0 border-left-0\"
                                        name=\"footer-email\" id=\"footer-email\" placeholder=\"Email\">
                                    <textarea name=\"message\"
                                        class=\"form-control border-top-0 border-right-0 border-left-0\"
                                        id=\"footerMessage\" placeholder=\"Message\"></textarea>
                                    <button type=\"submit\" class=\"btn medilife-btn\">Envoyez un message
                                        <span><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
                <div class=\"bottom-footer-area\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"bottom-footer-content\">
                                    <!-- Copywrite Text -->
                                    <div class=\"copywrite-text\">
                                        <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous les droits réservés <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> à <a href=\"https://colorlib.com\" target=\"_blank\">REF-MED</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
    </footer>
    <!-- ***** Footer Area End ***** -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "includeApp/_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- ***** CTA Area Start ***** -->
<div class=\"medilife-cta-area\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"cta-content\">
                    <i class=\"icon-smartphone\"></i>
                    <h2>Appelez en Urgence ce numéro</h2>
                    <h3>+12-823-611-8721</h3>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- ***** Emergency Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class=\"footer-area section-padding-100\">
        <!-- Main Footer Area -->
        <div class=\"main-footer-area\">
            <div class=\"container-fluid\">
                <div class=\"row\">

                    <div class=\"col-12 col-sm-6 col-xl-6\">
                        <div class=\"footer-widget-area\">
                            <div class=\"footer-logo\">
                                <img src=\"img/core-img/logo.png\" alt=\"\">
                            </div>
                            <p>Suivez notre actualités et tenez vous et soyez les premiers au courants des nouvelles fonctionnalités du site ou de l'appli à traver nos différents réseaux sociaux.</p>
                            <div class=\"footer-social-info\">
                                <a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                            </div>
                        </div>
                    </div>


                    <div class=\"col-12 col-sm-6 col-xl-6\">
                        <div class=\"footer-widget-area\">
                            <div class=\"widget-title\">
                                <h6>Vous souhaitez nous contactez faites le via notre formulaire</h6>
                            </div>
                            <div class=\"footer-contact-form\">
                                <form action=\"#\" method=\"post\">
                                    <input type=\"text\"
                                        class=\"form-control border-top-0 border-right-0 border-left-0\"
                                        name=\"footer-name\" id=\"footer-name\" placeholder=\"Name\">
                                    <input type=\"email\"
                                        class=\"form-control border-top-0 border-right-0 border-left-0\"
                                        name=\"footer-email\" id=\"footer-email\" placeholder=\"Email\">
                                    <textarea name=\"message\"
                                        class=\"form-control border-top-0 border-right-0 border-left-0\"
                                        id=\"footerMessage\" placeholder=\"Message\"></textarea>
                                    <button type=\"submit\" class=\"btn medilife-btn\">Envoyez un message
                                        <span><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></span></button>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
                <div class=\"bottom-footer-area\">
                    <div class=\"container-fluid\">
                        <div class=\"row\">
                            <div class=\"col-12\">
                                <div class=\"bottom-footer-content\">
                                    <!-- Copywrite Text -->
                                    <div class=\"copywrite-text\">
                                        <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous les droits réservés <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> à <a href=\"https://colorlib.com\" target=\"_blank\">REF-MED</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
       
    </footer>
    <!-- ***** Footer Area End ***** -->

", "includeApp/_footer.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\includeApp\\_footer.html.twig");
    }
}
