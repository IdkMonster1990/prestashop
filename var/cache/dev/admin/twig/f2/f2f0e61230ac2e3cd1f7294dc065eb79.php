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

/* @PrestaShop/Admin/macros.html.twig */
class __TwigTemplate_695bc4e58c139c8abf0a6576c72bf7a8 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/macros.html.twig"));

        // line 8
        yield "
";
        // line 12
        yield "
";
        // line 18
        yield "
";
        // line 30
        yield "
";
        // line 38
        yield "
";
        // line 51
        yield "
";
        // line 68
        yield "
";
        // line 76
        yield "
";
        // line 106
        yield "
";
        // line 220
        yield "
 ";
        // line 267
        yield "
";
        // line 286
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    public function macro_form_label_tooltip($name = null, $tooltip = null, $placement = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "name" => $name,
            "tooltip" => $tooltip,
            "placement" => $placement,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 6
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })()), 'label', ["label_attr" => ["tooltip" => (isset($context["tooltip"]) || array_key_exists("tooltip", $context) ? $context["tooltip"] : (function () { throw new RuntimeError('Variable "tooltip" does not exist.', 6, $this->source); })()), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 6, $this->source); })()), "top")) : ("top"))]]);
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function macro_check($variable = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "variable" => $variable,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "check"));

            // line 10
            yield "  ";
            yield (((array_key_exists("variable", $context) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 10, $this->source); })())) > 0))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["variable"]) || array_key_exists("variable", $context) ? $context["variable"] : (function () { throw new RuntimeError('Variable "variable" does not exist.', 10, $this->source); })()), "html", null, true)) : (false));
            yield "
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 13
    public function macro_tooltip($text = null, $icon = null, $position = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "icon" => $icon,
            "position" => $position,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 14
            yield "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 14, $this->source); })()), "html", null, true);
            yield "\" data-html=\"true\" data-placement=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("position", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["position"]) || array_key_exists("position", $context) ? $context["position"] : (function () { throw new RuntimeError('Variable "position" does not exist.', 14, $this->source); })()), "top")) : ("top")), "html", null, true);
            yield "\">
    <i class=\"material-icons\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new RuntimeError('Variable "icon" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "</i>
  </span>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 19
    public function macro_infotip($text = null, $use_raw = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "use_raw" => $use_raw,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "infotip"));

            // line 20
            yield "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 22
            if ((($tmp = (isset($context["use_raw"]) || array_key_exists("use_raw", $context) ? $context["use_raw"] : (function () { throw new RuntimeError('Variable "use_raw" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "      ";
                yield (isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 23, $this->source); })());
                yield "
    ";
            } else {
                // line 25
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 25, $this->source); })()), "html", null, true);
                yield "
    ";
            }
            // line 27
            yield "  </p>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 31
    public function macro_warningtip($text = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "text" => $text,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 32
            yield "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["text"]) || array_key_exists("text", $context) ? $context["text"] : (function () { throw new RuntimeError('Variable "text" does not exist.', 34, $this->source); })()), "html", null, true);
            yield "
  </p>
</div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function macro_label_with_help($label = null, $help = null, $class = "", $for = "", $isRequired = false, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "help" => $help,
            "class" => $class,
            "for" => $for,
            "isRequired" => $isRequired,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 40
            yield "<label";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new RuntimeError('Variable "for" does not exist.', 40, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " for=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["for"]) || array_key_exists("for", $context) ? $context["for"] : (function () { throw new RuntimeError('Variable "for" does not exist.', 40, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield " class=\"form-control-label ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\">
  ";
            // line 41
            if ((($tmp = (isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 42
                yield "    <span class=\"text-danger\">*</span>
  ";
            }
            // line 44
            yield "
  ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 45, $this->source); })()), "html", null, true);
            yield "
  ";
            // line 46
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 46, $this->source); })())]);
            yield "
</label>

<p class=\"sr-only\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 49, $this->source); })()), "html", null, true);
            yield "</p>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 53
    public function macro_sortable_column_header($title = null, $sortColumnName = null, $orderBy = null, $sortOrder = null, $prefix = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "title" => $title,
            "sortColumnName" => $sortColumnName,
            "orderBy" => $orderBy,
            "sortOrder" => $sortOrder,
            "prefix" => $prefix,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 54
            yield "  ";
            [$context["sortOrder"], $context["orderBy"], $context["prefix"]] =             [((array_key_exists("sortOrder", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 54, $this->source); })()), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 54, $this->source); })()))) : ("")), ((array_key_exists("prefix", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 54, $this->source); })()), "")) : (""))];
            // line 55
            yield "  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sortColumnName"]) || array_key_exists("sortColumnName", $context) ? $context["sortColumnName"] : (function () { throw new RuntimeError('Variable "sortColumnName" does not exist.', 57, $this->source); })()), "html", null, true);
            yield "\"
      data-sort-prefix=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\"
      ";
            // line 59
            if (((isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 59, $this->source); })()) == (isset($context["sortColumnName"]) || array_key_exists("sortColumnName", $context) ? $context["sortColumnName"] : (function () { throw new RuntimeError('Variable "sortColumnName" does not exist.', 59, $this->source); })()))) {
                // line 60
                yield "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 61
                yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 61, $this->source); })()) == "desc")) ? ("desc") : ("asc"));
                yield "\"
      ";
            }
            // line 63
            yield "    >
      <span role=\"columnheader\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 64, $this->source); })()), "html", null, true);
            yield "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sort by", [], "Admin.Actions"), "html", null, true);
            yield "\"></span>
  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 70
    public function macro_import_file_sample($label = null, $filename = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "label" => $label,
            "filename" => $filename,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 71
            yield "    <a id=\"download-sample-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 71, $this->source); })()), "html", null, true);
            yield "-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_import_sample_download", ["sampleName" => (isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new RuntimeError('Variable "filename" does not exist.', 72, $this->source); })())]), "html", null, true);
            yield "\">
        ";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 73, $this->source); })()), [], "Admin.Advparameters.Feature"), "html", null, true);
            yield "
    </a>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 86
    public function macro_form_widget_with_error($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_widget_with_error"));

            // line 87
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 87)->unwrap();
            // line 88
            yield "
  ";
            // line 89
            $context["vars"] = ((array_key_exists("vars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 89, $this->source); })()), [])) : ([]));
            // line 90
            yield "  ";
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 90, $this->source); })()), [])) : ([]));
            // line 91
            yield "  ";
            $context["attr"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["vars"] ?? null), "attr", [], "any", true, true, false, 91)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 91, $this->source); })()), "attr", [], "any", false, false, false, 91), [])) : ([]));
            // line 92
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 92, $this->source); })()), ["class" => ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 92)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 92, $this->source); })()), "class", [], "any", false, false, false, 92)) : (""))]);
            // line 93
            yield "  ";
            $context["vars"] = Twig\Extension\CoreExtension::merge((isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 93, $this->source); })()), ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 93, $this->source); })())]);
            // line 94
            yield "
  ";
            // line 95
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 95, $this->source); })()));
            yield "

  ";
            // line 97
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 97) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 97, $this->source); })()), "help", [], "any", false, false, false, 97))) {
                // line 98
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 98, $this->source); })()), "help", [], "any", false, false, false, 98), "html", null, true);
                yield "</small>
    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 99
($context["form"] ?? null), "vars", [], "any", false, true, false, 99), "help", [], "any", true, true, false, 99) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "vars", [], "any", false, false, false, 99), "help", [], "any", false, false, false, 99))) {
                // line 100
                yield "      <small class=\"form-text\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "vars", [], "any", false, false, false, 100), "help", [], "any", false, false, false, 100), "html", null, true);
                yield "</small>
  ";
            }
            // line 102
            yield "
  ";
            // line 103
            yield $macros["self"]->getTemplateForMacro("macro_form_error_with_popover", $context, 103, $this->getSourceContext())->macro_form_error_with_popover(...[(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })())]);
            yield "

