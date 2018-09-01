<!DOCTYPE HTML>
<html>

<head>
   <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" title="style" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">Indian<span class="logo_colour">Banks</span></a></h1>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li class="selected"><a href="examples.php">IFSC</a></li>
          <li><a href="page.php">B_Name and B_City</a></li>
   
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
	<div id="site_content">
	
         <div id="content">
        <!-- insert the page content here -->
        <h2>enter Ifsc code</h2>
        <form action="ifsc.php" method="post">
          <div class="form_settings">
            <p><span>Enter Ifsc Code:</span><input type="text" name="ifsc" value="" /></p>
            
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="name" value="button" /></p>
          </div>
        </form>
      </div>
    </div>
    </body>
</html>
