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

/* base.html.twig */
class __TwigTemplate_a5821875afc69b001cd366d5dde5d982 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'header' => [$this, 'block_header'],
            'sidebar' => [$this, 'block_sidebar'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Tripee</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">
    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 49
        echo "</head>


<body>
";
        // line 53
        $this->displayBlock('header', $context, $blocks);
        // line 95
        $this->displayBlock('sidebar', $context, $blocks);
        // line 186
        echo "
";
        // line 187
        $this->displayBlock('body', $context, $blocks);
        // line 189
        echo "
";
        // line 190
        $this->displayBlock('footer', $context, $blocks);
        // line 199
        echo "
</body>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "        <!-- Favicons -->
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" rel=\"icon\">
        <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

        <!-- Google Fonts -->
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/boxicons/css/boxicons.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/quill/quill.snow.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/quill/quill.bubble.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/remixicon/remixicon.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/simple-datatables/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 33
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 34
        echo "
        <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/apexcharts/apexcharts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/chart.js/chart.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/echarts/echarts.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/quill/quill.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/simple-datatables/simple-datatables.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/tinymce/tinymce.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/vendor/php-email-form/validate.js"), "html", null, true);
        echo "\"></script>


        <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
        <!-- Template Main JS File -->
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/js/main.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 53
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 54
        echo "    <script src=\"//code.tidio.co/vovec58zdlvywn2p4uymbpythelf47d8.js\" async></script>
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"\" class=\"logo d-flex align-items-center\">
                <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Back/assets/img/bg.png"), "html", null, true);
        echo "\" >
            </a>
        </div><!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"\" >
                        <span class=\"\">Logout</span>
                    </a><!-- End Profile Iamge Icon -->


                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 95
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 96
        echo "    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-grid\"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link\" >
                    <i class=\"fa-light fa-user\"></i><span>User management</span>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a class=\"nav-link \" href=\"\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Customers</span></i>

                        </a>
                    </li>
                    <li>
                        <a class=\"nav-link \" href=\"\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Landlords</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"nav-link \" href=\"\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Drivers</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav ---------------------------------------------------------->


            <li class=\"nav-item\">
                <a class=\"nav-link \">
                    <i class=\"bi bi-journal-text\" ></i><span>Car management</span>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a class=\"nav-link \" href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voitureaffiche");
        echo "\">
                            <i class=\"bi bi-bookmark\"></i>
                            <i class=\"bi bi-circle\"></i><span>Car</span></i>

                        </a>
                    </li>
                    <li>
                        <a class=\"nav-link \" href=\"";
        // line 152
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservationaffiche");
        echo "\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Booking list</span>
                        </a>
                    </li>

                </ul>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-bookmark\"></i>
                    <span>Gestion commandes</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-calendar-event\"></i>
                    <span>Gestion évènement </span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-archive\"></i>
                    <span>Gestion réclamation </span>
                </a>
            </li><!-- End Dashboard Nav -->
        </ul>

    </aside><!-- End Sidebar-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 187
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 190
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 191
        echo "    <!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>Tripee</span></strong>. All Rights Reserved
        </div>

    </footer><!-- End Footer -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  393 => 191,  386 => 190,  374 => 187,  333 => 152,  323 => 145,  272 => 96,  265 => 95,  223 => 60,  215 => 54,  208 => 53,  199 => 47,  191 => 42,  187 => 41,  183 => 40,  179 => 39,  175 => 38,  171 => 37,  167 => 36,  163 => 35,  160 => 34,  153 => 33,  144 => 30,  138 => 27,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  118 => 22,  114 => 21,  103 => 13,  100 => 12,  93 => 11,  85 => 199,  83 => 190,  80 => 189,  78 => 187,  75 => 186,  73 => 95,  71 => 53,  65 => 49,  63 => 33,  60 => 32,  58 => 11,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">

    <title>Tripee</title>
    <meta content=\"\" name=\"description\">
    <meta content=\"\" name=\"keywords\">
    {% block stylesheets %}
        <!-- Favicons -->
        <link href=\"{{ asset('assets/img/logo.png')}}\" rel=\"icon\">
        <link href=\"assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

        <!-- Google Fonts -->
        <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\">
        <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

        <!-- Vendor CSS Files -->
        <link href=\"{{ asset('Back/assets/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Back/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Back/assets/vendor/boxicons/css/boxicons.min.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Back/assets/vendor/quill/quill.snow.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Back/assets/vendor/quill/quill.bubble.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Back/assets/vendor/remixicon/remixicon.css') }}\" rel=\"stylesheet\">
        <link href=\"{{ asset('Back/assets/vendor/simple-datatables/style.css') }}\" rel=\"stylesheet\">

        <!-- Template Main CSS File -->
        <link href=\"{{ asset('Back/assets/css/style.css') }}\" rel=\"stylesheet\">
    {% endblock %}

    {% block javascripts %}

        <script src=\"{{ asset('Back/assets/vendor/apexcharts/apexcharts.min.js') }}\"></script>
        <script src=\"{{ asset('Back/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
        <script src=\"{{ asset('Back/assets/vendor/chart.js/chart.min.js') }}\"></script>
        <script src=\"{{ asset('Back/assets/vendor/echarts/echarts.min.js') }}\"></script>
        <script src=\"{{ asset('Back/assets/vendor/quill/quill.min.js') }}\"></script>
        <script src=\"{{ asset('Back/assets/vendor/simple-datatables/simple-datatables.js') }}\"></script>
        <script src=\"{{ asset('Back/assets/vendor/tinymce/tinymce.min.js') }}\"></script>
        <script src=\"{{ asset('Back/assets/vendor/php-email-form/validate.js') }}\"></script>


        <script src=\"https://cdn.jsdelivr.net/npm/fullcalendar@5.3.0/main.min.js\" integrity=\"sha256-DBxkGZLxKsLKhz054qUpBqtotG00r9AELGpSigJujLg=\" crossorigin=\"anonymous\"></script>
        <!-- Template Main JS File -->
        <script src=\"{{ asset('Back/assets/js/main.js') }}\"></script>
    {% endblock %}
