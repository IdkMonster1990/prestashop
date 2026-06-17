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

/* @PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig */
class __TwigTemplate_d34053238ba96436c8e18f0013618fc0 extends Template
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

        // line 25
        $_trait_0 = $this->load("bootstrap_base_layout.html.twig", 25);
        if (!$_trait_0->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.', 25, $this->source);
        }
        $_trait_0_blocks = $_trait_0->unwrap()->getBlocks();

        if (!isset($_trait_0_blocks["radio_widget"])) {
            throw new RuntimeError(sprintf('Block "%s" is not defined in trait "%s".', "radio_widget", "bootstrap_base_layout.html.twig"), 25, $this->source);
        }

        $_trait_0_blocks["base_radio_widget"] = $_trait_0_blocks["radio_widget"]; unset($_trait_0_blocks["radio_widget"]); $this->traitAliases["base_radio_widget"] = "radio_widget";

        if (!isset($_trait_0_blocks["checkbox_widget"])) {
            throw new RuntimeError(sprintf('Block "%s" is not defined in trait "%s".', "checkbox_widget", "bootstrap_base_layout.html.twig"), 25, $this->source);
        }

        $_trait_0_blocks["base_checkbox_widget"] = $_trait_0_blocks["checkbox_widget"]; unset($_trait_0_blocks["checkbox_widget"]); $this->traitAliases["base_checkbox_widget"] = "checkbox_widget";

        // line 28
        $_trait_1 = $this->load("bootstrap_4_layout.html.twig", 28);
        if (!$_trait_1->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.', 28, $this->source);
        }
        $_trait_1_blocks = $_trait_1->unwrap()->getBlocks();

        // line 29
        $_trait_2 = $this->load("@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig", 29);
        if (!$_trait_2->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig".'" cannot be used as a trait.', 29, $this->source);
        }
        $_trait_2_blocks = $_trait_2->unwrap()->getBlocks();

        // line 30
        $_trait_3 = $this->load("@PrestaShop/Admin/TwigTemplateForm/material.html.twig", 30);
        if (!$_trait_3->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/material.html.twig".'" cannot be used as a trait.', 30, $this->source);
        }
        $_trait_3_blocks = $_trait_3->unwrap()->getBlocks();

        // line 31
        $_trait_4 = $this->load("@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig", 31);
        if (!$_trait_4->unwrap()->isTraitable()) {
            throw new RuntimeError('Template "'."@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig".'" cannot be used as a trait.', 31, $this->source);
        }
        $_trait_4_blocks = $_trait_4->unwrap()->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks,
            $_trait_2_blocks,
            $_trait_3_blocks,
            $_trait_4_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            [
                'form_start' => [$this, 'block_form_start'],
                'form_widget' => [$this, 'block_form_widget'],
                'form_widget_simple' => [$this, 'block_form_widget_simple'],
                'ip_address_text_widget' => [$this, 'block_ip_address_text_widget'],
                'password_widget' => [$this, 'block_password_widget'],
                'form_row' => [$this, 'block_form_row'],
                'form_modify_all_shops' => [$this, 'block_form_modify_all_shops'],
                'form_disabling_switch' => [$this, 'block_form_disabling_switch'],
                'widget_type_class' => [$this, 'block_widget_type_class'],
                'form_label' => [$this, 'block_form_label'],
                'textarea_widget' => [$this, 'block_textarea_widget'],
                'money_widget' => [$this, 'block_money_widget'],
                'percent_widget' => [$this, 'block_percent_widget'],
                'datetime_widget' => [$this, 'block_datetime_widget'],
                'url_widget' => [$this, 'block_url_widget'],
                'date_widget' => [$this, 'block_date_widget'],
                'time_widget' => [$this, 'block_time_widget'],
                'email_widget' => [$this, 'block_email_widget'],
                'button_widget' => [$this, 'block_button_widget'],
                'icon_button_widget' => [$this, 'block_icon_button_widget'],
                'choice_widget' => [$this, 'block_choice_widget'],
                'choice_widget_collapsed' => [$this, 'block_choice_widget_collapsed'],
                'choice_widget_expanded' => [$this, 'block_choice_widget_expanded'],
                'choice_tree_widget' => [$this, 'block_choice_tree_widget'],
                'choice_tree_item_widget' => [$this, 'block_choice_tree_item_widget'],
                'translatefields_widget' => [$this, 'block_translatefields_widget'],
                'translate_fields_widget' => [$this, 'block_translate_fields_widget'],
                'translate_text_widget' => [$this, 'block_translate_text_widget'],
                'translate_textarea_widget' => [$this, 'block_translate_textarea_widget'],
                'date_picker_widget' => [$this, 'block_date_picker_widget'],
                'date_range_widget' => [$this, 'block_date_range_widget'],
                'search_and_reset_widget' => [$this, 'block_search_and_reset_widget'],
                'switch_widget' => [$this, 'block_switch_widget'],
                'row_attributes' => [$this, 'block_row_attributes'],
                '_form_step6_attachments_widget' => [$this, 'block__form_step6_attachments_widget'],
                'choice_label' => [$this, 'block_choice_label'],
                'checkbox_label' => [$this, 'block_checkbox_label'],
                'radio_label' => [$this, 'block_radio_label'],
                'checkbox_radio_label' => [$this, 'block_checkbox_radio_label'],
                'radio_widget' => [$this, 'block_radio_widget'],
                'checkbox_widget' => [$this, 'block_checkbox_widget'],
                'form_errors' => [$this, 'block_form_errors'],
                'form_errors_field' => [$this, 'block_form_errors_field'],
                'form_errors_other' => [$this, 'block_form_errors_other'],
                'material_choice_table_widget' => [$this, 'block_material_choice_table_widget'],
                'material_multiple_choice_table_widget' => [$this, 'block_material_multiple_choice_table_widget'],
                'translatable_fields_with_tabs' => [$this, 'block_translatable_fields_with_tabs'],
                'translatable_fields_with_dropdown' => [$this, 'block_translatable_fields_with_dropdown'],
                'translatable_widget' => [$this, 'block_translatable_widget'],
                'birthday_widget' => [$this, 'block_birthday_widget'],
                'file_widget' => [$this, 'block_file_widget'],
                'shop_restriction_checkbox_widget' => [$this, 'block_shop_restriction_checkbox_widget'],
                'generatable_text_widget' => [$this, 'block_generatable_text_widget'],
                'text_with_recommended_length_widget' => [$this, 'block_text_with_recommended_length_widget'],
                'text_with_length_counter_widget' => [$this, 'block_text_with_length_counter_widget'],
                'integer_min_max_filter_widget' => [$this, 'block_integer_min_max_filter_widget'],
                'number_min_max_filter_widget' => [$this, 'block_number_min_max_filter_widget'],
                'number_widget' => [$this, 'block_number_widget'],
                'integer_widget' => [$this, 'block_integer_widget'],
                'form_unit' => [$this, 'block_form_unit'],
                'form_unit_prepend' => [$this, 'block_form_unit_prepend'],
                'form_help' => [$this, 'block_form_help'],
                'form_prepend_external_link' => [$this, 'block_form_prepend_external_link'],
                'form_append_external_link' => [$this, 'block_form_append_external_link'],
                'form_external_link' => [$this, 'block_form_external_link'],
                'form_external_link_attributes' => [$this, 'block_form_external_link_attributes'],
                'custom_content_widget' => [$this, 'block_custom_content_widget'],
                'text_widget' => [$this, 'block_text_widget'],
                'form_prepend_alert' => [$this, 'block_form_prepend_alert'],
                'form_append_alert' => [$this, 'block_form_append_alert'],
                'form_alert' => [$this, 'block_form_alert'],
                'unavailable_widget' => [$this, 'block_unavailable_widget'],
                'text_preview_widget' => [$this, 'block_text_preview_widget'],
                'link_preview_widget' => [$this, 'block_link_preview_widget'],
                'image_preview_widget' => [$this, 'block_image_preview_widget'],
                'delta_quantity_widget' => [$this, 'block_delta_quantity_widget'],
                'delta_quantity_quantity_widget' => [$this, 'block_delta_quantity_quantity_widget'],
                'delta_quantity_delta_row' => [$this, 'block_delta_quantity_delta_row'],
                'delta_quantity_delta_widget' => [$this, 'block_delta_quantity_delta_widget'],
                'submittable_input_widget' => [$this, 'block_submittable_input_widget'],
                'submittable_input_button_widget' => [$this, 'block_submittable_input_button_widget'],
                'submittable_delta_quantity_delta_widget' => [$this, 'block_submittable_delta_quantity_delta_widget'],
                'navigation_tab_widget' => [$this, 'block_navigation_tab_widget'],
                'toggle_children_choice_widget' => [$this, 'block_toggle_children_choice_widget'],
                'accordion_widget' => [$this, 'block_accordion_widget'],
                'button_collection_widget' => [$this, 'block_button_collection_widget'],
                'card_row' => [$this, 'block_card_row'],
                'avatar_url_row' => [$this, 'block_avatar_url_row'],
                'change_password_row' => [$this, 'block_change_password_row'],
                'price_reduction_widget' => [$this, 'block_price_reduction_widget'],
                'image_with_preview_widget' => [$this, 'block_image_with_preview_widget'],
                'tagged_item_collection_widget' => [$this, 'block_tagged_item_collection_widget'],
                'tagged_item_collection_entry_row' => [$this, 'block_tagged_item_collection_entry_row'],
            ]
        );
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig"));

        // line 5
        yield "
";
        // line 14
        yield "
";
        // line 26
        yield "
";
        // line 32
        yield "
";
        // line 34
        yield "
";
        // line 36
        yield "
";
        // line 37
        yield from $this->unwrap()->yieldBlock('form_start', $context, $blocks);
        // line 47
        yield from $this->unwrap()->yieldBlock('form_widget', $context, $blocks);
        // line 55
        yield from $this->unwrap()->yieldBlock('form_widget_simple', $context, $blocks);
        // line 60
        yield from $this->unwrap()->yieldBlock('ip_address_text_widget', $context, $blocks);
        // line 70
        yield from $this->unwrap()->yieldBlock('password_widget', $context, $blocks);
        // line 77
        yield "
";
        // line 78
        yield from $this->unwrap()->yieldBlock('form_row', $context, $blocks);
        // line 96
        yield "
";
        // line 101
        yield from $this->unwrap()->yieldBlock('form_modify_all_shops', $context, $blocks);
        // line 108
        yield "
";
        // line 109
        yield from $this->unwrap()->yieldBlock('form_disabling_switch', $context, $blocks);
        // line 119
        yield "
";
        // line 120
        yield from $this->unwrap()->yieldBlock('widget_type_class', $context, $blocks);
        // line 139
        yield "
";
        // line 142
        yield from $this->unwrap()->yieldBlock('form_label', $context, $blocks);
        // line 188
        yield "
";
        // line 189
        yield from $this->unwrap()->yieldBlock('textarea_widget', $context, $blocks);
        // line 195
        yield "
";
        // line 196
        yield from $this->unwrap()->yieldBlock('money_widget', $context, $blocks);
        // line 214
        yield "
";
        // line 215
        yield from $this->unwrap()->yieldBlock('percent_widget', $context, $blocks);
        // line 223
        yield "
";
        // line 224
        yield from $this->unwrap()->yieldBlock('datetime_widget', $context, $blocks);
        // line 238
        yield from $this->unwrap()->yieldBlock('url_widget', $context, $blocks);
        // line 244
        yield from $this->unwrap()->yieldBlock('date_widget', $context, $blocks);
        // line 262
        yield "
";
        // line 263
        yield from $this->unwrap()->yieldBlock('time_widget', $context, $blocks);
        // line 278
        yield from $this->unwrap()->yieldBlock('email_widget', $context, $blocks);
        // line 284
        yield from $this->unwrap()->yieldBlock('button_widget', $context, $blocks);
        // line 288
        yield "
";
        // line 289
        yield from $this->unwrap()->yieldBlock('icon_button_widget', $context, $blocks);
        // line 307
        yield "
";
        // line 308
        yield from $this->unwrap()->yieldBlock('choice_widget', $context, $blocks);
        // line 312
        yield "
";
        // line 313
        yield from $this->unwrap()->yieldBlock('choice_widget_collapsed', $context, $blocks);
        // line 317
        yield "
";
        // line 318
        yield from $this->unwrap()->yieldBlock('choice_widget_expanded', $context, $blocks);
        // line 341
        yield "
";
        // line 342
        yield from $this->unwrap()->yieldBlock('choice_tree_widget', $context, $blocks);
        // line 352
        yield "
";
        // line 353
        yield from $this->unwrap()->yieldBlock('choice_tree_item_widget', $context, $blocks);
        // line 391
        yield "
";
        // line 392
        yield from $this->unwrap()->yieldBlock('translatefields_widget', $context, $blocks);
        // line 417
        yield "
";
        // line 418
        yield from $this->unwrap()->yieldBlock('translate_fields_widget', $context, $blocks);
        // line 424
        yield "
";
        // line 425
        yield from $this->unwrap()->yieldBlock('translate_text_widget', $context, $blocks);
        // line 461
        yield "
";
        // line 462
        yield from $this->unwrap()->yieldBlock('translate_textarea_widget', $context, $blocks);
        // line 503
        yield "
";
        // line 504
        yield from $this->unwrap()->yieldBlock('date_picker_widget', $context, $blocks);
        // line 518
        yield "
";
        // line 519
        yield from $this->unwrap()->yieldBlock('date_range_widget', $context, $blocks);
        // line 535
        yield "
";
        // line 536
        yield from $this->unwrap()->yieldBlock('search_and_reset_widget', $context, $blocks);
        // line 561
        yield "
";
        // line 562
        yield from $this->unwrap()->yieldBlock('switch_widget', $context, $blocks);
        // line 586
        yield from $this->unwrap()->yieldBlock('row_attributes', $context, $blocks);
        // line 594
        yield from $this->unwrap()->yieldBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 623
        yield "
";
        // line 625
        yield "
";
        // line 626
        yield from $this->unwrap()->yieldBlock('choice_label', $context, $blocks);
        // line 631
        yield "
";
        // line 632
        yield from $this->unwrap()->yieldBlock('checkbox_label', $context, $blocks);
        // line 635
        yield "
";
        // line 636
        yield from $this->unwrap()->yieldBlock('radio_label', $context, $blocks);
        // line 639
        yield "
";
        // line 640
        yield from $this->unwrap()->yieldBlock('checkbox_radio_label', $context, $blocks);
        // line 672
        yield "
";
        // line 673
        yield from $this->unwrap()->yieldBlock('radio_widget', $context, $blocks);
        // line 687
        yield "
";
        // line 688
        yield from $this->unwrap()->yieldBlock('checkbox_widget', $context, $blocks);
        // line 695
        yield "
";
        // line 697
        yield "
";
        // line 698
        yield from $this->unwrap()->yieldBlock('form_errors', $context, $blocks);
        // line 705
        yield "
";
        // line 706
        yield from $this->unwrap()->yieldBlock('form_errors_field', $context, $blocks);
        // line 762
        yield "
";
        // line 763
        yield from $this->unwrap()->yieldBlock('form_errors_other', $context, $blocks);
        // line 778
        yield "
";
        // line 780
        yield "
";
        // line 781
        yield from $this->unwrap()->yieldBlock('material_choice_table_widget', $context, $blocks);
        // line 818
        yield "
";
        // line 819
        yield from $this->unwrap()->yieldBlock('material_multiple_choice_table_widget', $context, $blocks);
        // line 871
        yield "
";
        // line 873
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_tabs', $context, $blocks);
        // line 896
        yield "
";
        // line 897
        yield from $this->unwrap()->yieldBlock('translatable_fields_with_dropdown', $context, $blocks);
        // line 933
        yield "
";
        // line 934
        yield from $this->unwrap()->yieldBlock('translatable_widget', $context, $blocks);
        // line 942
        yield "
";
        // line 943
        yield from $this->unwrap()->yieldBlock('birthday_widget', $context, $blocks);
        // line 967
        yield "
";
        // line 968
        yield from $this->unwrap()->yieldBlock('file_widget', $context, $blocks);
        // line 1000
        yield "
";
        // line 1001
        yield from $this->unwrap()->yieldBlock('shop_restriction_checkbox_widget', $context, $blocks);
        // line 1017
        yield "
";
        // line 1018
        yield from $this->unwrap()->yieldBlock('generatable_text_widget', $context, $blocks);
        // line 1037
        yield "
";
        // line 1038
        yield from $this->unwrap()->yieldBlock('text_with_recommended_length_widget', $context, $blocks);
        // line 1063
        yield "
";
        // line 1064
        yield from $this->unwrap()->yieldBlock('text_with_length_counter_widget', $context, $blocks);
        // line 1092
        yield "
";
        // line 1093
        yield from $this->unwrap()->yieldBlock('integer_min_max_filter_widget', $context, $blocks);
        // line 1097
        yield "
";
        // line 1098
        yield from $this->unwrap()->yieldBlock('number_min_max_filter_widget', $context, $blocks);
        // line 1103
        yield from $this->unwrap()->yieldBlock('number_widget', $context, $blocks);
        // line 1113
        yield from $this->unwrap()->yieldBlock('integer_widget', $context, $blocks);
        // line 1123
        yield from $this->unwrap()->yieldBlock('form_unit', $context, $blocks);
        // line 1130
        yield "
";
        // line 1131
        yield from $this->unwrap()->yieldBlock('form_unit_prepend', $context, $blocks);
        // line 1138
        yield "
";
        // line 1139
        yield from $this->unwrap()->yieldBlock('form_help', $context, $blocks);
        // line 1148
        yield "
";
        // line 1149
        yield from $this->unwrap()->yieldBlock('form_prepend_external_link', $context, $blocks);
        // line 1154
        yield "
";
        // line 1155
        yield from $this->unwrap()->yieldBlock('form_append_external_link', $context, $blocks);
        // line 1160
        yield "
";
        // line 1161
        yield from $this->unwrap()->yieldBlock('form_external_link', $context, $blocks);
        // line 1179
        yield from $this->unwrap()->yieldBlock('form_external_link_attributes', $context, $blocks);
        // line 1193
        yield from $this->unwrap()->yieldBlock('custom_content_widget', $context, $blocks);
        // line 1196
        yield "
";
        // line 1197
        yield from $this->unwrap()->yieldBlock('text_widget', $context, $blocks);
        // line 1214
        yield from $this->unwrap()->yieldBlock('form_prepend_alert', $context, $blocks);
        // line 1220
        yield from $this->unwrap()->yieldBlock('form_append_alert', $context, $blocks);
        // line 1226
        yield from $this->unwrap()->yieldBlock('form_alert', $context, $blocks);
        // line 1267
        yield from $this->unwrap()->yieldBlock('unavailable_widget', $context, $blocks);
        // line 1274
        yield "
";
        // line 1275
        yield from $this->unwrap()->yieldBlock('text_preview_widget', $context, $blocks);
        // line 1305
        yield "
";
        // line 1306
        yield from $this->unwrap()->yieldBlock('link_preview_widget', $context, $blocks);
        // line 1313
        yield "
";
        // line 1314
        yield from $this->unwrap()->yieldBlock('image_preview_widget', $context, $blocks);
        // line 1323
        yield "
";
        // line 1324
        yield from $this->unwrap()->yieldBlock('delta_quantity_widget', $context, $blocks);
        // line 1337
        yield "
";
        // line 1338
        yield from $this->unwrap()->yieldBlock('delta_quantity_quantity_widget', $context, $blocks);
        // line 1350
        yield "
";
        // line 1351
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_row', $context, $blocks);
        // line 1367
        yield "
";
        // line 1368
        yield from $this->unwrap()->yieldBlock('delta_quantity_delta_widget', $context, $blocks);
        // line 1373
        yield "
";
        // line 1374
        yield from $this->unwrap()->yieldBlock('submittable_input_widget', $context, $blocks);
        // line 1387
        yield "
";
        // line 1388
        yield from $this->unwrap()->yieldBlock('submittable_input_button_widget', $context, $blocks);
        // line 1393
        yield "
";
        // line 1394
        yield from $this->unwrap()->yieldBlock('submittable_delta_quantity_delta_widget', $context, $blocks);
        // line 1408
        yield from $this->unwrap()->yieldBlock('navigation_tab_widget', $context, $blocks);
        // line 1466
        yield from $this->unwrap()->yieldBlock('toggle_children_choice_widget', $context, $blocks);
        // line 1500
        yield from $this->unwrap()->yieldBlock('accordion_widget', $context, $blocks);
        // line 1546
        yield from $this->unwrap()->yieldBlock('button_collection_widget', $context, $blocks);
        // line 1593
        yield from $this->unwrap()->yieldBlock('card_row', $context, $blocks);
        // line 1612
        yield "
";
        // line 1613
        yield from $this->unwrap()->yieldBlock('avatar_url_row', $context, $blocks);
        // line 1623
        yield "
";
        // line 1624
        yield from $this->unwrap()->yieldBlock('change_password_row', $context, $blocks);
        // line 1664
        yield from $this->unwrap()->yieldBlock('price_reduction_widget', $context, $blocks);
        // line 1678
        yield from $this->unwrap()->yieldBlock('image_with_preview_widget', $context, $blocks);
        // line 1718
        yield "
";
        // line 1719
        yield from $this->unwrap()->yieldBlock('tagged_item_collection_widget', $context, $blocks);
        // line 1726
        yield "
