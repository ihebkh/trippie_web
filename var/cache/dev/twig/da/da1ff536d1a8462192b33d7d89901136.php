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

/* indexClient.html.twig */
class __TwigTemplate_16d60cf248d7b6963d1368bf3eda87d4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'javascript' => [$this, 'block_javascript'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "indexClient.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Trippie</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"assets/img/favicon.png\" rel=\"icon\">
    <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
          rel=\"stylesheet\">
    ";
        // line 19
        $this->displayBlock('css', $context, $blocks);
        // line 29
        echo "
    ";
        // line 30
        $this->displayBlock('javascript', $context, $blocks);
        // line 40
        echo "</head>

<body>
";
        // line 43
        $this->displayBlock('header', $context, $blocks);
        // line 81
        echo "

";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "
</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 19
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 20
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/aos/aos.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 31
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/aos/aos.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/isotope-layout/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Front/assets/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 43
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 44
        echo "    <script src=\"//code.tidio.co/vovec58zdlvywn2p4uymbpythelf47d8.js\" async></script>
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
        <div class=\"container d-flex align-items-center justify-content-between\">

            <div class=\"d-flex align-items-center justify-content-between\">
                <a href=\"\" class=\"logo d-flex align-items-center\">
                    <img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/img/bg.png"), "html", null, true);
        echo "\">
                </a>
            </div><!-- End Logo -->

            <nav id=\"navbar\" class=\"navbar\">
                <ul>
                    <li><a class=\"nav-link scrollto \" href=\"#hero\">Home</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
                    <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Portfolio</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>car mangement</span> <i class=\"bi bi-chevron-down\"></i></a>
                        <ul>
                            <li><a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voitureaffichClient");
        echo "\">cars list</a></li>
                            <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationaffichefront");
        echo "\">Reservation list</a></li>

                        </ul>
                    </li>
                    <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
                    <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 84
        echo "


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "indexClient.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 84,  243 => 83,  221 => 66,  217 => 65,  200 => 51,  191 => 44,  184 => 43,  175 => 38,  171 => 37,  167 => 36,  163 => 35,  159 => 34,  155 => 33,  151 => 32,  146 => 31,  139 => 30,  130 => 27,  126 => 26,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  101 => 20,  94 => 19,  84 => 88,  82 => 83,  78 => 81,  76 => 43,  71 => 40,  69 => 30,  66 => 29,  64 => 19,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Trippie</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">

    <!-- Favicons -->
    <link href=\"assets/img/favicon.png\" rel=\"icon\">
    <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

    <!-- Google Fonts -->
    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\"
          rel=\"stylesheet\">
    {% block css %}
        <link href=\"{{ asset('Front/assets/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/assets/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/assets/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Front/assets/css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascript %}
    <script src=\"{{ asset('Front/assets/vendor/purecounter/purecounter_vanilla.js') }}\"></script>
    <script src=\"{{ asset('Front/assets/vendor/aos/aos.js') }}\"></script>
    <script src=\"{{ asset('Front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
    <script src=\"{{ asset('Front/assets/vendor/glightbox/js/glightbox.min.js') }}\"></script>
    <script src=\"{{ asset('Front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}\"></script>
    <script src=\"{{ asset('Front/assets/vendor/swiper/swiper-bundle.min.js') }}\"></script>
    <script src=\"{{ asset('Front/assets/vendor/php-email-form/validate.js') }}\"></script>
    <script src=\"{{ asset('Front/assets/js/main.js') }}\"></script>
    {% endblock %}
</head>

<body>
{% block header %}
    <script src=\"//code.tidio.co/vovec58zdlvywn2p4uymbpythelf47d8.js\" async></script>
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"fixed-top d-flex align-items-center\">
        <div class=\"container d-flex align-items-center justify-content-between\">

            <div class=\"d-flex align-items-center justify-content-between\">
                <a href=\"\" class=\"logo d-flex align-items-center\">
                    <img src=\"{{ asset('Back/assets/img/bg.png') }}\">
                </a>
            </div><!-- End Logo -->

            <nav id=\"navbar\" class=\"navbar\">
                <ul>
                    <li><a class=\"nav-link scrollto \" href=\"#hero\">Home</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#about\">About</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
                    <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Portfolio</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#team\">Team</a></li>
                    <li><a class=\"nav-link scrollto\" href=\"#pricing\">Pricing</a></li>
                    <li class=\"dropdown\"><a href=\"#\"><span>car mangement</span> <i class=\"bi bi-chevron-down\"></i></a>
                        <ul>
                            <li><a href=\"{{ path('app_voitureaffichClient') }}\">cars list</a></li>
                            <li><a href=\"{{ path('app_reservationaffichefront') }}\">Reservation list</a></li>

                        </ul>
                    </li>
                    <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
                    <li><a class=\"getstarted scrollto\" href=\"#about\">Get Started</a></li>
                </ul>
                <i class=\"bi bi-list mobile-nav-toggle\"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->


{% endblock %}


{% block body %}



{% endblock %}

</body>

</html>", "indexClient.html.twig", "C:\\Users\\khmir\\Downloads\\trippie_web-Allocation\\trippie_web-Allocation\\templates\\indexClient.html.twig");
    }
}
