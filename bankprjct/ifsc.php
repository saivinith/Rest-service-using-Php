
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
  <h1><center> Indian_Banks</center></h1>
  <h4 align="right"><a href="examples.php"> Re-Enter IFSC code</a></h4> 
      <div id="content">
        <!-- insert the page content here -->
<pre>
<?php
$conn = new mysqli("localhost", "root", "","api");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$ifsc = $_POST["ifsc"];
$sql = ("SELECT * FROM bank_branches WHERE ifsc='$ifsc'");
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($r = $result->fetch_assoc()) {

$msg[] = array("ifsc" => $r['ifsc'],"bank_id" => $r['bank_id'], "branch" => $r['branch'], "address" => $r['address'],"city" => $r['city'],"district" => $r['district'],"state" => $r['state'],"bank_name" => $r['bank_name']);
$json = $msg;

}
}
echo "<h4>".json_encode($json, JSON_PRETTY_PRINT)."</h4>";
echo "<br>";
$conn->close();

?>
</pre>

</div>
    
  </div>
</body>
</html>