";
        // line 1727
        yield from $this->unwrap()->yieldBlock('tagged_item_collection_entry_row', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 37
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_start(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_start"));

        // line 38
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 38, $this->source); })()), ["data-alerts-success" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 38), "alerts", [], "any", false, true, false, 38), "success", [], "any", true, true, false, 38)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "alerts", [], "any", false, false, false, 38), "success", [], "any", false, false, false, 38), [])) : ([])))]);
        // line 39
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 39, $this->source); })()), ["data-alerts-info" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 39), "alerts", [], "any", false, true, false, 39), "info", [], "any", true, true, false, 39)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "vars", [], "any", false, false, false, 39), "alerts", [], "any", false, false, false, 39), "info", [], "any", false, false, false, 39), [])) : ([])))]);
        // line 40
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 40, $this->source); })()), ["data-alerts-warning" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 40), "alerts", [], "any", false, true, false, 40), "warning", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "vars", [], "any", false, false, false, 40), "alerts", [], "any", false, false, false, 40), "warning", [], "any", false, false, false, 40), [])) : ([])))]);
        // line 41
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 41, $this->source); })()), ["data-alerts-error" => Twig\Extension\CoreExtension::length($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 41), "alerts", [], "any", false, true, false, 41), "error", [], "any", true, true, false, 41)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "vars", [], "any", false, false, false, 41), "alerts", [], "any", false, false, false, 41), "error", [], "any", false, false, false, 41), [])) : ([])))]);
        // line 42
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 42, $this->source); })()), ["data-form-submitted" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "submitted", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))]);
        // line 43
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 43, $this->source); })()), ["data-form-valid" => (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "vars", [], "any", false, false, false, 43), "valid", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (1) : (0))]);
        // line 44
        yield "  ";
        yield from $this->yieldParentBlock("form_start", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 47
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget"));

        // line 48
        if (array_key_exists("columns_number", $context)) {
            // line 49
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 49, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 49)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 49, $this->source); })()), "class", [], "any", false, false, false, 49), "")) : ("")) . " form-columns-") . (isset($context["columns_number"]) || array_key_exists("columns_number", $context) ? $context["columns_number"] : (function () { throw new RuntimeError('Variable "columns_number" does not exist.', 49, $this->source); })())))]);
            // line 50
            yield "  ";
        }
        // line 51
        yield "  ";
        yield from $this->yieldParentBlock("form_widget", $context, $blocks);
        // line 52
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_widget_simple(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 56
        yield from $this->yieldParentBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 57
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 57, $this->source); })())]);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_ip_address_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "ip_address_text_widget"));

        // line 61
        yield "  <div class=\"input-group\">";
        // line 62
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 63
        yield "<button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["currentIp"]) || array_key_exists("currentIp", $context) ? $context["currentIp"] : (function () { throw new RuntimeError('Variable "currentIp" does not exist.', 63, $this->source); })()), "html", null, true);
        yield "\">
      <i class=\"material-icons\">add_circle</i> ";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Add my IP", [], "Admin.Actions"), "html", null, true);
        yield "
    </button>
  </div>
  ";
        // line 67
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 70
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_password_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "password_widget"));

        // line 71
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 71, $this->source); })()), "password")) : ("password"));
        // line 72
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 73
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_row"));

        // line 79
        yield "<div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 79, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 79, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 79, $this->source); })()))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 79)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 79, $this->source); })()), "class", [], "any", false, false, false, 79), "html", null, true);
        }
        yield "\">";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 'label');
        // line 81
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 82
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'widget');
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), 'errors');
        // line 86
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 88
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 89
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 90
        yield "</div>

  ";
        // line 92
        if ((($tmp = (isset($context["column_breaker"]) || array_key_exists("column_breaker", $context) ? $context["column_breaker"] : (function () { throw new RuntimeError('Variable "column_breaker" does not exist.', 92, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 93
            yield "  <div class=\"form-group form-column-breaker\"></div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 101
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_modify_all_shops(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_modify_all_shops"));

        // line 102
        yield "  ";
        $context["overrideCheckboxName"] = ((isset($context["modify_all_shops_prefix"]) || array_key_exists("modify_all_shops_prefix", $context) ? $context["modify_all_shops_prefix"] : (function () { throw new RuntimeError('Variable "modify_all_shops_prefix" does not exist.', 102, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "vars", [], "any", false, false, false, 102), "name", [], "any", false, false, false, 102));
        // line 103
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 103), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 103, $this->source); })()), [], "any", true, true, false, 103)) {
            // line 104
            yield "    ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "parent", [], "any", false, false, false, 104), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 104, $this->source); })()), [], "any", false, false, false, 104), 'errors');
            yield "
    ";
            // line 105
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "parent", [], "any", false, false, false, 105), (isset($context["overrideCheckboxName"]) || array_key_exists("overrideCheckboxName", $context) ? $context["overrideCheckboxName"] : (function () { throw new RuntimeError('Variable "overrideCheckboxName" does not exist.', 105, $this->source); })()), [], "any", false, false, false, 105), 'widget');
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_disabling_switch(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_disabling_switch"));

        // line 110
        yield "  ";
        $context["disablingSwitchName"] = ((isset($context["disabling_switch_prefix"]) || array_key_exists("disabling_switch_prefix", $context) ? $context["disabling_switch_prefix"] : (function () { throw new RuntimeError('Variable "disabling_switch_prefix" does not exist.', 110, $this->source); })()) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "vars", [], "any", false, false, false, 110), "name", [], "any", false, false, false, 110));
        // line 111
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "parent", [], "any", false, true, false, 111), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 111, $this->source); })()), [], "any", true, true, false, 111)) {
            // line 112
            yield "    <div class=\"d-inline-flex align-items-center ml-3\">
      ";
            // line 113
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "parent", [], "any", false, false, false, 113), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 113, $this->source); })()), [], "any", false, false, false, 113), 'errors');
            yield "
      ";
            // line 114
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "parent", [], "any", false, false, false, 114), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 114, $this->source); })()), [], "any", false, false, false, 114), 'widget');
            yield "
      ";
            // line 115
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "parent", [], "any", false, false, false, 115), (isset($context["disablingSwitchName"]) || array_key_exists("disablingSwitchName", $context) ? $context["disablingSwitchName"] : (function () { throw new RuntimeError('Variable "disablingSwitchName" does not exist.', 115, $this->source); })()), [], "any", false, false, false, 115), 'label');
            yield "
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 120
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_widget_type_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "widget_type_class"));

        // line 121
        if (( !((array_key_exists("compound", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 121, $this->source); })()), false)) : (false)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "vars", [], "any", false, false, false, 121), "block_prefixes", [], "any", false, false, false, 121)) > 2))) {
            // line 122
            yield " ";
            $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 123
                yield "
    ";
                // line 124
                $context["index"] = (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "vars", [], "any", false, false, false, 124), "block_prefixes", [], "any", false, false, false, 124)) - 2);
                // line 125
                yield "    ";
                $context["widgetType"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "vars", [], "any", false, false, false, 125), "block_prefixes", [], "any", false, false, false, 125), (isset($context["index"]) || array_key_exists("index", $context) ? $context["index"] : (function () { throw new RuntimeError('Variable "index" does not exist.', 125, $this->source); })()), [], "array", false, false, false, 125);
                // line 126
                yield "    ";
                if (((isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 126, $this->source); })()) == "choice")) {
                    // line 127
                    yield "      ";
                    if ((($tmp =  !(isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new RuntimeError('Variable "expanded" does not exist.', 127, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 128
                        yield "        ";
                        $context["widgetType"] = "select";
                        // line 129
                        yield "      ";
                    } elseif ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 129, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 130
                        yield "        ";
                        $context["widgetType"] = "checboxes";
                        // line 131
                        yield "      ";
                    } else {
                        // line 132
                        yield "        ";
                        $context["widgetType"] = "radio";
                        // line 133
                        yield "      ";
                    }
                    // line 134
                    yield "    ";
                }
                // line 135
                yield "    ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["widgetType"]) || array_key_exists("widgetType", $context) ? $context["widgetType"] : (function () { throw new RuntimeError('Variable "widgetType" does not exist.', 135, $this->source); })()), "html", null, true);
                yield "-widget
";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 122
            yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v0, "html", null, true));
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 142
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_label"));

        // line 143
        if ((($tmp =  !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 143, $this->source); })()) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 144
            if ((($tmp =  !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 144, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 145
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 145, $this->source); })()), ["for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 145, $this->source); })())]);
            }
            // line 147
            yield "    ";
            if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 147, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 148, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 148)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 148, $this->source); })()), "class", [], "any", false, false, false, 148), "")) : ("")) . " required"))]);
            }
            // line 150
            yield "    ";
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 150, $this->source); })()))) {
                // line 151
                if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 151, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 152
                    $context["label"] = Twig\Extension\CoreExtension::replace((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new RuntimeError('Variable "label_format" does not exist.', 152, $this->source); })()), ["%name%" =>                     // line 153
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 153, $this->source); })()), "%id%" =>                     // line 154
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 154, $this->source); })())]);
                } else {
                    // line 157
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 157, $this->source); })()));
                }
            }
            // line 161
            $context["labelTag"] = ((array_key_exists("label_tag_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["label_tag_name"]) || array_key_exists("label_tag_name", $context) ? $context["label_tag_name"] : (function () { throw new RuntimeError('Variable "label_tag_name" does not exist.', 161, $this->source); })()), "label")) : ("label"));
            // line 162
            yield "    <";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 162, $this->source); })()), "html", null, true);
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    ";
            // line 163
            if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 163, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 164
                yield "      <span class=\"text-danger\">*</span>
    ";
            }
            // line 166
            yield "    ";
            yield ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 166, $this->source); })()) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 166, $this->source); })()))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 166, $this->source); })()))));
            yield "
    ";
            // line 167
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip", [], "array", true, true, false, 167)) {
                // line 168
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "tooltip_placement", [], "array", true, true, false, 168)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 168, $this->source); })()), "tooltip_placement", [], "array", false, false, false, 168)) : ("top"));
                // line 169
                yield "      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 169, $this->source); })()), "html", null, true);
                yield "\"
         title=\"";
                // line 170
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 170, $this->source); })()), "tooltip", [], "array", false, false, false, 170), "html", null, true);
                yield "\"></i>
    ";
            }
            // line 172
            yield "
    ";
            // line 173
            if ((array_key_exists("label_help_box", $context) || CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover", [], "array", true, true, false, 173))) {
                // line 174
                yield "      ";
                $context["content"] = ((array_key_exists("label_help_box", $context)) ? ((isset($context["label_help_box"]) || array_key_exists("label_help_box", $context) ? $context["label_help_box"] : (function () { throw new RuntimeError('Variable "label_help_box" does not exist.', 174, $this->source); })())) : (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 174, $this->source); })()), "popover", [], "array", false, false, false, 174)));
                // line 175
                yield "      ";
                $context["placement"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "popover_placement", [], "array", true, true, false, 175)) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 175, $this->source); })()), "popover_placement", [], "array", false, false, false, 175)) : ("top"));
                // line 176
                yield "      ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "@Common/HelpBox/helpbox.html.twig", ["placement" => (isset($context["placement"]) || array_key_exists("placement", $context) ? $context["placement"] : (function () { throw new RuntimeError('Variable "placement" does not exist.', 176, $this->source); })()), "content" => (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 176, $this->source); })())]);
                yield "
    ";
            }
            // line 179
            yield from             $this->unwrap()->yieldBlock("form_disabling_switch", $context, $blocks);
            // line 180
            yield "</";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["labelTag"]) || array_key_exists("labelTag", $context) ? $context["labelTag"] : (function () { throw new RuntimeError('Variable "labelTag" does not exist.', 180, $this->source); })()), "html", null, true);
            yield ">";
        }
        // line 182
        if ((array_key_exists("label_subtitle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["label_subtitle"]) || array_key_exists("label_subtitle", $context) ? $context["label_subtitle"] : (function () { throw new RuntimeError('Variable "label_subtitle" does not exist.', 182, $this->source); })())))) {
            // line 183
            yield "    <p class=\"subtitle\">";
            yield (isset($context["label_subtitle"]) || array_key_exists("label_subtitle", $context) ? $context["label_subtitle"] : (function () { throw new RuntimeError('Variable "label_subtitle" does not exist.', 183, $this->source); })());
            yield "</p>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 189
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 190
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 190, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 190)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 190, $this->source); })()), "class", [], "any", false, false, false, 190), "")) : ("")) . " form-control"))]);
        // line 191
        yield from $this->yieldParentBlock("textarea_widget", $context, $blocks);
        // line 192
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig", ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 192, $this->source); })())]);
        yield "
  ";
        // line 193
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 196
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_money_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "money_widget"));

        // line 197
        yield "<div class=\"input-group money-type\">
    ";
        // line 198
        $context["prepend"] = ("{{" == Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 198, $this->source); })()), 0, 2));
        // line 199
        yield "    ";
        if ((($tmp =  !(isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 199, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 200
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 201, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 204
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 205
        if ((($tmp = (isset($context["prepend"]) || array_key_exists("prepend", $context) ? $context["prepend"] : (function () { throw new RuntimeError('Variable "prepend" does not exist.', 205, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 206
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text\">";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new RuntimeError('Variable "money_pattern" does not exist.', 207, $this->source); })()), ["{{ widget }}" => ""]), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 210
        yield "  </div>

  ";
        // line 212
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 215
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_percent_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 216
        yield "<div class=\"input-group\">";
        // line 217
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 218
        yield "<div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 224
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_datetime_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 225
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 225, $this->source); })()) == "single_text")) {
            // line 226
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 228
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 228, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 228)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 228, $this->source); })()), "class", [], "any", false, false, false, 228), "")) : ("")) . " form-inline"))]);
            // line 229
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 230
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), "date", [], "any", false, false, false, 230), 'errors');
            // line 231
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), "time", [], "any", false, false, false, 231), 'errors');
            // line 232
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "date", [], "any", false, false, false, 232), 'widget', ["datetime" => true]);
            // line 233
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 233, $this->source); })()), "time", [], "any", false, false, false, 233), 'widget', ["datetime" => true]);
            // line 234
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_url_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "url_widget"));

        // line 239
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 239, $this->source); })()), "url")) : ("url"));
        // line 240
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 241
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 244
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_widget"));

        // line 245
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 245, $this->source); })()) == "single_text")) {
            // line 246
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 248
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 248, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 248)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 248, $this->source); })()), "class", [], "any", false, false, false, 248), "")) : ("")) . " form-inline"))]);
            // line 249
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 249, $this->source); })()))) {
                // line 250
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 252
            yield Twig\Extension\CoreExtension::replace((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 252, $this->source); })()), ["{{ year }}" =>             // line 253
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 253, $this->source); })()), "year", [], "any", false, false, false, 253), 'widget'), "{{ month }}" =>             // line 254
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 254, $this->source); })()), "month", [], "any", false, false, false, 254), 'widget'), "{{ day }}" =>             // line 255
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 255, $this->source); })()), "day", [], "any", false, false, false, 255), 'widget')]);
            // line 257
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 257, $this->source); })()))) {
                // line 258
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 263
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_time_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "time_widget"));

        // line 264
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 264, $this->source); })()) == "single_text")) {
            // line 265
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 267
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 267, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 267)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 267, $this->source); })()), "class", [], "any", false, false, false, 267), "")) : ("")) . " form-inline"))]);
            // line 268
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 268, $this->source); })())))) {
                // line 269
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 271
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "hour", [], "any", false, false, false, 271), 'widget');
            yield ":";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "minute", [], "any", false, false, false, 271), 'widget');
            if ((($tmp = (isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new RuntimeError('Variable "with_seconds" does not exist.', 271, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ":";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "second", [], "any", false, false, false, 271), 'widget');
            }
            // line 272
            yield "    ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 272, $this->source); })())))) {
                // line 273
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 278
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_email_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "email_widget"));

        // line 279
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 279, $this->source); })()), "email")) : ("email"));
        // line 280
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        yield "
  ";
        // line 281
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 284
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_widget"));

        // line 285
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 285, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 285)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 285, $this->source); })()), "class", [], "any", false, false, false, 285), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 286
        yield from $this->yieldParentBlock("button_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 289
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_icon_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "icon_button_widget"));

        // line 290
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 290, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 290)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 290, $this->source); })()), "class", [], "any", false, false, false, 290), "btn-default")) : ("btn-default")) . " btn"))]);
        // line 291
        yield "  ";
        if (((isset($context["button_type"]) || array_key_exists("button_type", $context) ? $context["button_type"] : (function () { throw new RuntimeError('Variable "button_type" does not exist.', 291, $this->source); })()) == "link")) {
            // line 292
            yield "    ";
            $context["buttonTag"] = "a";
            // line 293
            yield "    ";
            // line 294
            yield "    ";
            if ((($tmp = ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 294)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 294, $this->source); })()), "disabled", [], "any", false, false, false, 294), false)) : (false))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 295
                yield "      ";
                $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 295, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 295, $this->source); })()), "class", [], "any", false, false, false, 295) . " disabled"))]);
                // line 296
                yield "    ";
            }
            // line 297
            yield "  ";
        } else {
            // line 298
            yield "    ";
            $context["buttonTag"] = "button";
            // line 299
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 299, $this->source); })()), ["type" => "button"]);
            // line 300
            yield "  ";
        }
        // line 301
        yield "
  <";
        // line 302
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 302, $this->source); })()), "html", null, true);
        yield " ";
        yield from         $this->unwrap()->yieldBlock("button_attributes", $context, $blocks);
        yield ">
    <i class=\"material-icons\">";
        // line 303
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["button_icon"]) || array_key_exists("button_icon", $context) ? $context["button_icon"] : (function () { throw new RuntimeError('Variable "button_icon" does not exist.', 303, $this->source); })()), "html", null, true);
        yield "</i>
    <span class=\"btn-label\">";
        // line 304
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 304, $this->source); })()), "html", null, true);
        yield "</span>
  </";
        // line 305
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["buttonTag"]) || array_key_exists("buttonTag", $context) ? $context["buttonTag"] : (function () { throw new RuntimeError('Variable "buttonTag" does not exist.', 305, $this->source); })()), "html", null, true);
        yield ">";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 308
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 309
        yield from $this->yieldParentBlock("choice_widget", $context, $blocks);
        // line 310
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 313
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_collapsed(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 314
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 314, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 314)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 314, $this->source); })()), "class", [], "any", false, false, false, 314), "")) : ("")) . " custom-select"))]);
        // line 315
        yield from $this->yieldParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 318
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_widget_expanded(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 319
        if (CoreExtension::inFilter("-inline", ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 319)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 319, $this->source); })()), "class", [], "any", false, false, false, 319), "")) : ("")))) {
            // line 320
            yield "<div class=\"control-group\">";
            // line 321
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 322
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 323
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 323)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 323, $this->source); })()), "class", [], "any", false, false, false, 323), "")) : ("")), "translation_domain" =>                 // line 324
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 324, $this->source); })()), "valid" =>                 // line 325
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 325, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 328
            yield "</div>";
        } else {
            // line 330
            yield "<div ";
            yield from             $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
            yield ">";
            // line 331
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 332
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["parent_label_class" => ((CoreExtension::getAttribute($this->env, $this->source,                 // line 333
($context["label_attr"] ?? null), "class", [], "any", true, true, false, 333)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 333, $this->source); })()), "class", [], "any", false, false, false, 333), "")) : ("")), "translation_domain" =>                 // line 334
(isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 334, $this->source); })()), "valid" =>                 // line 335
(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 335, $this->source); })())]);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 342
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 343
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield " class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">";
        // line 345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Main category", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</li>";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 346, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            yield "        ";
            yield from             $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 349
        yield "</ul>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 353
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_tree_item_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 354
        yield "<li>
    ";
        // line 355
        $context["checked"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 355), "submitted_values", [], "any", true, true, false, 355) && CoreExtension::getAttribute($this->env, $this->source, ($context["submitted_values"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 355, $this->source); })()), "id_category", [], "any", false, false, false, 355), [], "array", true, true, false, 355))) ? ("checked=\"checked\"") : (""));
        // line 356
        yield "    ";
        if ((($tmp = (isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new RuntimeError('Variable "multiple" does not exist.', 356, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 357
            yield "<div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 359, $this->source); })()), "vars", [], "any", false, false, false, 359), "full_name", [], "any", false, false, false, 359), "html", null, true);
            yield "[tree][]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 359, $this->source); })()), "id_category", [], "any", false, false, false, 359), "html", null, true);
            yield "\" class=\"category\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 359, $this->source); })()), "html", null, true);
            yield ">
          ";
            // line 360
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "active", [], "any", true, true, false, 360) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 360, $this->source); })()), "active", [], "any", false, false, false, 360) == 0))) {
                // line 361
                yield "            <i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 361, $this->source); })()), "name", [], "any", false, false, false, 361), "html", null, true);
                yield "</i>";
            } else {
                // line 363
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 363, $this->source); })()), "name", [], "any", false, false, false, 363), "html", null, true);
                yield "
          ";
            }
            // line 365
            yield "          ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 366
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 366, $this->source); })()), "id_category", [], "any", false, false, false, 366), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 368
            yield "        </label>
      </div>";
        } else {
            // line 371
            yield "<div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[";
            // line 373
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 373, $this->source); })()), "vars", [], "any", false, false, false, 373), "id", [], "any", false, false, false, 373), "html", null, true);
            yield "][tree]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 373, $this->source); })()), "id_category", [], "any", false, false, false, 373), "html", null, true);
            yield "\" ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new RuntimeError('Variable "checked" does not exist.', 373, $this->source); })()), "html", null, true);
            yield " class=\"category\">
          ";
            // line 374
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 374, $this->source); })()), "name", [], "any", false, false, false, 374), "html", null, true);
            yield "
          ";
            // line 375
            if (array_key_exists("defaultCategory", $context)) {
                // line 376
                yield "            <input type=\"radio\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 376, $this->source); })()), "id_category", [], "any", false, false, false, 376), "html", null, true);
                yield "\" name=\"ignore\" class=\"default-category\" />
          ";
            }
            // line 378
            yield "        </label>
      </div>";
        }
        // line 381
        yield "    ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["child"] ?? null), "children", [], "any", true, true, false, 381)) {
            // line 382
            yield "      <ul>
        ";
            // line 383
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["child"]) || array_key_exists("child", $context) ? $context["child"] : (function () { throw new RuntimeError('Variable "child" does not exist.', 383, $this->source); })()), "children", [], "any", false, false, false, 383));
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
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 384
                yield "          ";
                $context["child"] = $context["item"];
                // line 385
                yield "          ";
                yield from                 $this->unwrap()->yieldBlock("choice_tree_item_widget", $context, $blocks);
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
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            yield "</ul>
    ";
        }
        // line 389
        yield "  </li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 392
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatefields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 393
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 393, $this->source); })()), 'errors');
        yield "
  <div class=\"translations tabbable\" id=\"";
        // line 394
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 394, $this->source); })()), "vars", [], "any", false, false, false, 394), "id", [], "any", false, false, false, 394), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 395
        if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 395, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 395, $this->source); })())) > 1))) {
            // line 396
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 397
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 397, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 398
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 399
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 399), "label", [], "any", false, false, false, 399), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 399, $this->source); })()), "id_lang", [], "any", false, false, false, 399) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 399), "name", [], "any", false, false, false, 399))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 399), "id", [], "any", false, false, false, 399), "html", null, true);
                yield "\">
              ";
                // line 400
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 400), "label", [], "any", false, false, false, 400)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 404
            yield "      </ul>
    ";
        }
        // line 406
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 408
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 408, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 409
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "label", [], "any", false, false, false, 409), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "id", [], "any", false, false, false, 409), "html", null, true);
            yield " tab-pane translation-field ";
            if ((((isset($context["hideTabs"]) || array_key_exists("hideTabs", $context) ? $context["hideTabs"] : (function () { throw new RuntimeError('Variable "hideTabs" does not exist.', 409, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })())) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["defaultLocale"]) || array_key_exists("defaultLocale", $context) ? $context["defaultLocale"] : (function () { throw new RuntimeError('Variable "defaultLocale" does not exist.', 409, $this->source); })()), "id_lang", [], "any", false, false, false, 409) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "name", [], "any", false, false, false, 409))) {
                yield "show active";
            }
            yield " ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 409, $this->source); })()), "vars", [], "any", false, false, false, 409), "valid", [], "any", false, false, false, 409)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 409), "label", [], "any", false, false, false, 409), "html", null, true);
            yield "\">
          ";
            // line 410
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            yield "
          ";
            // line 411
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 414
        yield "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 418
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_fields_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 419
        if (( !array_key_exists("type", $context) || ("file" != (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 419, $this->source); })())))) {
            // line 420
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 420, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 420)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 420, $this->source); })()), "class", [], "any", false, false, false, 420), "")) : ("")) . " form-control"))]);
        }
        // line 422
        yield from $this->yieldParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 425
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 426
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 426, $this->source); })()), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 428
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 428, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 429
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 429), "attr", [], "any", false, true, false, 429), "class", [], "any", true, true, false, 429)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 429), "attr", [], "any", false, false, false, 429), "class", [], "any", false, false, false, 429), "")) : ("")) . " js-locale-input");
            // line 430
            yield "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 430, $this->source); })()) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 430), "label", [], "any", false, false, false, 430));
            // line 431
            yield "
      ";
            // line 432
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 432, $this->source); })()), "id_lang", [], "any", false, false, false, 432) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 432), "name", [], "any", false, false, false, 432))) {
                // line 433
                yield "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 433, $this->source); })()) . " d-none");
                // line 434
                yield "      ";
            }
            // line 436
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 436, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 436, $this->source); })()))]);
            // line 437
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
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
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 439
        yield "
    ";
        // line 440
        if ((($tmp =  !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 440, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 441
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 447
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 447, $this->source); })()), "vars", [], "any", false, false, false, 447), "id", [], "any", false, false, false, 447), "html", null, true);
            yield "\"
        >
          ";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 449, $this->source); })()), "vars", [], "any", false, false, false, 449), "default_locale", [], "any", false, false, false, 449), "iso_code", [], "any", false, false, false, 449)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 452
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 452, $this->source); })()), "vars", [], "any", false, false, false, 452), "id", [], "any", false, false, false, 452), "html", null, true);
            yield "\">
          ";
            // line 453
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 453, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 454
                yield "            <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 454), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 454), "html", null, true);
                yield "</span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 456
            yield "        </div>
      </div>
    ";
        }
        // line 459
        yield "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 462
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translate_textarea_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translate_textarea_widget"));

        // line 463
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 463, $this->source); })()), 'errors');
        yield "
  <div class=\"input-group locale-input-group js-locale-input-group\">
    ";
        // line 465
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 465, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["textarea"]) {
            // line 466
            yield "      ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, true, false, 466), "attr", [], "any", false, true, false, 466), "class", [], "any", true, true, false, 466)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 466), "attr", [], "any", false, false, false, 466), "class", [], "any", false, false, false, 466), "")) : ("")) . " js-locale-input");
            // line 467
            yield "      ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 467, $this->source); })()) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 467), "label", [], "any", false, false, false, 467));
            // line 468
            yield "
      ";
            // line 469
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 469, $this->source); })()), "id_lang", [], "any", false, false, false, 469) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["textarea"], "vars", [], "any", false, false, false, 469), "name", [], "any", false, false, false, 469))) {
                // line 470
                yield "        ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 470, $this->source); })()) . " d-none");
                // line 471
                yield "      ";
            }
            // line 472
            yield "
      <div class=\"";
            // line 473
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 473, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 474
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["textarea"], 'widget', ["attr" => ["class" => Twig\Extension\CoreExtension::trim((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 474, $this->source); })()))]]);
            yield "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['textarea'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 477
        yield "
    ";
        // line 478
        if ((($tmp = (isset($context["show_locale_select"]) || array_key_exists("show_locale_select", $context) ? $context["show_locale_select"] : (function () { throw new RuntimeError('Variable "show_locale_select" does not exist.', 478, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 479
            yield "      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"";
            // line 485
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 485, $this->source); })()), "vars", [], "any", false, false, false, 485), "id", [], "any", false, false, false, 485), "html", null, true);
            yield "\"
        >
          ";
            // line 487
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 487, $this->source); })()), "vars", [], "any", false, false, false, 487), "default_locale", [], "any", false, false, false, 487), "iso_code", [], "any", false, false, false, 487)), "html", null, true);
            yield "
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 490
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 490, $this->source); })()), "vars", [], "any", false, false, false, 490), "id", [], "any", false, false, false, 490), "html", null, true);
            yield "\">
          ";
            // line 491
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 491, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 492
                yield "            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"";
                // line 493
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 493), "html", null, true);
                yield "\"
            >
              ";
                // line 495
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 495), "html", null, true);
                yield "
            </span>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 498
            yield "        </div>
      </div>
    ";
        }
        // line 501
        yield "  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 504
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_picker_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 505
        yield "  ";
        $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 506
            yield "    ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 506, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 506)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 506, $this->source); })()), "class", [], "any", false, false, false, 506), "")) : ("")) . " form-control datepicker"))]);
            // line 507
            yield "    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"";
            // line 508
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["date_format"]) || array_key_exists("date_format", $context) ? $context["date_format"] : (function () { throw new RuntimeError('Variable "date_format" does not exist.', 508, $this->source); })()), "html", null, true);
            yield "\" ";
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield " ";
            if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 508, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 508, $this->source); })()), "html", null, true);
                yield "\" ";
            }
            yield "/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    ";
            // line 515
            yield from             $this->unwrap()->yieldBlock("form_help", $context, $blocks);
            yield "
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 505
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v1, "html", null, true));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 519
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_date_range_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "date_range_widget"));

        // line 520
        yield "  ";
        $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 521
            yield "    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        ";
            // line 523
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 523, $this->source); })()), "from", [], "any", false, false, false, 523), 'row');
            yield "
      </div>
      <div class=\"col col-md-4\">
        ";
            // line 526
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 526, $this->source); })()), "to", [], "any", false, false, false, 526), 'row');
            yield "
        ";
            // line 527
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "unlimited", [], "any", true, true, false, 527)) {
                // line 528
                yield "          ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 528, $this->source); })()), "unlimited", [], "any", false, false, false, 528), 'widget');
                yield "
          ";
                // line 529
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 529, $this->source); })()), "unlimited", [], "any", false, false, false, 529), 'errors');
                yield "
        ";
            }
            // line 531
            yield "      </div>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 520
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v2, "html", null, true));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 536
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search_and_reset_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search_and_reset_widget"));

        // line 537
        yield "  ";
        $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 538
            yield "    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button\"
            title=\"";
            // line 540
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "\"
            name=\"";
            // line 541
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 541, $this->source); })()), "html", null, true);
            yield "[search]\"
    >
      <i class=\"material-icons\">search</i>
      ";
            // line 544
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Search", [], "Admin.Actions"), "html", null, true);
            yield "
    </button>
    ";
            // line 546
            if ((($tmp = (isset($context["show_reset_button"]) || array_key_exists("show_reset_button", $context) ? $context["show_reset_button"] : (function () { throw new RuntimeError('Variable "show_reset_button" does not exist.', 546, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 547
                yield "      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"";
                // line 549
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 549, $this->source); })()), "html", null, true);
                yield "[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"";
                // line 551
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reset_url"]) || array_key_exists("reset_url", $context) ? $context["reset_url"] : (function () { throw new RuntimeError('Variable "reset_url" does not exist.', 551, $this->source); })()), "html", null, true);
                yield "\"
                data-redirect=\"";
                // line 552
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["redirect_url"]) || array_key_exists("redirect_url", $context) ? $context["redirect_url"] : (function () { throw new RuntimeError('Variable "redirect_url" does not exist.', 552, $this->source); })()), "html", null, true);
                yield "\"
        >
          <i class=\"material-icons\">clear</i>
          ";
                // line 555
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Reset", [], "Admin.Actions"), "html", null, true);
                yield "
        </button>
      </div>
    ";
            }
            // line 559
            yield "  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 537
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v3, "html", null, true));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 562
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_switch_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 563
        yield "  ";
        $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 564
            yield "  ";
            $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 564, $this->source); })()), [])) : ([]));
            // line 565
            yield "  <div class=\"input-group ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["rowAttributes"] ?? null), "class", [], "any", true, true, false, 565)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 565, $this->source); })()), "class", [], "any", false, false, false, 565), "")) : ("")), "html", null, true);
            yield "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 565, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["rowAttr"]) {
                yield " ";
                if (($context["key"] != "class")) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["rowAttr"], "html", null, true);
                    yield "\"";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['rowAttr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield ">
    <span class=\"ps-switch\" id=\"";
            // line 566
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 566, $this->source); })()), "vars", [], "any", false, false, false, 566), "id", [], "any", false, false, false, 566), "html", null, true);
            yield "\">
        ";
            // line 567
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 567, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
                // line 568
                yield "          ";
                $context["inputId"] = (((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 568, $this->source); })()) . "_") . CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 568));
                // line 569
                yield "          <input id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 569, $this->source); })()), "html", null, true);
                yield "\"
            ";
                // line 570
                yield from                 $this->unwrap()->yieldBlock("attributes", $context, $blocks);
                yield "
            name=\"";
                // line 571
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new RuntimeError('Variable "full_name" does not exist.', 571, $this->source); })()), "html", null, true);
                yield "\"
            value=\"";
                // line 572
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "value", [], "any", false, false, false, 572), "html", null, true);
                yield "\"
            ";
                // line 573
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 573, $this->source); })()))) {
                    yield "checked=\"\"";
                }
                // line 574
                yield "            ";
                if ((($tmp = (isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new RuntimeError('Variable "disabled" does not exist.', 574, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "disabled=\"\"";
                }
                // line 575
                yield "            type=\"radio\"
          >
          ";
                // line 577
                if ((($tmp = (isset($context["show_choices"]) || array_key_exists("show_choices", $context) ? $context["show_choices"] : (function () { throw new RuntimeError('Variable "show_choices" does not exist.', 577, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<label for=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["inputId"]) || array_key_exists("inputId", $context) ? $context["inputId"] : (function () { throw new RuntimeError('Variable "inputId" does not exist.', 577, $this->source); })()), "html", null, true);
                    yield "\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["choice"], "label", [], "any", false, false, false, 577), [], (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new RuntimeError('Variable "choice_translation_domain" does not exist.', 577, $this->source); })())), "html", null, true);
                    yield "</label>";
                }
                // line 578
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 579
            yield "        <span class=\"slide-button\"></span>
    </span>
  </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 563
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v4, "html", null, true));
        // line 583
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 586
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_row_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "row_attributes"));

        // line 587
        $context["rowAttributes"] = ((array_key_exists("row_attr", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 587, $this->source); })()), [])) : ([]));
        // line 588
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["rowAttributes"]) || array_key_exists("rowAttributes", $context) ? $context["rowAttributes"] : (function () { throw new RuntimeError('Variable "rowAttributes" does not exist.', 588, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 589
            yield " ";
            // line 590
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 594
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block__form_step6_attachments_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 595
        yield "  <div class=\"js-options-no-attachments ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 595, $this->source); })())) > 0)) ? ("hide") : (""));
        yield "\">
    <small>";
        // line 596
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("There is no attachment yet.", [], "Admin.Catalog.Notification"), "html", null, true);
        yield "</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments ";
        // line 599
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 599, $this->source); })())) == 0)) ? ("hide") : (""));
        yield "\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">";
        // line 604
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Title", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-6\">";
        // line 605
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File name", [], "Admin.Global"), "html", null, true);
        yield "</th>
            <th class=\"col-md-2\">";
        // line 606
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Type", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "</th>
          </tr>
          </thead>
          <tbody>";
        // line 610
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 610, $this->source); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 611
            yield "            <tr>
              <td class=\"col-md-3\">";
            // line 612
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "</td>
              <td class=\"col-md-6 file-name\"><span>";
            // line 613
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 613, $this->source); })()), "vars", [], "any", false, false, false, 613), "attr", [], "any", false, false, false, 613), "data", [], "any", false, false, false, 613), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 613), [], "array", false, false, false, 613), "file_name", [], "array", false, false, false, 613), "html", null, true);
            yield "</span></td>
              <td class=\"col-md-2\">";
            // line 614
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 614, $this->source); })()), "vars", [], "any", false, false, false, 614), "attr", [], "any", false, false, false, 614), "data", [], "any", false, false, false, 614), CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 614), [], "array", false, false, false, 614), "mime", [], "array", false, false, false, 614), "html", null, true);
            yield "</td>
            </tr>
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        yield "</tbody>
        </table>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 626
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_choice_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "choice_label"));

        // line 628
        $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 628, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(Twig\Extension\CoreExtension::replace(((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 628)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 628, $this->source); })()), "class", [], "any", false, false, false, 628), "")) : ("")), ["checkbox-inline" => "", "radio-inline" => ""]))]);
        // line 629
        yield from         $this->unwrap()->yieldBlock("form_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 632
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 633
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 636
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_label"));

        // line 637
        yield from         $this->unwrap()->yieldBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 640
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_radio_label(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 641
        yield "  ";
        // line 642
        yield "  ";
        if (array_key_exists("widget", $context)) {
            // line 643
            yield "    ";
            if ((($tmp = (isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new RuntimeError('Variable "required" does not exist.', 643, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 644
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 644, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 644)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 644, $this->source); })()), "class", [], "any", false, false, false, 644), "")) : ("")) . " required"))]);
                // line 645
                yield "    ";
            }
            // line 646
            yield "    ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 647
                yield "      ";
                $context["label_attr"] = Twig\Extension\CoreExtension::merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 647, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim(((((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 647)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 647, $this->source); })()), "class", [], "any", false, false, false, 647), "")) : ("")) . " ") . (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 647, $this->source); })())))]);
                // line 648
                yield "    ";
            }
            // line 649
            yield "    ";
            if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 649, $this->source); })()) === false) && Twig\Extension\CoreExtension::testEmpty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 649, $this->source); })())))) {
                // line 650
                yield "      ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 650, $this->source); })()));
                // line 651
                yield "    ";
            }
            // line 652
            yield "
    ";
            // line 653
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["block_prefixes"]) || array_key_exists("block_prefixes", $context) ? $context["block_prefixes"] : (function () { throw new RuntimeError('Variable "block_prefixes" does not exist.', 653, $this->source); })()), 2, [], "array", false, false, false, 653) == "radio")) {
                // line 654
                yield "      <label class=\"form-check-label\"";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 654, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 655
                yield (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 655, $this->source); })());
                // line 657
                yield "<i class=\"form-check-round\"></i>";
                // line 659
                yield (((($tmp =  !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 659, $this->source); })()) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 659, $this->source); })()) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 659, $this->source); })()))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 659, $this->source); })()))))) : (""));
                // line 660
                yield "</label>
    ";
            } else {
                // line 662
                yield "      <div class=\"md-checkbox md-checkbox-inline\">
        <label";
                // line 663
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 663, $this->source); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                    yield "=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                    yield "\"";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                yield ">";
                // line 664
                yield (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 664, $this->source); })());
                // line 665
                yield "<i class=\"md-checkbox-control\"></i>";
                // line 666
                yield (((($tmp =  !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 666, $this->source); })()) === false)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new RuntimeError('Variable "translation_domain" does not exist.', 666, $this->source); })()) === false)) ? ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 666, $this->source); })()))) : ($this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new RuntimeError('Variable "label" does not exist.', 666, $this->source); })()))))) : (""));
                // line 667
                yield "</label>
      </div>
    ";
            }
            // line 670
            yield "  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 673
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_radio_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 674
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 674, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 674)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 674, $this->source); })()), "class", [], "any", false, false, false, 674), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 674)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 674, $this->source); })()), "class", [], "any", false, false, false, 674), "")) : (""))));
        // line 675
        if (CoreExtension::inFilter("radio-custom", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 675, $this->source); })()))) {
            // line 676
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 676, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 676)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 676, $this->source); })()), "class", [], "any", false, false, false, 676), "")) : ("")) . " custom-control-input"))]);
            // line 677
            yield "<div class=\"custom-control custom-radio";
            yield ((CoreExtension::inFilter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 677, $this->source); })()))) ? (" custom-control-inline") : (""));
            yield "\">";
            // line 678
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 678, $this->source); })()), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 679
            yield "</div>";
        } else {
            // line 681
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 681, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 681)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 681, $this->source); })()), "class", [], "any", false, false, false, 681), "")) : ("")) . " form-check-input"))]);
            // line 682
            yield "<div class=\"form-check form-check-radio form-radio";
            yield ((CoreExtension::inFilter("radio-inline", (isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 682, $this->source); })()))) ? (" form-check-inline") : (""));
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 682, $this->source); })()), "vars", [], "any", false, false, false, 682), "valid", [], "any", false, false, false, 682) != true)) {
                yield " has-error";
            }
            yield "\">";
            // line 683
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 683, $this->source); })()), 'label', ["widget" =>             $this->unwrap()->renderBlock("base_radio_widget", $context, $blocks)]);
            // line 684
            yield "</div>";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 688
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 689
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context) ? $context["parent_label_class"] : (function () { throw new RuntimeError('Variable "parent_label_class" does not exist.', 689, $this->source); })()), ((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 689)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 689, $this->source); })()), "class", [], "any", false, false, false, 689), "")) : ("")))) : (((CoreExtension::getAttribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", [], "any", true, true, false, 689)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new RuntimeError('Variable "label_attr" does not exist.', 689, $this->source); })()), "class", [], "any", false, false, false, 689), "")) : (""))));
        // line 690
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 690, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 690)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 690, $this->source); })()), "class", [], "any", false, false, false, 690), "")) : ("")) . " form-check-input"))]);
        // line 691
        yield "<div class=\"form-check form-check-radio form-checkbox";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "container_class", [], "any", true, true, false, 691)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 691, $this->source); })()), "container_class", [], "any", false, false, false, 691), "html", null, true);
        }
        yield "\">";
        // line 692
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 692, $this->source); })()), 'label', ["widget" =>         $this->unwrap()->renderBlock("base_checkbox_widget", $context, $blocks)]);
        // line 693
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 698
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors"));

        // line 699
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "fieldError", [], "array", true, true, false, 699) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 699, $this->source); })()), "fieldError", [], "array", false, false, false, 699) == true))) {
            // line 700
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_field", $context, $blocks);
            yield "
  ";
        } else {
            // line 702
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("form_errors_other", $context, $blocks);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 706
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_field(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_field"));

        // line 707
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 707, $this->source); })())) > 0)) {
            // line 709
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 709, $this->source); })())) > 1)) {
                // line 711
                $context["popoverContainer"] = ("popover-error-container-" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 711, $this->source); })()), "vars", [], "any", false, false, false, 711), "id", [], "any", false, false, false, 711));
                // line 712
                yield "      <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 712, $this->source); })()), "html", null, true);
                yield "\"></div>

      ";
                // line 714
                $context["popoverErrorContent"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 715
                    yield "        <div class=\"popover-error-list\">
          <ul>";
                    // line 717
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 717, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                        // line 718
                        yield "<li class=\"text-danger\"> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 718), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 718), "form_error"), "html", null, true);
                        yield "
              </li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 721
                    yield "          </ul>
        </div>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 724
                yield "
      <template class=\"js-popover-error-content\" data-id=\"";
                // line 725
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 725, $this->source); })()), "vars", [], "any", false, false, false, 725), "id", [], "any", false, false, false, 725), "html", null, true);
                yield "\">
        ";
                // line 726
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverErrorContent"]) || array_key_exists("popoverErrorContent", $context) ? $context["popoverErrorContent"] : (function () { throw new RuntimeError('Variable "popoverErrorContent" does not exist.', 726, $this->source); })()), "html", null, true);
                yield "
      </template>

      ";
                // line 729
                $context["errorPopover"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 730
                    yield "        <span
          data-toggle=\"form-popover-error\"
          data-id=\"";
                    // line 732
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 732, $this->source); })()), "vars", [], "any", false, false, false, 732), "id", [], "any", false, false, false, 732), "html", null, true);
                    yield "\"
          data-placement=\"bottom\"
          data-template=\x27<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>\x27
          data-trigger=\"hover\"
          data-container=\".";
                    // line 736
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["popoverContainer"]) || array_key_exists("popoverContainer", $context) ? $context["popoverContainer"] : (function () { throw new RuntimeError('Variable "popoverContainer" does not exist.', 736, $this->source); })()), "html", null, true);
                    yield "\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> ";
                    // line 738
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% errors", ["%count%" => Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 738, $this->source); })()))], "Admin.Global"), "html", null, true);
                    yield "</u>
        </span>
      ";
                    yield from [];
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 741
                yield "
      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          ";
                // line 744
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["errorPopover"]) || array_key_exists("errorPopover", $context) ? $context["errorPopover"] : (function () { throw new RuntimeError('Variable "errorPopover" does not exist.', 744, $this->source); })()), "html", null, true);
                yield "
        </div>
      </div>

      ";
            } else {
                // line 750
                yield "<div class=\"d-inline-block align-baseline text-danger mt-1\" role=\"alert\">
        <i class=\"material-icons form-error-icon\">error_outline</i>

        ";
                // line 753
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 753, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 754
                    yield "          <span>
            ";
                    // line 755
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 755), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 755), "form_error"), "html", null, true);
                    yield "
          </span>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 758
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 763
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_errors_other(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_errors_other"));

        // line 764
        yield "  ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 764, $this->source); })())) > 0)) {
            // line 765
            yield "<div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        ";
            // line 770
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 770, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 771
                yield "            <p> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageTemplate", [], "any", false, false, false, 771), CoreExtension::getAttribute($this->env, $this->source, $context["error"], "messageParameters", [], "any", false, false, false, 771), "form_error"), "html", null, true);
                yield "
            </p>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 774
            yield "</div>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 781
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_choice_table_widget"));

        // line 782
        yield "  ";
        $_v5 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 783
            yield "    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  ";
            // line 793
            if ((($tmp = (isset($context["isCheckSelectAll"]) || array_key_exists("isCheckSelectAll", $context) ? $context["isCheckSelectAll"] : (function () { throw new RuntimeError('Variable "isCheckSelectAll" does not exist.', 793, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 794
                yield "                    checked
                  ";
            }
            // line 796
            yield "                >
                <i class=\"md-checkbox-control\"></i>
                ";
            // line 798
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Select all", [], "Admin.Actions"), "html", null, true);
            yield " ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 798, $this->source); })()), "vars", [], "any", false, false, false, 798), "displayTotalItems", [], "any", false, false, false, 798)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 798, $this->source); })())), "html", null, true);
                yield ") ";
            }
            // line 799
            yield "              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        ";
            // line 805
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 805, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 806
                yield "          <tr>
            <td>
              ";
                // line 808
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["material_design" => true]);
                yield "
            </td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 812
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 782
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v5, "html", null, true));
        // line 816
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 819
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_material_multiple_choice_table_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "material_multiple_choice_table_widget"));

        // line 820
        yield "  ";
        $_v6 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 821
            yield "    <div class=\"choice-table";
            if ((($tmp = (isset($context["headers_fixed"]) || array_key_exists("headers_fixed", $context) ? $context["headers_fixed"] : (function () { throw new RuntimeError('Variable "headers_fixed" does not exist.', 821, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "-headers-fixed";
            }
            yield " table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>";
            // line 825
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["table_label"]) || array_key_exists("table_label", $context) ? $context["table_label"] : (function () { throw new RuntimeError('Variable "table_label" does not exist.', 825, $this->source); })()), "html", null, true);
            yield "</th>
          ";
            // line 826
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 826, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["child_choice"]) {
                // line 827
                yield "            <th class=\"text-center\">
              ";
                // line 828
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 828), "multiple", [], "any", false, false, false, 828) && !CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 828), "name", [], "any", false, false, false, 828), (isset($context["headers_to_disable"]) || array_key_exists("headers_to_disable", $context) ? $context["headers_to_disable"] : (function () { throw new RuntimeError('Variable "headers_to_disable" does not exist.', 828, $this->source); })())))) {
                    // line 829
                    yield "                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"";
                    // line 831
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 831) + 1), "html", null, true);
                    yield "\"
                   data-column-checked=\"false\"
                >
                  ";
                    // line 834
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 834), "label", [], "any", false, false, false, 834), "html", null, true);
                    yield "
                </a>
              ";
                } else {
                    // line 837
                    yield "                ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 837), "label", [], "any", false, false, false, 837), "html", null, true);
                    yield "
              ";
                }
                // line 839
                yield "            </th>
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
            unset($context['_seq'], $context['_key'], $context['child_choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 841
            yield "        </tr>
        </thead>
        <tbody>
        ";
            // line 844
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new RuntimeError('Variable "choices" does not exist.', 844, $this->source); })()));
            foreach ($context['_seq'] as $context["choice_name"] => $context["choice_value"]) {
                // line 845
                yield "          <tr>
            <td>
              ";
                // line 847
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["choice_name"], "html", null, true);
                yield "
            </td>
            ";
                // line 849
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 849, $this->source); })()));
                foreach ($context['_seq'] as $context["child_choice_name"] => $context["child_choice"]) {
                    // line 850
                    yield "              <td class=\"text-center\">
                ";
                    // line 851
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["child_choice_entry_index_mapping"] ?? null), $context["choice_value"], [], "array", false, true, false, 851), $context["child_choice_name"], [], "array", true, true, false, 851)) {
                        // line 852
                        yield "                  ";
                        $context["entry_index"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["child_choice_entry_index_mapping"]) || array_key_exists("child_choice_entry_index_mapping", $context) ? $context["child_choice_entry_index_mapping"] : (function () { throw new RuntimeError('Variable "child_choice_entry_index_mapping" does not exist.', 852, $this->source); })()), $context["choice_value"], [], "array", false, false, false, 852), $context["child_choice_name"], [], "array", false, false, false, 852);
                        // line 853
                        yield "
                  ";
                        // line 854
                        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], "vars", [], "any", false, false, false, 854), "multiple", [], "any", false, false, false, 854)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 855
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 855, $this->source); })()), [], "array", false, false, false, 855), 'widget', ["material_design" => true]);
                            yield "
                  ";
                        } else {
                            // line 857
                            yield "                    ";
                            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["child_choice"], (isset($context["entry_index"]) || array_key_exists("entry_index", $context) ? $context["entry_index"] : (function () { throw new RuntimeError('Variable "entry_index" does not exist.', 857, $this->source); })()), [], "array", false, false, false, 857), 'widget');
                            yield "
                  ";
                        }
                        // line 859
                        yield "                ";
                    } else {
                        // line 860
                        yield "                  --
                ";
                    }
                    // line 862
                    yield "              </td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['child_choice_name'], $context['child_choice'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 864
                yield "          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['choice_name'], $context['choice_value'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 866
            yield "        </tbody>
      </table>
    </div>
  ";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 820
        yield Twig\Extension\CoreExtension::spaceless($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($_v6, "html", null, true));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 873
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_tabs(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_tabs"));

        // line 874
        yield "  <div class=\"translations tabbable\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 874, $this->source); })()), "vars", [], "any", false, false, false, 874), "id", [], "any", false, false, false, 874), "html", null, true);
        yield "\" tabindex=\"1\">
    ";
        // line 875
        if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 875, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 875, $this->source); })())) > 1))) {
            // line 876
            yield "      <ul class=\"translationsLocales nav nav-pills\">
        ";
            // line 877
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 877, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 878
                yield "          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"";
                // line 879
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 879), "label", [], "any", false, false, false, 879), "html", null, true);
                yield "\" class=\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 879, $this->source); })()), "id_lang", [], "any", false, false, false, 879) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 879), "name", [], "any", false, false, false, 879))) {
                    yield "active";
                }
                yield " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 879), "id", [], "any", false, false, false, 879), "html", null, true);
                yield "\">
              ";
                // line 880
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 880), "label", [], "any", false, false, false, 880)), "html", null, true);
                yield "
            </a>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 884
            yield "      </ul>
    ";
        }
        // line 886
        yield "
    <div class=\"translationsFields tab-content\">
      ";
        // line 888
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 888, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 889
            yield "        <div data-locale=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "label", [], "any", false, false, false, 889), "html", null, true);
            yield "\" class=\"translationsFields-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "id", [], "any", false, false, false, 889), "html", null, true);
            yield " tab-pane translation-field ";
            if ((((isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 889, $this->source); })()) == false) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 889, $this->source); })())) > 1))) {
                yield "panel panel-default";
            }
            yield " ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 889, $this->source); })()), "id_lang", [], "any", false, false, false, 889) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "name", [], "any", false, false, false, 889))) {
                yield "show active";
            }
            yield " ";
            if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 889, $this->source); })()), "vars", [], "any", false, false, false, 889), "valid", [], "any", false, false, false, 889)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "field-error";
            }
            yield " translation-label-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translationsFields"], "vars", [], "any", false, false, false, 889), "label", [], "any", false, false, false, 889), "html", null, true);
            yield "\">
          ";
            // line 890
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translationsFields'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 893
        yield "    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 897
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_fields_with_dropdown(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_fields_with_dropdown"));

        // line 898
        $context["formClass"] = Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 898), "attr", [], "any", false, true, false, 898), "class", [], "any", true, true, false, 898)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 898, $this->source); })()), "vars", [], "any", false, false, false, 898), "attr", [], "any", false, false, false, 898), "class", [], "any", false, false, false, 898), "")) : ("")) . " input-group locale-input-group js-locale-input-group d-flex"));
        // line 899
        yield "    <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["formClass"]) || array_key_exists("formClass", $context) ? $context["formClass"] : (function () { throw new RuntimeError('Variable "formClass" does not exist.', 899, $this->source); })()), "html", null, true);
        yield "\" id=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 899, $this->source); })()), "vars", [], "any", false, false, false, 899), "id", [], "any", false, false, false, 899), "html", null, true);
        yield "\" tabindex=\"1\">
      ";
        // line 900
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 900, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 901
            yield "        ";
            $context["classes"] = (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, true, false, 901), "attr", [], "any", false, true, false, 901), "class", [], "any", true, true, false, 901)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 901), "attr", [], "any", false, false, false, 901), "class", [], "any", false, false, false, 901), "")) : ("")) . " js-locale-input");
            // line 902
            yield "        ";
            $context["classes"] = (((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 902, $this->source); })()) . " js-locale-") . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 902), "label", [], "any", false, false, false, 902));
            // line 903
            yield "        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["default_locale"]) || array_key_exists("default_locale", $context) ? $context["default_locale"] : (function () { throw new RuntimeError('Variable "default_locale" does not exist.', 903, $this->source); })()), "id_lang", [], "any", false, false, false, 903) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 903), "name", [], "any", false, false, false, 903))) {
                // line 904
                yield "          ";
                $context["classes"] = ((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 904, $this->source); })()) . " d-none");
                // line 905
                yield "        ";
            }
            // line 906
            yield "        <div data-lang-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["translateField"], "vars", [], "any", false, false, false, 906), "name", [], "any", false, false, false, 906), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["classes"]) || array_key_exists("classes", $context) ? $context["classes"] : (function () { throw new RuntimeError('Variable "classes" does not exist.', 906, $this->source); })()), "html", null, true);
            yield "\" style=\"flex-grow: 1;\">
          ";
            // line 907
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget');
            yield "
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['translateField'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 910
        yield "      ";
        if ((($tmp =  !(isset($context["hide_locales"]) || array_key_exists("hide_locales", $context) ? $context["hide_locales"] : (function () { throw new RuntimeError('Variable "hide_locales" does not exist.', 910, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 911
            yield "        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            ";
            // line 915
            if (array_key_exists("change_form_language_url", $context)) {
                // line 916
                yield "              data-change-language-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 916, $this->source); })()), "vars", [], "any", false, false, false, 916), "change_form_language_url", [], "any", false, false, false, 916), "html", null, true);
                yield "\"
            ";
            }
            // line 918
            yield "                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"";
            // line 920
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 920, $this->source); })()), "vars", [], "any", false, false, false, 920), "id", [], "any", false, false, false, 920), "html", null, true);
            yield "_dropdown\"
          >
            ";
            // line 922
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 922, $this->source); })()), "vars", [], "any", false, false, false, 922), "default_locale", [], "any", false, false, false, 922), "iso_code", [], "any", false, false, false, 922)), "html", null, true);
            yield "
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"";
            // line 924
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 924, $this->source); })()), "vars", [], "any", false, false, false, 924), "id", [], "any", false, false, false, 924), "html", null, true);
            yield "_dropdown\">
            ";
            // line 925
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["locales"]) || array_key_exists("locales", $context) ? $context["locales"] : (function () { throw new RuntimeError('Variable "locales" does not exist.', 925, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 926
                yield "              <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "iso_code", [], "any", false, false, false, 926), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["locale"], "name", [], "any", false, false, false, 926), "html", null, true);
                yield "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['locale'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 928
            yield "          </div>
        </div>
      ";
        }
        // line 931
        yield "    </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 934
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_translatable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "translatable_widget"));

        // line 935
        if ((($tmp = (isset($context["use_tabs"]) || array_key_exists("use_tabs", $context) ? $context["use_tabs"] : (function () { throw new RuntimeError('Variable "use_tabs" does not exist.', 935, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 936
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_tabs", $context, $blocks);
            yield "
  ";
        } else {
            // line 938
            yield "    ";
            yield from             $this->unwrap()->yieldBlock("translatable_fields_with_dropdown", $context, $blocks);
            yield "
  ";
        }
        // line 940
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 943
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_birthday_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "birthday_widget"));

        // line 944
        yield "  ";
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new RuntimeError('Variable "widget" does not exist.', 944, $this->source); })()) == "single_text")) {
            // line 945
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 947
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 947, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 947)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 947, $this->source); })()), "class", [], "any", false, false, false, 947), "")) : ("")) . " form-inline"))]);
            // line 948
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 948, $this->source); })()))) {
                // line 949
                yield "<div ";
                yield from                 $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
                yield ">";
            }
            // line 951
            yield "
    ";
            // line 952
            $context["yearWidget"] = (("<div class=\"col pl-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 952, $this->source); })()), "year", [], "any", false, false, false, 952), 'widget')) . "</div>");
            // line 953
            yield "    ";
            $context["monthWidget"] = (("<div class=\"col birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 953, $this->source); })()), "month", [], "any", false, false, false, 953), 'widget')) . "</div>");
            // line 954
            yield "    ";
            $context["dayWidget"] = (("<div class=\"col pr-0 birthday-select-container\">" . $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 954, $this->source); })()), "day", [], "any", false, false, false, 954), 'widget')) . "</div>");
            // line 956
            yield Twig\Extension\CoreExtension::replace((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new RuntimeError('Variable "date_pattern" does not exist.', 956, $this->source); })()), ["{{ year }}" =>             // line 957
(isset($context["yearWidget"]) || array_key_exists("yearWidget", $context) ? $context["yearWidget"] : (function () { throw new RuntimeError('Variable "yearWidget" does not exist.', 957, $this->source); })()), "{{ month }}" =>             // line 958
(isset($context["monthWidget"]) || array_key_exists("monthWidget", $context) ? $context["monthWidget"] : (function () { throw new RuntimeError('Variable "monthWidget" does not exist.', 958, $this->source); })()), "{{ day }}" =>             // line 959
(isset($context["dayWidget"]) || array_key_exists("dayWidget", $context) ? $context["dayWidget"] : (function () { throw new RuntimeError('Variable "dayWidget" does not exist.', 959, $this->source); })())]);
            // line 962
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) || array_key_exists("datetime", $context) ? $context["datetime"] : (function () { throw new RuntimeError('Variable "datetime" does not exist.', 962, $this->source); })()))) {
                // line 963
                yield "</div>";
            }
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 968
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_file_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "file_widget"));

        // line 969
        yield "  <style>
    .custom-file-label:after {
      content: \"";
        // line 971
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Browse", [], "Admin.Actions"), "html", null, true);
        yield "\";
    }
  </style>
  <div class=\"custom-file\">
    ";
        // line 975
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 975, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 976
($context["attr"] ?? null), "class", [], "any", true, true, false, 976)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 976, $this->source); })()), "class", [], "any", false, false, false, 976), "")) : ("")) . " custom-file-input")), "data-multiple-files-text" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count% file(s)", [], "Admin.Global"), "data-locale" => $this->extensions['PrestaShopBundle\Twig\ContextIsoCodeProviderExtension']->getIsoCode()]);
        // line 981
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "disabled", [], "any", true, true, false, 981) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 981, $this->source); })()), "disabled", [], "any", false, false, false, 981))) {
            // line 982
            yield "      ";
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 982, $this->source); })()), ["class" => (CoreExtension::getAttribute($this->env, $this->source,             // line 983
(isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 983, $this->source); })()), "class", [], "any", false, false, false, 983) . " disabled")]);
            // line 985
            yield "    ";
        }
        // line 986
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 988
        yield "<label class=\"custom-file-label\" for=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 988, $this->source); })()), "vars", [], "any", false, false, false, 988), "id", [], "any", false, false, false, 988), "html", null, true);
        yield "\">
      ";
        // line 989
        $context["attributes"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 989, $this->source); })()), "vars", [], "any", false, false, false, 989), "attr", [], "any", false, false, false, 989);
        // line 990
        yield "      ";
        yield ((CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "placeholder", [], "any", true, true, false, 990)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attributes"]) || array_key_exists("attributes", $context) ? $context["attributes"] : (function () { throw new RuntimeError('Variable "attributes" does not exist.', 990, $this->source); })()), "placeholder", [], "any", false, false, false, 990), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Choose file(s)", [], "Admin.Actions"), "html", null, true)));
        yield "
    </label>
  </div>";
        // line 993
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        // line 994
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 994, $this->source); })()), "vars", [], "any", false, false, false, 994), "download_url", [], "any", false, false, false, 994)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 995
            yield "    <a target=\"_blank\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 995, $this->source); })()), "vars", [], "any", false, false, false, 995), "download_url", [], "any", false, false, false, 995), "html", null, true);
            yield "\">
      ";
            // line 996
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Download file", [], "Admin.Actions"), "html", null, true);
            yield "
    </a>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1001
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_shop_restriction_checkbox_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "shop_restriction_checkbox_widget"));

        // line 1002
        yield "  ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1002, $this->source); })()), "vars", [], "any", false, false, false, 1002), "attr", [], "any", false, false, false, 1002), "is_allowed_to_display", [], "any", false, false, false, 1002)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1003
            yield "    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        ";
            // line 1005
            $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1005, $this->source); })()), "checkbox")) : ("checkbox"));
            // line 1006
            yield "        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"";
            // line 1008
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1008, $this->source); })()), "html", null, true);
            yield "\"
          ";
            // line 1009
            yield from             $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
            yield "
          value=\"";
            // line 1010
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1010, $this->source); })()), "html", null, true);
            yield "\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1018
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_generatable_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generatable_text_widget"));

        // line 1019
        yield "  <div class=\"input-group\">
    ";
        // line 1020
        if ((($tmp = (isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1020, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1021
            yield from             $this->unwrap()->yieldBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 1023
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1025
        yield "    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"";
        // line 1028
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1028, $this->source); })()), "html", null, true);
        yield "\"
              data-generated-value-length=\"";
        // line 1029
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["generated_value_length"]) || array_key_exists("generated_value_length", $context) ? $context["generated_value_length"] : (function () { throw new RuntimeError('Variable "generated_value_length" does not exist.', 1029, $this->source); })()), "html", null, true);
        yield "\"
      >
        ";
        // line 1031
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Generate", [], "Admin.Actions"), "html", null, true);
        yield "
      </button>
   </span>
  </div>
  ";
        // line 1035
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1038
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_recommended_length_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_recommended_length_widget"));

        // line 1039
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1039, $this->source); })()), ["data-recommended-length-counter" => (("#" .         // line 1040
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1040, $this->source); })())) . "_recommended_length_counter"), "class" => "js-recommended-length-input"]);
        // line 1044
        if (((isset($context["input_type"]) || array_key_exists("input_type", $context) ? $context["input_type"] : (function () { throw new RuntimeError('Variable "input_type" does not exist.', 1044, $this->source); })()) == "textarea")) {
            // line 1045
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1047
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        }
        // line 1049
        yield "
  <small class=\"form-text text-muted text-right\"
         id=\"";
        // line 1051
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1051, $this->source); })()), "html", null, true);
        yield "_recommended_length_counter\"
  >
    <em>
      ";
        // line 1054
        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("[1][/1] of [2][/2] characters used (recommended)", [], "Admin.Catalog.Feature"), ["[1]" => ("<span class=\"js-current-length\">" . Twig\Extension\CoreExtension::length($this->env->getCharset(),         // line 1055
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1055, $this->source); })()))), "[/1]" => "</span>", "[2]" => ("<span>" .         // line 1057
(isset($context["recommended_length"]) || array_key_exists("recommended_length", $context) ? $context["recommended_length"] : (function () { throw new RuntimeError('Variable "recommended_length" does not exist.', 1057, $this->source); })())), "[/2]" => "</span>"]));
        // line 1059
        yield "
    </em>
  </small>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1064
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_with_length_counter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_with_length_counter_widget"));

        // line 1065
        yield "  <div class=\"input-group js-text-with-length-counter\">
    ";
        // line 1066
        $context["current_length"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1066, $this->source); })()), "vars", [], "any", false, false, false, 1066), "max_length", [], "any", false, false, false, 1066) - Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1066, $this->source); })())));
        // line 1067
        yield "
    ";
        // line 1068
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1068, $this->source); })()), "vars", [], "any", false, false, false, 1068), "position", [], "any", false, false, false, 1068) == "before")) {
            // line 1069
            yield "      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1070
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1070, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1073
        yield "
    ";
        // line 1074
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1074, $this->source); })()), (isset($context["input_attr"]) || array_key_exists("input_attr", $context) ? $context["input_attr"] : (function () { throw new RuntimeError('Variable "input_attr" does not exist.', 1074, $this->source); })()));
        // line 1075
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1075, $this->source); })()), ["data-max-length" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1075, $this->source); })()), "vars", [], "any", false, false, false, 1075), "max_length", [], "any", false, false, false, 1075), "maxlength" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1075, $this->source); })()), "vars", [], "any", false, false, false, 1075), "max_length", [], "any", false, false, false, 1075), "class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1075)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1075, $this->source); })()), "class", [], "any", false, false, false, 1075), "")) : ("")) . " js-countable-input"))]);
        // line 1077
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1077, $this->source); })()), "vars", [], "any", false, false, false, 1077), "input", [], "any", false, false, false, 1077) == "input")) {
            // line 1078
            yield from             $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1079
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1079, $this->source); })()), "vars", [], "any", false, false, false, 1079), "input", [], "any", false, false, false, 1079) == "textarea")) {
            // line 1080
            yield from             $this->unwrap()->yieldBlock("textarea_widget", $context, $blocks);
        } else {
            // line 1082
            yield from             $this->unwrap()->yieldBlock("form_widget", $context, $blocks);
        }
        // line 1084
        yield "
    ";
        // line 1085
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1085, $this->source); })()), "vars", [], "any", false, false, false, 1085), "position", [], "any", false, false, false, 1085) == "after")) {
            // line 1086
            yield "      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">";
            // line 1087
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["current_length"]) || array_key_exists("current_length", $context) ? $context["current_length"] : (function () { throw new RuntimeError('Variable "current_length" does not exist.', 1087, $this->source); })()), "html", null, true);
            yield "</span>
      </div>
    ";
        }
        // line 1090
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1093
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_min_max_filter_widget"));

        // line 1094
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1094, $this->source); })()), "min_field", [], "array", false, false, false, 1094), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1095
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1095, $this->source); })()), "max_field", [], "array", false, false, false, 1095), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1098
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_min_max_filter_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_min_max_filter_widget"));

        // line 1099
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1099, $this->source); })()), "min_field", [], "array", false, false, false, 1099), 'widget', ["attr" => ["class" => "min-field"]]);
        yield "
  ";
        // line 1100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1100, $this->source); })()), "max_field", [], "array", false, false, false, 1100), 'widget', ["attr" => ["class" => "max-field"]]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1103
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_number_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "number_widget"));

        // line 1104
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1104, $this->source); })()), "text")) : ("text"));
        // line 1105
        yield "<div class=\"input-group\">";
        // line 1106
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1107
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1108
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1109
        yield "</div>
  ";
        // line 1110
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1113
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_integer_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 1114
        $context["type"] = ((array_key_exists("type", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new RuntimeError('Variable "type" does not exist.', 1114, $this->source); })()), "number")) : ("number"));
        // line 1115
        yield "<div class=\"input-group\">";
        // line 1116
        yield from         $this->unwrap()->yieldBlock("form_unit_prepend", $context, $blocks);
        // line 1117
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1118
        yield from         $this->unwrap()->yieldBlock("form_unit", $context, $blocks);
        // line 1119
        yield "</div>
  ";
        // line 1120
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1123
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit"));

        // line 1124
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1124), "unit", [], "any", true, true, false, 1124) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1124, $this->source); })()), "vars", [], "any", false, false, false, 1124), "prepend_unit", [], "any", false, false, false, 1124))) {
            // line 1125
            yield "    <div class=\"input-group-append\">
      <span class=\"input-group-text\">";
            // line 1126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1126, $this->source); })()), "vars", [], "any", false, false, false, 1126), "unit", [], "any", false, false, false, 1126), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_unit_prepend(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_unit_prepend"));

        // line 1132
        yield "  ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, true, false, 1132), "unit", [], "any", true, true, false, 1132) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1132, $this->source); })()), "vars", [], "any", false, false, false, 1132), "prepend_unit", [], "any", false, false, false, 1132))) {
            // line 1133
            yield "    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">";
            // line 1134
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1134, $this->source); })()), "vars", [], "any", false, false, false, 1134), "unit", [], "any", false, false, false, 1134), "html", null, true);
            yield "</span>
    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1139
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_help(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_help"));

        // line 1140
        yield "  ";
        if ((($tmp =  !(null === (isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1140, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1141
            $context["help_attr"] = Twig\Extension\CoreExtension::merge((isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1141, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["help_attr"] ?? null), "class", [], "any", true, true, false, 1141)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1141, $this->source); })()), "class", [], "any", false, false, false, 1141), "")) : ("")) . " form-text"))]);
            // line 1142
            yield "<small id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1142, $this->source); })()), "html", null, true);
            yield "_help\"";
            $_v7 = $context;
            $_v8 = ["attr" => (isset($context["help_attr"]) || array_key_exists("help_attr", $context) ? $context["help_attr"] : (function () { throw new RuntimeError('Variable "help_attr" does not exist.', 1142, $this->source); })())];
            if (!is_iterable($_v8)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1142, $this->getSourceContext());
            }
            $_v8 = CoreExtension::toArray($_v8);
            $context = $_v8 + $context + $this->env->getGlobals();
            yield from             $this->unwrap()->yieldBlock("attributes", $context, $blocks);
            $context = $_v7;
            yield ">";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["help"]) || array_key_exists("help", $context) ? $context["help"] : (function () { throw new RuntimeError('Variable "help" does not exist.', 1142, $this->source); })()));
            yield "</small>
  ";
        }
        // line 1144
        yield "  ";
        if (array_key_exists("warning", $context)) {
            // line 1145
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["warning"]) || array_key_exists("warning", $context) ? $context["warning"] : (function () { throw new RuntimeError('Variable "warning" does not exist.', 1145, $this->source); })()), "html", null, true);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1149
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_external_link"));

        // line 1150
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1150, $this->source); })()), "position", [], "any", false, false, false, 1150) == "prepend"))) {
            // line 1151
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1155
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_external_link"));

        // line 1156
        yield "  ";
        if ((array_key_exists("external_link", $context) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1156, $this->source); })()), "position", [], "any", false, false, false, 1156) == "append"))) {
            // line 1157
            yield from             $this->unwrap()->yieldBlock("form_external_link", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link"));

        // line 1162
        yield "  ";
        if (array_key_exists("external_link", $context)) {
            // line 1163
            $context["openingTag"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 1164
                yield "<a ";
                yield from                 $this->unwrap()->yieldBlock("form_external_link_attributes", $context, $blocks);
                yield ">
        ";
                // line 1165
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1165, $this->source); })()), "open_in_new_tab", [], "any", false, false, false, 1165)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<i class=\"material-icons\">open_in_new</i>";
                }
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 1168
            yield "<div class=\"small font-secondary form-external-link";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1168, $this->source); })()), "align", [], "any", false, false, false, 1168) === "right")) {
                yield " text-right";
            }
            yield "\">
      ";
            // line 1170
            yield "      ";
            if ((CoreExtension::inFilter("[1]", CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1170, $this->source); })()), "text", [], "any", false, false, false, 1170)) && CoreExtension::inFilter("[/1]", CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1170, $this->source); })()), "text", [], "any", false, false, false, 1170)))) {
                // line 1171
                yield "        ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1171, $this->source); })()), "text", [], "any", false, false, false, 1171)), ["[1]" => (isset($context["openingTag"]) || array_key_exists("openingTag", $context) ? $context["openingTag"] : (function () { throw new RuntimeError('Variable "openingTag" does not exist.', 1171, $this->source); })()), "[/1]" => "</a>"]));
                yield "
      ";
            } else {
                // line 1173
                yield "        ";
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier(Twig\Extension\CoreExtension::replace((("[1]" . $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1173, $this->source); })()), "text", [], "any", false, false, false, 1173))) . "[/1]"), ["[1]" => (isset($context["openingTag"]) || array_key_exists("openingTag", $context) ? $context["openingTag"] : (function () { throw new RuntimeError('Variable "openingTag" does not exist.', 1173, $this->source); })()), "[/1]" => "</a>"]));
                yield "
      ";
            }
            // line 1175
            yield "    </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1179
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_external_link_attributes(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_external_link_attributes"));

        // line 1180
        $context["external_link_attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1180, $this->source); })()), "attr", [], "any", false, false, false, 1180), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["external_link"] ?? null), "attr", [], "any", false, true, false, 1180), "class", [], "any", true, true, false, 1180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1180, $this->source); })()), "attr", [], "any", false, false, false, 1180), "class", [], "any", false, false, false, 1180), "")) : ("")) . " btn btn-link px-0 align-right"))]);
        // line 1181
        yield "
  ";
        // line 1182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1182, $this->source); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 1183
            yield "    ";
            if (!CoreExtension::inFilter($context["attrname"], ["href", "class"])) {
                // line 1184
                yield "      ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrname"], "html", null, true);
                yield "=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attrvalue"], "html", null, true);
                yield "\"
    ";
            }
            // line 1186
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['attrname'], $context['attrvalue'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1187
        yield "
  ";
        // line 1188
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1188, $this->source); })()), "open_in_new_tab", [], "any", false, false, false, 1188)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "target=\"_blank\"";
        }
        // line 1189
        yield "  href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link"]) || array_key_exists("external_link", $context) ? $context["external_link"] : (function () { throw new RuntimeError('Variable "external_link" does not exist.', 1189, $this->source); })()), "href", [], "any", false, false, false, 1189), "html", null, true);
        yield "\"
  class=\"";
        // line 1190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["external_link_attr"]) || array_key_exists("external_link_attr", $context) ? $context["external_link_attr"] : (function () { throw new RuntimeError('Variable "external_link_attr" does not exist.', 1190, $this->source); })()), "class", [], "any", false, false, false, 1190), "html", null, true);
        yield "\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_custom_content_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "custom_content_widget"));

        // line 1194
        yield "  ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1194, $this->source); })()), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1194, $this->source); })()));
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1197
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_widget"));

        // line 1198
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1198, $this->source); })()), ["aria-label" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%inputId% input", ["%inputId%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1198, $this->source); })()), "vars", [], "any", false, false, false, 1198), "id", [], "any", false, false, false, 1198)], "Admin.Global")]);
        // line 1199
        if ((($tmp =  !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1199, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1200
            $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1200, $this->source); })()), ["list" => ((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1200, $this->source); })()) . "_datalist")]);
        }
        // line 1202
        yield "
  ";
        // line 1203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1203, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1203, $this->source); })())]);
        yield "

  ";
        // line 1205
        if ((($tmp =  !(null === (isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1205, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1206
            yield "    <datalist id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1206, $this->source); })()) . "_datalist"), "html", null, true);
            yield "\">
      ";
            // line 1207
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data_list"]) || array_key_exists("data_list", $context) ? $context["data_list"] : (function () { throw new RuntimeError('Variable "data_list" does not exist.', 1207, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 1208
                yield "        <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["item"], "html", null, true);
                yield "\"></option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1210
            yield "    </datalist>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1214
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_prepend_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_prepend_alert"));

        // line 1215
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1215, $this->source); })()) == "prepend"))) {
            // line 1216
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1220
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_append_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_append_alert"));

        // line 1221
        if ((array_key_exists("alert_position", $context) && ((isset($context["alert_position"]) || array_key_exists("alert_position", $context) ? $context["alert_position"] : (function () { throw new RuntimeError('Variable "alert_position" does not exist.', 1221, $this->source); })()) == "append"))) {
            // line 1222
            yield from             $this->unwrap()->yieldBlock("form_alert", $context, $blocks);
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1226
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_form_alert(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "form_alert"));

        // line 1227
        if (array_key_exists("alert_message", $context)) {
            // line 1228
            yield "    <div class=\"alert alert-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["alert_type"]) || array_key_exists("alert_type", $context) ? $context["alert_type"] : (function () { throw new RuntimeError('Variable "alert_type" does not exist.', 1228, $this->source); })()), "html", null, true);
            if (array_key_exists("alert_title", $context)) {
                yield " expandable-alert";
            }
            yield "\" role=\"alert\">
    ";
            // line 1229
            if (array_key_exists("alert_title", $context)) {
                // line 1230
                yield "      <p class=\"alert-text\">
        ";
                // line 1231
                yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["alert_title"]) || array_key_exists("alert_title", $context) ? $context["alert_title"] : (function () { throw new RuntimeError('Variable "alert_title" does not exist.', 1231, $this->source); })()));
                yield "
      </p>
    ";
            } else {
                // line 1234
                yield "      ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1234, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 1235
                    yield "        <p class=\"alert-text\">
          ";
                    // line 1236
                    yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["message"]);
                    yield "
        </p>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1239
                yield "    ";
            }
            // line 1240
            yield "
    ";
            // line 1241
            if (array_key_exists("alert_title", $context)) {
                // line 1242
                yield "      <div class=\"alert-more collapse\" id=\"expandable_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1242, $this->source); })()), "vars", [], "any", false, false, false, 1242), "id", [], "any", false, false, false, 1242), "html", null, true);
                yield "\" style=\"\">
        ";
                // line 1243
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1243, $this->source); })())) > 1)) {
                    // line 1244
                    yield "          <ul class=\"p-0\">
            ";
                    // line 1245
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1245, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1246
                        yield "              <li>";
                        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["message"]);
                        yield "</li>
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1248
                    yield "          </ul>
        ";
                } else {
                    // line 1250
                    yield "          ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable((isset($context["alert_message"]) || array_key_exists("alert_message", $context) ? $context["alert_message"] : (function () { throw new RuntimeError('Variable "alert_message" does not exist.', 1250, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 1251
                        yield "            <p>
              ";
                        // line 1252
                        yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier($context["message"]);
                        yield "
            </p>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1255
                    yield "        ";
                }
                // line 1256
                yield "      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_";
                // line 1258
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1258, $this->source); })()), "vars", [], "any", false, false, false, 1258), "id", [], "any", false, false, false, 1258), "html", null, true);
                yield "\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            ";
                // line 1259
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Read more", [], "Admin.Actions"), "html", null, true);
                yield "
          </button>
       </div>
    ";
            }
            // line 1263
            yield "  </div>
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1267
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_unavailable_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "unavailable_widget"));

        // line 1268
        yield "  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      ";
        // line 1270
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Not available yet.", [], "Admin.Catalog.Feature"), "html", null, true);
        yield "
    </p>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1275
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_text_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "text_preview_widget"));

        // line 1276
        yield "  ";
        // line 1277
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1278
        yield "<span class=\"label text-preview ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["preview_class"]) || array_key_exists("preview_class", $context) ? $context["preview_class"] : (function () { throw new RuntimeError('Variable "preview_class" does not exist.', 1278, $this->source); })()), "html", null, true);
        yield "\">
    ";
        // line 1280
        yield "    ";
        if (array_key_exists("prefix", $context)) {
            // line 1281
            yield "    <span class=\"text-preview-prefix\">
      ";
            // line 1282
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["prefix"]) || array_key_exists("prefix", $context) ? $context["prefix"] : (function () { throw new RuntimeError('Variable "prefix" does not exist.', 1282, $this->source); })()));
            yield "
    </span>
    ";
        }
        // line 1285
        yield "
    <span class=\"text-preview-value\">
      ";
        // line 1287
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1287, $this->source); })()), "vars", [], "any", false, false, false, 1287), "allow_html", [], "any", false, false, false, 1287)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1288
            yield "        ";
            // line 1289
            yield "        ";
            yield (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1289, $this->source); })());
            yield "
      ";
        } else {
            // line 1291
            yield "        ";
            // line 1292
            yield "        ";
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1292, $this->source); })()));
            yield "
      ";
        }
        // line 1294
        yield "    </span>

    ";
        // line 1297
        yield "    ";
        if (array_key_exists("suffix", $context)) {
            // line 1298
            yield "    <span class=\"text-preview-suffix\">
      ";
            // line 1299
            yield $this->extensions['PrestaShopBundle\Twig\RawPurifiedExtension']->rawPurifier((isset($context["suffix"]) || array_key_exists("suffix", $context) ? $context["suffix"] : (function () { throw new RuntimeError('Variable "suffix" does not exist.', 1299, $this->source); })()));
            yield "
    </span>
    ";
        }
        // line 1302
        yield "  </span>";
        // line 1303
        yield from         $this->unwrap()->yieldBlock("form_help", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1306
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_link_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "link_preview_widget"));

        // line 1307
        yield "  ";
        // line 1308
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1309
        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1309, $this->source); })()), "vars", [], "any", false, false, false, 1309), "value", [], "any", false, false, false, 1309), "html", null, true);
        yield "\" class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1309)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1309, $this->source); })()), "class", [], "any", false, false, false, 1309), "")) : ("")), "html", null, true);
        yield "\">
    ";
        // line 1310
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1310, $this->source); })()), "vars", [], "any", false, false, false, 1310), "button_label", [], "any", false, false, false, 1310), "html", null, true);
        yield "
  </a>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1314
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_preview_widget"));

        // line 1315
        yield "  ";
        // line 1316
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1317
        if ((($tmp =  !Twig\Extension\CoreExtension::testEmpty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1317, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1318
            yield "    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1318, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::trim(("Image preview for " . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1318, $this->source); })()), "vars", [], "any", false, false, false, 1318), "name", [], "any", false, false, false, 1318))), "html", null, true);
            yield "\" class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1318, $this->source); })()), "vars", [], "any", false, false, false, 1318), "image_class", [], "any", false, false, false, 1318), "html", null, true);
            yield "\" />
  ";
        } else {
            // line 1320
            yield "    ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("No picture", [], "Admin.Global"), "html", null, true);
            yield "
  ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1324
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_widget"));

        // line 1325
        yield "  ";
        $context["quantity"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["value"] ?? null), "quantity", [], "any", true, true, false, 1325)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1325, $this->source); })()), "quantity", [], "any", false, false, false, 1325), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1325, $this->source); })()), "quantity", [], "any", false, false, false, 1325), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325))) : (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1325, $this->source); })()), "quantity", [], "any", false, false, false, 1325), "vars", [], "any", false, false, false, 1325), "value", [], "any", false, false, false, 1325)));
        // line 1326
        yield "  ";
        // line 1327
        yield "  ";
        if ((null === (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1327, $this->source); })()))) {
            // line 1328
            yield "    ";
            $context["initialQuantity"] = (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1328, $this->source); })());
            // line 1329
            yield "  ";
        }
        // line 1330
        yield "  ";
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1330, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1330)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1330, $this->source); })()), "class", [], "any", false, false, false, 1330), "")) : ("")) . " delta-quantity")), "data-initial-quantity" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1330, $this->source); })())]);
        // line 1331
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
    ";
        // line 1332
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1332, $this->source); })()), "initial_quantity", [], "any", false, false, false, 1332), 'widget', ["value" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1332, $this->source); })())]);
        yield "
    ";
        // line 1333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1333, $this->source); })()), "quantity", [], "any", false, false, false, 1333), 'widget', ["initialQuantity" => (isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1333, $this->source); })()), "deltaQuantity" => (isset($context["deltaQuantity"]) || array_key_exists("deltaQuantity", $context) ? $context["deltaQuantity"] : (function () { throw new RuntimeError('Variable "deltaQuantity" does not exist.', 1333, $this->source); })()), "value" => (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 1333, $this->source); })())]);
        yield "
    ";
        // line 1334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1334, $this->source); })()), "delta", [], "any", false, false, false, 1334), 'row');
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1338
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_quantity_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_quantity_widget"));

        // line 1339
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1339, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1339)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1339, $this->source); })()), "class", [], "any", false, false, false, 1339), "")) : ("")) . " delta-quantity-quantity"))]);
        // line 1340
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">";
        // line 1341
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        // line 1342
        yield "<span class=\"initial-quantity\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["initialQuantity"]) || array_key_exists("initialQuantity", $context) ? $context["initialQuantity"] : (function () { throw new RuntimeError('Variable "initialQuantity" does not exist.', 1342, $this->source); })()), "html", null, true);
        yield "</span>
    <span class=\"quantity-update";
        // line 1343
        if (((isset($context["deltaQuantity"]) || array_key_exists("deltaQuantity", $context) ? $context["deltaQuantity"] : (function () { throw new RuntimeError('Variable "deltaQuantity" does not exist.', 1343, $this->source); })()) != 0)) {
            yield " quantity-modified";
        }
        yield "\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">";
        // line 1345
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1345, $this->source); })()), "html", null, true);
        yield "</span>
    </span>
    ";
        // line 1347
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1347, $this->source); })()), 'errors');
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1351
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_row"));

        // line 1352
        yield "  <div class=\"form-group";
        yield from         $this->unwrap()->yieldBlock("widget_type_class", $context, $blocks);
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new RuntimeError('Variable "compound" does not exist.', 1352, $this->source); })()) || ((array_key_exists("force_error", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new RuntimeError('Variable "force_error" does not exist.', 1352, $this->source); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new RuntimeError('Variable "valid" does not exist.', 1352, $this->source); })()))) {
            yield " has-error";
        }
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["row_attr"] ?? null), "class", [], "any", true, true, false, 1352)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["row_attr"]) || array_key_exists("row_attr", $context) ? $context["row_attr"] : (function () { throw new RuntimeError('Variable "row_attr" does not exist.', 1352, $this->source); })()), "class", [], "any", false, false, false, 1352), "html", null, true);
        }
        yield "\">
    <div class=\"delta-quantity-delta-container\">";
        // line 1354
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1354, $this->source); })()), 'label');
        // line 1355
        yield from         $this->unwrap()->yieldBlock("form_prepend_alert", $context, $blocks);
        // line 1356
        yield from         $this->unwrap()->yieldBlock("form_prepend_external_link", $context, $blocks);
        // line 1358
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1358, $this->source); })()), 'widget');
        // line 1360
        yield from         $this->unwrap()->yieldBlock("form_append_alert", $context, $blocks);
        // line 1361
        yield from         $this->unwrap()->yieldBlock("form_append_external_link", $context, $blocks);
        // line 1362
        yield "</div>";
        // line 1363
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1363, $this->source); })()), 'errors');
        // line 1364
        yield from         $this->unwrap()->yieldBlock("form_modify_all_shops", $context, $blocks);
        // line 1365
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1368
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delta_quantity_delta_widget"));

        // line 1369
        $context["type"] = "number";
        // line 1370
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1370, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1370)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1370, $this->source); })()), "class", [], "any", false, false, false, 1370), "")) : ("")) . " delta-quantity-delta"))]);
        // line 1371
        yield from         $this->unwrap()->yieldBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_widget"));

        // line 1375
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1375, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1375)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1375, $this->source); })()), "class", [], "any", false, false, false, 1375), "")) : ("")) . " ps-submittable-input-wrapper"))]);
        // line 1376
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1377
        $context["typeAttr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1377, $this->source); })()), "vars", [], "any", false, false, false, 1377), "type_attr", [], "any", false, false, false, 1377), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1378
($context["form"] ?? null), "vars", [], "any", false, true, false, 1378), "type_attr", [], "any", false, true, false, 1378), "class", [], "any", true, true, false, 1378)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1378, $this->source); })()), "vars", [], "any", false, false, false, 1378), "type_attr", [], "any", false, false, false, 1378), "class", [], "any", false, false, false, 1378), "")) : ("")) . " submittable-input")), "data-initial-value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1379
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1379, $this->source); })()), "value", [], "any", false, false, false, 1379), "vars", [], "any", false, false, false, 1379), "value", [], "any", false, false, false, 1379), "value" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1380
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1380, $this->source); })()), "value", [], "any", false, false, false, 1380), "vars", [], "any", false, false, false, 1380), "value", [], "any", false, false, false, 1380)]);
        // line 1383
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1383, $this->source); })()), "value", [], "any", false, false, false, 1383), 'widget', ["attr" => (isset($context["typeAttr"]) || array_key_exists("typeAttr", $context) ? $context["typeAttr"] : (function () { throw new RuntimeError('Variable "typeAttr" does not exist.', 1383, $this->source); })())]);
        // line 1384
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1385
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1388
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_input_button_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_input_button_widget"));

        // line 1389
        yield "  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1394
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_submittable_delta_quantity_delta_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "submittable_delta_quantity_delta_widget"));

        // line 1395
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1395, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1395)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1395, $this->source); })()), "class", [], "any", false, false, false, 1395), "")) : ("")) . " delta-quantity-delta ps-submittable-input-wrapper"))]);
        // line 1396
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1397
        $context["attr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1397, $this->source); })()), "vars", [], "any", false, false, false, 1397), "attr", [], "any", false, false, false, 1397), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1398
($context["form"] ?? null), "vars", [], "any", false, true, false, 1398), "attr", [], "any", false, true, false, 1398), "class", [], "any", true, true, false, 1398)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1398, $this->source); })()), "vars", [], "any", false, false, false, 1398), "attr", [], "any", false, false, false, 1398), "class", [], "any", false, false, false, 1398), "")) : ("")) . " submittable-input")), "data-initial-value" =>         // line 1399
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1399, $this->source); })()), "value" =>         // line 1400
(isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 1400, $this->source); })())]);
        // line 1403
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1403, $this->source); })()), 'widget', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1403, $this->source); })())]);
        // line 1404
        yield from         $this->unwrap()->yieldBlock("submittable_input_button_widget", $context, $blocks);
        // line 1405
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1408
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_navigation_tab_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "navigation_tab_widget"));

        // line 1409
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1409, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1409)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1409, $this->source); })()), "class", [], "any", false, false, false, 1409), "")) : ("")) . " navigation-tab-widget"))]);
        // line 1410
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_container_attributes", $context, $blocks);
        yield ">
  <div id=\"";
        // line 1411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1411, $this->source); })()), "vars", [], "any", false, false, false, 1411), "id", [], "any", false, false, false, 1411), "html", null, true);
        yield "-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    ";
        // line 1417
        $context["firstRenderedChild"] = true;
        // line 1418
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1418, $this->source); })()), "children", [], "any", false, false, false, 1418));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1419
            yield "      ";
            if (((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1419) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1419), "name", [], "any", false, false, false, 1419) != "_toolbar_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1419), "name", [], "any", false, false, false, 1419) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1419), "name", [], "any", false, false, false, 1419) != "_token"))) {
                // line 1420
                yield "      <li id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1420), "id", [], "any", false, false, false, 1420), "html", null, true);
                yield "-tab-nav\" class=\"nav-item";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1420), "valid", [], "any", false, false, false, 1420)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " has-error";
                }
                yield "\">
        <a href=\"#";
                // line 1421
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1421), "id", [], "any", false, false, false, 1421), "html", null, true);
                yield "-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link";
                if ((($tmp = (isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1421, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " active";
                }
                yield "\">
          ";
                // line 1422
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1422), "label", [], "any", false, false, false, 1422), "html", null, true);
                yield "
        </a>
      </li>
      ";
                // line 1425
                $context["firstRenderedChild"] = false;
                // line 1426
                yield "      ";
            }
            // line 1427
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1428
        yield "    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    ";
        // line 1434
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1434, $this->source); })()), "offsetExists", ["_toolbar_buttons"], "method", false, false, false, 1434)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1435
            yield "    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      ";
            // line 1436
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1436, $this->source); })()), "_toolbar_buttons", [], "any", false, false, false, 1436), 'widget');
            yield "
    </div>
    ";
        }
        // line 1439
        yield "  </div>

  <div id=\"";
        // line 1441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1441, $this->source); })()), "vars", [], "any", false, false, false, 1441), "id", [], "any", false, false, false, 1441), "html", null, true);
        yield "-tabs-content\" class=\"tab-content\">
    ";
        // line 1442
        $context["firstRenderedChild"] = true;
        // line 1443
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1443, $this->source); })()), "children", [], "any", false, false, false, 1443));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1444
            yield "      ";
            if ((( !CoreExtension::getAttribute($this->env, $this->source, $context["child"], "rendered", [], "any", false, false, false, 1444) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1444), "name", [], "any", false, false, false, 1444) != "_footer_buttons")) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1444), "name", [], "any", false, false, false, 1444) != "_token"))) {
                // line 1445
                yield "      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid";
                if ((($tmp = (isset($context["firstRenderedChild"]) || array_key_exists("firstRenderedChild", $context) ? $context["firstRenderedChild"] : (function () { throw new RuntimeError('Variable "firstRenderedChild" does not exist.', 1445, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " active";
                }
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1445), "id", [], "any", false, false, false, 1445), "html", null, true);
                yield "-tab\">
        ";
                // line 1446
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1446), "label_tab", [], "any", true, true, false, 1446)) {
                    // line 1447
                    yield "          ";
                    // line 1448
                    yield "          ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', ["required" => false] + (CoreExtension::testEmpty($_label_ = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1448), "label_tab", [], "any", false, false, false, 1448)) ? [] : ["label" => $_label_]));
                    yield "
        ";
                }
                // line 1450
                yield "        ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
        ";
                // line 1451
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
                yield "
      </div>
      ";
                // line 1453
                $context["firstRenderedChild"] = false;
                // line 1454
                yield "      ";
            }
            // line 1455
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1456
        yield "  </div>

  ";
        // line 1458
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1458, $this->source); })()), "offsetExists", ["_footer_buttons"], "method", false, false, false, 1458)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 1459
            yield "    <div class=\"navigation-tab-widget-footer\">
      ";
            // line 1460
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1460, $this->source); })()), "_footer_buttons", [], "any", false, false, false, 1460), 'widget');
            yield "
    </div>
  ";
        }
        // line 1463
        yield "</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1466
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toggle_children_choice_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_children_choice_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toggle_children_choice_widget"));

        // line 1467
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1467, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1468
($context["attr"] ?? null), "class", [], "any", true, true, false, 1468)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1468, $this->source); })()), "class", [], "any", false, false, false, 1468), "")) : ("")) . " toggle-children-choice"))]);
        // line 1470
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">";
        // line 1471
        $context["selectAttr"] = Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1471, $this->source); })()), "children_selector", [], "any", false, false, false, 1471), "vars", [], "any", false, false, false, 1471), "attr", [], "any", false, false, false, 1471), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 1472
