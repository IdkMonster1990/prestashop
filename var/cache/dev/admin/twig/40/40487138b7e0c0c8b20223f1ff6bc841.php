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

/* @PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig */
class __TwigTemplate_b568d87e80895f61f00fe5d1ee4d8edb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig"));

        // line 5
        yield "
";
        // line 6
        $context["class"] = "btn tooltip-link js-link-row-action";
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
        $context["route_params"] = [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "options", [], "any", false, false, false, 12), "route_param_name", [], "any", false, false, false, 12) => CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 12, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "options", [], "any", false, false, false, 12), "route_param_field", [], "any", false, false, false, 12), [], "array", false, false, false, 12)];
        // line 13
        yield "  ";
        $context["extra_route_params"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "options", [], "any", false, false, false, 13), "extra_route_params", [], "any", false, false, false, 13);
        // line 14
        yield "
  ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extra_route_params"]) || array_key_exists("extra_route_params", $context) ? $context["extra_route_params"] : (function () { throw new RuntimeError('Variable "extra_route_params" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["name"] => $context["field"]) {
            // line 16
            yield "    ";
            $context["route_params"] = Twig\Extension\CoreExtension::merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 16, $this->source); })()), [ (string)$context["name"] => (((CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), $context["field"], [], "array", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 16, $this->source); })()), $context["field"], [], "array", false, false, false, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 16, $this->source); })()), $context["field"], [], "array", false, false, false, 16)) : ($context["field"]))]);
            // line 17
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['name'], $context['field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
<a class=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 19, $this->source); })()), "html", null, true);
        yield " grid-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "name", [], "any", false, false, false, 19)), [" " => "-"]), "html", null, true);
        yield "-row-link\"
   href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()), "options", [], "any", false, false, false, 20), "route", [], "any", false, false, false, 20), (isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 20, $this->source); })())), "html", null, true);
        yield "\"
   data-confirm-message=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "options", [], "any", false, false, false, 21), "confirm_message", [], "any", false, false, false, 21), "html", null, true);
        yield "\"
  ";
        // line 22
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 22, $this->source); })()), "tooltip_name", [], "any", false, false, false, 22)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 23
            yield "    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 25, $this->source); })()), "name", [], "any", false, false, false, 25), "html", null, true);
            yield "\"
  ";
        }
        // line 27
        yield "  data-clickable-row=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["action"] ?? null), "options", [], "any", false, true, false, 27), "clickable_row", [], "any", true, true, false, 27)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "clickable_row", [], "any", false, false, false, 27), false)) : (false)), "html", null, true);
        yield "\"
  ";
        // line 28
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "target", [], "any", false, false, false, 28))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "target=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 28, $this->source); })()), "options", [], "any", false, false, false, 28), "target", [], "any", false, false, false, 28), "html", null, true);
            yield "\"";
        }
        // line 29
        yield "  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 30, $this->source); })()), "options", [], "any", false, false, false, 30), "attr", [], "any", false, false, false, 30));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 31
            if (($context["attrname"] != "class")) {
                // line 32
                yield " ";
                // line 33
                if ($this->env->getTest('formview')->getCallable()($context["attrvalue"])) {
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attrvalue"], 'row'), "html_attr");
                    yield "\"
      ";
                } elseif ($this->env->getTest('form')->getCallable()(                // line 35
$context["attrvalue"])) {
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["attrvalue"], "createView", [], "method", false, false, false, 36), 'row'), "html_attr");
                    yield "\"
      ";
                } else {
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"
      ";
                }
                // line 40
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield ">
  ";
        // line 43
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 43, $this->source); })()), "icon", [], "any", false, false, false, 43))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 44, $this->source); })()), "icon", [], "any", false, false, false, 44), "html", null, true);
            yield "</i>
  ";
        }
        // line 46
        yield "  ";
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 46, $this->source); })()), "tooltip_name", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 47, $this->source); })()), "name", [], "any", false, false, false, 47), "html", null, true);
            yield "
  ";
        }
        // line 49
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
        return "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig";
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
        return array (  186 => 49,  180 => 47,  177 => 46,  171 => 44,  169 => 43,  166 => 42,  159 => 40,  152 => 38,  145 => 36,  143 => 35,  137 => 34,  135 => 33,  133 => 32,  131 => 31,  127 => 30,  125 => 29,  119 => 28,  114 => 27,  109 => 25,  105 => 23,  103 => 22,  99 => 21,  95 => 20,  89 => 19,  86 => 18,  80 => 17,  77 => 16,  73 => 15,  70 => 14,  67 => 13,  65 => 12,  62 => 11,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% set class = \x27btn tooltip-link js-link-row-action\x27 %}

{% if attributes.class is defined %}
  {% set class = class ~ \x27 \x27 ~ attributes.class %}
{% endif %}

  {% set route_params = {(action.options.route_param_name): (record[action.options.route_param_field])} %}
  {% set extra_route_params = action.options.extra_route_params %}

  {% for name, field in extra_route_params %}
    {% set route_params = route_params|merge({(name): (record[field] ?? field)}) %}
  {% endfor %}

<a class=\"{{ class }} grid-{{ action.name|lower|replace({\x27 \x27: \x27-\x27}) }}-row-link\"
   href=\"{{ path(action.options.route, route_params) }}\"
   data-confirm-message=\"{{ action.options.confirm_message }}\"
  {% if attributes.tooltip_name %}
    data-toggle=\"pstooltip\"
    data-placement=\"top\"
    data-original-title=\"{{ action.name }}\"
  {% endif %}
  data-clickable-row=\"{{ action.options.clickable_row|default(false) }}\"
  {% if action.options.target is not empty %}target=\"{{ action.options.target }}\"{% endif %}
  {# Add all attributes which are not class #}
  {%- for attrname, attrvalue in action.options.attr -%}
    {% if attrname != \x27class\x27 %}
      {{- \x27 \x27 -}}
      {% if attrvalue is formview %}
        {{- attrname }}=\"{{ form_row(attrvalue)|e(\x27html_attr\x27) }}\"
      {% elseif attrvalue is form %}
      {{- attrname }}=\"{{ form_row(attrvalue.createView())|e(\x27html_attr\x27) }}\"
      {% else %}
        {{- attrname }}=\"{{ attrvalue }}\"
      {% endif %}
    {% endif %}
  {%- endfor -%}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {% if not attributes.tooltip_name %}
    {{ action.name }}
  {% endif %}
</a>
", "@PrestaShop/Admin/Common/Grid/Actions/Row/link.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Row\\link.html.twig");
    }
}
