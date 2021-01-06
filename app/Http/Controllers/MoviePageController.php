<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\ContactUs;
class MoviePageController extends Controller
{
  public function home(){
    $categories = Category::paginate(3);
    return view('welcome',compact('categories'));
  }
  public function detail($id){
    $category = Category::findOrFail($id);
    return view('detail',compact('category')); 
  }
  public function aboutUs(){
      return view('aboutUs');
  }
  public function contactUs(){
      return view('contactUs');
  }
  public function saveContactUs(Request $request){
    $contact_us = new ContactUs;
    $contact_us->email = $request->email;
    $contact_us->message = $request->message;
    $contact_us->save();

  }
 
 
}