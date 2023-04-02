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
class __TwigTemplate_9c631e721d7cc846548d85fe2b7f9248 extends Template
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
        return "indexlocateur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/Afficheclient.html.twig"));

        $this->parent = $this->loadTemplate("indexlocateur.html.twig", "reservation/Afficheclient.html.twig", 1);
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
            <th scope=\"col\">Start date</th>
            <th scope=\"col\">End date</th>
            <th scope=\"col\">Voiture id</th>
            <th>update</th>
            <th>delete</th>

        </tr>
        </thead>
        <tbody>
        <tr  ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " >

            <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateDebut", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateFin", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
            echo "</td>
            <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "idVoiture", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
            <td></td>


            <td>
                <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this Reservation ?')){window.location='";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteReservation2", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "';}\">

                    <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                </a>
            </td>
        </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
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
        return array (  115 => 36,  103 => 31,  95 => 26,  91 => 25,  87 => 24,  80 => 22,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexlocateur.html.twig' %}
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
            <th scope=\"col\">Start date</th>
            <th scope=\"col\">End date</th>
            <th scope=\"col\">Voiture id</th>
            <th>update</th>
            <th>delete</th>

        </tr>
        </thead>
        <tbody>
        <tr  {%  for r in reservation %} >

            <td>{{r.dateDebut |date('Y-m-d')}}</td>
            <td>{{r.dateFin |date('Y-m-d')}}</td>
            <td>{{r.idVoiture }}</td>
            <td></td>


            <td>
                <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this Reservation ?')){window.location='{{ path('app_DeleteReservation2', {'id': r.id }) }}';}\">

                    <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                </a>
            </td>
        </tr {%  endfor %}>

        </tbody>
    </table>
{% endblock %}", "reservation/Afficheclient.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\reservation\\Afficheclient.html.twig");
    }
}
