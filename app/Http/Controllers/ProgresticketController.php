<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Progresticket;
use App\Models\Tickets;

class ProgresticketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $progres = Progresticket::all();
        return view('home.progresticket.index',compact('progres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticket = Tickets::all();
        return view('home.progresticket.tambah',compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Progresticket::create([
            'id_ticket'=> $request -> id_ticket,
            'tgl_tindakan'=> $request -> tgl_tindakan,
            'tindakan'=> $request -> tindakan,
            'tindakan_lama'=> $request -> tindakan_lama,
            'updated_by'=> $request -> updated_by,
        ]);
        return redirect('/progresticket');
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
