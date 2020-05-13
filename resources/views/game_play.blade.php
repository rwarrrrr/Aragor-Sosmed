<?php 
	$game = $_GET['gameplay'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="icon" type="image/png" href="{{url('assets/img/ara.png')}}">
 	<title>Aragor Game</title>
 </head>
 <body>
 	<center>	
		<embed src="http://localhost/coba/public/temp/<?= $game ?>"width="100%" height="580">

	</center>
 </body>
 </html>