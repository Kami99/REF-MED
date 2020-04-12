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

/* Blog/contactBlog.html.twig */
class __TwigTemplate_59dedea8734183d65f6ad50e74b238598c72adc802a9f962feafc11364a6a311 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/contactBlog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Blog/contactBlog.html.twig"));

        $this->parent = $this->loadTemplate("Blog/baseBlog.html.twig", "Blog/contactBlog.html.twig", 1);
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
        echo "<div class=\"s-pageheader\">

";
        // line 9
        $this->loadTemplate("Blog/_navigation.html.twig", "Blog/contactBlog.html.twig", 9)->display($context);
        // line 10
        echo "</div>
    <!-- s-content
    ================================================== -->
    <section class=\"s-content s-content--narrow\">

        <div class=\"row\">

            <div class=\"s-content__header col-full\">
                <h1 class=\"s-content__header-title\">
                   Un problème Contactez nous
                </h1>
            </div> <!-- end s-content__header -->
    


            <div class=\"col-full s-content__main\">


                <div class=\"row\">
                    <div class=\"col-six tab-full\">
                        <h3>Nous sommes situés à </h3>

                        <p>
                        Baoboab Rue 13, Villa 97
                        </p>

                    </div>

                    <div class=\"col-six tab-full\">
                        <h3>Nos Infos</h3>

                        <p>REF-MED@gmail.com<br>
                        REF-MED@gmail.com <br>
                        Telephone:+2221 77 386 36 72
                        </p>

                    </div>
                </div> <!-- end row -->

                <h3>Dites nous Bonjour</h3>

                <form name=\"cForm\" id=\"cForm\" method=\"post\" action=\"\">
                    <fieldset>

                        <div class=\"form-field\">
                            <input name=\"cName\" type=\"text\" id=\"cName\" class=\"full-width\" placeholder=\"Your Name\" value=\"\">
                        </div>

                        <div class=\"form-field\">
                            <input name=\"cEmail\" type=\"text\" id=\"cEmail\" class=\"full-width\" placeholder=\"Your Email\" value=\"\">
                        </div>

                        <div class=\"form-field\">
                            <input name=\"cWebsite\" type=\"text\" id=\"cWebsite\" class=\"full-width\" placeholder=\"Website\"  value=\"\">
                        </div>

                        <div class=\"message form-field\">
                        <textarea name=\"cMessage\" id=\"cMessage\" class=\"full-width\" placeholder=\"Your Message\" ></textarea>
                        </div>

                        <button type=\"submit\" class=\"submit btn btn--primary full-width\">Submit</button>

                    </fieldset>
                </form> <!-- end form -->


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->


       
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Blog/contactBlog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 10,  94 => 9,  90 => 7,  80 => 6,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Blog/baseBlog.html.twig' %}
{% block className %}
    top
{% endblock className %}

{% block body %}
<div class=\"s-pageheader\">

{% include \"Blog/_navigation.html.twig\" %}
</div>
    <!-- s-content
    ================================================== -->
    <section class=\"s-content s-content--narrow\">

        <div class=\"row\">

            <div class=\"s-content__header col-full\">
                <h1 class=\"s-content__header-title\">
                   Un problème Contactez nous
                </h1>
            </div> <!-- end s-content__header -->
    


            <div class=\"col-full s-content__main\">


                <div class=\"row\">
                    <div class=\"col-six tab-full\">
                        <h3>Nous sommes situés à </h3>

                        <p>
                        Baoboab Rue 13, Villa 97
                        </p>

                    </div>

                    <div class=\"col-six tab-full\">
                        <h3>Nos Infos</h3>

                        <p>REF-MED@gmail.com<br>
                        REF-MED@gmail.com <br>
                        Telephone:+2221 77 386 36 72
                        </p>

                    </div>
                </div> <!-- end row -->

                <h3>Dites nous Bonjour</h3>

                <form name=\"cForm\" id=\"cForm\" method=\"post\" action=\"\">
                    <fieldset>

                        <div class=\"form-field\">
                            <input name=\"cName\" type=\"text\" id=\"cName\" class=\"full-width\" placeholder=\"Your Name\" value=\"\">
                        </div>

                        <div class=\"form-field\">
                            <input name=\"cEmail\" type=\"text\" id=\"cEmail\" class=\"full-width\" placeholder=\"Your Email\" value=\"\">
                        </div>

                        <div class=\"form-field\">
                            <input name=\"cWebsite\" type=\"text\" id=\"cWebsite\" class=\"full-width\" placeholder=\"Website\"  value=\"\">
                        </div>

                        <div class=\"message form-field\">
                        <textarea name=\"cMessage\" id=\"cMessage\" class=\"full-width\" placeholder=\"Your Message\" ></textarea>
                        </div>

                        <button type=\"submit\" class=\"submit btn btn--primary full-width\">Submit</button>

                    </fieldset>
                </form> <!-- end form -->


            </div> <!-- end s-content__main -->

        </div> <!-- end row -->

    </section> <!-- s-content -->


       
{% endblock body %}", "Blog/contactBlog.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\contactBlog.html.twig");
    }
}
