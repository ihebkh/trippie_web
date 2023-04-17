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

/* reservation/Affiche.html.twig */
class __TwigTemplate_2fb660325782890f3160366f68aaad2b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/Affiche.html.twig", 1);
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

        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">

                        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            echo "                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                ";
            // line 20
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "

                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", [0 => "noticedelete"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                ";
            // line 29
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
                        <div class=\"card-body\">

                            <h5 class=\"card-title\">car list</h5>
                          <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("exportexcel");
        echo "\">
                                <button type=\"button\" style=\"float: left;padding: 10px;\" class=\"btn btn-outline-info\">Export to excel
                                </button>






                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>bumber registration</th>
                                    <th>brand</th>
                                    <th>power</th>
                                    <th>energy</th>
                                    <th>picture</th>
                                    <th>Start date</th>
                                    <th>End date</th>


                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 67, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " >


                                    <td>";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 70), "matricule", [], "any", false, false, false, 70), "html", null, true);
            echo "</td>
                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 71), "marque", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 72), "puissance", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 73), "energie", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                    <td><img class=\"img-profile \" src=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 74), "picture", [], "any", false, false, false, 74))), "html", null, true);
            echo "\"
                                             style=\"max-height: 80px\"></td>
                                    <td>";
            // line 76
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateDebut", [], "any", false, false, false, 76), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateFin", [], "any", false, false, false, 77), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifC2", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 78)]), "html", null, true);
            echo "\">
                                            <button type=\"button\" class=\"btn btn-outline-success\">Update</button>
                                        </a></td>
                                    <td>
                                        <a href=\"javascript:void(0)\"
                                           onclick=\"if(confirm('are you sure to delete this Reservation ?')){window.location='";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteReservation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "';}\">

                                            <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                        </a>
                                    </td>
                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo ">

                                </tbody>
                            </table>
                            ";
        // line 92
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 92, $this->source); })()));
        echo "
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
        return "reservation/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 92,  211 => 88,  199 => 83,  191 => 78,  187 => 77,  183 => 76,  178 => 74,  174 => 73,  170 => 72,  166 => 71,  162 => 70,  154 => 67,  121 => 37,  115 => 33,  105 => 29,  101 => 27,  97 => 26,  93 => 24,  83 => 20,  79 => 18,  75 => 17,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block body %}

    <main id=\"main\" class=\"main\">


        <div class=\"pagetitle\">

        </div><!-- End Page Title -->

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

                            <h5 class=\"card-title\">car list</h5>
                          <a href=\"{{ path('exportexcel') }}\">
                                <button type=\"button\" style=\"float: left;padding: 10px;\" class=\"btn btn-outline-info\">Export to excel
                                </button>






                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>bumber registration</th>
                                    <th>brand</th>
                                    <th>power</th>
                                    <th>energy</th>
                                    <th>picture</th>
                                    <th>Start date</th>
                                    <th>End date</th>


                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr {% for r in reservation %} >


                                    <td>{{ r.idVoiture.matricule }}</td>
                                    <td>{{ r.idVoiture.marque }}</td>
                                    <td>{{ r.idVoiture.puissance }}</td>
                                    <td>{{ r.idVoiture.energie }}</td>
                                    <td><img class=\"img-profile \" src=\"{{ asset('uploads/' ~ r.idVoiture.picture) }}\"
                                             style=\"max-height: 80px\"></td>
                                    <td>{{ r.dateDebut |date('Y-m-d') }}</td>
                                    <td>{{ r.dateFin |date('Y-m-d') }}</td>
                                    <td><a href=\"{{ path('modifC2',{id:r.id}) }}\">
                                            <button type=\"button\" class=\"btn btn-outline-success\">Update</button>
                                        </a></td>
                                    <td>
                                        <a href=\"javascript:void(0)\"
                                           onclick=\"if(confirm('are you sure to delete this Reservation ?')){window.location='{{ path('app_DeleteReservation', {'id': r.id }) }}';}\">

                                            <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                        </a>
                                    </td>
                                </tr {% endfor %}>

                                </tbody>
                            </table>
                            {{ knp_pagination_render(reservation) }}
                            <!-- End Default Table Example -->

                        </div>

                    </div>


                </div>


            </div>
        </section>

    </main>

{% endblock %}
", "reservation/Affiche.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\reservation\\Affiche.html.twig");
    }
}
