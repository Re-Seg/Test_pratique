<?php

namespace App\Http\Controllers;

class lists extends Controller
{
    public function list_impl() {
        if (isset($_GET['city'])) {
            $city = $_GET['city'];
            $resultat = \App\Models\city::all();
            foreach($resultat as $keys=> $value) {
                if (strcmp($resultat[$keys]['city'], $city)){
                    $a=1;
                    $tab = ["0"];
                    $idCountry = $resultat[$keys]['country_id'];
                    while($a<6) {
                        $country = \App\Models\country::find($idCountry);
                        $country = $country['country'];
                        $tab[]="city/$country/$city/$city$a.jpg";
                        $a++;
                    }
                    
                }
            }
            $tab[]= $city;
            return $tab;
        }else{
            $resultat = \App\Models\city::all();
            $city = $resultat[0]['city'];
            $a=1;
            $tab = ["0"];
            $idCountry = $resultat[0]['country_id'];
            while($a<6) {
                $country = \App\Models\country::find($idCountry);
                $country = $country['country'];
                $tab[]="city/$country/$city/$city$a.jpg";
                $a++;
            }
            $tab[]= $city;
            return $tab;
        }
    }
}