";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 116
    public function macro_form_error_with_popover($form = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_error_with_popover"));

            // line 117
            yield "  ";
            $context["errors"] = [];
            // line 118
            yield "
  ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 119), "valid", [], "any", true, true, false, 119) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "vars", [], "any", false, false, false, 119), "valid", [], "any", false, false, false, 119))) {
                // line 120
                yield "    ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "vars", [], "any", false, false, false, 120), "errors", [], "any", false, false, false, 120));
                foreach ($context['_seq'] as $context["_key"] => $context["parentError"]) {
                    // line 121
                    yield "      ";
                    $context["errors"] = Twig\Extension\CoreExtension::merge((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 121, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["parentError"], "message", [], "any", false, false, false, 121)]);
                    // line 122
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['parentError'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                yield "
    ";
                // line 125
                yield "  ";
            }
            // line 126
            yield "
  ";
            // line 127
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 127, $this->source); })())) > 0)) {
                // line 128
                yield "    ";
                // line 129
                yield "    ";
                $context["errorPopover"] = null;
                // line 130
                yield "
    ";
                // line 131
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 131, $this->source); })())) > 1)) {
                    // line 132
                    yield "      ";
                    $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "vars", [], "any", false, false, false, 132), "id", [], "any", false, false, false, 132));
                    // line 133
                    yield "      <div class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 133, $this->source); })()), "html", null, true);
                    yield "\"></div>

      ";
                    // line 135
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 135), "errors_by_locale", [], "any", true, true, false, 135)) {
                        // line 136
                        yield "          ";
                        $context["popoverErrors"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "vars", [], "any", false, false, false, 136), "errors_by_locale", [], "any", false, false, false, 136);
                        // line 137
                        yield "
          ";
                        // line 139
                        yield "          ";
                        $context["translatableErrors"] = [];
                        // line 140
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 140, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["translatableError"]) {
                            // line 141
                            yield "            ";
                            $context["translatableErrors"] = Twig\Extension\CoreExtension::merge((isset($context["translatableErrors"]) || array_key_exists("translatableErrors", $context) ? $context["translatableErrors"] : (function () { throw new RuntimeError('Variable "translatableErrors" does not exist.', 141, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["translatableError"], "error_message", [], "any", false, false, false, 141)]);
                            // line 142
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['translatableError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 143
                        yield "
          ";
                        // line 145
                        yield "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 145, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                            // line 146
                            yield "            ";
                            if (!CoreExtension::inFilter($context["error"], (isset($context["translatableErrors"]) || array_key_exists("translatableErrors", $context) ? $context["translatableErrors"] : (function () { throw new RuntimeError('Variable "translatableErrors" does not exist.', 146, $this->source); })()))) {
                                // line 147
                                yield "              ";
                                $context["popoverErrors"] = Twig\Extension\CoreExtension::merge((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 147, $this->source); })()), [$context["error"]]);
                                // line 148
                                yield "            ";
                            }
                            // line 149
                            yield "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 150
                        yield "
        ";
                    } else {
                        // line 152
                        yield "          ";
                        $context["popoverErrors"] = (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 152, $this->source); })());
                        // line 153
                        yield "      ";
                    }
                    // line 154
                    yield "
      ";
                    // line 155
                    $context["errorMessages"] = [];
                    // line 156
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 156, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                        // line 157
                        yield "        ";
                        $context["errorMessage"] = $context["popoverError"];
                        // line 158
                        yield "
        ";
                        // line 159
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", true, true, false, 159) && CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", true, true, false, 159))) {
                            // line 160
                            yield "          ";
                            $context["errorMessage"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "error_message", [], "any", false, false, false, 160), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, $context["popoverError"], "locale_name", [], "any", false, false, false, 160)], "Admin.Notifications.Error");
                            // line 161
                            yield "        ";
                        }
                        // line 162
                        yield "
        ";
                        // line 163
                        $context["errorMessages"] = Twig\Extension\CoreExtension::merge((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 163, $this->source); })()), [(isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 163, $this->source); })())]);
                        // line 164
                        yield "      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 165
                    yield "
      ";
                    // line 166
                    $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 167
                        yield "        <div class=\"popover-error-list\">
          <ul>
            ";
                        // line 169
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errorMessages"]) || array_key_exists("errorMessages", $context) ? $context["errorMessages"] : (function () { throw new RuntimeError('Variable "errorMessages" does not exist.', 169, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["popoverError"]) {
                            // line 170
                            yield "              <li class=\"text-danger\">
                ";
                            // line 171
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["popoverError"], "html", null, true);
                            yield "
              </li>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['popoverError'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 174
                        yield "          </ul>
        </div>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 177
                    yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                    // line 178
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "vars", [], "any", false, false, false, 178), "id", [], "any", false, false, false, 178), "html", null, true);
                    yield "\">
        ";
                    // line 179
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverErrorContent"]) || array_key_exists("popoverErrorContent", $context) ? $context["popoverErrorContent"] : (function () { throw new RuntimeError('Variable "popoverErrorContent" does not exist.', 179, $this->source); })()), "html", null, true);
                    yield "
      </template>

      ";
                    // line 182
                    $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                        // line 183
                        yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                        // line 185
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "vars", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185), "html", null, true);
                        yield "\"
          data-placement=\"bottom\"
          data-template=\x27<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>\x27
          data-trigger=\"hover\"
          data-container=\".";
                        // line 189
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 189, $this->source); })()), "html", null, true);
                        yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>";
                        // line 191
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["popoverErrors"]) || array_key_exists("popoverErrors", $context) ? $context["popoverErrors"] : (function () { throw new RuntimeError('Variable "popoverErrors" does not exist.', 191, $this->source); })()))], "Admin.Global"), "html", null, true);
                        yield "</u>
        </span>
      ";
                        yield from [];
                    })())) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 194
                    yield "
    ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 195
