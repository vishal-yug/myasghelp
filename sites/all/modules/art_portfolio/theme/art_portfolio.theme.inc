<?php

/**
 * Preprocess function to build the art views portfolio
 * template_preprocess_art_portfolio
 */
function template_preprocess_views_art_portfolio(&$vars) {
  //template_preprocess_views_art_grid($vars);
  $view = $vars['view'];
  $options = $view->style_plugin->options;
  $vars['options'] = $options;
  $vars['view_id'] = drupal_html_class($view->name . '-' . $view->current_display); //drupal_html_id('page_art_portfolio');
  $vars['filter_id'] = drupal_html_id('art_portfolio_filter');

}