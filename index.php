<?php

/**
*  Prints n items from an RSS feed 
**/
function getRssFeed($url, $numPosts){
    $rss = new DOMDocument();
    $rss->load($url);
    $feed = array();
    foreach ($rss->getElementsByTagName('item') as $node) {
    $item = array (
    'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
    'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
    'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
    'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
    );
    array_push($feed, $item);
    }
    $limit = $numPosts;
    for($x=0;$x<$limit;$x++) {
    $title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
    $link = $feed[$x]['link'];
    $description = $feed[$x]['desc'];
    $date = date('l F d, Y', strtotime($feed[$x]['date']));
    echo '<h1>'.$title.'</h1>';
    echo '<p>Posted on '.$date.' - ';
    echo $description.'</p>';
    echo '<p><a class="btn btn-large btn-primary" href="'.$link.'"  title="'.$title.'">'.$title.'</a></p>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">

    <title>Fredericksburg Area Coder Dojo</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="site/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Fredx Coder Dojo</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
		<li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home<b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="curriculum.php">Curriculum</a></li>
                  </ul>
                </li>
                <li><a href="#contact">&#8226; Contact</a></li>
                <li><a href="#about">&#8226; About</a></li>
                <li><a href="#mentors">&#8226; Mentors</a></li>
		<li><a href="#supportedBy">&#8226; Supported By</a></li>
                <!-- <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li> -->
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="/files/IMG_20130809_104907_679.jpg" alt="First slide" class="rev-img">
          <div class="container">
            <div class="carousel-caption">
              <h1>Engaging</h1>
              <p>Students learning from a variety of activities in the UMW Learner Space.</p>
              <!-- <p><a class="btn btn-large btn-primary" href="#">Sign up today</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/files/IMG_20130914_101410_170.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Cool Stuff</h1>
              <p>Dr Meadows giving a demo of a 3D printer and Thingiverse.</p>
              <!-- <p><a class="btn btn-large btn-primary" href="#">Learn more</a></p> -->
            </div>
          </div>
        </div>
        <div class="item">
          <img src="/files/IMG_20130914_123055_180.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>The Code</h1>
              <p>Open Source offers an excellent opportunity to learn how code works. Here Elliott is walking our students through CPW's Buildcraft mod for Minecraft.</p>
              <!-- <p><a class="btn btn-large btn-primary" href="#">Browse gallery</a></p> -->
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-colheader" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMyIDMyIiBoZWlnaHQ9IjMycHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMycHgiIHg9IjBweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeT0iMHB4Ij48ZyBpZD0iY2FsZW5kYXJfMV8iPjxwYXRoIGQ9Ik0yOS4zMzQsM0gyNVYxYzAtMC41NTMtMC40NDctMS0xLTFzLTEsMC40NDctMSwxdjJoLTZWMWMwLTAuNTUzLTAuNDQ4LTEtMS0xcy0xLDAuNDQ3LTEsMXYySDlWMSAgIGMwLTAuNTUzLTAuNDQ4LTEtMS0xUzcsMC40NDcsNywxdjJIMi42NjdDMS4xOTQsMywwLDQuMTkzLDAsNS42NjZ2MjMuNjY3QzAsMzAuODA2LDEuMTk0LDMyLDIuNjY3LDMyaDI2LjY2NyAgIEMzMC44MDcsMzIsMzIsMzAuODA2LDMyLDI5LjMzM1Y1LjY2NkMzMiw0LjE5MywzMC44MDcsMywyOS4zMzQsM3ogTTMwLDI5LjMzM0MzMCwyOS43MDEsMjkuNzAxLDMwLDI5LjMzNCwzMEgyLjY2NyAgIEMyLjI5OSwzMCwyLDI5LjcwMSwy
LDI5LjMzM1Y1LjY2NkMyLDUuMjk5LDIuMjk5LDUsMi42NjcsNUg3djJjMCwwLjU1MywwLjQ0OCwxLDEsMXMxLTAuNDQ3LDEtMVY1aDZ2MmMwLDAuNTUzLDAuNDQ4LDEsMSwxICAgczEtMC40NDcsMS0xVjVoNnYyYzAsMC41NTMsMC40NDcsMSwxLDFzMS0wLjQ0NywxLTFWNWg0LjMzNEMyOS43MDEsNSwzMCw1LjI5OSwzMCw1LjY2NlYyOS4zMzN6IiBmaWxsPSIjMzMzMzMyIi8+PHJlY3QgZmlsbD0iIzMzMzMzMiIgaGVpZ2h0PSIzIiB3aWR0aD0iNCIgeD0iNyIgeT0iMTIiLz48cmVjdCBmaWxsPSIjMzMzMzMyIiBoZWlnaHQ9IjMiIHdpZHRoPSI0IiB4PSI3IiB5PSIxNyIvPjxyZWN0IGZpbGw9IiMzMzMzMzIiIGhlaWdodD0iMyIgd2lkdGg9IjQiIHg9IjciIHk9IjIyIi8+PHJlY3QgZmlsbD0iIzMzMzMzMiIgaGVpZ2h0PSIzIiB3aWR0aD0iNCIgeD0iMTQiIHk9IjIyIi8+PHJlY3QgZmlsbD0iIzMzMzMzMiIgaGVpZ2h0PSIzIiB3aWR0aD0iNCIgeD0iMTQiIHk9IjE3Ii8+PHJlY3QgZmlsbD0iIzMzMzMzMiIgaGVpZ2h0PSIzIiB3aWR0aD0iNCIgeD0iMTQiIHk9IjEyIi8+PHJlY3QgZmlsbD0iIzMzMzMzMiIgaGVpZ2h0PSIzIiB3aWR0aD0iNCIgeD0iMjEiIHk9IjIyIi8+PHJlY3QgZmlsbD0iIzMzMzMzMiIgaGVpZ2h0PSIzIiB3aWR0aD0iNCIgeD0iMjEiIHk9IjE3Ii8+PHJlY3QgZmlsbD0iIzMzMzMzMiIgaGVpZ2h0PSIzIiB3aWR0aD0iNCIgeD0iMjEiIHk9IjEyIi8+PC9nPjwvc3ZnPg==" alt="Event Info Image" title="Event Info">
          <!-- <h2>Heading</h2>
          <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p> -->
	  <?php getRssFeed("http://www.fredxcoders.com/dojo/?cat=9&feed=rss2", 1) ?>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-colheader" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMyIDMyIiBoZWlnaHQ9IjMycHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMycHgiIHg9IjBweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeT0iMHB4Ij48ZyBpZD0ibmV3cyI+PHBhdGggY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMjksMEg3QzUuMzQzLDAsNCwxLjM0Miw0LDN2MkgzQzEuMzQzLDUsMCw2LjM0MiwwLDh2MjAgICBjMCwyLjIwOSwxLjc5MSw0LDQsNGgyNGMyLjIwOSwwLDQtMS43OTEsNC00VjNDMzIsMS4zNDIsMzAuNjU2LDAsMjksMHogTTMwLDI4YzAsMS4xMDItMC44OTgsMi0yLDJINGMtMS4xMDMsMC0yLTAuODk4LTItMlY4ICAgYzAtMC41NTIsMC40NDgtMSwxLTFoMXYyMGMwLDAuNTUzLDAuNDQ3LDEsMSwxczEtMC40NDcsMS0xVjNjMC0wLjU1MiwwLjQ0OC0xLDEtMWgyMmMwLjU1MSwwLDEsMC40NDgsMSwxVjI4eiIgZmlsbD0iIzMzMzMzMyIgZmlsbC1ydWxlPSJldmVub2RkIi8+
PHBhdGggY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMTkuNDk4LDEzLjAwNWg4YzAuMjc3LDAsMC41LTAuMjI0LDAuNS0wLjVzLTAuMjIzLTAuNS0wLjUtMC41ICAgaC04Yy0wLjI3NSwwLTAuNSwwLjIyNC0wLjUsMC41UzE5LjIyMywxMy4wMDUsMTkuNDk4LDEzLjAwNXoiIGZpbGw9IiMzMzMzMzMiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTE5LjQ5OCwxMC4wMDVoOGMwLjI3NywwLDAuNS0wLjIyNCwwLjUtMC41cy0wLjIyMy0wLjUtMC41LTAuNSAgIGgtOGMtMC4yNzUsMC0wLjUsMC4yMjQtMC41LDAuNVMxOS4yMjMsMTAuMDA1LDE5LjQ5OCwxMC4wMDV6IiBmaWxsPSIjMzMzMzMzIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xOS40OTgsNy4wMDVoOGMwLjI3NywwLDAuNS0wLjIyNCwwLjUtMC41cy0wLjIyMy0wLjUtMC41LTAuNWgtOCAgIGMtMC4yNzUsMC0wLjUsMC4yMjQtMC41LDAuNVMxOS4yMjMsNy4wMDUsMTkuNDk4LDcuMDA1eiIgZmlsbD0iIzMzMzMzMyIgZmlsbC1ydWxlPSJldmVub2RkIi8+PHBhdGggY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMTYuNSwyNy4wMDRoLThjLTAuMjc2LDAtMC41LDAuMjI1LTAuNSwwLjUgICBjMCwwLjI3NywwLjIyNCwwLjUsMC41LDAuNWg4YzAuMjc1LDAsMC41LTAuMjIzLDAuNS0wLjVDMTcsMjcuMjI5LDE2Ljc3NiwyNy4wMDQsMTYuNSwyNy4wMDR6IiBmaWxsPSIjMzMzMzMzIiBmaWxsLXJ1bGU9ImV2ZW5vZGQi
Lz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xNi41LDI0LjAwNGgtOGMtMC4yNzYsMC0wLjUsMC4yMjUtMC41LDAuNSAgIGMwLDAuMjc3LDAuMjI0LDAuNSwwLjUsMC41aDhjMC4yNzUsMCwwLjUtMC4yMjMsMC41LTAuNUMxNywyNC4yMjksMTYuNzc2LDI0LjAwNCwxNi41LDI0LjAwNHoiIGZpbGw9IiMzMzMzMzMiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTE2LjUsMjEuMDA0aC04Yy0wLjI3NiwwLTAuNSwwLjIyNS0wLjUsMC41ICAgYzAsMC4yNzcsMC4yMjQsMC41LDAuNSwwLjVoOGMwLjI3NSwwLDAuNS0wLjIyMywwLjUtMC41QzE3LDIxLjIyOSwxNi43NzYsMjEuMDA0LDE2LjUsMjEuMDA0eiIgZmlsbD0iIzMzMzMzMyIgZmlsbC1ydWxlPSJldmVub2RkIi8+PHBhdGggY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMjcuNSwyNy4wMDRoLThjLTAuMjc3LDAtMC41LDAuMjI1LTAuNSwwLjUgICBjMCwwLjI3NywwLjIyMywwLjUsMC41LDAuNWg4YzAuMjc1LDAsMC41LTAuMjIzLDAuNS0wLjVDMjgsMjcuMjI5LDI3Ljc3NSwyNy4wMDQsMjcuNSwyNy4wMDR6IiBmaWxsPSIjMzMzMzMzIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yNy41LDI0LjAwNGgtOGMtMC4yNzcsMC0wLjUsMC4yMjUtMC41LDAuNSAgIGMwLDAuMjc3LDAuMjIzLDAuNSwwLjUsMC41aDhjMC4yNzUsMCwwLjUtMC4yMjMsMC41LTAuNUMyOCwyNC4yMjksMjcuNzc1LDI0LjAwNCwyNy41
LDI0LjAwNHoiIGZpbGw9IiMzMzMzMzMiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTI3LjUsMjEuMDA0aC04Yy0wLjI3NywwLTAuNSwwLjIyNS0wLjUsMC41ICAgYzAsMC4yNzcsMC4yMjMsMC41LDAuNSwwLjVoOGMwLjI3NSwwLDAuNS0wLjIyMywwLjUtMC41QzI4LDIxLjIyOSwyNy43NzUsMjEuMDA0LDI3LjUsMjEuMDA0eiIgZmlsbD0iIzMzMzMzMyIgZmlsbC1ydWxlPSJldmVub2RkIi8+PHBhdGggY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMjcuNSwxNS4wMDRoLTE5Yy0wLjI3NiwwLTAuNSwwLjIyNC0wLjUsMC41czAuMjI0LDAuNSwwLjUsMC41ICAgaDE5YzAuMjc1LDAsMC41LTAuMjI0LDAuNS0wLjVTMjcuNzc1LDE1LjAwNCwyNy41LDE1LjAwNHoiIGZpbGw9IiMzMzMzMzMiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjxwYXRoIGNsaXAtcnVsZT0iZXZlbm9kZCIgZD0iTTI3LjUsMTguMDA0aC0xOWMtMC4yNzYsMC0wLjUsMC4yMjUtMC41LDAuNSAgIGMwLDAuMjc3LDAuMjI0LDAuNSwwLjUsMC41aDE5YzAuMjc1LDAsMC41LTAuMjIzLDAuNS0wLjVDMjgsMTguMjI5LDI3Ljc3NSwxOC4wMDQsMjcuNSwxOC4wMDR6IiBmaWxsPSIjMzMzMzMzIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48cGF0aCBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik05LDEzaDdjMC41NTMsMCwxLTAuNDQ3LDEtMVY1LjAwNGMwLTAuNTUzLTAuNDQ3LTEtMS0xSDkgICBjLTAuNTUzLDAtMSwwLjQ0Ny0xLDFWMTJDOCwxMi41NTIsOC40NDcs
MTMsOSwxM3ogTTEwLDZoNXY1aC01VjZ6IiBmaWxsPSIjMzMzMzMzIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiLz48L2c+PC9zdmc+" alt="News Image" title="News">
          <!-- <h2>Heading</h2>
          <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p> -->
	  <?php getRssFeed("http://www.fredxcoders.com/dojo/?cat=2&feed=rss2", 1) ?>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img class="img-colheader" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMyIDMyIiBoZWlnaHQ9IjMycHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMycHgiIHg9IjBweCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeT0iMHB4Ij48cGF0aCBkPSJNMzEuNTQzLDAuMTZDMzEuMzc3LDAuMDUzLDMxLjE4OCwwLDMxLDBjLTAuMTkzLDAtMC4zODcsMC4wNTUtMC41NTUsMC4xNjhsLTMwLDIwICBjLTAuMzA5LDAuMjA1LTAuNDc5LDAuNTY2LTAuNDM5LDAuOTM2YzAuMDM4LDAuMzY5LDAuMjc4LDAuNjg4LDAuNjIzLDAuODI0bDcuODI0LDMuMTMxbDMuNjc5LDYuNDM4ICBjMC4xNzYsMC4zMDksMC41MDMsMC41LDAuODU3LDAuNTA0YzAuMDA0LDAsMC4wMDcsMCwwLjAxMSwwYzAuMzUxLDAsMC42NzctMC4xODYsMC44NTctMC40ODZsMi4wNzctMy40NjNsOS42OTUsMy44NzcgIEMyNS43NDgsMzEuOTc3LDI1Ljg3MywzMiwyNiwzMmMwLjE3LDAsMC4zMzgtMC4wNDMsMC40OS0wLjEyOWMw
LjI2NC0wLjE0OCwwLjQ0NS0wLjQwOCwwLjQ5Ni0wLjcwN2w1LTMwICBDMzIuMDUxLDAuNzcxLDMxLjg3NywwLjM3NywzMS41NDMsMC4xNnogTTMuMTM2LDIwLjc3N0wyNi4zMTEsNS4zMjZMOS40NjEsMjMuMzYzYy0wLjA4OS0wLjA1My0wLjE2OC0wLjEyMy0wLjI2Ni0wLjE2MiAgTDMuMTM2LDIwLjc3N3ogTTEwLjE4OSwyNC4wNjZjLTAuMDAyLTAuMDA0LTAuMDA1LTAuMDA2LTAuMDA3LTAuMDFMMjkuMTI1LDMuNzgxTDEyLjk3NiwyOC45NDNMMTAuMTg5LDI0LjA2NnogTTI1LjIxNywyOS42MDkgIGwtOC41NDEtMy40MTZjLTAuMjAzLTAuMDgtMC40MTQtMC4xMDctMC42MjMtMC4xMTlMMjkuMjA1LDUuNjg2TDI1LjIxNywyOS42MDl6IiBmaWxsPSIjMzMzMzMzIiBpZD0icGFwZXJwbGFuZSIvPjwvc3ZnPg==" alt="Follow-up Image" title="Follow-up">
          <!-- <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn btn-default" href="#">View details &raquo;</a></p> -->
	  <?php getRssFeed("http://www.fredxcoders.com/dojo/?cat=10&feed=rss2", 1) ?>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <a name="contact"></a>
      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/files/contact.png" alt="Contact Us image">
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading-large featurette-heading">Contact <span class="text-muted">Join Our Community</span></h2>
          <p class="lead">Have feedback? Want to mentor? Want to donate? We'd love to hear from you! We have a policy of failing forward (the educational equivalent of iterative development) and our progress is magnified by community participation in multiple facets of the Dojo. </p>
          <!-- <p><a class="btn btn-default" href="#">Contact Us</a></p> -->	
          <p class="lead">Contact us at: dojo at fredxcoders.com</p>
	  <p>
		<!-- Begin MailChimp Signup Form -->
		<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
		<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			  We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
		</style>
		<div id="mc_embed_signup">
		<form action="http://FredxCoders.us7.list-manage.com/subscribe/post?u=1d0eb8b62cc199a67a0087816&amp;id=ccadf2881b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<h2>Subscribe to our mailing list</h2>
		<div class="mc-field-group">
			<label for="mce-EMAIL">Email Address </label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</form>
		</div>
		<script type="text/javascript" src="site/js/mailchimp.js"></script>

		<!--End mc_embed_signup-->	  
	  </p>
        </div>
      </div>

<!--      <hr class="featurette-divider">

	<a name="about"></a>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="data:image/png;base64," data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div> -->
      <hr class="featurette-divider">
	<a name="about"></a>
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Fredx Coder Dojo <span class="text-muted">About Us</span></h2>
          <p class="lead">We teach young people how to code in the Fredericksburg, Virginia area. We are a non-profit movement working to influence how technology education interacts with students from 7-17, parents, community partners.. and most importantly.. schools and teachers. Be sure to check out our <a href="curriculum.php">Curriculum</a> for specific lessons, our <a href="http://www.fredxcoders.com/dojo/">Blog</a> for news and more, or our <a href="https://github.com/FredXCoders">GitHub</a> account for code!</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="/files/about.png" alt="About Us image">
        </div>
      </div>

      <!-- /END THE FEATURETTES -->

      
      <!-- ============================================== Mentors ===================================== -->
      <a name="mentors"></a>
      <hr>

 

      
      
      
      
      
   
   <div>
            <div id="mentorCarousel" class="carousel slide">
                
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-lg-3">
          <h2>Devon Loffreto</h2>
	<img class="about-img" src="data:image/gif;base64,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
4b6p4pi0ydUBucm8TAX50K5zpfLYsooO6uds
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">
          <p>I have a goal: to change how education functions and how personal data is administered within the life of a young person. I want to empower kids to own their own education, to control their own data, and to use their personal leverage to make this world work better. I am fully invested into entrepreneurial ed-tech; as a parent, as a citizen, as an occupation, and as a path of value in the lives of young people.</p>
	<p>
	<!-- Twitter -->
	<a href="https://twitter.com/CoderDojoVA" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @CoderDojoVA</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<!-- LinkedIn -->			
	<a href="http://www.linkedin.com/in/devonloffreto" style="text-decoration:none;"><span style="font: 80% Arial,sans-serif; color:#0783B6;"><img src="assets/img/linkedInButton.gif" width="20" height="20" alt="View Devon Lafretto's LinkedIn profile" style="vertical-align:top" border="0"></span></a>	
	
	<!-- Blog -->
	<a href="http://www.moxytongue.com/" style="text-decoration:none;"><img style="vertical-align:top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAjpQTFRF/lwA+ZVa+5ld/GMD/l0A/4Q1/Ord/rSL/4xA8mIQ/pVS/2gC/M2w+9W7/2QA/rOK+mwh+5pe4Zpw/NrC/Onb/NCz/LuZ/NG1/Mim4Zpy+ax5/WoL+9G1/l8A+3Ic/7aP+9G2/HMc+6x8/4Q0/3ws/Pv4/o9I/X8t/cqq/1wA+59l/a6A+9O5/mUA+9S5+MKi/mgF+J1m+Kp3/qx++6h0/7GF+9K2/Hkm/fr3/ruZ+5ZU98Ol+8Oh/o1E/MGj+55g+5db9Zto/24U/2MA/N7L/5lc/ODO/6Vw+G4n/YM5/Ove/qh2+93K+6Jm/Jda+LmW+ple+ZRa+JFO+KV1+Zlf7sOq/pxe5s2//X8x/NjA/GAA/1oA/4Mz/e7k/4c3/efY/45F/o5E4Jlu+v7//2UB+86w/2oJ+8ml/rqW/drD/dvG+3Qd+ZVX/3Yg+pdd/Mys/6t7+Mar+JVc5ci3/59l+7WF/biY/a+C810M+5dW/Y5H++PS/KRr/5JM/41L/OTV+7B++Goj/pRP+9rI9YtP+6Bi/qRu+8CZ/V8B+6Rt+9S7/o5G/loA+7iL+KFu+/7//Ore/oxB/q+C/reT+7eR/pVT+YpG/fj0/ow//4I3/OLR/6Fn4Zlu+7CD/fz6/rmW/NG4/byZ+m4i/18A+5tf/ejb/2kA8NC9+a17/qp5/LWH35py/5hW/Xch/fTu/mYL/oU1+9C5+ZNZ+9XD/NC2/fr4/Yg7+7SK/f//4Ztw/10A/2AA/v//////
yFaplQAAAQdJREFUeNpi2LrZTmzK9rlKJp1aSyqt2lUZmsssJ/NPWuk+O2xNrW2ceipD4fwMdmPvthLXqVxN3RNjGhis5dkXLtjCk68hUaOWyMEqxaBvWl6/Z8+eHXv2uFXN4GBdweBfoL10D1vvKpc98duUEzYYMQTX+c3aU+1rz7s3trR17foihr6ZnllAHTtA2nSiegIZDFUiMvdYTGAT8Zq3x4yZgZEhJNc8cu/GxkUCHj57ZUACOU6KwnvWKYiLdk3fowcSCEqTTgcZADLDpoOFkWFaikF2XgATEAg6yOnKbmJo0eR23sWyCwz4lkU7MoRWMOyGgcUMnMsZkosl5+yEAKGk1eH9AAEGABnUahUMk78LAAAAAElFTkSuQmCC"/></a>
	</p>
	</div>
	<div class="col-lg-3">
                            <h2>Elliott Sperlazza</h2>
	<img class="about-img" src="data:image/jpeg;base64,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">
          <p>Graduate of UMW with a Masters of Science in Elementary Education and a Bachelors of Science in Computer Science, I am a Consultant at Red Hat. The Dojo has given me a venue to use two seemingly unrelated abilities. My goal is to set the spark in our students which will drive ownership of learning and unlock genuine creativity.</p>
	<p>
	<!-- Place this tag where you want the widget to render. -->
	<div class="g-follow" data-annotation="none" data-height="20" data-href="//plus.google.com/116542873052008545465" data-rel="author"></div>
	
	</p>
       </div>
                            <div class="col-lg-3">
          <h2>Brandon Feldkamp</h2>
		  <img height="96px" width="100px" class="about-img" alt="Brandon Feldkamp" src="data:image/jpeg;base64,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
APWooorSwH//2Q==" />
          <p>Graduate of the Georgia Institute of Technology and Consultant at Red Hat. I love learning new concepts whether it's a new programming language or something completely unrelated like fixing something on my car. My goal with CoderDojo is to offer what I know but also learn something myself.</p>
		<p>
			<!-- google+ -->			
			<div class="g-follow" data-annotation="none" data-height="20" data-href="//plus.google.com/107842046095752601875" data-rel="author"></div>&nbsp;
			
			<!-- Twitter -->
			<a href="https://twitter.com/bjfeldkamp" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @CoderDojoVA</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					
			<!-- LinkedIn -->			
			<a href="http://www.linkedin.com/pub/brandon-feldkamp/9/977/35b" style="text-decoration:none;"><span style="font: 80% Arial,sans-serif; color:#0783B6;"><img src="assets/img/linkedInButton.gif" width="20" height="20" alt="View Brandon Feldkamp's LinkedIn profile" style="vertical-align:top" border="0"></span></a>	

			<!-- Place this tag after the last widget tag. -->
			<script type="text/javascript">
			  (function() {
				var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				po.src = 'https://apis.google.com/js/plusone.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
			  })();
			</script>
		</p>

        </div>
                            <div class="col-lg-3">
          <h2>Melora Loffreto</h2>
          <img height="96px" width="79px" class="about-img" alt="Melora Loffreto" src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4QDQRXhpZgAASUkqAAgAAAADABIBAwABAAAAAQAAADEBAgAHAAAAMgAAAGmHBAABAAAAOgAAAAAAAABQaWNhc2EAAAYAAJAHAAQAAAAwMjIwAaADAAEAAAABAAAAAqAEAAEAAADNAAAAA6AEAAEAAAD5AAAABaAEAAEAAACqAAAAIKQCACEAAACIAAAAAAAAADUwY2YxZjM3MmRlYTNjNWYwMDAwMDAwMDAwMDAwMDAwAAACAAEAAgAEAAAAUjk4AAIABwAEAAAAMDEwMAAAAAD/4QL9aHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJYTVAgQ29yZSA1LjEuMiI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDUzUuMSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkNGOEIwRTI4Q0ZCNDExRTJCMzU0ODExQkVCRjJBMjUzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkNGOEIwRTI5Q0ZCNDExRTJCMzU0ODExQkVCRjJBMjUzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6Q0Y4QjBFMjZDRkI0MTFFMkIzNTQ4MTFCRUJGMkEyNTMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6Q0Y4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" />
          <p>I specialize in making, finding, selling and distributing developmental tools for educating young people. Whether innovating toys for developing our youngest minds, or innovating tech-based programs, I focus on delivering top quality experiences for kids and their families</p>
	    <!-- <p><a class="btn btn-default" href="#">Contact Us</a></p> -->
	  <p>
	  	<!-- Twitter -->
	<a href="http://twitter.com/kid_OYO" class="twitter-follow-button" data-show-count="false" data-show-screen-name="false">Follow @CoderDojoVA</a>
	<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

	<!-- LinkedIn -->			
	<a href="http://www.linkedin.com/in/meloraloffreto" style="text-decoration:none;"><span style="font: 80% Arial,sans-serif; color:#0783B6;"><img src="assets/img/linkedInButton.gif" width="20" height="20" alt="View Devon Lafretto's LinkedIn profile" style="vertical-align:top" border="0"></span></a>	
	
	<!-- Blog -->
	<a href="http://www.zhenerbeefarms.com/" style="text-decoration:none;"><img style="vertical-align:top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAMAAAAoLQ9TAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAjpQTFRF/lwA+ZVa+5ld/GMD/l0A/4Q1/Ord/rSL/4xA8mIQ/pVS/2gC/M2w+9W7/2QA/rOK+mwh+5pe4Zpw/NrC/Onb/NCz/LuZ/NG1/Mim4Zpy+ax5/WoL+9G1/l8A+3Ic/7aP+9G2/HMc+6x8/4Q0/3ws/Pv4/o9I/X8t/cqq/1wA+59l/a6A+9O5/mUA+9S5+MKi/mgF+J1m+Kp3/qx++6h0/7GF+9K2/Hkm/fr3/ruZ+5ZU98Ol+8Oh/o1E/MGj+55g+5db9Zto/24U/2MA/N7L/5lc/ODO/6Vw+G4n/YM5/Ove/qh2+93K+6Jm/Jda+LmW+ple+ZRa+JFO+KV1+Zlf7sOq/pxe5s2//X8x/NjA/GAA/1oA/4Mz/e7k/4c3/efY/45F/o5E4Jlu+v7//2UB+86w/2oJ+8ml/rqW/drD/dvG+3Qd+ZVX/3Yg+pdd/Mys/6t7+Mar+JVc5ci3/59l+7WF/biY/a+C810M+5dW/Y5H++PS/KRr/5JM/41L/OTV+7B++Goj/pRP+9rI9YtP+6Bi/qRu+8CZ/V8B+6Rt+9S7/o5G/loA+7iL+KFu+/7//Ore/oxB/q+C/reT+7eR/pVT+YpG/fj0/ow//4I3/OLR/6Fn4Zlu+7CD/fz6/rmW/NG4/byZ+m4i/18A+5tf/ejb/2kA8NC9+a17/qp5/LWH35py/5hW/Xch/fTu/mYL/oU1+9C5+ZNZ+9XD/NC2/fr4/Yg7+7SK/f//4Ztw/10A/2AA/v//////
	yFaplQAAAQdJREFUeNpi2LrZTmzK9rlKJp1aSyqt2lUZmsssJ/NPWuk+O2xNrW2ceipD4fwMdmPvthLXqVxN3RNjGhis5dkXLtjCk68hUaOWyMEqxaBvWl6/Z8+eHXv2uFXN4GBdweBfoL10D1vvKpc98duUEzYYMQTX+c3aU+1rz7s3trR17foihr6ZnllAHTtA2nSiegIZDFUiMvdYTGAT8Zq3x4yZgZEhJNc8cu/GxkUCHj57ZUACOU6KwnvWKYiLdk3fowcSCEqTTgcZADLDpoOFkWFaikF2XgATEAg6yOnKbmJo0eR23sWyCwz4lkU7MoRWMOyGgcUMnMsZkosl5+yEAKGk1eH9AAEGABnUahUMk78LAAAAAElFTkSuQmCC"/></a>
	  </p>
	  <!-- <p><a href="http://www.zhenerbeefarms.com/">Blog</a> | <a href="http://twitter.com/kid_OYO">Twitter</a> | <a href="http://www.linkedin.com/in/meloraloffreto">LinkedIn</a></p>	-->
        </div>
                        </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                    <div class="item">
                        <div class="row">
			      <div class="col-lg-3">
          <h2>Joel Peck</h2>
          <p>I have a Masters from VCU and a Bachelors from UMW both in Computer Science. I'm a software engineer for the Navy by day and an adjunct professor for UMW's computer science department at night. The Dojo gives me a chance to introduce people to the world of making and I really enjoy seeing the unbridled enthusiasm from our students after each lesson.</p>
	    <!-- <p><a class="btn btn-default" href="#">Contact Us</a></p> -->
	  <p></p>	
        </div>
                            	<div class="col-lg-3">
          <h2>Your Name Here</h2>
          <p>We are always looking for new mentors. Whether you want to teach one lession on a specialty subject or want to be a regular contributor, contact us and let us know your interest!</p>
	    <!-- <p><a class="btn btn-default" href="#">Contact Us</a></p> -->
          <p>Contact us at: dojo at fredxcoders.com</p>
        </div> 
                          </div>
                        <!--/row-->
                    </div>
                    <!--/item-->
                </div>
                <!--/carousel-inner--> <a class="left carousel-control" href="#mentorCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>

                <a class="right carousel-control" href="#mentorCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
            <!--/myCarousel-->
    </div>
    
      
      <!-- ============================================== Supporters ===================================== -->
      <hr>
      <a name="supportedBy"></a>
      <div class="row">
	      <div class="supporters">
		      <h2>Dojo Supported By</h2>
		      <div>
		      <a title="Red Hat" href="http://www.redhat.com"><img style="width:144px;height:46px;" class="supporter-img" alt="Red Hat Logo" src="http://www.fredxcoders.com/dojo/wp-content/uploads/2013/05/RH_Logo.jpg"></a>
		      <a title="kidOYO Entrepreneurial Ed-Tech" href="http://www.noizivy.org/services"><img style="width:144px;height:160px" class="supporter-img" alt="kidOYO logo" src="http://www.fredxcoders.com/dojo/wp-content/uploads/2013/07/bot-green.jpg">
		      <a title="UMW" href="http://education.umw.edu/"><img style="width:144px;height:160px" class="supporter-img" alt="UMW logo" src="http://www.fredxcoders.com/dojo/wp-content/uploads/2013/09/umw_partner.png"></a>
		      </div>
	      </div>
      </div>
      <hr>        

        <!-- Attribution -->

      <div class="row">
	<h4>Attribution</h4>
	<p>Icons from <a href="https://www.iconfinder.com/designmodo">Designmodo</a> Licensed under Creative Commons (Attribute 3.0 Unported)</p>
      </div>


      <hr>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 FredXCoders
        <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by-sa/3.0/88x31.png" /></a>
        </p>
      </footer>

    </div><!-- /.container -->

    
    
 
    
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/holder.js"></script>
    <script type="text/javascript">// <![CDATA[
    var $ = jQuery.noConflict(); $(document).ready(function()  { $('#myCarousel').carousel({ interval: 5000, cycle: true }); });
    // ]]></script>
  </body>
</html>

