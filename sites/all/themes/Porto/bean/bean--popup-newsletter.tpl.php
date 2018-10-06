<?php
/**
 * @file
 * Default theme implementation for beans.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) entity label.
 * - $url: Direct url of the current entity if specified.
 * - $page: Flag for the full page state.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-{ENTITY_TYPE}
 *   - {ENTITY_TYPE}-{BUNDLE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */

$background = '';
if(isset($content['field_background'])) {
    $background = file_create_url($content['field_background']['#items'][0]['uri']);
}
$logo = '';
if(isset($content['field_logo'])){
    $logo = file_create_url($content['field_logo']['#items'][0]['uri']);
}
?>
<div class="newsletter-popup mfp-hide" id="newsletter-popup-form" style="background-image: url(<?php print $background;?>)">
    <div class="newsletter-popup-content">
        <img src="<?php print $logo;?>" alt="Logo" class="img-responsive center-block">
        <?php if(isset($content['field_description'])): print render($content['field_description']); endif;?>
        <?php if(module_exists('simplenews')):?>
        <?php $block = module_invoke('simplenews', 'block_view', 69);
        print render($block['content']);?>
        <?php endif;?>
    </div><!-- End .newsletter-popup-content -->
</div>