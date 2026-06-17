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

/* @PrestaShop/Admin/WebProfiler/legacy.html.twig */
class __TwigTemplate_39c0c79f2d6c2013c6528f377b036c76 extends Template
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
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/legacy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/legacy.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 8
        yield "  ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 9
            yield "    ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 9, $this->source); })()), "isProfilerEnabled", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "    🕵️‍♂️&nbsp;<span class=\"sf-toolbar-value\">Legacy</span>
    ";
            }
            // line 12
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 13
        yield "
  ";
        // line 14
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 18
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "isProfilerEnabled", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 19
            yield "  <span class=\"label\">
    <span class=\"icon\">🕵️‍♂️</span>
    <strong>Legacy</strong>
  </span>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 26
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 27
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "isProfilerEnabled", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "    ";
            $context["constRootDir"] = (Twig\Extension\CoreExtension::constant("_PS_ROOT_DIR_") . "/");
            // line 29
            yield "    <div class=\"sf-tabs\">
      <div class=\"tab\">
        <h3 class=\"tab-title\">Summary</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            ";
            // line 34
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 34, $this->source); })()), "summary", [], "any", false, false, false, 34), "loadTime", [], "any", false, false, false, 34))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "            <div class=\"metric\">
                <span class=\"value\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 36, $this->source); })()), "summary", [], "any", false, false, false, 36), "loadTime", [], "any", false, false, false, 36)), "html", null, true);
                yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Load Time</span>
            </div>
            ";
            }
            // line 40
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 41, $this->source); })()), "summary", [], "any", false, false, false, 41), "queryTime", [], "any", false, false, false, 41), "html", null, true);
            yield " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Querying Time</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 45, $this->source); })()), "summary", [], "any", false, false, false, 45), "nbQueries", [], "any", false, false, false, 45), "html", null, true);
            yield "</span>
                <span class=\"label\">Queries</span>
            </div>
            ";
            // line 48
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 48, $this->source); })()), "summary", [], "any", false, false, false, 48), "peakMemoryUsage", [], "any", false, false, false, 48))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "            <div class=\"metric\">
                <span class=\"value\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.1f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "summary", [], "any", false, false, false, 50), "peakMemoryUsage", [], "any", false, false, false, 50) / 1048576), 2)), "html", null, true);
                yield " <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Memory Peak Usage</span>
            </div>
            ";
            }
            // line 54
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 55, $this->source); })()), "summary", [], "any", false, false, false, 55), "includedFiles", [], "any", false, false, false, 55), "html", null, true);
            yield " <span class=\"unit\">files</span> - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 55, $this->source); })()), "summary", [], "any", false, false, false, 55), "totalFileSize", [], "any", false, false, false, 55) / 1048576), 2)), "html", null, true);
            yield " <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Included Files</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "summary", [], "any", false, false, false, 59), "totalCacheSize", [], "any", false, false, false, 59) / 1048576), 2)), "html", null, true);
            yield " <span class=\"unit\">Mb</span></span>
                <span class=\"label\">PS Cache Size</span>
            </div>
          </div>
          ";
            // line 63
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 63, $this->source); })()), "summary", [], "any", false, false, false, 63), "globalVarSize", [], "any", false, false, false, 63))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "            <h3>Global vars</h3>
            <div class=\"metrics\">
              <div class=\"metric\">
                  <span class=\"value\">";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 67, $this->source); })()), "summary", [], "any", false, false, false, 67), "totalGlobalVarSize", [], "any", false, false, false, 67) / 1048576), 2)), "html", null, true);
                yield " <span class=\"unit\">Mb</span></span>
                  <span class=\"label\">Global vars</span>
              </div>
            </div>
            <div class=\"sf-toolbar-info-piece\">
              <table>
                <thead>
                  <tr>
                    <th>Variable</th>
                    <th>Size</th>
                  </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\">
                  ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "summary", [], "any", false, false, false, 80), "globalVarSize", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                    // line 81
                    yield "                    <tr>
                      <td class=\"text-small\">";
                    // line 82
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "</td>
                      <td>";
                    // line 83
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                    yield "k</td>
                    </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['key'], $context['value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 86
                yield "                </tbody>
                </table>
            </div>
          ";
            }
            // line 90
            yield "        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Configuration</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            <div class=\"metric\">
              <span class=\"value\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "configuration", [], "any", false, false, false, 97), "psVersion", [], "any", false, false, false, 97), "html", null, true);
            yield "</span>
              <span class=\"label\">PrestaShop Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 101, $this->source); })()), "configuration", [], "any", false, false, false, 101), "phpVersion", [], "any", false, false, false, 101), "html", null, true);
            yield "</span>
              <span class=\"label\">PHP Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "configuration", [], "any", false, false, false, 105), "mysqlVersion", [], "any", false, false, false, 105), "html", null, true);
            yield "</span>
              <span class=\"label\">MySQL Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 109
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 109, $this->source); })()), "configuration", [], "any", false, false, false, 109), "memoryLimit", [], "any", false, false, false, 109), "html", null, true);
            yield "</span>
              <span class=\"label\">Memory Limit</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "configuration", [], "any", false, false, false, 113), "maxExecutionTime", [], "any", false, false, false, 113), "html", null, true);
            yield "</span>
              <span class=\"label\">Max Execution Time</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">";
            // line 117
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "configuration", [], "any", false, false, false, 117), "smartyCache", [], "any", false, false, false, 117) === "1")) ? ("enabled") : ("disabled"));
            yield "</span>
              <span class=\"label\">Smarty Cache</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">
                ";
            // line 122
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 122, $this->source); })()), "configuration", [], "any", false, false, false, 122), "smartyCompilation", [], "any", false, false, false, 122) === "0")) {
                // line 123
                yield "                  never recompile
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 124
(isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 124, $this->source); })()), "configuration", [], "any", false, false, false, 124), "smartyCompilation", [], "any", false, false, false, 124) === "1")) {
                // line 125
                yield "                  auto
                ";
            } else {
                // line 127
                yield "                  force compile
                ";
            }
            // line 129
            yield "              </span>
              <span class=\"label\">Smarty Compilation</span>
            </div>
          </div>
        </div>
      </div>
      ";
            // line 135
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "run", [], "any", false, false, false, 135), "profiler", [], "any", false, false, false, 135)) > 0)) {
                // line 136
                yield "      <div class=\"tab\">
        <h3 class=\"tab-title\">Run <span class=\"badge\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 137, $this->source); })()), "run", [], "any", false, false, false, 137), "profiler", [], "any", false, false, false, 137)), "html", null, true);
                yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th></th>
                  <th>Time</th>
                  <th>Cumulated Time</th>
                  <th>Memory Usage</th>
                  <th>Memory Peak Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
                // line 151
                $context["profilerLastTime"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 151, $this->source); })()), "run", [], "any", false, false, false, 151), "startTime", [], "any", false, false, false, 151);
                // line 152
                yield "                ";
                $context["profilerLastMemUsage"] = 0;
                // line 153
                yield "                ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 153, $this->source); })()), "run", [], "any", false, false, false, 153), "profiler", [], "any", false, false, false, 153));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerRow"]) {
                    // line 154
                    yield "                  ";
                    if ((($tmp =  !((CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "block", [], "any", false, false, false, 154) == "checkAccess") && (CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 154) == (isset($context["profilerLastTime"]) || array_key_exists("profilerLastTime", $context) ? $context["profilerLastTime"] : (function () { throw new RuntimeError('Variable "profilerLastTime" does not exist.', 154, $this->source); })())))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 155
                        yield "                  <tr>
                    <td class=\"text-small\">";
                        // line 156
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "block", [], "any", false, false, false, 156), "html", null, true);
                        yield "</td>
                    <td>";
                        // line 157
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", (CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 157) - (isset($context["profilerLastTime"]) || array_key_exists("profilerLastTime", $context) ? $context["profilerLastTime"] : (function () { throw new RuntimeError('Variable "profilerLastTime" does not exist.', 157, $this->source); })()))), "html", null, true);
                        yield "</td>
                    <td>";
                        // line 158
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", (CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 158) - CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 158, $this->source); })()), "run", [], "any", false, false, false, 158), "startTime", [], "any", false, false, false, 158))), "html", null, true);
                        yield "</td>
                    <td>";
                        // line 159
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round(((CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "memory_usage", [], "any", false, false, false, 159) - (isset($context["profilerLastMemUsage"]) || array_key_exists("profilerLastMemUsage", $context) ? $context["profilerLastMemUsage"] : (function () { throw new RuntimeError('Variable "profilerLastMemUsage" does not exist.', 159, $this->source); })())) / 1048576), 2)), "html", null, true);
                        yield " Mb</td>
                    <td>";
                        // line 160
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.1f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "peak_memory_usage", [], "any", false, false, false, 160) / 1048576), 2)), "html", null, true);
                        yield " Mb</td>
                  </tr>
                  ";
                    }
                    // line 163
                    yield "                  ";
                    $context["profilerLastTime"] = CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "time", [], "any", false, false, false, 163);
                    // line 164
                    yield "                  ";
                    $context["profilerLastMemUsage"] = CoreExtension::getAttribute($this->env, $this->source, $context["profilerRow"], "memory_usage", [], "any", false, false, false, 164);
                    // line 165
                    yield "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerRow'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 166
                yield "              </tbody>
              </table>
          </div>
        </div>
      </div>
      ";
            }
            // line 172
            yield "      <div class=\"tab\">
        <h3 class=\"tab-title\">Hooks <span class=\"badge\">";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 173, $this->source); })()), "hooks", [], "any", false, false, false, 173), "perfs", [], "any", false, false, false, 173)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Hook</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 185
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 185, $this->source); })()), "hooks", [], "any", false, false, false, 185), "perfs", [], "any", false, false, false, 185));
            foreach ($context['_seq'] as $context["profilerHookName"] => $context["profilerHookPerf"]) {
                // line 186
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["profilerHookName"], "html", null, true);
                yield "</td>
                  <td>";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerHookPerf"], "time", [], "any", false, false, false, 188)), "html", null, true);
                yield " ms</td>
                  <td>";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerHookPerf"], "memory", [], "any", false, false, false, 189) / 1048576), 2)), "html", null, true);
                yield " Mb</td>
                </tr>
                  ";
                // line 191
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["profilerHookPerf"], "modules", [], "any", false, false, false, 191));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerModule"]) {
                    // line 192
                    yield "                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">";
                    // line 195
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerModule"], "module", [], "any", false, false, false, 195), "html", null, true);
                    yield "</span>
                      </strong>
                    </td>
                    <td>";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerModule"], "time", [], "any", false, false, false, 198)), "html", null, true);
                    yield " ms</td>
                    <td>";
                    // line 199
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerModule"], "memory", [], "any", false, false, false, 199) / 1048576), 2)), "html", null, true);
                    yield " Mb</td>
                  </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerModule'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 202
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['profilerHookName'], $context['profilerHookPerf'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 203
            yield "              </tbody>
              <tfoot>
                <tr>
                  <th>";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 206, $this->source); })()), "hooks", [], "any", false, false, false, 206), "perfs", [], "any", false, false, false, 206)), "html", null, true);
            yield " hooks</th>
                  <th>";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 207, $this->source); })()), "hooks", [], "any", false, false, false, 207), "totalHooksTime", [], "any", false, false, false, 207)), "html", null, true);
            yield " ms</th>
                  <th>";
            // line 208
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 208, $this->source); })()), "hooks", [], "any", false, false, false, 208), "totalHooksMemory", [], "any", false, false, false, 208) / 1048576), 2)), "html", null, true);
            yield " Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Modules <span class=\"badge\">";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 216, $this->source); })()), "modules", [], "any", false, false, false, 216), "perfs", [], "any", false, false, false, 216)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Module</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 228
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 228, $this->source); })()), "modules", [], "any", false, false, false, 228), "perfs", [], "any", false, false, false, 228));
            foreach ($context['_seq'] as $context["profilerModuleName"] => $context["profilerModulePerf"]) {
                // line 229
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["profilerModuleName"], "html", null, true);
                yield "</td>
                  <td>";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerModulePerf"], "total_time", [], "any", false, false, false, 231)), "html", null, true);
                yield " ms</td>
                  <td>";
                // line 232
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerModulePerf"], "total_memory", [], "any", false, false, false, 232) / 1048576), 2)), "html", null, true);
                yield " Mb</td>
                </tr>
                  ";
                // line 234
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["profilerModulePerf"], "details", [], "any", false, false, false, 234));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerDetail"]) {
                    // line 235
                    yield "                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">";
                    // line 238
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerDetail"], "method", [], "any", false, false, false, 238), "html", null, true);
                    yield "</span>
                      </strong>
                    </td>
                    <td>";
                    // line 241
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, $context["profilerDetail"], "time", [], "any", false, false, false, 241)), "html", null, true);
                    yield " ms</td>
                    <td>";
                    // line 242
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, $context["profilerDetail"], "memory", [], "any", false, false, false, 242) / 1048576), 2)), "html", null, true);
                    yield " Mb</td>
                  </tr>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerDetail'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 245
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['profilerModuleName'], $context['profilerModulePerf'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 246
            yield "              </tbody>
              <tfoot>
                <tr>
                  <th>";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 249, $this->source); })()), "modules", [], "any", false, false, false, 249), "perfs", [], "any", false, false, false, 249)), "html", null, true);
            yield " modules</th>
                  <th>";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 250, $this->source); })()), "modules", [], "any", false, false, false, 250), "totalHooksTime", [], "any", false, false, false, 250)), "html", null, true);
            yield " ms</th>
                  <th>";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f", Twig\Extension\CoreExtension::round((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 251, $this->source); })()), "modules", [], "any", false, false, false, 251), "totalHooksMemory", [], "any", false, false, false, 251) / 1048576), 2)), "html", null, true);
            yield " Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Stopwatch SQL <span class=\"badge\">";
            // line 259
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 259, $this->source); })()), "summary", [], "any", false, false, false, 259), "nbQueries", [], "any", false, false, false, 259), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                  <th>Time (ms)</th>
                  <th>Rows</th>
                  <th>Filesort</th>
                  <th>Group By</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 275
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 275, $this->source); })()), "stopwatch", [], "any", false, false, false, 275));
            foreach ($context['_seq'] as $context["_key"] => $context["profilerStopwatch"]) {
                // line 276
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 277
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "id", [], "any", false, false, false, 277), "html", null, true);
                yield "</td>
                  <td>
                    <span class=\"sf-dump-str\">";
                // line 279
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "query", [], "any", false, false, false, 279), "html", null, true);
                yield "</span>
                  </td>
                  <td class=\"font-normal\">";
                // line 281
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%01.3f", (CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "time", [], "any", false, false, false, 281) * 1000)), "html", null, true);
                yield "&nbsp;ms</td>
                  <td class=\"font-normal text-right\">";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "rows", [], "any", false, false, false, 282), "html", null, true);
                yield "</td>
                  <td class=\"font-normal\">";
                // line 283
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "filesort", [], "any", false, false, false, 283)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Yes";
                } else {
                    yield "No";
                }
                yield "</td>
                  <td class=\"font-normal\">";
                // line 284
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "group_by", [], "any", false, false, false, 284)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Yes";
                } else {
                    yield "No";
                }
                yield "</td>
                  <td>
                    <strong>";
                // line 286
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "location", [], "any", false, false, false, 286), "html", null, true);
                yield "</strong><br />
                    ";
                // line 287
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["profilerStopwatch"], "stack", [], "any", false, false, false, 287));
                foreach ($context['_seq'] as $context["_key"] => $context["profilerStopwatchStack"]) {
                    // line 288
                    yield "                      ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["profilerStopwatchStack"], "html", null, true);
                    yield "<br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['profilerStopwatchStack'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 290
                yield "                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['profilerStopwatch'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 293
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Double queries <span class=\"badge\">";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 299, $this->source); })()), "doubles", [], "any", false, false, false, 299), function ($__numQueries__, $__query__) use ($context, $macros) { $context["numQueries"] = $__numQueries__; $context["query"] = $__query__; return ((isset($context["numQueries"]) || array_key_exists("numQueries", $context) ? $context["numQueries"] : (function () { throw new RuntimeError('Variable "numQueries" does not exist.', 299, $this->source); })()) > 1); })), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 310
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 310, $this->source); })()), "doubles", [], "any", false, false, false, 310), function ($__numQueries__, $__query__) use ($context, $macros) { $context["numQueries"] = $__numQueries__; $context["query"] = $__query__; return ($context["numQueries"] > 1); }));
            foreach ($context['_seq'] as $context["query"] => $context["numQueries"]) {
                // line 311
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["numQueries"], "html", null, true);
                yield "</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">";
                // line 315
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["query"], "html", null, true);
                yield "</span>
                    </strong>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['query'], $context['numQueries'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 320
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">SQL Table Stress <span class=\"badge\">";
            // line 326
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 326, $this->source); })()), "sqlTableStress", [], "any", false, false, false, 326)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Table</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 337
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 337, $this->source); })()), "sqlTableStress", [], "any", false, false, false, 337));
            foreach ($context['_seq'] as $context["table"] => $context["numRows"]) {
                // line 338
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 339
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["numRows"], "html", null, true);
                yield "</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">";
                // line 342
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["table"], "html", null, true);
                yield "</span>
                    </strong>
                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['table'], $context['numRows'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 347
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">ObjectModel Instances <span class=\"badge\">";
            // line 353
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 353, $this->source); })()), "objectModelInstances", [], "any", false, false, false, 353)), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Instances</th>
                  <th>Source</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 365
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 365, $this->source); })()), "objectModelInstances", [], "any", false, false, false, 365));
            foreach ($context['_seq'] as $context["objectModelClass"] => $context["objectModelInfo"]) {
                // line 366
                yield "                <tr>
                  <td>";
                // line 367
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["objectModelClass"], "html", null, true);
                yield "</td>
                  <td class=\"font-normal\">";
                // line 368
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["objectModelInfo"]), "html", null, true);
                yield "</td>
                  <td>
                    ";
                // line 370
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["objectModelInfo"]);
                foreach ($context['_seq'] as $context["_key"] => $context["objectModelInfoItem"]) {
                    // line 371
                    yield "                      ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "file", [], "any", false, false, false, 371), [ (string)(isset($context["constRootDir"]) || array_key_exists("constRootDir", $context) ? $context["constRootDir"] : (function () { throw new RuntimeError('Variable "constRootDir" does not exist.', 371, $this->source); })()) => ""]), "html", null, true);
                    yield ":";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "line", [], "any", false, false, false, 371), "html", null, true);
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "function", [], "any", false, false, false, 371), "html", null, true);
                    yield ") [id: ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["objectModelInfoItem"], "id", [], "any", false, false, false, 371), "html", null, true);
                    yield "]
                      <br />
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['objectModelInfoItem'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                yield "                  </td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['objectModelClass'], $context['objectModelInfo'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 377
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Included files <span class=\"badge\">";
            // line 383
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 383, $this->source); })()), "includedFiles", [], "any", false, false, false, 383), function ($__includedFile__) use ($context, $macros) { $context["includedFile"] = $__includedFile__; return !CoreExtension::inFilter("/tools/profiling/", (isset($context["includedFile"]) || array_key_exists("includedFile", $context) ? $context["includedFile"] : (function () { throw new RuntimeError('Variable "includedFile" does not exist.', 383, $this->source); })())); })), "html", null, true);
            yield "</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Filename</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                ";
            // line 394
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::filter($this->env, $this->env->hasExtension(\Twig\Extension\SandboxExtension::class) && $this->env->getExtension(\Twig\Extension\SandboxExtension::class)->isSandboxed($this->source), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 394, $this->source); })()), "includedFiles", [], "any", false, false, false, 394), function ($__includedFile__) use ($context, $macros) { $context["includedFile"] = $__includedFile__; return !CoreExtension::inFilter("/tools/profiling/", $context["includedFile"]); }));
            foreach ($context['_seq'] as $context["k"] => $context["includedFile"]) {
                // line 395
                yield "                <tr>
                  <td class=\"font-normal\">";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield "</td>
                  <td>";
                // line 397
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["includedFile"], [ (string)(isset($context["constRootDir"]) || array_key_exists("constRootDir", $context) ? $context["constRootDir"] : (function () { throw new RuntimeError('Variable "constRootDir" does not exist.', 397, $this->source); })()) => ""]), "html", null, true);
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['includedFile'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 400
            yield "              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/WebProfiler/legacy.html.twig";
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
        return array (  905 => 400,  896 => 397,  892 => 396,  889 => 395,  885 => 394,  871 => 383,  863 => 377,  855 => 374,  839 => 371,  835 => 370,  830 => 368,  826 => 367,  823 => 366,  819 => 365,  804 => 353,  796 => 347,  785 => 342,  779 => 339,  776 => 338,  772 => 337,  758 => 326,  750 => 320,  739 => 315,  733 => 312,  730 => 311,  726 => 310,  712 => 299,  704 => 293,  696 => 290,  687 => 288,  683 => 287,  679 => 286,  670 => 284,  662 => 283,  658 => 282,  654 => 281,  649 => 279,  644 => 277,  641 => 276,  637 => 275,  618 => 259,  607 => 251,  603 => 250,  599 => 249,  594 => 246,  588 => 245,  579 => 242,  575 => 241,  569 => 238,  564 => 235,  560 => 234,  555 => 232,  551 => 231,  547 => 230,  544 => 229,  540 => 228,  525 => 216,  514 => 208,  510 => 207,  506 => 206,  501 => 203,  495 => 202,  486 => 199,  482 => 198,  476 => 195,  471 => 192,  467 => 191,  462 => 189,  458 => 188,  454 => 187,  451 => 186,  447 => 185,  432 => 173,  429 => 172,  421 => 166,  415 => 165,  412 => 164,  409 => 163,  403 => 160,  399 => 159,  395 => 158,  391 => 157,  387 => 156,  384 => 155,  381 => 154,  376 => 153,  373 => 152,  371 => 151,  354 => 137,  351 => 136,  349 => 135,  341 => 129,  337 => 127,  333 => 125,  331 => 124,  328 => 123,  326 => 122,  318 => 117,  311 => 113,  304 => 109,  297 => 105,  290 => 101,  283 => 97,  274 => 90,  268 => 86,  259 => 83,  255 => 82,  252 => 81,  248 => 80,  232 => 67,  227 => 64,  225 => 63,  218 => 59,  209 => 55,  206 => 54,  199 => 50,  196 => 49,  194 => 48,  188 => 45,  181 => 41,  178 => 40,  171 => 36,  168 => 35,  166 => 34,  159 => 29,  156 => 28,  153 => 27,  140 => 26,  124 => 19,  121 => 18,  108 => 17,  95 => 14,  92 => 13,  88 => 12,  84 => 10,  81 => 9,  78 => 8,  65 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% block toolbar %}
  {% set icon %}
    {% if collector.isProfilerEnabled %}
    🕵️‍♂️&nbsp;<span class=\"sf-toolbar-value\">Legacy</span>
    {% endif %}
  {% endset %}

  {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: true}) }}
{% endblock %}

