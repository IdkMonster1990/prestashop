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

/* @PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig */
class __TwigTemplate_2e856ad3865a4809e26dda0fdef14ee1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig"));

        // line 5
        yield "<div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</p>
  ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 7, $this->source); })()), "quickAccesses", [], "any", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 8
            yield "    <a class=\"dropdown-item quick-row-link";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\"
      href=\"";
            // line 9
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 9), "html", null, true);
            yield "\"
      ";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " target=\"_blank\"";
            }
            // line 11
            yield "      data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 11), "html", null, true);
            yield "\"
      >
      ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 13), "html", null, true);
            yield "
  </a>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "  <div class=\"dropdown-divider\"></div>
  ";
        // line 17
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "    <a id=\"quick-remove-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-method=\"remove\"
       data-quicklink-id=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 22), "id_quick_access", [], "any", false, false, false, 22), "html", null, true);
            yield "\"
       data-rand=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
       data-url=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 24, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 24), "link", [], "any", false, false, false, 24), "html", null, true);
            yield "\"
       data-post-link=\"";
            // line 25
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
       data-prompt-text=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
       data-link=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 27, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
            yield "\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
    </a>
  ";
        } else {
            // line 33
            yield "    <a id=\"quick-add-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-rand=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
       data-method=\"add\"
       data-icon=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 38, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 38), "html", null, true);
            yield "\"
       data-url=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 39, $this->source); })()), "currentPageQuickAccessLink", [], "any", false, false, false, 39), "html", null, true);
            yield "\"
       data-post-link=\"";
            // line 40
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
       data-prompt-text=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
       data-link=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 42, $this->source); })()), "currentPageTitle", [], "any", false, false, false, 42), "html", null, true);
            yield "\"
    >
      <i class=\"material-icons\">add_circle</i>
      ";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        // line 48
        yield "  <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
  <i class=\"material-icons\">settings</i>
    ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
  </a>
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
        return "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig";
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
        return array (  176 => 50,  170 => 48,  164 => 45,  158 => 42,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  137 => 36,  132 => 33,  126 => 30,  120 => 27,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  94 => 18,  92 => 17,  89 => 16,  80 => 13,  74 => 11,  70 => 10,  66 => 9,  59 => 8,  55 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">{{ \x27Quick Access\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</p>
  {% for quickAccess in this.quickAccesses %}
    <a class=\"dropdown-item quick-row-link{% if quickAccess.active %} active{% endif %}\"
      href=\"{{ quickAccess.link }}\"
      {% if quickAccess.new_window %} target=\"_blank\"{% endif %}
      data-item=\"{{ quickAccess.name }}\"
      >
      {{ quickAccess.name }}
  </a>
  {% endfor %}
  <div class=\"dropdown-divider\"></div>
  {% if this.activeQuickAccess %}
    <a id=\"quick-remove-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-method=\"remove\"
       data-quicklink-id=\"{{ this.activeQuickAccess.id_quick_access }}\"
       data-rand=\"{{ random(1, 200) }}\"
       data-url=\"{{ this.activeQuickAccess.link }}\"
       data-post-link=\"{{ legacy_path(\x27AdminQuickAccesses\x27) }}\"
       data-prompt-text=\"{{ \x27Please name this shortcut:\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\"
       data-link=\"{{ this.activeQuickAccess.name }}\"
    >
      <i class=\"material-icons\">remove_circle_outline</i>
      {{ \x27Remove from Quick Access\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
    </a>
  {% else %}
    <a id=\"quick-add-link\"
       class=\"dropdown-item js-quick-link\"
       href=\"#\"
       data-rand=\"{{ random(1, 200) }}\"
       data-method=\"add\"
       data-icon=\"{{ this.currentPageIcon }}\"
       data-url=\"{{ this.currentPageQuickAccessLink }}\"
       data-post-link=\"{{ legacy_path(\x27AdminQuickAccesses\x27) }}\"
       data-prompt-text=\"{{ \x27Please name this shortcut:\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\"
       data-link=\"{{ this.currentPageTitle }}\"
    >
      <i class=\"material-icons\">add_circle</i>
      {{ \x27Add current page to Quick Access\x27|trans({}, \x27Admin.Actions\x27) }}
    </a>
  {% endif %}
  <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"{{ legacy_path(\x27AdminQuickAccesses\x27) }}\">
  <i class=\"material-icons\">settings</i>
    {{ \x27Manage your quick accesses\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
  </a>
</div>
", "@PrestaShop/Admin/Component/Layout/mobile_quick_access.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\mobile_quick_access.html.twig");
    }
}
