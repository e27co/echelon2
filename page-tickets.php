<?php
get_header();
?>   
<div class="showcase">
  <div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit ticket">
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
  <div class="container text-center">
  <div class="row-fluid">

		<iframe  src="http://www.eventbrite.com/tickets-external?eid=5607845216&ref=etckt&v=2" frameborder="0" height="640px" width="950px" vspace="0" hspace="0" marginheight="5" marginwidth="5" scrolling="auto" allowtransparency="true"></iframe>
		<div style="font-family:Helvetica, Arial; font-size:12px; padding:5px 0 5px; margin:2px; width:100%; text-align:center" ><a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com/r/etckt">Online Ticketing</a><span style="color:#ddd;"> for </span><a style="color:#ddd; text-decoration:none;" target="_blank" href="http://echelon-2013.eventbrite.com?ref=etckt">Echelon 2013:  Driving Asia's Tech Industry Forward</a> <span style="color:#ddd;">powered by</span> <a style="color:#ddd; text-decoration:none;" target="_blank" href="http://www.eventbrite.com?ref=etckt">Eventbrite</a></div>
   
  </div>
</div>
</div> 
<?php
	get_footer();
?>