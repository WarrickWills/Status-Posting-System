<html>
   <head>
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="description" content="Web Development :: Assignment 1" />
      <meta name="keywords" content="Web,development" />
      <title>Status Posting System</title>
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
         dl {
			 background-color: #4ddbff;
			 border: 3px solid blue;
			 padding: 5px 5px;
			 text-align: left;
         }
         div {        
			 margin-left:auto;
			 margin-right:auto;
         }
      </style>
   </head>
   <body style="background-color:#b3ffff;">
      <table style="width:100%;" cellpadding="10">
         <tr>
            <td style="background-color:#3F95EB;" >
               <center>
                  <img src="images/logo.png" alt="" width="70" height="50" />
                  <font size="30px" style="font-weight:bold;vertical-align:top;color:white;">About</font>
               </center>
            </td>
         </tr>
      </table>
      <div style="width:60%;float:center;">
         <dl>
            <b>What special features have you done, or attempted, in creating the site that we should know about?</b>
            <ul>
               <li>I used CSS to format the user interface, I stored the CSS in the style tag on each php page rather than using a stylesheet.</li>
			   <li>I made and added a logo on the headings on each page.</li> 
            </ul>
            <b>Which parts did you have trouble with?</b>
            <ul>
               <li>Adding the logo was a bit of an issue, originally I had it centered at the bottom of the page with an absolue position type which meant that it did
                  not scale well when the window is smaller than full screen. Because of this I added the logo to the heading on each page.
               </li>
            </ul>
            <b>What would you like to do better next time?</b>
            <ul>
               <li>I Would use a CSS file to store the styling so I do not have to recreate a large bulk of it in each file.</li>
            </ul>
            <b>What references/sources you have used to help you learn how to create your website?</b>
            <ul>
               <li>I mainly used the lecture slides and lab knowledge to create the site.</li>
               <li>I also used W3schools.com to better understand tags and CSS styling.</li>
            </ul>
            <b>What you have learnt along the way?</b>
            <ul>
               <li>I learned how to write PHP scripts.</li>
               <li>I also learned about using HTML to display text and objects, and using CSS to style the site.</li>
               <li>I have learned a great deal through this project; as using PHP, HTML and CSS were entirely new concepts to me before this course.</li>
            </ul>
         </dl>
         <br />
         <div align="center">
            <a href="index.php" class="button">Return to Home Page</a>
         </div>
      </div>
   </body>
</html>