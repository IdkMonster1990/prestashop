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

/* @PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig */
class __TwigTemplate_ab9dab4f747a47056db2a52a6f22b3e8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig"));

        // line 5
        yield "<form id=\"header_search\" class=\"component bo_search_form\" method=\"post\" action=\"";
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        yield "\" role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 7
        if ((array_key_exists("showClearBtn", $context) && (isset($context["showClearBtn"]) || array_key_exists("showClearBtn", $context) ? $context["showClearBtn"] : (function () { throw new RuntimeError('Variable "showClearBtn" does not exist.', 7, $this->source); })()))) {
            // line 8
            yield "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 10
        yield "  <div class=\"form-group\">
    <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" />
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
          <i id=\"search_type_icon\" class=\"material-icons\">search</i>
        </button>
        <ul id=\"header_search_options\" class=\"dropdown-menu\">
          <li class=\"search-all search-option active\">
            <a href=\"#\" data-value=\"0\" data-placeholder=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">search</i> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"divider\"></li>
          <li class=\"search-book search-option\">
            <a href=\"#\" data-value=\"1\" data-placeholder=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, SKU, reference...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">store_mall_directory</i> ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-name search-option\">
            <a href=\"#\" data-value=\"2\" data-placeholder=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Email, name...", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">group</i> ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-customers-addresses search-option\">
            <a href=\"#\" data-value=\"6\" data-placeholder=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-desktop\">
              <i class=\"material-icons\">desktop_mac</i> ";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
          </li>
          <li class=\"search-orders search-option\">
            <a href=\"#\" data-value=\"3\" data-placeholder=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_basket</i> ";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-invoices search-option\">
            <a href=\"#\" data-value=\"4\" data-placeholder=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice Number", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">book</i> ";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Navigation.Menu"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-carts search-option\">
            <a href=\"#\" data-value=\"5\" data-placeholder=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">shopping_cart</i> ";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
          <li class=\"search-modules search-option\">
            <a href=\"#\" data-value=\"7\" data-placeholder=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
              <i class=\"material-icons\">extension</i> ";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "
            </a>
          </li>
        </ul>
      </div>
      ";
        // line 59
        if ((array_key_exists("showClearBtn", $context) && (isset($context["showClearBtn"]) || array_key_exists("showClearBtn", $context) ? $context["showClearBtn"] : (function () { throw new RuntimeError('Variable "showClearBtn" does not exist.', 59, $this->source); })()))) {
            // line 60
            yield "      <a href=\"#\" class=\"clear_search hide\"><i class=\"material-icons\">clear</i></a>
      ";
        }
        // line 62
        yield "      <input id=\"bo_query\" name=\"bo_query\" type=\"text\" class=\"form-control\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["boQuery"]) || array_key_exists("boQuery", $context) ? $context["boQuery"] : (function () { throw new RuntimeError('Variable "boQuery" does not exist.', 62, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
        yield "\" />
    </div>
  </div>
  <script>
    ";
        // line 66
        if ((array_key_exists("searchType", $context) && (isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 66, $this->source); })()))) {
            // line 67
            yield "    \$(function() {
      \$(\x27.search-option a[data-value=\x27 + ";
            // line 68
            yield (((($tmp = (isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 68, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield " + \x27]\x27).click();
    });
    ";
        }
        // line 71
        yield "  </script>
</form>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig";
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
        return array (  188 => 71,  182 => 68,  179 => 67,  177 => 66,  165 => 62,  161 => 60,  159 => 59,  151 => 54,  147 => 53,  140 => 49,  136 => 48,  129 => 44,  125 => 43,  118 => 39,  114 => 38,  108 => 35,  104 => 34,  97 => 30,  93 => 29,  86 => 25,  82 => 24,  75 => 20,  71 => 19,  60 => 10,  56 => 8,  54 => 7,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<form id=\"header_search\" class=\"component bo_search_form\" method=\"post\" action=\"{{ legacy_path(\x27AdminSearch\x27) }}\" role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  {% if showClearBtn is defined and showClearBtn %}
    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  {% endif %}
  <div class=\"form-group\">
    <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" />
    <div class=\"input-group\">
      <div class=\"input-group-btn\">
        <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
          <i id=\"search_type_icon\" class=\"material-icons\">search</i>
        </button>
        <ul id=\"header_search_options\" class=\"dropdown-menu\">
          <li class=\"search-all search-option active\">
            <a href=\"#\" data-value=\"0\" data-placeholder=\"{{ \x27What are you looking for?\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
              <i class=\"material-icons\">search</i> {{ \x27Everywhere\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</a>
          </li>
          <li class=\"divider\"></li>
          <li class=\"search-book search-option\">
            <a href=\"#\" data-value=\"1\" data-placeholder=\"{{ \x27Product name, SKU, reference...\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
              <i class=\"material-icons\">store_mall_directory</i> {{ \x27Catalog\x27|trans({}, \x27Admin.Navigation.Menu\x27) }}
            </a>
          </li>
          <li class=\"search-customers-name search-option\">
            <a href=\"#\" data-value=\"2\" data-placeholder=\"{{ \x27Email, name...\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
              <i class=\"material-icons\">group</i> {{ \x27Customers by name\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
            </a>
          </li>
          <li class=\"search-customers-addresses search-option\">
            <a href=\"#\" data-value=\"6\" data-placeholder=\"{{ \x27123.45.67.89\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-desktop\">
              <i class=\"material-icons\">desktop_mac</i> {{ \x27Customers by IP address\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</a>
          </li>
          <li class=\"search-orders search-option\">
            <a href=\"#\" data-value=\"3\" data-placeholder=\"{{ \x27Order ID\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
              <i class=\"material-icons\">shopping_basket</i> {{ \x27Orders\x27|trans({}, \x27Admin.Global\x27) }}
            </a>
          </li>
          <li class=\"search-invoices search-option\">
            <a href=\"#\" data-value=\"4\" data-placeholder=\"{{ \x27Invoice Number\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
              <i class=\"material-icons\">book</i> {{ \x27Invoices\x27|trans({}, \x27Admin.Navigation.Menu\x27) }}
            </a>
          </li>
          <li class=\"search-carts search-option\">
            <a href=\"#\" data-value=\"5\" data-placeholder=\"{{ \x27Cart ID\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
              <i class=\"material-icons\">shopping_cart</i> {{ \x27Carts\x27|trans({}, \x27Admin.Global\x27) }}
            </a>
          </li>
          <li class=\"search-modules search-option\">
            <a href=\"#\" data-value=\"7\" data-placeholder=\"{{ \x27Module name\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
              <i class=\"material-icons\">extension</i> {{ \x27Modules\x27|trans({}, \x27Admin.Global\x27) }}
            </a>
          </li>
        </ul>
      </div>
      {% if showClearBtn is defined and showClearBtn %}
      <a href=\"#\" class=\"clear_search hide\"><i class=\"material-icons\">clear</i></a>
      {% endif %}
      <input id=\"bo_query\" name=\"bo_query\" type=\"text\" class=\"form-control\" value=\"{{ boQuery }}\" placeholder=\"{{ \x27Search\x27|trans({}, \x27Admin.Actions\x27) }}\" aria-label=\"{{ \x27Search\x27|trans({}, \x27Admin.Actions\x27) }}\" />
    </div>
  </div>
  <script>
    {% if searchType is defined and searchType %}
    \$(function() {
      \$(\x27.search-option a[data-value=\x27 + {{ searchType ? 1 : 0 }} + \x27]\x27).click();
    });
    {% endif %}
  </script>
</form>
", "@PrestaShop/Admin/Component/LegacyLayout/search_form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\search_form.html.twig");
    }
}
