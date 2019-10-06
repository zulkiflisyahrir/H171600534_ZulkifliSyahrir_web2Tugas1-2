@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20">
            <div class="card">
                <div class="card-header">Berita</div>
                <div class="card-body">
                    <a href="{!! route('berita.create') !!}" class="btn btn-primary">Tambah Data</a>
                   <table border="1">
                <div class="card-body">
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Isi</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Update</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       

                        @foreach( $listBerita as $item)
                        <tr>
                            <td>{!! $item->id !!}</td>
                            <td>{!! $item->judul !!}</td>
                            <td>{!! $item->isi !!}</td>
                            <td>{!! $item->users_id !!}</td> 
                            <td>{!! $item->created_at->format('d/m/Y H:i:s') !!}</td>
                            <td>{!! $item->updated_at->format('d/m/Y H:i:s') !!}</td>
                        <td>
                        <a href="{!! route('berita.show',[$item->id]) !!}" class="btn btn-sm btn-success">Lihat</a>
                        </td>
                        </tr>                        
                        @endforeach
                    </tbody>
                </table>
        @endsection