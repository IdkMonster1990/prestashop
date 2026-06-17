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

/* @PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig */
class __TwigTemplate_f19454d00d18450a9973cf33933f3dce extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig"));

        // line 5
        yield "<div id=\"header_quick\" class=\"component\">
  <div class=\"dropdown\" id=\"quick-access-container\">
    <button
      id=\"quick_select\"
      class=\"btn btn-link dropdown-toggle\"
      data-toggle=\"dropdown\"
    >";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">arrow_drop_down</i></button>
    <ul class=\"dropdown-menu\">
      ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "quickAccesses", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["quickAccess"]) {
            // line 14
            yield "        <li class=\"quick-row-link";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "active", [], "any", false, false, false, 14)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " active";
            }
            yield "\">
          <a ";
            // line 15
            if (CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", true, true, false, 15)) {
                yield "class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "class", [], "any", false, false, false, 15), "html", null, true);
                yield "\"";
            }
            // line 16
            yield "          href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "link", [], "any", false, false, false, 16), "html", null, true);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "new_window", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "target=\"_blank\"";
            }
            // line 17
            yield "          data-item=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 17), "html", null, true);
            yield "\"
          >
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quickAccess"], "name", [], "any", false, false, false, 19), "html", null, true);
            yield "
          </a>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quickAccess'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
      <li class=\"divider\"></li>
      ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "      <li>
        <a id=\"quick-remove-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"remove\"
           data-quicklink-id=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 28, $this->source); })()), "activeQuickAccess", [], "any", false, false, false, 28), "id_quick_access", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
          <i class=\"material-icons\">remove_circle</i>
          ";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Remove from Quick Access", [], "Admin.Navigation.Header"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        } else {
            // line 34
            yield "      <li>
        <a id=\"quick-add-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"add\">
          <i class=\"material-icons\">add_circle</i>
          ";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add current page to Quick Access", [], "Admin.Actions"), "html", null, true);
            yield "
        </a>
      </li>
      ";
        }
        // line 41
        yield "      <li>
        <a id=\"quick-manage-link\" href=\"";
        // line 42
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses");
        yield "\">
        <i class=\"material-icons\">settings</i>
          ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Manage your quick accesses", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  \$(function() {
    \$(\x27.ajax-quick-link\x27).on(\x27click\x27, function(e){
      e.preventDefault();

      var method = \$(this).data(\x27method\x27);

      if(method == \x27add\x27)
        var name = prompt(\x27";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please name this shortcut:", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\x27, \x27";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 59, $this->source); })()), "currentPageTitle", [], "any", false, false, false, 59), "html", null, true);
        yield "\x27);

      if(method == \x27add\x27 && name || method == \x27remove\x27)
      {
        \$.ajax({
          type: \x27POST\x27,
          headers: { \"cache-control\": \"no-cache\" },
          async: false,
          url: \"";
        // line 67
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminQuickAccesses", ["action" => "GetUrl", "rand" => Twig\Extension\CoreExtension::random($this->env->getCharset(), 1, 200), "ajax" => 1]);
        yield "\" + \"&method=\" + method + ( \$(this).data(\x27quicklink-id\x27) ? \"&id_quick_access=\" + \$(this).data(\x27quicklink-id\x27) : \"\"),
          data: {
            \"url\": \"";
        // line 69
        yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 69, $this->source); })()), "currentPageQuickAccessLink", [], "any", false, false, false, 69);
        yield "\",
            \"name\": name,
            \"icon\": \"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 71, $this->source); })()), "currentPageIcon", [], "any", false, false, false, 71), "html", null, true);
        yield "\"
          },
          dataType: \"json\",
          success: function(data) {
            var quicklink_list =\x27\x27;
            \$.each(data, function(index,value){
              if (typeof data[index][\x27name\x27] !== \x27undefined\x27)
                quicklink_list += \x27<li><a href=\"\x27 + data[index][\x27link\x27] + \x27\">\x27 + data[index][\x27name\x27] + \x27</a></li>\x27;
            });

            if (typeof data[\x27has_errors\x27] !== \x27undefined\x27 && data[\x27has_errors\x27])
              \$.each(data, function(index, value)
              {
                if (typeof data[index] == \x27string\x27)
                  \$.growl.error({ title: \"\", message: data[index]});
              });
            else if (quicklink_list)
            {
              \$(\x27#header_quick ul.dropdown-menu .divider\x27).prevAll().remove();
              \$(\x27#header_quick ul.dropdown-menu\x27).prepend(quicklink_list);
              \$(e.target).remove();
              showSuccessMessage(update_success_msg);
            }
          }
        });
      }
    });
  });
