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

/* voiture/UpdateV.html.twig */
class __TwigTemplate_e6d0118a86900bfc6d3a01650d22119b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/UpdateV.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voiture/UpdateV.html.twig", 1);
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
                     <center> <h5 class=\"card-title\">car update</h5></center>

                        <!-- General Form Elements -->
                        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row mb-3\">

                       <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Registration number </label></center>
                        <center>  <div class=\"col-sm-10\">
                                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "matricule", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "matricule", [], "any", false, false, false, 25), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "



                        </center>
                        </div>
                        <div class=\"row mb-3\">
                            <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Brand </label></center>
                         <center>   <div class=\"col-sm-10\">
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "marque", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "marque", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "


                            </div>
                         </center>
                        </div>
                    <div class=\"row mb-3\">
                        <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Power </label></center>

                      <center>    <div class=\"col-sm-10\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "puissance", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "puissance", [], "any", false, false, false, 46), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                            </div></center>
                    </div>

                    </div>
                    <div class=\"row mb-3\">
                        <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Price per day </label></center>
                     <center>  <div class=\"col-sm-10\">
                            ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "prixJours", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "prixJours", [], "any", false, false, false, 56), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div> </center>
                    </div>


                        <div class=\"row mb-3\">
                        <cenetr>  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label> </cenetr>
                            <center>     <div class=\"col-sm-10\">
                                ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "picture", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                            </div>
                      </center>
                        </div>

                    <div class=\"row mb-3\">
                     <center>   <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">Energy</label> </center>
                      <center> <div class=\"col-sm-10\">
                            ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "energie", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "energie", [], "any", false, false, false, 75), 'errors', ["attr" => ["class" => "text-danger"]]);
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
        // line 95
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'form_end');
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
        return "voiture/UpdateV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 95,  164 => 75,  160 => 74,  148 => 65,  136 => 56,  132 => 55,  120 => 46,  116 => 45,  103 => 35,  99 => 34,  87 => 25,  83 => 24,  75 => 19,  59 => 5,  52 => 4,  35 => 1,);
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
                     <center> <h5 class=\"card-title\">car update</h5></center>

                        <!-- General Form Elements -->
                        {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}
                        <div class=\"row mb-3\">

                       <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Registration number </label></center>
                        <center>  <div class=\"col-sm-10\">
                                {{ form_widget(form.matricule,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(form.matricule,{'attr':{'class':'text-danger'}}) }}



                        </center>
                        </div>
                        <div class=\"row mb-3\">
                            <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Brand </label></center>
                         <center>   <div class=\"col-sm-10\">
                                {{ form_widget(form.marque,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(form.marque,{'attr':{'class':'text-danger'}}) }}


                            </div>
                         </center>
                        </div>
                    <div class=\"row mb-3\">
                        <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Power </label></center>

                      <center>    <div class=\"col-sm-10\">
                                {{ form_widget(form.puissance,{'attr':{'class':'form-control'}}) }}
                                {{ form_errors(form.puissance,{'attr':{'class':'text-danger'}}) }}

                            </div></center>
                    </div>

                    </div>
                    <div class=\"row mb-3\">
                        <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Price per day </label></center>
                     <center>  <div class=\"col-sm-10\">
                            {{ form_widget(form.prixJours,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.prixJours,{'attr':{'class':'text-danger'}}) }}

                        </div> </center>
                    </div>


                        <div class=\"row mb-3\">
                        <cenetr>  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label> </cenetr>
                            <center>     <div class=\"col-sm-10\">
                                {{ form_widget(form.picture,{'attr':{'class':'form-control'}}) }}

                            </div>
                      </center>
                        </div>

                    <div class=\"row mb-3\">
                     <center>   <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">Energy</label> </center>
                      <center> <div class=\"col-sm-10\">
                            {{ form_widget(form.energie,{'attr':{'class':'form-control'}}) }}
                            {{ form_errors(form.energie,{'attr':{'class':'text-danger'}}) }}

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
{% endblock %}", "voiture/UpdateV.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\UpdateV.html.twig");
    }
}
