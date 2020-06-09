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

/* Blog/showArticle.html.twig */
class __TwigTemplate_a6da6faa07befb76b36424ae7cc70677968707af37c10f372afc413c3b033658 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/showArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/showArticle.html.twig"));

        $this->parent = $this->loadTemplate("Blog/baseBlog.html.twig", "Blog/showArticle.html.twig", 1);
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

        echo "top";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<!-- pageheader
    ================================================== -->
    <div class=\"s-pageheader\">
        ";
        // line 7
        $this->loadTemplate("Blog/_navigation.html.twig", "Blog/showArticle.html.twig", 7)->display($context);
        // line 8
        echo "    </div>

    <!-- s-content
    ================================================== -->
    <section class=\"s-content s-content--narrow s-content--no-padding-bottom\">
        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 14
            echo "<div class=\"col-12\">
    <div class=\"alert alert-";
            // line 15
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " alert-dismissible fade show\">
        ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 17
                echo "        <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>                    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        <article class=\"row format-standard\">

            <div class=\"s-content__header col-full\">
                <h1 class=\"s-content__header-title\">
                   ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), "html", null, true);
        echo "
                </h1>
                <ul class=\"s-content__header-meta\">
                    <li class=\"date\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 30, $this->source); })()), "updatedAt", [], "any", false, false, false, 30), "d-m-Y à H:i:s"), "html", null, true);
        echo "</li>
                    
                    <li class=\"cat\">
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 33, $this->source); })()), "categories", [], "any", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            echo "                            
                        <a href=\"#0\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 34), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "
                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class=\"s-content__media col-full\">
                <div class=\"s-content__post-thumb\">
                    ";
        // line 43
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 43, $this->source); })()), "featuredImage", [], "any", false, false, false, 43)) {
            // line 44
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 44, $this->source); })()), "imageFile"), "featuredArticle"), "html", null, true);
            echo "\" 
                    alt=\"Image Article\" width=\"100%\" > 
                        
                    ";
        } else {
            // line 48
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "featuredArticle"), "html", null, true);
            echo "\" 
                     alt=\"Article not Image available\" width=\"100%\">
                    ";
        }
        // line 51
        echo "                </div>
            </div> <!-- end s-content__media -->

            <div class=\"col-full s-content__main\">

                <p class=\"lead\">";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 56, $this->source); })()), "contenu", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                <p class=\"s-content__tags\">
                    <span>Les Mots Clés</span>

                    <span class=\"s-content__tag-list\">
                        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 61, $this->source); })()), "keywords", [], "any", false, false, false, 61));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 62
            echo "                        <a href=\"#0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["keyword"], "keyword", [], "any", false, false, false, 62), "html", null, true);
            echo "</a>   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                    </span>
                </p> <!-- end s-content__tags -->

                <div class=\"s-content__author\">
                    <img src=\"\" alt=\"\">

                    <div class=\"s-content__author-about\">
                        <h4 class=\"s-content__author-name\">
                            Ecrit par ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 72, $this->source); })()), "usersBlog", [], "any", false, false, false, 72), "html", null, true);
        echo "
                        </h4>
                    
                    </div>
                </div>

                <div class=\"s-content__pagenav\">
                    <div class=\"s-content__nav\">
                        <div class=\"s-content__prev\">
                            <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81) - 1), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 81, $this->source); })()), "slug", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\" rel=\"prev\">
                                <span>Article Précedent</span>
                            </a>
                        </div>
                        <div class=\"s-content__next\">
                            <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86) + 1), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 86, $this->source); })()), "slug", [], "any", false, false, false, 86)]), "html", null, true);
        echo "\" rel=\"next\">
                                <span>Article Suivant</span>
                            </a>
                        </div>
                    </div>
                </div> <!-- end s-content__pagenav -->

            </div> <!-- end s-content__main -->

        </article>


        <!-- comments
        ================================================== -->
        <div class=\"comments-wrap\">

            <div id=\"comments\" class=\"row\">

                <div class=\"col-full\">

                    <h3 class=\"h2\">5 Comments</h3>

                    <!-- commentlist -->
                    <ol class=\"commentlist\">
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 110, $this->source); })()), "commentaires", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 111
            echo "                        <li class=\"depth-1 comment\">

                            <div class=\"comment__avatar\">
                                ";
            // line 114
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "usersBlog", [], "any", false, false, false, 114), "imageFile", [], "any", false, false, false, 114)) {
                // line 115
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "usersBlog", [], "any", false, false, false, 115), "imageFile", [], "any", false, false, false, 115), "imageFile"), "avatarRow"), "html", null, true);
                echo "\" 
                                alt=\"Comment profile image\" class=\"avatar\" width=\"50\" > 
                                    
                                ";
            } else {
                // line 119
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/avatarIsset.png"), "avatarRow"), "html", null, true);
                echo "\" 
                                 alt=\"Image available\" width=\"100%\">
                                ";
            }
            // line 122
            echo "                            </div>

                            <div class=\"comment__content\">

                                <div class=\"comment__info\">
                                    <cite>";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["comment"], "usersBlog", [], "any", false, false, false, 127), "pseudo", [], "any", false, false, false, 127), "html", null, true);
            echo "</cite>

                                    <div class=\"comment__meta\">
                                        <time class=\"comment__time\">";
            // line 130
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 130), "d-m-Y à H:i:s"), "html", null, true);
            echo "</time>
                                    </div>
                                </div>

                                <div class=\"comment__text\">
                                <p>";
            // line 135
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "contain", [], "any", false, false, false, 135), "html", null, true);
            echo "</p>
                                </div>

                            </div>

                        </li>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        echo "



                    </ol> <!-- end commentlist -->


                    <!-- respond
                    ================================================== -->
                    <div class=\"respond\">

                        <h3 class=\"h2\">Ajouter un commentaire</h3>

                            <fieldset>
                                         ";
        // line 156
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'form_start', ["attr" => ["class" => "form_create"]]);
        echo "

                                         ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 158, $this->source); })()), "contain", [], "any", false, false, false, 158), 'widget', ["attr" => ["class" => "form_create"]]);
        echo "
                                         <button type=\"submit\" class=\"submit btn--primary btn--large full-width\">Poster</button>
                                         ";
        // line 160
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 160, $this->source); })()), 'form_end');
        echo "


                            </fieldset>

                    </div> <!-- end respond -->

                </div> <!-- end col-full -->

            </div> <!-- end row comments -->
        </div> <!-- end comments-wrap -->

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
   
    ";
        // line 178
        $this->loadTemplate("Blog/_footerPopularPosts.html.twig", "Blog/showArticle.html.twig", 178)->display($context);
        // line 179
        echo "
    ";
        // line 180
        $this->loadTemplate("Blog/_footerKeyword.html.twig", "Blog/showArticle.html.twig", 180)->display($context);
        // line 181
        echo "       



       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Blog/showArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 181,  390 => 180,  387 => 179,  385 => 178,  364 => 160,  359 => 158,  354 => 156,  338 => 142,  325 => 135,  317 => 130,  311 => 127,  304 => 122,  297 => 119,  289 => 115,  287 => 114,  282 => 111,  278 => 110,  251 => 86,  243 => 81,  231 => 72,  221 => 64,  212 => 62,  208 => 61,  200 => 56,  193 => 51,  186 => 48,  178 => 44,  176 => 43,  167 => 36,  159 => 34,  153 => 33,  147 => 30,  141 => 27,  134 => 22,  126 => 19,  117 => 17,  113 => 16,  109 => 15,  106 => 14,  102 => 13,  95 => 8,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Blog/baseBlog.html.twig' %}
{% block className %}top{% endblock className %}
{% block body %}
<!-- pageheader
    ================================================== -->
    <div class=\"s-pageheader\">
        {% include \"Blog/_navigation.html.twig\" %}
    </div>

    <!-- s-content
    ================================================== -->
    <section class=\"s-content s-content--narrow s-content--no-padding-bottom\">
        {% for label,messages in app.flashes %}
<div class=\"col-12\">
    <div class=\"alert alert-{{label}} alert-dismissible fade show\">
        {% for message in messages %}
        <p>{{message}}</p>                    
        {% endfor %}
    </div>
</div>
{% endfor %}

        <article class=\"row format-standard\">

            <div class=\"s-content__header col-full\">
                <h1 class=\"s-content__header-title\">
                   {{article.title}}
                </h1>
                <ul class=\"s-content__header-meta\">
                    <li class=\"date\">{{article.updatedAt|date(\"d-m-Y à H:i:s\")}}</li>
                    
                    <li class=\"cat\">
                        {% for categorie in article.categories %}                            
                        <a href=\"#0\">{{categorie.name}}</a>
                        {% endfor %}

                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class=\"s-content__media col-full\">
                <div class=\"s-content__post-thumb\">
                    {% if article.featuredImage %}
                    <img src=\"{{vich_uploader_asset(article, 'imageFile') |imagine_filter('featuredArticle')}}\" 
                    alt=\"Image Article\" width=\"100%\" > 
                        
                    {% else %}
                    <img src=\"{{asset('bower_components/images/imageNotAvailable.png') |imagine_filter('featuredArticle')}}\" 
                     alt=\"Article not Image available\" width=\"100%\">
                    {% endif %}
                </div>
            </div> <!-- end s-content__media -->

            <div class=\"col-full s-content__main\">

                <p class=\"lead\">{{article.contenu}}</p>
                <p class=\"s-content__tags\">
                    <span>Les Mots Clés</span>

                    <span class=\"s-content__tag-list\">
                        {% for keyword in article.keywords %}
                        <a href=\"#0\">{{keyword.keyword}}</a>   
                        {% endfor %}
                    </span>
                </p> <!-- end s-content__tags -->

                <div class=\"s-content__author\">
                    <img src=\"\" alt=\"\">

                    <div class=\"s-content__author-about\">
                        <h4 class=\"s-content__author-name\">
                            Ecrit par {{article.usersBlog}}
                        </h4>
                    
                    </div>
                </div>

                <div class=\"s-content__pagenav\">
                    <div class=\"s-content__nav\">
                        <div class=\"s-content__prev\">
                            <a href=\"{{path('article.show', {id: article.id - 1, slug: article.slug})}}\" rel=\"prev\">
                                <span>Article Précedent</span>
                            </a>
                        </div>
                        <div class=\"s-content__next\">
                            <a href=\"{{path('article.show', {id: article.id + 1, slug: article.slug})}}\" rel=\"next\">
                                <span>Article Suivant</span>
                            </a>
                        </div>
                    </div>
                </div> <!-- end s-content__pagenav -->

            </div> <!-- end s-content__main -->

        </article>


        <!-- comments
        ================================================== -->
        <div class=\"comments-wrap\">

            <div id=\"comments\" class=\"row\">

                <div class=\"col-full\">

                    <h3 class=\"h2\">5 Comments</h3>

                    <!-- commentlist -->
                    <ol class=\"commentlist\">
                        {% for comment in article.commentaires%}
                        <li class=\"depth-1 comment\">

                            <div class=\"comment__avatar\">
                                {% if comment.usersBlog.imageFile %}
                                <img src=\"{{vich_uploader_asset(comment.usersBlog.imageFile, 'imageFile') |imagine_filter('avatarRow')}}\" 
                                alt=\"Comment profile image\" class=\"avatar\" width=\"50\" > 
                                    
                                {% else %}
                                <img src=\"{{asset('bower_components/images/avatarIsset.png') |imagine_filter('avatarRow')}}\" 
                                 alt=\"Image available\" width=\"100%\">
                                {% endif %}
                            </div>

                            <div class=\"comment__content\">

                                <div class=\"comment__info\">
                                    <cite>{{comment.usersBlog.pseudo}}</cite>

                                    <div class=\"comment__meta\">
                                        <time class=\"comment__time\">{{comment.createdAt|date(\"d-m-Y à H:i:s\")}}</time>
                                    </div>
                                </div>

                                <div class=\"comment__text\">
                                <p>{{comment.contain}}</p>
                                </div>

                            </div>

                        </li>
                        {% endfor %}




                    </ol> <!-- end commentlist -->


                    <!-- respond
                    ================================================== -->
                    <div class=\"respond\">

                        <h3 class=\"h2\">Ajouter un commentaire</h3>

                            <fieldset>
                                         {{form_start(form, { 'attr': {'class': 'form_create'}})}}

                                         {{form_widget(form.contain, { 'attr': {'class': 'form_create'}})}}
                                         <button type=\"submit\" class=\"submit btn--primary btn--large full-width\">Poster</button>
                                         {{form_end(form)}}


                            </fieldset>

                    </div> <!-- end respond -->

                </div> <!-- end col-full -->

            </div> <!-- end row comments -->
        </div> <!-- end comments-wrap -->

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
   
    {% include \"Blog/_footerPopularPosts.html.twig\" %}

    {% include \"Blog/_footerKeyword.html.twig\" %}
       



       
{% endblock body %}", "Blog/showArticle.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\showArticle.html.twig");
    }
}
