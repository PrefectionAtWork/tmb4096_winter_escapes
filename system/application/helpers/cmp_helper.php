<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*	Sorting helper function
 *
 *	@param array
 *	@param array
 *
 *	@return array
 */
function cmp($a, $b) {

		$a['hotelname'] = preg_replace('@^(a|A|an|An|AN|the|The|THE) @', '', $a['hotelname']);
		$b['hotelname'] = preg_replace('@^(a|A|an|An|AN|the|The|THE) @', '', $b['hotelname']);
	
		return strcasecmp($a['hotelname'], $b['hotelname']);
}