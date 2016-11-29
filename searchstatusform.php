<html>
   <head>
      <title>View Status</title>
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
         input.formBut {
			 background-color: #0000ff;
			 color: white;
			 padding: 7px 15px;
			 text-align: center;
			 text-decoration: none;
			 border-radius: 5px;
			 display: inline-block;
         }
         p {
			 background-color: #4ddbff;
			 border: 3px solid blue;
			 padding: 5px 5px;
			 text-align: center;
         }
         div {
			 margin-left:auto;
			 margin-right:auto;
         }
         input.textIn {
			 width: 60%;
			 padding: 8px 15px;
			 margin: 8px 0;
			 display: inline-block;
			 text-align: left;
         }
      </style>
   </head>
   <body style="background-color:#b3ffff;">
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
      <div style="width:60%;float:center;">
         <form action="searchstatusprocess.php" method="GET" align="center">
            <p>
               <label><b>Status:</b>
               <br />
               <input type="text" name="search" class = "textIn"></input>
               </label>
               <br />
               <input type="submit" value="Search" class="formBut"></input>
            </p>
         </form>
         <br />
         <div align="center">
            <a href="index.php" class="button">Return to Home Page</a>
         </div>
      </div>
   </body>
</html>