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

/* @PrestaShop/Admin/Common/javascript_pagination.html.twig */
class __TwigTemplate_eef80197e3f027d2edbb9841199a3977 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/javascript_pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/javascript_pagination.html.twig"));

        // line 5
        yield "
";
        // line 10
        yield "<ul class=\"pagination mb-0\">
  <li class=\"page-item first disabled\">
    <button type=\"button\" class=\"page-link first\" data-page=\"1\">1</button>
  </li>
  <li class=\"page-item previous disabled\">
    <button type=\"button\" class=\"page-link previous\" aria-label=\"Previous\"><span class=\"sr-only\">Previous</span></button>
  </li>
  <li class=\"page-item current active\">
    <label>
      <input
        name=\"paginator-jump-page\"
        class=\"jump-to-page\"
        type=\"text\"
        value=\"1\"
      />
    </label>
  </li>
  <li class=\"page-item next\">
    <button
      type=\"button\"
      class=\"page-link next\"
      aria-label=\"Next\"
      data-page=\"2\">
      <span class=\"sr-only\">Next</span>
    </button>
  </li>
  <li class=\"page-item last\">
    <button type=\"button\" class=\"page-link last\"></button>
  </li>
</ul>
<div class=\"mx-3\">
  <label class=\"col-form-label\" id=\"pagination-info\"
         data-pagination-info=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => "%from%", "%to%" => "%to%", "%total%" => "%total%", "%current_page%" => "%current_page%", "%page_count%" => "%page_count%"], "Admin.Catalog.Feature"), "html", null, true);
        // line 48
        yield "\"
  >
  </label>
</div>
<div class=\"mx-3\">
  <div class=\"form-group row mb-0\">
    <label for=\"paginator-limit\" class=\"col-form-label mr-2\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</label>
    <div>
      <select name=\"paginator-limit\" id=\"paginator-limit\" class=\"pagination-link custom-select\">
        ";
        // line 57
        if (!CoreExtension::inFilter((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 57, $this->source); })()), (isset($context["limitChoices"]) || array_key_exists("limitChoices", $context) ? $context["limitChoices"] : (function () { throw new RuntimeError('Variable "limitChoices" does not exist.', 57, $this->source); })()))) {
            // line 58
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "\" selected=\"selected\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 58, $this->source); })()), "html", null, true);
            yield "</option>
        ";
        }
        // line 60
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["limitChoices"]) || array_key_exists("limitChoices", $context) ? $context["limitChoices"] : (function () { throw new RuntimeError('Variable "limitChoices" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["limitChoice"]) {
            // line 61
            yield "          <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitChoice"], "html", null, true);
            yield "\" ";
            if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 61, $this->source); })()) == $context["limitChoice"])) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limitChoice"], "html", null, true);
            yield "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limitChoice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        yield "      </select>
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
        return "@PrestaShop/Admin/Common/javascript_pagination.html.twig";
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
        return array (  131 => 63,  116 => 61,  111 => 60,  103 => 58,  101 => 57,  95 => 54,  87 => 48,  85 => 42,  51 => 10,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{#
  Wrap this template in div and pass its id to paginator component in js side.
  Related js component: /admin-dev/themes/new-theme/js/components/pagination/dynamic-paginator.js
#}
<ul class=\"pagination mb-0\">
  <li class=\"page-item first disabled\">
    <button type=\"button\" class=\"page-link first\" data-page=\"1\">1</button>
  </li>
  <li class=\"page-item previous disabled\">
    <button type=\"button\" class=\"page-link previous\" aria-label=\"Previous\"><span class=\"sr-only\">Previous</span></button>
  </li>
  <li class=\"page-item current active\">
    <label>
      <input
        name=\"paginator-jump-page\"
        class=\"jump-to-page\"
        type=\"text\"
        value=\"1\"
      />
    </label>
  </li>
  <li class=\"page-item next\">
    <button
      type=\"button\"
      class=\"page-link next\"
      aria-label=\"Next\"
      data-page=\"2\">
      <span class=\"sr-only\">Next</span>
    </button>
  </li>
  <li class=\"page-item last\">
    <button type=\"button\" class=\"page-link last\"></button>
  </li>
</ul>
<div class=\"mx-3\">
  <label class=\"col-form-label\" id=\"pagination-info\"
         data-pagination-info=\"{{ \x27Viewing %from%-%to% on %total% (page %current_page% / %page_count%)\x27|trans({
           \x27%from%\x27: \x27%from%\x27,
           \x27%to%\x27: \x27%to%\x27,
           \x27%total%\x27: \x27%total%\x27,
           \x27%current_page%\x27: \x27%current_page%\x27,
           \x27%page_count%\x27: \x27%page_count%\x27,
         }, \x27Admin.Catalog.Feature\x27) }}\"
  >
  </label>
</div>
<div class=\"mx-3\">
  <div class=\"form-group row mb-0\">
    <label for=\"paginator-limit\" class=\"col-form-label mr-2\">{{ \x27Items per page:\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</label>
    <div>
      <select name=\"paginator-limit\" id=\"paginator-limit\" class=\"pagination-link custom-select\">
        {% if limit not in limitChoices %}
          <option value=\"{{ limit }}\" selected=\"selected\">{{ limit }}</option>
        {% endif %}
        {% for limitChoice in limitChoices %}
          <option value=\"{{ limitChoice }}\" {% if limit == limitChoice %}selected=\"selected\"{% endif %}>{{ limitChoice }}</option>
        {% endfor %}
      </select>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Common/javascript_pagination.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\javascript_pagination.html.twig");
    }
}
