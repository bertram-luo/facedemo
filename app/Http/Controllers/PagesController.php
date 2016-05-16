<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    //
  public function home(){
      $people= ['polo', 'nancy', 'sujuan']; 
      return view('welcone', compact('people'));
  }
  public function about(){
      return "About Page";
  }
}