($context["form"] ?? null), "vars", [], "any", false, true, false, 195), "error_by_locale", [], "any", true, true, false, 195)) {
                    // line 196
                    yield "      ";
                    $context["errorByLocale"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%error_message% - Language: %language_name%", ["%error_message%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "vars", [], "any", false, false, false, 196), "error_by_locale", [], "any", false, false, false, 196), "error_message", [], "any", false, false, false, 196), "%language_name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "vars", [], "any", false, false, false, 196), "error_by_locale", [], "any", false, false, false, 196), "locale_name", [], "any", false, false, false, 196)], "Admin.Notifications.Error");
                    // line 197
                    yield "      ";
                    $context["errors"] = [(isset($context["errorByLocale"]) || array_key_exists("errorByLocale", $context) ? $context["errorByLocale"] : (function () { throw new RuntimeError('Variable "errorByLocale" does not exist.', 197, $this->source); })())];
                    // line 198
                    yield "    ";
                }
                // line 199
                yield "
    <div class=\"invalid-feedback-container\">
      ";
                // line 201
                if ((($tmp =  !(null === (isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 201, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 202
                    yield "        <div class=\"text-danger\">
          ";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 203, $this->source); })()), "html", null, true);
                    yield "
        </div>
      ";
                } else {
                    // line 206
                    yield "        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          ";
                    // line 210
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 210, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 211
                        yield "            <div class=\"text-danger\">
              ";
                        // line 212
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                        yield "
            </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    yield "        </div>
      ";
                }
                // line 217
                yield "    </div>
  ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 227
    public function macro_form_group_row($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "form_group_row"));

            // line 228
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 228)->unwrap();
            // line 229
            yield "
  ";
            // line 230
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 230)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 230, $this->source); })()), "class", [], "any", false, false, false, 230), "")) : (""));
            // line 231
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 231), "block_prefixes", [], "any", false, true, false, 231), 1, [], "any", true, true, false, 231)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "vars", [], "any", false, false, false, 231), "block_prefixes", [], "any", false, false, false, 231), 1, [], "any", false, false, false, 231), "text")) : ("text"));
            // line 232
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 232)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 232, $this->source); })()), "row_attr", [], "any", false, false, false, 232), [])) : ([]));
            // line 233
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputType"]) || array_key_exists("inputType", $context) ? $context["inputType"] : (function () { throw new RuntimeError('Variable "inputType" does not exist.', 233, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 233, $this->source); })()), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 233, $this->source); })()));
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
            // line 234
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 234, $this->source); })()), [])) : ([]));
            // line 235
            yield "
    ";
            // line 237
            yield "    ";
            $context["labelOnTop"] = false;
            // line 238
            yield "
    ";
            // line 239
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 239)) {
                // line 240
                yield "      ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 240, $this->source); })()), "label_on_top", [], "any", false, false, false, 240);
                // line 241
                yield "    ";
            }
            // line 242
            yield "
    ";
            // line 243
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 243)) {
                // line 244
                yield "      ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 244), "required", [], "any", true, true, false, 244)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 244, $this->source); })()), "vars", [], "any", false, false, false, 244), "required", [], "any", false, false, false, 244), false)) : (false));
                // line 245
                yield "
      ";
                // line 246
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 246)) {
                    // line 247
                    yield "        ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 247, $this->source); })()), "required", [], "any", false, false, false, 247);
                    // line 248
                    yield "      ";
                }
                // line 249
                yield "
      <label for=\"";
                // line 250
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "vars", [], "any", false, false, false, 250), "id", [], "any", false, false, false, 250), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield (((($tmp = (isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 250, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("label-on-top col-12") : (""));
                yield "\">
        ";
                // line 251
                if ((($tmp = (isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 251, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 252
                    yield "          <span class=\"text-danger\">*</span>
        ";
                }
                // line 254
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 254, $this->source); })()), "label", [], "any", false, false, false, 254), "html", null, true);
                yield "

        ";
                // line 256
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 256), "label_attr", [], "any", true, true, false, 256) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "vars", [], "any", false, false, false, 256), "label_attr", [], "any", false, false, false, 256)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 256), "label_attr", [], "any", false, true, false, 256), "popover", [], "array", true, true, false, 256))) {
                    // line 257
                    yield "          ";
                    yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["content" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "vars", [], "any", false, false, false, 257), "label_attr", [], "any", false, false, false, 257), "popover", [], "array", false, false, false, 257)]);
                    yield "
        ";
                }
                // line 259
                yield "      </label>
    ";
            }
            // line 261
            yield "
    <div class=\"";
            // line 262
            yield (((($tmp = (isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 262, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("col-12") : ("col-sm"));
            yield "\">
      ";
            // line 263
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 263, $this->getSourceContext())->macro_form_widget_with_error(...[(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 263, $this->source); })()), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 263, $this->source); })()), (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 263, $this->source); })())]);
            yield "
    </div>
  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 268
    public function macro_multistore_switch($form = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "multistore_switch"));

            // line 269
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 269)->unwrap();
            // line 270
            yield "  ";
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "shop_restriction_switch", [], "any", true, true, false, 270)) {
                // line 271
                yield "    ";
                $context["defaultLabel"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 272
                    yield "      <strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Check / Uncheck all", [], "Admin.Actions"), "html", null, true);
                    yield "</strong> <br>
      ";
                    // line 273
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.", ["%yes_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes", [], "Admin.Global"), "%no_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No", [], "Admin.Global")], "Admin.Design.Help"), "html", null, true);
                    yield " <br>
      ";
                    // line 274
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.", [], "Admin.Design.Help"), "html", null, true);
                    yield "
    ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 276
                yield "
    ";
                // line 277
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "help", [], "any", true, true, false, 277)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 278
                    yield "      ";
                    $context["extraVars"] = Twig\Extension\CoreExtension::merge((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 278, $this->source); })()), ["help" => (isset($context["defaultLabel"]) || array_key_exists("defaultLabel", $context) ? $context["defaultLabel"] : (function () { throw new RuntimeError('Variable "defaultLabel" does not exist.', 278, $this->source); })())]);
                    // line 279
                    yield "    ";
                }
                // line 280
                yield "
    ";
                // line 281
                $context["vars"] = ["attr" => ["class" => "js-multi-store-restriction-switch"]];
                // line 282
                yield "
    ";
                // line 283
                yield $macros["self"]->getTemplateForMacro("macro_form_group_row", $context, 283, $this->getSourceContext())->macro_form_group_row(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "shop_restriction_switch", [], "any", false, false, false, 283), (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new RuntimeError('Variable "vars" does not exist.', 283, $this->source); })()), (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 283, $this->source); })())]);
                yield "
  ";
            }
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 287
    public function macro_language_dependant_select($form = null, $vars = null, $extraVars = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "form" => $form,
            "vars" => $vars,
            "extraVars" => $extraVars,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "language_dependant_select"));

            // line 288
            yield "  ";
            $macros["self"] = $this->load("@PrestaShop/Admin/macros.html.twig", 288)->unwrap();
            // line 289
            yield "
  ";
            // line 290
            $context["class"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "class", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 290, $this->source); })()), "class", [], "any", false, false, false, 290), "")) : (""));
            // line 291
            yield "  ";
            $context["inputType"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 291), "block_prefixes", [], "any", false, true, false, 291), 1, [], "any", true, true, false, 291)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 291, $this->source); })()), "vars", [], "any", false, false, false, 291), "block_prefixes", [], "any", false, false, false, 291), 1, [], "any", false, false, false, 291), "text")) : ("text"));
            // line 292
            yield "  ";
            $context["rowAttributes"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "row_attr", [], "any", true, true, false, 292)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 292, $this->source); })()), "row_attr", [], "any", false, false, false, 292), [])) : ([]));
            // line 293
            yield "  ";
            $context["attr"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), "vars", [], "any", false, false, false, 293), "attr", [], "any", false, false, false, 293);
            // line 294
            yield "  ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 294, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 294, $this->source); })()), "class", [], "any", false, false, false, 294), "")) : ("")) . " language_dependant_select"))]);
            // line 295
            yield "  <div class=\"form-group row type-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputType"]) || array_key_exists("inputType", $context) ? $context["inputType"] : (function () { throw new RuntimeError('Variable "inputType" does not exist.', 295, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 295, $this->source); })()), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 295, $this->source); })()));
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
            // line 296
            $context["extraVars"] = ((array_key_exists("extraVars", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 296, $this->source); })()), [])) : ([]));
            // line 297
            yield "
  ";
            // line 299
            yield "  ";
            $context["labelOnTop"] = false;
            // line 300
            yield "
  ";
            // line 301
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label_on_top", [], "any", true, true, false, 301)) {
                // line 302
                yield "    ";
                $context["labelOnTop"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 302, $this->source); })()), "label_on_top", [], "any", false, false, false, 302);
                // line 303
                yield "  ";
            }
            // line 304
            yield "
  ";
            // line 305
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "label", [], "any", true, true, false, 305)) {
                // line 306
                yield "    ";
                $context["isRequired"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 306), "required", [], "any", true, true, false, 306)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 306, $this->source); })()), "vars", [], "any", false, false, false, 306), "required", [], "any", false, false, false, 306), false)) : (false));
                // line 307
                yield "
    ";
                // line 308
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "required", [], "any", true, true, false, 308)) {
                    // line 309
                    yield "      ";
                    $context["isRequired"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 309, $this->source); })()), "required", [], "any", false, false, false, 309);
                    // line 310
                    yield "    ";
                }
                // line 311
                yield "
    <label for=\"";
                // line 312
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "vars", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312), "html", null, true);
                yield "\" class=\"form-control-label ";
                yield (((($tmp = (isset($context["labelOnTop"]) || array_key_exists("labelOnTop", $context) ? $context["labelOnTop"] : (function () { throw new RuntimeError('Variable "labelOnTop" does not exist.', 312, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("label-on-top col-12") : (""));
                yield "\">
      ";
                // line 313
                if ((($tmp = (isset($context["isRequired"]) || array_key_exists("isRequired", $context) ? $context["isRequired"] : (function () { throw new RuntimeError('Variable "isRequired" does not exist.', 313, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 314
                    yield "        <span class=\"text-danger\">*</span>
      ";
                }
                // line 316
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 316, $this->source); })()), "label", [], "any", false, false, false, 316), "html", null, true);
                yield "
    </label>
  ";
            }
            // line 319
            yield "
  <div class=\"";
            // line 320
            yield "col-sm-5";
            yield "\">
    ";
            // line 321
            yield $macros["self"]->getTemplateForMacro("macro_form_widget_with_error", $context, 321, $this->getSourceContext())->macro_form_widget_with_error(...[(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 321, $this->source); })())], (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 321, $this->source); })())]);
            yield "
  </div>
  ";
            // line 323
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["extraVars"] ?? null), "languages", [], "any", true, true, false, 323) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 323, $this->source); })()), "languages", [], "any", false, false, false, 323)))) {
                // line 324
                yield "  <div class=\"";
                yield "col-sm-3";
                yield "\">
    <select name=\"";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 325, $this->source); })()), "vars", [], "any", false, false, false, 325), "id", [], "any", false, false, false, 325) . "_language"), "html", null, true);
                yield "\" class=\"custom-select language_dependant_select_language\">
    ";
                // line 326
                if (is_iterable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 326, $this->source); })()), "languages", [], "any", false, false, false, 326))) {
                    // line 327
                    yield "      ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["extraVars"]) || array_key_exists("extraVars", $context) ? $context["extraVars"] : (function () { throw new RuntimeError('Variable "extraVars" does not exist.', 327, $this->source); })()), "languages", [], "any", false, false, false, 327));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 328
                        yield "        <option value=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["language"], "id", [], "any", false, false, false, 328), "html", null, true);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["language"], "value", [], "any", false, false, false, 328);
                        yield "</option>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['language'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 330
                    yield "    ";
                }
                // line 331
                yield "    </select>
  </div>
  ";
            }
            // line 334
            yield "  </div>
