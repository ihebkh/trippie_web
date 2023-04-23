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

/* voiture/Affiche.html.twig */
class __TwigTemplate_6b9b1c8f6e8291b4090e6d79742ac051 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/Affiche.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voiture/Affiche.html.twig", 1);
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
        echo "    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
        </div><!-- End Page Title -->
        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"card\">
                        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                ";
            // line 13
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [0 => "noticedelete"], "method", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 17
            echo "                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\"
                                 role=\"alert\">
                                ";
            // line 19
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                        <div class=\"card-body\">

                            <h5 class=\"card-title\">car list</h5>


                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>registration number</th>
                                    <th>brand</th>
                                    <th>picture</th>
                                    <th>show</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>  ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            echo " >


                                <tr>


                                    <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "matricule", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                    <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "marque", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                                    <td><img class=\"img-profile \" src=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["v"], "picture", [], "any", false, false, false, 49))), "html", null, true);
            echo "\"
                                             style=\"max-height: 80px\"></td>
                                    <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voiture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">
                                            <button type=\"button\" class=\"btn btn-outline-dark\">More</button>
                                        </a></td>


                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "

                                </tbody>
                            </table>



                 <center>  ";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 64, $this->source); })()), "bootstrap_4_pagination.html.twig");
        echo "</center>

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
        return "voiture/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  160 => 57,  148 => 51,  143 => 49,  139 => 48,  135 => 47,  124 => 41,  103 => 22,  94 => 19,  90 => 17,  85 => 16,  76 => 13,  72 => 11,  68 => 10,  59 => 3,  52 => 2,  35 => 1,);
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


                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>

                                    <th>registration number</th>
                                    <th>brand</th>
                                    <th>picture</th>
                                    <th>show</th>
                                </tr>
                                </thead>
                                <tbody>


                                <tr>  {% for v in voiture %} >


                                <tr>


                                    <td>{{ v.matricule }}</td>
                                    <td>{{ v.marque }}</td>
                                    <td><img class=\"img-profile \" src=\"{{ asset('uploads/' ~ v.picture) }}\"
                                             style=\"max-height: 80px\"></td>
                                    <td><a href=\"{{ path('app_voiture_show',{id:v.id}) }}\">
                                            <button type=\"button\" class=\"btn btn-outline-dark\">More</button>
                                        </a></td>


                                    {% endfor %}


                                </tbody>
                            </table>



                 <center>  {{ knp_pagination_render(voiture, 'bootstrap_4_pagination.html.twig') }}</center>

                            <!-- End Default Table Example -->

                        </div>

                    </div>


                </div>


            </div>
        </section>

    </main>

{% endblock %}
", "voiture/Affiche.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\voiture\\Affiche.html.twig");
    }
}
