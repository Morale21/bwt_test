<?php
class Model_Main extends Model
{
	function getWeather(){
		$gismeteo = 'http://www.gismeteo.ua/city/daily/5093/';
		$content = file_get_contents ($gismeteo);
		preg_match_all ('#<div class="wsection wdata">(.*?)<div class="section bottom">#is', $content,$weather);
		echo $weather[0][0];		
	}
	
	
}
?>