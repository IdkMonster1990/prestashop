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

/* @PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig */
class __TwigTemplate_b3b59e1fe1d45c9acda9261e335bdab4 extends Template
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
            'pageBreadcrumb' => [$this, 'block_pageBreadcrumb'],
            'pageTitle' => [$this, 'block_pageTitle'],
            'toolbarBox' => [$this, 'block_toolbarBox'],
            'pageSubTitle' => [$this, 'block_pageSubTitle'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig"));

        // line 5
        yield "<div class=\"bootstrap\">
  <div class=\"page-head ";
        // line 6
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 6, $this->source); })()), "currentTabLevel", [], "any", false, false, false, 6) >= 3)) {
            yield "with-tabs";
        }
        yield "\">
    <div class=\"wrapper clearfix\">
      ";
        // line 8
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 29
        yield "
      ";
        // line 30
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 43
        yield "
      ";
        // line 44
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 91
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 98
        yield "  </div>

    ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 100, $this->source); })()), "currentTabLevel", [], "any", false, false, false, 100) >= 3)) {
            // line 101
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav\">
        ";
            // line 103
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 103, $this->source); })()), "navigationTabs", [], "any", false, false, false, 103));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 104
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 104), "active", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 105
                    yield "          <li>
            <a
              href=\"";
                    // line 107
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 107), "html", null, true);
                    yield "\"
              id=\"subtab-";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 108), "class_name", [], "any", false, false, false, 108), "html", null, true);
                    yield "\"
              ";
                    // line 109
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 109), "current", [], "any", false, false, false, 109)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "class=\"current\"";
                    }
                    // line 110
                    yield "              data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 110), "id_tab", [], "any", false, false, false, 110), "html", null, true);
                    yield "\">
              ";
                    // line 111
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 111), "html", null, true);
                    yield "
              <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
            </a>
          </li>
          ";
                }
                // line 118
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            yield "      </ul>
    </div>
    ";
        }
        // line 122
        yield "  </div>
  ";
        // line 123
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageBreadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageBreadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageBreadcrumb"));

        // line 9
        yield "      <ul class=\"breadcrumb page-breadcrumb\">
        ";
        // line 11
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 11), "container", [], "any", true, true, false, 11) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 11, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 11), "container", [], "any", false, false, false, 11), "name", [], "any", false, false, false, 11) != ""))) {
            // line 12
            yield "        <li class=\"breadcrumb-container\">
          ";
            // line 13
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "icon", [], "any", false, false, false, 13))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "icon", [], "any", false, false, false, 13), "html", null, true);
                yield "</i>";
            }
            // line 14
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 14), "container", [], "any", false, false, false, 14), "name", [], "any", false, false, false, 14));
            yield "
        </li>
        ";
        }
        // line 17
        yield "
        ";
        // line 19
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 19), "tab", [], "any", true, true, false, 19) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 19), "tab", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19) != ""))) {
            // line 20
            yield "        <li class=\"breadcrumb-current\">
          ";
            // line 21
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 21), "tab", [], "any", false, false, false, 21), "icon", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 21), "tab", [], "any", false, false, false, 21), "icon", [], "any", false, false, false, 21), "html", null, true);
                yield "</i>";
            }
            // line 22
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "href", [], "any", false, false, false, 22) != "")) {
                yield "<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "href", [], "any", false, false, false, 22));
                yield "\">";
            }
            // line 23
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 23), "tab", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23));
            yield "
          ";
            // line 24
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 24, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 24), "tab", [], "any", false, false, false, 24), "href", [], "any", false, false, false, 24) != "")) {
                yield "</a>";
            }
            // line 25
            yield "        </li>
        ";
        }
        // line 27
        yield "      </ul>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageTitle"));

        // line 31
        yield "      <h1 class=\"page-title\">
        ";
        // line 32
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 32), "back", [], "any", true, true, false, 32)) {
            // line 33
            yield "          ";
            $context["backButton"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 33, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 33), "back", [], "any", false, false, false, 33);
            // line 34
            yield "          <a id=\"page-header-desc-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "table", [], "any", false, false, false, 34), "html", null, true);
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "imgclass", [], "any", true, true, false, 34)) {
                yield "-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 34, $this->source); })()), "imgclass", [], "any", false, false, false, 34), "html", null, true);
            }
            yield "\"
             class=\"page-header-toolbar-back";
            // line 35
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "target", [], "any", true, true, false, 35) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 35, $this->source); })()), "target", [], "any", false, false, false, 35)))) {
                yield " _blank";
            }
            yield "\"
             ";
            // line 36
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "href", [], "any", true, true, false, 36)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 36, $this->source); })()), "href", [], "any", false, false, false, 36));
                yield "\"";
            }
            // line 37
            yield "             title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 37, $this->source); })()), "desc", [], "any", false, false, false, 37), "html", null, true);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["backButton"] ?? null), "js", [], "any", true, true, false, 37) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 37, $this->source); })()), "js", [], "any", false, false, false, 37)))) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["backButton"]) || array_key_exists("backButton", $context) ? $context["backButton"] : (function () { throw new RuntimeError('Variable "backButton" does not exist.', 37, $this->source); })()), "js", [], "any", false, false, false, 37), "html", null, true);
                yield "\"";
            }
            yield ">
          </a>
        ";
        }
        // line 40
        yield "        ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 40, $this->source); })()), "title", [], "any", false, false, false, 40));
        yield "
      </h1>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbarBox(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbarBox"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbarBox"));

        // line 45
        yield "      <div class=\"page-bar toolbarBox\">
        <div class=\"btn-toolbar\">
          <a href=\"#\" class=\"toolbar_btn dropdown-toolbar navbar-toggle\" data-toggle=\"collapse\"
             data-target=\"#toolbar-nav\"><i class=\"process-icon-dropdown\"></i>
            <div>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Menu", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "</div>
          </a>
          <ul id=\"toolbar-nav\" class=\"nav nav-pills pull-right collapse navbar-collapse\">
            ";
        // line 52
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 53, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 53));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 54
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 55
                yield "                <li>
                  <a
                    id=\"page-header-desc-";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 57, $this->source); })()), "table", [], "any", false, false, false, 57), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 57)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 57));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                    class=\"toolbar_btn";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 58) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 58))) {
                    yield " _blank";
                }
                yield " pointer\"
                    ";
                // line 59
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 59)) {
                    // line 60
                    yield "                      href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 60));
                    yield "\"
                    ";
                }
                // line 62
                yield "                    title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 62)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 62), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 62));
                }
                yield "\"
                    ";
                // line 63
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 63) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 63))) {
                    // line 64
                    yield "                      data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 64), "html", null, true);
                    yield "\"
                      data-toggle=\"modal\"
                    ";
                }
                // line 67
                yield "                    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 67)) {
                    // line 68
                    yield "                      data-toggle=\"pstooltip\"
                      data-placement=\"bottom\"
                    ";
                }
                // line 71
                yield "                    data-role=\"page-header-desc-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 71, $this->source); })()), "table", [], "any", false, false, false, 71), "html", null, true);
                yield "-link\"
                  >
                    <i class=\"";
                // line 73
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 73) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 73)))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 73));
                } else {
                    yield "process-icon-";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 73)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 73));
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                    }
                }
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 73)) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 73));
                }
                yield "\"></i>
                    <div";
                // line 74
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", true, true, false, 74) && (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "force_desc", [], "any", false, false, false, 74) == true))) {
                    yield " class=\"locked\"";
                }
                yield ">
                      ";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 75));
                yield "
                    </div>
                  </a>
                </li>
              ";
            }
            // line 80
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "
            <li>
              <a class=\"toolbar_btn btn-help\" href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 83, $this->source); })()), "helpLink", [], "any", false, false, false, 83), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "\">
                <div>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
        yield "</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_pageSubTitle(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageSubTitle"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "pageSubTitle"));

        // line 92
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 92, $this->source); })()), "subTitle", [], "any", false, false, false, 92))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 94, $this->source); })()), "subTitle", [], "any", false, false, false, 94), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 97
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig";
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
        return array (  491 => 97,  485 => 94,  482 => 93,  479 => 92,  466 => 91,  448 => 84,  442 => 83,  438 => 81,  432 => 80,  424 => 75,  418 => 74,  401 => 73,  395 => 71,  390 => 68,  387 => 67,  380 => 64,  378 => 63,  369 => 62,  363 => 60,  361 => 59,  355 => 58,  345 => 57,  341 => 55,  338 => 54,  334 => 53,  330 => 52,  324 => 49,  318 => 45,  305 => 44,  290 => 40,  277 => 37,  271 => 36,  265 => 35,  256 => 34,  253 => 33,  251 => 32,  248 => 31,  235 => 30,  223 => 27,  219 => 25,  215 => 24,  210 => 23,  203 => 22,  197 => 21,  194 => 20,  191 => 19,  188 => 17,  181 => 14,  175 => 13,  172 => 12,  169 => 11,  166 => 9,  153 => 8,  139 => 123,  136 => 122,  131 => 119,  125 => 118,  115 => 111,  110 => 110,  106 => 109,  102 => 108,  98 => 107,  94 => 105,  91 => 104,  87 => 103,  83 => 101,  81 => 100,  77 => 98,  74 => 91,  72 => 44,  69 => 43,  67 => 30,  64 => 29,  62 => 8,  55 => 6,  52 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"bootstrap\">
  <div class=\"page-head {% if this.currentTabLevel >= 3 %}with-tabs{% endif %}\">
    <div class=\"wrapper clearfix\">
      {% block pageBreadcrumb %}
      <ul class=\"breadcrumb page-breadcrumb\">
        {# Container #}
        {% if this.breadcrumbs.container is defined and this.breadcrumbs.container.name != \x27\x27 %}
        <li class=\"breadcrumb-container\">
          {% if this.breadcrumbs.container.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.container.icon }}</i>{% endif %}
          {{ this.breadcrumbs.container.name|escape }}
        </li>
        {% endif %}

        {# Current Tab #}
        {% if this.breadcrumbs.tab is defined and this.breadcrumbs.tab.name != \x27\x27 %}
        <li class=\"breadcrumb-current\">
          {% if this.breadcrumbs.tab.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.tab.icon }}</i>{% endif %}
          {% if this.breadcrumbs.tab.href != \x27\x27 %}<a href=\"{{ this.breadcrumbs.tab.href|escape }}\">{% endif %}
            {{ this.breadcrumbs.tab.name|escape }}
          {% if this.breadcrumbs.tab.href != \x27\x27 %}</a>{% endif %}
        </li>
        {% endif %}
      </ul>
      {% endblock %}

      {% block pageTitle %}
      <h1 class=\"page-title\">
        {% if this.layoutHeaderToolbarBtn.back is defined %}
          {% set backButton = this.layoutHeaderToolbarBtn.back %}
          <a id=\"page-header-desc-{{ this.table }}{% if backButton.imgclass is defined %}-{{ backButton.imgclass }}{% endif %}\"
             class=\"page-header-toolbar-back{% if backButton.target is defined and backButton.target is not empty %} _blank{% endif %}\"
             {% if backButton.href is defined %}href=\"{{ backButton.href|escape }}\"{% endif %}
             title=\"{{ backButton.desc }}\"{% if backButton.js is defined and backButton.js is not empty %} onclick=\"{{ backButton.js }}\"{% endif %}>
          </a>
        {% endif %}
        {{ this.title|e }}
      </h1>
      {% endblock %}

      {% block toolbarBox %}
      <div class=\"page-bar toolbarBox\">
        <div class=\"btn-toolbar\">
          <a href=\"#\" class=\"toolbar_btn dropdown-toolbar navbar-toggle\" data-toggle=\"collapse\"
             data-target=\"#toolbar-nav\"><i class=\"process-icon-dropdown\"></i>
            <div>{{ \x27Menu\x27|trans({}, \x27Admin.Navigation.Menu\x27) }}</div>
          </a>
          <ul id=\"toolbar-nav\" class=\"nav nav-pills pull-right collapse navbar-collapse\">
            {{ renderhook(\x27displayDashboardToolbarTopMenu\x27) }}
            {% for k, btn in this.layoutHeaderToolbarBtn %}
              {% if k != \x27back\x27 and k != \x27modules-list\x27 %}
                <li>
                  <a
                    id=\"page-header-desc-{{ this.table }}-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}\"
                    class=\"toolbar_btn{% if btn.target is defined and btn.target %} _blank{% endif %} pointer\"
                    {% if btn.href is defined %}
                      href=\"{{ btn.href|escape }}\"
                    {% endif %}
                    title=\"{% if btn.help is defined %}{{ btn.help }}{% else %}{{ btn.desc|escape }}{% endif %}\"
                    {% if btn.modal_target is defined and btn.modal_target %}
                      data-target=\"{{ btn.modal_target }}\"
                      data-toggle=\"modal\"
                    {% endif %}
                    {% if btn.help is defined %}
                      data-toggle=\"pstooltip\"
                      data-placement=\"bottom\"
                    {% endif %}
                    data-role=\"page-header-desc-{{ this.table }}-link\"
                  >
                    <i class=\"{% if btn.icon is defined and btn.icon is not empty %}{{ btn.icon|escape }}{% else %}process-icon-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}{% endif %}{% if btn.class is defined %} {{ btn.class|escape }}{% endif %}\"></i>
                    <div{% if btn.force_desc is defined and btn.force_desc == true %} class=\"locked\"{% endif %}>
                      {{ btn.desc|escape }}
                    </div>
                  </a>
                </li>
              {% endif %}
            {% endfor %}

            <li>
              <a class=\"toolbar_btn btn-help\" href=\"{{ this.helpLink }}\" title=\"{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}\">
                <div>{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}</div>
              </a>
            </li>
          </ul>
        </div>
      </div>
      {% endblock %}
      {% block pageSubTitle %}
        {% if this.subTitle is not empty %}
          <h4 class=\"page-subtitle\">
            {{ this.subTitle }}
          </h4>
        {% endif %}
      {% endblock %}
  </div>

    {% if this.currentTabLevel >= 3 %}
    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav\">
        {% for tab in this.navigationTabs %}
          {% if tab.attributes.active %}
          <li>
            <a
              href=\"{{ tab.href }}\"
              id=\"subtab-{{ tab.attributes.class_name }}\"
              {% if tab.attributes.current %}class=\"current\"{% endif %}
              data-submenu=\"{{ tab.attributes.id_tab }}\">
              {{ tab.name }}
              <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
            </a>
          </li>
          {% endif %}
        {% endfor %}
      </ul>
    </div>
    {% endif %}
  </div>
  {{ renderhook(\x27displayDashboardTop\x27) }}
</div>
", "@PrestaShop/Admin/Component/LegacyLayout/toolbar.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\toolbar.html.twig");
    }
}
