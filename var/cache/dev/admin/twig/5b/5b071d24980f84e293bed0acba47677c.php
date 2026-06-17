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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig */
class __TwigTemplate_eec1c4813bc96275324bd1b7fbceaf95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig"));

        // line 5
        yield "
";
        // line 6
        $context["class"] = "btn tooltip-link js-submit-row-action";
        // line 7
        yield "
";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "class", [], "any", true, true, false, 8)) {
            // line 9
            yield "  ";
            $context["class"] = (((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 9, $this->source); })()) . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 9, $this->source); })()), "class", [], "any", false, false, false, 9));
        }
        // line 11
        yield "
";
        // line 12
        $context["confirmation_message"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "options", [], "any", false, false, false, 12), "confirm_message", [], "any", false, false, false, 12);
        // line 13
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "options", [], "any", false, false, false, 13), "confirm_message_type", [], "any", false, false, false, 13) == "dynamic") && CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "options", [], "any", false, false, false, 13), "dynamic_message_field", [], "any", false, false, false, 13), [], "array", true, true, false, 13))) {
            // line 14
            yield "  ";
            $context["dynamic_field"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 14, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "options", [], "any", false, false, false, 14), "dynamic_message_field", [], "any", false, false, false, 14), [], "array", false, false, false, 14);
            // line 15
            yield "  ";
            $context["confirmation_message"] = ((array_key_exists("dynamic_field", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["dynamic_field"]) || array_key_exists("dynamic_field", $context) ? $context["dynamic_field"] : (function () { throw new RuntimeError('Variable "dynamic_field" does not exist.', 15, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "options", [], "any", false, false, false, 15), "confirm_message", [], "any", false, false, false, 15))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "options", [], "any", false, false, false, 15), "confirm_message", [], "any", false, false, false, 15)));
        }
        // line 17
        yield "
";
        // line 18
        $context["route_params"] = [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "options", [], "any", false, false, false, 18), "route_param_name", [], "any", false, false, false, 18) => CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 18, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "options", [], "any", false, false, false, 18), "route_param_field", [], "any", false, false, false, 18), [], "array", false, false, false, 18)];
        // line 19
        $context["extra_route_params"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "options", [], "any", false, false, false, 19), "extra_route_params", [], "any", false, false, false, 19);
        // line 20
        yield "
";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extra_route_params"]) || array_key_exists("extra_route_params", $context) ? $context["extra_route_params"] : (function () { throw new RuntimeError('Variable "extra_route_params" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 22
            yield "  ";
            $context["route_params"] = Twig\Extension\CoreExtension::merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 22, $this->source); })()), [ (string)$context["name"] => (((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 22) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 22, $this->source); })()), $context["field"], [], "array", false, false, false, 22)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 22, $this->source); })()), $context["field"], [], "array", false, false, false, 22)) : ($context["field"]))]);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "
<a class=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 25, $this->source); })()), "html", null, true);
        yield " grid-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25)), "html", null, true);
        yield "-row-link\"
   href=\"#\"
   data-confirm-message=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["confirmation_message"]) || array_key_exists("confirmation_message", $context) ? $context["confirmation_message"] : (function () { throw new RuntimeError('Variable "confirmation_message" does not exist.', 27, $this->source); })()), "html", null, true);
        yield "\"
   data-url=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "route", [], "any", false, false, false, 28), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 28, $this->source); })())), "html", null, true);
        yield "\"
   data-method=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "method", [], "any", false, false, false, 29), "html", null, true);
        yield "\"
  ";
        // line 30
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 30), "modal_options", [], "any", false, true, false, 30), "options", [], "any", true, true, false, 30)) {
            // line 31
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()), "options", [], "any", false, false, false, 31), "modal_options", [], "any", false, false, false, 31), "options", [], "any", false, false, false, 31));
            foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
                // line 32
                yield "      data-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace($context["attribute"], ["_" => "-"]), "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
                yield "\"
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            yield "  ";
        }
        // line 35
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 35, $this->source); })()), "tooltip_name", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 38, $this->source); })()), "name", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
  ";
        }
        // line 40
        yield ">
  ";
        // line 41
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 41, $this->source); })()), "icon", [], "any", false, false, false, 41))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 42, $this->source); })()), "icon", [], "any", false, false, false, 42), "html", null, true);
            yield "</i>
  ";
        }
        // line 44
        yield "  ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 44, $this->source); })()), "tooltip_name", [], "any", false, false, false, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 45
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), "html", null, true);
            yield "
  ";
        }
        // line 47
        yield "</a>
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
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig";
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
        return array (  172 => 47,  166 => 45,  163 => 44,  157 => 42,  155 => 41,  152 => 40,  147 => 38,  143 => 36,  140 => 35,  137 => 34,  126 => 32,  121 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  100 => 25,  97 => 24,  90 => 22,  86 => 21,  83 => 20,  81 => 19,  79 => 18,  76 => 17,  72 => 15,  69 => 14,  67 => 13,  65 => 12,  62 => 11,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% set class = \x27btn tooltip-link js-submit-row-action\x27 %}

{% if attributes.class is defined %}
  {% set class = class ~ \x27 \x27 ~ attributes.class %}
{% endif %}

{% set confirmation_message = action.options.confirm_message %}
{% if action.options.confirm_message_type == \x27dynamic\x27 and record[action.options.dynamic_message_field] is defined %}
  {% set dynamic_field = record[action.options.dynamic_message_field] %}
  {% set confirmation_message = dynamic_field|default(action.options.confirm_message) %}
{% endif %}

{% set route_params = {(action.options.route_param_name): (record[action.options.route_param_field])} %}
{% set extra_route_params = action.options.extra_route_params %}

{% for name, field in extra_route_params %}
  {% set route_params = route_params|merge({(name): (record[field] ?? field)}) %}
{% endfor %}

<a class=\"{{ class }} grid-{{ action.name|lower }}-row-link\"
   href=\"#\"
   data-confirm-message=\"{{ confirmation_message }}\"
   data-url=\"{{ path(action.options.route, route_params) }}\"
   data-method=\"{{ action.options.method }}\"
  {% if action.options.modal_options.options is defined %}
    {% for attribute, value in action.options.modal_options.options %}
      data-{{ attribute|replace({_: \x27-\x27}) }}=\"{{ value }}\"
    {% endfor %}
  {% endif %}
  {% if attributes.tooltip_name %}
    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"{{ action.name }}\"
  {% endif %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {% if not attributes.tooltip_name %}
    {{ action.name }}
  {% endif %}
</a>
", "@PrestaShop/Admin/Common/Grid/Actions/Row/submit.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Row\\submit.html.twig");
    }
}
