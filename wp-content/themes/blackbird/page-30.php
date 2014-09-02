
<?php

    $args = array(
        'post_type' => 'course'
    );

    $the_query = new WP_Query( $args );

    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
            $start_date = get_post_custom_values('starting_date' , get_the_ID());
            $date = new DateTime($start_date[0]);
            $starting_date =  $date->format("Y-m-d");
            echo $starting_date."<br/>";
        }
    } else {
        // no posts found
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    //var_dump($query);
?>