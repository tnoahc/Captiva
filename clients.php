<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
<meta name="keywords" content="Captiva, Captiva Africa, Uganda, Kenya, Captiva Communications, Captiva Uganda, communications">
<title>Clients</title>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400' rel='stylesheet' type='text/css'>
<link href="css/media_queries.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--><script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.flip.min.js"></script>
<script type="text/javascript" src="js/script.js"></script><script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35501042-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div class="container">
  <header>
    <h1>Our Clients</h1>
    <pre><a href="index.html">Home</a> | <a href="client_service.html">Client Service</a> | <a href="../clients.php">Clients</a> | <a href="../marketing.html">Captiva Marketing</a> | <a href="../careers.html">Careers</a></pre>
    <a href="index.html"><img src="imgs/captiva-logo.svg" alt="Captiva Africa: Logo" width="120" height="120"></a></header>
  <section>
    <?php

// Each sponsor is an element of the $sponsors array:
include('inc/sponsors.php');

// Randomizing the order of sponsors:

shuffle($sponsors);

?>
    <div id="main">
      <div class="sponsorListHolder">
        <?php
			
			// Looping through the array:
			
			foreach($sponsors as $company)
			{
				echo'
				<div class="sponsor" title="Click to flip">
					<div class="sponsorFlip">
						<img src="imgs/logos/'.$company[0].'.gif" alt="More about '.$company[0].'" />
					</div>
					
					<div class="sponsorData">
						<div class="sponsorDescription">
							'.$company[1].'
						</div>
						<div class="sponsorURL">
							<a href="'.$company[2].'" target="_blank">'.$company[2].'</a>
						</div>
					</div>
				</div>
				
				';
			}
		
		?>
        <div class="clear"></div>
      </div>
    </div>
  </section>
  <footer>
    <p>©2014 Captiva Africa LLC. All rights reserved <br>
      Tel: +256 414 236 303 | +256 312 514 327 | <a href="mailto:info@captivaafrica.com">info@captivaafrica.com</a> | <a href="about.html">about</a> | <a href="contact.html">contact us</a> | <a href="sitemap.xml">sitemap</a></p>
  </footer>
  <!-- end .container --></div>
</body>
</html>
