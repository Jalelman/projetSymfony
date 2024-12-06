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

/* @EasyAdmin/crud/detail.html.twig */
class __TwigTemplate_7d28a17b0c24a473a0acba198db9746e extends Template
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
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'content_footer_wrapper' => [$this, 'block_content_footer_wrapper'],
            'main' => [$this, 'block_main'],
            'detail_fields' => [$this, 'block_detail_fields'],
            'detail_field' => [$this, 'block_detail_field'],
            'delete_form' => [$this, 'block_delete_form'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 3
        return $this->loadTemplate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "templatePath", ["layout"], "method", false, false, false, 3), "@EasyAdmin/crud/detail.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/detail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/detail.html.twig"));

        // line 5
        $context["__internal_ac121084180293bbb2fc580e63b064895ccdeb7edee760a5665eddf19085c43d"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 5, $this->source); })()), "i18n", [], "any", false, false, false, 5), "translationDomain", [], "any", false, false, false, 5);
        // line 3
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_id(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((("ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7)) . "-") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 7)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("ea-detail ea-detail-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8)), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 11
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 12
            $context["custom_page_title"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 12, $this->source); })()), "crud", [], "any", false, false, false, 12), "customPageTitle", [(isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 12, $this->source); })()), (((isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })())) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 12, $this->source); })()), "instance", [], "any", false, false, false, 12)) : (null))], "method", false, false, false, 12);
            // line 13
            yield "        ";
            yield (((null === (isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 13, $this->source); })()))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 14, $this->source); })()), "crud", [], "any", false, false, false, 14), "defaultPageTitle", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 14, $this->source); })()), "i18n", [], "any", false, false, false, 14), "translationParameters", [], "any", false, false, false, 14), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(            // line 15
(isset($context["custom_page_title"]) || array_key_exists("custom_page_title", $context) ? $context["custom_page_title"] : (function () { throw new RuntimeError('Variable "custom_page_title" does not exist.', 15, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 15, $this->source); })()), "i18n", [], "any", false, false, false, 15), "translationParameters", [], "any", false, false, false, 15),             // line 5
(isset($context["__internal_ac121084180293bbb2fc580e63b064895ccdeb7edee760a5665eddf19085c43d"]) || array_key_exists("__internal_ac121084180293bbb2fc580e63b064895ccdeb7edee760a5665eddf19085c43d", $context) ? $context["__internal_ac121084180293bbb2fc580e63b064895ccdeb7edee760a5665eddf19085c43d"] : (function () { throw new RuntimeError('Variable "__internal_ac121084180293bbb2fc580e63b064895ccdeb7edee760a5665eddf19085c43d" does not exist.', 5, $this->source); })()))));
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 11
        yield Twig\Extension\CoreExtension::spaceless($_v0);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 20
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 20, $this->source); })()), "actions", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 21
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 21), ["action" => $context["action"]], false);
            yield "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer_wrapper"));

        yield "";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 28
        yield "    ";
        yield from $this->unwrap()->yieldBlock('detail_fields', $context, $blocks);
        // line 52
        yield "
    ";
        // line 53
        yield from $this->unwrap()->yieldBlock('delete_form', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_fields(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_fields"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_fields"));

        // line 29
        yield "        ";
        $context["form_panel_is_already_open"] = false;
        // line 30
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 30, $this->source); })()), "fields", [], "any", false, false, false, 30));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 31
            yield "            ";
            $context["is_form_field_panel"] = CoreExtension::inFilter("field-form_panel", CoreExtension::getAttribute($this->env, $this->source, $context["field"], "cssClass", [], "any", false, false, false, 31));
            // line 32
            yield "
            ";
            // line 33
            if (((isset($context["is_form_field_panel"]) || array_key_exists("is_form_field_panel", $context) ? $context["is_form_field_panel"] : (function () { throw new RuntimeError('Variable "is_form_field_panel" does not exist.', 33, $this->source); })()) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 33) &&  !(isset($context["is_form_field_panel"]) || array_key_exists("is_form_field_panel", $context) ? $context["is_form_field_panel"] : (function () { throw new RuntimeError('Variable "is_form_field_panel" does not exist.', 33, $this->source); })())))) {
                // line 34
                yield "                ";
                if ((isset($context["form_panel_is_already_open"]) || array_key_exists("form_panel_is_already_open", $context) ? $context["form_panel_is_already_open"] : (function () { throw new RuntimeError('Variable "form_panel_is_already_open" does not exist.', 34, $this->source); })())) {
                    // line 35
                    yield "                    ";
                    yield $this->getTemplateForMacro("macro_close_form_field_panel", $context, 35, $this->getSourceContext())->macro_close_form_field_panel(...[]);
                    yield "
                    ";
                    // line 36
                    $context["form_panel_is_already_open"] = false;
                    // line 37
                    yield "                ";
                }
                // line 38
                yield "
                ";
                // line 39
                yield $this->getTemplateForMacro("macro_open_form_field_panel", $context, 39, $this->getSourceContext())->macro_open_form_field_panel(...[(((isset($context["is_form_field_panel"]) || array_key_exists("is_form_field_panel", $context) ? $context["is_form_field_panel"] : (function () { throw new RuntimeError('Variable "is_form_field_panel" does not exist.', 39, $this->source); })())) ? ($context["field"]) : (null))]);
                yield "
                ";
                // line 40
                $context["form_panel_is_already_open"] = true;
                // line 41
                yield "            ";
            }
            // line 42
            yield "
            ";
            // line 43
            yield from $this->unwrap()->yieldBlock('detail_field', $context, $blocks);
            // line 48
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        yield "
        ";
        // line 50
        yield $this->getTemplateForMacro("macro_close_form_field_panel", $context, 50, $this->getSourceContext())->macro_close_form_field_panel(...[]);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_detail_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "detail_field"));

        // line 44
        yield "                ";
        if ( !(isset($context["is_form_field_panel"]) || array_key_exists("is_form_field_panel", $context) ? $context["is_form_field_panel"] : (function () { throw new RuntimeError('Variable "is_form_field_panel" does not exist.', 44, $this->source); })())) {
            // line 45
            yield "                    ";
            yield $this->getTemplateForMacro("macro_render_field", $context, 45, $this->getSourceContext())->macro_render_field(...[(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 45, $this->source); })())]);
            yield "
                ";
        }
        // line 47
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delete_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 54
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 54, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 54)], false);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 58
    public function macro_open_form_field_panel($field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "open_form_field_panel"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "open_form_field_panel"));

            // line 59
            yield "    ";
            $context["panel_name"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 59, $this->source); })()))) ? (null) : (("content-" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 59, $this->source); })()), "uniqueId", [], "any", false, false, false, 59))));
            // line 60
            yield "    ";
            $context["collapsible"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 60, $this->source); })()))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 60, $this->source); })()), "customOption", ["collapsible"], "method", false, false, false, 60)));
            // line 61
            yield "    ";
            $context["collapsed"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 61, $this->source); })()))) ? (false) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 61, $this->source); })()), "customOption", ["collapsed"], "method", false, false, false, 61)));
            // line 62
            yield "    ";
            $context["panel_icon"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 62, $this->source); })()))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 62), "get", ["icon"], "method", true, true, false, 62)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "customOptions", [], "any", false, true, false, 62), "get", ["icon"], "method", false, false, false, 62), false)) : (false))));
            // line 63
            yield "    ";
            $context["panel_label"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 63, $this->source); })()))) ? (null) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 63, $this->source); })()), "label", [], "any", false, false, false, 63)));
            // line 64
            yield "    ";
            $context["panel_help"] = (((null === (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 64, $this->source); })()))) ? (null) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "help", [], "any", false, false, false, 64), false)) : (false))));
            // line 65
            yield "    ";
            $context["panel_has_header"] = ((((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 65, $this->source); })()) || (isset($context["panel_icon"]) || array_key_exists("panel_icon", $context) ? $context["panel_icon"] : (function () { throw new RuntimeError('Variable "panel_icon" does not exist.', 65, $this->source); })())) || (isset($context["panel_label"]) || array_key_exists("panel_label", $context) ? $context["panel_label"] : (function () { throw new RuntimeError('Variable "panel_label" does not exist.', 65, $this->source); })())) || (isset($context["panel_help"]) || array_key_exists("panel_help", $context) ? $context["panel_help"] : (function () { throw new RuntimeError('Variable "panel_help" does not exist.', 65, $this->source); })()));
            // line 66
            yield "
    <div class=\"";
            // line 67
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", true, true, false, 67) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 67)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["field"] ?? null), "cssClass", [], "any", false, false, false, 67), "html", null, true)) : (""));
            yield "\">
        <div class=\"form-panel\">
            ";
            // line 69
            if ((isset($context["panel_has_header"]) || array_key_exists("panel_has_header", $context) ? $context["panel_has_header"] : (function () { throw new RuntimeError('Variable "panel_has_header" does not exist.', 69, $this->source); })())) {
                // line 70
                yield "                <div class=\"form-panel-header ";
                yield (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 70, $this->source); })())) ? ("collapsible") : (""));
                yield " ";
                yield (( !Twig\Extension\CoreExtension::testEmpty((isset($context["panel_help"]) || array_key_exists("panel_help", $context) ? $context["panel_help"] : (function () { throw new RuntimeError('Variable "panel_help" does not exist.', 70, $this->source); })()))) ? ("with-help") : (""));
                yield "\">
                    <div class=\"form-panel-title\">
                        <a ";
                // line 72
                if ( !(isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 72, $this->source); })())) {
                    // line 73
                    yield "                            href=\"#\" class=\"not-collapsible\"
                        ";
                } else {
                    // line 75
                    yield "                            href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["panel_name"]) || array_key_exists("panel_name", $context) ? $context["panel_name"] : (function () { throw new RuntimeError('Variable "panel_name" does not exist.', 75, $this->source); })()), "html", null, true);
                    yield "\" data-bs-toggle=\"collapse\"
                            class=\"form-panel-collapse ";
                    // line 76
                    yield (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 76, $this->source); })())) ? ("collapsed") : (""));
                    yield "\"
                            aria-expanded=\"";
                    // line 77
                    yield (((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 77, $this->source); })())) ? ("false") : ("true"));
                    yield "\" aria-controls=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["panel_name"]) || array_key_exists("panel_name", $context) ? $context["panel_name"] : (function () { throw new RuntimeError('Variable "panel_name" does not exist.', 77, $this->source); })()), "html", null, true);
                    yield "\"
                        ";
                }
                // line 79
                yield "                        >
                            ";
                // line 80
                if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 80, $this->source); })())) {
                    // line 81
                    yield "                                <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                            ";
                }
                // line 83
                yield "
                            ";
                // line 84
                if ((isset($context["panel_icon"]) || array_key_exists("panel_icon", $context) ? $context["panel_icon"] : (function () { throw new RuntimeError('Variable "panel_icon" does not exist.', 84, $this->source); })())) {
                    // line 85
                    yield "                                <i class=\"form-panel-icon ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["panel_icon"]) || array_key_exists("panel_icon", $context) ? $context["panel_icon"] : (function () { throw new RuntimeError('Variable "panel_icon" does not exist.', 85, $this->source); })()), "html", null, true);
                    yield "\"></i>
                            ";
                }
                // line 87
                yield "                            ";
                yield (isset($context["panel_label"]) || array_key_exists("panel_label", $context) ? $context["panel_label"] : (function () { throw new RuntimeError('Variable "panel_label" does not exist.', 87, $this->source); })());
                yield "
                        </a>

                        ";
                // line 90
                if ((isset($context["panel_help"]) || array_key_exists("panel_help", $context) ? $context["panel_help"] : (function () { throw new RuntimeError('Variable "panel_help" does not exist.', 90, $this->source); })())) {
                    // line 91
                    yield "                            <div class=\"form-panel-help\">";
                    yield (isset($context["panel_help"]) || array_key_exists("panel_help", $context) ? $context["panel_help"] : (function () { throw new RuntimeError('Variable "panel_help" does not exist.', 91, $this->source); })());
                    yield "</div>
                        ";
                }
                // line 93
                yield "                    </div>
                </div>
            ";
            }
            // line 96
            yield "
            <div ";
            // line 97
            if ((isset($context["panel_name"]) || array_key_exists("panel_name", $context) ? $context["panel_name"] : (function () { throw new RuntimeError('Variable "panel_name" does not exist.', 97, $this->source); })())) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["panel_name"]) || array_key_exists("panel_name", $context) ? $context["panel_name"] : (function () { throw new RuntimeError('Variable "panel_name" does not exist.', 97, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-panel-body ";
            yield (((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new RuntimeError('Variable "collapsible" does not exist.', 97, $this->source); })())) ? ("collapse") : (""));
            yield " ";
            yield (( !(isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new RuntimeError('Variable "collapsed" does not exist.', 97, $this->source); })())) ? ("show") : (""));
            yield "\">
                <dl class=\"datalist\">
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 101
    public function macro_close_form_field_panel(...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "close_form_field_panel"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "close_form_field_panel"));

            // line 102
            yield "            </dl>
        </div>
    </div>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 108
    public function macro_render_field($entity = null, $field = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "entity" => $entity,
            "field" => $field,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_field"));

            // line 109
            yield "    <div class=\"data-row ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 109, $this->source); })()), "cssClass", [], "any", false, false, false, 109), "html", null, true);
            yield "\">
        <dt>
            ";
            // line 111
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 111, $this->source); })()), "label", [], "any", false, false, false, 111);
            yield "

            ";
            // line 113
            if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 113, $this->source); })()), "help", [], "any", false, false, false, 113))) {
                // line 114
                yield "                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 115, $this->source); })()), "help", [], "any", false, false, false, 115), "html_attr");
                yield "\"></i>
                </span>
            ";
            }
            // line 118
            yield "        </dt>
        <dd>
            ";
            // line 120
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 120, $this->source); })()), "templatePath", [], "any", false, false, false, 120), ["field" => (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 120, $this->source); })()), "entity" => (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 120, $this->source); })())], false);
            yield "
        </dd>
    </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@EasyAdmin/crud/detail.html.twig";
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
        return array (  629 => 120,  625 => 118,  619 => 115,  616 => 114,  614 => 113,  609 => 111,  603 => 109,  584 => 108,  568 => 102,  551 => 101,  528 => 97,  525 => 96,  520 => 93,  514 => 91,  512 => 90,  505 => 87,  499 => 85,  497 => 84,  494 => 83,  490 => 81,  488 => 80,  485 => 79,  478 => 77,  474 => 76,  469 => 75,  465 => 73,  463 => 72,  455 => 70,  453 => 69,  448 => 67,  445 => 66,  442 => 65,  439 => 64,  436 => 63,  433 => 62,  430 => 61,  427 => 60,  424 => 59,  406 => 58,  392 => 54,  379 => 53,  368 => 47,  362 => 45,  359 => 44,  346 => 43,  333 => 50,  330 => 49,  316 => 48,  314 => 43,  311 => 42,  308 => 41,  306 => 40,  302 => 39,  299 => 38,  296 => 37,  294 => 36,  289 => 35,  286 => 34,  284 => 33,  281 => 32,  278 => 31,  260 => 30,  257 => 29,  244 => 28,  233 => 53,  230 => 52,  227 => 28,  214 => 27,  191 => 25,  173 => 21,  168 => 20,  155 => 19,  144 => 11,  140 => 5,  139 => 15,  138 => 14,  136 => 13,  134 => 12,  132 => 11,  119 => 10,  96 => 8,  73 => 7,  63 => 3,  61 => 5,  48 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% extends ea.templatePath('layout') %}

