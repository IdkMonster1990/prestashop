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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig */
class __TwigTemplate_f8097621f30012aab6cd704178551b90 extends Template
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
            'link' => [$this, 'block_link'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig"));

        // line 5
        yield "
";
        // line 6
        if (( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 6, $this->source); })()), "options", [], "any", false, false, false, 6), "color_template_field", [], "any", false, false, false, 6)) && CoreExtension::getAttribute($this->env, $this->source, ($context["record"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 6, $this->source); })()), "options", [], "any", false, false, false, 6), "color_template_field", [], "any", false, false, false, 6), [], "array", true, true, false, 6))) {
            // line 7
            yield "  ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 7, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 7, $this->source); })()), "options", [], "any", false, false, false, 7), "color_template_field", [], "any", false, false, false, 7), [], "array", false, false, false, 7);
        } else {
            // line 9
            yield "  ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 9, $this->source); })()), "options", [], "any", false, false, false, 9), "color_template", [], "any", false, false, false, 9);
        }
        // line 11
        $context["class"] = ("text-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 11, $this->source); })()));
        // line 12
        yield "
";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 13, $this->source); })()), "options", [], "any", false, false, false, 13), "button_template", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "  ";
            $context["style"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 14, $this->source); })()), "options", [], "any", false, false, false, 14), "button_template", [], "any", false, false, false, 14);
            // line 15
            yield "  ";
            if (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 15, $this->source); })()) == "normal")) {
                // line 16
                yield "    ";
                $context["class"] = ("btn btn-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 16, $this->source); })()));
                // line 17
                yield "  ";
            } elseif (((isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 17, $this->source); })()) == "outline")) {
                // line 18
                yield "    ";
                $context["class"] = ("btn btn-outline-" . (isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 18, $this->source); })()));
                // line 19
                yield "  ";
            }
        }
        // line 21
        yield "
";
        // line 22
        $context["class"] = Twig\Extension\CoreExtension::trim((((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 22, $this->source); })()) . " ") . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 22), "attr", [], "any", false, true, false, 22), "class", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 22, $this->source); })()), "options", [], "any", false, false, false, 22), "attr", [], "any", false, false, false, 22), "class", [], "any", false, false, false, 22), "")) : (""))));
        // line 23
        yield "
";
        // line 24
        yield from $this->unwrap()->yieldBlock('link', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link"));

        // line 25
        yield "<a
  class=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 26, $this->source); })()), "html", null, true);
        yield " text-nowrap\"
  href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "route", [], "any", false, false, false, 27), [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "route_param_name", [], "any", false, false, false, 27) => CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 27, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "route_param_field", [], "any", false, false, false, 27), [], "array", false, false, false, 27), "_fragment" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "route_fragment", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\"
  ";
        // line 28
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 28), "target", [], "any", true, true, false, 28)) {
            // line 29
            yield "    target=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 29, $this->source); })()), "options", [], "any", false, false, false, 29), "target", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
  ";
        }
        // line 31
        yield "  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 32, $this->source); })()), "options", [], "any", false, false, false, 32), "attr", [], "any", false, false, false, 32));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 33
            if (($context["attrname"] != "class")) {
                // line 34
                yield " ";
                // line 35
                if ($this->env->getTest('formview')->getCallable()($context["attrvalue"])) {
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["attrvalue"], 'row'), "html_attr");
                    yield "\"
      ";
                } elseif ($this->env->getTest('form')->getCallable()(                // line 37
$context["attrvalue"])) {
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["attrvalue"], "createView", [], "method", false, false, false, 38), 'row'), "html_attr");
                    yield "\"
      ";
                } else {
                    // line 40
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"
      ";
                }
                // line 42
                yield "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield ">
  ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 45), "icon", [], "any", true, true, false, 45) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 45, $this->source); })()), "options", [], "any", false, false, false, 45), "icon", [], "any", false, false, false, 45)))) {
            // line 46
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 46, $this->source); })()), "options", [], "any", false, false, false, 46), "icon", [], "any", false, false, false, 46), "html", null, true);
            yield "</i>
  ";
        }
        // line 48
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 48, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 48, $this->source); })()), "options", [], "any", false, false, false, 48), "field", [], "any", false, false, false, 48), [], "array", false, false, false, 48), "html", null, true);
        yield "
</a>
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
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig";
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
        return array (  190 => 48,  184 => 46,  182 => 45,  179 => 44,  172 => 42,  165 => 40,  158 => 38,  156 => 37,  150 => 36,  148 => 35,  146 => 34,  144 => 33,  140 => 32,  138 => 31,  132 => 29,  130 => 28,  126 => 27,  122 => 26,  119 => 25,  96 => 24,  93 => 23,  91 => 22,  88 => 21,  84 => 19,  81 => 18,  78 => 17,  75 => 16,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  62 => 11,  58 => 9,  54 => 7,  52 => 6,  49 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% if column.options.color_template_field is not empty and record[column.options.color_template_field] is defined %}
  {% set color = record[column.options.color_template_field] %}
{% else %}
  {% set color = column.options.color_template %}
{% endif %}
{% set class = \x27text-\x27 ~ color %}

{% if column.options.button_template %}
  {% set style = column.options.button_template %}
  {% if style == \x27normal\x27 %}
    {% set class = \x27btn btn-\x27 ~ color %}
  {% elseif style == \x27outline\x27 %}
    {% set class = \x27btn btn-outline-\x27 ~ color %}
  {% endif %}
{% endif %}

{% set class = (class ~ \x27 \x27 ~ column.options.attr.class|default(\x27\x27))|trim %}

{% block link %}
<a
  class=\"{{ class }} text-nowrap\"
  href=\"{{ path(column.options.route, {(column.options.route_param_name): record[column.options.route_param_field], _fragment: column.options.route_fragment}) }}\"
  {% if column.options.target is defined %}
    target=\"{{ column.options.target }}\"
  {% endif %}
  {# Add all attributes which are not class #}
  {%- for attrname, attrvalue in column.options.attr -%}
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
  {% if column.options.icon is defined and column.options.icon is not empty %}
    <i class=\"material-icons\">{{ column.options.icon }}</i>
  {% endif %}
  {{ record[column.options.field] }}
</a>
{% endblock %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/link.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\link.html.twig");
    }
}
