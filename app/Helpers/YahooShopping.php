<?php 

namespace App\Helpers;

use App\Helpers\Currency;

class YahooShopping
{
    public $API_KEY = "SOME CODE HERE";
    public $URL_itemSearch = 'https://shopping.yahooapis.jp/ShoppingWebService/V3/itemSearch?';
    public $URL_itemLookup = 'https://shopping.yahooapis.jp/ShoppingWebService/V1/json/itemLookup?';


    public function get_json(string $url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,$url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
        $rawjson = curl_exec($curl);
        curl_close($curl);
        if(json_decode($rawjson, true))  return json_decode($rawjson, true);
        return [];
    }

    public function getProducts($data=[]){
        $return = [];
        $results = $start = $appid = $category = $query = "";

        $category = NULL;
        $query    = NULL;

        
        if(isset($data["c"])) $category = "&genre_category_id=". $data["c"];

        if(!isset($data["q"]) && !isset($data["c"])) return "Не указана строка запроса";
        if(isset($data["q"])) $query    = "&query=".             $data["q"];

        if(isset($data['results_num'])) $results = "&results=". $data['results_num'];
        if(isset($data['start_pos']))   $start   = "&start=".   $data['start_pos'];
        $appid   = "&appid=".   $this->API_KEY;

        $url = "{$this->URL_itemSearch}{$appid}{$query}{$category}{$start}{$results}";
        $json = $this->get_json($url);

        if(isset($json["totalResultsAvailable"])){
            if($json["totalResultsAvailable"] > 0){
                $return = [];
                $currency = new Currency();
                foreach($json["hits"] as $key => $item){
                    $return["$key"]['id']     = $item["imageId"];
                    $return["$key"]['url']    = $item["url"];
                    $return["$key"]['title']  = $item["name"];
                    $return["$key"]['imgalt'] = $item["imageId"];
                    $return["$key"]['imgsrc'] = $item["image"]["medium"];
                    $return["$key"]['price']  = $currency->price($item["price"]);
                }
            }
        }
        return $return;
    }

    public function getProduct($id){
        $appid = "&appid=". $this->API_KEY;
        $itemId = "&itemcode=". $id;
        $datasize = '&responsegroup=large';

        $url = "{$this->URL_itemLookup}{$appid}{$datasize}{$itemId}";
        $json = $this->get_json($url);
        $result = [];
        $currency = new Currency();
        if(isset($json["ResultSet"][0]["Result"][0])){
            $item = $json["ResultSet"][0]["Result"][0];
            $result['id']             = $item["Code"];
            $result['url']            = $item["Url"];
            $result['title']          = $item["Name"];
            $result['headline']       = $item["Headline"];
            $result['condition']      = $item["Condition"];
            $result['description']    = $item["Description"];
            $result['Additional3']    = $item["Additional3"];
            $result['rating']         = $item["Review"]["Rate"];
            $result['imgalt']         = $item["Image"]["Id"];
            $result['imgsrc']         = $item["Image"]["Medium"];
            $result['price']          = $currency->price($item["Price"]["_value"]);     
            $result['currency']       = $item["Price"]["_attributes"]["currency"];// JPY
            $result['currfrom']       = $result['currency'];
            $result['currto']         = "RUB";
            $result['isbargain']      = $item["IsBargain"];
            $result['rating']         = $item["Review"]["Rate"];
            $result['ratingcount']    = $item["Review"]["Count"];
            $result['taxincluded']    = $item["PriceLabel"]["_attributes"]["taxIncluded"];
            $result['amount']         = $item["Inventories"][0]["Quantity"];
            if(isset($item["Payment"]) && is_array($item["Payment"])){
                foreach($item["Payment"] as $i => $k){
                    if(isset($k['Code'])) $result['paymentcode'.$i] = $k['Code'];
                    if(isset($k['Name'])) $result['paymentname'.$i] = $k['Name'];
                }
            }
            $result['shippingcode']   = $item["Shipping"]["Code"];
            $result['shippingname']   = $item["Shipping"]["Name"];
            $result['isadult']        = $item["IsAdult"];

            if(isset($item["category"])) $result['category'] = $item["category"];
            if(isset($item["ProductCategory"]["ID"])) $result['category']       = $item["ProductCategory"]["ID"];

            $result['relatedimages']  = [];

            if (isset($item["RelatedImages"]) && is_array($item["RelatedImages"])) {
                foreach($item["RelatedImages"] as $img){
                    if(isset($img["Id"])) $result["relatedimages"][] = array("src" => $img["Medium"], "id" => $img["Id"]);
                }
            }
            if ($item["Availability"] == 'instock') $result['instock'] = "да";
            else $result['instock'] = "нет";
        }
        return $result;
    }

}