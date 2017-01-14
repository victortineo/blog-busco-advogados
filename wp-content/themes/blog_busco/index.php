<?php get_header(); ?>
<section id="blog" class="container blog">
	<div class="row">
		<div class="col-xs-12 col-sm-9">
			<div class="row">
				<?php
				
				if ( get_query_var('paged') ) {
					$paged = get_query_var('paged');
				} elseif ( get_query_var('page') ) {
					$paged = get_query_var('page');
				} else {
					$paged = 1;
				}
				$args = array(
					'post_type' => 'post',
					'paged' => $paged,
					'posts_per_page' => 6, 
					);
				$the_query = new WP_Query( $args );
				while ( $the_query->have_posts() ) : $the_query->the_post();
				?>
				<article class="post-preview col-xs-12 col-sm-4">
					<a href="<?php echo get_permalink(); ?>">
						<div class="post-thumbnail" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>');"></div>
					</a>
					<div class="post-content">
						<h1><a class="title" href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h1>
						<?php the_excerpt(); ?>
						
						<?php 
						$share = '[ssba url='. get_permalink() . ' title="Share"]';
						echo do_shortcode($share);
						?>
					</div>
					<div class="post-excerpt">
						<span class="glyphicon glyphicon-time"></span><span><?php the_date($d) ; ?></span><br>
						<span class="glyphicon glyphicon-user"></span><span><?php if(function_exists('the_views')) { the_views(); } ?></span><br>
						<!-- <strong>COMPARTILHE</strong> -->
					</div>
				</article>
			<?php endwhile; ?>
			<?php wp_pagenavi(array( 'query' => $the_query)); ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
</section>
<?php get_footer(); ?>