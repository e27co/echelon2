<?php
get_header();
?>   
<div class="showcase">
  <div class="container">
	<!-- Main hero unit for a primary marketing message or call to action -->
	<div class="hero-unit benefits">
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
  <div class="container add-bot">
	<div class="row-fluid wrapper-benefits">
	  <div class="span3">
		<img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/startup.png" />
		<h3>Startups</h3>
		<h4 class="text-center">Benefits</h4>
		<ul>
		  <li>Meet and talk with investors</li>
		  <li>Network with influencers in the region</li>
		  <li>Receive amazing insights from our speakers </li>
		  <li>Create opportunities for your business</li>
		  <li>Find your next rockstar </li>
		</ul>
		<div class="text-center add-bot">
		  <a href="tickets" class="buy">Purchase tickets!</a>
		</div>
	  </div>
	  <div class="span3">
		<img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/investor.png" />
		<h3>Investors</h3>
		<h4 class="text-center">Benefits</h4>
	   <ul>
		  <li>Meet entrepreneurs</li>
		  <li>Meet fellow investors</li>
		  <li>50+ startups at Startup Marketplace</li>
		  <li>Echelon Alumni and growing businesses at Tech Alley</li>
		  <li>All the knowledge of Southeast Asia in one location</li>
		</ul>
		<div class="text-center add-bot">
		  <a href="tickets" class="buy">Purchase tickets!</a>
		</div>
	  </div>
	  <div class="span3">
		 <img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/student.png" />
		 <h3>Students</h3>
		 <h4 class="text-center">Benefits</h4>
		<ul>
		  <li>Learn more about startup culture</li>
		  <li>Look for internship and job opportunities</li>
		  <li>Be inspired by successful business owners</li>
		  <li>Enjoy a massive student discount</li>
		</ul>
		<div class="text-center add-bot">
		  <a href="tickets" class="buy">Purchase tickets!</a>
		</div>
	  </div>
	  <div class="span3">
		<img src="<?php echo get_template_directory_uri(); ?>/html/themes/img/organization.png" />
		<h3>Organization</h3>
		<h4 class="text-center">Benefits</h4>
	   <ul>
		  <li>Look for partnerships with great businesses</li>
		  <li>Stay updated on the latest tech developments</li>
		  <li>Connect with tech industry and business veterans</li>
		  <li>Business development opportunities</li>
		  
		</ul>
		<div class="text-center add-bot">
		  <a href="tickets" class="buy">Purchase tickets!</a>
		</div>
	  </div>
	</div>
  </div>
  
</div> 
<?php
	get_footer();
?>