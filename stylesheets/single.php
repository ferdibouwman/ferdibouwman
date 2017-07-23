<?php get_header(); ?>
dit is single
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if ( has_post_thumbnail() ) { ?>
	<?php $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
	<section class="s-hero-image is-first" style="background-image:url('<?php echo $feat_image_url; ?>');">
		<div class="l-container">

		</div>
	</section>

	<section class="s-single">
		<div class="l-container">
			<h1><?php the_title(); ?></h1>
            <span class="by"><?php the_author(); ?></span><span class="on"><?php the_time()?></span>
			<p><?php the_content(); ?></p>
		</div>
	</section>

<?php }  else { ?>

	<section class="s-single is-first">
		<div class="l-container">
			<h1><?php the_title(); ?></h1>
            <span class="by"><?php the_author(); ?></span><span class="on"><?php the_time()?></span>
			<p><?php the_content(); ?></p>
		</div>
	</section>
<?php } ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<?php get_footer(); ?>