($context["form"] ?? null), "children_selector", [], "any", false, true, false, 1472), "vars", [], "any", false, true, false, 1472), "attr", [], "any", false, true, false, 1472), "class", [], "any", true, true, false, 1472)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1472, $this->source); })()), "children_selector", [], "any", false, false, false, 1472), "vars", [], "any", false, false, false, 1472), "attr", [], "any", false, false, false, 1472), "class", [], "any", false, false, false, 1472), "")) : ("")) . " toggle-children-choice-select"))]);
        // line 1476
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1476, $this->source); })()));
        foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
            // line 1477
            yield "      ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1477), "valid", [], "any", false, false, false, 1477) != true)) {
                // line 1478
                yield "        ";
                // line 1479
                yield "        ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1479, $this->source); })()), "children_selector", [], "any", false, false, false, 1479));
                foreach ($context['_seq'] as $context["choiceChildName"] => $context["choiceChild"]) {
                    // line 1480
                    yield "          ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["choiceChild"], "vars", [], "any", false, false, false, 1480), "value", [], "any", false, false, false, 1480) == $context["childName"])) {
                        // line 1481
                        yield "            ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['PrestaShopBundle\Twig\Extension\UpdateFormVarsExtension']->updateFormVars($context["choiceChild"], ["valid" => false]), "html", null, true);
                        yield "
          ";
                    }
                    // line 1483
                    yield "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['choiceChildName'], $context['choiceChild'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1484
                yield "      ";
            }
            // line 1485
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['childName'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1486
        yield "
    ";
        // line 1487
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1487, $this->source); })()), "children_selector", [], "any", false, false, false, 1487), 'row', ["attr" => (isset($context["selectAttr"]) || array_key_exists("selectAttr", $context) ? $context["selectAttr"] : (function () { throw new RuntimeError('Variable "selectAttr" does not exist.', 1487, $this->source); })())]);
        yield "
    <div class=\"toggle-children-choice-container\">
      ";
        // line 1489
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1489, $this->source); })()));
        foreach ($context['_seq'] as $context["childName"] => $context["child"]) {
            // line 1490
            yield "        ";
            if (($context["childName"] != "children_selector")) {
                // line 1491
                yield "          <div class=\"toggle-children-choice-child";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1491, $this->source); })()), "children_selector", [], "any", false, false, false, 1491), "vars", [], "any", false, false, false, 1491), "value", [], "any", false, false, false, 1491) != $context["childName"])) {
                    yield " d-none";
                }
                yield "\" data-toggle-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["childName"], "html", null, true);
                yield "\">
            ";
                // line 1492
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row', ["label" => false]);
                yield "
          </div>
        ";
            }
            // line 1495
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['childName'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1496
        yield "    </div>
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1500
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_accordion_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "accordion_widget"));

        // line 1501
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1501, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1502
($context["attr"] ?? null), "class", [], "any", true, true, false, 1502)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1502, $this->source); })()), "class", [], "any", false, false, false, 1502), "")) : ("")) . " accordion accordion-form"))]);
        // line 1504
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1505
        $context["firstChild"] = true;
        // line 1506
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1506, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1507
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1507), "compound", [], "any", false, false, false, 1507)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 1508
                yield "      ";
                $context["hasError"] = (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1508), "valid", [], "any", false, false, false, 1508) != true);
                // line 1509
                yield "      ";
                $context["isExpanded"] = ((((isset($context["firstChild"]) || array_key_exists("firstChild", $context) ? $context["firstChild"] : (function () { throw new RuntimeError('Variable "firstChild" does not exist.', 1509, $this->source); })()) && (isset($context["expand_first"]) || array_key_exists("expand_first", $context) ? $context["expand_first"] : (function () { throw new RuntimeError('Variable "expand_first" does not exist.', 1509, $this->source); })())) || ((isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1509, $this->source); })()) && (isset($context["expand_on_error"]) || array_key_exists("expand_on_error", $context) ? $context["expand_on_error"] : (function () { throw new RuntimeError('Variable "expand_on_error" does not exist.', 1509, $this->source); })()))) || (isset($context["expand_all"]) || array_key_exists("expand_all", $context) ? $context["expand_all"] : (function () { throw new RuntimeError('Variable "expand_all" does not exist.', 1509, $this->source); })()));
                // line 1510
                yield "      <div class=\"card\">
        <div class=\"card-header\" id=\"";
                // line 1511
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1511), "id", [], "any", false, false, false, 1511), "html", null, true);
                yield "_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button ";
                // line 1514
                if ((($tmp = (isset($context["hasError"]) || array_key_exists("hasError", $context) ? $context["hasError"] : (function () { throw new RuntimeError('Variable "hasError" does not exist.', 1514, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " has-error ";
                }
                yield " btn btn-block text-left";
                if ((($tmp =  !(isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1514, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " collapsed";
                }
                yield "\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#";
                // line 1517
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1517), "id", [], "any", false, false, false, 1517), "html", null, true);
                yield "_accordion\"
              aria-expanded=\"";
                // line 1518
                if ((($tmp = (isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1518, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "true";
                } else {
                    yield "false";
                }
                yield "\"
              aria-controls=\"";
                // line 1519
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1519), "id", [], "any", false, false, false, 1519), "html", null, true);
                yield "_accordion\">
              <span class=\"accordion-form-button-label\">";
                // line 1520
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1520), "label", [], "any", false, false, false, 1520), "html", null, true);
                yield "</span>
              ";
                // line 1521
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1521), "label_subtitle", [], "any", true, true, false, 1521) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1521), "label_subtitle", [], "any", false, false, false, 1521)))) {
                    // line 1522
                    yield "                <span class=\"accordion-form-button-sub-label\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1522), "label_subtitle", [], "any", false, false, false, 1522), "html", null, true);
                    yield "</span>
              ";
                }
                // line 1524
                yield "              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"";
                // line 1529
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1529), "id", [], "any", false, false, false, 1529), "html", null, true);
                yield "_accordion\" class=\"collapse";
                if ((($tmp = (isset($context["isExpanded"]) || array_key_exists("isExpanded", $context) ? $context["isExpanded"] : (function () { throw new RuntimeError('Variable "isExpanded" does not exist.', 1529, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " show";
                }
                yield "\" aria-labelledby=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1529), "id", [], "any", false, false, false, 1529), "html", null, true);
                yield "_accordion_header\" ";
                if ((($tmp = (isset($context["display_one"]) || array_key_exists("display_one", $context) ? $context["display_one"] : (function () { throw new RuntimeError('Variable "display_one" does not exist.', 1529, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "data-parent=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1529, $this->source); })()), "vars", [], "any", false, false, false, 1529), "id", [], "any", false, false, false, 1529), "html", null, true);
                    yield "\"";
                }
                yield ">
          <div class=\"card-body\">
            ";
                // line 1531
                $context["childAttr"] = ["class" => "accordion-sub-form"];
                // line 1532
                yield "            ";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', ["attr" => (isset($context["childAttr"]) || array_key_exists("childAttr", $context) ? $context["childAttr"] : (function () { throw new RuntimeError('Variable "childAttr" does not exist.', 1532, $this->source); })())]);
                yield "
            ";
                // line 1533
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
                yield "
          </div>
        </div>
      </div>
      ";
                // line 1537
                $context["firstChild"] = false;
                // line 1538
                yield "      ";
            }
            // line 1539
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1540
        yield "
    ";
        // line 1542
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1542, $this->source); })()), 'rest');
        yield "
  </div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1546
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_button_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "button_collection_widget"));

        // line 1547
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1547, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source,         // line 1548
($context["attr"] ?? null), "class", [], "any", true, true, false, 1548)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1548, $this->source); })()), "class", [], "any", false, false, false, 1548), "")) : ("")) . " form-group btn-collection btn-toolbar")), "role" => "group", "style" => ("justify-content: " .         // line 1550
(isset($context["justify_content"]) || array_key_exists("justify_content", $context) ? $context["justify_content"] : (function () { throw new RuntimeError('Variable "justify_content" does not exist.', 1550, $this->source); })()))]);
        // line 1552
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1553
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["button_groups"]) || array_key_exists("button_groups", $context) ? $context["button_groups"] : (function () { throw new RuntimeError('Variable "button_groups" does not exist.', 1553, $this->source); })()));
        foreach ($context['_seq'] as $context["group"] => $context["buttons"]) {
            // line 1554
            yield "      <div class=\"";
            if ((($tmp = (isset($context["use_button_groups"]) || array_key_exists("use_button_groups", $context) ? $context["use_button_groups"] : (function () { throw new RuntimeError('Variable "use_button_groups" does not exist.', 1554, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "btn-group ";
            }
            yield "group-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["group"], "html", null, true);
            yield "\">
        ";
            // line 1556
            yield "        ";
            $context["inlineButtonsLimit"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1556, $this->source); })()), "vars", [], "any", false, false, false, 1556), "inline_buttons_limit", [], "any", false, false, false, 1556);
            // line 1557
            yield "        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["buttons"]);
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
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 1558
                yield "          ";
                $context["action"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1558, $this->source); })()), $context["button"], [], "any", false, false, false, 1558);
                // line 1559
                yield "          ";
                if ((((isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1559, $this->source); })()) === null) || (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 1559) <= (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1559, $this->source); })())))) {
                    // line 1560
                    yield "            ";
                    // line 1561
                    yield "            ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1561, $this->source); })()), "vars", [], "any", false, false, false, 1561), "use_inline_labels", [], "any", false, false, false, 1561)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1562
                        yield "              ";
                        $context["actionLabel"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1562, $this->source); })()), "vars", [], "any", false, false, false, 1562), "label", [], "any", false, false, false, 1562);
                        // line 1563
                        yield "            ";
                    } else {
                        // line 1564
                        yield "              ";
                        $context["actionLabel"] = "";
                        // line 1565
                        yield "            ";
                    }
                    // line 1566
                    yield "            ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1566, $this->source); })()), 'widget', ["label" => (isset($context["actionLabel"]) || array_key_exists("actionLabel", $context) ? $context["actionLabel"] : (function () { throw new RuntimeError('Variable "actionLabel" does not exist.', 1566, $this->source); })())]);
                    yield "
          ";
                }
                // line 1568
                yield "        ";
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
            unset($context['_seq'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1569
            yield "
        ";
            // line 1571
            yield "        ";
            if (( !((isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1571, $this->source); })()) === null) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["buttons"]) > (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1571, $this->source); })())))) {
                // line 1572
                yield "          <a id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1572, $this->source); })()), "vars", [], "any", false, false, false, 1572), "id", [], "any", false, false, false, 1572), "html", null, true);
                yield "_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            ";
                // line 1579
                $context["remainingButtons"] = Twig\Extension\CoreExtension::slice($this->env->getCharset(), $context["buttons"], (isset($context["inlineButtonsLimit"]) || array_key_exists("inlineButtonsLimit", $context) ? $context["inlineButtonsLimit"] : (function () { throw new RuntimeError('Variable "inlineButtonsLimit" does not exist.', 1579, $this->source); })()));
                // line 1580
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["remainingButtons"]) || array_key_exists("remainingButtons", $context) ? $context["remainingButtons"] : (function () { throw new RuntimeError('Variable "remainingButtons" does not exist.', 1580, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 1581
                    yield "              ";
                    $context["action"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1581, $this->source); })()), $context["button"], [], "any", false, false, false, 1581);
                    // line 1582
                    yield "              ";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1582, $this->source); })()), 'widget', ["attr" => ["class" => ("dropdown-item " . Twig\Extension\CoreExtension::trim(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                     // line 1583
($context["action"] ?? null), "vars", [], "any", false, true, false, 1583), "attr", [], "any", false, true, false, 1583), "class", [], "any", true, true, false, 1583)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1583, $this->source); })()), "vars", [], "any", false, false, false, 1583), "attr", [], "any", false, false, false, 1583), "class", [], "any", false, false, false, 1583), "")) : (""))))]]);
                    // line 1584
                    yield "
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['button'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1586
                yield "          </div>
        ";
            }
            // line 1588
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['group'], $context['buttons'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1590
        yield "  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1593
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_card_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "card_row"));

        // line 1594
        if ((array_key_exists("label_subtitle", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["label_subtitle"]) || array_key_exists("label_subtitle", $context) ? $context["label_subtitle"] : (function () { throw new RuntimeError('Variable "label_subtitle" does not exist.', 1594, $this->source); })())))) {
            // line 1595
            yield "    ";
            $context["cardSubtitle"] = (isset($context["label_subtitle"]) || array_key_exists("label_subtitle", $context) ? $context["label_subtitle"] : (function () { throw new RuntimeError('Variable "label_subtitle" does not exist.', 1595, $this->source); })());
            // line 1596
            yield "  ";
        }
        // line 1597
        yield "  <div class=\"card\">
    ";
        // line 1598
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1598, $this->source); })()), 'label', ["label_tag_name" => "h3", "label_attr" => ["class" => "card-header"], "required" => false, "label_subtitle" => null]);
        yield "
    <div class=\"card-body\">
      ";
        // line 1601
        yield "      ";
        if (array_key_exists("cardSubtitle", $context)) {
            // line 1602
            yield "        <p class=\"subtitle\">";
            yield (isset($context["cardSubtitle"]) || array_key_exists("cardSubtitle", $context) ? $context["cardSubtitle"] : (function () { throw new RuntimeError('Variable "cardSubtitle" does not exist.', 1602, $this->source); })());
            yield "</p>
      ";
        }
        // line 1604
        yield "
      <div class=\"form-wrapper\">
        ";
        // line 1606
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1606, $this->source); })()), 'errors');
        yield "
        ";
        // line 1607
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1607, $this->source); })()), 'widget');
        yield "
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1613
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_avatar_url_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avatar_url_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "avatar_url_row"));

        // line 1614
        yield "  ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1614, $this->source); })()), 'row', ["attr" => (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1614, $this->source); })())]);
        yield "

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"";
        // line 1619
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1619, $this->source); })()), "parent", [], "any", false, false, false, 1619), "vars", [], "any", false, false, false, 1619), "value", [], "any", false, false, false, 1619), "avatar_url", [], "any", false, false, false, 1619), "html", null, true);
        yield "\" alt=\"\">
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1624
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_change_password_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "change_password_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "change_password_row"));

        // line 1625
        yield "  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      ";
        // line 1627
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Password", [], "Admin.Global"), "html", null, true);
        yield "
    </label>
    <div class=\"col-sm\">
      ";
        // line 1631
        yield "      ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1631, $this->source); })()), "children", [], "any", false, false, false, 1631), "change_password_button", [], "any", false, false, false, 1631), 'row');
        yield "

      <div class=\"card card-body js-change-password-block d-none\">
        ";
        // line 1635
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1635, $this->source); })()), "children", [], "any", false, false, false, 1635), "old_password", [], "any", false, false, false, 1635), 'row');
        yield "

        ";
        // line 1638
        yield "        ";
        // line 1639
        yield "        ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1639, $this->source); })()), "children", [], "any", false, false, false, 1639), "new_password", [], "any", false, false, false, 1639), 'row');
        yield "

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            ";
        // line 1644
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1644, $this->source); })()), "children", [], "any", false, false, false, 1644), "generated_password", [], "any", false, false, false, 1644), 'widget');
        yield "
          </div>
          <div class=\"col-sm\">
            ";
        // line 1647
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1647, $this->source); })()), "children", [], "any", false, false, false, 1647), "generate_password_button", [], "any", false, false, false, 1647), 'widget');
        yield "
          </div>
        </div>
        ";
        // line 1650
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1650, $this->source); })()), "children", [], "any", false, false, false, 1650), "cancel_button", [], "any", false, false, false, 1650), 'row');
        yield "

        ";
        // line 1653
        yield "        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">";
        // line 1654
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Invalid", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-medium\">";
        // line 1655
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Okay", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-high\">";
        // line 1656
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Good", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
          <span class=\"strength-extreme\">";
        // line 1657
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Fabulous", [], "Admin.Advparameters.Help"), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1664
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_price_reduction_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "price_reduction_widget"));

        // line 1665
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1665, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1665)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1665, $this->source); })()), "class", [], "any", false, false, false, 1665), "")) : ("")) . " reduction-widget row"))]);
        // line 1666
        yield "  <div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1667
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1667, $this->source); })()), "children", [], "any", false, false, false, 1667));
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
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 1668
            yield "      ";
            $_v9 = $context;
            $_v10 = ["row_attr" => Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1668), "row_attr", [], "any", false, false, false, 1668), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, true, false, 1668), "row_attr", [], "any", false, true, false, 1668), "class", [], "any", true, true, false, 1668)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 1668), "row_attr", [], "any", false, false, false, 1668), "class", [], "any", false, false, false, 1668), "")) : ("")) . " col col-md-3"))])];
            if (!is_iterable($_v10)) {
                throw new RuntimeError('Variables passed to the "with" tag must be a mapping.', 1668, $this->getSourceContext());
            }
            $_v10 = CoreExtension::toArray($_v10);
            $context = $_v10 + $context + $this->env->getGlobals();
            // line 1669
            yield "      <div ";
            yield from             $this->unwrap()->yieldBlock("row_attributes", $context, $blocks);
            yield ">
      ";
            $context = $_v9;
            // line 1671
            yield "        ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            yield "
        ";
            // line 1672
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'errors');
            yield "
      </div>
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
        unset($context['_seq'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1675
        yield "</div>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1678
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_image_with_preview_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_with_preview_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "image_with_preview_widget"));

        // line 1679
        yield "  ";
        if ((array_key_exists("data", $context) &&  !Twig\Extension\CoreExtension::testEmpty((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1679, $this->source); })())))) {
            // line 1680
            yield "    <div>
      ";
            // line 1681
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1681, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                // line 1684
                yield "        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", true, true, false, 1684)) {
                    // line 1685
                    yield "          ";
                    if ((($tmp = (isset($context["can_be_deleted"]) || array_key_exists("can_be_deleted", $context) ? $context["can_be_deleted"] : (function () { throw new RuntimeError('Variable "can_be_deleted" does not exist.', 1685, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 1686
                        yield "            <figure class=\"figure\">
              <img src=\"";
                        // line 1687
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1687), "html", null, true);
                        yield "\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                ";
                        // line 1689
                        if ((($tmp = (isset($context["show_size"]) || array_key_exists("show_size", $context) ? $context["show_size"] : (function () { throw new RuntimeError('Variable "show_size" does not exist.', 1689, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            // line 1690
                            yield "                  <p>";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                            yield " ";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1690), "html", null, true);
                            yield "</p>
                ";
                        }
                        // line 1692
                        yield "                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"";
                        // line 1693
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "delete_path", [], "any", false, false, false, 1693), "html", null, true);
                        yield "\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  ";
                        // line 1698
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Delete", [], "Admin.Actions"), "html", null, true);
                        yield "
                </button>
              </figcaption>
            </figure>
          ";
                    } else {
                        // line 1703
                        yield "            ";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 1703, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["preview_image"]) {
                            // line 1704
                            yield "              <figure class=\"figure\">
                <img src=\"";
                            // line 1705
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "image_path", [], "any", false, false, false, 1705), "html", null, true);
                            yield "\" class=\"figure-img img-fluid img-thumbnail\">
                ";
                            // line 1706
                            if ((($tmp = (isset($context["show_size"]) || array_key_exists("show_size", $context) ? $context["show_size"] : (function () { throw new RuntimeError('Variable "show_size" does not exist.', 1706, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                                // line 1707
                                yield "                  <figcaption class=\"figure-caption\">";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("File size", [], "Admin.Advparameters.Feature"), "html", null, true);
                                yield " ";
                                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preview_image"], "size", [], "any", false, false, false, 1707), "html", null, true);
                                yield "</figcaption>
                ";
                            }
                            // line 1709
                            yield "              </figure>
            ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 1711
                        yield "          ";
                    }
                    // line 1712
                    yield "      ";
                }
                // line 1713
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['preview_image'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1714
            yield "    </div>
  ";
        }
        // line 1716
        yield "  ";
        yield from         $this->unwrap()->yieldBlock("file_widget", $context, $blocks);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1719
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tagged_item_collection_widget(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tagged_item_collection_widget"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tagged_item_collection_widget"));

        // line 1720
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1720, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1720)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1720, $this->source); })()), "class", [], "any", false, false, false, 1720), "")) : ("")) . " pstaggerTagsWrapper d-block"))]);
        // line 1721
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1721, $this->source); })()), ["data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 1721, $this->source); })()), 'row'), "data-prototype-name" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new RuntimeError('Variable "prototype" does not exist.', 1721, $this->source); })()), "vars", [], "any", false, false, false, 1721), "name", [], "any", false, false, false, 1721)]);
        // line 1722
        yield "<div ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1723
        yield from         $this->unwrap()->yieldBlock("form_rows", $context, $blocks);
        yield "
  </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 1727
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_tagged_item_collection_entry_row(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tagged_item_collection_entry_row"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tagged_item_collection_entry_row"));

        // line 1728
        $context["attr"] = Twig\Extension\CoreExtension::merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1728, $this->source); })()), ["class" => Twig\Extension\CoreExtension::trim((((CoreExtension::getAttribute($this->env, $this->source, ($context["attr"] ?? null), "class", [], "any", true, true, false, 1728)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new RuntimeError('Variable "attr" does not exist.', 1728, $this->source); })()), "class", [], "any", false, false, false, 1728), "")) : ("")) . " pstaggerTag tag-item"))]);
        // line 1729
        yield "<span ";
        yield from         $this->unwrap()->yieldBlock("widget_attributes", $context, $blocks);
        yield ">
    ";
        // line 1730
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1730, $this->source); })()), "name", [], "any", false, false, false, 1730), 'widget');
        yield "
    ";
        // line 1731
        $context["isRemovable"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1731, $this->source); })()), "parent", [], "any", false, false, false, 1731), "vars", [], "any", false, false, false, 1731), "allow_delete", [], "any", false, false, false, 1731);
        // line 1732
        yield "    <a class=\"pstaggerClosingCross remove-tag-item ";
        if ((($tmp =  !(isset($context["isRemovable"]) || array_key_exists("isRemovable", $context) ? $context["isRemovable"] : (function () { throw new RuntimeError('Variable "isRemovable" does not exist.', 1732, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "d-none";
        }
        yield "\">x</a>
    ";
        // line 1733
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1733, $this->source); })()), "id", [], "any", false, false, false, 1733), 'widget');
        yield "
  </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  6451 => 1733,  6444 => 1732,  6442 => 1731,  6438 => 1730,  6433 => 1729,  6431 => 1728,  6418 => 1727,  6404 => 1723,  6399 => 1722,  6397 => 1721,  6395 => 1720,  6382 => 1719,  6368 => 1716,  6364 => 1714,  6358 => 1713,  6355 => 1712,  6352 => 1711,  6345 => 1709,  6337 => 1707,  6335 => 1706,  6331 => 1705,  6328 => 1704,  6323 => 1703,  6315 => 1698,  6307 => 1693,  6304 => 1692,  6296 => 1690,  6294 => 1689,  6289 => 1687,  6286 => 1686,  6283 => 1685,  6280 => 1684,  6276 => 1681,  6273 => 1680,  6270 => 1679,  6257 => 1678,  6246 => 1675,  6229 => 1672,  6224 => 1671,  6218 => 1669,  6209 => 1668,  6192 => 1667,  6187 => 1666,  6185 => 1665,  6172 => 1664,  6155 => 1657,  6151 => 1656,  6147 => 1655,  6143 => 1654,  6140 => 1653,  6135 => 1650,  6129 => 1647,  6123 => 1644,  6114 => 1639,  6112 => 1638,  6106 => 1635,  6099 => 1631,  6093 => 1627,  6089 => 1625,  6076 => 1624,  6061 => 1619,  6052 => 1614,  6039 => 1613,  6023 => 1607,  6019 => 1606,  6015 => 1604,  6009 => 1602,  6006 => 1601,  6001 => 1598,  5998 => 1597,  5995 => 1596,  5992 => 1595,  5990 => 1594,  5977 => 1593,  5965 => 1590,  5958 => 1588,  5954 => 1586,  5947 => 1584,  5945 => 1583,  5943 => 1582,  5940 => 1581,  5935 => 1580,  5933 => 1579,  5922 => 1572,  5919 => 1571,  5916 => 1569,  5902 => 1568,  5896 => 1566,  5893 => 1565,  5890 => 1564,  5887 => 1563,  5884 => 1562,  5881 => 1561,  5879 => 1560,  5876 => 1559,  5873 => 1558,  5855 => 1557,  5852 => 1556,  5843 => 1554,  5839 => 1553,  5834 => 1552,  5832 => 1550,  5831 => 1548,  5830 => 1547,  5817 => 1546,  5803 => 1542,  5800 => 1540,  5794 => 1539,  5791 => 1538,  5789 => 1537,  5782 => 1533,  5777 => 1532,  5775 => 1531,  5758 => 1529,  5751 => 1524,  5745 => 1522,  5743 => 1521,  5739 => 1520,  5735 => 1519,  5727 => 1518,  5723 => 1517,  5711 => 1514,  5705 => 1511,  5702 => 1510,  5699 => 1509,  5696 => 1508,  5693 => 1507,  5688 => 1506,  5686 => 1505,  5681 => 1504,  5679 => 1502,  5678 => 1501,  5665 => 1500,  5653 => 1496,  5647 => 1495,  5641 => 1492,  5632 => 1491,  5629 => 1490,  5625 => 1489,  5620 => 1487,  5617 => 1486,  5611 => 1485,  5608 => 1484,  5602 => 1483,  5596 => 1481,  5593 => 1480,  5588 => 1479,  5586 => 1478,  5583 => 1477,  5578 => 1476,  5576 => 1472,  5575 => 1471,  5571 => 1470,  5569 => 1468,  5568 => 1467,  5555 => 1466,  5543 => 1463,  5537 => 1460,  5534 => 1459,  5532 => 1458,  5528 => 1456,  5522 => 1455,  5519 => 1454,  5517 => 1453,  5512 => 1451,  5507 => 1450,  5501 => 1448,  5499 => 1447,  5497 => 1446,  5488 => 1445,  5485 => 1444,  5480 => 1443,  5478 => 1442,  5474 => 1441,  5470 => 1439,  5464 => 1436,  5461 => 1435,  5459 => 1434,  5451 => 1428,  5445 => 1427,  5442 => 1426,  5440 => 1425,  5434 => 1422,  5426 => 1421,  5417 => 1420,  5414 => 1419,  5409 => 1418,  5407 => 1417,  5398 => 1411,  5393 => 1410,  5391 => 1409,  5378 => 1408,  5366 => 1405,  5364 => 1404,  5362 => 1403,  5360 => 1400,  5359 => 1399,  5358 => 1398,  5357 => 1397,  5353 => 1396,  5351 => 1395,  5338 => 1394,  5324 => 1389,  5311 => 1388,  5299 => 1385,  5297 => 1384,  5295 => 1383,  5293 => 1380,  5292 => 1379,  5291 => 1378,  5290 => 1377,  5286 => 1376,  5284 => 1375,  5271 => 1374,  5260 => 1371,  5258 => 1370,  5256 => 1369,  5243 => 1368,  5231 => 1365,  5229 => 1364,  5227 => 1363,  5225 => 1362,  5223 => 1361,  5221 => 1360,  5219 => 1358,  5217 => 1356,  5215 => 1355,  5213 => 1354,  5201 => 1352,  5188 => 1351,  5174 => 1347,  5169 => 1345,  5162 => 1343,  5157 => 1342,  5155 => 1341,  5151 => 1340,  5149 => 1339,  5136 => 1338,  5122 => 1334,  5118 => 1333,  5114 => 1332,  5109 => 1331,  5106 => 1330,  5103 => 1329,  5100 => 1328,  5097 => 1327,  5095 => 1326,  5092 => 1325,  5079 => 1324,  5064 => 1320,  5054 => 1318,  5052 => 1317,  5050 => 1316,  5048 => 1315,  5035 => 1314,  5021 => 1310,  5014 => 1309,  5012 => 1308,  5010 => 1307,  4997 => 1306,  4986 => 1303,  4984 => 1302,  4978 => 1299,  4975 => 1298,  4972 => 1297,  4968 => 1294,  4962 => 1292,  4960 => 1291,  4954 => 1289,  4952 => 1288,  4950 => 1287,  4946 => 1285,  4940 => 1282,  4937 => 1281,  4934 => 1280,  4929 => 1278,  4927 => 1277,  4925 => 1276,  4912 => 1275,  4897 => 1270,  4893 => 1268,  4880 => 1267,  4867 => 1263,  4860 => 1259,  4856 => 1258,  4852 => 1256,  4849 => 1255,  4840 => 1252,  4837 => 1251,  4832 => 1250,  4828 => 1248,  4819 => 1246,  4815 => 1245,  4812 => 1244,  4810 => 1243,  4805 => 1242,  4803 => 1241,  4800 => 1240,  4797 => 1239,  4788 => 1236,  4785 => 1235,  4780 => 1234,  4774 => 1231,  4771 => 1230,  4769 => 1229,  4761 => 1228,  4759 => 1227,  4746 => 1226,  4734 => 1222,  4732 => 1221,  4719 => 1220,  4707 => 1216,  4705 => 1215,  4692 => 1214,  4679 => 1210,  4670 => 1208,  4666 => 1207,  4661 => 1206,  4659 => 1205,  4654 => 1203,  4651 => 1202,  4648 => 1200,  4646 => 1199,  4644 => 1198,  4631 => 1197,  4617 => 1194,  4604 => 1193,  4592 => 1190,  4587 => 1189,  4583 => 1188,  4580 => 1187,  4574 => 1186,  4566 => 1184,  4563 => 1183,  4559 => 1182,  4556 => 1181,  4554 => 1180,  4541 => 1179,  4528 => 1175,  4522 => 1173,  4516 => 1171,  4513 => 1170,  4506 => 1168,  4500 => 1165,  4495 => 1164,  4493 => 1163,  4490 => 1162,  4477 => 1161,  4465 => 1157,  4462 => 1156,  4449 => 1155,  4437 => 1151,  4434 => 1150,  4421 => 1149,  4406 => 1145,  4403 => 1144,  4385 => 1142,  4383 => 1141,  4380 => 1140,  4367 => 1139,  4352 => 1134,  4349 => 1133,  4346 => 1132,  4333 => 1131,  4318 => 1126,  4315 => 1125,  4312 => 1124,  4299 => 1123,  4288 => 1120,  4285 => 1119,  4283 => 1118,  4281 => 1117,  4279 => 1116,  4277 => 1115,  4275 => 1114,  4262 => 1113,  4251 => 1110,  4248 => 1109,  4246 => 1108,  4244 => 1107,  4242 => 1106,  4240 => 1105,  4238 => 1104,  4225 => 1103,  4212 => 1100,  4207 => 1099,  4194 => 1098,  4181 => 1095,  4176 => 1094,  4163 => 1093,  4151 => 1090,  4145 => 1087,  4142 => 1086,  4140 => 1085,  4137 => 1084,  4134 => 1082,  4131 => 1080,  4129 => 1079,  4127 => 1078,  4125 => 1077,  4123 => 1075,  4121 => 1074,  4118 => 1073,  4112 => 1070,  4109 => 1069,  4107 => 1068,  4104 => 1067,  4102 => 1066,  4099 => 1065,  4086 => 1064,  4072 => 1059,  4070 => 1057,  4069 => 1055,  4068 => 1054,  4062 => 1051,  4058 => 1049,  4055 => 1047,  4052 => 1045,  4050 => 1044,  4048 => 1040,  4046 => 1039,  4033 => 1038,  4020 => 1035,  4013 => 1031,  4008 => 1029,  4004 => 1028,  3999 => 1025,  3996 => 1023,  3993 => 1021,  3991 => 1020,  3988 => 1019,  3975 => 1018,  3957 => 1010,  3953 => 1009,  3949 => 1008,  3945 => 1006,  3943 => 1005,  3939 => 1003,  3936 => 1002,  3923 => 1001,  3908 => 996,  3903 => 995,  3901 => 994,  3899 => 993,  3893 => 990,  3891 => 989,  3886 => 988,  3884 => 986,  3881 => 985,  3879 => 983,  3877 => 982,  3875 => 981,  3873 => 976,  3872 => 975,  3865 => 971,  3861 => 969,  3848 => 968,  3835 => 963,  3833 => 962,  3831 => 959,  3830 => 958,  3829 => 957,  3828 => 956,  3825 => 954,  3822 => 953,  3820 => 952,  3817 => 951,  3812 => 949,  3810 => 948,  3808 => 947,  3805 => 945,  3802 => 944,  3789 => 943,  3777 => 940,  3771 => 938,  3765 => 936,  3763 => 935,  3750 => 934,  3739 => 931,  3734 => 928,  3723 => 926,  3719 => 925,  3715 => 924,  3710 => 922,  3705 => 920,  3701 => 918,  3695 => 916,  3693 => 915,  3687 => 911,  3684 => 910,  3675 => 907,  3668 => 906,  3665 => 905,  3662 => 904,  3659 => 903,  3656 => 902,  3653 => 901,  3649 => 900,  3642 => 899,  3640 => 898,  3627 => 897,  3614 => 893,  3605 => 890,  3584 => 889,  3580 => 888,  3576 => 886,  3572 => 884,  3562 => 880,  3552 => 879,  3549 => 878,  3545 => 877,  3542 => 876,  3540 => 875,  3535 => 874,  3522 => 873,  3511 => 820,  3504 => 866,  3497 => 864,  3490 => 862,  3486 => 860,  3483 => 859,  3477 => 857,  3471 => 855,  3469 => 854,  3466 => 853,  3463 => 852,  3461 => 851,  3458 => 850,  3454 => 849,  3449 => 847,  3445 => 845,  3441 => 844,  3436 => 841,  3421 => 839,  3415 => 837,  3409 => 834,  3403 => 831,  3399 => 829,  3397 => 828,  3394 => 827,  3377 => 826,  3373 => 825,  3363 => 821,  3360 => 820,  3347 => 819,  3333 => 816,  3331 => 782,  3324 => 812,  3314 => 808,  3310 => 806,  3306 => 805,  3298 => 799,  3290 => 798,  3286 => 796,  3282 => 794,  3280 => 793,  3268 => 783,  3265 => 782,  3252 => 781,  3238 => 774,  3229 => 771,  3225 => 770,  3218 => 765,  3215 => 764,  3202 => 763,  3189 => 758,  3181 => 755,  3178 => 754,  3174 => 753,  3169 => 750,  3161 => 744,  3156 => 741,  3149 => 738,  3144 => 736,  3137 => 732,  3133 => 730,  3131 => 729,  3125 => 726,  3121 => 725,  3118 => 724,  3112 => 721,  3102 => 718,  3098 => 717,  3095 => 715,  3093 => 714,  3087 => 712,  3085 => 711,  3083 => 709,  3080 => 707,  3067 => 706,  3052 => 702,  3046 => 700,  3044 => 699,  3031 => 698,  3020 => 693,  3018 => 692,  3011 => 691,  3009 => 690,  3007 => 689,  2994 => 688,  2982 => 684,  2980 => 683,  2973 => 682,  2971 => 681,  2968 => 679,  2966 => 678,  2962 => 677,  2960 => 676,  2958 => 675,  2956 => 674,  2943 => 673,  2931 => 670,  2926 => 667,  2924 => 666,  2922 => 665,  2920 => 664,  2906 => 663,  2903 => 662,  2899 => 660,  2897 => 659,  2895 => 657,  2893 => 655,  2878 => 654,  2876 => 653,  2873 => 652,  2870 => 651,  2867 => 650,  2864 => 649,  2861 => 648,  2858 => 647,  2855 => 646,  2852 => 645,  2849 => 644,  2846 => 643,  2843 => 642,  2841 => 641,  2828 => 640,  2817 => 637,  2804 => 636,  2793 => 633,  2780 => 632,  2769 => 629,  2767 => 628,  2754 => 626,  2738 => 617,  2721 => 614,  2717 => 613,  2713 => 612,  2710 => 611,  2693 => 610,  2687 => 606,  2683 => 605,  2679 => 604,  2671 => 599,  2665 => 596,  2660 => 595,  2647 => 594,  2629 => 590,  2627 => 589,  2623 => 588,  2621 => 587,  2608 => 586,  2597 => 583,  2595 => 563,  2588 => 579,  2574 => 578,  2566 => 577,  2562 => 575,  2557 => 574,  2553 => 573,  2549 => 572,  2545 => 571,  2541 => 570,  2536 => 569,  2533 => 568,  2516 => 567,  2512 => 566,  2492 => 565,  2489 => 564,  2486 => 563,  2473 => 562,  2462 => 537,  2458 => 559,  2451 => 555,  2445 => 552,  2441 => 551,  2436 => 549,  2432 => 547,  2430 => 546,  2425 => 544,  2419 => 541,  2415 => 540,  2411 => 538,  2408 => 537,  2395 => 536,  2384 => 520,  2378 => 531,  2373 => 529,  2368 => 528,  2366 => 527,  2362 => 526,  2356 => 523,  2352 => 521,  2349 => 520,  2336 => 519,  2325 => 505,  2319 => 515,  2301 => 508,  2298 => 507,  2295 => 506,  2292 => 505,  2279 => 504,  2268 => 501,  2263 => 498,  2254 => 495,  2249 => 493,  2246 => 492,  2242 => 491,  2238 => 490,  2232 => 487,  2227 => 485,  2219 => 479,  2217 => 478,  2214 => 477,  2205 => 474,  2201 => 473,  2198 => 472,  2195 => 471,  2192 => 470,  2190 => 469,  2187 => 468,  2184 => 467,  2181 => 466,  2177 => 465,  2172 => 463,  2159 => 462,  2148 => 459,  2143 => 456,  2132 => 454,  2128 => 453,  2124 => 452,  2118 => 449,  2113 => 447,  2105 => 441,  2103 => 440,  2100 => 439,  2084 => 437,  2082 => 436,  2079 => 434,  2076 => 433,  2074 => 432,  2071 => 431,  2068 => 430,  2065 => 429,  2048 => 428,  2043 => 426,  2030 => 425,  2019 => 422,  2016 => 420,  2014 => 419,  2001 => 418,  1988 => 414,  1979 => 411,  1975 => 410,  1954 => 409,  1950 => 408,  1946 => 406,  1942 => 404,  1932 => 400,  1922 => 399,  1919 => 398,  1915 => 397,  1912 => 396,  1910 => 395,  1906 => 394,  1901 => 393,  1888 => 392,  1877 => 389,  1873 => 387,  1856 => 385,  1853 => 384,  1836 => 383,  1833 => 382,  1830 => 381,  1826 => 378,  1820 => 376,  1818 => 375,  1814 => 374,  1806 => 373,  1802 => 371,  1798 => 368,  1792 => 366,  1789 => 365,  1784 => 363,  1779 => 361,  1777 => 360,  1769 => 359,  1765 => 357,  1762 => 356,  1760 => 355,  1757 => 354,  1744 => 353,  1732 => 349,  1715 => 347,  1698 => 346,  1695 => 345,  1689 => 343,  1676 => 342,  1664 => 338,  1658 => 335,  1657 => 334,  1656 => 333,  1655 => 332,  1651 => 331,  1647 => 330,  1644 => 328,  1638 => 325,  1637 => 324,  1636 => 323,  1635 => 322,  1631 => 321,  1629 => 320,  1627 => 319,  1614 => 318,  1603 => 315,  1601 => 314,  1588 => 313,  1575 => 310,  1573 => 309,  1560 => 308,  1548 => 305,  1544 => 304,  1540 => 303,  1534 => 302,  1531 => 301,  1528 => 300,  1525 => 299,  1522 => 298,  1519 => 297,  1516 => 296,  1513 => 295,  1510 => 294,  1508 => 293,  1505 => 292,  1502 => 291,  1500 => 290,  1487 => 289,  1476 => 286,  1474 => 285,  1461 => 284,  1450 => 281,  1446 => 280,  1444 => 279,  1431 => 278,  1418 => 273,  1415 => 272,  1407 => 271,  1402 => 269,  1400 => 268,  1398 => 267,  1395 => 265,  1393 => 264,  1380 => 263,  1367 => 258,  1365 => 257,  1363 => 255,  1362 => 254,  1361 => 253,  1360 => 252,  1355 => 250,  1353 => 249,  1351 => 248,  1348 => 246,  1346 => 245,  1333 => 244,  1322 => 241,  1318 => 240,  1316 => 239,  1303 => 238,  1291 => 234,  1289 => 233,  1287 => 232,  1285 => 231,  1283 => 230,  1279 => 229,  1277 => 228,  1274 => 226,  1272 => 225,  1259 => 224,  1245 => 218,  1243 => 217,  1241 => 216,  1228 => 215,  1217 => 212,  1213 => 210,  1207 => 207,  1204 => 206,  1202 => 205,  1200 => 204,  1194 => 201,  1191 => 200,  1188 => 199,  1186 => 198,  1183 => 197,  1170 => 196,  1159 => 193,  1155 => 192,  1153 => 191,  1151 => 190,  1138 => 189,  1123 => 183,  1121 => 182,  1116 => 180,  1114 => 179,  1108 => 176,  1105 => 175,  1102 => 174,  1100 => 173,  1097 => 172,  1092 => 170,  1087 => 169,  1084 => 168,  1082 => 167,  1077 => 166,  1073 => 164,  1071 => 163,  1054 => 162,  1052 => 161,  1048 => 157,  1045 => 154,  1044 => 153,  1043 => 152,  1041 => 151,  1038 => 150,  1035 => 148,  1032 => 147,  1029 => 145,  1027 => 144,  1025 => 143,  1012 => 142,  1000 => 122,  993 => 135,  990 => 134,  987 => 133,  984 => 132,  981 => 131,  978 => 130,  975 => 129,  972 => 128,  969 => 127,  966 => 126,  963 => 125,  961 => 124,  958 => 123,  955 => 122,  953 => 121,  940 => 120,  925 => 115,  921 => 114,  917 => 113,  914 => 112,  911 => 111,  908 => 110,  895 => 109,  881 => 105,  876 => 104,  873 => 103,  870 => 102,  857 => 101,  844 => 93,  842 => 92,  838 => 90,  836 => 89,  834 => 88,  832 => 86,  830 => 85,  828 => 84,  826 => 82,  824 => 81,  822 => 80,  811 => 79,  798 => 78,  787 => 73,  783 => 72,  781 => 71,  768 => 70,  755 => 67,  749 => 64,  744 => 63,  742 => 62,  740 => 61,  727 => 60,  716 => 57,  712 => 56,  699 => 55,  688 => 52,  685 => 51,  682 => 50,  679 => 49,  677 => 48,  664 => 47,  650 => 44,  647 => 43,  644 => 42,  641 => 41,  638 => 40,  635 => 39,  632 => 38,  619 => 37,  608 => 1727,  605 => 1726,  603 => 1719,  600 => 1718,  598 => 1678,  596 => 1664,  594 => 1624,  591 => 1623,  589 => 1613,  586 => 1612,  584 => 1593,  582 => 1546,  580 => 1500,  578 => 1466,  576 => 1408,  574 => 1394,  571 => 1393,  569 => 1388,  566 => 1387,  564 => 1374,  561 => 1373,  559 => 1368,  556 => 1367,  554 => 1351,  551 => 1350,  549 => 1338,  546 => 1337,  544 => 1324,  541 => 1323,  539 => 1314,  536 => 1313,  534 => 1306,  531 => 1305,  529 => 1275,  526 => 1274,  524 => 1267,  522 => 1226,  520 => 1220,  518 => 1214,  516 => 1197,  513 => 1196,  511 => 1193,  509 => 1179,  507 => 1161,  504 => 1160,  502 => 1155,  499 => 1154,  497 => 1149,  494 => 1148,  492 => 1139,  489 => 1138,  487 => 1131,  484 => 1130,  482 => 1123,  480 => 1113,  478 => 1103,  476 => 1098,  473 => 1097,  471 => 1093,  468 => 1092,  466 => 1064,  463 => 1063,  461 => 1038,  458 => 1037,  456 => 1018,  453 => 1017,  451 => 1001,  448 => 1000,  446 => 968,  443 => 967,  441 => 943,  438 => 942,  436 => 934,  433 => 933,  431 => 897,  428 => 896,  426 => 873,  423 => 871,  421 => 819,  418 => 818,  416 => 781,  413 => 780,  410 => 778,  408 => 763,  405 => 762,  403 => 706,  400 => 705,  398 => 698,  395 => 697,  392 => 695,  390 => 688,  387 => 687,  385 => 673,  382 => 672,  380 => 640,  377 => 639,  375 => 636,  372 => 635,  370 => 632,  367 => 631,  365 => 626,  362 => 625,  359 => 623,  357 => 594,  355 => 586,  353 => 562,  350 => 561,  348 => 536,  345 => 535,  343 => 519,  340 => 518,  338 => 504,  335 => 503,  333 => 462,  330 => 461,  328 => 425,  325 => 424,  323 => 418,  320 => 417,  318 => 392,  315 => 391,  313 => 353,  310 => 352,  308 => 342,  305 => 341,  303 => 318,  300 => 317,  298 => 313,  295 => 312,  293 => 308,  290 => 307,  288 => 289,  285 => 288,  283 => 284,  281 => 278,  279 => 263,  276 => 262,  274 => 244,  272 => 238,  270 => 224,  267 => 223,  265 => 215,  262 => 214,  260 => 196,  257 => 195,  255 => 189,  252 => 188,  250 => 142,  247 => 139,  245 => 120,  242 => 119,  240 => 109,  237 => 108,  235 => 101,  232 => 96,  230 => 78,  227 => 77,  225 => 70,  223 => 60,  221 => 55,  219 => 47,  217 => 37,  214 => 36,  211 => 34,  208 => 32,  205 => 26,  202 => 14,  199 => 5,  75 => 31,  68 => 30,  61 => 29,  54 => 28,  35 => 25,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{#
 # For the full copyright and license information, please view the
 # docs/licenses/LICENSE.txt file that was distributed with this source code.
 #}

{#
# This form theme is an implementation of PrestaShop UI kit, it based on the bootstrap4 layout and overrides a few
# blocks to match our expected integration of the UI kit.
#
# This theme uses/extends the basic bootstrap_4_layout meaning the form labels/inputs are displayed one under the other.
# Unlike our prestashop_ui_kit.html.twig theme which extends this base kit but uses bootstrap_4_horizontal_layout as a
# base, where labels/inputs are displayed horizontally in a column way.
#}

{#
# We need to radio_widget and checkbox_widget from the original bootstrap 4 layout because we need to add form-check-radio
# on the last wrapping div which is not possible with the attributes, so we basically copied the content, but then we cannot
# use parent() to render the internal widget because it would reuse the one from bootstrap_4_layout and duplicate content.
#
# So we extract the initial widget from the bootstrap_base_layout to inject them as the internal widget, it is important
# to do it before we use bootstrap_4_layout or the base layout will override the blocks from bootstrap_4_layout.
#
# See https://symfony.com/doc/3.4/form/form_customization.html#referencing-blocks-from-inside-the-same-template-as-the-form
#}
{% use \x27bootstrap_base_layout.html.twig\x27 with radio_widget as base_radio_widget, checkbox_widget as base_checkbox_widget %}

{# Use bootstrap4 theme (from the Symfony framework) as default base #}
{% use \x27bootstrap_4_layout.html.twig\x27 %}
{% use \x27@PrestaShop/Admin/TwigTemplateForm/entity_search_input.html.twig\x27 %}
{% use \x27@PrestaShop/Admin/TwigTemplateForm/material.html.twig\x27 %}
{% use \x27@PrestaShop/Admin/TwigTemplateForm/multishop.html.twig\x27 %}

{# overrides from bootstrap_4_layout #}

{# Widgets #}

{% block form_start %}
  {% set attr = attr|merge({\x27data-alerts-success\x27: form.vars.alerts.success|default([])|length()}) %}
  {% set attr = attr|merge({\x27data-alerts-info\x27: form.vars.alerts.info|default([])|length()}) %}
  {% set attr = attr|merge({\x27data-alerts-warning\x27: form.vars.alerts.warning|default([])|length()}) %}
  {% set attr = attr|merge({\x27data-alerts-error\x27: form.vars.alerts.error|default([])|length()}) %}
  {% set attr = attr|merge({\x27data-form-submitted\x27: form.vars.submitted ? 1 : 0}) %}
  {% set attr = attr|merge({\x27data-form-valid\x27: form.vars.valid ? 1 : 0}) %}
  {{ parent() }}
{% endblock form_start %}

{%- block form_widget -%}
  {% if columns_number is defined %}
    {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-columns-\x27 ~ columns_number)|trim}) %}
  {% endif %}
  {{ parent() }}
  {{- block(\x27form_help\x27) -}}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
  {{ parent() }}
  {{ include(\x27@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig\x27, {attr: attr}) }}
{%- endblock form_widget_simple -%}

{% block ip_address_text_widget %}
  <div class=\"input-group\">
    {{- block(\x27form_widget_simple\x27) -}}
    <button type=\"button\" class=\"btn btn-outline-primary add_ip_button\" data-ip=\"{{ currentIp }}\">
      <i class=\"material-icons\">add_circle</i> {{ \x27Add my IP\x27|trans({}, \x27Admin.Actions\x27) }}
    </button>
  </div>
  {{ block(\x27form_help\x27) }}
{% endblock ip_address_text_widget %}

{%- block password_widget -%}
  {%- set type = type|default(\x27password\x27) -%}
  {{ block(\x27form_widget_simple\x27) }}
  {{ block(\x27form_help\x27) }}
{%- endblock password_widget -%}

{# Rows #}

{% block form_row -%}
  <div class=\"form-group{{ block(\x27widget_type_class\x27) }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    {{- form_label(form) -}}
    {{- block(\x27form_prepend_alert\x27) -}}
    {{- block(\x27form_prepend_external_link\x27) -}}

    {{- form_widget(form) -}}
    {{- form_errors(form) -}}
    {{- block(\x27form_modify_all_shops\x27) -}}

    {{- block(\x27form_append_alert\x27) -}}
    {{- block(\x27form_append_external_link\x27) -}}
  </div>

  {% if column_breaker %}
  <div class=\"form-group form-column-breaker\"></div>
  {% endif %}
{%- endblock form_row %}

{#
# This block is integrated into each form row, its purpose is to display a \"Modify all stores\" checkbox when present,
# the checkbox form field is added by the ModifyAllShopsExtension when the config modify_all_shops
#}
{% block form_modify_all_shops %}
  {% set overrideCheckboxName = modify_all_shops_prefix ~ form.vars.name %}
  {% if attribute(form.parent, overrideCheckboxName) is defined %}
    {{ form_errors(attribute(form.parent, overrideCheckboxName)) }}
    {{ form_widget(attribute(form.parent, overrideCheckboxName)) }}
  {% endif %}
{% endblock %}

{% block form_disabling_switch %}
  {% set disablingSwitchName = disabling_switch_prefix ~ form.vars.name %}
  {% if attribute(form.parent, disablingSwitchName) is defined %}
    <div class=\"d-inline-flex align-items-center ml-3\">
      {{ form_errors(attribute(form.parent, disablingSwitchName)) }}
      {{ form_widget(attribute(form.parent, disablingSwitchName)) }}
      {{ form_label(attribute(form.parent, disablingSwitchName)) }}
    </div>
  {% endif %}
{% endblock %}

{% block widget_type_class %}
{% if not compound|default(false) and form.vars.block_prefixes|length > 2 %}
 {% apply spaceless %}

    {% set index = form.vars.block_prefixes|length - 2 %}
    {% set widgetType = form.vars.block_prefixes[index] %}
    {% if widgetType == \x27choice\x27 %}
      {% if not expanded %}
        {% set widgetType = \x27select\x27 %}
      {% elseif multiple %}
        {% set widgetType = \x27checboxes\x27 %}
      {% else %}
        {% set widgetType = \x27radio\x27 %}
      {% endif %}
    {% endif %}
    {{ widgetType }}-widget
{% endapply %}
{% endif %}
{% endblock %}

{# Labels #}

{%- block form_label -%}
  {% if label is not same as(false) -%}
    {% if not compound -%}
      {% set label_attr = label_attr|merge({for: id}) %}
    {%- endif %}
    {% if required -%}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default(\x27\x27) ~ \x27 required\x27)|trim}) %}
    {%- endif %}
    {% if label is empty -%}
      {%- if label_format is not empty -%}
        {% set label = label_format|replace({
          \x27%name%\x27: name,
          \x27%id%\x27: id,
        }) %}
      {%- else -%}
        {% set label = name|humanize %}
      {%- endif -%}
    {%- endif -%}

    {% set labelTag = label_tag_name|default(\x27label\x27) %}
    <{{ labelTag }}{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
    {% if required %}
      <span class=\"text-danger\">*</span>
    {% endif %}
    {{ translation_domain is same as(false) ? label|raw_purified : label|raw_purified }}
    {% if label_attr[\x27tooltip\x27] is defined %}
      {% set placement = label_attr[\x27tooltip_placement\x27] is defined ? label_attr[\x27tooltip_placement\x27] : \x27top\x27 %}
      <i class=\"icon-question\" data-toggle=\"pstooltip\" data-placement=\"{{ placement }}\"
         title=\"{{ label_attr[\x27tooltip\x27] }}\"></i>
    {% endif %}

    {% if label_help_box is defined or label_attr[\x27popover\x27] is defined %}
      {% set content = label_help_box is defined ? label_help_box : label_attr[\x27popover\x27] %}
      {% set placement = label_attr[\x27popover_placement\x27] is defined ? label_attr[\x27popover_placement\x27] : \x27top\x27 %}
      {{ include(\x27@Common/HelpBox/helpbox.html.twig\x27, {placement: placement, content: content}) }}
    {% endif %}

      {{- block(\x27form_disabling_switch\x27) -}}
    </{{ labelTag }}>
  {%- endif -%}
  {% if label_subtitle is defined and label_subtitle is not empty %}
    <p class=\"subtitle\">{{ label_subtitle|raw(\x27html\x27) }}</p>
  {% endif %}
{%- endblock form_label -%}

{# Widgets #}

{% block textarea_widget -%}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-control\x27)|trim}) %}
  {{- parent() -}}
  {{ include(\x27@PrestaShop/Admin/TwigTemplateForm/form_max_length.html.twig\x27, {attr: attr}) }}
  {{ block(\x27form_help\x27) }}
{%- endblock textarea_widget %}

