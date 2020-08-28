<?php

// Walker Dropdown for AMP Navigation
class ampsidebar_dropdown_walker extends Walker_Nav_Menu {
  static $count=0;

  function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
  	if($depth == 0 and $args->walker->has_children) {
  			$output .= '<li class="sidebar-parent-container"><amp-accordion disable-session-states><section><h4 class="nested-accordion"><a class="accordion-links" href='. esc_attr($item->url).' aria-expanded="false" tabindex="0">'.esc_html($item->title).'</a><span class="accordion-icon" role="button"></h4></span><ul>';
		} else {
  		$output .= '<li><a href='. esc_attr($item->url) .'>'. esc_html($item->title) .'</a>';
  	}
}

	function end_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
  	if($depth == 0 ) {
  			$output .= ' </section>';
  	} else {
  		$output .= '</li>';
  	}
  }

   public function end_lvl( &$output, $depth = 0, $args = array() ) {
     	if($args->walker->has_children) {
     		$output .= '</amp-accordion> </li>';
     	}

			$output .= '</li>';

     }
	 }

   ?>
