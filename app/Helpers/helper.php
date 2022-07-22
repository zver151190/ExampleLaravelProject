<?php

use App\Helpers\Config;


function getMarketplaces(){
	$config = new Config();
	return $config->marketplaces;
}

function getActiveMarketplace(){
	$config = new Config();
	if(Session::get("store") == null){
		return reset($config->marketplaces)['id'];
	}else{
		if(in_array(Session::get("store"),$config->marketplaces)) return Session::get("store");
		else return reset($config->marketplaces)['id'];
	}
}

?>