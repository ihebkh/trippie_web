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

/* voiture/pdf.html.twig */
class __TwigTemplate_85f76391ea640db743e2df1efa20253f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/pdf.html.twig"));

        // line 1
        echo "<h1>Reclamation - PDF</h1>

<table class=\"table\">
    <tbody>

    <tr>
        <th>Objet : </th>
        <td>";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        echo "</td>
    </tr>
    <tr>
        <th>Description :</th>
        <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 12, $this->source); })()), "matricule", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
    </tr>

    <h3>AnimaLand-2023</h3>
    </tbody>
</table>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h1>Reclamation - PDF</h1>

<table class=\"table\">
    <tbody>

    <tr>
        <th>Objet : </th>
        <td>{{ voiture.id }}</td>
    </tr>
    <tr>
        <th>Description :</th>
        <td>{{ voiture.matricule }}</td>
    </tr>

    <h3>AnimaLand-2023</h3>
    </tbody>
</table>", "voiture/pdf.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\pdf.html.twig");
    }
}
