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
class __TwigTemplate_89ee98c13ca7507c4c8095f73ff97d08fa5caa836d8021526b54061e1146cdc2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "\t\t</title>
\t\t";
        // line 11
        echo "\t\t";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 38
        echo "
\t\t";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "\t</head>
\t<body>
\t\t  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-center  header-transparent \">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <h1><a href=\"#\">Habitat Sénégal</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">A prpopos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
          <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Portfolio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Catégories</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Standing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Logements</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
\t\t";
        // line 100
        $this->displayBlock('body', $context, $blocks);
        // line 101
        echo "\t\t<!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <h3>Simplon/Onfp</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class=\"social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
      <div class=\"copyright\">
        &copy; Copyright 2021 <strong><span>Simplon/onfp</span></strong>
      </div>
      <div class=\"credits\">
        
        <a href=\"#\">Projet/Symfony</a>
      </div>
    </div>
  </footer><!-- End Footer -->
\t</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!
\t\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "\t\t\t";
        // line 13
        echo "\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
\t\t\t<!-- Favicons -->
\t\t\t<link href=\"public/assets/img/favicon.png\" rel=\"icon\">
\t\t\t<link
\t\t\thref=\"public/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"public/assets/vendor/animate.css/animate.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"public/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"assets/css/style.css\" rel=\"stylesheet\">
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 40
        echo "\t\t\t";
        // line 41
        echo "\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script> 
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"public/assets/vendor/aos/aos.js\"></script>
\t\t\t<script src=\"public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"public/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t\t<script src=\"public/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
\t\t\t<script src=\"public/assets/vendor/php-email-form/validate.js\"></script>
\t\t\t<script src=\"public/assets/vendor/swiper/swiper-bundle.min.js\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"public/assets/js/main.js\"></script>
\t\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 100
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  250 => 100,  226 => 41,  224 => 40,  214 => 39,  180 => 13,  178 => 12,  168 => 11,  148 => 6,  115 => 101,  113 => 100,  67 => 56,  65 => 39,  62 => 38,  59 => 11,  56 => 8,  54 => 6,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<title>
\t\t\t{% block title %}Welcome!
\t\t\t{% endblock %}
\t\t</title>
\t\t{# Run `composer require symfony/webpack-encore-bundle`
\t\t\t\t           and uncomment the following Encore helpers to start using Symfony UX #}
\t\t{% block stylesheets %}
\t\t\t{#{{ encore_entry_link_tags('app') }}#}
\t\t\t<link
\t\t\thref=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
\t\t\t<!-- Favicons -->
\t\t\t<link href=\"public/assets/img/favicon.png\" rel=\"icon\">
\t\t\t<link
\t\t\thref=\"public/assets/img/apple-touch-icon.png\" rel=\"apple-touch-icon\">

\t\t\t<!-- Google Fonts -->
\t\t\t<link
\t\t\thref=\"https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i\" rel=\"stylesheet\">

\t\t\t<!-- Vendor CSS Files -->
\t\t\t<link href=\"public/assets/vendor/animate.css/animate.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/aos/aos.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/bootstrap-icons/bootstrap-icons.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/boxicons/css/boxicons.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/glightbox/css/glightbox.min.css\" rel=\"stylesheet\">
\t\t\t<link href=\"public/assets/vendor/remixicon/remixicon.css\" rel=\"stylesheet\">
\t\t\t<link
\t\t\thref=\"public/assets/vendor/swiper/swiper-bundle.min.css\" rel=\"stylesheet\">

\t\t\t<!-- Template Main CSS File -->
\t\t\t<link href=\"assets/css/style.css\" rel=\"stylesheet\">
\t\t{% endblock %}

\t\t{% block javascripts %}
\t\t\t{#{{ encore_entry_script_tags('app') }}#}
\t\t\t<script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\" integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
            <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
            <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script> 
\t\t\t<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"public/assets/vendor/aos/aos.js\"></script>
\t\t\t<script src=\"public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js\"></script>
\t\t\t<script src=\"public/assets/vendor/glightbox/js/glightbox.min.js\"></script>
\t\t\t<script src=\"public/assets/vendor/isotope-layout/isotope.pkgd.min.js\"></script>
\t\t\t<script src=\"public/assets/vendor/php-email-form/validate.js\"></script>
\t\t\t<script src=\"public/assets/vendor/swiper/swiper-bundle.min.js\"></script>

\t\t\t<!-- Template Main JS File -->
\t\t\t<script src=\"public/assets/js/main.js\"></script>
\t\t{% endblock %}
\t</head>
\t<body>
\t\t  <!-- ======= Header ======= -->
  <header id=\"header\" class=\"fixed-top d-flex align-items-center  header-transparent \">
    <div class=\"container d-flex align-items-center justify-content-between\">

      <div class=\"logo\">
        <h1><a href=\"#\">Habitat Sénégal</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href=\"index.html\"><img src=\"assets/img/logo.png\" alt=\"\" class=\"img-fluid\"></a>-->
      </div>

      <nav id=\"navbar\" class=\"navbar\">
        <ul>
          <li><a class=\"nav-link scrollto active\" href=\"#hero\">Home</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#about\">A prpopos</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#services\">Services</a></li>
          <li><a class=\"nav-link scrollto \" href=\"#portfolio\">Portfolio</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#pricing\">Catégories</a></li>
          <li><a class=\"nav-link scrollto\" href=\"#team\">Standing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Logements</span> <i class=\"bi bi-chevron-down\"></i></a>
            <ul>
              <li><a href=\"#\">Drop Down 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Drop Down</span> <i class=\"bi bi-chevron-right\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Drop Down 1</a></li>
                  <li><a href=\"#\">Deep Drop Down 2</a></li>
                  <li><a href=\"#\">Deep Drop Down 3</a></li>
                  <li><a href=\"#\">Deep Drop Down 4</a></li>
                  <li><a href=\"#\">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Drop Down 2</a></li>
              <li><a href=\"#\">Drop Down 3</a></li>
              <li><a href=\"#\">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class=\"nav-link scrollto\" href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"bi bi-list mobile-nav-toggle\"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
\t\t{% block body %}{% endblock %}
\t\t<!-- ======= Footer ======= -->
  <footer id=\"footer\">
    <div class=\"container\">
      <h3>Simplon/Onfp</h3>
      <p>Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni eligendi fuga maxime saepe commodi placeat.</p>
      <div class=\"social-links\">
        <a href=\"#\" class=\"twitter\"><i class=\"bx bxl-twitter\"></i></a>
        <a href=\"#\" class=\"facebook\"><i class=\"bx bxl-facebook\"></i></a>
        <a href=\"#\" class=\"instagram\"><i class=\"bx bxl-instagram\"></i></a>
        <a href=\"#\" class=\"google-plus\"><i class=\"bx bxl-skype\"></i></a>
        <a href=\"#\" class=\"linkedin\"><i class=\"bx bxl-linkedin\"></i></a>
      </div>
      <div class=\"copyright\">
        &copy; Copyright 2021 <strong><span>Simplon/onfp</span></strong>
      </div>
      <div class=\"credits\">
        
        <a href=\"#\">Projet/Symfony</a>
      </div>
    </div>
  </footer><!-- End Footer -->
\t</body>
</html>
", "base.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/lab_symfony/templates/base.html.twig");
    }
}
