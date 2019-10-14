<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;
use App\KategoriBerita;
class BeritaController extends Controller
{
	public function index(){
    //Eloquent => ORM (Object Relational Mapping)
    $listBerita=Berita::all(); //select*from berita

    //blade
    return view('berita.index', compact('listBerita'));
    //return view(view: 'berita.index')->with('data',$listArtikel);
	}
	public function show($id){

		//$Berita=Berita::where('id',$id)->first();
		$listBerita=Berita::find($id);

		return view ('berita.show', compact('listBerita'));
	}
	public function create(){

		$KategoriBerita= KategoriBerita::pluck('nama','id');
	
		return view('berita.create',compact('KategoriBerita'));
	}

	public function store(Request $request){
		$input=$request->all();

		Berita::create($input);

		return redirect(route('berita.index'));
	}

	public function edit($id){
		$listBerita=Berita::find($id);

		if(empty($listBerita)){
			return redirect(route('berita.index'));
		}
		$KategoriBerita=KategoriBerita::pluck('nama','id');
		return view('berita.edit',compact('listBerita','KategoriBerita'));
	}

	public function update($id, Request $request){
		$listBerita=Berita::find($id);
		$input= $request->all();

		if(empty($listBerita)){
			return redirect(route('berita.index'));
		}

		$listBerita->update($input);

		return redirect(route('berita.index'));
	}

	public function destroy($id){
		$listBerita=Berita::find($id);

		if(empty($listBerita)){
			return redirect(route('berita.index'));
		}

		$listBerita->delete();
		return redirect(route('berita.index'));
	}

}