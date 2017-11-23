<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //get homepage
    public function getHomePage(){
      
    return view('home');

    }
       //get about
    public function getAboutPage(){
      
    return view('about');

    }
       //get homepage
    public function getContactPage(){
      
    return view('contact');

    }
       //get homepage
    public function getMessagePage(){
      
    return view('messages');

    }
}