{% block money_widget -%}
  <div class=\"input-group money-type\">
    {% set prepend = \x27{{\x27 == money_pattern[0:2] %}
    {% if not prepend %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text\">{{ money_pattern|replace({\x27{{ widget }}\x27: \x27\x27}) }}</span>
      </div>
    {% endif %}
    {{- block(\x27form_widget_simple\x27) -}}
    {% if prepend %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text\">{{ money_pattern|replace({\x27{{ widget }}\x27: \x27\x27}) }}</span>
      </div>
    {% endif %}
  </div>

  {{ block(\x27form_help\x27) }}
{%- endblock money_widget %}

{% block percent_widget -%}
  <div class=\"input-group\">
    {{- block(\x27form_widget_simple\x27) -}}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">%</span>
    </div>
  </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
  {% if widget == \x27single_text\x27 %}
    {{- block(\x27form_widget_simple\x27) -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-inline\x27)|trim}) -%}
    <div {{ block(\x27widget_container_attributes\x27) }}>
      {{- form_errors(form.date) -}}
      {{- form_errors(form.time) -}}
      {{- form_widget(form.date, {datetime: true}) -}}
      {{- form_widget(form.time, {datetime: true}) -}}
    </div>
  {%- endif %}
{%- endblock datetime_widget %}

{%- block url_widget -%}
  {%- set type = type|default(\x27url\x27) -%}
  {{ block(\x27form_widget_simple\x27) }}
  {{ block(\x27form_help\x27) }}
{%- endblock url_widget -%}

{% block date_widget -%}
  {% if widget == \x27single_text\x27 %}
    {{- block(\x27form_widget_simple\x27) -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-inline\x27)|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block(\x27widget_container_attributes\x27) -}}>
    {%- endif %}
    {{- date_pattern|replace({
      \x27{{ year }}\x27: form_widget(form.year),
      \x27{{ month }}\x27: form_widget(form.month),
      \x27{{ day }}\x27: form_widget(form.day),
    })|raw -}}
    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
  {% if widget == \x27single_text\x27 %}
    {{- block(\x27form_widget_simple\x27) -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-inline\x27)|trim}) -%}
    {% if datetime is not defined or false == datetime -%}
      <div {{ block(\x27widget_container_attributes\x27) -}}>
    {%- endif -%}
    {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
    {% if datetime is not defined or false == datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{%- endblock time_widget %}

{%- block email_widget -%}
  {%- set type = type|default(\x27email\x27) -%}
  {{ block(\x27form_widget_simple\x27) }}
  {{ block(\x27form_help\x27) }}
{%- endblock email_widget -%}

{% block button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default(\x27btn-default\x27) ~ \x27 btn\x27)|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block icon_button_widget -%}
  {% set attr = attr|merge({class: (attr.class|default(\x27btn-default\x27) ~ \x27 btn\x27)|trim}) %}
  {% if button_type == \x27link\x27 %}
    {% set buttonTag = \x27a\x27 %}
    {# Link tags need extra class for disabled, the attribute itself is not enough #}
    {% if attr.disabled|default(false) %}
      {% set attr = attr|merge({class: (attr.class ~ \x27 disabled\x27)|trim}) %}
    {% endif %}
  {% else %}
    {% set buttonTag = \x27button\x27 %}
    {% set attr = attr|merge({type: \x27button\x27}) %}
  {% endif %}

  <{{ buttonTag }} {{ block(\x27button_attributes\x27) }}>
    <i class=\"material-icons\">{{ button_icon }}</i>
    <span class=\"btn-label\">{{ label }}</span>
  </{{ buttonTag }}>
{%- endblock %}

{% block choice_widget %}
  {{- parent() -}}
  {{ block(\x27form_help\x27) }}
{% endblock choice_widget %}

{% block choice_widget_collapsed -%}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 custom-select\x27)|trim}) %}
  {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
  {% if \x27-inline\x27 in label_attr.class|default(\x27\x27) -%}
    <div class=\"control-group\">
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(\x27\x27),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- else -%}
    <div {{ block(\x27widget_container_attributes\x27) }}>
      {%- for child in form %}
        {{- form_widget(child, {
          parent_label_class: label_attr.class|default(\x27\x27),
          translation_domain: choice_translation_domain,
          valid: valid,
        }) -}}
      {% endfor -%}
    </div>
  {%- endif %}
{%- endblock choice_widget_expanded %}

{% block choice_tree_widget -%}
  <div {{ block(\x27widget_container_attributes\x27) }} class=\"category-tree-overflow\">
    <ul class=\"category-tree\">
      <li class=\"form-control-label text-right main-category\">{{ \x27Main category\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</li>
      {%- for child in choices %}
        {{ block(\x27choice_tree_item_widget\x27) }}
      {% endfor -%}
    </ul>
  </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
  <li>
    {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? \x27checked=\"checked\"\x27 : \x27\x27 %}
    {% if multiple -%}
      <div class=\"checkbox\">
        <label>
          <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
          {% if child.active is defined and child.active == 0 %}
            <i>{{ child.name }}</i>
          {%- else -%}
            {{ child.name }}
          {% endif %}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- else -%}
      <div class=\"radio\">
        <label>
          <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
          {{ child.name }}
          {% if defaultCategory is defined %}
            <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
          {% endif %}
        </label>
      </div>
    {%- endif %}
    {% if child.children is defined %}
      <ul>
        {% for item in child.children %}
          {% set child = item %}
          {{ block(\x27choice_tree_item_widget\x27) }}
        {% endfor -%}
      </ul>
    {% endif %}
  </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
  {{ form_errors(form) }}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hideTabs == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|upper }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_errors(translationsFields) }}
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translate_fields_widget -%}
  {% if type is not defined or \x27file\x27 != type %}
    {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-control\x27)|trim}) -%}
  {% endif %}
  {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for translateField in form %}
      {% set classes = translateField.vars.attr.class|default(\x27\x27) ~ \x27 js-locale-input\x27 %}
      {% set classes = classes ~ \x27 js-locale-\x27 ~ translateField.vars.label %}

      {% if default_locale.id_lang != translateField.vars.name %}
        {% set classes = classes ~ \x27 d-none\x27 %}
      {% endif %}

      {%- set attr = attr|merge({class: classes|trim}) -%}
      {{ block(\x27form_widget\x27) }}
    {% endfor %}

    {% if not hide_locales %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code|upper }}
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_text_widget %}

{% block translate_textarea_widget -%}
  {{ form_errors(form) }}
  <div class=\"input-group locale-input-group js-locale-input-group\">
    {% for textarea in form %}
      {% set classes = textarea.vars.attr.class|default(\x27\x27) ~ \x27 js-locale-input\x27 %}
      {% set classes = classes ~ \x27 js-locale-\x27 ~ textarea.vars.label %}

      {% if default_locale.id_lang != textarea.vars.name %}
        {% set classes = classes ~ \x27 d-none\x27 %}
      {% endif %}

      <div class=\"{{ classes }}\">
        {{ form_widget(textarea, {attr: {class: classes|trim}}) }}
      </div>
    {% endfor %}

    {% if show_locale_select %}
      <div class=\"dropdown\">
        <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                type=\"button\"
                data-toggle=\"dropdown\"
                aria-haspopup=\"true\"
                aria-expanded=\"false\"
                id=\"{{ form.vars.id }}\"
        >
          {{ form.vars.default_locale.iso_code|upper }}
        </button>

        <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
          {% for locale in locales %}
            <span class=\"dropdown-item js-locale-item\"
                  data-locale=\"{{ locale.iso_code }}\"
            >
              {{ locale.name }}
            </span>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>
{%- endblock translate_textarea_widget %}

