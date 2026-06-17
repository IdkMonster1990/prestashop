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

/* @Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig */
class __TwigTemplate_94bafcb89a4c7d813c561c909d623844 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig"));

        // line 19
        yield "<script defer type=\"application/javascript\" src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cdc_error_templating_url"]) || array_key_exists("cdc_error_templating_url", $context) ? $context["cdc_error_templating_url"] : (function () { throw new RuntimeError('Variable "cdc_error_templating_url" does not exist.', 19, $this->source); })()), "html", null, true);
        yield "\"></script>

";
        // line 21
        if ((array_key_exists("cdc_script_not_found", $context) && ((isset($context["cdc_script_not_found"]) || array_key_exists("cdc_script_not_found", $context) ? $context["cdc_script_not_found"] : (function () { throw new RuntimeError('Variable "cdc_script_not_found" does not exist.', 21, $this->source); })()) === true))) {
            // line 22
            yield "  <script defer type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cdc_error_url"]) || array_key_exists("cdc_error_url", $context) ? $context["cdc_error_url"] : (function () { throw new RuntimeError('Variable "cdc_error_url" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\"></script>
";
        } else {
            // line 24
            yield "  <script defer type=\"application/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["cdc_url"]) || array_key_exists("cdc_url", $context) ? $context["cdc_url"] : (function () { throw new RuntimeError('Variable "cdc_url" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "\"></script>
";
        }
        // line 26
        yield "
<script>
  window.\$(document).ready(function () {
    \$(\x27#main-div\x27).prepend(\x27<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_mbo_module_cdc_error");
        yield "\"></div>\x27)
    if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
      const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

      const context = ";
        // line 33
        yield json_encode((isset($context["shop_context"]) || array_key_exists("shop_context", $context) ? $context["shop_context"] : (function () { throw new RuntimeError('Variable "shop_context" does not exist.', 33, $this->source); })()));
        yield ";

      renderModulesManagerMessage(context, \x27#module-manager-message-cdc-container\x27)
    }
  });
</script>
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
        return "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig";
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
        return array (  80 => 33,  73 => 29,  68 => 26,  62 => 24,  56 => 22,  54 => 21,  48 => 19,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 *#}
<script defer type=\"application/javascript\" src=\"{{ cdc_error_templating_url }}\"></script>

{% if cdc_script_not_found is defined and cdc_script_not_found is same as(true) %}
  <script defer type=\"application/javascript\" src=\"{{ cdc_error_url }}\"></script>
{% else %}
  <script defer type=\"application/javascript\" src=\"{{ cdc_url }}\"></script>
{% endif %}

<script>
  window.\$(document).ready(function () {
    \$(\x27#main-div\x27).prepend(\x27<div class=\"module-manager-message-wrapper cdc-container\" id=\"module-manager-message-cdc-container\" data-error-path=\"{{ path(\x27admin_mbo_module_cdc_error\x27) }}\"></div>\x27)
    if (typeof window.mboCdc !== undefined && typeof window.mboCdc !== \"undefined\") {
      const renderModulesManagerMessage = window.mboCdc.renderModulesManagerMessage

      const context = {{ shop_context|json_encode()|raw }};

      renderModulesManagerMessage(context, \x27#module-manager-message-cdc-container\x27)
    }
  });
</script>
", "@Modules/ps_mbo/views/templates/hook/twig/module_manager_message.html.twig", "C:\\xampp\\htdocs\\prestashop\\modules\\ps_mbo\\views\\templates\\hook\\twig\\module_manager_message.html.twig");
    }
}
