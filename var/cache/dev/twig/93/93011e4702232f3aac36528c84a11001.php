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
class __TwigTemplate_fd414630028d7bc2927567f2cf5e3041 extends Template
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

    </style>
</head>
<body>
<img alt=\"bg.png\"  style=\"max-height: 80px\" src=\"data:image/png;base64,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\"/>

<h6>cité ghazela - Esprit</h6>
<h6>+216 25 104 011</h6>
<h2>Dear [Customer's Name] hou ,</h2>
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
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 86
            echo "        <tr>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "Registration_number", [], "any", false, false, false, 87), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "brand", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "price", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "etat", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "energie", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
            <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "power", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
            <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
            <td>";
            // line 94
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "date1", [], "any", false, false, false, 94), "html", null, true);
            echo "</td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
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
        return array (  171 => 98,  161 => 94,  157 => 93,  153 => 92,  149 => 91,  145 => 90,  141 => 89,  137 => 88,  133 => 87,  130 => 86,  126 => 85,  40 => 1,);
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

    </style>
</head>
<body>
<img alt=\"bg.png\"  style=\"max-height: 80px\" src=\"data:image/png;base64,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\"/>

<h6>cité ghazela - Esprit</h6>
<h6>+216 25 104 011</h6>
<h2>Dear [Customer's Name] hou ,</h2>
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
