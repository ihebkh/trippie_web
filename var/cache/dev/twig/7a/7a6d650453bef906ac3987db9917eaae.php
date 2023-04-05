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

/* reservation/UpdateR.html.twig */
class __TwigTemplate_f6c4e6f76b66df8ec8270431c68485b4 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/UpdateR.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/UpdateR.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <main id=\"main\" class=\"main\">




        <div class=\"row\">
            <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 0px; padding: 10px;\">

                <div class=\"card\">

                    <div class=\"card-body\">
                        <center> <h5 class=\"card-title\">Reservation update</h5></center>

                        <!-- General Form Elements -->
                        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row mb-3\">

                            <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Start date </label></center>
                            <center>  <div class=\"col-sm-10\">
                                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "dateDebut", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "dateDebut", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "



                            </center>
                        </div>
                        <div class=\"row mb-3\">
                            <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">end date </label></center>
                            <center>   <div class=\"col-sm-10\">
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "dateFin", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "dateFin", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "


                                </div>
                            </center>
                        </div>






                    <center>

                        <div class=\"row mb-3\">
                            <div class=\"col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>

                            </div>
                        </div>
                    </center>

                    ";
        // line 57
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), 'form_end');
        echo "


                </div>
            </div>
        </div>
        </div>

    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "reservation/UpdateR.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 57,  103 => 35,  99 => 34,  87 => 25,  83 => 24,  75 => 19,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <main id=\"main\" class=\"main\">




        <div class=\"row\">
            <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 0px; padding: 10px;\">

                <div class=\"card\">

                    <div class=\"card-body\">
                        <center> <h5 class=\"card-title\">Reservation update</h5></center>

                        <!-- General Form Elements -->
                        {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                        <div class=\"row mb-3\">

                            <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Start date </label></center>
                            <center>  <div class=\"col-sm-10\">
                                    {{ form_widget(form.dateDebut,{'attr':{'class':'form-control'}}) }}
                                    {{ form_errors(form.dateDebut,{'attr':{'class':'text-danger'}}) }}



                            </center>
                        </div>
                        <div class=\"row mb-3\">
                            <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">end date </label></center>
                            <center>   <div class=\"col-sm-10\">
                                    {{ form_widget(form.dateFin,{'attr':{'class':'form-control'}}) }}
                                    {{ form_errors(form.dateFin,{'attr':{'class':'text-danger'}}) }}


                                </div>
                            </center>
                        </div>






                    <center>

                        <div class=\"row mb-3\">
                            <div class=\"col-sm-10\">
                                <button type=\"submit\" class=\"btn btn-primary\">Save</button>

                            </div>
                        </div>
                    </center>

                    {{ form_end(form) }}


                </div>
            </div>
        </div>
        </div>

    </main>
{% endblock %}", "reservation/UpdateR.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\reservation\\UpdateR.html.twig");
    }
}
