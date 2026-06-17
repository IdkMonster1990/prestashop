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

/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_3b9a61bc001e8b6c9cb932aaf5f7db3d extends Template
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
            'core_javascript' => [$this, 'block_core_javascript'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'layout_header' => [$this, 'block_layout_header'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 6, $this->source); })()), "setupSmarty", [(((array_key_exists("layoutTitle", $context) &&  !(null === $context["layoutTitle"]))) ? ($context["layoutTitle"]) : ("")), (isset($context["metaTitle"]) || array_key_exists("metaTitle", $context) ? $context["metaTitle"] : (function () { throw new RuntimeError('Variable "metaTitle" does not exist.', 6, $this->source); })()), (isset($context["lightDisplay"]) || array_key_exists("lightDisplay", $context) ? $context["lightDisplay"] : (function () { throw new RuntimeError('Variable "lightDisplay" does not exist.', 6, $this->source); })())], "method", false, false, false, 6), "html", null, true);
        yield "
<!DOCTYPE html>
<html lang=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 8, $this->source); })()), "isoUser", [], "any", false, false, false, 8), "html", null, true);
        yield "\">
  <head>
    ";
        // line 10
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 20
        yield "  </head>

  <body class=\"lang-";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 22, $this->source); })()), "isoUser", [], "any", false, false, false, 22), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 22, $this->source); })()), "isRtlLanguage", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " lang-rtl";
        }
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 22, $this->source); })()), "controllerName", [], "any", false, false, false, 22))), "html", null, true);
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 22, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " page-sidebar-closed";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "multiShop", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 22, $this->source); })()), "multiShop", [], "any", false, false, false, 22), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " multishop-enabled";
        }
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 22, $this->source); })()), "debugMode", [], "any", false, false, false, 22), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " developer-mode";
        }
        yield " ps-bo-rebrand\"
    ";
        // line 23
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 23) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 23), "base_url", [], "any", true, true, false, 23))) {
            yield "data-base-url=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 23, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 23), "base_url", [], "any", false, false, false, 23), "html", null, true);
            yield "\"";
        }
        // line 24
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", true, true, false, 24) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "jsRouterMetadata", [], "any", false, true, false, 24), "token", [], "any", true, true, false, 24))) {
            yield "data-token=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 24, $this->source); })()), "jsRouterMetadata", [], "any", false, false, false, 24), "token", [], "any", false, false, false, 24), "html", null, true);
            yield "\"";
        }
        // line 25
        yield "  >
";
        // line 27
        yield from $this->unwrap()->yieldBlock('layout_header', $context, $blocks);
        // line 118
        yield "
