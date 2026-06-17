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

/* @PrestaShop/Admin/WebProfiler/hooks_collector.html.twig */
class __TwigTemplate_c8445abb0cfd28fdeb6b6ffbda7e554a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig"));

        // line 7
        $macros["helper"] = $this->macros["helper"] = $this;
        // line 5
        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 9
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

        // line 10
        yield "    ";
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 11
            yield "        ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/event.svg");
            yield "
        <span class=\"sf-toolbar-value\">Hooks (";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 12, $this->source); })()), "calledHooks", [], "any", false, false, false, 12)), "html", null, true);
            yield ")</span>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 14
        yield "
    ";
        // line 15
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 16
            yield "        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 18, $this->source); })()), "calledHooks", [], "any", false, false, false, 18)), "html", null, true);
            yield "
                    Hooks called and received by modules
                </b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 31, $this->source); })()), "calledHooks", [], "any", false, false, false, 31));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
                // line 32
                yield "                            <tr><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["hookName"], "html", null, true);
                yield "</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["hooks"]), "html", null, true);
                yield "</td></tr>
                        ";
                $context['_iterated'] = true;
            }
            // line 33
            if (!$context['_iterated']) {
                // line 34
                yield "                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['hookName'], $context['hooks'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            yield "                    </tbody>
                </table>
            </div>
        </div>
    ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 41
        yield "
    ";
        // line 42
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "    ";
        // line 48
        yield "    <span class=\"label\">
        <span class=\"icon\">";
        // line 49
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/event.svg");
        yield "</span>
        <strong>Hooks</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 54
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

        // line 55
        yield "    <h2>Hooks</h2>

    ";
        // line 57
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 57, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 57))) {
            // line 58
            yield "        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    ";
        } else {
            // line 62
            yield "        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called and received by modules
                    <span class=\"badge\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 66, $this->source); })()), "calledHooks", [], "any", false, false, false, 66)), "html", null, true);
            yield "</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop and there are active modules listening and receiving them.
                </p>
                <div class=\"tab-content\">
                    ";
            // line 72
            yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 72, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 72, $this->source); })()), "calledHooks", [], "any", false, false, false, 72), true]);
            yield "
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called but not received by modules
                    <span class=\"badge\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 79, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 79)), "html", null, true);
            yield "</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop but no modules
                    have subscribed to them.
                </p>
                <div class=\"tab-content\">
                    ";
            // line 86
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 86))) {
                // line 87
                yield "                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    ";
            } else {
                // line 98
                yield "                        ";
                yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 98, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 98, $this->source); })()), "notCalledHooks", [], "any", false, false, false, 98), false]);
                yield "
                    ";
            }
            // line 100
            yield "                </div>
            </div>

          <div class=\"tab\">
            <h3 class=\"tab-title\">
              Not registered hooks
              <span class=\"badge\">";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "notRegisteredHooks", [], "any", false, false, false, 106)), "html", null, true);
            yield "</span>
            </h3>
            <p>
              These hooks have been dispatched by PrestaShop but they are not registered in the database, meaning no modules registered them
              and they were not added in the hook fixtures for core hooks.
            </p>
            <div class=\"tab-content\">
              ";
            // line 113
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "notRegisteredHooks", [], "any", false, false, false, 113))) {
                // line 114
                yield "                <div class=\"empty\">
                  <p>
                    <strong>There are no unregistered hooks</strong>.
                  </p>
                  <p>
                    Seems like all hooks had appropriate listeners so they were all correctly registered in the database.
                  </p>
                </div>
              ";
            } else {
                // line 123
                yield "                ";
                yield $macros["helper"]->getTemplateForMacro("macro_render_table", $context, 123, $this->getSourceContext())->macro_render_table(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 123, $this->source); })()), "notRegisteredHooks", [], "any", false, false, false, 123), false]);
                yield "
              ";
            }
            // line 125
            yield "            </div>
          </div>
        </div>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 131
    public function macro_render_table($hookList = null, $hookModules = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "hookList" => $hookList,
            "hookModules" => $hookModules,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "render_table"));

            // line 132
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["hookList"]) || array_key_exists("hookList", $context) ? $context["hookList"] : (function () { throw new RuntimeError('Variable "hookList" does not exist.', 132, $this->source); })()));
            foreach ($context['_seq'] as $context["hookName"] => $context["hooks"]) {
                // line 133
                yield "        <h3>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["hookName"], "html", null, true);
                yield "</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    ";
                // line 140
                if ((($tmp = (isset($context["hookModules"]) || array_key_exists("hookModules", $context) ? $context["hookModules"] : (function () { throw new RuntimeError('Variable "hookModules" does not exist.', 140, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 141
                    yield "                        <th>Hooked modules</th>
                    ";
                }
                // line 143
                yield "                </tr>
            </thead>
            <tbody>
            ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable($context["hooks"]);
                foreach ($context['_seq'] as $context["position"] => $context["hook"]) {
                    // line 147
                    yield "            <tr>
                <td>
                    ";
                    // line 149
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "args", [], "any", false, false, false, 149));
                    yield "
                </td>
                <td>
                    <span class=\"text-muted\">";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "location", [], "any", false, false, false, 152), "html", null, true);
                    yield "</span>
                </td>
                ";
                    // line 154
                    if ((($tmp = (isset($context["hookModules"]) || array_key_exists("hookModules", $context) ? $context["hookModules"] : (function () { throw new RuntimeError('Variable "hookModules" does not exist.', 154, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 155
                        yield "                    <td>
                        ";
                        // line 156
                        $context["modules"] = CoreExtension::getAttribute($this->env, $this->source, $context["hook"], "modules", [], "any", false, false, false, 156);
                        // line 157
                        yield "                        ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["modules"]) || array_key_exists("modules", $context) ? $context["modules"] : (function () { throw new RuntimeError('Variable "modules" does not exist.', 157, $this->source); })()));
                        foreach ($context['_seq'] as $context["moduleName"] => $context["module"]) {
                            // line 158
                            yield "                            <h4><b>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["moduleName"]), "html", null, true);
                            yield "</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                ";
                            // line 166
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["module"], "callback", [], "any", true, true, false, 166)) {
                                // line 167
                                yield "                                <tr>
                                    <td>";
                                // line 168
                                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "callback", [], "any", false, false, false, 168), "args", [], "any", false, false, false, 168));
                                yield "</td>
                                </tr>
                                ";
                            } else {
                                // line 171
                                yield "                                <tr>
                                    <td>";
                                // line 172
                                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "widget", [], "any", false, false, false, 172), "args", [], "any", false, false, false, 172));
                                yield "</td>
                                </tr>
                                ";
                            }
                            // line 175
                            yield "                            </table>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['moduleName'], $context['module'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 177
                        yield "                    </td>
                ";
                    }
                    // line 179
                    yield "            </tr>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['position'], $context['hook'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                yield "            </tbody>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['hookName'], $context['hooks'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
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
        return "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig";
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
        return array (  461 => 181,  454 => 179,  450 => 177,  443 => 175,  437 => 172,  434 => 171,  428 => 168,  425 => 167,  423 => 166,  411 => 158,  406 => 157,  404 => 156,  401 => 155,  399 => 154,  394 => 152,  388 => 149,  384 => 147,  380 => 146,  375 => 143,  371 => 141,  369 => 140,  358 => 133,  353 => 132,  334 => 131,  319 => 125,  313 => 123,  302 => 114,  300 => 113,  290 => 106,  282 => 100,  276 => 98,  263 => 87,  261 => 86,  251 => 79,  241 => 72,  232 => 66,  226 => 62,  220 => 58,  218 => 57,  214 => 55,  201 => 54,  186 => 49,  183 => 48,  181 => 47,  168 => 46,  154 => 42,  151 => 41,  143 => 36,  136 => 34,  134 => 33,  125 => 32,  120 => 31,  104 => 18,  100 => 16,  98 => 15,  95 => 14,  89 => 12,  84 => 11,  81 => 10,  68 => 9,  57 => 5,  55 => 7,  42 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% extends \x27@WebProfiler/Profiler/layout.html.twig\x27 %}

{% import _self as helper %}

{% block toolbar %}
    {% set icon %}
        {{ include(\x27@WebProfiler/Icon/event.svg\x27) }}
        <span class=\"sf-toolbar-value\">Hooks ({{ collector.calledHooks|length }})</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <div class=\"sf-toolbar-info-piece\">
                <b class=\"sf-toolbar-ajax-info\">{{ collector.calledHooks|length }}
                    Hooks called and received by modules
                </b>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <table class=\"sf-toolbar-ajax-requests\">
                    <thead>
                    <tr>
                        <th>Hook name</th>
                        <th>Call(s)</th>
                    </tr>
                    </thead>
                    <tbody class=\"sf-toolbar-ajax-request-list\">
                        {% for hookName, hooks in collector.calledHooks %}
                            <tr><td>{{ hookName }}</td><td>{{ hooks|length }}</td></tr>
                        {% else %}
                            <tr><td colspan=\"2\">No hook dispatched.</td></tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
    {% endset %}

    {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: true}) }}

{% endblock %}

{% block menu %}
    {# This left-hand menu appears when using the full-screen profiler. #}
    <span class=\"label\">
        <span class=\"icon\">{{ include(\x27@WebProfiler/Icon/event.svg\x27) }}</span>
        <strong>Hooks</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Hooks</h2>

    {% if collector.notCalledHooks is empty %}
        <div class=\"empty\">
            <p>No Hooks have been recorded. Check that debugging is enabled in the kernel.</p>
        </div>
    {% else %}
        <div class=\"sf-tabs\">
            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called and received by modules
                    <span class=\"badge\">{{ collector.calledHooks|length }}</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop and there are active modules listening and receiving them.
                </p>
                <div class=\"tab-content\">
                    {{ helper.render_table(collector.calledHooks, true) }}
                </div>
            </div>

            <div class=\"tab\">
                <h3 class=\"tab-title\">
                    Hooks called but not received by modules
                    <span class=\"badge\">{{ collector.notCalledHooks|length }}</span>
                </h3>
                <p>
                    These hooks have been dispatched by PrestaShop but no modules
                    have subscribed to them.
                </p>
                <div class=\"tab-content\">
                    {% if collector.notCalledHooks is empty %}
                        <div class=\"empty\">
                            <p>
                                <strong>There are no uncalled hooks</strong>.
                            </p>
                            <p>
                                All hooks were called for this request or an error occurred
                                when trying to collect uncalled listeners (in which case check the
                                logs to get more information).
                            </p>
                        </div>
                    {% else %}
                        {{ helper.render_table(collector.notCalledHooks, false) }}
                    {% endif %}
                </div>
            </div>

          <div class=\"tab\">
            <h3 class=\"tab-title\">
              Not registered hooks
              <span class=\"badge\">{{ collector.notRegisteredHooks|length }}</span>
            </h3>
            <p>
              These hooks have been dispatched by PrestaShop but they are not registered in the database, meaning no modules registered them
              and they were not added in the hook fixtures for core hooks.
            </p>
            <div class=\"tab-content\">
              {% if collector.notRegisteredHooks is empty %}
                <div class=\"empty\">
                  <p>
                    <strong>There are no unregistered hooks</strong>.
                  </p>
                  <p>
                    Seems like all hooks had appropriate listeners so they were all correctly registered in the database.
                  </p>
                </div>
              {% else %}
                {{ helper.render_table(collector.notRegisteredHooks, false) }}
              {% endif %}
            </div>
          </div>
        </div>
    {% endif %}
{% endblock %}

{% macro render_table(hookList, hookModules) %}
    {% for hookName, hooks in hookList %}
        <h3>{{ hookName }}</h3>

        <table>
            <thead>
                <tr>
                    <th>Arguments</th>
                    <th>Location</th>
                    {% if hookModules %}
                        <th>Hooked modules</th>
                    {% endif %}
                </tr>
            </thead>
            <tbody>
            {% for position, hook in hooks %}
            <tr>
                <td>
                    {{ profiler_dump(hook.args) }}
                </td>
                <td>
                    <span class=\"text-muted\">{{ hook.location }}</span>
                </td>
                {% if hookModules %}
                    <td>
                        {% set modules = hook.modules %}
                        {% for moduleName, module in modules %}
                            <h4><b>{{ moduleName|capitalize }}</b></h4>
                            <table>
                                <thead>
                                <tr>
                                    <th>Module arguments</th>
                                </tr>
                                </thead>

                                {% if module.callback is defined %}
                                <tr>
                                    <td>{{ profiler_dump(module.callback.args) }}</td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td>{{ profiler_dump(module.widget.args) }}</td>
                                </tr>
                                {% endif %}
                            </table>
                        {% endfor %}
                    </td>
                {% endif %}
            </tr>
            {% endfor %}
            </tbody>
        </table>
    {% endfor %}
{% endmacro %}
", "@PrestaShop/Admin/WebProfiler/hooks_collector.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\WebProfiler\\hooks_collector.html.twig");
    }
}
