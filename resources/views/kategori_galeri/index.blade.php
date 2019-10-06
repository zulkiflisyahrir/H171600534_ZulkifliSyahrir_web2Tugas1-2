@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Galeri</div>
                <div class="card-body">
                    <a href="{!! route('kategori_galeri.create') !!}" class="btn btn-primary">Tambah Data</a>
                   <table border="1">
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       

                        @foreach( $listKategoriGaleri as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->nama !!}</td>
                            <td>{!! $item->users_id !!}</td> 
                            <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                            <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                        <a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
                        </td>
                        </tr>                        
                        @endforeach
                    </tbody>
                </table>
        @endsection