<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Work')->insert([
            [
                "title" => "REACT",
                "datum" => "14/08/21",
                "created_at" => now()
            ],
            [
                "title" => "LARAVEL",
                "datum" => "14/08/21",
                "created_at" => now()
            ],
            [
                "title" => "LOGO",
                "datum" => "14/08/21",
                "created_at" => now()
            ],
        ]);
    }
}
