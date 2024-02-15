@extends('layouts.master')
@section('title','halaman agent')
@section('content')




<div class="content-wrapper">
    <section class="content">

    <div class="row">
        <div class="col-12">
            <div class="card ">

           <div class="card-body">
           <h4 class="card-title">halaman agent
            <a href="/agent/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Nik</th>
                            <th>Nama</th>
                            <th>Location</th>
                            <th>Total Ticket</th>
                            <th>Total Kategori Ticket</th>
                            <th>Total Solved Time</th>
                            <th>Rate</th>
                            <th>Status</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agent as $a)


                        <tr class="">
                            <td scope="row">{{$a->id}}</td>
                            <td>{{$a->nik}}</td>
                            <td>{{$a->nama}}</td>
                            <td>{{$a->Locations->nama_lokasi}}</td>
                            <td>{{$a->total_ticket}}</td>
                            <td>{{$a->total_kategori_ticket}}</td>
                            <td>{{$a->total_solved_time}}</td>
                            <td>{{$a->rate}}</td>
                            <td>{{$a->status}}</td>
                            <td>{{$a->updated_by}}</td>
                            <td>
                                <a href="/agent/{{$a->id}}/edit" class="btn btn-warning" >Edit</a>
                                <a href="/agent/{{$a->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>



         </div>
        </section>

         </div>
         </div>
         </div>
      </div>
      @endsection
