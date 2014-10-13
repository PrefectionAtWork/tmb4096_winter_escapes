<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('date_check')) {

	/*	Date Check
	 *
	 *  Parses a delimiter-seperated field of dates, identifies the earliest occurring date, and return true or false if that date occurrs within the specified range.
	 *
	 *	@param dates string				dates to parse
	 *	@param daysFromToday int		days from now to use in check range
	 *	@param numDays int				number of days in interval
	 *	@param delimiter string			string delimiter to use
	 *	@param rangeSeparater string	range seperator to use for range delimiter
	 *
	 *	@return bool
	 */
	 
	function date_check( $dates, $daysFromToday=0, $numDays=1, $delimiter=',', $rangeSeparater='-' ) {		

		$inRange = FALSE;
		$dates = explode($delimiter, $dates);
		$start = strtotime("+".$daysFromToday." days");
		$end = strtotime("+".($daysFromToday + $numDays)." days");
		
		foreach( $dates as $date ) {
			$date = explode($rangeSeparater, $date);
			
			if ( count($date) == 2 ) {
				$date[0] =  strtotime($date[0]);
				$date[1] =  strtotime($date[1]);
				
				// check if range valide
				if ( $date[0]<=$date[1] && ( $start<=$date[0] && $date[0]<=$end ) ) {
					$inRange = TRUE;
				}
			} elseif ( count($date) == 1 ) {
				$date[0] =  strtotime($date[0]);
					
				if ( $start<=$date[0] && $date[0]<=$end ) {
					$inRange = TRUE;
				}
			}
		}
		return $inRange;
	}
}
