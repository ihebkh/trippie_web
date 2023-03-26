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
class __TwigTemplate_f9310d746a33c6d647f6e13149512aa5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/Affiche.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Matricule</th>
        <th>Marque</th>
        <th>puissance</th>
        <th>prix par jour </th>
        <th>picture</th>
        <th>energie</th>
        <th>etat</th>
        <th>id_locateur</th>
        <th>Update</th>
        <th>Delete</th>

    </tr>
    <tr  ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            echo " >
        <td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo " </td>
        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "matricule", [], "any", false, false, false, 28), "html", null, true);
            echo " </td>
        <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "marque", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "puissance", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "prixJours", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "puissance", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "picture", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "etat", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
        <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "idLocateur", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
        <td></td>
        <td></td>

    </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo ">
</table>
</body>
</html>";
        
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
        return array (  116 => 39,  105 => 35,  101 => 34,  97 => 33,  93 => 32,  89 => 31,  85 => 30,  81 => 29,  77 => 28,  73 => 27,  67 => 26,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>Document</title>
</head>
<body>
<table border=\"1\">
    <tr>
        <th>ID</th>
        <th>Matricule</th>
        <th>Marque</th>
        <th>puissance</th>
        <th>prix par jour </th>
        <th>picture</th>
        <th>energie</th>
        <th>etat</th>
        <th>id_locateur</th>
        <th>Update</th>
        <th>Delete</th>

    </tr>
    <tr  {%  for v in voiture %} >
        <td>{{v.id}} </td>
        <td>{{v.matricule}} </td>
        <td>{{ v.marque }}</td>
        <td>{{ v.puissance }}</td>
        <td>{{ v.prixJours }}</td>
        <td>{{ v.puissance }}</td>
        <td>{{ v.picture }}</td>
        <td>{{ v.etat }}</td>
        <td>{{ v.idLocateur }}</td>
        <td></td>
        <td></td>

    </tr {%  endfor %}>
</table>
</body>
</html>", "voiture/Affiche.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\Affiche.html.twig");
    }
}
