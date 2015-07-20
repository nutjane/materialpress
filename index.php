<?php get_header(); ?>
    <div class="demo-blog mdl-layout mdl-js-layout has-drawer is-upgraded">
<main class="mdl-layout__content">
        <div class="demo-blog__posts mdl-grid">
      <!-- get only first sticky post-->	
	 <?php
    $args = array(
       'post__in' => get_option('sticky_posts'),
       'ignore_sticky_posts' => 1
    );
    $my_query = new WP_Query($args) ; ?>
    <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
           <?php
		if ( has_post_thumbnail() ){
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			$post_thumbnail_url = $thumb['0'];
		}
		else  $post_thumbnail_url = esc_url(get_template_directory_uri())."/images/coffee.jpg"; 
		?>
          <div class="mdl-card coffee-pic mdl-cell mdl-cell--8-col">
            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url('<?php echo $post_thumbnail_url ?>');">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo" style="background-image: url('<?php echo get_blog_logo(); ?>');"></div>
              <div>
                <strong><?php the_category( ' | ' ); ?></strong>
                <span><?php the_time('F j, Y'); ?></span>
              </div>
            </div>
          </div>
          
          <?php endwhile;?>
          <!-- start author panel -->
          
          <?php get_template_part( 'infocard' ); ?>
          
          <!-- end author panel -->
          <?php
		  	$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args_other= array(
				'ignore_sticky_posts' => 1,
				'paged' => $paged
			);
			query_posts($args_other);
		  ?>
           <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php
		if ( has_post_thumbnail() ){
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			$post_thumbnail_url = $thumb['0'];
		}
		else  $post_thumbnail_url = esc_url(get_template_directory_uri())."/images/road.jpg"; 
		?>
          
          <div class="mdl-card mdl-cell mdl-cell--12-col" >
            <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url('<?php echo $post_thumbnail_url ?>');">
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            </div>
            <div class="mdl-color-text--grey-600 mdl-card__supporting-text">
              <?php the_content(); ?>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo" style="background-image: url('<?php echo get_blog_logo(); ?>');"></div>
              <div>
                <strong><?php the_category( ' | ' ); ?></strong>
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