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

/* @PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig */
class __TwigTemplate_740a61910fef66aac20a6d49cec181d6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig"));

        // line 5
        yield "<nav class=\"nav-bar\" role=\"navigation\" id=\"nav-sidebar\">
  <span class=\"menu-collapse\" data-toggle-url=\"";
        // line 6
        yield $this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath("AdminEmployees", ["action" => "toggleMenu"]);
        yield "\">
    <i class=\"material-icons rtl-flip\">first_page</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"logo-container__header\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\PathExtension']->getLegacyPath(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 13, $this->source); })()), "defaultTab", [], "any", false, false, false, 13)), "html_attr");
        yield "\"></a>
        <span id=\"shop_version\" class=\"header-version\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "psVersion", [], "any", false, false, false, 14), "html", null, true);
        yield "</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu";
        // line 21
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 21, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " sidebar-closed";
        }
        yield "\">
      ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 22, $this->source); })()), "tabs", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["level1"]) {
            // line 23
            yield "        ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "active", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "
        ";
                // line 25
                $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "href", [], "any", false, false, false, 25);
                // line 26
                yield "        ";
                if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 26)) > 0) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, true, false, 26), 0, [], "array", false, true, false, 26), "href", [], "any", true, true, false, 26))) {
                    // line 27
                    yield "          ";
                    $context["level1Href"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 27), 0, [], "array", false, false, false, 27), "href", [], "any", false, false, false, 27);
                    // line 28
                    yield "        ";
                }
                // line 29
                yield "
        ";
                // line 30
                $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 30);
                // line 31
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "name", [], "any", false, false, false, 31) === "")) {
                    // line 32
                    yield "          ";
                    $context["level1Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 32);
                    // line 33
                    yield "        ";
                }
                // line 34
                yield "
        ";
                // line 35
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 35))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "
          <li class=\"link-levelone";
                    // line 37
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " link-levelone-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 37), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 37), "html", null, true);
                    yield "\">
            <a href=\"";
                    // line 38
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level1Href"]) || array_key_exists("level1Href", $context) ? $context["level1Href"] : (function () { throw new RuntimeError('Variable "level1Href" does not exist.', 38, $this->source); })()), "html", null, true);
                    yield "\" class=\"link\" >
              <i class=\"material-icons\">";
                    // line 39
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "icon", [], "any", false, false, false, 39), "html", null, true);
                    yield "</i> <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level1Name"]) || array_key_exists("level1Name", $context) ? $context["level1Name"] : (function () { throw new RuntimeError('Variable "level1Name" does not exist.', 39, $this->source); })()), "html", null, true);
                    yield "</span>
            </a>
          </li>

        ";
                } else {
                    // line 44
                    yield "
        <li class=\"category-title";
                    // line 45
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "current", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " link-active";
                    }
                    yield "\" data-submenu=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "id_tab", [], "any", false, false, false, 45), "html", null, true);
                    yield "\" id=\"tab-";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "class_name", [], "any", false, false, false, 45), "html", null, true);
                    yield "\">
          <span class=\"title\">";
                    // line 46
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level1Name"]) || array_key_exists("level1Name", $context) ? $context["level1Name"] : (function () { throw new RuntimeError('Variable "level1Name" does not exist.', 46, $this->source); })()), "html", null, true);
                    yield "</span>
        </li>

        ";
                    // line 49
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 49));
                    foreach ($context['_seq'] as $context["_key"] => $context["level2"]) {
                        // line 50
                        yield "        ";
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "active", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 51
                            yield "
        ";
                            // line 52
                            $context["level2Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "href", [], "any", false, false, false, 52);
                            // line 53
                            yield "
        ";
                            // line 54
                            $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 54);
                            // line 55
                            yield "        ";
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "name", [], "any", false, false, false, 55) === "")) {
                                // line 56
                                yield "          ";
                                $context["level2Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 56);
                                // line 57
                                yield "        ";
                            }
                            // line 58
                            yield "        ";
                            $context["levelOneClass"] = "";
                            // line 59
                            yield "
        ";
                            // line 60
                            if ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 60) &&  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 60, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 60))) {
                                // line 61
                                yield "          ";
                                $context["levelOneClass"] = " link-active open ul-open";
                                // line 62
                                yield "        ";
                            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 62) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["ps"]) || array_key_exists("ps", $context) ? $context["ps"] : (function () { throw new RuntimeError('Variable "ps" does not exist.', 62, $this->source); })()), "menuCollapsed", [], "any", false, false, false, 62))) {
                                // line 63
                                yield "          ";
                                $context["levelOneClass"] = " link-active";
                                // line 64
                                yield "        ";
                            }
                            // line 65
                            yield "
        <li class=\"link-levelone";
                            // line 66
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 66)) > 0)) {
                                yield " has_submenu";
                            }
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["levelOneClass"]) || array_key_exists("levelOneClass", $context) ? $context["levelOneClass"] : (function () { throw new RuntimeError('Variable "levelOneClass" does not exist.', 66, $this->source); })()), "html", null, true);
                            yield "\" data-submenu=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 66), "html", null, true);
                            yield "\" id=\"subtab-";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "class_name", [], "any", false, false, false, 66), "html", null, true);
                            yield "\">
          <a href=\"";
                            // line 67
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level2Href"]) || array_key_exists("level2Href", $context) ? $context["level2Href"] : (function () { throw new RuntimeError('Variable "level2Href" does not exist.', 67, $this->source); })()), "html", null, true);
                            yield "\" class=\"link\">
            <i class=\"material-icons mi-";
                            // line 68
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 68), "html", null, true);
                            yield "\">";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "icon", [], "any", false, false, false, 68), "html", null, true);
                            yield "</i>
            <span>";
                            // line 69
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level2Name"]) || array_key_exists("level2Name", $context) ? $context["level2Name"] : (function () { throw new RuntimeError('Variable "level2Name" does not exist.', 69, $this->source); })()), "html", null, true);
                            yield "</span>
            ";
                            // line 70
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level1"], "sub_tabs", [], "any", false, false, false, 70)) > 0)) {
                                // line 71
                                yield "              <i class=\"material-icons sub-tabs-arrow\">
                ";
                                // line 72
                                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "current", [], "any", false, false, false, 72)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                    // line 73
                                    yield "                  keyboard_arrow_up
                ";
                                } else {
                                    // line 75
                                    yield "                  keyboard_arrow_down
                ";
                                }
                                // line 77
                                yield "              </i>
            ";
                            }
                            // line 79
                            yield "          </a>
          ";
                            // line 80
                            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 80)) > 0)) {
                                // line 81
                                yield "            <ul id=\"collapse-";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "id_tab", [], "any", false, false, false, 81), "html", null, true);
                                yield "\" class=\"submenu panel-collapse\">
              ";
                                // line 82
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["level2"], "sub_tabs", [], "any", false, false, false, 82));
                                foreach ($context['_seq'] as $context["_key"] => $context["level3"]) {
                                    // line 83
                                    yield "              ";
                                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "active", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                        // line 84
                                        yield "
              ";
                                        // line 85
                                        $context["level3Href"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "href", [], "any", false, false, false, 85);
                                        // line 86
                                        yield "
              ";
                                        // line 87
                                        $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 87);
                                        // line 88
                                        yield "              ";
                                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "name", [], "any", false, false, false, 88) === "")) {
                                            // line 89
                                            yield "                ";
                                            $context["level3Name"] = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 89);
                                            // line 90
                                            yield "              ";
                                        }
                                        // line 91
                                        yield "
              <li class=\"link-leveltwo";
                                        // line 92
                                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "current", [], "any", false, false, false, 92)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                            yield " link-active";
                                        }
                                        yield "\" data-submenu=\"";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "id_tab", [], "any", false, false, false, 92), "html", null, true);
                                        yield "\" id=\"subtab-";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["level3"], "class_name", [], "any", false, false, false, 92), "html", null, true);
                                        yield "\">
                <a href=\"";
                                        // line 93
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level3Href"]) || array_key_exists("level3Href", $context) ? $context["level3Href"] : (function () { throw new RuntimeError('Variable "level3Href" does not exist.', 93, $this->source); })()), "html", null, true);
                                        yield "\" class=\"link\"> ";
                                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["level3Name"]) || array_key_exists("level3Name", $context) ? $context["level3Name"] : (function () { throw new RuntimeError('Variable "level3Name" does not exist.', 93, $this->source); })()), "html", null, true);
                                        yield "</a>
              </li>

              ";
                                    }
                                    // line 97
                                    yield "              ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['level3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 98
                                yield "            </ul>
          ";
                            }
                            // line 100
                            yield "        </li>
        ";
                        }
                        // line 102
                        yield "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['level2'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 103
                    yield "
        ";
                }
                // line 105
                yield "
        ";
            }
            // line 107
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['level1'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        yield "    </ul>
    ";
        // line 109
        yield $this->extensions['PrestaShopBundle\Twig\HookExtension']->renderHook("displayAdminNavBarBeforeEnd");
        yield "
  </div>
</nav>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig";
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
        return array (  355 => 109,  352 => 108,  346 => 107,  342 => 105,  338 => 103,  332 => 102,  328 => 100,  324 => 98,  318 => 97,  309 => 93,  299 => 92,  296 => 91,  293 => 90,  290 => 89,  287 => 88,  285 => 87,  282 => 86,  280 => 85,  277 => 84,  274 => 83,  270 => 82,  265 => 81,  263 => 80,  260 => 79,  256 => 77,  252 => 75,  248 => 73,  246 => 72,  243 => 71,  241 => 70,  237 => 69,  231 => 68,  227 => 67,  216 => 66,  213 => 65,  210 => 64,  207 => 63,  204 => 62,  201 => 61,  199 => 60,  196 => 59,  193 => 58,  190 => 57,  187 => 56,  184 => 55,  182 => 54,  179 => 53,  177 => 52,  174 => 51,  171 => 50,  167 => 49,  161 => 46,  151 => 45,  148 => 44,  138 => 39,  134 => 38,  124 => 37,  121 => 36,  119 => 35,  116 => 34,  113 => 33,  110 => 32,  107 => 31,  105 => 30,  102 => 29,  99 => 28,  96 => 27,  93 => 26,  91 => 25,  88 => 24,  85 => 23,  81 => 22,  75 => 21,  65 => 14,  61 => 13,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<nav class=\"nav-bar\" role=\"navigation\" id=\"nav-sidebar\">
  <span class=\"menu-collapse\" data-toggle-url=\"{{ legacy_path(\x27AdminEmployees\x27, {action: \x27toggleMenu\x27}) }}\">
    <i class=\"material-icons rtl-flip\">first_page</i>
  </span>

  <div class=\"nav-bar-overflow\">
    <div class=\"logo-container\">
      <div class=\"logo-container__header\">
        <a id=\"header_logo\" class=\"logo float-left\" href=\"{{ legacy_path(this.defaultTab)|escape(\x27html_attr\x27) }}\"></a>
        <span id=\"shop_version\" class=\"header-version\">{{ this.psVersion }}</span>
      </div>
      <div class=\"logo-container__close js-mobile-menu\">
        <i class=\"material-icons close-btn\">close</i>
      </div>
    </div>

    <ul class=\"main-menu{% if ps.menuCollapsed %} sidebar-closed{% endif %}\">
      {% for level1 in this.tabs %}
        {% if level1.active %}

        {% set level1Href = level1.href %}
        {% if level1.sub_tabs|length > 0 and level1.sub_tabs[0].href is defined %}
          {% set level1Href = level1.sub_tabs[0].href %}
        {% endif %}

        {% set level1Name = level1.name %}
        {% if level1.name is same as \x27\x27 %}
          {% set level1Name = level1.class_name %}
        {% endif %}

        {% if level1.icon is not empty %}

          <li class=\"link-levelone{% if level1.current %} link-levelone-active{% endif %}\" data-submenu=\"{{ level1.id_tab }}\" id=\"tab-{{ level1.class_name }}\">
            <a href=\"{{ level1Href }}\" class=\"link\" >
              <i class=\"material-icons\">{{ level1.icon }}</i> <span>{{ level1Name }}</span>
            </a>
          </li>

        {% else %}

        <li class=\"category-title{% if level1.current %} link-active{% endif %}\" data-submenu=\"{{ level1.id_tab }}\" id=\"tab-{{ level1.class_name }}\">
          <span class=\"title\">{{ level1Name }}</span>
        </li>

        {% for level2 in level1.sub_tabs %}
        {% if level2.active %}

        {% set level2Href = level2.href %}

        {% set level2Name = level2.name %}
        {% if level2.name is same as \x27\x27 %}
          {% set level2Name = level2.class_name %}
        {% endif %}
        {% set levelOneClass = \x27\x27 %}

        {% if level2.current and not ps.menuCollapsed %}
          {% set levelOneClass = \x27 link-active open ul-open\x27 %}
        {% elseif level2.current and ps.menuCollapsed %}
          {% set levelOneClass = \x27 link-active\x27 %}
        {% endif %}

        <li class=\"link-levelone{% if level2.sub_tabs|length > 0 %} has_submenu{% endif %}{{ levelOneClass }}\" data-submenu=\"{{ level2.id_tab }}\" id=\"subtab-{{ level2.class_name }}\">
          <a href=\"{{ level2Href }}\" class=\"link\">
            <i class=\"material-icons mi-{{ level2.icon }}\">{{ level2.icon }}</i>
            <span>{{ level2Name }}</span>
            {% if level1.sub_tabs|length > 0 %}
              <i class=\"material-icons sub-tabs-arrow\">
                {% if level2.current %}
                  keyboard_arrow_up
                {% else %}
                  keyboard_arrow_down
                {% endif %}
              </i>
            {% endif %}
          </a>
          {% if level2.sub_tabs|length > 0 %}
            <ul id=\"collapse-{{ level2.id_tab }}\" class=\"submenu panel-collapse\">
              {% for level3 in level2.sub_tabs %}
              {% if level3.active %}

              {% set level3Href = level3.href %}

              {% set level3Name = level3.name %}
              {% if level3.name is same as \x27\x27 %}
                {% set level3Name = level3.class_name %}
              {% endif %}

              <li class=\"link-leveltwo{% if level3.current %} link-active{% endif %}\" data-submenu=\"{{ level3.id_tab }}\" id=\"subtab-{{ level3.class_name }}\">
                <a href=\"{{ level3Href }}\" class=\"link\"> {{ level3Name }}</a>
              </li>

              {% endif %}
              {% endfor %}
            </ul>
          {% endif %}
        </li>
        {% endif %}
        {% endfor %}

        {% endif %}

        {% endif %}
      {% endfor %}
    </ul>
    {{ renderhook(\x27displayAdminNavBarBeforeEnd\x27) }}
  </div>
</nav>
", "@PrestaShop/Admin/Component/LegacyLayout/nav_bar.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\nav_bar.html.twig");
    }
}
