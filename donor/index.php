<?php include('header.php');?>
</div>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Blood Donation</title>


  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>

<body>

<div class="nav_bg">

<div style="height:300px; width:900px; margin:auto; margin-top:50px; margin-bottom:50px; background-color:#f8f1e4; border:2px solid red; box-shadow:4px 1px 20px black;">
    <img height="300px" width="900px" src="Images/MOVIE_ROOM-filmfont_1024x1024.jpg"/>
        
			
			
	</div>
	

      <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	
		<div class="copy">
			<p class="title">© All Rights Reserved | Movie Tickets website|</p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>