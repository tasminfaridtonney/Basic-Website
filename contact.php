<!DOCTYPE html>
<html>
<head>
    <title>Basic Website(contact)</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="headerSection templete clear">
<div class="logo">
<img src="image/logo.png"  alt="logo" />
<h2>Website Title</h2>
<p>Our website description</p>
</div>

<div class="social">
<a href="https://www.facebook.com/"><img src="image/facebook.png" alt="Facebook"/></a>
<a href="https://twitter.com"><img src="image/twitter.png" alt="Twitter"/></a>
<a href="https://www.linkedin.com/"><img src="image/linkedin.png" alt="Linkedin"/></a>
<a href="https://www.google.com/"><img src="image/google+.png" alt="GooglePlus"/></a>
</div>
</div>

<div class="nevSection templete clear">
<ul>
     <li><a href="index.html">Home</a></li>
	  <li><a  href="about.html">About</a></li>

	  <li><a href="about.html">Product</a>
      <ul>
		   <li><a href="#">Product 1</a></li>
		   <li><a href="#">Product 2</a></li>
		   <li><a href="#">Product 3</a></li>
		   <li><a href="#">Product 4</a></li>
		   <li><a href="#">Product 5</a></li>

	  </ul>
	</li>
	  <li><a id="active" href="contact.php">Contact</a>
	
		<ul>
			<li><a href="#">Address 1</a></li>
			<li><a href="#">Address 2</a></li>
			<li><a href="#">Address 3</a></li>
			<li><a href="#">Address 4</a></li>
			<li><a href="#">Address 5</a></li>
 
	   </ul>
	
	</li>
  </ul>
</div>



<div class="contentsection templete clear">
    <div class="maincotent clear">
	
	<div class="about"> 
	 <h2>contact me</h2>
	 <?php
$firstname="";
$lastname="";
$email="";
$address="";

if(isset($_GET['firstname'])) $firstname=$_GET['firstname'];
if(isset($_GET['lastname']))$lastname=$_GET['lastname'];
if(isset($_GET['email'])) $email=$_GET['email'];
if(isset($_GET['address'])) $address=$_GET['address'];



?>
	 <form action="" method="GET">
	
	 First Name:<br>
	 <input type="text" name="firstname" required placeholder="Enter First Name">
	 <br>
	 
	 Last Name:<br>
	 <input type="text" name="lastname" required placeholder="Enter Last Name">
	 <br>
	
	 Email:<br>
	 <input type="email" required  name="email"  placeholder="Enter Email Address">
	 <br>

	 Your Message:<br> 
	<textarea name="address"> </textarea>
	  <br>
	 <input type="submit" name="submit" value="Submit">
	
	</form>
	</div>
	  
	 
	 </div>
	<div class="sidecontent clear">
	<div class="siderbar clear">
	<h2> Latest article </h2>
	<ul> 
	      <li><a href="#">Post title one will be go here.</a></li>
	      <li><a href="#">Post title two will be go here.</a></li>
	      <li><a href="#">Post title three will be go here.</a></li>
	      <li><a href="#">Post title four will be go here.</a></li>
	      <li><a href="#">Post title five will be go here.</a></li>
	      <li><a href="#">Post title six will be go here.</a></li>
	</ul>
	</div>

     <div class="siderbar clear">
	     <h2> Populer articles </h2>
	         <div class="popular clear">
                 <h3><a href="#">Post title will be go here..</a></h3>
	            <a href="#"><img src="Green_park_trees_nature_beautiful_day_hd-wallpaper-1871.jpg" alt="post image"/></a>
	            <p>vthis is sidebar.idebar.this is sidebar.this is sidebar.this is sidebar.this is this is sidebar.this is sidebar.this is sidebar.this i </p>
			</div>
			<div class="popular clear">
				<h3><a href="#">Post title will be go here..</a></h3>
			   <a href="#"><img src="Green_park_trees_nature_beautiful_day_hd-wallpaper-1871.jpg" alt="post image"/></a>
			   <p>vthis is sidebar.idebar.this is sidebar.this is sidebar.this is sidebar.this is this is sidebar.this is sidebar.this is sidebar.this i </p>
		   </div>
		   <div class="popular clear">
			<h3><a href="#">Post title will be go here..</a></h3>
		   <a href="#"><img src="Green_park_trees_nature_beautiful_day_hd-wallpaper-1871.jpg" alt="post image"/></a>
		   <p>vthis is sidebar.idebar.this is sidebar.this is sidebar.this is sidebar.this is this is sidebar.this is sidebar.this is sidebar.this i </p>
	</div>

	
    </div>
	</div>
<div class="footersection templete clear">
<div class="footermanu clear">
 <ul>
      <li><a href="#">Home</a></li>
	  <li><a href="#">About</a></li>
	  <li><a href="#">Contact</a></li>
	  <li><a href="#">Privacy</a></li>
  </ul>
</div>
<p>&copy; Copyright Tasmin Farid Tonney.</p>
</div>
<div class="fixedicon clear">
	<a href="https://www.facebook.com/"><img src="image/facebook_img.png"  alt="Facebook"/></a>
	<a href="https://twitter.com"><img src="image/twitt_profile.png"  alt="Twitter"/></a>
	<a href="https://www.google.com/"><img src="image/gplus.png"  alt="GooglePlus"/></a>
	<a href="https://www.linkedin.com/"><img src="image/linkedin-profile.png"  alt="Linkedin"/></a>
	<a href="https://www.Youtube.com/"><img src="image/youtube-chennel.png"  alt="Youtube"/></a>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">var scrolltotop={setting:{startline:100,scrollto:0,scrollduration:1e3,fadeduration:[500,100]},controlHTML:'<img src="https://i1155.photobucket.com/albums/p559/scrolltotop/arrow50.png" />',controlattrs:{offsetx:5,offsety:5},anchorkeyword:"#top",state:{isvisible:!1,shouldvisible:!1},scrollup:function(){this.cssfixedsupport||this.$control.css({opacity:0});var t=isNaN(this.setting.scrollto)?this.setting.scrollto:parseInt(this.setting.scrollto);t="string"==typeof t&&1==jQuery("#"+t).length?jQuery("#"+t).offset().top:0,this.$body.animate({scrollTop:t},this.setting.scrollduration)},keepfixed:function(){var t=jQuery(window),o=t.scrollLeft()+t.width()-this.$control.width()-this.controlattrs.offsetx,s=t.scrollTop()+t.height()-this.$control.height()-this.controlattrs.offsety;this.$control.css({left:o+"px",top:s+"px"})},togglecontrol:function(){var t=jQuery(window).scrollTop();this.cssfixedsupport||this.keepfixed(),this.state.shouldvisible=t>=this.setting.startline?!0:!1,this.state.shouldvisible&&!this.state.isvisible?(this.$control.stop().animate({opacity:1},this.setting.fadeduration[0]),this.state.isvisible=!0):0==this.state.shouldvisible&&this.state.isvisible&&(this.$control.stop().animate({opacity:0},this.setting.fadeduration[1]),this.state.isvisible=!1)},init:function(){jQuery(document).ready(function(t){var o=scrolltotop,s=document.all;o.cssfixedsupport=!s||s&&"CSS1Compat"==document.compatMode&&window.XMLHttpRequest,o.$body=t(window.opera?"CSS1Compat"==document.compatMode?"html":"body":"html,body"),o.$control=t('<div id="topcontrol">'+o.controlHTML+"</div>").css({position:o.cssfixedsupport?"fixed":"absolute",bottom:o.controlattrs.offsety,right:o.controlattrs.offsetx,opacity:0,cursor:"pointer"}).attr({title:"Scroll to Top"}).click(function(){return o.scrollup(),!1}).appendTo("body"),document.all&&!window.XMLHttpRequest&&""!=o.$control.text()&&o.$control.css({width:o.$control.width()}),o.togglecontrol(),t('a[href="'+o.anchorkeyword+'"]').click(function(){return o.scrollup(),!1}),t(window).bind("scroll resize",function(t){o.togglecontrol()})})}};scrolltotop.init();</script>


</body>
</html>
