<?php

namespace App\Http\Controllers;

use App\Models\Peliculas;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Response;

class PeliculaController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $peliculas = Peliculas::all();
        return view("peliculas.index", compact("peliculas"));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $pelicula = new Peliculas;
        $title = __("Crear pelicula");
        $textButton = __("Crear");
        $route = route("pelicula.store");
        //dd($route);
        return view("pelicula.create", compact("title", "textButton", "route", "pelicula"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "nombre" => "required",
            "genero" => "required",
            "director" => "required",
            "año" => "required",
            "duracion" => "required",
            
        ]);

        Peliculas::create($request->only('nombre','genero','director','año','duracion'));

        return redirect(route("peliculas.index"))
            ->with("success", __("Pelicula creada!"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Peliculas  $pelicula
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Peliculas $pelicula)
    {
        $update = true;
        $title = __("Editar pelicula");
        $textButton = __("Actualizar");
        $route = route("peliculas.update", ["pelicula" => $pelicula]);
        return view("peliculas.edit", compact("update", "title", "textButton", "route", "pelicula"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Peliculas  $pelicula
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Peliculas $pelicula)
    {
        $this->validate($request, [
            "name" => "required|unique:peliculas,name," . $pelicula->id,
            "description" => "nullable|string|min:10"
        ]);
        $pelicula->fill($request->only("name", "description"))->save();
        return back()->with("success", __("¡Pelicula actualizada!"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Peliculas  $pelicula
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Peliculas $pelicula)
    {
        $pelicula->delete();
        return back()->with("success", __("¡Pelicula eliminada!"));
    }
}
