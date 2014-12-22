
<div id="footer">
	<footer class="row" role="contentinfo">
		<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer Sidebar')) : ?>
		<?php endif; ?>
		<?php if ( has_nav_menu( 'footer-menu' ) ) {
			echo '<div class="row">';
			wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'inline-list', 'container' => 'nav', 'container_class' => 'small-12 medium-12 columns' ) );
			echo '</div>';
		} ?>
	</footer>
</div>
<?php wp_footer(); ?>

<a class="exit-off-canvas" href="#"></a>

</div> <!-- inner wrap -->
</div> <!-- off canvas wrap -->
</body>
</html>
