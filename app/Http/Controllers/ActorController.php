<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
class ActorController extends Controller
{
  public function index(){
      $actors = Actor::paginate(3);
      return view('admin.actor.index',compact('actors'));
  }
  public function create(){
    return view ('admin.actor.create');
  }
  public function store(Request $request){
    $actors = new Actor;
    $actors->name = $request->name;
    $actors->description = $request->description;
    $actors->save();
    return redirect('admin/actor/index');
  }
  public function edit($id){
   $actors = Actor::findOrFail($id);
    return view('admin.actor.edit',compact('actors'));
  }
  public function update(Request $request,$id){
    $actors = Actor::findOrFail($id);
    $actors->name = $request->name;
    $actors->description = $request->description;
    $actors->save();
    return redirect('admin/actor/index');
  }
  public function delete($id){
    $actors = Actor::findOrFail($id);
    $actors->delete();
    return redirect('admin/actor/index');
  }
  public function show($id){
    $actors = Actor::findOrFail($id);
     return view('admin.actor.show',compact('actors'));
  }


}
