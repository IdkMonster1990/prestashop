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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig */
class __TwigTemplate_1c028476659c970718ac10f8a02d6e90 extends Template
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
            'header_summary' => [$this, 'block_header_summary'],
            'header_references' => [$this, 'block_header_references'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig"));

        // line 5
        yield "
<div class=\"product-header-details\">
";
        // line 7
        yield from $this->unwrap()->yieldBlock('header_summary', $context, $blocks);
        // line 97
        yield "
";
        // line 98
        yield from $this->unwrap()->yieldBlock('header_references', $context, $blocks);
        // line 111
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_summary(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_summary"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_summary"));

        // line 8
        yield "  ";
        // line 11
        yield "  ";
        $context["productData"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 11, $this->source); })()), "vars", [], "any", false, false, false, 11), "data", [], "any", false, false, false, 11);
        // line 12
        yield "  <div class=\"product-header-summary\">
    <div class=\"product-field-preview\" data-role=\"price-tax-excluded\">
      <div class=\"product-field-value\">
        ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["productData"] ?? null), "pricing", [], "any", false, true, false, 15), "retail_price", [], "any", false, true, false, 15), "ecotax_tax_excluded", [], "any", true, true, false, 15)) {
            // line 16
            yield "          ";
            $context["final_price_tax_excluded"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 16, $this->source); })()), "pricing", [], "any", false, false, false, 16), "retail_price", [], "any", false, false, false, 16), "price_tax_excluded", [], "any", false, false, false, 16) + CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 16, $this->source); })()), "pricing", [], "any", false, false, false, 16), "retail_price", [], "any", false, false, false, 16), "ecotax_tax_excluded", [], "any", false, false, false, 16));
            // line 17
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat((isset($context["final_price_tax_excluded"]) || array_key_exists("final_price_tax_excluded", $context) ? $context["final_price_tax_excluded"] : (function () { throw new RuntimeError('Variable "final_price_tax_excluded" does not exist.', 17, $this->source); })())), "html", null, true);
            yield "
        ";
        } else {
            // line 19
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 19, $this->source); })()), "pricing", [], "any", false, false, false, 19), "retail_price", [], "any", false, false, false, 19), "price_tax_excluded", [], "any", false, false, false, 19)), "html", null, true);
            yield "
        ";
        }
        // line 21
        yield "      </div>
      <div class=\"product-field-label\">
        ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax excl.", [], "Admin.Global"), "html", null, true);
        yield "
      </div>
    </div>

    <div class=\"product-field-preview\" data-role=\"price-tax-included\">
      <div class=\"product-field-value\">
        ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\LocalizationExtension']->priceFormat(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 29, $this->source); })()), "pricing", [], "any", false, false, false, 29), "retail_price", [], "any", false, false, false, 29), "price_tax_included", [], "any", false, false, false, 29)), "html", null, true);
        yield "
      </div>
      <div class=\"product-field-label\">
        ";
        // line 33
        yield "        ";
        if ((($tmp = (isset($context["taxEnabled"]) || array_key_exists("taxEnabled", $context) ? $context["taxEnabled"] : (function () { throw new RuntimeError('Variable "taxEnabled" does not exist.', 33, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "          ";
            // line 35
            yield "          ";
            $context["taxRate"] = 0;
            // line 36
            yield "          ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 36, $this->source); })()), "pricing", [], "any", false, false, false, 36), "retail_price", [], "any", false, false, false, 36), "tax_rules_group_id", [], "any", false, false, false, 36), "vars", [], "any", false, false, false, 36), "choices", [], "any", false, false, false, 36));
            foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
                // line 37
                yield "            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "data", [], "any", false, false, false, 37) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 37, $this->source); })()), "pricing", [], "any", false, false, false, 37), "retail_price", [], "any", false, false, false, 37), "tax_rules_group_id", [], "any", false, false, false, 37))) {
                    // line 38
                    yield "              ";
                    $context["taxRate"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "attr", [], "any", false, false, false, 38), "data-tax-rate", [], "array", false, false, false, 38);
                    // line 39
                    yield "            ";
                }
                // line 40
                yield "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['group_label'], $context['choice'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            yield "
          ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl. (tax rule: %taxRate%%)", ["%taxRate%" => Twig\Extension\CoreExtension::round((isset($context["taxRate"]) || array_key_exists("taxRate", $context) ? $context["taxRate"] : (function () { throw new RuntimeError('Variable "taxRate" does not exist.', 42, $this->source); })()), 2)], "Admin.Catalog.Feature"), "html", null, true);
            yield "
        ";
        } else {
            // line 44
            yield "          ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tax incl.", [], "Admin.Catalog.Feature"), "html", null, true);
            yield "
        ";
        }
        // line 46
        yield "      </div>
    </div>

    ";
        // line 50
        yield "    ";
        if ((($tmp = (isset($context["stockEnabled"]) || array_key_exists("stockEnabled", $context) ? $context["stockEnabled"] : (function () { throw new RuntimeError('Variable "stockEnabled" does not exist.', 50, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 51
            yield "      ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 51, $this->source); })()), "header", [], "any", false, false, false, 51), "type", [], "any", false, false, false, 51) == "pack") &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 51, $this->source); })()), "stock", [], "any", false, false, false, 51), "quantities", [], "any", false, false, false, 51), "pack_quantity", [], "any", false, false, false, 51)))) {
                // line 52
                yield "        ";
                $context["quantityData"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 52, $this->source); })()), "stock", [], "any", false, false, false, 52), "quantities", [], "any", false, false, false, 52), "pack_quantity", [], "any", false, false, false, 52);
                // line 53
                yield "      ";
            } else {
                // line 54
                yield "        ";
                $context["quantityData"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 54, $this->source); })()), "stock", [], "any", false, false, false, 54), "quantities", [], "any", false, false, false, 54), "delta_quantity", [], "any", false, false, false, 54), "quantity", [], "any", false, false, false, 54);
                // line 55
                yield "      ";
            }
            // line 56
            yield "
      ";
            // line 57
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 57, $this->source); })()), "header", [], "any", false, false, false, 57), "type", [], "any", false, false, false, 57) != "combinations")) {
                // line 58
                yield "        ";
                $context["lowStock"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productData"]) || array_key_exists("productData", $context) ? $context["productData"] : (function () { throw new RuntimeError('Variable "productData" does not exist.', 58, $this->source); })()), "stock", [], "any", false, false, false, 58), "options", [], "any", false, false, false, 58), "low_stock_threshold", [], "any", false, false, false, 58);
                // line 59
                yield "      ";
            } else {
                // line 60
                yield "        ";
                $context["lowStock"] = 0;
                // line 61
                yield "      ";
            }
            // line 62
            yield "
      ";
            // line 63
            $context["outOfStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("out of stock", [], "Admin.Catalog.Feature");
            // line 64
            yield "      ";
            $context["lowStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("low stock", [], "Admin.Catalog.Feature");
            // line 65
            yield "      ";
            $context["inStockLabel"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("in stock", [], "Admin.Catalog.Feature");
            // line 66
            yield "
      ";
            // line 67
            if (((isset($context["quantityData"]) || array_key_exists("quantityData", $context) ? $context["quantityData"] : (function () { throw new RuntimeError('Variable "quantityData" does not exist.', 67, $this->source); })()) <= 0)) {
                // line 68
                yield "        ";
                $context["stockClass"] = "danger";
                // line 69
                yield "        ";
                $context["stockLabel"] = (isset($context["outOfStockLabel"]) || array_key_exists("outOfStockLabel", $context) ? $context["outOfStockLabel"] : (function () { throw new RuntimeError('Variable "outOfStockLabel" does not exist.', 69, $this->source); })());
                // line 70
                yield "      ";
            } elseif ((((isset($context["lowStock"]) || array_key_exists("lowStock", $context) ? $context["lowStock"] : (function () { throw new RuntimeError('Variable "lowStock" does not exist.', 70, $this->source); })()) > 0) && ((isset($context["quantityData"]) || array_key_exists("quantityData", $context) ? $context["quantityData"] : (function () { throw new RuntimeError('Variable "quantityData" does not exist.', 70, $this->source); })()) <= (isset($context["lowStock"]) || array_key_exists("lowStock", $context) ? $context["lowStock"] : (function () { throw new RuntimeError('Variable "lowStock" does not exist.', 70, $this->source); })())))) {
                // line 71
                yield "        ";
                $context["stockClass"] = "warning";
                // line 72
                yield "        ";
                $context["stockLabel"] = (isset($context["lowStockLabel"]) || array_key_exists("lowStockLabel", $context) ? $context["lowStockLabel"] : (function () { throw new RuntimeError('Variable "lowStockLabel" does not exist.', 72, $this->source); })());
                // line 73
                yield "      ";
            } else {
                // line 74
                yield "        ";
                $context["stockClass"] = "success";
                // line 75
                yield "        ";
                $context["stockLabel"] = (isset($context["inStockLabel"]) || array_key_exists("inStockLabel", $context) ? $context["inStockLabel"] : (function () { throw new RuntimeError('Variable "inStockLabel" does not exist.', 75, $this->source); })());
                // line 76
                yield "      ";
            }
            // line 77
            yield "
      <div
        class=\"product-field-preview\"
        data-role=\"quantity\"
        ";
            // line 82
            yield "        data-low-stock-threshold=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lowStock"]) || array_key_exists("lowStock", $context) ? $context["lowStock"] : (function () { throw new RuntimeError('Variable "lowStock" does not exist.', 82, $this->source); })()), "html", null, true);
            yield "\"
        data-out-of-stock-label=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["outOfStockLabel"]) || array_key_exists("outOfStockLabel", $context) ? $context["outOfStockLabel"] : (function () { throw new RuntimeError('Variable "outOfStockLabel" does not exist.', 83, $this->source); })()), "html", null, true);
            yield "\"
        data-low-stock-label=\"";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["lowStockLabel"]) || array_key_exists("lowStockLabel", $context) ? $context["lowStockLabel"] : (function () { throw new RuntimeError('Variable "lowStockLabel" does not exist.', 84, $this->source); })()), "html", null, true);
            yield "\"
        data-in-stock-label=\"";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inStockLabel"]) || array_key_exists("inStockLabel", $context) ? $context["inStockLabel"] : (function () { throw new RuntimeError('Variable "inStockLabel" does not exist.', 85, $this->source); })()), "html", null, true);
            yield "\"
      >
        <div class=\"product-total-quantity product-field-value ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stockClass"]) || array_key_exists("stockClass", $context) ? $context["stockClass"] : (function () { throw new RuntimeError('Variable "stockClass" does not exist.', 87, $this->source); })()), "html", null, true);
            yield "\">
          ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["quantityData"]) || array_key_exists("quantityData", $context) ? $context["quantityData"] : (function () { throw new RuntimeError('Variable "quantityData" does not exist.', 88, $this->source); })()), "html", null, true);
            yield "
        </div>
        <div class=\"product-field-label product-total-quantity-label\">
          ";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stockLabel"]) || array_key_exists("stockLabel", $context) ? $context["stockLabel"] : (function () { throw new RuntimeError('Variable "stockLabel" does not exist.', 91, $this->source); })()), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        // line 95
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header_references(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_references"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header_references"));

        // line 99
        yield "  ";
        $context["referencesForm"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["productForm"]) || array_key_exists("productForm", $context) ? $context["productForm"] : (function () { throw new RuntimeError('Variable "productForm" does not exist.', 99, $this->source); })()), "details", [], "any", false, false, false, 99), "references", [], "any", false, false, false, 99);
        // line 100
        yield "  <div class=\"product-header-references\">
    ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["referencesForm"]) || array_key_exists("referencesForm", $context) ? $context["referencesForm"] : (function () { throw new RuntimeError('Variable "referencesForm" does not exist.', 101, $this->source); })()), "children", [], "any", false, false, false, 101));
        foreach ($context['_seq'] as $context["keyChild"] => $context["child"]) {
            // line 102
            yield "      ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 102), "value", [], "any", false, false, false, 102))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 103
                yield "        <div class=\"product-reference\" data-reference-type=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["keyChild"], "html", null, true);
                yield "\">
          <label>";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 104), "label", [], "any", false, false, false, 104), "html", null, true);
                yield "</label>
          <span>";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 105), "value", [], "any", false, false, false, 105), "html", null, true);
                yield "</span>
        </div>
      ";
            }
            // line 108
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['keyChild'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "  </div>
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  357 => 109,  351 => 108,  345 => 105,  341 => 104,  336 => 103,  333 => 102,  329 => 101,  326 => 100,  323 => 99,  310 => 98,  298 => 95,  291 => 91,  285 => 88,  281 => 87,  276 => 85,  272 => 84,  268 => 83,  263 => 82,  257 => 77,  254 => 76,  251 => 75,  248 => 74,  245 => 73,  242 => 72,  239 => 71,  236 => 70,  233 => 69,  230 => 68,  228 => 67,  225 => 66,  222 => 65,  219 => 64,  217 => 63,  214 => 62,  211 => 61,  208 => 60,  205 => 59,  202 => 58,  200 => 57,  197 => 56,  194 => 55,  191 => 54,  188 => 53,  185 => 52,  182 => 51,  179 => 50,  174 => 46,  168 => 44,  163 => 42,  160 => 41,  154 => 40,  151 => 39,  148 => 38,  145 => 37,  140 => 36,  137 => 35,  135 => 34,  132 => 33,  126 => 29,  117 => 23,  113 => 21,  107 => 19,  101 => 17,  98 => 16,  96 => 15,  91 => 12,  88 => 11,  86 => 8,  73 => 7,  61 => 111,  59 => 98,  56 => 97,  54 => 7,  50 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

<div class=\"product-header-details\">
{% block header_summary %}
  {# It is important to use vars.data and not vars.value because value contains the localized value which may
   # not be written with numeric characters anymore depending on the language but data is the initial float data.
   #}
  {% set productData = productForm.vars.data %}
  <div class=\"product-header-summary\">
    <div class=\"product-field-preview\" data-role=\"price-tax-excluded\">
      <div class=\"product-field-value\">
        {% if productData.pricing.retail_price.ecotax_tax_excluded is defined %}
          {% set final_price_tax_excluded = productData.pricing.retail_price.price_tax_excluded + productData.pricing.retail_price.ecotax_tax_excluded %}
          {{ final_price_tax_excluded|price_format }}
        {% else %}
          {{ productData.pricing.retail_price.price_tax_excluded|price_format }}
        {% endif %}
      </div>
      <div class=\"product-field-label\">
        {{ \x27tax excl.\x27|trans({}, \x27Admin.Global\x27) }}
      </div>
    </div>

    <div class=\"product-field-preview\" data-role=\"price-tax-included\">
      <div class=\"product-field-value\">
        {{ productData.pricing.retail_price.price_tax_included|price_format }}
      </div>
      <div class=\"product-field-label\">
        {# If tax feature is enabled display it in the label #}
        {% if taxEnabled %}
          {# First find the selected tax rate #}
          {% set taxRate = 0 %}
          {% for group_label, choice in productForm.pricing.retail_price.tax_rules_group_id.vars.choices %}
            {% if choice.data == productData.pricing.retail_price.tax_rules_group_id %}
              {% set taxRate = choice.attr[\x27data-tax-rate\x27] %}
            {% endif %}
          {% endfor %}

          {{ \x27tax incl. (tax rule: %taxRate%%)\x27|trans({\x27%taxRate%\x27: taxRate|round(2)}, \x27Admin.Catalog.Feature\x27) }}
        {% else %}
          {{ \x27tax incl.\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}
        {% endif %}
      </div>
    </div>

    {# Only display stock when Stock management is enabled #}
    {% if stockEnabled %}
      {% if productData.header.type == \x27pack\x27 and productData.stock.quantities.pack_quantity is not null %}
        {% set quantityData = productData.stock.quantities.pack_quantity %}
      {% else %}
        {% set quantityData = productData.stock.quantities.delta_quantity.quantity %}
      {% endif %}

      {% if productData.header.type != \x27combinations\x27 %}
        {% set lowStock = productData.stock.options.low_stock_threshold %}
      {% else %}
        {% set lowStock = 0 %}
      {% endif %}

      {% set outOfStockLabel = \x27out of stock\x27|trans({}, \x27Admin.Catalog.Feature\x27) %}
      {% set lowStockLabel = \x27low stock\x27|trans({}, \x27Admin.Catalog.Feature\x27) %}
      {% set inStockLabel = \x27in stock\x27|trans({}, \x27Admin.Catalog.Feature\x27) %}

      {% if quantityData <= 0 %}
        {% set stockClass = \x27danger\x27 %}
        {% set stockLabel = outOfStockLabel %}
      {% elseif lowStock > 0 and quantityData <= lowStock %}
        {% set stockClass = \x27warning\x27 %}
        {% set stockLabel = lowStockLabel %}
      {% else %}
        {% set stockClass = \x27success\x27 %}
        {% set stockLabel = inStockLabel %}
      {% endif %}

      <div
        class=\"product-field-preview\"
        data-role=\"quantity\"
        {# these data attributes are needed for dynamic quantity update in javascript side #}
        data-low-stock-threshold=\"{{ lowStock }}\"
        data-out-of-stock-label=\"{{ outOfStockLabel }}\"
        data-low-stock-label=\"{{ lowStockLabel }}\"
        data-in-stock-label=\"{{ inStockLabel }}\"
      >
        <div class=\"product-total-quantity product-field-value {{ stockClass }}\">
          {{ quantityData }}
        </div>
        <div class=\"product-field-label product-total-quantity-label\">
          {{ stockLabel }}
        </div>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block header_references %}
  {% set referencesForm = productForm.details.references %}
  <div class=\"product-header-references\">
    {% for keyChild, child in referencesForm.children %}
      {% if child.vars.value is not empty %}
        <div class=\"product-reference\" data-reference-type=\"{{ keyChild }}\">
          <label>{{ child.vars.label }}</label>
          <span>{{ child.vars.value }}</span>
        </div>
      {% endif %}
    {% endfor %}
  </div>
{% endblock %}
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/header-details.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\header-details.html.twig");
    }
}
