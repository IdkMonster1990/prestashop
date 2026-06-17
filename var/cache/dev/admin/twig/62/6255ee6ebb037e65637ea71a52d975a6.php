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

/* @PrestaShop/Admin/Common/pagination.html.twig */
class __TwigTemplate_49af6be48aae94a467b663b8ff7be976 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/pagination.html.twig"));

        // line 5
        yield "<div class=\"row justify-content-center pagination-block\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item ";
        // line 7
        if ((($tmp = (isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" ";
        // line 8
        if ((($tmp = (isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 8, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["first_url"]) || array_key_exists("first_url", $context) ? $context["first_url"] : (function () { throw new RuntimeError('Variable "first_url" does not exist.', 8, $this->source); })()), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield ">1</a>
    </li>
    <li class=\"page-item previous ";
        // line 10
        if ((($tmp = (isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 10, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" data-role=\"previous-page-link\" aria-label=\"Previous\" ";
        // line 11
        if ((($tmp = (isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 11, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["previous_url"]) || array_key_exists("previous_url", $context) ? $context["previous_url"] : (function () { throw new RuntimeError('Variable "previous_url" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield "><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" psurl=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["jump_page_url"]) || array_key_exists("jump_page_url", $context) ? $context["jump_page_url"] : (function () { throw new RuntimeError('Variable "jump_page_url" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" psmax=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" pslimit=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" aria-label=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Enter page number and press enter", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "\"/>
    </li>
    <li class=\"page-item next ";
        // line 16
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 16, $this->source); })()) != false))) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" data-role=\"next-page-link\" aria-label=\"Next\" id=\"pagination_next_url\" ";
        // line 17
        if ((array_key_exists("next_url", $context) && ((isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 17, $this->source); })()) != false))) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["next_url"]) || array_key_exists("next_url", $context) ? $context["next_url"] : (function () { throw new RuntimeError('Variable "next_url" does not exist.', 17, $this->source); })()), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield "><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item ";
        // line 19
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 19, $this->source); })()) != false))) {
        } else {
            yield "disabled";
        }
        yield "\">
      <a class=\"page-link\" ";
        // line 20
        if ((array_key_exists("last_url", $context) && ((isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 20, $this->source); })()) != false))) {
            yield "href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_url"]) || array_key_exists("last_url", $context) ? $context["last_url"] : (function () { throw new RuntimeError('Variable "last_url" does not exist.', 20, $this->source); })()), "html", null, true);
            yield "\"";
        } else {
            yield "nohref";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Viewing %from%-%to% on %total% (page %current_page% / %page_count%)", ["%from%" => (        // line 26
(isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 26, $this->source); })()) + 1), "%to%" => min((        // line 27
(isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 27, $this->source); })()) + 1), (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 27, $this->source); })())), "%total%" =>         // line 28
(isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 28, $this->source); })()), "%current_page%" =>         // line 29
(isset($context["current_page"]) || array_key_exists("current_page", $context) ? $context["current_page"] : (function () { throw new RuntimeError('Variable "current_page" does not exist.', 29, $this->source); })()), "%page_count%" =>         // line 30
(isset($context["page_count"]) || array_key_exists("page_count", $context) ? $context["page_count"] : (function () { throw new RuntimeError('Variable "page_count" does not exist.', 30, $this->source); })())], "Admin.Catalog.Feature"), "html", null, true);
        // line 31
        yield "
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Items per page:", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["changeLimitUrl"]) || array_key_exists("changeLimitUrl", $context) ? $context["changeLimitUrl"] : (function () { throw new RuntimeError('Variable "changeLimitUrl" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "\" class=\"pagination-link custom-select\">
          ";
        // line 39
        if (!CoreExtension::inFilter((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 39, $this->source); })()), (isset($context["limit_choices"]) || array_key_exists("limit_choices", $context) ? $context["limit_choices"] : (function () { throw new RuntimeError('Variable "limit_choices" does not exist.', 39, $this->source); })()))) {
            // line 40
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "\" selected=\"selected\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 40, $this->source); })()), "html", null, true);
            yield "</option>
          ";
        }
        // line 42
        yield "          ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["limit_choices"]) || array_key_exists("limit_choices", $context) ? $context["limit_choices"] : (function () { throw new RuntimeError('Variable "limit_choices" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["limit_choice"]) {
            // line 43
            yield "            <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit_choice"], "html", null, true);
            yield "\" ";
            if (((isset($context["limit"]) || array_key_exists("limit", $context) ? $context["limit"] : (function () { throw new RuntimeError('Variable "limit" does not exist.', 43, $this->source); })()) == $context["limit_choice"])) {
                yield "selected=\"selected\"";
            }
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["limit_choice"], "html", null, true);
            yield "</option>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['limit_choice'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "        </select>
      </div>
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
        return "@PrestaShop/Admin/Common/pagination.html.twig";
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
        return array (  196 => 45,  181 => 43,  176 => 42,  168 => 40,  166 => 39,  162 => 38,  157 => 36,  150 => 31,  148 => 30,  147 => 29,  146 => 28,  145 => 27,  144 => 26,  143 => 25,  127 => 20,  120 => 19,  109 => 17,  102 => 16,  89 => 14,  77 => 11,  70 => 10,  59 => 8,  52 => 7,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"row justify-content-center pagination-block\">
  <ul class=\"pagination mb-0\">
    <li class=\"page-item {% if first_url %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" {% if first_url %}href=\"{{ first_url }}\"{% else %}nohref{% endif %}>1</a>
    </li>
    <li class=\"page-item previous {% if previous_url %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" data-role=\"previous-page-link\" aria-label=\"Previous\" {% if previous_url %}href=\"{{ previous_url }}\"{% else %}nohref{% endif %}><span class=\"sr-only\">Previous</span></a>
    </li>
    <li class=\"page-item active\">
      <input name=\"paginator_jump_page\" class=\"jump-to-page\" type=\"text\" value=\"{{ current_page }}\" psurl=\"{{ jump_page_url }}\" psmax=\"{{ page_count }}\" pslimit=\"{{ limit }}\" aria-label=\"{{ \x27Enter page number and press enter\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}\"/>
    </li>
    <li class=\"page-item next {% if next_url is defined and next_url != false %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" data-role=\"next-page-link\" aria-label=\"Next\" id=\"pagination_next_url\" {% if next_url is defined and next_url != false %}href=\"{{ next_url }}\"{% else %}nohref{% endif %}><span class=\"sr-only\">Next</span></a>
    </li>
    <li class=\"page-item {% if last_url is defined and last_url != false %}{% else %}disabled{% endif %}\">
      <a class=\"page-link\" {% if last_url is defined and last_url != false %}href=\"{{ last_url }}\"{% else %}nohref{% endif %}>{{ page_count }}</a>
    </li>
  </ul>
  <div class=\"mx-3\">
    <label class=\"col-form-label\">
      {{ \x27Viewing %from%-%to% on %total% (page %current_page% / %page_count%)\x27|trans({
        \x27%from%\x27: from + 1,
        \x27%to%\x27: min(to + 1, total),
        \x27%total%\x27: total,
        \x27%current_page%\x27: current_page,
        \x27%page_count%\x27: page_count,
      }, \x27Admin.Catalog.Feature\x27) }}
    </label>
  </div>
  <div class=\"mx-3\">
    <div class=\"form-group row mb-0\">
      <label for=\"paginator_select_page_limit\" class=\"col-form-label mr-2\">{{ \x27Items per page:\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</label>
      <div>
        <select name=\"paginator_select_page_limit\" id=\"paginator_select_page_limit\" psurl=\"{{ changeLimitUrl }}\" class=\"pagination-link custom-select\">
          {% if limit not in limit_choices %}
            <option value=\"{{ limit }}\" selected=\"selected\">{{ limit }}</option>
          {% endif %}
          {% for limit_choice in limit_choices %}
            <option value=\"{{ limit_choice }}\" {% if limit == limit_choice %}selected=\"selected\"{% endif %}>{{ limit_choice }}</option>
          {% endfor %}
        </select>
      </div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Common/pagination.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\pagination.html.twig");
    }
}
