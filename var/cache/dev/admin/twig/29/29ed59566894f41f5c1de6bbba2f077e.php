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

/* @PrestaShop/Admin/Module/Includes/card_list.html.twig */
class __TwigTemplate_12a4a26df8a31b80318fe11d9c87074c extends Template
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
            'addon_version' => [$this, 'block_addon_version'],
            'addon_description' => [$this, 'block_addon_description'],
            'addon_additional_description' => [$this, 'block_addon_additional_description'],
            'module_actions' => [$this, 'block_module_actions'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/card_list.html.twig"));

        // line 5
        $context["isModuleActive"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 5), "active", [], "any", true, true, false, 5)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 5, $this->source); })()), "database", [], "any", false, false, false, 5), "active", [], "any", false, false, false, 5), "0")) : ("0"));
        // line 6
        yield "
<div
  class=\"module-item module-item-list col-md-12 ";
        // line 8
        if ((((isset($context["origin"]) || array_key_exists("origin", $context) ? $context["origin"] : (function () { throw new RuntimeError('Variable "origin" does not exist.', 8, $this->source); })()) == "manage") && ((isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 8, $this->source); })()) == "0"))) {
            yield "module-item-list-isNotActive";
        }
        yield "\"
  data-id=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 9, $this->source); })()), "attributes", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\"
  data-name=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 10, $this->source); })()), "attributes", [], "any", false, false, false, 10), "displayName", [], "any", false, false, false, 10), "html", null, true);
        yield "\"
  data-scoring=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 11, $this->source); })()), "attributes", [], "any", false, false, false, 11), "avgRate", [], "any", false, false, false, 11), "html", null, true);
        yield "\"
  data-logo=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 12, $this->source); })()), "attributes", [], "any", false, false, false, 12), "img", [], "any", false, false, false, 12), "html", null, true);
        yield "\"
  data-author=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 13, $this->source); })()), "attributes", [], "any", false, false, false, 13), "author", [], "any", false, false, false, 13), "html", null, true);
        yield "\"
  data-version=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 14, $this->source); })()), "attributes", [], "any", false, false, false, 14), "version", [], "any", false, false, false, 14), "html", null, true);
        yield "\"
  data-description=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 15, $this->source); })()), "attributes", [], "any", false, false, false, 15), "description", [], "any", false, false, false, 15), "html", null, true);
        yield "\"
  data-tech-name=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 16, $this->source); })()), "attributes", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true);
        yield "\"
  data-child-categories=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 17, $this->source); })()), "attributes", [], "any", false, false, false, 17), "categoryName", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
  data-categories=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["category"]) || array_key_exists("category", $context) ? $context["category"] : (function () { throw new RuntimeError('Variable "category" does not exist.', 18, $this->source); })()), "html", null, true);
        yield "\"
  data-type=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 19, $this->source); })()), "attributes", [], "any", false, false, false, 19), "productType", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
  data-price=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 20, $this->source); })()), "attributes", [], "any", false, false, false, 20), "price", [], "any", false, false, false, 20), "raw", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
  data-active=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["isModuleActive"]) || array_key_exists("isModuleActive", $context) ? $context["isModuleActive"] : (function () { throw new RuntimeError('Variable "isModuleActive" does not exist.', 21, $this->source); })()), "html", null, true);
        yield "\"
  data-installed=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "database", [], "any", false, true, false, 22), "installed", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 22, $this->source); })()), "database", [], "any", false, false, false, 22), "installed", [], "any", false, false, false, 22), "0")) : ("0")), "html", null, true);
        yield "\"
  data-last-access=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 23, $this->source); })()), "database", [], "any", false, false, false, 23), "last_access_date", [], "any", false, false, false, 23), "html", null, true);
        yield "\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "attributes", [], "any", false, false, false, 29), "img", [], "any", false, false, false, 29), "html", null, true);
        yield "\" class=\"text-md-center\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 29, $this->source); })()), "attributes", [], "any", false, false, false, 29), "displayName", [], "any", false, false, false, 29), "html", null, true);
        yield "\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 38, $this->source); })()), "attributes", [], "any", false, false, false, 38), "displayName", [], "any", false, false, false, 38), "html", null, true);
        yield "\"
          >
            ";
        // line 40
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 40, $this->source); })()), "attributes", [], "any", false, false, false, 40), "displayName", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "              ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 41, $this->source); })()), "attributes", [], "any", false, false, false, 41), "displayName", [], "any", false, false, false, 41));
            yield "

            ";
        } else {
            // line 44
            yield "              ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 44, $this->source); })()), "attributes", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
            yield "
            ";
        }
        // line 46
        yield "          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            ";
        // line 50
        yield from $this->unwrap()->yieldBlock('addon_version', $context, $blocks);
        // line 57
        yield "          </div>
          <div>
            ";
        // line 59
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 59), "urls", [], "any", false, true, false, 59), "upgrade", [], "any", true, true, false, 59)) {
            // line 60
            yield "                <span class=\"badge badge-success my-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade available", [], "Admin.Modules.Feature"), "html", null, true);
            yield "</span>
            ";
        }
        // line 62
        yield "          </div>
        </div>
        <div class=\"col-md-8 col-lg-7 scroll-300\">
          ";
        // line 65
        yield from $this->unwrap()->yieldBlock('addon_description', $context, $blocks);
        // line 71
        yield "          ";
        yield from $this->unwrap()->yieldBlock('addon_additional_description', $context, $blocks);
        // line 76
        yield "        </div>
        <div class=\"col-lg-3 text-md-right\">
          ";
        // line 78
        yield from $this->unwrap()->yieldBlock('module_actions', $context, $blocks);
        // line 89
        yield "        </div>
        ";
        // line 90
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 90, $this->source); })())]);
        yield "
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 50
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_version(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_version"));

        // line 51
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 51, $this->source); })()), "attributes", [], "any", false, false, false, 51), "productType", [], "any", false, false, false, 51) == "service")) {
            // line 52
            yield "                ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Service by %author%", ["%author%" => (("<b>" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 52, $this->source); })()), "attributes", [], "any", false, false, false, 52), "author", [], "any", false, false, false, 52)) . "</b>")], "Admin.Modules.Feature"));
            yield "
              ";
        } else {
            // line 54
            yield "                ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("v%version% - by %author%", ["%version%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 54, $this->source); })()), "attributes", [], "any", false, false, false, 54), "version", [], "any", false, false, false, 54), "%author%" => (("<b>" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 54, $this->source); })()), "attributes", [], "any", false, false, false, 54), "author", [], "any", false, false, false, 54)) . "</b>")], "Admin.Modules.Feature"));
            yield "
              ";
        }
        // line 56
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_description"));

        // line 66
        yield "            ";
        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 66, $this->source); })()), "attributes", [], "any", false, false, false, 66), "description", [], "any", false, false, false, 66));
        yield "
            ";
        // line 67
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 67, $this->source); })()), "attributes", [], "any", false, false, false, 67), "description", [], "any", false, false, false, 67)) > 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 67, $this->source); })()), "attributes", [], "any", false, false, false, 67), "description", [], "any", false, false, false, 67)) < Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 67, $this->source); })()), "attributes", [], "any", false, false, false, 67), "fullDescription", [], "any", false, false, false, 67))))) {
            // line 68
            yield "              ...
            ";
        }
        // line 70
        yield "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 71
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_addon_additional_description(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_additional_description"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "addon_additional_description"));

        // line 72
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["module"] ?? null), "attributes", [], "any", false, true, false, 72), "additional_description", [], "any", true, true, false, 72)) {
            // line 73
            yield "              ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 73, $this->source); })()), "attributes", [], "any", false, false, false, 73), "additional_description", [], "any", false, false, false, 73));
            yield "
            ";
        }
        // line 75
        yield "          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_module_actions(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module_actions"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "module_actions"));

        // line 79
        yield "            ";
        if ((array_key_exists("requireBulkActions", $context) && ((isset($context["requireBulkActions"]) || array_key_exists("requireBulkActions", $context) ? $context["requireBulkActions"] : (function () { throw new RuntimeError('Variable "requireBulkActions" does not exist.', 79, $this->source); })()) == true))) {
            // line 80
            yield "              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 82, $this->source); })()), "attributes", [], "any", false, false, false, 82), "displayName", [], "any", false, false, false, 82), "html", null, true);
            yield "\" data-tech-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 82, $this->source); })()), "attributes", [], "any", false, false, false, 82), "name", [], "any", false, false, false, 82), "html", null, true);
            yield "\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            ";
        }
        // line 87
        yield "            ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", ["module" => (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 87, $this->source); })())]);
        yield "
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
        return "@PrestaShop/Admin/Module/Includes/card_list.html.twig";
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
        return array (  356 => 87,  346 => 82,  342 => 80,  339 => 79,  326 => 78,  315 => 75,  309 => 73,  306 => 72,  293 => 71,  282 => 70,  278 => 68,  276 => 67,  271 => 66,  258 => 65,  247 => 56,  241 => 54,  235 => 52,  232 => 51,  219 => 50,  202 => 90,  199 => 89,  197 => 78,  193 => 76,  190 => 71,  188 => 65,  183 => 62,  177 => 60,  175 => 59,  171 => 57,  169 => 50,  163 => 46,  157 => 44,  150 => 41,  148 => 40,  143 => 38,  129 => 29,  120 => 23,  116 => 22,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  92 => 16,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  58 => 8,  54 => 6,  52 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% set isModuleActive = module.database.active|default(\x270\x27) %}

