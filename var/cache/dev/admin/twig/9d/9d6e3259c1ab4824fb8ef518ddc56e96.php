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

/* @PrestaShop/Admin/Common/Grid/Blocks/table.html.twig */
class __TwigTemplate_26ea17b2d60f1f09b74ab141431cf542 extends Template
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
            'grid_table_head' => [$this, 'block_grid_table_head'],
            'grid_table_body' => [$this, 'block_grid_table_body'],
            'grid_table_footer' => [$this, 'block_grid_table_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig"));

        // line 5
        yield "
";
        // line 6
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableBefore", ["grid" =>         // line 7
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 7, $this->source); })()), "legacy_controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 8
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "attributes", [], "any", false, false, false, 8), "get", ["_legacy_controller"], "method", false, false, false, 8), "controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 9
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "attributes", [], "any", false, false, false, 9), "get", ["_controller"], "method", false, false, false, 9)]);
        // line 11
        yield "

";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 13, $this->source); })()), "filter_form", [], "any", false, false, false, 13), 'form_start', ["attr" => ["id" => (CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13) . "_filter_form"), "class" => "table-responsive"]]);
        yield "

<table class=\"grid-table js-grid-table table ";
        // line 15
        if ((($tmp = $this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->isOrderingColumn((isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 15, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "grid-ordering-column";
        }
        yield " ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 15, $this->source); })()), "attributes", [], "any", false, false, false, 15), "is_empty_state", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "border-0";
        }
        yield "\"
       id=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), "html", null, true);
        yield "_grid_table\"
       data-query=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 17, $this->source); })()), "data", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
       data-limit=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 18, $this->source); })()), "pagination", [], "any", false, false, false, 18), "limit", [], "any", false, false, false, 18), "html", null, true);
        yield "\"
       data-offset=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 19, $this->source); })()), "pagination", [], "any", false, false, false, 19), "offset", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
       data-total=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 20, $this->source); })()), "data", [], "any", false, false, false, 20), "records_total", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
>
  <thead class=\"thead-default\">
  ";
        // line 23
        yield from $this->unwrap()->yieldBlock('grid_table_head', $context, $blocks);
        // line 29
        yield "  </thead>
  <tbody>
  ";
        // line 31
        yield from $this->unwrap()->yieldBlock('grid_table_body', $context, $blocks);
        // line 49
        yield "  </tbody>
  ";
        // line 50
        yield from $this->unwrap()->yieldBlock('grid_table_footer', $context, $blocks);
        // line 51
        yield "</table>

";
        // line 53
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 53, $this->source); })()), "filter_form", [], "any", false, false, false, 53), 'form_end');
        yield "

