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

/* Blog/_navigation.html.twig */
class __TwigTemplate_096a0fa6957ad908bb8b42b859ec754cc3a5edeacffe1152d0eb450293510528 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/_navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/_navigation.html.twig"));

        // line 1
        echo "
    <!-- pageheader
    ================================================== -->

        <header class=\"header\">
            <div class=\"header__content row\">

                <div class=\"header__logo\">
                    <a class=\"logo\" href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">
                        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/logoRFMD.png"), "html", null, true);
        echo "\" alt=\"Homepage\">
                    </a>
                </div> <!-- end header__logo -->

                <ul class=\"header__social\">
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class=\"header__search-trigger\" href=\"#0\"></a>

                <div class=\"header__search\">

                    <form role=\"search\" method=\"get\" class=\"header__search-form\" action=\"#\">
                        <label>
                            <span class=\"hide-content\">Tapez votre recherche</span>
                            <input type=\"search\" class=\"search-field\" placeholder=\"Exemple: Chirugie\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"off\">
                        </label>
                        <input type=\"submit\" class=\"search-submit\" value=\"Recherchez\">
                    </form>
        
                    <a href=\"#0\" title=\"Close Search\" class=\"header__overlay-close\">Close</a>

                </div>  <!-- end header__search -->


                <a class=\"header__toggle-menu\" href=\"#0\" title=\"Menu\"><span>Menu</span></a>

                <nav class=\"header__nav-wrap\">

                    <h2 class=\"header__nav-heading h6\">Navigation du Site</h2>

                    <ul class=\"header__nav\">

                        ";
        // line 54
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "request", [], "any", false, false, false, 54), "attributes", [], "any", false, false, false, 54), "get", [0 => "_route"], "method", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", [0 => "_route_params"], "method", false, false, false, 55));
        // line 56
        echo "   
                        <li ";
        // line 57
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 57, $this->source); })()) == "/blog/home")) {
            echo " class=\"current\" ";
        }
        echo "><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\" title=\"\">Acceuil</a></li>
                        <li ";
        // line 58
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 58, $this->source); })()) == "/blog/allPostCategory")) {
            echo " class=\"current\" ";
        }
        echo ">
                            <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allPostCategory");
        echo "\" title=\"Categories\">Categories</a>
                        </li>
                        ";
        // line 61
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "user", [], "any", false, false, false, 61), "roles", [], "any", false, false, false, 61), 0, [], "array", false, false, false, 61) == "ROLE_USER_BLOG"))) {
            // line 62
            echo "                        <li ";
            if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 62, $this->source); })()) == "/blog/createPost")) {
                echo " class=\"current\" ";
            }
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createPost");
            echo "\" title=\"Creer une Publication\">Créer une nouvelle Publication  <i class=\"fa fa-edit\"></i></a></li>
                        ";
        }
        // line 64
        echo "                        <li ";
        if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 64, $this->source); })()) == "/blog/contact")) {
            echo " class=\"current\" ";
        }
        echo "><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contactBlog");
        echo "\" title=\"Contact\">Contact</a></li>
                        ";
        // line 65
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "roles", [], "any", false, false, false, 65), 0, [], "array", false, false, false, 65) == "ROLE_USER_BLOG"))) {
            // line 66
            echo "                        <ul class=\"nav navbar-nav navbar-right\" style=\"margin: 0;\">
                            <li class=\"dropdown\" ";
            // line 67
            if (((isset($context["currentPath"]) || array_key_exists("currentPath", $context) ? $context["currentPath"] : (function () { throw new RuntimeError('Variable "currentPath" does not exist.', 67, $this->source); })()) == "/blog/home ")) {
                echo " class=\"current\" ";
            }
            echo ">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    <strong>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "pseudo", [], "any", false, false, false, 70), "html", null, true);
            echo "</strong>
                                    <i class=\"fa fa-chevron-down\"></i>                               
                                 </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"navbar-login\">
                                            <div class=\"row\">
                                                ";
            // line 77
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "imageFile", [], "any", false, false, false, 77)) {
                // line 78
                echo "                                                <div class=\"col-1-4\">
                                                    <img src=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 79, $this->source); })()), "user", [], "any", false, false, false, 79), "imageFile"), "avatarRow"), "html", null, true);
                echo "\"> 
                                                </div>                                                    
                                                ";
            } else {
                // line 82
                echo "                                                <div class=\"col-1-4\">
                                                    <img src=\"";
                // line 83
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/avatarIsset.png"), "avatarRow"), "html", null, true);
                echo "\"> 
                                                </div>  
                                                ";
            }
            // line 86
            echo "
                                                <div class=\"col-3-4\">
                                                    <p class=\"text-left\" style=\"color:rgba(255, 255, 255, 0.6);\"><strong><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "pseudo", [], "any", false, false, false, 88), "html", null, true);
            echo "</font></font></strong></p>
                                                    <p class=\"text-left small\" style=\"color: rgba(255, 255, 255, 0.6);\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89), "email", [], "any", false, false, false, 89), "html", null, true);
            echo "
                                                    <p class=\"text-left\">
                                                        <a href=\"";
            // line 91
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\" class=\"btn btn-danger\" > Se déconnecter</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"#\" class=\"btn btn-primary\">Mon Profil</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 113
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) {
            // line 114
            echo "                        
                        ";
        } else {
            // line 116
            echo "                        <ul class=\"nav navbar-nav navbar-right\" style=\"margin: 0;\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    <strong>S'inscrire ou Se Connecter</strong>
                                    <i class=\"fa fa-chevron-down\"></i>                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"";
            // line 128
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register_blog");
            echo "\" class=\"btn btn-primary\">S'inscrire'</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"";
            // line 140
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"btn btn-primary\">Se connecter</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>    
                        ";
        }
        // line 150
        echo "

                    </ul> <!-- end header__nav -->

                    <a href=\"#0\" title=\"Close Menu\" class=\"header__overlay-close close-mobile-menu\">Fermer</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blog/_navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 150,  266 => 140,  251 => 128,  237 => 116,  233 => 114,  231 => 113,  206 => 91,  201 => 89,  197 => 88,  193 => 86,  187 => 83,  184 => 82,  178 => 79,  175 => 78,  173 => 77,  163 => 70,  155 => 67,  152 => 66,  150 => 65,  141 => 64,  131 => 62,  129 => 61,  124 => 59,  118 => 58,  110 => 57,  107 => 56,  105 => 55,  104 => 54,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
    <!-- pageheader
    ================================================== -->

        <header class=\"header\">
            <div class=\"header__content row\">

                <div class=\"header__logo\">
                    <a class=\"logo\" href=\"{{path('home')}}\">
                        <img src=\"{{asset('bower_components/images/logoRFMD.png')}}\" alt=\"Homepage\">
                    </a>
                </div> <!-- end header__logo -->

                <ul class=\"header__social\">
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-instagram\" aria-hidden=\"true\"></i></a>
                    </li>
                    <li>
                        <a href=\"#0\"><i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i></a>
                    </li>
                </ul> <!-- end header__social -->

                <a class=\"header__search-trigger\" href=\"#0\"></a>

                <div class=\"header__search\">

                    <form role=\"search\" method=\"get\" class=\"header__search-form\" action=\"#\">
                        <label>
                            <span class=\"hide-content\">Tapez votre recherche</span>
                            <input type=\"search\" class=\"search-field\" placeholder=\"Exemple: Chirugie\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"off\">
                        </label>
                        <input type=\"submit\" class=\"search-submit\" value=\"Recherchez\">
                    </form>
        
                    <a href=\"#0\" title=\"Close Search\" class=\"header__overlay-close\">Close</a>

                </div>  <!-- end header__search -->


                <a class=\"header__toggle-menu\" href=\"#0\" title=\"Menu\"><span>Menu</span></a>

                <nav class=\"header__nav-wrap\">

                    <h2 class=\"header__nav-heading h6\">Navigation du Site</h2>

                    <ul class=\"header__nav\">

                        {% set currentPath = path(app.request.attributes.get('_route'),
                       app.request.attributes.get('_route_params')) %}
   
                        <li {% if currentPath == '/blog/home' %} class=\"current\" {% endif %}><a href=\"{{path('home')}}\" title=\"\">Acceuil</a></li>
                        <li {% if currentPath == '/blog/allPostCategory' %} class=\"current\" {% endif %}>
                            <a href=\"{{path('allPostCategory')}}\" title=\"Categories\">Categories</a>
                        </li>
                        {% if app.user and app.user.roles[0] == 'ROLE_USER_BLOG'%}
                        <li {% if currentPath == '/blog/createPost' %} class=\"current\" {% endif %}><a href=\"{{path('createPost')}}\" title=\"Creer une Publication\">Créer une nouvelle Publication  <i class=\"fa fa-edit\"></i></a></li>
                        {% endif %}
                        <li {% if currentPath == '/blog/contact' %} class=\"current\" {% endif %}><a href=\"{{path('contactBlog')}}\" title=\"Contact\">Contact</a></li>
                        {% if app.user and app.user.roles[0] == 'ROLE_USER_BLOG'%}
                        <ul class=\"nav navbar-nav navbar-right\" style=\"margin: 0;\">
                            <li class=\"dropdown\" {% if currentPath == '/blog/home ' %} class=\"current\" {% endif %}>
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    <strong>{{ app.user.pseudo }}</strong>
                                    <i class=\"fa fa-chevron-down\"></i>                               
                                 </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"navbar-login\">
                                            <div class=\"row\">
                                                {% if app.user.imageFile %}
                                                <div class=\"col-1-4\">
                                                    <img src=\"{{vich_uploader_asset(app.user, 'imageFile') |imagine_filter('avatarRow')}}\"> 
                                                </div>                                                    
                                                {% else %}
                                                <div class=\"col-1-4\">
                                                    <img src=\"{{asset('bower_components/images/avatarIsset.png') |imagine_filter('avatarRow')}}\"> 
                                                </div>  
                                                {% endif %}

                                                <div class=\"col-3-4\">
                                                    <p class=\"text-left\" style=\"color:rgba(255, 255, 255, 0.6);\"><strong><font style=\"vertical-align: inherit;\"><font style=\"vertical-align: inherit;\">{{ app.user.pseudo }}</font></font></strong></p>
                                                    <p class=\"text-left small\" style=\"color: rgba(255, 255, 255, 0.6);\">{{ app.user.email }}
                                                    <p class=\"text-left\">
                                                        <a href=\"{{path('app_logout')}}\" class=\"btn btn-danger\" > Se déconnecter</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"#\" class=\"btn btn-primary\">Mon Profil</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        
                        {% elseif app.user %}
                        
                        {% else %}
                        <ul class=\"nav navbar-nav navbar-right\" style=\"margin: 0;\">
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                                    <i class=\"fa fa-user\" aria-hidden=\"true\"></i>
                                    <strong>S'inscrire ou Se Connecter</strong>
                                    <i class=\"fa fa-chevron-down\"></i>                                </a>
                                <ul class=\"dropdown-menu\">
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"{{path('app_register_blog')}}\" class=\"btn btn-primary\">S'inscrire'</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class=\"divider\"></li>
                                    <li>
                                        <div class=\"navbar-login navbar-login-session\">
                                            <div class=\"row\">
                                                <div class=\"col-lg-12\">
                                                    <p>
                                                        <a href=\"{{path('app_login')}}\" class=\"btn btn-primary\">Se connecter</a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>    
                        {% endif %}


                    </ul> <!-- end header__nav -->

                    <a href=\"#0\" title=\"Close Menu\" class=\"header__overlay-close close-mobile-menu\">Fermer</a>

                </nav> <!-- end header__nav-wrap -->

            </div> <!-- header-content -->
        </header> <!-- header -->
", "Blog/_navigation.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\_navigation.html.twig");
    }
}