<div
  class=\"module-item module-item-list col-md-12 {% if origin == \x27manage\x27 and isModuleActive == \x270\x27 %}module-item-list-isNotActive{% endif %}\"
  data-id=\"{{ module.attributes.id }}\"
  data-name=\"{{ module.attributes.displayName }}\"
  data-scoring=\"{{ module.attributes.avgRate }}\"
  data-logo=\"{{ module.attributes.img }}\"
  data-author=\"{{ module.attributes.author }}\"
  data-version=\"{{ module.attributes.version }}\"
  data-description=\"{{ module.attributes.description }}\"
  data-tech-name=\"{{ module.attributes.name }}\"
  data-child-categories=\"{{ module.attributes.categoryName }}\"
  data-categories=\"{{ category }}\"
  data-type=\"{{ module.attributes.productType }}\"
  data-price=\"{{ module.attributes.price.raw }}\"
  data-active=\"{{ isModuleActive }}\"
  data-installed=\"{{ module.database.installed|default(\x270\x27) }}\"
  data-last-access=\"{{ module.database.last_access_date }}\"
>
  <div class=\"container-fluid\">
    <div class=\"module-item-wrapper-list row\">
      <div class=\"col-lg-1 text-sm-center\">
        <div class=\"module-logo-thumb-list\">
          <img src=\"{{ module.attributes.img }}\" class=\"text-md-center\" alt=\"{{ module.attributes.displayName }}\"/>
        </div>
      </div>
      <div class=\"col-lg-11 row\">
        <div class=\"col-md-10 col-lg-11\">
          <h3
            class=\"text-ellipsis module-name-list\"
            data-toggle=\"pstooltip\"
            data-placement=\"top\"
            title=\"{{ module.attributes.displayName }}\"
          >
            {% if module.attributes.displayName %}
              {{ module.attributes.displayName|raw_purified }}

            {% else %}
              {{ module.attributes.name }}
            {% endif %}
          </h3>
        </div>
        <div class=\"col-md-2\">
          <div class=\"text-ellipsis small-text\">
            {% block addon_version %}
              {% if module.attributes.productType == \x27service\x27 %}
                {{ \x27Service by %author%\x27|trans({\x27%author%\x27: \x27<b>\x27 ~ module.attributes.author ~ \x27</b>\x27}, \x27Admin.Modules.Feature\x27)|raw_purified }}
              {% else %}
                {{ \x27v%version% - by %author%\x27|trans({\x27%version%\x27: module.attributes.version, \x27%author%\x27: \x27<b>\x27 ~ module.attributes.author ~ \x27</b>\x27}, \x27Admin.Modules.Feature\x27)|raw_purified }}
              {% endif %}
            {% endblock %}
          </div>
          <div>
            {% if module.attributes.urls.upgrade is defined %}
                <span class=\"badge badge-success my-1\">{{ \x27Upgrade available\x27|trans({}, \x27Admin.Modules.Feature\x27) }}</span>
            {% endif %}
          </div>
        </div>
        <div class=\"col-md-8 col-lg-7 scroll-300\">
          {% block addon_description %}
            {{ module.attributes.description|raw_purified }}
            {% if module.attributes.description|length > 0 and module.attributes.description|length < module.attributes.fullDescription|length %}
              ...
            {% endif %}
          {% endblock %}
          {% block addon_additional_description %}
            {% if module.attributes.additional_description is defined %}
              {{ module.attributes.additional_description|raw_purified }}
            {% endif %}
          {% endblock %}
        </div>
        <div class=\"col-lg-3 text-md-right\">
          {% block module_actions %}
            {% if requireBulkActions is defined and requireBulkActions == true %}
              <div class=\"module-checkbox-bulk-list md-checkbox\">
                <label>
                  <input type=\"checkbox\" data-name=\"{{ module.attributes.displayName }}\" data-tech-name=\"{{ module.attributes.name }}\" />
                  <i class=\"md-checkbox-control\"></i>
                </label>
              </div>
            {% endif %}
            {{ include(\x27@PrestaShop/Admin/Module/Includes/action_menu.html.twig\x27, {module: module}) }}
          {% endblock %}
        </div>
        {{ include(\x27@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig\x27, {module: module}) }}
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/card_list.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\card_list.html.twig");
    }
}
