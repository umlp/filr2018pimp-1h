<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SessionController extends Controller {
   public function doLogin(Request $request){
      $request->session()->put('utilisateur', 'Flavien Coçu');

      return Redirect::to('/');
   }
   public function doLogout(Request $request){
      $request->session()->forget('utilisateur');

      return Redirect::to('/');
   }
}