{% block menu %}
  {% if collector.isProfilerEnabled %}
  <span class=\"label\">
    <span class=\"icon\">🕵️‍♂️</span>
    <strong>Legacy</strong>
  </span>
  {% endif %}
{% endblock %}

{% block panel %}
  {% if collector.isProfilerEnabled %}
    {% set constRootDir = constant(\x27_PS_ROOT_DIR_\x27) ~ \x27/\x27 %}
    <div class=\"sf-tabs\">
      <div class=\"tab\">
        <h3 class=\"tab-title\">Summary</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            {% if collector.summary.loadTime is not null %}
            <div class=\"metric\">
                <span class=\"value\">{{ \x27%01.3f\x27|format(collector.summary.loadTime) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Load Time</span>
            </div>
            {% endif %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.summary.queryTime }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Querying Time</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ collector.summary.nbQueries }}</span>
                <span class=\"label\">Queries</span>
            </div>
            {% if collector.summary.peakMemoryUsage is not null %}
            <div class=\"metric\">
                <span class=\"value\">{{ \x27%0.1f\x27|format((collector.summary.peakMemoryUsage / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Memory Peak Usage</span>
            </div>
            {% endif %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.summary.includedFiles }} <span class=\"unit\">files</span> - {{ \x27%0.2f\x27|format((collector.summary.totalFileSize / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                <span class=\"label\">Included Files</span>
            </div>
            <div class=\"metric\">
                <span class=\"value\">{{ \x27%0.2f\x27|format((collector.summary.totalCacheSize / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                <span class=\"label\">PS Cache Size</span>
            </div>
          </div>
          {% if collector.summary.globalVarSize is not empty %}
            <h3>Global vars</h3>
            <div class=\"metrics\">
              <div class=\"metric\">
                  <span class=\"value\">{{ \x27%0.2f\x27|format((collector.summary.totalGlobalVarSize / 1048576)|round(2)) }} <span class=\"unit\">Mb</span></span>
                  <span class=\"label\">Global vars</span>
              </div>
            </div>
            <div class=\"sf-toolbar-info-piece\">
              <table>
                <thead>
                  <tr>
                    <th>Variable</th>
                    <th>Size</th>
                  </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\">
                  {% for key, value in collector.summary.globalVarSize %}
                    <tr>
                      <td class=\"text-small\">{{ key }}</td>
                      <td>{{ value }}k</td>
                    </tr>
                  {% endfor %}
                </tbody>
                </table>
            </div>
          {% endif %}
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Configuration</h3>
        <div class=\"tab-content\">
          <div class=\"metrics\">
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.psVersion }}</span>
              <span class=\"label\">PrestaShop Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.phpVersion }}</span>
              <span class=\"label\">PHP Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.mysqlVersion }}</span>
              <span class=\"label\">MySQL Version</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.memoryLimit }}</span>
              <span class=\"label\">Memory Limit</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.maxExecutionTime }}</span>
              <span class=\"label\">Max Execution Time</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">{{ collector.configuration.smartyCache is same as \x271\x27 ? \x27enabled\x27 : \x27disabled\x27 }}</span>
              <span class=\"label\">Smarty Cache</span>
            </div>
            <div class=\"metric\">
              <span class=\"value\">
                {% if collector.configuration.smartyCompilation is same as \x270\x27 %}
                  never recompile
                {% elseif collector.configuration.smartyCompilation is same as \x271\x27 %}
                  auto
                {% else %}
                  force compile
                {% endif %}
              </span>
              <span class=\"label\">Smarty Compilation</span>
            </div>
          </div>
        </div>
      </div>
      {% if collector.run.profiler|length > 0 %}
      <div class=\"tab\">
        <h3 class=\"tab-title\">Run <span class=\"badge\">{{ collector.run.profiler|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th></th>
                  <th>Time</th>
                  <th>Cumulated Time</th>
                  <th>Memory Usage</th>
                  <th>Memory Peak Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% set profilerLastTime = collector.run.startTime %}
                {% set profilerLastMemUsage = 0 %}
                {% for profilerRow in collector.run.profiler %}
                  {% if not (profilerRow.block == \x27checkAccess\x27 and profilerRow.time == profilerLastTime) %}
                  <tr>
                    <td class=\"text-small\">{{ profilerRow.block }}</td>
                    <td>{{ \x27%01.3f\x27|format(profilerRow.time - profilerLastTime) }}</td>
                    <td>{{ \x27%01.3f\x27|format(profilerRow.time - collector.run.startTime) }}</td>
                    <td>{{ \x27%0.2f\x27|format(((profilerRow.memory_usage - profilerLastMemUsage) / 1048576)|round(2)) }} Mb</td>
                    <td>{{ \x27%0.1f\x27|format((profilerRow.peak_memory_usage / 1048576)|round(2)) }} Mb</td>
                  </tr>
                  {% endif %}
                  {% set profilerLastTime = profilerRow.time %}
                  {% set profilerLastMemUsage = profilerRow.memory_usage %}
                {% endfor %}
              </tbody>
              </table>
          </div>
        </div>
      </div>
      {% endif %}
      <div class=\"tab\">
        <h3 class=\"tab-title\">Hooks <span class=\"badge\">{{ collector.hooks.perfs|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Hook</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for profilerHookName, profilerHookPerf in collector.hooks.perfs %}
                <tr>
                  <td class=\"font-normal\">{{ profilerHookName }}</td>
                  <td>{{ \x27%01.3f\x27|format(profilerHookPerf.time) }} ms</td>
                  <td>{{ \x27%0.2f\x27|format((profilerHookPerf.memory / 1048576)|round(2)) }} Mb</td>
                </tr>
                  {% for profilerModule in profilerHookPerf.modules %}
                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">{{ profilerModule.module }}</span>
                      </strong>
                    </td>
                    <td>{{ \x27%01.3f\x27|format(profilerModule.time) }} ms</td>
                    <td>{{ \x27%0.2f\x27|format((profilerModule.memory / 1048576)|round(2)) }} Mb</td>
                  </tr>
                  {% endfor %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <th>{{ collector.hooks.perfs|length }} hooks</th>
                  <th>{{ \x27%01.3f\x27|format(collector.hooks.totalHooksTime) }} ms</th>
                  <th>{{ \x27%0.2f\x27|format((collector.hooks.totalHooksMemory / 1048576)|round(2)) }} Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Modules <span class=\"badge\">{{ collector.modules.perfs|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Module</th>
                  <th>Time</th>
                  <th>Memory Usage</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for profilerModuleName, profilerModulePerf in collector.modules.perfs %}
                <tr>
                  <td class=\"font-normal\">{{ profilerModuleName }}</td>
                  <td>{{ \x27%01.3f\x27|format(profilerModulePerf.total_time) }} ms</td>
                  <td>{{ \x27%0.2f\x27|format((profilerModulePerf.total_memory / 1048576)|round(2)) }} Mb</td>
                </tr>
                  {% for profilerDetail in profilerModulePerf.details %}
                  <tr>
                    <td class=\"text-right\">
                      <strong>
                        <span class=\"sf-dump-str\">{{ profilerDetail.method }}</span>
                      </strong>
                    </td>
                    <td>{{ \x27%01.3f\x27|format(profilerDetail.time) }} ms</td>
                    <td>{{ \x27%0.2f\x27|format((profilerDetail.memory / 1048576)|round(2)) }} Mb</td>
                  </tr>
                  {% endfor %}
                {% endfor %}
              </tbody>
              <tfoot>
                <tr>
                  <th>{{ collector.modules.perfs|length }} modules</th>
                  <th>{{ \x27%01.3f\x27|format(collector.modules.totalHooksTime) }} ms</th>
                  <th>{{ \x27%0.2f\x27|format((collector.modules.totalHooksMemory / 1048576)|round(2)) }} Mb</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Stopwatch SQL <span class=\"badge\">{{ collector.summary.nbQueries }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                  <th>Time (ms)</th>
                  <th>Rows</th>
                  <th>Filesort</th>
                  <th>Group By</th>
                  <th>Location</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for profilerStopwatch in collector.stopwatch %}
                <tr>
                  <td class=\"font-normal\">{{ profilerStopwatch.id }}</td>
                  <td>
                    <span class=\"sf-dump-str\">{{ profilerStopwatch.query }}</span>
                  </td>
                  <td class=\"font-normal\">{{ \x27%01.3f\x27|format(profilerStopwatch.time * 1000) }}&nbsp;ms</td>
                  <td class=\"font-normal text-right\">{{ profilerStopwatch.rows }}</td>
                  <td class=\"font-normal\">{% if profilerStopwatch.filesort %}Yes{% else %}No{% endif %}</td>
                  <td class=\"font-normal\">{% if profilerStopwatch.group_by %}Yes{% else %}No{% endif %}</td>
                  <td>
                    <strong>{{ profilerStopwatch.location }}</strong><br />
                    {% for profilerStopwatchStack in profilerStopwatch.stack %}
                      {{ profilerStopwatchStack }}<br />
                    {% endfor %}
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Double queries <span class=\"badge\">{{ collector.doubles|filter((numQueries, query) => numQueries > 1)|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Query</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for query, numQueries in collector.doubles|filter((numQueries, query) => numQueries > 1) %}
                <tr>
                  <td class=\"font-normal\">{{ numQueries }}</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">{{ query }}</span>
                    </strong>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">SQL Table Stress <span class=\"badge\">{{ collector.sqlTableStress|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Table</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for table, numRows in collector.sqlTableStress %}
                <tr>
                  <td class=\"font-normal\">{{ numRows }}</td>
                  <td>
                    <strong>
                      <span class=\"sf-dump-str\">{{ table }}</span>
                    </strong>
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">ObjectModel Instances <span class=\"badge\">{{ collector.objectModelInstances|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Instances</th>
                  <th>Source</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for objectModelClass, objectModelInfo in collector.objectModelInstances %}
                <tr>
                  <td>{{ objectModelClass }}</td>
                  <td class=\"font-normal\">{{ objectModelInfo|length }}</td>
                  <td>
                    {% for objectModelInfoItem in objectModelInfo %}
                      {{ objectModelInfoItem.file|replace({(constRootDir): \x27\x27}) }}:{{ objectModelInfoItem.line }} ({{ objectModelInfoItem.function }}) [id: {{ objectModelInfoItem.id }}]
                      <br />
                    {% endfor %}
                  </td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <div class=\"tab\">
        <h3 class=\"tab-title\">Included files <span class=\"badge\">{{ collector.includedFiles|filter((includedFile) => \x27/tools/profiling/\x27 not in includedFile)|length }}</span></h3>
        <div class=\"tab-content\">
          <div class=\"sf-toolbar-info-piece\">
            <table>
              <thead>
                <tr>
                  <th>#</th>
                  <th>Filename</th>
                </tr>
              </thead>
              <tbody class=\"sf-toolbar-ajax-request-list\">
                {% for k, includedFile in collector.includedFiles|filter((includedFile) => \x27/tools/profiling/\x27 not in includedFile) %}
                <tr>
                  <td class=\"font-normal\">{{ k }}</td>
                  <td>{{ includedFile|replace({(constRootDir): \x27\x27}) }}</td>
                </tr>
                {% endfor %}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/legacy.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\WebProfiler\\legacy.html.twig");
    }
}
