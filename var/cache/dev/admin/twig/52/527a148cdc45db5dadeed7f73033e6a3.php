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

/* @PrestaShop/Admin/Module/Includes/modal_confirm.html.twig */
class __TwigTemplate_c29cafa1050528b5fcf7aed788ac0a01 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig"));

        // line 5
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 5, $this->source); })()), "attributes", [], "any", false, false, false, 5), "urls", [], "any", false, false, false, 5)) >= 1)) {
            // line 6
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 6, $this->source); })()), "attributes", [], "any", false, false, false, 6), "urls", [], "any", false, false, false, 6));
            foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                // line 7
                yield "    ";
                if (CoreExtension::inFilter($context["module_action"], ["disable", "uninstall", "reset"])) {
                    // line 8
                    yield "      <div id=\"module-modal-confirm-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 8, $this->source); })()), "attributes", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
                    yield "-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                    yield "\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                ";
                    // line 14
                    if (($context["module_action"] == "disable")) {
                        // line 15
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Disable module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 17
                    yield "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 18
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Uninstall module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 20
                    yield "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 21
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset module?", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                ";
                    }
                    // line 23
                    yield "              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
                    // line 30
                    if (($context["module_action"] == "disable")) {
                        // line 31
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to disable %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 31, $this->source); })()), "attributes", [], "any", false, false, false, 31), "displayName", [], "any", false, false, false, 31)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 34
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your current settings will be saved, but the module will no longer be active.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                ";
                    }
                    // line 36
                    yield "                ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 37
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to uninstall %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 37, $this->source); })()), "attributes", [], "any", false, false, false, 37), "displayName", [], "any", false, false, false, 37)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  ";
                        // line 39
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 39, $this->source); })()), "attributes", [], "any", false, false, false, 39), "confirmUninstall", [], "any", false, false, false, 39), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 42
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will disable the module and delete all its files. For good.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"";
                        // line 45
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 45, $this->source); })()), "attributes", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45), "html", null, true);
                        yield "\">
                    ";
                        // line 46
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional: delete module folder after uninstall.", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                  </label>
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 50
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  </span>
                ";
                    }
                    // line 53
                    yield "                ";
                    if (($context["module_action"] == "reset")) {
                        // line 54
                        yield "                  ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You\x27re about to reset %moduleName% module.", ["%moduleName%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 54, $this->source); })()), "attributes", [], "any", false, false, false, 54), "displayName", [], "any", false, false, false, 54)], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <br>
                  ";
                        // line 57
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This will restore the defaults settings.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  <br>
                  <span class=\"italic red\">
                    ";
                        // line 60
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("This action cannot be undone.", [], "Admin.Modules.Notification"), "html", null, true);
                        yield "
                  </span>
                ";
                    }
                    // line 63
                    yield "              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
                    yield "\"/>
              ";
                    // line 67
                    if (($context["module_action"] == "disable")) {
                        // line 68
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 69
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 69, $this->source); })()), "attributes", [], "any", false, false, false, 69), "name", [], "any", false, false, false, 69), "html", null, true);
                        yield "\">
                  ";
                        // line 70
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, disable it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 73
                    yield "              ";
                    if (($context["module_action"] == "uninstall")) {
                        // line 74
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 75
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 75, $this->source); })()), "attributes", [], "any", false, false, false, 75), "name", [], "any", false, false, false, 75), "html", null, true);
                        yield "\">
                  ";
                        // line 76
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, uninstall it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 79
                    yield "              ";
                    if (($context["module_action"] == "reset")) {
                        // line 80
                        yield "                <a class=\"btn btn-primary uppercase module_action_modal_";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_action"], "html", null, true);
                        yield "\" href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["module_url"], "html", null, true);
                        yield "\"
                data-dismiss=\"modal\" data-tech-name=\"";
                        // line 81
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 81, $this->source); })()), "attributes", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
                        yield "\">
                  ";
                        // line 82
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, reset it", [], "Admin.Modules.Feature"), "html", null, true);
                        yield "
                </a>
              ";
                    }
                    // line 85
                    yield "            </div>
          </div>
        </div>
      </div>
    ";
                }
                // line 90
                yield "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['module_action'], $context['module_url'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
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
        return "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig";
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
        return array (  254 => 90,  247 => 85,  241 => 82,  237 => 81,  230 => 80,  227 => 79,  221 => 76,  217 => 75,  210 => 74,  207 => 73,  201 => 70,  197 => 69,  190 => 68,  188 => 67,  184 => 66,  179 => 63,  173 => 60,  167 => 57,  160 => 54,  157 => 53,  151 => 50,  144 => 46,  140 => 45,  134 => 42,  128 => 39,  122 => 37,  119 => 36,  114 => 34,  107 => 31,  105 => 30,  96 => 23,  90 => 21,  87 => 20,  81 => 18,  78 => 17,  72 => 15,  70 => 14,  58 => 8,  55 => 7,  50 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% if module.attributes.urls|length >= 1 %}
  {% for module_action, module_url in module.attributes.urls %}
    {% if module_action in [\x27disable\x27, \x27uninstall\x27, \x27reset\x27] %}
      <div id=\"module-modal-confirm-{{ module.attributes.name }}-{{ module_action }}\" class=\"modal modal-vcenter fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
          <!-- Modal content-->
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <h4 class=\"modal-title module-modal-title\">
                {% if module_action == \x27disable\x27 %}
                  {{ \x27Disable module?\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
                {% endif %}
                {% if module_action == \x27uninstall\x27 %}
                  {{ \x27Uninstall module?\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
                {% endif %}
                {% if module_action == \x27reset\x27 %}
                  {{ \x27Reset module?\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
                {% endif %}
              </h4>
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                <span aria-hidden=\"true\">&times;</span>
              </button>
            </div>
            <div class=\"modal-body\">
              <p>
                {% if module_action == \x27disable\x27 %}
                  {{ \x27You are about to disable %moduleName% module.\x27|trans({\x27%moduleName%\x27: module.attributes.displayName}, \x27Admin.Modules.Notification\x27) }}
                  <br>
                  <br>
                  {{ \x27Your current settings will be saved, but the module will no longer be active.\x27|trans({}, \x27Admin.Modules.Notification\x27) }}
                {% endif %}
                {% if module_action == \x27uninstall\x27 %}
                  {{ \x27You are about to uninstall %moduleName% module.\x27|trans({\x27%moduleName%\x27: module.attributes.displayName}, \x27Admin.Modules.Notification\x27) }}
                  <br>
                  {{ module.attributes.confirmUninstall }}
                  <br>
                  <br>
                  {{ \x27This will disable the module and delete all its files. For good.\x27|trans({}, \x27Admin.Modules.Notification\x27) }}
                  <br>
                  <label>
                    <input type=\"checkbox\" id=\"force_deletion\" name=\"force_deletion\" data-tech-name=\"{{ module.attributes.name }}\">
                    {{ \x27Optional: delete module folder after uninstall.\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
                  </label>
                  <br>
                  <span class=\"italic red\">
                    {{ \x27This action cannot be undone.\x27|trans({}, \x27Admin.Modules.Notification\x27) }}
                  </span>
                {% endif %}
                {% if module_action == \x27reset\x27 %}
                  {{ \"You\x27re about to reset %moduleName% module.\"|trans({\x27%moduleName%\x27: module.attributes.displayName}, \x27Admin.Modules.Notification\x27) }}
                  <br>
                  <br>
                  {{ \x27This will restore the defaults settings.\x27|trans({}, \x27Admin.Modules.Notification\x27) }}
                  <br>
                  <span class=\"italic red\">
                    {{ \x27This action cannot be undone.\x27|trans({}, \x27Admin.Modules.Notification\x27) }}
                  </span>
                {% endif %}
              </p>
            </div>
            <div class=\"modal-footer\">
              <input type=\"button\" class=\"btn btn-outline-secondary\" data-dismiss=\"modal\" value=\"{{ \x27Cancel\x27|trans({}, \x27Admin.Actions\x27) }}\"/>
              {% if module_action == \x27disable\x27 %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\"
                data-dismiss=\"modal\" data-tech-name=\"{{ module.attributes.name }}\">
                  {{ \x27Yes, disable it\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
                </a>
              {% endif %}
              {% if module_action == \x27uninstall\x27 %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\"
                data-dismiss=\"modal\" data-tech-name=\"{{ module.attributes.name }}\">
                  {{ \x27Yes, uninstall it\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
                </a>
              {% endif %}
              {% if module_action == \x27reset\x27 %}
                <a class=\"btn btn-primary uppercase module_action_modal_{{ module_action }}\" href=\"{{ module_url }}\"
                data-dismiss=\"modal\" data-tech-name=\"{{ module.attributes.name }}\">
                  {{ \x27Yes, reset it\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
                </a>
              {% endif %}
            </div>
          </div>
        </div>
      </div>
    {% endif %}
  {% endfor %}
{% endif %}
", "@PrestaShop/Admin/Module/Includes/modal_confirm.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_confirm.html.twig");
    }
}
