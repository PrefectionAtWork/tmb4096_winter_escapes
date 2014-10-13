<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('create_ul'))
{
    function create_ul($list, $css_class='list-data') {
		$ul = "<ul class=\"" . $css_class . "\">";
		$lis = explode("**", $list);
		echo "<p><strong>" . $lis[0] . "</p></strong>";
		array_shift($lis);
		foreach ( $lis as $li ) {
			$ul .= "<li>" . trim($li) . "</li>";
		}
		
		return $ul."</ul>";
    }
}
