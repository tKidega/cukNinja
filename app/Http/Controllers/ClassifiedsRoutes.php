<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassifiedsRoutes extends Controller{
  
  // Defining default route methods for the classifieds sub-system
  public function adverts(){
    return view('adverts/index');
  }

}
