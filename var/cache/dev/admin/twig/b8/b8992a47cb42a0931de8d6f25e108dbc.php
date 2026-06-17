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

/* @PrestaShop/Admin/TwigTemplateForm/material.html.twig */
class __TwigTemplate_f6f201e17edc348d8d139a20907f3db7 extends Template
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
            'material_choice_tree_widget' => [$this, 'block_material_choice_tree_widget'],
            'material_choice_tree_item_widget' => [$this, 'block_material_choice_tree_item_widget'],
            'material_choice_tree_item_checkbox_widget' => [$this, 'block_material_choice_tree_item_checkbox_widget'],
            'material_choice_tree_item_radio_widget' => [$this, 'block_material_choice_tree_item_radio_widget'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig"));

        // line 5
        yield "
";
        // line 6
        yield from $this->unwrap()->yieldBlock('material_choice_tree_widget', $context, $blocks);
        // line 30
        yield "
";
        // line 31
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_widget', $context, $blocks);
        // line 51
        yield "
";
        // line 52
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_checkbox_widget', $context, $blocks);
        // line 70
        yield "
";
        // line 71
        yield from $this->unwrap()->yieldBlock('material_choice_tree_item_radio_widget', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_widget"));

        // line 7
        yield "  <div class=\"material-choice-tree-container js-choice-tree-container";
        if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " required";
        }
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "vars", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "\">
    <div class=\"choice-tree-actions\">
      <span class=\"form-control-label js-toggle-choice-tree-action\"
            data-expanded-text=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-expanded-icon=\"expand_more\"
            data-collapsed-text=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Collapse", [], "Admin.Actions"), "html", null, true);
        yield "\"
            data-collapsed-icon=\"expand_less\"
            data-action=\"expand\"
      >
        <i class=\"material-icons\">expand_more</i>
        <span class=\"js-toggle-text\">";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Expand", [], "Admin.Actions"), "html", null, true);
        yield "</span>
      </span>
    </div>

    <ul class=\"choice-tree\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices_tree"]) || array_key_exists("choices_tree", $context) ? $context["choices_tree"] : (function () { throw new RuntimeError('Variable "choices_tree" does not exist.', 22, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 23
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "    </ul>
  </div>";
        // line 28
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_widget"));

        // line 32
        yield "  ";
        $context["has_children"] = CoreExtension::getAttribute($this->env, $this->source, ($context["choice"] ?? null), (isset($context["choice_children"]) || array_key_exists("choice_children", $context) ? $context["choice_children"] : (function () { throw new RuntimeError('Variable "choice_children" does not exist.', 32, $this->source); })()), [], "array", true, true, false, 32);
        // line 33
        yield "
  <li class=\"";
        // line 34
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 34, $this->source); })()), "has_selected_children", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "expanded";
        } elseif ((($tmp = (isset($context["has_children"]) || array_key_exists("has_children", $context) ? $context["has_children"] : (function () { throw new RuntimeError('Variable "has_children" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "collapsed";
        }
        yield "\">
    ";
        // line 35
        if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 35, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 36
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_checkbox_widget", $context, $blocks);
            yield "
    ";
        } else {
            // line 38
            yield "      ";
            yield from             $this->unwrap()->yieldBlock("material_choice_tree_item_radio_widget", $context, $blocks);
            yield "
    ";
        }
        // line 40
        yield "
    ";
        // line 41
        if ((($tmp = (isset($context["has_children"]) || array_key_exists("has_children", $context) ? $context["has_children"] : (function () { throw new RuntimeError('Variable "has_children" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 42
            yield "      <ul>
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 43, $this->source); })()), (isset($context["choice_children"]) || array_key_exists("choice_children", $context) ? $context["choice_children"] : (function () { throw new RuntimeError('Variable "choice_children" does not exist.', 43, $this->source); })()), [], "array", false, false, false, 43));
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
                // line 44
                yield "          ";
                $context["choice"] = $context["item"];
                // line 45
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("material_choice_tree_item_widget", $context, $blocks);
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
            // line 47
            yield "      </ul>
    ";
        }
        // line 49
        yield "  </li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 52
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_checkbox_widget"));

        // line 53
        yield "  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         ";
        // line 57
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 57, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 57, $this->source); })()), [], "array", false, false, false, 57))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "           name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "vars", [], "any", false, false, false, 58), "full_name", [], "any", false, false, false, 58), "html", null, true);
            yield "[]\"
           value=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 59, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 59, $this->source); })()), [], "array", false, false, false, 59), "html", null, true);
            yield "\"
           ";
            // line 60
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 60, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 60, $this->source); })()), [], "array", false, false, false, 60), (isset($context["selected_values"]) || array_key_exists("selected_values", $context) ? $context["selected_values"] : (function () { throw new RuntimeError('Variable "selected_values" does not exist.', 60, $this->source); })()))) {
                yield "checked";
            }
            // line 61
            yield "         ";
        }
        // line 62
        yield "         ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 62, $this->source); })()) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 62, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 62, $this->source); })()), [], "array", false, false, false, 62), (isset($context["disabled_values"]) || array_key_exists("disabled_values", $context) ? $context["disabled_values"] : (function () { throw new RuntimeError('Variable "disabled_values" does not exist.', 62, $this->source); })())))) {
            yield "disabled";
        }
        // line 63
        yield "        >
        <i class=\"md-checkbox-control\"></i>
        ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 65, $this->source); })()), (isset($context["choice_label"]) || array_key_exists("choice_label", $context) ? $context["choice_label"] : (function () { throw new RuntimeError('Variable "choice_label" does not exist.', 65, $this->source); })()), [], "array", false, false, false, 65), "html", null, true);
        yield "
      </label>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_tree_item_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_tree_item_radio_widget"));

        // line 72
        yield "  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "vars", [], "any", false, false, false, 75), "full_name", [], "any", false, false, false, 75), "html", null, true);
        yield "\"
       value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 76, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 76, $this->source); })()), [], "array", false, false, false, 76), "html", null, true);
        yield "\"
       ";
        // line 77
        if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 77, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 77, $this->source); })()), [], "array", false, false, false, 77), (isset($context["selected_values"]) || array_key_exists("selected_values", $context) ? $context["selected_values"] : (function () { throw new RuntimeError('Variable "selected_values" does not exist.', 77, $this->source); })()))) {
            yield "checked";
        }
        // line 78
        yield "       ";
        if (((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 78, $this->source); })()) || CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 78, $this->source); })()), (isset($context["choice_value"]) || array_key_exists("choice_value", $context) ? $context["choice_value"] : (function () { throw new RuntimeError('Variable "choice_value" does not exist.', 78, $this->source); })()), [], "array", false, false, false, 78), (isset($context["disabled_values"]) || array_key_exists("disabled_values", $context) ? $context["disabled_values"] : (function () { throw new RuntimeError('Variable "disabled_values" does not exist.', 78, $this->source); })())))) {
            yield "disabled";
        }
        // line 79
        yield "       ";
        if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 79, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "required";
        }
        // line 80
        yield "      >
      <i class=\"form-check-round\"></i>
      ";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 82, $this->source); })()), (isset($context["choice_label"]) || array_key_exists("choice_label", $context) ? $context["choice_label"] : (function () { throw new RuntimeError('Variable "choice_label" does not exist.', 82, $this->source); })()), [], "array", false, false, false, 82), "html", null, true);
        yield "
    </label>
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
        return "@PrestaShop/Admin/TwigTemplateForm/material.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  382 => 82,  378 => 80,  373 => 79,  368 => 78,  364 => 77,  360 => 76,  356 => 75,  351 => 72,  338 => 71,  322 => 65,  318 => 63,  313 => 62,  310 => 61,  306 => 60,  302 => 59,  297 => 58,  295 => 57,  289 => 53,  276 => 52,  264 => 49,  260 => 47,  243 => 45,  240 => 44,  223 => 43,  220 => 42,  218 => 41,  215 => 40,  209 => 38,  203 => 36,  201 => 35,  193 => 34,  190 => 33,  187 => 32,  174 => 31,  163 => 28,  160 => 25,  143 => 23,  126 => 22,  118 => 17,  110 => 12,  105 => 10,  94 => 7,  81 => 6,  70 => 71,  67 => 70,  65 => 52,  62 => 51,  60 => 31,  57 => 30,  55 => 6,  52 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% block material_choice_tree_widget %}
  <div class=\"material-choice-tree-container js-choice-tree-container{% if required %} required{% endif %}\" id=\"{{ form.vars.id }}\">
    <div class=\"choice-tree-actions\">
      <span class=\"form-control-label js-toggle-choice-tree-action\"
            data-expanded-text=\"{{ \x27Expand\x27|trans({}, \x27Admin.Actions\x27) }}\"
            data-expanded-icon=\"expand_more\"
            data-collapsed-text=\"{{ \x27Collapse\x27|trans({}, \x27Admin.Actions\x27) }}\"
            data-collapsed-icon=\"expand_less\"
            data-action=\"expand\"
      >
        <i class=\"material-icons\">expand_more</i>
        <span class=\"js-toggle-text\">{{ \x27Expand\x27|trans({}, \x27Admin.Actions\x27) }}</span>
      </span>
    </div>

    <ul class=\"choice-tree\">
      {% for choice in choices_tree %}
        {{ block(\x27material_choice_tree_item_widget\x27) }}
      {% endfor %}
    </ul>
  </div>

  {{- block(\x27form_help\x27) -}}
{% endblock material_choice_tree_widget %}

{% block material_choice_tree_item_widget %}
  {% set has_children = choice[choice_children] is defined %}

  <li class=\"{% if choice.has_selected_children %}expanded{% elseif has_children %}collapsed{% endif %}\">
    {% if multiple %}
      {{ block(\x27material_choice_tree_item_checkbox_widget\x27) }}
    {% else %}
      {{ block(\x27material_choice_tree_item_radio_widget\x27) }}
    {% endif %}

    {% if has_children %}
      <ul>
        {% for item in choice[choice_children] %}
          {% set choice = item %}
          {{ block(\x27material_choice_tree_item_widget\x27) }}
        {% endfor %}
      </ul>
    {% endif %}
  </li>
{% endblock material_choice_tree_item_widget %}

{% block material_choice_tree_item_checkbox_widget %}
  <div class=\"checkbox js-input-wrapper\">
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        <input type=\"checkbox\"
         {% if choice[choice_value] is not null %}
           name=\"{{ form.vars.full_name }}[]\"
           value=\"{{ choice[choice_value] }}\"
           {% if choice[choice_value] in selected_values %}checked{% endif %}
         {% endif %}
         {% if disabled or choice[choice_value] in disabled_values %}disabled{% endif %}
        >
        <i class=\"md-checkbox-control\"></i>
        {{ choice[choice_label] }}
      </label>
    </div>
  </div>
{% endblock material_choice_tree_item_checkbox_widget %}

{% block material_choice_tree_item_radio_widget %}
  <div class=\"radio js-input-wrapper form-check form-check-radio\">
    <label class=\"form-check-label\">
      <input type=\"radio\"
       name=\"{{ form.vars.full_name }}\"
       value=\"{{ choice[choice_value] }}\"
       {% if choice[choice_value] in selected_values %}checked{% endif %}
       {% if disabled or choice[choice_value] in disabled_values %}disabled{% endif %}
       {% if required %}required{% endif %}
      >
      <i class=\"form-check-round\"></i>
      {{ choice[choice_label] }}
    </label>
  </div>
{% endblock material_choice_tree_item_radio_widget %}
", "@PrestaShop/Admin/TwigTemplateForm/material.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\material.html.twig");
    }
}
