<?php
	$name = "Kristjan";
	$surname = "Treimann";
	$dirToRead = "../../pics/";
	//$allfiles = scandir($dirToRead);
	$allFiles = array_slice(scandir($dirToRead), 2);
	var_dump($allFiles);
	
	
	
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>
	      <?php
		  echo $name;
		  echo " ";
		  echo $surname;
		  ?>
	, õppetöö</title>
</head>
<body>
	<h1>
	<?php
	  echo $name ." " .$surname;
	?>
	, IF18</h1>
	<p>Nothing to see here. Move on...</p>
	<p>Lisasin siia paar rida. Vaata ka <a href="http://www.tlu.ee" target="_blank">TLÜ</a> kodulehte.</p>

	
	
	<img src="<?php echo $picFileName; ?>" alt="juhuslik pilt Tallinna Ülikoolist">

	
	<?php
	for ($i = 0; $i  < count($allFiles); $i ++){
	echo  '<img src="' .$dirToRead .$allFiles[1] .'" alt="pilt"><br>';
	}
	?>
</body>
</html>	