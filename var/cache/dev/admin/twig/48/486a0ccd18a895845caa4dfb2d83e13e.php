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

/* @PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig */
class __TwigTemplate_184b57d1d7cb845c615bce665b689aaf extends Template
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
            'entity_search_input_widget' => [$this, 'block_entity_search_input_widget'],
            'entity_search_list_layout' => [$this, 'block_entity_search_list_layout'],
            'entity_search_table_layout' => [$this, 'block_entity_search_table_layout'],
            'entity_item_row' => [$this, 'block_entity_item_row'],
            'entity_item_list_row' => [$this, 'block_entity_item_list_row'],
            'entity_item_table_row' => [$this, 'block_entity_item_table_row'],
            'searched_customer_row' => [$this, 'block_searched_customer_row'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig"));

        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('entity_search_input_widget', $context, $blocks);
        // line 55
        yield "
";
        // line 56
        yield from $this->unwrap()->yieldBlock('entity_search_list_layout', $context, $blocks);
        // line 62
        yield "
";
        // line 63
        yield from $this->unwrap()->yieldBlock('entity_search_table_layout', $context, $blocks);
        // line 92
        yield "
";
        // line 93
        yield from $this->unwrap()->yieldBlock('entity_item_row', $context, $blocks);
        // line 100
        yield "
";
        // line 101
        yield from $this->unwrap()->yieldBlock('entity_item_list_row', $context, $blocks);
        // line 115
        yield from $this->unwrap()->yieldBlock('entity_item_table_row', $context, $blocks);
        // line 138
        yield from $this->unwrap()->yieldBlock('searched_customer_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_input_widget"));

        // line 7
        yield "  ";
        // line 8
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 8, $this->source); })()), ["data-prototype-template" =>         // line 9
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 9, $this->source); })()), 'row'), "data-prototype-index" => $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 10
(isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "name", [], "any", false, false, false, 10), "html_attr"), "data-prototype-mapping" => json_encode(        // line 11
(isset($context["prototype_mapping"]) || array_key_exists("prototype_mapping", $context) ? $context["prototype_mapping"] : (function () { throw new RuntimeError('Variable "prototype_mapping" does not exist.', 11, $this->source); })())), "data-identifier-field" =>         // line 12
(isset($context["identifier_field"]) || array_key_exists("identifier_field", $context) ? $context["identifier_field"] : (function () { throw new RuntimeError('Variable "identifier_field" does not exist.', 12, $this->source); })()), "data-filtered-identities" => json_encode(        // line 13
(isset($context["filtered_identities"]) || array_key_exists("filtered_identities", $context) ? $context["filtered_identities"] : (function () { throw new RuntimeError('Variable "filtered_identities" does not exist.', 13, $this->source); })())), "data-remove-modal" => json_encode(        // line 14
(isset($context["remove_modal"]) || array_key_exists("remove_modal", $context) ? $context["remove_modal"] : (function () { throw new RuntimeError('Variable "remove_modal" does not exist.', 14, $this->source); })())), "data-remote-url" =>         // line 15
(isset($context["remote_url"]) || array_key_exists("remote_url", $context) ? $context["remote_url"] : (function () { throw new RuntimeError('Variable "remote_url" does not exist.', 15, $this->source); })()), "data-data-limit" =>         // line 16
(isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 16, $this->source); })()), "data-min-length" =>         // line 17
(isset($context["min_length"]) || array_key_exists("min_length", $context) ? $context["min_length"] : (function () { throw new RuntimeError('Variable "min_length" does not exist.', 17, $this->source); })()), "data-allow-delete" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "allow_delete", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0)), "data-suggestion-field" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "vars", [], "any", false, false, false, 19), "suggestion_field", [], "any", false, false, false, 19)]);
        // line 21
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 21, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 21)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 21, $this->source); })()), "class", [], "any", false, false, false, 21), "")) : ("")) . " entity-search-widget"))]);
        // line 24
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 26
        yield "    ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "vars", [], "any", false, false, false, 26), "allow_search", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 27
            yield "      <div class=\"search search-with-icon\">";
            // line 28
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["search_attr"]) || array_key_exists("search_attr", $context) ? $context["search_attr"] : (function () { throw new RuntimeError('Variable "search_attr" does not exist.', 28, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,             // line 29
($context["search_attr"] ?? null), "class", [], "any", true, true, false, 29)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["search_attr"]) || array_key_exists("search_attr", $context) ? $context["search_attr"] : (function () { throw new RuntimeError('Variable "search_attr" does not exist.', 29, $this->source); })()), "class", [], "any", false, false, false, 29), "")) : ("")) . " entity-search-input form-control")), "autocomplete" => "off", "placeholder" =>             // line 31
(isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new RuntimeError('Variable "placeholder" does not exist.', 31, $this->source); })()), "type" => "text"]);
            // line 34
            $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "id", [], "any", false, false, false, 34) . "_search_input");
            // line 35
            yield "<input ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield " />
      </div>
    ";
        }
        // line 38
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 40
        $context["id"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40) . "_list");
        // line 41
        if (((isset($context["list_layout"]) || array_key_exists("list_layout", $context) ? $context["list_layout"] : (function () { throw new RuntimeError('Variable "list_layout" does not exist.', 41, $this->source); })()) == "table")) {
            // line 42
            yield from             $this->unwrap()->yieldBlock("entity_search_table_layout", $context, $blocks);
        } else {
            // line 44
            yield from             $this->unwrap()->yieldBlock("entity_search_list_layout", $context, $blocks);
        }
        // line 46
        yield "    ";
        if ((($tmp =  !(null === (isset($context["empty_state"]) || array_key_exists("empty_state", $context) ? $context["empty_state"] : (function () { throw new RuntimeError('Variable "empty_state" does not exist.', 46, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 47
            yield "      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          ";
            // line 49
            yield (isset($context["empty_state"]) || array_key_exists("empty_state", $context) ? $context["empty_state"] : (function () { throw new RuntimeError('Variable "empty_state" does not exist.', 49, $this->source); })());
            yield "
        </p>
      </div>
    ";
        }
        // line 53
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 56
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_list_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_list_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_list_layout"));

        // line 57
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 57, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 57)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 57, $this->source); })()), "class", [], "any", false, false, false, 57), "")) : ("")) . " entities-list entities-list-container"))]);
        // line 58
        yield "<ul ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 59
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 60
        yield "</ul>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 63
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_search_table_layout(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_table_layout"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_search_table_layout"));

        // line 64
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 64, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["list_attr"] ?? null), "class", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["list_attr"]) || array_key_exists("list_attr", $context) ? $context["list_attr"] : (function () { throw new RuntimeError('Variable "list_attr" does not exist.', 64, $this->source); })()), "class", [], "any", false, false, false, 64), "")) : ("")) . " entities-list-container"))]);
        // line 65
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 71, $this->source); })()), "children", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 72
            yield "              ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 72), "block_prefixes", [], "any", false, false, false, 72), 1, [], "any", false, false, false, 72);
            // line 73
            yield "              ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 73, $this->source); })()) != "hidden")) {
                // line 74
                yield "                <th>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 74), "label", [], "any", false, false, false, 74), "html", null, true);
                yield "</th>
              ";
            }
            // line 76
            yield "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "
            ";
        // line 79
        yield "            ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "vars", [], "any", false, false, false, 79), "allow_delete", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 80
            yield "              <th></th>
            ";
        }
        // line 82
        yield "            </tr>
          </thead>
          <tbody class=\"entities-list\">";
        // line 85
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        // line 86
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 93
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_row"));

        // line 94
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "parent", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "list_layout", [], "any", false, false, false, 94) == "table")) {
            // line 95
            yield from             $this->unwrap()->yieldBlock("entity_item_table_row", $context, $blocks);
        } else {
            // line 97
            yield from             $this->unwrap()->yieldBlock("entity_item_list_row", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_list_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_list_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_list_row"));

        // line 102
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 102, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 102)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 102, $this->source); })()), "class", [], "any", false, false, false, 102), "")) : ("")) . " media entity-item"))]);
        // line 103
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-left\">
      ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "image", [], "any", false, false, false, 105), 'widget');
        yield "
    </div>
    <div class=\"media-body media-middle\">
      ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "name", [], "any", false, false, false, 108), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'rest');
        yield "
  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 115
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_entity_item_table_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_table_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "entity_item_table_row"));

        // line 116
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 116, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 116)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 116, $this->source); })()), "class", [], "any", false, false, false, 116), "")) : ("")) . " entity-item"))]);
        // line 117
        yield "  <tr ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "children", [], "any", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 119
            yield "    ";
            $context["childType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 119), "block_prefixes", [], "any", false, false, false, 119), 1, [], "any", false, false, false, 119);
            // line 120
            yield "    ";
            if (((isset($context["childType"]) || array_key_exists("childType", $context) ? $context["childType"] : (function () { throw new RuntimeError('Variable "childType" does not exist.', 120, $this->source); })()) == "hidden")) {
                // line 121
                yield "      ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    ";
            } else {
                // line 123
                yield "    <td>
      ";
                // line 124
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
    </td>
    ";
            }
            // line 127
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "
  ";
        // line 130
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "parent", [], "any", false, false, false, 130), "vars", [], "any", false, false, false, 130), "allow_delete", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  ";
        }
        // line 135
        yield "  </tr>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 138
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_searched_customer_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searched_customer_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "searched_customer_row"));

        // line 139
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 139, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 139)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 139, $this->source); })()), "class", [], "any", false, false, false, 139), "")) : ("")) . " media entity-item"))]);
        // line 140
        yield "  <li ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    <div class=\"media-body media-middle\">
      ";
        // line 142
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "fullname_and_email", [], "any", false, false, false, 142), 'widget');
        yield "
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "id_customer", [], "any", false, false, false, 145), 'widget');
        yield "
  </li>
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
        return "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  477 => 145,  471 => 142,  465 => 140,  462 => 139,  449 => 138,  438 => 135,  432 => 131,  429 => 130,  426 => 128,  420 => 127,  414 => 124,  411 => 123,  405 => 121,  402 => 120,  399 => 119,  395 => 118,  390 => 117,  388 => 116,  375 => 115,  361 => 111,  355 => 108,  349 => 105,  343 => 103,  340 => 102,  327 => 101,  315 => 97,  312 => 95,  309 => 94,  296 => 93,  280 => 86,  278 => 85,  274 => 82,  270 => 80,  267 => 79,  264 => 77,  258 => 76,  252 => 74,  249 => 73,  246 => 72,  242 => 71,  232 => 65,  230 => 64,  217 => 63,  205 => 60,  203 => 59,  199 => 58,  197 => 57,  184 => 56,  172 => 53,  165 => 49,  161 => 47,  158 => 46,  155 => 44,  152 => 42,  150 => 41,  148 => 40,  146 => 38,  139 => 35,  137 => 34,  135 => 31,  134 => 29,  133 => 28,  131 => 27,  128 => 26,  123 => 24,  121 => 21,  119 => 19,  118 => 18,  117 => 17,  116 => 16,  115 => 15,  114 => 14,  113 => 13,  112 => 12,  111 => 11,  110 => 10,  109 => 9,  108 => 8,  106 => 7,  93 => 6,  82 => 138,  80 => 115,  78 => 101,  75 => 100,  73 => 93,  70 => 92,  68 => 63,  65 => 62,  63 => 56,  60 => 55,  58 => 6,  55 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% block entity_search_input_widget %}
  {# We cannot use the escape filter for remote_url or it breaks the url and it is not callable any more #}
  {%- set attr = attr|merge({
    \x27data-prototype-template\x27: form_row(prototype),
    \x27data-prototype-index\x27: prototype.vars.name|e(\x27html_attr\x27),
    \x27data-prototype-mapping\x27: prototype_mapping|json_encode,
    \x27data-identifier-field\x27: identifier_field,
    \x27data-filtered-identities\x27: filtered_identities|json_encode,
    \x27data-remove-modal\x27: remove_modal|json_encode,
    \x27data-remote-url\x27: remote_url,
    \x27data-data-limit\x27: limit,
    \x27data-min-length\x27: min_length,
    \x27data-allow-delete\x27: form.vars.allow_delete ? 1 : 0,
    \x27data-suggestion-field\x27: form.vars.suggestion_field,
  }) -%}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 entity-search-widget\x27)|trim}) -%}

  {# We use widget_container_attributes in this widget because we do not want the name property #}
  <div {{ block(\x27widget_container_attributes\x27) }}>
    {# If dynamic addition is disabled we don\x27t display the search input field #}
    {% if form.vars.allow_search %}
      <div class=\"search search-with-icon\">
        {%- set attr = search_attr|merge({
          class: (search_attr.class|default(\x27\x27) ~ \x27 entity-search-input form-control\x27)|trim,
          autocomplete: \x27off\x27,
          placeholder: placeholder,
          type: \x27text\x27,
        }) -%}
        {%- set id = form.vars.id ~ \x27_search_input\x27 -%}
        <input {{ block(\x27widget_container_attributes\x27) }} />
      </div>
    {% endif %}
    {{- block(\x27form_help\x27) -}}

    {%- set id = form.vars.id ~ \x27_list\x27 -%}
    {% if list_layout == \x27table\x27 %}
      {{- block(\x27entity_search_table_layout\x27) -}}
    {% else %}
      {{- block(\x27entity_search_list_layout\x27) -}}
    {% endif %}
    {% if empty_state is not null %}
      <div class=\"alert alert-info empty-entity-list mt-2\" role=\"alert\">
        <p class=\"alert-text\">
          {{ empty_state|raw(\x27html\x27) }}
        </p>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block entity_search_list_layout %}
  {%- set attr = list_attr|merge({class: (list_attr.class|default(\x27\x27) ~ \x27 entities-list entities-list-container\x27)|trim}) -%}
  <ul {{ block(\x27widget_container_attributes\x27) }}>
    {{- block(\x27form_rows\x27) -}}
  </ul>
{% endblock %}

{% block entity_search_table_layout %}
  {%- set attr = list_attr|merge({class: (list_attr.class|default(\x27\x27) ~ \x27 entities-list-container\x27)|trim}) -%}
  <div {{ block(\x27widget_container_attributes\x27) }}>
    <div class=\"row\">
      <div class=\"col-sm\">
        <table class=\"table\">
          <thead class=\"thead-default\">
            <tr>
            {% for child in prototype.children %}
              {% set childType = child.vars.block_prefixes.1 %}
              {% if childType != \x27hidden\x27 %}
                <th>{{ child.vars.label }}</th>
              {% endif %}
            {% endfor %}

            {# If item deletion is disabled we don\x27t display the extra column for actions #}
            {% if form.vars.allow_delete %}
              <th></th>
            {% endif %}
            </tr>
          </thead>
          <tbody class=\"entities-list\">
          {{- block(\x27form_rows\x27) -}}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}

{% block entity_item_row %}
  {% if form.parent.vars.list_layout == \x27table\x27 %}
    {{- block(\x27entity_item_table_row\x27) -}}
  {% else %}
    {{- block(\x27entity_item_list_row\x27) -}}
  {% endif %}
{% endblock %}

{% block entity_item_list_row %}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 media entity-item\x27)|trim}) %}
  <li {{ block(\x27widget_container_attributes\x27) }}>
    <div class=\"media-left\">
      {{ form_widget(form.image) }}
    </div>
    <div class=\"media-body media-middle\">
      {{ form_widget(form.name) }}
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    {{ form_rest(form) }}
  </li>
{% endblock %}

{%- block entity_item_table_row -%}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 entity-item\x27)|trim}) %}
  <tr {{ block(\x27widget_container_attributes\x27) }}>
  {% for child in form.children %}
    {% set childType = child.vars.block_prefixes.1 %}
    {% if childType == \x27hidden\x27 %}
      {{ form_widget(child) }}
    {% else %}
    <td>
      {{ form_widget(child) }}
    </td>
    {% endif %}
  {% endfor %}

  {# If item deletion is disabled we don\x27t display the extra column for actions #}
  {% if form.parent.vars.allow_delete %}
    <td>
      <i class=\"material-icons entity-item-delete\">clear</i>
    </td>
  {% endif %}
  </tr>
{%- endblock -%}

{% block searched_customer_row %}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 media entity-item\x27)|trim}) %}
  <li {{ block(\x27widget_container_attributes\x27) }}>
    <div class=\"media-body media-middle\">
      {{ form_widget(form.fullname_and_email) }}
      <i class=\"material-icons entity-item-delete\">clear</i>
    </div>
    {{ form_widget(form.id_customer) }}
  </li>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\entity_search_input.html.twig");
    }
}
