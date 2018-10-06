<?php

/**
 * @file
 * Defines the style plugin for the Art Portfolio
 */
class art_portfolio_plugin_style_portfolio extends views_plugin_style {

  function option_definition() {
    $options = parent::option_definition();
    $options['column'] = array('default' => 2);
    $options['wish_list'] = array('default' => 0);
    $options['layout_mode'] = array('default' => 'grid');
    $options['number_item'] = array('default' => '4');
    return $options;
  }

  function options_form(&$form, &$form_state) {
    parent::options_form($form, $form_state);
    $form['wrapper_class'] = array(
        '#type' => 'textfield',
        '#title' => t('Wrapper Class'),
        '#default_value' => $this->options['wrapper_class']
    );
	$form['list_class'] = array(
        '#type' => 'textfield',
        '#title' => t('List Class'),
        '#default_value' => $this->options['list_class']
    );
	$form['use_heading'] = array(
        '#type' => 'select',
        '#title' => t('Use Heading'),
        '#options' => array(
            0 => 'No',
            1 => 'Yes',
          ),
        '#default_value' => $this->options['use_heading']
    );
	$form['style_heading'] = array(
        '#type' => 'select',
        '#title' => t('Style Options'),
        '#options' => array(
            'style1' => 'Style 1',
            'style2' => 'Style 2',
            'style3' => 'Style 3',
            'style4' => 'Style 4',
            'style5' => 'Style 5',
            'style6' => 'Style 6',
            'style7' => 'Style 7',
            'style8' => 'Style 8',
            'style9' => 'Style 9',
            'style10' => 'Style 10',
            'style11' => 'Style 11',
          ),
        '#default_value' => $this->options['style_heading'],
		'#states' => array (
          'visible' => array(
            'select[name="style_options[use_heading]"]' => array('value' => 1)
          )
        )
    );
	$form['heading'] = array(
        '#type' => 'textfield',
        '#title' => t('Heading'),
        '#default_value' => $this->options['heading'],
		'#states' => array (
          'visible' => array(
            'select[name="style_options[use_heading]"]' => array('value' => 1)
          )
        )
    );
	$form['description'] = array(
        '#type' => 'textarea',
        '#title' => t('Description'),
        '#default_value' => $this->options['description'],
		'#states' => array (
          'visible' => array(
            'select[name="style_options[use_heading]"]' => array('value' => 1)
          )
        )
    );
    $form['layout_mode'] = array(
        '#type' => 'select',
        '#title' => t('Layout Mode'),
        '#options' => array('grid'=>'Grid', 'slide'=>'Slide', 'columns'=>'Columns'),
        '#default_value' => $this->options['layout_mode']
    );
    $form['column'] = array(
        '#type' => 'select',
        '#title' => t('Column Number'),
        '#options' => array(2=>2, 3=>3, 4=>4, 5=>5, 6=>6, 7=>7,8=>8),
        '#default_value' => $this->options['column']
    );

      $form['number_item'] = array(
          '#type' => 'select',
          '#title' => t('Number Item'),
          '#options' => array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5, 6=>6,7=>7),
          '#default_value' => $this->options['number_item']
      );

    $form['wish_list'] = array(
          '#type' => 'select',
          '#title' => t('Use Wishlist and Compare'),
          '#options' => array(
              0 => 'No',
              1 => 'Yes',
          ),
          '#default_value' => $this->options['wish_list']
      );



  }

}