";
            
            $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

            
            $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/macros.html.twig";
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
        return array (  1246 => 334,  1241 => 331,  1238 => 330,  1227 => 328,  1222 => 327,  1220 => 326,  1216 => 325,  1211 => 324,  1209 => 323,  1204 => 321,  1200 => 320,  1197 => 319,  1190 => 316,  1186 => 314,  1184 => 313,  1178 => 312,  1175 => 311,  1172 => 310,  1169 => 309,  1167 => 308,  1164 => 307,  1161 => 306,  1159 => 305,  1156 => 304,  1153 => 303,  1150 => 302,  1148 => 301,  1145 => 300,  1142 => 299,  1139 => 297,  1137 => 296,  1117 => 295,  1114 => 294,  1111 => 293,  1108 => 292,  1105 => 291,  1103 => 290,  1100 => 289,  1097 => 288,  1077 => 287,  1062 => 283,  1059 => 282,  1057 => 281,  1054 => 280,  1051 => 279,  1048 => 278,  1046 => 277,  1043 => 276,  1037 => 274,  1033 => 273,  1028 => 272,  1025 => 271,  1022 => 270,  1019 => 269,  1000 => 268,  984 => 263,  980 => 262,  977 => 261,  973 => 259,  967 => 257,  965 => 256,  959 => 254,  955 => 252,  953 => 251,  947 => 250,  944 => 249,  941 => 248,  938 => 247,  936 => 246,  933 => 245,  930 => 244,  928 => 243,  925 => 242,  922 => 241,  919 => 240,  917 => 239,  914 => 238,  911 => 237,  908 => 235,  906 => 234,  886 => 233,  883 => 232,  880 => 231,  878 => 230,  875 => 229,  872 => 228,  852 => 227,  838 => 217,  834 => 215,  825 => 212,  822 => 211,  818 => 210,  812 => 206,  806 => 203,  803 => 202,  801 => 201,  797 => 199,  794 => 198,  791 => 197,  788 => 196,  786 => 195,  783 => 194,  776 => 191,  771 => 189,  764 => 185,  760 => 183,  758 => 182,  752 => 179,  748 => 178,  745 => 177,  739 => 174,  730 => 171,  727 => 170,  723 => 169,  719 => 167,  717 => 166,  714 => 165,  708 => 164,  706 => 163,  703 => 162,  700 => 161,  697 => 160,  695 => 159,  692 => 158,  689 => 157,  684 => 156,  682 => 155,  679 => 154,  676 => 153,  673 => 152,  669 => 150,  663 => 149,  660 => 148,  657 => 147,  654 => 146,  649 => 145,  646 => 143,  640 => 142,  637 => 141,  632 => 140,  629 => 139,  626 => 137,  623 => 136,  621 => 135,  615 => 133,  612 => 132,  610 => 131,  607 => 130,  604 => 129,  602 => 128,  600 => 127,  597 => 126,  594 => 125,  591 => 123,  585 => 122,  582 => 121,  577 => 120,  575 => 119,  572 => 118,  569 => 117,  551 => 116,  536 => 103,  533 => 102,  527 => 100,  525 => 99,  520 => 98,  518 => 97,  513 => 95,  510 => 94,  507 => 93,  504 => 92,  501 => 91,  498 => 90,  496 => 89,  493 => 88,  490 => 87,  470 => 86,  455 => 73,  451 => 72,  446 => 71,  427 => 70,  412 => 65,  408 => 64,  405 => 63,  400 => 61,  397 => 60,  395 => 59,  391 => 58,  387 => 57,  383 => 55,  380 => 54,  358 => 53,  344 => 49,  338 => 46,  334 => 45,  331 => 44,  327 => 42,  325 => 41,  314 => 40,  292 => 39,  276 => 34,  272 => 32,  254 => 31,  240 => 27,  234 => 25,  228 => 23,  226 => 22,  222 => 20,  203 => 19,  188 => 15,  181 => 14,  161 => 13,  146 => 10,  128 => 9,  113 => 6,  93 => 5,  81 => 286,  78 => 267,  75 => 220,  72 => 106,  69 => 76,  66 => 68,  63 => 51,  60 => 38,  57 => 30,  54 => 18,  51 => 12,  48 => 8,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {label_attr: {tooltip: tooltip, tooltip_placement: placement|default(\x27top\x27)}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default(\x27top\x27) }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text, use_raw = false) %}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {% if use_raw %}
      {{ text|raw }}
    {% else %}
      {{ text }}
    {% endif %}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text) %}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = \x27\x27, for = \x27\x27, isRequired = false) %}
