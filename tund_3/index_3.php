<?php
	//echo "Siin on minu esimene PHP!";
	$name = "Kristjan";
	$surname = "Treimann";
	$todayDate = date("d.m.Y");
	$weekDayNow = date("N");
	echo $weekDayNow;
	$weekDayNamesEt = ["esmaspäev","teisipäev","kolmapäev","neljapäev","reede","laupäev","pühapäev"];
	//var_dump
	$hourNow = date("H");
	//echo $hourNow;
	$partOfDay = "";
	
	if ($hourNow >= 8 and $hourNow <16){
		$partOfDay = "kooliaeg";
	}
if ($hourNow >= 16){
		$partOfDay = "vaba aeg";
	}
	
	//loosime juhusliku pildi
	$picNum = mt_rand(2,43);//random
	//echo $picNum
	$picURL = "http://www.cs.tlu.ee/~rinde/media/fotod/TLU_600x400/tlu_";
	$picEXT = ".jpg";
	$picFileName = $picURL .$picNum .$picEXT;
	//echo $picFileName;
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
	<?php
	echo "<p>Täna on " .$weekDayNamesEt[$weekDayNow - 1] .", " kuupäev on: " .$todayDate ." </p> \n";
	echo "<p>Lehe avamise hetkel oli kell " .date("H:i:s") .", käes on " .$partOfDay .".</p> \n";
	?>
	 <!--img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone">-->
	 <img src="../../../~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_1.jpg" alt="TLÜ Terra õppehoone">
	<p>Mul on sõber, kes teeb ka <a href="../../../~henrtam"> veebi </a>.</p>
	
	<img src="<?php echo $picFileName; ?>" alt="juhuslik pilt Tallinna Ülikoolist">

</body>
</html>	