";
        // line 55
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminGridTableAfter", ["grid" =>         // line 56
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 56, $this->source); })()), "legacy_controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 57
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_legacy_controller"], "method", false, false, false, 57), "controller" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 58
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", ["_controller"], "method", false, false, false, 58)]);
        // line 60
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 23
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_table_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_head"));

        // line 24
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 24, $this->source); })())]);
        yield "
    ";
        // line 25
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 25, $this->source); })()), "actions", [], "any", false, false, false, 25), "bulk", [], "any", false, false, false, 25)) > 0) || (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 25, $this->source); })()), "filter_form", [], "any", false, false, false, 25)) > 1))) {
            // line 26
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 26, $this->source); })())]);
            yield "
    ";
        }
        // line 28
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_table_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_body"));

        // line 32
        yield "    ";
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 32, $this->source); })()), "data", [], "any", false, false, false, 32), "records", [], "any", false, false, false, 32))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 33
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 33, $this->source); })()), "data", [], "any", false, false, false, 33), "records", [], "any", false, false, false, 33));
            foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
                // line 34
                yield "        <tr>
          ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 35, $this->source); })()), "columns", [], "any", false, false, false, 35));
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 36
                    yield "            <td
              ";
                    // line 37
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 37) == "identifier")) {
                        yield "data-identifier=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["record"], CoreExtension::getAttribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 37), [], "array", false, false, false, 37), "html", null, true);
                        yield "\"";
                    }
                    // line 38
                    yield "              class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "type", [], "any", false, false, false, 38), "html", null, true);
                    yield "-type column-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "id", [], "any", false, false, false, 38), "html", null, true);
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 38), "clickable", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 38), "clickable", [], "any", false, false, false, 38))) {
                        yield " clickable";
                    }
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, true, false, 38), "alignment", [], "any", true, true, false, 38) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 38), "alignment", [], "any", false, false, false, 38))) {
                        yield " text-";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "options", [], "any", false, false, false, 38), "alignment", [], "any", false, false, false, 38), "html", null, true);
                    }
                    yield "\"
            >
              ";
                    // line 40
                    yield $this->extensions['PrestaShopBundle\Twig\Extension\GridExtension']->renderColumnContent($context["record"], $context["column"], (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 40, $this->source); })()));
                    yield "
            </td>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['column'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                yield "        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['record'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "    ";
        } else {
            // line 46
            yield "      ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig", ["grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 46, $this->source); })())]);
            yield "
    ";
        }
        // line 48
        yield "  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_grid_table_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "grid_table_footer"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig";
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
        return array (  264 => 50,  253 => 48,  247 => 46,  244 => 45,  237 => 43,  228 => 40,  213 => 38,  207 => 37,  204 => 36,  200 => 35,  197 => 34,  192 => 33,  189 => 32,  176 => 31,  165 => 28,  159 => 26,  157 => 25,  152 => 24,  139 => 23,  127 => 60,  125 => 58,  124 => 57,  123 => 56,  122 => 55,  117 => 53,  113 => 51,  111 => 50,  108 => 49,  106 => 31,  102 => 29,  100 => 23,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  78 => 16,  68 => 15,  63 => 13,  59 => 11,  57 => 9,  56 => 8,  55 => 7,  54 => 6,  51 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{{ renderhook(\x27displayAdminGridTableBefore\x27, {
    grid: grid,
    legacy_controller: app.request.attributes.get(\x27_legacy_controller\x27),
    controller: app.request.attributes.get(\x27_controller\x27),
  })
}}

{{ form_start(grid.filter_form, {attr: {id: grid.id ~ \x27_filter_form\x27, class: \x27table-responsive\x27}}) }}

<table class=\"grid-table js-grid-table table {% if is_ordering_column(grid) %}grid-ordering-column{% endif %} {% if grid.attributes.is_empty_state %}border-0{% endif %}\"
       id=\"{{ grid.id }}_grid_table\"
       data-query=\"{{ grid.data.query }}\"
       data-limit=\"{{ grid.pagination.limit }}\"
       data-offset=\"{{ grid.pagination.offset }}\"
       data-total=\"{{ grid.data.records_total }}\"
>
  <thead class=\"thead-default\">
  {% block grid_table_head %}
    {{ include(\x27@PrestaShop/Admin/Common/Grid/Blocks/Table/headers_row.html.twig\x27, {grid: grid}) }}
    {% if grid.actions.bulk|length > 0 or grid.filter_form|length > 1 %}
      {{ include(\x27@PrestaShop/Admin/Common/Grid/Blocks/Table/filters_row.html.twig\x27, {grid: grid}) }}
    {% endif %}
  {% endblock %}
  </thead>
  <tbody>
  {% block grid_table_body %}
    {% if grid.data.records is not empty %}
      {% for record in grid.data.records %}
        <tr>
          {% for column in grid.columns %}
            <td
              {% if column.type == \x27identifier\x27 %}data-identifier=\"{{ record[column.id] }}\"{% endif %}
              class=\"{{ column.type }}-type column-{{ column.id }}{% if column.options.clickable is defined and column.options.clickable %} clickable{% endif %}{% if column.options.alignment is defined and column.options.alignment %} text-{{ column.options.alignment }}{% endif %}\"
            >
              {{ column_content(record, column, grid) }}
            </td>
          {% endfor %}
        </tr>
      {% endfor %}
    {% else %}
      {{ include(\x27@PrestaShop/Admin/Common/Grid/Blocks/Table/empty_row.html.twig\x27, {grid: grid}) }}
    {% endif %}
  {% endblock %}
  </tbody>
  {% block grid_table_footer %}{% endblock %}
</table>

{{ form_end(grid.filter_form) }}

{{ renderhook(\x27displayAdminGridTableAfter\x27, {
      grid: grid,
      legacy_controller: app.request.attributes.get(\x27_legacy_controller\x27),
      controller: app.request.attributes.get(\x27_controller\x27),
    })
}}
", "@PrestaShop/Admin/Common/Grid/Blocks/table.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\table.html.twig");
    }
}
