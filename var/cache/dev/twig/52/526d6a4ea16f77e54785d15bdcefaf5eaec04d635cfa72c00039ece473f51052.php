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

/* blog/homeBlog.html.twig */
class __TwigTemplate_69b86b3c2f932ac14f41b3f63eb86f470ceecfa639e2da07d331c027bfd1e211 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/homeBlog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/homeBlog.html.twig"));

        $this->parent = $this->loadTemplate("Blog/baseBlog.html.twig", "blog/homeBlog.html.twig", 1);
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
        // line 6
        $this->loadTemplate("Blog/_navigation.html.twig", "blog/homeBlog.html.twig", 6)->display($context);
        // line 7
        echo "<div class=\"pageheader-content row\">
    <div class=\"col-full\">
        <div class=\"featured\">            
            <div class=\"featured__column featured__column--big\">
                ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 11, $this->source); })()), 0, [], "array", false, false, false, 11), "filename", [], "any", false, false, false, 11)) {
            // line 12
            echo "                <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 12, $this->source); })()), 0, [], "array", false, false, false, 12), "imageFile"), "html", null, true);
            echo "');\">
                    ";
        } else {
            // line 14
            echo "                    <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "html", null, true);
            echo "');\">
                ";
        }
        // line 15
        echo "                    
                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 17, $this->source); })()), 0, [], "array", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></span>

                    </div> <!-- end entry__content -->
                    
                </div> <!-- end entry -->
            </div> <!-- end featured__big -->

            <div class=\"featured__column featured__column--small\">

                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 26, $this->source); })()), 1, [], "array", false, false, false, 26), "filename", [], "any", false, false, false, 26)) {
            // line 27
            echo "                <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 27, $this->source); })()), 1, [], "array", false, false, false, 27), "imageFile"), "html", null, true);
            echo "');\">
                    ";
        } else {
            // line 29
            echo "                    <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "html", null, true);
            echo "');\">
                ";
        }
        // line 31
        echo "                
                    
                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 34, $this->source); })()), 1, [], "array", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        echo "</a></span>
                    </div> <!-- end entry__content -->
                  
                </div> <!-- end entry -->
                ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 38, $this->source); })()), 2, [], "array", false, false, false, 38), "filename", [], "any", false, false, false, 38)) {
            // line 39
            echo "                <div class=\"entry\" style=\"background-image:url('i";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset(twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 39, $this->source); })()), 2, [], "array", false, false, false, 39), "imageFile"), "html", null, true);
            echo "');\">
                ";
        } else {
            // line 41
            echo "                <div class=\"entry\" style=\"background-image:url('";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/imageNotAvailable.png"), "html", null, true);
            echo "');\">
               ";
        }
        // line 43
        echo "


                    <div class=\"entry__content\">
                        <span class=\"entry__category\"><a href=\"#0\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["lastestCategories"]) || array_key_exists("lastestCategories", $context) ? $context["lastestCategories"] : (function () { throw new RuntimeError('Variable "lastestCategories" does not exist.', 47, $this->source); })()), 2, [], "array", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
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
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "flashes", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 63
            echo "<div class=\"col-12\">
    <div class=\"alert alert-";
            // line 64
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " alert-dismissible fade show\">
        ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 66
                echo "        <p>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>                    
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            echo "    </div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        if ((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 71, $this->source); })())) {
            // line 72
            $this->loadTemplate("Blog/_allShowArticle.html.twig", "blog/homeBlog.html.twig", 72)->display($context);
        } else {
            // line 74
            echo "<section class=\"s-content\">
<div class=\"notfound\">
    <h1 style=\"text-align: center;\">Désolé Il n'y a pas d'articles pour le moment</h1>
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/sadEmoji.png"), "html", null, true);
            echo "\" alt=\"\">
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/sadEmoji.png"), "html", null, true);
            echo "\" alt=\"\">
    <img width=\"80px\" height=\"90px\" style=\"margin-top: 5px;\" src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/images/sadEmoji.png"), "html", null, true);
            echo "\" alt=\"\">
</div>
    <br>
    <br>
    <br>
</section>
";
        }
        // line 86
        $this->loadTemplate("Blog/_footerPopularPosts.html.twig", "blog/homeBlog.html.twig", 86)->display($context);
        // line 87
        $this->loadTemplate("Blog/_footerKeyword.html.twig", "blog/homeBlog.html.twig", 87)->display($context);
        // line 88
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/homeBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 88,  256 => 87,  254 => 86,  244 => 79,  240 => 78,  236 => 77,  231 => 74,  228 => 72,  226 => 71,  218 => 68,  209 => 66,  205 => 65,  201 => 64,  198 => 63,  194 => 62,  176 => 47,  170 => 43,  164 => 41,  158 => 39,  156 => 38,  149 => 34,  144 => 31,  138 => 29,  132 => 27,  130 => 26,  118 => 17,  114 => 15,  108 => 14,  102 => 12,  100 => 11,  94 => 7,  92 => 6,  88 => 4,  78 => 3,  59 => 2,  36 => 1,);
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
{% for label,messages in app.flashes %}
<div class=\"col-12\">
    <div class=\"alert alert-{{label}} alert-dismissible fade show\">
        {% for message in messages %}
        <p>{{message}}</p>                    
        {% endfor %}
    </div>
</div>
{% endfor %}
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



{% endblock body %} ", "blog/homeBlog.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\homeBlog.html.twig");
    }
}
