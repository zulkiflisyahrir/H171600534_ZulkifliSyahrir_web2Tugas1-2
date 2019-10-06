@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Galeri</div>
                <div class="card-body">
                    <a href="{!! route('galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                   <table border="1">
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Path</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       

                        @foreach( $listGaleri as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->keterangan !!}</td>
                            <td>{!! $item->path !!}</td>
                            
                            <td>{!! $item->users_id !!}</td> 
                            <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                            
                        <td>
                        <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
                        </td>
                        </tr>                        
                        @endforeach
                    </tbody>
                </table>
        @endsection