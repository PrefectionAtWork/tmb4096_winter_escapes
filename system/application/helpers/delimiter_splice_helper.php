<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*	Delimiter splicing function
 *
 *	@param delimiter		string 	delimiter to use
 *	@param interval	int		interval to splice on
 *	@param string			string	argument string
 *
 *	@return array
 */
function delimiter_splice($delimiter, $interval=1, $string) {
		//handle decimal points.  percision over 4 places will be lost.
		$percision = explode('.',$string);
		$string = (string)$percision[0];
		$decimal_val = ( count($percision) > 1 ) ? ".".(string)$percision[1] : '';
	
		// http://www.php.net/manual/en/function.str-split.php#84891  [modified]
		if(strlen($string)>$interval || !$interval) {
            do {
                $len = strlen($string);
                $parts[] = substr($string,(-1*$interval));            
				$string = ($len <= $interval) ? substr($string,$interval) : substr($string,0,($len-$interval));
			} while($string !== false);
		} else {
            $parts = array($string);
        }
		
        return implode($delimiter, array_reverse($parts) ).$decimal_val;
}