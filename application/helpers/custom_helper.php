<?php
	function get_dates($date){
		$dates = array();
		if(date('l', strtotime($date)) == 'Sunday'){	    			
			$dates['date']['Mon'] 	= date('Y-m-d', strtotime('this monday', strtotime($date)));
    		$dates['date']['Tue'] 	= date('Y-m-d', strtotime('this tuesday', strtotime($date)));
    		$dates['date']['Wed'] 	= date('Y-m-d', strtotime('this wednesday', strtotime($date)));
    		$dates['date']['Thu'] 	= date('Y-m-d', strtotime('this thursday', strtotime($date)));
    		$dates['date']['Fri'] 	= date('Y-m-d', strtotime('this friday', strtotime($date)));
    		$dates['date']['Sat'] 	= date('Y-m-d', strtotime('this saturday', strtotime($date)));
    		// $dates['date']['Sun'] 	= date('Y-m-d', strtotime('this sunday', strtotime($date)));

    		$dates['day']['Mon'] 	= date('d', strtotime('this monday', strtotime($date)));
    		$dates['day']['Tue'] 	= date('d', strtotime('this tuesday', strtotime($date)));
    		$dates['day']['Wed'] 	= date('d', strtotime('this wednesday', strtotime($date)));
    		$dates['day']['Thu'] 	= date('d', strtotime('this thursday', strtotime($date)));
    		$dates['day']['Fri'] 	= date('d', strtotime('this friday', strtotime($date)));
    		$dates['day']['Sat'] 	= date('d', strtotime('this saturday', strtotime($date)));
    		// $dates['day']['Sun'] 	= date('d', strtotime('this sunday', strtotime($date)));
    		
		}else{
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
		}
		
		return $dates;
	}


	function generate_age($birthday){
		$age = date("Y") - date('Y', strtotime($birthday));
		return $age;
	}

