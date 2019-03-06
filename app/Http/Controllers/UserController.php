<?php

namespace App\Http\Controllers;

use \App\User as User;
use Illuminate\Http\Request;

class UserController extends Controller
{

  public function deleteOne(Request $request)
  {
    User::destroy($request->input('id'));
    return redirect('/users')
    ->with('success','L\'utilisateur a été supprimé avec success !');
  }
}
