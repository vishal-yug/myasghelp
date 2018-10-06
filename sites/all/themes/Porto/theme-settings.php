<?php
/**
 * Implements hook_form_system_theme_settings_alter()
 */
function porto_form_system_theme_settings_alter(&$form, &$form_state) {
  
  // Main settings wrapper
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#default_tab' => 'defaults',
    '#weight' => '-10',
    '#attached' => array(
      'css' => array(drupal_get_path('theme', 'porto') . '/css/theme-settings.css'),
    ),
  );

  // General
  $form['options']['general'] = array(
    '#type' => 'fieldset',
    '#title' => t('General'),
  );
        
    // Breadcrumbs
    $form['options']['general']['breadcrumbs'] = array(
      '#type' => 'checkbox',
      '#title' => t('Breadcrumbs'),
      '#default_value' => theme_get_setting('breadcrumbs'),
    );

    // Contact us
    $form['options']['general']['contact_us'] = array(
        '#type' => 'textfield',
        '#title' => t('Title Contact us'),
        '#default_value' => theme_get_setting('contact_us'),
    );
    $form['options']['general']['contact_us_link'] = array(
        '#type' => 'textfield',
        '#title' => t('Link Contact us'),
        '#default_value' => theme_get_setting('contact_us_link'),
    );
    // Phone Number
    $form['options']['general']['phone_number'] = array(
        '#type' => 'textfield',
        '#title' => t('Phone Number'),
        '#default_value' => theme_get_setting('phone_number'),
    );

    // Menu
    $form['options']['menu'] = array(
        '#type' => 'fieldset',
        '#title' => t('Menu'),
    );
    $form['options']['menu']['menu_title'] = array(
        '#type' => 'textfield',
        '#title' => 'Title Menu Vertical',
        '#default_value' => theme_get_setting('menu_title'),
    );

    // Site Layout
    $form['options']['menu']['menu_layout'] = array(
        '#type' => 'select',
        '#title' => t('Menu Layout'),
        '#default_value' => theme_get_setting('menu_layout'),
        '#options' => array(
            'none' => t('None'),
            'horizontal' => t('Horizontal'),
            'vertical' => t('Vertical'),
        ),
    );
  // CSS
  $form['options']['css'] = array(
    '#type' => 'fieldset',
    '#title' => t('CSS'),
  );
  
    // User CSS
      $form['options']['css']['user_css'] = array(
        '#type' => 'textarea',
        '#title' => t('Add your own CSS'),
        '#default_value' => theme_get_setting('user_css'),
      );


}
?>