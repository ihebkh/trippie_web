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

/* voiture/addV.html.twig */
class __TwigTemplate_f53f69b7da28c3055fc758893ec71e6f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/addV.html.twig"));

        $this->parent = $this->loadTemplate("indexlocateur.html.twig", "voiture/addV.html.twig", 1);
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
        echo "
    <main id=\"main\">


        <!-- ======= About Us Section ======= -->
        <section id=\"about\" class=\"about\">
            <div class=\"container\">








                <!-- ======= Contact Section ======= -->
                <section id=\"contact\" class=\"contact\">
                    <div class=\"container\">

                        <div class=\"section-title\" data-aos=\"fade-up\">
                            <h2>Add new Car</h2>
                        </div>

                        <div class=\"row\">

                            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"contact-about\">
                                    <h3>Vesperr</h3>
                                    <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                                    <div class=\"social-links\">
                                        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                                        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                                        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                                        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"info\">
                                    <div>
                                        <i class=\"ri-map-pin-line\"></i>
                                        <p>cité ghazela<br>Ariana, 2040</p>
                                    </div>

                                    <div>
                                        <i class=\"ri-mail-send-line\"></i>
                                        <p>khmiri.iheb@esprit.tn</p>
                                    </div>

                                    <div>
                                        <i class=\"ri-phone-line\"></i>
                                        <p>+216 25 104 011</p>
                                    </div>

                                </div>
                            </div>

                            <div class=\"col-lg-5 col-md-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        echo "

                            <label>Registration number :</label>
                                <div class=\"form-group\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "matricule", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                        <div class=\"text-danger\">";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "matricule", [], "any", false, false, false, 68), 'errors');
        echo "</div>


                                </div>
                                <label>Brand :</label>
                                <div class=\"form-group\">
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "marque", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"text-danger\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "marque", [], "any", false, false, false, 75), 'errors');
        echo "</div>


                                </div>
                                <label>Power :</label>
                                <div class=\"form-group\">
                                    ";
        // line 81
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "puissance", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"text-danger\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "puissance", [], "any", false, false, false, 82), 'errors');
        echo "</div>


                                </div>
                                <label>Price per day :</label>
                                <div class=\"form-group\">
                                    ";
        // line 88
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "prixJours", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"text-danger\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "prixJours", [], "any", false, false, false, 89), 'errors');
        echo "</div>


                                </div>
                                <label>Picture :</label>
                                <div class=\"form-group\">
                                    ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "picture", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"text-danger\">";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "picture", [], "any", false, false, false, 96), 'errors');
        echo "</div>


                                </div>
                                <label>Energy :</label>
                                <div class=\"form-group\">
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "energie", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    <div class=\"text-danger\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "energie", [], "any", false, false, false, 103), 'errors');
        echo "</div>


                                </div>
                                <br>
                                <center>


                                    <div class=\"row mb-3\">
                                        <div class=\"col-sm-10\">
                                            <button type=\"submit\" class=\"btn btn-primary\">Save</button>

                                        </div>
                                    </div>

                                </center>
                                ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), 'form_end');
        echo "

                            </div>

                        </div>

                    </div>
                </section><!-- End Contact Section -->


    </main><!-- End #main -->



    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>














";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/addV.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 119,  196 => 103,  192 => 102,  183 => 96,  179 => 95,  170 => 89,  166 => 88,  157 => 82,  153 => 81,  144 => 75,  140 => 74,  131 => 68,  127 => 67,  120 => 63,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexlocateur.html.twig' %}

{% block body %}

    <main id=\"main\">


        <!-- ======= About Us Section ======= -->
        <section id=\"about\" class=\"about\">
            <div class=\"container\">








                <!-- ======= Contact Section ======= -->
                <section id=\"contact\" class=\"contact\">
                    <div class=\"container\">

                        <div class=\"section-title\" data-aos=\"fade-up\">
                            <h2>Add new Car</h2>
                        </div>

                        <div class=\"row\">

                            <div class=\"col-lg-4 col-md-6\" data-aos=\"fade-up\" data-aos-delay=\"100\">
                                <div class=\"contact-about\">
                                    <h3>Vesperr</h3>
                                    <p>Cras fermentum odio eu feugiat. Justo eget magna fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                                    <div class=\"social-links\">
                                        <a href=\"#\" class=\"twitter\"><i class=\"bi bi-twitter\"></i></a>
                                        <a href=\"#\" class=\"facebook\"><i class=\"bi bi-facebook\"></i></a>
                                        <a href=\"#\" class=\"instagram\"><i class=\"bi bi-instagram\"></i></a>
                                        <a href=\"#\" class=\"linkedin\"><i class=\"bi bi-linkedin\"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\" data-aos=\"fade-up\" data-aos-delay=\"200\">
                                <div class=\"info\">
                                    <div>
                                        <i class=\"ri-map-pin-line\"></i>
                                        <p>cité ghazela<br>Ariana, 2040</p>
                                    </div>

                                    <div>
                                        <i class=\"ri-mail-send-line\"></i>
                                        <p>khmiri.iheb@esprit.tn</p>
                                    </div>

                                    <div>
                                        <i class=\"ri-phone-line\"></i>
                                        <p>+216 25 104 011</p>
                                    </div>

                                </div>
                            </div>

                            <div class=\"col-lg-5 col-md-12\" data-aos=\"fade-up\" data-aos-delay=\"300\">
                                {{ form_start(form,{attr:{novalidate:'novalidate'}}) }}

                            <label>Registration number :</label>
                                <div class=\"form-group\">
                                    {{ form_widget(form.matricule, {'attr': {'class': 'form-control'}}) }}
                                        <div class=\"text-danger\">{{ form_errors(form.matricule) }}</div>


                                </div>
                                <label>Brand :</label>
                                <div class=\"form-group\">
                                    {{ form_widget(form.marque, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(form.marque) }}</div>


                                </div>
                                <label>Power :</label>
                                <div class=\"form-group\">
                                    {{ form_widget(form.puissance, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(form.puissance) }}</div>


                                </div>
                                <label>Price per day :</label>
                                <div class=\"form-group\">
                                    {{ form_widget(form.prixJours, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(form.prixJours) }}</div>


                                </div>
                                <label>Picture :</label>
                                <div class=\"form-group\">
                                    {{ form_widget(form.picture, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(form.picture) }}</div>


                                </div>
                                <label>Energy :</label>
                                <div class=\"form-group\">
                                    {{ form_widget(form.energie, {'attr': {'class': 'form-control'}}) }}
                                    <div class=\"text-danger\">{{ form_errors(form.energie) }}</div>


                                </div>
                                <br>
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
                </section><!-- End Contact Section -->


    </main><!-- End #main -->



    <a href=\"#\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>














{% endblock %}", "voiture/addV.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\addV.html.twig");
    }
}
