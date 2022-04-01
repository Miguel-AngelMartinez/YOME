<?php

namespace Database\Seeders;

use Illuminate\Database\Console\DbCommand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class videos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('videos')->insert([
            'title' => 'APRENDE LARAVEL 8 DESDE CERO EN MENOS DE 2 HRS',
            'description' => 'Descripcion del video 1',
            'video_url' => 'https://www.youtube.com/embed/a-4923Uyu54',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'title' => 'Cómo HACER un CRUD en laravel► 🎁 PASO A PASO, GRATIS y desde CERO',
            'description' => 'Este curso lo quería subir a UDEMY para cobrar, pero mejor lo subo a este canal, creo que ahí será de utilidad, fue mucho esfuerzo pero aquí lo tienen: 5 días arduos de trabajo en navidad para tener 2 horas y 37 minutos de video con temas para hacer un crud explicado paso a paso y desde cero',
            'video_url' => 'https://www.youtube.com/embed/9DU7WLZeam8',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('videos')->insert([
            'title'=>'Laravel para principiantes en programación | Ítalo Morales',
            'description'=>'Si tienes tuda de tu nueva suscripción. Escríbenos a team@platzi.com',
            'video_url' =>'https://www.youtube.com/embed/ficrunlHdZ4',
            'created_at' =>now(),
            'updated_at' =>now(),

        ]);
    }
}
