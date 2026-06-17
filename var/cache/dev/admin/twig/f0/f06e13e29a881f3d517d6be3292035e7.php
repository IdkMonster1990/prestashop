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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig */
class __TwigTemplate_cef3c194275586159b8fb7676c44c7f8 extends Template
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

        // line 6
        $_trait_0 = $this->load("@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", 6);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig".'" cannot be used as a trait.', 6, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        if (!isset($_trait_0_blocks["product_type_row"])) {
            throw new RuntimeError(sprintf('Block "%s" is not defined in trait "%s".', "product_type_row", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig"), 6, $this->source);
        }

        $_trait_0_blocks["base_product_type_row"] = $_trait_0_blocks["product_type_row"]; unset($_trait_0_blocks["product_type_row"]); $this->traitAliases["base_product_type_row"] = "product_type_row";

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'product_type_row' => [$this, 'block_product_type_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig"));

        // line 5
        yield "
";
        // line 7
        yield "
";
        // line 8
        yield from $this->unwrap()->yieldBlock('product_type_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_type_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_type_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_type_row"));

        // line 9
        yield "  <div class=\"product-type-preview\">
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 11
            yield "      ";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 11, $this->source); })()))) {
                // line 12
                yield "        <i class=\"material-icons product-type-preview-icon\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 12), "icon", [], "array", false, false, false, 12), "html", null, true);
                yield "</i>
        <span class=\"product-type-preview-label\">";
                // line 13
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 13), "html", null, true);
                yield "</span>
      ";
            }
            // line 15
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "    <div id=\"product-type-selector-modal-content\" class=\"d-none\">
      ";
        // line 17
        yield from         $this->unwrap()->yieldBlock("base_product_type_row", $context, $blocks);
        yield "
    </div>
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  125 => 17,  122 => 16,  116 => 15,  111 => 13,  106 => 12,  103 => 11,  99 => 10,  96 => 9,  73 => 8,  70 => 7,  67 => 5,  35 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% use \x27@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig\x27 with product_type_row as base_product_type_row %}

{% block product_type_row %}
  <div class=\"product-type-preview\">
    {% for group_label, choice in choices %}
      {% if choice is selectedchoice(value) %}
        <i class=\"material-icons product-type-preview-icon\">{{ choice.attr[\x27icon\x27] }}</i>
        <span class=\"product-type-preview-label\">{{ choice.label }}</span>
      {% endif %}
    {% endfor %}
    <div id=\"product-type-selector-modal-content\" class=\"d-none\">
      {{ block(\x27base_product_type_row\x27) }}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/header.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\header.html.twig");
    }
}
