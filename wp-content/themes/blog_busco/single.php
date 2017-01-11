<?php get_header(); ?>
<section class="container blog single">
	<div class="row">
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); ?>
		<div class="col-xs-12 col-sm-8 col-sm-offset-1 pull-left">
			<div class="page-header">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="compartilhe">
			<?php 
				$share = '[ssba url='. get_permalink() . ' title="Share"]';
				echo do_shortcode($share);
			?>
			</div>
			<?php the_content(); ?>
			<div class="compartilhe">
			<?php 
				$share = '[ssba url='. get_permalink() . ' title="Share"]';
				echo do_shortcode($share);
			?>
			</div>
			<a class="btn btn-custom6" href="<?php echo bloginfo() ?>">Voltar ao blog</a>
			<div class="row form-single no-gutter">
			<strong class="news-letter-single">Assine nossa newsletter</strong>
			<form action="" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<div class="col-xs-12 col-sm-4 no-gutter">
	              <div class="input-group">
	                <input placeholder="NOME" name="FNAME" id="mce-FNAME" type="text">
	              </div>
	            </div>
	            <div class="col-xs-12 col-sm-5 no-gutter">
	              <div class="input-group">
	                <input placeholder="SEU E-MAIL" name="EMAIL" type="email" id="mce-EMAIL">
	              </div>
	            </div>
	            <div class="col-xs-12 col-sm-3">
	              <input type="submit" value="ASSINAR" name="subscribe" id="mc-embedded-subscribe" class="btn btn-custom6 btn-block">
	            </div>
		      <div id="mce-responses" class="clear">
		      <div class="response" id="mce-error-response" style="display:none"></div>
		      <div class="response" id="mce-success-response" style="display:none"></div>
		      </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
		      <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_a87686e44179880f1e95c6c84_ee643cbcd8" tabindex="-1" value=""></div>
		      <div class="clear"></div>
		      </div>
          	</form>
          	<?php comments_template('', true); ?>
		</div>
	<?php endwhile; ?>
	<?php endif; ?>
	<?php get_sidebar(); ?>
	</div>
</section>
<?php get_footer(); ?>