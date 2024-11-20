<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        php artisan make:seeder ProductoSeeder
        Producto::factory()->count(100)->create();
//        Run:
//        php artisan db:seed --class=ProductoSeeder
    }
}
