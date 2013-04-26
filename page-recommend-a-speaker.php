<?php
get_header();
?>   
<div class="showcase">
      <div class="container">
        <!-- Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit speakers">
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
           <iframe style='border:0px; width:100%; height: 2500px' src='https://docs.google.com/spreadsheet/viewform?formkey=dDN6SE0tTE9qRjNTZzNXdV9NcXViMkE6MA'></iframe>
        </div>
      </div>
       <div class="row text-center add-bot-xlarge visible-phone">
        <h2>Get your early bird tickets now!</h2>
        <a href="<?php echo get_bloginfo("home")."/tickets"; ?>" class="buy-big">Purchase tickets</a>
      </div>
      
    </div>  
<?php
	get_footer();
?>