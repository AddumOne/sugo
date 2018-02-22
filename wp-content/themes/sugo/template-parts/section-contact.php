<?php
/**
 *
 * @package Total
 */

if(get_theme_mod('sugo_contact_page_disable') != 'on' ){ ?>
<section id="ht-contact-section" data-stellar-background-ratio="0.5">
<div class="ht-contact-section ht-section">
<div class="ht-contact-overlay"></div>
	<div class="ht-container ht-clearfix">
		<div class="contact-bg"></div>
		<div class="ht-contact-image">
			<?php 
            $sugo_contact_page_id = get_theme_mod('sugo_contact_page');
			if($sugo_contact_page_id){
                $args = array(
    				'page_id' => absint($sugo_contact_page_id)
    				);
    			$query = new WP_Query($args);
    			if($query->have_posts()):
    				while($query->have_posts()) : $query->the_post();
    			?>
				<h2 class="ht-section-title"><?php the_title(); ?></h2>
    			<?php
    			endwhile;
    			endif;	
    			wp_reset_postdata();
            }
			?>
			<div class="contact-content">
				<p>&nbsp;</p>
			</div>
		</div>

		<div class="ht-contact-sec">
		<?php 
            //$sugo_contact_page_id = get_theme_mod('sugo_contact_page');
			if($sugo_contact_page_id){
                $args = array(
    				'page_id' => absint($sugo_contact_page_id)
    				);
    			$query = new WP_Query($args);
    			if($query->have_posts()):
    				while($query->have_posts()) : $query->the_post();
    			?>
    			<div class="ht-content">
    				<?php 
					if(has_excerpt()){
						the_excerpt();
					}else{
						the_content(); 
					} ?>
    			</div>
    			<?php
    			endwhile;
    			endif;	
    			wp_reset_postdata();
            }
			?>

		</div>
	</div>
</div>
</section>
<?php } 