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

/* @PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig */
class __TwigTemplate_df0311ca65dd19282a638c780b6cd91b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig"));

        // line 5
        yield "<meta charset=\"utf-8\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "imgDir", [], "any", false, false, false, 9), "html", null, true);
        yield "favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "imgDir", [], "any", false, false, false, 10), "html", null, true);
        yield "app_icon.png\" />

<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">
<title>";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "metaTitle", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "metaTitle", [], "any", false, false, false, 13), "html", null, true);
            yield " • ";
        }
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "shopName", [], "any", false, false, false, 13), "html", null, true);
        yield "</title>

<script type=\"text/javascript\">
  var help_class_name = \x27";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "controllerName", [], "any", false, false, false, 16), "html", null, true);
        yield "\x27;
  var iso_user = \x27";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "isoUser", [], "any", false, false, false, 17), "html", null, true);
        yield "\x27;
  var lang_is_rtl = \x27";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 18, $this->source); })()), "langIsRtl", [], "any", false, false, false, 18)), "html", null, true);
        yield "\x27;
  var full_language_code = \x27";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "fullLanguageCode", [], "any", false, false, false, 19), "html", null, true);
        yield "\x27;
  var full_cldr_language_code = \x27";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "fullCldrLanguageCode", [], "any", false, false, false, 20), "html", null, true);
        yield "\x27;
  var country_iso_code = \x27";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "countryIsoCode", [], "any", false, false, false, 21), "html", null, true);
        yield "\x27;
  var _PS_VERSION_ = \x27";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "psVersion", [], "any", false, false, false, 22), "html", null, true);
        yield "\x27;
  var roundMode = ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "roundMode", [], "any", false, false, false, 23)), "html", null, true);
        yield ";
  var youEditFieldFor = \x27";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 24, $this->source); })()), "editForLabel", [], "any", false, false, false, 24), "html", null, true);
        yield "\x27;
  var new_order_msg = \x27";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new order has been placed on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\x27;
  var order_number_msg = \x27";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order number:", [], "Admin.Navigation.Header"), "html", null, true);
        yield " \x27;
  var total_msg = \x27";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Total:", [], "Admin.Global"), "html", null, true);
        yield " \x27;
  var from_msg = \x27";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("From:", [], "Admin.Global"), "html", null, true);
        yield " \x27;
  var see_order_msg = \x27";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View this order", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        yield "\x27;
  var new_customer_msg = \x27";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new customer registered on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\x27;
  var customer_name_msg = \x27";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Registered on:", [], "Admin.Navigation.Header"), "html", null, true);
        yield " \x27;
  var new_msg = \x27";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("A new message was posted on your store.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\x27;
  var see_msg = \x27";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read this message", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\x27;
  var token = \x27";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "legacyToken", [], "any", false, false, false, 34), "html", null, true);
        yield "\x27;
  var token_admin_orders = tokenAdminOrders = \x27";
        // line 35
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminOrders");
        yield "\x27;
  var token_admin_customers = tokenAdminCustomers = \x27";
        // line 36
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminCustomers");
        yield "\x27;
  var token_admin_customer_threads = tokenAdminCustomerThreads = \x27";
        // line 37
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyAdminToken("AdminCustomerThreads");
        yield "\x27;
  var currentIndex = \x27";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 38, $this->source); })()), "currentIndex", [], "any", false, false, false, 38), "html", null, true);
        yield "\x27;
  var employee_token = \x27";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 39, $this->source); })()), "employeeToken", [], "any", false, false, false, 39), "html", null, true);
        yield "\x27;
  var choose_language_translate = \x27";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose language:", [], "Admin.Actions"), "html", null, true);
        yield "\x27;
  var default_language = \x27";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\DataFormatterExtension']->intCast(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 41, $this->source); })()), "defaultLanguage", [], "any", false, false, false, 41)), "html", null, true);
        yield "\x27;
  var admin_modules_link = \x27";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_module_manage");
        yield "\x27;
  var admin_notification_get_link = \x27";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications");
        yield "\x27;
  var admin_notification_push_link = adminNotificationPushLink = \x27";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_common_notifications_ack");
        yield "\x27;
  var update_success_msg = \x27";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Successful update", [], "Admin.Notifications.Success"), "html", null, true);
        yield "\x27;
  var search_product_msg = \x27";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search for a product", [], "Admin.Orderscustomers.Feature"), "html", null, true);
        yield "\x27;
