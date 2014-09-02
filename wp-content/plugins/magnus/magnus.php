<?php
/**
 * @package magnus
 * @version 1.0
 */
/*
Plugin Name: Magnus
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: a custom plugin for magnusinstitute.com for some customization.
Author: Anik Hasan
Version: 1.0
Author URI: http://pixelizard.com
*/

function notify_new_post($post_id) {
	echo "getting action hook";
	
    if( ( $_POST['post_status'] == 'publish' ) && ( $_POST['original_post_status'] != 'publish' ) ) {
        $post = get_post($post_id);
        $author = get_userdata($post->post_author);
        $author_email = $author->user_email;
        $email_subject = "Your post has been published.";

        ob_start(); ?>

        <html>
            <head>
                <title>New post at <?php bloginfo( 'name' ) ?></title>
            </head>
            <body>
                <p>
                    Hi <?php echo $author->user_firstname ?>,
                </p>
                <p>
                    Your post <a href="<?php echo get_permalink($post->ID) ?>"><?php the_title_attribute() ?></a> has been published.
                </p>
            </body>
        </html>

        <?php

        $message = ob_get_contents();

        ob_end_clean();

        wp_mail( $author_email, $email_subject, $message );
    }
}

add_action( 'publish_post', 'notify_new_post' );

?>