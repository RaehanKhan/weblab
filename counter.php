<?php
	$fp = fopen("counterLog.txt","r");
	$count = fread($fp, 10);
	fclose($fp);
	$count = $count + 1;
	echo "<center><big><h1>". $count ."</h1></big></center>";
	$fp = fopen("counterLog.txt","w");
	fwrite($fp, $count);
	fclose($fp);
?>
