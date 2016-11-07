<html>
   
  <head>
			<title>Delete Artist</title>
			<link rel="stylesheet" href="Assignment1.css"/>
			<style>
				footer ul li{
					list-style: none; 
					display: inline;
					padding :0.5em;
				}
				footer ul li {font-size: 0.7em;}
				p{font-size:0.8em;}
			</style>

		</head>
	<body>
		<header>
			<div style= "color:goldenrod"><h3><u>Delete an Artist D=</u></h3></div>
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
   
		      <?php
         if(isset($_POST['update']))
         {
            include 'db.inc.php';
           // Connect to MySQL DBMS
			if (!($conn = @ mysql_connect($hostName, $username,
			  $password)))
			  showerror();
			// Use the merch database
			if (!mysql_select_db($databaseName, $conn))
			  showerror();
            
            $artist_ID = $_POST['ArtistID'];
            $artist_Company = $_POST['ArtistCompany'];
            
            $sql = "UPDATE artist ". "SET ArtistCompany = $artist_Company ". "WHERE ArtistID = $artist_ID" ;
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not update data: ' . mysql_error());
            }
            echo "Updated data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
            ?>
               <form method="post" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
                     <tr>
                        <td width="400">Artist ID of artist to update</td>
                        <td><input name="ArtistID" type="text" id="ArtistID"></td>
                     </tr>
					 
					  <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="400">Artist Company (put single quotes around company name)</td>
                        <td><input name="ArtistCompany" type="text" id="ArtistCompany"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="update" type="submit" id="update" value="Update">
                        </td>
                     </tr>
                  
                  </table>
               </form>
            <?php
         }
      ?>
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