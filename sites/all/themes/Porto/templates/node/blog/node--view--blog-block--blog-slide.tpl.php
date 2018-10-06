<?php
$thumbnail = '';
if(!empty($node->field_thumbnail['und'])){
    $thumbnail = file_create_url($node->field_thumbnail['und'][0]['uri']);
}
?>
<article class="post">
    <?php if(!empty($thumbnail)):?>
    <div class="post-image">
        <div class="img-thumbnail">
            <img class="img-responsive" src="<?php print $thumbnail;?>" alt="Post">
        </div>
    </div>
    <?php endif;?>
    <div class="post-date">
        <span class="day"><?php print format_date($node->created,'custom','j');?></span>
        <span class="month"><?php print format_date($node->created,'custom','F');?></span>
    </div>
    <h2><a href="<?php print $node_url;?>"><?php print $title;?></a></h2>
    <div class="post-content">
        <?php
        if (!empty($node->body['und'])) {
            $summary = strip_tags($node->body['und'][0]['value']);
            $summary = (strlen($summary) > 50) ? substr($summary, 0, 50) . '...' : $summary;
            echo '<p>'.$summary.'</p>';
        }
        ?>
        <a href="<?php print $node_url;?>" class="btn btn-link"><?php print t('Read more');?></a>
    </div>
</article>