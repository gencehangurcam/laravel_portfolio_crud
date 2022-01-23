<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Services')->insert([
            [
                "title" => "WEB DEV",
                "icone" => "code-working",
                "description" => "our services is avalaible",
                "created_at" => now()
            ],
            [
                "title" => "MARKETING",
                "icone" => "monitor",
                "description" => "We create your visibility",
                "created_at" => now()
            ],
            [
                "title" => "COMMUNITY",
                "icone" => "android-phone-portrait",
                "description" => "a following up for you site",
                "created_at" => now()
            ],
        ]);
    }
}
