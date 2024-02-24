<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $faker = Faker::create();   //$faker은 자동 생성 안되니깐 use Faker\Factory as Faker; 추가 해줘야한다.
        // foreach(range(1,100)as $index){   // 더미데이터 100개 만드는법..한가지.

        //}


        for($i = 0; $i < 100; $i++) {
            DB::table('posts')->insert([
                'subject' => $faker->sentence(5),
                'content' => $faker->paragraph(7),
                'email' => $faker->email(),
                'name' => $faker->name()
            ]);                
        }

       
    }
}
