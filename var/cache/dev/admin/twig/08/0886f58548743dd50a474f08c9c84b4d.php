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

/* @PrestaShop/Admin/Component/Layout/multistore_header.html.twig */
class __TwigTemplate_9a0105f5fead2779d83d5742458281c3 extends Template
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
            'multistore_header' => [$this, 'block_multistore_header'],
            'multishop_header_right' => [$this, 'block_multishop_header_right'],
            'search_shops' => [$this, 'block_search_shops'],
            'all_shops_item' => [$this, 'block_all_shops_item'],
            'shop_group_item' => [$this, 'block_shop_group_item'],
            'shop_item' => [$this, 'block_shop_item'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig"));

        // line 5
        yield from $this->unwrap()->yieldBlock('multistore_header', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multistore_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multistore_header"));

        // line 6
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 6, $this->source); })()), "isMultistoreUsed", [], "any", false, false, false, 6) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6)))) {
            // line 7
            yield "    <div
      id=\"header-multishop\"
      class=\"header-multishop";
            // line 9
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "isAllShopContext", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " header-multishop-allshops";
            } elseif (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "contextColor", [], "any", false, false, false, 9))) {
                yield " header-multishop-default";
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 9, $this->source); })()), "isTitleDark", [], "any", false, false, false, 9)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " header-multishop-dark";
            } else {
                yield " header-multishop-bright";
            }
            yield "\"
      ";
            // line 10
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "contextShopId", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-shop-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "contextShopId", [], "any", false, false, false, 10), "html", null, true);
                yield "\"";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-group-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 10, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 10), "html", null, true);
                yield "\"";
            } else {
                yield "data-all-shops=\"1\"";
            }
            // line 11
            yield "      ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 11, $this->source); })()), "colorConfigLink", [], "any", false, false, false, 11))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "data-header-color-notification=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Customize your multistore header, [1]pick a color[/1] for this store context.", ["[1]" => (("<a href=\"" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 11, $this->source); })()), "colorConfigLink", [], "any", false, false, false, 11)) . "\">"), "[/1]" => "</a>"], "Admin.Navigation.Header"), "html", null, true);
                yield "\"";
            }
            // line 12
            yield "      data-checkbox-notification=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.", [], "Admin.Navigation.Header") . " "), "html", null, true);
            yield "\"
    >
      <div class=\"header-multishop-top-bar\"";
            // line 14
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "contextColor", [], "any", false, false, false, 14))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " style=\"background-color: ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 14, $this->source); })()), "contextColor", [], "any", false, false, false, 14), "html", null, true);
                yield ";\"";
            }
            yield ">
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          ";
            // line 16
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 16, $this->source); })()), "contextShopId", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 17
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/shop_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 17, $this->source); })()), "isTitleDark", [], "any", false, false, false, 17)]);
                yield "
          ";
            } else {
                // line 19
                yield "            ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/Component/MultiShop/multi_shops_icon.html.twig", ["isTitleDark" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 19, $this->source); })()), "isTitleDark", [], "any", false, false, false, 19)]);
                yield "
          ";
            }
            // line 21
            yield "
          <h2 class=\"header-multishop-title\">
            ";
            // line 23
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " "), "html", null, true);
                yield " ";
            }
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 23, $this->source); })()), "contextName", [], "any", false, false, false, 23), "html", null, true);
            yield "
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      ";
            // line 32
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 32, $this->source); })()), "contextShopId", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 33
                yield "        <div class=\"header-multishop-right\">
          ";
                // line 34
                yield from $this->unwrap()->yieldBlock('multishop_header_right', $context, $blocks);
                // line 37
                yield "        </div>
      ";
            }
            // line 39
            yield "
      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            ";
            // line 43
            yield from $this->unwrap()->yieldBlock('search_shops', $context, $blocks);
            // line 51
            yield "
            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
              ";
            // line 53
            yield from $this->unwrap()->yieldBlock('all_shops_item', $context, $blocks);
            // line 67
            yield "              ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 67, $this->source); })()), "groupList", [], "any", false, false, false, 67));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 68
                yield "                <li class=\"multishop-modal-group-item multishop-modal-item";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " first-group-item";
                }
                yield "\">
                  ";
                // line 69
                yield from $this->unwrap()->yieldBlock('shop_group_item', $context, $blocks);
                // line 76
                yield "                </li>

                ";
                // line 78
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["group"], "shops", [], "any", false, false, false, 78));
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
                foreach ($context['_seq'] as $context["_key"] => $context["shop"]) {
                    // line 79
                    yield "                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    ";
                    // line 80
                    yield from $this->unwrap()->yieldBlock('shop_item', $context, $blocks);
                    // line 94
                    yield "                  </li>
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
                unset($context['_seq'], $context['_key'], $context['shop'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                yield "              ";
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
            unset($context['_seq'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            yield "            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("themes/new-theme/public/multistore_header.bundle.js"), "html", null, true);
            yield "\"></script>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_multishop_header_right(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multishop_header_right"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "multishop_header_right"));

        // line 35
        yield "            <a class=\"header-multishop-view-action\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 35, $this->source); })()), "link", [], "any", false, false, false, 35), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 35, $this->source); })()), "contextShopId", [], "any", false, false, false, 35)], "method", false, false, false, 35), "html", null, true);
        yield "\" target=\"_blank\" rel=\"nofollow\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
        yield " <i class=\"material-icons\">visibility</i></a>
          ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_shops"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_shops"));

        // line 44
        yield "              ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 44, $this->source); })()), "isLockedToAllShopContext", [], "any", false, false, false, 44) == false)) {
            // line 45
            yield "                <div class=\"multishop-modal-search-container\">
                  <i class=\"material-icons\">search</i>
                  <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search store name", [], "Admin.Navigation.Header"), "html", null, true);
            yield "\" data-no-results=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No results found for", [], "Admin.Global"), "html", null, true);
            yield "\" data-searching=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Searching for", [], "Admin.Global"), "html", null, true);
            yield "\">
                </div>
              ";
        }
        // line 50
        yield "            ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_all_shops_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_shops_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "all_shops_item"));

        // line 54
        yield "                ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 54, $this->source); })()), "allShopsAllowed", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "                <li class=\"multishop-modal-all multishop-modal-item\">
                  ";
            // line 56
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 56, $this->source); })()), "isAllShopContext", [], "any", false, false, false, 56)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 57
                yield "                    <i class=\"material-icons\">check</i>
                  ";
            } else {
                // line 59
                yield "                    <span class=\"multishop-modal-color multishop-modal-color--default\"></span>
                  ";
            }
            // line 61
            yield "                  <a class=\"multishop-modal-all-name\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateUrl(), "html", null, true);
            yield "\">
                    <span>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("All stores", [], "Admin.Global"), "html", null, true);
            yield "</span>
                  </a>
                </li>
                ";
        }
        // line 66
        yield "              ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_group_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_group_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_group_item"));

        // line 70
        yield "                    <span class=\"multishop-modal-color-container";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 70, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 70) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 70, $this->source); })()), "contextShopGroupId", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                      <i class=\"material-icons\">check</i>
                      <a class=\"multishop-modal-color\"";
        // line 72
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 72, $this->source); })()), "color", [], "any", false, false, false, 72))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 72, $this->source); })()), "color", [], "any", false, false, false, 72), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopGroup", true, ["id_shop_group" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 72, $this->source); })()), "id", [], "any", false, false, false, 72), "updateshop_group" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                    </span>
                    <a class=\"multishop-modal-group-name\" href=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateGroupUrl((isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 74, $this->source); })())), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Group", [], "Admin.Global") . " ") . CoreExtension::getAttribute($this->env, $this->source, (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new RuntimeError('Variable "group" does not exist.', 74, $this->source); })()), "name", [], "any", false, false, false, 74)), "html", null, true);
        yield "</a>
                  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_item(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_item"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_item"));

        // line 81
        yield "                      <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container";
        // line 82
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 82, $this->source); })()), "contextShopId", [], "any", false, false, false, 82) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 82, $this->source); })()), "contextShopId", [], "any", false, false, false, 82) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 82, $this->source); })()), "id", [], "any", false, false, false, 82)))) {
            yield " multishop-modal-color-check";
        }
        yield "\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"";
        // line 84
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 84, $this->source); })()), "color", [], "any", false, false, false, 84))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " style=\"background-color: ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 84, $this->source); })()), "color", [], "any", false, false, false, 84), "html", null, true);
            yield ";\"";
        }
        yield " href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShop", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84), "updateshop" => true]), "html", null, true);
        yield "\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Edit color", [], "Admin.Global"), "html", null, true);
        yield "\" data-original-title=\"\" title=\"\"></a>
                      </span>
                        <a class=\"multishop-modal-shop-name";
        // line 86
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 86, $this->source); })()), "hasMainUrl", [], "method", false, false, false, 86) == false)) {
            yield " multishop-modal-no-url\"";
        } else {
            yield "\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\MultistoreUrlExtension']->generateShopUrl((isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 86, $this->source); })())), "html", null, true);
            yield "\"";
        }
        yield ">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 86, $this->source); })()), "name", [], "any", false, false, false, 86), "html", null, true);
        yield "</a>
                      </div>
                      ";
        // line 88
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 88, $this->source); })()), "hasMainUrl", [], "method", false, false, false, 88)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 89
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["this"]) || array_key_exists("this", $context) ? $context["this"] : (function () { throw new RuntimeError('Variable "this" does not exist.', 89, $this->source); })()), "link", [], "any", false, false, false, 89), "getBaseLink", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)], "method", false, false, false, 89), "html", null, true);
            yield "\" target=\"_blank\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View my store", [], "Admin.Navigation.Header"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        } else {
            // line 91
            yield "                        <a class=\"multishop-modal-shop-view\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\LayoutExtension']->getAdminLink("AdminShopUrl", true, ["shop_id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["shop"]) || array_key_exists("shop", $context) ? $context["shop"] : (function () { throw new RuntimeError('Variable "shop" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91), "addshop_url" => 1]), "html", null, true);
            yield "\" rel=\"noreferrer\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Configure URL", [], "Admin.Actions"), "html", null, true);
            yield " <i class=\"material-icons\">visibility</i></a>
                      ";
        }
        // line 93
        yield "                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  532 => 93,  524 => 91,  516 => 89,  514 => 88,  501 => 86,  488 => 84,  481 => 82,  478 => 81,  465 => 80,  450 => 74,  437 => 72,  429 => 70,  416 => 69,  405 => 66,  398 => 62,  393 => 61,  389 => 59,  385 => 57,  383 => 56,  380 => 55,  377 => 54,  364 => 53,  353 => 50,  343 => 47,  339 => 45,  336 => 44,  323 => 43,  307 => 35,  294 => 34,  280 => 103,  272 => 97,  258 => 96,  243 => 94,  241 => 80,  238 => 79,  221 => 78,  217 => 76,  215 => 69,  208 => 68,  190 => 67,  188 => 53,  184 => 51,  182 => 43,  176 => 39,  172 => 37,  170 => 34,  167 => 33,  165 => 32,  149 => 23,  145 => 21,  139 => 19,  133 => 17,  131 => 16,  122 => 14,  116 => 12,  109 => 11,  97 => 10,  84 => 9,  80 => 7,  77 => 6,  54 => 5,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}
{% block multistore_header %}
  {% if this.isMultistoreUsed and app.request is not null %}
    <div
      id=\"header-multishop\"
      class=\"header-multishop{% if this.isAllShopContext %} header-multishop-allshops{% elseif this.contextColor is empty %} header-multishop-default{% endif %}{% if this.isTitleDark %} header-multishop-dark{% else %} header-multishop-bright{% endif %}\"
      {% if this.contextShopId %}data-shop-id=\"{{ this.contextShopId }}\"{% elseif this.contextShopGroupId %}data-group-id=\"{{ this.contextShopGroupId }}\"{% else %}data-all-shops=\"1\"{% endif %}
      {% if this.colorConfigLink is not empty %}data-header-color-notification=\"{{ \x27Customize your multistore header, [1]pick a color[/1] for this store context.\x27|trans({\x27[1]\x27: \x27<a href=\"\x27 ~ this.colorConfigLink ~ \x27\">\x27, \x27[/1]\x27: \x27</a>\x27}, \x27Admin.Navigation.Header\x27) }}\"{% endif %}
      data-checkbox-notification=\"{{ \x27To apply specific settings to a store or a group of stores, select the parameter to modify, make your changes and save.\x27|trans({}, \x27Admin.Navigation.Header\x27) ~ \x27 \x27 }}\"
    >
      <div class=\"header-multishop-top-bar\"{% if this.contextColor is not empty %} style=\"background-color: {{ this.contextColor }};\"{% endif %}>
        <div class=\"header-multishop-center js-header-multishop-open-modal\">
          {% if this.contextShopId %}
            {{ include(\x27@PrestaShop/Admin/Component/MultiShop/shop_icon.html.twig\x27, {isTitleDark: this.isTitleDark}) }}
          {% else %}
            {{ include(\x27@PrestaShop/Admin/Component/MultiShop/multi_shops_icon.html.twig\x27, {isTitleDark: this.isTitleDark}) }}
          {% endif %}

          <h2 class=\"header-multishop-title\">
            {% if this.contextShopGroupId %}{{ \x27Group\x27|trans({}, \x27Admin.Global\x27) ~ \x27 \x27 }} {% endif %}{{ this.contextName }}
          </h2>

          <button class=\"header-multishop-button\">
            <i class=\"material-icons\">expand_more</i>
          </button>
        </div>
      </div>

      {% if this.contextShopId %}
        <div class=\"header-multishop-right\">
          {% block multishop_header_right %}
            <a class=\"header-multishop-view-action\" href=\"{{ this.link.getBaseLink(this.contextShopId) }}\" target=\"_blank\" rel=\"nofollow\">{{ \x27View my store\x27|trans({}, \x27Admin.Navigation.Header\x27) }} <i class=\"material-icons\">visibility</i></a>
          {% endblock %}
        </div>
      {% endif %}

      <div id=\"multishop-modal\" class=\"multishop-modal multishop-modal-hidden js-multishop-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"multishop-modal\" aria-hidden=\"true\">
        <div class=\"multishop-modal-dialog js-multishop-modal-dialog\" role=\"document\">
          <div class=\"multishop-modal-body\">
            {% block search_shops %}
              {% if this.isLockedToAllShopContext == false %}
                <div class=\"multishop-modal-search-container\">
                  <i class=\"material-icons\">search</i>
                  <input type=\"text\" class=\"form-control multishop-modal-search js-multishop-modal-search\" placeholder=\"{{ \x27Search store name\x27|trans({}, \x27Admin.Navigation.Header\x27) }}\" data-no-results=\"{{ \x27No results found for\x27|trans({}, \x27Admin.Global\x27) }}\" data-searching=\"{{ \x27Searching for\x27|trans({}, \x27Admin.Global\x27) }}\">
                </div>
              {% endif %}
            {% endblock %}

            <ul class=\"multishop-modal-group-list js-multishop-scrollbar\">
              {% block all_shops_item %}
                {% if this.allShopsAllowed %}
                <li class=\"multishop-modal-all multishop-modal-item\">
                  {% if this.isAllShopContext %}
                    <i class=\"material-icons\">check</i>
                  {% else %}
                    <span class=\"multishop-modal-color multishop-modal-color--default\"></span>
                  {% endif %}
                  <a class=\"multishop-modal-all-name\" href=\"{{ multistore_url() }}\">
                    <span>{{ \x27All stores\x27|trans({}, \x27Admin.Global\x27) }}</span>
                  </a>
                </li>
                {% endif %}
              {% endblock %}
              {% for group in this.groupList %}
                <li class=\"multishop-modal-group-item multishop-modal-item{% if loop.first %} first-group-item{% endif %}\">
                  {% block shop_group_item %}
                    <span class=\"multishop-modal-color-container{% if this.contextShopGroupId and this.contextShopGroupId == group.id %} multishop-modal-color-check{% endif %}\">
                      <i class=\"material-icons\">check</i>
                      <a class=\"multishop-modal-color\"{% if group.color is not empty %} style=\"background-color: {{ group.color }};\"{% endif %} href=\"{{ getAdminLink(\x27AdminShopGroup\x27, true, {id_shop_group: group.id, updateshop_group: true}) }}\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ \x27Edit color\x27|trans({}, \x27Admin.Global\x27) }}\" data-original-title=\"\" title=\"\"></a>
                    </span>
                    <a class=\"multishop-modal-group-name\" href=\"{{ multistore_group_url(group) }}\">{{ \x27Group\x27|trans({}, \x27Admin.Global\x27) ~ \x27 \x27 ~ group.name }}</a>
                  {% endblock %}
                </li>

                {% for shop in group.shops %}
                  <li class=\"multishop-modal-shop-item multishop-modal-item\">
                    {% block shop_item %}
                      <div class=\"multishop-modal-item-left\">
                      <span class=\"multishop-modal-color-container{% if this.contextShopId and this.contextShopId == shop.id %} multishop-modal-color-check{% endif %}\">
                        <i class=\"material-icons\">check</i>
                        <a class=\"multishop-modal-color\"{% if shop.color is not empty %} style=\"background-color: {{ shop.color }};\"{% endif %} href=\"{{ getAdminLink(\x27AdminShop\x27, true, {shop_id: shop.id, updateshop: true}) }}\" data-toggle=\"popover\" data-trigger=\"hover\" data-placement=\"top\" data-content=\"{{ \x27Edit color\x27|trans({}, \x27Admin.Global\x27) }}\" data-original-title=\"\" title=\"\"></a>
                      </span>
                        <a class=\"multishop-modal-shop-name{% if shop.hasMainUrl() == false %} multishop-modal-no-url\"{% else %}\" href=\"{{ multistore_shop_url(shop) }}\"{% endif %}>{{ shop.name }}</a>
                      </div>
                      {% if shop.hasMainUrl() %}
                        <a class=\"multishop-modal-shop-view\" href=\"{{ this.link.getBaseLink(shop.id) }}\" target=\"_blank\" rel=\"noreferrer\">{{ \x27View my store\x27|trans({}, \x27Admin.Navigation.Header\x27) }} <i class=\"material-icons\">visibility</i></a>
                      {% else %}
                        <a class=\"multishop-modal-shop-view\" href=\"{{ getAdminLink(\x27AdminShopUrl\x27, true, {shop_id: shop.id, addshop_url: 1}) }}\" rel=\"noreferrer\">{{ \x27Configure URL\x27|trans({}, \x27Admin.Actions\x27) }} <i class=\"material-icons\">visibility</i></a>
                      {% endif %}
                    {% endblock %}
                  </li>
                {% endfor %}
              {% endfor %}
            </ul>
          </div>
        </div>
      </div>
    </div>

    <script src=\"{{ asset(\x27themes/new-theme/public/multistore_header.bundle.js\x27) }}\"></script>
  {% endif %}
{% endblock %}
", "@PrestaShop/Admin/Component/Layout/multistore_header.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\Component\\Layout\\multistore_header.html.twig");
    }
}
