<?php
/**
* Plugin Name: Snapshot
* Description: Adds the shortcode for snapshots. Use [snap url="http://google.com" alt="My description" w="400" h="300"]
* Version: 1.0
* Author: Not Found
* License: GPL
*/

/*  Copyright 2007-2011 Takayuki Miyoshi (email: takayukister at gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/
      
function snapshot_shortcode($atts, $content = null) {
  extract(
    shortcode_atts(
      array(
  			"snap" => 'http://s.wordpress.com/mshots/v1/',
  			"url" => 'http://google.com',
  			"alt" => 'Website Preview',
  			"w" => '400',
  			"h" => '300'
      ),
      $atts
    )
  );
  
  $img = '<img src="' . $snap . urlencode($url) . '?w=' . $w . '&h=' . $h . '" alt="' . $alt . '"/>';
    return $img;
}

add_shortcode('snap', 'snapshot_shortcode');