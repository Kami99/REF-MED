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

/* Blog/_footerPopularPosts.html.twig */
class __TwigTemplate_7845c5c5cf7c212672a59589eed538f39234f221636babd4f3d6af161b82f861 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/_footerPopularPosts.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/_footerPopularPosts.html.twig"));

        // line 1
        echo "<section class=\"s-extra\">
<div class=\"row top\">
    
    <div class=\"col-eight md-six tab-full popular\">
        <h3>Les Articles Populaires</h3>

        <div class=\"block-1-2 block-m-full popular__posts\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["popular_posts"]) || array_key_exists("popular_posts", $context) ? $context["popular_posts"] : (function () { throw new RuntimeError('Variable "popular_posts" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["postsPopular"]) {
            // line 9
            echo "                        <article class=\"col-block popular__post\">
                <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["postsPopular"], "id", [], "any", false, false, false, 10), "slug" => twig_get_attribute($this->env, $this->source, $context["postsPopular"], "slug", [], "any", false, false, false, 10)]), "html", null, true);
            echo "\" class=\"popular__thumb\">
                    ";
            // line 11
            if (twig_get_attribute($this->env, $this->source, $context["postsPopular"], "featuredImage", [], "any", false, false, false, 11)) {
                // line 12
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["postsPopular"], "imageFile"), "html", null, true);
                echo "\" 
                    alt=\"Image Article\">
                        
                    ";
            } else {
                // line 16
                echo "                    <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "html", null, true);
                echo "\" 
                     alt=\"Article not Image available\">
                    ";
            }
            // line 19
            echo "                </a>
                <h5><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["postsPopular"], "id", [], "any", false, false, false, 20), "slug" => twig_get_attribute($this->env, $this->source, $context["postsPopular"], "slug", [], "any", false, false, false, 20)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postsPopular"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</a></h5>
                <section class=\"popular__meta\">
                        <span class=\"popular__author\"><span>By</span> <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article.show", ["id" => twig_get_attribute($this->env, $this->source, $context["postsPopular"], "id", [], "any", false, false, false, 22), "slug" => twig_get_attribute($this->env, $this->source, $context["postsPopular"], "slug", [], "any", false, false, false, 22)]), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postsPopular"], "usersBlog", [], "any", false, false, false, 22), "html", null, true);
            echo "</a></span>
                    <span class=\"popular__date\"><span>Poster le </span> <time datetime=\"\">";
            // line 23
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["postsPopular"], "updatedAt", [], "any", false, false, false, 23), "d-m-Y à H:i:s"), "html", null, true);
            echo "</time></span>
                </section>
            </article>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postsPopular'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        
        </div> <!-- end popular_posts -->
    </div> <!-- end popular -->
    


     

</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "Blog/_footerPopularPosts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  96 => 23,  90 => 22,  83 => 20,  80 => 19,  73 => 16,  65 => 12,  63 => 11,  59 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"s-extra\">
<div class=\"row top\">
    
    <div class=\"col-eight md-six tab-full popular\">
        <h3>Les Articles Populaires</h3>

        <div class=\"block-1-2 block-m-full popular__posts\">
            {% for postsPopular in popular_posts %}
                        <article class=\"col-block popular__post\">
                <a href=\"{{path('article.show', {id: postsPopular.id, slug:postsPopular.slug})}}\" class=\"popular__thumb\">
                    {% if postsPopular.featuredImage %}
                    <img src=\"{{vich_uploader_asset(postsPopular, 'imageFile')}}\" 
                    alt=\"Image Article\">
                        
                    {% else %}
                    <img src=\"{{asset('bower_components/images/imageNotAvailable.png') }}\" 
                     alt=\"Article not Image available\">
                    {% endif %}
                </a>
                <h5><a href=\"{{path('article.show', {id: postsPopular.id, slug:postsPopular.slug})}}\">{{postsPopular.title}}</a></h5>
                <section class=\"popular__meta\">
                        <span class=\"popular__author\"><span>By</span> <a href=\"{{path('article.show', {id: postsPopular.id, slug:postsPopular.slug})}}\"> {{postsPopular.usersBlog}}</a></span>
                    <span class=\"popular__date\"><span>Poster le </span> <time datetime=\"\">{{postsPopular.updatedAt|date(\"d-m-Y à H:i:s\")}}</time></span>
                </section>
            </article>
            {% endfor %}
        
        </div> <!-- end popular_posts -->
    </div> <!-- end popular -->
    


     

</div>", "Blog/_footerPopularPosts.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\_footerPopularPosts.html.twig");
    }
}
