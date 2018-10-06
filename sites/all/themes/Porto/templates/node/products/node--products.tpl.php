<?php
$thumbnail = '';
$image = array();
if(!empty($node->field_image['und'])){
    $image = $node->field_image['und'];
}
if(!empty($node->field_image['und'])){
    $thumbnail = file_create_url($node->field_image['und'][0]['uri']);
}
global $base_url;
?>
<div class="product-view">
<div class="product-essential single-product">
    <div class="row">
        <div class="product-img-box col-sm-5">
            <?php if(!empty($thumbnail)):?>
            <div class="product-img-box-wrapper">
                <div class="product-img-wrapper">
                    <img id="product-zoom" src="<?php print image_style_url('thumbnail_450x599',$node->field_image['und'][0]['uri']);?>" data-zoom-image="<?php print $thumbnail;?>" alt="Product main image">
                </div>

                <a href="#" class="product-img-zoom" title="Zoom">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
            </div>
            <?php endif;?>
            <div class="owl-carousel manual" id="productGalleryThumbs">
            <?php foreach($image as $key => $value):?>
                <div class="product-img-wrapper">
                    <a href="#" data-image="<?php print file_create_url($value['uri']);?>" data-zoom-image="<?php print file_create_url($value['uri']);?>" class="product-gallery-item">
                        <img src="<?php print image_style_url('thumbnail_160x213',$value['uri']);?>" alt="product">
                    </a>
                </div>
                <?php endforeach;?>
            </div>
        </div>
        <div class="product-details-box col-sm-7">
            <div class="product-nav-container">

                <?php if(isset($content['flippy_pager']['#list']['prev']) && $content['flippy_pager']['#list']['prev'] != False):?>
                <div class="product-nav product-nav-prev">
                    <a href="<?php print $base_url.'/'.drupal_get_path_alias('node/'.$content['flippy_pager']['#list']['prev']['nid']);?>" title="Previous Product">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <?php
                    $nid_prev = $content['flippy_pager']['#list']['prev']['nid'];
                    $node_load_prev = node_load($nid_prev);
                    $thumbnail_prev = $node_load_prev->field_thumbnail['und'][0]['uri'];
                    ?>
                    <div class="product-nav-dropdown">
                        <img src="<?php print file_create_url($thumbnail_prev);?>" alt="Product">
                        <h4><?php print $node_load_prev->title;?></h4>
                    </div>
                </div>
                <?php endif;?>
                <?php if(isset($content['flippy_pager']['#list']['next']) && $content['flippy_pager']['#list']['next'] != False):?>
                <div class="product-nav product-nav-next">
                    <a href="<?php print $base_url.'/'.drupal_get_path_alias('node/'.$content['flippy_pager']['#list']['next']['nid']);?>" title="Next Product">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                    <?php
                    $nid_next = $content['flippy_pager']['#list']['next']['nid'];
                    $node_load_next = node_load($nid_next);
                    $thumbnail_next = $node_load_next->field_thumbnail['und'][0]['uri'];
                    ?>
                    <div class="product-nav-dropdown">
                        <img src="<?php print file_create_url($thumbnail_next);?>" alt="Product">
                        <h4><?php print $node_load_next->title;?></h4>
                    </div>
                </div>
                <?php endif;?>
            </div>
            <h1 class="product-name">
                <?php print $title;?>
            </h1>

            <div class="product-rating-container">
                <?php if(isset($content['field_rating'])):?>
                <div class="product-ratings">
                    <?php print render($content['field_rating']);?>
                </div>
                <?php endif;?>
                <div class="review-link">
                    <a href="#" class="review-link-in" rel="nofollow"> <span class="count"><?php print $comment_count;?></span> <?php print t('customer review');?></a> |
                    <a id="add-review" href="javascript:void(0)" class="write-review-link" rel="nofollow"><?php print t('Add a review');?></a>
                </div>
            </div>
            <?php if(isset($content['body'])): print render($content['body']); endif;?>
            <div class="product-detail-info">
                <div class="product-price-box">
                    <?php if(isset($content['product:field_regular_price'])):?>
                        <span class="old-price"><?php print render($content['product:field_regular_price']); ?></span>
                    <?php endif;?>
                    <?php if(isset($content['product:commerce_price'])):?>
                        <span class="product-price"><?php print render($content['product:commerce_price']);?></span>
                    <?php endif;?>
                </div>
                <?php
                $stock = '';
                if(isset($content['product:commerce_stock'])){
                    $stock = $content['product:commerce_stock']['#items'][0]['value'];
                }
                ?>
                <p class="availability">
                    <span class="font-weight-semibold"><?php print t('Availability:');?></span>
                    <?php if(isset($content['product:commerce_stock']) && $stock > 0):?>
                        <?php print t('In Stock');?>
                    <?php else:?>
                        <?php print t('Out of Stock');?>
                    <?php endif;?>
                </p>
            </div>

            <div class="product-actions">
                <?php if(isset($content['field_product'])): print render($content['field_product']); endif;?>
                <div class="actions-right">
                    <?php if(module_exists('flag')): ?>
                        <?php print flag_create_link('shop', $node->nid); ?>
                    <?php endif; ?>
                    <?php if(module_exists('flag')): ?>
                        <?php print flag_create_link('compare', $node->nid); ?>
                    <?php endif; ?>

                </div>
            </div>

            <div class="product-share-box">
                <div class="addthis_inline_share_toolbox"></div>

            </div>
        </div>
    </div>
