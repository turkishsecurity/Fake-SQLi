<!DOCTYPE html>
<html>
<head>
	<title>Xale Security</title>
</head>
<body>
<center>
	<?php
	# Xale Security
	error_reporting(0);
	$id = $_GET["id"];
	if ($id == "") {
    echo "<h1>View the Blog Texts : index.php?id=[id]</h1>";
	echo "<p>by @XaleTR</p>";
	} elseif ($id == 1) {
		echo "<h1>What is the sqlmap ?</h1>";
		echo "<p>sqlmap is auto SQL injection tool.</p>";
	} elseif ($id == "1'") {
		echo "</center><p>You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1</p>";
	}
	for($i=1;$i<=9; $i++) { # i set a 9 fake column
        if($id == $i."'") {
        	echo "</center><p>You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1</p>";
        } 
    }
	?>
</center>
</body>
</html>
