@extends('Layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ubah Pengumuman</div>

                    <div class="card-body">
                        {!! Form::model($listPengumuman, ['route' => ['pengumuman.update', $listPengumuman->id], 'method' => 'patch']) !!}
                            @include('pengumuman.form')
                            {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection