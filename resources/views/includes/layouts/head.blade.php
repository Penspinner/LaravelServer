<?php
	if (!isset($title)) 			$title = "Steven Liao";
	if (!isset($stylesheets)) $stylesheets = array();
	if (!isset($extscripts))	$extscripts = array();
	if (!isset($extras))			$extras = "";
?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="description" content="Steven Liao is a computer science graduate from Stony Brook University.">
	<meta name="keywords" content="Steven Liao, Stony Brook University, software engineer, web developer, software developer, New York City, NYC, resume, full stack developer, hacker, OP ">
	<title>{{ $title }}</title>
	<link rel="icon" type="image/png" href="images/Rubiks-cube-256.png">
	<link rel="manifest" href="old/manifest.json">
	<link rel="stylesheet" href="css/app.css">
	
	@foreach($stylesheets as $stylesheet)
		{!! "<link rel='stylesheet' type='text/css' href='" . $stylesheet . "'>" !!}
	@endforeach
	
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="js/test.js"></script>
	
	<?php
		foreach ($extscripts as $extscript)
		{
			echo "<script src=\"" . $extscript . "\"></script>";
		}
	?>
	
	@foreach($extscripts as $extscript)
		{!! "<script src='" . $extscript . "'></script>" !!}
	@endforeach
	
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
		(adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-5765018854343553",
			enable_page_level_ads: true
		});
	</script>
	
	{!! $extras !!}
</head>
