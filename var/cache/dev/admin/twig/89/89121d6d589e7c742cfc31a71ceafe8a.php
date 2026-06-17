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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig */
class __TwigTemplate_96b3e6e346fd116c7a1c09ef61c50b22 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig"));

        // line 5
        yield "
";
        // line 7
        $context["route_params"] = [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 7, $this->source); })()), "options", [], "any", false, false, false, 7), "route_param_name", [], "any", false, false, false, 7) => CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 7, $this->source); })()), "options", [], "any", false, false, false, 7), "primary_field", [], "any", false, false, false, 7), [], "array", false, false, false, 7)];
        // line 8
        $context["extra_route_params"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 8, $this->source); })()), "options", [], "any", false, false, false, 8), "extra_route_params", [], "any", false, false, false, 8);
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extra_route_params"]) || array_key_exists("extra_route_params", $context) ? $context["extra_route_params"] : (function () { throw new RuntimeError('Variable "extra_route_params" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 10
            yield "  ";
            $context["route_params"] = Twig\Extension\CoreExtension::merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 10, $this->source); })()), [ (string)$context["name"] => (((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 10) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 10, $this->source); })()), $context["field"], [], "array", false, false, false, 10)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 10, $this->source); })()), $context["field"], [], "array", false, false, false, 10)) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "
";
        // line 14
        $context["id_primary_key"] = Twig\Extension\CoreExtension::join((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 14, $this->source); })()), "-");
        // line 15
        yield "
";
        // line 16
        $context["isValid"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 16, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16), [], "array", false, false, false, 16) == 1);
        // line 17
        yield "
<div class=\"text-center\">
  <div
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 21, $this->source); })()), "options", [], "any", false, false, false, 21), "route", [], "any", false, false, false, 21), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 21, $this->source); })())), "html", null, true);
        yield "\"
  >
  <input type=\"radio\" name=\"input-";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 23, $this->source); })()), "options", [], "any", false, false, false, 23), "route", [], "any", false, false, false, 23), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\"
         id=\"input-false-";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 24, $this->source); })()), "options", [], "any", false, false, false, 24), "route", [], "any", false, false, false, 24), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 24, $this->source); })()), "html", null, true);
        yield "\"
         value=\"0\" ";
        // line 25
        if ((($tmp =  !(isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 25, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield ">
      <label for=\"input-false-";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "route", [], "any", false, false, false, 26), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 26, $this->source); })()), "html", null, true);
        yield "\">Off</label>
      <input type=\"radio\" name=\"input-";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "route", [], "any", false, false, false, 27), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\"
             id=\"input-true-";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "route", [], "any", false, false, false, 28), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\"
             value=\"1\" ";
        // line 29
        if ((($tmp = (isset($context["isValid"]) || array_key_exists("isValid", $context) ? $context["isValid"] : (function () { throw new RuntimeError('Variable "isValid" does not exist.', 29, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield ">
      <label for=\"input-true-";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 30, $this->source); })()), "options", [], "any", false, false, false, 30), "route", [], "any", false, false, false, 30), "html", null, true);
        yield "-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id_primary_key"]) || array_key_exists("id_primary_key", $context) ? $context["id_primary_key"] : (function () { throw new RuntimeError('Variable "id_primary_key" does not exist.', 30, $this->source); })()), "html", null, true);
        yield "\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig";
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
        return array (  129 => 30,  123 => 29,  117 => 28,  111 => 27,  105 => 26,  99 => 25,  93 => 24,  87 => 23,  82 => 21,  76 => 17,  74 => 16,  71 => 15,  69 => 14,  66 => 12,  59 => 10,  55 => 9,  53 => 8,  51 => 7,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{# Prepare route params #}
{% set route_params = {(column.options.route_param_name): (record[column.options.primary_field])} %}
{% set extra_route_params = column.options.extra_route_params %}
{% for name, field in extra_route_params %}
  {% set route_params = route_params|merge({(name): (record[field] ?? field)}) %}
{% endfor %}

{# Primary key is composed of all route parameters #}
{% set id_primary_key = route_params|join(\x27-\x27) %}

{% set isValid = record[column.id] == 1 %}

<div class=\"text-center\">
  <div
    class=\"ps-switch ps-switch-sm ps-switch-nolabel ps-switch-center ps-togglable-row\"
    data-toggle-url=\"{{ path(column.options.route, route_params) }}\"
  >
  <input type=\"radio\" name=\"input-{{ column.options.route }}-{{ id_primary_key }}\"
         id=\"input-false-{{ column.options.route }}-{{ id_primary_key }}\"
         value=\"0\" {% if not isValid %}checked{% endif %}>
      <label for=\"input-false-{{ column.options.route }}-{{ id_primary_key }}\">Off</label>
      <input type=\"radio\" name=\"input-{{ column.options.route }}-{{ id_primary_key }}\"
             id=\"input-true-{{ column.options.route }}-{{ id_primary_key }}\"
             value=\"1\" {% if isValid %}checked{% endif %}>
      <label for=\"input-true-{{ column.options.route }}-{{ id_primary_key }}\">On</label>
      <span class=\"slide-button\"></span>
  </div>
</div>
", "@PrestaShop/Admin/Common/Grid/Columns/Content/toggle.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\toggle.html.twig");
    }
}
