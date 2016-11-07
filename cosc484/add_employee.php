<html>
   
   	<head>
		<title>Add Artist</title><link rel="stylesheet" href="Assignment1.css"/>
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
			<div style= "color:goldenrod"><h3><u>Add an Artist!</u></h3></div>
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
	  include 'db.inc.php';
         if(isset($_POST['add']))
         {
            // Connect to MySQL DBMS
			if (!($conn = @ mysql_connect($hostName, $username,
			  $password)))
			  showerror();
			// Use the merch database
			if (!mysql_select_db($databaseName, $conn))
			  showerror();
            
            if(! get_magic_quotes_gpc() )
            {
               $emp_name = addslashes ($_POST['ArtistName']);
               $emp_company = addslashes ($_POST['ArtistCompany']);
            }
            else
            {
               $emp_name = $_POST['ArtistName'];
               $emp_company = $_POST['ArtistCompany'];
            }
            
            $merch_id = $_POST['MerchID'];
            
            $sql = "INSERT INTO artist ". "(ArtistName,ArtistCompany, MerchID) ". "VALUES('$emp_name','$emp_company',$merch_id)";
               
            //mysql_select_db($databaseName, $conn);
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }
         else
         {
            ?>
               <form method="post" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
                     <tr>
                        <td width="100">Artist Name</td>
                        <td><input name="ArtistName" type="text" id="ArtistName"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Company Name</td>
                        <td><input name="ArtistCompany" type="text" id="ArtistCompany"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">Merch ID</td>
                        <td><input name="MerchID" type="text" id="MerchID"></td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td> </td>
                     </tr>
                  
                     <tr>
                        <td width="100"> </td>
                        <td>
                           <input name="add" type="submit" id="add" value="Add Employee">
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