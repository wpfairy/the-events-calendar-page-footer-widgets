<?php
/*
Plugin Name: The Events Calendar Page Footer Widgets
Description: Adds 3 footer widgets to The Events Calendar /events/ page
Version: 1.0.0
Author: Renee Allred
Author URI: http://wpfairy.com
Text Domain: tec-page-footer-widgets
License: GPLv2 or later
*/

/*
Copyright 2009-2012 by WPFairy LLC and the contributors

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

//adds widget areas
function tecpfw_master_custom_sidebar() {
   
    register_sidebar(
        array (
            'name' => __( 'Event Column 1', 'master' ),
            'id' => 'event-column-1',
            'description' => __( 'Event Column 1', 'master' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array (
            'name' => __( 'Event Column 2', 'master' ),
            'id' => 'event-column-2',
            'description' => __( 'Event Column 2', 'master' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    register_sidebar(
        array (
            'name' => __( 'Event Column 3', 'master' ),
            'id' => 'event-column-3',
            'description' => __( 'Event Column 3', 'master' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
    
}
add_action( 'widgets_init', 'tecpfw_master_custom_sidebar' );

// add widget areas to The Events Calendar page
function tecpfw_event_footer_widget_areas() {
	
	echo '<div id="events-footer-1" class="clearfix" style="width:100%;background-color:#efefef;padding:1em;">';

		if ( is_active_sidebar( "event-column-1" ) ) : 
			echo '<div id="event-column-1" class="event-column" style="width:30%;float:left;margin:1em;">';
			dynamic_sidebar( "event-column-1" );
			echo '</div>';
		endif;

		if ( is_active_sidebar( "event-column-2" ) ) : 
			echo '<div id="event-column-2" class="event-column" style="width:30%;float:left;margin:1em;">';
			dynamic_sidebar( "event-column-2" );
			echo '</div>';
		endif;

		if ( is_active_sidebar( "event-column-3" ) ) : 
			echo '<div id="event-column-3" class="event-column" style="width:30%;float:left;margin:1em;">';
			dynamic_sidebar( "event-column-3" );
			echo '</div>';
		endif;   
	
	echo '</div>';

	
}
add_action ( 'tribe_events_after_template', 'tecpfw_event_footer_widget_areas' );