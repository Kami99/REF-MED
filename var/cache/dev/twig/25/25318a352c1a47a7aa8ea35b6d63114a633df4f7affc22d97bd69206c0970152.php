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

/* edit_account/main_edit.html.twig */
class __TwigTemplate_7d8f144700741adb324a6926c1bb31cd675b3357cd5a2cae10d1c75690d60c3a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'addStyleSheets' => [$this, 'block_addStyleSheets'],
            'body' => [$this, 'block_body'],
            'linksSocial' => [$this, 'block_linksSocial'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "appMain.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_account/main_edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edit_account/main_edit.html.twig"));

        $this->parent = $this->loadTemplate("appMain.html.twig", "edit_account/main_edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edition du compte  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_addStyleSheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addStyleSheets"));

        // line 4
        echo "\t<link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet/leaflet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/css/bootstrap4/select-default.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        echo " ";
        $this->loadTemplate("includeApp/_navigation.html.twig", "edit_account/main_edit.html.twig", 7)->display($context);
        // line 8
        echo "
<div class=\"container mt-30\">
    <div class=\"row\">
        <div class=\"col-lg-12 order-lg-2\">
            <ul class=\"nav nav-tabs\">
                <li class=\"nav-item\">
                    <a
                        href=\"\"
                        data-target=\"#profile\"
                        data-toggle=\"tab\"
                        class=\"nav-link active\">Profile</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#messages\" data-toggle=\"tab\"
                        class=\"nav-link\">Messages</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#edit\" data-toggle=\"tab\"
                        class=\"nav-link\">Edit</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#changePassword\" data-toggle=\"tab\"
                        class=\"nav-link\">Changez de mots de passe</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#socialNetworks\" data-toggle=\"tab\"
                        class=\"nav-link\">Gerer vos réseaux sociaux</a>
                </li>
            </ul>
            <div class=\"tab-content py-4\">
                <div class=\"tab-pane active\" id=\"profile\">
                    <h5 class=\"mb-3\">Vos informations</h5>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-10 p-4\">
                            <h6>A propos de vous</h6>
                            <p>Vous etes ";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 43, $this->source); })()), "profession", [], "any", false, false, false, 43), "html", null, true);
        echo "</p>
                            <h6>Vos réseaux</h6>
                            <p>
                                Les réseaux sociaux présents sont :
                            </p>
                            <h6>Langue</h6>
                            <p>
                                Les langues parlées :
                            </p>
                            <h6>Accès</h6>
                            <p>
                                Accès:
                            </p>
                        </div>
                        <div class=\"col-md-6 mb-10 p-4\">
                            <h6>Votre expertise est</h6>
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 59, $this->source); })()), "expertise", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["expertise"]) {
            // line 60
            echo "                            <span class=\"badge badge-pill badge-primary\">";
            echo twig_escape_filter($this->env,             // line 61
$context["expertise"], "html", null, true);
            // line 62
            echo "</span>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['expertise'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "                            <hr />
                            ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, ($context["doctor"] ?? null), "doctorSocialNetworks", [], "any", true, true, false, 65)) {
            echo " ";
            // line 66
            $this->displayBlock('linksSocial', $context, $blocks);
            // line 93
            echo " ";
        } else {
            // line 94
            echo "                            <span>Vous n'avez pas mis de réseaux sociaux</span>
                            ";
        }
        // line 96
        echo "                            <hr />
                            ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, ($context["doctor"] ?? null), "languague", [], "any", true, true, false, 97)) {
            // line 98
            echo "                            <span>Vous n'avez pas sélectionnés de langue</span>
                            ";
        } else {
            // line 99
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 99, $this->source); })()), "language", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 100
                echo "                            <span> ";
                echo twig_escape_filter($this->env, $context["language"], "html", null, true);
                echo "</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo " ";
        }
        // line 102
        echo "                            <hr />
                            ";
        // line 103
        if (twig_get_attribute($this->env, $this->source, ($context["doctor"] ?? null), "praticalInfos", [], "any", true, true, false, 103)) {
            echo " ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,             // line 105
(isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 105, $this->source); })()), "praticalInfos", [], "any", false, false, false, 105));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["infos"]) {
                // line 106
                echo "                            <span> ";
                echo twig_escape_filter($this->env, $context["infos"], "html", null, true);
                echo "</span>
                            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 108
                echo "                            <span>Vous n'avez pas sélectionnés d'accès</span>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['infos'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 109
            echo " ";
        }
        // line 110
        echo "                        </div>
                        <div class=\"col-md-12 mt-2\">
                            <h5 class=\"mt-2\">Règlement</h5>

                            <ul class=\"list-group\">
                                <li class=\"list-group-item text-muted\">
                                    Moyen de paiement et remboursement acceptés
                                    <i class=\"fa fa-money\" aria-hidden=\"true\"></i>
                                    ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,         // line 119
(isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 119, $this->source); })()), "meansPayment", [], "any", false, false, false, 119));
        foreach ($context['_seq'] as $context["_key"] => $context["means"]) {
            // line 120
            echo "                                </li>
                                <li class=\"list-group-item text-right\">
                                    <span class=\"pull-left\"><strong>Vous
                                            acceptez</strong></span>
                                    ";
            // line 124
            echo twig_escape_filter($this->env, $context["means"], "html", null, true);
            echo "
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['means'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 126, $this->source); })()), "refund", [], "any", false, false, false, 126));
        foreach ($context['_seq'] as $context["_key"] => $context["refund"]) {
            // line 127
            echo "                                <li class=\"list-group-item text-right\">
                                    <span class=\"pull-left\"><strong>Vous
                                            acceptez</strong></span>
                                    ";
            // line 130
            echo twig_escape_filter($this->env, $context["refund"], "html", null, true);
            echo "
                                </li>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refund'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "                            </ul>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class=\"tab-pane\" id=\"messages\">
                    <div class=\"alert alert-info alert-dismissable\">
                        <a class=\"panel-close close\" data-dismiss=\"alert\">×</a>
                        Notifications
                    </div>
                    <table class=\"table table-hover table-striped\">
                        <tbody>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">3
                                        hrs ago</span>
                                    Here is your a link to the latest summary
                                    report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">Yesterday</span>
                                    There has been a request on your account
                                    since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">9/10</span>
                                    Porttitor vitae ultrices quis, dapibus id
                                    dolor. Morbi
                                    venenatis lacinia rhoncus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">9/4</span>
                                    Vestibulum tincidunt ullamcorper eros eget
                                    luctus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">9/4</span>
                                    Maxamillion ais the fix for tibulum
                                    tincidunt ullamcorper
                                    eros.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"tab-pane\" id=\"edit\">
                    <div class=\"container\">
                        ";
        // line 188
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), 'form_start');
        echo "
                        <div class=\"row\">
                                                 
                            <div class=\"col-lg-8 col-md-12 \">
                                <div class=\"row\">
                                 <div class=\"col-lg-3 col-md-12\">
                                        <span class=\"form-label\">Lieu de résidence</span>
                                        ";
        // line 195
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "location", [], "any", false, false, false, 195), "nameLocation", [], "any", false, false, false, 195), 'widget', ["attr" => ["class" => "form-control locationLon form-edit"]]);
        echo "
                                    </div>
                                    <div class=\"col-lg-3 col-md-12 \">
                                        <span class=\"form-label\">Latitude </span>
                                        ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "location", [], "any", false, false, false, 199), "latitude", [], "any", false, false, false, 199), 'widget', ["attr" => ["class" => "form-control locationLon form-edit"]]);
        echo "
                                    </div>
                                    <div class=\"col-lg-3 col-md-12 \">
                                        <span class=\"form-label\">Longitude</span>
                                        ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 203, $this->source); })()), "location", [], "any", false, false, false, 203), "longitude", [], "any", false, false, false, 203), 'widget', ["attr" => ["class" => "form-control locationLon form-edit"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12 \">
                                        <span class=\"form-label\">Votre Nom </span>
                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "firstName", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "form-control form-edit"]]);
        echo "
                                    </div>
                                    <div class=\"col-lg-6 col-md-12 \">
                                        <span class=\"form-label\">Votre Prénom </span>
                                    ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "LastName", [], "any", false, false, false, 213), 'widget', ["attr" => ["class" => "form-control form-edit"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                        <span class=\"form-label\">Votre numéro de Email </span>
                                    ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 219, $this->source); })()), "email", [], "any", false, false, false, 219), 'widget', ["attr" => ["class" => "form-control form-edit"]]);
        echo "
                                    </div>
                                    <div class=\"col-lg-6 form-group\">
                                        <span class=\"form-label\">Votre numéro de téléphone </span>
                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 223, $this->source); })()), "numberPhone", [], "any", false, false, false, 223), 'widget', ["attr" => ["class" => "form-control form-edit"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12  form-group\">
                                    <span class=\"form-label \">Votre profession </span>

                                        ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "profession", [], "any", false, false, false, 230), 'widget', ["attr" => ["class" => "js-form-selected"]]);
        echo "
                                    </div>
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                    <span class=\"form-label \">Votre expertise </span>

                                        ";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "expertise", [], "any", false, false, false, 235), 'widget', ["attr" => ["class" => "form-selected"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"move-container0 mt-2\"></div>

                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                    <span class=\"form-label \">Les langues parlées</span>
                                        ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "language", [], "any", false, false, false, 243), 'widget', ["attr" => ["class" => "form-selected"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"move-container1 mt-2\"></div>
                                    </div>

                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                    <span class=\"form-label\">Les Infos pratiques</span>
                                        ";
        // line 249
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 249, $this->source); })()), "praticalInfos", [], "any", false, false, false, 249), 'widget', ["attr" => ["class" => "form-selected"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"move-container2 mt-2\"></div>

                                    </div>
                                </div>
                                <div class=\"row\">
   
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                        <span class=\"form-label\">Les moyens de paiment acceptés</span>

                                        ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 259, $this->source); })()), "meansPayment", [], "any", false, false, false, 259), 'widget', ["attr" => ["class" => "form-selected"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"move-container3 mt-2\"></div>

                                    </div>

                                    <div class=\"col-lg-6 col-md--12 form-group  \">
                                        <span class=\"form-label\">Les Remboursements acceptés</span>
                                        ";
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "refund", [], "any", false, false, false, 266), 'widget', ["attr" => ["class" => "form-selected"]]);
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"move-container4 mt-2\"></div>

                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <span class=\"form-label\">Présentez vous pour que l'on puisse vous connaitre</span>
                                        ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "presentation", [], "any", false, false, false, 274), 'widget', ["attr" => ["class" => "form-control form-edit"]]);
        echo "
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6  col-md-12 form-group\">
                                        <span class=\"form-label\">Le Montant de l'honoraire mininimum </span>
                                        ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "tarifMin", [], "any", false, false, false, 280), 'widget', ["attr" => ["class" => "form-control form-edit"]]);
        echo "
                                    </div>
                                    <div class=\"col-lg-6  col-md-12 form-group\">
                                        <span class=\"form-label\">Le Montant de l'honoraire maximum </span>
                                        ";
        // line 284
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "tarifMax", [], "any", false, false, false, 284), 'widget', ["attr" => ["class" => "form-control form-edit"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-12\">
                                <label class=\"custom-file\">
                                    ";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "imageFile", [], "any", false, false, false, 290), "file", [], "any", false, false, false, 290), 'widget', ["attr" => ["class" => "custom-file-input"]]);
        echo "
                                    ";
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "imageFile", [], "any", false, false, false, 291), 'widget');
        echo "
                                    <span class=\"custom-file-control\">Uploadez une photo différente</span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-btn col-lg-8 col-md-12\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Editer</button>
