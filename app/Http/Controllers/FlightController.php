<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    //
    public function store(Request $request)
{
    $flight = new Flight;
    $flight->name ="Banyuwangi to lombok";
    $flight->airline ="Merpati Air";
    $flight->departure ="Banyuwangi International Airport";
    $flight->destination ="Lombok International Airport";
    $flight->price ="200000";
    if($flight->save()){
        return "data telah tersimpan";    
}
}
}