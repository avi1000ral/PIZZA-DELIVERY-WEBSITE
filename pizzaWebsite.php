<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php echo $title;?></title>
</head>
<style>
body
{
font-family:lucida grande , tahoma,verdana,arial,sans-serif;
background-color: #e9e9e9;
}
body p
{
font-size : 0.8em;
line-height:1.28;
}
#wrapper
{
width:1080px;
background-color:white;
margin:0 auto;
padding: 10px;
border:5px solid #dedede;
}
#banner
{
background-image:url(banner2.jpg);
border:5px solid #dedede;
height:200px;
}
#content_area
{
float:left;
width:750px;
margin:20px 0 20px 0;
padding:10px;
}
#sidebar
{
float:right;
width:250px;
height:400px;
margin:20px 10px;
padding:10px;
border:2px solid #E3E3E3;
}
footer
{
clear:both;
width:auto;
height:40px;
padding:10px;
border:3px solid #E3E3E3;
text-align:center;
color:#fff;
text-shadow: 0.1em 0.1em #333;
background-image:url(images.jpg);
}
#navigation
{
height:60px;
border:3px solid #E3E3E3;
margin-top:20px;
text-shadow:0.1em 0.1em #333;
background-image: url(download.jpg);
}
#nav
{
life-style:none;
}
#nav ul
{
margin:0;
padding:0;
width:auto;
display:none;
}
#nav li
{
font-size:24px;
float:left;
position:relative;
width:180px;
height:50px;
}
#nav a:link, nav a:active, nav a:visited
{
display:block;
color: #fff;
height:50px;
}
#nav a:hover
{
color: lightblue;
}
.imgLeft
{
float:left;
width:240px;
height:150px;
margin:0px 10px 10px 0;
padding:10px;
}
.imgRight
{
float:right;
width:200px;
height:250px;
margin:0px 10px 10px 0;
padding:10px;
}
.pizzatable{
width:750px;
height:250px;
margin:10px 10px 10px 0;
border:3px solid #E3E3E3;
border-radius:10px;
moz-border-radius:10px;
}
.pizzatable tr th, .pizzatable tr td{
text-align:left;
padding:0px 5px 0 5px;
}
.pizzatable img
{
padding:0px 10px 10px 10px;
height:150px;
width:150px;
}
</style>
<body>
<div id="wrapper">
<div id="banner">
</div>
<nav id="navigation">
<ul id="nav">
<li><a href="index.php">OUR MENU</a></li>
<li><a href="pzselect.php">SPECIAL OFFERS</a></li>
<li><a href="pzform.php">ORDER NOW</a></li>
<li><a href="pzcontact.php">CONTACT</a></li>
</ul>
</nav>
<div id="content_area">
<?php echo $content; ?>
</div>
<div id="sidebar">
</div>
<footer>
<p>All rights reserved</p>
</footer>
</div>
</body>
</html>