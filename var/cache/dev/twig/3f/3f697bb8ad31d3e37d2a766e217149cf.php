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
class __TwigTemplate_3c82631304f9296e2dd7cfba4b1c443d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'flashbag' => [$this, 'block_flashbag'],
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
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            echo "                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\"
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

                        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "flashes", [0 => "noticedelete"], "method", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 28
            echo "                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                ";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
                        <div class=\"card-body\">

                            <h5 class=\"card-title\">car list</h5>
                    <a href=\"";
        // line 38
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
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 68, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " >


                                    <td>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 71), "matricule", [], "any", false, false, false, 71), "html", null, true);
            echo "</td>
                                    <td>";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 72), "marque", [], "any", false, false, false, 72), "html", null, true);
            echo "</td>
                                    <td>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 73), "puissance", [], "any", false, false, false, 73), "html", null, true);
            echo "</td>
                                    <td>";
            // line 74
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 74), "energie", [], "any", false, false, false, 74), "html", null, true);
            echo "</td>
                                    <td><img class=\"img-profile \" src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 75), "picture", [], "any", false, false, false, 75))), "html", null, true);
            echo "\"
                                             style=\"max-height: 80px\"></td>
                                    <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateDebut", [], "any", false, false, false, 77), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateFin", [], "any", false, false, false, 78), "Y-m-d"), "html", null, true);
            echo "</td>
                                    <td><a href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifC2", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            echo "\">
                                            <button type=\"button\" class=\"btn btn-outline-success\">Update</button>
                                        </a></td>
                                    <td>
                                        <a href=\"javascript:void(0)\"
                                           onclick=\"if(confirm('are you sure to delete this Reservation ?')){window.location='";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteReservation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "';}\">

                                            <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                        </a>
                                    </td>
                                </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo ">

                                </tbody>
                            </table>

                        ";
        // line 94
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 94, $this->source); })()), "bootstrap_4_pagination.html.twig");
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

    // line 111
    public function block_flashbag($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "flashbag"));

        // line 112
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 112, $this->source); })()), "session", [], "any", false, false, false, 112), "flashbag", [], "any", false, false, false, 112), "all", [], "method", false, false, false, 112));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 113
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 114
                echo "            ";
                if (($context["type"] == "error")) {
                    // line 115
                    echo "                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: '";
                    // line 119
                    echo $context["message"];
                    echo "'
                    });
                </script>
            ";
                }
                // line 123
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
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
        return array (  283 => 124,  277 => 123,  270 => 119,  264 => 115,  261 => 114,  256 => 113,  251 => 112,  244 => 111,  220 => 94,  213 => 89,  201 => 84,  193 => 79,  189 => 78,  185 => 77,  180 => 75,  176 => 74,  172 => 73,  168 => 72,  164 => 71,  156 => 68,  123 => 38,  117 => 34,  107 => 30,  103 => 28,  99 => 27,  95 => 25,  85 => 21,  81 => 19,  77 => 18,  60 => 3,  53 => 2,  36 => 1,);
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

                        {{ knp_pagination_render(reservation, 'bootstrap_4_pagination.html.twig') }}
                            <!-- End Default Table Example -->

                        </div>

                    </div>


                </div>


            </div>
        </section>

    </main>

{% endblock %}
{% block flashbag %}
    {% for type, messages in app.session.flashbag.all() %}
        {% for message in messages %}
            {% if type == 'error' %}
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Erreur',
                        text: '{{ message|raw }}'
                    });
                </script>
            {% endif %}
        {% endfor %}
    {% endfor %}
{% endblock %}", "reservation/Affiche.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\reservation\\Affiche.html.twig");
    }
}
