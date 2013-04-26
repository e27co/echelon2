<?php
get_header();
?>   
<div class="showcase">
  <div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit venue">
	  <div class="row-fluid">
			<?php
			while ( have_posts() ){
				the_post();
				$p = get_post( get_the_ID(), OBJECT );
				?><h1><?php echo $p->post_title;?></h1><?php
				echo "<div class=''>";
				the_content();
				echo "</div>";
			}
			?> 
	</div>
	</div>
  </div>
  <div class="container">
	<div class="row-fluid text-center">
		<div class="nav nav-tabs" id="venueTab">
		  <a class="sub-nav" data-toggle="tab" href="#conference">Conference</a>
		  <a class="sub-nav" data-toggle="tab" href="#lodging">Lodging</a>
		</div>
		<hr class="speakers">
		<div class="tab-content" id="venueTabContent">
		  <div id="conference" class="tab-pane fade active in">
			<div class="row-fluid text-left add-bot">
			  <div class="span7 venue-img">
				<iframe width="670" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=486150&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=45.736609,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Singapore+486150&amp;t=m&amp;ll=1.333077,103.959085&amp;spn=0.00709,0.011362&amp;z=14&amp;output=embed"></iframe><br /><small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=486150&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=45.736609,93.076172&amp;ie=UTF8&amp;hq=&amp;hnear=Singapore+486150&amp;t=m&amp;ll=1.333077,103.959085&amp;spn=0.00709,0.011362&amp;z=14" style="color:#0000FF;text-align:left">View Larger Map</a></small>
			  </div>
			  <div class="span5">
				<h2>Singapore Expo Max Atria</h2>
				<p class="lead">Singapore Expo<br/>1 Expo Drive, Singapore 486150</p>
				<p class="lead">The Singapore EXPO houses everything you will need at a business event. With 123,000 sqm of exhibition space and conference halls, meeting rooms, automated teller machines, world-class audio visual equipment and Wireless connectivity, Echelon 2013 delegates and exhibitors will be well-provided for at all times. </p>
			  </div>
			</div> 

			<h2 class="text-left">Getting Here</h2>
			<div class="row-fluid add-bot transpo">
			  <div class="span3">
				<div class="row-fluid">
				  <div class="span4 mrt"></div>
				  <div class="span8 text-left">
					<ul>
					  <li>Alight at Expo MRT Station - Along East-West Line (Green)</li>
					</ul>
				  </div>
				</div>
			  </div>
			  <div class="span3">
				<div class="row-fluid">
				  <div class="span4 bus"></div>
				  <div class="span8 text-left">
					<ul>
					  <li>Bus Routes: 12, 24 and 38 (Outside Hall 1 on Changi Road East)</li>
					</ul>
				  </div>
				</div>
			  </div>
			 <div class="span3">
				<div class="row-fluid">
				  <div class="span4 taxi"></div>
				  <div class="span8 text-left">
					<ul>
					  <li>Comfort and City Cab - 6552 1111</li>
					  <li>Maxi Cab - 6535 3534</li>
					  <li>Premier Taxis - 6476 8880</li>
					  <li>SMRT Taxis - 6555 8888</li>
					</ul>
				  </div>
				</div>
			  </div>
			  <div class="span3">
				<div class="row-fluid">
				  <div class="span4 aero"></div>
				  <div class="span8 text-left">
					<ul>
					  <li>One train stop from Changi Airport to Expo MRT Station</li>
					  <li>Taxis are available from the Airport (Fare: About SGD$15)</li>
					</ul>
				  </div>
				</div>
			  </div>
			</div> 
		  </div>

		  <div id="lodging" class="tab-pane fade hotels">
			<div class="row-fluid">
			  <iframe width="1150px;" height="1945px;" src="https://tripconomics.com/echelon/" frameborder="0" style="overflow:hidden;"></iframe>
			</div>
		  </div>
		</div>
	  </div>
  </div>
  <div class="row text-center add-bot-xlarge visible-phone">
	<h2>Get your early bird tickets now!</h2>
	<a href="#buy" class="buy-big">Purchase tickets</a>
  </div>
</div>  
<?php
	get_footer();
?>