</script>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig";
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
        return array (  184 => 71,  179 => 69,  174 => 67,  161 => 59,  143 => 44,  138 => 42,  135 => 41,  128 => 37,  123 => 34,  116 => 30,  111 => 28,  107 => 26,  105 => 25,  101 => 23,  91 => 19,  85 => 17,  78 => 16,  72 => 15,  65 => 14,  61 => 13,  56 => 11,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div id=\"header_quick\" class=\"component\">
  <div class=\"dropdown\" id=\"quick-access-container\">
    <button
      id=\"quick_select\"
      class=\"btn btn-link dropdown-toggle\"
      data-toggle=\"dropdown\"
    >{{ \x27Quick Access\x27|trans({}, \x27Admin.Navigation.Header\x27) }} <i class=\"material-icons\">arrow_drop_down</i></button>
    <ul class=\"dropdown-menu\">
      {% for quickAccess in this.quickAccesses %}
        <li class=\"quick-row-link{% if quickAccess.active %} active{% endif %}\">
          <a {% if quickAccess.class is defined %}class=\"{{ quickAccess.class }}\"{% endif %}
          href=\"{{ quickAccess.link }}\" {% if quickAccess.new_window %}target=\"_blank\"{% endif %}
          data-item=\"{{ quickAccess.name }}\"
          >
            {{ quickAccess.name }}
          </a>
        </li>
      {% endfor %}

      <li class=\"divider\"></li>
      {% if this.activeQuickAccess %}
      <li>
        <a id=\"quick-remove-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"remove\"
           data-quicklink-id=\"{{ this.activeQuickAccess.id_quick_access }}\">
          <i class=\"material-icons\">remove_circle</i>
          {{ \x27Remove from Quick Access\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
        </a>
      </li>
      {% else %}
      <li>
        <a id=\"quick-add-link\" href=\"javascript:void(0);\" class=\"ajax-quick-link\" data-method=\"add\">
          <i class=\"material-icons\">add_circle</i>
          {{ \x27Add current page to Quick Access\x27|trans({}, \x27Admin.Actions\x27) }}
        </a>
      </li>
      {% endif %}
      <li>
        <a id=\"quick-manage-link\" href=\"{{ legacy_path(\x27AdminQuickAccesses\x27) }}\">
        <i class=\"material-icons\">settings</i>
          {{ \x27Manage your quick accesses\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
        </a>
      </li>
    </ul>
  </div>
</div>

<script>
  \$(function() {
    \$(\x27.ajax-quick-link\x27).on(\x27click\x27, function(e){
      e.preventDefault();

      var method = \$(this).data(\x27method\x27);

      if(method == \x27add\x27)
        var name = prompt(\x27{{ \x27Please name this shortcut:\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\x27, \x27{{ this.currentPageTitle }}\x27);

      if(method == \x27add\x27 && name || method == \x27remove\x27)
      {
        \$.ajax({
          type: \x27POST\x27,
          headers: { \"cache-control\": \"no-cache\" },
          async: false,
          url: \"{{ legacy_path(\x27AdminQuickAccesses\x27, {action: \x27GetUrl\x27, rand: random(1, 200), ajax: 1}) }}\" + \"&method=\" + method + ( \$(this).data(\x27quicklink-id\x27) ? \"&id_quick_access=\" + \$(this).data(\x27quicklink-id\x27) : \"\"),
          data: {
            \"url\": \"{{ this.currentPageQuickAccessLink|raw }}\",
            \"name\": name,
            \"icon\": \"{{ this.currentPageIcon }}\"
          },
          dataType: \"json\",
          success: function(data) {
            var quicklink_list =\x27\x27;
            \$.each(data, function(index,value){
              if (typeof data[index][\x27name\x27] !== \x27undefined\x27)
                quicklink_list += \x27<li><a href=\"\x27 + data[index][\x27link\x27] + \x27\">\x27 + data[index][\x27name\x27] + \x27</a></li>\x27;
            });

            if (typeof data[\x27has_errors\x27] !== \x27undefined\x27 && data[\x27has_errors\x27])
              \$.each(data, function(index, value)
              {
                if (typeof data[index] == \x27string\x27)
                  \$.growl.error({ title: \"\", message: data[index]});
              });
            else if (quicklink_list)
            {
              \$(\x27#header_quick ul.dropdown-menu .divider\x27).prevAll().remove();
              \$(\x27#header_quick ul.dropdown-menu\x27).prepend(quicklink_list);
              \$(e.target).remove();
              showSuccessMessage(update_success_msg);
            }
          }
        });
      }
    });
  });
</script>
", "@PrestaShop/Admin/Component/LegacyLayout/quick_access.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\quick_access.html.twig");
    }
}
