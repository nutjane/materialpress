<footer class="mdl-mini-footer">
          <div class="mdl-mini-footer--left-section">
            <?php  if ( get_theme_mod( 'themeslug_social_tw' ) ) : ?><a href="<?php  echo esc_url( get_theme_mod( 'themeslug_social_tw' ) ); ?>"><button class="mdl-mini-footer--social-btn social-btn social-btn__twitter"></button></a>.
            <?php  endif; ?>
            <?php  if ( get_theme_mod( 'themeslug_social_fb' ) ) : ?><a href="<?php  echo esc_url( get_theme_mod( 'themeslug_social_fb' ) ); ?>"><button class="mdl-mini-footer--social-btn social-btn social-btn__blogger"></button></a>
            <?php  endif; ?>
            <?php  if ( get_theme_mod( 'themeslug_social_google' ) ) : ?><a href="<?php  echo esc_url( get_theme_mod( 'themeslug_social_google' ) ); ?>"><button class="mdl-mini-footer--social-btn social-btn social-btn__gplus"></button></a>
            <?php  endif; ?>
          </div>
          <div class="mdl-mini-footer--right-section">
          	<p align="right"><br><strong><a href="http://nutjane.github.io/materialpress/" target="_blank">Materialpress</a></strong> theme by nutjane <br><span style="font-size:12px;">Materialpress is a wordpress theme - adapted from Google Material Design Lite template</span></p>
          </div>
        </footer>
      </main>
      <div class="mdl-layout__obfuscator"></div>
    </div>
<!--    <a href="#" id="hi-fab" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect  mdl-color-text--accent-contrast myfab"><i class="material-icons">add</i></a>
</button></a>
<span class="mdl-tooltip" for="hi-fab">
Hi!
</span>-->
<script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
<?php  wp_footer(); ?>
  </body>
  <script>
    Array.prototype.forEach.call(document.querySelectorAll('.mdl-card__media'), function(el) {
      var link = el.querySelector('a');
      if(!link) {
        return;
      }
      var target = link.getAttribute('href');
      if(!target) {
        return;
      }
      el.addEventListener('click', function() {
        location.href = target;
      });
    });
  </script>
  <SCRIPT TYPE="text/javascript">
			<!--
			function popup(mylink, windowname)
			{
			if (! window.focus)return true;
			var href;
			if (typeof(mylink) == 'string')
			   href=mylink;
			else
			   href=mylink.href;
			window.open(href, windowname, 'width=420,height=550,scrollbars=yes');
			return false;
			}
			//-->
			</SCRIPT>
</html>