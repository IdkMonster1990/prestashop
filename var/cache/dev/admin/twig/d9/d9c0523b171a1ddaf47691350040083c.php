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

/* @PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig */
class __TwigTemplate_fdda2020075e80b8daa5e9e87820cfd3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig"));

        // line 5
        yield "<ul id=\"header_employee_box\" class=\"component\">
  <li id=\"employee_infos\" class=\"dropdown\">
    <a href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 7, $this->source); })()), "employee", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7)]), "html", null, true);
        yield "\"
       class=\"employee_name dropdown-toggle\"
       data-toggle=\"dropdown\"
    >
      <i class=\"material-icons\">account_circle</i>
    </a>
    <ul id=\"employee_links\" class=\"dropdown-menu dropdown-menu-right\">
      <li class=\"employee-wrapper-avatar\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">
              <span class=\"employee_avatar\">
                <img class=\"imgm img-thumbnail\" alt=\"\" src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "employee", [], "any", false, false, false, 16), "imageUrl", [], "any", false, false, false, 16), "html", null, true);
        yield "\" width=\"60\" height=\"60\" />
              </span>
      </li>
      <li class=\"text-left text-nowrap username\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "employee", [], "any", false, false, false, 19), "firstName", [], "any", false, false, false, 19)], "Admin.Navigation.Header"), "html", null, true);
        yield "</li>
      <li class=\"employee-wrapper-profile\"><a class=\"admin-link\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 20, $this->source); })()), "employee", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\"><i class=\"material-icons\">edit</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a></li>
      <li class=\"divider\"></li>

      ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["displayBackOfficeEmployeeMenu"]) || array_key_exists("displayBackOfficeEmployeeMenu", $context) ? $context["displayBackOfficeEmployeeMenu"] : (function () { throw new RuntimeError('Variable "displayBackOfficeEmployeeMenu" does not exist.', 23, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 24
            yield "        ";
            $context["menuItemProperties"] = CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 24);
            // line 25
            yield "        <li class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
          <a class=\"dropdown-item\" href=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 26, $this->source); })()), "link", [], "any", false, false, false, 26), "html", null, true);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 26, $this->source); })()), "isExternalLink", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " target=\"_blank\"";
            }
            yield " rel=\"noopener noreferrer nofollow\">
            ";
            // line 27
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 27)) {
                // line 28
                yield "              <i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 28, $this->source); })()), "icon", [], "any", false, false, false, 28), "html", null, true);
                yield "</i>
            ";
            }
            // line 30
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 30), "html", null, true);
            yield "
          </a>
        </li>
        ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "          <p class=\"divider\"></p>
        ";
            }
            // line 36
            yield "      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "
      <li class=\"signout text-center\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\" data-after=\"true\"><a id=\"header_logout\" href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        yield "\"><i class=\"material-icons visible-xs\">power_settings_new</i> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        yield "</a></li>
    </ul>
  </li>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig";
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
        return array (  153 => 38,  150 => 37,  136 => 36,  132 => 34,  130 => 33,  123 => 30,  117 => 28,  115 => 27,  107 => 26,  102 => 25,  99 => 24,  82 => 23,  74 => 20,  70 => 19,  64 => 16,  52 => 7,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<ul id=\"header_employee_box\" class=\"component\">
  <li id=\"employee_infos\" class=\"dropdown\">
    <a href=\"{{ path(\x27admin_employees_edit\x27, {employeeId: this.employee.id}) }}\"
       class=\"employee_name dropdown-toggle\"
       data-toggle=\"dropdown\"
    >
      <i class=\"material-icons\">account_circle</i>
    </a>
    <ul id=\"employee_links\" class=\"dropdown-menu dropdown-menu-right\">
      <li class=\"employee-wrapper-avatar\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">
              <span class=\"employee_avatar\">
                <img class=\"imgm img-thumbnail\" alt=\"\" src=\"{{ this.employee.imageUrl }}\" width=\"60\" height=\"60\" />
              </span>
      </li>
      <li class=\"text-left text-nowrap username\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\">{{ \x27Welcome back %name%\x27|trans({\x27%name%\x27: this.employee.firstName}, \x27Admin.Navigation.Header\x27) }}</li>
      <li class=\"employee-wrapper-profile\"><a class=\"admin-link\" href=\"{{ path(\x27admin_employees_edit\x27, {employeeId: this.employee.id}) }}\"><i class=\"material-icons\">edit</i> {{ \x27Your profile\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</a></li>
      <li class=\"divider\"></li>

      {% for menuItem in displayBackOfficeEmployeeMenu %}
        {% set menuItemProperties = menuItem.getProperties %}
        <li class=\"{{ menuItem.getClass }}\">
          <a class=\"dropdown-item\" href=\"{{ menuItemProperties.link }}\" {% if menuItemProperties.isExternalLink %} target=\"_blank\"{% endif %} rel=\"noopener noreferrer nofollow\">
            {% if menuItemProperties.icon is defined %}
              <i class=\"material-icons\">{{ menuItemProperties.icon }}</i>
            {% endif %}
            {{ menuItem.getContent }}
          </a>
        </li>
        {% if loop.last %}
          <p class=\"divider\"></p>
        {% endif %}
      {% endfor %}

      <li class=\"signout text-center\" data-mobile=\"true\" data-from=\"employee_links\" data-target=\"menu\" data-after=\"true\"><a id=\"header_logout\" href=\"{{ path(\x27admin_logout\x27) }}\"><i class=\"material-icons visible-xs\">power_settings_new</i> {{ \x27Sign out\x27|trans({}, \x27Admin.Navigation.Header\x27) }}</a></li>
    </ul>
  </li>
</ul>
", "@PrestaShop/Admin/Component/LegacyLayout/employee_dropdown.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\employee_dropdown.html.twig");
    }
}
