<?php
class Model_Portfolio extends Model
{
	public function get_data()
	{	
		return array(
			
			array(
				'Year' => '2012',
				'Site' => 'http://DunkelBeer.ru',
				'Description' => 'Промо-сайт темного пива Dunkel от немецкого производителя Löwenbraü выпускаемого в России пивоваренной компанией "CАН ИнБев".'
			),
			array(
				'Year' => '2012',
				'Site' => 'http://ZopoMobile.ru',
				'Description' => 'Русскоязычный каталог китайских телефонов компании Zopo на базе Android OS и аксессуаров к ним.'
			),
			// todo
		);
	}
}
class View
{
	//public $template_view; // здесь можно указать общий вид по умолчанию.
	
	function generate($content_view, $template_view, $data = null)
	{
		
		//if(is_array($data)) {
			// преобразуем элементы массива в переменные
		//	extract($data);
		//}
		include 'application/views/'.$template_view;
		include "application/views/".$content_view;
		//include "application/views/main_view.php";
	}
}