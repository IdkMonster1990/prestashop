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

/* @PrestaShop/Admin/Module/Includes/action_menu.html.twig */
class __TwigTemplate_3cde1fd492703cab8d371fa781892e76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig"));

        // line 5
        yield "
 <div class=\"btn-group module-actions\">
  ";
        // line 7
        if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 7, $this->source); })()), "attributes", [], "any", false, false, false, 7), "urls", [], "any", false, false, false, 7))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 8
            yield "    ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_button.html.twig", ["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 9
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 9, $this->source); })()), "attributes", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "classes_form" => "btn-group form-action-button", "classes" => "btn btn-primary-reverse btn-outline-secondary", "url" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 12
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 12, $this->source); })()), "attributes", [], "any", false, false, false, 12), "urls", [], "any", false, false, false, 12), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 12, $this->source); })()), "attributes", [], "any", false, false, false, 12), "url_active", [], "any", false, false, false, 12), [], "array", false, false, false, 12), "action" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 13
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 13, $this->source); })()), "attributes", [], "any", false, false, false, 13), "url_active", [], "any", false, false, false, 13), "label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 14
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 14, $this->source); })()), "attributes", [], "any", false, false, false, 14), "urls_labels", [], "any", false, false, false, 14), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 14, $this->source); })()), "attributes", [], "any", false, false, false, 14), "url_active", [], "any", false, false, false, 14), [], "array", false, false, false, 14), "upload_url" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,             // line 15
($context["module"] ?? null), "attributes", [], "any", false, true, false, 15), "upload_url", [], "any", true, true, false, 15)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 15, $this->source); })()), "attributes", [], "any", false, false, false, 15), "upload_url", [], "any", false, false, false, 15), null)) : (null))]);
            // line 16
            yield "
    ";
            // line 17
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 17, $this->source); })()), "attributes", [], "any", false, false, false, 17), "urls", [], "any", false, false, false, 17)) > 1)) {
                // line 18
                yield "        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">";
                // line 22
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Toggle dropdown", [], "Admin.Modules.Feature"), "html", null, true);
                yield "</span>
        <div class=\"dropdown-menu\">
          ";
                // line 24
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 24, $this->source); })()), "attributes", [], "any", false, false, false, 24), "urls", [], "any", false, false, false, 24));
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
                foreach ($context['_seq'] as $context["module_action"] => $context["module_url"]) {
                    // line 25
                    yield "            ";
                    if (($context["module_action"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 25, $this->source); })()), "attributes", [], "any", false, false, false, 25), "url_active", [], "any", false, false, false, 25))) {
                        // line 26
                        yield "                <li>
                    ";
                        // line 27
                        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Module/Includes/action_button.html.twig", ["name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 28
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 28, $this->source); })()), "attributes", [], "any", false, false, false, 28), "name", [], "any", false, false, false, 28), "classes" => "dropdown-item", "url" =>                         // line 30
$context["module_url"], "action" =>                         // line 31
$context["module_action"], "label" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 32
(isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 32, $this->source); })()), "attributes", [], "any", false, false, false, 32), "urls_labels", [], "any", false, false, false, 32), $context["module_action"], [], "array", false, false, false, 32), "upload_url" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                         // line 33
($context["module"] ?? null), "attributes", [], "any", false, true, false, 33), "upload_url", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["module"]) || array_key_exists("module", $context) ? $context["module"] : (function () { throw new RuntimeError('Variable "module" does not exist.', 33, $this->source); })()), "attributes", [], "any", false, false, false, 33), "upload_url", [], "any", false, false, false, 33), null)) : (null))]);
                        // line 34
                        yield "
                </li>
            ";
                    }
                    // line 37
                    yield "          ";
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
                unset($context['_seq'], $context['module_action'], $context['module_url'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                yield "        </div>
    ";
            }
            // line 40
            yield "  ";
        }
        // line 41
        yield "</div>
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
        return "@PrestaShop/Admin/Module/Includes/action_menu.html.twig";
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
        return array (  134 => 41,  131 => 40,  127 => 38,  113 => 37,  108 => 34,  106 => 33,  105 => 32,  104 => 31,  103 => 30,  102 => 28,  101 => 27,  98 => 26,  95 => 25,  78 => 24,  73 => 22,  67 => 18,  65 => 17,  62 => 16,  60 => 15,  59 => 14,  58 => 13,  57 => 12,  56 => 9,  54 => 8,  52 => 7,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

 <div class=\"btn-group module-actions\">
  {% if module.attributes.urls|length %}
    {{ include(\x27@PrestaShop/Admin/Module/Includes/action_button.html.twig\x27, {
        name: module.attributes.name,
        classes_form: \x27btn-group form-action-button\x27,
        classes: \x27btn btn-primary-reverse btn-outline-secondary\x27,
        url: module.attributes.urls[module.attributes.url_active],
        action: module.attributes.url_active,
        label: module.attributes.urls_labels[module.attributes.url_active],
        upload_url: module.attributes.upload_url|default(null)},
    ) }}
    {% if (module.attributes.urls|length > 1) %}
        <input type=\"hidden\" class=\"btn\" />
        <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
          <span class=\"caret\"></span>
        </button>
        <span class=\"sr-only\">{{ \x27Toggle dropdown\x27|trans({}, \x27Admin.Modules.Feature\x27) }}</span>
        <div class=\"dropdown-menu\">
          {% for module_action, module_url in module.attributes.urls %}
            {% if module_action != module.attributes.url_active %}
                <li>
                    {{ include(\x27@PrestaShop/Admin/Module/Includes/action_button.html.twig\x27, {
                        name: module.attributes.name,
                        classes: \x27dropdown-item\x27,
                        url: module_url,
                        action: module_action,
                        label: module.attributes.urls_labels[module_action],
                        upload_url: module.attributes.upload_url|default(null)},
                    ) }}
                </li>
            {% endif %}
          {% endfor %}
        </div>
    {% endif %}
  {% endif %}
</div>
", "@PrestaShop/Admin/Module/Includes/action_menu.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\action_menu.html.twig");
    }
}
