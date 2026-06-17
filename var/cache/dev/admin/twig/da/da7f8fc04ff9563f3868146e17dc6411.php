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

/* @PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig */
class __TwigTemplate_810a7c8180d56841698e7b630b58d704 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig"));

        // line 5
        yield "
<button id=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%s_grid_bulk_action_%s", CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)), "html", null, true);
        yield "\"
        class=\"dropdown-item js-bulk-action-ajax-btn ";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "options", [], "any", false, false, false, 7), "class", [], "any", false, false, false, 7), "html", null, true);
        yield "\"
        type=\"button\"
        data-bulk-action=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9), "html", null, true);
        yield "\"
        data-ajax-url=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "options", [], "any", false, false, false, 10), "ajax_route", [], "any", false, false, false, 10), "html", null, true);
        yield "\"
        data-route-params=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 11, $this->source); })()), "options", [], "any", false, false, false, 11), "route_params", [], "any", false, false, false, 11)), "html", null, true);
        yield "\"
        data-request-param-name=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 12, $this->source); })()), "options", [], "any", false, false, false, 12), "request_param_name", [], "any", false, false, false, 12), "html", null, true);
        yield "\"
        data-request-bulk-chunk-size=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "options", [], "any", false, false, false, 13), "bulk_chunk_size", [], "any", false, false, false, 13), "html", null, true);
        yield "\"
        data-request-reload-after-bulk=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "options", [], "any", false, false, false, 14), "reload_after_bulk", [], "any", false, false, false, 14), "html", null, true);
        yield "\"
        data-confirm-bulk-action=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "options", [], "any", false, false, false, 15), "confirm_bulk_action", [], "any", false, false, false, 15), "html", null, true);
        yield "\"
        data-confirm-title=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "options", [], "any", false, false, false, 16), "modal_confirm_title", [], "any", false, false, false, 16), "html", null, true);
        yield "\"
        data-cancel-label=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 17, $this->source); })()), "options", [], "any", false, false, false, 17), "modal_cancel", [], "any", false, false, false, 17), "html", null, true);
        yield "\"
        data-progress-title=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "options", [], "any", false, false, false, 18), "modal_progress_title", [], "any", false, false, false, 18), "html", null, true);
        yield "\"
        data-progress-message=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "options", [], "any", false, false, false, 19), "modal_progress_message", [], "any", false, false, false, 19), "html", null, true);
        yield "\"
        data-close-label=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 20, $this->source); })()), "options", [], "any", false, false, false, 20), "modal_close", [], "any", false, false, false, 20), "html", null, true);
        yield "\"
        data-stop-processing=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 21, $this->source); })()), "options", [], "any", false, false, false, 21), "modal_stop_processing", [], "any", false, false, false, 21), "html", null, true);
        yield "\"
        data-errors-message=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 22, $this->source); })()), "options", [], "any", false, false, false, 22), "modal_errors_message", [], "any", false, false, false, 22), "html", null, true);
        yield "\"
        data-back-to-processing=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 23, $this->source); })()), "options", [], "any", false, false, false, 23), "modal_back_to_processing", [], "any", false, false, false, 23), "html", null, true);
        yield "\"
        data-download-error-log=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 24, $this->source); })()), "options", [], "any", false, false, false, 24), "modal_download_error_log", [], "any", false, false, false, 24), "html", null, true);
        yield "\"
        data-view-error-log=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 25, $this->source); })()), "options", [], "any", false, false, false, 25), "modal_view_error_log", [], "any", false, false, false, 25), "html", null, true);
        yield "\"
        data-view-error-title=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 26, $this->source); })()), "options", [], "any", false, false, false, 26), "modal_error_title", [], "any", false, false, false, 26), "html", null, true);
        yield "\"
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 27, $this->source); })()), "options", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["attribute"] => $context["value"]) {
            // line 28
            yield "        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attribute"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attribute'], $context['value'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        yield ">
  ";
        // line 31
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 31, $this->source); })()), "icon", [], "any", false, false, false, 31))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 32
            yield "    <i class=\"material-icons\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 32, $this->source); })()), "icon", [], "any", false, false, false, 32), "html", null, true);
            yield "</i>
  ";
        }
        // line 34
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "
</button>
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
        return "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig";
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
        return array (  158 => 34,  152 => 32,  150 => 31,  147 => 30,  136 => 28,  132 => 27,  128 => 26,  124 => 25,  120 => 24,  116 => 23,  112 => 22,  108 => 21,  104 => 20,  100 => 19,  96 => 18,  92 => 17,  88 => 16,  84 => 15,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  64 => 10,  60 => 9,  55 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

<button id=\"{{ \x27%s_grid_bulk_action_%s\x27|format(grid.id, action.id) }}\"
        class=\"dropdown-item js-bulk-action-ajax-btn {{ action.options.class }}\"
        type=\"button\"
        data-bulk-action=\"{{ action.id }}\"
        data-ajax-url=\"{{ action.options.ajax_route }}\"
        data-route-params=\"{{ action.options.route_params|json_encode }}\"
        data-request-param-name=\"{{ action.options.request_param_name }}\"
        data-request-bulk-chunk-size=\"{{ action.options.bulk_chunk_size }}\"
        data-request-reload-after-bulk=\"{{ action.options.reload_after_bulk }}\"
        data-confirm-bulk-action=\"{{ action.options.confirm_bulk_action }}\"
        data-confirm-title=\"{{ action.options.modal_confirm_title }}\"
        data-cancel-label=\"{{ action.options.modal_cancel }}\"
        data-progress-title=\"{{ action.options.modal_progress_title }}\"
        data-progress-message=\"{{ action.options.modal_progress_message }}\"
        data-close-label=\"{{ action.options.modal_close }}\"
        data-stop-processing=\"{{ action.options.modal_stop_processing }}\"
        data-errors-message=\"{{ action.options.modal_errors_message }}\"
        data-back-to-processing=\"{{ action.options.modal_back_to_processing }}\"
        data-download-error-log=\"{{ action.options.modal_download_error_log }}\"
        data-view-error-log=\"{{ action.options.modal_view_error_log }}\"
        data-view-error-title=\"{{ action.options.modal_error_title }}\"
        {% for attribute, value in action.options.attributes %}
        {{ attribute }}=\"{{ value }}\"
        {% endfor %}
>
  {% if action.icon is not empty %}
    <i class=\"material-icons\">{{ action.icon }}</i>
  {% endif %}
  {{ action.name }}
</button>
", "@PrestaShop/Admin/Common/Grid/Actions/Bulk/ajax.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Actions\\Bulk\\ajax.html.twig");
    }
}
