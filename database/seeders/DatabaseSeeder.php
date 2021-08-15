<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $faker = Faker::create();

    	foreach (range(1,10) as $index) {
            DB::table('productos')->insert([
                'sku' => $faker->randomNumber(),
                'nombre' => $faker->word(),
                'cantidad' => $faker->numberBetween(1, 20),
                'precio' => $faker->numberBetween(10, 500),
                'descripcion' => $faker->text(),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
