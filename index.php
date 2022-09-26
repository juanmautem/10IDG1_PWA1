<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
	<title>Mi primer PWA</title>

	<link rel="manifest"  href="manifest.json">
</head>
<body>
	<h1> Primer Aplicación PWA</h1>

</body>
<script>

	window.addEventListener('load', () => {
	    registerSW();
	});

	async function registerSW() {
	  if ('serviceWorker' in navigator) {
	    try {
	      await navigator
	            .serviceWorker
	            .register('serviceworker.js');
	    }
	    catch (e) {
	      console.log('SW registration failed');
	    }
	  }
	}
</script>
</html>