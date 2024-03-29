<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!--Edit the title of the page-->
	<title><?php echo $title; ?></title>	
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v2/themes/css/cartodb.css" />
    <!--[if lte IE 8]>
      <link rel="stylesheet" href="http://libs.cartocdn.com/cartodb.js/v2/themes/css/cartodb.ie.css" />
    <![endif]-->
    <!--Switch between the different themes changing the stylesheet below - light-theme.css |dark-theme.css -->
    <?php echo Asset::css('light-theme.css'); ?>
    <?php echo Asset::css('makeitresponsive.css'); ?>
    <link rel="stylesheet" href="css/makeitresponsive.css">
    <script src="http://libs.cartocdn.com/cartodb.js/v2/cartodb.js"></script>
  </head>
  <body>

    <div class="map" id="map"></div>

    <div class="sidepanel">
      <div class="wrapper">
        <div class="context subheader">
          <p>Map created by <a href="#">{Link to your website}</a></p>
        </div>
        <h1>Title of your visualization</h1>
        <p>An earthquake of magnitude 9.0 occurred March 11, 2012, off the northeastern Pacific coast of Japan. The earthquake was followed by a tsunami which would reach 9.3m or higher at Fukushima Prefecture. <a href=''>Combined, the two claimed almost</a> 20,000 lives in the region of Tohoku and triggered nuclear meltdowns at three reactors in Fukushima nuclear plant.</p>

        <!--Copy and paste the div below for creating content blocks-->
        <h3>Description</h3>
        <p>The size and age of the Cosmos are beyond ordinary human understanding. Lost somewhere between immensity and eternity is our tiny planetary home. In a cosmic perspective, most human concerns seem insignificant, even petty. And yet our species is young and curious and brave and shows much promise. In the last few millennia we have made the most astonishing, unexpected discoveries about the Cosmos and our place within it, explorations that are exhilarating to consider. They remind us that humans have evolved to wonder, that understanding is a joy, that knowledge is prerequisite to survival. I believe our future depends powerfully on how well we understand this Cosmos in which we float like a mote of dust in the morning sky.</p>

        <h3>Sources</h3>
        <p>Unexpected discoveries about the <a href="#">Cosmos and our place</a> within it, explorations that are <a href="#">exhilarating</a> to consider. They remind us that humans have evolved to wonder, that understanding is a joy, that knowledge is prerequisite to survival. I believe our future depends powerfully on how well we understand this.</p>

        <div class="context footer">
          <p>Create your maps with ease using <a href="http://cartodb.com">CartoDB</a></p></p>
        </div>
      </div>
    </div>

    <!--Change the URL below in order to change the map that is being shown.
    Go to your map in CartoDB, click on share, and copy the URL undert the API section
    Check the cartodb.js documentation for more info
    http://developers.cartodb.com/documentation/cartodb-js.html-->
    <script type="text/javascript">
      cartodb.createVis('map', 'http://examples.cartodb.com/api/v1/viz/15590/viz.json');
    </script>

  </body>
</html>