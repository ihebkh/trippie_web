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
class __TwigTemplate_c2d70c731734747a27e210887649ef9b extends Template
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
        $context["imagePath"] = $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/example.png");
        // line 2
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
        img {
            filter: grayscale(100%);
            width: 1px;
            transition: .5s ease;
            height : 1px;
        }

    </style>
</head>
<body>

<h6>cité ghazela - Esprit</h6>
<h6>+216 25 104 011</h6>
<h2>Dear [Customer's Name],</h2>
<h5>I would like to thank you for your request to reserve a set of cars with Trippie. We are thrilled to provide you with multiple </h5>
<h5>safe and reliable means of transportation for your group trip.</h5>
<h5>We have received your reservation request for the following cars:</h5>

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
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 57
            echo "        <tr>
            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Registration_number", [], "any", false, false, false, 58), "html", null, true);
            echo "</td>
            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "brand", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
            <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
            <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "etat", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
            <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "energie", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
            <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "power", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
            <td>";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date1", [], "any", false, false, false, 65), "html", null, true);
            echo "</td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </tbody>
</table>

<h5>If you have any questions or concerns regarding your reservation or the rental process, please do not hesitate to contact us. We are always here to help and make your car rental experience as smooth and enjoyable as possible.</h5>
<h4>Best regards,</h4>
<h3>Trippie</h3>
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
        return array (  143 => 69,  133 => 65,  129 => 64,  125 => 63,  121 => 62,  117 => 61,  113 => 60,  109 => 59,  105 => 58,  102 => 57,  98 => 56,  42 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set imagePath = asset('images/example.png') %}
<!DOCTYPE html>
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
        img {
            filter: grayscale(100%);
            width: 1px;
            transition: .5s ease;
            height : 1px;
        }

    </style>
</head>
<body>

<h6>cité ghazela - Esprit</h6>
<h6>+216 25 104 011</h6>
<h2>Dear [Customer's Name],</h2>
<h5>I would like to thank you for your request to reserve a set of cars with Trippie. We are thrilled to provide you with multiple </h5>
<h5>safe and reliable means of transportation for your group trip.</h5>
<h5>We have received your reservation request for the following cars:</h5>

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

<h5>If you have any questions or concerns regarding your reservation or the rental process, please do not hesitate to contact us. We are always here to help and make your car rental experience as smooth and enjoyable as possible.</h5>
<h4>Best regards,</h4>
<h3>Trippie</h3>
</body>
</html>
", "reservation/export-pdf.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\reservation\\export-pdf.html.twig");
    }
}
