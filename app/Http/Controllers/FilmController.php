<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class FilmController extends Controller
{
    public function index(Request $request)
    {
        if($request->has("cari")){
            $film = Film::where("judul","LIKE","%$request->cari%")->orderby("judul","Asc");
        }else{
            $film = Film::orderby("judul","Asc");
        }
        $film = $film->paginate(10);
        $film->appends($request->only("cari"));
        return view("film.index",compact("film"));
    }

    public function creating(Request $request)
    {
        Film::create($request->all());
        return redirect("/film")->with('success',"Data Berhasil disimpan.");
    }
    
    public function delete($id)
    {
        $film = Film::find($id);
        $film->delete();
        return redirect("/film")->with('success',"Data Berhasil dihapus.");
    }

    public function update($id)
    {
        $film = Film::find($id);
        return view("film.update",compact("film"));
    }

    
    public function updating(Request $request,$id)
    {
        $film = Film::find($id);
        $film->update($request->all());
        return redirect("/film")->with('success',"Data Berhasil update.");
    }
}