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

/* voiture/Affichereserve.html.twig */
class __TwigTemplate_72608ef2448ad5f626736b616dc6d316 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/Affichereserve.html.twig"));

        $this->parent = $this->loadTemplate("indexlocateur.html.twig", "voiture/Affichereserve.html.twig", 1);
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

        <!-- ======= Portfolio Section ======= -->
        <section id=\"portfolio\" class=\"portfolio\">
            <div class=\"container\">
                <br>
                <br>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addVoiture");
        echo "\">
                    <button type=\"button\" style=\"float: right;padding: 10px;\" class=\"btn btn-outline-info\">Add new car</button>

                </a>
                <br>


                <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 20, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["v"]) {
            // line 21
            echo "                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, $context["v"], "picture", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["v"], "marque", [], "any", false, false, false, 25), "html", null, true);
            echo "</h4>

                                <div class=\"portfolio-links\">
                                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_locateurvoiture_show", ["id" => twig_get_attribute($this->env, $this->source, $context["v"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                               </div>
                        </div>
                    </div>
                    ";
            // line 33
            if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 33) % 3) == 0)) {
                // line 34
                echo "                </div>
                <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    ";
            }
            // line 37
            echo "                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <a href=\"\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/Affichereserve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 38,  127 => 37,  122 => 34,  120 => 33,  112 => 28,  106 => 25,  101 => 23,  97 => 21,  80 => 20,  69 => 12,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'indexlocateur.html.twig' %}

{% block body %}

    <main id=\"main\">

        <!-- ======= Portfolio Section ======= -->
        <section id=\"portfolio\" class=\"portfolio\">
            <div class=\"container\">
                <br>
                <br>
                <a href=\"{{ path('addVoiture') }}\">
                    <button type=\"button\" style=\"float: right;padding: 10px;\" class=\"btn btn-outline-info\">Add new car</button>

                </a>
                <br>


                <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    {% for v in voiture %}
                    <div class=\"col-lg-4 col-md-6 portfolio-item filter-app\">
                        <div class=\"portfolio-wrap\">
                            <img src=\"{{ asset('uploads/' ~ v.picture) }}\" class=\"img-fluid\" alt=\"\">
                            <div class=\"portfolio-info\">
                                <h4>{{ v.marque }}</h4>

                                <div class=\"portfolio-links\">
                                    <a href=\"{{ path('app_locateurvoiture_show',{id:v.id}) }}\" title=\"More Details\"><i class=\"bx bx-link\"></i></a>
                                </div>
                               </div>
                        </div>
                    </div>
                    {% if loop.index % 3 == 0 %}
                </div>
                <div class=\"row portfolio-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">
                    {% endif %}
                    {% endfor %}
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->

    <a href=\"\" class=\"back-to-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>

{% endblock %}
", "voiture/Affichereserve.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\Affichereserve.html.twig");
    }
}
