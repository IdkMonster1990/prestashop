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

/* @PrestaShop/Admin/Module/Includes/dropdown_status.html.twig */
class __TwigTemplate_e6aac66f838b2256052dc22424378372 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig"));

        // line 5
        yield "<div class=\"ps-dropdown dropdown btn-group bordered\">
    <div class=\"dropdown-label\" id=\"module-status-dropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
        <span class=\"js-selected-item selected-item module-status-selector-label\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show all modules", [], "Admin.Modules.Feature"), "html", null, true);
        yield "</span>
        <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu items-list js-items-list module-status-selector\" aria-labelledby=\"module-status-dropdown\">
        <a class=\"dropdown-item module-status-reset\">
            ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Show all modules", [], "Admin.Modules.Feature"), "html", null, true);
        yield "
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"1\">
            ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enabled modules", [], "Admin.Modules.Feature"), "html", null, true);
        yield "
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"0\">
            ";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disabled modules", [], "Admin.Modules.Feature"), "html", null, true);
        yield "
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"2\">
          ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstalled modules", [], "Admin.Modules.Feature"), "html", null, true);
        yield "
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"3\">
          ";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installed modules", [], "Admin.Modules.Feature"), "html", null, true);
        yield "
        </a>
    </div>
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
        return "@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig";
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
        return array (  89 => 29,  82 => 25,  75 => 21,  68 => 17,  61 => 13,  52 => 7,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"ps-dropdown dropdown btn-group bordered\">
    <div class=\"dropdown-label\" id=\"module-status-dropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
        <span class=\"js-selected-item selected-item module-status-selector-label\">{{ \x27Show all modules\x27|trans({}, \x27Admin.Modules.Feature\x27) }}</span>
        <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu items-list js-items-list module-status-selector\" aria-labelledby=\"module-status-dropdown\">
        <a class=\"dropdown-item module-status-reset\">
            {{ \x27Show all modules\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"1\">
            {{ \x27Enabled modules\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"0\">
            {{ \x27Disabled modules\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"2\">
          {{ \x27Uninstalled modules\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
        </a>

        <a class=\"dropdown-item module-status-menu\" data-status-ref=\"3\">
          {{ \x27Installed modules\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
        </a>
    </div>
</div>
", "@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\dropdown_status.html.twig");
    }
}
