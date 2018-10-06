<?php

/**
 * Implementation of hook_views_default_views().
 */
function art_portfolio_views_default_views() {

    $view = new view();
    $view->name = 'product_page';
    $view->description = '';
    $view->tag = 'default';
    $view->base_table = 'node';
    $view->human_name = 'Product Page';
    $view->core = 7;
    $view->api_version = '3.0';
    $view->disabled = FALSE; /* Edit this to true to make a default view disabled initially */

    /* Display: Master */
    $handler = $view->new_display('default', 'Master', 'default');
    $handler->display->display_options['title'] = 'Product Page';
    $handler->display->display_options['use_more_always'] = FALSE;
    $handler->display->display_options['access']['type'] = 'perm';
    $handler->display->display_options['cache']['type'] = 'none';
    $handler->display->display_options['query']['type'] = 'views_query';
    $handler->display->display_options['exposed_form']['type'] = 'basic';
    $handler->display->display_options['pager']['type'] = 'full';
    $handler->display->display_options['pager']['options']['items_per_page'] = '10';
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '4';
    $handler->display->display_options['row_plugin'] = 'node';
    /* Field: Content: Title */
    $handler->display->display_options['fields']['title']['id'] = 'title';
    $handler->display->display_options['fields']['title']['table'] = 'node';
    $handler->display->display_options['fields']['title']['field'] = 'title';
    $handler->display->display_options['fields']['title']['label'] = '';
    $handler->display->display_options['fields']['title']['alter']['word_boundary'] = FALSE;
    $handler->display->display_options['fields']['title']['alter']['ellipsis'] = FALSE;
    /* Sort criterion: Content: Post date */
    $handler->display->display_options['sorts']['created']['id'] = 'created';
    $handler->display->display_options['sorts']['created']['table'] = 'node';
    $handler->display->display_options['sorts']['created']['field'] = 'created';
    $handler->display->display_options['sorts']['created']['order'] = 'DESC';
    /* Filter criterion: Content: Published */
    $handler->display->display_options['filters']['status']['id'] = 'status';
    $handler->display->display_options['filters']['status']['table'] = 'node';
    $handler->display->display_options['filters']['status']['field'] = 'status';
    $handler->display->display_options['filters']['status']['value'] = 1;
    $handler->display->display_options['filters']['status']['group'] = 1;
    $handler->display->display_options['filters']['status']['expose']['operator'] = FALSE;
    /* Filter criterion: Content: Type */
    $handler->display->display_options['filters']['type']['id'] = 'type';
    $handler->display->display_options['filters']['type']['table'] = 'node';
    $handler->display->display_options['filters']['type']['field'] = 'type';
    $handler->display->display_options['filters']['type']['value'] = array(
        'products' => 'products',
    );

    /* Display: Page 2 Columns */
    $handler = $view->new_display('page', 'Page 2 Columns', 'page');
    $handler->display->display_options['defaults']['style_plugin'] = FALSE;
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '2';
    $handler->display->display_options['defaults']['style_options'] = FALSE;
    $handler->display->display_options['defaults']['row_plugin'] = FALSE;
    $handler->display->display_options['row_plugin'] = 'node';
    $handler->display->display_options['defaults']['row_options'] = FALSE;
    $handler->display->display_options['path'] = 'category-2col';

    /* Display: Page 3 Columns */
    $handler = $view->new_display('page', 'Page 3 Columns', 'page_1');
    $handler->display->display_options['defaults']['style_plugin'] = FALSE;
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '3';
    $handler->display->display_options['defaults']['style_options'] = FALSE;
    $handler->display->display_options['defaults']['row_plugin'] = FALSE;
    $handler->display->display_options['row_plugin'] = 'node';
    $handler->display->display_options['defaults']['row_options'] = FALSE;
    $handler->display->display_options['path'] = 'category-3col';

    /* Display: Page 4 Columns */
    $handler = $view->new_display('page', 'Page 4 Columns', 'page_2');
    $handler->display->display_options['defaults']['style_plugin'] = FALSE;
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '4';
    $handler->display->display_options['defaults']['style_options'] = FALSE;
    $handler->display->display_options['defaults']['row_plugin'] = FALSE;
    $handler->display->display_options['row_plugin'] = 'node';
    $handler->display->display_options['defaults']['row_options'] = FALSE;
    $handler->display->display_options['path'] = 'category-4col';

    /* Display: Page 5 Columns */
    $handler = $view->new_display('page', 'Page 5 Columns', 'page_3');
    $handler->display->display_options['defaults']['style_plugin'] = FALSE;
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '5';
    $handler->display->display_options['defaults']['style_options'] = FALSE;
    $handler->display->display_options['defaults']['row_plugin'] = FALSE;
    $handler->display->display_options['row_plugin'] = 'node';
    $handler->display->display_options['defaults']['row_options'] = FALSE;
    $handler->display->display_options['path'] = 'category-5col';

    /* Display: Page 6 Columns */
    $handler = $view->new_display('page', 'Page 6 Columns', 'page_4');
    $handler->display->display_options['defaults']['style_plugin'] = FALSE;
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '6';
    $handler->display->display_options['defaults']['style_options'] = FALSE;
    $handler->display->display_options['defaults']['row_plugin'] = FALSE;
    $handler->display->display_options['row_plugin'] = 'node';
    $handler->display->display_options['defaults']['row_options'] = FALSE;
    $handler->display->display_options['path'] = 'category-6col';

    /* Display: Page 7 Columns */
    $handler = $view->new_display('page', 'Page 7 Columns', 'page_5');
    $handler->display->display_options['defaults']['style_plugin'] = FALSE;
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '7';
    $handler->display->display_options['defaults']['style_options'] = FALSE;
    $handler->display->display_options['defaults']['row_plugin'] = FALSE;
    $handler->display->display_options['row_plugin'] = 'node';
    $handler->display->display_options['defaults']['row_options'] = FALSE;
    $handler->display->display_options['path'] = 'category-7col';

    /* Display: Page 8 Columns */
    $handler = $view->new_display('page', 'Page 8 Columns', 'page_6');
    $handler->display->display_options['defaults']['style_plugin'] = FALSE;
    $handler->display->display_options['style_plugin'] = 'art_portfolio';
    $handler->display->display_options['style_options']['column'] = '8';
    $handler->display->display_options['defaults']['style_options'] = FALSE;
    $handler->display->display_options['defaults']['row_plugin'] = FALSE;
    $handler->display->display_options['row_plugin'] = 'node';
    $handler->display->display_options['defaults']['row_options'] = FALSE;
    $handler->display->display_options['path'] = 'category-8col';


	$views[$view->name] = $view;
	return $views;
}