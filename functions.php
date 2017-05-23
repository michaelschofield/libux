<?php

function exclude_quotes_from_homepage($query) {
  if ( $query->is_home )
    $query->set('cat', '-128');
  return $query;
}
add_filter('pre_get_posts', 'exclude_quotes_from_homepage');

function create_quotes_api_endpoint( WP_REST_Request $request ) {
  $args = array(
    'category' => '128',
    'orderby' => 'rand',
    'posts_per_page' => 1
  );

  $posts = get_posts( $args );
  $return = array();

  foreach( $posts as $post ){
    $return[] = array(
      'title' => $post->post_title,
      'attribution' => get_post_meta( $post->ID, 'quote_attribution', true ),
      'url' => get_post_meta( $post->ID, 'quote_source', true ),
      'source' => get_post_meta( $post->ID, 'quote_source_title', true ),
      'quote' => get_post_meta( $post->ID, 'quote_content', true )
      
    );
  }

  if ( empty ( $posts ) ) { return null; }
  $response = new WP_REST_Response( $return );
  return $response;
}

function create_quotes_api_route() {
  register_rest_route( 'quotes/v2', '/quote', array(
    'methods' => 'GET',
    'callback' => 'create_quotes_api_endpoint'
  ));
}

add_action( 'rest_api_init', 'create_quotes_api_route' );

function lx_rss_permalink( $permalink ) {  
  global $wp_query;
  if( $url = get_post_meta($wp_query->post->ID, 'link_url', true) ) {
    return $url;
  }
  return $permalink;
}
add_filter( 'the_permalink_rss', 'lx_rss_permalink', 100 );

?>
