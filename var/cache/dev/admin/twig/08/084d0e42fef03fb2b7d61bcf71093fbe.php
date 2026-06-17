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

/* @PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig */
class __TwigTemplate_faa6cb10f887cbdd66df4d4fcb2b487c extends Template
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
            'category_tags_collection_row' => [$this, 'block_category_tags_collection_row'],
            'product_category_row' => [$this, 'block_product_category_row'],
            'category_tree_selector_row' => [$this, 'block_category_tree_selector_row'],
            'category_tree_entry_row' => [$this, 'block_category_tree_entry_row'],
            'category_tree_collection_row' => [$this, 'block_category_tree_collection_row'],
            'category_filter_row' => [$this, 'block_category_filter_row'],
            'category_filter_widget' => [$this, 'block_category_filter_widget'],
            'category_filter_item_widget' => [$this, 'block_category_filter_item_widget'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig"));

        $this->parent = $this->load("@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tags_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tags_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tags_collection_row"));

        // line 8
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), "class", [], "any", false, false, false, 8), "")) : ("")) . " pstaggerTagsWrapper form-group d-block"))]);
        // line 9
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 9, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 9, $this->source); })()), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 9, $this->source); })()), "vars", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9)]);
        // line 10
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 11
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_product_category_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_category_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "product_category_row"));

        // line 16
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 16, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 16)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 16, $this->source); })()), "class", [], "any", false, false, false, 16), "")) : ("")) . " pstaggerTag tag-item"))]);
        // line 18
        yield "<span ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "display_name", [], "any", false, false, false, 19), 'widget');
        yield "
    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "name", [], "any", false, false, false, 20), 'widget');
        yield "
    ";
        // line 21
        $context["isRemovable"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 21), "data", [], "any", false, true, false, 21), "removable", [], "any", true, true, false, 21) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "vars", [], "any", false, false, false, 21), "data", [], "any", false, false, false, 21), "removable", [], "any", false, false, false, 21));
        // line 22
        yield "    <a class=\"pstaggerClosingCross ";
        if ((($tmp =  !(isset($context["isRemovable"]) || array_key_exists("isRemovable", $context) ? $context["isRemovable"] : (function () { throw new RuntimeError('Variable "isRemovable" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "d-none";
        }
        yield "\" href=\"#\">x</a>
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "category-id-input"]]);
        yield "
  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_selector_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_selector_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_selector_row"));

        // line 28
        yield "  <template id=\"categories-modal-template\">
    <div id=\"categories-modal-content\">
      ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "product_categories", [], "any", false, false, false, 30), 'row');
        yield "

      <fieldset class=\"form-group tree-fieldset d-none\">
        <div class=\"ui-widget\">
          <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search categories", [], "Admin.Catalog.Help"), "html", null, true);
        yield "\" autocomplete=\"off\">
          </div>

          <label class=\"form-control-label text-uppercase\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Associated categories", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</label>
          ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "category_tree", [], "any", false, false, false, 39), 'row');
        yield "
        </div>
      </fieldset>

      <div class=\"categories-tree-loader\">
        <div class=\"spinner m-auto d-block\"></div>
      </div>

      <div class=\"category-tree-footer\">
        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "cancel_btn", [], "any", false, false, false, 48), 'widget');
        yield "
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "apply_btn", [], "any", false, false, false, 49), 'widget');
        yield "
      </div>
    </div>
  </template>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_entry_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_entry_row"));

        // line 56
        yield "  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'widget');
        yield "
    </div>
    <ul class=\"children-list\"></ul>
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_tree_collection_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_collection_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_tree_collection_row"));

        // line 65
        yield "<div class=\"category-tree-container\">
  <div class=\"category-tree-overflow js-category-tree-overflow\">";
        // line 67
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 67, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 67, $this->source); })()), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 67, $this->source); })()), "vars", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67)]);
        // line 68
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 68, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 68, $this->source); })()), "class", [], "any", false, false, false, 68), "")) : ("")) . " js-category-tree-list category-tree"))]);
        // line 69
        yield "<ul ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 70
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 71
        yield "</ul>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_filter_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_row"));

        // line 77
        yield "  <div class=\"d-inline-block dropdown dropdown-clickable product_list_category_filter\">
    <button
      class=\"btn btn-outline-secondary dropdown-toggle\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
    >
      ";
        // line 85
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Filter by categories", [], "Admin.Actions"), "html", null, true);
        yield "
      ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 87, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "data", [], "any", false, false, false, 88) && (CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 88) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "vars", [], "any", false, false, false, 88), "data", [], "any", false, false, false, 88)))) {
                // line 89
                yield "          (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 89), "html", null, true);
                yield ")
        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "</button>
    <div class=\"dropdown-menu category-filter-menu\">
      <div class=\"categories-tree-actions\">
        <button type=\"button\" class=\"category_tree_filter_expand btn\">
          <i class=\"material-icons\">expand_more</i>
          ";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
        <button type=\"button\" class=\"category_tree_filter_collapse btn\">
          <i class=\"material-icons\">expand_less</i>
          ";
        // line 101
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
        <button type=\"button\" class=\"category_tree_filter_reset btn\">
          <i class=\"material-icons\">radio_button_unchecked</i>
          ";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unselect", [], "Admin.Actions"), "html", null, true);
        yield "
        </button>
      </div>
      ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'widget');
        yield "
    </div>
  </div>
  ";
        // line 111
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "vars", [], "any", false, false, false, 111), "data", [], "any", false, false, false, 111))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 112
            yield "  <button class=\"btn btn-link category_tree_filter_reset\" type=\"button\">
    <i class=\"material-icons\">clear</i> Clear filter
  </button>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_widget"));

        // line 119
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <ul class=\"category-tree\">";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["nested_tree"]) || array_key_exists("nested_tree", $context) ? $context["nested_tree"] : (function () { throw new RuntimeError('Variable "nested_tree" does not exist.', 121, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 122
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("category_filter_item_widget", $context, $blocks);
            yield "
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "</ul>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_category_filter_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "category_filter_item_widget"));

        // line 129
        yield "<li class=\"category-node";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 129) && Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 129, $this->source); })()), "children", [], "any", false, false, false, 129)))) {
            yield " more";
        }
        yield "\">
    <div class=\"form-check form-check-radio form-radio radio category-label\">
      ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 131, $this->source); })()), "name", [], "any", false, false, false, 131), "html", null, true);
        yield "
      <label class=\"form-check-label\">
        <input type=\"radio\" name=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "vars", [], "any", false, false, false, 133), "id", [], "any", false, false, false, 133), "html", null, true);
        yield "\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 133, $this->source); })()), "id_category", [], "any", false, false, false, 133), "html", null, true);
        yield "\" ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 133, $this->source); })()), "id_category", [], "any", false, false, false, 133) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 133, $this->source); })()), "vars", [], "any", false, false, false, 133), "data", [], "any", false, false, false, 133))) {
            yield "checked=\"checked\"";
        }
        yield ">
        <i class=\"form-check-round\"></i>
      </label>
    </div>

    ";
        // line 138
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 138)) {
            // line 139
            yield "      <ul class=\"category-children d-none\">
        ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 140, $this->source); })()), "children", [], "any", false, false, false, 140));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 141
                yield "          ";
                $context["child"] = $context["item"];
                // line 142
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("category_filter_item_widget", $context, $blocks);
                yield "
        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            yield "</ul>
    ";
        }
        // line 146
        yield "  </li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig";
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
        return array (  540 => 146,  536 => 144,  519 => 142,  516 => 141,  499 => 140,  496 => 139,  494 => 138,  480 => 133,  475 => 131,  467 => 129,  454 => 128,  442 => 124,  425 => 122,  408 => 121,  403 => 119,  390 => 118,  375 => 112,  373 => 111,  367 => 108,  361 => 105,  354 => 101,  347 => 97,  340 => 92,  330 => 89,  328 => 88,  324 => 87,  320 => 85,  310 => 77,  297 => 76,  283 => 71,  281 => 70,  277 => 69,  275 => 68,  273 => 67,  270 => 65,  257 => 64,  241 => 58,  237 => 56,  224 => 55,  208 => 49,  204 => 48,  192 => 39,  188 => 38,  182 => 35,  174 => 30,  170 => 28,  157 => 27,  143 => 23,  136 => 22,  134 => 21,  130 => 20,  126 => 19,  121 => 18,  119 => 16,  106 => 15,  92 => 11,  87 => 10,  85 => 9,  83 => 8,  70 => 7,  47 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% extends \x27@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig\x27 %}

