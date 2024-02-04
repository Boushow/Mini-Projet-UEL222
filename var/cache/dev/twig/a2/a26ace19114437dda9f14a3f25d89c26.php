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
class __TwigTemplate_bd40b069c6bfecabf93fab04610a5810 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link href=\"../assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lexend:wght@200&display=swap\" rel=\"stylesheet\">
    </head>
    <style>body{font-family: 'Lexend', sans-serif;}</style>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-secondary p-3 mb-4\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_index");
        echo "\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_show", ["id" => 1]);
        echo "\">Détails de l’article 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_edit", ["id" => 1]);
        echo "\">Edition de l’article 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_new");
        echo "\">Ajout d’un article</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_index");
        echo "\">Listing des catégories</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_show", ["id" => 1]);
        echo "\">Détails de la catégorie 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_edit", ["id" => 1]);
        echo "\">Edition de la catégorie 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("category_new");
        echo "\">Ajout d’une catégorie</a></li>
                </ul>
            </div>
        </nav>
        ";
        // line 31
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 33
        echo "        <script type=\"text/javascript\" src=\"../assets/js/bootstrap.min.js\"></script>
    </body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 31
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 32
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  181 => 32,  163 => 31,  145 => 6,  126 => 5,  114 => 33,  111 => 32,  109 => 31,  102 => 27,  98 => 26,  94 => 25,  90 => 24,  86 => 23,  82 => 22,  78 => 21,  74 => 20,  59 => 7,  57 => 6,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link href=\"../assets/css/bootstrap.min.css\" rel=\"stylesheet\">
        <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
        <link href=\"https://fonts.googleapis.com/css2?family=Lexend:wght@200&display=swap\" rel=\"stylesheet\">
    </head>
    <style>body{font-family: 'Lexend', sans-serif;}</style>
    <body>
        <nav class=\"navbar navbar-expand-lg navbar-light bg-secondary p-3 mb-4\">
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('article_index') }}\">Accueil</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('article_show', {'id': 1}) }}\">Détails de l’article 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('article_edit', {'id': 1}) }}\">Edition de l’article 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('article_new') }}\">Ajout d’un article</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('category_index') }}\">Listing des catégories</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('category_show', {'id': 1}) }}\">Détails de la catégorie 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('category_edit', {'id': 1}) }}\">Edition de la catégorie 1</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link text-light\" href=\"{{ path('category_new') }}\">Ajout d’une catégorie</a></li>
                </ul>
            </div>
        </nav>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <script type=\"text/javascript\" src=\"../assets/js/bootstrap.min.js\"></script>
    </body>
</html>", "base.html.twig", "C:\\wamp64\\www\\Mini-Projet-UEL222-main\\templates\\base.html.twig");
    }
}
