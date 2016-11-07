	<!DOCTYPE html>
	<html>
	<head>
		<title>Our Merchandise</title><link rel="stylesheet" href="Assignment1.css"/>
		<style>
			footer ul li {
				font-size: 0.7em;
				list-style: none; 
				display: inline;
				padding :0.5em;
			}
			p{font-size:0.8em;}
			table{font-size:0.8em;}
		</style>
	</head>
	<body>
	<header>
			<div style= "color:goldenrod"><h3><u>Egyptian Mythology Merchandise</u></h3></div>
			<nav>
				<ol>
					<li><a href="Assignment1.html">Home</a></li>
					<li><a href="Assignment1.html#overview">Overview</a></li>
					<li><a href="Assignment1.html#gods">Deities</a></li>
					<li><a href="Assignment1.html#myths">Major Myths</a></li>
					<li><a href="Assignment3.html">Create an account with us!</a></li>
					<li><a href="MerchData.html">Merchandise</a></li>
					<li><a href="Artists.html">Artists</a></li>
				</ol>
			</nav>
		</header>
	<table border=1>
	<tr>
		<th colspan="6">Merchandise</th>
	</tr>
	<tr><th>Merch ID</th><th>Item Name</th><th>Quality</th><th>Year</th><th>Price</th>
	<th>Quantity</th></tr>
	<?php
	include 'db.inc.php';
	// Connect to MySQL DBMS
	if (!($connection = @ mysql_connect($hostName, $username,
	  $password)))
	  showerror();
	// Use the merch database
	if (!mysql_select_db($databaseName, $connection))
	  showerror();
	 
	// Create SQL statement
	//$query = "SELECT * FROM merch";
	$query = "SELECT * FROM merch ORDER BY Price";
	// Execute SQL statement
	if (!($result = @ mysql_query ($query, $connection)))
	  showerror();
	// Display results
	while ($row = @ mysql_fetch_array($result))
	  echo "<tr><td>{$row["MerchID"]}</td>
	<td>{$row["ItemName"]}</td>
	<td>{$row["Quality"]}</td>
	<td>{$row["Year"]}</td>
	<td>\${$row["Price"]}</td>
	<td>{$row["Quantity"]}</td></tr>";
	?>
	</table>
	<footer>
		<p><small> 
		<ul>
			<li><a href="Assignment1.html">Home</a></li>
			<li><a href="Assignment1.html#overview">Overview</a></li>
			<li><a href="Assignment1.html#gods">Deities</a></li>
			<li><a href="Assignment1.html#myths">Major Myths</a></li>
			<li><a href="Assignment3.html">Create an account with us!</a></li>
			<li><a href="MerchData.html">Merchandise</a></li>
			<li><a href="Artists.html">Artists</a></li>
		</ul>
		</small>
		</p>
	</footer>
	</body>
	</html>
	 