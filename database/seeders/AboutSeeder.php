<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Abouts')->insert([
            [
                "competence" => "HTML/CSS",
                "level" => "99",
                "created_at" => now()
            ],
            [
                "competence" => "JAVASCRIPT",
                "level" => "70",
                "created_at" => now()
            ],
            [
                "competence" => "REACT",
                "level" => "60",
                "created_at" => now()
            ],
            [
                "competence" => "LARAVEL",
                "level" => "60",
                "created_at" => now()
            ],
            [
                "competence" => "ADOBE SUITE",
                "level" => "70",
                "created_at" => now()
            ],
        ]);
    }
}
