<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Doctor;
use App\Models\Hospital;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //  $this->call([
        //     UserSeeder::class
        //  ]);

         Doctor::factory(5)->create();
         Hospital::factory(10)->create();

         $doctors = Doctor::all();
         foreach ($doctors as $doctor){
            $doctor->hospitals()->attach(
               Hospital::inRandomOrder()->take(rand(1,4))->pluck('id'),[
                'contract_start_date' => fake()->date(),
                'contract_end_date' => fake()->date(),
                'isPartTime' => rand(0,1)
               ]
            );
         }
    }
}
