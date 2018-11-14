<div class="student-assignement-post-form-wrapper">
    <div class="row">
        <div class="col-sm-2">
            <?php print drupal_render($form['mail']); ?>
        </div>
        <div class="col-sm-2">
            <?php print drupal_render($form['subject']); ?>
        </div>


        <div class="col-sm-2">
            <?php print drupal_render($form['no_of_pages']); ?>
        </div>
        <div class="col-sm-2">
            <?php print drupal_render($form['date']); ?>
        </div>
    </div>
    <?php print drupal_render_children($form); ?>
</div>

