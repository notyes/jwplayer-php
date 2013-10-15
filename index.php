<?php  

// © 2012-2013, [ Abstract Codify ] Abstractcodify.com All Rights Reserved.
$site_url = isset($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS']) !== 'off' ? 'https' : 'http';
$site_url .= '://'. $_SERVER['HTTP_HOST'];
$site_url .= str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);


define('ABSPATH',  str_replace('\\', '/', realpath(dirname(__FILE__) . '/..')) . '/');
define('DOCROOT', rtrim(str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']) . '/', '/'));
define('DOMAIN', 'http://' . $_SERVER['HTTP_HOST'] );
define('ABSURL', DOMAIN . str_replace(DOCROOT, '', ABSPATH));



?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document Jqplayer</title>
	
	<script type="text/javascript" src="<?php echo $site_url.'jwplayer/jwplayer.js' ?>"></script>
	<script type="text/javascript" src="<?php echo $site_url.'jwplayer/jwplayer.html5.js' ?>"></script>

</head>
<body>
	
<div id="video1" style="overflow: hidden;">
		Loading..
</div>

<script>

	    jwplayer('video1').setup({
	    file: 'http://www.youtube.com/watch?v=P5biZzDIFdA',
	    // image: '/content/images/phoenix/download_video_preview.png',
	    width: '742',
	    height: '440',
	    stretching: 'fill',
	    // autostart: false
	    
	    // logo: {
	    // file: "http://p.jwpcdn.com/6/0/logo.png",
	    // link: "http://www.longtailvideo.com/jwpabout/?a=l&v=" + jwplayer.version + "&m=f&e=a"
	    // },
	    // abouttext: "JW Player " + jwplayer.version,
	    // aboutlink: "http://www.longtailvideo.com/jwpabout/?a=r&v=" + jwplayer.version + "&m=f&e=a"
	    });
									
</script>

</body>
</html>