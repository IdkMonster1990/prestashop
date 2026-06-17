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

/* @PrestaShop/Admin/Module/Includes/modal_import.html.twig */
class __TwigTemplate_d0aa39a40abd33b451e3f085d152145c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_import.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Module/Includes/modal_import.html.twig"));

        // line 5
        yield "<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Upload a module", [], "Admin.Modules.Feature"), "html", null, true);
        yield "</h4>
        <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 14
        if (((isset($context["level"]) || array_key_exists("level", $context) ? $context["level"] : (function () { throw new RuntimeError('Variable "level" does not exist.', 14, $this->source); })()) <= Twig\Extension\CoreExtension::constant("PrestaShop\\PrestaShop\\Core\\Security\\Permission::LEVEL_UPDATE"))) {
            // line 15
            yield "          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 17, $this->source); })()), "html", null, true);
            yield "
            </p>
          </div>
        ";
        } else {
            // line 21
            yield "          <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
            <div class=\"module-import-start\">
              <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
              <p class=\"module-import-start-main-text\">
                ";
            // line 25
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Drop your module archive here or [1]select file[/1]", [], "Admin.Modules.Feature"), ["[1]" => "<a href=\"#\" class=\"module-import-start-select-manual\">", "[/1]" => "</a>"]));
            yield "
              </p>
              <p class=\"module-import-start-footer-text\">
                ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).", [], "Admin.Modules.Help"), "html", null, true);
            yield "
                ";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Your module will be installed right after that.", [], "Admin.Modules.Help"), "html", null, true);
            yield "
              </p>
            </div>
            <div
              class=\"module-import-processing\">
              <!-- Loader -->
              <div class=\"spinner\"></div>
              <p class=\"module-import-processing-main-text\">";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Installing module...", [], "Admin.Modules.Notification"), "html", null, true);
            yield "</p>
              <p class=\"module-import-processing-footer-text\">
                ";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("It will close as soon as the module is installed. It won\x27t be long!", [], "Admin.Modules.Notification"), "html", null, true);
            yield "
              </p>
            </div>
            <div class=\"module-import-success\">
              <i class=\"module-import-success-icon material-icons\">done</i><br/>
              <p class=\"module-import-success-msg\">";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Module installed!", [], "Admin.Modules.Notification"), "html", null, true);
            yield "</p>
              <p class=\"module-import-success-details\"></p>
              <a class=\"module-import-success-configure btn btn-primary\" href=\"#\">";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure", [], "Admin.Actions"), "html", null, true);
            yield "</a>
            </div>
            <div class=\"module-import-failure\">
              <i class=\"module-import-failure-icon material-icons\">error</i><br/>
              <p class=\"module-import-failure-msg\">";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Oops... Upload failed.", [], "Admin.Modules.Notification"), "html", null, true);
            yield "</p>
              <a href=\"#\" class=\"module-import-failure-details-action\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("What happened?", [], "Admin.Modules.Help"), "html", null, true);
            yield "</a>
              <div class=\"module-import-failure-details\"></div>
              <a class=\"module-import-failure-retry btn btn-secondary\" href=\"#\">";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Try again", [], "Admin.Actions"), "html", null, true);
            yield "</a>
            </div>
            <div class=\"module-import-confirm\"></div>
          </form>
        ";
        }
        // line 57
        yield "      </div>
      <div class=\"modal-footer\"></div>
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
        return "@PrestaShop/Admin/Module/Includes/modal_import.html.twig";
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
        return array (  143 => 57,  135 => 52,  130 => 50,  126 => 49,  119 => 45,  114 => 43,  106 => 38,  101 => 36,  91 => 29,  87 => 28,  81 => 25,  75 => 21,  68 => 17,  64 => 15,  62 => 14,  55 => 10,  48 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
<div id=\"module-modal-import\" class=\"modal modal-vcenter fade\" role=\"dialog\" data-backdrop=\"static\" data-keyboard=\"false\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">{{ \x27Upload a module\x27|trans({}, \x27Admin.Modules.Feature\x27) }}</h4>
        <button id=\"module-modal-import-closing-cross\" type=\"button\" class=\"close\">&times;</button>
      </div>
      <div class=\"modal-body\">
        {% if level <= constant(\x27PrestaShop\\\\PrestaShop\\\\Core\\\\Security\\\\Permission::LEVEL_UPDATE\x27) %}
          <div class=\"alert alert-danger\" role=\"alert\">
            <p class=\"alert-text\">
              {{ errorMessage }}
            </p>
          </div>
        {% else %}
          <form action=\"#\" class=\"dropzone\" id=\"importDropzone\">
            <div class=\"module-import-start\">
              <i class=\"module-import-start-icon material-icons\">cloud_upload</i><br/>
              <p class=\"module-import-start-main-text\">
                {{ \x27Drop your module archive here or [1]select file[/1]\x27|trans({}, \x27Admin.Modules.Feature\x27)|replace({\x27[1]\x27: \x27<a href=\"#\" class=\"module-import-start-select-manual\">\x27, \x27[/1]\x27: \x27</a>\x27})|raw_purified }}
              </p>
              <p class=\"module-import-start-footer-text\">
                {{ \x27Please upload one file at a time, .zip or tarball format (.tar, .tar.gz or .tgz).\x27|trans({}, \x27Admin.Modules.Help\x27) }}
                {{ \x27Your module will be installed right after that.\x27|trans({}, \x27Admin.Modules.Help\x27) }}
              </p>
            </div>
            <div
              class=\"module-import-processing\">
              <!-- Loader -->
              <div class=\"spinner\"></div>
              <p class=\"module-import-processing-main-text\">{{ \x27Installing module...\x27|trans({}, \x27Admin.Modules.Notification\x27) }}</p>
              <p class=\"module-import-processing-footer-text\">
                {{ \"It will close as soon as the module is installed. It won\x27t be long!\"|trans({}, \x27Admin.Modules.Notification\x27) }}
              </p>
            </div>
            <div class=\"module-import-success\">
              <i class=\"module-import-success-icon material-icons\">done</i><br/>
              <p class=\"module-import-success-msg\">{{ \x27Module installed!\x27|trans({}, \x27Admin.Modules.Notification\x27) }}</p>
              <p class=\"module-import-success-details\"></p>
              <a class=\"module-import-success-configure btn btn-primary\" href=\"#\">{{ \x27Configure\x27|trans({}, \x27Admin.Actions\x27) }}</a>
            </div>
            <div class=\"module-import-failure\">
              <i class=\"module-import-failure-icon material-icons\">error</i><br/>
              <p class=\"module-import-failure-msg\">{{ \x27Oops... Upload failed.\x27|trans({}, \x27Admin.Modules.Notification\x27) }}</p>
              <a href=\"#\" class=\"module-import-failure-details-action\">{{ \x27What happened?\x27|trans({}, \x27Admin.Modules.Help\x27) }}</a>
              <div class=\"module-import-failure-details\"></div>
              <a class=\"module-import-failure-retry btn btn-secondary\" href=\"#\">{{ \x27Try again\x27|trans({}, \x27Admin.Actions\x27) }}</a>
            </div>
            <div class=\"module-import-confirm\"></div>
          </form>
        {% endif %}
      </div>
      <div class=\"modal-footer\"></div>
    </div>
  </div>
</div>
", "@PrestaShop/Admin/Module/Includes/modal_import.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Module\\Includes\\modal_import.html.twig");
    }
}
