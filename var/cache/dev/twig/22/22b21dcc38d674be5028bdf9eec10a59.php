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

/* _carousel.html.twig */
class __TwigTemplate_9d3d5c2d6a64d0a574e20530d9e0489f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_carousel.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_carousel.html.twig"));

        // line 1
        yield "<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["header"]) {
            // line 4
            yield "            <li data-target=\"#myCarousel\" data-slide-to=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\" class=\"";
            yield ((($context["key"] == 0)) ? ("active") : (""));
            yield "\"></li>  
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['header'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        yield "    </ol>
    <div class=\"carousel-inner\">
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headers"]) || array_key_exists("headers", $context) ? $context["headers"] : (function () { throw new RuntimeError('Variable "headers" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["header"]) {
            // line 9
            yield "            <div class=\"carousel-item ";
            yield ((($context["key"] == 0)) ? ("active") : (""));
            yield "\" 
                style=\"background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), rgba(54, 54, 54, 0.4) 50%,  rgba(28, 28, 28, 0.3)),
                url(uploads/";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "image", [], "any", false, false, false, 11), "html", null, true);
            yield ") center center/ cover no-repeat;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h2>";
            // line 14
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "title", [], "any", false, false, false, 14), "html", null, true);
            yield "</h2>
                        <p>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "content", [], "any", false, false, false, 15), "html", null, true);
            yield "</p>
                        <p><a class=\"btn btn-lg btn-dark shadow\" href=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "btnUrl", [], "any", false, false, false, 16), "html", null, true);
            yield "\" role=\"button\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["header"], "btnTitle", [], "any", false, false, false, 16), "html", null, true);
            yield "</a></p>
                    </div>
                </div>
            </div>   
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['header'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "    </div>
    <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "_carousel.html.twig";
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
        return array (  108 => 21,  95 => 16,  91 => 15,  87 => 14,  81 => 11,  75 => 9,  71 => 8,  67 => 6,  56 => 4,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
    <ol class=\"carousel-indicators\">
        {% for key, header in headers %}
            <li data-target=\"#myCarousel\" data-slide-to=\"{{key}}\" class=\"{{key == 0 ? 'active' : ''}}\"></li>  
        {% endfor %}
    </ol>
    <div class=\"carousel-inner\">
        {% for key, header in headers %}
            <div class=\"carousel-item {{key == 0 ? 'active' : ''}}\" 
                style=\"background: linear-gradient(45deg, rgba(0, 0, 0, 0.8), rgba(54, 54, 54, 0.4) 50%,  rgba(28, 28, 28, 0.3)),
                url(uploads/{{header.image}}) center center/ cover no-repeat;\">
                <div class=\"container\">
                    <div class=\"carousel-caption text-left\">
                        <h2>{{header.title}}</h2>
                        <p>{{header.content}}</p>
                        <p><a class=\"btn btn-lg btn-dark shadow\" href=\"{{header.btnUrl}}\" role=\"button\">{{header.btnTitle}}</a></p>
                    </div>
                </div>
            </div>   
        {% endfor %}
    </div>
    <a class=\"carousel-control-prev\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
        <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Previous</span>
    </a>
    <a class=\"carousel-control-next\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
        <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
        <span class=\"sr-only\">Next</span>
    </a>
</div>", "_carousel.html.twig", "C:\\laragon\\www\\ecommerce-symfony\\templates\\_carousel.html.twig");
    }
}
