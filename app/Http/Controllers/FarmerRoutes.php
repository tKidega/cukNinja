<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FarmerRoutes extends Controller{
  // Defining route methods for the Famers sub-system
  public function farmerLogin(){
    return view('/farmer/index');
  }

  public function farmerHome(){
    return view('/farmer/farm_home');
  }

  public function farmerGuest(){
    return view('/farmer/farm_guest');
  }

  public function farmerAgent(){
    return view('/farmer/farm_agent');
  }

  public function farmerAdmin(){
    return view('/farmer/farm_admin');
  }
}
