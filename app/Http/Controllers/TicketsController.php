<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tickets;
use App\Models\Assets;
use App\Models\Client;
use App\Models\User;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ticket = Tickets::all();
        return view('home.ticket.index',compact('ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $assets = Assets::all();
        $client = Client::all();
        $user = User::all();
        return view('home.ticket.tambah',compact('assets','client','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Tickets::create([
            'no_tiket' => $request -> no_tiket,
            'kendala' => $request -> kendala,
            'detail_kendala' => $request -> detail_kendala,
            'id_assets' => $request -> id_assets,
            'id_user' => $request -> id_user,
            'id_client' => $request -> id_client,
            'status' => $request -> status,
            'priority' => $request -> priority,
            'penilaian' => $request -> penilaian,
            'jam_kerja' => $request -> jam_kerja,
            'estimated' => $request -> estimated,
            'updated_by' => $request -> updated_by,
        ]);
        return redirect('/ticket');
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
        $ticket = Tickets::find($id);
        $assets = Assets::all();
        $client = Client::all();
        $user = User::all();
        return view('home.ticket.edit',compact('ticket','assets','client','user'));
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
        $ticket = Tickets::find($id);
        $ticket->update([
            'no_tiket' => $request -> no_tiket,
            'kendala' => $request -> kendala,
            'detail_kendala' => $request -> detail_kendala,
            'id_assets' => $request -> id_assets,
            'id_user' => $request -> id_user,
            'id_client' => $request -> id_client,
            'status' => $request -> status,
            'priority' => $request -> priority,
            'penilaian' => $request -> penilaian,
            'jam_kerja' => $request -> jam_kerja,
            'estimated' => $request -> estimated,
            'updated_by' => $request -> updated_by,
        ]);
        return redirect('/ticket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ticket = Tickets::find($id);
        $ticket->delete();
        return redirect('/ticket');
    }
}
