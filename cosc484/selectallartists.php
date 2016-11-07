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
	<tr><th>Artist ID</th><th>Artist Name</th><th>Item Name</th><th>Merch ID</th><th>Company</th></tr>
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
	$query = "SELECT ArtistID, ArtistName, ItemName, artist.MerchID, ArtistCompany FROM artist INNER JOIN merch On artist.MerchID = merch.MerchID";
	// Execute SQL statement
	if (!($result = @ mysql_query ($query, $connection)))
	  showerror();
	// Display results
	while ($row = @ mysql_fetch_array($result))
	  echo "<tr><td>{$row["ArtistID"]}</td>
	<td>{$row["ArtistName"]}</td>
	<td>{$row["ItemName"]}</td>
	<td>{$row["MerchID"]}</td>
	<td>{$row["ArtistCompany"]}</td></tr>";
	mysql_close($conn);?>
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
	 