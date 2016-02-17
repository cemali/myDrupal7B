<?php
/**
 * @file
 * theme-settings.php
 *
 * Provides theme settings for Bootstrap based themes when admin theme is not.
 *
 * @see theme/settings.inc
 */

/**
 * Include common Bootstrap functions.
 */
include_once dirname(__FILE__) . '/theme/common.inc';

/**
 * Implements hook_form_FORM_ID_alter().
 */
function my_bootstrap_subtheme_form_system_theme_settings_alter(&$form, $form_state, $form_id = NULL) { //*
  // Work-around for a core bug affecting admin themes.
  // @see httpss://drupal.org/node/943212
  if (isset($form_id)) {
    return;
  }
  // Include theme settings file.
  my_bootstrap_subtheme_include('my_bootstrap_subtheme', 'theme/settings.inc'); //*
  // Alter theme settings form.
  _my_bootstrap_subtheme_settings_form($form, $form_state); //* 
}
