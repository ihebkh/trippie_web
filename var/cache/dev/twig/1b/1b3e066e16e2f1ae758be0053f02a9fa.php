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
class __TwigTemplate_6280f88fdaabc0a49057460c3458979d extends Template
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
<script src=\"//code.tidio.co/zft12zp6goxohlo4ifr87gxm9bbrjyn3.js\" async></script>
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

        <th>Update</th>
        <th>Delete</th>
        <th>show</th>


    </tr>
    <tr  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            echo " >
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 30), "html", null, true);
            echo " </td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "matricule", [], "any", false, false, false, 31), "html", null, true);
            echo " </td>
        <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "marque", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
        <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "puissance", [], "any", false, false, false, 33), "html", null, true);
            echo "</td>
        <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "prixJours", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
        <td><img class=\"img-profile \" src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["v"], "picture", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" style=\"max-height: 80px\"></td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "puissance", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
        <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "etat", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
        <td>
            <button class=\"btn btn-primary\">
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            echo "\"> update</a>
            </button></td>
        <td> <button class=\"btn btn-primary\">
            <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteVoiture", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\">Delete</a>
            </button></td>
        <td><button class=\"btn btn-primary\"><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voiture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 45)]), "html", null, true);
            echo "\">show</a></button></td>




    </tr ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
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
        return array (  133 => 50,  121 => 45,  116 => 43,  110 => 40,  104 => 37,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  76 => 30,  70 => 29,  40 => 1,);
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
<script src=\"//code.tidio.co/zft12zp6goxohlo4ifr87gxm9bbrjyn3.js\" async></script>
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

        <th>Update</th>
        <th>Delete</th>
        <th>show</th>


    </tr>
    <tr  {%  for v in voiture %} >
        <td>{{v.id}} </td>
        <td>{{v.matricule}} </td>
        <td>{{ v.marque }}</td>
        <td>{{ v.puissance }}</td>
        <td>{{ v.prixJours }}</td>
        <td><img class=\"img-profile \" src=\"{{ asset('uploads/' ~ v.picture) }}\" style=\"max-height: 80px\"></td>
        <td>{{ v.puissance }}</td>
        <td>{{ v.etat }}</td>
        <td>
            <button class=\"btn btn-primary\">
            <a href=\"{{ path('updateVoiture',{'id': v.id})}}\"> update</a>
            </button></td>
        <td> <button class=\"btn btn-primary\">
            <a href=\"{{ path('app_DeleteVoiture',{'id':v.id}) }}\">Delete</a>
            </button></td>
        <td><button class=\"btn btn-primary\"><a href=\"{{ path('app_voiture_show', {'id': v.id}) }}\">show</a></button></td>




    </tr {%  endfor %}>
</table>
</body>
</html>", "voiture/Affiche.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\Affiche.html.twig");
    }
}
