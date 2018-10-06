
<footer id="footer">
    <div class="container">
        <div class="row">
            <?php if(isset($page['footer_top'])):?>
            <div class="footer-ribbon">
                <?php print render($page['footer_top']);?>
            </div>
            <?php endif;?>
            <?php if(isset($page['footer_11'])):?>
            <div class="col-md-3">
                <?php print render($page['footer_11']);?>
            </div>
            <?php endif;?>
            <?php if(isset($page['footer_12'])):?>
            <div class="col-md-3">
                <?php print render($page['footer_12']);?>
            </div>
            <?php endif;?>
            <?php if(isset($page['footer_13'])):?>
            <div class="col-md-3">
                <?php print render($page['footer_13']);?>
            </div>
            <?php endif;?>
            <?php if($page['footer_14']):?>
            <div class="col-md-3">
                <?php print render($page['footer_14']);?>

            </div>
            <?php endif;?>
        </div>
    </div>
    <?php if($page['footer_bottom']):?>
    <div class="footer-copyright">
        <div class="container">
            <?php print render($page['footer_bottom']);?>
        </div>
    </div>
    <?php endif;?>
</footer>