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

/* @PrestaShop/Admin/Module/common.html.twig */
class __TwigTemplate_42678158d1eb79c8f31aff36af24c9e3 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/common.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/common.html.twig"));

        // line 34
        $context["js_translatable"] = Twig\Extension\CoreExtension::merge(["Bulk Action - One module minimum" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You need to select at least one module to use the bulk action.", [], "Admin.Modules.Notification"), "Bulk Action - Request not found" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The action \"[1]\" is not available, impossible to perform your request.", [], "Admin.Modules.Notification"), "Bulk Action - Request not available for module" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("The action [1] is not available for module [2]. Skipped.", [], "Admin.Modules.Notification"), "An action is already in progress. Please wait for it to finish." => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("An action is already in progress. Please wait for it to finish.", [], "Admin.Modules.Notification")],         // line 39
(isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 39, $this->source); })()));
        // line 5
        $this->parent = $this->load("@PrestaShop/Admin/layout.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 8
        yield "  ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
  <script>
    var moduleURLs = {
      \x27configurationPage\x27: \x27";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_configure_action", ["module_name" => ":number:"]), "js"), "html", null, true);
        yield "\x27,
      \x27moduleImport\x27: \x27";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_import"), "js"), "html", null, true);
        yield "\x27,
      \x27notificationsCount\x27: \x27";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_notification_count"), "js"), "html", null, true);
        yield "\x27,
      \x27maintenancePage\x27: \x27";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_maintenance"), "js"), "html", null, true);
        yield "\x27,
    };

    var moduleTranslations = {
      \x27singleModuleModalUpdateTitle\x27: \x27";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to update this module?", [], "Admin.Modules.Notification"), "html", null, true);
        yield "\x27,
      \x27multipleModuleModalUpdateTitle\x27: \x27";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to update these modules?", [], "Admin.Modules.Notification"), "html", null, true);
        yield "\x27,
      \x27moduleModalUpdateCancel\x27: \x27";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\x27,
      \x27moduleModalUpdateMaintenance\x27: \x27";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Go to maintenance page", [], "Admin.Actions"), "html", null, true);
        yield "\x27,
      \x27moduleModalUpdateUpgrade\x27: \x27";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upgrade", [], "Admin.Actions"), "html", null, true);
        yield "\x27,
      \x27upgradeAnywayButtonText\x27: \x27";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Update anyway", [], "Admin.Actions"), "html", null, true);
        yield "\x27,
      \x27moduleModalUpdateConfirmMessage\x27: \x27";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("We strongly advise you to update the modules on maintenance mode to avoid any cache issues.", [], "Admin.Modules.Notification"), "html", null, true);
        yield "\x27,
    };

    // Need to come from the backend
    var isShopMaintenance = !";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getConfiguration("PS_SHOP_ENABLE")), "html", null, true);
        yield ";
  </script>
  <script src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/default/js/bundle/plugins/jquery.pstagger.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/module.bundle.js"), "html", null, true);
        yield "\"></script>
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
        return "@PrestaShop/Admin/Module/common.html.twig";
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
        return array (  146 => 31,  142 => 30,  137 => 28,  130 => 24,  126 => 23,  122 => 22,  118 => 21,  114 => 20,  110 => 19,  106 => 18,  99 => 14,  95 => 13,  91 => 12,  87 => 11,  80 => 8,  67 => 7,  56 => 5,  54 => 39,  53 => 34,  40 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% extends \x27@PrestaShop/Admin/layout.html.twig\x27 %}

{% block javascripts %}
  {{ parent() }}
  <script>
    var moduleURLs = {
      \x27configurationPage\x27: \x27{{ path(\x27admin_module_configure_action\x27, {module_name: \x27:number:\x27})|e(\x27js\x27) }}\x27,
      \x27moduleImport\x27: \x27{{ path(\x27admin_module_import\x27)|e(\x27js\x27) }}\x27,
      \x27notificationsCount\x27: \x27{{ path(\x27admin_module_notification_count\x27)|e(\x27js\x27) }}\x27,
      \x27maintenancePage\x27: \x27{{ path(\x27admin_maintenance\x27)|e(\x27js\x27) }}\x27,
    };

    var moduleTranslations = {
      \x27singleModuleModalUpdateTitle\x27: \x27{{ \x27Are you sure you want to update this module?\x27|trans({}, \x27Admin.Modules.Notification\x27) }}\x27,
      \x27multipleModuleModalUpdateTitle\x27: \x27{{ \x27Are you sure you want to update these modules?\x27|trans({}, \x27Admin.Modules.Notification\x27) }}\x27,
      \x27moduleModalUpdateCancel\x27: \x27{{ \x27Cancel\x27|trans({}, \x27Admin.Actions\x27) }}\x27,
      \x27moduleModalUpdateMaintenance\x27: \x27{{ \x27Go to maintenance page\x27|trans({}, \x27Admin.Actions\x27) }}\x27,
      \x27moduleModalUpdateUpgrade\x27: \x27{{ \x27Upgrade\x27|trans({}, \x27Admin.Actions\x27) }}\x27,
      \x27upgradeAnywayButtonText\x27: \x27{{ \x27Update anyway\x27|trans({}, \x27Admin.Actions\x27) }}\x27,
      \x27moduleModalUpdateConfirmMessage\x27: \x27{{ \x27We strongly advise you to update the modules on maintenance mode to avoid any cache issues.\x27|trans({}, \x27Admin.Modules.Notification\x27) }}\x27,
    };

    // Need to come from the backend
    var isShopMaintenance = !{{ \x27PS_SHOP_ENABLE\x27|configuration|intCast }};
  </script>
  <script src=\"{{ asset(\x27themes/default/js/bundle/plugins/jquery.pstagger.js\x27) }}\"></script>
  <script src=\"{{ asset(\x27themes/new-theme/public/module.bundle.js\x27) }}\"></script>
{% endblock %}

{% set js_translatable = {
  \x27Bulk Action - One module minimum\x27: \x27You need to select at least one module to use the bulk action.\x27|trans({}, \x27Admin.Modules.Notification\x27),
  \x27Bulk Action - Request not found\x27: \x27The action \"[1]\" is not available, impossible to perform your request.\x27|trans({}, \x27Admin.Modules.Notification\x27),
  \x27Bulk Action - Request not available for module\x27: \x27The action [1] is not available for module [2]. Skipped.\x27|trans({}, \x27Admin.Modules.Notification\x27),
  \x27An action is already in progress. Please wait for it to finish.\x27: \x27An action is already in progress. Please wait for it to finish.\x27|trans({}, \x27Admin.Modules.Notification\x27),
}|merge(js_translatable)
%}
", "@PrestaShop/Admin/Module/common.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\common.html.twig");
    }
}
