<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('replacer'))
{
    function replacer($string) {
		$string = str_replace( "&amp; ", 	" & ",	$string);
		$string = str_replace( " & ", 		" &amp; ",	$string);
		//$string = str_replace( "-", 		" &ndash; ",	$string);
		$string = str_replace( " - ", 		" &ndash; ",	$string);
		$string = str_replace( " -", 		" &ndash; ",	$string);
		$string = str_replace( "- ", 		" &ndash; ",	$string);
		$string = str_replace( "-", 		" &ndash; ",	$string);
		$string = str_replace( " – ", 		" &ndash; ",	$string);
		$string = str_replace( " –", 		" &ndash; ",	$string);
		$string = str_replace( "– ", 		" &ndash; ",	$string);
		$string = str_replace( "–", 		" &ndash; ",	$string);
		$string = str_replace( "®", 		"<sup>&reg;</sup>",	$string);
		//$string = str_replace( "&Acirc;&reg;", 		"&reg;", 		$string);
		//$string = str_replace( "Â®", 		"&reg;", 		$string);
		//$string = str_replace( "â€™", 	"&#39;", 		$string);
		//$string = str_replace( "Ã³", 		"&oacute;", 		$string);
		//$string = str_replace( "Ã«", 		"&euml;", 		$string);
		
		return $string;
    }
}
