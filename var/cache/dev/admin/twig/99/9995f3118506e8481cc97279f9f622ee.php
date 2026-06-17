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

/* @PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig */
class __TwigTemplate_9a2160487d3d39851f0e303e70ff3e2b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig"));

        // line 5
        yield "
";
        // line 6
        $context["actions"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 6, $this->source); })()), "options", [], "any", false, false, false, 6), "actions", [], "any", false, false, false, 6);
        // line 7
        yield "
";
        // line 8
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 8, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "    ";
            $context["inlineActions"] = [];
            // line 10
            yield "    ";
            $context["regularActions"] = [];
            // line 11
            yield "
    ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 13
                yield "      ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["action"], "isApplicable", [(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 13, $this->source); })())], "method", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 14
                    yield "        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "options", [], "any", false, false, false, 14), "use_inline_display", [], "array", false, false, false, 14) == true)) {
                        // line 15
                        yield "            ";
                        $context["inlineActions"] = Twig\Extension\CoreExtension::merge((isset($context["inlineActions"]) || array_key_exists("inlineActions", $context) ? $context["inlineActions"] : (function () { throw new RuntimeError('Variable "inlineActions" does not exist.', 15, $this->source); })()), [$context["action"]]);
                        // line 16
                        yield "          ";
                    } else {
                        // line 17
                        yield "            ";
                        $context["regularActions"] = Twig\Extension\CoreExtension::merge((isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 17, $this->source); })()), [$context["action"]]);
                        // line 18
                        yield "        ";
                    }
                    // line 19
                    yield "      ";
                }
                // line 20
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            yield "
    <div class=\"btn-group-action text-right\">
      ";
            // line 23
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["inlineActions"]) || array_key_exists("inlineActions", $context) ? $context["inlineActions"] : (function () { throw new RuntimeError('Variable "inlineActions" does not exist.', 23, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 24
                yield "        <div class=\"btn-group btn-group-inline d-flex justify-content-start\">
          ";
                // line 25
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["inlineActions"]) || array_key_exists("inlineActions", $context) ? $context["inlineActions"] : (function () { throw new RuntimeError('Variable "inlineActions" does not exist.', 25, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["inlineAction"]) {
                    // line 26
                    $context["class"] = ("dropdown-item inline-dropdown-item " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, true, false, 26), "attr", [], "any", false, true, false, 26), "class", [], "any", true, true, false, 26)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["inlineAction"], "options", [], "any", false, false, false, 26), "attr", [], "any", false, false, false, 26), "class", [], "any", false, false, false, 26), "")) : ("")));
                    // line 27
                    yield "
              ";
                    // line 28
                    yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . CoreExtension::getAttribute($this->env, $this->source, $context["inlineAction"], "type", [], "any", false, false, false, 28)) . ".html.twig"), ["grid" =>                     // line 29
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 29, $this->source); })()), "column" =>                     // line 30
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 30, $this->source); })()), "attributes" => ["class" => Twig\Extension\CoreExtension::trim(                    // line 31
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 31, $this->source); })())), "tooltip_name" => true], "record" =>                     // line 32
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 32, $this->source); })()), "action" =>                     // line 33
$context["inlineAction"]]);
                    // line 34
                    yield "
          ";
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
                unset($context['_seq'], $context['_key'], $context['inlineAction'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                yield "        </div>
      ";
            }
            // line 38
            yield "
      ";
            // line 39
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 39, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "        <div class=\"btn-group\">
          ";
                // line 41
                [$context["skippedActions"], $context["isFirstRendered"]] =                 [0, false];
                // line 42
                yield "
          ";
                // line 44
                yield "          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 44, $this->source); })()));
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
                foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                    // line 45
                    yield "            ";
                    if ((($tmp =  !(isset($context["isFirstRendered"]) || array_key_exists("isFirstRendered", $context) ? $context["isFirstRendered"] : (function () { throw new RuntimeError('Variable "isFirstRendered" does not exist.', 45, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 46
                        yield "              ";
                        $context["skippedActions"] = ((isset($context["skippedActions"]) || array_key_exists("skippedActions", $context) ? $context["skippedActions"] : (function () { throw new RuntimeError('Variable "skippedActions" does not exist.', 46, $this->source); })()) + 1);
                        // line 47
                        yield "            ";
                    }
                    // line 48
                    yield "
            ";
                    // line 49
                    if ((($tmp =  !(isset($context["isFirstRendered"]) || array_key_exists("isFirstRendered", $context) ? $context["isFirstRendered"] : (function () { throw new RuntimeError('Variable "isFirstRendered" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 50
                        yield "              ";
                        $context["class"] = ("dropdown-item " . ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "options", [], "any", false, true, false, 50), "attr", [], "any", false, true, false, 50), "class", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["action"], "options", [], "any", false, false, false, 50), "attr", [], "any", false, false, false, 50), "class", [], "any", false, false, false, 50), "")) : ("")));
                        // line 51
                        yield "
              ";
                        // line 52
                        yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 52)) . ".html.twig"), ["grid" =>                         // line 53
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 53, $this->source); })()), "column" =>                         // line 54
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 54, $this->source); })()), "attributes" => ["class" => Twig\Extension\CoreExtension::trim(                        // line 55
(isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 55, $this->source); })())), "tooltip_name" => true], "record" =>                         // line 56
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 56, $this->source); })()), "action" =>                         // line 57
$context["action"]]);
                        // line 58
                        yield "

              ";
                        // line 60
                        $context["isFirstRendered"] = true;
                        // line 61
                        yield "            ";
                    }
                    // line 62
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
                unset($context['_seq'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                yield "
          ";
                // line 65
                yield "          ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 65, $this->source); })())) > (isset($context["skippedActions"]) || array_key_exists("skippedActions", $context) ? $context["skippedActions"] : (function () { throw new RuntimeError('Variable "skippedActions" does not exist.', 65, $this->source); })()))) {
                    // line 66
                    yield "            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              ";
                    // line 74
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["regularActions"]) || array_key_exists("regularActions", $context) ? $context["regularActions"] : (function () { throw new RuntimeError('Variable "regularActions" does not exist.', 74, $this->source); })()), (isset($context["skippedActions"]) || array_key_exists("skippedActions", $context) ? $context["skippedActions"] : (function () { throw new RuntimeError('Variable "skippedActions" does not exist.', 74, $this->source); })())));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                        // line 75
                        yield "                ";
                        yield Twig\Extension\CoreExtension::include($this->env, $context, (("@PrestaShop/Admin/Common/Grid/Actions/Row/" . CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 75)) . ".html.twig"), ["grid" =>                         // line 76
(isset($context["grid"]) || array_key_exists("grid", $context) ? $context["grid"] : (function () { throw new RuntimeError('Variable "grid" does not exist.', 76, $this->source); })()), "column" =>                         // line 77
(isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 77, $this->source); })()), "attributes" => ["class" => "dropdown-item", "tooltip_name" => false], "record" =>                         // line 79
(isset($context["record"]) || array_key_exists("record", $context) ? $context["record"] : (function () { throw new RuntimeError('Variable "record" does not exist.', 79, $this->source); })()), "action" =>                         // line 80
$context["action"]]);
                        // line 81
                        yield "
              ";
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
                    unset($context['_seq'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    yield "            </div>
          ";
                }
                // line 85
                yield "        </div>
      ";
            }
            // line 87
            yield "    </div>
