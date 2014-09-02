<?php 
	
	$id = get_the_ID();

	$course_overview = get_post_custom_values('course_overview', $id);
	$objective = get_post_custom_values('course_objective' , $id);
	$benefits = get_post_custom_values('course_benefits' , $id);
	$topics = get_post_custom_values('course_topics_covered' , $id);

	$start_date = get_post_custom_values('starting_date' , $id);
	$date = new DateTime($start_date[0]);

	$starting_date =  $date->format("dS M");

	$instructor = get_post_custom_values('instructor_name' , $id);
	$instructor = $instructor[0];

	$instructor_designation = get_post_custom_values('instructor_designation' , $id);
	$instructor_designation = $instructor_designation[0];

	$instructor_institute = get_post_custom_values('instructor_institute' , $id);
	$instructor_institute = $instructor_institute[0];

	$instructor_image = get_post_custom_values('instructor_image' , $id);
	$instructor_profile_image = wp_get_attachment_url($instructor_image[0]);

	$fee = get_post_custom_values('course_fee' , $id);
	$fee = $fee[0];

	$duration = get_post_custom_values('course_duration' , $id);
	$duration = $duration[0];

	$course_timetable = get_post_custom_values('course_timetable' , $id);
	$course_timetable = $course_timetable[0];

	//var_dump($course_overview);

	//
	
	get_header();
	?>
	 

	<style type="text/css">
	

	.container
	{
		height:auto;
	}
	#header{
		position: relative;
		background-color: rgb(22, 160, 133);
		margin:0;
		min-height: 150px;
	}
	#header h1{
		text-align: center;
		margin:6% auto ;
		color:white;
		font-size: 42px;
		font-family: "KlinicSlab";
	}

	.discribe h2{
		font-family: "OpenSansSemiBold";
		color: #06493C;
	}
		
	.image{
		height:200px;
		float: right;
	}

	.writings li{
		margin-left: 25px;
		font-size: 18px;
		margin-bottom: 20px;

	}
	.writings h2{
		margin-top: 70px;
		color:#06493C;
		border-bottom:1px solid rgba(22, 160, 133,.3);

	}

	
	.writings p{
		font-family: "OpenSans-Light";
		margin-bottom: 15px;
		font-size: 18px;
	}
		
	#pen li{
		font-family: "OpenSans-Light";
		list-style-image: url(https://cdn3.iconfinder.com/data/icons/linecons-free-vector-icons-pack/32/pen-16.png);	
	}

	#tick li{
		font-family: "OpenSans-Light";
		list-style-image: url(https://cdn4.iconfinder.com/data/icons/website-kit-2/600/Tick-16.png);
	}

	#write li{
		font-family: "OpenSans-Light";
		list-style-image: url(https://cdn0.iconfinder.com/data/icons/files-documents/512/YPS__file_document_pencil_pen_white_page_to_sign_signature_signed_sign_sheet_contract_paper_page_text-16.png);
	}

	#first{
		font-family: "OpenSansSemiBold";
		margin-top: 20px;
	}
		
	#image{
		margin-top: 25%;
	}

	#image img{
		max-height: 90px;
		border-radius: 50%;

	}
	#banner{
		height: 100px;
		text-align: center;


		}
	#banner h1{
		color:#16A085;
		font-size: 58px;

	}
	#banner h4{
		margin-top: 40px;
		font-size: 25px;
		margin-bottom: 0px;
	}

	#instructor{
		height: 100px;
		margin-top: 15%;
		float: right;
		text-align: right;			
	}

	#instructor h3{
		margin-bottom:0;
		padding-bottom:0px;
		font-size:25px
	}
	#instructor h2{
		margin-top:0;
		padding-top:0px;
		margin-bottom:0;
		padding-bottom:0px;
		font-size:28px
	}

	#instructor h4{
		margin-top:0;
		padding-top:0px;
		margin-bottom:0;
		padding-bottom:0px;
		font-size:23px
	}

	#button{
		margin-top: 50px;
		margin-left: 20px;
		position: relative;
		top:40%;
		left: 15%;
		cursor: pointer;
		background-color: #37BC9B;
		height: 50px;
		text-align:center;
		border-radius: 10px;
	}

	.right-coloumn p {
		color : #000;
		text-align: right;
		font-size: 1.3em;
		margin-top: 2em;
		width: 100%;
		border-bottom: 1px solid rgba(22, 160, 133,.3);
		padding-bottom: .4em;
	}

	.right-coloumn span {
		text-align: right;
	}

	.right-coloumn ul {
		text-align: right;
		list-style-type: none;
	}

	.right-coloumn li {
		font-size : 1.2em;
	}
	
	.fa-clock-o {
		margin-top: 10px;
	}


	#button a{
		position: relative;
		top:25%;

	}

	.left-sidebar h2 {
		color : #06493C;
	}

	.writings h2 {
		color  : #06493C;
	}

	.writtings p {
		color : white;
		font-family: "OpenSans-Light";
	}

	#tick p ul li {
		font-family: "OpenSans-Light";
	}

	#banner h4 {
		font-family: "OpenSans-Light";
	}

	#banner h1{
		font-family: "OpenSansSemiBold";
	}

	#instructor h2 {
		font-family: "OpenSansSemiBold";
		font-size: 1.3em;	
	}

	#instructor h3, #instructor h4{
		font-size: 1.3em;
		font-family: "OpenSans-Light";	
	}

	#button a {
		font-family: KlinicSlabBook;
		font-size: 1.6em;
	}

	/*background icon styles*/

	.background-icon {
		position: absolute;
		background-repeat: no-repeat;
		background-color: transparent;
	}

	.calculator {
		height: 58px;
		width: 91px;
		left: 50%;
		top : 0px;
		background-image: url('http://magnusinstitute.com/wp-content/themes/blackbird/images/icons/calc.png');
		background-position: 0 -30px;
	}

	.geometry {
		height: 90px;
		width: 90px;
		left: 20px;
		top : 20px;
		background-image: url('http://magnusinstitute.com/wp-content/themes/blackbird/images/icons/gemetry.png');
	}

	.briefcase {
		height: 51px;
		width: 48px;
		left: 20%;
		top : 10px;
		background-image: url('http://magnusinstitute.com/wp-content/themes/blackbird/images/icons/briefcase.png');
	}


	.pen-paper {
		height: 100px;
		width: 100px;
		left: 28%;
		bottom : 0px;
		background-image: url('http://magnusinstitute.com/wp-content/themes/blackbird/images/icons/pen-paper.png');
		background-position: 0px 18px;
	}

	.pencil {
		height: 50px;
		width: 100px;
		right: 30%;
		bottom : 0px;
		background-image: url('http://magnusinstitute.com/wp-content/themes/blackbird/images/icons/pencil.png');
	}


	.geometry2 {
		height: 80px;
		width: 100px;
		right: 0px;
		bottom: 0px;
		background-image: url('http://magnusinstitute.com/wp-content/themes/blackbird/images/icons/geometry2.png');
	}



	.detail_for_mobile {
		display: none;
	}



	@media screen and (max-width: 620px) {
		.detail_for_mobile {
			display: block;
		}

		.display_on_desktop {
			display : none;
		}

		#button {
			margin-left : -50px;
		}

		.detail_for_mobile .starting {
			color:#16A085;
			font-family: OpenSansSemiBold;
			text-align: center;
			margin-top: 20px;
			font-size: 1.4em;
		}

		#instructor {
			text-align: center;
		}
	}

	</style>
	
	<script type="text/javascript">
	</script>

	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
