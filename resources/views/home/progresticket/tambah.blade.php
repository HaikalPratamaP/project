@extends('layouts.master')
@section('title','halaman progres')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data progres</div>
           <hr>
            <form action="/progres/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Ticket</label>
            <select name="id_ticket" id="" class="form-control">
                @foreach ($ticket as $ticket)
                <option value="{{$ticket->id}}">{{$ticket->no_ticket}}</option>
                @endforeach
            </select>
           </div>
           <div class="form-group">
            <label for="input-2">Tanggal Tindakan</label>
            <input type="date" class="form-control" id="input-2" placeholder="Enter Your name" name="tgl_tindakan">
           </div>
           <div class="form-group">
            <label for="input-5">Tindakan</label>
            <input type="text" class="form-control" id="input-5" placeholder="Confirm Password" name="tindakan">
           </div>
           <div class="form-group">
            <label for="input-5">Tindakan Lama</label>
            <input type="text" class="form-control" id="input-5" placeholder="Confirm Password" name="tindakan_lama">
           </div>
           <div class="form-group">
            <label for="input-5">Updated By</label>
            <input type="text" class="form-control" id="input-5" placeholder="Confirm update" name="updated_by">
           </div>

           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i>Submit</button>
            <button type="reset" class="btn btn-light px-5"><i class="icon-lock"></i>reset</button>
          </div>
          </form>
         </div>
         </div>
      </div>
      @endsection
