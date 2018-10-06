<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
$columns = '';
$columns_number = '';
if(isset($options['column'])){
    $columns = $options['column'];
    if($columns == '2'){
        $columns_number = 'columns2';
    }elseif($columns == '3'){
        $columns_number = 'columns3';
    }elseif($columns == '4'){
        $columns_number = 'columns4';
    }elseif($columns == '5'){
        $columns_number = 'columns5 hide-addtolinks';
    }elseif($columns == '6'){
        $columns_number = 'columns6';
    }elseif($columns == '7'){
        $columns_number = 'columns7';
    }elseif($columns == '8'){
        $columns_number = 'columns8';
    }
}
$layout_mode = '';
if(isset($options['layout_mode'])){
    $layout_mode = $options['layout_mode'];
}
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php if(isset($layout_mode) && $layout_mode == 'slide'):?>

    <div class="owl-carousel owl-theme" data-plugin-options='{"items":<?php print $options['number_item'];?>, "margin":20, "nav":true, "dots": false, "loop": false}'>
        <?php foreach($rows as $row):?>
            <?php print $row; ?>
        <?php endforeach;?>
    </div>
<?php elseif(isset($layout_mode) && $layout_mode == 'columns'):?>
    <div class="products-column">
        <?php foreach($rows as $row):?>
            <?php print $row; ?>
        <?php endforeach;?>
    </div>
<?php else:?>
<ul class="products-grid <?php print $columns_number;?>">
    <?php foreach($rows as $row):?>
        <?php print $row; ?>
    <?php endforeach;?>
</ul>
<?php endif;?>