</script>

";
        // line 50
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@AdminNewTheme/public/preload.html.twig");
        yield "

";
        // line 57
        $context["displayBackOfficeHeaderRendered"] = $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayBackOfficeHeader");
        // line 58
        yield "
";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 59, $this->source); })()), "cssFiles", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["css_uri"] => $context["css_media"]) {
            // line 60
            yield "  <link href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_uri"], "html", null, true);
            yield "\" rel=\"stylesheet\" type=\"text/css\" media=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css_media"], "html", null, true);
            yield "\"/>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['css_uri'], $context['css_media'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        yield "
";
        // line 63
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 63, $this->source); })()), "jsDef", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 64
            yield "  <script type=\"text/javascript\">
    ";
            // line 65
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 65, $this->source); })()), "jsDef", [], "any", false, false, false, 65));
            foreach ($context['_seq'] as $context["k"] => $context["def"]) {
                // line 66
                yield "    var ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["k"], "html", null, true);
                yield " = ";
                yield json_encode($context["def"]);
                yield ";
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['k'], $context['def'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "  </script>
";
        }
        // line 70
        yield "
";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 71, $this->source); })()), "jsFiles", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["js_uri"]) {
            // line 72
            yield "  <script type=\"text/javascript\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js_uri"], "html", null, true);
            yield "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['js_uri'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        yield "
";
        // line 76
        yield (isset($context["displayBackOfficeHeaderRendered"]) || array_key_exists("displayBackOfficeHeaderRendered", $context) ? $context["displayBackOfficeHeaderRendered"] : (function () { throw new RuntimeError('Variable "displayBackOfficeHeaderRendered" does not exist.', 76, $this->source); })());
        yield "
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
        return "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig";
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
        return array (  271 => 76,  268 => 74,  259 => 72,  255 => 71,  252 => 70,  248 => 68,  237 => 66,  233 => 65,  230 => 64,  228 => 63,  225 => 62,  214 => 60,  210 => 59,  207 => 58,  205 => 57,  200 => 50,  194 => 46,  190 => 45,  186 => 44,  182 => 43,  178 => 42,  174 => 41,  170 => 40,  166 => 39,  162 => 38,  158 => 37,  154 => 36,  150 => 35,  146 => 34,  142 => 33,  138 => 32,  134 => 31,  130 => 30,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  98 => 22,  94 => 21,  90 => 20,  86 => 19,  82 => 18,  78 => 17,  74 => 16,  64 => 13,  58 => 10,  54 => 9,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<meta charset=\"utf-8\">

<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"mobile-web-app-capable\" content=\"yes\">
<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ this.imgDir }}favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"{{ this.imgDir }}app_icon.png\" />

<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">
<title>{% if this.metaTitle %}{{ this.metaTitle }} • {% endif %}{{ this.shopName }}</title>

