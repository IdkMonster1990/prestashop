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

/* @PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig */
class __TwigTemplate_375c0a34609f319cc5b68497be17190c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig"));

        // line 5
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "showNewOrders", [], "any", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 5)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "showNewMessages", [], "any", false, false, false, 5))) {
            // line 6
            yield "<ul class=\"header-list component\">
  <li id=\"notification\" class=\"dropdown\">
    <a href=\"javascript:void(0);\" class=\"notification dropdown-toggle notifs\">
      <i class=\"material-icons\">notifications_none</i>
      <span id=\"total_notif_number_wrapper\" class=\"notifs_badge hide\">
              <span id=\"total_notif_value\">0</span>
            </span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-right notifs_dropdown\">
      <div class=\"notifications\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          ";
            // line 17
            $context["active"] = "active";
            // line 18
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 18, $this->source); })()), "showNewOrders", [], "any", false, false, false, 18)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 19
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 19, $this->source); })()), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"order\" href=\"#orders-notifications\" role=\"tab\" id=\"orders-tab\">";
                // line 20
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"orders_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 22
                $context["active"] = "";
                // line 23
                yield "          ";
            }
            // line 24
            yield "
          ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 25, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 26, $this->source); })()), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer\" href=\"#customers-notifications\" role=\"tab\" id=\"customers-tab\">";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
                yield "<span id=\"customers_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 29
                $context["active"] = "";
                // line 30
                yield "          ";
            }
            // line 31
            yield "
          ";
            // line 32
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 32, $this->source); })()), "showNewMessages", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "            <li class=\"nav-item ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 33, $this->source); })()), "html", null, true);
                yield "\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer_message\" href=\"#messages-notifications\" role=\"tab\" id=\"messages-tab\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages", [], "Admin.Global"), "html", null, true);
                yield "<span id=\"customer_messages_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            ";
                // line 36
                $context["active"] = "";
                // line 37
                yield "          ";
            }
            // line 38
            yield "        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          ";
            // line 42
            $context["active"] = "active";
            // line 43
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "showNewOrders", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 44
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 44, $this->source); })()), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 47
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 47, $this->source); })()), "noOrderTip", [], "any", false, false, false, 47);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 51
                $context["active"] = "";
                // line 52
                yield "          ";
            }
            // line 53
            yield "
          ";
            // line 54
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 54, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 55
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 55, $this->source); })()), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 58, $this->source); })()), "noCustomerTip", [], "any", false, false, false, 58), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 62
                $context["active"] = "";
                // line 63
                yield "          ";
            }
            // line 64
            yield "
          ";
            // line 65
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 65, $this->source); })()), "showNewMessages", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "            <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 66, $this->source); })()), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                ";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                ";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 69, $this->source); })()), "noCustomerMessageTip", [], "any", false, false, false, 69), "html", null, true);
                yield "
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            ";
                // line 73
                $context["active"] = "";
                // line 74
                yield "          ";
            }
            // line 75
            yield "        </div>
      </div>
    </div>
  </li>
</ul>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig";
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
        return array (  210 => 75,  207 => 74,  205 => 73,  198 => 69,  194 => 68,  188 => 66,  186 => 65,  183 => 64,  180 => 63,  178 => 62,  171 => 58,  167 => 57,  161 => 55,  159 => 54,  156 => 53,  153 => 52,  151 => 51,  144 => 47,  140 => 46,  134 => 44,  131 => 43,  129 => 42,  123 => 38,  120 => 37,  118 => 36,  113 => 34,  108 => 33,  106 => 32,  103 => 31,  100 => 30,  98 => 29,  93 => 27,  88 => 26,  86 => 25,  83 => 24,  80 => 23,  78 => 22,  73 => 20,  68 => 19,  65 => 18,  63 => 17,  50 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% if this.showNewOrders or this.showNewCustomers or this.showNewMessages %}
<ul class=\"header-list component\">
  <li id=\"notification\" class=\"dropdown\">
    <a href=\"javascript:void(0);\" class=\"notification dropdown-toggle notifs\">
      <i class=\"material-icons\">notifications_none</i>
      <span id=\"total_notif_number_wrapper\" class=\"notifs_badge hide\">
              <span id=\"total_notif_value\">0</span>
            </span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-right notifs_dropdown\">
      <div class=\"notifications\">
        <ul class=\"nav nav-tabs\" role=\"tablist\">
          {% set active = \x27active\x27 %}
          {% if this.showNewOrders %}
            <li class=\"nav-item {{ active }}\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"order\" href=\"#orders-notifications\" role=\"tab\" id=\"orders-tab\">{{ \x27Orders\x27|trans({}, \x27Admin.Navigation.Header\x27) }}<span id=\"orders_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            {% set active = \x27\x27 %}
          {% endif %}

          {% if this.showNewCustomers %}
            <li class=\"nav-item {{ active }}\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer\" href=\"#customers-notifications\" role=\"tab\" id=\"customers-tab\">{{ \x27Customers\x27|trans({}, \x27Admin.Navigation.Header\x27) }}<span id=\"customers_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            {% set active = \x27\x27 %}
          {% endif %}

          {% if this.showNewMessages %}
            <li class=\"nav-item {{ active }}\">
              <a class=\"nav-link\" data-toggle=\"tab\" data-type=\"customer_message\" href=\"#messages-notifications\" role=\"tab\" id=\"messages-tab\">{{ \x27Messages\x27|trans({}, \x27Admin.Global\x27) }}<span id=\"customer_messages_notif_value\" class=\"notif-counter\"></span></a>
            </li>
            {% set active = \x27\x27 %}
          {% endif %}
        </ul>

        <!-- Tab panes -->
        <div class=\"tab-content\">
          {% set active = \x27active\x27 %}
          {% if this.showNewOrders %}
            <div class=\"tab-pane {{ active }} empty\" id=\"orders-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                {{ \x27No new order for now :(\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}<br>
                {{ this.noOrderTip|raw }}
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            {% set active = \x27\x27 %}
          {% endif %}

          {% if this.showNewCustomers %}
            <div class=\"tab-pane {{ active }} empty\" id=\"customers-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                {{ \x27No new customer for now :(\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}<br>
                {{ this.noCustomerTip }}
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            {% set active = \x27\x27 %}
          {% endif %}

          {% if this.showNewMessages %}
            <div class=\"tab-pane {{ active }} empty\" id=\"messages-notifications\" role=\"tabpanel\">
              <p class=\"no-notification\">
                {{ \x27No new message for now.\x27|trans({}, \x27Admin.Navigation.Notification\x27) }}<br>
                {{ this.noCustomerMessageTip }}
              </p>
              <div class=\"notification-elements\"></div>
            </div>
            {% set active = \x27\x27 %}
          {% endif %}
        </div>
      </div>
    </div>
  </li>
</ul>
{% endif %}
", "@PrestaShop/Admin/Component/LegacyLayout/notifications_center.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\notifications_center.html.twig");
    }
}
