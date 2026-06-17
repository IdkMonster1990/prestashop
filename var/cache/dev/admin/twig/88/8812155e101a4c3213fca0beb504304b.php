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

/* @PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig */
class __TwigTemplate_7a8be69f3491b8c6ffefaf84d21424f5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig"));

        // line 5
        yield "<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["topMenuData"]) || array_key_exists("topMenuData", $context) ? $context["topMenuData"] : (function () { throw new RuntimeError('Variable "topMenuData" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 7
            yield "    ";
            $context["refMenu"] = CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "refMenu", [], "any", false, false, false, 7);
            // line 8
            yield "    <div id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["refMenu"]) || array_key_exists("refMenu", $context) ? $context["refMenu"] : (function () { throw new RuntimeError('Variable "refMenu" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            yield "
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["refMenu"]) || array_key_exists("refMenu", $context) ? $context["refMenu"] : (function () { throw new RuntimeError('Variable "refMenu" does not exist.', 15, $this->source); })()), "html", null, true);
            yield "\">
      <a class=\"dropdown-item module-category-reset\">
        ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All categories", [], "Admin.Modules.Feature"), "html", null, true);
            yield "
      </a>

      <a
        class=\"dropdown-item module-category-menu module-category-recently-used\"
        data-category-ref=\"recently-used\"
        data-category-display-name=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recently used", [], "Admin.Modules.Feature"), "html", null, true);
            yield "\"
      >
        ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Recently used", [], "Admin.Modules.Feature"), "html", null, true);
            yield "
      </a>

      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "subMenu", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["subMenu"]) {
                // line 29
                yield "        ";
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "modules", [], "any", false, false, false, 29))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 30
                    yield "          <a
            class=\"dropdown-item module-category-menu\"
            ";
                    // line 32
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield "data-category-tab=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "tab", [], "any", false, false, false, 32), "html", null, true);
                        yield "\"";
                    }
                    // line 33
                    yield "            data-category-ref=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "refMenu", [], "any", false, false, false, 33), "html", null, true);
                    yield "\"
            data-category-display-name=\"";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 34), [], "Admin.Modules.Feature"), "html", null, true);
                    yield "\"
          >
            ";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "name", [], "any", false, false, false, 36), [], "Admin.Modules.Feature"), "html", null, true);
                    yield "<span class=\"float-right\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["subMenu"], "modules", [], "any", false, false, false, 36)), "html", null, true);
                    yield "</span>
          </a>
        ";
                }
                // line 39
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['subMenu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "    </div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        yield "</div>
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
        return "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig";
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
        return array (  145 => 42,  138 => 40,  132 => 39,  124 => 36,  119 => 34,  114 => 33,  108 => 32,  104 => 30,  101 => 29,  97 => 28,  91 => 25,  86 => 23,  77 => 17,  72 => 15,  64 => 10,  58 => 8,  55 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"ps-dropdown dropdown btn-group bordered mb-1\">
  {% for menu in topMenuData %}
    {% set refMenu = menu.refMenu %}
    <div id=\"{{ refMenu }}\" class=\"dropdown-label\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" data-flip=\"false\">
      <span class=\"js-selected-item selected-item module-category-selector-label\">
        {{ \x27All categories\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
      </span>
      <i class=\"material-icons arrow-down float-right\">keyboard_arrow_down</i>
    </div>

    <div class=\"ps-dropdown-menu dropdown-menu module-category-selector items-list js-items-list\" aria-labelledby=\"{{ refMenu }}\">
      <a class=\"dropdown-item module-category-reset\">
        {{ \x27All categories\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
      </a>

      <a
        class=\"dropdown-item module-category-menu module-category-recently-used\"
        data-category-ref=\"recently-used\"
        data-category-display-name=\"{{ \x27Recently used\x27|trans({}, \x27Admin.Modules.Feature\x27) }}\"
      >
        {{ \x27Recently used\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
      </a>

      {% for subMenu in menu.subMenu %}
        {% if subMenu.modules is not empty %}
          <a
            class=\"dropdown-item module-category-menu\"
            {% if subMenu.tab %}data-category-tab=\"{{ subMenu.tab }}\"{% endif %}
            data-category-ref=\"{{ subMenu.refMenu }}\"
            data-category-display-name=\"{{ subMenu.name|trans({}, \x27Admin.Modules.Feature\x27) }}\"
          >
            {{ subMenu.name|trans({}, \x27Admin.Modules.Feature\x27) }}<span class=\"float-right\">{{ subMenu.modules|length }}</span>
          </a>
        {% endif %}
      {% endfor %}
    </div>
  {% endfor %}
</div>
", "@PrestaShop/Admin/Module/Includes/dropdown_categories.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\dropdown_categories.html.twig");
    }
}
