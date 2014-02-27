<?php
// Connect to the database
include("dbConnect.php");
// Retrieve values from databases
$r_namevalue = mysql_query("select name, value from namevalue");
while($row = mysql_fetch_array($r_namevalue)){
	$a_namevalue[$row['name']] = $row['value'];
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $a_namevalue['title']; ?></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />

		<meta name="description" content="This is the official website of Advocate Babita Jha." />
		<meta name="keywords" content="advocate, babita, jha, india, lawyer, delhi, prateek, verma, shredderwoods, unreal" />

		<meta name="viewport" content="width=1040" />

		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,700,700italic|Marcellus+SC">
		<link rel="stylesheet" type="text/css" href="css/style.css" />

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
		<noscript>Your browser either does not support javascript or it is disabled.</noscript>

	</head>
	<body>
	
	<div class="container">

		<header class="header">
			<div class="homeArt"><a href=""><img src="images/homeArt.png" alt="<?php echo $a_namevalue['title']; ?>" ></a></div>
			<div class="heading"><?php echo $a_namevalue['heading']; ?></div>
		</header>
		<div class="nav">
			<nav>
				<ul>
					<?php
					// Generating the links from mysql tables, NOTE that hyperlink pages should have the same name as the link name itself
					// and should be placed in respective directories as per the link tree
						$a_links = explode(", ", $a_namevalue['navLinks']);
						// $a_links is an array (multidimensional) that will hold the link tree
						// Dynamically generating nav items
						for($i=0; $i<count($a_links); $i++) {
						echo "<li><a href=\"$a_links[$i]\" id=\"navlink$i\">".$a_links[$i]."</a></li>";
						}
					?>
				</ul>
			</nav>
		</div>
		
		<footer class="footer">
			<p>Copyright &copy; <?php echo $a_namevalue['copyright']; ?></p>
			<p>Follow <?php echo $a_namevalue['owner']; ?> on: Facebook, Twitter, LinkedIn</p>
		</footer>

	</div>
	
</body>
</html>