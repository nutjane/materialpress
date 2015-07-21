<div class="mdl-card something-else mdl-cell mdl-cell--8-col mdl-cell--4-col-desktop">
            <button class="mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--fab mdl-color--accent"><i class="material-icons mdl-color-text--white"><?php echo get_theme_mod( 'themeslug_fab_icon','favorite' ); ?></i></button>
            <div class="mdl-card__media mdl-color--white mdl-color-text--grey-600">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>" rel='home'>            
            <img src='<?php echo get_blog_logo(); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'  border="0">
            </a>
              <?php bloginfo('name'); ?>
            </div>
            <div class="mdl-card__supporting-text meta meta--fill mdl-color-text--grey-600"  style="width: 100%;">
              <div>
                <strong><?php bloginfo('description'); ?></strong>
              </div>
              <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="menubtn">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name'); ?>"  style="text-decoration: none;"><button class="mdl-menu__item mdl-js-ripple-effect">Home</button></a>
                <?php
				  $args = array(
				  'orderby' => 'post_title',
				  'order' => 'ASC',
					'post_type' => 'page',
					'showposts' => 1000,
					'caller_get_posts' => 1
				  ); 
				
				$pages = get_posts($args);
				foreach($pages as $page) {
				$out .=  '<a href="'.get_permalink($page->ID).'" title="'.wptexturize($page->post_title).'" style="text-decoration: none;"><button class="mdl-menu__item mdl-js-ripple-effect">'.wptexturize($page->post_title).'</button></a></li>';
				 }
				echo $out;
				?>
              </ul>
              <button id="menubtn" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon">
                <i class="material-icons">more_vert</i>
              </button>
  </div>

          </div>