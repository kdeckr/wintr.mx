<!DOCTYPE html>
<html>
<?php 
	$year = intval(basename(dirname($_SERVER['PHP_SELF'])));
	$prevYear = $year - 1;
	$nextYear = $year + 1; 
?>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winter Mix <?php echo $year; ?></title>
	<link rel="stylesheet" type="text/css" href="../style.css">
	<link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
</head>

<body <?php echo('id="y-'.$year.'"'); ?>>
	<div id="wrapper" class="cf">
		<nav>
			<ul class="cf">
				<li class="prev">
					<?php if ($year > 2009): ?>
						<a href=<?php echo ('"../'.$prevYear.'/">'.$prevYear); ?></a>
					<?php else: ?>
						<a class="disabled"><?php echo $prevYear; ?></a>
					<?php endif; ?>
				</li>
				<li class="current">
					<a href=""><?php echo $year; ?></a>
				</li>
				<li class="next">
					<?php if ($year < 2013): ?>
						<a href=<?php echo ('"../'.$nextYear.'/">'.$nextYear); ?></a>
					<?php else: ?>
						<a class="disabled"><?php echo $nextYear; ?></a>
					<?php endif; ?>
				</li>
			</ul>
		</nav>
		<section id="content" class="cf">
			<header><h1>Winter Mix <?php echo $year; ?></h1></header>