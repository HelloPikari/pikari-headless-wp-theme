<?php

new AcfTextarea();

class AcfTextarea
{
  public function __construct()
  {
    add_action('acf/render_field_settings',     [$this, 'addSettingsForWysiwyg']);
    add_filter('acf/render_field/type=wysiwyg', [$this, 'preRenderWysiwygField'], 0, 1);
  }

  /* ---
    Functions
  --- */

  public function addSettingsForWysiwyg($field)
  {
    if ($field['type'] !== 'wysiwyg') return;

    acf_render_field_setting($field, [
      'label' => __('Limit height of TinyMCE?', 'lang'),
      'name'  => 'wpf_tinymce_low',
      'type'  => 'true_false',
      'ui'    => 1,
    ], true);
  }

  public function preRenderWysiwygField($field)
  {
    if (!isset($field['wpf_tinymce_low']) || !$field['wpf_tinymce_low']) return;

    ob_start();
    add_filter('acf/render_field/type=wysiwyg', [$this, 'afterRenderWysiwygField'], 20, 1);
  }

  public function afterRenderWysiwygField($field)
  {
    remove_filter('acf/render_field/type=wysiwyg', [$this, 'afterRenderWysiwygField'], 20, 1);

    $output = ob_get_contents();
    $output = str_replace('height:300px;', 'height:100px;', $output);
    ob_end_clean();
    echo $output;
  }
}