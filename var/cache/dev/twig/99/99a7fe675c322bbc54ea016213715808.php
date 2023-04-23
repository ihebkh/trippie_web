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
    <style type=\"text/css\">
        /* Fonts */
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
        /* Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }
        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .container {
            background-color: #D3D3D3;
            border-radius: 16px;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        .btn-container {
            text-align: center;
            margin-top: 2rem;
        }
        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo img {
            max-height: 60px;
            font-size: 40px;

        }
    </style>
</head>
<body>
<h3 style=\"font-size: 70px; color:#CFA0E9\"><strong style=\"font-size: 100px;color: #F6B26B\">T</strong>RIPEE</h3>

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
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 99, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 100
            echo "        <tr>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Registration_number", [], "any", false, false, false, 101), "html", null, true);
            echo "</td>
            <td>";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "brand", [], "any", false, false, false, 102), "html", null, true);
            echo "</td>
            <td>";
            // line 103
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 103), "html", null, true);
            echo "</td>
            <td>";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "etat", [], "any", false, false, false, 104), "html", null, true);
            echo "</td>
            <td>";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "energie", [], "any", false, false, false, 105), "html", null, true);
            echo "</td>
            <td>";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "power", [], "any", false, false, false, 106), "html", null, true);
            echo "</td>
            <td>";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 107), "html", null, true);
            echo "</td>
            <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date1", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
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
        return array (  186 => 112,  176 => 108,  172 => 107,  168 => 106,  164 => 105,  160 => 104,  156 => 103,  152 => 102,  148 => 101,  145 => 100,  141 => 99,  42 => 2,  40 => 1,);
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
    <style type=\"text/css\">
        /* Fonts */
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');
        /* Styles */
        body {
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }
        h1, h2, h3, h4, h5, h6 {
            margin-top: 0;
            margin-bottom: 1rem;
            font-weight: 700;
            line-height: 1.2;
        }
        p {
            margin-top: 0;
            margin-bottom: 1rem;
        }

        .container {
            background-color: #D3D3D3;
            border-radius: 16px;
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }
        .btn-container {
            text-align: center;
            margin-top: 2rem;
        }
        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo img {
            max-height: 60px;
            font-size: 40px;

        }
    </style>
</head>
<body>
<h3 style=\"font-size: 70px; color:#CFA0E9\"><strong style=\"font-size: 100px;color: #F6B26B\">T</strong>RIPEE</h3>

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
