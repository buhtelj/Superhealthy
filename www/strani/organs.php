<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, target-densityDpi=device-dpi"/> 
        <link rel="stylesheet" type="text/css" href="../css/index.css" />
        <link rel="stylesheet" type="text/css" href="../css/jPushMenu.css" />
		

		<link href='http://fonts.googleapis.com/css?family=Dosis&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
		
        <title>Superhealty</title>
		
		<!--load jQuery, required-->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<!--load jPushMenu, required-->
		<script src="../js/jPushMenu.js"></script>
		<script src="../js/funkcije.js"></script> <!-- shrenjene vse funkcije programa -->

		<script>
			document.addEventListener("deviceready", onDeviceReady, false);

			function onDeviceReady() {
				alert("ready");
			}
						
			$(document).ready(function() {
				$('.loading').show();
				$("#page").load("http://www.ekoloska-trgovina.si/do_not_delete/superhealty/organi.php", function() {
					$('.loading').hide();
				});
			});
		</script>
    </head>
	
   <body style="background: #ffffff">
		<div id="content">
			<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" style="z-index: 1000;">
				<h3>Menu</h3>
				<a href="../index.html">HOME</a>
				<a href="enciklopedia.html">ENCYCLOPEDIA OF SUPERFOODS </a>
				<a href="simptomi.html">SEARCH BY SYMPTOMS</a>
				<a href="organs.html">SEARCH BY ORGANS </a>
				<a href="about.html">ABOUT APP</a>
			</nav>
		
			<div height="70px" style="z-index: 1000;">
				<table width="100%" cellspacing="0" style="top: 0;">
					<tr>
						<td width="70px" style="background-color: rgba(0,0,0,0.2);" align="center"> 
							<a href="#" class="toggle-menu menu-left push-body" style="border: none; " ><img src="../img/nav-icon.png" style="height: 40px" /></a>					
						</td>
						<td align="center" style="background-color: rgba(0,0,0,0.4);">
							<div style="padding-top: 10px"></div>
							<img src="../img/napis.png" style="max-height: 43%" />
						</td>
					</tr>
				</table>
			</div>
			<!-- Od tukej naprej -->
			
			<div id="page"></div>
			<div class="loading"></div>
		</div>
		
		<div id="izdelek"></div>
		<div class="loading"></div>
		
    </body>
</html>
