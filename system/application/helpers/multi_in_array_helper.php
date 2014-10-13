<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*	Multidimensional array search helper function
 *
 *	@param array	array to search
 *	@param array	search term
 *	@param int		array depth	
 *
 *	@return array
 */
function multi_in_array( $key_arr, $find_arr ) {

        foreach ($find_arr as $key => $val) {
                if (array_search($key_arr, $val) !== FALSE) {
                        return TRUE;
                }
        }
        return FALSE;
}