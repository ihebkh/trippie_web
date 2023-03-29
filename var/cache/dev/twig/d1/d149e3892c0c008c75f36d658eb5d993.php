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
            'title' => [$this, 'block_title'],
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

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Voiture";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>Show Voiture</h1>
<center>
    <table class=\"table\" border=\"2\">
        <tbody>
        <tr>
            <th>Matricule</th>
            <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 12, $this->source); })()), "matricule", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Brand</th>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 16, $this->source); })()), "marque", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>power</th>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 20, $this->source); })()), "puissance", [], "any", false, false, false, 20), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>price per day</th>
            <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 24, $this->source); })()), "prixJours", [], "any", false, false, false, 24), "html", null, true);
        echo "</td>
        </tr>

        <tr>
            <th>Picture</th>
            <td><img src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 29, $this->source); })()), "picture", [], "any", false, false, false, 29))), "html", null, true);
        echo "\" style=\"max-height: 80px\"></td>
        </tr>
        <tr>
            <th>Power</th>
            <td>";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 33, $this->source); })()), "energie", [], "any", false, false, false, 33), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 37, $this->source); })()), "etat", [], "any", false, false, false, 37), "html", null, true);
        echo "</td>
        </tr>
        <tr>
          
           <td>  <button class=\"btn btn-primary\">
                   <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)]), "html", null, true);
        echo "\">reserver</a>
               </button></td>
        </tr>

        </tbody>
    </table>
</center>




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
        return array (  132 => 42,  124 => 37,  117 => 33,  110 => 29,  102 => 24,  95 => 20,  88 => 16,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Voiture{% endblock %}

{% block body %}
    <h1>Show Voiture</h1>
<center>
    <table class=\"table\" border=\"2\">
        <tbody>
        <tr>
            <th>Matricule</th>
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
            <th>Power</th>
            <td>{{ voiture.energie }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ voiture.etat }}</td>
        </tr>
        <tr>
          
           <td>  <button class=\"btn btn-primary\">
                   <a href=\"{{ path('app_reservation_add', {'id': voiture.id}) }}\">reserver</a>
               </button></td>
        </tr>

        </tbody>
    </table>
</center>




{% endblock %}", "voiture/show.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\show.html.twig");
    }
}
