<?php

	/**
	 * Calculate the distance in miles between two latitude, longitude pairs
	 */
	
	function geo_distance($lat1, $lon1, $lat2, $lon2)
	{
		return rad2deg(acos(sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($lon1 - $lon2)))) * 60 * 1.1515;
	}