</div>
<?php
$layout_tab = '';
if(!empty($node->field_layout_tab['und'])){
    $layout_tab = $node->field_layout_tab['und'][0]['value'];
}
?>
<?php if($layout_tab == '1'):?>
<div class="tabs product-tabs">
    <ul class="nav nav-tabs">
        <?php if(isset($content['field_description'])):?>
        <li class="active">
            <a href="#product-desc" data-toggle="tab"><?php print t('Description');?></a>
        </li>
        <?php endif;?>
        <li>
            <a href="#product-add" data-toggle="tab"><?php print t('Additional');?></a>
        </li>
        <li>
            <a href="#product-tags" data-toggle="tab"><?php print t('Tags');?></a>
        </li>
        <li>
            <a id="op-reviews" class="open-review" href="#product-reviews" data-toggle="tab"><?php print t('Reviews');?></a>
        </li>
    </ul>
    <div class="tab-content">
        <?php if(isset($content['field_description'])):?>
        <div id="product-desc" class="tab-pane active">
            <?php print render($content['field_description']);?>
        </div>
        <?php endif;?>
        <?php if(isset($content['field_product_additional'])):?>
        <div id="product-add" class="tab-pane">
            <?php print render($content['field_product_additional']);?>
        </div>
        <?php endif;?>
        <div id="product-tags" class="tab-pane">
            <?php if(isset($content['field_product_brand'])):?>
            <div class="product-tags-area">
                <form action="#">
                    <div class="form-group">
                        <label><?php print t('Tags:');?></label>
                        <div class="clearfix brand-product">
                            <?php print render($content['field_product_brand']);?>
                        </div>
                    </div>
                </form>
            </div>
            <?php endif;?>
        </div>
        <div id="product-reviews" class="tab-pane">
            <?php print render($content['comments']); ?>

        </div>
    </div>
</div>
<?php elseif($layout_tab == '3'):?>
    <div class="tabs tabs-vertical tabs-left product-tabs">
        <ul class="nav nav-tabs col-sm-3 col-lg-2">
            <?php if(isset($content['field_description'])):?>
                <li class="active">
                    <a href="#product-desc" data-toggle="tab"><?php print t('Description');?></a>
                </li>
            <?php endif;?>
            <li>
                <a href="#product-add" data-toggle="tab"><?php print t('Additional');?></a>
            </li>
            <li>
                <a href="#product-tags" data-toggle="tab"><?php print t('Tags');?></a>
            </li>
            <li>
                <a id="op-reviews" class="open-review" href="#product-reviews" data-toggle="tab"><?php print t('Reviews');?></a>
            </li>
        </ul>
        <div class="tab-content">
            <?php if(isset($content['field_description'])):?>
                <div id="product-desc" class="tab-pane active">
                    <?php print render($content['field_description']);?>
                </div>
            <?php endif;?>
            <?php if(isset($content['field_product_additional'])):?>
                <div id="product-add" class="tab-pane">
                    <?php print render($content['field_product_additional']);?>
                </div>
            <?php endif;?>
            <div id="product-tags" class="tab-pane">
                <?php if(isset($content['field_product_brand'])):?>
                    <div class="product-tags-area">
                        <form action="#">
                            <div class="form-group">
                                <label><?php print t('Tags:');?></label>
                                <div class="clearfix brand-product">
                                    <?php print render($content['field_product_brand']);?>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif;?>
            </div>
            <div id="product-reviews" class="tab-pane">
                <?php print render($content['comments']); ?>

            </div>
        </div>
    </div>
<?php else:?>
<div class="panel-group produt-panel" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1One">
                    <?php print t('Description');?>
                </a>
            </h4>
        </div>
        <div id="collapse1One" class="accordion-body collapse">
            <?php if(isset($content['field_description'])):?>
            <div class="panel-body">
                <?php print render($content['field_description']);?>
            </div>
            <?php endif;?>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Two">
                    <?php print t('Additional');?>
                </a>
            </h4>
        </div>
        <?php if(isset($content['field_product_additional'])):?>
        <div id="collapse1Two" class="accordion-body collapse">
            <div class="panel-body">
                <?php print render($content['field_product_additional']);?>
            </div>
        </div>
        <?php endif;?>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Three">
                    <?php print t('Tags');?>
                </a>
            </h4>
        </div>
        <div id="collapse1Three" class="accordion-body collapse">
            <div class="panel-body">
                <?php if(isset($content['field_product_brand'])):?>
                    <div class="product-tags-area">
                        <form action="#">
                            <div class="form-group">
                                <label><?php print t('Tags:');?></label>
                                <div class="clearfix brand-product">
                                    <?php print render($content['field_product_brand']);?>
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endif;?>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a id="op-reviews" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1Four">
                    <?php print t('Reviews')?>
                </a>
            </h4>
        </div>
        <div id="collapse1Four" class="accordion-body collapse">
            <div class="panel-body">
                <?php print render($content['comments']); ?>
            </div>
        </div>
    </div>
</div>
<?php endif;?>
</div>

<?php print views_embed_view('product_block','block', $node->nid);?>

<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581b726c069c6315"></script>
