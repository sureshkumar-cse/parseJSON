<?php 
// Parse JSON nested arrays.
$json_Data = file_get_contents('data.json');
$json_array = json_decode($json_Data, true);
//print_r($json_array);
foreach($json_array as $objects) {
	foreach($objects as $key => $value){
		if(is_array($value)){
			foreach($value as $arr){
				foreach($arr as $key => $value){
					echo $key." => ".$value."<br />";
				}
			}
		}else {
			echo $key." => ".$value."<br />";
		}
	}
}
?>
