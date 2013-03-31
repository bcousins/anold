<!doctype html>
<html lang="en">
<head>
<title>Maintenance | Asperger's Network</title>
<style type="text/css">
	h1{
		font-family:arial;
		top:20px;
		text-align: center;
	}
	h4{
		font-family:arial;
		text-align: center;
	}
	p{
		font-family:arial;
		text-align: center;
	}
</style>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36430927-1']);
  _gaq.push(['_setDomainName', 'aspergersnetwork.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
	<h1>Asperger's Network</h1>
	<br><br>
	<h4>
	<?php
	$f_contents = file("excuses.txt");
	$line = $f_contents[array_rand ($f_contents)];
	print $line;
	?></h4>
	<br><br>
	<p><em>Well, uh, actually... </em></p>
	<p>Asperger's Network is not ready for public release yet. We anticipate a release of 18 Mar 2013.</p>
</body>
</html>