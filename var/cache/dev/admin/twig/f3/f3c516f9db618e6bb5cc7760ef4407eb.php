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

/* @PrestaShop/Admin/layout.html.twig */
class __TwigTemplate_52e459ac2d1c7a1609174793d87e0194 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
            'content_header' => [$this, 'block_content_header'],
            'session_alert' => [$this, 'block_session_alert'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 10
        return $this->load((((($tmp = (isset($context["lightDisplay"]) || array_key_exists("lightDisplay", $context) ? $context["lightDisplay"] : (function () { throw new RuntimeError('Variable "lightDisplay" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("@PrestaShop/Admin/Layout/light_layout.html.twig") : ("@PrestaShop/Admin/Layout/default_layout.html.twig")), 10);
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/layout.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/layout.html.twig"));

        // line 5
        $context["lightDisplay"] = ((array_key_exists("lightDisplay", $context)) ? ((isset($context["lightDisplay"]) || array_key_exists("lightDisplay", $context) ? $context["lightDisplay"] : (function () { throw new RuntimeError('Variable "lightDisplay" does not exist.', 5, $this->source); })())) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "query", [], "any", false, false, false, 5), "get", ["liteDisplaying", false], "method", false, false, false, 5)));
        // line 6
        $context["showContentHeader"] = ((array_key_exists("showContentHeader", $context)) ? ((isset($context["showContentHeader"]) || array_key_exists("showContentHeader", $context) ? $context["showContentHeader"] : (function () { throw new RuntimeError('Variable "showContentHeader" does not exist.', 6, $this->source); })())) : (true));
        // line 7
        $context["layoutHeaderToolbarBtn"] = ((array_key_exists("layoutHeaderToolbarBtn", $context)) ? ((isset($context["layoutHeaderToolbarBtn"]) || array_key_exists("layoutHeaderToolbarBtn", $context) ? $context["layoutHeaderToolbarBtn"] : (function () { throw new RuntimeError('Variable "layoutHeaderToolbarBtn" does not exist.', 7, $this->source); })())) : ([]));
        // line 8
        $context["metaTitle"] = ((array_key_exists("meta_title", $context)) ? ((isset($context["meta_title"]) || array_key_exists("meta_title", $context) ? $context["meta_title"] : (function () { throw new RuntimeError('Variable "meta_title" does not exist.', 8, $this->source); })())) : (((array_key_exists("layoutTitle", $context)) ? ((isset($context["layoutTitle"]) || array_key_exists("layoutTitle", $context) ? $context["layoutTitle"] : (function () { throw new RuntimeError('Variable "layoutTitle" does not exist.', 8, $this->source); })())) : (""))));
        // line 10
        yield from $this->getParent($context)->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 12
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

        // line 13
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/default.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/right-sidebar.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/form_popover_error.bundle.js"), "html", null, true);
        yield "\"></script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 18
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

        // line 19
        yield "  <script>
    var translate_javascripts = ";
        // line 20
        yield json_encode((isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 20, $this->source); })()));
        yield ";
    var PS_ALLOW_ACCENTED_CHARS_URL = ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_ALLOW_ACCENTED_CHARS_URL")), "html", null, true);
        yield ";
  </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("session_alert", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 29
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

        // line 30
        yield "  ";
        // line 50
        yield "  ";
        $macros["layout"] = $this;
        // line 51
        yield "
  ";
        // line 52
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "session", [], "any", false, false, false, 52), "flashbag", [], "any", false, false, false, 52), "peek", ["error"], "method", false, false, false, 52)) > 0)) {
            // line 53
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 53, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "session", [], "any", false, false, false, 53), "flashbag", [], "any", false, false, false, 53), "get", ["error"], "method", false, false, false, 53)]);
            yield "
  ";
        }
        // line 55
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "session", [], "any", false, false, false, 55), "flashbag", [], "any", false, false, false, 55), "peek", ["failure"], "method", false, false, false, 55)) > 0)) {
            // line 56
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 56, $this->getSourceContext())->macro_alert(...["danger", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "session", [], "any", false, false, false, 56), "flashbag", [], "any", false, false, false, 56), "get", ["failure"], "method", false, false, false, 56)]);
            yield "
  ";
        }
        // line 58
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "session", [], "any", false, false, false, 58), "flashbag", [], "any", false, false, false, 58), "peek", ["success"], "method", false, false, false, 58)) > 0)) {
            // line 59
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 59, $this->getSourceContext())->macro_alert(...["success", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "session", [], "any", false, false, false, 59), "flashbag", [], "any", false, false, false, 59), "get", ["success"], "method", false, false, false, 59)]);
            yield "
  ";
        }
        // line 61
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "session", [], "any", false, false, false, 61), "flashbag", [], "any", false, false, false, 61), "peek", ["warning"], "method", false, false, false, 61)) > 0)) {
            // line 62
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 62, $this->getSourceContext())->macro_alert(...["warning", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "session", [], "any", false, false, false, 62), "flashbag", [], "any", false, false, false, 62), "get", ["warning"], "method", false, false, false, 62)]);
            yield "
  ";
        }
        // line 64
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "session", [], "any", false, false, false, 64), "flashbag", [], "any", false, false, false, 64), "peek", ["info"], "method", false, false, false, 64)) > 0)) {
            // line 65
            yield "    ";
            yield $macros["layout"]->getTemplateForMacro("macro_alert", $context, 65, $this->getSourceContext())->macro_alert(...["info", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "session", [], "any", false, false, false, 65), "flashbag", [], "any", false, false, false, 65), "get", ["info"], "method", false, false, false, 65)]);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield "  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/img/bundle/dashboard_loading.gif"), "html", null, true);
        yield "\"
      style=\"margin-top: 10em;\" alt=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading...", [], "Admin.Global"), "html", null, true);
        yield "\"
    />
  </nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
    public function macro_alert($type = null, $flashbagContent = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "type" => $type,
            "flashbagContent" => $flashbagContent,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "alert"));

            // line 31
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 31, $this->source); })()), "html", null, true);
            yield " d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      ";
            // line 35
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 35, $this->source); })())) > 1)) {
                // line 36
                yield "        <ul class=\"alert-text\">
          ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 37, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 38
                    yield "            <li>";
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["flashMessage"]);
                    yield "</li>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                yield "        </ul>
      ";
            } else {
                // line 42
                yield "        <div class=\"alert-text\">
          ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["flashbagContent"]) || array_key_exists("flashbagContent", $context) ? $context["flashbagContent"] : (function () { throw new RuntimeError('Variable "flashbagContent" does not exist.', 43, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 44
                    yield "            <p>";
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["flashMessage"]);
                    yield "</p>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['flashMessage'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                yield "        </div>
      ";
            }
            // line 48
            yield "    </div>
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
        return "@PrestaShop/Admin/layout.html.twig";
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
        return array (  354 => 48,  350 => 46,  341 => 44,  337 => 43,  334 => 42,  330 => 40,  321 => 38,  317 => 37,  314 => 36,  312 => 35,  304 => 31,  285 => 30,  270 => 77,  266 => 76,  258 => 70,  245 => 69,  230 => 65,  227 => 64,  221 => 62,  218 => 61,  212 => 59,  209 => 58,  203 => 56,  200 => 55,  194 => 53,  192 => 52,  189 => 51,  186 => 50,  184 => 30,  171 => 29,  157 => 26,  144 => 25,  130 => 21,  126 => 20,  123 => 19,  110 => 18,  97 => 15,  93 => 14,  88 => 13,  75 => 12,  65 => 10,  63 => 8,  61 => 7,  59 => 6,  57 => 5,  44 => 10,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% set lightDisplay = lightDisplay is defined ? lightDisplay : app.request.query.get(\x27liteDisplaying\x27, false) %}
{% set showContentHeader = showContentHeader is defined ? showContentHeader : true %}
{% set layoutHeaderToolbarBtn = layoutHeaderToolbarBtn is defined ? layoutHeaderToolbarBtn : [] %}
{% set metaTitle = meta_title is defined ? meta_title : (layoutTitle is defined ? layoutTitle : \x27\x27) %}

{% extends (lightDisplay ? \x27@PrestaShop/Admin/Layout/light_layout.html.twig\x27 : \x27@PrestaShop/Admin/Layout/default_layout.html.twig\x27) %}

{% block javascripts %}
  <script src=\"{{ asset(\x27themes/default/js/bundle/default.js\x27) }}\"></script>
  <script src=\"{{ asset(\x27themes/default/js/bundle/right-sidebar.js\x27) }}\"></script>
  <script src=\"{{ asset(\x27themes/new-theme/public/form_popover_error.bundle.js\x27) }}\"></script>
{% endblock %}

{% block translate_javascripts %}
  <script>
    var translate_javascripts = {{ js_translatable|json_encode()|raw }};
    var PS_ALLOW_ACCENTED_CHARS_URL = {{ configuration(\x27PS_ALLOW_ACCENTED_CHARS_URL\x27)|intCast }};
  </script>
{% endblock %}

{% block content_header %}
  {{ block(\x27session_alert\x27) }}
{% endblock %}

{% block session_alert %}
  {% macro alert(type, flashbagContent) %}
    <div class=\"alert alert-{{ type }} d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      {% if flashbagContent|length > 1 %}
        <ul class=\"alert-text\">
          {% for flashMessage in flashbagContent %}
            <li>{{ flashMessage|raw_purified }}</li>
          {% endfor %}
        </ul>
      {% else %}
        <div class=\"alert-text\">
          {% for flashMessage in flashbagContent %}
            <p>{{ flashMessage|raw_purified }}</p>
          {% endfor %}
        </div>
      {% endif %}
    </div>
  {% endmacro %}
  {% import _self as layout %}

  {% if app.session.flashbag.peek(\x27error\x27)|length() > 0 %}
    {{ layout.alert(\x27danger\x27, app.session.flashbag.get(\x27error\x27)) }}
  {% endif %}
  {% if app.session.flashbag.peek(\x27failure\x27)|length() > 0 %}
    {{ layout.alert(\x27danger\x27, app.session.flashbag.get(\x27failure\x27)) }}
  {% endif %}
  {% if app.session.flashbag.peek(\x27success\x27)|length() > 0 %}
    {{ layout.alert(\x27success\x27, app.session.flashbag.get(\x27success\x27)) }}
  {% endif %}
  {% if app.session.flashbag.peek(\x27warning\x27)|length() > 0 %}
    {{ layout.alert(\x27warning\x27, app.session.flashbag.get(\x27warning\x27)) }}
  {% endif %}
  {% if app.session.flashbag.peek(\x27info\x27)|length() > 0 %}
    {{ layout.alert(\x27info\x27, app.session.flashbag.get(\x27info\x27)) }}
  {% endif %}
{% endblock %}

{% block sidebar_right %}
  <nav
    id=\"right-sidebar\"
    role=\"navigation\"
    class=\"col-lg-3 sidebar sidebar-right sidebar-animate text-sm-center\"
  >
    <img
      src=\"{{ asset(\x27themes/default/img/bundle/dashboard_loading.gif\x27) }}\"
      style=\"margin-top: 10em;\" alt=\"{{ \x27Loading...\x27|trans({}, \x27Admin.Global\x27) }}\"
    />
  </nav>
{% endblock %}
", "@PrestaShop/Admin/layout.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\layout.html.twig");
    }
}
