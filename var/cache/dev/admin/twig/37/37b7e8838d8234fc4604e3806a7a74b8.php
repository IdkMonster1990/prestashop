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

/* @PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig */
class __TwigTemplate_a5791710f16121a2a4a1fcbed5584e2c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig"));

        // line 5
        yield "<div class=\"ps-dropdown dropdown btn-group bordered mb-1 module-bulk-actions disabled\">
  <div id=\"bulk-actions-dropdown\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
    <span class=\"js-selected-item selected-item module-bulk-actions-selector-label\">
      ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall", [], "Admin.Actions"), "html", null, true);
        yield "
    </span>
    <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
  </div>

  <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\">
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bulkActions"]) || array_key_exists("bulkActions", $context) ? $context["bulkActions"] : (function () { throw new RuntimeError('Variable "bulkActions" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["name"]) {
            // line 15
            yield "      <a
        class=\"dropdown-item module-bulk-menu\"
        data-ref=\"";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
            yield "\"
        data-display-name=\"";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "\"
      >
        ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
            yield "
      </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['key'], $context['name'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
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
        return "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig";
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
        return array (  88 => 23,  79 => 20,  74 => 18,  70 => 17,  66 => 15,  62 => 14,  53 => 8,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"ps-dropdown dropdown btn-group bordered mb-1 module-bulk-actions disabled\">
  <div id=\"bulk-actions-dropdown\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
    <span class=\"js-selected-item selected-item module-bulk-actions-selector-label\">
      {{ \x27Uninstall\x27|trans({}, \x27Admin.Actions\x27) }}
    </span>
    <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
  </div>

  <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\">
    {% for key, name in bulkActions %}
      <a
        class=\"dropdown-item module-bulk-menu\"
        data-ref=\"{{ key }}\"
        data-display-name=\"{{ name }}\"
      >
        {{ name }}
      </a>
    {% endfor %}
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\dropdown_bulk.html.twig");
    }
}
