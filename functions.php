<?php

function get_blog_page_url() {
	
	if( get_option('show_on_front') == 'page') {
		$posts_page_id = get_option('page_for_posts');
		$posts_page_url = get_page_link($posts_page_id);
		
		return $posts_page_url;
		
	}
	return bloginfo('url');
}
	
?>