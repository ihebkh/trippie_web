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

/* reservation/Afficheclient.html.twig */
class __TwigTemplate_d1b644c52ded5dbba5a6b3aaf23495e7 extends Template
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
        return "indexClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/Afficheclient.html.twig"));

        $this->parent = $this->loadTemplate("indexClient.html.twig", "reservation/Afficheclient.html.twig", 1);
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
        echo "    <br>
    <br>
    <br>
    <br>
    <br>

  <center><h1>Reservation list</h1></center>
    <table class=\"table\">
        <thead>
        <tr>

            <th scope=\"col\">Registration number</th>
            <th scope=\"col\">Brand</th>
            <th scope=\"col\">power</th>
            <th scope=\"col\">Energy</th>
            <th scope=\"col\">picture</th>
            <th scope=\"col\">Start date</th>
            <th scope=\"col\">End date</th>
            <th>update</th>
            <th>delete</th>

        </tr>
        </thead>
        <tbody>
        <tr  ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " >


            <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 30), "matricule", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 31), "marque", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
            <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 32), "puissance", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
            <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 33), "energie", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
            <td><img class=\"img-profile \" src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 34), "picture", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" style=\"max-height: 80px\"></td>
            <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateDebut", [], "any", false, false, false, 35), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateFin", [], "any", false, false, false, 36), "Y-m-d"), "html", null, true);
            echo "</td>


            <td> <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("modifC", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">
                    <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>    </td>

            <td>
                <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this Reservation ?')){window.location='";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteReservation2", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "';}\">

                    <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                </a>
            </td>
        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo ">

        </tbody>
    </table>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/Afficheclient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 48,  130 => 43,  123 => 39,  117 => 36,  113 => 35,  109 => 34,  105 => 33,  101 => 32,  97 => 31,  93 => 30,  85 => 27,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexClient.html.twig' %}
{% block body %}
    <br>
    <br>
    <br>
    <br>
    <br>

  <center><h1>Reservation list</h1></center>
    <table class=\"table\">
        <thead>
        <tr>

            <th scope=\"col\">Registration number</th>
            <th scope=\"col\">Brand</th>
            <th scope=\"col\">power</th>
            <th scope=\"col\">Energy</th>
            <th scope=\"col\">picture</th>
            <th scope=\"col\">Start date</th>
            <th scope=\"col\">End date</th>
            <th>update</th>
            <th>delete</th>

        </tr>
        </thead>
        <tbody>
        <tr  {%  for r in reservation %} >


            <td>{{ r.idVoiture.matricule }}</td>
            <td>{{ r.idVoiture.marque }}</td>
            <td>{{ r.idVoiture.puissance }}</td>
            <td>{{ r.idVoiture.energie }}</td>
            <td><img class=\"img-profile \" src=\"{{ asset('uploads/' ~ r.idVoiture.picture) }}\" style=\"max-height: 80px\"></td>
            <td>{{r.dateDebut |date('Y-m-d')}}</td>
            <td>{{r.dateFin |date('Y-m-d')}}</td>


            <td> <a href=\"{{ path('modifC',{id:r.id}) }}\">
                    <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>    </td>

            <td>
                <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this Reservation ?')){window.location='{{ path('app_DeleteReservation2', {'id': r.id }) }}';}\">

                    <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                </a>
            </td>
        </tr {%  endfor %}>

        </tbody>
    </table>
{% endblock %}", "reservation/Afficheclient.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\reservation\\Afficheclient.html.twig");
    }
}
