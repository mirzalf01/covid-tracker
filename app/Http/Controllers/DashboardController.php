<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function api($url){
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, true);
        return $result;
    }
    public function index(){
        $indonesia = $this->api('https://api.kawalcorona.com/indonesia/');
        $provinsi = $this->api('https://api.kawalcorona.com/indonesia/provinsi/');
        /* Global Data */
        /* $global = $this->api('https://api.kawalcorona.com/');
        $globalPositiv = $this->api('https://api.kawalcorona.com/positif/');
        $globalSembuh = $this->api('https://api.kawalcorona.com/sembuh/');
        $globalMeninggal = $this->api('https://api.kawalcorona.com/meninggal/');*/
        return view('index', ['indonesia'=>$indonesia, 'provinsi'=>$provinsi]);
    }
}
