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

/* @PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig */
class __TwigTemplate_11d1745686c13ecfd2e1de6d67e4c5d7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig"));

        // line 5
        yield "<div id=\"module-modal-bulk-confirm\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Bulk action confirmation", [], "Admin.Modules.Feature"), "html", null, true);
        yield "</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        <p>
          ";
        // line 15
        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("You are about to [1] the following modules:", [], "Admin.Modules.Notification"), ["[1]" => "<span id=\"module-modal-bulk-confirm-action-name\">[Module Action]</span>"]));
        yield "
        </p>
        <p id=\"module-modal-bulk-confirm-list\">
          [Module List Up To 10 Max]
        </p>

        <div id=\"module-modal-bulk-checkbox\">
          <label>
            <input type=\"checkbox\" id=\"force_bulk_deletion\" name=\"force_bulk_deletion\">
            ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Optional: delete module folder after uninstall.", [], "Admin.Modules.Feature"), "html", null, true);
        yield "
          </label>
        </div>
      </div>
      <div class=\"modal-footer\">
        <input type=\"button\" class=\"btn btn-outline-secondary uppercase\" data-dismiss=\"modal\" value=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Cancel", [], "Admin.Actions"), "html", null, true);
        yield "\">
        <button class=\"btn btn-primary uppercase\" data-dismiss=\"modal\" id=\"module-modal-confirm-bulk-ack\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Yes, I want to do it", [], "Admin.Modules.Feature"), "html", null, true);
        yield "</button>
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
        return "@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig";
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
        return array (  87 => 30,  83 => 29,  75 => 24,  63 => 15,  55 => 10,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div id=\"module-modal-bulk-confirm\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">{{ \x27Bulk action confirmation\x27|trans({}, \x27Admin.Modules.Feature\x27) }}</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
        <p>
          {{ \x27You are about to [1] the following modules:\x27|trans({}, \x27Admin.Modules.Notification\x27)|replace({\x27[1]\x27: \x27<span id=\"module-modal-bulk-confirm-action-name\">[Module Action]</span>\x27})|raw_purified }}
        </p>
        <p id=\"module-modal-bulk-confirm-list\">
          [Module List Up To 10 Max]
        </p>

        <div id=\"module-modal-bulk-checkbox\">
          <label>
            <input type=\"checkbox\" id=\"force_bulk_deletion\" name=\"force_bulk_deletion\">
            {{ \x27Optional: delete module folder after uninstall.\x27|trans({}, \x27Admin.Modules.Feature\x27) }}
          </label>
        </div>
      </div>
      <div class=\"modal-footer\">
        <input type=\"button\" class=\"btn btn-outline-secondary uppercase\" data-dismiss=\"modal\" value=\"{{ \x27Cancel\x27|trans({}, \x27Admin.Actions\x27) }}\">
        <button class=\"btn btn-primary uppercase\" data-dismiss=\"modal\" id=\"module-modal-confirm-bulk-ack\">{{ \x27Yes, I want to do it\x27|trans({}, \x27Admin.Modules.Feature\x27) }}</button>
      </div>

    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_confirm_bulk_action.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_confirm_bulk_action.html.twig");
    }
}
