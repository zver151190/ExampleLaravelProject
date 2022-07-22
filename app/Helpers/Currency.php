<?php 

namespace App\Helpers;
use App\Helpers\Config;
use App\Models\Setting;

class Currency
{
	public $rates = [];
	public $currency = "₽";

	public function __construct(){
		$this->rates = $this->getExchangeRates();
	}


	public function getExchangeRates($fromCurrency="JPY"){

		//Check if we exist in database
		$exchange_rate = Setting::where('title',"exchange_rates")->first();
		if(isset($exchange_rate->value)){
			$rates = json_decode($exchange_rate->value,1);
			if(isset($rates['rates'])){
				//Check the rates date - if older than one date, generate new
				if(strtotime(date('Y-m-d', strtotime($rates['dt'] . " +1 day"))) > strtotime(date("Y-m-d H:i:s"))){
					return $rates;
				}
			}
		}

		//Make api call if rates are old or not found
		$this->currency.= "api call";
	  	$url = "https://v6.exchangerate-api.com/v6/e00d572a1a7549f32b011fea/latest/{$fromCurrency}";
	  	$curl = curl_init();
	    curl_setopt($curl, CURLOPT_URL,$url);
	    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
	    $out = curl_exec($curl);
	    curl_close($curl);
	    $out = json_decode($out,1);
	  	if(isset($out['conversion_rates'])){
	  		$rates = [];
	  		$rates['dt'] = date('Y-m-d H:i:s');
	  		$rates['rates'] = $out['conversion_rates'];
	  		return $rates;
	  	}
	  	return false;
	}

	public function convert($price,$fromCurrency="JPY",$toCurrency="RUB"){
	  	if(isset($this->rates['rates'][$toCurrency])){
	  		return floatval($price)*$this->rates['rates'][$toCurrency];
	  	}
	  	return $price;
	}

	public function price($price){
		$config = new Config();
		$price = $price + ($price/$config->store_rate);
		$price = $this->convert($price);
		$price = number_format($price,2);
		return $price." ".$this->currency;
	}
}

