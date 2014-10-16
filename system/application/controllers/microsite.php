<?php

/**
	TODO - Move the data processing portion of these functions to a model - SL-070313
	TODO - Write a library for various type of structuring and sorting of promo content - SL-070313
**/


class Microsite extends Controller {

	function Microsite()
	{
		parent::Controller();	
		
		$this->load->library('XmlParser4');
	}
	
	function index( )
	{
	
		/*xdebug settings
		ini_set('xdebug.var_display_max_depth', 5);
		ini_set('xdebug.var_display_max_children', 256);
		ini_set('xdebug.var_display_max_data', 32768);
		*/

		$this->load->helper(array('file', 'xml', 'replacer', 'cmp', 'create_ul', 'create_ul_custom', 'url_tag', 'create_para', 'delimiter_splice', 'date_check', 'array'));
		
		// Use serialized array constant.  
		// See './system/application/config/constants.php' for all meta info.
		$meta = unserialize (META_DATA);
		
		//Loaded XML data source
		$xml = read_file('assets/data/' . $meta['data_source_name'] . $meta['data_source_extension']);
		
		// initiaize data variable
		$data = "";

		//Initialize XMLParser class and Parse()
		$this->xmlparser4->XMLParser4($xml);
		$this->xmlparser4->Parse();
			
		//dump the xml data to an array		
		foreach ($this->xmlparser4->document->element as $element) {
			if ( !empty($element->ti[0]->tagData) ) { //filter for TI Channel
				$first_level = $element->region[0]->tagData;
				//var_dump($first_level);
				$second_level = $element->destination[0]->tagData;
				if ( $element->subdestination[0]->tagData != '' ) {
					$second_level .= " - " . $element->subdestination[0]->tagData;
				}
				//var_dump($second_level);
				
				$i = ( isset($elements[$first_level][$second_level]) ) ? count($elements[$first_level][$second_level]) : 0;
						
				foreach( $element->tagChildren as $child ) {
					$elements[$first_level][$second_level][$i][$child->tagName] = $child->tagData;	
				}
			}
		}
		unset($i);
		
		//Sort element names alphabetically by hotelname
		foreach ($elements as $key => $val) {
			
			ksort($val);
			foreach ( $val as $key2 => $val2 ) {
				uasort($val2, 'cmp');
				$elementsSorted[$key][$key2] = $val2;
				
				/*
				foreach ($val2 as $key3 => $val3 ) {
					if ( !empty($val3['islinelisting']) ) {
						$lineListings[$key][$key2][] = $val3;
						unset ($elementsSorted[$key][$key2][$key3]);
					}
				}
				*/
			}
		}
		ksort($elementsSorted);
		
		// Set view data
		$data['elements'] = $elementsSorted;
		//$data['line_listings'] = $lineListings;
						
		// Merge meta data into data array.
		$data = array_merge($data, $meta);
		
		$data['assets_prefix'] = '';
	
		if ( isset($_SERVER['SERVER_NAME']) ) {
			if ( strpos(strtolower($_SERVER['SERVER_NAME']), "travimp") !== FALSE ) {
				$this->load->view('landingpage', $data);
			} else {
				$this->load->view('landingpage', $data);	//if on a different host than travimp
			}
		} else {
			$this->load->view('landingpage', $data);	//default template
		}			
	}
}

/* End of file microsite.php */
/* Location: ./system/application/controllers/microsite.php */