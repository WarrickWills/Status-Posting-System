<html>
   <head>
      <title>Status Update</title>
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
      </style>
   </head>
   <body style = "background-color:#b3ffff;">
      <table style="width:100%;" cellpadding="10">
         <tr>
            <td style="background-color:#3F95EB;" >
               <center>
                  <img src="images/logo.png" alt="" width="70" height="50" />
                  <font size="30px" style="font-weight:bold;vertical-align:top;color:white;">Status Posting System</font>
               </center>
            </td>
         </tr>
      </table>
      <?php
         // Makes sure entry for these three fields are not null
		 if(isset($_POST["status_code"]) && isset($_POST["status"]) && isset($_POST["date"])) {
         	
			// Sets variables to the data that user inputs on the form
         	$status = $_POST["status"];
         	$statusCode = $_POST["status_code"];
         	$date = $_POST["date"];
         	$share = $_POST["share"];
         	
			// Initiated empty as it is altered later
			$permission = "";
			
			// Patterns used to check if data entered is valid
         	$statusPattern = "/^[A-Za-z0-9.,?! ]+$/";
         	$statusCodePattern = "/^S[0-9]{4}+$/";
         	$datePattern = "~^[0-9]{1,2}/[0-9]{1,2}/[0-9]{1,2}+$~";
			
			// Initiates error messages altered later
			$statusErr = $codeErr = $dateErr = "";
         	
			// If no boxes are ticked by user for permission
         	if(empty($_POST["permission"])) {
         		// Don't have to do anything
         	} else {
				// Sets variable to the amont of permission boxes ticked by the user
         		$count = count($_POST["permission"]);
				
				// Iterates through the permission boxes ticked
         		for($i = 0; $i < $count; $i++) {
					// Appends permission text to permission for each iteration
         			$permission .= $_POST["permission"][$i];
         			
					// If final iteration do not post a comma break
					if($i === $count - 1) {
         				$permission .= "";
         			} else {
						// Otherwise have a comma to break up the permission text for each permission type
         				$permission .= ", ";
         			}
         		}
         	}
         	
			// Matches the status with the pattern and sets error message if criteria not satisfied
         	if(!preg_match($statusPattern, $status)) {
         		$statusErr = "<p>Status input is invalid</p>";
         	}
			
			// Matches the status code with the pattern and sets error message if criteria not satisfied
         	if(!preg_match($statusCodePattern, $statusCode)) {
         		$codeErr = "<p>Status code input is invalid</p>";
         	}
			
			// Matches the date with the pattern and sets error message if criteria not satisfied
         	if(!preg_match($datePattern, $date)) {
         		$dateErr = "<p>Date input format is invalid</p>";
         	}
			
			// Prints the error message(s)
         	if(!empty($statusErr) || !empty($codeErr) || !empty($dateErr)) {
         		echo $statusErr . $codeErr . $dateErr;
         	} else {
         		require_once("settings.php");
				
				// The @ operator suppresses the display of any error messages
				// mysqli_connect returns false if connection failed, otherwise a connection value
         		$conn = @mysqli_connect($host,
         			$user,
         			$pswd,
         			$dbnm);
         		
				// Checks if connection is successful				
         		if (!$conn) {
					// Displays an error message
         			echo "<p>Database connection failure</p>";
         		} else {
					// Upon successful connection
					
					// Inserts data from user into table
         			$query = "insert into ".$tble.""
         						."(status, status_code, share, date, permission)"
         					. "values"
         						."('$status','$statusCode','$share', '$date' ,'$permission')";
         			
					// Executes the query and store result into the result pointer
					$result = mysqli_query($conn, $query);
         
         			// Checks if the execuion was successful
					if(!$result) {
						// Displays an error message
         				echo "<p>Add was unsuccessful. Status code may already be in use, please try again!</p>";
         			} else {
						// Execution was successful so success message displays
         				echo "<p>Add Successful</p>";
         			}
					// Close the database connection
         			mysqli_close($conn);
         		} 
         	}
         }
         ?>
      <br />
      <br />
      <div align="center">
         <a href="poststatusform.php" class = "button">Go back to Status Posting Form</a>
         <br />
      </div>
      <div align="center">
         <a href="index.php" class = "button">Return to Home Page</a>
      </div>
   </body>
</html>