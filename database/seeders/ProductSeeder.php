<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create('id_ID');
        #product1
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Buket Bunga';
        $p->price = 4500000;
        $p->save();
        #product2
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Buket Uang';
        $p->price = 2000;
        $p->save();
        #product3
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Buket Snack';
        $p->price = 7500000;
        $p->save();
        #product4
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Buket Pengantin';
        $p->price = 25000;
        $p->save();
        #product5
        $p = new Product();
        $p->barcode = $faker->numerify('######');
        $p->name = 'Buket Wisuda';
        $p->price = 15000;
        $p->save();
        #php artisan db:seed --class=ProductSeeder
    }
}

