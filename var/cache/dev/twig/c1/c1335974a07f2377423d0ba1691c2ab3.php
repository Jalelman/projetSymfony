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

/* account/orders.html.twig */
class __TwigTemplate_f9d644e75fb6b32caf480e8eace1c812 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "account/orders.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "account/orders.html.twig", 1);
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

        yield "Mes commandes - e-commerce'";
        
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
        yield "    <h2>Voir mes commandes</h2>
    ";
        // line 7
        if ((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 7, $this->source); })())) {
            // line 8
            yield "        <table class=\"table mt-4\">
            <thead>
                <tr>
                    <th scope=\"col\">Articles</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\">Passée le </th>
                    <th scope=\"col\">Référence</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 20, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 21
                yield "                    <tr>
                        <td>";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalQuantity", [], "any", false, false, false, 22), "html", null, true);
                yield "</td>
                        <td>";
                // line 23
                yield (((CoreExtension::getAttribute($this->env, $this->source,                 // line 24
$context["order"], "state", [], "any", false, false, false, 24) == 1)) ? ("Paiment accepté") : ((((CoreExtension::getAttribute($this->env, $this->source,                 // line 25
$context["order"], "state", [], "any", false, false, false, 25) == 2)) ? ("En préparation") : ("Expédiée"))));
                // line 26
                yield "</td>
                        <td>";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "carrierPrice", [], "any", false, false, false, 27) + CoreExtension::getAttribute($this->env, $this->source, $context["order"], "total", [], "any", false, false, false, 27)) / 100), 2, ",", "."), "html", null, true);
                yield " TND</td>
                        <td>";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 28), "d/m/Y"), "html", null, true);
                yield "</td>
                        <td><span class=\"badge badge-secondary\">";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 29), "html", null, true);
                yield "</span></td>
                        <td><a href=\"";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_order", ["reference" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "reference", [], "any", false, false, false, 30)]), "html", null, true);
                yield "\">Consulter commande</a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            yield "            </tbody>
        </table>
    ";
        } else {
            // line 36
            yield "        <p>Vous n'avez effectué aucune commande pour le moment.</p>        
    ";
        }
        // line 38
        yield "    <a title=\"Retour vers votre espace membres\"href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account");
        yield "\">Retourner à mon compte</a>
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
        return "account/orders.html.twig";
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
        return array (  167 => 38,  163 => 36,  158 => 33,  149 => 30,  145 => 29,  141 => 28,  137 => 27,  134 => 26,  132 => 25,  131 => 24,  130 => 23,  126 => 22,  123 => 21,  119 => 20,  105 => 8,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes commandes - e-commerce'{% endblock %}

{% block body %}
    <h2>Voir mes commandes</h2>
    {% if orders %}
        <table class=\"table mt-4\">
            <thead>
                <tr>
                    <th scope=\"col\">Articles</th>
                    <th scope=\"col\">Statut</th>
                    <th scope=\"col\">Total</th>
                    <th scope=\"col\">Passée le </th>
                    <th scope=\"col\">Référence</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                {% for order in orders %}
                    <tr>
                        <td>{{order.totalQuantity}}</td>
                        <td>{{
                            order.state == 1 ? 'Paiment accepté' :
                            order.state == 2 ? 'En préparation' : 'Expédiée'
                        }}</td>
                        <td>{{((order.carrierPrice + order.total) / 100)|number_format(2,',','.') }} TND</td>
                        <td>{{order.createdAt|date('d/m/Y')}}</td>
                        <td><span class=\"badge badge-secondary\">{{order.reference}}</span></td>
                        <td><a href=\"{{ path('account_order', {'reference' : order.reference}) }}\">Consulter commande</a></td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% else %}
        <p>Vous n'avez effectué aucune commande pour le moment.</p>        
    {% endif %}
    <a title=\"Retour vers votre espace membres\"href=\"{{ path('account') }}\">Retourner à mon compte</a>
{% endblock %}
", "account/orders.html.twig", "C:\\laragon\\www\\ecommerce-symfony\\templates\\account\\orders.html.twig");
    }
}
