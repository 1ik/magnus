<?php
/**
 * The template for displaying front page pages.
 *
 */
?>



<style type="text/css">
	body, div{
		margin-left: 0px;
	}
	#banner {
		height: 150px;
		background: #84c5b1;
		margin : 0;
	}


	.wpcf7-submit {
		    border-radius: none;
		    cursor: pointer;
		    border : none;
		    padding : 10px 20px 10px 20px;
		    margin-top: 8px;
		    margin-bottom: 20px;
		    background-color: #ecf0f1;
	}

	.wpcf7-form p{
		margin-top: 10px;
	}
	.wpcf7-form p  {
		font-family: OpenSansSemiBold;
	}

	.wpcf7-form input[type=text], .wpcf7-form input[type=email], .wpcf7-form textarea {
		border : 1px solid #E5E6E6;
		transition: border 1s ease;
	}
	.wpcf7-form input[type=text]:focus, .wpcf7-form input[type=email]:focus, .wpcf7-form textarea:focus{
		border : 1px solid black;
	}

	.wpcf7-form input[type=submit] {
		width: 100px;
		padding : 10 0 10 30;
		text-align: left;
		font-size: 1em;
	}

	.wpcf7-form input[type=text], .wpcf7-form input[type=email] {
		height: 25px;
		margin-top: 5px;
	}


	#about-title h3{
		position: relative;
		padding: 0px;
		margin : 0;
		top : 100px;
		text-align: center;
		letter-spacing: 10;
		font-family: KlinicSlabBook;
		color : #5DAF7E;
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
		height: 240px;
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

	.contact-us-text p{
		font-family: "OpenSans-Light";
		font-size: 1.2em;	
	}

	#form-section {
		margin-top: 20px;	
	}
	li{
		list-style-type: none;
	} 
	p{font-family:Trebuchet MS; font-size:20px;}

	.email {
		color : #33aabb;
		font-style: italic;
	}
	#wrapper { position: relative; }
   	#over_map { position: absolute; top: 0px; left: 0px; z-index: 99; width: 100%; height : 100%; background-color: rgba(236, 240, 241,0.2)}
</style>



<?php get_header(); ?>  

<!-- 		<div class="grid_24 animated fadeIn" id="banner" style="margin-top : 49px; position : absolute">
			<div id="about-title">
				<h3 class="animated fadeInUp">CONTACT US</h3>
			</div>
		</div>
		<div class="grid_24" style="">
				<div id="map-canvas" ></div>
		</div> -->

		<div id="wrapper">
		   <div id="map-canvas">

		   </div>

		   <div id="over_map">
			   <div id="about-title">
					<h3 class="animated fadeInUp">CONTACT US</h3>
				</div>
		   </div>
		</div>

			<div class="grid_24" id ="form-section">
				<div class="grid_11" >
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content(); endwhile;?> <?php endif; ?>
				</div>
				<div class="grid_10 contact-us-text">
					<p>
					We consider servicing the needs and demands of 
					our clients as our prime responsibility.  </p>
					<p>
					We are always prompt to incorporate your feedback into our operations 
					and we will be glad to answer any of your query. We will try to get back to you as soon as possible. 
					</p>
					<p>
					You can contact our customer relations officer at <b>01921333444</b>. for any queries or feedback.
					You can also send your queries or feedback through email at <a class="email" href="mailto:info@magnusinstitute.com">info@magnusinstitute.com</a>
					</p>
				</div>
			</div>

		</div>
	</div>





	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	<script>

        var map;
        var mapLocation = new google.maps.LatLng(23.78308,90.3969705);

        function initialize() {

            var roadAtlasStyles = [
  {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        { "saturation": -100 },
        { "lightness": -8 },
        { "gamma": 1.18 }
      ]
  }, {
      "featureType": "road.arterial",
      "elementType": "geometry",
      "stylers": [
        { "saturation": -100 },
        { "gamma": 1 },
        { "lightness": -24 }
      ]
  }, {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        { "saturation": -100 }
      ]
  }, {
      "featureType": "administrative",
      "stylers": [
        { "saturation": -100 }
      ]
  }, {
      "featureType": "transit",
      "stylers": [
        { "saturation": -100 }
      ]
  }, {
      "featureType": "water",
      "elementType": "geometry.fill",
      "stylers": [
        { "saturation": -100 }
      ]
  }, {
      "featureType": "road",
      "stylers": [
        { "saturation": -100 }
      ]
  }, {
      "featureType": "administrative",
      "stylers": [
        { "saturation": -100 }
      ]
  }, {
      "featureType": "landscape",
      "stylers": [
        { "saturation": -200 }
      ]
  }, {
      "featureType": "poi",
      "stylers": [
        { "saturation": -100 }
      ]
  }, {
         "featureType": "marker",
      "stylers": [
        { "saturation": -100 },
        { "lightness": -8 },
        { "gamma": 3.18 } 
      ]
        
  }
            ]

            var mapOptions = {        
                zoom: 14,
                center: mapLocation,
                draggable: false,
                scrollwheel: false,
                mapTypeControlOptions	: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'usroadatlas']
                }
            };

            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);
            map.setZoom(17);
            map.setOptions({zoomControl: false, mapTypeControl: false , panControl : false, streetViewControl : false});

            var styledMapOptions = {
                
            };

            var usRoadMapType = new google.maps.StyledMapType(
                roadAtlasStyles, styledMapOptions);

            map.mapTypes.set('usroadatlas', usRoadMapType);
            map.setMapTypeId('usroadatlas');
        
        
  var marker = new google.maps.Marker({
      position: mapLocation,
      map: map,
      title: 'Magnus!'
  }); 
        }

        google.maps.event.addDomListener(window, 'load', initialize);
	    </script>
	  
	  <style type='text/css'>
	    #map-canvas {
	        height: 200px;
	        margin: 0px;
	        padding: 0px
	      }

	      a[href^="http://maps.google.com/maps"]{display:none !important}

		.gmnoprint a, .gmnoprint span {
		    display:none;
		}
		.gmnoprint div {
		    background:none !important;
		}
			
	  </style>

		<div class="clear"></div>
		<div class="seprator"></div>

				
		<div class="clear"></div>
	</div>
</div>
</div
<script type="text/javascript">
	
</script>

<?php get_footer(); ?>
