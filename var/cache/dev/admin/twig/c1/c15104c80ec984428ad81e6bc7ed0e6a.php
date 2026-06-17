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

/* @PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig */
class __TwigTemplate_58378c2fc0d8e39b76242057c569fc10 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig"));

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
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/request.svg");
            yield "
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 12
        yield "
  ";
        // line 13
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 14
            yield "    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        ";
            // line 20
            $context["commandsCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 20, $this->source); })()), "executedCommands", [], "any", false, false, false, 20));
            // line 21
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            if (((isset($context["commandsCount"]) || array_key_exists("commandsCount", $context) ? $context["commandsCount"] : (function () { throw new RuntimeError('Variable "commandsCount" does not exist.', 21, $this->source); })()) > 0)) {
                yield "green";
            } else {
                yield "red";
            }
            yield "\">
          ";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["commandsCount"]) || array_key_exists("commandsCount", $context) ? $context["commandsCount"] : (function () { throw new RuntimeError('Variable "commandsCount" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        ";
            // line 27
            $context["queriesCount"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 27, $this->source); })()), "executedQueries", [], "any", false, false, false, 27));
            // line 28
            yield "        <span class=\"sf-toolbar-status sf-toolbar-status-";
            if (((isset($context["queriesCount"]) || array_key_exists("queriesCount", $context) ? $context["queriesCount"] : (function () { throw new RuntimeError('Variable "queriesCount" does not exist.', 28, $this->source); })()) > 0)) {
                yield "green";
            } else {
                yield "red";
            }
            yield "\">
          ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["queriesCount"]) || array_key_exists("queriesCount", $context) ? $context["queriesCount"] : (function () { throw new RuntimeError('Variable "queriesCount" does not exist.', 29, $this->source); })()), "html", null, true);
            yield "
        </span>
      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        yield "
  ";
        // line 35
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "  <span class=\"label\">
    <span class=\"icon\">";
        // line 40
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Icon/request.svg");
        yield "</span>
    <strong>Commands / Queries</strong>
  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
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

        // line 46
        yield "  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        ";
        // line 58
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 58, $this->source); })()), "executedCommands", [], "any", false, false, false, 58))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "executedCommands", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["command"]) {
                // line 60
                yield "            <tr>
              <td class=\"text-small\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "command", [], "any", false, false, false, 61), "html", null, true);
                yield "</td>
              <td class=\"text-small\">";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["command"], "command_handler", [], "any", false, false, false, 62), "html", null, true);
                yield "</td>
              <td class=\"text-small\">";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 63), "file", [], "any", false, false, false, 63), "html", null, true);
                yield ":";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["command"], "trace", [], "any", false, false, false, 63), "line", [], "any", false, false, false, 63), "html", null, true);
                yield "</td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['command'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            yield "        ";
        } else {
            // line 67
            yield "          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        ";
        }
        // line 71
        yield "      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      ";
        // line 85
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 85, $this->source); })()), "executedQueries", [], "any", false, false, false, 85))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 86, $this->source); })()), "executedQueries", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 87
                yield "          <tr>
            <td class=\"text-small\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "query", [], "any", false, false, false, 88), "html", null, true);
                yield "</td>
            <td class=\"text-small\">";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["query"], "query_handler", [], "any", false, false, false, 89), "html", null, true);
                yield "</td>
            <td class=\"text-small\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 90), "file", [], "any", false, false, false, 90), "html", null, true);
                yield ":";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["query"], "trace", [], "any", false, false, false, 90), "line", [], "any", false, false, false, 90), "html", null, true);
                yield "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['query'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "      ";
        } else {
            // line 94
            yield "        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      ";
        }
        // line 98
        yield "      </tbody>
    </table>
  </div>
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
        return "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig";
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
        return array (  307 => 98,  301 => 94,  298 => 93,  287 => 90,  283 => 89,  279 => 88,  276 => 87,  271 => 86,  269 => 85,  253 => 71,  247 => 67,  244 => 66,  233 => 63,  229 => 62,  225 => 61,  222 => 60,  217 => 59,  215 => 58,  201 => 46,  188 => 45,  173 => 40,  170 => 39,  157 => 38,  144 => 35,  141 => 34,  132 => 29,  123 => 28,  121 => 27,  113 => 22,  104 => 21,  102 => 20,  94 => 14,  92 => 13,  89 => 12,  81 => 9,  78 => 8,  65 => 7,  42 => 5,);
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
    {{ include(\x27@WebProfiler/Icon/request.svg\x27) }}
    <span class=\"sf-toolbar-value\">Commands / Queries</span>
  {% endset %}

  {% set text %}
    <div class=\"sf-toolbar-info-piece\">
      <div class=\"sf-toolbar-info-piece\">
        <b class=\"sf-toolbar-ajax-info\">Commands / Queries</b>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Commands</b>
        {% set commandsCount = collector.executedCommands|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if commandsCount > 0 %}green{% else %}red{% endif %}\">
          {{ commandsCount }}
        </span>
      </div>
      <div class=\"sf-toolbar-info-piece\">
        <b>Queries</b>
        {% set queriesCount = collector.executedQueries|length %}
        <span class=\"sf-toolbar-status sf-toolbar-status-{% if queriesCount > 0 %}green{% else %}red{% endif %}\">
          {{ queriesCount }}
        </span>
      </div>
    </div>
  {% endset %}

  {{ include(\x27@WebProfiler/Profiler/toolbar_item.html.twig\x27, {link: true}) }}
{% endblock %}

{% block menu %}
  <span class=\"label\">
    <span class=\"icon\">{{ include(\x27@WebProfiler/Icon/request.svg\x27) }}</span>
    <strong>Commands / Queries</strong>
  </span>
{% endblock %}

{% block panel %}
  <h2>Commands</h2>

  <div class=\"sf-toolbar-info-piece\">
    <table id=\"cqrs-commands-log\">
      <thead>
        <tr>
          <th>Command</th>
          <th>Command Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
        {% if collector.executedCommands is not empty %}
          {% for command in collector.executedCommands %}
            <tr>
              <td class=\"text-small\">{{ command.command }}</td>
              <td class=\"text-small\">{{ command.command_handler }}</td>
              <td class=\"text-small\">{{ command.trace.file }}:{{ command.trace.line }}</td>
            </tr>
          {% endfor %}
        {% else %}
          <tr>
            <td colspan=\"3\" class=\"font-normal\">No Commands where executed during request.</td>
          </tr>
        {% endif %}
      </tbody>
    </table>

    <h2>Queries</h2>

    <table id=\"cqrs-queries-log\">
      <thead>
        <tr>
          <th>Query</th>
          <th>Query Handler</th>
          <th>Called from</th>
        </tr>
      </thead>
      <tbody class=\"sf-toolbar-ajax-request-list\">
      {% if collector.executedQueries is not empty %}
        {% for query in collector.executedQueries %}
          <tr>
            <td class=\"text-small\">{{ query.query }}</td>
            <td class=\"text-small\">{{ query.query_handler }}</td>
            <td class=\"text-small\">{{ query.trace.file }}:{{ query.trace.line }}</td>
          </tr>
        {% endfor %}
      {% else %}
        <tr>
          <td colspan=\"3\" class=\"font-normal\">No Queries where executed during request.</td>
        </tr>
      {% endif %}
      </tbody>
    </table>
  </div>
{% endblock %}
", "@PrestaShop/Admin/WebProfiler/commands_and_queries.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\WebProfiler\\commands_and_queries.html.twig");
    }
}
