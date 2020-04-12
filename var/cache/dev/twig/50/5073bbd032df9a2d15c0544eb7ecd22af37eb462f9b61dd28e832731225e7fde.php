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

/* Blog/homeBlog.html.twig */
class __TwigTemplate_6a6135fa27f87d1ab3916e20f09c596260cc5a907c6ed4fc8ed66540e54f9e4f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/homeBlog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/homeBlog.html.twig"));

        $this->parent = $this->loadTemplate("Blog/baseBlog.html.twig", "Blog/homeBlog.html.twig", 1);
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
        echo "<section class=\"s-pageheader s-pageheader--home\">
";
        // line 5
        $this->loadTemplate("Blog/_navigation.html.twig", "Blog/homeBlog.html.twig", 5)->display($context);
        // line 6
        echo "<div class=\"pageheader-content row\">
    <div class=\"col-full\">
        <div class=\"featured\">            
            <div class=\"featured__column featured__column--big\">
                ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 10, $this->source); })()), 0, [], "array", false, false, false, 10), "filename", [], "any", false, false, false, 10)) {
            // line 11
            echo "                <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 11, $this->source); })()), 0, [], "array", false, false, false, 11), "imageFile"), "html", null, true);
            echo "');\">
                    ";
        } else {
            // line 13
            echo "                    <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "html", null, true);
            echo "');\">
                ";
        }
        // line 14
        echo "                    
                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 16, $this->source); })()), 0, [], "array", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "</a></span>

                    </div> <!-- end entry__content -->
                    
                </div> <!-- end entry -->
            </div> <!-- end featured__big -->

            <div class=\"featured__column featured__column--small\">

                ";
        // line 25
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 25, $this->source); })()), 1, [], "array", false, false, false, 25), "filename", [], "any", false, false, false, 25)) {
            // line 26
            echo "                <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 26, $this->source); })()), 1, [], "array", false, false, false, 26), "imageFile"), "html", null, true);
            echo "');\">
                    ";
        } else {
            // line 28
            echo "                    <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "html", null, true);
            echo "');\">
                ";
        }
        // line 30
        echo "                
                    
                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 33, $this->source); })()), 1, [], "array", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
        echo "</a></span>
                    </div> <!-- end entry__content -->
                  
                </div> <!-- end entry -->
                ";
        // line 37
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 37, $this->source); })()), 2, [], "array", false, false, false, 37), "filename", [], "any", false, false, false, 37)) {
            // line 38
            echo "                <div class=\"entry\" style=\"background-image:url('i";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 38, $this->source); })()), 2, [], "array", false, false, false, 38), "imageFile"), "html", null, true);
            echo "');\">
                ";
        } else {
            // line 40
            echo "                <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "html", null, true);
            echo "');\">
               ";
        }
        // line 42
        echo "


                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 46, $this->source); })()), 2, [], "array", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
        echo "</a></span>
                    </div> <!-- end entry__content -->

                </div> <!-- end entry -->

            </div> <!-- end featured__small -->

        </div> <!-- end featured -->

    </div> <!-- end col-full -->
</div> <!-- end pageheader-content row -->

</section> <!-- end s-pageheader -->

</section>
";
        // line 61
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 61, $this->source); })())) {
            // line 62
            $this->loadTemplate("Blog/_allShowArticle.html.twig", "Blog/homeBlog.html.twig", 62)->display($context);
        } else {
            // line 64
            echo "<section class=\"s-content\">
<div class=\"notfound\">
    <h1 style=\"text-align: center;\">Désolé Il n'y a pas d'articles pour le moment</h1>
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/sadEmoji.png"), "html", null, true);
            echo "\" alt=\"\">
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/sadEmoji.png"), "html", null, true);
            echo "\" alt=\"\">
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/sadEmoji.png"), "html", null, true);
            echo "\" alt=\"\">
</div>
    <br>
    <br>
    <br>
</section>
";
        }
        // line 76
        $this->loadTemplate("Blog/_footerPopularPosts.html.twig", "Blog/homeBlog.html.twig", 76)->display($context);
        // line 77
        $this->loadTemplate("Blog/_footerKeyword.html.twig", "Blog/homeBlog.html.twig", 77)->display($context);
        // line 78
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Blog/homeBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 78,  223 => 77,  221 => 76,  211 => 69,  207 => 68,  203 => 67,  198 => 64,  195 => 62,  193 => 61,  175 => 46,  169 => 42,  163 => 40,  157 => 38,  155 => 37,  148 => 33,  143 => 30,  137 => 28,  131 => 26,  129 => 25,  117 => 16,  113 => 14,  107 => 13,  101 => 11,  99 => 10,  93 => 6,  91 => 5,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Blog/baseBlog.html.twig' %}
{% block className %}top{% endblock className %}
{% block body %}
<section class=\"s-pageheader s-pageheader--home\">
{% include \"Blog/_navigation.html.twig\" %}
<div class=\"pageheader-content row\">
    <div class=\"col-full\">
        <div class=\"featured\">            
            <div class=\"featured__column featured__column--big\">
                {% if lastestCategories[0].filename %}
                <div class=\"entry\" style=\"background-image:url('{{vich_uploader_asset(lastestCategories[0], 'imageFile')}}');\">
                    {% else %}
                    <div class=\"entry\" style=\"background-image:url('{{asset('bower_components/images/imageNotAvailable.png')}}');\">
                {% endif %}                    
                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">{{lastestCategories[0].name}}</a></span>

                    </div> <!-- end entry__content -->
                    
                </div> <!-- end entry -->
            </div> <!-- end featured__big -->

            <div class=\"featured__column featured__column--small\">

                {% if lastestCategories[1].filename %}
                <div class=\"entry\" style=\"background-image:url('{{vich_uploader_asset(lastestCategories[1], 'imageFile')}}');\">
                    {% else %}
                    <div class=\"entry\" style=\"background-image:url('{{asset('bower_components/images/imageNotAvailable.png')}}');\">
                {% endif %}
                
                    
                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">{{lastestCategories[1].name}}</a></span>
                    </div> <!-- end entry__content -->
                  
                </div> <!-- end entry -->
                {% if lastestCategories[2].filename %}
                <div class=\"entry\" style=\"background-image:url('i{{vich_uploader_asset(lastestCategories[2], 'imageFile')}}');\">
                {% else %}
                <div class=\"entry\" style=\"background-image:url('{{asset('bower_components/images/imageNotAvailable.png')}}');\">
               {% endif %}



                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">{{lastestCategories[2].name}}</a></span>
                    </div> <!-- end entry__content -->

                </div> <!-- end entry -->

            </div> <!-- end featured__small -->

        </div> <!-- end featured -->

    </div> <!-- end col-full -->
</div> <!-- end pageheader-content row -->

</section> <!-- end s-pageheader -->

</section>
{% if articles %}
{% include \"Blog/_allShowArticle.html.twig\" %}
{% else %}
<section class=\"s-content\">
<div class=\"notfound\">
    <h1 style=\"text-align: center;\">Désolé Il n'y a pas d'articles pour le moment</h1>
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"{{asset('bower_components/images/sadEmoji.png')}}\" alt=\"\">
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"{{asset('bower_components/images/sadEmoji.png')}}\" alt=\"\">
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"{{asset('bower_components/images/sadEmoji.png')}}\" alt=\"\">
</div>
    <br>
    <br>
    <br>
</section>
{% endif %}
{% include \"Blog/_footerPopularPosts.html.twig\" %}
{% include \"Blog/_footerKeyword.html.twig\" %}



{% endblock body %} ", "Blog/homeBlog.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\homeBlog.html.twig");
    }
}
