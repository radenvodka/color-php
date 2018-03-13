<?php
/**
 * @Author: Eka Syahwan
 * @Date:   2018-03-14 02:04:03
 * @Last Modified by:   Eka Syahwan
 * @Last Modified time: 2018-03-14 02:26:53
 */
function color($color = "default" , $text){
	$arrayColor = array(
		'grey' 		=> '1;30',
		'red' 		=> '1;31',
		'green' 	=> '1;32',
		'yellow' 	=> '1;33',
		'blue' 		=> '1;34',
		'purple' 	=> '1;35',
		'nevy' 		=> '1;36',
		'white' 	=> '1;0',
	);	
	return "\033[".$arrayColor[$color]."m".$text."\033[0m";
}


echo color("red","Halo I am red")."\r\n";
echo color("yellow","Halo I am yellow")."\r\n";