<?php
	$title = $post->post_title;
	$field  = $post->post_type.'_subtitle';
	$subtitle  = get_post_meta( $post->ID, $field, true );
	 //wrout_json('debug:', $field);
?>
<?php //AAA: Two columns header if subtitle exist ?>
<?php if(!empty($subtitle)): ?>
	<div class="header container">
		<div class = "row title col-lg-3 col-md-12 col-sd-12 col-xs-12">
			<h2><?php echo $title;?></h2>
		</div>
		<div class = "row subtitle col-lg-9 col-md-12 col-sd-12 col-xs-12">
			<?php echo do_shortcode($subtitle); ?>
		</div>
	</div>

<?php //AAA: Full-width header if not ?>
<?php else:?>
	<div class="header container-fluid">
		<div class = "row title col-lg-12 col-md-12 col-sd-12 col-xs-12">
			<h1><?php echo $title;?></h1>
		</div>
	</div>
<?php endif; ?>
