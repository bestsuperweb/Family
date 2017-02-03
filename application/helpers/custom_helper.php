<?php
	    	function get_dates($date){
	    		$dates = array();
	    		$dates['date']['Mon'] 	= date('Y-m-d', strtotime('monday this week', strtotime($date)));
	    		$dates['date']['Tue'] 	= date('Y-m-d', strtotime('tuesday this week', strtotime($date)));
	    		$dates['date']['Wed'] 	= date('Y-m-d', strtotime('wednesday this week', strtotime($date)));
	    		$dates['date']['Thu'] 	= date('Y-m-d', strtotime('thursday this week', strtotime($date)));
	    		$dates['date']['Fri'] 	= date('Y-m-d', strtotime('friday this week', strtotime($date)));
	    		$dates['date']['Sat'] 	= date('Y-m-d', strtotime('saturday this week', strtotime($date)));
	    		// $dates['date']['Sun'] 	= date('Y-m-d', strtotime('sunday this week', strtotime($date)));
	    		
	    		$dates['day']['Mon'] 	= date('d', strtotime('monday this week', strtotime($date)));
	    		$dates['day']['Tue'] 	= date('d', strtotime('tuesday this week', strtotime($date)));
	    		$dates['day']['Wed'] 	= date('d', strtotime('wednesday this week', strtotime($date)));
	    		$dates['day']['Thu'] 	= date('d', strtotime('thursday this week', strtotime($date)));
	    		$dates['day']['Fri'] 	= date('d', strtotime('friday this week', strtotime($date)));
	    		$dates['day']['Sat'] 	= date('d', strtotime('saturday this week', strtotime($date)));
	    		// $dates['day']['Sun'] 	= date('d', strtotime('sunday this week', strtotime($date)));
	    		
	    		return $dates;
	    	} 

