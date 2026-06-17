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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig */
class __TwigTemplate_5cbf87a55570478022c4215daf4ada8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig"));

        // line 25
        yield "
<div class=\"row module-selection d-none\">
  <div class=\"col-lg-7\">
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extraModules"]) || array_key_exists("extraModules", $context) ? $context["extraModules"] : (function () { throw new RuntimeError('Variable "extraModules" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 29
            yield "      <div class=\"module-render-container module-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
            yield "\">
        <div>
          <img class=\"top-logo\" src=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 31), "img", [], "any", false, false, false, 31), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 31), "displayName", [], "any", false, false, false, 31), "html", null, true);
            yield "\">
          <h2 class=\"text-ellipsis module-name-grid\">
            ";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 33), "displayName", [], "any", false, false, false, 33), "html", null, true);
            yield "
          </h2>
          <div class=\"text-ellipsis small-text module-version\">
            ";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 36), "version", [], "any", false, false, false, 36), "html", null, true);
            yield " by ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 36), "author", [], "any", false, false, false, 36), "html", null, true);
            yield "
          </div>
        </div>
        <div class=\"small no-padding\">
          ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 40), "description", [], "any", false, false, false, 40), "html", null, true);
            yield "
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "  </div>

  <div class=\"col-lg-5\">
    <h2>";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</h2>
    <select class=\"modules-list-select\" data-toggle=\"select2\">
      ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extraModules"]) || array_key_exists("extraModules", $context) ? $context["extraModules"] : (function () { throw new RuntimeError('Variable "extraModules" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 50
            yield "        <option value=\"module-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 50), "displayName", [], "any", false, false, false, 50), "html", null, true);
            yield "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "    </select>
  </div>
</div>

<div class=\"module-contents d-none\">
  ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extraModules"]) || array_key_exists("extraModules", $context) ? $context["extraModules"] : (function () { throw new RuntimeError('Variable "extraModules" does not exist.', 57, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 58
            yield "    <div id=\"module_";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 58), "html", null, true);
            yield "\" class=\"module-render-container module-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
            yield "\">
      ";
            // line 59
            yield CoreExtension::getAttribute($this->env, $this->source, $context["module"], "content", [], "any", false, false, false, 59);
            yield "
    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig";
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
        return array (  147 => 62,  138 => 59,  131 => 58,  127 => 57,  120 => 52,  109 => 50,  105 => 49,  100 => 47,  95 => 44,  85 => 40,  76 => 36,  70 => 33,  63 => 31,  57 => 29,  53 => 28,  48 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# **
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to https://devdocs.prestashop.com/ for more information.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * #}

<div class=\"row module-selection d-none\">
  <div class=\"col-lg-7\">
    {% for module in extraModules %}
      <div class=\"module-render-container module-{{ module.attributes.name }}\">
        <div>
          <img class=\"top-logo\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
          <h2 class=\"text-ellipsis module-name-grid\">
            {{ module.attributes.displayName }}
          </h2>
          <div class=\"text-ellipsis small-text module-version\">
            {{ module.attributes.version }} by {{ module.attributes.author }}
          </div>
        </div>
        <div class=\"small no-padding\">
          {{ module.attributes.description }}
        </div>
      </div>
    {% endfor %}
  </div>

  <div class=\"col-lg-5\">
    <h2>{{ \x27Module to configure\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</h2>
    <select class=\"modules-list-select\" data-toggle=\"select2\">
      {% for module in extraModules %}
        <option value=\"module-{{ module.attributes.name }}\">{{ module.attributes.displayName }}</option>
      {% endfor %}
    </select>
  </div>
</div>

<div class=\"module-contents d-none\">
  {% for module in extraModules %}
    <div id=\"module_{{ module.id }}\" class=\"module-render-container module-{{ module.attributes.name }}\">
      {{ module.content|raw }}
    </div>
  {% endfor %}
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-content.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\modules-content.html.twig");
    }
}