<label{% if for is not empty %} for=\"{{ for }}\"{% endif %} class=\"form-control-label {{ class }}\">
  {% if isRequired %}
    <span class=\"text-danger\">*</span>
  {% endif %}

  {{ label }}
  {{ include(\x27@Common/HelpBox/helpbox.html.twig\x27, {content: help}) }}
</label>

<p class=\"sr-only\">{{ help }}</p>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder, prefix) %}
  {% set sortOrder, orderBy, prefix = sortOrder|default(\x27\x27), orderBy|default, prefix|default(\x27\x27) %}
  <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      data-sort-prefix=\"{{ prefix }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == \x27desc\x27 ? \x27desc\x27 : \x27asc\x27 }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ \x27Sort by\x27|trans({}, \x27Admin.Actions\x27) }}\"></span>
  </div>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a id=\"download-sample-{{ filename }}-file-link\" class=\"list-group-item list-group-item-action\"
       href=\"{{ path(\x27admin_import_sample_download\x27, {sampleName: filename}) }}\">
        {{ label|trans({}, \x27Admin.Advparameters.Feature\x27) }}
    </a>
{% endmacro %}

{#
  Show form widget with errors rendered below it. It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_widget_with_error(form, vars, extraVars) %}
  {% import \x27@PrestaShop/Admin/macros.html.twig\x27 as self %}

  {% set vars = vars|default({}) %}
  {% set extraVars = extraVars|default({}) %}
  {% set attr = vars.attr|default({}) %}
  {% set attr = attr|merge({class: (attr.class is defined ? attr.class : \x27\x27)}) %}
  {% set vars = vars|merge({attr: attr}) %}

  {{ form_widget(form, vars) }}

  {% if extraVars.help is defined and extraVars.help %}
      <small class=\"form-text\">{{ extraVars.help }}</small>
    {% elseif form.vars.help is defined and form.vars.help %}
      <small class=\"form-text\">{{ form.vars.help }}</small>
  {% endif %}

  {{ self.form_error_with_popover(form) }}

