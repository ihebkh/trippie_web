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

/* voiture/show3.html.twig */
class __TwigTemplate_bc08bd595864bbeca247980eb8031ca1 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "indexClient.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/show3.html.twig"));

        $this->parent = $this->loadTemplate("indexClient.html.twig", "voiture/show3.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <br>
    <br>
    <br>
    <main id=\"main\">

        <!-- ======= Portfolio Details Section ======= -->
        <section id=\"portfolio-details\" class=\"portfolio-details\">
            <div class=\"container\">

                <div class=\"row gy-4\">

                    <div class=\"col-lg-8\">
                        <div class=\"portfolio-details-slider swiper\">
                            <div class=\"swiper-wrapper align-items-center\">

                                <div class=\"swiper-slide\">
                                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 20, $this->source); })()), "picture", [], "any", false, false, false, 20))), "html", null, true);
        echo "\" style=\"max-height: 400px\">
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"portfolio-info\">
                            <h3>Car information</h3>
                            <ul>
                                <li><strong>Registration number</strong>: ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 33, $this->source); })()), "matricule", [], "any", false, false, false, 33), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Brand</strong>: ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 36, $this->source); })()), "marque", [], "any", false, false, false, 36), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Power</strong>: ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 39, $this->source); })()), "puissance", [], "any", false, false, false, 39), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Price per day</strong>: ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 42, $this->source); })()), "prixJours", [], "any", false, false, false, 42), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Energy</strong>: ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 45, $this->source); })()), "energie", [], "any", false, false, false, 45), "html", null, true);
        echo "</li>
                                <center>    <table border=\"0\">
                                        <tr>
                                            <th>  <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation_add", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
        echo "\">
                                                        <button type=\"button\" class=\"btn btn-outline-success\">book</button></a></center></th>

                                        </tr>

                                </center>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->


    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/show3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 48,  117 => 45,  111 => 42,  105 => 39,  99 => 36,  93 => 33,  77 => 20,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexClient.html.twig' %}

{% block body %}
    <br>
    <br>
    <br>
    <main id=\"main\">

        <!-- ======= Portfolio Details Section ======= -->
        <section id=\"portfolio-details\" class=\"portfolio-details\">
            <div class=\"container\">

                <div class=\"row gy-4\">

                    <div class=\"col-lg-8\">
                        <div class=\"portfolio-details-slider swiper\">
                            <div class=\"swiper-wrapper align-items-center\">

                                <div class=\"swiper-slide\">
                                    <img src=\"{{ asset('uploads/' ~ voiture.picture) }}\" style=\"max-height: 400px\">
                                </div>



                            </div>
                        </div>
                    </div>

                    <div class=\"col-lg-4\">
                        <div class=\"portfolio-info\">
                            <h3>Car information</h3>
                            <ul>
                                <li><strong>Registration number</strong>: {{ voiture.matricule }}</li>
                                <br>
                                <br>
                                <li><strong>Brand</strong>: {{ voiture.marque }}</li>
                                <br>
                                <br>
                                <li><strong>Power</strong>: {{ voiture.puissance }}</li>
                                <br>
                                <br>
                                <li><strong>Price per day</strong>: {{ voiture.prixJours }}</li>
                                <br>
                                <br>
                                <li><strong>Energy</strong>: {{ voiture.energie }}</li>
                                <center>    <table border=\"0\">
                                        <tr>
                                            <th>  <a href=\"{{ path('app_reservation_add', {id: voiture.id}) }}\">
                                                        <button type=\"button\" class=\"btn btn-outline-success\">book</button></a></center></th>

                                        </tr>

                                </center>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->


    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
{% endblock %}", "voiture/show3.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\show3.html.twig");
    }
}
