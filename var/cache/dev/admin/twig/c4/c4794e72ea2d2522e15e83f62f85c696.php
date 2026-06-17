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

/* @PrestaShop/Admin/Component/Layout/search_form.html.twig */
class __TwigTemplate_6292edd289f2b2a876e073d84b413574 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/search_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/search_form.html.twig"));

        // line 5
        yield "<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"";
        // line 8
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminSearch");
        yield "\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  ";
        // line 11
        if ((array_key_exists("showClearBtn", $context) && (isset($context["showClearBtn"]) || array_key_exists("showClearBtn", $context) ? $context["showClearBtn"] : (function () { throw new RuntimeError('Variable "showClearBtn" does not exist.', 11, $this->source); })()))) {
            // line 12
            yield "    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  ";
        }
        // line 14
        yield "  <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["boQuery"]) || array_key_exists("boQuery", $context) ? $context["boQuery"] : (function () { throw new RuntimeError('Variable "boQuery" does not exist.', 15, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search (e.g.: product reference, customer name…)", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searchbar", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" href=\"#\" data-value=\"0\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What are you looking for?", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Everywhere", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"1\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Product name, reference, etc.", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Catalog", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name"), "html", null, true);
        yield "\" href=\"#\" data-value=\"2\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by name", [], "Admin.Navigation.Header"), "html", null, true);
        yield " </a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by ip address"), "html", null, true);
        yield "\" href=\"#\" data-value=\"6\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("123.45.67.89", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customers", [], "Admin.Navigation.Header"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("by IP address", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"3\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Order ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Orders", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"4\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoice number", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invoices", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"5\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cart ID", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Carts", [], "Admin.Global"), "html", null, true);
        yield "</a>
        <a class=\"dropdown-item\" data-item=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "\" href=\"#\" data-value=\"7\" data-placeholder=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module name", [], "Admin.Navigation.Header"), "html", null, true);
        yield "\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Modules", [], "Admin.Global"), "html", null, true);
        yield "</a>
      </div>
      <button class=\"btn btn-secondary\" type=\"submit\"><span class=\"d-none\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("SEARCH", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
  \$(function(){
    ";
        // line 38
        if ((array_key_exists("searchType", $context) && (isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 38, $this->source); })()))) {
            // line 39
            yield "      \$(\x27.search-option a[data-value=\x27 + ";
            yield (((($tmp = (isset($context["searchType"]) || array_key_exists("searchType", $context) ? $context["searchType"] : (function () { throw new RuntimeError('Variable "searchType" does not exist.', 39, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0));
            yield " + \x27]\x27).click();
    ";
        }
        // line 41
        yield "      \$(\x27#bo_query\x27).one(\x27click\x27, function() {
        \$(this).closest(\x27form\x27).removeClass(\x27collapsed\x27);
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
        return "@PrestaShop/Admin/Component/Layout/search_form.html.twig";
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
        return array (  176 => 41,  170 => 39,  168 => 38,  158 => 31,  149 => 29,  141 => 28,  133 => 27,  125 => 26,  113 => 25,  101 => 24,  93 => 23,  84 => 21,  78 => 18,  68 => 15,  65 => 14,  61 => 12,  59 => 11,  53 => 8,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"{{ legacy_path(\x27AdminSearch\x27) }}\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
  {% if showClearBtn is defined and showClearBtn %}
    <a href=\"#\" class=\"clear_search hide\"><i class=\"icon-remove\"></i></a>
  {% endif %}
  <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"{{ boQuery }}\" placeholder=\"{{ \x27Search (e.g.: product reference, customer name…)\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" aria-label=\"{{ \x27Searchbar\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        {{ \x27Everywhere\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"{{ \x27Everywhere\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" href=\"#\" data-value=\"0\" data-placeholder=\"{{ \x27What are you looking for?\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> {{ \x27Everywhere\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"{{ \x27Catalog\x27|trans({}, \x27Admin.Global\x27) }}\" href=\"#\" data-value=\"1\" data-placeholder=\"{{ \x27Product name, reference, etc.\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> {{ \x27Catalog\x27|trans({}, \x27Admin.Global\x27) }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ \x27Customers\x27|trans({}, \x27Admin.Navigation.Header\x27) }} {{ \x27by name\x27|trans }}\" href=\"#\" data-value=\"2\" data-placeholder=\"{{ \x27Name\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> {{ \x27Customers\x27|trans({}, \x27Admin.Navigation.Header\x27) }} {{ \x27by name\x27|trans({}, \x27Admin.Navigation.Header\x27) }} </a>
        <a class=\"dropdown-item\" data-item=\"{{ \x27Customers\x27|trans({}, \x27Admin.Navigation.Header\x27) }} {{ \x27by ip address\x27|trans }}\" href=\"#\" data-value=\"6\" data-placeholder=\"{{ \x27123.45.67.89\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i>{{ \x27Customers\x27|trans({}, \x27Admin.Navigation.Header\x27) }} {{ \x27by IP address\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ \x27Orders\x27|trans({}, \x27Admin.Global\x27) }}\" href=\"#\" data-value=\"3\" data-placeholder=\"{{ \x27Order ID\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> {{ \x27Orders\x27|trans({}, \x27Admin.Global\x27) }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ \x27Invoices\x27|trans({}, \x27Admin.Global\x27) }}\" href=\"#\" data-value=\"4\" data-placeholder=\"{{ \x27Invoice number\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> {{ \x27Invoices\x27|trans({}, \x27Admin.Global\x27) }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ \x27Carts\x27|trans({}, \x27Admin.Global\x27) }}\" href=\"#\" data-value=\"5\" data-placeholder=\"{{ \x27Cart ID\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> {{ \x27Carts\x27|trans({}, \x27Admin.Global\x27) }}</a>
        <a class=\"dropdown-item\" data-item=\"{{ \x27Modules\x27|trans({}, \x27Admin.Global\x27) }}\" href=\"#\" data-value=\"7\" data-placeholder=\"{{ \x27Module name\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> {{ \x27Modules\x27|trans({}, \x27Admin.Global\x27) }}</a>
      </div>
      <button class=\"btn btn-secondary\" type=\"submit\"><span class=\"d-none\">{{ \x27SEARCH\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
  \$(function(){
    {% if searchType is defined and searchType %}
      \$(\x27.search-option a[data-value=\x27 + {{ searchType ? 1 : 0 }} + \x27]\x27).click();
    {% endif %}
      \$(\x27#bo_query\x27).one(\x27click\x27, function() {
        \$(this).closest(\x27form\x27).removeClass(\x27collapsed\x27);
      });
    });
</script>
", "@PrestaShop/Admin/Component/Layout/search_form.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\search_form.html.twig");
    }
}