{% endmacro %}

{#
  It displays all nested errors for any form type.
  If form type has error_by_locale parameter set then the error is being displayed with the specific locale assigned to it.
  If form type has errors_by_locale parameter set then the errors are being assigned to the locales and are displayed
  in the popover template.
  If there are more then one error it also assigns all errors in the pop-up to appear.
  On page load, user sees only the errors count but then user hovers over the element the popover
  appears with the errors combined by language.
#}
{% macro form_error_with_popover(form) %}
  {% set errors = [] %}

  {% if form.vars.valid is defined and not form.vars.valid %}
    {% for parentError in form.vars.errors %}
      {% set errors = errors|merge([parentError.message]) %}
    {% endfor %}

    {# iterating over child errors because errors can be nested #}
  {% endif %}

  {% if errors|length > 0 %}
    {# for form types which has locales and there are more then 1 error , additional errors are displaying inside popover #}
    {% set errorPopover = null %}

    {% if errors|length > 1 %}
      {% set popoverContainer = \x27popover-error-container-\x27 ~ form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>

      {% if form.vars.errors_by_locale is defined %}
          {% set popoverErrors = form.vars.errors_by_locale %}

          {# collecting translatable errors - the ones which has locale name attached #}
          {% set translatableErrors = [] %}
          {% for translatableError in popoverErrors %}
            {% set translatableErrors = translatableErrors|merge([translatableError.error_message]) %}
          {% endfor %}

          {# if an error found which does not exist in translatable errors array - it adds it to the popover error container #}
          {% for error in errors %}
            {% if error not in translatableErrors %}
              {% set popoverErrors = popoverErrors|merge([error]) %}
            {% endif %}
          {% endfor %}

        {% else %}
          {% set popoverErrors = errors %}
      {% endif %}

      {% set errorMessages = [] %}
      {% for popoverError in popoverErrors %}
        {% set errorMessage = popoverError %}

        {% if popoverError.error_message is defined and popoverError.locale_name is defined %}
          {% set errorMessage = \x27%error_message% - Language: %language_name%\x27|trans({\x27%error_message%\x27: popoverError.error_message, \x27%language_name%\x27: popoverError.locale_name}, \x27Admin.Notifications.Error\x27) %}
        {% endif %}

        {% set errorMessages = errorMessages|merge([errorMessage]) %}
      {% endfor %}

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {% for popoverError in errorMessages %}
              <li class=\"text-danger\">
                {{ popoverError }}
              </li>
            {% endfor %}
          </ul>
        </div>
      {% endset %}

      <template class=\"js-popover-error-content\" data-id=\"{{ form.vars.id }}\">
        {{ popoverErrorContent }}
      </template>

      {% set errorPopover %}
        <span
          data-toggle=\"form-popover-error\"
          data-id=\"{{ form.vars.id }}\"
          data-placement=\"bottom\"
          data-template=\x27<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>\x27
          data-trigger=\"hover\"
          data-container=\".{{ popoverContainer }}\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u>{{ \x27%count% errors\x27|trans({\x27%count%\x27: popoverErrors|length}, \x27Admin.Global\x27) }}</u>
        </span>
      {% endset %}

    {% elseif form.vars.error_by_locale is defined %}
      {% set errorByLocale = \x27%error_message% - Language: %language_name%\x27|trans({\x27%error_message%\x27: form.vars.error_by_locale.error_message, \x27%language_name%\x27: form.vars.error_by_locale.locale_name}, \x27Admin.Notifications.Error\x27) %}
      {% set errors = [errorByLocale] %}
    {% endif %}

    <div class=\"invalid-feedback-container\">
      {% if errorPopover is not null %}
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      {% else %}
        <div class=\"d-inline-block text-danger align-top\">
          <i class=\"material-icons form-error-icon\">error_outline</i>
        </div>
        <div class=\"d-inline-block\">
          {% for error in errors %}
            <div class=\"text-danger\">
              {{ error }}
            </div>
          {% endfor %}
        </div>
      {% endif %}
    </div>
  {% endif %}
{% endmacro %}

 {#
  Helper function to render most common structure for single input
  @param form - form view to render
  @param vars - custom vars that are passed to form_widget
  @param extraVars - parameters that are not related to form_widget, but are needed for input (label, help text & etc.)
 #}
{% macro form_group_row(form, vars, extraVars) %}
  {% import \x27@PrestaShop/Admin/macros.html.twig\x27 as self %}

  {% set class = extraVars.class|default(\x27\x27) %}
  {% set inputType = form.vars.block_prefixes.1|default(\x27text\x27) %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
    {% set extraVars = extraVars|default({}) %}

    {# renders label above the form field if set to true #}
    {% set labelOnTop = false %}

    {% if extraVars.label_on_top is defined %}
      {% set labelOnTop = extraVars.label_on_top %}
    {% endif %}

    {% if extraVars.label is defined %}
      {% set isRequired = form.vars.required|default(false) %}

      {% if extraVars.required is defined %}
        {% set isRequired = extraVars.required %}
      {% endif %}

      <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? \x27label-on-top col-12\x27 : \x27\x27 }}\">
        {% if isRequired %}
          <span class=\"text-danger\">*</span>
        {% endif %}
        {{ extraVars.label }}

        {% if form.vars.label_attr is defined and form.vars.label_attr and form.vars.label_attr[\x27popover\x27] is defined %}
          {{ include(\x27@Common/HelpBox/helpbox.html.twig\x27, {content: form.vars.label_attr[\x27popover\x27]}) }}
        {% endif %}
      </label>
    {% endif %}

    <div class=\"{{ labelOnTop ? \x27col-12\x27 : \x27col-sm\x27 }}\">
      {{ self.form_widget_with_error(form, vars, extraVars) }}
    </div>
  </div>
{% endmacro %}

{% macro multistore_switch(form, extraVars) %}
  {% import \x27@PrestaShop/Admin/macros.html.twig\x27 as self %}
  {% if form.shop_restriction_switch is defined %}
    {% set defaultLabel %}
      <strong>{{ \x27Check / Uncheck all\x27|trans({}, \x27Admin.Actions\x27) }}</strong> <br>
      {{ \x27You are editing this page for a specific shop or group. Click \"%yes_label%\" to check all fields, \"%no_label%\" to uncheck all.\x27|trans({\x27%yes_label%\x27: \x27Yes\x27|trans({}, \x27Admin.Global\x27), \x27%no_label%\x27: \x27No\x27|trans({}, \x27Admin.Global\x27)}, \x27Admin.Design.Help\x27) }} <br>
      {{ \x27If you check a field, change its value, and save, the multistore behavior will not apply to this shop (or group), for this particular parameter.\x27|trans({}, \x27Admin.Design.Help\x27) }}
    {% endset %}

    {% if extraVars.help is not defined %}
      {% set extraVars = extraVars|merge({help: defaultLabel}) %}
    {% endif %}

    {% set vars = {attr: {class: \x27js-multi-store-restriction-switch\x27}} %}

    {{ self.form_group_row(form.shop_restriction_switch, vars, extraVars) }}
  {% endif %}
{% endmacro %}

{% macro language_dependant_select(form, vars, extraVars) %}
  {% import \x27@PrestaShop/Admin/macros.html.twig\x27 as self %}

  {% set class = extraVars.class|default(\x27\x27) %}
  {% set inputType = form.vars.block_prefixes.1|default(\x27text\x27) %}
  {% set rowAttributes = extraVars.row_attr|default({}) %}
  {% set attr = form.vars.attr %}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 language_dependant_select\x27)|trim}) %}
  <div class=\"form-group row type-{{ inputType }} {{ class }}\" {% for key, rowAttr in rowAttributes %} {{ key }}=\"{{ rowAttr }}\"{% endfor %}>
  {% set extraVars = extraVars|default({}) %}

  {# renders label above the form field if set to true #}
  {% set labelOnTop = false %}

  {% if extraVars.label_on_top is defined %}
    {% set labelOnTop = extraVars.label_on_top %}
  {% endif %}

  {% if extraVars.label is defined %}
    {% set isRequired = form.vars.required|default(false) %}

    {% if extraVars.required is defined %}
      {% set isRequired = extraVars.required %}
    {% endif %}

    <label for=\"{{ form.vars.id }}\" class=\"form-control-label {{ labelOnTop ? \x27label-on-top col-12\x27 : \x27\x27 }}\">
      {% if isRequired %}
        <span class=\"text-danger\">*</span>
      {% endif %}
      {{ extraVars.label }}
    </label>
  {% endif %}

  <div class=\"{{ \x27col-sm-5\x27 }}\">
    {{ self.form_widget_with_error(form, {attr: attr}, extraVars) }}
  </div>
  {% if extraVars.languages is defined and extraVars.languages is not empty %}
  <div class=\"{{ \x27col-sm-3\x27 }}\">
    <select name=\"{{ form.vars.id ~ \x27_language\x27 }}\" class=\"custom-select language_dependant_select_language\">
    {% if extraVars.languages is iterable %}
      {% for language in extraVars.languages %}
        <option value=\"{{ language.id }}\">{{ language.value|raw }}</option>
      {% endfor %}
    {% endif %}
    </select>
  </div>
  {% endif %}
  </div>
{% endmacro %}
", "@PrestaShop/Admin/macros.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\macros.html.twig");
    }
}
