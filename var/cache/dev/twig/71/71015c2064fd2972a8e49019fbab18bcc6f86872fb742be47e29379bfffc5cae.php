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

/* blog/createPost.html.twig */
class __TwigTemplate_14467dd0b9b9ea0a10b0a3776508b4abe58845c1753a536cd1cb90eed45029c7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'addStyleSheets' => [$this, 'block_addStyleSheets'],
            'className' => [$this, 'block_className'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/createPost.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/createPost.html.twig"));

        $this->parent = $this->loadTemplate("Blog/baseBlog.html.twig", "blog/createPost.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_addStyleSheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        // line 3
        echo "\t<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/css/bootstrap4/select-default.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_className($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "className"));

        // line 6
        echo "    top
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
    <!-- pageheader
    ================================================== -->
    <section class=\"s-pageheader s-pageheader--home\" style=\"height: auto; min-height:auto;\">

        ";
        // line 15
        $this->loadTemplate("Blog/_navigation.html.twig", "blog/createPost.html.twig", 15)->display($context);
        // line 16
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
                   <div class=\"container\">
                        <div class=\"row\">
                             ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["class" => "form_create"]]);
        echo "

                            <div class=\"col-md-6 col-lg-12 m-auto\">
                                <div class=\"form-group\">
                              ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "title", [], "any", false, false, false, 42), 'row', ["attr" => ["class" => "form-create"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"col-md-6 col-lg-12 m-auto\">
                                <div class=\"form-group\">
                              ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "imageFile", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form_control"]]);
        echo "
                                </div>
                            </div>
                        </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-12 m-auto\">
                                    <div class=\"form-group\">
                                  ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "keywords", [], "any", false, false, false, 54), 'row', ["attr" => ["class" => "js-form-selected"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-12 m-auto\">
                                    <div class=\"form-group\">
                                  ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "categories", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "js-form-selected"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-12 m-auto\">
                                    <div class=\"form-group\">
                                  ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "contenu", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form_control"]]);
        echo "
                                    </div>
                                </div>
                            </div> 
                        <div class=\"row\">

                            <div class=\"col-md-6 col-lg-12 m-auto\">
                                <div class=\"form-group\">
                              ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "contenu", [], "any", false, false, false, 72), 'row');
        echo "
                                </div>
                            </div>
                        </div> 
                        

                        <div class=\"form-btn col-12\" style=\"margin-top: 15px;\">
                            <button class=\"submit-btn\">Publier</button>
                        </div>
                   ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
                        
                   </div>
                          
                   
                   
     
    
                </div>
                <div class=\"col-1-3 right-rules\">
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
                <h3>Mots clés </h3>

                <div class=\"tagcloud\">
                    ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["keywords"]) || array_key_exists("keywords", $context) ? $context["keywords"] : (function () { throw new RuntimeError('Variable "keywords" does not exist.', 152, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
            // line 153
            echo "                    <a href=\"#0\">";
            echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
            echo "</a>
                        
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 164
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/js/select-full.min.js"), "html", null, true);
        echo "\"></script>
    <script>
    let attribute = document.querySelector(\".js-form-selected\");

if (attribute != null) {
  tail.select(\".js-form-selected\", {
    search: true,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: true,
  });
}


</script>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/createPost.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 166,  331 => 165,  326 => 164,  316 => 163,  300 => 156,  290 => 153,  286 => 152,  212 => 81,  200 => 72,  189 => 64,  181 => 59,  173 => 54,  163 => 47,  155 => 42,  148 => 38,  124 => 16,  122 => 15,  115 => 10,  105 => 9,  94 => 6,  84 => 5,  71 => 3,  61 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Blog/baseBlog.html.twig' %}
{% block addStyleSheets %}
\t<link rel=\"stylesheet\" href=\"{{asset('bower_components/tail/css/bootstrap4/select-default.css')}}\">
{% endblock addStyleSheets %}
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
                   <div class=\"container\">
                        <div class=\"row\">
                             {{form_start(form, { 'attr': {'class': 'form_create'}})}}

                            <div class=\"col-md-6 col-lg-12 m-auto\">
                                <div class=\"form-group\">
                              {{form_row(form.title, { 'attr': {'class': 'form-create'}})}}
                                </div>
                            </div>
                            <div class=\"col-md-6 col-lg-12 m-auto\">
                                <div class=\"form-group\">
                              {{form_row(form.imageFile, { 'attr': {'class': 'form_control'}})}}
                                </div>
                            </div>
                        </div>
                            <div class=\"row\">
                                <div class=\"col-md-6 col-lg-12 m-auto\">
                                    <div class=\"form-group\">
                                  {{form_row(form.keywords, { 'attr': {'class': 'js-form-selected'}})}}
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-12 m-auto\">
                                    <div class=\"form-group\">
                                  {{form_row(form.categories, { 'attr': {'class': 'js-form-selected'}})}}
                                    </div>
                                </div>
                                <div class=\"col-md-6 col-lg-12 m-auto\">
                                    <div class=\"form-group\">
                                  {{form_row(form.contenu, { 'attr': {'class': 'form_control'}})}}
                                    </div>
                                </div>
                            </div> 
                        <div class=\"row\">

                            <div class=\"col-md-6 col-lg-12 m-auto\">
                                <div class=\"form-group\">
                              {{form_row(form.contenu)}}
                                </div>
                            </div>
                        </div> 
                        

                        <div class=\"form-btn col-12\" style=\"margin-top: 15px;\">
                            <button class=\"submit-btn\">Publier</button>
                        </div>
                   {{form_end(form)}}
                        
                   </div>
                          
                   
                   
     
    
                </div>
                <div class=\"col-1-3 right-rules\">
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
                <h3>Mots clés </h3>

                <div class=\"tagcloud\">
                    {% for keyword in keywords %}
                    <a href=\"#0\">{{keyword}}</a>
                        
                    {% endfor %}
                </div> <!-- end tagcloud -->
            </div> <!-- end tags -->
        </div> <!-- end tags-wrap -->

    </section> <!-- end s-extra -->
    
{% endblock body %}
{% block javascripts %}
\t<script src=\"{{asset('bower_components/js/jquery-3.2.1.min.js')}}\"></script>
\t<script src=\"{{asset('bower_components/js/popper.js')}}\"></script>
\t<script src=\"{{asset('bower_components/tail/js/select-full.min.js')}}\"></script>
    <script>
    let attribute = document.querySelector(\".js-form-selected\");

if (attribute != null) {
  tail.select(\".js-form-selected\", {
    search: true,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: true,
  });
}


</script>



{% endblock javascripts %}
", "blog/createPost.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\Blog\\createPost.html.twig");
    }
}
