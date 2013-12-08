<section id="left">
	<div id="player">
		<div id="playlist" value="20">
			<?php
				/* READ MP3 FILES FROM FOLDER */
				$dir = "songs/";
				$songs = array();
				$i=0;
				foreach (glob($dir."*.mp3") as $filename) {
					$i++;
					$filename_cut = substr ($filename, strlen($dir));
					$noext = substr ($filename_cut, 3, -4);
					echo('
					<audio id="song'.$i.'" src="'.$dir.$filename_cut.'" name="'.$noext.'" type="audio/mpeg"></audio>
					');
				}
			?>
		</div> <!-- /#playlist -->
		<div id="display">
			<div id="title" class="display_text">Song Name</div>
			<div id="artist" class="display_text">Artist Name</div>
		</div> <!-- /#display -->
		<div id	="progressbar_container"><div id="progressbar"></div></div>
		<div id="timer" class="display_text">0:00</div>
		<div id="controls">
			<div class="ctrl_btn" id="prev">Prev</div>
			<div class="ctrl_btn" id="play">Play</div>
			<div class="ctrl_btn" id="pause" style="display:none;">Pause</div>
			<div class="ctrl_btn" id="next">Next</div>
			<span class="stretch"></span>
		</div><!-- /#controls --> 
	</div> <!-- /#player -->

	<!-- Download -->
	<a href=<?php echo ("/".$year."/songs/WinterMix".$year.".zip"); ?> id="download">Download Album</a>
</section>

<section id="right">
	<ol id="tracklist">
		<?php
			foreach (glob($dir."*.mp3") as $filename) {
				$filename_cut = substr ($filename, strlen($dir));
				$noext = substr ($filename_cut, 0, -4);
				$title = substr ($noext, 3);
				
				echo "<li>".$title."</li>";
			}
		?>
	</ol>
</section>