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

/* @Twig/form_max_length.html.twig */
class __TwigTemplate_f6af247c88dff7a7b1c6aaef8ace6906 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/form_max_length.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@Twig/form_max_length.html.twig"));

        // line 5
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter", [], "any", true, true, false, 5)) {
            // line 6
            yield "  ";
            $context["isRecommandedType"] = (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "counter_type", [], "any", true, true, false, 6) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 6, $this->source); })()), "counter_type", [], "any", false, false, false, 6) == "recommended"));
            // line 7
            yield "  <small class=\"form-text text-muted text-right maxLength ";
            yield (((($tmp =  !(isset($context["isRecommandedType"]) || array_key_exists("isRecommandedType", $context) ? $context["isRecommandedType"] : (function () { throw new RuntimeError('Variable "isRecommandedType" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("maxType") : (""));
            yield "\">
      <em>
        ";
            // line 9
            if ((($tmp = (isset($context["isRecommandedType"]) || array_key_exists("isRecommandedType", $context) ? $context["isRecommandedType"] : (function () { throw new RuntimeError('Variable "isRecommandedType" does not exist.', 9, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 10
                yield "          ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . CoreExtension::getAttribute($this->env, $this->source,                 // line 13
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 13, $this->source); })()), "counter", [], "any", false, false, false, 13)), "[/2]" => "</span>"]));
                // line 15
                yield "
        ";
            } else {
                // line 17
                yield "          ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters allowed", [], "Admin.Catalog.Feature"), ["[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . CoreExtension::getAttribute($this->env, $this->source,                 // line 20
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 20, $this->source); })()), "counter", [], "any", false, false, false, 20)), "[/2]" => "</span>"]));
                // line 22
                yield "
        ";
            }
            // line 24
            yield "      </em>
  </small>
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
        return "@Twig/form_max_length.html.twig";
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
        return array (  77 => 24,  73 => 22,  71 => 20,  69 => 17,  65 => 15,  63 => 13,  61 => 10,  59 => 9,  53 => 7,  50 => 6,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% if attr.counter is defined %}
  {% set isRecommandedType = attr.counter_type is defined and attr.counter_type == \x27recommended\x27 %}
  <small class=\"form-text text-muted text-right maxLength {{ not (isRecommandedType) ? \x27maxType\x27 }}\">
      <em>
        {% if isRecommandedType %}
          {{ \x27[1][/1] of [2][/2] characters used (recommended)\x27|trans({}, \x27Admin.Catalog.Feature\x27)|replace({
            \x27[1]\x27: \x27<span class=\"currentLength\">\x27,
            \x27[/1]\x27: \x27</span>\x27,
            \x27[2]\x27: \x27<span class=\"currentTotalMax\">\x27 ~ attr.counter,
            \x27[/2]\x27: \x27</span>\x27,
          })|raw_purified }}
        {% else %}
          {{ \x27[1][/1] of [2][/2] characters allowed\x27|trans({}, \x27Admin.Catalog.Feature\x27)|replace({
            \x27[1]\x27: \x27<span class=\"currentLength\">\x27,
            \x27[/1]\x27: \x27</span>\x27,
            \x27[2]\x27: \x27<span class=\"currentTotalMax\">\x27 ~ attr.counter,
            \x27[/2]\x27: \x27</span>\x27,
          })|raw_purified }}
        {% endif %}
      </em>
  </small>
{% endif %}
", "@Twig/form_max_length.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\form_max_length.html.twig");
    }
}