<div class="container">
	<div class="grid_24" id="header">
		<div class="background-icon calculator animated fadeInLeft"></div>
		<div class="background-icon geometry animated fadeInUp"></div>
		<div class="background-icon briefcase animated fadeInDown"></div>
		<div class="pen-paper background-icon animated fadeIn"></div>
		<div class="pencil background-icon rotateInUpRight animated"></div>
		<div class="background-icon geometry2 rotateInUpLeft animated"></div>
	<h1><?php the_title(); ?></h1>
	</div>



	<div class="grid_14 detail_for_mobile">
		
		<p class="starting">Starting On : <?php echo $starting_date?></h3>

			<div class="grid_6" id="button">
				<a href="#">Register for this course</a>
			</div>

		<div class="grid_24 ">
			<div class="grid_9 right-coloumn" >
			 	<p> Course Fee <i class="fa fa-dollar"></i> </p>
				<span style="float : right"><?php echo $fee; ?></span>
			</div>		

			<div class="grid_9 right-coloumn" >
			 	<p> Course Duration <i class="fa fa-calendar-o"></i> </p>
			 	<ul class="">
					<?php echo $duration;  ?>
			 	</ul>
			</div>

			
			<div class="grid_9 right-coloumn" >
			 	<p>  Timetable of the course <i class="fa fa-clock-o"></i></p>
			 	<ul class="">
			 		<?php echo $course_timetable; ?>
			 	</ul>
			</div>

			<div class="grid_24" id="instructor" style="margin : 0; padding : 0">
				<h3>Instructor</h3>
			</div>

			<div class="grid_24" style=" margin-top : -60px">
				<img width="180px" style="margin-left  :30px; " height="170px" src="<?php echo $instructor_profile_image; ?>" alt="" />
			</div>

			<div class="grid 24" id="instructor">
				<h1><?php echo $instructor; ?></h1>
				<h4><?php echo $instructor_designation; ?></h4>
				<p><?php echo $instructor_institute; ?></p>
			</div>
		</div>
	</div>



	<div class="grid_14 discribe left-sidebar">
		<div class="writings">
			<h2 id="first" > Course Overview </h2>
			<p style="font-family : OpenSans-Light"><?php echo $course_overview[0]; ?></p>
				<h2 >Objectives</h2>
			<p>
				<ul id="pen" class="pen">
					<?php echo $objective[0]; ?>
				</ul>
			</p>
			<h2>Who should Attend</h2>
			<p>Existing and postential future participants of the cpital market who wish to achieve above average returns, at the same time curtailing risk of large drawdowns in their portfolio.</p>
			
			<h2>Benefits</h2>
			<p>			
				<ul id="tick">
					<?php echo $benefits[0]; ?>
				</ul>
			</p>
			<h2>Topics Covered</h2>
			<p>
				<ul id="write">
					<?php echo $topics[0]; ?>
				</ul>
			</p>
		</div>
	</div>	

	<div class="grid_9 display_on_desktop image">

		<div class="grid_9 display_on_desktop" id="banner">
			<h4>Starting On</h4>
			<h1>
				<?php echo $starting_date; ?>
			</h1>
		</div>

		<div class="grid_2 display_on_desktop"id="image">
			<img width="100px" height="150px" src="<?php echo $instructor_profile_image; ?>" alt="" />
		</div>

		<div class="grid_6 display_on_desktop" id="instructor">
			<h3>Instructor</h3>
			<h2><?php echo $instructor; ?></h2>
			<h4><?php echo $instructor_designation; ?></h4>
			<p><?php echo $instructor_institute; ?></p>
		</div>

		<div class="grid_7 display_on_desktop" class="button-container" >
			<div class="grid_6" id="button">
				<a href="#">Register for this course</a>
			</div>
		</div>
		

		<div class="grid_9 display_on_desktop right-coloumn" >
		 	<p> Course Fee <i class="fa fa-dollar"></i> </p>
			<span style="float : right"><?php echo $fee; ?></span>
		</div>		

		<div class="grid_9 display_on_desktop right-coloumn" >
		 	<p> Course Duration <i class="fa fa-calendar-o"></i> </p>
		 	<ul class="">
				<?php echo $duration;  ?>
		 	</ul>
		</div>

		
		<div class="grid_9 display_on_desktop right-coloumn" >
		 	<p>  Timetable of the course <i class="fa fa-clock-o"></i></p>
		 	<ul class="">
		 		<?php echo $course_timetable; ?>
		 	</ul>
		</div>

	</div>
</div>
		<div class="clear"></div>
		<div class="seprator"></div>



				
		<div class="clear"></div>
	</div>
</div>


<?php get_footer(); ?>