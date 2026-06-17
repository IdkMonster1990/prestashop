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

/* @PrestaShop/Admin/Helpers/bootstrap_popup.html.twig */
class __TwigTemplate_d0522cd8c8a98032dfa1297a94c60821 extends Template
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
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig"));

        // line 5
        yield "<div class=\"modal fade\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })()), "html", null, true);
        yield "\" tabindex=\"-1\">
    <div class=\"modal-dialog ";
        // line 6
        if (array_key_exists("class", $context)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 6, $this->source); })()), "html", null, true);
        }
        yield "\">
        <div class=\"modal-content\">
            ";
        // line 8
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 16
        yield "
            ";
        // line 17
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 19
        yield "
            ";
        // line 20
        if (array_key_exists("progressbar", $context)) {
            // line 21
            yield "                <div class=\"modal-body\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progressbar"]) || array_key_exists("progressbar", $context) ? $context["progressbar"] : (function () { throw new RuntimeError('Variable "progressbar" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "html", null, true);
            yield "\">
                    <div class=\"float-right progress-details-text\" default-value=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", true, true, false, 22)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progressbar"]) || array_key_exists("progressbar", $context) ? $context["progressbar"] : (function () { throw new RuntimeError('Variable "progressbar" does not exist.', 22, $this->source); })()), "label", [], "any", false, false, false, 22), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))), "html", null, true);
            yield "\">
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["progressbar"] ?? null), "label", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["progressbar"]) || array_key_exists("progressbar", $context) ? $context["progressbar"] : (function () { throw new RuntimeError('Variable "progressbar" does not exist.', 23, $this->source); })()), "label", [], "any", false, false, false, 23), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Processing...", [], "Admin.Global"))), "html", null, true);
            yield "
                    </div>
                    <div class=\"progress\" style=\"width: 100%\">
                        <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            ";
        }
        // line 32
        yield "
            ";
        // line 33
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 57
        yield "        </div>
    </div>