{% block date_picker_widget %}
  {% apply spaceless %}
    {% set attr = attr|merge({class: ((attr.class|default(\x27\x27) ~ \x27 form-control datepicker\x27)|trim)}) %}
    <div class=\"input-group datepicker\">
      <input type=\"text\" data-format=\"{{ date_format }}\" {{ block(\x27widget_attributes\x27) }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
      <div class=\"input-group-append\">
        <div class=\"input-group-text\">
          <i class=\"material-icons\">date_range</i>
        </div>
      </div>
    </div>
    {{ block(\x27form_help\x27) }}
  {% endapply %}
{% endblock date_picker_widget %}

{% block date_range_widget %}
  {% apply spaceless %}
    <div class=\"input-group date-range row\">
      <div class=\"col col-md-4\">
        {{ form_row(form.from) }}
      </div>
      <div class=\"col col-md-4\">
        {{ form_row(form.to) }}
        {% if form.unlimited is defined %}
          {{ form_widget(form.unlimited) }}
          {{ form_errors(form.unlimited) }}
        {% endif %}
      </div>
    </div>
  {% endapply %}
{% endblock date_range_widget %}

{% block search_and_reset_widget %}
  {% apply spaceless %}
    <button type=\"submit\"
            class=\"btn btn-primary grid-search-button\"
            title=\"{{ \x27Search\x27|trans({}, \x27Admin.Actions\x27) }}\"
            name=\"{{ full_name }}[search]\"
    >
      <i class=\"material-icons\">search</i>
      {{ \x27Search\x27|trans({}, \x27Admin.Actions\x27) }}
    </button>
    {% if show_reset_button %}
      <div class=\"js-grid-reset-button\">
        <button type=\"reset\"
                name=\"{{ full_name }}[reset]\"
                class=\"btn btn-link js-reset-search btn d-block grid-reset-button\"
                data-url=\"{{ reset_url }}\"
                data-redirect=\"{{ redirect_url }}\"
        >
          <i class=\"material-icons\">clear</i>
          {{ \x27Reset\x27|trans({}, \x27Admin.Actions\x27) }}
        </button>
      </div>
    {% endif %}
  {% endapply %}
{% endblock search_and_reset_widget %}

{% block switch_widget %}
  {% apply spaceless %}
  {% set rowAttributes = row_attr|default({}) %}
  <div class=\"input-group {{ rowAttributes.class|default(\x27\x27) }}\" {% for key, rowAttr in rowAttributes %} {% if key != \x27class\x27 %}{{ key }}=\"{{ rowAttr }}\"{% endif %}{% endfor %}>
    <span class=\"ps-switch\" id=\"{{ form.vars.id }}\">
        {% for choice in choices %}
          {% set inputId = id ~ \x27_\x27 ~ choice.value %}
          <input id=\"{{ inputId }}\"
            {{ block(\x27attributes\x27) }}
            name=\"{{ full_name }}\"
            value=\"{{ choice.value }}\"
            {% if choice is selectedchoice(value) %}checked=\"\"{% endif %}
            {% if disabled %}disabled=\"\"{% endif %}
            type=\"radio\"
          >
          {% if show_choices %}<label for=\"{{ inputId }}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>{% endif %}
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
  </div>
  {% endapply %}
  {{- block(\x27form_help\x27) -}}
{% endblock switch_widget %}

{%- block row_attributes -%}
  {% set rowAttributes = row_attr|default({}) %}
  {%- for attrname, attrvalue in rowAttributes -%}
    {{- \x27 \x27 -}}
    {{- attrname }}=\"{{ attrvalue }}\"
  {%- endfor -%}
{%- endblock -%}

{% block _form_step6_attachments_widget %}
  <div class=\"js-options-no-attachments {{ form|length > 0 ? \x27hide\x27 : \x27\x27 }}\">
    <small>{{ \x27There is no attachment yet.\x27|trans({}, \x27Admin.Catalog.Notification\x27) }}</small>
  </div>
  <div id=\"product-attachments\" class=\"panel panel-default\">
    <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? \x27hide\x27 : \x27\x27 }}\">
      <div>
        <table id=\"product-attachment-file\" class=\"table\">
          <thead class=\"thead-default\">
          <tr>
            <th class=\"col-md-3\">{{ \x27Title\x27|trans({}, \x27Admin.Global\x27) }}</th>
            <th class=\"col-md-6\">{{ \x27File name\x27|trans({}, \x27Admin.Global\x27) }}</th>
            <th class=\"col-md-2\">{{ \x27Type\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}</th>
          </tr>
          </thead>
          <tbody>
          {%- for child in form %}
            <tr>
              <td class=\"col-md-3\">{{ form_widget(child) }}</td>
              <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0][\x27file_name\x27] }}</span></td>
              <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0][\x27mime\x27] }}</td>
            </tr>
          {% endfor -%}
          </tbody>
        </table>
      </div>
    </div>
  </div>
{% endblock %}

{# Labels #}

{% block choice_label -%}
  {# remove the checkbox-inline and radio-inline class, it\x27s only useful for embed labels #}
  {%- set label_attr = label_attr|merge({class: label_attr.class|default(\x27\x27)|replace({\x27checkbox-inline\x27: \x27\x27, \x27radio-inline\x27: \x27\x27})|trim}) -%}
  {{- block(\x27form_label\x27) -}}
{% endblock %}

{% block checkbox_label -%}
  {{- block(\x27checkbox_radio_label\x27) -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
  {{- block(\x27checkbox_radio_label\x27) -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
  {# Do not display the label if widget is not defined in order to prevent double label rendering #}
  {% if widget is defined %}
    {% if required %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default(\x27\x27) ~ \x27 required\x27)|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
      {% set label_attr = label_attr|merge({class: (label_attr.class|default(\x27\x27) ~ \x27 \x27 ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is not same as(false) and label is empty %}
      {% set label = name|humanize %}
    {% endif %}

    {% if block_prefixes[2] == \x27radio\x27 %}
      <label class=\"form-check-label\"{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}

        <i class=\"form-check-round\"></i>

        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw_purified : label|raw_purified) -}}
      </label>
    {% else %}
      <div class=\"md-checkbox md-checkbox-inline\">
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{- widget|raw -}}
        <i class=\"md-checkbox-control\"></i>
        {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw_purified : label|raw_purified) -}}
        </label>
      </div>
    {% endif %}
  {% endif %}
{% endblock checkbox_radio_label %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default(\x27\x27)) -%}
    {%- if \x27radio-custom\x27 in parent_label_class -%}
        {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 custom-control-input\x27)|trim}) -%}
        <div class=\"custom-control custom-radio{{ \x27radio-inline\x27 in parent_label_class ? \x27 custom-control-inline\x27 }}\">
            {{- form_label(form, null, {widget: block(\x27base_radio_widget\x27)}) -}}
        </div>
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-check-input\x27)|trim}) -%}
        <div class=\"form-check form-check-radio form-radio{{ \x27radio-inline\x27 in parent_label_class ? \x27 form-check-inline\x27 }}{% if form.vars.valid != true %} has-error{% endif %}\">
            {{- form_label(form, null, {widget: block(\x27base_radio_widget\x27)}) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default(\x27\x27)) -%}
    {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-check-input\x27)|trim}) -%}
    <div class=\"form-check form-check-radio form-checkbox{% if attr.container_class is defined %} {{ attr.container_class }}{% endif %}\">
        {{- form_label(form, null, {widget: block(\x27base_checkbox_widget\x27)}) -}}
    </div>
{%- endblock checkbox_widget %}

