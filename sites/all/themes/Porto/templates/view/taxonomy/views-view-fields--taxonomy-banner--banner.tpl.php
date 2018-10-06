<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
$banner = array();
if(!empty($row->field_field_banner)){
    $banner = $row->field_field_banner;
}
?>
    <h3><strong><?php if(isset($fields['name'])): print $fields['name']->content; endif;?></strong></h3>
    <?php if(count($banner) > 1):?>
    <div class="owl-carousel boxed-banner-carosel owl-theme" data-plugin-options='{"items":1}'>
        <?php foreach($banner as $key => $value):?>
        <div class="boxed-banner">
            <img src="<?php print file_create_url($value['raw']['uri']);?>" alt="Banner">
        </div>
        <?php endforeach;?>
    </div>
    <?php else:?>
    <?php if(!empty($banner)):?>
    <div class="boxed-banner">
        <img src="<?php print file_create_url($banner[0]['raw']['uri']);?>" alt="Banner">
    </div>
    <?php endif;?>
    <?php endif;?>
<?php unset($fields['name']);?>
<?php unset($fields['field_banner']);?>
<?php foreach ($fields as $id => $field): ?>
    <?php if (!empty($field->separator)): ?>
        <?php print $field->separator; ?>
    <?php endif; ?>

    <?php print $field->wrapper_prefix; ?>
    <?php print $field->label_html; ?>
    <?php print $field->content; ?>
    <?php print $field->wrapper_suffix; ?>
<?php endforeach; ?>