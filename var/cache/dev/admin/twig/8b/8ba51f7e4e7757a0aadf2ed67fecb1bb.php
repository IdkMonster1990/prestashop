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

/* @PrestaShop/Admin/Component/Layout/quick_access.html.twig */
class __TwigTemplate_9c43a8c4cbb72a21a3ca9bb4b57358f8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig"));

        // line 5
        yield "<div class=\"component\" id=\"quick-access-container\">
  <div class=\"dropdown quick-accesses\">
    <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
      ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
    </button>
    <div class=\"dropdown-menu\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 11, $this->source); })()), "quickAccesses", [], "any", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 12
            yield "        <a class=\"dropdown-item quick-row-link
          ";
            // line 13
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 13)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 13), "html", null, true);
            }
            // line 14
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\"
        href=\"";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 15), "html", null, true);
            yield "\"
        ";
            // line 16
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " target=\"_blank\"";
            }
            // line 17
            yield "        data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "\"
        >";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 18), "html", null, true);
            yield "</a>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "      <div class=\"dropdown-divider\"></div>
      ";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "        <a id=\"quick-remove-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-method=\"remove\"
           data-quicklink-id=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 26, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 26), "id_quick_access", [], "any", false, false, false, 26), "html", null, true);
            yield "\"
           data-rand=\"";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
           data-icon=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 28, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 28), "html", null, true);
            yield "\"
           data-url=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 29, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 29), "link", [], "any", false, false, false, 29), "html", null, true);
            yield "\"
           data-post-link=\"";
            // line 30
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
           data-prompt-text=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
           data-link=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 32, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
            yield "\"
        >
          <i class=\"material-icons\">remove_circle_outline</i>
          ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
        </a>
      ";
        } else {
            // line 38
            yield "        <a id=\"quick-add-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-rand=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "html", null, true);
            yield "\"
           data-method=\"add\"
           data-icon=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 43), "html", null, true);
            yield "\"
           data-url=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "currentPageQuickAccessLink", [], "any", false, false, false, 44), "html", null, true);
            yield "\"
           data-post-link=\"";
            // line 45
            yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
            yield "\"
           data-prompt-text=\"";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\"
           data-link=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 47, $this->source); })()), "currentPageTitle", [], "any", false, false, false, 47), "html", null, true);
            yield "\"
        >
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
        </a>
      ";
        }
        // line 53
        yield "      <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
      <i class=\"material-icons\">settings</i>
      ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
      </a>
    </div>
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
        return "@PrestaShop/Admin/Component/Layout/quick_access.html.twig";
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
        return array (  189 => 55,  183 => 53,  177 => 50,  171 => 47,  167 => 46,  163 => 45,  159 => 44,  155 => 43,  150 => 41,  145 => 38,  139 => 35,  133 => 32,  129 => 31,  125 => 30,  121 => 29,  117 => 28,  113 => 27,  109 => 26,  103 => 22,  101 => 21,  98 => 20,  90 => 18,  85 => 17,  81 => 16,  77 => 15,  70 => 14,  66 => 13,  63 => 12,  59 => 11,  53 => 8,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"component\" id=\"quick-access-container\">
  <div class=\"dropdown quick-accesses\">
    <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
      {{ \x27Quick Access\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
    </button>
    <div class=\"dropdown-menu\">
      {% for quickAccess in this.quickAccesses %}
        <a class=\"dropdown-item quick-row-link
          {% if quickAccess.class is defined %}{{ quickAccess.class }}{% endif %}
          {% if quickAccess.active %}active{% endif %}\"
        href=\"{{ quickAccess.link }}\"
        {% if quickAccess.new_window %} target=\"_blank\"{% endif %}
        data-item=\"{{ quickAccess.name }}\"
        >{{ quickAccess.name }}</a>
      {% endfor %}
      <div class=\"dropdown-divider\"></div>
      {% if this.activeQuickAccess %}
        <a id=\"quick-remove-link\"
           class=\"dropdown-item js-quick-link\"
           href=\"#\"
           data-method=\"remove\"
           data-quicklink-id=\"{{ this.activeQuickAccess.id_quick_access }}\"
           data-rand=\"{{ random(1, 200) }}\"
           data-icon=\"{{ this.currentPageIcon }}\"
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
  </div>
</div>
", "@PrestaShop/Admin/Component/Layout/quick_access.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\quick_access.html.twig");
    }
}
