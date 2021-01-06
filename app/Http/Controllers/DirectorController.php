<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;
class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directors = Director::paginate(3);
        return view('admin.director.index',compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.director.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $directors = new Director;
            $directors->name = $request->name;
            $directors->description = $request->description;
            $directors->save();
            return redirect('admin/director');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $directors = Director::findOrFail($id);
     return view('admin.director.show',compact('directors'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $directors = Director::findOrFail($id);
        return view('admin.director.edit',compact('directors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $driectors = Director::findOrFail($id);
        $driectors->name = $request->name;
        $driectors->description = $request->description;
        $driectors->save();
        return redirect()->route('director.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $directors = Director::findOrFail($id);
    $directors->delete();
    return redirect('admin/director');
    }
}
