<!doctype html> <!-- remember to define doctype so the page renders more consistently -->
		<?php include "header.php"; ?>
		 <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false"></script>
		 
		


		<div id="contentcontact">
		
		<div id="infoFormWrapper">
		<div id="sidebarinfo">

			<p>Total Landscape is located in Levittown, New York.<br>
				You can fill out a form here or contact us via e-mail or phone.</p>
			<p><strong>Contact Information:</strong><br>
				Phone: 516-555-5555<br>
				E-mail: totalandscape@yahoo.com</p>
		
		</div>
		<div id="sidebarform">
			<form action="contactForm.php" method="post">
    			Your name<br>
    			<input type="text" name="cf_name"><br>
    			Your phone number<br>
    			<input type="text" name="cf_phone"><br>
    			Your e-mail<br>
    			<input type="text" name="cf_email"><br>
    			Message<br>
    			<textarea name="cf_message" cols="40" rows="5"></textarea><br>
				<input type="submit" value="Send">
				<input type="reset" value="Clear">
			</form>
		</div>

	</div>
		
		<!--<hr style="width:.25em; height: 15em; background: gray;"> -->		
		
		</div>

		<div id="googleMap">
		</div>
		
		<div id ="footer">
			<div id="social">
				<a href="http://www.facebook.com"><img src="facebook.gif"></a>
				<a href="http://www.twitter.com"><img src="twitter.gif"></a>
			</div>
		<p>555-555-5555 | Totallandscape@yahoo.com</p>
		
		</div>

		
<script>function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(40.7259300 ,-73.5142900),
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);</script>





	</body>
</html>