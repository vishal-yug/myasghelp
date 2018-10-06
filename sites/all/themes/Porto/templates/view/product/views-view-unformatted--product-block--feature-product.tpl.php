<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
    <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php
$array_chunk = array_chunk($rows,count($rows)/2);
?>
<div class="owl-carousel owl-theme" data-plugin-options='{"items":1, "margin": 5, "dots": false, "nav": true}'>
<?php foreach ($array_chunk as $id => $row): ?>
        <div>
            <?php foreach ($row as $value):?>
                <?php print $value; ?>
            <?php endforeach;?>
        </div>
<?php endforeach; ?>
</div>