";
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
        return "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig";
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
        return array (  299 => 87,  295 => 85,  291 => 83,  276 => 81,  274 => 80,  273 => 79,  272 => 77,  271 => 76,  269 => 75,  252 => 74,  242 => 66,  239 => 65,  236 => 63,  222 => 62,  219 => 61,  217 => 60,  213 => 58,  211 => 57,  210 => 56,  209 => 55,  208 => 54,  207 => 53,  206 => 52,  203 => 51,  200 => 50,  198 => 49,  195 => 48,  192 => 47,  189 => 46,  186 => 45,  168 => 44,  165 => 42,  163 => 41,  160 => 40,  158 => 39,  155 => 38,  151 => 36,  136 => 34,  134 => 33,  133 => 32,  132 => 31,  131 => 30,  130 => 29,  129 => 28,  126 => 27,  124 => 26,  107 => 25,  104 => 24,  102 => 23,  98 => 21,  92 => 20,  89 => 19,  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  71 => 13,  67 => 12,  64 => 11,  61 => 10,  58 => 9,  56 => 8,  53 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% set actions = column.options.actions %}

{% if actions is not empty %}
    {% set inlineActions = [] %}
    {% set regularActions = [] %}

    {% for action in actions %}
      {% if action.isApplicable(record) %}
        {% if action.options[\x27use_inline_display\x27] == true %}
            {% set inlineActions = inlineActions|merge([action]) %}
          {% else %}
            {% set regularActions = regularActions|merge([action]) %}
        {% endif %}
      {% endif %}
    {% endfor %}

    <div class=\"btn-group-action text-right\">
      {% if inlineActions is not empty %}
        <div class=\"btn-group btn-group-inline d-flex justify-content-start\">
          {% for inlineAction in inlineActions -%}
              {% set class = \x27dropdown-item inline-dropdown-item \x27 ~ inlineAction.options.attr.class|default(\x27\x27) %}

              {{ include(\x27@PrestaShop/Admin/Common/Grid/Actions/Row/\x27 ~ inlineAction.type ~ \x27.html.twig\x27, {
                grid: grid,
                column: column,
                attributes: {class: class|trim, tooltip_name: true},
                record: record,
                action: inlineAction,
              }) }}
          {% endfor %}
        </div>
      {% endif %}

      {% if regularActions is not empty %}
        <div class=\"btn-group\">
          {% set skippedActions, isFirstRendered = 0, false %}

          {# Render first item that is not in dropwdown #}
          {% for action in regularActions %}
            {% if not isFirstRendered %}
              {% set skippedActions = skippedActions + 1 %}
            {% endif %}

            {% if not isFirstRendered %}
              {% set class = \x27dropdown-item \x27 ~ action.options.attr.class|default(\x27\x27) %}

              {{ include(\x27@PrestaShop/Admin/Common/Grid/Actions/Row/\x27 ~ action.type ~ \x27.html.twig\x27, {
                grid: grid,
                column: column,
                attributes: {class: class|trim, tooltip_name: true},
                record: record,
                action: action,
              }) }}

              {% set isFirstRendered = true %}
            {% endif %}
          {% endfor %}

          {# Render remaining items in dropdown #}
          {% if regularActions|length > skippedActions %}
            <a class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
               data-toggle=\"dropdown\"
               aria-haspopup=\"true\"
               aria-expanded=\"false\"
            >
            </a>

            <div class=\"dropdown-menu dropdown-menu-right\">
              {% for action in regularActions|slice(skippedActions) %}
                {{ include(\x27@PrestaShop/Admin/Common/Grid/Actions/Row/\x27 ~ action.type ~ \x27.html.twig\x27, {
                  grid: grid,
                  column: column,
                  attributes: {class: \x27dropdown-item\x27, tooltip_name: false},
                  record: record,
                  action: action,
                }) }}
              {% endfor %}
            </div>
          {% endif %}
        </div>
      {% endif %}
    </div>
{% endif %}
", "@PrestaShop/Admin/Common/Grid/Columns/Content/action.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Common\\Grid\\Columns\\Content\\action.html.twig");
    }
}