\t\t\t\t\t\t</div>
\t\t\t            ";
        // line 299
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 299, $this->source); })()), 'form_end');
        echo "
                        
                    </div>
                    </div>  
                    <div class=\"tab-pane\" id=\"changePassword\">
                        ";
        // line 304
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdatePassword"]) || array_key_exists("formUpdatePassword", $context) ? $context["formUpdatePassword"] : (function () { throw new RuntimeError('Variable "formUpdatePassword" does not exist.', 304, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formUpdatePassword"]) || array_key_exists("formUpdatePassword", $context) ? $context["formUpdatePassword"] : (function () { throw new RuntimeError('Variable "formUpdatePassword" does not exist.', 305, $this->source); })()), 'widget');
        echo "
\t\t\t\t\t\t<div class=\"form-btn\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"submit-btn\" value=\"Modifier votre mot de passe\"/>
\t\t\t\t\t\t</div>
                        ";
        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formUpdatePassword"]) || array_key_exists("formUpdatePassword", $context) ? $context["formUpdatePassword"] : (function () { throw new RuntimeError('Variable "formUpdatePassword" does not exist.', 309, $this->source); })()), 'form_end');
        echo "
                    </div>  
                    <div class=\"tab-pane\" id=\"socialNetworks\">
                        ";
        // line 312
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRS"]) || array_key_exists("formRS", $context) ? $context["formRS"] : (function () { throw new RuntimeError('Variable "formRS" does not exist.', 312, $this->source); })()), 'form_start');
        echo "
                        ";
        // line 313
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formRS"]) || array_key_exists("formRS", $context) ? $context["formRS"] : (function () { throw new RuntimeError('Variable "formRS" does not exist.', 313, $this->source); })()), 'widget');
        echo "
                        <div class=\"form-btn col-lg-8 col-md-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Valider</button>
