<?php
// Connect to the database
include("dbConnect.php");
// Retrieve values from databases
$r_pullValues = mysql_query("select name, value from namevalue");
while($row = mysql_fetch_array($r_pullValues)){
	$a_fillValues[$row['name']] = $row['value'];
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<!-- reference to google fonts should be declared early for it to get embedded into the page -->
		<title><?php echo $a_fillValues['title']; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="This is the official website of Advocate Babita Jha." />
		<meta name="keywords" content="advocate, babita, jha, india, lawyer, delhi, prateek, verma, shredderwoods, unreal" />

		<meta name="viewport" content="width=1040" />

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic">
		<link rel="stylesheet" type="text/css" href="css/globalStyle.css" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<noscript>Your browser does not support javascript or it is disabled.</noscript>

	</head>
	<body class="homepage">

		

	</body>
</html>