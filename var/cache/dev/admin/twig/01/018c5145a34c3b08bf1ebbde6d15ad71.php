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

/* @PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig */
class __TwigTemplate_01a62ae596c4564b58d0a95d59337920 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig"));

        // line 5
        yield "<div class=\"component\" id=\"header-employee-container\">
  <div class=\"dropdown employee-dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">account_circle</i>
      </div>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"employee-wrapper-avatar\">
          <div class=\"employee-top\">
            <span class=\"employee-avatar\">
              <img class=\"avatar rounded-circle\" src=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "employee", [], "any", false, false, false, 14), "imageUrl", [], "any", false, false, false, 14), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "employee", [], "any", false, false, false, 14), "firstName", [], "any", false, false, false, 14), "html", null, true);
        yield "\" />
            </span>
            <span class=\"employee_profile\">
              ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Welcome back %name%", ["%name%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "employee", [], "any", false, false, false, 17), "firstName", [], "any", false, false, false, 17)], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </span>
          </div>

          <a class=\"dropdown-item employee-link profile-link\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_employees_edit", ["employeeId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 21, $this->source); })()), "employee", [], "any", false, false, false, 21), "id", [], "any", false, false, false, 21)]), "html", null, true);
        yield "\">
            <i class=\"material-icons\">edit</i>
            <span>
              ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your profile", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
            </span>
          </a>
        </div>

        <p class=\"divider\"></p>

        ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["displayBackOfficeEmployeeMenu"]) || array_key_exists("displayBackOfficeEmployeeMenu", $context) ? $context["displayBackOfficeEmployeeMenu"] : (function () { throw new RuntimeError('Variable "displayBackOfficeEmployeeMenu" does not exist.', 31, $this->source); })()));
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
            // line 32
            yield "          ";
            $context["menuItemProperties"] = CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getProperties", [], "any", false, false, false, 32);
            // line 33
            yield "          <a class=\"dropdown-item ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getClass", [], "any", false, false, false, 33), "html", null, true);
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 33, $this->source); })()), "link", [], "any", false, false, false, 33), "html", null, true);
            yield "\" ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 33, $this->source); })()), "isExternalLink", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " target=\"_blank\"";
            }
            yield " rel=\"noopener noreferrer nofollow\">
            ";
            // line 34
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["menuItemProperties"] ?? null), "icon", [], "any", true, true, false, 34)) {
                // line 35
                yield "              <i class=\"material-icons\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuItemProperties"]) || array_key_exists("menuItemProperties", $context) ? $context["menuItemProperties"] : (function () { throw new RuntimeError('Variable "menuItemProperties" does not exist.', 35, $this->source); })()), "icon", [], "any", false, false, false, 35), "html", null, true);
                yield "</i>
            ";
            }
            // line 37
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["menuItem"], "getContent", [], "any", false, false, false, 37), "html", null, true);
            yield "
          </a>
          ";
            // line 39
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "            <p class=\"divider\"></p>
          ";
            }
            // line 42
            yield "        ";
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
        // line 43
        yield "
        <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_logout");
        yield "\">
          <i class=\"material-icons d-lg-none\">power_settings_new</i>
          <span>
            ";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "Admin.Navigation.Header"), "html", null, true);
        yield "
          </span>
        </a>
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
        return "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig";
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
        return array (  164 => 47,  158 => 44,  155 => 43,  141 => 42,  137 => 40,  135 => 39,  129 => 37,  123 => 35,  121 => 34,  110 => 33,  107 => 32,  90 => 31,  80 => 24,  74 => 21,  67 => 17,  59 => 14,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"component\" id=\"header-employee-container\">
  <div class=\"dropdown employee-dropdown\">
      <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
        <i class=\"material-icons\">account_circle</i>
      </div>
      <div class=\"dropdown-menu dropdown-menu-right\">
        <div class=\"employee-wrapper-avatar\">
          <div class=\"employee-top\">
            <span class=\"employee-avatar\">
              <img class=\"avatar rounded-circle\" src=\"{{ this.employee.imageUrl }}\" alt=\"{{ this.employee.firstName }}\" />
            </span>
            <span class=\"employee_profile\">
              {{ \x27Welcome back %name%\x27|trans({\x27%name%\x27: this.employee.firstName}, \x27Admin.Navigation.Header\x27) }}
            </span>
          </div>

          <a class=\"dropdown-item employee-link profile-link\" href=\"{{ path(\x27admin_employees_edit\x27, {employeeId: this.employee.id}) }}\">
            <i class=\"material-icons\">edit</i>
            <span>
              {{ \x27Your profile\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
            </span>
          </a>
        </div>

        <p class=\"divider\"></p>

        {% for menuItem in displayBackOfficeEmployeeMenu %}
          {% set menuItemProperties = menuItem.getProperties %}
          <a class=\"dropdown-item {{ menuItem.getClass }}\" href=\"{{ menuItemProperties.link }}\" {% if menuItemProperties.isExternalLink %} target=\"_blank\"{% endif %} rel=\"noopener noreferrer nofollow\">
            {% if menuItemProperties.icon is defined %}
              <i class=\"material-icons\">{{ menuItemProperties.icon }}</i>
            {% endif %}
            {{ menuItem.getContent }}
          </a>
          {% if loop.last %}
            <p class=\"divider\"></p>
          {% endif %}
        {% endfor %}

        <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"{{ path(\x27admin_logout\x27) }}\">
          <i class=\"material-icons d-lg-none\">power_settings_new</i>
          <span>
            {{ \x27Sign out\x27|trans({}, \x27Admin.Navigation.Header\x27) }}
          </span>
        </a>
      </div>
  </div>
</div>
", "@PrestaShop/Admin/Component/Layout/employee_dropdown.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\employee_dropdown.html.twig");
    }
}