{% block category_tags_collection_row %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 pstaggerTagsWrapper form-group d-block\x27)|trim}) -%}
  {%- set attr = attr|merge({\x27data-prototype\x27: form_row(prototype), \x27data-prototype-name\x27: prototype.vars.name}) -%}
  <div {{ block(\x27widget_attributes\x27) }}>
    {{ block(\x27form_rows\x27) }}
  </div>
{% endblock %}

{% block product_category_row %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 pstaggerTag tag-item\x27)|trim}) -%}

  <span {{ block(\x27widget_attributes\x27) }}>
    {{ form_widget(form.display_name) }}
    {{ form_widget(form.name) }}
    {% set isRemovable = (form.vars.data.removable is defined and form.vars.data.removable) %}
    <a class=\"pstaggerClosingCross {% if not isRemovable %}d-none{% endif %}\" href=\"#\">x</a>
    {{ form_widget(form.id, {attr: {class: \x27category-id-input\x27}}) }}
  </span>
{% endblock %}

{% block category_tree_selector_row %}
  <template id=\"categories-modal-template\">
    <div id=\"categories-modal-content\">
      {{ form_row(form.product_categories) }}

      <fieldset class=\"form-group tree-fieldset d-none\">
        <div class=\"ui-widget\">
          <div class=\"search search-with-icon\">
            <input type=\"text\" id=\"ps-select-product-category\" class=\"form-control autocomplete search mb-1 ui-autocomplete-input\" placeholder=\"{{ \x27Search categories\x27|trans({}, \x27Admin.Catalog.Help\x27) }}\" autocomplete=\"off\">
          </div>

          <label class=\"form-control-label text-uppercase\">{{ \x27Associated categories\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</label>
          {{ form_row(form.category_tree) }}
        </div>
      </fieldset>

      <div class=\"categories-tree-loader\">
        <div class=\"spinner m-auto d-block\"></div>
      </div>

      <div class=\"category-tree-footer\">
        {{ form_widget(form.cancel_btn) }}
        {{ form_widget(form.apply_btn) }}
      </div>
    </div>
  </template>
{% endblock %}

