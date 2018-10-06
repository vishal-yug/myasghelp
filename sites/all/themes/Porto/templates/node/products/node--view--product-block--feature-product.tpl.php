<?php
$thumbnail = '';
$image_hover = '';
if(!empty($node->field_thumbnail['und'])){
    $thumbnail = image_style_url('thumbnail_300x400',$node->field_thumbnail['und'][0]['uri']);
}
if(!empty($node->field_image_hover['und'])){
    $image_hover = image_style_url('thumbnail_300x400',$node->field_image_hover['und'][0]['uri']);
}
?>
<div class="product product-sm">
        <figure class="product-image-area">
            <a href="<?php print $node_url;?>" title="Product Name" class="product-image">
                <?php if(!empty($thumbnail)):?>
                    <img src="<?php print $thumbnail;?>" alt="Product Name">
                <?php endif;?>
                <?php if(!empty($image_hover)):?>
                    <img src="<?php print $image_hover;?>" alt="Product Name" class="product-hover-image">
                <?php endif;?>
            </a>

        </figure>
        <div class="product-details-area">
            <h2 class="product-name"><a href="<?php print $node_url;?>" title="Product Name"><?php print $title;?></a></h2>
            <?php if(isset($content['field_rating'])):?>
            <div class="product-ratings">
                <?php print render($content['field_rating']);?>
            </div>
            <?php endif;?>
            <div class="product-price-box">
                <?php if(isset($content['product:field_regular_price'])):?>
                    <div class="old-price"><?php print render($content['product:field_regular_price']);?></div>
                <?php endif;?>
                <?php if(isset($content['product:commerce_price'])):?>
                <div class="product-price"><?php print render($content['product:commerce_price']);?></div>
                <?php endif;?>
            </div>
        </div>
</div>