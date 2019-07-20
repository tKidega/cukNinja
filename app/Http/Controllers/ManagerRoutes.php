<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerRoutes extends Controller{

  // Defining default route methods for the cukNinja Manager sub-system
  public function manager(){
    return view('/manager/index');
  }

  public function managerHome(){
    return view('/manager/mgr_home');
  }

  public function managerGuest(){
    return view('/manager/mgr_guest_admin');
  }

  public function managerAdmin(){
    return view('/manager/mgr_site_admin');
  }

  public function superAdmin(){
    return view('/manager/mgr_super_admin');
  }
}
