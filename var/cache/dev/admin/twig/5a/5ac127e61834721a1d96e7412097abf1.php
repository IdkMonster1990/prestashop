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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig */
class __TwigTemplate_2875c3c2d91ba9733b87d3948b821633 extends Template
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
            'product_supplier_row' => [$this, 'block_product_supplier_row'],
            'product_supplier_collection_row' => [$this, 'block_product_supplier_collection_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig"));

        // line 6
        yield from $this->unwrap()->yieldBlock('product_supplier_row', $context, $blocks);
        // line 31
        yield from $this->unwrap()->yieldBlock('product_supplier_collection_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_supplier_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_row"));

        // line 7
        yield "<tr class=\"product_supplier_row\" id=\"product_supplier_row_";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "\" data-supplier-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "name", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
  ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), "children", [], "any", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 9
            yield "    ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 9), "block_prefixes", [], "any", false, false, false, 9), 1, [], "any", false, false, false, 9);
            // line 10
            yield "    ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 10, $this->source); })()) != "hidden")) {
                // line 11
                yield "      ";
                // line 12
                yield "      <td>
        ";
                // line 13
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
        ";
                // line 14
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
      </td>
    ";
            } elseif ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 16
$context["child"], "vars", [], "any", false, false, false, 16), "label", [], "any", false, false, false, 16))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "      ";
                // line 18
                yield "      <td class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
                yield "\">
        ";
                // line 19
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "supplier_name", [], "any", false, false, false, 19), 'widget');
                yield "
        <span class=\"preview\">";
                // line 20
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 20), "value", [], "any", false, false, false, 20), "html", null, true);
                }
                yield "</span>
      </td>
    ";
            } else {
                // line 23
                yield "      ";
                // line 24
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    ";
            }
            // line 26
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "  </tr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_supplier_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_supplier_collection_row"));

        // line 32
        yield "<div class=\"form-group product-suppliers-collection-row\">
    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'label');
        // line 34
        yield from         $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        // line 37
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 37, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 37, $this->source); })()), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37)]);
        // line 38
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 44, $this->source); })()), "children", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 45
            yield "                ";
            // line 46
            yield "                ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 46), "block_prefixes", [], "any", false, false, false, 46), 1, [], "any", false, false, false, 46);
            // line 47
            yield "                ";
            if ((((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 47, $this->source); })()) != "hidden") || (!Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 47), "label", [], "any", false, false, false, 47))))) {
                // line 48
                yield "                  <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 48), "label", [], "any", false, false, false, 48), "html", null, true);
                yield "</th>
                ";
            }
            // line 50
            yield "              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "            </tr>
            </thead>
            <tbody>";
        // line 54
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 55
        yield "</tbody>
          </table>
        </div>
      </div>
    </div>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  215 => 55,  213 => 54,  209 => 51,  203 => 50,  197 => 48,  194 => 47,  191 => 46,  189 => 45,  185 => 44,  175 => 38,  173 => 37,  171 => 34,  169 => 33,  166 => 32,  153 => 31,  142 => 27,  136 => 26,  130 => 24,  128 => 23,  120 => 20,  116 => 19,  111 => 18,  109 => 17,  107 => 16,  102 => 14,  98 => 13,  95 => 12,  93 => 11,  90 => 10,  87 => 9,  83 => 8,  76 => 7,  63 => 6,  52 => 31,  50 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{%- block product_supplier_row -%}
  <tr class=\"product_supplier_row\" id=\"product_supplier_row_{{ form.vars.name }}\" data-supplier-index=\"{{ form.vars.name }}\">
  {% for child in form.children %}
    {% set childType = child.vars.block_prefixes.1 %}
    {% if childType != \x27hidden\x27 %}
      {# Regular chidlren are displayed thanks to their widget #}
      <td>
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </td>
    {% elseif child.vars.label is not empty %}
      {# Hidden input with label is displayed, at least its value, with a class allowing to target them #}
      <td class=\"{{ child.vars.name }}\">
        {{ form_widget(form.supplier_name) }}
        <span class=\"preview\">{% if child.vars.value %}{{ child.vars.value }}{% endif %}</span>
      </td>
    {% else %}
      {# Other hidden types are simply added and will be invisible #}
      {{ form_widget(child) }}
    {% endif %}
  {% endfor %}
  </tr>
{%- endblock product_supplier_row -%}

{# Override suppliers collection template to remove the label and init the table #}
{%- block product_supplier_collection_row -%}
  <div class=\"form-group product-suppliers-collection-row\">
    {{ form_label(form) }}
    {{- block(\x27form_alert\x27) -}}

    {# We put prototype name in a data attribute, so the JS code can get it dynamically #}
    {%- set attr = attr|merge({\x27data-prototype\x27: form_row(prototype), \x27data-prototype-name\x27: prototype.vars.name}) -%}
    <div {{ block(\x27widget_attributes\x27) }}>
      <div class=\"row\">
        <div class=\"col-sm\">
          <table class=\"table\">
            <thead class=\"thead-default\">
            <tr>
              {% for child in prototype.children %}
                {# We add column for children that are not hidden type, unless their label is not empty (like supplier_name) #}
                {% set childType = child.vars.block_prefixes.1 %}
                {% if childType != \x27hidden\x27 or (child.vars.label is not empty) %}
                  <th>{{ child.vars.label }}</th>
                {% endif %}
              {% endfor %}
            </tr>
            </thead>
            <tbody>
            {{- block(\x27form_rows\x27) -}}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
{%- endblock -%}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product_suppliers.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product_suppliers.html.twig");
    }
}
