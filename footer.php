		</section> <!-- /#content -->
		<div class="push"></div>
	</div> <!-- /#wrapper -->
	
	<script language="javascript" type="text/javascript" src="../audio-player.js"></script>

	<!-- Parallax Scroll Background -->
	<script language="javascript" type="text/javascript">
		$(window).scroll(function(e){
			parallax();
		});
		function parallax(){
			var scrolled = $(window).scrollTop();
			$('body').css('background-position','center -'+(scrolled*0.2)+'px'); /* Change decimal to alter parallax speed. */
		}
	</script>
 	<section id="footer">
		<p>A <a href="http://kyledecker.me">Kyle Decker</a> project, crafted with love.</p>
		<p>Please support the artists that you enjoy!</p>
	</section>
</body>    
</html> 