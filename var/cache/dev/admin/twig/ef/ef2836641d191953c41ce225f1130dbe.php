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

/* @PrestaShop/Admin/TwigTemplateForm/multishop.html.twig */
class __TwigTemplate_8097aabbd470eb54806fd4d030b4a8c2 extends Template
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

        // line 5
        $_trait_0 = $this->load("bootstrap_4_layout.html.twig", 5);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 5, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            [
                'shop_selector_widget' => [$this, 'block_shop_selector_widget'],
                'shop_option_checkbox_widget' => [$this, 'block_shop_option_checkbox_widget'],
                'shop_option_radio_widget' => [$this, 'block_shop_option_radio_widget'],
                'shop_selector_item_name' => [$this, 'block_shop_selector_item_name'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig"));

        // line 6
        yield "
";
        // line 7
        yield from $this->unwrap()->yieldBlock('shop_selector_widget', $context, $blocks);
        // line 33
        yield "
";
        // line 34
        yield from $this->unwrap()->yieldBlock('shop_option_checkbox_widget', $context, $blocks);
        // line 47
        yield "
";
        // line 48
        yield from $this->unwrap()->yieldBlock('shop_option_radio_widget', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('shop_selector_item_name', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_selector_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_widget"));

        // line 8
        yield "  <div class=\"shop-selector-content shop-selector\" data-multiple=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "\">
    <ul class=\"shop-selector-group-list\">
      ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "choices", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["groupName"] => $context["groupShops"]) {
            // line 11
            yield "        <li class=\"shop-selector-group-item shop-selector-item\">
          ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . $context["groupName"]), "html", null, true);
            yield "
        </li>

        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["groupShops"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["shopChoice"]) {
                // line 16
                yield "          ";
                $context["shop"] = CoreExtension::getAttribute($this->env, $this->source, $context["shopChoice"], "data", [], "any", false, false, false, 16);
                // line 17
                yield "
          <li class=\"shop-selector-shop-item shop-selector-item";
                // line 18
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18) == (isset($context["contextShopId"]) || array_key_exists("contextShopId", $context) ? $context["contextShopId"] : (function () { throw new RuntimeError('Variable "contextShopId" does not exist.', 18, $this->source); })()))) {
                    yield " selected-shop current-shop disabled";
                }
                yield "\" data-shop-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
                yield "\">
            ";
                // line 19
                if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 20
                    yield "              ";
                    yield from                     $this->unwrap()->yieldBlock("shop_option_checkbox_widget", $context, $blocks);
                    yield "
            ";
                } else {
                    // line 22
                    yield "              ";
                    yield from                     $this->unwrap()->yieldBlock("shop_option_radio_widget", $context, $blocks);
                    yield "
            ";
                }
                // line 24
                yield "          </li>
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
            unset($context['_seq'], $context['_key'], $context['shopChoice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['groupName'], $context['groupShops'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "    </ul>

    ";
        // line 29
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 29, $this->source); })()), ["class" => "d-none shop-selector-input"]);
        // line 30
        yield "    ";
        yield from         $this->unwrap()->yieldBlock("choice_widget", $context, $blocks);
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_option_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_checkbox_widget"));

        // line 35
        yield "  <div class=\"md-checkbox md-checkbox-inline\">
    <label class=\"shop-selector-item-label\">
      <input
        type=\"checkbox\" data-value-type=\"boolean\" class=\"form-check-input\" value=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38), "html", null, true);
        yield "\"
        ";
        // line 39
        if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice((isset($context["shopChoice"]) || array_key_exists("shopChoice", $context) ? $context["shopChoice"] : (function () { throw new RuntimeError('Variable "shopChoice" does not exist.', 39, $this->source); })()), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 39, $this->source); })()))) {
            yield "checked";
        }
        // line 40
        yield "        ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40) == (isset($context["contextShopId"]) || array_key_exists("contextShopId", $context) ? $context["contextShopId"] : (function () { throw new RuntimeError('Variable "contextShopId" does not exist.', 40, $this->source); })()))) {
            yield "disabled=\"disabled\"";
        }
        // line 41
        yield "      />
      <i class=\"md-checkbox-control\"></i>
      ";
        // line 43
        yield from         $this->unwrap()->yieldBlock("shop_selector_item_name", $context, $blocks);
        yield "
    </label>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 48
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_option_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_option_radio_widget"));

        // line 49
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("shop_selector_item_name", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_selector_item_name(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_item_name"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_selector_item_name"));

        // line 53
        yield "  <div class=\"shop-selector-item-name\">
    <span class=\"shop-selector-color-container\">
      <span class=\"shop-selector-color\"";
        // line 55
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 55, $this->source); })()), "color", [], "any", false, false, false, 55))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 55, $this->source); })()), "color", [], "any", false, false, false, 55), "html", null, true);
            yield ";\"";
        }
        yield "></span>
    </span>
    ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 57, $this->source); })()), "name", [], "any", false, false, false, 57), "html", null, true);
        yield "
    ";
        // line 58
        if ((($tmp =  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 58, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 59
            yield "      <i class=\"material-icons\">arrow_forward</i>
    ";
        } else {
            // line 61
            yield "      <span class=\"shop-selector-status\" data-added-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Added", [], "Admin.Global"), "html", null, true);
            yield "\" data-removed-label=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Removed", [], "Admin.Global"), "html", null, true);
            yield "\">
        ";
            // line 62
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 62, $this->source); })()), "id", [], "any", false, false, false, 62) == (isset($context["contextShopId"]) || array_key_exists("contextShopId", $context) ? $context["contextShopId"] : (function () { throw new RuntimeError('Variable "contextShopId" does not exist.', 62, $this->source); })()))) {
                // line 63
                yield "          ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Current store", [], "Admin.Global"), "html", null, true);
                yield "
        ";
            }
            // line 65
            yield "      </span>
    ";
        }
        // line 67
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
        return "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  344 => 67,  340 => 65,  334 => 63,  332 => 62,  325 => 61,  321 => 59,  319 => 58,  315 => 57,  306 => 55,  302 => 53,  289 => 52,  275 => 49,  262 => 48,  247 => 43,  243 => 41,  238 => 40,  234 => 39,  230 => 38,  225 => 35,  212 => 34,  197 => 30,  195 => 29,  191 => 27,  185 => 26,  170 => 24,  164 => 22,  158 => 20,  156 => 19,  148 => 18,  145 => 17,  142 => 16,  125 => 15,  119 => 12,  116 => 11,  112 => 10,  106 => 8,  93 => 7,  82 => 52,  79 => 51,  77 => 48,  74 => 47,  72 => 34,  69 => 33,  67 => 7,  64 => 6,  35 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% use \x27bootstrap_4_layout.html.twig\x27 %}