</div>
<script>
    \$(function() {
        var closable = ";
        // line 62
        if ((array_key_exists("closable", $context) && ((isset($context["closable"]) || array_key_exists("closable", $context) ? $context["closable"] : (function () { throw new RuntimeError('Variable "closable" does not exist.', 62, $this->source); })()) == true))) {
            yield "true";
        } else {
            yield "false";
        }
        yield ";
        \$(\x27#";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "\x27).modal({
            backdrop: (closable ? true : \x27static\x27),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 9
        yield "                ";
        if (array_key_exists("title", $context)) {
            // line 10
            yield "                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 11, $this->source); })()), "html", null, true);
            yield "</h4>
                        ";
            // line 12
            if ((array_key_exists("closable", $context) && ((isset($context["closable"]) || array_key_exists("closable", $context) ? $context["closable"] : (function () { throw new RuntimeError('Variable "closable" does not exist.', 12, $this->source); })()) == true))) {
                yield "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
            }
            // line 13
            yield "                    </div>
                ";
        }
        // line 15
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 18
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 33
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 34
        yield "                ";
        if (array_key_exists("actions", $context)) {
            // line 35
            yield "                    <div class=\"modal-footer\">
                        ";
            // line 36
            if ((array_key_exists("closable", $context) && ((isset($context["closable"]) || array_key_exists("closable", $context) ? $context["closable"] : (function () { throw new RuntimeError('Variable "closable" does not exist.', 36, $this->source); })()) == true))) {
                // line 37
                yield "                            <button type=\"button\" class=\"btn btn-outline-secondary btn-lg\" data-dismiss=\"modal\">
                              ";
                // line 38
                if (array_key_exists("closeLabel", $context)) {
                    // line 39
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["closeLabel"]) || array_key_exists("closeLabel", $context) ? $context["closeLabel"] : (function () { throw new RuntimeError('Variable "closeLabel" does not exist.', 39, $this->source); })()), "html", null, true);
                    yield "
                              ";
                } else {
                    // line 41
                    yield "                                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Close", [], "Admin.Actions"), "html", null, true);
                    yield "
                              ";
                }
                // line 43
                yield "                            </button>
                        ";
            }
            // line 45
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["actions"]) || array_key_exists("actions", $context) ? $context["actions"] : (function () { throw new RuntimeError('Variable "actions" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
                // line 46
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", true, true, false, 46) && (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 46) == "link"))) {
                    // line 47
                    yield "                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "href", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "href", [], "any", false, false, false, 47), "#")) : ("#")), "html", null, true);
                    yield "\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 47), "btn")) : ("btn")), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 47)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 47), "Label is missing")) : ("Label is missing")), "html", null, true);
                    yield "</a>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["action"], "type", [], "any", true, true, false, 48) && (CoreExtension::getAttribute($this->env, $this->source, $context["action"], "type", [], "any", false, false, false, 48) == "button"))) {
                    // line 49
                    yield "                                <button type=\"button\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "value", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "value", [], "any", false, false, false, 49), "")) : ("")), "html", null, true);
                    yield "\" class=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "class", [], "any", false, false, false, 49), "btn")) : ("btn")), "html", null, true);
                    yield "\">
                                    ";
                    // line 50
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", true, true, false, 50)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["action"], "label", [], "any", false, false, false, 50), "Label is missing")) : ("Label is missing")), "html", null, true);
                    yield "
                                </button>
                            ";
                }
                // line 53
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['action'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            yield "                    </div>
                ";
        }
        // line 56
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig";
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
        return array (  286 => 56,  282 => 54,  276 => 53,  270 => 50,  263 => 49,  261 => 48,  252 => 47,  249 => 46,  244 => 45,  240 => 43,  234 => 41,  228 => 39,  226 => 38,  223 => 37,  221 => 36,  218 => 35,  215 => 34,  202 => 33,  191 => 18,  178 => 17,  167 => 15,  163 => 13,  159 => 12,  155 => 11,  152 => 10,  149 => 9,  136 => 8,  116 => 63,  108 => 62,  101 => 57,  99 => 33,  96 => 32,  84 => 23,  80 => 22,  75 => 21,  73 => 20,  70 => 19,  68 => 17,  65 => 16,  63 => 8,  56 => 6,  51 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div class=\"modal fade\" id=\"{{ id }}\" tabindex=\"-1\">
    <div class=\"modal-dialog {% if class is defined %}{{ class }}{% endif %}\">
        <div class=\"modal-content\">
            {% block header %}
                {% if title is defined %}
                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">{{ title }}</h4>
                        {% if closable is defined and closable == true %}<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>{% endif %}
                    </div>
                {% endif %}
            {% endblock %}

            {% block content %}
            {% endblock %}

            {% if progressbar is defined %}
                <div class=\"modal-body\" id=\"{{ progressbar.id }}\">
                    <div class=\"float-right progress-details-text\" default-value=\"{{ progressbar.label|default(\x27Processing...\x27|trans({}, \x27Admin.Global\x27)) }}\">
                        {{ progressbar.label|default(\x27Processing...\x27|trans({}, \x27Admin.Global\x27)) }}
                    </div>
                    <div class=\"progress\" style=\"width: 100%\">
                        <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 0%\">
                            <span>0 %</span>
                        </div>
                    </div>
                </div>
            {% endif %}

            {% block footer %}
                {% if actions is defined %}
                    <div class=\"modal-footer\">
                        {% if closable is defined and closable == true %}
                            <button type=\"button\" class=\"btn btn-outline-secondary btn-lg\" data-dismiss=\"modal\">
                              {% if closeLabel is defined %}
                                {{ closeLabel }}
                              {% else %}
                                {{ \x27Close\x27|trans({}, \x27Admin.Actions\x27) }}
                              {% endif %}
                            </button>
                        {% endif %}
                        {% for action in actions %}
                            {% if action.type is defined and action.type == \x27link\x27 %}
                                <a href=\"{{ action.href|default(\x27#\x27) }}\" class=\"{{ action.class|default(\x27btn\x27) }}\">{{ action.label|default(\x27Label is missing\x27) }}</a>
                            {% elseif action.type is defined and action.type == \x27button\x27 %}
                                <button type=\"button\" value=\"{{ action.value|default(\x27\x27) }}\" class=\"{{ action.class|default(\x27btn\x27) }}\">
                                    {{ action.label|default(\x27Label is missing\x27) }}
                                </button>
                            {% endif %}
                        {% endfor %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
    </div>
</div>
<script>
    \$(function() {
        var closable = {% if closable is defined and closable == true %}true{% else %}false{% endif %};
        \$(\x27#{{ id }}\x27).modal({
            backdrop: (closable ? true : \x27static\x27),
            keyboard: closable,
            closable: closable,
            show: false
        });
    });
</script>
", "@PrestaShop/Admin/Helpers/bootstrap_popup.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Helpers\\bootstrap_popup.html.twig");
    }
}
