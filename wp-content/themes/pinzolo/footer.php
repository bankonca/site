			
			<footer class="center copy">
						
<div style="display: none;">
				<p> <a href="http://thriveweb.com.au/the-lab/pinzolo-a-free-responsive-wordpress-theme/">Pinzolo Theme</a> - Made on the Gold Coast by THRIVE </p>
				<p> Powered by <a href="http://wordpress.org/" title="WordPress">WordPress</a></p>
					
				<p id="thrive"> <img src="<?php echo get_template_directory_uri(); ?>/images/thrive.png" title="thrive" width="40" height="40" /></p>	
</div>					

<nav class="nav-footer">
						<?php wp_nav_menu(array('theme_location' => 'footer', 'container' => 0, 'menu_id' => 'menuUIfooter', 'items_wrap' => '<ul id="%1$s" class="%2$s"><li class="tnskip" >&nbsp;</li>%3$s<li class="tnskip">&nbsp;</li><li class="tnskip filler"></li></ul>' )); ?>					
</nav>

				<br />
				<p> &copy; <?php echo date('Y'); ?> Bitsquare</p>

			</footer>
		
		</div>
	
	</div>
	
	<?php wp_footer(); ?>
	
</body>
</html>