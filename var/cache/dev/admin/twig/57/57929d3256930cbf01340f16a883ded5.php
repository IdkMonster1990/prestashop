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

/* @PrestaShop/Admin/Module/Includes/menu_top.html.twig */
class __TwigTemplate_a39409f8b27edcaccf2b97aa53ba864b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig"));

        // line 5
        yield "<div class=\"module-top-menu\">
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"input-group\" id=\"search-input-group\">
        <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
            <i class=\"material-icons\">search</i>
          </button>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 module-menu-item\">
    </div>
  </div>

  <div class=\"row\">
    ";
        // line 22
        if (array_key_exists("topMenuData", $context)) {
            // line 23
            yield "      <div class=\"col-md-4 module-top-menu-item\">
        <h3>";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Category", [], "Admin.Catalog.Feature"), "html", null, true);
            yield "</h3>
        ";
            // line 25
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig", ["topMenuData" => (isset($context["topMenuData"]) || array_key_exists("topMenuData", $context) ? $context["topMenuData"] : (function () { throw new RuntimeError('Variable "topMenuData" does not exist.', 25, $this->source); })())]);
            yield "
      </div>
    ";
        }
        // line 28
        yield "
    ";
        // line 29
        if ((array_key_exists("requireFilterStatus", $context) && ((isset($context["requireFilterStatus"]) || array_key_exists("requireFilterStatus", $context) ? $context["requireFilterStatus"] : (function () { throw new RuntimeError('Variable "requireFilterStatus" does not exist.', 29, $this->source); })()) == true))) {
            // line 30
            yield "      <div class=\"col-md-4 module-top-menu-item\">
        <h3>";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Status", [], "Admin.Global"), "html", null, true);
            yield "</h3>
        ";
            // line 32
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig");
            yield "
      </div>
    ";
        }
        // line 35
        yield "
    ";
        // line 36
        if ((((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 36, $this->source); })()) > Twig\Extension\CoreExtension::constant("PrestaShop\\PrestaShop\\Core\\Security\\Permission::LEVEL_UPDATE")) && array_key_exists("bulkActions", $context))) {
            // line 37
            yield "      <div class=\"col-md-4 module-top-menu-item disabled\">
        <h3>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulk Actions", [], "Admin.Global"), "html", null, true);
            yield "</h3>
        ";
            // line 39
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig");
            yield "
      </div>
    ";
        }
        // line 42
        yield "  </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 47
        $context["js_translatable"] = Twig\Extension\CoreExtension::merge(["Search - placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search modules: keyword, name, author...", [], "Admin.Modules.Help")],         // line 49
(isset($context["js_translatable"]) || array_key_exists("js_translatable", $context) ? $context["js_translatable"] : (function () { throw new RuntimeError('Variable "js_translatable" does not exist.', 49, $this->source); })()));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/Includes/menu_top.html.twig";
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
        return array (  126 => 49,  125 => 47,  118 => 42,  112 => 39,  108 => 38,  105 => 37,  103 => 36,  100 => 35,  94 => 32,  90 => 31,  87 => 30,  85 => 29,  82 => 28,  76 => 25,  72 => 24,  69 => 23,  67 => 22,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"module-top-menu\">
  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"input-group\" id=\"search-input-group\">
        <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
        <div class=\"input-group-append\">
          <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
            <i class=\"material-icons\">search</i>
          </button>
        </div>
      </div>
    </div>
    <div class=\"col-md-4 module-menu-item\">
    </div>
  </div>

  <div class=\"row\">
    {% if topMenuData is defined %}
      <div class=\"col-md-4 module-top-menu-item\">
        <h3>{{ \x27Category\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</h3>
        {{ include(\x27@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig\x27, {topMenuData: topMenuData}) }}
      </div>
    {% endif %}

    {% if requireFilterStatus is defined and requireFilterStatus == true %}
      <div class=\"col-md-4 module-top-menu-item\">
        <h3>{{ \x27Status\x27|trans({}, \x27Admin.Global\x27) }}</h3>
        {{ include(\x27@PrestaShop/Admin/Module/Includes/dropdown_status.html.twig\x27) }}
      </div>
    {% endif %}

    {% if level > constant(\x27PrestaShop\\\\PrestaShop\\\\Core\\\\Security\\\\Permission::LEVEL_UPDATE\x27) and bulkActions is defined %}
      <div class=\"col-md-4 module-top-menu-item disabled\">
        <h3>{{ \x27Bulk Actions\x27|trans({}, \x27Admin.Global\x27) }}</h3>
        {{ include(\x27@PrestaShop/Admin/Module/Includes/dropdown_bulk.html.twig\x27) }}
      </div>
    {% endif %}
  </div>
</div>

<hr class=\"top-menu-separator\"/>

{% set js_translatable = {
  \x27Search - placeholder\x27: \x27Search modules: keyword, name, author...\x27|trans({}, \x27Admin.Modules.Help\x27),
  }|merge(js_translatable) %}
", "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\menu_top.html.twig");
    }
}