\t\t\t\t\t\t</div>
                        ";
        // line 317
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formRS"]) || array_key_exists("formRS", $context) ? $context["formRS"] : (function () { throw new RuntimeError('Variable "formRS" does not exist.', 317, $this->source); })()), 'form_end');
        echo "

                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_linksSocial($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "linksSocial"));

        // line 67
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source,         // line 68
(isset($context["doctor"]) || array_key_exists("doctor", $context) ? $context["doctor"] : (function () { throw new RuntimeError('Variable "doctor" does not exist.', 68, $this->source); })()), "doctorSocialNetworks", [], "any", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["socialLinks"]) {
            // line 69
            echo " ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["socialLinks"], "socialNetworks", [], "any", false, false, false, 69), "socialName", [], "any", false, false, false, 69)) == "facebook")) {
                // line 72
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\" class=\"link-rs\"><i
                                    class=\"fa fa-facebook-square\"
                                    aria-hidden=\"true\"></i></a>
                            ";
            }
            // line 75
            echo " ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 76
$context["socialLinks"], "socialNetworks", [], "any", false, false, false, 76), "socialName", [], "any", false, false, false, 76)) == "twitter")) {
                // line 78
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\" class=\"link-rs\">
                                <i class=\"fa fa-twitter-square\"
                                    aria-hidden=\"true\"></i></a>
                            ";
            }
            // line 81
            echo " ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 82
