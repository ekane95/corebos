<?php
/*+*******************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ******************************************************************************/

function __vt_add($arr){
	if(sizeof($arr)==1){
		return $arr[0];
	}else{
		return $arr[0]+$arr[1];
	}
}

function __vt_sub($arr){
	if(sizeof($arr)==1){
		return -$arr[0];
	}else{
		return $arr[0]-$arr[1];
	}
}

function __vt_mul($arr){
	return $arr[0]*$arr[1];
}

function __vt_div($arr){
	try {
	return $arr[0]/$arr[1];
	}catch(Exception $e) {
		return 0;
	}
}

function __vt_round($arr) {
	if (count($arr)<1 or count($arr)>2) return $arr[0];
	$decs = (isset($arr[1]) ? $arr[1] : 0);
	if (is_numeric($arr[0]) and is_numeric($decs)) {
		return round($arr[0],$decs);
	} else {
		return $arr[0];
	}
}
function __vt_ceil($num) {
	if (is_numeric($num[0])) {
		return ceil($num[0]);
	} else {
		return 0;
	}
}
function __vt_floor($num) {
	if (is_numeric($num[0])) {
		return floor($num[0]);
	} else {
		return 0;
	}
}

?>