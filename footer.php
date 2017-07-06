<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
			</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php sparkling_social(); ?>
					<nav role="navigation" class="col-md-6">
						<?php sparkling_footer_links(); ?>
					</nav>
					<div class="copyright">
					©&nbsp&nbsp2017&nbsp&nbspHello,&nbspJeana!&nbsp&nbsp琼ICP备17002443号<br/>
&nbsp&nbsp&nbsp&nbspPowered&nbsp&nbspby&nbsp&nbsp<a href="http://wordpress.org" target="_blank" class="external" rel="nofollow">Wordpress</a>.&nbsp&nbspHosting&nbsp&nbspby&nbsp&nbsp<a href="https://www.aliyun.com" target="_blank" class="external" rel="nofollow">阿里云</a>.
					</div>
				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?509c20b27a8b531437d7c2ab26fe33cb";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</body>
</html>