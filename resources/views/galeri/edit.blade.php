@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Galeri</div>

                    <div class="card-body">
                        {!! Form::model($listGaleri, ['route' => ['galeri.update', $listGaleri->id], 'method' => 'patch']) !!}
                            @include('galeri.form')
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection