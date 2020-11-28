<?php

namespace Database\Seeders;

use App\Models\Departamento;
use App\Models\Help_topic;
use Illuminate\Database\Seeder;

class help_topicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        help_topic::create([
            'help_topic' => 'Servicio escolar',
            'id_departamento' => Departamento::where('nom_departamento', 'Administración')->value('id')
        ]);
        help_topic::create([
            'help_topic' => 'Actividades extraescolares',
            'id_departamento' => Departamento::where('nom_departamento', 'Sistemas y computo')->value('id')
        ]);
        help_topic::create([
            'help_topic' => 'Servicio social',
            'id_departamento' => Departamento::where('nom_departamento', 'Titulación')->value('id')
        ]);
    }
}
