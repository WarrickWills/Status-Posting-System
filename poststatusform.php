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
         div {
			 margin-left:auto;
			 margin-right:auto;
         }
         div.form {
			 background-color: #4ddbff;
			 border: 3px solid blue;
			 padding: 5px 5px;
			 text-align: left;
         }
         input.formBut {
			 background-color: #0000ff;
			 color: white;
			 padding: 7px 45px;
			 text-align: center;
			 text-decoration: none;
			 border-radius: 5px;
			 width: 80%;
         }
         input.textIn {
			 width: 100%;
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
      <form action="poststatusprocess.php" method="POST" align="center">
         <br />
         <div class = "form">
            <label><b>Status Code (required):</b>
            <input id = "textIn" type="text" name="status_code" placeholder = "S####" class = "textIn" required></input>
            </label>
            <br />
            <br />
            <label><b>Status (required):</b>
            <input type="text" name="status" placeholder = "Enter status here" class = "textIn" required></input>
            </label>
            <br />
            <br /> 
            <b>Share:</b>
            <Input type="Radio" Name="share" value="Public" />Public
            <Input type="Radio" Name="share" value="Friends" />Friends
            <Input type="Radio" Name="share" value="Only Me" />Only Me
            <br />
            <br />
            <label><b>Date (required):</b>
            <input type="text" name="date" class = "textIn" value="<?php echo date("d/m/y")?>" required></input>
            </label>
            <br />
            <br /> 
            <b>Permission Type:</b>
            <input type="checkbox" name="permission[]" value="Allow Like" />Allow Like
            <input type="checkbox" name="permission[]" value="Allow Comment" />Allow Comment
            <input type="checkbox" name="permission[]" value="Allow Share" />Allow Share
            <br />
            <br />
            <div align="center">
               <input type="submit" value="Post" class="formBut" />
               <input type="reset" value="Reset" class="formBut" />
            </div>
      </form>
      </div>
      <br />
      <div align="center">
         <a href="index.php" class="button">Return to Home Page</a>
      </div>
   </body>
</html>