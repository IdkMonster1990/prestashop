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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig */
class __TwigTemplate_1498ed5ffd50efc11c30f1ad3203d536 extends Template
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

        // line 7
        $_trait_0 = $this->load("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 7);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig".'" cannot be used as a trait.', 7, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'image_dropzone_widget' => [$this, 'block_image_dropzone_widget'],
                'related_product_row' => [$this, 'block_related_product_row'],
                'packed_product_row' => [$this, 'block_packed_product_row'],
                'product_type_row' => [$this, 'block_product_type_row'],
                'price_summary_widget' => [$this, 'block_price_summary_widget'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig"));

        // line 5
        yield "
";
        // line 8
        yield "
";
        // line 9
        yield from $this->unwrap()->yieldBlock('image_dropzone_widget', $context, $blocks);
        // line 26
        yield "
";
        // line 27
        yield from $this->unwrap()->yieldBlock('related_product_row', $context, $blocks);
        // line 39
        yield "
";
        // line 40
        yield from $this->unwrap()->yieldBlock('packed_product_row', $context, $blocks);
        // line 60
        yield "
";
        // line 61
        yield from $this->unwrap()->yieldBlock('product_type_row', $context, $blocks);
        // line 78
        yield "
";
        // line 79
        yield from $this->unwrap()->yieldBlock('price_summary_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_dropzone_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_dropzone_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_dropzone_widget"));

        // line 10
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 10, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 11
($context["attr"] ?? null), "class", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 11, $this->source); })()), "class", [], "any", false, false, false, 11), "")) : ("")) . " image-dropzone")), "data-translations" => json_encode(        // line 12
(isset($context["translations"]) || array_key_exists("translations", $context) ? $context["translations"] : (function () { throw new RuntimeError('Variable "translations" does not exist.', 12, $this->source); })())), "data-locales" => json_encode(        // line 13
(isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 13, $this->source); })())), "data-product-id" =>         // line 14
(isset($context["product_id"]) || array_key_exists("product_id", $context) ? $context["product_id"] : (function () { throw new RuntimeError('Variable "product_id" does not exist.', 14, $this->source); })()), "data-shop-id" =>         // line 15
(isset($context["shop_id"]) || array_key_exists("shop_id", $context) ? $context["shop_id"] : (function () { throw new RuntimeError('Variable "shop_id" does not exist.', 15, $this->source); })()), "data-is-multi-store-active" =>         // line 16
(isset($context["is_multi_store_active"]) || array_key_exists("is_multi_store_active", $context) ? $context["is_multi_store_active"] : (function () { throw new RuntimeError('Variable "is_multi_store_active" does not exist.', 16, $this->source); })()), "data-form-name" =>         // line 17
(isset($context["update_form_name"]) || array_key_exists("update_form_name", $context) ? $context["update_form_name"] : (function () { throw new RuntimeError('Variable "update_form_name" does not exist.', 17, $this->source); })()), "data-token" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(        // line 18
(isset($context["update_form_name"]) || array_key_exists("update_form_name", $context) ? $context["update_form_name"] : (function () { throw new RuntimeError('Variable "update_form_name" does not exist.', 18, $this->source); })()))]);
        // line 20
        yield "
  ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_images", [], "any", true, true, false, 21)) {
            // line 22
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "shop_images", [], "any", false, false, false, 22), 'row');
            yield "
  ";
        }
        // line 24
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield "></div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_related_product_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "related_product_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "related_product_row"));

        // line 28
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 28)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 28, $this->source); })()), "class", [], "any", false, false, false, 28), "")) : ("")) . " related-product entity-item"))]);
        // line 29
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"related-product-image\">
      ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "image", [], "any", false, false, false, 31), 'widget');
        yield "
    </div>
    <div class=\"related-product-legend\">
      ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        yield "
    </div>
    ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "id", [], "any", false, false, false, 36), 'widget');
        yield "
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 40
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_packed_product_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "packed_product_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "packed_product_row"));

        // line 41
        yield "  <li class=\"packed-product entity-item\">
    <div class=\"packed-product-image\">
      ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "image", [], "any", false, false, false, 43), 'widget');
        yield "
    </div>
    <div class=\"packed-product-legend\">
      ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "name", [], "any", false, false, false, 46), 'widget', ["prefix" => "<i class=\"material-icons entity-item-delete\">delete</i>"]);
        yield "
      ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "reference", [], "any", false, false, false, 47), 'widget');
        yield "
    </div>
    <div class=\"form-group\">
      <div class=\"packed-product-quantity\">
        ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "quantity", [], "any", false, false, false, 51), 'widget');
        yield "
        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "quantity", [], "any", false, false, false, 52), 'errors');
        yield "
      </div>
    </div>
    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "product_id", [], "any", false, false, false, 55), 'widget');
        yield "
    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "unique_identifier", [], "any", false, false, false, 56), 'widget');
        yield "
    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "combination_id", [], "any", false, false, false, 57), 'widget');
        yield "
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
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

        // line 62
        yield "  <div class=\"product-type-selector form-group\">
    <div class=\"product-type-choices\">
      ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "vars", [], "any", false, false, false, 64), "choices", [], "any", false, false, false, 64));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 65
            yield "        <button type=\"button\" class=\"product-type-choice btn btn-outline-secondary\" data-value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 65), "html", null, true);
            yield "\" data-description=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 65), "data-description", [], "array", true, true, false, 65)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 65), "data-description", [], "array", false, false, false, 65), CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 65))) : (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 65))), "html", null, true);
            yield "\">
          ";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 66), "html", null, true);
            yield "
          ";
            // line 67
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, true, false, 67), "icon", [], "array", true, true, false, 67)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 67), "icon", [], "array", false, false, false, 67), "html", null, true);
                yield "</i>";
            }
            // line 68
            yield "        </button>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "    </div>
    <div class=\"product-type-description\">
      <i class=\"material-icons\">arrow_forward</i>
      <span class=\"product-type-description-content\"></span>
    </div>
    ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'widget');
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 79
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price_summary_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_summary_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_summary_widget"));

        // line 80
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value price-tax-excluded-value\"></div>
      <div class=\"price-summary-value price-tax-included-value\"></div>
      <div class=\"price-summary-value unit-price-value\"></div>
    </div>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value margin-value\"></div>
      <div class=\"price-summary-value margin-rate-value\"></div>
      <div class=\"price-summary-value wholesale-price-value\"></div>
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  343 => 80,  330 => 79,  316 => 75,  309 => 70,  302 => 68,  296 => 67,  292 => 66,  285 => 65,  281 => 64,  277 => 62,  264 => 61,  250 => 57,  246 => 56,  242 => 55,  236 => 52,  232 => 51,  225 => 47,  221 => 46,  215 => 43,  211 => 41,  198 => 40,  184 => 36,  179 => 34,  173 => 31,  167 => 29,  164 => 28,  151 => 27,  137 => 24,  131 => 22,  129 => 21,  126 => 20,  124 => 18,  123 => 17,  122 => 16,  121 => 15,  120 => 14,  119 => 13,  118 => 12,  117 => 11,  115 => 10,  102 => 9,  91 => 79,  88 => 78,  86 => 61,  83 => 60,  81 => 40,  78 => 39,  76 => 27,  73 => 26,  71 => 9,  68 => 8,  65 => 5,  35 => 7,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{# This form theme is the root one for all the product form so we define here which base theme is used for all the children #}
{% use \x27@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig\x27 %}

{% block image_dropzone_widget %}
  {% set attr = attr|merge({
    class: (attr.class|default(\x27\x27) ~ \x27 image-dropzone\x27)|trim,
    \x27data-translations\x27: translations|json_encode,
    \x27data-locales\x27: locales|json_encode,
    \x27data-product-id\x27: product_id,
    \x27data-shop-id\x27: shop_id,
    \x27data-is-multi-store-active\x27: is_multi_store_active,
    \x27data-form-name\x27: update_form_name,
    \x27data-token\x27: csrf_token(update_form_name),
  }) %}

  {% if form.shop_images is defined %}
    {{ form_row(form.shop_images) }}
  {% endif %}
  <div {{ block(\x27widget_attributes\x27) }}></div>
{% endblock %}

{% block related_product_row %}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 related-product entity-item\x27)|trim}) %}
  <li {{ block(\x27widget_container_attributes\x27) }}>
    <div class=\"related-product-image\">
      {{ form_widget(form.image) }}
    </div>
    <div class=\"related-product-legend\">
      {{ form_widget(form.name, {prefix: \x27<i class=\"material-icons entity-item-delete\">delete</i>\x27}) }}
    </div>
    {{ form_widget(form.id) }}
  </li>
{% endblock %}

{% block packed_product_row %}
  <li class=\"packed-product entity-item\">
    <div class=\"packed-product-image\">
      {{ form_widget(form.image) }}
    </div>
    <div class=\"packed-product-legend\">
      {{ form_widget(form.name, {prefix: \x27<i class=\"material-icons entity-item-delete\">delete</i>\x27}) }}
      {{ form_widget(form.reference) }}
    </div>
    <div class=\"form-group\">
      <div class=\"packed-product-quantity\">
        {{ form_widget(form.quantity) }}
        {{ form_errors(form.quantity) }}
      </div>
    </div>
    {{ form_widget(form.product_id) }}
    {{ form_widget(form.unique_identifier) }}
    {{ form_widget(form.combination_id) }}
  </li>
{% endblock %}

{% block product_type_row %}
  <div class=\"product-type-selector form-group\">
    <div class=\"product-type-choices\">
      {% for choice in form.vars.choices %}
        <button type=\"button\" class=\"product-type-choice btn btn-outline-secondary\" data-value=\"{{ choice.value }}\" data-description=\"{{ choice.attr[\x27data-description\x27]|default(choice.label) }}\">
          {{ choice.label }}
          {% if choice.attr[\x27icon\x27] is defined %}<i class=\"material-icons\">{{ choice.attr[\x27icon\x27] }}</i>{% endif %}
        </button>
      {% endfor %}
    </div>
    <div class=\"product-type-description\">
      <i class=\"material-icons\">arrow_forward</i>
      <span class=\"product-type-description-content\"></span>
    </div>
    {{ form_widget(form) }}
  </div>
{% endblock %}

{% block price_summary_widget %}
  <div {{ block(\x27widget_attributes\x27) }}>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value price-tax-excluded-value\"></div>
      <div class=\"price-summary-value price-tax-included-value\"></div>
      <div class=\"price-summary-value unit-price-value\"></div>
    </div>
    <div class=\"price-summary-block\">
      <div class=\"price-summary-value margin-value\"></div>
      <div class=\"price-summary-value margin-rate-value\"></div>
      <div class=\"price-summary-value wholesale-price-value\"></div>
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/product.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\product.html.twig");
    }
}
