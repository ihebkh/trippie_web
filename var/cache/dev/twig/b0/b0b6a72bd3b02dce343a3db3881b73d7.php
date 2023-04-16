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

/* reservation/pdf.html.twig */
class __TwigTemplate_61d30660f4b6fdcb27aa1b8a085efbfd extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/pdf.html.twig"));

        // line 1
        echo "<style>


    h2 {
        margin-bottom: 50px;
        text-align: center;
    }

    .container {
        text-align: center;
        overflow: hidden;
        width: 600px;
        margin: 0 auto;
    }

    .container table {
        width: 80%;
    }

    .container td, .container th {
        padding: 10px;
    }

    .container td:first-child, .container th:first-child {
        padding-left: 10px;
    }

    .container td:last-child, .container th:last-child {
        padding-right: 10px;
    }

    .container th {
        border-bottom: 1px solid #ddd;
        position: relative;
    }

    body {
        background-color : white  }

    img {
        filter: grayscale(100%);
        width: 1px;
        transition: .5s ease;

        height : 1px;


    }


</style>






<!DOCTYPE html>
<html>
<title>Users List</title>
<link href=\"https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap.no-icons.min.css\" rel=\"stylesheet\">


<body>
<section class=\"container\">

    <h2>Liste des academies </h2>






    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>



        </tr>
        </thead>
        <tbody>
        ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["academies"]);
        foreach ($context['_seq'] as $context["_key"] => $context["academies"]) {
            // line 85
            echo "            <tr>
                <td class=\"tcell\">";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["academies"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "</td>

                <td>
                </td>


            </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['academies'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </tbody>
    </table>

</section>

</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 95,  132 => 86,  129 => 85,  125 => 84,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>


    h2 {
        margin-bottom: 50px;
        text-align: center;
    }

    .container {
        text-align: center;
        overflow: hidden;
        width: 600px;
        margin: 0 auto;
    }

    .container table {
        width: 80%;
    }

    .container td, .container th {
        padding: 10px;
    }

    .container td:first-child, .container th:first-child {
        padding-left: 10px;
    }

    .container td:last-child, .container th:last-child {
        padding-right: 10px;
    }

    .container th {
        border-bottom: 1px solid #ddd;
        position: relative;
    }

    body {
        background-color : white  }

    img {
        filter: grayscale(100%);
        width: 1px;
        transition: .5s ease;

        height : 1px;


    }


</style>






<!DOCTYPE html>
<html>
<title>Users List</title>
<link href=\"https://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap.no-icons.min.css\" rel=\"stylesheet\">


<body>
<section class=\"container\">

    <h2>Liste des academies </h2>






    <table class=\"table\">
        <thead>
        <tr>
            <th>Id</th>



        </tr>
        </thead>
        <tbody>
        {% for academies in academies %}
            <tr>
                <td class=\"tcell\">{{ academies.id }}</td>

                <td>
                </td>


            </tr>

        {% endfor %}
        </tbody>
    </table>

</section>

</body>
</html>", "reservation/pdf.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\reservation\\pdf.html.twig");
    }
}
