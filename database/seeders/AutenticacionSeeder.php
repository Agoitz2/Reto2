<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\autenticacion;


class AutenticacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user= new autenticacion;
        $user->usuario="legadilo";
        $user->nombre="Leire";
        $user->apellido="Garmendia";
        $user->email="leire@gmail.com";
        $user->contrasena=encrypt('12345');
        $user->save();
        $user2= new autenticacion;
        $user2->usuario="legadilo2";
        $user2->nombre="Leire";
        $user2->apellido="Garmendia";
        $user2->email="leire2@gmail.com";
        $user2->contrasena=encrypt('12345');
        $user2->save();

    }
}
