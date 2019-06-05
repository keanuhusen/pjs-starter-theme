<!doctype html>
<html>
	<head>
		<!-- Meta -->
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Maintenance</title>
		
		<!-- CSS -->
		<style>
			html,body {width:100%; min-height:100vh; margin:0 auto; padding:0; color:#000; font:16px/28px 'Montserrat', arial, sans-serif; letter-spacing:.03em; display:block;}
			nav,section,div {width:auto; height:auto; margin:0 auto; padding:0; display:block; position:relative;}
			a {color:#fff; text-decoration:none; -webkit-transition:all .3s ease; -moz-transition:all .3s ease; transition:all .3s ease;}
			a:hover {color:#fff; text-decoration:none;}
			h1 {margin:0; padding:0; color:#fff; font:600 38px/38px 'Montserrat';}
			p {padding:10px 0; color:#fff; font-size:16px; line-height:28px;}
				p b {font-weight:600;}
			img {max-width:100%; height:auto; display:block;}
			hr {width:100%; height:1px; background:rgba(255,255,255,.25); display:block; border:0;}

			::-moz-selection{background:#ca4236; color:#fff; text-shadow:none;}
			::selection {background:#ca4236; color:#fff; text-shadow:none;}
			
			#app {width:100%; min-height:100vh; background:linear-gradient(45deg, #ca4236 0%, #2a2a2a 99%, #2a2a2a 100%);}
				#app .message {max-width:calc(960px - 80px); padding:40px; text-align:center; background:rgba(42,42,42,.25); position:absolute; top:50%; left:50%; transform:translate(-50%,-50%);}
			
			@media(max-width:1200px){
				#app {min-height:calc(100vh - 20px); padding-top:20px;}
					#app .message {background:none; position:relative; top:auto; left:auto; transform:none;}
			}
			@media(max-width:600px){
				#app .message {padding:20px;}
			}
			@media(max-height:400px){
				#app {min-height:calc(100vh - 20px); padding-top:20px;}
					#app .message {padding:20px; background:none; position:relative; top:auto; left:auto; transform:none;}
			}
		</style>
	</head>
	<body>
		<div id="app">
			<div class="message">
				<h1>Scheduled Maintenance</h1>
				<p><b>plainjoestudios.com</b> will be back up in no time. Please check back in 10 minutes.</p>				<hr>				<p>
					<b>Sundays:</b> 9AM &bull; 11AM &bull; 12:45PM<br>
					<a href="#">7345 Piute Creek Dr, Corona, CA 92882</a>
				</p>
			</div>
		</div>
	</body>
</html>