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

/* @PrestaShop/Admin/Layout/legacy_layout.html.twig */
class __TwigTemplate_abff0a915821a514efce610640ce561a extends Template
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
            'header' => [$this, 'block_header'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/legacy_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/legacy_layout.html.twig"));

        // line 5
        yield "<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 10, $this->source); })()), "isoUser", [], "any", false, false, false, 10), "html", null, true);
        yield "\">
<head>
  ";
        // line 12
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 15
        yield "</head>

<body class=\"lang-";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 17, $this->source); })()), "isoUser", [], "any", false, false, false, 17), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 17, $this->source); })()), "isRtlLanguage", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " lang-rtl";
        }
        yield " ps_back-office page-sidebar ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 17, $this->source); })()), "controllerName", [], "any", false, false, false, 17))), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 17, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " page-sidebar-closed";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 17, $this->source); })()), "multiShop", [], "any", false, false, false, 17), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " multishop-enabled";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 17)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 17, $this->source); })()), "debugMode", [], "any", false, false, false, 17), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
  ";
        // line 18
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 18) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 18), "base_url", [], "any", true, true, false, 18))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 18, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 18), "base_url", [], "any", false, false, false, 18), "html", null, true);
            yield "\"";
        }
        // line 19
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 19) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 19), "token", [], "any", true, true, false, 19))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 19, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 19), "token", [], "any", false, false, false, 19), "html", null, true);
            yield "\"";
        }
        // line 20
        yield ">

