<style type="text/css">
  .widgetGuts h3{ 
      display: none;
  }
  #frm-email {
    border : 1px solid #33aabb;
    width: 200px;
    height: 30px;
    margin-top: 30px;
  }

.required {
  padding: 0px;
  margin : 0px;
}


.subscribe table, .frm-subscriptionFront {
  padding : 0;
  margin-top: -50px;
}

.widgetGuts .error{
    color: white;
    background-color: #F17288;
}

.subscribe .widgetGuts .success{
    color: white
    background-color: #16A085;
}

.subscribe label.required, .required th:first-child, tbody tr th {
  display: none;
}




</style>

<div class="grid_12 alpha subscribe">
    <h3>Subscribe to get regular updates :</h3>
    <?php 
            echo do_shortcode("[simpleSubscribeForm]"); 
        ?>
</div>
<div class="grid_6 social-link">
    <div class="widget_inner last">
        <?php if (is_active_sidebar('second-footer-widget-area')) : ?>
            <?php dynamic_sidebar('second-footer-widget-area'); ?>
        <?php else : ?> 
            <h3><?php _e('SOCIAL LINK','black-bird'); ?></h3>
            <ul class="Social-links">
                <?php if (blackbird_get_option('blackbird_facebook') != '') { ?>
                    <li><a href="<?php echo blackbird_get_option('blackbird_facebook'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png" /><?php _e('&nbsp;&nbsp;Join Us On Facebook','black-bird'); ?></a> </li>
                <?php } ?>  
                <?php if (blackbird_get_option('blackbird_twitter') != '') { ?>
                    <li><a href="<?php echo blackbird_get_option('blackbird_twitter'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.png" /><?php _e('&nbsp;&nbsp;Join Us On Twitter','black-bird'); ?></a></li>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_linked') != '') { ?>
                    <li><a href="<?php echo blackbird_get_option('blackbird_linked'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkdin.png" /><?php _e('&nbsp;&nbsp;Join Us On In.com','black-bird'); ?></a></li>
                <?php } ?>
                <?php if (blackbird_get_option('blackbird_rss') != '') { ?>
                    <li><a href="<?php echo blackbird_get_option('blackbird_rss'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/subscribe.png" /><?php _e('&nbsp;&nbsp;Subscribe to Our Blog','black-bird'); ?></a></li>
                <?php } ?>
            </ul>
        <?php endif; ?>
    </div>
</div>

<div class="grid_6 omega">
    <a href="#" title="Loading" class="tooltip"> Hover over me</a>

    <div class="cal1"></div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
<script src= "<?php echo get_template_directory_uri(); ?>/CLNDR/example/moment-2.5.1.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/CLNDR/src/clndr.js"></script>
<!-- <script src="http://localhost/projects/magnus/wp-content/themes/blackbird/CLNDR/example/site.js"></script> -->

<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.tooltipster.min.js"></script>
<script type="text/javascript">

</script>


<script type="text/javascript">


    // call this from the developer console and you can control both instances
var calendars = {};

$(document).ready( function() {

  // assuming you've got the appropriate language files,
  // clndr will respect whatever moment's language is set to.
  // moment.lang('ru');
  // here's some magic to make sure the dates are happening this month.

  var thisMonth = moment().format('YYYY-MM');
  console.log(thisMonth);

<?php

    $args = array(
        'post_type' => 'course'
    );

    $the_query = new WP_Query( $args );
?>

  var eventArray = [];

<?php
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $start_date = get_post_custom_values('starting_date' , get_the_ID());
            $date = new DateTime($start_date[0]);
            $starting_date =  $date->format("Y-m-d");
            ?>
            eventArray.push({ startDate: '<?php echo $starting_date; ?>' , endDate: '<?php echo $starting_date; ?>' , title: '<?php echo get_the_title(); ?>' });
            <?php
        }
    } else {
        // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    //var_dump($query);
?>



  // the order of the click handlers is predictable.
  // direct click action callbacks come first: click, nextMonth, previousMonth, nextYear, previousYear, or today.
  // then onMonthChange (if the month changed).
  // finally onYearChange (if the year changed).

  calendars.clndr1 = $('.cal1').clndr({
    events: eventArray,
    // constraints: {
    //   startDate: '2013-11-01',
    //   endDate: '2013-11-15'
    // },

    
    clickEvents: {

    eventMouseover: function(event, jsEvent, view) {
        alert();
    },

    click: function(target) {
        
        console.log(target.date._i);
        //get the event of this date avia ajax and show.


        // if you turn the `constraints` option on, try this out:
        // if($(target.element).hasClass('inactive')) {
        //   console.log('not a valid datepicker date.');
        // } else {
        //   console.log('VALID datepicker date.');
        // }
      },
      nextMonth: function() {
        console.log('next month.');

      },
      previousMonth: function() {
        console.log('previous month.');
        
      },
      onMonthChange: function() {
        console.log('month changed.');
        $('.event').addClass('tooltip');

        $(".tooltip").tooltipster(
                {
                    content : 'Loading ...',
                    functionBefore: function(origin, continueTooltip) {
                      //alert("whats");
                        // alert(date_req);
                        continueTooltip();


                        if (origin.data('ajax') !== 'cached') {
                            $.ajax({
                                type: 'POST',
                                url: 'course-agenda?date='+date_req,
                                success: function(data) {
                                    // update our tooltip content with our returned data and cache it
                                    origin.tooltipster('content', data).data('ajax', 'cached');
                                }
                            });
                        }


                    }
                }
            );




      },
      nextYear: function() {
        console.log('next year.');
      },
      previousYear: function() {
        console.log('previous year.');
      },
      onYearChange: function() {
        console.log('year changed.');
      }
    },
    multiDayEvents: {
      startDate: 'startDate',
      endDate: 'endDate'
    },
    showAdjacentMonths: true,
    adjacentDaysChangeMonth: false
  });

  calendars.clndr2 = $('.cal2').clndr({
    template: $('#template-calendar').html(),
    events: eventArray,
    multiDayEvents: {
      startDate: 'startDate',
      endDate: 'endDate'
    },
    startWithMonth: moment().add('month', 1),
    clickEvents: {
      click: function(target) {
        console.log(target);
      }
    },
    forceSixRows: true
  });

  // bind both clndrs to the left and right arrow keys
  $(document).keydown( function(e) {
    if(e.keyCode == 37) {
      // left arrow
      calendars.clndr1.back();
      calendars.clndr2.back();
    }
    if(e.keyCode == 39) {
      // right arrow
      calendars.clndr1.forward();
      calendars.clndr2.forward();
    }
  });

});

$(document).ready(function() {
      $('.event').addClass('tooltip');
});
</script>


<script type="text/javascript">
    $(document).ready(function() {
      $(".tooltip").tooltipster(
          {
              content : 'Loading ...',
              functionBefore: function(origin, continueTooltip) {
                  // alert(date_req);
                  continueTooltip();

                  if (origin.data('ajax') !== 'cached') {
                      $.ajax({
                          type: 'POST',
                          url: 'course-agenda?date='+date_req,
                          success: function(data) {
                              // update our tooltip content with our returned data and cache it
                              origin.tooltipster('content', data).data('ajax', 'cached');
                          }
                      });
                  }


              }
          }
      );
  });
</script>
