<?php /*$cols = array('one', 'two', 'three', 'four', 'five'); ?>
<footer class="content-info container-fluid" role="contentinfo">
<?php ?>
  <div class="row">
    <?php /*foreach($cols as $col) : if (roots_display_footerbar($col)) : ?>
    <aside class="wp-sidebar <?php echo $col; ?>-footerbar <?php echo roots_sidebar_class($col . '-footer'); ?>" role="complementary">
      <?php dynamic_sidebar($col . '-footerbar'); ?>
    </aside>
    <?php endif; endforeach; ?>
  </div>
</footer>

<?php wp_footer(); */?>

<div class="footer">
	<div class="row">
		<div class="footer-first col-lg-3 col-md-3 col-sm-4 col-xs-12">
			<div class=" col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="http://www.opencodex.es" target="_blank"><img id="img-one" src="/media/opencodex.png"/><br></a>
				<h5>Opencodex 2.0</h5>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<a href="http://www.teachnova.com" target="_blank"><img id="img-two" src="/media/teachnova.png"/><br></a>
				<h5>E-learning</h5>
			</div>
		</div>
		<div class="footer-second col-lg-3 hidden-md hidden-sm hidden-xs">
			<div class="footer-news col-lg-12 hidden-md hidden-sm hidden-xs">
				<div class="col-lg-5">
					<img src="/media/law.jpeg"/>
				</div>
				<div class="text col-lg-7">
					<strong>Noticia 1</strong><br><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				</div>
			</div>
			<div class="footer-news col-lg-12 hidden-md hidden-sm hidden-xs">
				<div class="col-lg-5">
					<img src="/media/law.jpeg"/>
				</div>
				<div class="text col-lg-7">
					<strong>Noticia 2</strong><br><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
				</div>
			</div>
		</div>
		<div class="footer-third col-lg-6 col-md-9 col-sm-8 col-xs-12">
			<div class="links col-lg-3 col-md-4 col-sm-6 col-xs-6">
				<strong>Somos</strong>
				<ul>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
				</ul>
				<strong>Espacios</strong>
				<ul>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
				</ul>
			</div>
			<div class="links col-lg-3 col-md-4 col-sm-6 col-xs-6">
				<strong>Servicios</strong>
				<ul>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
					<li>lorem ipsunm</li>
				</ul>
			</div>
			<div class="col-lg-6 col-md-4 hidden-sm hidden-xs">
				<div class="col-lg-12 col-md-12 col-sm-3 col-xs-6">
				<?php get_template_part('templates/element-social-share'); ?>
				</div>
				<div id="address" class="col-lg-12 col-md-12 col-sm-3 col-xs-12">
					Calle Julián Camarillo, 47 <br>
					Bloque A - Oficina 006 <br>
					Madrid 28037 - España <br>
					(+34) 123 456 789
				</div>
				<div id="search" class="col-lg-12 col-md-12 col-sm-3 hidden-3">
					<input></input>
				</div>
			</div>
		</div>
		<div class="alter row hidden-lg hidden-md col-sm-12 col-xs-12">
				<div class="col-lg-12 col-md-12 col-sm-3 col-xs-3">
					<?php get_template_part('templates/element-social-share'); ?>
				</div>
				<div id="address" class="col-lg-12 col-md-12 col-sm-9 col-xs-9">
					Calle Julián Camarillo, 47 | Bloque A - Oficina 006 | Madrid 28037 - España | (+34) 123 456 789
				</div>
		</div>
	</div>
</div>