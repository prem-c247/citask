<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show_currency_exchage extends CI_Controller {

    
    public function __construct() {        
        parent::__construct();
    }
	public function index($amount=null,$to_currency=null){

        if(!empty($amount) && !empty($to_currency)){
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => "https://api.apilayer.com/exchangerates_data/convert?to=$to_currency&from=EUR&amount=$amount",
                CURLOPT_HTTPHEADER => array(
                    "Content-Type: text/plain",
                    "apikey: Tch232GfdZd7H7DOY07iFOIEElSEB22c"
                ),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET"
                ));

                $response = curl_exec($curl);
                curl_close($curl);
            $result['currency_data'] = json_decode($response);
            $this->load->view('show_rate_currency',$result);
        }else{
            $result['currency_data'] = null;
            $this->load->view('show_rate_currency',$result);
        }
    }
}

?>