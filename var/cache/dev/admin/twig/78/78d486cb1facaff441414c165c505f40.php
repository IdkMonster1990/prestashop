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

/* @PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig */
class __TwigTemplate_a34d8f47844c770dfbfc89a58b19597e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig"));

        // line 5
        yield "
";
        // line 6
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 6, $this->source); })()), "confirmationMessage", [], "any", false, false, false, 6))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 7
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "confirmationMessage", [], "any", false, false, false, 10), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 14
        yield "
";
        // line 15
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 15, $this->source); })()), "errorMessage", [], "any", false, false, false, 15))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "errorMessage", [], "any", false, false, false, 19), "html", null, true);
            yield "
  </div>
</div>
";
        }
        // line 23
        yield "
";
        // line 24
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 24, $this->source); })()), "errors", [], "any", false, false, false, 24))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 28
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 28, $this->source); })()), "errors", [], "any", false, false, false, 28)) == 1)) {
                // line 29
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 29, $this->source); })()), "errors", [], "any", false, false, false, 29)), "html", null, true);
                yield "
    ";
            } else {
                // line 31
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d errors.", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 31, $this->source); })()), "errors", [], "any", false, false, false, 31))], "Admin.Notifications.Error"), "html", null, true);
                yield "
      <br/>
      <ol>
        ";
                // line 34
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 34, $this->source); })()), "errors", [], "any", false, false, false, 34));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 35
                    yield "        <li>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["error"], "html", null, true);
                    yield "</li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 37
                yield "      </ol>
    ";
            }
            // line 39
            yield "  </div>
</div>
";
        }
        // line 42
        yield "
";
        // line 43
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 43, $this->source); })()), "informations", [], "any", false, false, false, 43))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-info\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <ul id=\"infos_block\" class=\"list-unstyled\">
      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 48, $this->source); })()), "informations", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["info"]) {
                // line 49
                yield "      <li>";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["info"]);
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['info'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "    </ul>
  </div>
</div>
";
        }
        // line 55
        yield "
";
        // line 56
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 56, $this->source); })()), "confirmations", [], "any", false, false, false, 56))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 57
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-success\" style=\"display:block;\">
    ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 59, $this->source); })()), "confirmations", [], "any", false, false, false, 59));
            foreach ($context['_seq'] as $context["_key"] => $context["confirmation"]) {
                // line 60
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["confirmation"], "html", null, true);
                yield "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['confirmation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            yield "  </div>
</div>
";
        }
        // line 65
        yield "
";
        // line 66
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 66, $this->source); })()), "warnings", [], "any", false, false, false, 66))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "<div class=\"bootstrap\">
  <div class=\"alert alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    ";
            // line 70
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 70, $this->source); })()), "warnings", [], "any", false, false, false, 70)) > 1)) {
                // line 71
                yield "    <h4>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There are %d warnings:", ["%d" => Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 71, $this->source); })()), "warnings", [], "any", false, false, false, 71))]), "html", null, true);
                yield "</h4>
    ";
            }
            // line 73
            yield "    <ul class=\"list-unstyled\">
      ";
            // line 74
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 74, $this->source); })()), "warnings", [], "any", false, false, false, 74));
            foreach ($context['_seq'] as $context["_key"] => $context["warning"]) {
                // line 75
                yield "      <li>";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["warning"]);
                yield "</li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['warning'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            yield "    </ul>
  </div>
</div>
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
        return "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig";
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
        return array (  220 => 77,  211 => 75,  207 => 74,  204 => 73,  198 => 71,  196 => 70,  191 => 67,  189 => 66,  186 => 65,  181 => 62,  172 => 60,  168 => 59,  164 => 57,  162 => 56,  159 => 55,  153 => 51,  144 => 49,  140 => 48,  134 => 44,  132 => 43,  129 => 42,  124 => 39,  120 => 37,  111 => 35,  107 => 34,  100 => 31,  94 => 29,  92 => 28,  87 => 25,  85 => 24,  82 => 23,  75 => 19,  70 => 16,  68 => 15,  65 => 14,  58 => 10,  53 => 7,  51 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{% if this.confirmationMessage is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-success\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {{ this.confirmationMessage }}
  </div>
</div>
{% endif %}

{% if this.errorMessage is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {{ this.errorMessage }}
  </div>
</div>
{% endif %}

{% if this.errors is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-danger\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {% if this.errors|length == 1 %}
      {{ this.errors|first }}
    {% else %}
      {{ \x27There are %d errors.\x27|trans({\x27%d\x27: this.errors|length}, \x27Admin.Notifications.Error\x27) }}
      <br/>
      <ol>
        {% for error in this.errors %}
        <li>{{ error }}</li>
        {% endfor %}
      </ol>
    {% endif %}
  </div>
</div>
{% endif %}

{% if this.informations is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-info\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    <ul id=\"infos_block\" class=\"list-unstyled\">
      {% for info in this.informations %}
      <li>{{ info|raw_purified }}</li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endif %}

{% if this.confirmations is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-success\" style=\"display:block;\">
    {% for confirmation in this.confirmations %}
    {{ confirmation }}
    {% endfor %}
  </div>
</div>
{% endif %}

{% if this.warnings is not empty %}
<div class=\"bootstrap\">
  <div class=\"alert alert-warning\">
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    {% if this.warnings|length > 1 %}
    <h4>{{ \x27There are %d warnings:\x27|trans({\x27%d\x27: this.warnings|length}) }}</h4>
    {% endif %}
    <ul class=\"list-unstyled\">
      {% for warning in this.warnings %}
      <li>{{ warning|raw_purified }}</li>
      {% endfor %}
    </ul>
  </div>
</div>
{% endif %}
", "@PrestaShop/Admin/Component/LegacyLayout/session_alert.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\LegacyLayout\\session_alert.html.twig");
    }
}
