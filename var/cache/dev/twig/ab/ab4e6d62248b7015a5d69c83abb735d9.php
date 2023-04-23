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

/* voiture/show2.html.twig */
class __TwigTemplate_8bb5bdf66a2a8b5d66d88b99c5ffd93f extends Template
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
        return "indexlocateur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/show2.html.twig"));

        $this->parent = $this->loadTemplate("indexlocateur.html.twig", "voiture/show2.html.twig", 1);
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
        echo "<br>
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
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 32, $this->source); })()), "matricule", [], "any", false, false, false, 32), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Brand</strong>: ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 35, $this->source); })()), "marque", [], "any", false, false, false, 35), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Power</strong>: ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 38, $this->source); })()), "puissance", [], "any", false, false, false, 38), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Price per day</strong>: ";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 41, $this->source); })()), "prixJours", [], "any", false, false, false, 41), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Energy</strong>: ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 44, $this->source); })()), "energie", [], "any", false, false, false, 44), "html", null, true);
        echo "</li>
                                <br>
                                <br>
                                <li><strong>Status</strong>: ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 47, $this->source); })()), "etat", [], "any", false, false, false, 47), "html", null, true);
        echo "</li>
                          <center>    <table border=\"0\">
                                  <tr>
                                      <th><center>      <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVoiture2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
        echo "\">
                                                  <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>          </center></th>
                                      <td><center>

                                              <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this car ?')){window.location='";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteVoiture2", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "';}\">

                                                  <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                              </a>


                                          </center></td>
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
        return "voiture/show2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 54,  128 => 50,  122 => 47,  116 => 44,  110 => 41,  104 => 38,  98 => 35,  92 => 32,  77 => 20,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexlocateur.html.twig' %}

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
                                <br>
                                <br>
                                <li><strong>Status</strong>: {{ voiture.etat }}</li>
                          <center>    <table border=\"0\">
                                  <tr>
                                      <th><center>      <a href=\"{{ path('updateVoiture2',{id:voiture.id}) }}\">
                                                  <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>          </center></th>
                                      <td><center>

                                              <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this car ?')){window.location='{{ path('app_DeleteVoiture2', {'id': voiture.id }) }}';}\">

                                                  <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                              </a>


                                          </center></td>
                                  </tr>

                            </center>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->


    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
{% endblock %}", "voiture/show2.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\voiture\\show2.html.twig");
    }
}
