<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Peliculas;

class PeliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelicula = Peliculas::create([
            'nombre' => 'El padrino',
            'genero' => 'Crimen/Drama',
            'director' => 'Francis Ford Coppola',
            'año' => '1972',
            'duracion' => '175',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Pulp Fiction',
            'genero' => 'Crimen/Drama',
            'director' => 'Quentin Tarantino',
            'año' => '1994',
            'duracion' => '153',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'La vida es bella',
            'genero' => 'Bélico/Drama',
            'director' => 'Roberto Benigni',
            'año' => '1997',
            'duracion' => '117',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Los siete samuráis',
            'genero' => 'Acción/Drama',
            'director' => 'Akira Kurosawa',
            'año' => '1954',
            'duracion' => '205 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Uno de los nuestros',
            'genero' => 'Crimen/Drama ',
            'director' => 'Martin Scorsese',
            'año' => '1990',
            'duracion' => '148 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Interstellar',
            'genero' => 'Ciencia ficción/Aventura',
            'director' => 'Christopher Nolan',
            'año' => '2014',
            'duracion' => '169 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'El renacido',
            'genero' => 'Wéstern/Aventura',
            'director' => 'Alejandro González Iñárritu',
            'año' => '2015',
            'duracion' => '156 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Sicario',
            'genero' => 'Suspenso/Crimen',
            'director' => ' Denis Villeneuve',
            'año' => '2015',
            'duracion' => '121 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Tiempos de gloria',
            'genero' => 'Bélico/Drama',
            'director' => ' Edward Zwick',
            'año' => '1989',
            'duracion' => '117',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'La gran apuesta',
            'genero' => 'Drama/Comedia dramática',
            'director' => ' Adam McKay',
            'año' => '2015',
            'duracion' => '123 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'La bruja',
            'genero' => 'Terror/Drama',
            'director' => ' Robert Eggers',
            'año' => '2015',
            'duracion' => '92  ',
            
        ]);


        $pelicula = Peliculas::create([
            'nombre' => 'Everest',
            'genero' => 'Aventura/Drama ',
            'director' => ' Baltasar Kormákur',
            'año' => '2015',
            'duracion' => '118   ',
            
        ]);

        
        $pelicula = Peliculas::create([
            'nombre' => 'Avatar',
            'genero' => 'Ciencia ficción/Acción  ',
            'director' => 'James Cameron',
            'año' => '2009',
            'duracion' => '161',
            
        ]);

      
        $pelicula = Peliculas::create([
            'nombre' => 'Titanic',
            'genero' => 'Romance/Drama',
            'director' => 'James Cameron',
            'año' => '1997',
            'duracion' => '195 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Lágrimas del sol',
            'genero' => 'Bélico/Acción',
            'director' => 'Antoine Fuqua',
            'año' => '2003',
            'duracion' => '121 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'Rescate al amanecer',
            'genero' => 'Bélico/Acción',
            'director' => 'Werner Herzog',
            'año' => '2006',
            'duracion' => '126 ',
            
        ]);

        $pelicula = Peliculas::create([
            'nombre' => 'El faro',
            'genero' => 'Terror/Drama',
            'director' => 'Robert Eggers',
            'año' => '2019',
            'duracion' => '110 ',
            
        ]);

   

    
    }
}
