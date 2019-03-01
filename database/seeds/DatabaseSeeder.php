<?php

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
        $faker = Faker\Factory::create();
        DB::table('admins')->insert([
            'username' => 'admin',
            'password' => bcrypt('admin')
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Abdurahman",
            'tipe_dokter' => "1",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'keahlian' => "Specialist Jantung"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Sultan Hamid",
            'tipe_dokter' => "2",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'keahlian' => "Specialist Hati"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Susanti",
            'tipe_dokter' => "1",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'keahlian' => "Specialist Anak"
        ]);
//        foreach (range(1,50) as $index){
//            DB::table('dokter')->insert([
//                'name'=> $faker->name,
//                'tipe_dokter' => $faker->randomDigit,
//                'jadwalawal'=>$faker->time('H:i:s',$max = 'now'),
//                'jadwalakhir'=>$faker->time('H:i:s',$max = 'now'),
//                'keahlian'=>Str::random('10')
//            ]);
//        }
    }
}