";
        // line 120
        if ((($tmp = (isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 120, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 121
            yield "  ";
            $_v0 = $this->env->getRuntime("Symfony\\UX\\TwigComponent\\Twig\\ComponentRuntime");
            $preRendered = $_v0->preRender("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((            // line 122
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 122, $this->source); })()))) : ("")), "layoutSubTitle" => ((            // line 123
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutSubTitle"]) || array_key_exists("layoutSubTitle", $context) ? $context["layoutSubTitle"] : (function () { throw new RuntimeError('Variable "layoutSubTitle" does not exist.', 123, $this->source); })()))) : ("")), "helpLink" => ((            // line 124
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 124, $this->source); })()), "")) : ("")), "enableSidebar" => ((            // line 125
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context) ? $context["enableSidebar"] : (function () { throw new RuntimeError('Variable "enableSidebar" does not exist.', 125, $this->source); })()), false)) : (false)), "layoutHeaderToolbarBtn" => ((            // line 126
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 126, $this->source); })()), [])) : ([])), "breadcrumbLinks" => ((            // line 127
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumbLinks"]) || array_key_exists("breadcrumbLinks", $context) ? $context["breadcrumbLinks"] : (function () { throw new RuntimeError('Variable "breadcrumbLinks" does not exist.', 127, $this->source); })()), [])) : ([]))]));
            if (null !== $preRendered) {
                yield $preRendered; 
            } else {
                $preRenderEvent = $_v0->startEmbedComponent("Toolbar", Twig\Extension\CoreExtension::toArray(["layoutTitle" => ((                // line 122
array_key_exists("layoutTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 122, $this->source); })()))) : ("")), "layoutSubTitle" => ((                // line 123
array_key_exists("layoutSubTitle", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutSubTitle"]) || array_key_exists("layoutSubTitle", $context) ? $context["layoutSubTitle"] : (function () { throw new RuntimeError('Variable "layoutSubTitle" does not exist.', 123, $this->source); })()))) : ("")), "helpLink" => ((                // line 124
array_key_exists("help_link", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["help_link"]) || array_key_exists("help_link", $context) ? $context["help_link"] : (function () { throw new RuntimeError('Variable "help_link" does not exist.', 124, $this->source); })()), "")) : ("")), "enableSidebar" => ((                // line 125
array_key_exists("enableSidebar", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["enableSidebar"]) || array_key_exists("enableSidebar", $context) ? $context["enableSidebar"] : (function () { throw new RuntimeError('Variable "enableSidebar" does not exist.', 125, $this->source); })()), false)) : (false)), "layoutHeaderToolbarBtn" => ((                // line 126
array_key_exists("layoutHeaderToolbarBtn", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 126, $this->source); })()), [])) : ([])), "breadcrumbLinks" => ((                // line 127
array_key_exists("breadcrumbLinks", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["breadcrumbLinks"]) || array_key_exists("breadcrumbLinks", $context) ? $context["breadcrumbLinks"] : (function () { throw new RuntimeError('Variable "breadcrumbLinks" does not exist.', 127, $this->source); })()), [])) : ([]))]), $context, "@PrestaShop/Admin/Layout/default_layout.html.twig", 41636278771);
                $embeddedContext = $preRenderEvent->getVariables();
                $embeddedContext["__parent__"] = $preRenderEvent->getTemplate();
                $embeddedContext["outerBlocks"] ??= new \Symfony\UX\TwigComponent\BlockStack();
                $embeddedBlocks = $embeddedContext["outerBlocks"]->convert($blocks, 41636278771);
                $this->load("@PrestaShop/Admin/Layout/default_layout.html.twig", 121, "41636278771")->display($embeddedContext, $embeddedBlocks);
                $_v0->finishEmbedComponent();
            }
        }
        // line 132
        yield "
<div id=\"main-div\">
  <div
    class=\"content-div";
        // line 135
        if (((isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 135, $this->source); })()) === false)) {
            yield " -notoolbar";
        }
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 135, $this->source); })()), "displayedWithTabs", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " with-tabs";
        }
        yield "\">
    ";
        // line 136
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 136, $this->source); })()), "installDirExists", [], "any", false, false, false, 136)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 137
            yield "      <div class=\"alert alert-warning\">
        ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("For security reasons, you must also delete the /install folder.", [], "Admin.Login.Notification"), "html", null, true);
            yield "
      </div>
    ";
        } else {
            // line 141
            yield "      ";
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminAfterHeader", []);
            yield "

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      ";
            // line 147
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_header', $context, $blocks);
            // line 148
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
            // line 149
            yield "      ";
            yield from $this->unwrap()->yieldBlock('content_footer', $context, $blocks);
            // line 150
            yield "      ";
            yield from $this->unwrap()->yieldBlock('sidebar_right', $context, $blocks);
            // line 151
            yield "
      ";
            // line 152
            yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminEndContent", []);
            yield "
    ";
        }
        // line 154
        yield "  </div>
