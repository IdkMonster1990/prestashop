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

/* @PrestaShop/Admin/Module/manage.html.twig */
class __TwigTemplate_71fa446010bf2a38ba31df985d4ed7bd extends Template
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
            'content' => [$this, 'block_content'],
            'catalog_categories_listing' => [$this, 'block_catalog_categories_listing'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 5
        return "@PrestaShop/Admin/Module/common.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/manage.html.twig"));

        $this->parent = $this->load("@PrestaShop/Admin/Module/common.html.twig", 5);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      ";
        // line 11
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig");
        yield "
      ";
        // line 13
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/modal_import.html.twig", ["level" => (isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 13, $this->source); })()), "errorMessage" => (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 13, $this->source); })())]);
        yield "
      ";
        // line 15
        yield "      ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/menu_top.html.twig", ["topMenuData" => (isset($context["topMenuData"]) || array_key_exists("topMenuData", $context) ? $context["topMenuData"] : (function () { throw new RuntimeError('Variable "topMenuData" does not exist.', 15, $this->source); })()), "bulkActions" => (isset($context["bulkActions"]) || array_key_exists("bulkActions", $context) ? $context["bulkActions"] : (function () { throw new RuntimeError('Variable "bulkActions" does not exist.', 15, $this->source); })())]);
        yield "

      ";
        // line 17
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig", ["display_type" => "list", "origin" => "manage"]);
        yield "

      ";
        // line 19
        yield from $this->unwrap()->yieldBlock('catalog_categories_listing', $context, $blocks);
        // line 31
        yield "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_catalog_categories_listing(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "catalog_categories_listing"));

        // line 20
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 20, $this->source); })()), "subMenu", [], "any", false, false, false, 20));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            yield "          ";
            if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 21))) {
                // line 22
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig", ["category" => $context["category"], "display_type" => "list", "origin" => "manage"]);
                yield "
          ";
            } else {
                // line 24
                yield "            <div class=\"module-short-list\">
              <span id=\"";
                // line 25
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 25), "html", null, true);
                yield "_modules\" class=\"module-search-result-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 25), [], "Admin.Modules.Feature"), "html", null, true);
                yield "</span>
              ";
                // line 26
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig", ["modules" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "modules", [], "any", false, false, false, 26), "display_type" => "list", "origin" => "manage", "id" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "refMenu", [], "any", false, false, false, 26)]);
                yield "
            </div>
          ";
            }
            // line 29
            yield "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield "      ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Module/manage.html.twig";
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
        return array (  186 => 30,  172 => 29,  166 => 26,  160 => 25,  157 => 24,  151 => 22,  148 => 21,  130 => 20,  117 => 19,  104 => 31,  102 => 19,  97 => 17,  91 => 15,  86 => 13,  81 => 11,  77 => 8,  64 => 7,  41 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% extends \x27@PrestaShop/Admin/Module/common.html.twig\x27 %}

{% block content %}
  <div class=\"row justify-content-center\">
    <div class=\"col-xl-10\">
      {# Bulk Action confirm modal #}
      {{ include(\x27@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig\x27) }}
      {# Contains toolbar-nav for module page with level authorization #}
      {{ include(\x27@PrestaShop/Admin/Module/Includes/modal_import.html.twig\x27, {level: level, errorMessage: errorMessage}) }}
      {# Contains menu with Selection/Categories/Popular and Tag Search #}
      {{ include(\x27@PrestaShop/Admin/Module/Includes/menu_top.html.twig\x27, {topMenuData: topMenuData, bulkActions: bulkActions}) }}

      {{ include(\x27@PrestaShop/Admin/Module/Includes/grid_manage_recently_used.html.twig\x27, {display_type: \x27list\x27, origin: \x27manage\x27}) }}

      {% block catalog_categories_listing %}
        {% for category in categories.subMenu %}
          {% if category.modules is empty %}
            {{ include(\x27@PrestaShop/Admin/Module/Includes/grid_manage_empty.html.twig\x27, {category: category, display_type: \x27list\x27, origin: \x27manage\x27}) }}
          {% else %}
            <div class=\"module-short-list\">
              <span id=\"{{ category.refMenu }}_modules\" class=\"module-search-result-title\">{{ category.name|trans({}, \x27Admin.Modules.Feature\x27) }}</span>
              {{ include(\x27@PrestaShop/Admin/Module/Includes/grid_manage_installed.html.twig\x27, {modules: category.modules, display_type: \x27list\x27, origin: \x27manage\x27, id: category.refMenu}) }}
            </div>
          {% endif %}
        {% endfor %}
      {% endblock %}
    </div>
  </div>
{% endblock %}
", "@PrestaShop/Admin/Module/manage.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\manage.html.twig");
    }
}
