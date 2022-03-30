<?php

namespace App\Http\Controllers\Admin\Peliculas;

use App\Models\Peliculas;
use App\Http\Controllers\Controller;
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
        return view("admin.peliculas.index", compact("peliculas"));
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
        $route = route("admin.peliculas.store");
        //dd($route);
        return view("admin.peliculas.create", compact("title", "textButton", "route", "pelicula"));
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

        return redirect(route("admin.peliculas.index"))
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
        $route = route("admin.peliculas.update", ["pelicula" => $pelicula]);
        return view("admin.peliculas.edit", compact("update", "title", "textButton", "route", "pelicula"));
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
            "nombre" => "required",
            "genero" => "required",
            "director" => "required",
            "año" => "required",
            "duracion" => "required",


        ]);
        $pelicula->fill($request->only("nombre", "genero","director","año","duracion"))->save();
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
