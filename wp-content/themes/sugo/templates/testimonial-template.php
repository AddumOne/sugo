<?php
/**
 * Template Name: Testimonial
 *
 * @package Total
 */

get_header(); ?>

	<section id="testimonial-section" class="ht-section">
	<div class="ht-container ht-clearfix">
		<div class="ht-about-sec">
			<header class="entry-header">
			<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
		</header><!-- .entry-header -->

		<div class="entry-categories">
            <?php echo total_entry_category(); ?>
		</div>
		<div class="entry-content">
			<?php
				/* translators: %s: Name of current post */
				the_content( sprintf(
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'total' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );
			?>

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'total' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		</div>

		<div class="ht-about-image">
		<?php if(has_post_thumbnail()): ?>
		<figure class="entry-figure">
			<?php 
			$total_image = wp_get_attachment_image_src( get_post_thumbnail_id() , 'total-blog-header' );
			?>
			<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($total_image[0]); ?>" alt="<?php echo esc_attr( get_the_title() ) ?>"></a>
		</figure>
		<?php endif; ?>
		</div>
		
	</div>
</section>

<?php
get_footer('basic'); 