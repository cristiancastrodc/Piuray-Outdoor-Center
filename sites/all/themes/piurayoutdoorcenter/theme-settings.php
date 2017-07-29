<?php
function piurayoutdoorcenter_form_system_theme_settings_alter(&$form, $form_state) {
  $default_file_dir = 'public://backgrounds';
  $folder = file_prepare_directory($default_file_dir, FILE_CREATE_DIRECTORY);
  $settings_theme = $form_state['build_info']['args'][0];

  if ($folder) {
    $water_bg = theme_get_setting('water_bg');
    // BUG: Force file to be permanent.
    if (!empty($water_bg)) {
      _fix_permanent_image('water_bg', $settings_theme);
    }
    $form['water_bg'] = array(
      '#type'               => 'managed_file',
      '#title'              => t('Water Background'),
      '#default_value'      => $water_bg,
      '#progress_message'   => t('Please wait...'),
      '#progress_indicator' => 'bar',
      '#upload_location'    => $default_file_dir,
      '#upload_validators'  => array(
        'file_validate_extensions' => array('png jpg jpeg'),
        'file_validate_image_resolution' => array('1920x1080', '1200x600'),
      ),
    );
  }

}

function _fix_permanent_image($image, $theme) {
  $fid = theme_get_setting($image, $theme);
  if ($fid > 0) {
    $file = file_load($fid);
    if (is_object($file) && $file->status == 0) {
      $file->status = FILE_STATUS_PERMANENT;
      file_save($file);
      file_usage_add($file, $theme, 'theme', 1);
      drupal_set_message($image . ' saved permanently.', 'status');
    }
  }
}
