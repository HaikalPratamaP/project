<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agent;
use App\Models\Locations;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = Agent::all();
        return view('home.agent.index',compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $location = Locations::all();
        return view('home.agent.tambah',compact('location'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Agent::create([
            'nik' => $request -> nik,
            'nama'=> $request -> nama,
            'id_location'=> $request -> id_location,
            'total_ticket'=> $request -> total_ticket,
            'total_kategori_ticket'=> $request -> total_kategori_ticket,
            'total_solved_time'=> $request -> total_solved_time,
            'rate'=> $request -> rate,
            'status'=> $request -> status,
            'updated_by'=> $request -> update_by,
        ]);
        return redirect('/agent');
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
        $agent = Agent::find($id);
        $location = Locations::all();
        return view('home.agent.edit',compact('agent','location'));
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
        $agent = Agent::find($id);
        $agent->update([
            'nik' => $request -> nik,
            'nama'=> $request -> nama,
            'id_location'=> $request -> id_location,
            'total_ticket'=> $request -> total_ticket,
            'total_kategori_ticket'=> $request -> total_kategori_ticket,
            'total_solved_time'=> $request -> total_solved_time,
            'rate'=> $request -> rate,
            'status'=> $request -> status,
            'updated_by'=> $request -> update_by,
        ]);
        return redirect('/agent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agent = Agent::find($id);
        $agent->delete();
        return redirect('/agent');
    }
}
