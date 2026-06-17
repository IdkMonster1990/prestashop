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

/* @PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig */
class __TwigTemplate_816440af9db3913f3c47ca1938ced2d2 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'product_header' => [$this, 'block_product_header'],
            'product_footer' => [$this, 'block_product_footer'],
            'product_rest' => [$this, 'block_product_rest'],
            'category_tree_form' => [$this, 'block_category_tree_form'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig"));

        $this->parent = $this->load("@PrestaShop/Admin/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "  ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
  <link rel=\"stylesheet\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("themes/new-theme/public/product" . (isset($context["rtl_suffix"]) || array_key_exists("rtl_suffix", $context) ? $context["rtl_suffix"] : (function () { throw new RuntimeError('Variable "rtl_suffix" does not exist.', 9, $this->source); })())) . ".css")), "html", null, true);
        yield "\" type=\"text/css\" media=\"all\">
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 17
        yield "<div class=\"product-page-v2\">
  ";
        // line 18
        $context["productType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "product_type", [], "any", false, false, false, 18);
        // line 19
        yield "  ";
        $context["productId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "product_id", [], "any", false, false, false, 19);
        // line 20
        yield "  ";
        $context["shopId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "shop_id", [], "any", false, false, false, 20);
        // line 21
        yield "  ";
        // line 22
        yield "  ";
        $context["forceDefaultActive"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "force_default_active", [], "any", false, false, false, 22);
        // line 23
        yield "
  <div class=\"header-toolbar d-print-none\">
    ";
        // line 25
        yield $this->env->getRuntime('Symfony\UX\TwigComponent\Twig\ComponentRuntime')->render("MultistoreProductHeader", ["productId" => (isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 25, $this->source); })())]);
        yield "
  </div>

  ";
        // line 28
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal product-page justify-content-md-center product-form", "novalidate" => "novalidate", "data-product-id" =>         // line 31
(isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 31, $this->source); })()), "data-shop-id" =>         // line 32
(isset($context["shopId"]) || array_key_exists("shopId", $context) ? $context["shopId"] : (function () { throw new RuntimeError('Variable "shopId" does not exist.', 32, $this->source); })()), "data-product-type" =>         // line 33
(isset($context["productType"]) || array_key_exists("productType", $context) ? $context["productType"] : (function () { throw new RuntimeError('Variable "productType" does not exist.', 33, $this->source); })()), "data-force-default-active" =>         // line 34
(isset($context["forceDefaultActive"]) || array_key_exists("forceDefaultActive", $context) ? $context["forceDefaultActive"] : (function () { throw new RuntimeError('Variable "forceDefaultActive" does not exist.', 34, $this->source); })())]]);
        // line 35
        yield "

  ";
        // line 38
        yield "  ";
        yield from $this->unwrap()->yieldBlock('product_header', $context, $blocks);
        // line 41
        yield "
  ";
        // line 43
        yield "  ";
        yield from $this->unwrap()->yieldBlock('product_footer', $context, $blocks);
        // line 50
        yield "
  ";
        // line 51
        yield from         $this->unwrap()->yieldBlock("session_alert", $context, $blocks);
        yield "

  <div id=\"contextual-notification-box\"></div>

  ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 55, $this->source); })()), 'widget');
        yield "

  ";
        // line 57
        yield from $this->unwrap()->yieldBlock('product_rest', $context, $blocks);
        // line 60
        yield "
  ";
        // line 61
        yield from $this->unwrap()->yieldBlock('category_tree_form', $context, $blocks);
        // line 64
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_header"));

        // line 39
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig", ["productForm" => (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 39, $this->source); })())]);
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_footer"));

        // line 44
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig", ["productForm" =>         // line 45
(isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 45, $this->source); })()), "editable" =>         // line 46
(isset($context["editable"]) || array_key_exists("editable", $context) ? $context["editable"] : (function () { throw new RuntimeError('Variable "editable" does not exist.', 46, $this->source); })()), "productId" =>         // line 47
(isset($context["productId"]) || array_key_exists("productId", $context) ? $context["productId"] : (function () { throw new RuntimeError('Variable "productId" does not exist.', 47, $this->source); })())]);
        // line 48
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 57
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_rest(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_rest"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_rest"));

        // line 58
        yield "    ";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 58, $this->source); })()), 'form_end');
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_form(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_form"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_form"));

        // line 62
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["categoryTreeSelectorForm"]) || array_key_exists("categoryTreeSelectorForm", $context) ? $context["categoryTreeSelectorForm"] : (function () { throw new RuntimeError('Variable "categoryTreeSelectorForm" does not exist.', 62, $this->source); })()), 'row');
        yield "
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 68
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "

  <script src=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/product_edit.bundle.js"), "html", null, true);
        yield "\"></script>
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig";
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
        return array (  346 => 70,  340 => 68,  327 => 67,  313 => 62,  300 => 61,  286 => 58,  273 => 57,  261 => 48,  259 => 47,  258 => 46,  257 => 45,  255 => 44,  242 => 43,  228 => 39,  215 => 38,  203 => 64,  201 => 61,  198 => 60,  196 => 57,  191 => 55,  184 => 51,  181 => 50,  178 => 43,  175 => 41,  172 => 38,  168 => 35,  166 => 34,  165 => 33,  164 => 32,  163 => 31,  162 => 28,  156 => 25,  152 => 23,  149 => 22,  147 => 21,  144 => 20,  141 => 19,  139 => 18,  136 => 17,  123 => 16,  101 => 13,  88 => 9,  83 => 8,  70 => 7,  47 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% extends \x27@PrestaShop/Admin/layout.html.twig\x27 %}

