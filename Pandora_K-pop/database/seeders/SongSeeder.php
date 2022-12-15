<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('songs')->insert([
            'youtube_link'=>'https://www.youtube.com/watch?v=SPYX2y4NzTU',
            'mv_image'=>'/images/loona pic 3.webp',
            'group'=>'LOONA',
            'title'=>'Flip That'
        ]);
    }
}
