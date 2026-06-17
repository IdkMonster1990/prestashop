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

/* @PrestaShop/Admin/Component/Layout/toolbar.html.twig */
class __TwigTemplate_a16da6382e4f9db4244259a6e4b2a595 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig"));

        // line 5
        yield "<div class=\"header-toolbar d-print-none\">
  ";
        // line 6
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MultistoreHeader");
        yield "
  <div class=\"container-fluid\">

    ";
        // line 9
        yield from $this->unwrap()->yieldBlock('pageBreadcrumb', $context, $blocks);
        // line 30
        yield "
    ";
        // line 31
        $context["persistent_help_btn"] = ((array_key_exists("help_link", $context) &&  !((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 31, $this->source); })()) === false)) && Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 31)));
        // line 32
        yield "    <div class=\"title-row ";
        if ((($tmp = (isset($context["persistent_help_btn"]) || array_key_exists("persistent_help_btn", $context) ? $context["persistent_help_btn"] : (function () { throw new RuntimeError('Variable "persistent_help_btn" does not exist.', 32, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "flex-nowrap flex-md-wrap";
        }
        yield "\">
      ";
        // line 33
        yield from $this->unwrap()->yieldBlock('pageTitle', $context, $blocks);
        // line 38
        yield "      ";
        yield from $this->unwrap()->yieldBlock('toolbarBox', $context, $blocks);
        // line 118
        yield "      ";
        yield from $this->unwrap()->yieldBlock('pageSubTitle', $context, $blocks);
        // line 125
        yield "    </div>
  </div>

  ";
        // line 128
        if ((array_key_exists("headerTabContent", $context) && (isset($context["headerTabContent"]) || array_key_exists("headerTabContent", $context) ? $context["headerTabContent"] : (function () { throw new RuntimeError('Variable "headerTabContent" does not exist.', 128, $this->source); })()))) {
            // line 129
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      ";
            // line 130
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["headerTabContent"]) || array_key_exists("headerTabContent", $context) ? $context["headerTabContent"] : (function () { throw new RuntimeError('Variable "headerTabContent" does not exist.', 130, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["tabContent"]) {
                // line 131
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["tabContent"], "html", null, true);
                yield "
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tabContent'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 133
            yield "    </div>
  ";
        }
        // line 135
        yield "
  ";
        // line 136
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 136, $this->source); })()), "currentTabLevel", [], "any", false, false, false, 136) >= 3)) {
            // line 137
            yield "    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 139, $this->source); })()), "navigationTabs", [], "any", false, false, false, 139));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                // line 140
                yield "          ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 140), "active", [], "any", false, false, false, 140)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 141
                    yield "            <li class=\"nav-item\">
              <a href=\"";
                    // line 142
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "href", [], "any", false, false, false, 142), "html", null, true);
                    yield "\" id=\"subtab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 142), "class_name", [], "any", false, false, false, 142), "html", null, true);
                    yield "\"
                 class=\"nav-link tab ";
                    // line 143
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 143), "current", [], "any", false, false, false, 143)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "active current";
                    }
                    yield "\"
                 data-submenu=\"";
                    // line 144
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "attributes", [], "any", false, false, false, 144), "id_tab", [], "any", false, false, false, 144), "html", null, true);
                    yield "\">
                ";
                    // line 145
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tab"], "name", [], "any", false, false, false, 145), "html", null, true);
                    yield "
                <span class=\"notification-container\">
                <span class=\"notification-counter\"></span>
              </span>
              </a>
            </li>
          ";
                }
                // line 152
                yield "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['tab'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 153
            yield "      </ul>
    </div>
  ";
        }
        // line 156
        yield "
  ";
        // line 157
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", true, true, false, 157) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 157, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 157)))) {
            // line 158
            yield "    <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\"
              aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          ";
            // line 165
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
            yield "

          ";
            // line 167
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 167, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 167));
            foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
                // line 168
                yield "            ";
                if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                    // line 169
                    yield "              <a
                class=\"btn btn-floating-item ";
                    // line 170
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", true, true, false, 170) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 170))) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "floating_class", [], "any", false, false, false, 170));
                    }
                    yield " ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 170) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 170))) {
                        yield " _blank";
                    }
                    yield " pointer\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 170)) {
                        // line 171
                        yield "                id=\"page-header-desc-floating-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 171, $this->source); })()), "configuration")) : ("configuration")), "html", null, true);
                        yield "-";
                        if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 171)) {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 171));
                        } else {
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                        }
                        yield "\"
              href=\"";
                        // line 172
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 172));
                        yield "\"";
                    }
                    // line 173
                    yield "                title=\"";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 173)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 173), "html", null, true);
                    } else {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 173));
                    }
                    yield "\"";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 173) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 173))) {
                        // line 174
                        yield "              onclick=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 174), "html", null, true);
                        yield "\"";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 174) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 174))) {
                        // line 175
                        yield "                data-target=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 175), "html", null, true);
                        yield "\"
                data-toggle=\"modal\"";
                    }
                    // line 176
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 176)) {
                        // line 177
                        yield "                data-toggle=\"pstooltip\"
                data-placement=\"bottom\"";
                    }
                    // line 179
                    yield "              >
                ";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 180));
                    yield "
                ";
                    // line 181
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 181) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 181)))) {
                        yield "<i class=\"material-icons\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 181), "html", null, true);
                        yield "</i>";
                    }
                    // line 182
                    yield "              </a>
            ";
                }
                // line 184
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            yield "
          ";
            // line 186
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 186, $this->source); })()), "helpLink", [], "any", false, false, false, 186))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 187
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 187, $this->source); })()), "sidebarEnabled", [], "any", false, false, false, 187)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 188
                    yield "              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"";
                    // line 189
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 192, $this->source); })()), "helpLink", [], "any", false, false, false, 192));
                    yield "\"
              >
                ";
                    // line 194
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                } else {
                    // line 197
                    yield "              <a class=\"btn btn-floating-item btn-help\" href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 197, $this->source); })()), "helpLink", [], "any", false, false, false, 197));
                    yield "\"
                 title=\"";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "\">
                ";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                    yield "
              </a>
            ";
                }
                // line 202
                yield "          ";
            }
            // line 203
            yield "        </div>
      </div>
    </div>
  ";
        }
        // line 207
        yield "  ";
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardTop");
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "      ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 10), "container", [], "any", true, true, false, 10) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 10), "tab", [], "any", true, true, false, 10))) {
            // line 11
            yield "        <nav aria-label=\"Breadcrumb\">
          <ol class=\"breadcrumb\">
            ";
            // line 13
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 13), "container", [], "any", true, true, false, 13) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 13), "container", [], "any", false, false, false, 13), "name", [], "any", false, false, false, 13) != ""))) {
                // line 14
                yield "              <li class=\"breadcrumb-item\">
                ";
                // line 15
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 15, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 15), "container", [], "any", false, false, false, 15), "icon", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 15, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 15), "container", [], "any", false, false, false, 15), "icon", [], "any", false, false, false, 15), "html", null, true);
                    yield "</i>";
                }
                // line 16
                yield "                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 16), "container", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16));
                yield "
              </li>
            ";
            }
            // line 19
            yield "
            ";
            // line 20
            if (((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 20), "container", [], "any", true, true, false, 20) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "breadcrumbs", [], "any", false, true, false, 20), "tab", [], "any", true, true, false, 20)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 20), "tab", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20) != "")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 20), "container", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 20), "tab", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 20), "tab", [], "any", false, false, false, 20), "href", [], "any", false, false, false, 20) != ""))) {
                // line 21
                yield "              <li class=\"breadcrumb-item active\">
                ";
                // line 22
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "icon", [], "any", false, false, false, 22))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 22), "tab", [], "any", false, false, false, 22), "icon", [], "any", false, false, false, 22), "html", null, true);
                    yield "</i>";
                }
                // line 23
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 23), "tab", [], "any", false, false, false, 23), "href", [], "any", false, false, false, 23));
                yield "\" aria-current=\"page\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "breadcrumbs", [], "any", false, false, false, 23), "tab", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23));
                yield "</a>
              </li>
            ";
            }
            // line 26
            yield "          </ol>
        </nav>
      ";
        }
        // line 29
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
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

        // line 34
        yield "          <h1 class=\"title\">
            ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35));
        yield "
          </h1>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "        <div class=\"toolbar-icons";
        if ((($tmp = (isset($context["persistent_help_btn"]) || array_key_exists("persistent_help_btn", $context) ? $context["persistent_help_btn"] : (function () { throw new RuntimeError('Variable "persistent_help_btn" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " toolbar-icons--persistent";
        }
        yield "\">
          <div class=\"wrapper\">
            ";
        // line 41
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayDashboardToolbarTopMenu");
        yield "
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["k"] => $context["btn"]) {
            // line 43
            yield "              ";
            if ((($context["k"] != "back") && ($context["k"] != "modules-list"))) {
                // line 44
                yield "                ";
                // line 45
                yield "                <a
                  id=\"page-header-desc-";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 46, $this->source); })()), "configuration")) : ("configuration")), "html", null, true);
                yield "-";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", true, true, false, 46)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "imgclass", [], "any", false, false, false, 46));
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                }
                yield "\"
                  class=\"btn ";
                // line 47
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", true, true, false, 47) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 47))) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "class", [], "any", false, false, false, 47));
                } else {
                    yield "btn-primary";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", true, true, false, 47) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "target", [], "any", false, false, false, 47))) {
                    yield " _blank";
                }
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", true, true, false, 47) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "disabled", [], "any", false, false, false, 47))) {
                    yield " disabled auto-pointer-events";
                }
                yield " pointer\"
                  ";
                // line 48
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", true, true, false, 48)) {
                    // line 49
                    yield "                    href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "href", [], "any", false, false, false, 49));
                    yield "\"
                  ";
                }
                // line 51
                yield "                  title=\"";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 51)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", false, false, false, 51), "html", null, true);
                } else {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 51));
                }
                yield "\"
                  ";
                // line 52
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", true, true, false, 52) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 52))) {
                    yield "onclick=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "js", [], "any", false, false, false, 52), "html", null, true);
                    yield "\" ";
                }
                // line 53
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", true, true, false, 53) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 53))) {
                    // line 54
                    yield "                    data-target=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "modal_target", [], "any", false, false, false, 54), "html", null, true);
                    yield "\"
                    data-toggle=\"modal\"
                  ";
                }
                // line 57
                yield "                  ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "help", [], "any", true, true, false, 57)) {
                    // line 58
                    yield "                    data-toggle=\"pstooltip\"
                    data-placement=\"bottom\"
                  ";
                }
                // line 61
                yield "                  ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", true, true, false, 61) && CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 61))) {
                    // line 62
                    yield "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "data_attributes", [], "any", false, false, false, 62));
                    foreach ($context['_seq'] as $context["attribute_name"] => $context["attribute_value"]) {
                        // line 63
                        yield "                      data-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_name"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute_value"], "html", null, true);
                        yield "\"
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['attribute_name'], $context['attribute_value'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    yield "                  ";
                }
                // line 66
                yield "                >
                  ";
                // line 67
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", true, true, false, 67) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 67)))) {
                    yield "<i class=\"material-icons\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "icon", [], "any", false, false, false, 67), "html", null, true);
                    yield "</i>";
                }
                // line 68
                yield "                  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["btn"], "desc", [], "any", false, false, false, 68));
                yield "
                </a>
              ";
            }
            // line 71
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['k'], $context['btn'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 72), "modules-list", [], "array", true, true, false, 72)) {
            // line 73
            yield "              ";
            // line 74
            yield "              <a
                class=\"btn btn-outline-secondary ";
            // line 75
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 75), "modules-list", [], "array", false, true, false, 75), "target", [], "any", true, true, false, 75) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 75, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 75), "modules-list", [], "array", false, false, false, 75), "target", [], "any", false, false, false, 75))) {
                yield " _blank";
            }
            yield "\"
                id=\"page-header-desc-";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("table", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["table"]) || array_key_exists("table", $context) ? $context["table"] : (function () { throw new RuntimeError('Variable "table" does not exist.', 76, $this->source); })()), "configuration")) : ("configuration")), "html", null, true);
            yield "-";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 76), "modules-list", [], "array", false, true, false, 76), "imgclass", [], "any", true, true, false, 76)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 76, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 76), "modules-list", [], "array", false, false, false, 76), "imgclass", [], "any", false, false, false, 76), "html", null, true);
            } else {
                yield "modules-list";
            }
            yield "\"
                ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 77), "modules-list", [], "array", false, true, false, 77), "href", [], "any", true, true, false, 77)) {
                yield "href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 77, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 77), "modules-list", [], "array", false, false, false, 77), "href", [], "any", false, false, false, 77), "html", null, true);
                yield "\"";
            }
            // line 78
            yield "                title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 78, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 78), "modules-list", [], "array", false, false, false, 78), "desc", [], "any", false, false, false, 78), "html", null, true);
            yield "\"
                ";
            // line 79
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["this"] ?? null), "layoutHeaderToolbarBtn", [], "any", false, true, false, 79), "modules-list", [], "array", false, true, false, 79), "js", [], "any", true, true, false, 79) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 79, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 79), "modules-list", [], "array", false, false, false, 79), "js", [], "any", false, false, false, 79))) {
                yield "onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 79, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 79), "modules-list", [], "array", false, false, false, 79), "js", [], "any", false, false, false, 79), "html", null, true);
                yield "\"";
            }
            // line 80
            yield "              >
                ";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 81, $this->source); })()), "layoutHeaderToolbarBtn", [], "any", false, false, false, 81), "modules-list", [], "array", false, false, false, 81), "desc", [], "any", false, false, false, 81), "html", null, true);
            yield "
              </a>
            ";
        }
        // line 84
        yield "
            ";
        // line 85
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 85, $this->source); })()), "helpLink", [], "any", false, false, false, 85))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 86, $this->source); })()), "sidebarEnabled", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 87
                yield "                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 91, $this->source); })()), "helpLink", [], "any", false, false, false, 91));
                yield "\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 100, $this->source); })()), "helpLink", [], "any", false, false, false, 100));
                yield "\"
                   id=\"product_form_open_help\"
                >
                  ";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            } else {
                // line 106
                yield "                <a class=\"toolbar-button d-inline-block d-md-none\" href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 106, $this->source); })()), "helpLink", [], "any", false, false, false, 106));
                yield "\"
                   title=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help d-none d-md-inline-block\" href=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 110, $this->source); })()), "helpLink", [], "any", false, false, false, 110));
                yield "\"
                   title=\"";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Help", [], "Admin.Global"), "html", null, true);
                yield "
                </a>
              ";
            }
            // line 114
            yield "            ";
        }
        // line 115
        yield "          </div>
        </div>
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        // line 119
        yield "        ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 119, $this->source); })()), "subTitle", [], "any", false, false, false, 119))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 120
            yield "          <h4 class=\"page-subtitle\">
            ";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 121, $this->source); })()), "subTitle", [], "any", false, false, false, 121), "html", null, true);
            yield "
          </h4>
        ";
        }
        // line 124
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
        return "@PrestaShop/Admin/Component/Layout/toolbar.html.twig";
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
        return array (  748 => 124,  742 => 121,  739 => 120,  736 => 119,  723 => 118,  710 => 115,  707 => 114,  699 => 111,  695 => 110,  689 => 107,  684 => 106,  678 => 103,  672 => 100,  666 => 97,  657 => 91,  651 => 88,  648 => 87,  645 => 86,  643 => 85,  640 => 84,  634 => 81,  631 => 80,  625 => 79,  620 => 78,  614 => 77,  604 => 76,  598 => 75,  595 => 74,  593 => 73,  590 => 72,  584 => 71,  577 => 68,  571 => 67,  568 => 66,  565 => 65,  554 => 63,  549 => 62,  546 => 61,  541 => 58,  538 => 57,  531 => 54,  528 => 53,  522 => 52,  513 => 51,  507 => 49,  505 => 48,  491 => 47,  481 => 46,  478 => 45,  476 => 44,  473 => 43,  469 => 42,  465 => 41,  457 => 39,  444 => 38,  430 => 35,  427 => 34,  414 => 33,  403 => 29,  398 => 26,  389 => 23,  383 => 22,  380 => 21,  378 => 20,  375 => 19,  368 => 16,  362 => 15,  359 => 14,  357 => 13,  353 => 11,  350 => 10,  337 => 9,  322 => 207,  316 => 203,  313 => 202,  307 => 199,  303 => 198,  298 => 197,  292 => 194,  287 => 192,  281 => 189,  278 => 188,  275 => 187,  273 => 186,  270 => 185,  264 => 184,  260 => 182,  254 => 181,  250 => 180,  247 => 179,  243 => 177,  241 => 176,  235 => 175,  229 => 174,  220 => 173,  216 => 172,  205 => 171,  195 => 170,  192 => 169,  189 => 168,  185 => 167,  180 => 165,  171 => 158,  169 => 157,  166 => 156,  161 => 153,  155 => 152,  145 => 145,  141 => 144,  135 => 143,  129 => 142,  126 => 141,  123 => 140,  119 => 139,  115 => 137,  113 => 136,  110 => 135,  106 => 133,  97 => 131,  93 => 130,  90 => 129,  88 => 128,  83 => 125,  80 => 118,  77 => 38,  75 => 33,  68 => 32,  66 => 31,  63 => 30,  61 => 9,  55 => 6,  52 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"header-toolbar d-print-none\">
  {{ component(\x27MultistoreHeader\x27) }}
  <div class=\"container-fluid\">

    {% block pageBreadcrumb %}
      {% if this.breadcrumbs.container is defined or this.breadcrumbs.tab is defined %}
        <nav aria-label=\"Breadcrumb\">
          <ol class=\"breadcrumb\">
            {% if this.breadcrumbs.container is defined and this.breadcrumbs.container.name != \x27\x27 %}
              <li class=\"breadcrumb-item\">
                {% if this.breadcrumbs.container.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.container.icon }}</i>{% endif %}
                {{ this.breadcrumbs.container.name|escape }}
              </li>
            {% endif %}

            {% if this.breadcrumbs.container is defined and this.breadcrumbs.tab is defined and this.breadcrumbs.tab.name != \x27\x27 and this.breadcrumbs.container.name != this.breadcrumbs.tab.name and this.breadcrumbs.tab.href != \x27\x27 %}
              <li class=\"breadcrumb-item active\">
                {% if this.breadcrumbs.tab.icon is not empty %}<i class=\"material-icons\">{{ this.breadcrumbs.tab.icon }}</i>{% endif %}
                <a href=\"{{ this.breadcrumbs.tab.href|escape }}\" aria-current=\"page\">{{ this.breadcrumbs.tab.name|escape }}</a>
              </li>
            {% endif %}
          </ol>
        </nav>
      {% endif %}
    {% endblock %}

    {% set persistent_help_btn = help_link is defined and help_link is not same as (false) and this.layoutHeaderToolbarBtn is empty %}
    <div class=\"title-row {% if persistent_help_btn %}flex-nowrap flex-md-wrap{% endif %}\">
      {% block pageTitle %}
          <h1 class=\"title\">
            {{ this.title|e }}
          </h1>
      {% endblock %}
      {% block toolbarBox %}
        <div class=\"toolbar-icons{% if persistent_help_btn %} toolbar-icons--persistent{% endif %}\">
          <div class=\"wrapper\">
            {{ renderhook(\x27displayDashboardToolbarTopMenu\x27) }}
            {% for k, btn in this.layoutHeaderToolbarBtn %}
              {% if k != \x27back\x27 and k != \x27modules-list\x27 %}
                {# TODO: REFACTOR ALL THIS THINGS #}
                <a
                  id=\"page-header-desc-{{ table|default(\x27configuration\x27) }}-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}\"
                  class=\"btn {% if btn.class is defined and btn.class %}{{ btn.class|escape }}{% else %}btn-primary{% endif %}{% if btn.target is defined and btn.target %} _blank{% endif %}{% if btn.disabled is defined and btn.disabled %} disabled auto-pointer-events{% endif %} pointer\"
                  {% if btn.href is defined %}
                    href=\"{{ btn.href|escape }}\"
                  {% endif %}
                  title=\"{% if btn.help is defined %}{{ btn.help }}{% else %}{{ btn.desc|escape }}{% endif %}\"
                  {% if btn.js is defined and btn.js %}onclick=\"{{ btn.js }}\" {% endif %}
                  {% if btn.modal_target is defined and btn.modal_target %}
                    data-target=\"{{ btn.modal_target }}\"
                    data-toggle=\"modal\"
                  {% endif %}
                  {% if btn.help is defined %}
                    data-toggle=\"pstooltip\"
                    data-placement=\"bottom\"
                  {% endif %}
                  {% if btn.data_attributes is defined and btn.data_attributes %}
                    {% for attribute_name, attribute_value in btn.data_attributes %}
                      data-{{ attribute_name }}=\"{{ attribute_value }}\"
                    {% endfor %}
                  {% endif %}
                >
                  {% if btn.icon is defined and btn.icon is not empty %}<i class=\"material-icons\">{{ btn.icon }}</i>{% endif %}
                  {{ btn.desc|escape }}
                </a>
              {% endif %}
            {% endfor %}
            {% if this.layoutHeaderToolbarBtn[\x27modules-list\x27] is defined %}
              {# TODO: REFACTOR ALL THIS THINGS #}
              <a
                class=\"btn btn-outline-secondary {% if this.layoutHeaderToolbarBtn[\x27modules-list\x27].target is defined and this.layoutHeaderToolbarBtn[\x27modules-list\x27].target %} _blank{% endif %}\"
                id=\"page-header-desc-{{ table|default(\x27configuration\x27) }}-{% if this.layoutHeaderToolbarBtn[\x27modules-list\x27].imgclass is defined %}{{ this.layoutHeaderToolbarBtn[\x27modules-list\x27].imgclass }}{% else %}modules-list{% endif %}\"
                {% if this.layoutHeaderToolbarBtn[\x27modules-list\x27].href is defined %}href=\"{{ this.layoutHeaderToolbarBtn[\x27modules-list\x27].href }}\"{% endif %}
                title=\"{{ this.layoutHeaderToolbarBtn[\x27modules-list\x27].desc }}\"
                {% if this.layoutHeaderToolbarBtn[\x27modules-list\x27].js is defined and this.layoutHeaderToolbarBtn[\x27modules-list\x27].js %}onclick=\"{{ this.layoutHeaderToolbarBtn[\x27modules-list\x27].js }}\"{% endif %}
              >
                {{ this.layoutHeaderToolbarBtn[\x27modules-list\x27].desc }}
              </a>
            {% endif %}

            {% if this.helpLink is not empty %}
              {% if this.sidebarEnabled %}
                <a class=\"toolbar-button btn-sidebar d-inline-block d-md-none\" href=\"#\"
                   title=\"{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"{{ this.helpLink|escape }}\"
                   id=\"product_form_open_help_mobile\"
                >
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help btn-sidebar d-none d-md-inline-block\" href=\"#\"
                   title=\"{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"{{ this.helpLink|escape }}\"
                   id=\"product_form_open_help\"
                >
                  {{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}
                </a>
              {% else %}
                <a class=\"toolbar-button d-inline-block d-md-none\" href=\"{{ this.helpLink|escape }}\"
                   title=\"{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}\">
                  <i class=\"material-icons\">help_outline</i>
                </a>
                <a class=\"btn btn-outline-secondary btn-help d-none d-md-inline-block\" href=\"{{ this.helpLink|escape }}\"
                   title=\"{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}\">{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}
                </a>
              {% endif %}
            {% endif %}
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
  </div>

  {% if headerTabContent is defined and headerTabContent %}
    <div class=\"page-head-tabs\" id=\"head_tabs\">
      {% for tabContent in headerTabContent %}
        {{ tabContent }}
      {% endfor %}
    </div>
  {% endif %}

  {% if this.currentTabLevel >= 3 %}
    <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul class=\"nav nav-pills\">
        {% for tab in this.navigationTabs %}
          {% if tab.attributes.active %}
            <li class=\"nav-item\">
              <a href=\"{{ tab.href }}\" id=\"subtab-{{ tab.attributes.class_name }}\"
                 class=\"nav-link tab {% if tab.attributes.current %}active current{% endif %}\"
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

  {% if this.layoutHeaderToolbarBtn is defined and this.layoutHeaderToolbarBtn is not empty %}
    <div class=\"btn-floating\">
      <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\"
              aria-expanded=\"false\">
        <i class=\"material-icons\">add</i>
      </button>
      <div class=\"btn-floating-container collapse\">
        <div class=\"btn-floating-menu\">
          {{ renderhook(\x27displayDashboardToolbarTopMenu\x27) }}

          {% for k, btn in this.layoutHeaderToolbarBtn %}
            {% if k != \x27back\x27 and k != \x27modules-list\x27 %}
              <a
                class=\"btn btn-floating-item {% if btn.floating_class is defined and btn.floating_class %}{{ btn.floating_class|escape }}{% endif %} {% if btn.target is defined and btn.target %} _blank{% endif %} pointer\"{% if btn.href is defined %}
                id=\"page-header-desc-floating-{{ table|default(\x27configuration\x27) }}-{% if btn.imgclass is defined %}{{ btn.imgclass|escape }}{% else %}{{ k }}{% endif %}\"
              href=\"{{ btn.href|escape }}\"{% endif %}
                title=\"{% if btn.help is defined %}{{ btn.help }}{% else %}{{ btn.desc|escape }}{% endif %}\"{% if btn.js is defined and btn.js %}
              onclick=\"{{ btn.js }}\"{% endif %}{% if btn.modal_target is defined and btn.modal_target %}
                data-target=\"{{ btn.modal_target }}\"
                data-toggle=\"modal\"{% endif %}{% if btn.help is defined %}
                data-toggle=\"pstooltip\"
                data-placement=\"bottom\"{% endif %}
              >
                {{ btn.desc|escape }}
                {% if btn.icon is defined and btn.icon is not empty %}<i class=\"material-icons\">{{ btn.icon }}</i>{% endif %}
              </a>
            {% endif %}
          {% endfor %}

          {% if this.helpLink is not empty %}
            {% if this.sidebarEnabled %}
              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
                 title=\"{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}\"
                 data-toggle=\"sidebar\"
                 data-target=\"#right-sidebar\"
                 data-url=\"{{ this.helpLink|escape }}\"
              >
                {{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}
              </a>
            {% else %}
              <a class=\"btn btn-floating-item btn-help\" href=\"{{ this.helpLink|escape }}\"
                 title=\"{{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}\">
                {{ \x27Help\x27|trans({}, \x27Admin.Global\x27) }}
              </a>
            {% endif %}
          {% endif %}
        </div>
      </div>
    </div>
  {% endif %}
  {{ renderhook(\x27displayDashboardTop\x27) }}
</div>
", "@PrestaShop/Admin/Component/Layout/toolbar.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\toolbar.html.twig");
    }
}
