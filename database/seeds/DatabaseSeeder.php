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
            'specialist' => "Jantung",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Sultan Hamid",
            'tipe_dokter' => "2",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Hati",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Susanti",
            'tipe_dokter' => "1",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Anak",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Siparman",
            'tipe_dokter' => "1",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Jantung",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Ramah",
            'tipe_dokter' => "2",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Jantung",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Drs. Susanto",
            'tipe_dokter' => "1",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Anak",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Budiarjo",
            'tipe_dokter' => "1",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Hati",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Antonius",
            'tipe_dokter' => "2",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Hati",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Wahid Bahyu",
            'tipe_dokter' => "1",
            'jadwalawal' => "2019-03-04",
            'jadwalakhir' => "2019-03-05",
            'specialist' => "Anak",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('specialist_dokter')->insert([
            'specialist'=>"Jantung"
        ]);
        DB::table('specialist_dokter')->insert([
            'specialist'=>"Hati"
        ]);
        DB::table('specialist_dokter')->insert([
            'specialist'=>"Anak"
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
