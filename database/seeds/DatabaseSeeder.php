<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        $faker = Faker\Factory::create();
        foreach (range(1,50) as $index){
            DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('tes')
            ]);
            DB::table('dokter')->insert([
                'name'=> $faker->name,
                'tipe_dokter' => $faker->randomDigit,
                'jadwalawal'=>$faker->time('H:i:s',$max = 'now'),
                'jadwalakhir'=>$faker->time('H:i:s',$max = 'now'),
                'keahlian'=>Str::random('10')
            ]);
        }
    }
}
