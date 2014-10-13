<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( !function_exists('create_para') )
{
    function create_para($verbiage, $css_class='sub-paragraph') {
		$html = '';
		$ps = explode("**", $verbiage);
		if ( count($ps) > 1 ) {
			array_shift($ps);	//remove the first blank element
		}		
		foreach ( $ps as $p ) {
			$html .= "<p class=\"" . $css_class . "\">";
			$br = ( strpos($p, '||') ) ? "<br>" : '';
			$p = str_replace('||','',$p);
			$html .= trim($p) . "</p>" . $br;
		}
		return $html;
    }
}
