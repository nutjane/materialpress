<?php get_header(); ?>
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
      <main class="mdl-layout__content">
      
        <div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <i class="material-icons">arrow_back</i>
          </a>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
        

        <div class="demo-blog__posts mdl-grid" id="post-<?php the_ID(); ?>">
          <div class="mdl-card mdl-shadow--4dp mdl-cell mdl-cell--12-col">
          <?php
		if ( has_post_thumbnail() ){
			$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
			$post_thumbnail_url = $thumb['0'];
		}
		else  $post_thumbnail_url = esc_url(get_template_directory_uri())."/images/road.jpg"; 
		?>
        
		<!-- facebook Open Graph Markup -->
        <meta property="og:url" content="<?php echo esc_url( get_permalink() ); ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?php echo the_title(); ?>" />
        <meta property="og:image" content="<?php echo $post_thumbnail_url ?>" />
        
            <div class="mdl-card__media mdl-color-text--grey-50"  style="background-image: url('<?php echo $post_thumbnail_url ?>');">
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
              <div class="minilogo" style="background-image: url('<?php echo get_blog_logo(); ?>');"></div>
              <div style="align-items: flex-start;">
                <span class="category-text"><strong><?php the_category( ' | ' ); ?></strong></span>
                <span><?php the_time('F j, Y'); ?></span>
              </div>
              <div class="section-spacer"></div>
              <div class="meta__favorites"><?php setPostViews(get_the_ID()); echo getPostViews(get_the_ID()); ?> <i class="material-icons">favorite</i></div>
              <div><i class="material-icons">share</i></div>
              <div><button id="share-fb" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored social-btn social-btn__blogger" style="margin:0;" onClick="return popup('https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>', 'notes')"></button><span class="mdl-tooltip" for="share-fb">Share on facebook</span></div>
              <div><button id="share-tw" class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored social-btn social-btn__twitter" style="margin:0;" onClick="return popup('https://twitter.com/intent/tweet?url=<?php echo esc_url( get_permalink() ); ?>&text=<?php the_title(); ?> -', 'notes')"></button><span class="mdl-tooltip" for="share-tw">Share on twitter</span></div>
            </div>
            
            <div class="mdl-color-text--grey-700 mdl-card__supporting-text">
             <?php the_content( sprintf(
				__( 'Continue reading %s', 'twentyfifteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) ); ?>
            </div>
            
            			
            
            
            
            
            <!--
            <div class="mdl-color-text--primary-contrast mdl-card__supporting-text comments">
              <form>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                  <textarea rows=1 class="mdl-textfield__input" id="comment"></textarea>
                  <label for="comment" class="mdl-textfield__label">Join the discussion</label>
                </div>
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                  <i class="material-icons">check</i>
                </button>
              </form>
              <div class="comment mdl-color-text--grey-700">
                <header class="comment__header">
                  <img src="images/co1.jpg" class="comment__avatar">
                  <div class="comment__author">
                    <strong>James Splayd</strong>
                    <span>2 days ago</span>
                  </div>
                </header>
                <div class="comment__text">
                  In in culpa nulla elit esse. Ex cillum enim aliquip sit sit ullamco ex eiusmod fugiat. Cupidatat ad minim officia mollit laborum magna dolor tempor cupidatat mollit. Est velit sit ad aliqua ullamco laborum excepteur dolore proident incididunt in labore elit.
                </div>
                <nav class="comment__actions">
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons">thumb_up</i>
                  </button>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons">thumb_down</i>
                  </button>
                  <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                    <i class="material-icons">share</i>
                  </button>
                </nav>
                <div class="comment__answers">
                  <div class="comment">
                    <header class="comment__header">
                      <img src="images/co2.jpg" class="comment__avatar">
                      <div class="comment__author">
                        <strong>John Dufry</strong>
                        <span>2 days ago</span>
                      </div>
                    </header>
                    <div class="comment__text">
                      Yep, agree!
                    </div>
                    <nav class="comment__actions">
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons">thumb_up</i>
                      </button>
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons">thumb_down</i>
                      </button>
                      <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                        <i class="material-icons">share</i>
                      </button>
                    </nav>
                  </div>
                </div>
              </div>
            </div> -->
          </div>

          <nav class="demo-nav mdl-color-text--grey-50 mdl-cell mdl-cell--12-col">

			<?php $nepo=get_next_post(); 
		  if($nepo) {
			  $nepoid=$nepo->ID;
		$next_post_url = get_permalink($nepoid); ?> 
            <a href="<?php echo $next_post_url; ?>" class="demo-nav__button">
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900">
                <i class="material-icons">arrow_back</i>
              </button>
              Newer
            </a>
            <?php  } ?>
            <div class="section-spacer"></div>
            
          
            <?php $prpo=get_previous_post(); 
			if($prpo) {
			$prpoid=$prpo->ID;
			$prev_post_url = get_permalink($prpoid); ?> 
            <a href="<?php echo $prev_post_url; ?>" class="demo-nav__button">
              Older
              <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon mdl-color--white mdl-color-text--grey-900">
                <i class="material-icons">arrow_forward</i>
              </button>
            </a>
            <?php  } ?>
          </nav>
        </div>
        <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>