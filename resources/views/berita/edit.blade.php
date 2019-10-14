@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Berita</div>

                    <div class="card-body">
                        {!! Form::model($listBerita, ['route' => ['berita.update', $listBerita->id], 'method' => 'patch']) !!}
                            @include('berita.form')
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection