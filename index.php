<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>

<?php
	include_once(DIRNAME(__FILE__) . './load.php');
?>

</head>
<body class="home-page">

<?php
	include_once(DIRNAME(__FILE__) . './load/nav.php');
?>


<div class="container">
<div class="callout primary">
<div class="row column">
<h1>This site is being built to try and show the differeneces in release dates globally of series and films. Site is currently in alpha</h1>
<p class="lead">The introduction of the internet and global communications should decrease the time it takes to release content, digital rights management and pricing of content is slowing this trend down. This site will try and highlight the effects of geoblocking on the release of content in other parts of the world.</p>
</div>
</div>

<div class="row small-up-2 medium-up-3 large-up-4">
<?php
	$imdb = new imdb();
	$top_results = $imdb->get_top();
	echo $top_results;
?>

</div>

<?php
	include_once(DIRNAME(__FILE__) . './load/footer.php');
?>

</body>
</html>