{% block category_tree_entry_row %}
  <li class=\"category-tree-element\">
    <div class=\"checkbox category-tree-inputs\">
      {{ form_widget(form) }}
    </div>
    <ul class=\"children-list\"></ul>
  </li>
{% endblock %}

{% block category_tree_collection_row %}
<div class=\"category-tree-container\">
  <div class=\"category-tree-overflow js-category-tree-overflow\">
    {%- set attr = attr|merge({\x27data-prototype\x27: form_row(prototype), \x27data-prototype-name\x27: prototype.vars.name}) -%}
    {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 js-category-tree-list category-tree\x27)|trim}) -%}
    <ul {{ block(\x27widget_attributes\x27) }}>
      {{- block(\x27form_rows\x27) -}}
    </ul>
  </div>
</div>
{% endblock %}

{% block category_filter_row %}
  <div class=\"d-inline-block dropdown dropdown-clickable product_list_category_filter\">
    <button
      class=\"btn btn-outline-secondary dropdown-toggle\"
      type=\"button\"
      data-toggle=\"dropdown\"
      aria-haspopup=\"true\"
      aria-expanded=\"false\"
    >
      {{ \x27Filter by categories\x27|trans({}, \x27Admin.Actions\x27) }}
      {# Display selected category if present #}
      {%- for choice in choices -%}
        {% if form.vars.data and choice.value == form.vars.data %}
          ({{ choice.label }})
        {% endif %}
      {%- endfor -%}
    </button>
    <div class=\"dropdown-menu category-filter-menu\">
      <div class=\"categories-tree-actions\">
        <button type=\"button\" class=\"category_tree_filter_expand btn\">
          <i class=\"material-icons\">expand_more</i>
          {{ \x27Expand\x27|trans({}, \x27Admin.Actions\x27) }}
        </button>
        <button type=\"button\" class=\"category_tree_filter_collapse btn\">
          <i class=\"material-icons\">expand_less</i>
          {{ \x27Collapse\x27|trans({}, \x27Admin.Actions\x27) }}
        </button>
        <button type=\"button\" class=\"category_tree_filter_reset btn\">
          <i class=\"material-icons\">radio_button_unchecked</i>
          {{ \x27Unselect\x27|trans({}, \x27Admin.Actions\x27) }}
        </button>
      </div>
      {{ form_widget(form) }}
    </div>
  </div>
  {% if form.vars.data is not empty %}
  <button class=\"btn btn-link category_tree_filter_reset\" type=\"button\">
    <i class=\"material-icons\">clear</i> Clear filter
  </button>
  {% endif %}
{% endblock %}

{% block category_filter_widget -%}
  <div {{ block(\x27widget_container_attributes\x27) }}>
    <ul class=\"category-tree\">
      {%- for child in nested_tree %}
        {{ block(\x27category_filter_item_widget\x27) }}
      {% endfor -%}
    </ul>
  </div>
{%- endblock %}

{% block category_filter_item_widget -%}
  <li class=\"category-node{% if child.children is defined and child.children|length %} more{% endif %}\">
    <div class=\"form-check form-check-radio form-radio radio category-label\">
      {{ child.name }}
      <label class=\"form-check-label\">
        <input type=\"radio\" name=\"{{ form.vars.id }}\" value=\"{{ child.id_category }}\" {% if child.id_category == form.vars.data %}checked=\"checked\"{% endif %}>
        <i class=\"form-check-round\"></i>
      </label>
    </div>

    {% if child.children is defined %}
      <ul class=\"category-children d-none\">
        {% for item in child.children %}
          {% set child = item %}
          {{ block(\x27category_filter_item_widget\x27) }}
        {% endfor -%}
      </ul>
    {% endif %}
  </li>
{%- endblock %}
", "@PrestaShop/Admin/Sell/Catalog/Product/FormTheme/categories.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\FormTheme\\categories.html.twig");
    }
}