{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id 'ea-detail-' ~ entity.name ~ '-' ~ entity.primaryKeyValue %}
{% block body_class 'ea-detail ea-detail-' ~ entity.name %}

{% block content_title %}
    {%- apply spaceless -%}
        {% set custom_page_title = ea.crud.customPageTitle(pageName, entity ? entity.instance : null) %}
        {{ custom_page_title is null
            ? (ea.crud.defaultPageTitle|trans(ea.i18n.translationParameters, 'EasyAdminBundle'))|raw
            : (custom_page_title|trans(ea.i18n.translationParameters))|raw }}
    {%- endapply -%}
{% endblock %}

{% block page_actions %}
    {% for action in entity.actions %}
        {{ include(action.templatePath, { action: action }, with_context = false) }}
    {% endfor %}
{% endblock %}

{% block content_footer_wrapper '' %}

{% block main %}
    {% block detail_fields %}
        {% set form_panel_is_already_open = false %}
        {% for field in entity.fields %}
            {% set is_form_field_panel = 'field-form_panel' in field.cssClass %}

            {% if is_form_field_panel or (loop.first and not is_form_field_panel) %}
                {% if form_panel_is_already_open %}
                    {{ _self.close_form_field_panel() }}
                    {% set form_panel_is_already_open = false %}
                {% endif %}

                {{ _self.open_form_field_panel(is_form_field_panel ? field : null) }}
                {% set form_panel_is_already_open = true %}
            {% endif %}

            {% block detail_field %}
                {% if not is_form_field_panel %}
                    {{ _self.render_field(entity, field) }}
                {% endif %}
            {% endblock %}
        {% endfor %}

        {{ _self.close_form_field_panel() }}
    {% endblock %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', { entity_id: entity.primaryKeyValue }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% macro open_form_field_panel(field = null) %}
    {% set panel_name = field is null ? null : 'content-' ~ field.uniqueId %}
    {% set collapsible = field is null ? false : field.customOption('collapsible') %}
    {% set collapsed = field is null ? false : field.customOption('collapsed') %}
    {% set panel_icon = field is null ? null : (field.customOptions.get('icon')|default(false)) %}
    {% set panel_label = field is null ? null : field.label %}
    {% set panel_help = field is null ? null : field.help|default(false)%}
    {% set panel_has_header = collapsible or panel_icon or panel_label or panel_help %}

    <div class=\"{{ field.cssClass ?? '' }}\">
        <div class=\"form-panel\">
            {% if panel_has_header %}
                <div class=\"form-panel-header {{ collapsible ? 'collapsible' }} {{ panel_help is not empty ? 'with-help' }}\">
                    <div class=\"form-panel-title\">
                        <a {% if not collapsible %}
                            href=\"#\" class=\"not-collapsible\"
                        {% else %}
                            href=\"#{{ panel_name }}\" data-bs-toggle=\"collapse\"
                            class=\"form-panel-collapse {{ collapsed ? 'collapsed' }}\"
                            aria-expanded=\"{{ collapsed ? 'false' : 'true' }}\" aria-controls=\"{{ panel_name }}\"
                        {% endif %}
                        >
                            {% if collapsible %}
                                <i class=\"fas fw fa-chevron-right form-panel-collapse-marker\"></i>
                            {% endif %}

                            {% if panel_icon %}
                                <i class=\"form-panel-icon {{ panel_icon }}\"></i>
                            {% endif %}
                            {{ panel_label|raw }}
                        </a>

                        {% if panel_help %}
                            <div class=\"form-panel-help\">{{ panel_help|raw }}</div>
                        {% endif %}
                    </div>
                </div>
            {% endif %}

            <div {% if panel_name %}id=\"{{ panel_name }}\"{% endif %} class=\"form-panel-body {{ collapsible ? 'collapse' }} {{ not collapsed ? 'show'}}\">
                <dl class=\"datalist\">
{% endmacro %}

{% macro close_form_field_panel() %}
            </dl>
        </div>
    </div>
</div>
{% endmacro %}

{% macro render_field(entity, field) %}
    <div class=\"data-row {{ field.cssClass }}\">
        <dt>
            {{ field.label|raw }}

            {% if field.help is not empty %}
                <span class=\"data-help\">
                    <i class=\"far fa-question-circle\" data-bs-toggle=\"tooltip\" title=\"{{ field.help|e('html_attr') }}\"></i>
                </span>
            {% endif %}
        </dt>
        <dd>
            {{ include(field.templatePath, { field: field, entity: entity }, with_context = false) }}
        </dd>
    </div>
{% endmacro %}
", "@EasyAdmin/crud/detail.html.twig", "C:\\laragon\\www\\ecommerce-symfony\\vendor\\easycorp\\easyadmin-bundle\\src\\Resources\\views\\crud\\detail.html.twig");
    }
}
