<html>
<head>

<title>nazar</title>
<style>
body{
	background-color: #9f8060;
}
</style>
</head>
<body>

	<center>
		<b><p dir="rtl" >نظر شما ارسال شد</p>
		<p dir="rtl" >تشکر از شما</p></b>
		<img src="caroline1.jpg"></center>
	</center>
	
	<?php
		$name=$_POST["name"];
		$email=$_POST["email"];
		$comment=$_POST["comment"];
		$file=fopen("nazarat.txt","w");
		fwrite($file,$name.PHP_EOL.PHP_EOL.$email.PHP_EOL.PHP_EOL.$comment);
		fclose($file);
	?>
</body>
</html>