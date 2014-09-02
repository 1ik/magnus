<?php
/**
 * The template for displaying front page pages.
 *
 */
?>

<?php get_header(); ?>  
<div class="clear"></div>
<!--Start Slider Wrapper-->




<div class="grid_24">
    <h2>slieshow</h2>
    <?php 
            echo do_shortcode("[metaslider id=8]"); 
        ?>
</div>

<!--End Silder Wrapper-->
<div class="clear"></div>
<div class="seprator"></div>
<div class="content" id="page-title">
    <?php if (blackbird_get_option('blackbird_mainheading') != '') { ?>
        <h1><?php echo stripslashes(blackbird_get_option('blackbird_mainheading')); ?></h1>
    <?php } else { ?>
        <h1><?php _e('Create beautiful &amp; Professional Website with the Blackbird Theme easily &amp; quickly.', 'black-bird'); ?></h1>
<?php } ?>
</div>


<div class="feature-content">
    <div class="circle-content">




        <div class="grid_8 alpha thumbnails" id="thumb1" style="margin-top : 10px">
            <div class="feature-content-inner one">

                <?php if (blackbird_get_option('blackbird_wimg1') != '') { ?>
                    <div class=""><img src="<?php echo blackbird_get_option('blackbird_wimg1'); ?>" /></div>
                <?php } else { ?>
                    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/img1.png" /></div>
                        <?php } ?>
                        <?php if (blackbird_get_option('blackbird_headline1') != '') { ?>
                        <h1><?php echo stripslashes(blackbird_get_option('blackbird_headline1')); ?></h1>
                <?php } else { ?> <h1><a href="#"><?php _e('Unique Circular Design', 'black-bird'); ?></a></h1>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_feature1') != '') { ?>
                    <p><?php echo stripslashes(blackbird_get_option('blackbird_feature1')); ?></p>
                <?php } else { ?>
                    <p><?php _e('BlackBird Wordpress Theme comes with a Unique Circular Pattern, which makes your website stand out from the crowd.', 'black-bird'); ?></p>
                <?php } ?>

                <button class="read-more-link"><a target="_blank" style="color :black" href="<?php echo blackbird_get_option('blackbird_link1');?>">Read more</a></button>
            </div>
        </div>





        <div class="grid_8 beta thumbnails" id="thumb2" style="">
            <div class="feature-content-inner two">
                        <?php if (blackbird_get_option('blackbird_fimg2') != '') { ?>
                    <div class=""><img src="<?php echo blackbird_get_option('blackbird_fimg2'); ?>" /></div>
                <?php } else { ?>
                    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/img2.png" /></div>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_headline2') != '') { ?>
                    <h1><?php echo stripslashes(blackbird_get_option('blackbird_headline2')); ?></h1>
                <?php } else { ?> <h1><a href="#"><?php _e('Professional Design', 'black-bird'); ?></a></h1>
                   <?php } ?>
<?php if (blackbird_get_option('blackbird_feature2') != '') { ?>
                    <p><?php echo stripslashes(blackbird_get_option('blackbird_feature2')); ?></p>
                <?php } else { ?>
                    <p><?php _e('The BlackBird Wordpress Theme is highly optimized to look Professional. So that your website looks great to your visitors.', 'black-bird'); ?></p>
                <?php } ?>

                <button class="read-more-link"><a target="_blank" style="color :black" href="<?php echo blackbird_get_option('blackbird_link2');?>">Read more</a></button>
             </div>
        </div>  





        <div class=" grid_8 omega thumbnails" id="thumb3">
            <div class="feature-content-inner three">
                <?php if (blackbird_get_option('blackbird_fimg3') != '') { ?>
                    <div class=""><img src="<?php echo blackbird_get_option('blackbird_fimg3'); ?>" /></div>
                <?php } else { ?>
                    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/images/img3.png" /></div>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_headline3') != '') { ?>
                    <h1><?php echo stripslashes(blackbird_get_option('blackbird_headline3')); ?></h1>
                <?php } else { ?> <h1><a href="#"><?php _e('Easily build Website', 'black-bird'); ?></a></h1>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_feature3') != '') { ?>
                                    <p><?php echo stripslashes(blackbird_get_option('blackbird_feature3')); ?></p>
                <?php } else { ?>
                                    <p><?php _e('This BlackBird Wordpress Theme gives you the easiness of building your site without any coding skills required.', 'black-bird'); ?></p>
                <?php } ?>

                <button class="read-more-link"><a target="_blank" style="color :black" href="<?php echo blackbird_get_option('blackbird_link3');?>">Read more</a></button>
            </div>
        </div>

    </div>
</div>

</div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">

        if($(window).height() < 950) {

            jQuery('#page-title').css({'opacity' : '0.0'});
            jQuery('.thumbnails').css({'opacity' : '0.0'});
            // jQuery('.footer > .grid_12 > .widget_inner').css({'opacity' : '0.0'});
            // jQuery('.social-link').css({'opacity' : '0.0'});
            // jQuery('#footer-third').css({'opacity' : '0.0'});

            jQuery(document).on('scroll' , function() {
                //console.log(jQuery(window).scrollTop());
                //console.log(jQuery('#page-title').position());
                if(jQuery(window).scrollTop() > jQuery('#page-title').position().top - 500 ) {
                    jQuery('#page-title').addClass('animated fadeInDown');
                    jQuery('#page-title').css({'opacity' : '1.0'});
                }

                if(jQuery(window).scrollTop() > jQuery('#page-title').position().top - 250 ) {
                     jQuery('#thumb1').addClass('animated fadeInLeft');
                     jQuery('#thumb2').addClass('animated fadeInUp');
                     jQuery('#thumb3').addClass('animated fadeInRight');
                     jQuery('#thumb1, #thumb2, #thumb3').css({'opacity' : '1.0'});
                }

                if ( (jQuery('#footer').position().top )  <= jQuery(window).scrollTop() + 600) {

                    if(!jQuery('.footer > .grid_12 > .widget_inner').hasClass('slideInLeft')) {

                        jQuery('.footer > .grid_12 > .widget_inner').addClass('animated slideInLeft');
                        jQuery('.social-link').addClass('animated slideInUp');
                        jQuery('#footer-third').addClass('animated slideInRight');

                        jQuery('.social-link').css({'opacity' : '1.0'});
                        jQuery('.footer > .grid_12 > .widget_inner').css({'opacity' : '1.0'});
                        jQuery('#footer-third').css({'opacity' : '1.0'});

                    }
                }
            });
        }

</script>
