<?php
if ( is_active_sidebar( 'footer-sidebar-1' ) || is_active_sidebar( 'footer-sidebar-2' ) || is_active_sidebar( 'footer-sidebar-3' ) || is_active_sidebar( 'footer-sidebar-4' ) ) : ?>
	<div class="footer-widget-item">
		<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
		<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
		<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
		<?php dynamic_sidebar( 'footer-sidebar-4' ); ?>
	</div>
	<?php
endif;