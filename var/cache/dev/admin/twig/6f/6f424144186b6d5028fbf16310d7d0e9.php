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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig */
class __TwigTemplate_58bbdd19c7a254488a79eeb1db97428e extends Template
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
            'features_row' => [$this, 'block_features_row'],
            'feature_collection_row' => [$this, 'block_feature_collection_row'],
            'feature_collection_item_row' => [$this, 'block_feature_collection_item_row'],
            'feature_value_row' => [$this, 'block_feature_value_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig"));

        // line 6
        yield from $this->unwrap()->yieldBlock('features_row', $context, $blocks);
        // line 31
        yield from $this->unwrap()->yieldBlock('feature_collection_row', $context, $blocks);
        // line 55
        yield from $this->unwrap()->yieldBlock('feature_collection_item_row', $context, $blocks);
        // line 71
        yield from $this->unwrap()->yieldBlock('feature_value_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_features_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "features_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "features_row"));

        // line 7
        yield "<div class=\"form-group\">
    <h3>";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Features", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</h3>

    ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'errors');
        yield "
    <div class=\"product-features-controls\">
      ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "feature_id", [], "any", false, false, false, 12), 'widget');
        yield "
      <div class=\"feature-value-spinner d-none\">
        <div class=\"spinner\"></div>
        ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading feature values...", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
      </div>
      ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "feature_value_id", [], "any", false, false, false, 17), 'widget');
        yield "
      ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "custom_value", [], "any", false, false, false, 18), 'widget');
        yield "
      ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "add_feature", [], "any", false, false, false, 19), 'widget');
        yield "
    </div>
    ";
        // line 22
        yield "    ";
        $_v0 = $context;
        $_v1 = ["external_link" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "feature_id", [], "any", false, false, false, 22), "vars", [], "any", false, false, false, 22), "external_link", [], "any", false, false, false, 22)];
        if (!is_iterable($_v1)) {
            throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 22, $this->getSourceContext());
        }
        $_v1 = CoreExtension::toArray($_v1);
        $context = $_v1 + $context + $this->env->getGlobals();
        // line 23
        yield from         $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        $context = $_v0;
        // line 26
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 27
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feature_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_collection_row"));

        // line 33
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 33, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 33, $this->source); })()), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33)]);
        // line 34
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 34)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 34, $this->source); })()), "class", [], "any", false, false, false, 34), "")) : ("")) . " table feature-values-table-collection"))]);
        // line 37
        yield "  ";
        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "vars", [], "any", false, false, false, 37), "value", [], "any", false, false, false, 37))) {
            // line 38
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), "class", [], "any", false, false, false, 38), "")) : ("")) . " d-none"))]);
        }
        // line 40
        yield "
  <table ";
        // line 41
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " data-row-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "children", [], "any", false, false, false, 41)), "html", null, true);
        yield "\">
    <thead class=\"thead-default\">
    <tr>
      <th>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Feature value", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th></th>
    </tr>
    </thead>
    <tbody>";
        // line 50
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 51
        yield "</tbody>
  </table>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feature_collection_item_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_collection_item_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_collection_item_row"));

        // line 57
        yield "  ";
        $context["featureId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "feature_id", [], "any", false, false, false, 57), "vars", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57);
        // line 58
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 58, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 58)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 58, $this->source); })()), "class", [], "any", false, false, false, 58), "")) : ("")) . " product-feature-collection")), "feature-id" => (isset($context["featureId"]) || array_key_exists("featureId", $context) ? $context["featureId"] : (function () { throw new RuntimeError('Variable "featureId" does not exist.', 58, $this->source); })())]);
        // line 60
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 60, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "feature_values", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "feature_values", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "prototype", [], "any", false, false, false, 60), "vars", [], "any", false, false, false, 60), "name", [], "any", false, false, false, 60)]);
        // line 61
        yield "<tr ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield " data-row-index=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "feature_values", [], "any", false, false, false, 61)), "html", null, true);
        yield "\">
    <td colspan=\"3\">
      ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "feature_id", [], "any", false, false, false, 63), 'widget');
        yield "
      ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "feature_name", [], "any", false, false, false, 64), 'widget');
        yield "
    </td>
  </tr>
  ";
        // line 68
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_feature_value_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_value_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "feature_value_row"));

        // line 73
        yield "  ";
        $context["featureCollectionParent"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "parent", [], "any", false, false, false, 73), "parent", [], "any", false, false, false, 73);
        // line 74
        yield "  ";
        $context["featureId"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["featureCollectionParent"]) || array_key_exists("featureCollectionParent", $context) ? $context["featureCollectionParent"] : (function () { throw new RuntimeError('Variable "featureCollectionParent" does not exist.', 74, $this->source); })()), "feature_id", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "value", [], "any", false, false, false, 74);
        // line 75
        yield "  ";
        $context["featureName"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["featureCollectionParent"]) || array_key_exists("featureCollectionParent", $context) ? $context["featureCollectionParent"] : (function () { throw new RuntimeError('Variable "featureCollectionParent" does not exist.', 75, $this->source); })()), "feature_name", [], "any", false, false, false, 75), "vars", [], "any", false, false, false, 75), "value", [], "any", false, false, false, 75);
        // line 76
        yield "  <tr class=\"product-feature-value\" feature-id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["featureId"]) || array_key_exists("featureId", $context) ? $context["featureId"] : (function () { throw new RuntimeError('Variable "featureId" does not exist.', 76, $this->source); })()), "html", null, true);
        yield "\">
    <td class=\"feature-column\">
      ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["featureName"]) || array_key_exists("featureName", $context) ? $context["featureName"] : (function () { throw new RuntimeError('Variable "featureName" does not exist.', 78, $this->source); })()), "html", null, true);
        yield "
    </td>
    <td>
      ";
        // line 81
        if ((null === (isset($context["is_custom"]) || array_key_exists("is_custom", $context) ? $context["is_custom"] : (function () { throw new RuntimeError('Variable "is_custom" does not exist.', 81, $this->source); })()))) {
            // line 82
            yield "        ";
            // line 83
            yield "        ";
            $context["featureValueAttributes"] = [];
            // line 84
            yield "        ";
            $context["customValueAttributes"] = [];
            // line 85
            yield "      ";
        } elseif ((($tmp = (isset($context["is_custom"]) || array_key_exists("is_custom", $context) ? $context["is_custom"] : (function () { throw new RuntimeError('Variable "is_custom" does not exist.', 85, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "        ";
            // line 87
            yield "        ";
            $context["featureValueAttributes"] = ["row_attr" => ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "feature_value_name", [], "any", false, true, false, 87), "vars", [], "any", false, true, false, 87), "row_attr", [], "any", false, true, false, 87), "class", [], "any", true, true, false, 87)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "feature_value_name", [], "any", false, false, false, 87), "vars", [], "any", false, false, false, 87), "row_attr", [], "any", false, false, false, 87), "class", [], "any", false, false, false, 87), "")) : ("")) . " d-none"))]];
            // line 88
            yield "        ";
            $context["customValueAttributes"] = [];
            // line 89
            yield "      ";
        } else {
            // line 90
            yield "        ";
            // line 91
            yield "        ";
            $context["featureValueAttributes"] = [];
            // line 92
            yield "        ";
            $context["customValueAttributes"] = ["row_attr" => ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "custom_value", [], "any", false, true, false, 92), "vars", [], "any", false, true, false, 92), "row_attr", [], "any", false, true, false, 92), "class", [], "any", true, true, false, 92)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "custom_value", [], "any", false, false, false, 92), "vars", [], "any", false, false, false, 92), "row_attr", [], "any", false, false, false, 92), "class", [], "any", false, false, false, 92), "")) : ("")) . " d-none"))]];
            // line 93
            yield "      ";
        }
        // line 94
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "feature_value_name", [], "any", false, false, false, 94), 'row', Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "feature_value_name", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "attr", [], "any", false, false, false, 94), (isset($context["featureValueAttributes"]) || array_key_exists("featureValueAttributes", $context) ? $context["featureValueAttributes"] : (function () { throw new RuntimeError('Variable "featureValueAttributes" does not exist.', 94, $this->source); })())));
        yield "
      ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "custom_value", [], "any", false, false, false, 95), 'row', Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "custom_value", [], "any", false, false, false, 95), "vars", [], "any", false, false, false, 95), "attr", [], "any", false, false, false, 95), (isset($context["customValueAttributes"]) || array_key_exists("customValueAttributes", $context) ? $context["customValueAttributes"] : (function () { throw new RuntimeError('Variable "customValueAttributes" does not exist.', 95, $this->source); })())));
        yield "
      ";
        // line 96
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "feature_value_id", [], "any", false, false, false, 96), 'row');
        yield "
      ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "is_custom", [], "any", false, false, false, 97), 'row');
        yield "
    </td>
    <td class=\"feature-actions\">
      ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "delete", [], "any", false, false, false, 100), 'widget');
        yield "

      ";
        // line 103
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), 'rest');
        yield "
    </td>
  </tr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  345 => 103,  340 => 100,  334 => 97,  330 => 96,  326 => 95,  321 => 94,  318 => 93,  315 => 92,  312 => 91,  310 => 90,  307 => 89,  304 => 88,  301 => 87,  299 => 86,  296 => 85,  293 => 84,  290 => 83,  288 => 82,  286 => 81,  280 => 78,  274 => 76,  271 => 75,  268 => 74,  265 => 73,  252 => 71,  241 => 68,  235 => 64,  231 => 63,  223 => 61,  221 => 60,  219 => 58,  216 => 57,  203 => 55,  191 => 51,  189 => 50,  182 => 45,  178 => 44,  170 => 41,  167 => 40,  164 => 38,  161 => 37,  159 => 34,  157 => 33,  144 => 31,  133 => 27,  131 => 26,  128 => 23,  119 => 22,  114 => 19,  110 => 18,  106 => 17,  101 => 15,  95 => 12,  90 => 10,  85 => 8,  82 => 7,  69 => 6,  58 => 71,  56 => 55,  54 => 31,  52 => 6,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{%- block features_row -%}
  <div class=\"form-group\">
    <h3>{{ \x27Features\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</h3>

    {{ form_errors(form) }}
    <div class=\"product-features-controls\">
      {{ form_widget(form.feature_id) }}
      <div class=\"feature-value-spinner d-none\">
        <div class=\"spinner\"></div>
        {{ \x27Loading feature values...\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}
      </div>
      {{ form_widget(form.feature_value_id) }}
      {{ form_widget(form.custom_value) }}
      {{ form_widget(form.add_feature) }}
    </div>
    {# Manually add the external link block because we don\x27t use form_row and this way it\x27s under the whole block #}
    {% with {external_link: form.feature_id.vars.external_link} %}
      {{- block(\x27form_external_link\x27) -}}
    {% endwith %}

    {{- block(\x27form_rows\x27) -}}
  </div>
{%- endblock -%}

{# Override feature collection template to remove the label and init the table #}
{%- block feature_collection_row -%}
  {# We put prototype name in a data attribute, so the JS code can get it dynamically #}
  {%- set attr = attr|merge({\x27data-prototype\x27: form_row(prototype), \x27data-prototype-name\x27: prototype.vars.name}) -%}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 table feature-values-table-collection\x27)|trim}) -%}

  {# Hide table if content is empty #}
  {% if form.vars.value is empty %}
    {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 d-none\x27)|trim}) -%}
  {% endif %}

  <table {{ block(\x27widget_attributes\x27) }} data-row-index=\"{{ form.children|length }}\">
    <thead class=\"thead-default\">
    <tr>
      <th>{{ \x27Feature\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</th>
      <th>{{ \x27Feature value\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    {{- block(\x27form_rows\x27) -}}
    </tbody>
  </table>
{%- endblock -%}

{%- block feature_collection_item_row -%}
  {# Feature inputs are rendered even if they are hidden types, and hidden via CSS, so their data is still submitted #}
  {% set featureId = form.feature_id.vars.value %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 product-feature-collection\x27)|trim, \x27feature-id\x27: featureId}) -%}
  {# We put prototype name in a data attribute, so the JS code can get it dynamically #}
  {%- set attr = attr|merge({\x27data-prototype\x27: form_row(form.feature_values.vars.prototype), \x27data-prototype-name\x27: form.feature_values.vars.prototype.vars.name}) -%}
  <tr {{ block(\x27widget_attributes\x27) }} data-row-index=\"{{ form.feature_values|length }}\">
    <td colspan=\"3\">
      {{ form_widget(form.feature_id) }}
      {{ form_widget(form.feature_name) }}
    </td>
  </tr>
  {# The children of the collection are rendered as TR rows in the same table, we only pass the data from parent #}
  {{- block(\x27form_rows\x27) -}}
{%- endblock -%}

{%- block feature_value_row -%}
  {# Get feature values from the ancestor #}
  {% set featureCollectionParent = form.parent.parent %}
  {% set featureId = featureCollectionParent.feature_id.vars.value %}
  {% set featureName = featureCollectionParent.feature_name.vars.value %}
  <tr class=\"product-feature-value\" feature-id=\"{{ featureId }}\">
    <td class=\"feature-column\">
      {{ featureName }}
    </td>
    <td>
      {% if is_custom is null %}
        {# Rendering the prototype we keep everything visible by default #}
        {% set featureValueAttributes = {} %}
        {% set customValueAttributes = {} %}
      {% elseif is_custom %}
        {# Hide feature value name when feature value is custom #}
        {% set featureValueAttributes = {row_attr: {class: (form.feature_value_name.vars.row_attr.class|default(\x27\x27) ~ \x27 d-none\x27)|trim}} %}
        {% set customValueAttributes = {} %}
      {% else %}
        {# Hide custom inputs when feature value is not custom #}
        {% set featureValueAttributes = {} %}
        {% set customValueAttributes = {row_attr: {class: (form.custom_value.vars.row_attr.class|default(\x27\x27) ~ \x27 d-none\x27)|trim}} %}
      {% endif %}
      {{ form_row(form.feature_value_name, form.feature_value_name.vars.attr|merge(featureValueAttributes)) }}
      {{ form_row(form.custom_value, form.custom_value.vars.attr|merge(customValueAttributes)) }}
      {{ form_row(form.feature_value_id) }}
      {{ form_row(form.is_custom) }}
    </td>
    <td class=\"feature-actions\">
      {{ form_widget(form.delete) }}

      {# Not ideal place but still we render the rest in case some inputs were added #}
      {{ form_rest(form) }}
    </td>
  </tr>
{%- endblock -%}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/features.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\features.html.twig");
    }
}
