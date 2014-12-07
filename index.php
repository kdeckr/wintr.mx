<!DOCTYPE html>
<html lang="en">
<head>
	<title>Winter Mix</title>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" /> 
	<meta name="description" content="Tasteful tunes for the season." />
	<meta name="keywords" content="music, web design, compilation, christmas, winter, mix" />
	<meta name="author" content="Kyle Decker" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="src/css/style.css" />
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn:400,400italic">
	<script src="src/js/soundmanager2-nodebug-jsmin.js"></script>
	<script src="src/js/inlineplayer.js"></script>
</head>

<body>
	<header class="sidebar">
		<div class="wrapper">
			<h1 class="title">Winter Mix</h1>
			<div class="about">
				<p><i>Hi friends,</i></p>
				<p>This site is home to 120 tunes I've put together over the past 6 years. They are explorations&mdash;evolutions in a yearly search for beautiful sounds of winter and its many celebrations.</p>
				<p>The last title on this year's mix is <i>Lift Every Voice and Sing</i>, the black national anthem. It’s a tribute to the countless lives lost to racism and injustice, and a reminder of the amazing things possible when we <a href="http://youtu.be/cwWhu8tw4nU">raise our voices as one</a>.</p>
				<p>Download, listen, <a href="https://www.facebook.com/kdeckr">let me know what you think</a>. And as always, please <a href="http://www.donationconspiracy.org">support</a> the artists that you enjoy.</p>
				<p><i>Happy winter,</i><br/>&mdash; Kyle</p>
			</div>
		</div>
	</header>
	<main class="content">
		<div class="mixes">
		<?php $year = 2014; $i=0; ?>
		<?php for($y=$year; $y>=2009; $y--): ?>	
		<section id="y-<?php echo $y ?>" class="mix">
			<div class="wrapper">
				<div class="mix-header">
					<h2 id="<?php echo $y ?>" class="mix-title"><?php echo $y ?></h2>
					<span class="dot">&middot;</span>
					<a href=<?php echo '/'.$y.'/songs/WinterMix$y.zip' ?> class="mix-download">Download Mix</a>
				</div>
				<ol class="tracklist">
					<?php
						$dir = "src/audio/WinterMix".$y."/";
						$n = 0;
						foreach (glob($dir."*.mp3") as $filename) {
							$filename_cut = substr ($filename, strlen($dir));
							$noext = substr ($filename_cut, 0, -4);
							$fileTit = substr ($noext, 3);
							$array = explode(" - ", $fileTit);
							$artist = $array[0];
							$title = $array[1];

							// Validate URLs
							$search = array(" ", "&");
							$replace = array("%20", "&amp;");
							$validURL = $dir.str_replace($search, $replace, $filename_cut);

							echo('<li class="track" id="track-'.$i++.'">
								<a class="track-link" href="'.$validURL.'">
									<span class="track-number">'.++$n.'</span>
									<span class="track-icon"></span>
									<div class="track-text">
										<div class="track-title">'.$title.'</div>
										<div class="track-artist">'.$artist.'</div>
									</div>
								</a>
							</li>');
						}
					?>
				</ol>
			</div>
		</section>
		<?php endfor; ?>
		</div>
	</main> <!-- /#content -->
</body>

<!-- Audio Player -->
<script type="text/javascript">
	soundManager.setup({
		url: 'src/swf/', // Path to swf files
		defaultOptions: {
			// set global default volume for all sound objects
			volume: 100
		}
	});
</script>

</html> 