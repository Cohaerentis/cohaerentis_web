<?php /* <pre>
    Template: Homepage
    File: content-page-home
</pre> */

<?php if (have_posts()) : the_post(); ?>
        <div class="row">
			<div class = "col-lg-5 col-md-6 col-sm-8 col-hs-11 col-xs-11 home-content">
				<?php the_content(); ?>
			</div>
        </div>
<?php endif; ?>