<script type=\"text/javascript\">
  var help_class_name = \x27{{ this.controllerName }}\x27;
  var iso_user = \x27{{ this.isoUser }}\x27;
  var lang_is_rtl = \x27{{ this.langIsRtl|intCast }}\x27;
  var full_language_code = \x27{{ this.fullLanguageCode }}\x27;
  var full_cldr_language_code = \x27{{ this.fullCldrLanguageCode }}\x27;
  var country_iso_code = \x27{{ this.countryIsoCode }}\x27;
  var _PS_VERSION_ = \x27{{ this.psVersion }}\x27;
  var roundMode = {{ this.roundMode|intCast }};
  var youEditFieldFor = \x27{{ this.editForLabel }}\x27;
  var new_order_msg = \x27{{ \x27A new order has been placed on your store.\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\x27;
  var order_number_msg = \x27{{ \x27Order number:\x27|trans({}, \x27Admin.Navigation.Header\x27) }} \x27;
  var total_msg = \x27{{ \x27Total:\x27|trans({}, \x27Admin.Global\x27) }} \x27;
  var from_msg = \x27{{ \x27From:\x27|trans({}, \x27Admin.Global\x27) }} \x27;
  var see_order_msg = \x27{{ \x27View this order\x27|trans({}, \x27Admin.Orderscustomers.Feature\x27) }}\x27;
  var new_customer_msg = \x27{{ \x27A new customer registered on your store.\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\x27;
  var customer_name_msg = \x27{{ \x27Registered on:\x27|trans({}, \x27Admin.Navigation.Header\x27) }} \x27;
  var new_msg = \x27{{ \x27A new message was posted on your store.\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\x27;
  var see_msg = \x27{{ \x27Read this message\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\x27;
  var token = \x27{{ this.legacyToken }}\x27;
  var token_admin_orders = tokenAdminOrders = \x27{{ legacy_admin_token(\x27AdminOrders\x27) }}\x27;
  var token_admin_customers = tokenAdminCustomers = \x27{{ legacy_admin_token(\x27AdminCustomers\x27) }}\x27;
  var token_admin_customer_threads = tokenAdminCustomerThreads = \x27{{ legacy_admin_token(\x27AdminCustomerThreads\x27) }}\x27;
  var currentIndex = \x27{{ this.currentIndex }}\x27;
  var employee_token = \x27{{ this.employeeToken }}\x27;
  var choose_language_translate = \x27{{ \x27Choose language:\x27|trans({}, \x27Admin.Actions\x27) }}\x27;
  var default_language = \x27{{ this.defaultLanguage|intCast }}\x27;
  var admin_modules_link = \x27{{ path(\x27admin_module_manage\x27) }}\x27;
  var admin_notification_get_link = \x27{{ path(\x27admin_common_notifications\x27) }}\x27;
  var admin_notification_push_link = adminNotificationPushLink = \x27{{ path(\x27admin_common_notifications_ack\x27) }}\x27;
  var update_success_msg = \x27{{ \x27Successful update\x27|trans({}, \x27Admin.Notifications.Success\x27) }}\x27;
  var search_product_msg = \x27{{ \x27Search for a product\x27|trans({}, \x27Admin.Orderscustomers.Feature\x27) }}\x27;
</script>

{# It is ok to load this file from new theme because the content needed is the same for default theme, so no need to generate two identical files #}
{{ include(\x27@AdminNewTheme/public/preload.html.twig\x27) }}

{# Many modules register on this hook to add their assets, they use addCss and/or addJs methods to do that
(even if this is supposed to be a display hook). These methods must be executed before we loop through the
list of assets which is why it must be executed before the loop, its content is temporarily stored to be
then correctly appended in the output (after the loops). This little hack is necessary to avoid a breaking change
and keep backward compatibility for this use case even if it\x27s not very clean. #}
{% set displayBackOfficeHeaderRendered = renderhook(\x27displayBackOfficeHeader\x27) %}

{% for css_uri, css_media in this.cssFiles %}
  <link href=\"{{ css_uri }}\" rel=\"stylesheet\" type=\"text/css\" media=\"{{ css_media }}\"/>
{% endfor %}

{% if this.jsDef %}
  <script type=\"text/javascript\">
    {% for k, def in this.jsDef %}
    var {{ k }} = {{ def|json_encode|raw }};
    {% endfor %}
  </script>
{% endif %}

{% for js_uri in this.jsFiles %}
  <script type=\"text/javascript\" src=\"{{ js_uri }}\"></script>
{% endfor %}

{# After some CSS/JS files inclusion (that can be added in \x27displayBackOfficeHeader\x27 hook), we need to display the html compiled that are returned for this hook. #}
{{ displayBackOfficeHeaderRendered|raw }}
", "@PrestaShop/Admin/Component/LegacyLayout/head_tag.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\head_tag.html.twig");
    }
}
