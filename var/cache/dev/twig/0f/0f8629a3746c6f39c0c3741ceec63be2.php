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

/* reservation/Affiche.html.twig */
class __TwigTemplate_2008fd492f4820b5ee148b822ba02c0f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/Affiche.html.twig"));

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
        <th>date debut reservation </th>
        <th>date fin reservation</th>
        <th>voiture reserve</th>
        <th>id locateur </th>
        <th>Update</th>
        <th>Delete</th>


    </tr>
    <tr  ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            echo " >
        <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo " </td>
        <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateDebut", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
            echo "</td>
        <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "dateFin", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            echo "</td>
       <td></td>
<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "idClient", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
        <td></td>
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteReservation", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\">Delete</a></td>






    </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo ">
</table>
</body>
</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/Affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 37,  88 => 30,  83 => 28,  78 => 26,  74 => 25,  70 => 24,  64 => 23,  40 => 1,);
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
        <th>date debut reservation </th>
        <th>date fin reservation</th>
        <th>voiture reserve</th>
        <th>id locateur </th>
        <th>Update</th>
        <th>Delete</th>


    </tr>
    <tr  {%  for r in reservation %} >
        <td>{{r.id}} </td>
        <td>{{r.dateDebut |date('Y-m-d')}}</td>
        <td>{{r.dateFin |date('Y-m-d')}}</td>
       <td></td>
<td>{{r.idClient}}</td>
        <td></td>
        <td><a href=\"{{ path('app_DeleteReservation',{'id':r.id}) }}\">Delete</a></td>






    </tr {%  endfor %}>
</table>
</body>
</html>", "reservation/Affiche.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\reservation\\Affiche.html.twig");
    }
}
