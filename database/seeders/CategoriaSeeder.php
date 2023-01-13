<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categoriaEvento;


class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $nombreCategoria=["Concierto","Teatro","Exposicion","Danza","Conferencia","Bertsolarismo","Feria","Audiovisual","Formacion","Concursos","Festivales","ActividadesNinios","Fiestas","Otros"];
        $categorias= new categoriaEvento;
        

    }
    
}
