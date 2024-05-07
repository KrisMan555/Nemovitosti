<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountySeeder extends Seeder
{
    public function run(): void
    {
        $counties = [
            ['name' => 'Hlavní město Praha'],
            ['name' => 'Středočeský kraj'],
            ['name' => 'Jihočeský kraj'],
            ['name' => 'Plzeňský kraj'],
            ['name' => 'Karlovarský kraj'],
            ['name' => 'Ústecký kraj'],
            ['name' => 'Liberecký kraj'],
            ['name' => 'Královéhradecký kraj'],
            ['name' => 'Pardubický kraj'],
            ['name' => 'Vysočina'],
            ['name' => 'Jihomoravský kraj'],
            ['name' => 'Olomoucký kraj'],
            ['name' => 'Zlínský kraj'],
            ['name' => 'Moravskoslezský kraj'],
        ];

        DB::table('locations_counties')->insert($counties);
    }
}
