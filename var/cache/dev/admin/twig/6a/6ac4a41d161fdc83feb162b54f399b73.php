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

/* @PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig */
class __TwigTemplate_4220f209133cba83a52aa09b9476bb23 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig"));

        // line 5
        yield "<ul id=\"header-list\" class=\"header-list\">
  <li class=\"shopname\" data-mobile=\"true\" data-from=\"header-list\" data-target=\"menu\">
    ";
        // line 7
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 7, $this->source); })()), "shopList", [], "any", false, false, false, 7)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    <ul id=\"header_shop\" class=\"shop-state\">
      <li class=\"dropdown\">
        <span>";
            // line 10
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "shopList", [], "any", false, false, false, 10);
            yield "</span>
      </li>
    </ul>
    ";
        } else {
            // line 14
            yield "    <a id=\"header_shopname\" class=\"shop-state\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 14, $this->source); })()), "baseUrl", [], "any", false, false, false, 14), "html_attr");
            yield "\" target=\"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            yield "</span>
    </a>
    ";
        }
        // line 19
        yield "  </li>
</ul>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig";
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
        return array (  77 => 19,  71 => 16,  65 => 14,  58 => 10,  54 => 8,  52 => 7,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<ul id=\"header-list\" class=\"header-list\">
  <li class=\"shopname\" data-mobile=\"true\" data-from=\"header-list\" data-target=\"menu\">
    {% if this.shopList %}
    <ul id=\"header_shop\" class=\"shop-state\">
      <li class=\"dropdown\">
        <span>{{ this.shopList|raw }}</span>
      </li>
    </ul>
    {% else %}
    <a id=\"header_shopname\" class=\"shop-state\" href=\"{{ ps.baseUrl|escape(\x27html_attr\x27) }}\" target=\"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>{{ \x27View my store\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</span>
    </a>
    {% endif %}
  </li>
</ul>
", "@PrestaShop/Admin/Component/LegacyLayout/shop_list.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\shop_list.html.twig");
    }
}
