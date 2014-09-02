<?php
/**
 * The template for displaying front page pages.
 *
 */
?>



<style type="text/css">
	
	#banner {
	/*	height : 254px;*/
		background: #84c5b1;
		margin : 0;
	}

	#about-title h3{
		position: relative;
		padding: 0px;
		margin : 0;
		top : 50px;
		text-align: center;
		letter-spacing: 10;
		font-family: KlinicSlabBook;
		color : white;
		text-shadow : none;
		font-weight: 400;
	}

	#about-banner-content {
		color: #0c281f;
		text-align: center;
		padding : 2.2em;
		margin-top: 25px;
	}


	.highlighter {
		padding : .1em;
		color: white;
		font-family: KlinicSlabBook;
	}

	.magnus-corp {
		background: #6cbe90;
	}
	.human-captial {
		background: #4f4f4f;
	}

	#about-banner-content p {
		font-family: KlinicSlab;
		line-height: 50px;
		font-size: 2.8em;
	}

	
	#center-content .left-content p, .content-bottom p {
		font-family: OpenSans-Light;
		color: #4f4f4f;
		font-size: 1.5em;
	}

	.left-content li {
		font-family: OpenSans-Light;
		color: #4f4f4f;
		font-size: 1.5em;	
	}

	
	.ribbon {
	    height: 50px;
	    position: relative;
	    margin-top: 1.2em;
	    background-color: #6cbe90;
	    padding-left : 1em;
	    line-height: 3em;
	  }

	.ribbon li {
		color: white;
		font-size: 1.7em;
		font-family : KlinicSlabBook;
	}

	.ribbon-img {
		position: absolute;
		height: 50px;
		right : -20px;
		top: 0px;
	}


	.last-content{
		/*height: 240px;*/
		background-color: #ecf0f1;
		position: relative;
		margin-top: 50px;
	}

	.last-content p {
		font-family: KlinicSlabBook;
		font-size: 2em;
		text-align: center;
		color: #2c3e50;

	}

	.last-content .text-wrapper {
		padding: 2em;
	}

	.arrow-img {
		position: relative;
		left: 46%;

	}

</style>



<?php get_header(); ?>  
		
		<div class="grid_24 animated fadeIn" id="banner">
			<div class="grid-24" id="about-title">
				<h3 class="animated fadeInUp">ABOUT US</h3>
			</div>
			<div class="grid-24" id="about-banner-content">
				<p class="animated fadeIn">
					Magnus Institute is a concern of <span class="highlighter magnus-corp animated fadeInLeft">Magnus Corporation Ltd.</span> 
					Our aim is to develop the <span class="highlighter human-captial animated fadeInRight"> Human Capital of Bangladesh. </span>
				</p>
			</div>
		</div>




		<div class="grid_24" id="center-content">
			<div class="grid_12 left-content">
				<p style="margin-top : 50px;">
					In order to compete on a global scale, it is important to empower our large 
					population base with professional knowledge that 
					enriches and supplements their experience, improving productivity. 
					We plan to achieve this through :
					<li style="margin-top : 5px">Career counseling potential graduates</li>
					<li>Conducting courses aimed at professionals </li>
				</p>
			</div>
			<div class="grid_11" >
					<div class="ribbon grid_10 animated slideInRight" style="margin-top : 6em">
						<li>Career counseling potential graduates </li>
						<img src="<?php echo get_template_directory_uri();?>/images/ribbon.png" alt="" class="ribbon-img">
					</div>

					<div class="ribbon animated slideInRight grid_11">
						<li>Conducting courses aimed at professionals </li>	
						<img src="<?php echo get_template_directory_uri();?>/images/ribbon.png" alt="" class="ribbon-img">
					</div>
			</div>
		</div>

		<div class="grid_24 content-bottom" style="">
			<p>
				This is our plan to cover the entire spectrum of an individual’s productive phase and give them 
				the opportunity to excel in career. The management team is set with the objective of fulfilling these 
				plans. They have vast experience in the field of education and training. Suitable instructors are 
				handpicked to ensure that our participants receive maximum benefit from the courses. Our instructors 
				have knowledge and related industry experience necessary to conduct the courses.
				In line with our promise to help develop human capital, we are offering a unique service of 
				facilitating customized courses to suit the specific needs of a particular group of participants. 
				Participants can contact us and explain their requirements. We will tailor a suitable course plan 
				with the right instructor to fulfill their needs.  
			</p>
		</div>

		<div class="grid_24 last-content">
			<img src="<?php echo get_template_directory_uri();?>/images/arrow.png" alt="" class="arrow-img">

			<div class="text-wrapper">
				<p>
					We do not consider our services a business 
					but appreciate it as an opportunity to enhance the productivity of 
					the large human capital, so that they can become our nation’s greatest asset and eventually 
					change the professional landscape of our country. 
				</p>
			</div>
		</div>

<!--End Silder Wrapper-->
		<div class="clear"></div>
		<div class="seprator"></div>

				
		<div class="clear"></div>
	</div>
</div>


<?php get_footer(); ?>
