<?php
$thumbnail = '';
$image_hover = '';
if(!empty($node->field_thumbnail['und'])){
    $thumbnail = file_create_url($node->field_thumbnail['und'][0]['uri']);
}
if(!empty($node->field_image_hover['und'])){
    $image_hover = file_create_url($node->field_image_hover['und'][0]['uri']);
}
$product_configure = array();
if(!empty($node->field_product['und'])){
    $product_configure = $node->field_product['und'];
}
if(count($product_configure) != 1){
    $product = commerce_product_load($node->field_product['und'][0]['product_id']);
    $id = $product->product_id;
}
?>
<div class="product">
    <figure class="product-image-area">
        <a href="<?php print $node_url;?>" title="Product Name" class="product-image">
            <?php if(!empty($thumbnail)):?>
                <img src="<?php print $thumbnail;?>" alt="Product Name">
            <?php endif;?>
            <?php if(!empty($image_hover)):?>
                <img src="<?php print $image_hover;?>" alt="Product Name" class="product-hover-image">
            <?php endif;?>
        </a>
        <a href="<?php print $node_url;?>" class="product-quickview">
            <i class="fa fa-share-square-o"></i>
            <span><?php print t('View');?></span>
        </a>
        <?php if(isset($content['product:field_regular_price']) && !empty($content['product:field_regular_price']['#items'])):?>
        <div class="product-label"><span class="discount"><?php print t('Sale');?></span></div>
        <?php endif;?>
        <?php if(isset($content['field_product_attributes'])):?>
        <div class="product-label"><span class="new"><?php print strip_tags(render($content['field_product_attributes']));?></span></div>
        <?php endif;?>
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
                <span class="old-price"><?php print render($content['product:field_regular_price']);?></span>
            <?php endif;?>
            <?php if(isset($content['product:commerce_price'])):?>
                <span class="product-price"><?php print render($content['product:commerce_price']);?></span>
            <?php endif;?>
        </div>

        <div class="product-actions">
            <?php if(module_exists('flag')): ?>
                <?php print flag_create_link('shop', $node->nid); ?>
            <?php endif; ?>
            <div style="display: none">
                <?php print render($content['field_product']); ?>
            </div>
            <?php if(count($product_configure) > 1):?>
                <a href="<?php print $node_url;?>" class="addtocart" title="Add to Cart">
                    <i class="fa fa-shopping-cart"></i>
                    <span><?php print t('Add to cart');?></span>
                </a>
            <?php else:?>
                <div class="v-cart">
                    <?php print render($content['field_product']); ?>
                </div>
            <?php endif;?>
            <?php if($wishlist != 0):?>
                <?php if(module_exists('flag')): ?>
                    <?php print flag_create_link('compare', $node->nid); ?>
                <?php endif; ?>
            <?php endif;?>
        </div>
    </div>
</div>

