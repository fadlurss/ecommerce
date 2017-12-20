<?php

class Api extends CI_Controller {
	public function __construct() {
		parent:: __construct();
	}
	public function index() {
		$html = "";
		$prov = $this->rajaongkir->province();
		$prov = json_decode($prov);
		$html .= "<form action='' method='post'>"; 
		$html .= "<select name='prov'>"; 
		foreach ($prov->rajaongkir->results as $key => $value) {
			$html .="<option value='".$value->province_id."'>".$value->province."</option>";
		}
		$html .= "</select>";
		$cities = $this->rajaongkir->city();
		$cities = json_decode($cities);
		$html .= "<select name='city'>"; 
		foreach ($cities->rajaongkir->results as $key => $value) {
			$html .="<option value='".$value->city_id."'>".$value->city_name."</option>";
		}
		$html .= "</select>"; 
		$html .= "<input name='kg'/>"; 
		$html .= "<button type='submit'>Submit</button>";
		$html .= "</form>"; 
		if(isset($_POST["prov"])){
			$cost = $this->rajaongkir->cost(501, $_POST["city"], $_POST["prov"], "jne");
			echo $cost;
			$cost = json_decode($cost);
			$origin = $cost->rajaongkir->origin_details;
			$dst = $cost->rajaongkir->destination_details;
			$data = $cost->rajaongkir->results;
			$html .= "<div class='row'>";
			$html .= "<p>Provinsi Asal : ".$origin->province."</p>";
			$html .= "<p>Kota Asal : ".$origin->city_name."</p>";
			$html .= "<p>Provinsi Tujuan : ".$dst->province."</p>";
			$html .= "<p>Kota Tujuan : ".$dst->city_name."</p>";
			$html .= "<p>Harga Oke : ".$data[]->costs[0]->cost[0]->value."</p>";
			$html .= "</div>";
			//CARA COMBO BOX / SELECT OPTION
			$html .= "<select name=''>"; 
			//CARA MENGELUARKAN COMBO BOX
		}
		echo $html;

	}
}