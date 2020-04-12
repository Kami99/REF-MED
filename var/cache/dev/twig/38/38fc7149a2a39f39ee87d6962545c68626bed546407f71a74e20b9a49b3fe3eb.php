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
class __TwigTemplate_dce74e5d7f029cc19be1ddb26ae8c87a21e0fc6791fa64b1c0be67e30b7b1aaa extends \Twig\Template
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
        

        <article class=\"row format-standard\">

            <div class=\"s-content__header col-full\">
                <h1 class=\"s-content__header-title\">
                   ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        echo "
                </h1>
                <ul class=\"s-content__header-meta\">
                    <li class=\"date\">";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "updatedAt", [], "any", false, false, false, 22), "d-m-Y à H:i:s"), "html", null, true);
        echo "</li>
                    
                    <li class=\"cat\">
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 25, $this->source); })()), "categories", [], "any", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            echo "                            
                        <a href=\"#0\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 26), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
                    </li>
                </ul>
            </div> <!-- end s-content__header -->
    
            <div class=\"s-content__media col-full\">
                <div class=\"s-content__post-thumb\">
                    ";
        // line 35
        if (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 35, $this->source); })()), "featuredImage", [], "any", false, false, false, 35)) {
            // line 36
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "imageFile"), "featuredArticle"), "html", null, true);
            echo "\" 
                    alt=\"Image Article\" width=\"100%\" > 
                        
                    ";
        } else {
            // line 40
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "featuredArticle"), "html", null, true);
            echo "\" 
                     alt=\"Article not Image available\" width=\"100%\">
                    ";
        }
        // line 43
        echo "                </div>
            </div> <!-- end s-content__media -->

            <div class=\"col-full s-content__main\">

                <p class=\"lead\">";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 48, $this->source); })()), "contenu", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                <p class=\"s-content__tags\">
                    <span>Les Mots Clés</span>

                    <span class=\"s-content__tag-list\">
                        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 53, $this->source); })()), "keywords", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 54
            echo "                        <a href=\"#0\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["keyword"], "keyword", [], "any", false, false, false, 54), "html", null, true);
            echo "</a>   
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    </span>
                </p> <!-- end s-content__tags -->

                <div class=\"s-content__author\">
                    <img src=\"\" alt=\"\">

                    <div class=\"s-content__author-about\">
                        <h4 class=\"s-content__author-name\">
                            Ecrit par ";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 64, $this->source); })()), "usersBlog", [], "any", false, false, false, 64), "html", null, true);
        echo "
                        </h4>
                    
                    </div>
                </div>

                <div class=\"s-content__pagenav\">
                    <div class=\"s-content__nav\">
                        <div class=\"s-content__prev\">
                            <a href=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 73, $this->source); })()), "id", [], "any", false, false, false, 73) - 1), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 73, $this->source); })()), "slug", [], "any", false, false, false, 73)]), "html", null, true);
        echo "\" rel=\"prev\">
                                <span>Article Précedent</span>
                            </a>
                        </div>
                        <div class=\"s-content__next\">
                            <a href=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78) + 1), "slug" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 78, $this->source); })()), "slug", [], "any", false, false, false, 78)]), "html", null, true);
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

                        <li class=\"depth-1 comment\">

                            <div class=\"comment__avatar\">
                                <img width=\"50\" height=\"50\" class=\"avatar\" src=\"images/avatars/user-01.jpg\" alt=\"\">
                            </div>

                            <div class=\"comment__content\">

                                <div class=\"comment__info\">
                                    <cite>Itachi Uchiha</cite>

                                    <div class=\"comment__meta\">
                                        <time class=\"comment__time\">Dec 16, 2017 @ 23:05</time>
                                        <a class=\"reply\" href=\"#0\">Reply</a>
                                    </div>
                                </div>

                                <div class=\"comment__text\">
                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                </div>

                            </div>

                        </li> <!-- end comment level 1 -->



                    </ol> <!-- end commentlist -->


                    <!-- respond
                    ================================================== -->
                    <div class=\"respond\">

                        <h3 class=\"h2\">Ajouter un commentaire</h3>

                        <form name=\"contactForm\" id=\"contactForm\" method=\"post\" action=\"\">
                            <fieldset>

                                <div class=\"form-field\">
                                        <input name=\"cName\" type=\"text\" id=\"cName\" class=\"full-width\" placeholder=\"Your Name\" value=\"\">
                                </div>

                                <div class=\"form-field\">
                                        <input name=\"cEmail\" type=\"text\" id=\"cEmail\" class=\"full-width\" placeholder=\"Your Email\" value=\"\">
                                </div>

                                <div class=\"form-field\">
                                        <input name=\"cWebsite\" type=\"text\" id=\"cWebsite\" class=\"full-width\" placeholder=\"Website\" value=\"\">
                                </div>

                                <div class=\"message form-field\">
                                    <textarea name=\"cMessage\" id=\"cMessage\" class=\"full-width\" placeholder=\"Your Message\"></textarea>
                                </div>

                                <button type=\"submit\" class=\"submit btn--primary btn--large full-width\">Submit</button>

                            </fieldset>
                        </form> <!-- end form -->

                    </div> <!-- end respond -->

                </div> <!-- end col-full -->

            </div> <!-- end row comments -->
        </div> <!-- end comments-wrap -->

    </section> <!-- s-content -->


    <!-- s-extra
    ================================================== -->
   
    ";
        // line 176
        $this->loadTemplate("Blog/_footerPopularPosts.html.twig", "Blog/showArticle.html.twig", 176)->display($context);
        // line 177
        echo "
    ";
        // line 178
        $this->loadTemplate("Blog/_footerKeyword.html.twig", "Blog/showArticle.html.twig", 178)->display($context);
        // line 179
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
        return array (  326 => 179,  324 => 178,  321 => 177,  319 => 176,  218 => 78,  210 => 73,  198 => 64,  188 => 56,  179 => 54,  175 => 53,  167 => 48,  160 => 43,  153 => 40,  145 => 36,  143 => 35,  134 => 28,  126 => 26,  120 => 25,  114 => 22,  108 => 19,  95 => 8,  93 => 7,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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

                        <li class=\"depth-1 comment\">

                            <div class=\"comment__avatar\">
                                <img width=\"50\" height=\"50\" class=\"avatar\" src=\"images/avatars/user-01.jpg\" alt=\"\">
                            </div>

                            <div class=\"comment__content\">

                                <div class=\"comment__info\">
                                    <cite>Itachi Uchiha</cite>

                                    <div class=\"comment__meta\">
                                        <time class=\"comment__time\">Dec 16, 2017 @ 23:05</time>
                                        <a class=\"reply\" href=\"#0\">Reply</a>
                                    </div>
                                </div>

                                <div class=\"comment__text\">
                                <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                                facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                                </div>

                            </div>

                        </li> <!-- end comment level 1 -->



                    </ol> <!-- end commentlist -->


                    <!-- respond
                    ================================================== -->
                    <div class=\"respond\">

                        <h3 class=\"h2\">Ajouter un commentaire</h3>

                        <form name=\"contactForm\" id=\"contactForm\" method=\"post\" action=\"\">
                            <fieldset>

                                <div class=\"form-field\">
                                        <input name=\"cName\" type=\"text\" id=\"cName\" class=\"full-width\" placeholder=\"Your Name\" value=\"\">
                                </div>

                                <div class=\"form-field\">
                                        <input name=\"cEmail\" type=\"text\" id=\"cEmail\" class=\"full-width\" placeholder=\"Your Email\" value=\"\">
                                </div>

                                <div class=\"form-field\">
                                        <input name=\"cWebsite\" type=\"text\" id=\"cWebsite\" class=\"full-width\" placeholder=\"Website\" value=\"\">
                                </div>

                                <div class=\"message form-field\">
                                    <textarea name=\"cMessage\" id=\"cMessage\" class=\"full-width\" placeholder=\"Your Message\"></textarea>
                                </div>

                                <button type=\"submit\" class=\"submit btn--primary btn--large full-width\">Submit</button>

                            </fieldset>
                        </form> <!-- end form -->

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
