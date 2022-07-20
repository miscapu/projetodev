<?php
/*
My functions
*/
add_action("wp_footer", "wordpress_summary");
function wordpress_summary()
{
	echo "Hello World";
}