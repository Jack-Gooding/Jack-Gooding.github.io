<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Clean Web?</title>
	<link href="Index.css" rel="stylesheet" type="text/css" media="screen">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script type="text/javascript" src="script.js"></script>
  </head>
<body>
<?php include "header.php";?>
<div id="wrapper">

<div class="main">

<h1 id="Header">PHP Tutorial!</h1>
<h2 id="Basic Layout">Basic Layout</h2>
<ul>
<li>Structure:
<p>
&lt;body&gt;
<br>
&lt;php
<br>
<br>
// DO THE PHP HERE
<br>
<br>
?&gt;
<br>
&lt;/body&gt;
</p>
</li>
<li>Declaring Variables:
<p>
&lt;php 
<br>
<br>
$variable = "string" or value
<br>
<br>
?&gt;
</p>
</li>
<li>Commenting:
<p>
&lt;php 
<br>
<br>
// Comments Here
<br>
<br>
?&gt;
</li>
<li>Printing:
<p>
&lt;php 
<br>
<br>
echo "string" or value
<br>
<br>
OR
<br>
<br>
print "string" or value
<br>
<br>
?&gt;
</p>
</li>
</ul>
<h2 id="Modifiers">Modifiers</h2>
<ul>
<li>Length:
<p>	$length = strlen("Jack");
<br>
	print $length</p>
</li>
<li>Substrings:
<p>	$partial = substr("Jack", 0, 3);
<br>
   	print $partial;</p>
</li>
<li>Uppercase:
<p>	$uppercase = strtoupper($myname);
	<br>
	print $uppercase;</p>
</li>
<li>Lowercase:
<p>	$lowercase = strtolower(“Jack”);
<br>
	print $lowercase;
</p>
</li>
<li>Search string for item:
<p>	$variavle = strpos("Jack", "c");
<br>
	echo $variable</p>
</li>
<li>Rounding:
<p>	$round = round(M_PI);
<br>
	print $round;  // prints 3
	<br>
	<br>
	$round_decimal = round(M_PI, 4);
	<br>
	print $round_decimal; // prints 3.1416</p>
</li>
<li>Random:
<p>	// prints a number between 0 and 32767
<br>
	print rand();
<br>
<br>
	// prints a number between 1 and 10
<br>
	print rand(1,10);
</p>
</li>
</ul>
<h2 id="Loops">Loops</h2>
<ul>
<li>For Loop:
<p>
 &lt;?php<br />
 <br>
      for ($leap = 2004; $leap &lt; 2050; $leap = $leap + 4) {<br />
        echo &quot;&lt;p&gt;$leap&lt;/p&gt;&quot;;<br />
      }
	  <br />
	  <br>
    ?&gt;
</p>
</li>
<li>Foreach Loop:
<p>
&lt;php 
<br>
<br>
$variable = "string" or value
<br>
<br>
?&gt;
</p>
</li>

</ul>


</div><!--main-->
<div id="footer">
<p> © Created and Designed by Jack Gooding: <a href="https://ironcladjack.github.io/">ironcladjack.github.io</a></p>
</div><!--footer-->
</div><!--wrapper-->
  </body>
</html>