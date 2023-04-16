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

/* reservation/export-pdf.html.twig */
class __TwigTemplate_f6dbf1b88eae366dcf6746b9d6b1a55b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/export-pdf.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste de réservations</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<h1>Reservation list</h1>
<table>
    <thead>
    <tr>
        <th>Registration number</th>
        <th>brand</th>
        <th>price per day</th>
        <th>status</th>
        <th>Energy</th>
        <th>power</th>
        <th>Start date</th>
        <th>end date</th>

    </tr>
    </thead>
    <tbody>
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 39
            echo "        <tr>
<td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Registration_number", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
            <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "brand", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
            <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
            <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "etat", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
            <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "energie", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
            <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "power", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
            <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
            <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date1", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
</table>
</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/export-pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  114 => 47,  110 => 46,  106 => 45,  102 => 44,  98 => 43,  94 => 42,  90 => 41,  86 => 40,  83 => 39,  79 => 38,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Liste de réservations</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
    </style>
</head>
<body>
<h1>Reservation list</h1>
<table>
    <thead>
    <tr>
        <th>Registration number</th>
        <th>brand</th>
        <th>price per day</th>
        <th>status</th>
        <th>Energy</th>
        <th>power</th>
        <th>Start date</th>
        <th>end date</th>

    </tr>
    </thead>
    <tbody>
    {% for row in tableData %}
        <tr>
<td>{{ row.Registration_number }}</td>
            <td>{{ row.brand }}</td>
            <td>{{ row.price }}</td>
            <td>{{ row.etat }}</td>
            <td>{{ row.energie }}</td>
            <td>{{ row.power }}</td>
            <td>{{ row.date }}</td>
            <td>{{ row.date1 }}</td>

        </tr>
    {% endfor %}
    </tbody>
</table>
</body>
</html>
", "reservation/export-pdf.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\reservation\\export-pdf.html.twig");
    }
}
