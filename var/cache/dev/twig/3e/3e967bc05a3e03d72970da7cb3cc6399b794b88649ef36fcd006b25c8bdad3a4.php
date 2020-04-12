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

/* Blog/baseBlog.html.twig */
class __TwigTemplate_21f03f8507fff6a33c36fbe5890e2d81eb224cb35de6e33fb1a855134b6fc9a7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'addStyleSheets' => [$this, 'block_addStyleSheets'],
            'title' => [$this, 'block_title'],
            'className' => [$this, 'block_className'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/baseBlog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/baseBlog.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html  lang=\"fr\" class=\"no-js\">
    <head>
        <meta charset=\"UTF-8\">
                ";
        // line 6
        echo "
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 46
        echo "        <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body id=\"";
        // line 48
        $this->displayBlock('className', $context, $blocks);
        echo "\">
        ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 148
        echo "    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    
        <!-- mobile specific metas
        ================================================== -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    
        <!-- CSS
        ================================================== -->
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/css/baseBlog.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/css/vendorBlog.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/css/mainBlog.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/css/fontsBlog.css"), "html", null, true);
        echo "\">
    
        <!-- script
        ================================================== -->
        <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/modernizr.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/pace.min.js"), "html", null, true);
        echo "\"></script>
    
        <!-- favicons
        ================================================== -->
        <link rel=\"shortcut icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/ico/REF-MED.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/ico/REF-MED.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\">
                    ";
        // line 31
        $this->displayBlock('addStyleSheets', $context, $blocks);
        // line 33
        echo " 
                             
                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
                    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
                    <![endif]-->

                    <!-- Google Font -->
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_addStyleSheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        // line 32
        echo "                    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "REF-MED BLOG";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 48
    public function block_className($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "        ";
        // line 52
        echo "

        ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 144
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/plugins.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/mainBlog.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "            <!-- s-footer
    ================================================== -->
    <footer class=\"s-footer\">

        <div class=\"s-footer__main\">
            <div class=\"row\">
                
                <div class=\"col-3 md-four mob-full s-footer__sitelinks\">
                        
                    <h4>Les liens Utiles</h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Acceuil</a></li>
                        <li><a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("createPost");
        echo "\">Créer une nouvelle publication</a></li>
                        <li><a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("allPostCategory");
        echo "\">Articles par catégories</a></li>
                        <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->


                <div class=\"col-3 md-four mob-full s-footer__social\">
                        
                    <h4>Nos liens sociaux </h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"#0\">Facebook</a></li>
                        <li><a href=\"#0\">Instagram</a></li>
                        <li><a href=\"#0\">Twitter</a></li>
                        <li><a href=\"#0\">Pinterest</a></li>
                        <li><a href=\"#0\">Google+</a></li>
                        <li><a href=\"#0\">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class=\"col-3 md-full end s-footer__subscribe\">
                        
                    <h4>Notre Newsletter</h4>

                    <p>Vous Pouvez vous inscrire à notre Newsletter à travers ce formulaire.</p>

                    <div class=\"subscribe-form\">
                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">

                            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mc-email\" placeholder=\"Email Address\" required=\"\">
                
                            <input type=\"submit\" name=\"subscribe\" value=\"Send\">
                
                            <label for=\"mc-email\" class=\"subscribe-message\"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->
        <div class=\"s-footer__bottom\">
            <div class=\"row\">
                <div class=\"col-full\">

                    <div class=\"go-top\">
                        <a class=\"smoothscroll\" title=\"Allez vers le haut de la page\" href=\"#top\"></a>
                    </div>
                </div>
            </div>
        </div>

      
    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id=\"preloader\">
        <div id=\"loader\">
            <div class=\"line-scale\">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

            
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Blog/baseBlog.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 70,  316 => 69,  312 => 68,  308 => 67,  294 => 55,  284 => 54,  272 => 146,  268 => 145,  263 => 144,  261 => 54,  257 => 52,  255 => 51,  245 => 50,  227 => 49,  209 => 48,  190 => 46,  180 => 32,  170 => 31,  148 => 33,  146 => 31,  142 => 30,  138 => 29,  131 => 25,  127 => 24,  120 => 20,  116 => 19,  112 => 18,  108 => 17,  97 => 8,  87 => 7,  76 => 148,  73 => 50,  71 => 49,  67 => 48,  61 => 46,  59 => 7,  56 => 6,  50 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html  lang=\"fr\" class=\"no-js\">
    <head>
        <meta charset=\"UTF-8\">
                {# inclusion of Css files#}

        {% block stylesheets %}
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
    
        <!-- mobile specific metas
        ================================================== -->
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    
        <!-- CSS
        ================================================== -->
        <link rel=\"stylesheet\" href=\"{{asset('bower_components/css/baseBlog.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('bower_components/css/vendorBlog.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('bower_components/css/mainBlog.css')}}\">
        <link rel=\"stylesheet\" href=\"{{asset('bower_components/css/fontsBlog.css')}}\">
    
        <!-- script
        ================================================== -->
        <script src=\"{{asset('bower_components/js/modernizr.js')}}\"></script>
        <script src=\"{{asset('bower_components/js/pace.min.js')}}\"></script>
    
        <!-- favicons
        ================================================== -->
        <link rel=\"shortcut icon\" href=\"{{asset('bower_components/ico/REF-MED.ico')}}\" type=\"image/x-icon\">
        <link rel=\"icon\" href=\"{{asset('bower_components/ico/REF-MED.ico')}}\" type=\"image/x-icon\">
                    {%block addStyleSheets%}
                    {%endblock%}
 
                             
                    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                    <!--[if lt IE 9]>
                    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
                    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
                    <![endif]-->

                    <!-- Google Font -->
                    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic\">

        {% endblock %}
        <title>{% block title %}REF-MED BLOG{% endblock %}</title>
    </head>
    <body id=\"{% block className %}{% endblock %}\">
        {% block body %}{% endblock %}
        {% block javascripts %}
        {# inclusion of javascript files#}


        {% block footer %}
            <!-- s-footer
    ================================================== -->
    <footer class=\"s-footer\">

        <div class=\"s-footer__main\">
            <div class=\"row\">
                
                <div class=\"col-3 md-four mob-full s-footer__sitelinks\">
                        
                    <h4>Les liens Utiles</h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"{{path('home')}}\">Acceuil</a></li>
                        <li><a href=\"{{path('createPost')}}\">Créer une nouvelle publication</a></li>
                        <li><a href=\"{{path('allPostCategory')}}\">Articles par catégories</a></li>
                        <li><a href=\"{{path('contact')}}\">Contact</a></li>
                    </ul>

                </div> <!-- end s-footer__sitelinks -->


                <div class=\"col-3 md-four mob-full s-footer__social\">
                        
                    <h4>Nos liens sociaux </h4>

                    <ul class=\"s-footer__linklist\">
                        <li><a href=\"#0\">Facebook</a></li>
                        <li><a href=\"#0\">Instagram</a></li>
                        <li><a href=\"#0\">Twitter</a></li>
                        <li><a href=\"#0\">Pinterest</a></li>
                        <li><a href=\"#0\">Google+</a></li>
                        <li><a href=\"#0\">LinkedIn</a></li>
                    </ul>

                </div> <!-- end s-footer__social -->

                <div class=\"col-3 md-full end s-footer__subscribe\">
                        
                    <h4>Notre Newsletter</h4>

                    <p>Vous Pouvez vous inscrire à notre Newsletter à travers ce formulaire.</p>

                    <div class=\"subscribe-form\">
                        <form id=\"mc-form\" class=\"group\" novalidate=\"true\">

                            <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mc-email\" placeholder=\"Email Address\" required=\"\">
                
                            <input type=\"submit\" name=\"subscribe\" value=\"Send\">
                
                            <label for=\"mc-email\" class=\"subscribe-message\"></label>
                
                        </form>
                    </div>

                </div> <!-- end s-footer__subscribe -->

            </div>
        </div> <!-- end s-footer__main -->
        <div class=\"s-footer__bottom\">
            <div class=\"row\">
                <div class=\"col-full\">

                    <div class=\"go-top\">
                        <a class=\"smoothscroll\" title=\"Allez vers le haut de la page\" href=\"#top\"></a>
                    </div>
                </div>
            </div>
        </div>

      
    </footer> <!-- end s-footer -->


    <!-- preloader
    ================================================== -->
    <div id=\"preloader\">
        <div id=\"loader\">
            <div class=\"line-scale\">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>

            
        {% endblock footer %}
        <script src=\"{{asset('bower_components/js/jquery-3.2.1.min.js')}}\"></script>
        <script src=\"{{asset('bower_components/js/plugins.js')}}\"></script>
        <script src=\"{{asset('bower_components/js/mainBlog.js')}}\"></script>
        {% endblock %}
    </body>
</html>", "Blog/baseBlog.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\baseBlog.html.twig");
    }
}
