@extends('layouts.master')
@section('title','halaman agent')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Tambah Data agent</div>
           <hr>
            <form action="/agent/simpan" method="POST">
                @csrf
           <div class="form-group">
            <label for="input-1">Nik</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Nik" name="nik" required>
           </div>
           <div class="form-group">
            <label for="input-2">Nama</label>
            <input type="text" class="form-control" id="input-2" placeholder="Enter Your name" name="nama">
           </div>
           <div class="form-group">
            <label for="input-4">Location</label>
            <select name="id_location" id="" class="form-control">
                @foreach ($location as $location)
                <option value="{{$location->id}}">{{$location->nama_lokasi}}</option>
                @endforeach
            </select>
           </div>
           <div class="form-group">
            <label for="input-5">Total Ticket</label>
            <input type="number" class="form-control" id="input-5" placeholder="Confirm Password" name="total_ticket">
           </div>
           <div class="form-group">
            <label for="input-5">Total Kategori Ticket</label>
            <input type="number" class="form-control" id="input-5" placeholder="Confirm Password" name="total_kategori_ticket">
           </div>
           <div class="form-group">
            <label for="input-5">Total Solved Time</label>
            <input type="number" class="form-control" id="input-5" placeholder="Confirm Password" name="total_solved_time">
           </div>
           <div class="form-group">
            <label for="input-5">Rate</label>
            <input type="number" class="form-control" id="input-5" placeholder="Confirm Password" name="rate">
           </div>
           <div class="form-group">
            <label for="input-5">Status</label>
          <select name="status" id="" class="form-control">
            <option value="working">Working</option>
            <option value="idle">Idle</option>
          </select>
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
