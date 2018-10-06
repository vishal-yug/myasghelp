<div class="testimonial testimonial-primary">
    <?php if(isset($content['body'])):?>
    <blockquote>
        <p><?php print strip_tags(render($content['body']));?></p>
    </blockquote>
    <?php endif;?>
    <div class="testimonial-arrow-down"></div>
    <div class="testimonial-author">
        <div class="testimonial-author-thumbnail img-thumbnail">
            <?php print render($content['field_thumbnail']);?>
        </div>
        <p><strong><?php print $title;?></strong><?php if(isset($content['field_testimonials_info'])):?><span><?php print strip_tags(render($content['field_testimonials_info']));?></span><?php endif;?></p>
    </div>
</div>