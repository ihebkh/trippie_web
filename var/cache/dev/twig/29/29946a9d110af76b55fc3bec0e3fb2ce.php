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
class __TwigTemplate_7b2d4d266b5796b61ea4081c8ae318a3 extends Template
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
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "

                        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "noticedelete"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                ";
            // line 21
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
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
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 43, $this->source); })()), "matricule", [], "any", false, false, false, 43), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 47, $this->source); })()), "marque", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>power</th>
                                    <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 51, $this->source); })()), "puissance", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>price per day</th>
                                    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 55, $this->source); })()), "prixJours", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Picture</th>
                                    <td><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 60, $this->source); })()), "picture", [], "any", false, false, false, 60))), "html", null, true);
        echo "\" style=\"max-height: 80px\">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Energy</th>
                                    <td>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 65, $this->source); })()), "energie", [], "any", false, false, false, 65), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Status</th>

                                    <td ";
        // line 70
        if ((twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 70, $this->source); })()), "etat", [], "any", false, false, false, 70) == "reserve")) {
            echo "style=\"color: red\"
                                        ";
        } else {
            // line 71
            echo "style=\"color: green\"";
        }
        echo ">
                                        ";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 72, $this->source); })()), "etat", [], "any", false, false, false, 72), "html", null, true);
        echo "
                                    </td>
                                </tr>

                                <tr>
                                    <th>Scan this code if you like</th>
                                    <th>
                                        <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["qr"]) || array_key_exists("qr", $context) ? $context["qr"] : (function () { throw new RuntimeError('Variable "qr" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "\" alt=\"QR code\" style=\"height:20%;width:15%\"/>
                                    </th>
                                </tr>

                                <tr>
                                    <th>
                                        <center><a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
        echo "\">
                                                <button type=\"button\" class=\"btn btn-outline-success\">Update</button>
                                            </a></center>
                                    </th>
                                    <td>
                                        <center>

                                            <a href=\"javascript:void(0)\"
                                               onclick=\"if(confirm('are you sure to delete this car ?')){window.location='";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93)]), "html", null, true);
        echo "';}\">

                                                <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                            </a>


                                        </center>
                                    </td>
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
        return array (  212 => 93,  201 => 85,  192 => 79,  182 => 72,  177 => 71,  172 => 70,  164 => 65,  156 => 60,  148 => 55,  141 => 51,  134 => 47,  127 => 43,  107 => 25,  97 => 21,  93 => 19,  89 => 18,  85 => 16,  75 => 12,  71 => 10,  67 => 9,  59 => 3,  52 => 2,  35 => 1,);
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
                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                {{ message }}
                            </div>

                        {% endfor %}


                        {% for message in app.flashes('noticedelete') %}
                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
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
                                    <td><img src=\"{{ asset('uploads/' ~ voiture.picture) }}\" style=\"max-height: 80px\">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Energy</th>
                                    <td>{{ voiture.energie }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>

                                    <td {% if voiture.etat == 'reserve' %}style=\"color: red\"
                                        {% else %}style=\"color: green\"{% endif %}>
                                        {{ voiture.etat }}
                                    </td>
                                </tr>

                                <tr>
                                    <th>Scan this code if you like</th>
                                    <th>
                                        <img src=\"{{ qr }}\" alt=\"QR code\" style=\"height:20%;width:15%\"/>
                                    </th>
                                </tr>

                                <tr>
                                    <th>
                                        <center><a href=\"{{ path('updateVoiture',{id:voiture.id}) }}\">
                                                <button type=\"button\" class=\"btn btn-outline-success\">Update</button>
                                            </a></center>
                                    </th>
                                    <td>
                                        <center>

                                            <a href=\"javascript:void(0)\"
                                               onclick=\"if(confirm('are you sure to delete this car ?')){window.location='{{ path('app_DeleteVoiture', {'id': voiture.id }) }}';}\">

                                                <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                            </a>


                                        </center>
                                    </td>
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
", "voiture/show.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\voiture\\show.html.twig");
    }
}
