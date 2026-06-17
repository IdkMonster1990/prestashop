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

/* @PrestaShop/Admin/Component/Layout/notifications_center.html.twig */
class __TwigTemplate_a3f90df1ad887b59e4553cab45e58fa0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig"));

        // line 5
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "showNewOrders", [], "any", false, false, false, 5) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 5)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 5, $this->source); })()), "showNewMessages", [], "any", false, false, false, 5))) {
            // line 6
            yield "  <div class=\"component header-right-component\" id=\"header-notifications-container\">
    <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
      <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">notifications_none</i>
        <span id=\"notifications-total\" class=\"count hide\">0</span>
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
        <div class=\"notifications\">
          <ul class=\"nav nav-pills\" role=\"tablist\">
            ";
            // line 15
            $context["active"] = "active";
            // line 16
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "showNewOrders", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 19, $this->source); })()), "html", null, true);
                yield "\"
                  id=\"orders-tab\"
                  data-toggle=\"tab\"
                  data-type=\"order\"
                  href=\"#orders-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 26
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"));
                yield "
                  <span id=\"_nb_new_orders_\"></span>
                </a>
              </li>
              ";
                // line 30
                $context["active"] = "";
                // line 31
                yield "            ";
            }
            // line 32
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 32, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 35, $this->source); })()), "html", null, true);
                yield "\"
                  id=\"customers-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer\"
                  href=\"#customers-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_customers_\"></span>
                </a>
              </li>
              ";
                // line 46
                $context["active"] = "";
                // line 47
                yield "            ";
            }
            // line 48
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 48, $this->source); })()), "showNewMessages", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 49
                yield "              <li class=\"nav-item\">
                <a
                  class=\"nav-link ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 51, $this->source); })()), "html", null, true);
                yield "\"
                  id=\"messages-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer_message\"
                  href=\"#messages-notifications\"
                  role=\"tab\"
                >
                  ";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Messages[1][/1]", ["[1]" => "", "[/1]" => ""], "Admin.Navigation.Notification"), "html", null, true);
                yield "
                  <span id=\"_nb_new_messages_\"></span>
                </a>
              </li>
              ";
                // line 62
                $context["active"] = "";
                // line 63
                yield "            ";
            }
            // line 64
            yield "          </ul>

          <!-- Tab panes -->
          <div class=\"tab-content\">
            ";
            // line 68
            $context["active"] = "active";
            // line 69
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 69, $this->source); })()), "showNewOrders", [], "any", false, false, false, 69)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 70
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 70, $this->source); })()), "html", null, true);
                yield " empty\" id=\"orders-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 72
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new order for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 73
                yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 73, $this->source); })()), "noOrderTip", [], "any", false, false, false, 73);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 77
                $context["active"] = "";
                // line 78
                yield "            ";
            }
            // line 79
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 79, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 80
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 80, $this->source); })()), "html", null, true);
                yield " empty\" id=\"customers-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new customer for now :(", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 83, $this->source); })()), "noCustomerTip", [], "any", false, false, false, 83), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 87
                $context["active"] = "";
                // line 88
                yield "            ";
            }
            // line 89
            yield "            ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 89, $this->source); })()), "showNewMessages", [], "any", false, false, false, 89)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 90
                yield "              <div class=\"tab-pane ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 90, $this->source); })()), "html", null, true);
                yield " empty\" id=\"messages-notifications\" role=\"tabpanel\">
                <p class=\"no-notification\">
                  ";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No new message for now.", [], "Admin.Navigation.Notification"), "html", null, true);
                yield "<br>
                  ";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 93, $this->source); })()), "noCustomerMessageTip", [], "any", false, false, false, 93), "html", null, true);
                yield "
                </p>
                <div class=\"notification-elements\"></div>
              </div>
              ";
                // line 97
                $context["active"] = "";
                // line 98
                yield "            ";
            }
            // line 99
            yield "          </div>
        </div>
      </div>
    </div>

    ";
            // line 104
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 104, $this->source); })()), "showNewOrders", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 105
                yield "      <script type=\"text/html\" id=\"order-notification-template\">
        <a class=\"notif\" href=\"order_url\">
          <span class=\"notif__id\">#_id_order_</span>
          <span class=\"notif__customer\">
           - ";
                // line 109
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From:", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_customer_name_</strong> <span class=\"notif__iso\">(_iso_code_)</span>
          </span>
          <span class=\"notif__order-info\">
           <span class=\"notif__carrier\"> _carrier_ -</span> <strong class=\"notif__total\">_total_paid_</strong>
          </span>
        </a>
      </script>
    ";
            }
            // line 117
            yield "
    ";
            // line 118
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 118, $this->source); })()), "showNewCustomers", [], "any", false, false, false, 118)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 119
                yield "      <script type=\"text/html\" id=\"customer-notification-template\">
        <a class=\"notif\" href=\x27customer_url\x27>
          <span class=\"notif__id\">#_id_customer_</span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__registered-date\">
            ";
                // line 126
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registered on:", [], "Admin.Navigation.Notification"), "html", null, true);
                yield " <strong>_date_add_</strong>
          </span>
        </a>
      </script>
    ";
            }
            // line 131
            yield "
    ";
            // line 132
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 132, $this->source); })()), "showNewMessages", [], "any", false, false, false, 132)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 133
                yield "      <script type=\"text/html\" id=\"message-notification-template\">
        <a class=\"notif\" href=\x27message_url\x27>
          <span class=\"notif__status _status_\">
            <i class=\"material-icons\">fiber_manual_record</i> _status_
          </span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__date\">
            <i class=\"material-icons\">access_time</i> _date_add_
          </span>
        </a>
      </script>
    ";
            }
            // line 147
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
        return "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig";
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
        return array (  302 => 147,  286 => 133,  284 => 132,  281 => 131,  273 => 126,  264 => 119,  262 => 118,  259 => 117,  248 => 109,  242 => 105,  240 => 104,  233 => 99,  230 => 98,  228 => 97,  221 => 93,  217 => 92,  211 => 90,  208 => 89,  205 => 88,  203 => 87,  196 => 83,  192 => 82,  186 => 80,  183 => 79,  180 => 78,  178 => 77,  171 => 73,  167 => 72,  161 => 70,  158 => 69,  156 => 68,  150 => 64,  147 => 63,  145 => 62,  138 => 58,  128 => 51,  124 => 49,  121 => 48,  118 => 47,  116 => 46,  109 => 42,  99 => 35,  95 => 33,  92 => 32,  89 => 31,  87 => 30,  80 => 26,  70 => 19,  66 => 17,  63 => 16,  61 => 15,  50 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% if this.showNewOrders or this.showNewCustomers or this.showNewMessages %}
  <div class=\"component header-right-component\" id=\"header-notifications-container\">
    <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
      <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">notifications_none</i>
        <span id=\"notifications-total\" class=\"count hide\">0</span>
      </button>
      <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
        <div class=\"notifications\">
          <ul class=\"nav nav-pills\" role=\"tablist\">
            {% set active = \x27active\x27 %}
            {% if this.showNewOrders %}
              <li class=\"nav-item\">
                <a
                  class=\"nav-link {{ active }}\"
                  id=\"orders-tab\"
                  data-toggle=\"tab\"
                  data-type=\"order\"
                  href=\"#orders-notifications\"
                  role=\"tab\"
                >
                  {{ \x27Orders[1][/1]\x27|trans({\x27[1]\x27: \x27\x27, \x27[/1]\x27: \x27\x27}, \x27Admin.Navigation.Notification\x27)|raw_purified }}
                  <span id=\"_nb_new_orders_\"></span>
                </a>
              </li>
              {% set active = \x27\x27 %}
            {% endif %}
            {% if this.showNewCustomers %}
              <li class=\"nav-item\">
                <a
                  class=\"nav-link {{ active }}\"
                  id=\"customers-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer\"
                  href=\"#customers-notifications\"
                  role=\"tab\"
                >
                  {{ \x27Customers[1][/1]\x27|trans({\x27[1]\x27: \x27\x27, \x27[/1]\x27: \x27\x27}, \x27Admin.Navigation.Notification\x27) }}
                  <span id=\"_nb_new_customers_\"></span>
                </a>
              </li>
              {% set active = \x27\x27 %}
            {% endif %}
            {% if this.showNewMessages %}
              <li class=\"nav-item\">
                <a
                  class=\"nav-link {{ active }}\"
                  id=\"messages-tab\"
                  data-toggle=\"tab\"
                  data-type=\"customer_message\"
                  href=\"#messages-notifications\"
                  role=\"tab\"
                >
                  {{ \x27Messages[1][/1]\x27|trans({\x27[1]\x27: \x27\x27, \x27[/1]\x27: \x27\x27}, \x27Admin.Navigation.Notification\x27) }}
                  <span id=\"_nb_new_messages_\"></span>
                </a>
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
    </div>

    {% if this.showNewOrders %}
      <script type=\"text/html\" id=\"order-notification-template\">
        <a class=\"notif\" href=\"order_url\">
          <span class=\"notif__id\">#_id_order_</span>
          <span class=\"notif__customer\">
           - {{ \x27From:\x27|trans({}, \x27Admin.Navigation.Notification\x27) }} <strong>_customer_name_</strong> <span class=\"notif__iso\">(_iso_code_)</span>
          </span>
          <span class=\"notif__order-info\">
           <span class=\"notif__carrier\"> _carrier_ -</span> <strong class=\"notif__total\">_total_paid_</strong>
          </span>
        </a>
      </script>
    {% endif %}

    {% if this.showNewCustomers %}
      <script type=\"text/html\" id=\"customer-notification-template\">
        <a class=\"notif\" href=\x27customer_url\x27>
          <span class=\"notif__id\">#_id_customer_</span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__registered-date\">
            {{ \x27Registered on:\x27|trans({}, \x27Admin.Navigation.Notification\x27) }} <strong>_date_add_</strong>
          </span>
        </a>
      </script>
    {% endif %}

    {% if this.showNewMessages %}
      <script type=\"text/html\" id=\"message-notification-template\">
        <a class=\"notif\" href=\x27message_url\x27>
          <span class=\"notif__status _status_\">
            <i class=\"material-icons\">fiber_manual_record</i> _status_
          </span>
          <span class=\"notif__customer\">
           - <strong>_customer_name_</strong> _company_ -
          </span>
          <span class=\"notif__date\">
            <i class=\"material-icons\">access_time</i> _date_add_
          </span>
        </a>
      </script>
    {% endif %}
  </div>
{% endif %}
", "@PrestaShop/Admin/Component/Layout/notifications_center.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\notifications_center.html.twig");
    }
}
