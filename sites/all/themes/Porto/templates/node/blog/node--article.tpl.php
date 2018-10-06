<?php $media = '';
if(!empty($node->field_media['und'])){
    $media = $node->field_media['und'][0]['value'];
}
?>
<?php if(!$page):?>
    <article class="post post-large">
        <?php if(isset($content['field_media'])):?>
        <div class="post-video">
            <?php print $media;?>
        </div>
        <?php else:?>
            <?php if(isset($content['field_image'])):?>
            <?php print render($content['field_image']);?>
            <?php endif;?>
        <?php endif;?>

        <div class="post-date">
            <span class="day"><?php print format_date($node->created,'custom','j');?></span>
            <span class="month"><?php print format_date($node->created,'custom','F');?></span>
        </div>

        <div class="post-content">

            <h2><a href="<?php print $node_url;?>"><?php print $title;?></a></h2>
            <?php if(isset($content['body'])):?>
            <p><?php print render($content['body']);?></p>
            <?php endif;?>

            <a href="<?php print $node_url;?>" class="btn btn-link"><?php print t('Read more');?></a>

            <div class="post-meta">
                <span><i class="fa fa-calendar"></i> <?php print format_date($node->created,'custom','F j, Y, g:i a');?> </span>
                <span><i class="fa fa-user"></i> <?php print t('By');?> <?php print $name;?> </span>
                <?php if(isset($content['field_tag'])):?>
                <span><i class="fa fa-tag"></i> <?php print render($content['field_tag']);?> </span>
                <?php endif;?>
                <?php if(isset($content['field_article_category'])):?>
                <span><i class="fa fa-folder-open"></i> <?php print render($content['field_article_category']);?> </span>
                <?php endif;?>
            </div>

        </div>
    </article>
<?php else:?>
<div class="blog-posts single-post">
    <article class="post post-large blog-single-post">
        <?php if(isset($content['field_media'])):?>
            <div class="post-video">
                <?php print $media;?>
            </div>
        <?php else:?>
            <?php if(isset($content['field_image'])):?>
                <?php print render($content['field_image']);?>
            <?php endif;?>
        <?php endif;?>
        <div class="post-date">
            <span class="day"><?php print format_date($node->created,'custom','j');?></span>
            <span class="month"><?php print format_date($node->created,'custom','F');?></span>
        </div>
        <div class="post-content">
            <h2><a href="<?php print $node_url;?>"><?php print $title;?></a></h2>
            <div class="post-meta">
                <span><i class="fa fa-user"></i> <?php print t('By');?> <?php print $name;?> </span>
                <?php if(isset($content['field_tags'])):?>
                <span><i class="fa fa-tag"></i> <?php print render($content['field_tags']);?> </span>
                <?php endif;?>
                <span><i class="fa fa-comments"></i> <a href="#"><?php print $comment_count;?> <?php print t('Comments');?></a></span>
            </div>
            <?php if(isset($content['body'])):?>
            <?php print render($content['body']);?>
            <?php endif;?>
            <div class="post-block post-share">
                <h3 class="h4 heading-primary"><i class="fa fa-share"></i><?php print t('Share this post');?></h3>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style ">
                    <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                    <a class="addthis_button_tweet"></a>
                    <a class="addthis_button_pinterest_pinit"></a>
                    <a class="addthis_counter addthis_pill_style"></a>
                </div>
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-50faf75173aadc53"></script>
                <!-- AddThis Button END -->
            </div>
        </div>
    </article>
</div>
<?php endif;?>
