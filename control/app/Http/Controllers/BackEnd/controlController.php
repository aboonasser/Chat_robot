<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\controll;
use Illuminate\Http\Request;
use App\Models\control;
use Auth;
use Input;
use DB;
class controlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calls = control::latest()->limit(1)->get();

        return view('FrontEnd.Call Database.Call_Database', compact('calls'));
    }
    public function call()
    {
        $shows = control::all();
        return view('FrontEnd.Call Database.call_all', compact('shows'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('BackEnd.Database.Create_data');

    }
    public function arm()
    {
        return view('BackEnd.Database.arm');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        control::create([
            "Name"=>Auth::user()->name,
            "Direction"=>$request->Direction,



        ]);
        $calls = control::latest()->limit(1)->get();

        return view('FrontEnd.Call Database.Call_Database', compact('calls'));
        return view('BackEnd.Database.Massege');


        //return view('BackEnd.Database.Massege');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
