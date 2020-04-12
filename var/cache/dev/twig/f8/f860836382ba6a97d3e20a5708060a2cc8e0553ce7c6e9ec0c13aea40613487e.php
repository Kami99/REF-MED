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

/* Blog/createPost.html.twig */
class __TwigTemplate_b6ac8771e6a8d037592c40defd6f37059bf0f26d4558b12c1dae0c3393cee1d1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'className' => [$this, 'block_className'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Blog/baseBlog.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/createPost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/createPost.html.twig"));

        $this->parent = $this->loadTemplate("Blog/baseBlog.html.twig", "Blog/createPost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_className($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        // line 3
        echo "    top
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
        echo "
    <!-- pageheader
    ================================================== -->
    <section class=\"s-pageheader s-pageheader--home\" style=\"height: auto; min-height:auto;\">

        ";
        // line 12
        $this->loadTemplate("Blog/_navigation.html.twig", "Blog/createPost.html.twig", 12)->display($context);
        // line 13
        echo "
    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class=\"s-content\">

        <div class=\"row masonry-wrap\">
            <div class=\"masonry\">
                <div class=\"col-2-3\">
                   <h4 style=\"font-weight: 500;
                   line-height: 22px;
                   flex: 1;
                   border-bottom:#49af95 1px solid;
                   padding: 4px;
                   margin: 16px 0;
                   display:flex;\">
                       Créer votre aricle
                   </h4>
     
    
                </div>
                <div class=\"col-1-3\">
                    <div class=\"Rules\">

                    
                    <div class=\"titleRules\">
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\">Publier sur Le Med-Blog</font>
                        </font>
                    </div>
                    <ol class=\"list\">
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Rappelez-vous avant de Poster</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Soyez Courtois. Comportez-vous comme vous le feriez dans la vraie
                                    vie</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Recherchez la source d'origine de votre article</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Rechercher des doublons avant de poster</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Publiez que des articles avec des Sujet liées à la médicine ou la santé</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Respectez les règles de la communauté</font>
                            </font>
                        </li>
                    </ol>
                </div>
                    <font style=\"vertical-align: inherit; color:#7c7c7c; font-style:italic; font-weight:bolder; font-size:12px;\">
                        Veuillez être conscient de la politique de contenu du Blog et n'y publiez des articles sur conforme aux thèmes
                    </font>

                </div>
            </div>

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
    <section class=\"s-extra\">

        <div class=\"row bottom tags-wrap\">
            <div class=\"col-full tags\">
                <h3>Keyword</h3>

                <div class=\"tagcloud\">
                    <a href=\"#0\">Salad</a>
                    <a href=\"#0\">Recipe</a>
                    <a href=\"#0\">Places</a>
                    <a href=\"#0\">Tips</a>
                    <a href=\"#0\">Friends</a>
                    <a href=\"#0\">Travel</a>
                    <a href=\"#0\">Exercise</a>
                    <a href=\"#0\">Reading</a>
                    <a href=\"#0\">Running</a>
                    <a href=\"#0\">Self-Help</a>
                    <a href=\"#0\">Vacation</a>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Blog/createPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 13,  97 => 12,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Blog/baseBlog.html.twig' %}
{% block className %}
    top
{% endblock className %}

{% block body %}

    <!-- pageheader
    ================================================== -->
    <section class=\"s-pageheader s-pageheader--home\" style=\"height: auto; min-height:auto;\">

        {% include \"Blog/_navigation.html.twig\" %}

    </section> <!-- end s-pageheader -->


    <!-- s-content
    ================================================== -->
    <section class=\"s-content\">

        <div class=\"row masonry-wrap\">
            <div class=\"masonry\">
                <div class=\"col-2-3\">
                   <h4 style=\"font-weight: 500;
                   line-height: 22px;
                   flex: 1;
                   border-bottom:#49af95 1px solid;
                   padding: 4px;
                   margin: 16px 0;
                   display:flex;\">
                       Créer votre aricle
                   </h4>
     
    
                </div>
                <div class=\"col-1-3\">
                    <div class=\"Rules\">

                    
                    <div class=\"titleRules\">
                        <font style=\"vertical-align: inherit;\">
                            <font style=\"vertical-align: inherit;\">Publier sur Le Med-Blog</font>
                        </font>
                    </div>
                    <ol class=\"list\">
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Rappelez-vous avant de Poster</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Soyez Courtois. Comportez-vous comme vous le feriez dans la vraie
                                    vie</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Recherchez la source d'origine de votre article</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Rechercher des doublons avant de poster</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Publiez que des articles avec des Sujet liées à la médicine ou la santé</font>
                            </font>
                        </li>
                        <li class=\"liList\">
                            <font style=\"vertical-align: inherit;\">
                                <font style=\"vertical-align: inherit;\">Respectez les règles de la communauté</font>
                            </font>
                        </li>
                    </ol>
                </div>
                    <font style=\"vertical-align: inherit; color:#7c7c7c; font-style:italic; font-weight:bolder; font-size:12px;\">
                        Veuillez être conscient de la politique de contenu du Blog et n'y publiez des articles sur conforme aux thèmes
                    </font>

                </div>
            </div>

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
    <section class=\"s-extra\">

        <div class=\"row bottom tags-wrap\">
            <div class=\"col-full tags\">
                <h3>Keyword</h3>

                <div class=\"tagcloud\">
                    <a href=\"#0\">Salad</a>
                    <a href=\"#0\">Recipe</a>
                    <a href=\"#0\">Places</a>
                    <a href=\"#0\">Tips</a>
                    <a href=\"#0\">Friends</a>
                    <a href=\"#0\">Travel</a>
                    <a href=\"#0\">Exercise</a>
                    <a href=\"#0\">Reading</a>
                    <a href=\"#0\">Running</a>
                    <a href=\"#0\">Self-Help</a>
                    <a href=\"#0\">Vacation</a>
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->
    
{% endblock body %}", "Blog/createPost.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\createPost.html.twig");
    }
}
