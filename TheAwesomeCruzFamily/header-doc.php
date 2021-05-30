<!-- PAGE TYPE: header-doc.php -->
<div id="doc_header">
	<h1>The Awesome Cruz Family</h1>
	
	<img id="headerBannder" src="http://theawesomecruzfamily.com/wp-content/uploads/<?php
	$imageArray = array(
		"2013/06/cropped-IMG_1963.jpg",
		"2013/06/cropped-IMG_1997.jpg",
		"2013/06/cropped-IMG_2030.jpg",
		"2012/12/cropped-043.jpg",
		"2013/04/cropped-055.jpg",
		"2013/03/cropped-056.jpg",
		"2013/03/cropped-108.jpg",
		"2013/01/cropped-133.jpg",
		"2013/01/cropped-147.jpg",
		"2013/04/cropped-174.jpg",
		"2013/04/cropped-220.jpg",
		"2013/04/cropped-303.jpg",
		"2013/04/cropped-311.jpg",
		"2013/01/cropped-352.jpg",
		"2013/01/cropped-840.jpg",
		"2013/01/cropped-0761.jpg",
		"2013/01/cropped-5541.jpg"
	);
	shuffle($imageArray);
	echo $imageArray[0];
	?>" width="992" height="200" alt="TheAwesomeCruzFamily.com">
	
	<div id="headerMenu">
		<a class="headerMenuItem" href="/index.php">Home</a>
		<a class="headerMenuItem" href="/sample-page/">About</a>
		<a class="headerMenuItem" href="/archives/">Archives</a>
		<a class="headerMenuItem" href="/?cat=8">Recipes</a>
		<?php get_search_form(); ?>
	</div>
</div>