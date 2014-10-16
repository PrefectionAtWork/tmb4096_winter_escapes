<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*	Parses out url tags in the form [url_name, hotel_code] and enters in Html link code.
 *
 *	@param array 	array				multi-dimensional array to check
 *	@param string 	key					key to look for
 *
 *	@return bool
 */
 
if ( ! function_exists('random_element'))
{
	function check_multi_dimensional($array, $key) {
		foreach ($array as $item)
			if (isset($item[$key]) && !empty($item[$key]) )
				return true;
		return false;
	}
}

/* End of file MY_array_helper.php */
/* Location: ./system/application/helpers/MY_array_helper.php */