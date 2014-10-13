<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*	Parses out url tags in the form [url_name, hotel_code] and enters in Html link code.
 *
 *	@param string 	str					full argument tag
 *	@param bool 	no_anchor			specifies whether or not to ouput the full HTML anchor
 *	@param string 	open_delimiter		opening delimiter character
 *	@param string 	closing_delimiter	closing delimiter character
 *	@param string 	part_delimiter		tag parts delimiter character
 *
 *	@return string
 */
function url_tag($str, $no_anchor=FALSE, $open_delimiter='[', $close_delimiter=']', $part_delimiter='||') {

	$orig_str = $str;

	$start = strpos($str, $open_delimiter);
	$end = strpos($str, $close_delimiter);
	while ( $start !== FALSE ) {
		$tags[] = substr($str, $start, ($end-$start)+strlen($close_delimiter));
	
		$str = substr($str, $end+strlen($close_delimiter));
		$start = strpos($str, $open_delimiter);
		$end = strpos($str, $close_delimiter);
	}
		//var_dump( $tags );
	
	if ( !empty($tags) ) {
		$tag_delimiters = array($open_delimiter, $close_delimiter);
		foreach ( $tags as $tag ) {
			$s_tag = str_replace($tag_delimiters, '', $tag);
			$parts = explode($part_delimiter, $s_tag);
			if ( !$no_anchor ) {
				if ( count($parts) == 2 ) {
					$processed_tags[] = "<a href=\"http://www.travimp.com/hotel.php?msg=" . trim($parts[1]) . "\">" . trim($parts[0]) . "</a>";
				} else {
					$processed_tags[] = $tag;
				}	
			} else {
				$processed_tags[] = trim($parts[0]);
			}
		}
		//var_dump($tags);
		//var_dump($processed_tags);
		$str = str_replace($tags, $processed_tags, $orig_str);
	}
	
	return $str;
}