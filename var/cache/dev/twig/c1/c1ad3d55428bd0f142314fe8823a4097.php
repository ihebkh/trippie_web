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
class __TwigTemplate_db47ce6b31940bd35349ed784240fd20 extends Template
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





        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">

                        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 18
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

                        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "flashes", [0 => "noticedelete"], "method", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 25
            echo "                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 26
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
                        <div class=\"card-body\">

                            <h5 class=\"card-title\">List Articles</h5>

                            <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        echo "\" method=\"post\">
                                <button type=\"submit\" class=\"btn btn-primary\"   ; >Print PDF</button>
                            </form>
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
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 50, $this->source); })()), "matricule", [], "any", false, false, false, 50), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 54, $this->source); })()), "marque", [], "any", false, false, false, 54), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>power</th>
                                    <td>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 58, $this->source); })()), "puissance", [], "any", false, false, false, 58), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>price per day</th>
                                    <td>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 62, $this->source); })()), "prixJours", [], "any", false, false, false, 62), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Picture</th>
                                    <td><img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 67, $this->source); })()), "picture", [], "any", false, false, false, 67))), "html", null, true);
        echo "\" style=\"max-height: 80px\"></td>
                                </tr>
                                <tr>
                                    <th>Energy</th>
                                    <td>";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 71, $this->source); })()), "energie", [], "any", false, false, false, 71), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Status</th>

                                    <td ";
        // line 76
        if ((twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 76, $this->source); })()), "etat", [], "any", false, false, false, 76) == "reserve")) {
            echo "style=\"color: red\"";
        } else {
            echo "style=\"color: green\"";
        }
        echo ">
                                        ";
        // line 77
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 77, $this->source); })()), "etat", [], "any", false, false, false, 77), "html", null, true);
        echo "
                                    </td>
                                </tr>
                           <tr>
                               <th><center>      <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\">
                                           <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>          </center></th>
                               <td><center>

                                       <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this car ?')){window.location='";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
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
        return array (  203 => 85,  196 => 81,  189 => 77,  181 => 76,  173 => 71,  166 => 67,  158 => 62,  151 => 58,  144 => 54,  137 => 50,  119 => 35,  112 => 30,  102 => 26,  99 => 25,  95 => 24,  91 => 22,  81 => 18,  78 => 17,  74 => 16,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <main id=\"main\" class=\"main\">





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

                            <form action=\"{{ path('pdf', {'id': voiture.id}) }}\" method=\"post\">
                                <button type=\"submit\" class=\"btn btn-primary\"   ; >Print PDF</button>
                            </form>
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

                                    <td {% if voiture.etat == 'reserve' %}style=\"color: red\"{% else %}style=\"color: green\"{% endif %}>
                                        {{ voiture.etat }}
                                    </td>
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
