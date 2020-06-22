<?php 
namespace App\Helpers\Partners;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;


class APIDuLieu{
    const BaseUri = "https://ibe.vemaybay.vn/";
    public static function searchFlight($DomesticDatas){
        $Client = new Client([
            'base_uri' => self::BaseUri,
            'timeout'  => 120,
        ]);
        $res = $Client->request("POST", "flights/searchflight", [
            "form_params" => $DomesticDatas
        ]);
        $resOb = json_decode($res->getBody());
        return $resOb;
    }
    
}