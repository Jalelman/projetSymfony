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

/* cart/index.html.twig */
class __TwigTemplate_91e6fc98329adedeadeb6a134af2d154 extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mon panier";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<h3>Mon Panier</h3>
";
        // line 7
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 7, $this->source); })()) > 0)) {
            // line 8
            yield "    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart");
            yield "\" title=\"Supprimer tous les articles\" class=\"btn btn-outline-danger btn-sm float-right\">
        <i class=\"bi bi-x\"></i> 
        Réinitialiser mon panier
    </a>
";
        }
        // line 13
        yield "
<p>Voici les articles que vous avez ajoutés</p>

<table class=\"table mt-5\">
    <thead>
        <tr>
            <th scope=\"col\">Article</th>
            <th scope=\"col\">Prix (unitaire)</th>
            <th class=\"text-center\" scope=\"col\">Quantité</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            yield "        <tr>
            <td class=\"align-middle\">
                <img height=\"60px\" src=\"/uploads/";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            yield "\">
                ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
            yield "
            </td>
            <td class=\"align-middle\">";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 33), "price", [], "any", false, false, false, 33) / 100), 2, ",", "."), "html", null, true);
            yield " TND</td>
            <td class=\"text-center align-middle\">
                <a title=\"Enlever 1 article\" href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decrease_item", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\"><i class=\"bi bi-dash\"></i></a>
                ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 36), "html", null, true);
            yield " 
                <a title=\"Ajouter 1 article\" href=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_to_cart", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\"><i class=\"bi bi-plus\"></i></a>
            </td>
            <td class=\"align-middle\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 39) * (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 39), "price", [], "any", false, false, false, 39) / 100)), 2, ",", "."), "html", null, true);
            yield " TND</td>
            <td class=\"align-middle\"><a title=\"Supprimer tous les articles de cette ligne\" href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_cart_item", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"text-danger\"href=\"\"><i class=\"bi bi-trash\"></i></a></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "    </tbody>
    <tfoot>
        <th>Total</th>
        <td></td>
        <td class=\"text-center\">  <small>x</small> ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 47, $this->source); })()), "html", null, true);
        yield "</td>
        <th>";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((isset($context["totalPrice"]) || array_key_exists("totalPrice", $context) ? $context["totalPrice"] : (function () { throw new RuntimeError('Variable "totalPrice" does not exist.', 48, $this->source); })()) / 100), 2, ",", "."), "html", null, true);
        yield " TND</th>
    </tfoot>
</table>
<a class=\"mb-3 d-block\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
        yield "\">Continuez mes achats</a>
";
        // line 52
        if (((isset($context["totalQuantity"]) || array_key_exists("totalQuantity", $context) ? $context["totalQuantity"] : (function () { throw new RuntimeError('Variable "totalQuantity" does not exist.', 52, $this->source); })()) > 0)) {
            // line 53
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("order");
            yield "\"title=\"Valider puis passer au paiement\" class=\"btn btn-outline-success btn-block\"></i> Valider mon panier</a>
";
        } else {
            // line 55
            yield "        Votre panier est vide, remplissez le depuis la page <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product");
            yield "\">produits</a>.
";
        }
        // line 57
        yield "

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
        return "cart/index.html.twig";
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
        return array (  214 => 57,  208 => 55,  202 => 53,  200 => 52,  196 => 51,  190 => 48,  186 => 47,  180 => 43,  171 => 40,  167 => 39,  162 => 37,  158 => 36,  154 => 35,  149 => 33,  144 => 31,  138 => 30,  134 => 28,  130 => 27,  114 => 13,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon panier{% endblock %}

{% block body %}
<h3>Mon Panier</h3>
{% if totalQuantity > 0 %}
    <a href=\"{{ path('remove_cart') }}\" title=\"Supprimer tous les articles\" class=\"btn btn-outline-danger btn-sm float-right\">
        <i class=\"bi bi-x\"></i> 
        Réinitialiser mon panier
    </a>
{% endif %}

<p>Voici les articles que vous avez ajoutés</p>

<table class=\"table mt-5\">
    <thead>
        <tr>
            <th scope=\"col\">Article</th>
            <th scope=\"col\">Prix (unitaire)</th>
            <th class=\"text-center\" scope=\"col\">Quantité</th>
            <th scope=\"col\">Total</th>
            <th scope=\"col\"></th>
        </tr>
    </thead>
    <tbody>
    {% for item in cart %}
        <tr>
            <td class=\"align-middle\">
                <img height=\"60px\" src=\"/uploads/{{ item.product.image }}\" alt=\"{{ item.product.name }}\">
                {{item.product.name}}
            </td>
            <td class=\"align-middle\">{{(item.product.price / 100)|number_format(2,',','.') }} TND</td>
            <td class=\"text-center align-middle\">
                <a title=\"Enlever 1 article\" href=\"{{ path('decrease_item', {id:item.product.id}) }}\"><i class=\"bi bi-dash\"></i></a>
                {{ item.quantity }} 
                <a title=\"Ajouter 1 article\" href=\"{{ path('add_to_cart', {id:item.product.id}) }}\"><i class=\"bi bi-plus\"></i></a>
            </td>
            <td class=\"align-middle\">{{ (item.quantity * (item.product.price / 100))|number_format(2,',','.') }} TND</td>
            <td class=\"align-middle\"><a title=\"Supprimer tous les articles de cette ligne\" href=\"{{ path('remove_cart_item', {id: item.product.id}) }}\" class=\"text-danger\"href=\"\"><i class=\"bi bi-trash\"></i></a></td>
        </tr>
    {% endfor %}
    </tbody>
    <tfoot>
        <th>Total</th>
        <td></td>
        <td class=\"text-center\">  <small>x</small> {{ totalQuantity }}</td>
        <th>{{ (totalPrice / 100)|number_format(2,',','.') }} TND</th>
    </tfoot>
</table>
<a class=\"mb-3 d-block\" href=\"{{ path('product') }}\">Continuez mes achats</a>
{% if totalQuantity > 0 %}
        <a href=\"{{ path('order')}}\"title=\"Valider puis passer au paiement\" class=\"btn btn-outline-success btn-block\"></i> Valider mon panier</a>
{% else %}
        Votre panier est vide, remplissez le depuis la page <a href=\"{{ path('product') }}\">produits</a>.
{% endif %}


{% endblock %}
", "cart/index.html.twig", "C:\\laragon\\www\\ecommerce-symfony\\templates\\cart\\index.html.twig");
    }
}