{# Errors #}

{% block form_errors -%}
  {% if attr[\x27fieldError\x27] is defined and attr[\x27fieldError\x27] == true %}
    {{ block(\x27form_errors_field\x27) }}
  {% else %}
    {{ block(\x27form_errors_other\x27) }}
  {% endif %}
{%- endblock form_errors %}

{% block form_errors_field %}
  {% if errors|length > 0 -%}
    {# If we got more then one error then we need to display popover instead of errors list #}
    {%- if errors|length > 1 -%}

      {% set popoverContainer = \x27popover-error-container-\x27 ~ form.vars.id %}
      <div class=\"{{ popoverContainer }}\"></div>

      {% set popoverErrorContent %}
        <div class=\"popover-error-list\">
          <ul>
            {%- for error in errors -%}
              <li class=\"text-danger\"> {{ error.messageTemplate|trans(error.messageParameters, \x27form_error\x27) }}
              </li>
            {% endfor %}
          </ul>
        </div>
      {% endset %}

      <template class=\"js-popover-error-content\" data-id=\"{{ form.vars.id }}\">
        {{ popoverErrorContent }}
      </template>

      {% set errorPopover %}
        <span
          data-toggle=\"form-popover-error\"
          data-id=\"{{ form.vars.id }}\"
          data-placement=\"bottom\"
          data-template=\x27<div class=\"popover form-popover-error\" role=\"tooltip\"><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>\x27
          data-trigger=\"hover\"
          data-container=\".{{ popoverContainer }}\"
        >
          <i class=\"material-icons form-error-icon\">error_outline</i> <u> {{ \x27%count% errors\x27|trans({\x27%count%\x27: errors|length}, \x27Admin.Global\x27) }}</u>
        </span>
      {% endset %}

      <div class=\"invalid-feedback-container\">
        <div class=\"text-danger\">
          {{ errorPopover }}
        </div>
      </div>

      {# If there is only one error then display it without popover #}
    {%- else -%}
      <div class=\"d-inline-block align-baseline text-danger mt-1\" role=\"alert\">
        <i class=\"material-icons form-error-icon\">error_outline</i>

        {% for error in errors %}
          <span>
            {{ error.messageTemplate|trans(error.messageParameters, \x27form_error\x27) }}
          </span>
        {%- endfor -%}
      </div>
    {%- endif -%}
  {%- endif %}
{% endblock %}

{% block form_errors_other %}
  {% if errors|length > 0 -%}
    <div class=\"alert alert-danger d-print-none\" role=\"alert\">
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
        <span aria-hidden=\"true\"><i class=\"material-icons\">close</i></span>
      </button>
      <div class=\"alert-text\">
        {% for error in errors %}
            <p> {{ error.messageTemplate|trans(error.messageParameters, \x27form_error\x27) }}
            </p>
        {%- endfor -%}
      </div>
    </div>
  {% endif %}
{% endblock %}

{# Material design widgets #}

{% block material_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table\">
      <table class=\"table table-bordered mb-0\">
        <thead>
        <tr>
          <th class=\"checkbox\">
            <div class=\"md-checkbox\">
              <label>
                <input
                  type=\"checkbox\"
                  class=\"js-choice-table-select-all\"
                  {% if isCheckSelectAll %}
                    checked
                  {% endif %}
                >
                <i class=\"md-checkbox-control\"></i>
                {{ \x27Select all\x27|trans({}, \x27Admin.Actions\x27) }} {% if form.vars.displayTotalItems %} ({{ form|length }}) {% endif %}
              </label>
            </div>
          </th>
        </tr>
        </thead>
        <tbody>
        {% for child in form %}
          <tr>
            <td>
              {{ form_widget(child, {material_design: true}) }}
            </td>
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
  {{ block(\x27form_help\x27) }}
{% endblock material_choice_table_widget %}

{% block material_multiple_choice_table_widget %}
  {% apply spaceless %}
    <div class=\"choice-table{% if headers_fixed %}-headers-fixed{% endif %} table-responsive\">
      <table class=\"table\">
        <thead>
        <tr>
          <th>{{ table_label }}</th>
          {% for child_choice in form %}
            <th class=\"text-center\">
              {% if child_choice.vars.multiple and child_choice.vars.name not in headers_to_disable %}
                <a href=\"#\"
                   class=\"js-multiple-choice-table-select-column\"
                   data-column-num=\"{{ loop.index + 1 }}\"
                   data-column-checked=\"false\"
                >
                  {{ child_choice.vars.label }}
                </a>
              {% else %}
                {{ child_choice.vars.label }}
              {% endif %}
            </th>
          {% endfor %}
        </tr>
        </thead>
        <tbody>
        {% for choice_name, choice_value in choices %}
          <tr>
            <td>
              {{ choice_name }}
            </td>
            {% for child_choice_name, child_choice in form %}
              <td class=\"text-center\">
                {% if child_choice_entry_index_mapping[choice_value][child_choice_name] is defined %}
                  {% set entry_index = child_choice_entry_index_mapping[choice_value][child_choice_name] %}

                  {% if child_choice.vars.multiple %}
                    {{ form_widget(child_choice[entry_index], {material_design: true}) }}
                  {% else %}
                    {{ form_widget(child_choice[entry_index]) }}
                  {% endif %}
                {% else %}
                  --
                {% endif %}
              </td>
            {% endfor %}
          </tr>
        {% endfor %}
        </tbody>
      </table>
    </div>
  {% endapply %}
{% endblock material_multiple_choice_table_widget %}

{# Copied translatablefields_widget made to be compatible with TranslatableType.php and to be used in translatable widget #}
{% block translatable_fields_with_tabs %}
  <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
    {% if hide_locales == false and form|length > 1 %}
      <ul class=\"translationsLocales nav nav-pills\">
        {% for translationsFields in form %}
          <li class=\"nav-item\">
            <a href=\"#\" data-locale=\"{{ translationsFields.vars.label }}\" class=\"{% if default_locale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
              {{ translationsFields.vars.label|upper }}
            </a>
          </li>
        {% endfor %}
      </ul>
    {% endif %}

    <div class=\"translationsFields tab-content\">
      {% for translationsFields in form %}
        <div data-locale=\"{{ translationsFields.vars.label }}\" class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hide_locales == false and form|length > 1 %}panel panel-default{% endif %} {% if default_locale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
          {{ form_widget(translationsFields) }}
        </div>
      {% endfor %}
    </div>
  </div>
{% endblock %}

{% block translatable_fields_with_dropdown -%}
    {% set formClass = (form.vars.attr.class|default(\x27\x27) ~ \x27 input-group locale-input-group js-locale-input-group d-flex\x27)|trim %}
    <div class=\"{{ formClass }}\" id=\"{{ form.vars.id }}\" tabindex=\"1\">
      {% for translateField in form %}
        {% set classes = translateField.vars.attr.class|default(\x27\x27) ~ \x27 js-locale-input\x27 %}
        {% set classes = classes ~ \x27 js-locale-\x27 ~ translateField.vars.label %}
        {% if default_locale.id_lang != translateField.vars.name %}
          {% set classes = classes ~ \x27 d-none\x27 %}
        {% endif %}
        <div data-lang-id=\"{{ translateField.vars.name }}\" class=\"{{ classes }}\" style=\"flex-grow: 1;\">
          {{ form_widget(translateField) }}
        </div>
      {% endfor %}
      {% if not hide_locales %}
        <div class=\"dropdown\">
          <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                  type=\"button\"
                  data-toggle=\"dropdown\"
            {% if change_form_language_url is defined %}
              data-change-language-url=\"{{ form.vars.change_form_language_url }}\"
            {% endif %}
                  aria-haspopup=\"true\"
                  aria-expanded=\"false\"
                  id=\"{{ form.vars.id }}_dropdown\"
          >
            {{ form.vars.default_locale.iso_code|upper }}
          </button>
          <div class=\"dropdown-menu dropdown-menu-right locale-dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}_dropdown\">
            {% for locale in locales %}
              <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
            {% endfor %}
          </div>
        </div>
      {% endif %}
    </div>
{%- endblock %}

{% block translatable_widget -%}
  {% if use_tabs %}
    {{ block(\x27translatable_fields_with_tabs\x27) }}
  {% else %}
    {{ block(\x27translatable_fields_with_dropdown\x27) }}
  {% endif %}
  {{ block(\x27form_help\x27) }}
{%- endblock translatable_widget %}

{% block birthday_widget %}
  {% if widget == \x27single_text\x27 %}
    {{- block(\x27form_widget_simple\x27) -}}
  {% else -%}
    {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 form-inline\x27)|trim}) -%}
    {% if datetime is not defined or not datetime -%}
      <div {{ block(\x27widget_container_attributes\x27) -}}>
    {%- endif %}

    {% set yearWidget = \x27<div class=\"col pl-0 birthday-select-container\">\x27 ~ form_widget(form.year) ~ \x27</div>\x27|raw %}
    {% set monthWidget = \x27<div class=\"col birthday-select-container\">\x27 ~ form_widget(form.month) ~ \x27</div>\x27|raw %}
    {% set dayWidget = \x27<div class=\"col pr-0 birthday-select-container\">\x27 ~ form_widget(form.day) ~ \x27</div>\x27|raw %}

    {{- date_pattern|replace({
      \x27{{ year }}\x27: yearWidget,
      \x27{{ month }}\x27: monthWidget,
      \x27{{ day }}\x27: dayWidget,
    })|raw -}}

    {% if datetime is not defined or not datetime -%}
      </div>
    {%- endif -%}
  {% endif %}
{% endblock birthday_widget %}

{% block file_widget %}
  <style>
    .custom-file-label:after {
      content: \"{{ \x27Browse\x27|trans({}, \x27Admin.Actions\x27) }}\";
    }
  </style>
  <div class=\"custom-file\">
    {% set attr = attr|merge({
      class: (attr.class|default(\x27\x27) ~ \x27 custom-file-input\x27)|trim,
      \x27data-multiple-files-text\x27: \x27%count% file(s)\x27|trans({}, \x27Admin.Global\x27),
      \x27data-locale\x27: get_context_iso_code(),
    }) -%}

    {% if attr.disabled is defined and attr.disabled %}
      {% set attr = attr|merge({
        class: attr.class ~ \x27 disabled\x27,
      }) %}
    {% endif %}
    {{- block(\x27form_widget_simple\x27) -}}

    <label class=\"custom-file-label\" for=\"{{ form.vars.id }}\">
      {% set attributes = form.vars.attr %}
      {{ attributes.placeholder is defined ? attributes.placeholder : \x27Choose file(s)\x27|trans({}, \x27Admin.Actions\x27) }}
    </label>
  </div>
  {{- block(\x27form_help\x27) -}}
  {% if form.vars.download_url %}
    <a target=\"_blank\" href=\"{{ form.vars.download_url }}\">
      {{ \x27Download file\x27|trans({}, \x27Admin.Actions\x27) }}
    </a>
  {% endif %}
{% endblock file_widget %}

{% block shop_restriction_checkbox_widget %}
  {% if form.vars.attr.is_allowed_to_display %}
    <div class=\"md-checkbox md-checkbox-inline\">
      <label>
        {% set type = type|default(\x27checkbox\x27) %}
        <input
          class=\"js-multi-store-restriction-checkbox\"
          type=\"{{ type }}\"
          {{ block(\x27widget_attributes\x27) }}
          value=\"{{ value }}\"
        >
        <i class=\"md-checkbox-control\"></i>
      </label>
    </div>
  {% endif %}
{% endblock %}

{% block generatable_text_widget %}
  <div class=\"input-group\">
    {% if compound %}
      {{- block(\x27form_widget_compound\x27) -}}
    {% else %}
      {{- block(\x27form_widget_simple\x27) -}}
    {% endif %}
    <span class=\"input-group-btn ml-1\">
      <button class=\"btn btn-outline-secondary js-generator-btn\"
              type=\"button\"
              data-target-input-id=\"{{ id }}\"
              data-generated-value-length=\"{{ generated_value_length }}\"
      >
        {{ \x27Generate\x27|trans({}, \x27Admin.Actions\x27) }}
      </button>
   </span>
  </div>
  {{ block(\x27form_help\x27) }}
{% endblock generatable_text_widget %}

{% block text_with_recommended_length_widget %}
  {% set attr = attr|merge({
    \x27data-recommended-length-counter\x27: \x27#\x27 ~ id ~ \x27_recommended_length_counter\x27,
    class: \x27js-recommended-length-input\x27,
  }) -%}

  {% if input_type == \x27textarea\x27 %}
    {{- block(\x27textarea_widget\x27) -}}
  {% else %}
    {{- block(\x27form_widget_simple\x27) -}}
  {% endif %}

  <small class=\"form-text text-muted text-right\"
         id=\"{{ id }}_recommended_length_counter\"
  >
    <em>
      {{ \x27[1][/1] of [2][/2] characters used (recommended)\x27|trans({}, \x27Admin.Catalog.Feature\x27)|replace({
        \x27[1]\x27: \x27<span class=\"js-current-length\">\x27 ~ value|length,
        \x27[/1]\x27: \x27</span>\x27,
        \x27[2]\x27: \x27<span>\x27 ~ recommended_length,
        \x27[/2]\x27: \x27</span>\x27,
      })|raw_purified }}
    </em>
  </small>
{% endblock %}

{% block text_with_length_counter_widget %}
  <div class=\"input-group js-text-with-length-counter\">
    {% set current_length = form.vars.max_length - value|length %}

    {% if form.vars.position == \x27before\x27 %}
      <div class=\"input-group-prepend\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}

    {% set attr = attr|merge(input_attr) -%}
    {% set attr = attr|merge({\x27data-max-length\x27: form.vars.max_length, maxlength: form.vars.max_length, class: (attr.class|default(\x27\x27) ~ \x27 js-countable-input\x27)|trim}) -%}

    {% if form.vars.input == \x27input\x27 %}
      {{- block(\x27form_widget_simple\x27) -}}
    {% elseif form.vars.input == \x27textarea\x27 %}
      {{- block(\x27textarea_widget\x27) -}}
    {% else %}
      {{- block(\x27form_widget\x27) -}}
    {% endif %}

    {% if form.vars.position == \x27after\x27 %}
      <div class=\"input-group-append\">
        <span class=\"input-group-text js-countable-text\">{{ current_length }}</span>
      </div>
    {% endif %}
  </div>
{% endblock %}

{% block integer_min_max_filter_widget %}
  {{ form_widget(form[\x27min_field\x27], {attr: {class: \x27min-field\x27}}) }}
  {{ form_widget(form[\x27max_field\x27], {attr: {class: \x27max-field\x27}}) }}
{% endblock %}

{% block number_min_max_filter_widget %}
  {{ form_widget(form[\x27min_field\x27], {attr: {class: \x27min-field\x27}}) }}
  {{ form_widget(form[\x27max_field\x27], {attr: {class: \x27max-field\x27}}) }}
{% endblock %}

{%- block number_widget -%}
  {%- set type = type|default(\x27text\x27) -%}
  <div class=\"input-group\">
    {{- block(\x27form_unit_prepend\x27) -}}
    {{- block(\x27form_widget_simple\x27) -}}
    {{- block(\x27form_unit\x27) -}}
  </div>
  {{ block(\x27form_help\x27) }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
  {%- set type = type|default(\x27number\x27) -%}
  <div class=\"input-group\">
    {{- block(\x27form_unit_prepend\x27) -}}
    {{- block(\x27form_widget_simple\x27) -}}
    {{- block(\x27form_unit\x27) -}}
  </div>
  {{ block(\x27form_help\x27) }}
{%- endblock integer_widget -%}

{% block form_unit %}
  {% if form.vars.unit is defined and not form.vars.prepend_unit %}
    <div class=\"input-group-append\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit %}

{% block form_unit_prepend %}
  {% if form.vars.unit is defined and form.vars.prepend_unit %}
    <div class=\"input-group-prepend\">
      <span class=\"input-group-text\">{{ form.vars.unit }}</span>
    </div>
  {% endif %}
{% endblock form_unit_prepend %}

{% block form_help %}
  {% if help is not null %}
    {%- set help_attr = help_attr|merge({class: (help_attr.class|default(\x27\x27) ~ \x27 form-text\x27)|trim}) -%}
      <small id=\"{{ id }}_help\"{% with {attr: help_attr} %}{{ block(\x27attributes\x27) }}{% endwith %}>{{ help|raw_purified }}</small>
  {% endif %}
  {% if warning is defined %}
    {{ warning }}
  {% endif %}
{% endblock form_help %}

{% block form_prepend_external_link %}
  {% if external_link is defined and external_link.position == \x27prepend\x27 %}
    {{- block(\x27form_external_link\x27) -}}
  {% endif %}
{% endblock %}

{% block form_append_external_link %}
  {% if external_link is defined and external_link.position == \x27append\x27 %}
    {{- block(\x27form_external_link\x27) -}}
  {% endif %}
{% endblock %}

{% block form_external_link %}
  {% if external_link is defined %}
    {%- set openingTag -%}
      <a {{ block(\x27form_external_link_attributes\x27) }}>
        {% if external_link.open_in_new_tab %}<i class=\"material-icons\">open_in_new</i>{% endif %}
    {%- endset -%}

    <div class=\"small font-secondary form-external-link{% if external_link.align is same as(\x27right\x27) %} text-right{% endif %}\">
      {# If placeholders are included in the text use it as is, else prepend and append them to the text #}
      {% if \x27[1]\x27 in external_link.text and \x27[/1]\x27 in external_link.text %}
        {{ external_link.text|escape|replace({\x27[1]\x27: openingTag, \x27[/1]\x27: \x27</a>\x27})|raw_purified }}
      {% else %}
        {{ (\x27[1]\x27 ~ external_link.text|escape ~ \x27[/1]\x27)|replace({\x27[1]\x27: openingTag, \x27[/1]\x27: \x27</a>\x27})|raw_purified }}
      {% endif %}
    </div>
  {% endif %}
{% endblock form_external_link %}

{%- block form_external_link_attributes -%}
  {% set external_link_attr = external_link.attr|merge({class: (external_link.attr.class|default(\x27\x27) ~ \x27 btn btn-link px-0 align-right\x27)|trim}) %}

  {% for attrname, attrvalue in external_link_attr %}
    {% if attrname not in [\x27href\x27, \x27class\x27] %}
      {{ attrname }}=\"{{ attrvalue }}\"
    {% endif %}
  {% endfor %}

  {% if external_link.open_in_new_tab %}target=\"_blank\"{% endif %}
  href=\"{{ external_link.href }}\"
  class=\"{{ external_link_attr.class }}\"
{%- endblock -%}

{% block custom_content_widget %}
  {{ include(template, data) }}
{% endblock %}

{% block text_widget %}
  {%- set attr = attr|merge({\x27aria-label\x27: \x27%inputId% input\x27|trans({\x27%inputId%\x27: form.vars.id}, \x27Admin.Global\x27)}) -%}
  {% if data_list is not null %}
    {%- set attr = attr|merge({list: id ~ \x27_datalist\x27}) -%}
  {% endif %}

  {{ form_widget(form, {attr: attr}) }}

  {% if data_list is not null %}
    <datalist id=\"{{ id ~ \x27_datalist\x27 }}\">
      {% for item in data_list %}
        <option value=\"{{ item }}\"></option>
      {% endfor %}
    </datalist>
  {% endif %}
{% endblock text_widget %}

{%- block form_prepend_alert -%}
  {% if alert_position is defined and alert_position == \x27prepend\x27 %}
  {{- block(\x27form_alert\x27) -}}
  {% endif %}
{% endblock %}

{%- block form_append_alert -%}
  {% if alert_position is defined and alert_position == \x27append\x27 %}
  {{- block(\x27form_alert\x27) -}}
  {% endif %}
{% endblock %}

{%- block form_alert -%}
  {% if alert_message is defined %}
    <div class=\"alert alert-{{ alert_type }}{% if alert_title is defined %} expandable-alert{% endif %}\" role=\"alert\">
    {% if alert_title is defined %}
      <p class=\"alert-text\">
        {{ alert_title|raw_purified }}
      </p>
    {% else %}
      {% for message in alert_message %}
        <p class=\"alert-text\">
          {{ message|raw_purified }}
        </p>
      {% endfor %}
    {% endif %}

    {% if alert_title is defined %}
      <div class=\"alert-more collapse\" id=\"expandable_{{ form.vars.id }}\" style=\"\">
        {% if alert_message|length > 1 %}
          <ul class=\"p-0\">
            {% for message in alert_message %}
              <li>{{ message|raw_purified }}</li>
            {% endfor %}
          </ul>
        {% else %}
          {% for message in alert_message %}
            <p>
              {{ message|raw_purified }}
            </p>
          {% endfor %}
        {% endif %}
      </div>
      <div class=\"read-more-container\">
         <button type=\"button\" class=\"read-more btn-link\" data-toggle=\"collapse\" data-target=\"#expandable_{{ form.vars.id }}\" aria-expanded=\"true\" aria-controls=\"collapseDanger\">
            {{ \x27Read more\x27|trans({}, \x27Admin.Actions\x27) }}
          </button>
       </div>
    {% endif %}
  </div>
  {% endif %}
{%- endblock -%}

{% block unavailable_widget %}
  <div class=\"alert alert-unavailable\" role=\"alert\">
    <p class=\"alert-text\">
      {{ \x27Not available yet.\x27|trans({}, \x27Admin.Catalog.Feature\x27) }}
    </p>
  </div>
{% endblock %}

{% block text_preview_widget %}
  {# This is the hidden input #}
  {{- block(\x27form_widget_simple\x27) -}}
  <span class=\"label text-preview {{ preview_class }}\">
    {# Allows to insert content as prefix, like an icon #}
    {% if prefix is defined %}
    <span class=\"text-preview-prefix\">
      {{ prefix|raw_purified }}
    </span>
    {% endif %}

    <span class=\"text-preview-value\">
      {% if form.vars.allow_html %}
        {# This outputs raw value #}
        {{ value|raw }}
      {% else %}
        {# This just outputs the value #}
        {{ value|raw_purified }}
      {% endif %}
    </span>

    {# Allows to insert content as suffix, like an icon #}
    {% if suffix is defined %}
    <span class=\"text-preview-suffix\">
      {{ suffix|raw_purified }}
    </span>
    {% endif %}
  </span>
  {{- block(\x27form_help\x27) -}}
{% endblock %}

{% block link_preview_widget %}
  {# This is the hidden input #}
  {{- block(\x27form_widget_simple\x27) -}}
  <a href=\"{{ form.vars.value }}\" class=\"{{ attr.class|default(\x27\x27) }}\">
    {{ form.vars.button_label }}
  </a>
{% endblock %}

{% block image_preview_widget %}
  {# This is the hidden input #}
  {{- block(\x27form_widget_simple\x27) -}}
  {% if value is not empty %}
    <img src=\"{{ value }}\" alt=\"{{ (\x27Image preview for \x27 ~ form.vars.name)|trim }}\" class=\"{{ form.vars.image_class }}\" />
  {% else %}
    {{ \x27No picture\x27|trans({}, \x27Admin.Global\x27) }}
  {% endif %}
{% endblock %}

{% block delta_quantity_widget %}
  {% set quantity = value.quantity|default(form.quantity.vars.value) %}
  {# If initial quantity has not been computed we use value which may be containing a placeholder useful for collection rendering #}
  {% if initialQuantity is null %}
    {% set initialQuantity = quantity %}
  {% endif %}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 delta-quantity\x27)|trim, \x27data-initial-quantity\x27: initialQuantity}) %}
  <div {{ block(\x27widget_container_attributes\x27) }}>
    {{ form_widget(form.initial_quantity, {value: initialQuantity}) }}
    {{ form_widget(form.quantity, {initialQuantity: initialQuantity, deltaQuantity: deltaQuantity, value: quantity}) }}
    {{ form_row(form.delta) }}
  </div>
{% endblock %}

{% block delta_quantity_quantity_widget %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 delta-quantity-quantity\x27)|trim}) -%}
  <div {{ block(\x27widget_container_attributes\x27) }}>
    {{- block(\x27form_widget_simple\x27) -}}
    <span class=\"initial-quantity\">{{ initialQuantity }}</span>
    <span class=\"quantity-update{% if deltaQuantity != 0 %} quantity-modified{% endif %}\">
      <i class=\"material-icons\">trending_flat</i>
      <span class=\"new-quantity\">{{ value }}</span>
    </span>
    {{ form_errors(form) }}
  </div>
{% endblock %}

{% block delta_quantity_delta_row %}
  <div class=\"form-group{{ block(\x27widget_type_class\x27) }}{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}{% if row_attr.class is defined %} {{ row_attr.class }}{% endif %}\">
    <div class=\"delta-quantity-delta-container\">
      {{- form_label(form) -}}
      {{- block(\x27form_prepend_alert\x27) -}}
      {{- block(\x27form_prepend_external_link\x27) -}}

      {{- form_widget(form) -}}

      {{- block(\x27form_append_alert\x27) -}}
      {{- block(\x27form_append_external_link\x27) -}}
    </div>
    {{- form_errors(form) -}}
    {{- block(\x27form_modify_all_shops\x27) -}}
  </div>
{% endblock %}

{% block delta_quantity_delta_widget %}
  {%- set type = \x27number\x27 -%}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 delta-quantity-delta\x27)|trim}) -%}
  {{- block(\x27form_widget_simple\x27) -}}
{% endblock %}

{% block submittable_input_widget %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 ps-submittable-input-wrapper\x27)|trim}) -%}
  <div {{ block(\x27widget_attributes\x27) }}>
    {%- set typeAttr = form.vars.type_attr|merge({
      class: (form.vars.type_attr.class|default(\x27\x27) ~ \x27 submittable-input\x27)|trim,
      \x27data-initial-value\x27: form.value.vars.value,
      value: form.value.vars.value,
    }) -%}

    {{ form_widget(form.value, {attr: typeAttr}) }}
    {{- block(\x27submittable_input_button_widget\x27) -}}
  </div>
{% endblock submittable_input_widget %}

{% block submittable_input_button_widget %}
  <button type=\"button\" class=\"check-button d-none\">
    <i class=\"material-icons\">check</i>
  </button>
{% endblock submittable_input_button_widget %}

{% block submittable_delta_quantity_delta_widget %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 delta-quantity-delta ps-submittable-input-wrapper\x27)|trim}) -%}
  <div {{ block(\x27widget_attributes\x27) }}>
    {%- set attr = form.vars.attr|merge({
      class: (form.vars.attr.class|default(\x27\x27) ~ \x27 submittable-input\x27)|trim,
      \x27data-initial-value\x27: value,
      value: value,
    }) -%}

    {{ form_widget(form, {attr: attr}) }}
    {{- block(\x27submittable_input_button_widget\x27) -}}
  </div>
{% endblock %}

{%- block navigation_tab_widget -%}
{% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 navigation-tab-widget\x27)|trim}) %}
<div {{ block(\x27widget_container_attributes\x27) }}>
  <div id=\"{{ form.vars.id }}-tabs\" class=\"tabs js-tabs\">
    <div class=\"arrow d-xl-none js-arrow left-arrow float-left\">
      <i class=\"material-icons rtl-flip hide\">chevron_left</i>
    </div>

    <ul class=\"nav nav-tabs js-nav-tabs\" id=\"form-nav\" role=\"tablist\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != \x27_toolbar_buttons\x27 and child.vars.name != \x27_footer_buttons\x27 and child.vars.name != \x27_token\x27 %}
      <li id=\"{{ child.vars.id }}-tab-nav\" class=\"nav-item{% if not child.vars.valid %} has-error{% endif %}\">
        <a href=\"#{{ child.vars.id }}-tab\" role=\"tab\" data-toggle=\"tab\" class=\"nav-link{% if firstRenderedChild %} active{% endif %}\">
          {{ child.vars.label }}
        </a>
      </li>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
    </ul>

    <div class=\"arrow d-xl-none js-arrow right-arrow visible float-right\">
      <i class=\"material-icons rtl-flip hide\">chevron_right</i>
    </div>

    {% if form.offsetExists(\x27_toolbar_buttons\x27) %}
    <div class=\"navigation-tab-widget-toolbar toolbar text-md-right\">
      {{ form_widget(form._toolbar_buttons) }}
    </div>
    {% endif %}
  </div>

  <div id=\"{{ form.vars.id }}-tabs-content\" class=\"tab-content\">
    {% set firstRenderedChild = true %}
    {% for child in form.children %}
      {% if not child.rendered and child.vars.name != \x27_footer_buttons\x27 and child.vars.name != \x27_token\x27 %}
      <div role=\"tabpanel\" class=\"form-contenttab tab-pane container-fluid{% if firstRenderedChild %} active{% endif %}\" id=\"{{ child.vars.id }}-tab\">
        {% if child.vars.label_tab is defined %}
          {# We force required false here so that the required asterix is never shown on the tab title #}
          {{ form_label(child, child.vars.label_tab, {required: false}) }}
        {% endif %}
        {{ form_errors(child) }}
        {{ form_widget(child) }}
      </div>
      {% set firstRenderedChild = false %}
      {% endif %}
    {% endfor %}
  </div>

  {% if form.offsetExists(\x27_footer_buttons\x27) %}
    <div class=\"navigation-tab-widget-footer\">
      {{ form_widget(form._footer_buttons) }}
    </div>
  {% endif %}
</div>
{% endblock %}

{%- block toggle_children_choice_widget -%}
  {%- set attr = attr|merge({
    class: (attr.class|default(\x27\x27) ~ \x27 toggle-children-choice\x27)|trim,
  }) -%}
  <div {{ block(\x27widget_attributes\x27) }}>
    {%- set selectAttr = form.children_selector.vars.attr|merge({
      class: (form.children_selector.vars.attr.class|default(\x27\x27) ~ \x27 toggle-children-choice-select\x27)|trim,
    }) -%}

    {# Check for errors in the children and propagate the error class in the children #}
    {% for childName, child in form %}
      {% if child.vars.valid != true %}
        {# Search for matching choice child and update its attributes #}
        {% for choiceChildName, choiceChild in form.children_selector %}
          {% if choiceChild.vars.value == childName %}
            {{ update_form_vars(choiceChild, {valid: false}) }}
          {% endif %}
        {% endfor %}
      {% endif %}
    {% endfor %}

    {{ form_row(form.children_selector, {attr: selectAttr}) }}
    <div class=\"toggle-children-choice-container\">
      {% for childName, child in form %}
        {% if childName != \x27children_selector\x27 %}
          <div class=\"toggle-children-choice-child{% if form.children_selector.vars.value != childName %} d-none{% endif %}\" data-toggle-name=\"{{ childName }}\">
            {{ form_row(child, {label: false}) }}
          </div>
        {% endif %}
      {% endfor %}
    </div>
  </div>
{%- endblock -%}

{%- block accordion_widget -%}
  {%- set attr = attr|merge({
    class: (attr.class|default(\x27\x27) ~ \x27 accordion accordion-form\x27)|trim,
  }) -%}
  <div {{ block(\x27widget_attributes\x27) }}>
    {% set firstChild = true %}
    {% for child in form %}
      {% if child.vars.compound %}
      {% set hasError = child.vars.valid != true %}
      {% set isExpanded = firstChild and expand_first or (hasError and expand_on_error) or expand_all %}
      <div class=\"card\">
        <div class=\"card-header\" id=\"{{ child.vars.id }}_accordion_header\">
          <h2 class=\"mb-0\">
            <button
              class=\"accordion-form-button {% if hasError %} has-error {% endif %} btn btn-block text-left{% if not isExpanded %} collapsed{% endif %}\"
              type=\"button\"
              data-toggle=\"collapse\"
              data-target=\"#{{ child.vars.id }}_accordion\"
              aria-expanded=\"{% if isExpanded %}true{% else %}false{% endif %}\"
              aria-controls=\"{{ child.vars.id }}_accordion\">
              <span class=\"accordion-form-button-label\">{{ child.vars.label }}</span>
              {% if child.vars.label_subtitle is defined and child.vars.label_subtitle is not empty %}
                <span class=\"accordion-form-button-sub-label\">{{ child.vars.label_subtitle }}</span>
              {% endif %}
              <i class=\"material-icons\"></i>
            </button>
          </h2>
        </div>

        <div id=\"{{ child.vars.id }}_accordion\" class=\"collapse{% if isExpanded %} show{% endif %}\" aria-labelledby=\"{{ child.vars.id }}_accordion_header\" {% if display_one %}data-parent=\"#{{ form.vars.id }}\"{% endif %}>
          <div class=\"card-body\">
            {% set childAttr = {class: \x27accordion-sub-form\x27} %}
            {{ form_widget(child, {attr: childAttr}) }}
            {{ form_errors(child) }}
          </div>
        </div>
      </div>
      {% set firstChild = false %}
      {% endif %}
    {% endfor %}

    {# Display rest of children that may have not been rendered because they were not compound forms, like token hidden field for example #}
    {{ form_rest(form) }}
  </div>
{%- endblock -%}

{% block button_collection_widget %}
  {%- set attr = attr|merge({
    class: (attr.class|default(\x27\x27) ~ \x27 form-group btn-collection btn-toolbar\x27)|trim,
    role: \x27group\x27,
    style: \x27justify-content: \x27 ~ justify_content,
  }) -%}
  <div {{ block(\x27widget_attributes\x27) }}>
    {% for group, buttons in button_groups %}
      <div class=\"{% if use_button_groups %}btn-group {% endif %}group-{{ group }}\">
        {# Render inline actions #}
        {% set inlineButtonsLimit = form.vars.inline_buttons_limit %}
        {% for button in buttons %}
          {% set action = attribute(form, button) %}
          {% if inlineButtonsLimit is same as(null) or loop.index <= inlineButtonsLimit %}
            {# Remove labels from inline elements if they are not forced #}
            {% if form.vars.use_inline_labels %}
              {% set actionLabel = action.vars.label %}
            {% else %}
              {% set actionLabel = \x27\x27 %}
            {% endif %}
            {{ form_widget(action, {label: actionLabel}) }}
          {% endif %}
        {% endfor %}

        {# Render remaining actions in dropdown #}
        {% if inlineButtonsLimit is not same as(null) and buttons|length > inlineButtonsLimit %}
          <a id=\"{{ form.vars.id }}_dropdown\" class=\"btn btn-link dropdown-toggle dropdown-toggle-dots dropdown-toggle-split no-rotate\"
             data-toggle=\"dropdown\"
             aria-haspopup=\"true\"
             aria-expanded=\"false\"
          >
          </a>
          <div class=\"dropdown-menu\">
            {% set remainingButtons = buttons|slice(inlineButtonsLimit) %}
            {% for button in remainingButtons %}
              {% set action = attribute(form, button) %}
              {{ form_widget(action, {attr: {
                class: \x27dropdown-item \x27 ~ action.vars.attr.class|default(\x27\x27)|trim,
              }}) }}
            {% endfor %}
          </div>
        {% endif %}
      </div>
    {% endfor %}
  </div>
{% endblock %}

{%- block card_row -%}
  {% if label_subtitle is defined and label_subtitle is not empty %}
    {% set cardSubtitle = label_subtitle %}
  {% endif %}
  <div class=\"card\">
    {{ form_label(form, null, {label_tag_name: \x27h3\x27, label_attr: {class: \x27card-header\x27}, required: false, label_subtitle: null}) }}
    <div class=\"card-body\">
      {# Subtitle is rendered insiade the card body to prevent padding offsets #}
      {% if cardSubtitle is defined %}
        <p class=\"subtitle\">{{ cardSubtitle|raw(\x27html\x27) }}</p>
      {% endif %}

      <div class=\"form-wrapper\">
        {{ form_errors(form) }}
        {{ form_widget(form) }}
      </div>
    </div>
  </div>
{% endblock %}

{% block avatar_url_row %}
  {{ form_row(form, {attr: attr}) }}

  <div class=\"form-group row\">
    <label class=\"form-control-label\"></label>
    <div class=\"col-sm\">
      <img class=\"img-thumbnail clickable-avatar\" src=\"{{ form.parent.vars.value.avatar_url }}\" alt=\"\">
    </div>
  </div>
{% endblock %}

{% block change_password_row %}
  <div class=\"form-group row\">
    <label class=\"form-control-label\">
      {{ \x27Password\x27|trans({}, \x27Admin.Global\x27) }}
    </label>
    <div class=\"col-sm\">
      {# \"Change password\" button #}
      {{ form_row(form.children.change_password_button) }}

      <div class=\"card card-body js-change-password-block d-none\">
        {# Current password input #}
        {{ form_row(form.children.old_password) }}

        {# New password first input #}
        {# New password second input (confirmation) #}
        {{ form_row(form.children.new_password) }}

        <div class=\"form-group row\">
          <label class=\"form-control-label\"></label>
          <div class=\"col-sm\">
            {{ form_widget(form.children.generated_password) }}
          </div>
          <div class=\"col-sm\">
            {{ form_widget(form.children.generate_password_button) }}
          </div>
        </div>
        {{ form_row(form.children.cancel_button) }}

        {# Password strength feedback messages - used in JS #}
        <div class=\"js-password-strength-feedback d-none\">
          <span class=\"strength-low\">{{ \x27Invalid\x27|trans({}, \x27Admin.Advparameters.Help\x27) }}</span>
          <span class=\"strength-medium\">{{ \x27Okay\x27|trans({}, \x27Admin.Advparameters.Help\x27) }}</span>
          <span class=\"strength-high\">{{ \x27Good\x27|trans({}, \x27Admin.Advparameters.Help\x27) }}</span>
          <span class=\"strength-extreme\">{{ \x27Fabulous\x27|trans({}, \x27Admin.Advparameters.Help\x27) }}</span>
        </div>
      </div>
    </div>
  </div>
{% endblock %}

{%- block price_reduction_widget -%}
  {% set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 reduction-widget row\x27)|trim}) %}
  <div {{ block(\x27widget_attributes\x27) }}>
    {% for child in form.children %}
      {% with {row_attr: child.vars.row_attr|merge({class: (child.vars.row_attr.class|default(\x27\x27) ~ \x27 col col-md-3\x27)|trim})} %}
      <div {{ block(\x27row_attributes\x27) }}>
      {% endwith %}
        {{ form_widget(child) }}
        {{ form_errors(child) }}
      </div>
    {% endfor -%}
  </div>
{%- endblock -%}

{% block image_with_preview_widget %}
  {% if data is defined and data is not empty %}
    <div>
      {% for preview_image in data %}
{# Checking for is defined because they file might come from submitted form when thera are too many thumbnails and an errro #}
{# in that case data will be a file based on symfony and not a image array formatted for this form #}
        {% if preview_image.image_path is defined %}
          {% if can_be_deleted %}
            <figure class=\"figure\">
              <img src=\"{{ preview_image.image_path }}\" class=\"figure-img img-fluid img-thumbnail\">
              <figcaption class=\"figure-caption\">
                {% if show_size %}
                  <p>{{ \x27File size\x27|trans({}, \x27Admin.Advparameters.Feature\x27) }} {{ preview_image.size }}</p>
                {% endif %}
                <button class=\"btn btn-outline-danger btn-sm js-form-submit-btn\"
                        data-form-submit-url=\"{{ preview_image.delete_path }}\"
                >
                  <i class=\"material-icons\">
                    delete_forever
                  </i>
                  {{ \x27Delete\x27|trans({}, \x27Admin.Actions\x27) }}
                </button>
              </figcaption>
            </figure>
          {% else %}
            {% for preview_image in data %}
              <figure class=\"figure\">
                <img src=\"{{ preview_image.image_path }}\" class=\"figure-img img-fluid img-thumbnail\">
                {% if show_size %}
                  <figcaption class=\"figure-caption\">{{ \x27File size\x27|trans({}, \x27Admin.Advparameters.Feature\x27) }} {{ preview_image.size }}</figcaption>
                {% endif %}
              </figure>
            {% endfor %}
          {% endif %}
      {% endif %}
      {% endfor %}
    </div>
  {% endif %}
  {{ block(\x27file_widget\x27) }}
{% endblock image_with_preview_widget %}

{% block tagged_item_collection_widget %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 pstaggerTagsWrapper d-block\x27)|trim}) -%}
  {%- set attr = attr|merge({\x27data-prototype\x27: form_row(prototype), \x27data-prototype-name\x27: prototype.vars.name}) -%}
  <div {{ block(\x27widget_attributes\x27) }}>
    {{ block(\x27form_rows\x27) }}
  </div>
{% endblock %}

{% block tagged_item_collection_entry_row %}
  {%- set attr = attr|merge({class: (attr.class|default(\x27\x27) ~ \x27 pstaggerTag tag-item\x27)|trim}) -%}
  <span {{ block(\x27widget_attributes\x27) }}>
    {{ form_widget(form.name) }}
    {% set isRemovable = form.parent.vars.allow_delete %}
    <a class=\"pstaggerClosingCross remove-tag-item {% if not isRemovable %}d-none{% endif %}\">x</a>
    {{ form_widget(form.id) }}
  </span>
{% endblock %}
", "@PrestaShop/Admin/TwigTemplateForm/prestashop_ui_kit_base.html.twig", "C:\\xampp\\htdocs\\prestashop\\src\\PrestaShopBundle\\Resources\\views\\Admin\\TwigTemplateForm\\prestashop_ui_kit_base.html.twig");
    }
}
