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

/* Blog/_allShowArticle.html.twig */
class __TwigTemplate_62bf1263cffcade98fed602904e5b76b51fb7208fb9e873b171e25722a5b1f69 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/_allShowArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/_allShowArticle.html.twig"));

        // line 1
        echo "<!-- s-content
    ================================================== -->
    <section class=\"s-content\">
        
        <div class=\"row masonry-wrap\">
            <div class=\"masonry\">

                <div class=\"grid-sizer\"></div>
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "                <article class=\"masonry__brick entry format-standard\" data-aos=\"fade-up\">
                        
                    <div class=\"entry__thumb\">
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 13), "slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"entry__thumb-link\">
                            ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["article"], "featuredImage", [], "any", false, false, false, 14)) {
                // line 15
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["article"], "imageFile"), "thumbArticle"), "html", null, true);
                echo "\" 
                            alt=\"Image Article\">
                                
                            ";
            } else {
                // line 19
                echo "                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\FilterExtension']->filter($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "thumbArticle"), "html", null, true);
                echo "\" 
                             alt=\"Article not Image available\">
                            ";
            }
            // line 22
            echo "
                        </a>
                    </div>
    
                    <div class=\"entry__text\">
                        <div class=\"entry__header\">
                            
                            <div class=\"entry__date\">
                                <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 30), "slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Publié le ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "updatedAt", [], "any", false, false, false, 30), "d-m-Y à H:i:s"), "html", null, true);
            echo " par <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "usersBlog", [], "any", false, false, false, 30), "html", null, true);
            echo "</strong></a>
                            </div>
                            <h1 class=\"entry__title\"><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 32), "slug" => twig_get_attribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 32), "html", null, true);
            echo "</a></h1>
                            
                        </div>
                        <div class=\"entry__excerpt\">
                            <p>
                                ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $this->extensions['Twig\Extra\String\StringExtension']->createUnicodeString(twig_get_attribute($this->env, $this->source, $context["article"], "contenu", [], "any", false, false, false, 37)), "truncate", [0 => 200, 1 => "..."], "method", false, false, false, 37), "html", null, true);
            echo "</p>
                        </div>
                        <div class=\"entry__meta\">
                        ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "categories", [], "any", false, false, false, 40));
            foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
                // line 41
                echo "
                                <span class=\"entry__meta-links\">
                               ";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categorie"], "name", [], "any", false, false, false, 43), "html", null, true);
                echo "
                            </span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "                        
                        </div>
                        <a href=\"#\" class=\"btn btn-link js-like\">
                            <span class=\"js-likes\">";
            // line 49
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "articleLikes", [], "any", false, false, false, 49)), "html", null, true);
            echo "</span>
                            ";
            // line 50
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50) && twig_get_attribute($this->env, $this->source, $context["article"], "isLikedArticle", [0 => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50)], "method", false, false, false, 50))) {
                // line 51
                echo "                            <span class=\"js-label\">j'aime</span>
                            
                            <i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>  

                            ";
            } else {
                // line 56
                echo "                            <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i>  
                                
                            ";
            }
            // line 59
            echo "
                        </a>
                    </div>
   
            
            </article> <!-- end article -->
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
               
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class=\"row\">
            <div class=\"col-full\">
                ";
        // line 73
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 73, $this->source); })()));
        echo "
            </div>
        </div>

    </section> <!-- s-content -->

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blog/_allShowArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 73,  170 => 66,  158 => 59,  153 => 56,  146 => 51,  144 => 50,  140 => 49,  135 => 46,  126 => 43,  122 => 41,  118 => 40,  112 => 37,  102 => 32,  93 => 30,  83 => 22,  76 => 19,  68 => 15,  66 => 14,  62 => 13,  57 => 10,  53 => 9,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- s-content
    ================================================== -->
    <section class=\"s-content\">
        
        <div class=\"row masonry-wrap\">
            <div class=\"masonry\">

                <div class=\"grid-sizer\"></div>
                {% for article in articles %}
                <article class=\"masonry__brick entry format-standard\" data-aos=\"fade-up\">
                        
                    <div class=\"entry__thumb\">
                        <a href=\"{{path('article.show', {id: article.id, slug: article.slug})}}\" class=\"entry__thumb-link\">
                            {% if article.featuredImage %}
                            <img src=\"{{vich_uploader_asset(article, 'imageFile') |imagine_filter('thumbArticle')}}\" 
                            alt=\"Image Article\">
                                
                            {% else %}
                            <img src=\"{{asset('bower_components/images/imageNotAvailable.png') |imagine_filter('thumbArticle')}}\" 
                             alt=\"Article not Image available\">
                            {% endif %}

                        </a>
                    </div>
    
                    <div class=\"entry__text\">
                        <div class=\"entry__header\">
                            
                            <div class=\"entry__date\">
                                <a href=\"{{path('article.show', {id: article.id, slug: article.slug})}}\">Publié le {{article.updatedAt|date(\"d-m-Y à H:i:s\")}} par <strong>{{article.usersBlog}}</strong></a>
                            </div>
                            <h1 class=\"entry__title\"><a href=\"{{path('article.show', {id: article.id, slug: article.slug})}}\">{{article.title}}</a></h1>
                            
                        </div>
                        <div class=\"entry__excerpt\">
                            <p>
                                {{article.contenu|u.truncate(200, '...')}}</p>
                        </div>
                        <div class=\"entry__meta\">
                        {% for categorie in article.categories %}

                                <span class=\"entry__meta-links\">
                               {{categorie.name}}
                            </span>
                            {% endfor %}
                        
                        </div>
                        <a href=\"#\" class=\"btn btn-link js-like\">
                            <span class=\"js-likes\">{{article.articleLikes | length}}</span>
                            {% if app.user and article.isLikedArticle(app.user) %}
                            <span class=\"js-label\">j'aime</span>
                            
                            <i class=\"fa fa-thumbs-up\" aria-hidden=\"true\"></i>  

                            {% else %}
                            <i class=\"fa fa-thumbs-o-up\" aria-hidden=\"true\"></i>  
                                
                            {% endif %}

                        </a>
                    </div>
   
            
            </article> <!-- end article -->
                {% endfor %}

               
            </div> <!-- end masonry -->
        </div> <!-- end masonry-wrap -->

        <div class=\"row\">
            <div class=\"col-full\">
                {{ knp_pagination_render(articles)}}
            </div>
        </div>

    </section> <!-- s-content -->

", "Blog/_allShowArticle.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\_allShowArticle.html.twig");
    }
}