{% block shop_selector_widget %}
  <div class=\"shop-selector-content shop-selector\" data-multiple=\"{{ multiple }}\">
    <ul class=\"shop-selector-group-list\">
      {% for groupName, groupShops in form.vars.choices %}
        <li class=\"shop-selector-group-item shop-selector-item\">
          {{ \x27Group\x27|trans({}, \x27Admin.Global\x27) ~ \x27 \x27 ~ groupName }}
        </li>

        {% for shopChoice in groupShops %}
          {% set shop = shopChoice.data %}

          <li class=\"shop-selector-shop-item shop-selector-item{% if shop.id == contextShopId %} selected-shop current-shop disabled{% endif %}\" data-shop-id=\"{{ shop.id }}\">
            {% if multiple %}
              {{ block(\x27shop_option_checkbox_widget\x27) }}
            {% else %}
              {{ block(\x27shop_option_radio_widget\x27) }}
            {% endif %}
          </li>
        {% endfor %}
      {% endfor %}
    </ul>

    {% set attr = attr|merge({class: \x27d-none shop-selector-input\x27}) %}
    {{ block(\x27choice_widget\x27) }}
  </div>
{% endblock %}

{% block shop_option_checkbox_widget %}
  <div class=\"md-checkbox md-checkbox-inline\">
    <label class=\"shop-selector-item-label\">
      <input
        type=\"checkbox\" data-value-type=\"boolean\" class=\"form-check-input\" value=\"{{ shop.id }}\"
        {% if shopChoice is selectedchoice(value) %}checked{% endif %}
        {% if shop.id == contextShopId %}disabled=\"disabled\"{% endif %}
      />
      <i class=\"md-checkbox-control\"></i>
      {{ block(\x27shop_selector_item_name\x27) }}
    </label>
  </div>
{% endblock %}

{% block shop_option_radio_widget %}
  {{ block(\x27shop_selector_item_name\x27) }}
{% endblock %}

{% block shop_selector_item_name %}
  <div class=\"shop-selector-item-name\">
    <span class=\"shop-selector-color-container\">
      <span class=\"shop-selector-color\"{% if shop.color is not empty %} style=\"background-color: {{ shop.color }};\"{% endif %}></span>
    </span>
    {{ shop.name }}
    {% if not multiple %}
      <i class=\"material-icons\">arrow_forward</i>
    {% else %}
      <span class=\"shop-selector-status\" data-added-label=\"{{ \x27Added\x27|trans({}, \x27Admin.Global\x27) }}\" data-removed-label=\"{{ \x27Removed\x27|trans({}, \x27Admin.Global\x27) }}\">
        {% if shop.id == contextShopId %}
          {{ \x27Current store\x27|trans({}, \x27Admin.Global\x27) }}
        {% endif %}
      </span>
    {% endif %}
  </div>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\multishop.html.twig");
    }
}
