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

/* voiture/stat2.html.twig */
class __TwigTemplate_a4410dbfb7fa5ee831bbf31a3037753f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/stat2.html.twig"));

        $this->parent = $this->loadTemplate("indexClient.html.twig", "voiture/stat2.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "brand";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <section class=\"section\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"search-bar\" style=\"position: absolute; margin-top: -4.6%; right: 4.5%\"></div>
                                <canvas id=\"myChart\"></canvas>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['BMW', 'Mercedes', 'Audi', 'clio', 'porshe', 'peugeot', 'hamer'],
                datasets: [{
                    label: 'Pourcentage %',
                    data: [";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["BMWPercentage"]) || array_key_exists("BMWPercentage", $context) ? $context["BMWPercentage"] : (function () { throw new RuntimeError('Variable "BMWPercentage" does not exist.', 35, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["MercedesPercentage"]) || array_key_exists("MercedesPercentage", $context) ? $context["MercedesPercentage"] : (function () { throw new RuntimeError('Variable "MercedesPercentage" does not exist.', 35, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["AudiPercentage"]) || array_key_exists("AudiPercentage", $context) ? $context["AudiPercentage"] : (function () { throw new RuntimeError('Variable "AudiPercentage" does not exist.', 35, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["clioPercentage"]) || array_key_exists("clioPercentage", $context) ? $context["clioPercentage"] : (function () { throw new RuntimeError('Variable "clioPercentage" does not exist.', 35, $this->source); })()), "html", null, true);
        echo ",
                        ";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["porshePercentage"]) || array_key_exists("porshePercentage", $context) ? $context["porshePercentage"] : (function () { throw new RuntimeError('Variable "porshePercentage" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " , ";
        echo twig_escape_filter($this->env, (isset($context["peugeotPercentage"]) || array_key_exists("peugeotPercentage", $context) ? $context["peugeotPercentage"] : (function () { throw new RuntimeError('Variable "peugeotPercentage" does not exist.', 36, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["hamerPercentage"]) || array_key_exists("hamerPercentage", $context) ? $context["hamerPercentage"] : (function () { throw new RuntimeError('Variable "hamerPercentage" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "],

                    backgroundColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }

            }
        });
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/stat2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 36,  104 => 35,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexClient.html.twig' %}

{% block title %}brand{% endblock %}

{% block body %}

    <main id=\"main\" class=\"main\">
        <div class=\"pagetitle\">
            <section class=\"section\">
                <div class=\"row\">
                    <div class=\"col-lg-6 offset-lg-3\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                <div class=\"search-bar\" style=\"position: absolute; margin-top: -4.6%; right: 4.5%\"></div>
                                <canvas id=\"myChart\"></canvas>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['BMW', 'Mercedes', 'Audi', 'clio', 'porshe', 'peugeot', 'hamer'],
                datasets: [{
                    label: 'Pourcentage %',
                    data: [{{ BMWPercentage }}, {{ MercedesPercentage }}, {{ AudiPercentage }}, {{ clioPercentage }},
                        {{ porshePercentage }} , {{ peugeotPercentage }}, {{ hamerPercentage }}],

                    backgroundColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderColor: [
                        '#ffcd56',
                        '#ff6384',
                        '#36a2eb',
                        '#fd6b19',
                        '#4bc0c0',
                        '#9966ff',
                        '#ff99cc'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }

            }
        });
    </script>
{% endblock %}", "voiture/stat2.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\voiture\\stat2.html.twig");
    }
}
