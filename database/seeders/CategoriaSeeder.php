<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //php artisan make:seeder CategoriaSeeder
        Categoria::factory()->count(25)->create();

        //Run:
        // php artisan db:seed --class=CategoriaSeeder
    }
}
