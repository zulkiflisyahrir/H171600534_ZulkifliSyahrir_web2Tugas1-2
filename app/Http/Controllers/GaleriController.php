<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use App\KategoriGaleri;
class GaleriController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listGaleri=Galeri::all(); //select*from galeri

    //blade
    return view('galeri.index', compact('listGaleri'));
    //return view(view: 'galeri.index')->with('data',$listGaleri);
	}
	public function show($id){

		//$Galeri=Galeri::where('id',$id)->first();
		$listGaleri=Galeri::find($id);

		return view ('galeri.show', compact('listGaleri'));
	}
	public function create(){

		$KategoriGaleri= KategoriGaleri::pluck('nama','id');
	
		return view('galeri.create',compact('KategoriGaleri'));
	}

	public function store(Request $request){
		$input=$request->all();

		Galeri::create($input);

		return redirect(route('galeri.index'));
	}

}