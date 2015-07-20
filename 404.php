<?php  get_header(); ?>
    <div class="demo-blog demo-blog--blogpost mdl-layout mdl-js-layout has-drawer is-upgraded">
<main class="mdl-layout__content"><div class="demo-back">
          <a class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" href="<?php  echo esc_url( home_url( '/' ) ); ?>">
            <i class="material-icons">arrow_back</i>
          </a>
        </div>
        <div class="demo-blog__posts mdl-grid">
      <!-- get only first sticky post-->	
          <div class="mdl-card mdl-cell mdl-cell--8-col">
            <div class="mdl-card__media mdl-color-text--grey-50">
              <h3><a href="<?php  echo esc_url( home_url( '/' ) ); ?>">404 Not found</a></h3>
            </div>
            <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
              <div class="minilogo" style="background-image: url('<?php  echo get_blog_logo(); ?>');"></div>
              <div>
                <span>The 404 or Not Found error message is an HTTP standard response code indicating that the client was able to communicate with a given server, but the server could not find what was requested. Click the pink area to go back ...</span>
              </div>
            </div>
          </div>
          <!-- start author panel -->
          <?php  get_template_part( 'infocard' ); ?>
          <!-- end author panel -->
        </div>
        <?php  get_footer(); ?>