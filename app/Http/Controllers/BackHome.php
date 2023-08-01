<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackHome extends Controller
{
  public function home ()
  {
      return view('back.pages.home');
  }
}
