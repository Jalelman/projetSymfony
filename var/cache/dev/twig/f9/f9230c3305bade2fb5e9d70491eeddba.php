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

/* home/about.html.twig */
class __TwigTemplate_b13dc8b17f68b4b463ee42eb1ae12c96 extends Template
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

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/about.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        yield "<h3>A propos de e-commerce</h3>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eaque harum aliquid repellendus exercitationem nihil in animi velit, dolores perferendis expedita! Dicta excepturi mollitia ullam laborum eligendi. Officiis, dolorum dolore.
    Quaerat illum commodi, ad, voluptatum ab alias veniam omnis minus dicta autem consequatur enim delectus similique amet! Aliquam distinctio maiores, vel cupiditate error architecto quidem itaque voluptates, totam consequuntur omnis.
    Quisquam id, ex accusamus iusto modi autem quis natus at non corporis, voluptate animi porro quam beatae repellendus alias vero. Delectus et aliquid atque? Rem hic unde minima vel odit?
    Distinctio suscipit, cupiditate quod ipsa quaerat reprehenderit perspiciatis modi voluptatum ea quis est magnam odio harum aut dignissimos ipsum maiores accusamus soluta eveniet corrupti debitis molestiae in aliquid. Quaerat, esse?
    Nesciunt ab optio aut! Nisi beatae dolor reprehenderit aspernatur magni, similique quas commodi soluta tenetur voluptates libero fugiat. Repellat culpa suscipit expedita fugit tempora nesciunt eveniet quaerat harum asperiores in.
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eaque harum aliquid repellendus exercitationem nihil in animi velit, dolores perferendis expedita! Dicta excepturi mollitia ullam laborum eligendi. Officiis, dolorum dolore.
    Quaerat illum commodi, ad, voluptatum ab alias veniam omnis minus dicta autem consequatur enim delectus similique amet! Aliquam distinctio maiores, vel cupiditate error architecto quidem itaque voluptates, totam consequuntur omnis.
    Quisquam id, ex accusamus iusto modi autem quis natus at non corporis, voluptate animi porro quam beatae repellendus alias vero. Delectus et aliquid atque? Rem hic unde minima vel odit?
    Distinctio suscipit, cupiditate quod ipsa quaerat reprehenderit perspiciatis modi voluptatum ea quis est magnam odio harum aut dignissimos ipsum maiores accusamus soluta eveniet corrupti debitis molestiae in aliquid. Quaerat, esse?
    Nesciunt ab optio aut! Nisi beatae dolor reprehenderit aspernatur magni, similique quas commodi soluta tenetur voluptates libero fugiat. Repellat culpa suscipit expedita fugit tempora nesciunt eveniet quaerat harum asperiores in.
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eaque harum aliquid repellendus exercitationem nihil in animi velit, dolores perferendis expedita! Dicta excepturi mollitia ullam laborum eligendi. Officiis, dolorum dolore.
    Quaerat illum commodi, ad, voluptatum ab alias veniam omnis minus dicta autem consequatur enim delectus similique amet! Aliquam distinctio maiores, vel cupiditate error architecto quidem itaque voluptates, totam consequuntur omnis.
    Quisquam id, ex accusamus iusto modi autem quis natus at non corporis, voluptate animi porro quam beatae repellendus alias vero. Delectus et aliquid atque? Rem hic unde minima vel odit?
    Distinctio suscipit, cupiditate quod ipsa quaerat reprehenderit perspiciatis modi voluptatum ea quis est magnam odio harum aut dignissimos ipsum maiores accusamus soluta eveniet corrupti debitis molestiae in aliquid. Quaerat, esse?
    Nesciunt ab optio aut! Nisi beatae dolor reprehenderit aspernatur magni, similique quas commodi soluta tenetur voluptates libero fugiat. Repellat culpa suscipit expedita fugit tempora nesciunt eveniet quaerat harum asperiores in.
</p>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "home/about.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<h3>A propos de e-commerce</h3>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eaque harum aliquid repellendus exercitationem nihil in animi velit, dolores perferendis expedita! Dicta excepturi mollitia ullam laborum eligendi. Officiis, dolorum dolore.
    Quaerat illum commodi, ad, voluptatum ab alias veniam omnis minus dicta autem consequatur enim delectus similique amet! Aliquam distinctio maiores, vel cupiditate error architecto quidem itaque voluptates, totam consequuntur omnis.
    Quisquam id, ex accusamus iusto modi autem quis natus at non corporis, voluptate animi porro quam beatae repellendus alias vero. Delectus et aliquid atque? Rem hic unde minima vel odit?
    Distinctio suscipit, cupiditate quod ipsa quaerat reprehenderit perspiciatis modi voluptatum ea quis est magnam odio harum aut dignissimos ipsum maiores accusamus soluta eveniet corrupti debitis molestiae in aliquid. Quaerat, esse?
    Nesciunt ab optio aut! Nisi beatae dolor reprehenderit aspernatur magni, similique quas commodi soluta tenetur voluptates libero fugiat. Repellat culpa suscipit expedita fugit tempora nesciunt eveniet quaerat harum asperiores in.
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eaque harum aliquid repellendus exercitationem nihil in animi velit, dolores perferendis expedita! Dicta excepturi mollitia ullam laborum eligendi. Officiis, dolorum dolore.
    Quaerat illum commodi, ad, voluptatum ab alias veniam omnis minus dicta autem consequatur enim delectus similique amet! Aliquam distinctio maiores, vel cupiditate error architecto quidem itaque voluptates, totam consequuntur omnis.
    Quisquam id, ex accusamus iusto modi autem quis natus at non corporis, voluptate animi porro quam beatae repellendus alias vero. Delectus et aliquid atque? Rem hic unde minima vel odit?
    Distinctio suscipit, cupiditate quod ipsa quaerat reprehenderit perspiciatis modi voluptatum ea quis est magnam odio harum aut dignissimos ipsum maiores accusamus soluta eveniet corrupti debitis molestiae in aliquid. Quaerat, esse?
    Nesciunt ab optio aut! Nisi beatae dolor reprehenderit aspernatur magni, similique quas commodi soluta tenetur voluptates libero fugiat. Repellat culpa suscipit expedita fugit tempora nesciunt eveniet quaerat harum asperiores in.
</p>
<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae eaque harum aliquid repellendus exercitationem nihil in animi velit, dolores perferendis expedita! Dicta excepturi mollitia ullam laborum eligendi. Officiis, dolorum dolore.
    Quaerat illum commodi, ad, voluptatum ab alias veniam omnis minus dicta autem consequatur enim delectus similique amet! Aliquam distinctio maiores, vel cupiditate error architecto quidem itaque voluptates, totam consequuntur omnis.
    Quisquam id, ex accusamus iusto modi autem quis natus at non corporis, voluptate animi porro quam beatae repellendus alias vero. Delectus et aliquid atque? Rem hic unde minima vel odit?
    Distinctio suscipit, cupiditate quod ipsa quaerat reprehenderit perspiciatis modi voluptatum ea quis est magnam odio harum aut dignissimos ipsum maiores accusamus soluta eveniet corrupti debitis molestiae in aliquid. Quaerat, esse?
    Nesciunt ab optio aut! Nisi beatae dolor reprehenderit aspernatur magni, similique quas commodi soluta tenetur voluptates libero fugiat. Repellat culpa suscipit expedita fugit tempora nesciunt eveniet quaerat harum asperiores in.
</p>
{% endblock %}", "home/about.html.twig", "C:\\laragon\\www\\ecommerce\\templates\\home\\about.html.twig");
    }
}
