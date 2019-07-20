<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicRoutes extends Controller{
  //Defining default route methods for the public sub-system
  public function home(){
    return view('/genHappiness/index');
  }

  public function search(){
    return view('/genHappiness/search');
  }

  public function about(){
    return view('/genHappiness/about');
  }

  public function faq(){
    return view('/genHappiness/faq');
  }

  public function legal(){
    return view('/genHappiness/legal');
  }

  public function contact(){
    return view('/genHappiness/contact');
  }

  public function tnc(){
    return view('/genHappiness/tc');
  }

}
