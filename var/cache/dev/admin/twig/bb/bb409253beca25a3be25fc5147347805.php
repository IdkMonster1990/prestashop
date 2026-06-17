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

/* @PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig */
class __TwigTemplate_603182ef5ca78e888da1bbe0bdb3ca1b extends Template
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
            'translatable_choice_widget' => [$this, 'block_translatable_choice_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig"));

        // line 5
        yield from $this->unwrap()->yieldBlock('translatable_choice_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_choice_widget"));

        // line 6
        yield "  ";
        $macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 6)->unwrap();
        // line 7
        yield "
  ";
        // line 8
        $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 8)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 8, $this->source); })()), "class", [], "any", false, false, false, 8), "")) : (""));
        // line 9
        yield "  ";
        $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 9)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 9, $this->source); })()), "row_attr", [], "any", false, false, false, 9), [])) : ([]));
        // line 10
        yield "  ";
        $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "vars", [], "any", false, false, false, 10), "attr", [], "any", false, false, false, 10);
        // line 11
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 11, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 11)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 11, $this->source); })()), "class", [], "any", false, false, false, 11), "")) : ("")) . " custom-select translatable_choice"))]);
        // line 12
        yield "  <div class=\"form-group row type-choice ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
  ";
        // line 13
        $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 13, $this->source); })()), [])) : ([]));
        // line 14
        yield "
  ";
        // line 16
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "choices", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["language"] => $context["choices"]) {
            // line 17
            yield "    <div class=\"col-sm-6\" ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 17), "default_locale", [], "any", true, true, false, 17) &&  !(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "vars", [], "any", false, false, false, 17), "default_locale", [], "any", false, false, false, 17) === $context["language"]))) {
                yield "style=\"display: none\"";
            }
            yield ">
      <select class=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 18, $this->source); })()), "class", [], "any", false, false, false, 18), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "vars", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) . "_") . $context["language"]), "html", null, true);
            yield "\" data-language=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["language"], "html", null, true);
            yield "\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["choices"]);
            foreach ($context['_seq'] as $context["choiceValue"] => $context["choiceLabel"]) {
                // line 20
                yield "          <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceValue"], "html", null, true);
                yield "\"
            ";
                // line 21
                if (((array_key_exists("value", $context) && CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), $context["language"], [], "array", true, true, false, 21)) && ($context["choiceValue"] === CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 21, $this->source); })()), $context["language"], [], "array", false, false, false, 21)))) {
                    yield " selected=\"selected\"";
                }
                // line 22
                yield "             ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 22), "row_attr", [], "any", false, true, false, 22), $context["language"], [], "array", false, true, false, 22), $context["choiceValue"], [], "array", true, true, false, 22) && is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "row_attr", [], "any", false, false, false, 22), $context["language"], [], "array", false, false, false, 22), $context["choiceValue"], [], "array", false, false, false, 22)))) {
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "vars", [], "any", false, false, false, 22), "row_attr", [], "any", false, false, false, 22), $context["language"], [], "array", false, false, false, 22), $context["choiceValue"], [], "array", false, false, false, 22));
                    foreach ($context['_seq'] as $context["optionKey"] => $context["optionAttr"]) {
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionKey"], "html", null, true);
                        yield "=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["optionAttr"], "html", null, true);
                        yield "\"";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['optionKey'], $context['optionAttr'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                }
                yield ">";
                yield ((( !array_key_exists("choice_translation_domain", $context) || ((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 22, $this->source); })()) === false))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choiceLabel"], "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["choiceLabel"], [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 22, $this->source); })())), "html", null, true)));
                yield "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choiceValue'], $context['choiceLabel'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            yield "      </select>
      <input type=\"hidden\" id=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) . "_") . $context["language"]) . "_value"), "html", null, true);
            yield "\" name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "vars", [], "any", false, false, false, 25), "full_name", [], "any", false, false, false, 25) . "[") . $context["language"]) . "]"), "html", null, true);
            yield "\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), $context["choices"]), "html", null, true);
            yield "\" />
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['language'], $context['choices'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
  ";
        // line 30
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 30), "locales", [], "any", true, true, false, 30) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "vars", [], "any", false, false, false, 30), "locales", [], "any", false, false, false, 30)))) {
            // line 31
            yield "    <div class=\"col-sm-3\">
      <select name=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "vars", [], "any", false, false, false, 32), "id", [], "any", false, false, false, 32) . "_language"), "html", null, true);
            yield "\" class=\"custom-select translatable_choice_language\">
        ";
            // line 33
            if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "vars", [], "any", false, false, false, 33), "locales", [], "any", false, false, false, 33))) {
                // line 34
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "vars", [], "any", false, false, false, 34), "locales", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 35
                    yield "            <option value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id_lang", [], "any", false, false, false, 35), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["language"], "iso_code", [], "any", false, false, false, 35) . " - ") . CoreExtension::getAttribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 35)), "html", null, true);
                    yield "</option>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "        ";
            }
            // line 38
            yield "      </select>
    </div>
  ";
        }
        // line 41
        yield "
  ";
        // line 43
        yield "  ";
        if (array_key_exists("button", $context)) {
            // line 44
            yield "    <div class=\"col-sm-3\">
      <button type=\"button\" ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "id", [], "any", true, true, false, 45)) {
                yield "id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
                yield "\"";
            }
            yield " class=\"btn ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "class", [], "any", true, true, false, 45)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 45, $this->source); })()), "class", [], "any", false, false, false, 45), "html", null, true);
            } else {
                yield "btn-default";
            }
            yield "\" ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "action", [], "any", true, true, false, 45)) {
                yield " onclick=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 45, $this->source); })()), "action", [], "any", false, false, false, 45), "html", null, true);
                yield "\"";
            }
            yield ">
        ";
            // line 46
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "icon", [], "any", true, true, false, 46)) {
                yield "<i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 46, $this->source); })()), "icon", [], "any", false, false, false, 46), "html", null, true);
                yield "</i>";
            }
            // line 47
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["button"]) || array_key_exists("button", $context) ? $context["button"] : (function () { throw new RuntimeError('Variable "button" does not exist.', 47, $this->source); })()), "label", [], "any", false, false, false, 47), "html", null, true);
            yield "
      </button>
    </div>
  ";
        }
        // line 51
        yield "  </div>";
        // line 53
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 54
        yield from         $this->unwrap()->yieldBlock("form_hint", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  271 => 54,  269 => 53,  267 => 51,  259 => 47,  253 => 46,  233 => 45,  230 => 44,  227 => 43,  224 => 41,  219 => 38,  216 => 37,  205 => 35,  200 => 34,  198 => 33,  194 => 32,  191 => 31,  188 => 30,  185 => 28,  172 => 25,  169 => 24,  145 => 22,  141 => 21,  136 => 20,  132 => 19,  124 => 18,  117 => 17,  112 => 16,  109 => 14,  107 => 13,  89 => 12,  86 => 11,  83 => 10,  80 => 9,  78 => 8,  75 => 7,  72 => 6,  49 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% block translatable_choice_widget %}
  {% import \x27@PrestaShop/Admin/macros.html.twig\x27 as ps %}

  {% set class = extraVars.class|default(\x27\x27) %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 custom-select translatable_choice\x27)|trim}) %}
  <div class=\"form-group row type-choice {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# options selector #}
  {% for language, choices in form.vars.choices %}
    <div class=\"col-sm-6\" {% if form.vars.default_locale is defined and form.vars.default_locale is not same as(language) %}style=\"display: none\"{% endif %}>
      <select class=\"{{ attr.class }}\" id=\"{{ form.vars.id ~ \x27_\x27 ~ language }}\" data-language=\"{{ language }}\">
        {% for choiceValue, choiceLabel in choices %}
          <option value=\"{{ choiceValue }}\"
            {% if value is defined and value[language] is defined and choiceValue is same as(value[language]) %} selected=\"selected\"{% endif %}
             {% if form.vars.row_attr[language][choiceValue] is defined and form.vars.row_attr[language][choiceValue] is iterable %}{% for optionKey, optionAttr in form.vars.row_attr[language][choiceValue] %} {{ optionKey }}=\"{{ optionAttr }}\"{% endfor %}{% endif %}>{{ choice_translation_domain is not defined or choice_translation_domain is same as(false) ? choiceLabel : choiceLabel|trans({}, choice_translation_domain) }}</option>
        {% endfor %}
      </select>
      <input type=\"hidden\" id=\"{{ form.vars.id ~ \x27_\x27 ~ language ~ \x27_value\x27 }}\" name=\"{{ form.vars.full_name ~ \x27[\x27 ~ language ~ \x27]\x27 }}\" value=\"{{ choices|first }}\" />
    </div>
  {% endfor %}

  {# languages selector #}
  {% if form.vars.locales is defined and form.vars.locales is not empty %}
    <div class=\"col-sm-3\">
      <select name=\"{{ form.vars.id ~ \x27_language\x27 }}\" class=\"custom-select translatable_choice_language\">
        {% if form.vars.locales is iterable %}
          {% for language in form.vars.locales %}
            <option value=\"{{ language.id_lang }}\">{{ language.iso_code ~ \x27 - \x27 ~ language.name }}</option>
          {% endfor %}
        {% endif %}
      </select>
    </div>
  {% endif %}

  {# extra button #}
  {% if button is defined %}
    <div class=\"col-sm-3\">
      <button type=\"button\" {% if button.id is defined %}id=\"{{ button.id }}\"{% endif %} class=\"btn {% if button.class is defined %}{{ button.class }}{% else %}btn-default{% endif %}\" {% if button.action is defined %} onclick=\"{{ button.action }}\"{% endif %}>
        {% if button.icon is defined %}<i class=\"material-icons\">{{ button.icon }}</i>{% endif %}
        {{ button.label }}
      </button>
    </div>
  {% endif %}
  </div>

  {{- block(\x27form_help\x27) -}}
  {{- block(\x27form_hint\x27) -}}
{% endblock translatable_choice_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/translatable_choice.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\translatable_choice.html.twig");
    }
}
