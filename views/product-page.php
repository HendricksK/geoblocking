<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>Foundation | Welcome</title>
<?php
	include_once(DIRNAME(__FILE__) . '../../load.php');
?>
</head>
<body>
 

<?php
	include_once(DIRNAME(__FILE__) . '../../load/nav.php');
?>

<?php
if(!empty($_GET['id'])) {
	$show_id = $_GET['id'];

	$imdb = new imdb();
	$imdbdata = $imdb->get_show($show_id);
}
	
?>
<br>
<div class="container">

<div class="row columns">
		<nav aria-label="You are here:" role="navigation">
		<ul class="breadcrumbs">
		<li><a href="/geoblocking/index.php">Home</a></li>
		<li>
		<span class="show-for-sr">Current: </span> '<?php echo htmlspecialchars($imdbdata['original_name']) ?>'
		</li>
		</ul>
		</nav>
		</div>
		<div class="row">
		<div class="medium-6 columns">
		<img class="thumbnail" src='<?php echo htmlspecialchars($imdbdata['poster_path']) ?>'>
		<div class="row small-up-4">
			<div class="column">
			<img class="thumbnail" src="http://ecx.images-amazon.com/images/I/51%2Bx3T1BSiL._SX500_.jpg">
			</div>
			<div class="column">
			<img class="thumbnail" src="http://ecx.images-amazon.com/images/I/51%2Bx3T1BSiL._SX500_.jpg">
			</div>
			<div class="column">
			<img class="thumbnail" src="http://ecx.images-amazon.com/images/I/51%2Bx3T1BSiL._SX500_.jpg">
			</div>
			<div class="column">
			<img class="thumbnail" src="http://ecx.images-amazon.com/images/I/51%2Bx3T1BSiL._SX500_.jpg">
			</div>
		</div>
		</div>
		<div class="medium-6 large-5 columns media-detail">

		<span class="label">Air date season '<?php echo htmlspecialchars($imdbdata['air_date']) ?>'</span>
		<div class="success progress release">
		  <div class="progress-meter" style="width: 100%"></div>
		</div>

		<div class="callout">
		
			<p>Seasons: '<?php echo htmlspecialchars($imdbdata['number_of_seasons']) ?>'<br> 
				Episodes: '<?php echo htmlspecialchars($imdbdata['number_of_episodes']) ?>'<br> 
				Country of origin: '<?php echo htmlspecialchars($imdbdata['number_of_episodes']) ?>'<br>
			</p>
			<H5>Overview</H5><br>
				'<?php echo htmlspecialchars($imdbdata['overview']) ?>'
		</div>

		<div class="small secondary expanded button-group">
		<a class="button">Facebook</a>
		<a class="button">Twitter</a>
		<a class="button">Yo</a>
		</div>
		</div>
		</div>
		<div class="column row">
		<hr>
		<ul class="tabs" data-tabs id="example-tabs">
		<li class="tabs-title is-active"><a href="#panel1" aria-selected="true">Reviews</a></li>
		<li class="tabs-title"><a href="#panel2">Similar Products</a></li>
		</ul>
		<div class="tabs-content" data-tabs-content="example-tabs">
		<div class="tabs-panel is-active" id="panel1">
		<h4>Reviews</h4>
		<div class="media-object stack-for-small">
		<div class="media-object-section">
		<img class="thumbnail" src="http://placehold.it/200x200">
		</div>
		<div class="media-object-section">
		<h5>Mike Stevenson</h5>
		<p>Im going to improvise. Listen, theres something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you.</p>
		</div>
		</div>
		<div class="media-object stack-for-small">
		<div class="media-object-section">
		<img class="thumbnail" src="http://placehold.it/200x200">
		</div>
		<div class="media-object-section">
		<h5>Mike Stevenson</h5>
		<p>Im going to improvise. Listen, theres something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you</p>
		</div>
		</div>
		<div class="media-object stack-for-small">
		<div class="media-object-section">
		<img class="thumbnail" src="http://placehold.it/200x200">
		</div>
		<div class="media-object-section">
		<h5>Mike Stevenson</h5>
		<p>Im going to improvise. Listen, theres something you should know about me... about inception. An idea is like a virus, resilient, highly contagious. The smallest seed of an idea can grow. It can grow to define or destroy you</p>
		</div>
		</div>
		<label>
		My Review
		<textarea placeholder="None"></textarea>
		</label>
		<button class="button">Submit Review</button>
		</div>
		<div class="tabs-panel" id="panel2">
		<div class="row medium-up-3 large-up-5">
		<div class="column">
		<img class="thumbnail" src="http://placehold.it/350x200">
		<h5>Other Product <small>$22</small></h5>
		<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
		<a href="#" class="button hollow tiny expanded">Buy Now</a>
		</div>
		<div class="column">
		<img class="thumbnail" src="http://placehold.it/350x200">
		<h5>Other Product <small>$22</small></h5>
		<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
		<a href="#" class="button hollow tiny expanded">Buy Now</a>
		</div>
		<div class="column">
		<img class="thumbnail" src="http://placehold.it/350x200">
		<h5>Other Product <small>$22</small></h5>
		<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
		<a href="#" class="button hollow tiny expanded">Buy Now</a>
		</div>
		<div class="column">
		<img class="thumbnail" src="http://placehold.it/350x200">
		<h5>Other Product <small>$22</small></h5>
		<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
		<a href="#" class="button hollow tiny expanded">Buy Now</a>
		</div>
		<div class="column">
		<img class="thumbnail" src="http://placehold.it/350x200">
		<h5>Other Product <small>$22</small></h5>
		<p>In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam.</p>
		<a href="#" class="button hollow tiny expanded">Buy Now</a>
		</div>
		</div>
		</div>
		</div>
		</div>

</div>
<?php
	include_once(DIRNAME(__FILE__) . '../../load/footer.php');
?>

</body>
</html>
