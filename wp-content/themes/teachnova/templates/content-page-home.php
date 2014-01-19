<!--<pre>
    TODO
    Template: Homepage
    File: content-page-home
</pre>-->

<?php if (have_posts()) : the_post(); ?>
		<div class = "home-background">
			<?php //the_post_thumbnail(); ?>
		</div>
			<div class = "container col-lg-4 col-md-4 col-sm-6 col-xs-6 home-content">
				<?php the_content(); ?>
			</div>
		</div>
<?php endif; ?>
