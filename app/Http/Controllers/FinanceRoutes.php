<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceRoutes extends Controller{
  // Defining Finance sub-sytem route methods
  public function vslaLogin(){
    return view('/finance/index');
  }

  public function vslaHome(){
    return view('/finance/vsla_home');
  }

  public function vslaUser(){
    return view('/finance/vsla_user');
  }

  public function vslaAdmin(){
    return view('/finance/vsla_admin');
  }

  public function vslaSiteAdmin(){
    return view('/finance/site_admin');
  }

}