{% block stylesheets %}
  {{ parent() }}
  <link rel=\"stylesheet\" href=\"{{ asset(\x27themes/new-theme/public/product\x27 ~ rtl_suffix ~ \x27.css\x27) }}\" type=\"text/css\" media=\"all\">
{% endblock %}

{# We empty the parent content header block because session alert is gonna be displayed inside the content #}
{% block content_header %}
{% endblock %}

{% block content %}
<div class=\"product-page-v2\">
  {% set productType = productForm.vars.product_type %}
  {% set productId = productForm.vars.product_id %}
  {% set shopId = productForm.vars.shop_id %}
  {# Passed via data attribute only so that the iframe modal can replicate it in its redirection url #}
  {% set forceDefaultActive = productForm.vars.force_default_active %}

  <div class=\"header-toolbar d-print-none\">
    {{ component(\x27MultistoreProductHeader\x27, {productId: productId}) }}
  </div>

  {{ form_start(productForm, {attr: {
    class: \x27form-horizontal product-page justify-content-md-center product-form\x27,
    novalidate: \x27novalidate\x27,
    \x27data-product-id\x27: productId,
    \x27data-shop-id\x27: shopId,
    \x27data-product-type\x27: productType,
    \x27data-force-default-active\x27: forceDefaultActive,
  }}) }}

  {# Header form child is rendered separately because it\x27s not one of the tabs so it needs to be rendered before #}
  {% block product_header %}
    {{ include(\x27@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header.html.twig\x27, {productForm: productForm}) }}
  {% endblock %}

  {# Footer form child is rendered separately because it\x27s not one of the tabs so it needs to be rendered before #}
  {% block product_footer %}
    {{ include(\x27@PrestaShop/Admin/Sell/Catalog/Product/Blocks/footer.html.twig\x27, {
      productForm: productForm,
      editable: editable,
      productId: productId,
    }) }}
  {% endblock %}

  {{ block(\x27session_alert\x27) }}

  <div id=\"contextual-notification-box\"></div>

  {{ form_widget(productForm) }}

  {% block product_rest %}
    {{ form_end(productForm) }}
  {% endblock %}

  {% block category_tree_form %}
    {{ form_row(categoryTreeSelectorForm) }}
  {% endblock %}
</div>
{% endblock %}

{% block javascripts %}
  {{ parent() }}

  <script src=\"{{ asset(\x27themes/new-theme/public/product_edit.bundle.js\x27) }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/edit.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\edit.html.twig");
    }
}
