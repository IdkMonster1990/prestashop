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

/* @PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig */
class __TwigTemplate_15679d0da854c5c5e95423e995bad61e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig"));

        // line 5
        yield "
<div id=\"specific-price-list-container\" class=\"d-none\">
  <div id=\"specific-prices-loading\">
    <div class=\"loading-label\">";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Loading specific prices", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</div>
    <div class=\"spinner spinner-primary\"></div>
  </div>
  <table class=\"table\" id=\"specific-prices-list-table\">
    <thead class=\"thead-default\">
    <tr>
      <th>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ID", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Combination", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Currency", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Country", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Store", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customer", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price (tax excl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Discount (tax incl.)", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th>";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Duration", [], "Admin.Global"), "html", null, true);
        yield "</th>
      <th>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Units", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 31
        yield "    </tbody>
  </table>
  <div class=\"row justify-content-center\" id=\"specific-prices-pagination\">
    ";
        // line 34
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Common/javascript_pagination.html.twig", ["limit" => 10, "limitChoices" => [10, 20, 50, 100, 300, 1000]]);
        // line 37
        yield "
  </div>
  <script type=\"text/html\" id=\"specific-price-tr-template\">
    <tr>
      <td class=\"specific-price-id\"></td>
      <td class=\"combination\"></td>
      <td class=\"currency\"></td>
      <td class=\"country\"></td>
      <td class=\"group\"></td>
      <td class=\"shop\"></td>
      <td class=\"customer\"></td>
      <td class=\"price\"></td>
      <td class=\"impact\"></td>
      <td class=\"period\" data-unlimited-text=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Unlimited", [], "Admin.Global"), "html", null, true);
        yield "\">
        <label>
          ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From", [], "Admin.Global"), "html", null, true);
        yield "
          <span class=\"from\"></span>
        </label>
        <br>
        <label>
          ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To", [], "Admin.Global"), "html", null, true);
        yield "
          <span class=\"to\"></span>
        </label>
      </td>
      <td class=\"from-qty\"></td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        yield "\"
          class=\"js-delete-specific-price-btn btn tooltip-link\"
          data-confirm-title=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Specific price deletion", [], "Admin.Global"), "html", null, true);
        yield "\"
          data-confirm-message=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Are you sure you want to delete this specific price?", [], "Admin.Global"), "html", null, true);
        yield "\"
          data-confirm-btn-label=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
        yield "\"
          data-cancel-btn-label=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
          data-confirm-btn-class=\"btn-danger\"
        ><i class=\"material-icons\">delete</i>
        </button>
      </td>
      <td>
        <button
          type=\"button\"
          title=\"";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit", [], "Admin.Actions"), "html", null, true);
        yield "\"
          class=\"js-edit-specific-price-btn btn tooltip-link\"
          data-modal-title=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit specific price", [], "Admin.Global"), "html", null, true);
        yield "\"
          data-confirm-button-label=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Save and publish", [], "Admin.Actions"), "html", null, true);
        yield "\"
          data-cancel-button-label=\"";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\"
        >
          <i class=\"material-icons\">edit</i>
        </button>
      </td>
    </tr>
  </script>
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
        return "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig";
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
        return array (  198 => 82,  194 => 81,  190 => 80,  185 => 78,  174 => 70,  170 => 69,  166 => 68,  162 => 67,  157 => 65,  146 => 57,  138 => 52,  133 => 50,  118 => 37,  116 => 34,  111 => 31,  102 => 24,  98 => 23,  94 => 22,  90 => 21,  86 => 20,  82 => 19,  78 => 18,  74 => 17,  70 => 16,  66 => 15,  62 => 14,  53 => 8,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

<div id=\"specific-price-list-container\" class=\"d-none\">
  <div id=\"specific-prices-loading\">
    <div class=\"loading-label\">{{ \x27Loading specific prices\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</div>
    <div class=\"spinner spinner-primary\"></div>
  </div>
  <table class=\"table\" id=\"specific-prices-list-table\">
    <thead class=\"thead-default\">
    <tr>
      <th>{{ \x27ID\x27|trans({}, \x27Admin.Global\x27) }}</th>
      <th>{{ \x27Combination\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</th>
      <th>{{ \x27Currency\x27|trans({}, \x27Admin.Global\x27) }}</th>
      <th>{{ \x27Country\x27|trans({}, \x27Admin.Global\x27) }}</th>
      <th>{{ \x27Group\x27|trans({}, \x27Admin.Global\x27) }}</th>
      <th>{{ \x27Store\x27|trans({}, \x27Admin.Global\x27) }}</th>
      <th>{{ \x27Customer\x27|trans({}, \x27Admin.Global\x27) }}</th>
      <th>{{ \x27Specific price (tax excl.)\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</th>
      <th>{{ \x27Discount (tax incl.)\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</th>
      <th>{{ \x27Duration\x27|trans({}, \x27Admin.Global\x27) }}</th>
      <th>{{ \x27Units\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</th>
      <th></th>
      <th></th>
    </tr>
    </thead>
    <tbody>
    {# template rows dynamically generated using javascript #}
    </tbody>
  </table>
  <div class=\"row justify-content-center\" id=\"specific-prices-pagination\">
    {{ include(\x27@PrestaShop/Admin/Common/javascript_pagination.html.twig\x27, {
      limit: 10,
      limitChoices: [10, 20, 50, 100, 300, 1000],
    }) }}
  </div>
  <script type=\"text/html\" id=\"specific-price-tr-template\">
    <tr>
      <td class=\"specific-price-id\"></td>
      <td class=\"combination\"></td>
      <td class=\"currency\"></td>
      <td class=\"country\"></td>
      <td class=\"group\"></td>
      <td class=\"shop\"></td>
      <td class=\"customer\"></td>
      <td class=\"price\"></td>
      <td class=\"impact\"></td>
      <td class=\"period\" data-unlimited-text=\"{{ \x27Unlimited\x27|trans({}, \x27Admin.Global\x27) }}\">
        <label>
          {{ \x27From\x27|trans({}, \x27Admin.Global\x27) }}
          <span class=\"from\"></span>
        </label>
        <br>
        <label>
          {{ \x27To\x27|trans({}, \x27Admin.Global\x27) }}
          <span class=\"to\"></span>
        </label>
      </td>
      <td class=\"from-qty\"></td>
      <td>
        <button
          type=\"button\"
          title=\"{{ \x27Delete\x27|trans({}, \x27Admin.Actions\x27) }}\"
          class=\"js-delete-specific-price-btn btn tooltip-link\"
          data-confirm-title=\"{{ \x27Specific price deletion\x27|trans({}, \x27Admin.Global\x27) }}\"
          data-confirm-message=\"{{ \x27Are you sure you want to delete this specific price?\x27|trans({}, \x27Admin.Global\x27) }}\"
          data-confirm-btn-label=\"{{ \x27Delete\x27|trans({}, \x27Admin.Actions\x27) }}\"
          data-cancel-btn-label=\"{{ \x27Cancel\x27|trans({}, \x27Admin.Actions\x27) }}\"
          data-confirm-btn-class=\"btn-danger\"
        ><i class=\"material-icons\">delete</i>
        </button>
      </td>
      <td>
        <button
          type=\"button\"
          title=\"{{ \x27Edit\x27|trans({}, \x27Admin.Actions\x27) }}\"
          class=\"js-edit-specific-price-btn btn tooltip-link\"
          data-modal-title=\"{{ \x27Edit specific price\x27|trans({}, \x27Admin.Global\x27) }}\"
          data-confirm-button-label=\"{{ \x27Save and publish\x27|trans({}, \x27Admin.Actions\x27) }}\"
          data-cancel-button-label=\"{{ \x27Cancel\x27|trans({}, \x27Admin.Actions\x27) }}\"
        >
          <i class=\"material-icons\">edit</i>
        </button>
      </td>
    </tr>
  </script>
</div>
", "@PrestaShop/Admin/Sell/Catalog/Product/SpecificPrice/Blocks/list.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Sell\\Catalog\\Product\\SpecificPrice\\Blocks\\list.html.twig");
    }
}
