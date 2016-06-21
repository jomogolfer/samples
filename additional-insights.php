<?php
/*
 * The code below helps to create the Additional Insights (recent blog      * posts) on the sidebar of SmartSearch Marketing.   	
 * URL: http://smartsearchmarketing.com/solutions/b2b-digital-marketing/lead-generation
*/
function my_p2p_template_handling( $html, $connected, $ctype, $mode ) {

  $template = locate_template( "p2p-{$mode}-{$ctype->name}.php" );

  if ( !$template )
      return $html;

  ob_start();

  $_post = $GLOBALS['post'];

  echo '<div class="related">';
  echo '<div class="icon"></div>';
  echo '<h3>Additional Insights</h3>';

// Limit Additional Insights to 5 results
  	$i = 1;
    foreach ( $connected->items as $item ) {
    	if ($i==6) break;
        $GLOBALS['post'] = $item;
        load_template( $template, false );
    $i++;
    }
  echo '</div>';

  $GLOBALS['post'] = $_post;

  return ob_get_clean();

}



?>