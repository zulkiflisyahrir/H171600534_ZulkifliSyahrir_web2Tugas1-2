@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Artikel</div>

                <div class="card-body">
                   
                   <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">ID</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $listArtikel ->id !!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Judul</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $listArtikel ->judul !!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Kategori</label>
                        <label class="col-md-4 col-form-label text-md-left">{!! $listArtikel ->kategori_artikel_id!!}</label>
                      </div>

                      <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">Creat</label> 
                        <label class="col-md-4 col-form-label text-md-left">{!! $listArtikel ->created_at!!}</label>
                      </div>

                      <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                      <a href="{!! route('artikel.index')!!}" class="btn btn-primary">Back</a>
                    </div>
                  </div>
                </div>
              </div>
                </div>
            </div>
        </div>
@endsection

