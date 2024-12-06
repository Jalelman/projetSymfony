<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* _nav.html.twig */
class __TwigTemplate_89960859f0357e2112e17ed943aa06a9 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_nav.html.twig"));

        // line 1
        yield "<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <a class=\"navbar-brand\" href=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\">e-commerce</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        yield "\">Produits</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        yield "\">Qui sommes-nous ?</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        yield "\">Contact</a>
            </li>

        </ul>
        <ul class=\"navbar-nav\">
            ";
        // line 20
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20)) {
            // line 21
            yield "                <li class=\"nav-item active\">
                    <a class=\"nav-link fs-2\" href=\"";
            // line 22
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
            yield "\">Mon compte <small class=\"text-secondary\">(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "user", [], "any", false, false, false, 22), "firstname", [], "any", false, false, false, 22), "html", null, true);
            yield ")</small></a>
                </li>
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 26
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Déconnexion</a>
                </li>                
            ";
        } else {
            // line 29
            yield "                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 30
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            yield "\">Inscription</a>
                </li> 
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"";
            // line 34
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Connexion</a>
                </li>                   
            ";
        }
        // line 37
        yield "            <li class=\"nav-item active\">
                <a title=\"Panier\" class=\"nav-link\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart");
        yield "\"><i class=\"bi bi-cart3\"></i></a>
            </li>
        </ul>
    </div>
</nav>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_nav.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  120 => 38,  117 => 37,  111 => 34,  104 => 30,  101 => 29,  95 => 26,  86 => 22,  83 => 21,  81 => 20,  73 => 15,  67 => 12,  61 => 9,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"navbar navbar-expand-md navbar-dark fixed-top bg-dark\">
    <a class=\"navbar-brand\" href=\"{{ path('home') }}\">e-commerce</a>
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
        <ul class=\"navbar-nav mr-auto\">
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('product') }}\">Produits</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('about') }}\">Qui sommes-nous ?</a>
            </li>
            <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"{{ path('contact') }}\">Contact</a>
            </li>

        </ul>
        <ul class=\"navbar-nav\">
            {% if app.user %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link fs-2\" href=\"{{ path('account') }}\">Mon compte <small class=\"text-secondary\">({{ app.user.firstname}})</small></a>
                </li>
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_logout') }}\">Déconnexion</a>
                </li>                
            {% else %}
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('register') }}\">Inscription</a>
                </li> 
                
                <li class=\"nav-item active\">
                    <a class=\"nav-link\" href=\"{{ path('app_login') }}\">Connexion</a>
                </li>                   
            {% endif %}
            <li class=\"nav-item active\">
                <a title=\"Panier\" class=\"nav-link\" href=\"{{ path('cart') }}\"><i class=\"bi bi-cart3\"></i></a>
            </li>
        </ul>
    </div>
</nav>
", "_nav.html.twig", "C:\\laragon\\www\\ecommerce\\templates\\_nav.html.twig");
    }
}
