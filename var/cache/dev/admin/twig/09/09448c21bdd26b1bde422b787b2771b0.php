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

/* @PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig */
class __TwigTemplate_003343e904bf9472191f14e7d2d0a507 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig"));

        // line 5
        yield "
";
        // line 6
        $macros["ps"] = $this->macros["ps"] = $this->load("@PrestaShop/Admin/macros.html.twig", 6)->unwrap();
        // line 7
        yield "
";
        // line 8
        [$context["orderBy"], $context["orderWay"]] =         [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 8, $this->source); })()), "sorting", [], "any", false, false, false, 8), "order_by", [], "any", false, false, false, 8), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 8, $this->source); })()), "sorting", [], "any", false, false, false, 8), "order_way", [], "any", false, false, false, 8)];
        // line 9
        yield "
";
        // line 10
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["column"] ?? null), "options", [], "any", false, true, false, 10), "sortable", [], "any", true, true, false, 10) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 10, $this->source); })()), "options", [], "any", false, false, false, 10), "sortable", [], "any", false, false, false, 10)) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 10, $this->source); })()), "data", [], "any", false, false, false, 10), "records_total", [], "any", false, false, false, 10) > 0))) {
            // line 11
            yield "  ";
            yield $macros["ps"]->getTemplateForMacro("macro_sortable_column_header", $context, 11, $this->getSourceContext())->macro_sortable_column_header(...[CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 11, $this->source); })()), "name", [], "any", false, false, false, 11), CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), (isset($context["orderBy"]) || array_key_exists("orderBy", $context) ? $context["orderBy"] : (function () { throw new RuntimeError('Variable "orderBy" does not exist.', 11, $this->source); })()), (isset($context["orderWay"]) || array_key_exists("orderWay", $context) ? $context["orderWay"] : (function () { throw new RuntimeError('Variable "orderWay" does not exist.', 11, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 11, $this->source); })()), "form_prefix", [], "any", false, false, false, 11)]);
            yield "
";
        } else {
            // line 13
            yield "  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
            yield "
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig";
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
        return array (  69 => 13,  63 => 11,  61 => 10,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% import \x27@PrestaShop/Admin/macros.html.twig\x27 as ps %}

{% set orderBy, orderWay = grid.sorting.order_by, grid.sorting.order_way %}

{% if column.options.sortable is defined and column.options.sortable and grid.data.records_total > 0 %}
  {{ ps.sortable_column_header(column.name, column.id, orderBy, orderWay, grid.form_prefix) }}
{% else %}
  {{ column.name }}
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Header/Content/default.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Header\\Content\\default.html.twig");
    }
}
