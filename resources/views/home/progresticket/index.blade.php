@extends('layouts.master')
@section('title','halaman progres')
@section('content')




<div class="content-wrapper">
    <section class="content">

    <div class="row">
        <div class="col-12">
            <div class="card ">

           <div class="card-body">
           <h4 class="card-title">halaman progres
            <a href="/progres/tambah" class="btn btn-primary">Tambah Data</a>
        </h4>
                <table class="table  table-responsive">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Ticket</th>
                            <th>Tanggal Tindakan</th>
                            <th>Tindakan</th>
                            <th>Tindakan Lama</th>
                            <th>Updated By</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($progres as $p)


                        <tr class="">
                            <td scope="row">{{$p->id}}</td>
                            <td>{{$p->Tickets->no_ticket}}</td>
                            <td>{{$p->tgl_tindakan}}</td>
                            <td>{{$p->tindakan}}</td>
                            <td>{{$p->tindakan_lama}}</td>
                            <td>{{$p->updated_by}}</td>
                            <td>
                                <a href="/progres/{{$p->id}}/edit" class="btn btn-warning" >Edit</a>
                                <a href="/progres/{{$p->id}}/hapus" class="btn btn-danger" onclick="return('yakin data mau di hapus')">Hapus</a>
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