";
        // line 23
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 100
        yield "
  <div id=\"main\">
    <div id=\"content\" class=\"bootstrap";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 102, $this->source); })()), "displayedWithTabs", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " with-tabs";
        }
        yield "\">
      ";
        // line 104
        yield "      ";
        if ((($tmp = (isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 104, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "        ";
            yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyToolbar", ["layoutTitle" => ((            // line 106
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 106, $this->source); })()))) : ("")), "layoutSubTitle" => ((            // line 107
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutSubTitle"]) || array_key_exists("layoutSubTitle", $context) ? $context["layoutSubTitle"] : (function () { throw new RuntimeError('Variable "layoutSubTitle" does not exist.', 107, $this->source); })()))) : ("")), "helpLink" => ((            // line 108
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 108, $this->source); })()))) : ("")), "enableSidebar" => ((            // line 109
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context) ? $context["enableSidebar"] : (function () { throw new RuntimeError('Variable "enableSidebar" does not exist.', 109, $this->source); })()), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 110
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 110, $this->source); })()), [])) : ([])), "breadcrumbLinks" => ((            // line 111
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumbLinks"]) || array_key_exists("breadcrumbLinks", $context) ? $context["breadcrumbLinks"] : (function () { throw new RuntimeError('Variable "breadcrumbLinks" does not exist.', 111, $this->source); })()), [])) : ([]))]);
            // line 112
            yield "
      ";
        }
        // line 114
        yield "
      ";
        // line 115
        yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
        // line 120
        yield "
      ";
        // line 121
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 124
        yield "    </div>
  </div>

  <div id=\"footer\" class=\"bootstrap\">
    <div class=\"col-sm-12\">
      ";
        // line 129
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeFooter", []);
        yield "
    </div>
  </div>

  ";
        // line 133
        if ((array_key_exists("modals", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["modals"]) || array_key_exists("modals", $context) ? $context["modals"] : (function () { throw new RuntimeError('Variable "modals" does not exist.', 133, $this->source); })())))) {
            // line 134
            yield "    <div class=\"bootstrap\">
      ";
            // line 135
            yield (isset($context["modals"]) || array_key_exists("modals", $context) ? $context["modals"] : (function () { throw new RuntimeError('Variable "modals" does not exist.', 135, $this->source); })());
            yield "
    </div>
  ";
        }
        // line 138
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 13
        yield "    ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyHeadTag", ["metaTitle" => ((array_key_exists("metaTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["metaTitle"]) || array_key_exists("metaTitle", $context) ? $context["metaTitle"] : (function () { throw new RuntimeError('Variable "metaTitle" does not exist.', 13, $this->source); })()))) : (""))]);
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_layout_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "layout_header"));

        // line 24
        yield "  <header id=\"header\" class=\"bootstrap\">
    <nav id=\"header_infos\" role=\"navigation\">
      <i class=\"material-icons js-mobile-menu\">menu</i>

      ";
        // line 29
        yield "      <a id=\"header_logo\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 29, $this->source); })()), "defaultTabLink", [], "any", false, false, false, 29), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("PrestaShop logo", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 30, $this->source); })()), "version", [], "any", false, false, false, 30), "html", null, true);
        yield "</span>

      ";
        // line 32
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyQuickAccess");
        yield "
      ";
        // line 33
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySearchForm");
        yield "

      ";
        // line 35
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 35)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 35, $this->source); })()), "debugMode", [], "any", false, false, false, 35), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"debug-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 50
        yield "      ";
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 50, $this->source); })()), "isMaintenanceEnabled", [], "any", false, false, false, 50), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 52
                yield "          <p class=\"text-left\">
            <strong>
              ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 63
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 63)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 63, $this->source); })()), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 63), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "            <p class=\"text-left\">
              ";
                    // line 65
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 68
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 69
            yield "        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"maintenance-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maintenanceTitle"]) || array_key_exists("maintenanceTitle", $context) ? $context["maintenanceTitle"] : (function () { throw new RuntimeError('Variable "maintenanceTitle" does not exist.', 75, $this->source); })()), "html");
            yield "\"
             href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 83
        yield "
      ";
        // line 84
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyShopList");
        yield "

      ";
        // line 86
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNotificationsCenter");
        yield "
      ";
        // line 87
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyEmployeeDropdown");
        yield "

      ";
        // line 90
        yield "      <span id=\"ajax_running\" class=\"hidden-xs\">
        <i class=\"icon-refresh icon-spin icon-fw\"></i>
      </span>

      ";
        // line 94
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
    </nav>
  </header>

  ";
        // line 98
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacyNavBar");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        // line 116
        yield "        ";
        yield from $this->unwrap()->yieldBlock('session_alert', $context, $blocks);
        // line 119
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 116
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_session_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "session_alert"));

        // line 117
        yield "          ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("LegacySessionAlert");
        yield "
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 121
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 122
        yield "        ";
        yield (isset($context["legacyContent"]) || array_key_exists("legacyContent", $context) ? $context["legacyContent"] : (function () { throw new RuntimeError('Variable "legacyContent" does not exist.', 122, $this->source); })());
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
        return "@PrestaShop/Admin/Layout/legacy_layout.html.twig";
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
        return array (  456 => 122,  443 => 121,  429 => 117,  416 => 116,  405 => 119,  402 => 116,  389 => 115,  376 => 98,  369 => 94,  363 => 90,  358 => 87,  354 => 86,  349 => 84,  346 => 83,  339 => 79,  333 => 76,  329 => 75,  321 => 69,  317 => 68,  311 => 65,  308 => 64,  306 => 63,  301 => 61,  295 => 58,  288 => 54,  284 => 52,  281 => 51,  278 => 50,  271 => 46,  265 => 43,  259 => 42,  251 => 36,  249 => 35,  244 => 33,  240 => 32,  235 => 30,  228 => 29,  222 => 24,  209 => 23,  195 => 13,  182 => 12,  169 => 138,  163 => 135,  160 => 134,  158 => 133,  151 => 129,  144 => 124,  142 => 121,  139 => 120,  137 => 115,  134 => 114,  130 => 112,  128 => 111,  127 => 110,  126 => 109,  125 => 108,  124 => 107,  123 => 106,  121 => 105,  118 => 104,  112 => 102,  108 => 100,  106 => 23,  102 => 20,  95 => 19,  89 => 18,  71 => 17,  67 => 15,  65 => 12,  60 => 10,  53 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<!DOCTYPE html>
<!--[if lt IE 7]> <html class=\"no-js lt-ie9 lt-ie8 lt-ie7 lt-ie6\"> <![endif]-->
<!--[if IE 7]>    <html class=\"no-js lt-ie9 lt-ie8 ie7\"> <![endif]-->
<!--[if IE 8]>    <html class=\"no-js lt-ie9 ie8\"> <![endif]-->
<!--[if gt IE 8]> <html class=\"no-js ie9\"> <![endif]-->
<html lang=\"{{ ps.isoUser }}\">
<head>
  {% block header %}
    {{ component(\x27LegacyHeadTag\x27, {metaTitle: metaTitle|default}) }}
  {% endblock %}
</head>

<body class=\"lang-{{ ps.isoUser }}{% if ps.isRtlLanguage %} lang-rtl{% endif %} ps_back-office page-sidebar {{ ps.controllerName|escape|lower }}{% if ps.menuCollapsed %} page-sidebar-closed{% endif %}{% if ps.multiShop|default(false) %} multishop-enabled{% endif %}{% if ps.debugMode|default(false) %} developer-mode{% endif %} ps-bo-rebrand\"
  {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.base_url is defined %}data-base-url=\"{{ ps.jsRouterMetadata.base_url }}\"{% endif %}
  {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.token is defined %}data-token=\"{{ ps.jsRouterMetadata.token }}\"{% endif %}
>

{# Layout header #}
{% block layout_header %}
  <header id=\"header\" class=\"bootstrap\">
    <nav id=\"header_infos\" role=\"navigation\">
      <i class=\"material-icons js-mobile-menu\">menu</i>

      {# Logo #}
      <a id=\"header_logo\" href=\"{{ ps.defaultTabLink }}\" aria-label=\"{{ \x27PrestaShop logo\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\"></a>
      <span id=\"shop_version\">{{ ps.version }}</span>

      {{ component(\x27LegacyQuickAccess\x27) }}
      {{ component(\x27LegacySearchForm\x27) }}

      {% if ps.debugMode|default(false) %}
        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"debug-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>{{ \x27Your shop is in debug mode.\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}</strong></p><p class=&quot;text-left&quot;>{{ \x27All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.\x27|trans({\x27[1]\x27: \x27<strong>\x27, \x27[/1]\x27: \x27</strong>\x27}, \x27Admin.Navigation.Notification\x27) }}</p>\"
             href=\"{{ url(\x27admin_performance\x27) }}\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>{{ \x27Debug mode\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</span>
          </a>
        </div>
      {% endif %}
      {% if ps.isMaintenanceEnabled|default(false) %}
        {% set maintenanceTitle %}
          <p class=\"text-left\">
            <strong>
              {{ \x27Your store is in maintenance mode.\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}
            </strong>
          </p>
          <p class=\"text-left\">
            {{ \x27Your visitors and customers cannot access your store while in maintenance mode.\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}
          </p>
          <p class=\"text-left\">
            {{ \x27To manage the maintenance settings, go to Shop Parameters > Maintenance tab.\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}
          </p>
          {% if ps.frontOfficeAccessibleForAdmins|default(false) %}
            <p class=\"text-left\">
              {{ \x27Admins can access the store front office without storing their IP.\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}
            </p>
          {% endif %}
        {% endset %}
        <div class=\"component hide-mobile-sm\">
          <a class=\"shop-state label-tooltip\"
             id=\"maintenance-mode\"
             data-toggle=\"tooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"{{ maintenanceTitle|e(\x27html\x27) }}\"
             href=\"{{ url(\x27admin_maintenance\x27) }}\"
          >
            <i class=\"material-icons\">build</i>
            <span>{{ \x27Maintenance mode\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</span>
          </a>
        </div>
      {% endif %}

      {{ component(\x27LegacyShopList\x27) }}

      {{ component(\x27LegacyNotificationsCenter\x27) }}
      {{ component(\x27LegacyEmployeeDropdown\x27) }}

      {# Ajax running * #}
      <span id=\"ajax_running\" class=\"hidden-xs\">
        <i class=\"icon-refresh icon-spin icon-fw\"></i>
      </span>

      {{ renderhook(\x27displayBackOfficeTop\x27) }}
    </nav>
  </header>

  {{ component(\x27LegacyNavBar\x27) }}
{% endblock %}

  <div id=\"main\">
    <div id=\"content\" class=\"bootstrap{% if ps.displayedWithTabs %} with-tabs{% endif %}\">
      {# Page header toolbar #}
      {% if showContentHeader %}
        {{ component(\x27LegacyToolbar\x27, {
          layoutTitle: layoutTitle|default,
          layoutSubTitle: layoutSubTitle|default,
          helpLink: help_link|default,
          enableSidebar: enableSidebar|default(false),
          layoutHeaderToolbarBtn: layoutHeaderToolbarBtn|default([]),
          breadcrumbLinks: breadcrumbLinks|default([]),
        }) }}
      {% endif %}

      {% block content_header %}
        {% block session_alert %}
          {{ component(\x27LegacySessionAlert\x27) }}
        {% endblock %}
      {% endblock %}

      {% block content %}
        {{ legacyContent|raw }}
      {% endblock %}
    </div>
  </div>

  <div id=\"footer\" class=\"bootstrap\">
    <div class=\"col-sm-12\">
      {{ renderhook(\x27displayBackOfficeFooter\x27, {}) }}
    </div>
  </div>

  {% if modals is defined and modals is not empty %}
    <div class=\"bootstrap\">
      {{ modals|raw }}
    </div>
  {% endif %}
</body>
</html>
", "@PrestaShop/Admin/Layout/legacy_layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\legacy_layout.html.twig");
    }
}
