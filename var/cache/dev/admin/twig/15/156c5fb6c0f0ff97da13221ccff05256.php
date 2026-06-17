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

/* @PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-preview.html.twig */
class __TwigTemplate_dd6c2f02c550a55da5df2a4d345ee14e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-preview.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-preview.html.twig"));

        // line 25
        yield "
<div class=\"module-render-container all-modules\">
  <p>
    <h2>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose a module to configure", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</h2>
    ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("These modules are relative to the product page of your store.", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "<br />
    ";
        // line 30
        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To manage all your modules go to the [1]Installed module page[/1]", [], "Admin.Catalog.Feature"), ["[1]" => (("<a href=\"" . $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage")) . "\">"), "[/1]" => "</a>"]));
        yield "
  </p>

  <div class=\"row\">
    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["extraModules"]) || array_key_exists("extraModules", $context) ? $context["extraModules"] : (function () { throw new RuntimeError('Variable "extraModules" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 35
            yield "      <div class=\"col-lg-6 col-xl-4\">
        <div class=\"module-item-wrapper-grid\">
          <div class=\"module-item-heading-grid\">
            <img class=\"module-logo-thumb-grid\" src=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 38), "img", [], "any", false, false, false, 38), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 38), "displayName", [], "any", false, false, false, 38), "html", null, true);
            yield "\">
            <h3 class=\"text-ellipsis module-name-grid\">
              ";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 40), "displayName", [], "any", false, false, false, 40), "html", null, true);
            yield "
            </h3>
            <div class=\"text-ellipsis small-text module-version-author-grid\">
              ";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 43), "version", [], "any", false, false, false, 43), "html", null, true);
            yield " by ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 43), "author", [], "any", false, false, false, 43), "html", null, true);
            yield "
            </div>
          </div>
          <div class=\"module-quick-description-grid small no-padding\">
            ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["module"], "attributes", [], "any", false, false, false, 47), "description", [], "any", false, false, false, 47), "html", null, true);
            yield "
          </div>
          <div class=\"module-container\">
            <div class=\"module-quick-action-grid clearfix\">
              <button type=\"button\" class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["module"], "id", [], "any", false, false, false, 51), "html", null, true);
            yield "\">
                ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
            yield "
              </button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        yield "  </div>
</div>
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-preview.html.twig";
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
        return array (  123 => 59,  110 => 52,  106 => 51,  99 => 47,  90 => 43,  84 => 40,  77 => 38,  72 => 35,  68 => 34,  61 => 30,  57 => 29,  53 => 28,  48 => 25,);
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

<div class=\"module-render-container all-modules\">
  <p>
    <h2>{{ \x27Choose a module to configure\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</h2>
    {{ \x27These modules are relative to the product page of your store.\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}<br />
    {{ \x27To manage all your modules go to the [1]Installed module page[/1]\x27|trans({}, \x27Admin.Catalog.Feature\x27)|replace({\x27[1]\x27: \x27<a href=\"\x27 ~ path(\x27admin_module_manage\x27) ~ \x27\">\x27, \x27[/1]\x27: \x27</a>\x27})|raw_purified }}
  </p>

  <div class=\"row\">
    {% for module in extraModules %}
      <div class=\"col-lg-6 col-xl-4\">
        <div class=\"module-item-wrapper-grid\">
          <div class=\"module-item-heading-grid\">
            <img class=\"module-logo-thumb-grid\" src=\"{{ module.attributes.img }}\" alt=\"{{ module.attributes.displayName }}\">
            <h3 class=\"text-ellipsis module-name-grid\">
              {{ module.attributes.displayName }}
            </h3>
            <div class=\"text-ellipsis small-text module-version-author-grid\">
              {{ module.attributes.version }} by {{ module.attributes.author }}
            </div>
          </div>
          <div class=\"module-quick-description-grid small no-padding\">
            {{ module.attributes.description }}
          </div>
          <div class=\"module-container\">
            <div class=\"module-quick-action-grid clearfix\">
              <button type=\"button\" class=\"modules-list-button btn btn-outline-primary pull-xs-right\" data-target=\"module-{{ module.id }}\">
                {{ \x27Configure\x27|trans({}, \x27Admin.Actions\x27) }}
              </button>
            </div>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/Blocks/modules-preview.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\Blocks\\modules-preview.html.twig");
    }
}
