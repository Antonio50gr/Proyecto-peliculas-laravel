@extends("layouts.app")

@section("content")
    <div class="flex justify-center flex-wrap bg-gray-200 p-4 mt-5">
        <div class="text-center">
            <h1 class="mb-5">{{ __("Listado de peliculas") }}</h1>
           
        </div>
    </div>

    <table class="border-separate border-2 text-center border-gray-500 mt-3" style="width: 100%">
        <thead>
        <tr>
            <th class="px-4 py-2">{{ __("Nombre") }}</th>
            <th class="px-4 py-2">{{ __("Genero") }}</th>
            <th class="px-4 py-2">{{ __("Director") }}</th>
            <th class="px-4 py-2">{{ __("Año") }}</th>
            <th class="px-4 py-2">{{ __("Duracion") }}</th>
        </tr>
        </thead>
        <tbody>
            @forelse($peliculas as $pelicula)
                <tr>
                    <td class="border px-4 py-2">{{ $pelicula->nombre }}</td>
                    <td class="border px-4 py-2">{{ $pelicula->genero }}</td>
                    <td class="border px-4 py-2">{{ $pelicula->director }}</td>
                    <td class="border px-4 py-2">{{ $pelicula->año }}</td>
                    <td class="border px-4 py-2">{{ $pelicula->duracion }}</td>
                
                    
                </tr>
            @empty
                <tr>
                    <td colspan="5">
                        <div class="bg-red-100 text-center border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <p><strong class="font-bold">{{ __("No hay peliculas") }}</strong></p>
                            <span class="block sm:inline">{{ __("Todavía no hay nada que mostrar aquí") }}</span>
                        </div>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>

 

@endsection