$context["socialLinks"], "socialNetworks", [], "any", false, false, false, 82), "socialName", [], "any", false, false, false, 82)) == "linkedin")) {
                // line 84
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\" class=\"link-rs\"><i
                                    class=\"fa fa-linkedin-square\"
                                    aria-hidden=\"true\"></i></a>
                            ";
            }
            // line 87
            echo " ";
            if ((twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 88
$context["socialLinks"], "socialNetworks", [], "any", false, false, false, 88), "socialName", [], "any", false, false, false, 88)) == "google+")) {
                // line 90
                echo "                            <a href=\"";
                echo twig_escape_filter($this->env, $context["socialLinks"], "html", null, true);
                echo "\" class=\"link-rs\">
                                <i class=\"fa fa-google-square\"
                                    aria-hidden=\"true\"></i></a>
                            ";
            }
            // line 93
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['socialLinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 327
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 328
        echo "\t<script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/leaflet.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 329
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/popper.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 332
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/tail/js/select-full.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 333
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bower_components/js/map.js"), "html", null, true);
        echo "\"></script>
\t<script>
        let attribute = document.querySelector(\".js-form-selected\");
let attributeForm = document.querySelectorAll(\".form-selected\");

for (let i = 0; i < attributeForm.length; i++) {
    tail.select(\"#\"+attributeForm[i].getAttribute('id'), {
    search: true,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: false,
    multiContainer: \".move-container\"+i,
  });
    
}

    

if (attribute != null) {
  tail.select(\".js-form-selected\", {
    search: true,
    deselect: true,
  });
}

    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "edit_account/main_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  699 => 333,  695 => 332,  691 => 331,  687 => 330,  683 => 329,  678 => 328,  668 => 327,  653 => 93,  645 => 90,  643 => 88,  641 => 87,  633 => 84,  631 => 82,  629 => 81,  621 => 78,  619 => 76,  617 => 75,  609 => 72,  606 => 69,  603 => 68,  600 => 67,  590 => 66,  570 => 317,  563 => 313,  559 => 312,  553 => 309,  546 => 305,  542 => 304,  534 => 299,  523 => 291,  519 => 290,  510 => 284,  503 => 280,  494 => 274,  483 => 266,  473 => 259,  460 => 249,  451 => 243,  440 => 235,  432 => 230,  422 => 223,  415 => 219,  406 => 213,  399 => 209,  390 => 203,  383 => 199,  376 => 195,  366 => 188,  309 => 133,  300 => 130,  295 => 127,  290 => 126,  281 => 124,  275 => 120,  272 => 119,  270 => 118,  260 => 110,  257 => 109,  250 => 108,  242 => 106,  238 => 105,  234 => 103,  231 => 102,  228 => 101,  219 => 100,  214 => 99,  210 => 98,  208 => 97,  205 => 96,  201 => 94,  198 => 93,  196 => 66,  193 => 65,  190 => 64,  183 => 62,  181 => 61,  179 => 60,  175 => 59,  156 => 43,  119 => 8,  107 => 7,  95 => 5,  90 => 4,  80 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'appMain.html.twig' %} {% block title %}Edition du compte  {% endblock
%}
{%block addStyleSheets%}
\t<link href=\"{{asset('bower_components/js/leaflet/leaflet.css')}}\" rel=\"stylesheet\">
\t<link rel=\"stylesheet\" href=\"{{asset('bower_components/tail/css/bootstrap4/select-default.css')}}\">
{%endblock %}
{% block body %} {% include \"includeApp/_navigation.html.twig\" %}

<div class=\"container mt-30\">
    <div class=\"row\">
        <div class=\"col-lg-12 order-lg-2\">
            <ul class=\"nav nav-tabs\">
                <li class=\"nav-item\">
                    <a
                        href=\"\"
                        data-target=\"#profile\"
                        data-toggle=\"tab\"
                        class=\"nav-link active\">Profile</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#messages\" data-toggle=\"tab\"
                        class=\"nav-link\">Messages</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#edit\" data-toggle=\"tab\"
                        class=\"nav-link\">Edit</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#changePassword\" data-toggle=\"tab\"
                        class=\"nav-link\">Changez de mots de passe</a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"\" data-target=\"#socialNetworks\" data-toggle=\"tab\"
                        class=\"nav-link\">Gerer vos réseaux sociaux</a>
                </li>
            </ul>
            <div class=\"tab-content py-4\">
                <div class=\"tab-pane active\" id=\"profile\">
                    <h5 class=\"mb-3\">Vos informations</h5>
                    <div class=\"row\">
                        <div class=\"col-md-6 mb-10 p-4\">
                            <h6>A propos de vous</h6>
                            <p>Vous etes {{ doctor.profession }}</p>
                            <h6>Vos réseaux</h6>
                            <p>
                                Les réseaux sociaux présents sont :
                            </p>
                            <h6>Langue</h6>
                            <p>
                                Les langues parlées :
                            </p>
                            <h6>Accès</h6>
                            <p>
                                Accès:
                            </p>
                        </div>
                        <div class=\"col-md-6 mb-10 p-4\">
                            <h6>Votre expertise est</h6>
                            {% for expertise in doctor.expertise %}
                            <span class=\"badge badge-pill badge-primary\">{{
                                expertise
                                }}</span>
                            {% endfor %}
                            <hr />
                            {% if doctor.doctorSocialNetworks is defined %} {%
                            block
                            linksSocial %} {% for socialLinks in
                            doctor.doctorSocialNetworks
                            %} {% if socialLinks.socialNetworks.socialName|lower
                            == \"facebook\"
                            %}
                            <a href=\"{{ socialLinks }}\" class=\"link-rs\"><i
                                    class=\"fa fa-facebook-square\"
                                    aria-hidden=\"true\"></i></a>
                            {% endif %} {% if
                            socialLinks.socialNetworks.socialName|lower ==
                            \"twitter\" %}
                            <a href=\"{{ socialLinks }}\" class=\"link-rs\">
                                <i class=\"fa fa-twitter-square\"
                                    aria-hidden=\"true\"></i></a>
                            {% endif %} {% if
                            socialLinks.socialNetworks.socialName|lower ==
                            \"linkedin\" %}
                            <a href=\"{{ socialLinks }}\" class=\"link-rs\"><i
                                    class=\"fa fa-linkedin-square\"
                                    aria-hidden=\"true\"></i></a>
                            {% endif %} {% if
                            socialLinks.socialNetworks.socialName|lower ==
                            \"google+\" %}
                            <a href=\"{{ socialLinks }}\" class=\"link-rs\">
                                <i class=\"fa fa-google-square\"
                                    aria-hidden=\"true\"></i></a>
                            {% endif %} {% endfor %} {% endblock %} {% else %}
                            <span>Vous n'avez pas mis de réseaux sociaux</span>
                            {% endif %}
                            <hr />
                            {% if doctor.languague is defined %}
                            <span>Vous n'avez pas sélectionnés de langue</span>
                            {% else %} {% for language in doctor.language %}
                            <span> {{ language }}</span>
                            {% endfor %} {% endif %}
                            <hr />
                            {% if doctor.praticalInfos is defined %} {% for
                            infos in
                            doctor.praticalInfos %}
                            <span> {{ infos }}</span>
                            {% else %}
                            <span>Vous n'avez pas sélectionnés d'accès</span>
                            {% endfor %} {% endif %}
                        </div>
                        <div class=\"col-md-12 mt-2\">
                            <h5 class=\"mt-2\">Règlement</h5>

                            <ul class=\"list-group\">
                                <li class=\"list-group-item text-muted\">
                                    Moyen de paiement et remboursement acceptés
                                    <i class=\"fa fa-money\" aria-hidden=\"true\"></i>
                                    {% for means in
                                    doctor.meansPayment %}
                                </li>
                                <li class=\"list-group-item text-right\">
                                    <span class=\"pull-left\"><strong>Vous
                                            acceptez</strong></span>
                                    {{ means }}
                                </li>
                                {% endfor %} {% for refund in doctor.refund %}
                                <li class=\"list-group-item text-right\">
                                    <span class=\"pull-left\"><strong>Vous
                                            acceptez</strong></span>
                                    {{ refund }}
                                </li>
                                {% endfor %}
                            </ul>
                        </div>
                    </div>
                    <!--/row-->
                </div>
                <div class=\"tab-pane\" id=\"messages\">
                    <div class=\"alert alert-info alert-dismissable\">
                        <a class=\"panel-close close\" data-dismiss=\"alert\">×</a>
                        Notifications
                    </div>
                    <table class=\"table table-hover table-striped\">
                        <tbody>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">3
                                        hrs ago</span>
                                    Here is your a link to the latest summary
                                    report from the..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">Yesterday</span>
                                    There has been a request on your account
                                    since that was..
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">9/10</span>
                                    Porttitor vitae ultrices quis, dapibus id
                                    dolor. Morbi
                                    venenatis lacinia rhoncus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">9/4</span>
                                    Vestibulum tincidunt ullamcorper eros eget
                                    luctus.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class=\"float-right font-weight-bold\">9/4</span>
                                    Maxamillion ais the fix for tibulum
                                    tincidunt ullamcorper
                                    eros.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class=\"tab-pane\" id=\"edit\">
                    <div class=\"container\">
                        {{ form_start(form) }}
                        <div class=\"row\">
                                                 
                            <div class=\"col-lg-8 col-md-12 \">
                                <div class=\"row\">
                                 <div class=\"col-lg-3 col-md-12\">
                                        <span class=\"form-label\">Lieu de résidence</span>
                                        {{ form_widget(form.location.nameLocation, { 'attr': {'class': 'form-control locationLon form-edit'}}) }}
                                    </div>
                                    <div class=\"col-lg-3 col-md-12 \">
                                        <span class=\"form-label\">Latitude </span>
                                        {{ form_widget(form.location.latitude, { 'attr': {'class': 'form-control locationLon form-edit'}}) }}
                                    </div>
                                    <div class=\"col-lg-3 col-md-12 \">
                                        <span class=\"form-label\">Longitude</span>
                                        {{ form_widget(form.location.longitude, { 'attr': {'class': 'form-control locationLon form-edit'}}) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12 \">
                                        <span class=\"form-label\">Votre Nom </span>
                                    {{ form_widget(form.firstName, { 'attr': {'class': 'form-control form-edit'}}) }}
                                    </div>
                                    <div class=\"col-lg-6 col-md-12 \">
                                        <span class=\"form-label\">Votre Prénom </span>
                                    {{ form_widget(form.LastName, { 'attr': {'class': 'form-control form-edit'}}) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                        <span class=\"form-label\">Votre numéro de Email </span>
                                    {{ form_widget(form.email, { 'attr': {'class': 'form-control form-edit'}}) }}
                                    </div>
                                    <div class=\"col-lg-6 form-group\">
                                        <span class=\"form-label\">Votre numéro de téléphone </span>
                                    {{ form_widget(form.numberPhone, { 'attr': {'class': 'form-control form-edit'}}) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12  form-group\">
                                    <span class=\"form-label \">Votre profession </span>

                                        {{ form_widget(form.profession,{ 'attr': {'class': 'js-form-selected'}}) }}
                                    </div>
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                    <span class=\"form-label \">Votre expertise </span>

                                        {{ form_widget(form.expertise,{ 'attr': {'class': 'form-selected'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"move-container0 mt-2\"></div>

                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                    <span class=\"form-label \">Les langues parlées</span>
                                        {{ form_widget(form.language,{ 'attr': {'class': 'form-selected'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"move-container1 mt-2\"></div>
                                    </div>

                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                    <span class=\"form-label\">Les Infos pratiques</span>
                                        {{ form_widget(form.praticalInfos,{ 'attr': {'class': 'form-selected'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"move-container2 mt-2\"></div>

                                    </div>
                                </div>
                                <div class=\"row\">
   
                                    <div class=\"col-lg-6 col-md-12 form-group\">
                                        <span class=\"form-label\">Les moyens de paiment acceptés</span>

                                        {{ form_widget(form.meansPayment,{ 'attr': {'class': 'form-selected'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"move-container3 mt-2\"></div>

                                    </div>

                                    <div class=\"col-lg-6 col-md--12 form-group  \">
                                        <span class=\"form-label\">Les Remboursements acceptés</span>
                                        {{ form_widget(form.refund,{ 'attr': {'class': 'form-selected'}}) }}
\t\t\t\t\t\t\t\t\t<div class=\"move-container4 mt-2\"></div>

                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-12\">
                                        <span class=\"form-label\">Présentez vous pour que l'on puisse vous connaitre</span>
                                        {{ form_widget(form.presentation, { 'attr': {'class': 'form-control form-edit'}}) }}
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-lg-6  col-md-12 form-group\">
                                        <span class=\"form-label\">Le Montant de l'honoraire mininimum </span>
                                        {{ form_widget(form.tarifMin, { 'attr': {'class': 'form-control form-edit'}}) }}
                                    </div>
                                    <div class=\"col-lg-6  col-md-12 form-group\">
                                        <span class=\"form-label\">Le Montant de l'honoraire maximum </span>
                                        {{ form_widget(form.tarifMax, { 'attr': {'class': 'form-control form-edit'}}) }}
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 col-md-12\">
                                <label class=\"custom-file\">
                                    {{ form_widget(form.imageFile.file, { 'attr': {'class': 'custom-file-input'}}) }}
                                    {{ form_widget(form.imageFile) }}
                                    <span class=\"custom-file-control\">Uploadez une photo différente</span>
                                </label>
                            </div>
                        </div>
                        <div class=\"form-btn col-lg-8 col-md-12\">
                        <button type=\"submit\" class=\"btn btn-primary btn-lg\">Editer</button>
\t\t\t\t\t\t</div>
\t\t\t            {{ form_end(form) }}
                        
                    </div>
                    </div>  
                    <div class=\"tab-pane\" id=\"changePassword\">
                        {{form_start(formUpdatePassword)}}
                        {{form_widget(formUpdatePassword)}}
\t\t\t\t\t\t<div class=\"form-btn\">
\t\t\t\t\t\t\t<input type=\"submit\" name=\"submit\" id=\"submit\" class=\"submit-btn\" value=\"Modifier votre mot de passe\"/>
\t\t\t\t\t\t</div>
                        {{form_end(formUpdatePassword)}}
                    </div>  
                    <div class=\"tab-pane\" id=\"socialNetworks\">
                        {{form_start(formRS)}}
                        {{form_widget(formRS)}}
                        <div class=\"form-btn col-lg-8 col-md-12\">
                            <button type=\"submit\" class=\"btn btn-primary btn-lg\">Valider</button>
\t\t\t\t\t\t</div>
                        {{form_end(formRS)}}

                    </div>  
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
{% block javascripts %}
\t<script src=\"{{asset('bower_components/js/leaflet.js')}}\"></script>
\t<script src=\"{{asset('bower_components/js/jquery-3.2.1.min.js')}}\"></script>
\t<script src=\"{{asset('bower_components/js/popper.js')}}\"></script>
\t<script src=\"{{asset('bower_components/js/bootstrap.min.js')}}\"></script>
\t<script src=\"{{asset('bower_components/tail/js/select-full.min.js')}}\"></script>
\t<script src=\"{{asset('bower_components/js/map.js')}}\"></script>
\t<script>
        let attribute = document.querySelector(\".js-form-selected\");
let attributeForm = document.querySelectorAll(\".form-selected\");

for (let i = 0; i < attributeForm.length; i++) {
    tail.select(\"#\"+attributeForm[i].getAttribute('id'), {
    search: true,
    hideSelected: true,
    hideDisabled: true,
    multiShowCount: false,
    multiContainer: \".move-container\"+i,
  });
    
}

    

if (attribute != null) {
  tail.select(\".js-form-selected\", {
    search: true,
    deselect: true,
  });
}

    </script>

{% endblock %}

", "edit_account/main_edit.html.twig", "C:\\Users\\BETOE CHARLENE\\Desktop\\Projet\\REF-MED\\templates\\edit_account\\main_edit.html.twig");
    }
}
