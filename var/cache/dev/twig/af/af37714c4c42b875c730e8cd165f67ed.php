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

/* voiture/updateV.html.twig */
class __TwigTemplate_15fdd005283694223606b97fb6349aef extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/updateV.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "voiture/updateV.html.twig", 1);
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

        <div class=\"pagetitle\">
            <h1>Formualire Modifier Article</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Forms</li>
                    <li class=\"breadcrumb-item active\">Produits</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class=\"row\">
            <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 0px; padding: 10px;\">

                <div class=\"card\">

                    <div class=\"card-body\">
                        <h5 class=\"card-title\">car update</h5>

                        <!-- General Form Elements -->
                        ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "
                        <div class=\"row mb-3\">

                       <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Registration number </label></center>
                        <center>  <div class=\"col-sm-10\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "matricule", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "matricule", [], "any", false, false, false, 34), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "



                        </center>
                        </div>
                        <div class=\"row mb-3\">
                            <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Brand </label></center>
                         <center>   <div class=\"col-sm-10\">
                                ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "marque", [], "any", false, false, false, 43), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "marque", [], "any", false, false, false, 44), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "


                            </div>
                         </center>
                        </div>
                    <div class=\"row mb-3\">
                        <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Power </label></center>

                      <center>    <div class=\"col-sm-10\">
                                ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "puissance", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "puissance", [], "any", false, false, false, 55), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                            </div></center>
                    </div>

                    </div>
                    <div class=\"row mb-3\">
                        <center>     <label for=\"inputText\" class=\"col-sm-4 col-form-label\">Price per day </label></center>
                     <center>  <div class=\"col-sm-10\">
                            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "prixJours", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "prixJours", [], "any", false, false, false, 65), 'errors', ["attr" => ["class" => "text-danger"]]);
        echo "

                        </div> </center>
                    </div>


                        <div class=\"row mb-3\">
                        <cenetr>  <label for=\"inputNumber\" class=\"col-sm-4 col-form-label\">File Upload</label> </cenetr>
                            <center>     <div class=\"col-sm-10\">
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "picture", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "

                            </div>
                      </center>
                        </div>

                    <div class=\"row mb-3\">
                     <center>   <label for=\"inputPassword\" class=\"col-sm-4 col-form-label\">Energy</label> </center>
                      <center> <div class=\"col-sm-10\">
                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "energie", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "energie", [], "any", false, false, false, 84), 'errors', ["attr" => ["class" => "text-danger"]]);
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
        // line 103
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'form_end');
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
        return "voiture/updateV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 103,  173 => 84,  169 => 83,  157 => 74,  145 => 65,  141 => 64,  129 => 55,  125 => 54,  112 => 44,  108 => 43,  96 => 34,  92 => 33,  84 => 28,  59 => 5,  52 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Formualire Modifier Article</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Forms</li>
                    <li class=\"breadcrumb-item active\">Produits</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <div class=\"row\">
            <div  style=\"display: flex;align-items: center;justify-content: center;margin-top: 0px; padding: 10px;\">

                <div class=\"card\">

                    <div class=\"card-body\">
                        <h5 class=\"card-title\">car update</h5>

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
{% endblock %}", "voiture/updateV.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\UpdateV.html.twig");
    }
}
