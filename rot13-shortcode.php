<?php
/*
Plugin Name: Rot13 Spoiler Obfuscator
Plugin URI: (in progress)
Description: <a href="http://rot13.com/">Rot13</a> encoding is a quick and easy way to obfuscate or disguise text on your website. By rotating (rot) each letter 13 characters forward in the alphabet, you can easily <a href="http://gameshelf.jmac.org/2012/04/lets-use-rot13-for-game-spoilers/">discuss spoilers</a> without bothering readers who don't want to be spoiled. Just enclose the text you want to hide with the [rot13]shortcode[/rot13].
Version: 0.1.0
Author: K.Adam White
Author URI: http://www.kadamwhite.com
License: GPLv2 or later
*/
/*
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

add_shortcode('rot13', 'kaw_rot13_shortcode');

function kaw_rot13_shortcode($atts, $content)
{
    extract(shortcode_atts(array(
        'showlink' => false,
        'animate' => false
    ), $atts));
    // $atts ideas:
    // - Whether to omit the "rot13.com" link next to the text
    // - Whether to animate the decoding of the string one letter at a time
    // - Whether to include the JavaScript decoding function at all

    $html_tag_pattern = '/(<[^>]*>)/';
    $strings = preg_split($html_tag_pattern, $content, -1, PREG_SPLIT_DELIM_CAPTURE);
    $response = '<span class="rot13">';
    foreach ($strings as $text) {
        // Don't encode HTML tags
        if (preg_match($html_tag_pattern, $text)) {
            $response .= $text;
        } else {
            $response .= str_rot13($text);
        }
    }
    if ($showlink) {
        $response .= ' (<a href="http://www.rot13.com">rot13.com</a>) ';
    }
    $response .= '</span>';
    return $response;
}

?>