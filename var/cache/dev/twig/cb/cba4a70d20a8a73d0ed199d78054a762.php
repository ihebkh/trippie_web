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
class __TwigTemplate_700b1b8d29d179e59c11d28c20d14466 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "voiture/show2.html.twig"));

        // line 1
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "
    <main id=\"main\" class=\"main\">





        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">

                        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

                        ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", [0 => "noticedelete"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            echo "                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                ";
            // line 25
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                            </div>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                        <div class=\"card-body\">

                            <h5 class=\"card-title\">List Articles</h5>


                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th>registration number</th>
                                    <td>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 47, $this->source); })()), "matricule", [], "any", false, false, false, 47), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 51, $this->source); })()), "marque", [], "any", false, false, false, 51), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>power</th>
                                    <td>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 55, $this->source); })()), "puissance", [], "any", false, false, false, 55), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>price per day</th>
                                    <td>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 59, $this->source); })()), "prixJours", [], "any", false, false, false, 59), "html", null, true);
        echo "</td>
                                </tr>

                                <tr>
                                    <th>Picture</th>
                                    <td><img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 64, $this->source); })()), "picture", [], "any", false, false, false, 64))), "html", null, true);
        echo "\" style=\"max-height: 80px\"></td>
                                </tr>
                                <tr>
                                    <th>Energy</th>
                                    <td>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 68, $this->source); })()), "energie", [], "any", false, false, false, 68), "html", null, true);
        echo "</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 72, $this->source); })()), "etat", [], "any", false, false, false, 72), "html", null, true);
        echo "</td>
                                </tr>
                           <tr>
                               <th><center>      <a href=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("updateVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        echo "\">
                                           <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>          </center></th>
                               <td><center>

                                       <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this car ?')){window.location='";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_DeleteVoiture", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["voiture"]) || array_key_exists("voiture", $context) ? $context["voiture"] : (function () { throw new RuntimeError('Variable "voiture" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        echo "';}\">

                                           <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                       </a>


                                   </center></td>
                           </tr>


                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

                        </div>

                    </div>



                </div>


            </div>
        </section>

    </main>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "voiture/show2.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  183 => 79,  176 => 75,  170 => 72,  163 => 68,  156 => 64,  148 => 59,  141 => 55,  134 => 51,  127 => 47,  107 => 29,  97 => 25,  94 => 24,  90 => 23,  86 => 21,  76 => 17,  73 => 16,  69 => 15,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block body %}

    <main id=\"main\" class=\"main\">





        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">

                        {% for message in app.flashes('notice') %}
                            <div class=\"alert alert-success bg-success text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                            </div>

                        {% endfor %}


                        {% for message in app.flashes('noticedelete') %}
                            <div class=\"alert alert-danger bg-danger text-light border-0 alert-dismissible fade show\" role=\"alert\">
                                {{ message }}
                            </div>

                        {% endfor %}

                        <div class=\"card-body\">

                            <h5 class=\"card-title\">List Articles</h5>


                            <!-- Default Table -->
                            <table class=\"table\">
                                <thead>
                                <tr>


                                </tr>
                                </thead>
                                <tbody>

                                <tr>
                                    <th>registration number</th>
                                    <td>{{ voiture.matricule }}</td>
                                </tr>
                                <tr>
                                    <th>Brand</th>
                                    <td>{{ voiture.marque }}</td>
                                </tr>
                                <tr>
                                    <th>power</th>
                                    <td>{{ voiture.puissance }}</td>
                                </tr>
                                <tr>
                                    <th>price per day</th>
                                    <td>{{ voiture.prixJours }}</td>
                                </tr>

                                <tr>
                                    <th>Picture</th>
                                    <td><img src=\"{{ asset('uploads/' ~ voiture.picture) }}\" style=\"max-height: 80px\"></td>
                                </tr>
                                <tr>
                                    <th>Energy</th>
                                    <td>{{ voiture.energie }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>{{ voiture.etat }}</td>
                                </tr>
                           <tr>
                               <th><center>      <a href=\"{{ path('updateVoiture',{id:voiture.id}) }}\">
                                           <button type=\"button\" class=\"btn btn-outline-success\">Update</button></a>          </center></th>
                               <td><center>

                                       <a href=\"javascript:void(0)\" onclick=\"if(confirm('are you sure to delete this car ?')){window.location='{{ path('app_DeleteVoiture', {'id': voiture.id }) }}';}\">

                                           <button type=\"button\" class=\"btn btn-outline-danger\">Delete</button>
                                       </a>


                                   </center></td>
                           </tr>


                                </tbody>
                            </table>
                            <!-- End Default Table Example -->

                        </div>

                    </div>



                </div>


            </div>
        </section>

    </main>

{% endblock %}
", "voiture/show2.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\voiture\\show2.html.twig");
    }
}
