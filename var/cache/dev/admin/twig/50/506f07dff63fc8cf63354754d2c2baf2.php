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

/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_d4ea44df6d0f57b88914c25b3d97885d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 5, $this->source); })()), "actions", [], "any", false, false, false, 5), "grid", [], "any", false, false, false, 5)) > 0)) {
            // line 6
            yield "  ";
            $context["gridActionsButtonId"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6) . "-grid-actions-button");
            // line 7
            yield "  ";
            $context["gridActionsDropdownMenuId"] = (CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7) . "-grid-actions-dropdown-menu");
            // line 8
            yield "
  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridActionsButtonId"]) || array_key_exists("gridActionsButtonId", $context) ? $context["gridActionsButtonId"] : (function () { throw new RuntimeError('Variable "gridActionsButtonId" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
            yield "\"
    >
      <span class=\"sr-only\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Settings", [], "Admin.Global"), "html", null, true);
            yield "</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridActionsButtonId"]) || array_key_exists("gridActionsButtonId", $context) ? $context["gridActionsButtonId"] : (function () { throw new RuntimeError('Variable "gridActionsButtonId" does not exist.', 21, $this->source); })()), "html", null, true);
            yield "\"
         id=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["gridActionsDropdownMenuId"]) || array_key_exists("gridActionsDropdownMenuId", $context) ? $context["gridActionsDropdownMenuId"] : (function () { throw new RuntimeError('Variable "gridActionsDropdownMenuId" does not exist.', 22, $this->source); })()), "html", null, true);
            yield "\"
    >
      ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 24, $this->source); })()), "actions", [], "any", false, false, false, 24), "grid", [], "any", false, false, false, 24));
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
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 25
                yield "        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Grid/" . CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 25)) . ".html.twig"), ["action" => $context["action"], "grid" => (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 25, $this->source); })())]);
                yield "
      ";
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
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            yield "    </div>

    ";
            // line 29
            yield from $this->load("@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", 29, 1)->unwrap()->yield(CoreExtension::merge($context, ["id" => (CoreExtension::getAttribute($this->env, $this->source,             // line 30
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30) . "_grid_common_show_query_modal"), "title" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SQL query", [], "Admin.Global"), "closable" => true, "actions" => [["type" => "button", "label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Export to SQL Manager", [], "Admin.Actions"), "value" => "sql_manager", "class" => "btn btn-primary btn-lg btn-sql-submit"]]]));
            // line 54
            yield "  </div>
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
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
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
        return array (  130 => 54,  128 => 30,  127 => 29,  123 => 27,  106 => 25,  89 => 24,  84 => 22,  80 => 21,  73 => 17,  68 => 15,  61 => 11,  56 => 8,  53 => 7,  50 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ \x27-grid-actions-button\x27 %}
  {% set gridActionsDropdownMenuId = grid.id ~ \x27-grid-actions-dropdown-menu\x27 %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ \x27Settings\x27|trans({}, \x27Admin.Global\x27) }}\"
    >
      <span class=\"sr-only\">{{ \x27Settings\x27|trans({}, \x27Admin.Global\x27) }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"{{ gridActionsButtonId }}\"
         id=\"{{ gridActionsDropdownMenuId }}\"
    >
      {% for action in grid.actions.grid %}
        {{ include(\x27@PrestaShop/Admin/Common/Grid/Actions/Grid/\x27 ~ action.type ~ \x27.html.twig\x27, {action: action, grid: grid}) }}
      {% endfor %}
    </div>

    {% embed \x27@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig\x27 with {
      id: grid.id ~ \x27_grid_common_show_query_modal\x27,
      title: \x27SQL query\x27|trans({}, \x27Admin.Global\x27),
      closable: true,
      actions: [{
        type: \x27button\x27,
        label: \x27Export to SQL Manager\x27|trans({}, \x27Admin.Actions\x27),
        value: \x27sql_manager\x27,
        class: \x27btn btn-primary btn-lg btn-sql-submit\x27,
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path(\x27admin_sql_requests_create\x27) }}\"
                  id=\"{{ grid.id ~ \x27_common_show_query_modal_form\x27 }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\grid_actions.html.twig");
    }
}


/* @PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig */
class __TwigTemplate_d4ea44df6d0f57b88914c25b3d97885d___1 extends Template
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
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 29
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig"));

        $this->parent = $this->load("@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", 29);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 40
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

        // line 41
        yield "          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_sql_requests_create");
        yield "\"
                  id=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44) . "_common_show_query_modal_form"), "html", null, true);
        yield "\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
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
        return "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig";
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
        return array (  295 => 44,  291 => 43,  287 => 41,  274 => 40,  251 => 29,  130 => 54,  128 => 30,  127 => 29,  123 => 27,  106 => 25,  89 => 24,  84 => 22,  80 => 21,  73 => 17,  68 => 15,  61 => 11,  56 => 8,  53 => 7,  50 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% if grid.actions.grid|length > 0 %}
  {% set gridActionsButtonId = grid.id ~ \x27-grid-actions-button\x27 %}
  {% set gridActionsDropdownMenuId = grid.id ~ \x27-grid-actions-dropdown-menu\x27 %}

  <div class=\"dropdown text-right\">
    <button class=\"btn btn-text dropdown-toggle tool-button\"
            id=\"{{ gridActionsButtonId }}\"
            data-toggle=\"dropdown\"
            aria-haspopup=\"true\"
            aria-expanded=\"false\"
            title=\"{{ \x27Settings\x27|trans({}, \x27Admin.Global\x27) }}\"
    >
      <span class=\"sr-only\">{{ \x27Settings\x27|trans({}, \x27Admin.Global\x27) }}</span>
    </button>

    <div class=\"dropdown-menu dropdown-menu-right\"
         aria-labelledby=\"{{ gridActionsButtonId }}\"
         id=\"{{ gridActionsDropdownMenuId }}\"
    >
      {% for action in grid.actions.grid %}
        {{ include(\x27@PrestaShop/Admin/Common/Grid/Actions/Grid/\x27 ~ action.type ~ \x27.html.twig\x27, {action: action, grid: grid}) }}
      {% endfor %}
    </div>

    {% embed \x27@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig\x27 with {
      id: grid.id ~ \x27_grid_common_show_query_modal\x27,
      title: \x27SQL query\x27|trans({}, \x27Admin.Global\x27),
      closable: true,
      actions: [{
        type: \x27button\x27,
        label: \x27Export to SQL Manager\x27|trans({}, \x27Admin.Actions\x27),
        value: \x27sql_manager\x27,
        class: \x27btn btn-primary btn-lg btn-sql-submit\x27,
      }],
    } %}
      {% block content %}
          <div class=\"modal-body\">
            <form method=\"post\"
                  action=\"{{ path(\x27admin_sql_requests_create\x27) }}\"
                  id=\"{{ grid.id ~ \x27_common_show_query_modal_form\x27 }}\"
            >
              <div class=\"form-group\">
                <textarea name=\"sql\" rows=\"10\" cols=\"65\" title=\"\" class=\"form-control\"></textarea>
                <input type=\"hidden\" name=\"name\" value=\"\" />
              </div>
            </form>
          </div>
      {% endblock %}
    {% endembed %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Blocks/grid_actions.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Blocks\\grid_actions.html.twig");
    }
}
