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

$image = '';
if(isset($content['field_image'])) {
    $image = $content['field_image'];
}
?>
<div class="container about-container">
    <div class="row">
        <div class="col-md-8">

            <?php if(isset($content['field_description'])): print render($content['field_description']); endif;?>
        </div>
        <div class="col-md-4">
            <div class="featured-box featured-box-primary">
                <div class="box-content">
                    <?php if(isset($content['field_label_image'])):?>
                    <h4 class="text-uppercase heading-text-color"><?php print render($content['field_label_image']);?></h4>
                    <?php endif;?>
                    <ul class="thumbnail-gallery" data-plugin-lightbox data-plugin-options='{"delegate": "a", "type": "image", "gallery": {"enabled": true}}'>
                        <?php foreach($image as $key => $value):?>

                            <?php if(isset($key) && is_numeric($key)):?>
                                <li>
                                    <a title="Benefits 1" href="<?php print file_create_url($value['#item']['uri']);?>">
                                    <span class="thumbnail mb-none">
                                        <img width="75" height="75" src="<?php print file_create_url($value['#item']['uri']);?>" alt="">
                                    </span>
                                    </a>
                                </li>
                            <?php endif;?>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
