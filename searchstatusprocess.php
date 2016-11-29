<html>
   <head>
      <title>Search Status Information</title>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="Web Development :: Assignment 1" />
      <meta name="keywords" content="Web,development" />
      <style>
         a.button:link, 
		 a.button:visited {
			 background-color: #3F95EB;
			 color: white;
			 padding: 5px 5px;
			 text-align: center;
			 text-decoration: none;
			 border-radius: 5px;
			 display: inline-block;
			 margin: 2px;
         }
         p {
			 background-color: #4ddbff;
			 border: 3px solid blue;
			 padding: 5px 5px;
			 text-align: left;
         }
         div {        
			 margin-left:auto;
			 margin-right:auto;
			 width:60%;
			 float:center;
         }
      </style>
   </head>
   <body style = "background-color:#b3ffff;">
      <table style="width:100%;" cellpadding="10">
         <tr>
            <td style="background-color:#3F95EB;" >
               <center>
                  <img src="images/logo.png" alt="" width="70" height="50" />
                  <font size="30px" style="font-weight:bold;vertical-align:top;color:white;">Status Information</font>
               </center>
            </td>
         </tr>
      </table>
      <?php
         // Check if server uses the GET method
		 if ($_SERVER['REQUEST_METHOD'] === 'GET') {
         	   require_once("settings.php");
         
         	// The @ operator suppresses the display of any error messages
			// mysqli_connect returns false if connection failed, otherwise a connection value
			$conn = @mysqli_connect($host,
         		$user,
         		$pswd,
         		$dbnm
         	);
         
         	// Checks if connection is successful
			if (!$conn) {
				// Displays an error message
         		echo "<br />Database connection failure";
         	} else {
				// Upon successful connection
				
				// Sets variable to the search text that user inputs
         		$search = $_GET["search"];
				
				// Set up the SQL command to add the data into the table based off search text
         		$query = "select * from $tble WHERE status LIKE '%". $search ."%'";
         		
				// Executes the query and store result into the result pointer
				$result = mysqli_query($conn, $query);
				
				// Checks if the execuion was successful
         		if(!$result) {
         			// Displays an error message
					echo "<br />Something is wrong with ", $query;
         		} else if($search === "") {
					// Checks if a search has been inputted on the form
					
					// Displays an error message
         			echo "<br />Please enter a search query";
         		} else {
					// Display all the status information from statuses that contain the text that was entered
         			while ($row = mysqli_fetch_assoc($result)){
         				echo "<div>";
         				echo "<p>";
         				echo "<b>Status: </b>", "<td>",$row["status"],"</td><br />";
         				echo "<b>Status Code: </b>", "<td>",$row["status_code"],"</td><br /><br />";
         				echo "<b>Share: </b>", "<td>",$row["share"],"</td><br />";
         				echo "<b>Date: </b>", "<td>",$row["date"],"</td><br />";
         				echo "<b>Permission: </b>", "<td>",$row["permission"],"</td><br />";
         				echo "</p>";
         				echo "</div>";
         			}
					// Frees up the memory, after using the result pointer
         			mysqli_free_result($result);
         		} 
         		// Close the database connection
         		mysqli_close($conn);
			}
         }
         ?>
      <br />
      <br />
      <div align="center">
         <a href="searchstatusform.php" class="button">Go back to Search Status Form</a>
      </div>
      <div align="center">
         <a href="index.php" class="button">Return to Home Page</a>
      </div>
   </body>
</html>