</head>


<body>
{% block header %}
    <script src=\"//code.tidio.co/vovec58zdlvywn2p4uymbpythelf47d8.js\" async></script>
    <!-- ======= Header ======= -->
    <header id=\"header\" class=\"header fixed-top d-flex align-items-center\">

        <div class=\"d-flex align-items-center justify-content-between\">
            <a href=\"\" class=\"logo d-flex align-items-center\">
                <img src=\"{{ asset('Back/assets/img/bg.png') }}\" >
            </a>
        </div><!-- End Logo -->

        <div class=\"search-bar\">
            <form class=\"search-form d-flex align-items-center\" method=\"POST\" action=\"#\">
                <input type=\"text\" name=\"query\" placeholder=\"Search\" title=\"Enter search keyword\">
                <button type=\"submit\" title=\"Search\"><i class=\"bi bi-search\"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class=\"header-nav ms-auto\">
            <ul class=\"d-flex align-items-center\">

                <li class=\"nav-item d-block d-lg-none\">
                    <a class=\"nav-link nav-icon search-bar-toggle \" href=\"#\">
                        <i class=\"bi bi-search\"></i>
                    </a>
                </li><!-- End Search Icon-->


                <li class=\"nav-item dropdown pe-3\">

                    <a class=\"nav-link nav-profile d-flex align-items-center pe-0\" href=\"\" >
                        <span class=\"\">Logout</span>
                    </a><!-- End Profile Iamge Icon -->


                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->
{% endblock %}
{% block sidebar %}
    <!-- ======= Sidebar ======= -->
    <aside id=\"sidebar\" class=\"sidebar\">

        <ul class=\"sidebar-nav\" id=\"sidebar-nav\">

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-grid\"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link\" >
                    <i class=\"fa-light fa-user\"></i><span>User management</span>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a class=\"nav-link \" href=\"\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Customers</span></i>

                        </a>
                    </li>
                    <li>
                        <a class=\"nav-link \" href=\"\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Landlords</span>
                        </a>
                    </li>
                    <li>
                        <a class=\"nav-link \" href=\"\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Drivers</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Forms Nav ---------------------------------------------------------->


            <li class=\"nav-item\">
                <a class=\"nav-link \">
                    <i class=\"bi bi-journal-text\" ></i><span>Car management</span>
                </a>
                <ul id=\"forms-nav\" class=\"nav-content collapse show\" data-bs-parent=\"#sidebar-nav\">
                    <li>
                        <a class=\"nav-link \" href=\"{{ path('app_voitureaffiche') }}\">
                            <i class=\"bi bi-bookmark\"></i>
                            <i class=\"bi bi-circle\"></i><span>Car</span></i>

                        </a>
                    </li>
                    <li>
                        <a class=\"nav-link \" href=\"{{ path('app_reservationaffiche') }}\">
                            <i class=\"bi bi-bookmark\"></i>

                            <i class=\"bi bi-circle\"></i><span>Booking list</span>
                        </a>
                    </li>

                </ul>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-bookmark\"></i>
                    <span>Gestion commandes</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-calendar-event\"></i>
                    <span>Gestion évènement </span>
                </a>
            </li><!-- End Dashboard Nav -->
            <li class=\"nav-item\">
                <a class=\"nav-link \" href=\"index.html\">
                    <i class=\"bi bi-archive\"></i>
                    <span>Gestion réclamation </span>
                </a>
            </li><!-- End Dashboard Nav -->
        </ul>

    </aside><!-- End Sidebar-->
{% endblock %}

{% block body %}
{% endblock %}

{% block footer %}
    <!-- ======= Footer ======= -->
    <footer id=\"footer\" class=\"footer\">
        <div class=\"copyright\">
            &copy; Copyright <strong><span>Tripee</span></strong>. All Rights Reserved
        </div>

    </footer><!-- End Footer -->
{% endblock %}

</body>", "base.html.twig", "C:\\Users\\khmir\\Desktop\\Allocationweb1\\templates\\base.html.twig");
    }
}
