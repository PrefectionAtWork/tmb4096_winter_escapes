<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('create_ul_custom'))
{
    function create_ul_custom($list, $delimiter="**", $css_class='list-data') {
		$lis = explode($delimiter, $list);
		$ul = "<ul class=\"" . $css_class . "\">";
		$ul .= "<p><strong>" . str_replace(array("\n", "\t", "\r"), '', trim($lis[0])) . "</strong></p>";
		array_shift($lis);
		foreach ( $lis as $li ) {
			$ul .= "<li>" . str_replace(array("\n", "\t", "\r"), '', trim($li)) . "</li>";
		}
		
		return $ul."</ul>";
    }
}