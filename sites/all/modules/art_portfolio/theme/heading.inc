<!-- page heading -->
<?php if($options['use_heading']) :?>
	<?php 
		$headerClass = '';
		if($options['style_heading'] == 'style2') { $headerClass = 'small'; }
		if($options['style_heading'] == 'style3') { $headerClass = 'style2'; }
		if($options['style_heading'] == 'style8') { $headerClass = 'dark-style'; }
		
		$titleClass = 'heading';
		if($options['style_heading'] == 'style2') { $titleClass = 'small'; }
		if($options['style_heading'] == 'style4') { $titleClass = 'heading2'; }
		if($options['style_heading'] == 'style5') { $titleClass = 'heading3'; }
		if($options['style_heading'] == 'style6') { $titleClass = 'heading4'; }
		if($options['style_heading'] == 'style7') { $titleClass = 'heading5'; }
		if($options['style_heading'] == 'style8') { $titleClass = 'heading6'; }
		if($options['style_heading'] == 'style9') { $titleClass = 'heading7'; }
		if($options['style_heading'] == 'style10') { $titleClass = 'heading8'; }
		if($options['style_heading'] == 'style11') { $titleClass = ''; }
	?>
	<header class="page-heading <?php echo $headerClass; ?>">
		<h2 class="<?php echo $titleClass; ?> <?php if(isset($options['background']) && $options['background'] == 1) { echo 'white'; } else { echo 'lime'; } ?> text-capitalize font-medium <?php if($options['style_heading'] != 'style11' && !empty($options['description'])) { echo 'margin-bottom-30'; } ?>"><?php echo $options['heading']; ?></h2>
		<?php if(!empty($options['description'])) :?>
			<p><?php echo $options['description']; ?></p>
		<?php endif; ?>
	</header>
<?php endif; ?>