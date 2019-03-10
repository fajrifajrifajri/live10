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
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "1",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Sultan Hamid",
            'tipe_dokter' => "2",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "2",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Susanti",
            'tipe_dokter' => "1",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "3",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Siparman",
            'tipe_dokter' => "1",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "1",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Ramah",
            'tipe_dokter' => "2",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "1",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Drs. Susanto",
            'tipe_dokter' => "1",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "3",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Budiarjo",
            'tipe_dokter' => "1",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "2",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Antonius",
            'tipe_dokter' => "2",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "2",
            'gambardokter'=>"asd.jpg"
        ]);
        DB::table('dokter')->insert([
            'nama' => "Dr. Wahid Bahyu",
            'tipe_dokter' => "1",
            'jamawal' => "12:00:00",
            'hari'=>rand(1,7),
            'jamakhir' => "21:00:00",
            'specialist' => "3",
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
        DB::table('janji_pasien')->insert([
//            "kode-janji"=>"Janji-0001",
//            "kode-antrian"=>"0001",
            "notelp"=>"0812xxxxxxx",
            "email"=>"ericanthonywu89@gmail.com",
            "nama_pasien"=>"Jono",
            "tgllahir_pasien"=>"2001-09-08",
            "nama_dokter"=>"Jono Wongso",
            "harga"=>"10000",
            "tgl_bertemu"=>"2019-10-08"
        ]);
        DB::table('jadwal_dokter')->insert([
            "hari"=>"Senin",
            "jam"=>"2230",
            "nama_dokter"=>"Sugiono"
        ]);
        DB::table('list_dokter')->insert([
            "nama_dokter"=>"Senin",
            "spesialis"=>"2230",
            "foto"=> $faker->imageUrl($width = 640, $height = 480, 'cats')
        ]);
//        foreach (range(1,50) as $index){
//            DB::table('dokter')->insert([
//                'name'=> $faker->name,
//                'tipe_dokter' => $faker->randomDigit,
//                'jamawal'=>$faker->time('H:i:s',$max = 'now'),
//                'jamakhir'=>$faker->time('H:i:s',$max = 'now'),
//                'keahlian'=>Str::random('10')
//            ]);
//        }
    }
}