</div>

  <div class=\"mobile-layer\"></div>

  ";
        // line 159
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("Footer");
        yield "

  ";
        // line 162
        yield "  ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 163
        yield "  ";
        yield from $this->unwrap()->yieldBlock('extra_javascripts', $context, $blocks);
        // line 164
        yield "  ";
        yield from $this->unwrap()->yieldBlock('translate_javascripts', $context, $blocks);
        // line 165
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "      ";
        yield from $this->unwrap()->yieldBlock('core_javascript', $context, $blocks);
        // line 14
        yield "      ";
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("HeadTag", ["metaTitle" => (isset($context["metaTitle"]) || array_key_exists("metaTitle", $context) ? $context["metaTitle"] : (function () { throw new RuntimeError('Variable "metaTitle" does not exist.', 14, $this->source); })())]);
        yield "
      ";
        // line 15
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 18
        yield "      ";
        yield from $this->unwrap()->yieldBlock('extra_stylesheets', $context, $blocks);
        // line 19
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_core_javascript(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core_javascript"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "core_javascript"));

        // line 12
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/core_javascript.html.twig");
        yield "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        yield "        ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Layout/stylesheets.html.twig");
        yield "
      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      ";
        // line 33
        yield "      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 34, $this->source); })()), "defaultTabLink", [], "any", false, false, false, 34), "html", null, true);
        yield "\"></a>
      <span id=\"shop_version\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 35, $this->source); })()), "version", [], "any", false, false, false, 35), "html", null, true);
        yield "</span>

      ";
        // line 37
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("QuickAccess");
        yield "

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("SearchForm");
        yield "
            <button class=\"component-search-cancel d-none\">
              ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "
            </button>
          </div>
          ";
        // line 47
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MobileQuickAccess");
        yield "
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      ";
        // line 52
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "debugMode", [], "any", true, true, false, 52)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 52, $this->source); })()), "debugMode", [], "any", false, false, false, 52), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"<p class=&quot;text-left&quot;><strong>";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your shop is in debug mode.", [], "Admin.Navigation.Notification"), "html", null, true);
            yield "</strong></p><p class=&quot;text-left&quot;>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All the PHP errors and messages are displayed. When you no longer need it, [1]turn off[/1] this mode.", ["[1]" => "<strong>", "[/1]" => "</strong>"], "Admin.Navigation.Notification"), "html", null, true);
            yield "</p>\"
             href=\"";
            // line 60
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_performance");
            yield "\"
          >
            <i class=\"material-icons\">bug_report</i>
            <span>";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Debug mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 67
        yield "
      ";
        // line 68
        if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "isMaintenanceEnabled", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 68, $this->source); })()), "isMaintenanceEnabled", [], "any", false, false, false, 68), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 69
            yield "        ";
            $context["maintenanceTitle"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 70
                yield "          <p class=\"text-left text-nowrap\">
            <strong>
              ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your store is in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
            </strong>
          </p>
          <p class=\"text-left\">
            ";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your visitors and customers cannot access your store while in maintenance mode.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          <p class=\"text-left\">
            ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage the maintenance settings, go to Shop Parameters > Maintenance tab.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "
          </p>
          ";
                // line 81
                if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["ps"] ?? null), "frontOfficeAccessibleForAdmins", [], "any", true, true, false, 81)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 81, $this->source); })()), "frontOfficeAccessibleForAdmins", [], "any", false, false, false, 81), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 82
                    yield "            <p class=\"text-left\">
              ";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Admins can access the store front office without storing their IP.", [], "Admin.Navigation.Notification"), "html", null, true);
                    yield "
            </p>
          ";
                }
                // line 86
                yield "        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 87
            yield "        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
             data-placement=\"bottom\"
             data-html=\"true\"
             title=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maintenanceTitle"]) || array_key_exists("maintenanceTitle", $context) ? $context["maintenanceTitle"] : (function () { throw new RuntimeError('Variable "maintenanceTitle" does not exist.', 93, $this->source); })()), "html");
            yield "\"
             href=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_maintenance");
            yield "\"
          >
            <i class=\"material-icons\">build</i>
            <span>";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Maintenance mode", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
          </a>
        </div>
      ";
        }
        // line 101
        yield "
      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"";
        // line 104
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 104, $this->source); })()), "baseUrl", [], "any", false, false, false, 104), "html", null, true);
        yield "\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</span>
          </a>
        </div>
        ";
        // line 109
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NotificationsCenter");
        yield "
        ";
        // line 110
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("EmployeeDropdown");
        yield "
        ";
        // line 111
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeTop");
        yield "
      </div>
    </nav>
  </header>

  ";
        // line 116
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("NavBar");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 147
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 148
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 150
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_sidebar_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 162
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 163
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_extra_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  680 => 164,  658 => 163,  636 => 162,  614 => 150,  592 => 149,  570 => 148,  548 => 147,  535 => 116,  527 => 111,  523 => 110,  519 => 109,  513 => 106,  508 => 104,  503 => 101,  496 => 97,  490 => 94,  486 => 93,  478 => 87,  474 => 86,  468 => 83,  465 => 82,  463 => 81,  458 => 79,  452 => 76,  445 => 72,  441 => 70,  438 => 69,  436 => 68,  433 => 67,  426 => 63,  420 => 60,  414 => 59,  406 => 53,  404 => 52,  396 => 47,  390 => 44,  385 => 42,  377 => 37,  372 => 35,  368 => 34,  365 => 33,  359 => 28,  346 => 27,  324 => 18,  310 => 16,  297 => 15,  283 => 12,  270 => 11,  259 => 19,  256 => 18,  254 => 15,  249 => 14,  246 => 11,  233 => 10,  220 => 165,  217 => 164,  214 => 163,  211 => 162,  206 => 159,  199 => 154,  194 => 152,  191 => 151,  188 => 150,  185 => 149,  182 => 148,  179 => 147,  170 => 141,  164 => 138,  161 => 137,  159 => 136,  150 => 135,  145 => 132,  135 => 127,  134 => 126,  133 => 125,  132 => 124,  131 => 123,  130 => 122,  125 => 127,  124 => 126,  123 => 125,  122 => 124,  121 => 123,  120 => 122,  117 => 121,  115 => 120,  112 => 118,  110 => 27,  107 => 25,  100 => 24,  94 => 23,  76 => 22,  72 => 20,  70 => 10,  65 => 8,  60 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{# TODO: To be removed when we find a better time to fill the smarty variables. #}
{{ ps.setupSmarty(layoutTitle ?? \x27\x27, metaTitle, lightDisplay) }}
<!DOCTYPE html>
<html lang=\"{{ ps.isoUser }}\">
  <head>
    {% block header %}
      {% block core_javascript %}
        {{ include(\x27@PrestaShop/Admin/Layout/core_javascript.html.twig\x27) }}
      {% endblock %}
      {{ component(\x27HeadTag\x27, {metaTitle: metaTitle}) }}
      {% block stylesheets %}
        {{ include(\x27@PrestaShop/Admin/Layout/stylesheets.html.twig\x27) }}
      {% endblock %}
      {% block extra_stylesheets %}{% endblock %}
    {% endblock %}
  </head>

  <body class=\"lang-{{ ps.isoUser }}{% if ps.isRtlLanguage %} lang-rtl{% endif %} {{ ps.controllerName|escape|lower }}{% if ps.menuCollapsed %} page-sidebar-closed{% endif %}{% if ps.multiShop|default(false) %} multishop-enabled{% endif %}{% if ps.debugMode|default(false) %} developer-mode{% endif %} ps-bo-rebrand\"
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.base_url is defined %}data-base-url=\"{{ ps.jsRouterMetadata.base_url }}\"{% endif %}
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.token is defined %}data-token=\"{{ ps.jsRouterMetadata.token }}\"{% endif %}
  >
{# Layout header #}
{% block layout_header %}
  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      {# Logo #}
      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"{{ ps.defaultTabLink }}\"></a>
      <span id=\"shop_version\">{{ ps.version }}</span>

      {{ component(\x27QuickAccess\x27) }}

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            {{ component(\x27SearchForm\x27) }}
            <button class=\"component-search-cancel d-none\">
              {{ \x27Cancel\x27|trans({}, \x27Admin.Actions\x27) }}
            </button>
          </div>
          {{ component(\x27MobileQuickAccess\x27) }}
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      {% if ps.debugMode|default(false) %}
        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
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
          <p class=\"text-left text-nowrap\">
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
        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
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

      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"{{ ps.baseUrl }}\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>{{ \x27View my store\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</span>
          </a>
        </div>
        {{ component(\x27NotificationsCenter\x27) }}
        {{ component(\x27EmployeeDropdown\x27) }}
        {{ renderhook(\x27displayBackOfficeTop\x27) }}
      </div>
    </nav>
  </header>

  {{ component(\x27NavBar\x27) }}
{% endblock %}

{# Page header toolbar #}
{% if showContentHeader %}
  {% component Toolbar with {
    layoutTitle: layoutTitle|default,
    layoutSubTitle: layoutSubTitle|default,
    helpLink: help_link|default(\x27\x27),
    enableSidebar: enableSidebar|default(false),
    layoutHeaderToolbarBtn: layoutHeaderToolbarBtn|default([]),
    breadcrumbLinks: breadcrumbLinks|default([]),
  } %}
    {% block pageTitle %}{{ block(outerBlocks.pageTitle) ?: parent() }}{% endblock %}
  {% endcomponent %}
{% endif %}

<div id=\"main-div\">
  <div
    class=\"content-div{% if showContentHeader is same as(false) %} -notoolbar{% endif %}{% if ps.displayedWithTabs %} with-tabs{% endif %}\">
    {% if ps.installDirExists %}
      <div class=\"alert alert-warning\">
        {{ \x27For security reasons, you must also delete the /install folder.\x27|trans({}, \x27Admin.Login.Notification\x27) }}
      </div>
    {% else %}
      {{ renderhook(\x27displayAdminAfterHeader\x27, {}) }}

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      {# Page content blocks #}
      {% block content_header %}{% endblock %}
      {% block content %}{% endblock %}
      {% block content_footer %}{% endblock %}
      {% block sidebar_right %}{% endblock %}

      {{ renderhook(\x27displayAdminEndContent\x27, {}) }}
    {% endif %}
  </div>
</div>

  <div class=\"mobile-layer\"></div>

  {{ component(\x27Footer\x27) }}

  {# Javascript blocks #}
  {% block javascripts %}{% endblock %}
  {% block extra_javascripts %}{% endblock %}
  {% block translate_javascripts %}{% endblock %}
</body>
</html>
", "@PrestaShop/Admin/Layout/default_layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\default_layout.html.twig");
    }
}


/* @PrestaShop/Admin/Layout/default_layout.html.twig */
class __TwigTemplate_3b9a61bc001e8b6c9cb932aaf5f7db3d___41636278771 extends Template
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
            'outer__block_fallback' => [$this, 'block_outer__block_fallback'],
            'pageTitle' => [$this, 'block_pageTitle'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 121
        return $this->load((isset($context["__parent__"]) || array_key_exists("__parent__", $context) ? $context["__parent__"] : (function () { throw new RuntimeError('Variable "__parent__" does not exist.', 121, $this->source); })()), 121);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Layout/default_layout.html.twig"));

        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_outer__block_fallback(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer__block_fallback"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
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

        yield ((        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["outerBlocks"]) || array_key_exists("outerBlocks", $context) ? $context["outerBlocks"] : (function () { throw new RuntimeError('Variable "outerBlocks" does not exist.', 129, $this->source); })()), "pageTitle", [], "any", false, false, false, 129), $context, $blocks)) ? (        $this->unwrap()->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["outerBlocks"]) || array_key_exists("outerBlocks", $context) ? $context["outerBlocks"] : (function () { throw new RuntimeError('Variable "outerBlocks" does not exist.', 129, $this->source); })()), "pageTitle", [], "any", false, false, false, 129), $context, $blocks)) : ($this->renderParentBlock("pageTitle", $context, $blocks)));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Layout/default_layout.html.twig";
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
        return array (  965 => 129,  922 => 121,  680 => 164,  658 => 163,  636 => 162,  614 => 150,  592 => 149,  570 => 148,  548 => 147,  535 => 116,  527 => 111,  523 => 110,  519 => 109,  513 => 106,  508 => 104,  503 => 101,  496 => 97,  490 => 94,  486 => 93,  478 => 87,  474 => 86,  468 => 83,  465 => 82,  463 => 81,  458 => 79,  452 => 76,  445 => 72,  441 => 70,  438 => 69,  436 => 68,  433 => 67,  426 => 63,  420 => 60,  414 => 59,  406 => 53,  404 => 52,  396 => 47,  390 => 44,  385 => 42,  377 => 37,  372 => 35,  368 => 34,  365 => 33,  359 => 28,  346 => 27,  324 => 18,  310 => 16,  297 => 15,  283 => 12,  270 => 11,  259 => 19,  256 => 18,  254 => 15,  249 => 14,  246 => 11,  233 => 10,  220 => 165,  217 => 164,  214 => 163,  211 => 162,  206 => 159,  199 => 154,  194 => 152,  191 => 151,  188 => 150,  185 => 149,  182 => 148,  179 => 147,  170 => 141,  164 => 138,  161 => 137,  159 => 136,  150 => 135,  145 => 132,  135 => 127,  134 => 126,  133 => 125,  132 => 124,  131 => 123,  130 => 122,  125 => 127,  124 => 126,  123 => 125,  122 => 124,  121 => 123,  120 => 122,  117 => 121,  115 => 120,  112 => 118,  110 => 27,  107 => 25,  100 => 24,  94 => 23,  76 => 22,  72 => 20,  70 => 10,  65 => 8,  60 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{# TODO: To be removed when we find a better time to fill the smarty variables. #}
{{ ps.setupSmarty(layoutTitle ?? \x27\x27, metaTitle, lightDisplay) }}
<!DOCTYPE html>
<html lang=\"{{ ps.isoUser }}\">
  <head>
    {% block header %}
      {% block core_javascript %}
        {{ include(\x27@PrestaShop/Admin/Layout/core_javascript.html.twig\x27) }}
      {% endblock %}
      {{ component(\x27HeadTag\x27, {metaTitle: metaTitle}) }}
      {% block stylesheets %}
        {{ include(\x27@PrestaShop/Admin/Layout/stylesheets.html.twig\x27) }}
      {% endblock %}
      {% block extra_stylesheets %}{% endblock %}
    {% endblock %}
  </head>

  <body class=\"lang-{{ ps.isoUser }}{% if ps.isRtlLanguage %} lang-rtl{% endif %} {{ ps.controllerName|escape|lower }}{% if ps.menuCollapsed %} page-sidebar-closed{% endif %}{% if ps.multiShop|default(false) %} multishop-enabled{% endif %}{% if ps.debugMode|default(false) %} developer-mode{% endif %} ps-bo-rebrand\"
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.base_url is defined %}data-base-url=\"{{ ps.jsRouterMetadata.base_url }}\"{% endif %}
    {% if ps.jsRouterMetadata is defined and ps.jsRouterMetadata.token is defined %}data-token=\"{{ ps.jsRouterMetadata.token }}\"{% endif %}
  >
{# Layout header #}
{% block layout_header %}
  <header id=\"header\" class=\"d-print-none\">
    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

      {# Logo #}
      <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"{{ ps.defaultTabLink }}\"></a>
      <span id=\"shop_version\">{{ ps.version }}</span>

      {{ component(\x27QuickAccess\x27) }}

      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            {{ component(\x27SearchForm\x27) }}
            <button class=\"component-search-cancel d-none\">
              {{ \x27Cancel\x27|trans({}, \x27Admin.Actions\x27) }}
            </button>
          </div>
          {{ component(\x27MobileQuickAccess\x27) }}
        </div>
        <div class=\"component-search-background d-none\"></div>
      </div>

      {% if ps.debugMode|default(false) %}
        <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
          <a class=\"link shop-state\"
             id=\"debug-mode\"
             data-toggle=\"pstooltip\"
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
          <p class=\"text-left text-nowrap\">
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
        <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
          <a class=\"link shop-state\"
             id=\"maintenance-mode\"
             data-toggle=\"pstooltip\"
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

      <div class=\"header-right\">
        <div class=\"shop-list\">
          <a class=\"link\" id=\"header_shopname\" href=\"{{ ps.baseUrl }}\" target= \"_blank\">
            <i class=\"material-icons\">visibility</i>
            <span>{{ \x27View my store\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</span>
          </a>
        </div>
        {{ component(\x27NotificationsCenter\x27) }}
        {{ component(\x27EmployeeDropdown\x27) }}
        {{ renderhook(\x27displayBackOfficeTop\x27) }}
      </div>
    </nav>
  </header>

  {{ component(\x27NavBar\x27) }}
{% endblock %}

{# Page header toolbar #}
{% if showContentHeader %}
  {% component Toolbar with {
    layoutTitle: layoutTitle|default,
    layoutSubTitle: layoutSubTitle|default,
    helpLink: help_link|default(\x27\x27),
    enableSidebar: enableSidebar|default(false),
    layoutHeaderToolbarBtn: layoutHeaderToolbarBtn|default([]),
    breadcrumbLinks: breadcrumbLinks|default([]),
  } %}
    {% block pageTitle %}{{ block(outerBlocks.pageTitle) ?: parent() }}{% endblock %}
  {% endcomponent %}
{% endif %}

<div id=\"main-div\">
  <div
    class=\"content-div{% if showContentHeader is same as(false) %} -notoolbar{% endif %}{% if ps.displayedWithTabs %} with-tabs{% endif %}\">
    {% if ps.installDirExists %}
      <div class=\"alert alert-warning\">
        {{ \x27For security reasons, you must also delete the /install folder.\x27|trans({}, \x27Admin.Login.Notification\x27) }}
      </div>
    {% else %}
      {{ renderhook(\x27displayAdminAfterHeader\x27, {}) }}

      <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
      <div id=\"content-message-box\"></div>

      {# Page content blocks #}
      {% block content_header %}{% endblock %}
      {% block content %}{% endblock %}
      {% block content_footer %}{% endblock %}
      {% block sidebar_right %}{% endblock %}

      {{ renderhook(\x27displayAdminEndContent\x27, {}) }}
    {% endif %}
  </div>
</div>

  <div class=\"mobile-layer\"></div>

  {{ component(\x27Footer\x27) }}

  {# Javascript blocks #}
  {% block javascripts %}{% endblock %}
  {% block extra_javascripts %}{% endblock %}
  {% block translate_javascripts %}{% endblock %}
</body>
</html>
", "@PrestaShop/Admin/Layout/default_layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Layout\\default_layout.html.twig");
    }
}
