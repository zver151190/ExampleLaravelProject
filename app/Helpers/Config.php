<?php 

namespace App\Helpers;

class Config
{
	public $store_rate = 10;
	public $marketplaces = [	"yahooshopping" => array("id" => "yahooshopping", "title" => "Yahoo Shopping"),
								"yahooauctions" => array("id" => "yahooauctions", "title" => "Yahoo Auctions"),
								"rakuten"		=> array("id" => "rakuten", "title" => "Rakuten"),
								"amazon"		=> array("id" => "amazon", "title" => "Amazon"),
							];
}