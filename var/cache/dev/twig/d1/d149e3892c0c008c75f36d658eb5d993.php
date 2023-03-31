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

/* voiture/show.html.twig */
class __TwigTemplate_81657fd2e80896c45778a99ea156cec8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voiture/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <main id=\"main\" class=\"main\">



        <div class=\"pagetitle\">
            <h1>Les Articles</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Tables</li>
                    <li class=\"breadcrumb-item active\">General</li>
                </ol>

            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">

                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 28
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "

                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", [0 => "noticedelete"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 36
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
                        <div class=\"card-body\">

                            <h5 class=\"card-title\">List Articles</h5>


                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th>registration number</th>
                                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 58, $this->source); })()), "matricule", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 62, $this->source); })()), "marque", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>power</th>
                                    <td>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 66, $this->source); })()), "puissance", [], "any", false, false, false, 66), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>price per day</th>
                                    <td>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 70, $this->source); })()), "prixJours", [], "any", false, false, false, 70), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Picture</th>
                                    <td><img src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 75, $this->source); })()), "picture", [], "any", false, false, false, 75))), "html", null, true);
        echo "\" style=\"max-height: 80px\"></td>
                                </tr>
                                <tr>
                                    <th>Energy</th>
                                    <td>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 79, $this->source); })()), "energie", [], "any", false, false, false, 79), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 83, $this->source); })()), "etat", [], "any", false, false, false, 83), "html", null, true);
        echo "</td>
                                </tr>
                           <tr>
                               <th><center>      <a href=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86)]), "html", null, true);
        echo "\">
                                           <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>          </center></th>
                               <td><center>

                                       <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this car ?')){window.location='";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "';}\">

                                           <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                       </a>


                                   </center></td>
                           </tr>

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

                        </div>

                    </div>



                </div>


            </div>
        </section>

    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 90,  191 => 86,  185 => 83,  178 => 79,  171 => 75,  163 => 70,  156 => 66,  149 => 62,  142 => 58,  122 => 40,  112 => 36,  109 => 35,  105 => 34,  101 => 32,  91 => 28,  88 => 27,  84 => 26,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <main id=\"main\" class=\"main\">



        <div class=\"pagetitle\">
            <h1>Les Articles</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Tables</li>
                    <li class=\"breadcrumb-item active\">General</li>
                </ol>

            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">

                        {% for message in app.flashes('notice') %}
                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                            </div>

                        {% endfor %}


                        {% for message in app.flashes('noticedelete') %}
                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                            </div>

                        {% endfor %}

                        <div class=\"card-body\">

                            <h5 class=\"card-title\">List Articles</h5>


                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th>registration number</th>
                                    <td>{{ voiture.matricule }}</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>{{ voiture.marque }}</td>
                                </tr>
                                <tr>
                                    <th>power</th>
                                    <td>{{ voiture.puissance }}</td>
                                </tr>
                                <tr>
                                    <th>price per day</th>
                                    <td>{{ voiture.prixJours }}</td>
                                </tr>

                                <tr>
                                    <th>Picture</th>
                                    <td><img src=\"{{ asset('uploads/' ~ voiture.picture) }}\" style=\"max-height: 80px\"></td>
                                </tr>
                                <tr>
                                    <th>Energy</th>
                                    <td>{{ voiture.energie }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ voiture.etat }}</td>
                                </tr>
                           <tr>
                               <th><center>      <a href=\"{{ path('updateVoiture',{id:voiture.id}) }}\">
                                           <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>          </center></th>
                               <td><center>

                                       <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this car ?')){window.location='{{ path('app_DeleteVoiture', {'id': voiture.id }) }}';}\">

                                           <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                       </a>


                                   </center></td>
                           </tr>

                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

                        </div>

                    </div>



                </div>


            </div>
        </section>

    </main>

{% endblock %}
", "voiture/show.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\show.html.twig");
    }
}
