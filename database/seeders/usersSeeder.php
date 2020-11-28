<?php

namespace Database\Seeders;

use App\Models\Tipo_usuario;
use App\Models\User;
use Illuminate\Database\Seeder;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        user::create([
            'ap_paterno' => 'Mendez',
            'ap_materno' => 'garcia',
            'name' => 'Juan',
            'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Aspirante')->value('id'),
            'email' => 'qwert@gmail.com',
            'password' => bcrypt('1q2w3e4r5t'),
        ]);
        user::create([
            'ap_paterno' => 'Aviles',
            'ap_materno' => 'Mendoza',
            'name' => 'Pedro',
            'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Docente')->value('id'),
            'email' => 'trewq@gmail.com',
            'password' => bcrypt('!Q2w3e4r5t'),
        ]);
        user::create([
            'ap_paterno' => 'Uribe',
            'ap_materno' => 'Chapo',
            'name' => 'Eduardo',
            'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Alumno')->value('id'),
            'email' => 'qazxsw@gmail.com',
            'password' => bcrypt('5t4r3e2w1q'),
        ]);
        user::create([
            'ap_paterno' => 'Castruita',
            'ap_materno' => 'Rosas',
            'name' => 'Erick',
            'id_tipo_usuario' => Tipo_usuario::where('tipo_usuario', 'Administrador')->value('id'),
            'email' => 'erick@gmail.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
