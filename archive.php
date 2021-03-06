<?php get_header(); ?>
    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
<main class="mdl-layout__content">

        <div class="demo-blog__posts mdl-grid">
      
	
    <?php if ( have_posts() ) : ?>
           
          <div class="mdl-card mdl-cell mdl-cell--8-col">
            <div class="mdl-card__media mdl-color-text--grey-50"  style="background-image: url('<?php echo category_description(); ?>');">
              <h3><?php
					the_archive_title( '', '' ); ?></h3>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo" style="background-image: url('<?php echo get_blog_logo(); ?>');"></div>
              <div>
                <strong><?php echo $wp_the_query->found_posts  ?> Post in the list</strong>
                <span>Let's check them out! </span>
              </div>
            </div>
          </div>
          
          
          <!-- start author panel -->
          
          <?php get_template_part( 'infocard' ); ?>
          
          <!-- end author panel -->
          
           <?php while ( have_posts() ) : the_post(); ?>

           <?php
		if ( has_post_thumbnail() ){
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			$post_thumbnail_url = $thumb['0'];
		}
		else  $post_thumbnail_url = esc_url(get_template_directory_uri())."/images/road.jpg"; 
		?>
        
          <div class="mdl-card mdl-cell mdl-cell--12-col">
            <div class="mdl-card__media mdl-color-text--grey-50"  style="background-image: url('<?php echo $post_thumbnail_url ?>');">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              <?php the_content(); ?>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo" style="background-image: url('<?php echo get_blog_logo(); ?>');"></div>
              <div>
                <span class="category-text"><strong><?php the_category( ' | ' ); ?></strong></span>
                <span><?php the_time('F j, Y'); ?></span>
              </div>
            </div>
          </div>
      <?php endwhile; else : ?>
 
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>    

          
          

          
          
          <nav class="demo-nav mdl-cell mdl-cell--12-col">
                   <?php previous_posts_link( ' <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon"><i class="material-icons">arrow_backward</i>
              </button> Less' ); ?>
            <div class="section-spacer"></div>
            <?php next_posts_link( 'More <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons">arrow_forward</i>
              </button>', '' ); ?>
          </nav>
        </div>
        <?php get_footer(); ?>